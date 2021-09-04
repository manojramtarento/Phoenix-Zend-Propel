<?php


/**
 * Base class that represents a query for the 'r_operation_type_sub_tpl_scenario' table.
 *
 *
 *
 * @method ROperationTypeSubTplScenarioQuery orderByOstTplScenarioId($order = Criteria::ASC) Order by the ost_tpl_scenario_id column
 * @method ROperationTypeSubTplScenarioQuery orderByOstTplId($order = Criteria::ASC) Order by the ost_tpl_id column
 * @method ROperationTypeSubTplScenarioQuery orderByRScenarioId($order = Criteria::ASC) Order by the r_scenario_id column
 * @method ROperationTypeSubTplScenarioQuery orderByRScenarioNumero($order = Criteria::ASC) Order by the r_scenario_numero column
 * @method ROperationTypeSubTplScenarioQuery orderByRScenarioPcent($order = Criteria::ASC) Order by the r_scenario_pcent column
 * @method ROperationTypeSubTplScenarioQuery orderByRPrimeNumero($order = Criteria::ASC) Order by the r_prime_numero column
 * @method ROperationTypeSubTplScenarioQuery orderByRScenarioReference($order = Criteria::ASC) Order by the r_scenario_reference column
 * @method ROperationTypeSubTplScenarioQuery orderByOstTplScenarioIsMandatory($order = Criteria::ASC) Order by the ost_tpl_scenario_is_mandatory column
 *
 * @method ROperationTypeSubTplScenarioQuery groupByOstTplScenarioId() Group by the ost_tpl_scenario_id column
 * @method ROperationTypeSubTplScenarioQuery groupByOstTplId() Group by the ost_tpl_id column
 * @method ROperationTypeSubTplScenarioQuery groupByRScenarioId() Group by the r_scenario_id column
 * @method ROperationTypeSubTplScenarioQuery groupByRScenarioNumero() Group by the r_scenario_numero column
 * @method ROperationTypeSubTplScenarioQuery groupByRScenarioPcent() Group by the r_scenario_pcent column
 * @method ROperationTypeSubTplScenarioQuery groupByRPrimeNumero() Group by the r_prime_numero column
 * @method ROperationTypeSubTplScenarioQuery groupByRScenarioReference() Group by the r_scenario_reference column
 * @method ROperationTypeSubTplScenarioQuery groupByOstTplScenarioIsMandatory() Group by the ost_tpl_scenario_is_mandatory column
 *
 * @method ROperationTypeSubTplScenarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeSubTplScenarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeSubTplScenarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeSubTplScenarioQuery leftJoinROperationTypeSubTpl($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplScenarioQuery rightJoinROperationTypeSubTpl($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplScenarioQuery innerJoinROperationTypeSubTpl($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTpl relation
 *
 * @method ROperationTypeSubTplScenarioQuery leftJoinRScenarios($relationAlias = null) Adds a LEFT JOIN clause to the query using the RScenarios relation
 * @method ROperationTypeSubTplScenarioQuery rightJoinRScenarios($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RScenarios relation
 * @method ROperationTypeSubTplScenarioQuery innerJoinRScenarios($relationAlias = null) Adds a INNER JOIN clause to the query using the RScenarios relation
 *
 * @method ROperationTypeSubTplScenario findOne(PropelPDO $con = null) Return the first ROperationTypeSubTplScenario matching the query
 * @method ROperationTypeSubTplScenario findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeSubTplScenario matching the query, or a new ROperationTypeSubTplScenario object populated from the query conditions when no match is found
 *
 * @method ROperationTypeSubTplScenario findOneByOstTplId(int $ost_tpl_id) Return the first ROperationTypeSubTplScenario filtered by the ost_tpl_id column
 * @method ROperationTypeSubTplScenario findOneByRScenarioId(int $r_scenario_id) Return the first ROperationTypeSubTplScenario filtered by the r_scenario_id column
 * @method ROperationTypeSubTplScenario findOneByRScenarioNumero(int $r_scenario_numero) Return the first ROperationTypeSubTplScenario filtered by the r_scenario_numero column
 * @method ROperationTypeSubTplScenario findOneByRScenarioPcent(int $r_scenario_pcent) Return the first ROperationTypeSubTplScenario filtered by the r_scenario_pcent column
 * @method ROperationTypeSubTplScenario findOneByRPrimeNumero(int $r_prime_numero) Return the first ROperationTypeSubTplScenario filtered by the r_prime_numero column
 * @method ROperationTypeSubTplScenario findOneByRScenarioReference(string $r_scenario_reference) Return the first ROperationTypeSubTplScenario filtered by the r_scenario_reference column
 * @method ROperationTypeSubTplScenario findOneByOstTplScenarioIsMandatory(boolean $ost_tpl_scenario_is_mandatory) Return the first ROperationTypeSubTplScenario filtered by the ost_tpl_scenario_is_mandatory column
 *
 * @method array findByOstTplScenarioId(int $ost_tpl_scenario_id) Return ROperationTypeSubTplScenario objects filtered by the ost_tpl_scenario_id column
 * @method array findByOstTplId(int $ost_tpl_id) Return ROperationTypeSubTplScenario objects filtered by the ost_tpl_id column
 * @method array findByRScenarioId(int $r_scenario_id) Return ROperationTypeSubTplScenario objects filtered by the r_scenario_id column
 * @method array findByRScenarioNumero(int $r_scenario_numero) Return ROperationTypeSubTplScenario objects filtered by the r_scenario_numero column
 * @method array findByRScenarioPcent(int $r_scenario_pcent) Return ROperationTypeSubTplScenario objects filtered by the r_scenario_pcent column
 * @method array findByRPrimeNumero(int $r_prime_numero) Return ROperationTypeSubTplScenario objects filtered by the r_prime_numero column
 * @method array findByRScenarioReference(string $r_scenario_reference) Return ROperationTypeSubTplScenario objects filtered by the r_scenario_reference column
 * @method array findByOstTplScenarioIsMandatory(boolean $ost_tpl_scenario_is_mandatory) Return ROperationTypeSubTplScenario objects filtered by the ost_tpl_scenario_is_mandatory column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplScenarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeSubTplScenarioQuery object.
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
            $modelName = 'ROperationTypeSubTplScenario';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeSubTplScenarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeSubTplScenarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeSubTplScenarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeSubTplScenarioQuery) {
            return $criteria;
        }
        $query = new ROperationTypeSubTplScenarioQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeSubTplScenario|ROperationTypeSubTplScenario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeSubTplScenarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplScenarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeSubTplScenario A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOstTplScenarioId($key, $con = null)
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
     * @return                 ROperationTypeSubTplScenario A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ost_tpl_scenario_id`, `ost_tpl_id`, `r_scenario_id`, `r_scenario_numero`, `r_scenario_pcent`, `r_prime_numero`, `r_scenario_reference`, `ost_tpl_scenario_is_mandatory` FROM `r_operation_type_sub_tpl_scenario` WHERE `ost_tpl_scenario_id` = :p0';
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
            $obj = new ROperationTypeSubTplScenario();
            $obj->hydrate($row);
            ROperationTypeSubTplScenarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeSubTplScenario|ROperationTypeSubTplScenario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeSubTplScenario[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ost_tpl_scenario_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplScenarioId(1234); // WHERE ost_tpl_scenario_id = 1234
     * $query->filterByOstTplScenarioId(array(12, 34)); // WHERE ost_tpl_scenario_id IN (12, 34)
     * $query->filterByOstTplScenarioId(array('min' => 12)); // WHERE ost_tpl_scenario_id >= 12
     * $query->filterByOstTplScenarioId(array('max' => 12)); // WHERE ost_tpl_scenario_id <= 12
     * </code>
     *
     * @param     mixed $ostTplScenarioId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function filterByOstTplScenarioId($ostTplScenarioId = null, $comparison = null)
    {
        if (is_array($ostTplScenarioId)) {
            $useMinMax = false;
            if (isset($ostTplScenarioId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID, $ostTplScenarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplScenarioId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID, $ostTplScenarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID, $ostTplScenarioId, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplId(1234); // WHERE ost_tpl_id = 1234
     * $query->filterByOstTplId(array(12, 34)); // WHERE ost_tpl_id IN (12, 34)
     * $query->filterByOstTplId(array('min' => 12)); // WHERE ost_tpl_id >= 12
     * $query->filterByOstTplId(array('max' => 12)); // WHERE ost_tpl_id <= 12
     * </code>
     *
     * @see       filterByROperationTypeSubTpl()
     *
     * @param     mixed $ostTplId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function filterByOstTplId($ostTplId = null, $comparison = null)
    {
        if (is_array($ostTplId)) {
            $useMinMax = false;
            if (isset($ostTplId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_ID, $ostTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_ID, $ostTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_ID, $ostTplId, $comparison);
    }

    /**
     * Filter the query on the r_scenario_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRScenarioId(1234); // WHERE r_scenario_id = 1234
     * $query->filterByRScenarioId(array(12, 34)); // WHERE r_scenario_id IN (12, 34)
     * $query->filterByRScenarioId(array('min' => 12)); // WHERE r_scenario_id >= 12
     * $query->filterByRScenarioId(array('max' => 12)); // WHERE r_scenario_id <= 12
     * </code>
     *
     * @see       filterByRScenarios()
     *
     * @param     mixed $rScenarioId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function filterByRScenarioId($rScenarioId = null, $comparison = null)
    {
        if (is_array($rScenarioId)) {
            $useMinMax = false;
            if (isset($rScenarioId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_ID, $rScenarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rScenarioId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_ID, $rScenarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_ID, $rScenarioId, $comparison);
    }

    /**
     * Filter the query on the r_scenario_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByRScenarioNumero(1234); // WHERE r_scenario_numero = 1234
     * $query->filterByRScenarioNumero(array(12, 34)); // WHERE r_scenario_numero IN (12, 34)
     * $query->filterByRScenarioNumero(array('min' => 12)); // WHERE r_scenario_numero >= 12
     * $query->filterByRScenarioNumero(array('max' => 12)); // WHERE r_scenario_numero <= 12
     * </code>
     *
     * @param     mixed $rScenarioNumero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function filterByRScenarioNumero($rScenarioNumero = null, $comparison = null)
    {
        if (is_array($rScenarioNumero)) {
            $useMinMax = false;
            if (isset($rScenarioNumero['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_NUMERO, $rScenarioNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rScenarioNumero['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_NUMERO, $rScenarioNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_NUMERO, $rScenarioNumero, $comparison);
    }

    /**
     * Filter the query on the r_scenario_pcent column
     *
     * Example usage:
     * <code>
     * $query->filterByRScenarioPcent(1234); // WHERE r_scenario_pcent = 1234
     * $query->filterByRScenarioPcent(array(12, 34)); // WHERE r_scenario_pcent IN (12, 34)
     * $query->filterByRScenarioPcent(array('min' => 12)); // WHERE r_scenario_pcent >= 12
     * $query->filterByRScenarioPcent(array('max' => 12)); // WHERE r_scenario_pcent <= 12
     * </code>
     *
     * @param     mixed $rScenarioPcent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function filterByRScenarioPcent($rScenarioPcent = null, $comparison = null)
    {
        if (is_array($rScenarioPcent)) {
            $useMinMax = false;
            if (isset($rScenarioPcent['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_PCENT, $rScenarioPcent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rScenarioPcent['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_PCENT, $rScenarioPcent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_PCENT, $rScenarioPcent, $comparison);
    }

    /**
     * Filter the query on the r_prime_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByRPrimeNumero(1234); // WHERE r_prime_numero = 1234
     * $query->filterByRPrimeNumero(array(12, 34)); // WHERE r_prime_numero IN (12, 34)
     * $query->filterByRPrimeNumero(array('min' => 12)); // WHERE r_prime_numero >= 12
     * $query->filterByRPrimeNumero(array('max' => 12)); // WHERE r_prime_numero <= 12
     * </code>
     *
     * @param     mixed $rPrimeNumero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function filterByRPrimeNumero($rPrimeNumero = null, $comparison = null)
    {
        if (is_array($rPrimeNumero)) {
            $useMinMax = false;
            if (isset($rPrimeNumero['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_PRIME_NUMERO, $rPrimeNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPrimeNumero['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_PRIME_NUMERO, $rPrimeNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_PRIME_NUMERO, $rPrimeNumero, $comparison);
    }

    /**
     * Filter the query on the r_scenario_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByRScenarioReference('fooValue');   // WHERE r_scenario_reference = 'fooValue'
     * $query->filterByRScenarioReference('%fooValue%'); // WHERE r_scenario_reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rScenarioReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function filterByRScenarioReference($rScenarioReference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rScenarioReference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rScenarioReference)) {
                $rScenarioReference = str_replace('*', '%', $rScenarioReference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_REFERENCE, $rScenarioReference, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_scenario_is_mandatory column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplScenarioIsMandatory(true); // WHERE ost_tpl_scenario_is_mandatory = true
     * $query->filterByOstTplScenarioIsMandatory('yes'); // WHERE ost_tpl_scenario_is_mandatory = true
     * </code>
     *
     * @param     boolean|string $ostTplScenarioIsMandatory The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function filterByOstTplScenarioIsMandatory($ostTplScenarioIsMandatory = null, $comparison = null)
    {
        if (is_string($ostTplScenarioIsMandatory)) {
            $ostTplScenarioIsMandatory = in_array(strtolower($ostTplScenarioIsMandatory), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_IS_MANDATORY, $ostTplScenarioIsMandatory, $comparison);
    }

    /**
     * Filter the query by a related ROperationTypeSubTpl object
     *
     * @param   ROperationTypeSubTpl|PropelObjectCollection $rOperationTypeSubTpl The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTpl($rOperationTypeSubTpl, $comparison = null)
    {
        if ($rOperationTypeSubTpl instanceof ROperationTypeSubTpl) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_ID, $rOperationTypeSubTpl->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTpl instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_ID, $rOperationTypeSubTpl->toKeyValue('PrimaryKey', 'OstTplId'), $comparison);
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
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTpl($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useROperationTypeSubTplQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationTypeSubTpl($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTpl', 'ROperationTypeSubTplQuery');
    }

    /**
     * Filter the query by a related RScenarios object
     *
     * @param   RScenarios|PropelObjectCollection $rScenarios The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRScenarios($rScenarios, $comparison = null)
    {
        if ($rScenarios instanceof RScenarios) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_ID, $rScenarios->getRScenarioId(), $comparison);
        } elseif ($rScenarios instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplScenarioPeer::R_SCENARIO_ID, $rScenarios->toKeyValue('PrimaryKey', 'RScenarioId'), $comparison);
        } else {
            throw new PropelException('filterByRScenarios() only accepts arguments of type RScenarios or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RScenarios relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function joinRScenarios($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RScenarios');

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
            $this->addJoinObject($join, 'RScenarios');
        }

        return $this;
    }

    /**
     * Use the RScenarios relation RScenarios object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RScenariosQuery A secondary query class using the current class as primary query
     */
    public function useRScenariosQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRScenarios($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RScenarios', 'RScenariosQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTypeSubTplScenario $rOperationTypeSubTplScenario Object to remove from the list of results
     *
     * @return ROperationTypeSubTplScenarioQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeSubTplScenario = null)
    {
        if ($rOperationTypeSubTplScenario) {
            $this->addUsingAlias(ROperationTypeSubTplScenarioPeer::OST_TPL_SCENARIO_ID, $rOperationTypeSubTplScenario->getOstTplScenarioId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
