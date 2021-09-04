<?php


/**
 * Base class that represents a query for the 'r_custom_activites' table.
 *
 *
 *
 * @method RCustomActivitesQuery orderByActId($order = Criteria::ASC) Order by the act_id column
 * @method RCustomActivitesQuery orderByActLibelle($order = Criteria::ASC) Order by the act_libelle column
 * @method RCustomActivitesQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method RCustomActivitesQuery orderByOrd($order = Criteria::ASC) Order by the ord column
 *
 * @method RCustomActivitesQuery groupByActId() Group by the act_id column
 * @method RCustomActivitesQuery groupByActLibelle() Group by the act_libelle column
 * @method RCustomActivitesQuery groupByActif() Group by the actif column
 * @method RCustomActivitesQuery groupByOrd() Group by the ord column
 *
 * @method RCustomActivitesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RCustomActivitesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RCustomActivitesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RCustomActivitesQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method RCustomActivitesQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method RCustomActivitesQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method RCustomActivites findOne(PropelPDO $con = null) Return the first RCustomActivites matching the query
 * @method RCustomActivites findOneOrCreate(PropelPDO $con = null) Return the first RCustomActivites matching the query, or a new RCustomActivites object populated from the query conditions when no match is found
 *
 * @method RCustomActivites findOneByActLibelle(string $act_libelle) Return the first RCustomActivites filtered by the act_libelle column
 * @method RCustomActivites findOneByActif(boolean $actif) Return the first RCustomActivites filtered by the actif column
 * @method RCustomActivites findOneByOrd(int $ord) Return the first RCustomActivites filtered by the ord column
 *
 * @method array findByActId(int $act_id) Return RCustomActivites objects filtered by the act_id column
 * @method array findByActLibelle(string $act_libelle) Return RCustomActivites objects filtered by the act_libelle column
 * @method array findByActif(boolean $actif) Return RCustomActivites objects filtered by the actif column
 * @method array findByOrd(int $ord) Return RCustomActivites objects filtered by the ord column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRCustomActivitesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRCustomActivitesQuery object.
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
            $modelName = 'RCustomActivites';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RCustomActivitesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RCustomActivitesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RCustomActivitesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RCustomActivitesQuery) {
            return $criteria;
        }
        $query = new RCustomActivitesQuery(null, null, $modelAlias);

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
     * @return   RCustomActivites|RCustomActivites[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RCustomActivitesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RCustomActivitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RCustomActivites A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByActId($key, $con = null)
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
     * @return                 RCustomActivites A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `act_id`, `act_libelle`, `actif`, `ord` FROM `r_custom_activites` WHERE `act_id` = :p0';
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
            $obj = new RCustomActivites();
            $obj->hydrate($row);
            RCustomActivitesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RCustomActivites|RCustomActivites[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RCustomActivites[]|mixed the list of results, formatted by the current formatter
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
     * @return RCustomActivitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RCustomActivitesPeer::ACT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RCustomActivitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RCustomActivitesPeer::ACT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the act_id column
     *
     * Example usage:
     * <code>
     * $query->filterByActId(1234); // WHERE act_id = 1234
     * $query->filterByActId(array(12, 34)); // WHERE act_id IN (12, 34)
     * $query->filterByActId(array('min' => 12)); // WHERE act_id >= 12
     * $query->filterByActId(array('max' => 12)); // WHERE act_id <= 12
     * </code>
     *
     * @param     mixed $actId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCustomActivitesQuery The current query, for fluid interface
     */
    public function filterByActId($actId = null, $comparison = null)
    {
        if (is_array($actId)) {
            $useMinMax = false;
            if (isset($actId['min'])) {
                $this->addUsingAlias(RCustomActivitesPeer::ACT_ID, $actId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actId['max'])) {
                $this->addUsingAlias(RCustomActivitesPeer::ACT_ID, $actId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCustomActivitesPeer::ACT_ID, $actId, $comparison);
    }

    /**
     * Filter the query on the act_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByActLibelle('fooValue');   // WHERE act_libelle = 'fooValue'
     * $query->filterByActLibelle('%fooValue%'); // WHERE act_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCustomActivitesQuery The current query, for fluid interface
     */
    public function filterByActLibelle($actLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actLibelle)) {
                $actLibelle = str_replace('*', '%', $actLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCustomActivitesPeer::ACT_LIBELLE, $actLibelle, $comparison);
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
     * @return RCustomActivitesQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RCustomActivitesPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the ord column
     *
     * Example usage:
     * <code>
     * $query->filterByOrd(1234); // WHERE ord = 1234
     * $query->filterByOrd(array(12, 34)); // WHERE ord IN (12, 34)
     * $query->filterByOrd(array('min' => 12)); // WHERE ord >= 12
     * $query->filterByOrd(array('max' => 12)); // WHERE ord <= 12
     * </code>
     *
     * @param     mixed $ord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCustomActivitesQuery The current query, for fluid interface
     */
    public function filterByOrd($ord = null, $comparison = null)
    {
        if (is_array($ord)) {
            $useMinMax = false;
            if (isset($ord['min'])) {
                $this->addUsingAlias(RCustomActivitesPeer::ORD, $ord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ord['max'])) {
                $this->addUsingAlias(RCustomActivitesPeer::ORD, $ord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCustomActivitesPeer::ORD, $ord, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCustomActivitesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(RCustomActivitesPeer::ACT_ID, $operations->getOpActId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperations() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Operations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCustomActivitesQuery The current query, for fluid interface
     */
    public function joinOperations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Operations');

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
            $this->addJoinObject($join, 'Operations');
        }

        return $this;
    }

    /**
     * Use the Operations relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Operations', 'OperationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RCustomActivites $rCustomActivites Object to remove from the list of results
     *
     * @return RCustomActivitesQuery The current query, for fluid interface
     */
    public function prune($rCustomActivites = null)
    {
        if ($rCustomActivites) {
            $this->addUsingAlias(RCustomActivitesPeer::ACT_ID, $rCustomActivites->getActId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
