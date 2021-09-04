<?php


/**
 * Base class that represents a query for the 'operation_sales_teams' table.
 *
 *
 *
 * @method OperationSalesTeamsQuery orderByOpeSalesTeamId($order = Criteria::ASC) Order by the ope_sales_team_id column
 * @method OperationSalesTeamsQuery orderBySalesTeamId($order = Criteria::ASC) Order by the sales_team_id column
 * @method OperationSalesTeamsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method OperationSalesTeamsQuery groupByOpeSalesTeamId() Group by the ope_sales_team_id column
 * @method OperationSalesTeamsQuery groupBySalesTeamId() Group by the sales_team_id column
 * @method OperationSalesTeamsQuery groupByUserId() Group by the user_id column
 *
 * @method OperationSalesTeamsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationSalesTeamsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationSalesTeamsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationSalesTeams findOne(PropelPDO $con = null) Return the first OperationSalesTeams matching the query
 * @method OperationSalesTeams findOneOrCreate(PropelPDO $con = null) Return the first OperationSalesTeams matching the query, or a new OperationSalesTeams object populated from the query conditions when no match is found
 *
 * @method OperationSalesTeams findOneBySalesTeamId(int $sales_team_id) Return the first OperationSalesTeams filtered by the sales_team_id column
 * @method OperationSalesTeams findOneByUserId(int $user_id) Return the first OperationSalesTeams filtered by the user_id column
 *
 * @method array findByOpeSalesTeamId(int $ope_sales_team_id) Return OperationSalesTeams objects filtered by the ope_sales_team_id column
 * @method array findBySalesTeamId(int $sales_team_id) Return OperationSalesTeams objects filtered by the sales_team_id column
 * @method array findByUserId(int $user_id) Return OperationSalesTeams objects filtered by the user_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationSalesTeamsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationSalesTeamsQuery object.
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
            $modelName = 'OperationSalesTeams';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationSalesTeamsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationSalesTeamsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationSalesTeamsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationSalesTeamsQuery) {
            return $criteria;
        }
        $query = new OperationSalesTeamsQuery(null, null, $modelAlias);

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
     * @return   OperationSalesTeams|OperationSalesTeams[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationSalesTeamsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationSalesTeamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationSalesTeams A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOpeSalesTeamId($key, $con = null)
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
     * @return                 OperationSalesTeams A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ope_sales_team_id`, `sales_team_id`, `user_id` FROM `operation_sales_teams` WHERE `ope_sales_team_id` = :p0';
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
            $obj = new OperationSalesTeams();
            $obj->hydrate($row);
            OperationSalesTeamsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OperationSalesTeams|OperationSalesTeams[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationSalesTeams[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationSalesTeamsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationSalesTeamsPeer::OPE_SALES_TEAM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationSalesTeamsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationSalesTeamsPeer::OPE_SALES_TEAM_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ope_sales_team_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpeSalesTeamId(1234); // WHERE ope_sales_team_id = 1234
     * $query->filterByOpeSalesTeamId(array(12, 34)); // WHERE ope_sales_team_id IN (12, 34)
     * $query->filterByOpeSalesTeamId(array('min' => 12)); // WHERE ope_sales_team_id >= 12
     * $query->filterByOpeSalesTeamId(array('max' => 12)); // WHERE ope_sales_team_id <= 12
     * </code>
     *
     * @param     mixed $opeSalesTeamId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationSalesTeamsQuery The current query, for fluid interface
     */
    public function filterByOpeSalesTeamId($opeSalesTeamId = null, $comparison = null)
    {
        if (is_array($opeSalesTeamId)) {
            $useMinMax = false;
            if (isset($opeSalesTeamId['min'])) {
                $this->addUsingAlias(OperationSalesTeamsPeer::OPE_SALES_TEAM_ID, $opeSalesTeamId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opeSalesTeamId['max'])) {
                $this->addUsingAlias(OperationSalesTeamsPeer::OPE_SALES_TEAM_ID, $opeSalesTeamId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationSalesTeamsPeer::OPE_SALES_TEAM_ID, $opeSalesTeamId, $comparison);
    }

    /**
     * Filter the query on the sales_team_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySalesTeamId(1234); // WHERE sales_team_id = 1234
     * $query->filterBySalesTeamId(array(12, 34)); // WHERE sales_team_id IN (12, 34)
     * $query->filterBySalesTeamId(array('min' => 12)); // WHERE sales_team_id >= 12
     * $query->filterBySalesTeamId(array('max' => 12)); // WHERE sales_team_id <= 12
     * </code>
     *
     * @param     mixed $salesTeamId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationSalesTeamsQuery The current query, for fluid interface
     */
    public function filterBySalesTeamId($salesTeamId = null, $comparison = null)
    {
        if (is_array($salesTeamId)) {
            $useMinMax = false;
            if (isset($salesTeamId['min'])) {
                $this->addUsingAlias(OperationSalesTeamsPeer::SALES_TEAM_ID, $salesTeamId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salesTeamId['max'])) {
                $this->addUsingAlias(OperationSalesTeamsPeer::SALES_TEAM_ID, $salesTeamId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationSalesTeamsPeer::SALES_TEAM_ID, $salesTeamId, $comparison);
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
     * @return OperationSalesTeamsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(OperationSalesTeamsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(OperationSalesTeamsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationSalesTeamsPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   OperationSalesTeams $operationSalesTeams Object to remove from the list of results
     *
     * @return OperationSalesTeamsQuery The current query, for fluid interface
     */
    public function prune($operationSalesTeams = null)
    {
        if ($operationSalesTeams) {
            $this->addUsingAlias(OperationSalesTeamsPeer::OPE_SALES_TEAM_ID, $operationSalesTeams->getOpeSalesTeamId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
