<?php


/**
 * Base class that represents a query for the 'r_couts_nature' table.
 *
 *
 *
 * @method RCoutsNatureQuery orderByRCoutsNatureId($order = Criteria::ASC) Order by the r_couts_nature_id column
 * @method RCoutsNatureQuery orderByRCoutsNatureName($order = Criteria::ASC) Order by the r_couts_nature_name column
 *
 * @method RCoutsNatureQuery groupByRCoutsNatureId() Group by the r_couts_nature_id column
 * @method RCoutsNatureQuery groupByRCoutsNatureName() Group by the r_couts_nature_name column
 *
 * @method RCoutsNatureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RCoutsNatureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RCoutsNatureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RCoutsNatureQuery leftJoinHistoCouts($relationAlias = null) Adds a LEFT JOIN clause to the query using the HistoCouts relation
 * @method RCoutsNatureQuery rightJoinHistoCouts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the HistoCouts relation
 * @method RCoutsNatureQuery innerJoinHistoCouts($relationAlias = null) Adds a INNER JOIN clause to the query using the HistoCouts relation
 *
 * @method RCoutsNature findOne(PropelPDO $con = null) Return the first RCoutsNature matching the query
 * @method RCoutsNature findOneOrCreate(PropelPDO $con = null) Return the first RCoutsNature matching the query, or a new RCoutsNature object populated from the query conditions when no match is found
 *
 * @method RCoutsNature findOneByRCoutsNatureName(string $r_couts_nature_name) Return the first RCoutsNature filtered by the r_couts_nature_name column
 *
 * @method array findByRCoutsNatureId(int $r_couts_nature_id) Return RCoutsNature objects filtered by the r_couts_nature_id column
 * @method array findByRCoutsNatureName(string $r_couts_nature_name) Return RCoutsNature objects filtered by the r_couts_nature_name column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRCoutsNatureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRCoutsNatureQuery object.
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
            $modelName = 'RCoutsNature';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RCoutsNatureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RCoutsNatureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RCoutsNatureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RCoutsNatureQuery) {
            return $criteria;
        }
        $query = new RCoutsNatureQuery(null, null, $modelAlias);

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
     * @return   RCoutsNature|RCoutsNature[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RCoutsNaturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RCoutsNaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RCoutsNature A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRCoutsNatureId($key, $con = null)
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
     * @return                 RCoutsNature A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_couts_nature_id`, `r_couts_nature_name` FROM `r_couts_nature` WHERE `r_couts_nature_id` = :p0';
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
            $obj = new RCoutsNature();
            $obj->hydrate($row);
            RCoutsNaturePeer::addInstanceToPool($obj, (string) $key);
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
     * @return RCoutsNature|RCoutsNature[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RCoutsNature[]|mixed the list of results, formatted by the current formatter
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
     * @return RCoutsNatureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RCoutsNaturePeer::R_COUTS_NATURE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RCoutsNatureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RCoutsNaturePeer::R_COUTS_NATURE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_couts_nature_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRCoutsNatureId(1234); // WHERE r_couts_nature_id = 1234
     * $query->filterByRCoutsNatureId(array(12, 34)); // WHERE r_couts_nature_id IN (12, 34)
     * $query->filterByRCoutsNatureId(array('min' => 12)); // WHERE r_couts_nature_id >= 12
     * $query->filterByRCoutsNatureId(array('max' => 12)); // WHERE r_couts_nature_id <= 12
     * </code>
     *
     * @param     mixed $rCoutsNatureId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCoutsNatureQuery The current query, for fluid interface
     */
    public function filterByRCoutsNatureId($rCoutsNatureId = null, $comparison = null)
    {
        if (is_array($rCoutsNatureId)) {
            $useMinMax = false;
            if (isset($rCoutsNatureId['min'])) {
                $this->addUsingAlias(RCoutsNaturePeer::R_COUTS_NATURE_ID, $rCoutsNatureId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCoutsNatureId['max'])) {
                $this->addUsingAlias(RCoutsNaturePeer::R_COUTS_NATURE_ID, $rCoutsNatureId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCoutsNaturePeer::R_COUTS_NATURE_ID, $rCoutsNatureId, $comparison);
    }

    /**
     * Filter the query on the r_couts_nature_name column
     *
     * Example usage:
     * <code>
     * $query->filterByRCoutsNatureName('fooValue');   // WHERE r_couts_nature_name = 'fooValue'
     * $query->filterByRCoutsNatureName('%fooValue%'); // WHERE r_couts_nature_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCoutsNatureName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCoutsNatureQuery The current query, for fluid interface
     */
    public function filterByRCoutsNatureName($rCoutsNatureName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCoutsNatureName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rCoutsNatureName)) {
                $rCoutsNatureName = str_replace('*', '%', $rCoutsNatureName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCoutsNaturePeer::R_COUTS_NATURE_NAME, $rCoutsNatureName, $comparison);
    }

    /**
     * Filter the query by a related HistoCouts object
     *
     * @param   HistoCouts|PropelObjectCollection $histoCouts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCoutsNatureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByHistoCouts($histoCouts, $comparison = null)
    {
        if ($histoCouts instanceof HistoCouts) {
            return $this
                ->addUsingAlias(RCoutsNaturePeer::R_COUTS_NATURE_ID, $histoCouts->getRCoutsNatureId(), $comparison);
        } elseif ($histoCouts instanceof PropelObjectCollection) {
            return $this
                ->useHistoCoutsQuery()
                ->filterByPrimaryKeys($histoCouts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByHistoCouts() only accepts arguments of type HistoCouts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the HistoCouts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCoutsNatureQuery The current query, for fluid interface
     */
    public function joinHistoCouts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('HistoCouts');

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
            $this->addJoinObject($join, 'HistoCouts');
        }

        return $this;
    }

    /**
     * Use the HistoCouts relation HistoCouts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   HistoCoutsQuery A secondary query class using the current class as primary query
     */
    public function useHistoCoutsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinHistoCouts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'HistoCouts', 'HistoCoutsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RCoutsNature $rCoutsNature Object to remove from the list of results
     *
     * @return RCoutsNatureQuery The current query, for fluid interface
     */
    public function prune($rCoutsNature = null)
    {
        if ($rCoutsNature) {
            $this->addUsingAlias(RCoutsNaturePeer::R_COUTS_NATURE_ID, $rCoutsNature->getRCoutsNatureId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
