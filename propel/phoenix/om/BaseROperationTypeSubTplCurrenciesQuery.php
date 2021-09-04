<?php


/**
 * Base class that represents a query for the 'r_operation_type_sub_tpl_currencies' table.
 *
 *
 *
 * @method ROperationTypeSubTplCurrenciesQuery orderByROperationTypeSubTplCurrencyId($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_currency_id column
 * @method ROperationTypeSubTplCurrenciesQuery orderByROperationTypeSubTplCurrencyTplId($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_currency_tpl_id column
 * @method ROperationTypeSubTplCurrenciesQuery orderByROperationTypeSubTplCurrencyRCurrencyId($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_currency_r_currency_id column
 * @method ROperationTypeSubTplCurrenciesQuery orderByROperationTypeSubTplCurrencyIsCurrencyLinked($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_currency_is_currency_linked column
 *
 * @method ROperationTypeSubTplCurrenciesQuery groupByROperationTypeSubTplCurrencyId() Group by the r_operation_type_sub_tpl_currency_id column
 * @method ROperationTypeSubTplCurrenciesQuery groupByROperationTypeSubTplCurrencyTplId() Group by the r_operation_type_sub_tpl_currency_tpl_id column
 * @method ROperationTypeSubTplCurrenciesQuery groupByROperationTypeSubTplCurrencyRCurrencyId() Group by the r_operation_type_sub_tpl_currency_r_currency_id column
 * @method ROperationTypeSubTplCurrenciesQuery groupByROperationTypeSubTplCurrencyIsCurrencyLinked() Group by the r_operation_type_sub_tpl_currency_is_currency_linked column
 *
 * @method ROperationTypeSubTplCurrenciesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeSubTplCurrenciesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeSubTplCurrenciesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeSubTplCurrenciesQuery leftJoinROperationTypeSubTpl($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplCurrenciesQuery rightJoinROperationTypeSubTpl($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplCurrenciesQuery innerJoinROperationTypeSubTpl($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTpl relation
 *
 * @method ROperationTypeSubTplCurrenciesQuery leftJoinRCurrencies($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCurrencies relation
 * @method ROperationTypeSubTplCurrenciesQuery rightJoinRCurrencies($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCurrencies relation
 * @method ROperationTypeSubTplCurrenciesQuery innerJoinRCurrencies($relationAlias = null) Adds a INNER JOIN clause to the query using the RCurrencies relation
 *
 * @method ROperationTypeSubTplCurrencies findOne(PropelPDO $con = null) Return the first ROperationTypeSubTplCurrencies matching the query
 * @method ROperationTypeSubTplCurrencies findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeSubTplCurrencies matching the query, or a new ROperationTypeSubTplCurrencies object populated from the query conditions when no match is found
 *
 * @method ROperationTypeSubTplCurrencies findOneByROperationTypeSubTplCurrencyTplId(int $r_operation_type_sub_tpl_currency_tpl_id) Return the first ROperationTypeSubTplCurrencies filtered by the r_operation_type_sub_tpl_currency_tpl_id column
 * @method ROperationTypeSubTplCurrencies findOneByROperationTypeSubTplCurrencyRCurrencyId(int $r_operation_type_sub_tpl_currency_r_currency_id) Return the first ROperationTypeSubTplCurrencies filtered by the r_operation_type_sub_tpl_currency_r_currency_id column
 * @method ROperationTypeSubTplCurrencies findOneByROperationTypeSubTplCurrencyIsCurrencyLinked(int $r_operation_type_sub_tpl_currency_is_currency_linked) Return the first ROperationTypeSubTplCurrencies filtered by the r_operation_type_sub_tpl_currency_is_currency_linked column
 *
 * @method array findByROperationTypeSubTplCurrencyId(int $r_operation_type_sub_tpl_currency_id) Return ROperationTypeSubTplCurrencies objects filtered by the r_operation_type_sub_tpl_currency_id column
 * @method array findByROperationTypeSubTplCurrencyTplId(int $r_operation_type_sub_tpl_currency_tpl_id) Return ROperationTypeSubTplCurrencies objects filtered by the r_operation_type_sub_tpl_currency_tpl_id column
 * @method array findByROperationTypeSubTplCurrencyRCurrencyId(int $r_operation_type_sub_tpl_currency_r_currency_id) Return ROperationTypeSubTplCurrencies objects filtered by the r_operation_type_sub_tpl_currency_r_currency_id column
 * @method array findByROperationTypeSubTplCurrencyIsCurrencyLinked(int $r_operation_type_sub_tpl_currency_is_currency_linked) Return ROperationTypeSubTplCurrencies objects filtered by the r_operation_type_sub_tpl_currency_is_currency_linked column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplCurrenciesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeSubTplCurrenciesQuery object.
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
            $modelName = 'ROperationTypeSubTplCurrencies';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeSubTplCurrenciesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeSubTplCurrenciesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeSubTplCurrenciesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeSubTplCurrenciesQuery) {
            return $criteria;
        }
        $query = new ROperationTypeSubTplCurrenciesQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeSubTplCurrencies|ROperationTypeSubTplCurrencies[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeSubTplCurrenciesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplCurrenciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeSubTplCurrencies A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROperationTypeSubTplCurrencyId($key, $con = null)
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
     * @return                 ROperationTypeSubTplCurrencies A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_operation_type_sub_tpl_currency_id`, `r_operation_type_sub_tpl_currency_tpl_id`, `r_operation_type_sub_tpl_currency_r_currency_id`, `r_operation_type_sub_tpl_currency_is_currency_linked` FROM `r_operation_type_sub_tpl_currencies` WHERE `r_operation_type_sub_tpl_currency_id` = :p0';
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
            $obj = new ROperationTypeSubTplCurrencies();
            $obj->hydrate($row);
            ROperationTypeSubTplCurrenciesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeSubTplCurrencies|ROperationTypeSubTplCurrencies[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeSubTplCurrencies[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_currency_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCurrencyId(1234); // WHERE r_operation_type_sub_tpl_currency_id = 1234
     * $query->filterByROperationTypeSubTplCurrencyId(array(12, 34)); // WHERE r_operation_type_sub_tpl_currency_id IN (12, 34)
     * $query->filterByROperationTypeSubTplCurrencyId(array('min' => 12)); // WHERE r_operation_type_sub_tpl_currency_id >= 12
     * $query->filterByROperationTypeSubTplCurrencyId(array('max' => 12)); // WHERE r_operation_type_sub_tpl_currency_id <= 12
     * </code>
     *
     * @param     mixed $rOperationTypeSubTplCurrencyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCurrencyId($rOperationTypeSubTplCurrencyId = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCurrencyId)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCurrencyId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_ID, $rOperationTypeSubTplCurrencyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCurrencyId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_ID, $rOperationTypeSubTplCurrencyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_ID, $rOperationTypeSubTplCurrencyId, $comparison);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_currency_tpl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCurrencyTplId(1234); // WHERE r_operation_type_sub_tpl_currency_tpl_id = 1234
     * $query->filterByROperationTypeSubTplCurrencyTplId(array(12, 34)); // WHERE r_operation_type_sub_tpl_currency_tpl_id IN (12, 34)
     * $query->filterByROperationTypeSubTplCurrencyTplId(array('min' => 12)); // WHERE r_operation_type_sub_tpl_currency_tpl_id >= 12
     * $query->filterByROperationTypeSubTplCurrencyTplId(array('max' => 12)); // WHERE r_operation_type_sub_tpl_currency_tpl_id <= 12
     * </code>
     *
     * @see       filterByROperationTypeSubTpl()
     *
     * @param     mixed $rOperationTypeSubTplCurrencyTplId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCurrencyTplId($rOperationTypeSubTplCurrencyTplId = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCurrencyTplId)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCurrencyTplId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_TPL_ID, $rOperationTypeSubTplCurrencyTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCurrencyTplId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_TPL_ID, $rOperationTypeSubTplCurrencyTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_TPL_ID, $rOperationTypeSubTplCurrencyTplId, $comparison);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_currency_r_currency_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCurrencyRCurrencyId(1234); // WHERE r_operation_type_sub_tpl_currency_r_currency_id = 1234
     * $query->filterByROperationTypeSubTplCurrencyRCurrencyId(array(12, 34)); // WHERE r_operation_type_sub_tpl_currency_r_currency_id IN (12, 34)
     * $query->filterByROperationTypeSubTplCurrencyRCurrencyId(array('min' => 12)); // WHERE r_operation_type_sub_tpl_currency_r_currency_id >= 12
     * $query->filterByROperationTypeSubTplCurrencyRCurrencyId(array('max' => 12)); // WHERE r_operation_type_sub_tpl_currency_r_currency_id <= 12
     * </code>
     *
     * @see       filterByRCurrencies()
     *
     * @param     mixed $rOperationTypeSubTplCurrencyRCurrencyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCurrencyRCurrencyId($rOperationTypeSubTplCurrencyRCurrencyId = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCurrencyRCurrencyId)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCurrencyRCurrencyId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_R_CURRENCY_ID, $rOperationTypeSubTplCurrencyRCurrencyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCurrencyRCurrencyId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_R_CURRENCY_ID, $rOperationTypeSubTplCurrencyRCurrencyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_R_CURRENCY_ID, $rOperationTypeSubTplCurrencyRCurrencyId, $comparison);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_currency_is_currency_linked column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCurrencyIsCurrencyLinked(1234); // WHERE r_operation_type_sub_tpl_currency_is_currency_linked = 1234
     * $query->filterByROperationTypeSubTplCurrencyIsCurrencyLinked(array(12, 34)); // WHERE r_operation_type_sub_tpl_currency_is_currency_linked IN (12, 34)
     * $query->filterByROperationTypeSubTplCurrencyIsCurrencyLinked(array('min' => 12)); // WHERE r_operation_type_sub_tpl_currency_is_currency_linked >= 12
     * $query->filterByROperationTypeSubTplCurrencyIsCurrencyLinked(array('max' => 12)); // WHERE r_operation_type_sub_tpl_currency_is_currency_linked <= 12
     * </code>
     *
     * @param     mixed $rOperationTypeSubTplCurrencyIsCurrencyLinked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCurrencyIsCurrencyLinked($rOperationTypeSubTplCurrencyIsCurrencyLinked = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCurrencyIsCurrencyLinked)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCurrencyIsCurrencyLinked['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_IS_CURRENCY_LINKED, $rOperationTypeSubTplCurrencyIsCurrencyLinked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCurrencyIsCurrencyLinked['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_IS_CURRENCY_LINKED, $rOperationTypeSubTplCurrencyIsCurrencyLinked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_IS_CURRENCY_LINKED, $rOperationTypeSubTplCurrencyIsCurrencyLinked, $comparison);
    }

    /**
     * Filter the query by a related ROperationTypeSubTpl object
     *
     * @param   ROperationTypeSubTpl|PropelObjectCollection $rOperationTypeSubTpl The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTpl($rOperationTypeSubTpl, $comparison = null)
    {
        if ($rOperationTypeSubTpl instanceof ROperationTypeSubTpl) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_TPL_ID, $rOperationTypeSubTpl->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTpl instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_TPL_ID, $rOperationTypeSubTpl->toKeyValue('PrimaryKey', 'OstTplId'), $comparison);
        } else {
            throw new PropelException('filterByROperationTypeSubTpl() only accepts arguments of type ROperationTypeSubTpl or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTpl relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTpl($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTpl');

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
            $this->addJoinObject($join, 'ROperationTypeSubTpl');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTpl relation ROperationTypeSubTpl object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTpl($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTpl', 'ROperationTypeSubTplQuery');
    }

    /**
     * Filter the query by a related RCurrencies object
     *
     * @param   RCurrencies|PropelObjectCollection $rCurrencies The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCurrencies($rCurrencies, $comparison = null)
    {
        if ($rCurrencies instanceof RCurrencies) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_R_CURRENCY_ID, $rCurrencies->getRCurrencyId(), $comparison);
        } elseif ($rCurrencies instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_R_CURRENCY_ID, $rCurrencies->toKeyValue('PrimaryKey', 'RCurrencyId'), $comparison);
        } else {
            throw new PropelException('filterByRCurrencies() only accepts arguments of type RCurrencies or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RCurrencies relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     */
    public function joinRCurrencies($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RCurrencies');

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
            $this->addJoinObject($join, 'RCurrencies');
        }

        return $this;
    }

    /**
     * Use the RCurrencies relation RCurrencies object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCurrenciesQuery A secondary query class using the current class as primary query
     */
    public function useRCurrenciesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRCurrencies($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RCurrencies', 'RCurrenciesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTypeSubTplCurrencies $rOperationTypeSubTplCurrencies Object to remove from the list of results
     *
     * @return ROperationTypeSubTplCurrenciesQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeSubTplCurrencies = null)
    {
        if ($rOperationTypeSubTplCurrencies) {
            $this->addUsingAlias(ROperationTypeSubTplCurrenciesPeer::R_OPERATION_TYPE_SUB_TPL_CURRENCY_ID, $rOperationTypeSubTplCurrencies->getROperationTypeSubTplCurrencyId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
