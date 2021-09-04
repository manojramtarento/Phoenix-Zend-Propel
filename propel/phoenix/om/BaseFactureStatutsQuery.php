<?php


/**
 * Base class that represents a query for the 'facture_statuts' table.
 *
 *
 *
 * @method FactureStatutsQuery orderByFsId($order = Criteria::ASC) Order by the fs_id column
 * @method FactureStatutsQuery orderByFactId($order = Criteria::ASC) Order by the fact_id column
 * @method FactureStatutsQuery orderByRFactStatId($order = Criteria::ASC) Order by the r_fact_stat_id column
 * @method FactureStatutsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method FactureStatutsQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method FactureStatutsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method FactureStatutsQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method FactureStatutsQuery orderByIsEffective($order = Criteria::ASC) Order by the is_effective column
 *
 * @method FactureStatutsQuery groupByFsId() Group by the fs_id column
 * @method FactureStatutsQuery groupByFactId() Group by the fact_id column
 * @method FactureStatutsQuery groupByRFactStatId() Group by the r_fact_stat_id column
 * @method FactureStatutsQuery groupByUserId() Group by the user_id column
 * @method FactureStatutsQuery groupByUserModify() Group by the user_modify column
 * @method FactureStatutsQuery groupByDateCreate() Group by the date_create column
 * @method FactureStatutsQuery groupByDateModify() Group by the date_modify column
 * @method FactureStatutsQuery groupByIsEffective() Group by the is_effective column
 *
 * @method FactureStatutsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FactureStatutsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FactureStatutsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FactureStatutsQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method FactureStatutsQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method FactureStatutsQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method FactureStatuts findOne(PropelPDO $con = null) Return the first FactureStatuts matching the query
 * @method FactureStatuts findOneOrCreate(PropelPDO $con = null) Return the first FactureStatuts matching the query, or a new FactureStatuts object populated from the query conditions when no match is found
 *
 * @method FactureStatuts findOneByFactId(int $fact_id) Return the first FactureStatuts filtered by the fact_id column
 * @method FactureStatuts findOneByRFactStatId(int $r_fact_stat_id) Return the first FactureStatuts filtered by the r_fact_stat_id column
 * @method FactureStatuts findOneByUserId(int $user_id) Return the first FactureStatuts filtered by the user_id column
 * @method FactureStatuts findOneByUserModify(int $user_modify) Return the first FactureStatuts filtered by the user_modify column
 * @method FactureStatuts findOneByDateCreate(string $date_create) Return the first FactureStatuts filtered by the date_create column
 * @method FactureStatuts findOneByDateModify(string $date_modify) Return the first FactureStatuts filtered by the date_modify column
 * @method FactureStatuts findOneByIsEffective(boolean $is_effective) Return the first FactureStatuts filtered by the is_effective column
 *
 * @method array findByFsId(int $fs_id) Return FactureStatuts objects filtered by the fs_id column
 * @method array findByFactId(int $fact_id) Return FactureStatuts objects filtered by the fact_id column
 * @method array findByRFactStatId(int $r_fact_stat_id) Return FactureStatuts objects filtered by the r_fact_stat_id column
 * @method array findByUserId(int $user_id) Return FactureStatuts objects filtered by the user_id column
 * @method array findByUserModify(int $user_modify) Return FactureStatuts objects filtered by the user_modify column
 * @method array findByDateCreate(string $date_create) Return FactureStatuts objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return FactureStatuts objects filtered by the date_modify column
 * @method array findByIsEffective(boolean $is_effective) Return FactureStatuts objects filtered by the is_effective column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseFactureStatutsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFactureStatutsQuery object.
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
            $modelName = 'FactureStatuts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FactureStatutsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FactureStatutsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FactureStatutsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FactureStatutsQuery) {
            return $criteria;
        }
        $query = new FactureStatutsQuery(null, null, $modelAlias);

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
     * @return   FactureStatuts|FactureStatuts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FactureStatutsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FactureStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FactureStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFsId($key, $con = null)
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
     * @return                 FactureStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `fs_id`, `fact_id`, `r_fact_stat_id`, `user_id`, `user_modify`, `date_create`, `date_modify`, `is_effective` FROM `facture_statuts` WHERE `fs_id` = :p0';
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
            $obj = new FactureStatuts();
            $obj->hydrate($row);
            FactureStatutsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FactureStatuts|FactureStatuts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FactureStatuts[]|mixed the list of results, formatted by the current formatter
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
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FactureStatutsPeer::FS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FactureStatutsPeer::FS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the fs_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFsId(1234); // WHERE fs_id = 1234
     * $query->filterByFsId(array(12, 34)); // WHERE fs_id IN (12, 34)
     * $query->filterByFsId(array('min' => 12)); // WHERE fs_id >= 12
     * $query->filterByFsId(array('max' => 12)); // WHERE fs_id <= 12
     * </code>
     *
     * @param     mixed $fsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function filterByFsId($fsId = null, $comparison = null)
    {
        if (is_array($fsId)) {
            $useMinMax = false;
            if (isset($fsId['min'])) {
                $this->addUsingAlias(FactureStatutsPeer::FS_ID, $fsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fsId['max'])) {
                $this->addUsingAlias(FactureStatutsPeer::FS_ID, $fsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureStatutsPeer::FS_ID, $fsId, $comparison);
    }

    /**
     * Filter the query on the fact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactId(1234); // WHERE fact_id = 1234
     * $query->filterByFactId(array(12, 34)); // WHERE fact_id IN (12, 34)
     * $query->filterByFactId(array('min' => 12)); // WHERE fact_id >= 12
     * $query->filterByFactId(array('max' => 12)); // WHERE fact_id <= 12
     * </code>
     *
     * @see       filterByFactures()
     *
     * @param     mixed $factId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function filterByFactId($factId = null, $comparison = null)
    {
        if (is_array($factId)) {
            $useMinMax = false;
            if (isset($factId['min'])) {
                $this->addUsingAlias(FactureStatutsPeer::FACT_ID, $factId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factId['max'])) {
                $this->addUsingAlias(FactureStatutsPeer::FACT_ID, $factId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureStatutsPeer::FACT_ID, $factId, $comparison);
    }

    /**
     * Filter the query on the r_fact_stat_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactStatId(1234); // WHERE r_fact_stat_id = 1234
     * $query->filterByRFactStatId(array(12, 34)); // WHERE r_fact_stat_id IN (12, 34)
     * $query->filterByRFactStatId(array('min' => 12)); // WHERE r_fact_stat_id >= 12
     * $query->filterByRFactStatId(array('max' => 12)); // WHERE r_fact_stat_id <= 12
     * </code>
     *
     * @param     mixed $rFactStatId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function filterByRFactStatId($rFactStatId = null, $comparison = null)
    {
        if (is_array($rFactStatId)) {
            $useMinMax = false;
            if (isset($rFactStatId['min'])) {
                $this->addUsingAlias(FactureStatutsPeer::R_FACT_STAT_ID, $rFactStatId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactStatId['max'])) {
                $this->addUsingAlias(FactureStatutsPeer::R_FACT_STAT_ID, $rFactStatId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureStatutsPeer::R_FACT_STAT_ID, $rFactStatId, $comparison);
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
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(FactureStatutsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(FactureStatutsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureStatutsPeer::USER_ID, $userId, $comparison);
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
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(FactureStatutsPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(FactureStatutsPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureStatutsPeer::USER_MODIFY, $userModify, $comparison);
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
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(FactureStatutsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(FactureStatutsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureStatutsPeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(FactureStatutsPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(FactureStatutsPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureStatutsPeer::DATE_MODIFY, $dateModify, $comparison);
    }

    /**
     * Filter the query on the is_effective column
     *
     * Example usage:
     * <code>
     * $query->filterByIsEffective(true); // WHERE is_effective = true
     * $query->filterByIsEffective('yes'); // WHERE is_effective = true
     * </code>
     *
     * @param     boolean|string $isEffective The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function filterByIsEffective($isEffective = null, $comparison = null)
    {
        if (is_string($isEffective)) {
            $isEffective = in_array(strtolower($isEffective), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FactureStatutsPeer::IS_EFFECTIVE, $isEffective, $comparison);
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(FactureStatutsPeer::FACT_ID, $factures->getFactId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureStatutsPeer::FACT_ID, $factures->toKeyValue('PrimaryKey', 'FactId'), $comparison);
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
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function joinFactures($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useFacturesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factures', 'FacturesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   FactureStatuts $factureStatuts Object to remove from the list of results
     *
     * @return FactureStatutsQuery The current query, for fluid interface
     */
    public function prune($factureStatuts = null)
    {
        if ($factureStatuts) {
            $this->addUsingAlias(FactureStatutsPeer::FS_ID, $factureStatuts->getFsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
