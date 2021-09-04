<?php


/**
 * Base class that represents a query for the 'operation_scenarii' table.
 *
 *
 *
 * @method OperationScenariiQuery orderByOpScenarioId($order = Criteria::ASC) Order by the op_scenario_id column
 * @method OperationScenariiQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method OperationScenariiQuery orderByOpScenarioNumero($order = Criteria::ASC) Order by the op_scenario_numero column
 * @method OperationScenariiQuery orderByOpRScenarioId($order = Criteria::ASC) Order by the op_r_scenario_id column
 * @method OperationScenariiQuery orderByOpScenarioLibelle($order = Criteria::ASC) Order by the op_scenario_libelle column
 * @method OperationScenariiQuery orderByOpScenarioVolume($order = Criteria::ASC) Order by the op_scenario_volume column
 * @method OperationScenariiQuery orderByOpScenarioPcent($order = Criteria::ASC) Order by the op_scenario_pcent column
 * @method OperationScenariiQuery orderByOpRPrimeId($order = Criteria::ASC) Order by the op_r_prime_id column
 * @method OperationScenariiQuery orderByOpScenarioReference($order = Criteria::ASC) Order by the op_scenario_reference column
 *
 * @method OperationScenariiQuery groupByOpScenarioId() Group by the op_scenario_id column
 * @method OperationScenariiQuery groupByOpId() Group by the op_id column
 * @method OperationScenariiQuery groupByOpScenarioNumero() Group by the op_scenario_numero column
 * @method OperationScenariiQuery groupByOpRScenarioId() Group by the op_r_scenario_id column
 * @method OperationScenariiQuery groupByOpScenarioLibelle() Group by the op_scenario_libelle column
 * @method OperationScenariiQuery groupByOpScenarioVolume() Group by the op_scenario_volume column
 * @method OperationScenariiQuery groupByOpScenarioPcent() Group by the op_scenario_pcent column
 * @method OperationScenariiQuery groupByOpRPrimeId() Group by the op_r_prime_id column
 * @method OperationScenariiQuery groupByOpScenarioReference() Group by the op_scenario_reference column
 *
 * @method OperationScenariiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationScenariiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationScenariiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationScenariiQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method OperationScenariiQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method OperationScenariiQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method OperationScenariiQuery leftJoinRScenarios($relationAlias = null) Adds a LEFT JOIN clause to the query using the RScenarios relation
 * @method OperationScenariiQuery rightJoinRScenarios($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RScenarios relation
 * @method OperationScenariiQuery innerJoinRScenarios($relationAlias = null) Adds a INNER JOIN clause to the query using the RScenarios relation
 *
 * @method OperationScenariiQuery leftJoinOperationPrimes($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrimes relation
 * @method OperationScenariiQuery rightJoinOperationPrimes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrimes relation
 * @method OperationScenariiQuery innerJoinOperationPrimes($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrimes relation
 *
 * @method OperationScenariiQuery leftJoinOperationPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrestations relation
 * @method OperationScenariiQuery rightJoinOperationPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrestations relation
 * @method OperationScenariiQuery innerJoinOperationPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrestations relation
 *
 * @method OperationScenariiQuery leftJoinOperationScenariiParentsRelatedByOpsNumero($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationScenariiParentsRelatedByOpsNumero relation
 * @method OperationScenariiQuery rightJoinOperationScenariiParentsRelatedByOpsNumero($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationScenariiParentsRelatedByOpsNumero relation
 * @method OperationScenariiQuery innerJoinOperationScenariiParentsRelatedByOpsNumero($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationScenariiParentsRelatedByOpsNumero relation
 *
 * @method OperationScenariiQuery leftJoinOperationScenariiParentsRelatedByOpsParentNumero($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationScenariiParentsRelatedByOpsParentNumero relation
 * @method OperationScenariiQuery rightJoinOperationScenariiParentsRelatedByOpsParentNumero($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationScenariiParentsRelatedByOpsParentNumero relation
 * @method OperationScenariiQuery innerJoinOperationScenariiParentsRelatedByOpsParentNumero($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationScenariiParentsRelatedByOpsParentNumero relation
 *
 * @method OperationScenarii findOne(PropelPDO $con = null) Return the first OperationScenarii matching the query
 * @method OperationScenarii findOneOrCreate(PropelPDO $con = null) Return the first OperationScenarii matching the query, or a new OperationScenarii object populated from the query conditions when no match is found
 *
 * @method OperationScenarii findOneByOpId(int $op_id) Return the first OperationScenarii filtered by the op_id column
 * @method OperationScenarii findOneByOpScenarioNumero(int $op_scenario_numero) Return the first OperationScenarii filtered by the op_scenario_numero column
 * @method OperationScenarii findOneByOpRScenarioId(int $op_r_scenario_id) Return the first OperationScenarii filtered by the op_r_scenario_id column
 * @method OperationScenarii findOneByOpScenarioLibelle(string $op_scenario_libelle) Return the first OperationScenarii filtered by the op_scenario_libelle column
 * @method OperationScenarii findOneByOpScenarioVolume(int $op_scenario_volume) Return the first OperationScenarii filtered by the op_scenario_volume column
 * @method OperationScenarii findOneByOpScenarioPcent(float $op_scenario_pcent) Return the first OperationScenarii filtered by the op_scenario_pcent column
 * @method OperationScenarii findOneByOpRPrimeId(int $op_r_prime_id) Return the first OperationScenarii filtered by the op_r_prime_id column
 * @method OperationScenarii findOneByOpScenarioReference(string $op_scenario_reference) Return the first OperationScenarii filtered by the op_scenario_reference column
 *
 * @method array findByOpScenarioId(int $op_scenario_id) Return OperationScenarii objects filtered by the op_scenario_id column
 * @method array findByOpId(int $op_id) Return OperationScenarii objects filtered by the op_id column
 * @method array findByOpScenarioNumero(int $op_scenario_numero) Return OperationScenarii objects filtered by the op_scenario_numero column
 * @method array findByOpRScenarioId(int $op_r_scenario_id) Return OperationScenarii objects filtered by the op_r_scenario_id column
 * @method array findByOpScenarioLibelle(string $op_scenario_libelle) Return OperationScenarii objects filtered by the op_scenario_libelle column
 * @method array findByOpScenarioVolume(int $op_scenario_volume) Return OperationScenarii objects filtered by the op_scenario_volume column
 * @method array findByOpScenarioPcent(float $op_scenario_pcent) Return OperationScenarii objects filtered by the op_scenario_pcent column
 * @method array findByOpRPrimeId(int $op_r_prime_id) Return OperationScenarii objects filtered by the op_r_prime_id column
 * @method array findByOpScenarioReference(string $op_scenario_reference) Return OperationScenarii objects filtered by the op_scenario_reference column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationScenariiQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationScenariiQuery object.
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
            $modelName = 'OperationScenarii';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationScenariiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationScenariiQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationScenariiQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationScenariiQuery) {
            return $criteria;
        }
        $query = new OperationScenariiQuery(null, null, $modelAlias);

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
     * @return   OperationScenarii|OperationScenarii[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationScenariiPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationScenariiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationScenarii A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOpScenarioId($key, $con = null)
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
     * @return                 OperationScenarii A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_scenario_id`, `op_id`, `op_scenario_numero`, `op_r_scenario_id`, `op_scenario_libelle`, `op_scenario_volume`, `op_scenario_pcent`, `op_r_prime_id`, `op_scenario_reference` FROM `operation_scenarii` WHERE `op_scenario_id` = :p0';
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
            $obj = new OperationScenarii();
            $obj->hydrate($row);
            OperationScenariiPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OperationScenarii|OperationScenarii[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationScenarii[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the op_scenario_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpScenarioId(1234); // WHERE op_scenario_id = 1234
     * $query->filterByOpScenarioId(array(12, 34)); // WHERE op_scenario_id IN (12, 34)
     * $query->filterByOpScenarioId(array('min' => 12)); // WHERE op_scenario_id >= 12
     * $query->filterByOpScenarioId(array('max' => 12)); // WHERE op_scenario_id <= 12
     * </code>
     *
     * @param     mixed $opScenarioId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByOpScenarioId($opScenarioId = null, $comparison = null)
    {
        if (is_array($opScenarioId)) {
            $useMinMax = false;
            if (isset($opScenarioId['min'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_ID, $opScenarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opScenarioId['max'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_ID, $opScenarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_ID, $opScenarioId, $comparison);
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
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationScenariiPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the op_scenario_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByOpScenarioNumero(1234); // WHERE op_scenario_numero = 1234
     * $query->filterByOpScenarioNumero(array(12, 34)); // WHERE op_scenario_numero IN (12, 34)
     * $query->filterByOpScenarioNumero(array('min' => 12)); // WHERE op_scenario_numero >= 12
     * $query->filterByOpScenarioNumero(array('max' => 12)); // WHERE op_scenario_numero <= 12
     * </code>
     *
     * @param     mixed $opScenarioNumero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByOpScenarioNumero($opScenarioNumero = null, $comparison = null)
    {
        if (is_array($opScenarioNumero)) {
            $useMinMax = false;
            if (isset($opScenarioNumero['min'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_NUMERO, $opScenarioNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opScenarioNumero['max'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_NUMERO, $opScenarioNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_NUMERO, $opScenarioNumero, $comparison);
    }

    /**
     * Filter the query on the op_r_scenario_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRScenarioId(1234); // WHERE op_r_scenario_id = 1234
     * $query->filterByOpRScenarioId(array(12, 34)); // WHERE op_r_scenario_id IN (12, 34)
     * $query->filterByOpRScenarioId(array('min' => 12)); // WHERE op_r_scenario_id >= 12
     * $query->filterByOpRScenarioId(array('max' => 12)); // WHERE op_r_scenario_id <= 12
     * </code>
     *
     * @see       filterByRScenarios()
     *
     * @param     mixed $opRScenarioId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByOpRScenarioId($opRScenarioId = null, $comparison = null)
    {
        if (is_array($opRScenarioId)) {
            $useMinMax = false;
            if (isset($opRScenarioId['min'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_R_SCENARIO_ID, $opRScenarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opRScenarioId['max'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_R_SCENARIO_ID, $opRScenarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationScenariiPeer::OP_R_SCENARIO_ID, $opRScenarioId, $comparison);
    }

    /**
     * Filter the query on the op_scenario_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOpScenarioLibelle('fooValue');   // WHERE op_scenario_libelle = 'fooValue'
     * $query->filterByOpScenarioLibelle('%fooValue%'); // WHERE op_scenario_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opScenarioLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByOpScenarioLibelle($opScenarioLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opScenarioLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opScenarioLibelle)) {
                $opScenarioLibelle = str_replace('*', '%', $opScenarioLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_LIBELLE, $opScenarioLibelle, $comparison);
    }

    /**
     * Filter the query on the op_scenario_volume column
     *
     * Example usage:
     * <code>
     * $query->filterByOpScenarioVolume(1234); // WHERE op_scenario_volume = 1234
     * $query->filterByOpScenarioVolume(array(12, 34)); // WHERE op_scenario_volume IN (12, 34)
     * $query->filterByOpScenarioVolume(array('min' => 12)); // WHERE op_scenario_volume >= 12
     * $query->filterByOpScenarioVolume(array('max' => 12)); // WHERE op_scenario_volume <= 12
     * </code>
     *
     * @param     mixed $opScenarioVolume The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByOpScenarioVolume($opScenarioVolume = null, $comparison = null)
    {
        if (is_array($opScenarioVolume)) {
            $useMinMax = false;
            if (isset($opScenarioVolume['min'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_VOLUME, $opScenarioVolume['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opScenarioVolume['max'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_VOLUME, $opScenarioVolume['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_VOLUME, $opScenarioVolume, $comparison);
    }

    /**
     * Filter the query on the op_scenario_pcent column
     *
     * Example usage:
     * <code>
     * $query->filterByOpScenarioPcent(1234); // WHERE op_scenario_pcent = 1234
     * $query->filterByOpScenarioPcent(array(12, 34)); // WHERE op_scenario_pcent IN (12, 34)
     * $query->filterByOpScenarioPcent(array('min' => 12)); // WHERE op_scenario_pcent >= 12
     * $query->filterByOpScenarioPcent(array('max' => 12)); // WHERE op_scenario_pcent <= 12
     * </code>
     *
     * @param     mixed $opScenarioPcent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByOpScenarioPcent($opScenarioPcent = null, $comparison = null)
    {
        if (is_array($opScenarioPcent)) {
            $useMinMax = false;
            if (isset($opScenarioPcent['min'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_PCENT, $opScenarioPcent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opScenarioPcent['max'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_PCENT, $opScenarioPcent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_PCENT, $opScenarioPcent, $comparison);
    }

    /**
     * Filter the query on the op_r_prime_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRPrimeId(1234); // WHERE op_r_prime_id = 1234
     * $query->filterByOpRPrimeId(array(12, 34)); // WHERE op_r_prime_id IN (12, 34)
     * $query->filterByOpRPrimeId(array('min' => 12)); // WHERE op_r_prime_id >= 12
     * $query->filterByOpRPrimeId(array('max' => 12)); // WHERE op_r_prime_id <= 12
     * </code>
     *
     * @see       filterByOperationPrimes()
     *
     * @param     mixed $opRPrimeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByOpRPrimeId($opRPrimeId = null, $comparison = null)
    {
        if (is_array($opRPrimeId)) {
            $useMinMax = false;
            if (isset($opRPrimeId['min'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_R_PRIME_ID, $opRPrimeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opRPrimeId['max'])) {
                $this->addUsingAlias(OperationScenariiPeer::OP_R_PRIME_ID, $opRPrimeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationScenariiPeer::OP_R_PRIME_ID, $opRPrimeId, $comparison);
    }

    /**
     * Filter the query on the op_scenario_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByOpScenarioReference('fooValue');   // WHERE op_scenario_reference = 'fooValue'
     * $query->filterByOpScenarioReference('%fooValue%'); // WHERE op_scenario_reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opScenarioReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function filterByOpScenarioReference($opScenarioReference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opScenarioReference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opScenarioReference)) {
                $opScenarioReference = str_replace('*', '%', $opScenarioReference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_REFERENCE, $opScenarioReference, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationScenariiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(OperationScenariiPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationScenariiPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return OperationScenariiQuery The current query, for fluid interface
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
     * Filter the query by a related RScenarios object
     *
     * @param   RScenarios|PropelObjectCollection $rScenarios The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationScenariiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRScenarios($rScenarios, $comparison = null)
    {
        if ($rScenarios instanceof RScenarios) {
            return $this
                ->addUsingAlias(OperationScenariiPeer::OP_R_SCENARIO_ID, $rScenarios->getRScenarioId(), $comparison);
        } elseif ($rScenarios instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationScenariiPeer::OP_R_SCENARIO_ID, $rScenarios->toKeyValue('PrimaryKey', 'RScenarioId'), $comparison);
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
     * @return OperationScenariiQuery The current query, for fluid interface
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
     * Filter the query by a related OperationPrimes object
     *
     * @param   OperationPrimes|PropelObjectCollection $operationPrimes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationScenariiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrimes($operationPrimes, $comparison = null)
    {
        if ($operationPrimes instanceof OperationPrimes) {
            return $this
                ->addUsingAlias(OperationScenariiPeer::OP_R_PRIME_ID, $operationPrimes->getOpPrimeId(), $comparison);
        } elseif ($operationPrimes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationScenariiPeer::OP_R_PRIME_ID, $operationPrimes->toKeyValue('PrimaryKey', 'OpPrimeId'), $comparison);
        } else {
            throw new PropelException('filterByOperationPrimes() only accepts arguments of type OperationPrimes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationPrimes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function joinOperationPrimes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationPrimes');

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
            $this->addJoinObject($join, 'OperationPrimes');
        }

        return $this;
    }

    /**
     * Use the OperationPrimes relation OperationPrimes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationPrimesQuery A secondary query class using the current class as primary query
     */
    public function useOperationPrimesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationPrimes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationPrimes', 'OperationPrimesQuery');
    }

    /**
     * Filter the query by a related OperationPrestations object
     *
     * @param   OperationPrestations|PropelObjectCollection $operationPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationScenariiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrestations($operationPrestations, $comparison = null)
    {
        if ($operationPrestations instanceof OperationPrestations) {
            return $this
                ->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_ID, $operationPrestations->getOpPrestScenaId(), $comparison);
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
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function joinOperationPrestations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useOperationPrestationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationPrestations', 'OperationPrestationsQuery');
    }

    /**
     * Filter the query by a related OperationScenariiParents object
     *
     * @param   OperationScenariiParents|PropelObjectCollection $operationScenariiParents  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationScenariiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationScenariiParentsRelatedByOpsNumero($operationScenariiParents, $comparison = null)
    {
        if ($operationScenariiParents instanceof OperationScenariiParents) {
            return $this
                ->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_NUMERO, $operationScenariiParents->getOpsNumero(), $comparison);
        } elseif ($operationScenariiParents instanceof PropelObjectCollection) {
            return $this
                ->useOperationScenariiParentsRelatedByOpsNumeroQuery()
                ->filterByPrimaryKeys($operationScenariiParents->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationScenariiParentsRelatedByOpsNumero() only accepts arguments of type OperationScenariiParents or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationScenariiParentsRelatedByOpsNumero relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function joinOperationScenariiParentsRelatedByOpsNumero($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationScenariiParentsRelatedByOpsNumero');

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
            $this->addJoinObject($join, 'OperationScenariiParentsRelatedByOpsNumero');
        }

        return $this;
    }

    /**
     * Use the OperationScenariiParentsRelatedByOpsNumero relation OperationScenariiParents object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationScenariiParentsQuery A secondary query class using the current class as primary query
     */
    public function useOperationScenariiParentsRelatedByOpsNumeroQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationScenariiParentsRelatedByOpsNumero($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationScenariiParentsRelatedByOpsNumero', 'OperationScenariiParentsQuery');
    }

    /**
     * Filter the query by a related OperationScenariiParents object
     *
     * @param   OperationScenariiParents|PropelObjectCollection $operationScenariiParents  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationScenariiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationScenariiParentsRelatedByOpsParentNumero($operationScenariiParents, $comparison = null)
    {
        if ($operationScenariiParents instanceof OperationScenariiParents) {
            return $this
                ->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_NUMERO, $operationScenariiParents->getOpsParentNumero(), $comparison);
        } elseif ($operationScenariiParents instanceof PropelObjectCollection) {
            return $this
                ->useOperationScenariiParentsRelatedByOpsParentNumeroQuery()
                ->filterByPrimaryKeys($operationScenariiParents->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationScenariiParentsRelatedByOpsParentNumero() only accepts arguments of type OperationScenariiParents or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationScenariiParentsRelatedByOpsParentNumero relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function joinOperationScenariiParentsRelatedByOpsParentNumero($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationScenariiParentsRelatedByOpsParentNumero');

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
            $this->addJoinObject($join, 'OperationScenariiParentsRelatedByOpsParentNumero');
        }

        return $this;
    }

    /**
     * Use the OperationScenariiParentsRelatedByOpsParentNumero relation OperationScenariiParents object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationScenariiParentsQuery A secondary query class using the current class as primary query
     */
    public function useOperationScenariiParentsRelatedByOpsParentNumeroQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationScenariiParentsRelatedByOpsParentNumero($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationScenariiParentsRelatedByOpsParentNumero', 'OperationScenariiParentsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   OperationScenarii $operationScenarii Object to remove from the list of results
     *
     * @return OperationScenariiQuery The current query, for fluid interface
     */
    public function prune($operationScenarii = null)
    {
        if ($operationScenarii) {
            $this->addUsingAlias(OperationScenariiPeer::OP_SCENARIO_ID, $operationScenarii->getOpScenarioId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
