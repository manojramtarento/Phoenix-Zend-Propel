<?php


/**
 * Base class that represents a query for the 'histo_couts' table.
 *
 *
 *
 * @method HistoCoutsQuery orderByHistoCoutsId($order = Criteria::ASC) Order by the histo_couts_id column
 * @method HistoCoutsQuery orderByOpPrestId($order = Criteria::ASC) Order by the op_prest_id column
 * @method HistoCoutsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method HistoCoutsQuery orderByHistoCoutsValue($order = Criteria::ASC) Order by the histo_couts_value column
 * @method HistoCoutsQuery orderByRCoutsNatureId($order = Criteria::ASC) Order by the r_couts_nature_id column
 * @method HistoCoutsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 *
 * @method HistoCoutsQuery groupByHistoCoutsId() Group by the histo_couts_id column
 * @method HistoCoutsQuery groupByOpPrestId() Group by the op_prest_id column
 * @method HistoCoutsQuery groupByUserId() Group by the user_id column
 * @method HistoCoutsQuery groupByHistoCoutsValue() Group by the histo_couts_value column
 * @method HistoCoutsQuery groupByRCoutsNatureId() Group by the r_couts_nature_id column
 * @method HistoCoutsQuery groupByDateCreate() Group by the date_create column
 *
 * @method HistoCoutsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method HistoCoutsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method HistoCoutsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method HistoCoutsQuery leftJoinRCoutsNature($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCoutsNature relation
 * @method HistoCoutsQuery rightJoinRCoutsNature($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCoutsNature relation
 * @method HistoCoutsQuery innerJoinRCoutsNature($relationAlias = null) Adds a INNER JOIN clause to the query using the RCoutsNature relation
 *
 * @method HistoCoutsQuery leftJoinOperationPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrestations relation
 * @method HistoCoutsQuery rightJoinOperationPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrestations relation
 * @method HistoCoutsQuery innerJoinOperationPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrestations relation
 *
 * @method HistoCouts findOne(PropelPDO $con = null) Return the first HistoCouts matching the query
 * @method HistoCouts findOneOrCreate(PropelPDO $con = null) Return the first HistoCouts matching the query, or a new HistoCouts object populated from the query conditions when no match is found
 *
 * @method HistoCouts findOneByOpPrestId(int $op_prest_id) Return the first HistoCouts filtered by the op_prest_id column
 * @method HistoCouts findOneByUserId(int $user_id) Return the first HistoCouts filtered by the user_id column
 * @method HistoCouts findOneByHistoCoutsValue(float $histo_couts_value) Return the first HistoCouts filtered by the histo_couts_value column
 * @method HistoCouts findOneByRCoutsNatureId(int $r_couts_nature_id) Return the first HistoCouts filtered by the r_couts_nature_id column
 * @method HistoCouts findOneByDateCreate(string $date_create) Return the first HistoCouts filtered by the date_create column
 *
 * @method array findByHistoCoutsId(int $histo_couts_id) Return HistoCouts objects filtered by the histo_couts_id column
 * @method array findByOpPrestId(int $op_prest_id) Return HistoCouts objects filtered by the op_prest_id column
 * @method array findByUserId(int $user_id) Return HistoCouts objects filtered by the user_id column
 * @method array findByHistoCoutsValue(float $histo_couts_value) Return HistoCouts objects filtered by the histo_couts_value column
 * @method array findByRCoutsNatureId(int $r_couts_nature_id) Return HistoCouts objects filtered by the r_couts_nature_id column
 * @method array findByDateCreate(string $date_create) Return HistoCouts objects filtered by the date_create column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseHistoCoutsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseHistoCoutsQuery object.
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
            $modelName = 'HistoCouts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new HistoCoutsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   HistoCoutsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return HistoCoutsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof HistoCoutsQuery) {
            return $criteria;
        }
        $query = new HistoCoutsQuery(null, null, $modelAlias);

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
     * @return   HistoCouts|HistoCouts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = HistoCoutsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(HistoCoutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 HistoCouts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByHistoCoutsId($key, $con = null)
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
     * @return                 HistoCouts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `histo_couts_id`, `op_prest_id`, `user_id`, `histo_couts_value`, `r_couts_nature_id`, `date_create` FROM `histo_couts` WHERE `histo_couts_id` = :p0';
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
            $obj = new HistoCouts();
            $obj->hydrate($row);
            HistoCoutsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return HistoCouts|HistoCouts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|HistoCouts[]|mixed the list of results, formatted by the current formatter
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
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(HistoCoutsPeer::HISTO_COUTS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(HistoCoutsPeer::HISTO_COUTS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the histo_couts_id column
     *
     * Example usage:
     * <code>
     * $query->filterByHistoCoutsId(1234); // WHERE histo_couts_id = 1234
     * $query->filterByHistoCoutsId(array(12, 34)); // WHERE histo_couts_id IN (12, 34)
     * $query->filterByHistoCoutsId(array('min' => 12)); // WHERE histo_couts_id >= 12
     * $query->filterByHistoCoutsId(array('max' => 12)); // WHERE histo_couts_id <= 12
     * </code>
     *
     * @param     mixed $histoCoutsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function filterByHistoCoutsId($histoCoutsId = null, $comparison = null)
    {
        if (is_array($histoCoutsId)) {
            $useMinMax = false;
            if (isset($histoCoutsId['min'])) {
                $this->addUsingAlias(HistoCoutsPeer::HISTO_COUTS_ID, $histoCoutsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($histoCoutsId['max'])) {
                $this->addUsingAlias(HistoCoutsPeer::HISTO_COUTS_ID, $histoCoutsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoCoutsPeer::HISTO_COUTS_ID, $histoCoutsId, $comparison);
    }

    /**
     * Filter the query on the op_prest_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestId(1234); // WHERE op_prest_id = 1234
     * $query->filterByOpPrestId(array(12, 34)); // WHERE op_prest_id IN (12, 34)
     * $query->filterByOpPrestId(array('min' => 12)); // WHERE op_prest_id >= 12
     * $query->filterByOpPrestId(array('max' => 12)); // WHERE op_prest_id <= 12
     * </code>
     *
     * @param     mixed $opPrestId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function filterByOpPrestId($opPrestId = null, $comparison = null)
    {
        if (is_array($opPrestId)) {
            $useMinMax = false;
            if (isset($opPrestId['min'])) {
                $this->addUsingAlias(HistoCoutsPeer::OP_PREST_ID, $opPrestId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestId['max'])) {
                $this->addUsingAlias(HistoCoutsPeer::OP_PREST_ID, $opPrestId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoCoutsPeer::OP_PREST_ID, $opPrestId, $comparison);
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
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(HistoCoutsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(HistoCoutsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoCoutsPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the histo_couts_value column
     *
     * Example usage:
     * <code>
     * $query->filterByHistoCoutsValue(1234); // WHERE histo_couts_value = 1234
     * $query->filterByHistoCoutsValue(array(12, 34)); // WHERE histo_couts_value IN (12, 34)
     * $query->filterByHistoCoutsValue(array('min' => 12)); // WHERE histo_couts_value >= 12
     * $query->filterByHistoCoutsValue(array('max' => 12)); // WHERE histo_couts_value <= 12
     * </code>
     *
     * @param     mixed $histoCoutsValue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function filterByHistoCoutsValue($histoCoutsValue = null, $comparison = null)
    {
        if (is_array($histoCoutsValue)) {
            $useMinMax = false;
            if (isset($histoCoutsValue['min'])) {
                $this->addUsingAlias(HistoCoutsPeer::HISTO_COUTS_VALUE, $histoCoutsValue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($histoCoutsValue['max'])) {
                $this->addUsingAlias(HistoCoutsPeer::HISTO_COUTS_VALUE, $histoCoutsValue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoCoutsPeer::HISTO_COUTS_VALUE, $histoCoutsValue, $comparison);
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
     * @see       filterByRCoutsNature()
     *
     * @param     mixed $rCoutsNatureId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function filterByRCoutsNatureId($rCoutsNatureId = null, $comparison = null)
    {
        if (is_array($rCoutsNatureId)) {
            $useMinMax = false;
            if (isset($rCoutsNatureId['min'])) {
                $this->addUsingAlias(HistoCoutsPeer::R_COUTS_NATURE_ID, $rCoutsNatureId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCoutsNatureId['max'])) {
                $this->addUsingAlias(HistoCoutsPeer::R_COUTS_NATURE_ID, $rCoutsNatureId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoCoutsPeer::R_COUTS_NATURE_ID, $rCoutsNatureId, $comparison);
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
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(HistoCoutsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(HistoCoutsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoCoutsPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query by a related RCoutsNature object
     *
     * @param   RCoutsNature|PropelObjectCollection $rCoutsNature The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 HistoCoutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCoutsNature($rCoutsNature, $comparison = null)
    {
        if ($rCoutsNature instanceof RCoutsNature) {
            return $this
                ->addUsingAlias(HistoCoutsPeer::R_COUTS_NATURE_ID, $rCoutsNature->getRCoutsNatureId(), $comparison);
        } elseif ($rCoutsNature instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(HistoCoutsPeer::R_COUTS_NATURE_ID, $rCoutsNature->toKeyValue('PrimaryKey', 'RCoutsNatureId'), $comparison);
        } else {
            throw new PropelException('filterByRCoutsNature() only accepts arguments of type RCoutsNature or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RCoutsNature relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function joinRCoutsNature($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RCoutsNature');

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
            $this->addJoinObject($join, 'RCoutsNature');
        }

        return $this;
    }

    /**
     * Use the RCoutsNature relation RCoutsNature object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCoutsNatureQuery A secondary query class using the current class as primary query
     */
    public function useRCoutsNatureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRCoutsNature($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RCoutsNature', 'RCoutsNatureQuery');
    }

    /**
     * Filter the query by a related OperationPrestations object
     *
     * @param   OperationPrestations|PropelObjectCollection $operationPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 HistoCoutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrestations($operationPrestations, $comparison = null)
    {
        if ($operationPrestations instanceof OperationPrestations) {
            return $this
                ->addUsingAlias(HistoCoutsPeer::OP_PREST_ID, $operationPrestations->getOpPrestId(), $comparison);
        } elseif ($operationPrestations instanceof PropelObjectCollection) {
            return $this
                ->useOperationPrestationsQuery()
                ->filterByPrimaryKeys($operationPrestations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationPrestations() only accepts arguments of type OperationPrestations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationPrestations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function joinOperationPrestations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationPrestations');

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
            $this->addJoinObject($join, 'OperationPrestations');
        }

        return $this;
    }

    /**
     * Use the OperationPrestations relation OperationPrestations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationPrestationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationPrestationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationPrestations', 'OperationPrestationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   HistoCouts $histoCouts Object to remove from the list of results
     *
     * @return HistoCoutsQuery The current query, for fluid interface
     */
    public function prune($histoCouts = null)
    {
        if ($histoCouts) {
            $this->addUsingAlias(HistoCoutsPeer::HISTO_COUTS_ID, $histoCouts->getHistoCoutsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
