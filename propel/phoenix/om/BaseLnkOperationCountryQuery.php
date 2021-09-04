<?php


/**
 * Base class that represents a query for the 'lnk_operation_country' table.
 *
 *
 *
 * @method LnkOperationCountryQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method LnkOperationCountryQuery orderByLnkOpCountryId($order = Criteria::ASC) Order by the lnk_op_country_id column
 *
 * @method LnkOperationCountryQuery groupByOpId() Group by the op_id column
 * @method LnkOperationCountryQuery groupByLnkOpCountryId() Group by the lnk_op_country_id column
 *
 * @method LnkOperationCountryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkOperationCountryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkOperationCountryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkOperationCountryQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method LnkOperationCountryQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method LnkOperationCountryQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method LnkOperationCountryQuery leftJoinRCountries($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCountries relation
 * @method LnkOperationCountryQuery rightJoinRCountries($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCountries relation
 * @method LnkOperationCountryQuery innerJoinRCountries($relationAlias = null) Adds a INNER JOIN clause to the query using the RCountries relation
 *
 * @method LnkOperationCountry findOne(PropelPDO $con = null) Return the first LnkOperationCountry matching the query
 * @method LnkOperationCountry findOneOrCreate(PropelPDO $con = null) Return the first LnkOperationCountry matching the query, or a new LnkOperationCountry object populated from the query conditions when no match is found
 *
 * @method LnkOperationCountry findOneByOpId(int $op_id) Return the first LnkOperationCountry filtered by the op_id column
 * @method LnkOperationCountry findOneByLnkOpCountryId(int $lnk_op_country_id) Return the first LnkOperationCountry filtered by the lnk_op_country_id column
 *
 * @method array findByOpId(int $op_id) Return LnkOperationCountry objects filtered by the op_id column
 * @method array findByLnkOpCountryId(int $lnk_op_country_id) Return LnkOperationCountry objects filtered by the lnk_op_country_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkOperationCountryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkOperationCountryQuery object.
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
            $modelName = 'LnkOperationCountry';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkOperationCountryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkOperationCountryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkOperationCountryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkOperationCountryQuery) {
            return $criteria;
        }
        $query = new LnkOperationCountryQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$op_id, $lnk_op_country_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   LnkOperationCountry|LnkOperationCountry[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkOperationCountryPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkOperationCountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 LnkOperationCountry A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_id`, `lnk_op_country_id` FROM `lnk_operation_country` WHERE `op_id` = :p0 AND `lnk_op_country_id` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new LnkOperationCountry();
            $obj->hydrate($row);
            LnkOperationCountryPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return LnkOperationCountry|LnkOperationCountry[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|LnkOperationCountry[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkOperationCountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LnkOperationCountryPeer::OP_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LnkOperationCountryPeer::LNK_OP_COUNTRY_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkOperationCountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LnkOperationCountryPeer::OP_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LnkOperationCountryPeer::LNK_OP_COUNTRY_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the op_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpId(1234); // WHERE op_id = 1234
     * $query->filterByOpId(array(12, 34)); // WHERE op_id IN (12, 34)
     * $query->filterByOpId(array('min' => 12)); // WHERE op_id >= 12
     * $query->filterByOpId(array('max' => 12)); // WHERE op_id <= 12
     * </code>
     *
     * @see       filterByOperations()
     *
     * @param     mixed $opId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationCountryQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(LnkOperationCountryPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(LnkOperationCountryPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationCountryPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the lnk_op_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkOpCountryId(1234); // WHERE lnk_op_country_id = 1234
     * $query->filterByLnkOpCountryId(array(12, 34)); // WHERE lnk_op_country_id IN (12, 34)
     * $query->filterByLnkOpCountryId(array('min' => 12)); // WHERE lnk_op_country_id >= 12
     * $query->filterByLnkOpCountryId(array('max' => 12)); // WHERE lnk_op_country_id <= 12
     * </code>
     *
     * @see       filterByRCountries()
     *
     * @param     mixed $lnkOpCountryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationCountryQuery The current query, for fluid interface
     */
    public function filterByLnkOpCountryId($lnkOpCountryId = null, $comparison = null)
    {
        if (is_array($lnkOpCountryId)) {
            $useMinMax = false;
            if (isset($lnkOpCountryId['min'])) {
                $this->addUsingAlias(LnkOperationCountryPeer::LNK_OP_COUNTRY_ID, $lnkOpCountryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkOpCountryId['max'])) {
                $this->addUsingAlias(LnkOperationCountryPeer::LNK_OP_COUNTRY_ID, $lnkOpCountryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationCountryPeer::LNK_OP_COUNTRY_ID, $lnkOpCountryId, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkOperationCountryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(LnkOperationCountryPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkOperationCountryPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return LnkOperationCountryQuery The current query, for fluid interface
     */
    public function joinOperations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useOperationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Operations', 'OperationsQuery');
    }

    /**
     * Filter the query by a related RCountries object
     *
     * @param   RCountries|PropelObjectCollection $rCountries The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkOperationCountryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCountries($rCountries, $comparison = null)
    {
        if ($rCountries instanceof RCountries) {
            return $this
                ->addUsingAlias(LnkOperationCountryPeer::LNK_OP_COUNTRY_ID, $rCountries->getRCountryId(), $comparison);
        } elseif ($rCountries instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkOperationCountryPeer::LNK_OP_COUNTRY_ID, $rCountries->toKeyValue('PrimaryKey', 'RCountryId'), $comparison);
        } else {
            throw new PropelException('filterByRCountries() only accepts arguments of type RCountries or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RCountries relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkOperationCountryQuery The current query, for fluid interface
     */
    public function joinRCountries($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RCountries');

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
            $this->addJoinObject($join, 'RCountries');
        }

        return $this;
    }

    /**
     * Use the RCountries relation RCountries object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCountriesQuery A secondary query class using the current class as primary query
     */
    public function useRCountriesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRCountries($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RCountries', 'RCountriesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   LnkOperationCountry $lnkOperationCountry Object to remove from the list of results
     *
     * @return LnkOperationCountryQuery The current query, for fluid interface
     */
    public function prune($lnkOperationCountry = null)
    {
        if ($lnkOperationCountry) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LnkOperationCountryPeer::OP_ID), $lnkOperationCountry->getOpId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LnkOperationCountryPeer::LNK_OP_COUNTRY_ID), $lnkOperationCountry->getLnkOpCountryId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
