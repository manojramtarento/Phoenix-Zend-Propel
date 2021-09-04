<?php


/**
 * Base class that represents a query for the 'r_operation_sales_teams' table.
 *
 *
 *
 * @method ROperationSalesTeamsQuery orderByROpeSalesTeamId($order = Criteria::ASC) Order by the r_ope_sales_team_id column
 * @method ROperationSalesTeamsQuery orderByROpeSalesTeamLibelle($order = Criteria::ASC) Order by the r_ope_sales_team_libelle column
 *
 * @method ROperationSalesTeamsQuery groupByROpeSalesTeamId() Group by the r_ope_sales_team_id column
 * @method ROperationSalesTeamsQuery groupByROpeSalesTeamLibelle() Group by the r_ope_sales_team_libelle column
 *
 * @method ROperationSalesTeamsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationSalesTeamsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationSalesTeamsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationSalesTeams findOne(PropelPDO $con = null) Return the first ROperationSalesTeams matching the query
 * @method ROperationSalesTeams findOneOrCreate(PropelPDO $con = null) Return the first ROperationSalesTeams matching the query, or a new ROperationSalesTeams object populated from the query conditions when no match is found
 *
 * @method ROperationSalesTeams findOneByROpeSalesTeamLibelle(string $r_ope_sales_team_libelle) Return the first ROperationSalesTeams filtered by the r_ope_sales_team_libelle column
 *
 * @method array findByROpeSalesTeamId(int $r_ope_sales_team_id) Return ROperationSalesTeams objects filtered by the r_ope_sales_team_id column
 * @method array findByROpeSalesTeamLibelle(string $r_ope_sales_team_libelle) Return ROperationSalesTeams objects filtered by the r_ope_sales_team_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationSalesTeamsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationSalesTeamsQuery object.
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
            $modelName = 'ROperationSalesTeams';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationSalesTeamsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationSalesTeamsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationSalesTeamsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationSalesTeamsQuery) {
            return $criteria;
        }
        $query = new ROperationSalesTeamsQuery(null, null, $modelAlias);

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
     * @return   ROperationSalesTeams|ROperationSalesTeams[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationSalesTeamsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationSalesTeamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationSalesTeams A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROpeSalesTeamId($key, $con = null)
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
     * @return                 ROperationSalesTeams A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_ope_sales_team_id`, `r_ope_sales_team_libelle` FROM `r_operation_sales_teams` WHERE `r_ope_sales_team_id` = :p0';
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
            $obj = new ROperationSalesTeams();
            $obj->hydrate($row);
            ROperationSalesTeamsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationSalesTeams|ROperationSalesTeams[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationSalesTeams[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationSalesTeamsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationSalesTeamsPeer::R_OPE_SALES_TEAM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationSalesTeamsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationSalesTeamsPeer::R_OPE_SALES_TEAM_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_ope_sales_team_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROpeSalesTeamId(1234); // WHERE r_ope_sales_team_id = 1234
     * $query->filterByROpeSalesTeamId(array(12, 34)); // WHERE r_ope_sales_team_id IN (12, 34)
     * $query->filterByROpeSalesTeamId(array('min' => 12)); // WHERE r_ope_sales_team_id >= 12
     * $query->filterByROpeSalesTeamId(array('max' => 12)); // WHERE r_ope_sales_team_id <= 12
     * </code>
     *
     * @param     mixed $rOpeSalesTeamId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationSalesTeamsQuery The current query, for fluid interface
     */
    public function filterByROpeSalesTeamId($rOpeSalesTeamId = null, $comparison = null)
    {
        if (is_array($rOpeSalesTeamId)) {
            $useMinMax = false;
            if (isset($rOpeSalesTeamId['min'])) {
                $this->addUsingAlias(ROperationSalesTeamsPeer::R_OPE_SALES_TEAM_ID, $rOpeSalesTeamId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpeSalesTeamId['max'])) {
                $this->addUsingAlias(ROperationSalesTeamsPeer::R_OPE_SALES_TEAM_ID, $rOpeSalesTeamId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationSalesTeamsPeer::R_OPE_SALES_TEAM_ID, $rOpeSalesTeamId, $comparison);
    }

    /**
     * Filter the query on the r_ope_sales_team_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByROpeSalesTeamLibelle('fooValue');   // WHERE r_ope_sales_team_libelle = 'fooValue'
     * $query->filterByROpeSalesTeamLibelle('%fooValue%'); // WHERE r_ope_sales_team_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rOpeSalesTeamLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationSalesTeamsQuery The current query, for fluid interface
     */
    public function filterByROpeSalesTeamLibelle($rOpeSalesTeamLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rOpeSalesTeamLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rOpeSalesTeamLibelle)) {
                $rOpeSalesTeamLibelle = str_replace('*', '%', $rOpeSalesTeamLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationSalesTeamsPeer::R_OPE_SALES_TEAM_LIBELLE, $rOpeSalesTeamLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationSalesTeams $rOperationSalesTeams Object to remove from the list of results
     *
     * @return ROperationSalesTeamsQuery The current query, for fluid interface
     */
    public function prune($rOperationSalesTeams = null)
    {
        if ($rOperationSalesTeams) {
            $this->addUsingAlias(ROperationSalesTeamsPeer::R_OPE_SALES_TEAM_ID, $rOperationSalesTeams->getROpeSalesTeamId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
