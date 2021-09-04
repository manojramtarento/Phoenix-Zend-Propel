<?php


/**
 * Base class that represents a query for the 'relance_statuts' table.
 *
 *
 *
 * @method RelanceStatutsQuery orderByRsId($order = Criteria::ASC) Order by the rs_id column
 * @method RelanceStatutsQuery orderByRelId($order = Criteria::ASC) Order by the rel_id column
 * @method RelanceStatutsQuery orderByRRelStatId($order = Criteria::ASC) Order by the r_rel_stat_id column
 * @method RelanceStatutsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method RelanceStatutsQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method RelanceStatutsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method RelanceStatutsQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 *
 * @method RelanceStatutsQuery groupByRsId() Group by the rs_id column
 * @method RelanceStatutsQuery groupByRelId() Group by the rel_id column
 * @method RelanceStatutsQuery groupByRRelStatId() Group by the r_rel_stat_id column
 * @method RelanceStatutsQuery groupByUserId() Group by the user_id column
 * @method RelanceStatutsQuery groupByUserModify() Group by the user_modify column
 * @method RelanceStatutsQuery groupByDateCreate() Group by the date_create column
 * @method RelanceStatutsQuery groupByDateModify() Group by the date_modify column
 *
 * @method RelanceStatutsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RelanceStatutsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RelanceStatutsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RelanceStatutsQuery leftJoinRRelanceStatuts($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRelanceStatuts relation
 * @method RelanceStatutsQuery rightJoinRRelanceStatuts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRelanceStatuts relation
 * @method RelanceStatutsQuery innerJoinRRelanceStatuts($relationAlias = null) Adds a INNER JOIN clause to the query using the RRelanceStatuts relation
 *
 * @method RelanceStatutsQuery leftJoinRelances($relationAlias = null) Adds a LEFT JOIN clause to the query using the Relances relation
 * @method RelanceStatutsQuery rightJoinRelances($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Relances relation
 * @method RelanceStatutsQuery innerJoinRelances($relationAlias = null) Adds a INNER JOIN clause to the query using the Relances relation
 *
 * @method RelanceStatuts findOne(PropelPDO $con = null) Return the first RelanceStatuts matching the query
 * @method RelanceStatuts findOneOrCreate(PropelPDO $con = null) Return the first RelanceStatuts matching the query, or a new RelanceStatuts object populated from the query conditions when no match is found
 *
 * @method RelanceStatuts findOneByRelId(int $rel_id) Return the first RelanceStatuts filtered by the rel_id column
 * @method RelanceStatuts findOneByRRelStatId(int $r_rel_stat_id) Return the first RelanceStatuts filtered by the r_rel_stat_id column
 * @method RelanceStatuts findOneByUserId(int $user_id) Return the first RelanceStatuts filtered by the user_id column
 * @method RelanceStatuts findOneByUserModify(int $user_modify) Return the first RelanceStatuts filtered by the user_modify column
 * @method RelanceStatuts findOneByDateCreate(string $date_create) Return the first RelanceStatuts filtered by the date_create column
 * @method RelanceStatuts findOneByDateModify(string $date_modify) Return the first RelanceStatuts filtered by the date_modify column
 *
 * @method array findByRsId(int $rs_id) Return RelanceStatuts objects filtered by the rs_id column
 * @method array findByRelId(int $rel_id) Return RelanceStatuts objects filtered by the rel_id column
 * @method array findByRRelStatId(int $r_rel_stat_id) Return RelanceStatuts objects filtered by the r_rel_stat_id column
 * @method array findByUserId(int $user_id) Return RelanceStatuts objects filtered by the user_id column
 * @method array findByUserModify(int $user_modify) Return RelanceStatuts objects filtered by the user_modify column
 * @method array findByDateCreate(string $date_create) Return RelanceStatuts objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return RelanceStatuts objects filtered by the date_modify column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRelanceStatutsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRelanceStatutsQuery object.
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
            $modelName = 'RelanceStatuts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RelanceStatutsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RelanceStatutsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RelanceStatutsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RelanceStatutsQuery) {
            return $criteria;
        }
        $query = new RelanceStatutsQuery(null, null, $modelAlias);

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
     * @return   RelanceStatuts|RelanceStatuts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RelanceStatutsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RelanceStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RelanceStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRsId($key, $con = null)
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
     * @return                 RelanceStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `rs_id`, `rel_id`, `r_rel_stat_id`, `user_id`, `user_modify`, `date_create`, `date_modify` FROM `relance_statuts` WHERE `rs_id` = :p0';
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
            $obj = new RelanceStatuts();
            $obj->hydrate($row);
            RelanceStatutsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RelanceStatuts|RelanceStatuts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RelanceStatuts[]|mixed the list of results, formatted by the current formatter
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
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RelanceStatutsPeer::RS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RelanceStatutsPeer::RS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the rs_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRsId(1234); // WHERE rs_id = 1234
     * $query->filterByRsId(array(12, 34)); // WHERE rs_id IN (12, 34)
     * $query->filterByRsId(array('min' => 12)); // WHERE rs_id >= 12
     * $query->filterByRsId(array('max' => 12)); // WHERE rs_id <= 12
     * </code>
     *
     * @param     mixed $rsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByRsId($rsId = null, $comparison = null)
    {
        if (is_array($rsId)) {
            $useMinMax = false;
            if (isset($rsId['min'])) {
                $this->addUsingAlias(RelanceStatutsPeer::RS_ID, $rsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rsId['max'])) {
                $this->addUsingAlias(RelanceStatutsPeer::RS_ID, $rsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelanceStatutsPeer::RS_ID, $rsId, $comparison);
    }

    /**
     * Filter the query on the rel_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelId(1234); // WHERE rel_id = 1234
     * $query->filterByRelId(array(12, 34)); // WHERE rel_id IN (12, 34)
     * $query->filterByRelId(array('min' => 12)); // WHERE rel_id >= 12
     * $query->filterByRelId(array('max' => 12)); // WHERE rel_id <= 12
     * </code>
     *
     * @see       filterByRelances()
     *
     * @param     mixed $relId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByRelId($relId = null, $comparison = null)
    {
        if (is_array($relId)) {
            $useMinMax = false;
            if (isset($relId['min'])) {
                $this->addUsingAlias(RelanceStatutsPeer::REL_ID, $relId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relId['max'])) {
                $this->addUsingAlias(RelanceStatutsPeer::REL_ID, $relId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelanceStatutsPeer::REL_ID, $relId, $comparison);
    }

    /**
     * Filter the query on the r_rel_stat_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRelStatId(1234); // WHERE r_rel_stat_id = 1234
     * $query->filterByRRelStatId(array(12, 34)); // WHERE r_rel_stat_id IN (12, 34)
     * $query->filterByRRelStatId(array('min' => 12)); // WHERE r_rel_stat_id >= 12
     * $query->filterByRRelStatId(array('max' => 12)); // WHERE r_rel_stat_id <= 12
     * </code>
     *
     * @see       filterByRRelanceStatuts()
     *
     * @param     mixed $rRelStatId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByRRelStatId($rRelStatId = null, $comparison = null)
    {
        if (is_array($rRelStatId)) {
            $useMinMax = false;
            if (isset($rRelStatId['min'])) {
                $this->addUsingAlias(RelanceStatutsPeer::R_REL_STAT_ID, $rRelStatId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRelStatId['max'])) {
                $this->addUsingAlias(RelanceStatutsPeer::R_REL_STAT_ID, $rRelStatId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelanceStatutsPeer::R_REL_STAT_ID, $rRelStatId, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(RelanceStatutsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(RelanceStatutsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelanceStatutsPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the user_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByUserModify(1234); // WHERE user_modify = 1234
     * $query->filterByUserModify(array(12, 34)); // WHERE user_modify IN (12, 34)
     * $query->filterByUserModify(array('min' => 12)); // WHERE user_modify >= 12
     * $query->filterByUserModify(array('max' => 12)); // WHERE user_modify <= 12
     * </code>
     *
     * @param     mixed $userModify The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(RelanceStatutsPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(RelanceStatutsPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelanceStatutsPeer::USER_MODIFY, $userModify, $comparison);
    }

    /**
     * Filter the query on the date_create column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreate('2011-03-14'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate('now'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate(array('max' => 'yesterday')); // WHERE date_create < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(RelanceStatutsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(RelanceStatutsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelanceStatutsPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query on the date_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModify('2011-03-14'); // WHERE date_modify = '2011-03-14'
     * $query->filterByDateModify('now'); // WHERE date_modify = '2011-03-14'
     * $query->filterByDateModify(array('max' => 'yesterday')); // WHERE date_modify < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModify The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(RelanceStatutsPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(RelanceStatutsPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelanceStatutsPeer::DATE_MODIFY, $dateModify, $comparison);
    }

    /**
     * Filter the query by a related RRelanceStatuts object
     *
     * @param   RRelanceStatuts|PropelObjectCollection $rRelanceStatuts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RelanceStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRelanceStatuts($rRelanceStatuts, $comparison = null)
    {
        if ($rRelanceStatuts instanceof RRelanceStatuts) {
            return $this
                ->addUsingAlias(RelanceStatutsPeer::R_REL_STAT_ID, $rRelanceStatuts->getRRelStatutId(), $comparison);
        } elseif ($rRelanceStatuts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RelanceStatutsPeer::R_REL_STAT_ID, $rRelanceStatuts->toKeyValue('PrimaryKey', 'RRelStatutId'), $comparison);
        } else {
            throw new PropelException('filterByRRelanceStatuts() only accepts arguments of type RRelanceStatuts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRelanceStatuts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function joinRRelanceStatuts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRelanceStatuts');

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
            $this->addJoinObject($join, 'RRelanceStatuts');
        }

        return $this;
    }

    /**
     * Use the RRelanceStatuts relation RRelanceStatuts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRelanceStatutsQuery A secondary query class using the current class as primary query
     */
    public function useRRelanceStatutsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRRelanceStatuts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRelanceStatuts', 'RRelanceStatutsQuery');
    }

    /**
     * Filter the query by a related Relances object
     *
     * @param   Relances|PropelObjectCollection $relances The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RelanceStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRelances($relances, $comparison = null)
    {
        if ($relances instanceof Relances) {
            return $this
                ->addUsingAlias(RelanceStatutsPeer::REL_ID, $relances->getRelId(), $comparison);
        } elseif ($relances instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RelanceStatutsPeer::REL_ID, $relances->toKeyValue('PrimaryKey', 'RelId'), $comparison);
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
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function joinRelances($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useRelancesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRelances($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Relances', 'RelancesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RelanceStatuts $relanceStatuts Object to remove from the list of results
     *
     * @return RelanceStatutsQuery The current query, for fluid interface
     */
    public function prune($relanceStatuts = null)
    {
        if ($relanceStatuts) {
            $this->addUsingAlias(RelanceStatutsPeer::RS_ID, $relanceStatuts->getRsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
