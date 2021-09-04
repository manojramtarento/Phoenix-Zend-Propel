<?php


/**
 * Base class that represents a query for the 'operation_primes' table.
 *
 *
 *
 * @method OperationPrimesQuery orderByOpPrimeId($order = Criteria::ASC) Order by the op_prime_id column
 * @method OperationPrimesQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method OperationPrimesQuery orderByOpPrimeLibelle($order = Criteria::ASC) Order by the op_prime_libelle column
 * @method OperationPrimesQuery orderByOpPrimeNumero($order = Criteria::ASC) Order by the op_prime_numero column
 * @method OperationPrimesQuery orderByGdlArtId($order = Criteria::ASC) Order by the gdl_art_id column
 * @method OperationPrimesQuery orderByOperationPrimeCurrencyId($order = Criteria::ASC) Order by the operation_prime_currency_id column
 * @method OperationPrimesQuery orderByOperationPrimeRRewardTypeId($order = Criteria::ASC) Order by the operation_prime_r_reward_type_id column
 * @method OperationPrimesQuery orderByOperationPrimeRRewardExpeditionModeId($order = Criteria::ASC) Order by the operation_prime_r_reward_expedition_mode_id column
 * @method OperationPrimesQuery orderByOperationPrimeRRewardTransporterId($order = Criteria::ASC) Order by the operation_prime_r_reward_transporter_id column
 * @method OperationPrimesQuery orderByOperationPrimeFixedAmount($order = Criteria::ASC) Order by the operation_prime_fixed_amount column
 * @method OperationPrimesQuery orderByOperationPrimeProductPricePourcentage($order = Criteria::ASC) Order by the operation_prime_product_price_pourcentage column
 * @method OperationPrimesQuery orderByOperationPrimeMaximumAmount($order = Criteria::ASC) Order by the operation_prime_maximum_amount column
 *
 * @method OperationPrimesQuery groupByOpPrimeId() Group by the op_prime_id column
 * @method OperationPrimesQuery groupByOpId() Group by the op_id column
 * @method OperationPrimesQuery groupByOpPrimeLibelle() Group by the op_prime_libelle column
 * @method OperationPrimesQuery groupByOpPrimeNumero() Group by the op_prime_numero column
 * @method OperationPrimesQuery groupByGdlArtId() Group by the gdl_art_id column
 * @method OperationPrimesQuery groupByOperationPrimeCurrencyId() Group by the operation_prime_currency_id column
 * @method OperationPrimesQuery groupByOperationPrimeRRewardTypeId() Group by the operation_prime_r_reward_type_id column
 * @method OperationPrimesQuery groupByOperationPrimeRRewardExpeditionModeId() Group by the operation_prime_r_reward_expedition_mode_id column
 * @method OperationPrimesQuery groupByOperationPrimeRRewardTransporterId() Group by the operation_prime_r_reward_transporter_id column
 * @method OperationPrimesQuery groupByOperationPrimeFixedAmount() Group by the operation_prime_fixed_amount column
 * @method OperationPrimesQuery groupByOperationPrimeProductPricePourcentage() Group by the operation_prime_product_price_pourcentage column
 * @method OperationPrimesQuery groupByOperationPrimeMaximumAmount() Group by the operation_prime_maximum_amount column
 *
 * @method OperationPrimesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationPrimesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationPrimesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationPrimesQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method OperationPrimesQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method OperationPrimesQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method OperationPrimesQuery leftJoinRCurrencies($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCurrencies relation
 * @method OperationPrimesQuery rightJoinRCurrencies($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCurrencies relation
 * @method OperationPrimesQuery innerJoinRCurrencies($relationAlias = null) Adds a INNER JOIN clause to the query using the RCurrencies relation
 *
 * @method OperationPrimesQuery leftJoinRRewardTypes($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRewardTypes relation
 * @method OperationPrimesQuery rightJoinRRewardTypes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRewardTypes relation
 * @method OperationPrimesQuery innerJoinRRewardTypes($relationAlias = null) Adds a INNER JOIN clause to the query using the RRewardTypes relation
 *
 * @method OperationPrimesQuery leftJoinRRewardExpeditionModes($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRewardExpeditionModes relation
 * @method OperationPrimesQuery rightJoinRRewardExpeditionModes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRewardExpeditionModes relation
 * @method OperationPrimesQuery innerJoinRRewardExpeditionModes($relationAlias = null) Adds a INNER JOIN clause to the query using the RRewardExpeditionModes relation
 *
 * @method OperationPrimesQuery leftJoinRRewardTransporters($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRewardTransporters relation
 * @method OperationPrimesQuery rightJoinRRewardTransporters($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRewardTransporters relation
 * @method OperationPrimesQuery innerJoinRRewardTransporters($relationAlias = null) Adds a INNER JOIN clause to the query using the RRewardTransporters relation
 *
 * @method OperationPrimesQuery leftJoinOperationPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrestations relation
 * @method OperationPrimesQuery rightJoinOperationPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrestations relation
 * @method OperationPrimesQuery innerJoinOperationPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrestations relation
 *
 * @method OperationPrimesQuery leftJoinOperationScenarii($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationScenarii relation
 * @method OperationPrimesQuery rightJoinOperationScenarii($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationScenarii relation
 * @method OperationPrimesQuery innerJoinOperationScenarii($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationScenarii relation
 *
 * @method OperationPrimesQuery leftJoinLnkOperationPrimeRCountries($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkOperationPrimeRCountries relation
 * @method OperationPrimesQuery rightJoinLnkOperationPrimeRCountries($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkOperationPrimeRCountries relation
 * @method OperationPrimesQuery innerJoinLnkOperationPrimeRCountries($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkOperationPrimeRCountries relation
 *
 * @method OperationPrimes findOne(PropelPDO $con = null) Return the first OperationPrimes matching the query
 * @method OperationPrimes findOneOrCreate(PropelPDO $con = null) Return the first OperationPrimes matching the query, or a new OperationPrimes object populated from the query conditions when no match is found
 *
 * @method OperationPrimes findOneByOpId(int $op_id) Return the first OperationPrimes filtered by the op_id column
 * @method OperationPrimes findOneByOpPrimeLibelle(string $op_prime_libelle) Return the first OperationPrimes filtered by the op_prime_libelle column
 * @method OperationPrimes findOneByOpPrimeNumero(int $op_prime_numero) Return the first OperationPrimes filtered by the op_prime_numero column
 * @method OperationPrimes findOneByGdlArtId(int $gdl_art_id) Return the first OperationPrimes filtered by the gdl_art_id column
 * @method OperationPrimes findOneByOperationPrimeCurrencyId(int $operation_prime_currency_id) Return the first OperationPrimes filtered by the operation_prime_currency_id column
 * @method OperationPrimes findOneByOperationPrimeRRewardTypeId(int $operation_prime_r_reward_type_id) Return the first OperationPrimes filtered by the operation_prime_r_reward_type_id column
 * @method OperationPrimes findOneByOperationPrimeRRewardExpeditionModeId(int $operation_prime_r_reward_expedition_mode_id) Return the first OperationPrimes filtered by the operation_prime_r_reward_expedition_mode_id column
 * @method OperationPrimes findOneByOperationPrimeRRewardTransporterId(int $operation_prime_r_reward_transporter_id) Return the first OperationPrimes filtered by the operation_prime_r_reward_transporter_id column
 * @method OperationPrimes findOneByOperationPrimeFixedAmount(float $operation_prime_fixed_amount) Return the first OperationPrimes filtered by the operation_prime_fixed_amount column
 * @method OperationPrimes findOneByOperationPrimeProductPricePourcentage(int $operation_prime_product_price_pourcentage) Return the first OperationPrimes filtered by the operation_prime_product_price_pourcentage column
 * @method OperationPrimes findOneByOperationPrimeMaximumAmount(float $operation_prime_maximum_amount) Return the first OperationPrimes filtered by the operation_prime_maximum_amount column
 *
 * @method array findByOpPrimeId(int $op_prime_id) Return OperationPrimes objects filtered by the op_prime_id column
 * @method array findByOpId(int $op_id) Return OperationPrimes objects filtered by the op_id column
 * @method array findByOpPrimeLibelle(string $op_prime_libelle) Return OperationPrimes objects filtered by the op_prime_libelle column
 * @method array findByOpPrimeNumero(int $op_prime_numero) Return OperationPrimes objects filtered by the op_prime_numero column
 * @method array findByGdlArtId(int $gdl_art_id) Return OperationPrimes objects filtered by the gdl_art_id column
 * @method array findByOperationPrimeCurrencyId(int $operation_prime_currency_id) Return OperationPrimes objects filtered by the operation_prime_currency_id column
 * @method array findByOperationPrimeRRewardTypeId(int $operation_prime_r_reward_type_id) Return OperationPrimes objects filtered by the operation_prime_r_reward_type_id column
 * @method array findByOperationPrimeRRewardExpeditionModeId(int $operation_prime_r_reward_expedition_mode_id) Return OperationPrimes objects filtered by the operation_prime_r_reward_expedition_mode_id column
 * @method array findByOperationPrimeRRewardTransporterId(int $operation_prime_r_reward_transporter_id) Return OperationPrimes objects filtered by the operation_prime_r_reward_transporter_id column
 * @method array findByOperationPrimeFixedAmount(float $operation_prime_fixed_amount) Return OperationPrimes objects filtered by the operation_prime_fixed_amount column
 * @method array findByOperationPrimeProductPricePourcentage(int $operation_prime_product_price_pourcentage) Return OperationPrimes objects filtered by the operation_prime_product_price_pourcentage column
 * @method array findByOperationPrimeMaximumAmount(float $operation_prime_maximum_amount) Return OperationPrimes objects filtered by the operation_prime_maximum_amount column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationPrimesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationPrimesQuery object.
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
            $modelName = 'OperationPrimes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationPrimesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationPrimesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationPrimesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationPrimesQuery) {
            return $criteria;
        }
        $query = new OperationPrimesQuery(null, null, $modelAlias);

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
     * @return   OperationPrimes|OperationPrimes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationPrimesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationPrimesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationPrimes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOpPrimeId($key, $con = null)
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
     * @return                 OperationPrimes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_prime_id`, `op_id`, `op_prime_libelle`, `op_prime_numero`, `gdl_art_id`, `operation_prime_currency_id`, `operation_prime_r_reward_type_id`, `operation_prime_r_reward_expedition_mode_id`, `operation_prime_r_reward_transporter_id`, `operation_prime_fixed_amount`, `operation_prime_product_price_pourcentage`, `operation_prime_maximum_amount` FROM `operation_primes` WHERE `op_prime_id` = :p0';
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
            $obj = new OperationPrimes();
            $obj->hydrate($row);
            OperationPrimesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OperationPrimes|OperationPrimes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationPrimes[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationPrimesPeer::OP_PRIME_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationPrimesPeer::OP_PRIME_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the op_prime_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrimeId(1234); // WHERE op_prime_id = 1234
     * $query->filterByOpPrimeId(array(12, 34)); // WHERE op_prime_id IN (12, 34)
     * $query->filterByOpPrimeId(array('min' => 12)); // WHERE op_prime_id >= 12
     * $query->filterByOpPrimeId(array('max' => 12)); // WHERE op_prime_id <= 12
     * </code>
     *
     * @param     mixed $opPrimeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOpPrimeId($opPrimeId = null, $comparison = null)
    {
        if (is_array($opPrimeId)) {
            $useMinMax = false;
            if (isset($opPrimeId['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::OP_PRIME_ID, $opPrimeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrimeId['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::OP_PRIME_ID, $opPrimeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OP_PRIME_ID, $opPrimeId, $comparison);
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
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the op_prime_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrimeLibelle('fooValue');   // WHERE op_prime_libelle = 'fooValue'
     * $query->filterByOpPrimeLibelle('%fooValue%'); // WHERE op_prime_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opPrimeLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOpPrimeLibelle($opPrimeLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opPrimeLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opPrimeLibelle)) {
                $opPrimeLibelle = str_replace('*', '%', $opPrimeLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OP_PRIME_LIBELLE, $opPrimeLibelle, $comparison);
    }

    /**
     * Filter the query on the op_prime_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrimeNumero(1234); // WHERE op_prime_numero = 1234
     * $query->filterByOpPrimeNumero(array(12, 34)); // WHERE op_prime_numero IN (12, 34)
     * $query->filterByOpPrimeNumero(array('min' => 12)); // WHERE op_prime_numero >= 12
     * $query->filterByOpPrimeNumero(array('max' => 12)); // WHERE op_prime_numero <= 12
     * </code>
     *
     * @param     mixed $opPrimeNumero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOpPrimeNumero($opPrimeNumero = null, $comparison = null)
    {
        if (is_array($opPrimeNumero)) {
            $useMinMax = false;
            if (isset($opPrimeNumero['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::OP_PRIME_NUMERO, $opPrimeNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrimeNumero['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::OP_PRIME_NUMERO, $opPrimeNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OP_PRIME_NUMERO, $opPrimeNumero, $comparison);
    }

    /**
     * Filter the query on the gdl_art_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGdlArtId(1234); // WHERE gdl_art_id = 1234
     * $query->filterByGdlArtId(array(12, 34)); // WHERE gdl_art_id IN (12, 34)
     * $query->filterByGdlArtId(array('min' => 12)); // WHERE gdl_art_id >= 12
     * $query->filterByGdlArtId(array('max' => 12)); // WHERE gdl_art_id <= 12
     * </code>
     *
     * @param     mixed $gdlArtId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByGdlArtId($gdlArtId = null, $comparison = null)
    {
        if (is_array($gdlArtId)) {
            $useMinMax = false;
            if (isset($gdlArtId['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::GDL_ART_ID, $gdlArtId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gdlArtId['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::GDL_ART_ID, $gdlArtId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::GDL_ART_ID, $gdlArtId, $comparison);
    }

    /**
     * Filter the query on the operation_prime_currency_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationPrimeCurrencyId(1234); // WHERE operation_prime_currency_id = 1234
     * $query->filterByOperationPrimeCurrencyId(array(12, 34)); // WHERE operation_prime_currency_id IN (12, 34)
     * $query->filterByOperationPrimeCurrencyId(array('min' => 12)); // WHERE operation_prime_currency_id >= 12
     * $query->filterByOperationPrimeCurrencyId(array('max' => 12)); // WHERE operation_prime_currency_id <= 12
     * </code>
     *
     * @see       filterByRCurrencies()
     *
     * @param     mixed $operationPrimeCurrencyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOperationPrimeCurrencyId($operationPrimeCurrencyId = null, $comparison = null)
    {
        if (is_array($operationPrimeCurrencyId)) {
            $useMinMax = false;
            if (isset($operationPrimeCurrencyId['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, $operationPrimeCurrencyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationPrimeCurrencyId['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, $operationPrimeCurrencyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, $operationPrimeCurrencyId, $comparison);
    }

    /**
     * Filter the query on the operation_prime_r_reward_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationPrimeRRewardTypeId(1234); // WHERE operation_prime_r_reward_type_id = 1234
     * $query->filterByOperationPrimeRRewardTypeId(array(12, 34)); // WHERE operation_prime_r_reward_type_id IN (12, 34)
     * $query->filterByOperationPrimeRRewardTypeId(array('min' => 12)); // WHERE operation_prime_r_reward_type_id >= 12
     * $query->filterByOperationPrimeRRewardTypeId(array('max' => 12)); // WHERE operation_prime_r_reward_type_id <= 12
     * </code>
     *
     * @see       filterByRRewardTypes()
     *
     * @param     mixed $operationPrimeRRewardTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOperationPrimeRRewardTypeId($operationPrimeRRewardTypeId = null, $comparison = null)
    {
        if (is_array($operationPrimeRRewardTypeId)) {
            $useMinMax = false;
            if (isset($operationPrimeRRewardTypeId['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, $operationPrimeRRewardTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationPrimeRRewardTypeId['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, $operationPrimeRRewardTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, $operationPrimeRRewardTypeId, $comparison);
    }

    /**
     * Filter the query on the operation_prime_r_reward_expedition_mode_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationPrimeRRewardExpeditionModeId(1234); // WHERE operation_prime_r_reward_expedition_mode_id = 1234
     * $query->filterByOperationPrimeRRewardExpeditionModeId(array(12, 34)); // WHERE operation_prime_r_reward_expedition_mode_id IN (12, 34)
     * $query->filterByOperationPrimeRRewardExpeditionModeId(array('min' => 12)); // WHERE operation_prime_r_reward_expedition_mode_id >= 12
     * $query->filterByOperationPrimeRRewardExpeditionModeId(array('max' => 12)); // WHERE operation_prime_r_reward_expedition_mode_id <= 12
     * </code>
     *
     * @see       filterByRRewardExpeditionModes()
     *
     * @param     mixed $operationPrimeRRewardExpeditionModeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOperationPrimeRRewardExpeditionModeId($operationPrimeRRewardExpeditionModeId = null, $comparison = null)
    {
        if (is_array($operationPrimeRRewardExpeditionModeId)) {
            $useMinMax = false;
            if (isset($operationPrimeRRewardExpeditionModeId['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, $operationPrimeRRewardExpeditionModeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationPrimeRRewardExpeditionModeId['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, $operationPrimeRRewardExpeditionModeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, $operationPrimeRRewardExpeditionModeId, $comparison);
    }

    /**
     * Filter the query on the operation_prime_r_reward_transporter_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationPrimeRRewardTransporterId(1234); // WHERE operation_prime_r_reward_transporter_id = 1234
     * $query->filterByOperationPrimeRRewardTransporterId(array(12, 34)); // WHERE operation_prime_r_reward_transporter_id IN (12, 34)
     * $query->filterByOperationPrimeRRewardTransporterId(array('min' => 12)); // WHERE operation_prime_r_reward_transporter_id >= 12
     * $query->filterByOperationPrimeRRewardTransporterId(array('max' => 12)); // WHERE operation_prime_r_reward_transporter_id <= 12
     * </code>
     *
     * @see       filterByRRewardTransporters()
     *
     * @param     mixed $operationPrimeRRewardTransporterId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOperationPrimeRRewardTransporterId($operationPrimeRRewardTransporterId = null, $comparison = null)
    {
        if (is_array($operationPrimeRRewardTransporterId)) {
            $useMinMax = false;
            if (isset($operationPrimeRRewardTransporterId['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, $operationPrimeRRewardTransporterId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationPrimeRRewardTransporterId['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, $operationPrimeRRewardTransporterId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, $operationPrimeRRewardTransporterId, $comparison);
    }

    /**
     * Filter the query on the operation_prime_fixed_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationPrimeFixedAmount(1234); // WHERE operation_prime_fixed_amount = 1234
     * $query->filterByOperationPrimeFixedAmount(array(12, 34)); // WHERE operation_prime_fixed_amount IN (12, 34)
     * $query->filterByOperationPrimeFixedAmount(array('min' => 12)); // WHERE operation_prime_fixed_amount >= 12
     * $query->filterByOperationPrimeFixedAmount(array('max' => 12)); // WHERE operation_prime_fixed_amount <= 12
     * </code>
     *
     * @param     mixed $operationPrimeFixedAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOperationPrimeFixedAmount($operationPrimeFixedAmount = null, $comparison = null)
    {
        if (is_array($operationPrimeFixedAmount)) {
            $useMinMax = false;
            if (isset($operationPrimeFixedAmount['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT, $operationPrimeFixedAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationPrimeFixedAmount['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT, $operationPrimeFixedAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_FIXED_AMOUNT, $operationPrimeFixedAmount, $comparison);
    }

    /**
     * Filter the query on the operation_prime_product_price_pourcentage column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationPrimeProductPricePourcentage(1234); // WHERE operation_prime_product_price_pourcentage = 1234
     * $query->filterByOperationPrimeProductPricePourcentage(array(12, 34)); // WHERE operation_prime_product_price_pourcentage IN (12, 34)
     * $query->filterByOperationPrimeProductPricePourcentage(array('min' => 12)); // WHERE operation_prime_product_price_pourcentage >= 12
     * $query->filterByOperationPrimeProductPricePourcentage(array('max' => 12)); // WHERE operation_prime_product_price_pourcentage <= 12
     * </code>
     *
     * @param     mixed $operationPrimeProductPricePourcentage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOperationPrimeProductPricePourcentage($operationPrimeProductPricePourcentage = null, $comparison = null)
    {
        if (is_array($operationPrimeProductPricePourcentage)) {
            $useMinMax = false;
            if (isset($operationPrimeProductPricePourcentage['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE, $operationPrimeProductPricePourcentage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationPrimeProductPricePourcentage['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE, $operationPrimeProductPricePourcentage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_PRODUCT_PRICE_POURCENTAGE, $operationPrimeProductPricePourcentage, $comparison);
    }

    /**
     * Filter the query on the operation_prime_maximum_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationPrimeMaximumAmount(1234); // WHERE operation_prime_maximum_amount = 1234
     * $query->filterByOperationPrimeMaximumAmount(array(12, 34)); // WHERE operation_prime_maximum_amount IN (12, 34)
     * $query->filterByOperationPrimeMaximumAmount(array('min' => 12)); // WHERE operation_prime_maximum_amount >= 12
     * $query->filterByOperationPrimeMaximumAmount(array('max' => 12)); // WHERE operation_prime_maximum_amount <= 12
     * </code>
     *
     * @param     mixed $operationPrimeMaximumAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function filterByOperationPrimeMaximumAmount($operationPrimeMaximumAmount = null, $comparison = null)
    {
        if (is_array($operationPrimeMaximumAmount)) {
            $useMinMax = false;
            if (isset($operationPrimeMaximumAmount['min'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT, $operationPrimeMaximumAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationPrimeMaximumAmount['max'])) {
                $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT, $operationPrimeMaximumAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_MAXIMUM_AMOUNT, $operationPrimeMaximumAmount, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrimesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(OperationPrimesPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrimesPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return OperationPrimesQuery The current query, for fluid interface
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
     * Filter the query by a related RCurrencies object
     *
     * @param   RCurrencies|PropelObjectCollection $rCurrencies The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrimesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCurrencies($rCurrencies, $comparison = null)
    {
        if ($rCurrencies instanceof RCurrencies) {
            return $this
                ->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, $rCurrencies->getRCurrencyId(), $comparison);
        } elseif ($rCurrencies instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_CURRENCY_ID, $rCurrencies->toKeyValue('PrimaryKey', 'RCurrencyId'), $comparison);
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
     * @return OperationPrimesQuery The current query, for fluid interface
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
     * Filter the query by a related RRewardTypes object
     *
     * @param   RRewardTypes|PropelObjectCollection $rRewardTypes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrimesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRewardTypes($rRewardTypes, $comparison = null)
    {
        if ($rRewardTypes instanceof RRewardTypes) {
            return $this
                ->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, $rRewardTypes->getRRewardTypeId(), $comparison);
        } elseif ($rRewardTypes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TYPE_ID, $rRewardTypes->toKeyValue('PrimaryKey', 'RRewardTypeId'), $comparison);
        } else {
            throw new PropelException('filterByRRewardTypes() only accepts arguments of type RRewardTypes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRewardTypes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function joinRRewardTypes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRewardTypes');

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
            $this->addJoinObject($join, 'RRewardTypes');
        }

        return $this;
    }

    /**
     * Use the RRewardTypes relation RRewardTypes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRewardTypesQuery A secondary query class using the current class as primary query
     */
    public function useRRewardTypesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRRewardTypes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRewardTypes', 'RRewardTypesQuery');
    }

    /**
     * Filter the query by a related RRewardExpeditionModes object
     *
     * @param   RRewardExpeditionModes|PropelObjectCollection $rRewardExpeditionModes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrimesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRewardExpeditionModes($rRewardExpeditionModes, $comparison = null)
    {
        if ($rRewardExpeditionModes instanceof RRewardExpeditionModes) {
            return $this
                ->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, $rRewardExpeditionModes->getRRewardExpeditionModeId(), $comparison);
        } elseif ($rRewardExpeditionModes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_EXPEDITION_MODE_ID, $rRewardExpeditionModes->toKeyValue('PrimaryKey', 'RRewardExpeditionModeId'), $comparison);
        } else {
            throw new PropelException('filterByRRewardExpeditionModes() only accepts arguments of type RRewardExpeditionModes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRewardExpeditionModes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function joinRRewardExpeditionModes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRewardExpeditionModes');

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
            $this->addJoinObject($join, 'RRewardExpeditionModes');
        }

        return $this;
    }

    /**
     * Use the RRewardExpeditionModes relation RRewardExpeditionModes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRewardExpeditionModesQuery A secondary query class using the current class as primary query
     */
    public function useRRewardExpeditionModesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRRewardExpeditionModes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRewardExpeditionModes', 'RRewardExpeditionModesQuery');
    }

    /**
     * Filter the query by a related RRewardTransporters object
     *
     * @param   RRewardTransporters|PropelObjectCollection $rRewardTransporters The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrimesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRewardTransporters($rRewardTransporters, $comparison = null)
    {
        if ($rRewardTransporters instanceof RRewardTransporters) {
            return $this
                ->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, $rRewardTransporters->getRRewardTransporterId(), $comparison);
        } elseif ($rRewardTransporters instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrimesPeer::OPERATION_PRIME_R_REWARD_TRANSPORTER_ID, $rRewardTransporters->toKeyValue('PrimaryKey', 'RRewardTransporterId'), $comparison);
        } else {
            throw new PropelException('filterByRRewardTransporters() only accepts arguments of type RRewardTransporters or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRewardTransporters relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function joinRRewardTransporters($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRewardTransporters');

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
            $this->addJoinObject($join, 'RRewardTransporters');
        }

        return $this;
    }

    /**
     * Use the RRewardTransporters relation RRewardTransporters object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRewardTransportersQuery A secondary query class using the current class as primary query
     */
    public function useRRewardTransportersQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRRewardTransporters($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRewardTransporters', 'RRewardTransportersQuery');
    }

    /**
     * Filter the query by a related OperationPrestations object
     *
     * @param   OperationPrestations|PropelObjectCollection $operationPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrimesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrestations($operationPrestations, $comparison = null)
    {
        if ($operationPrestations instanceof OperationPrestations) {
            return $this
                ->addUsingAlias(OperationPrimesPeer::OP_PRIME_ID, $operationPrestations->getOpPrestPrimeId(), $comparison);
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
     * @return OperationPrimesQuery The current query, for fluid interface
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
     * Filter the query by a related OperationScenarii object
     *
     * @param   OperationScenarii|PropelObjectCollection $operationScenarii  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrimesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationScenarii($operationScenarii, $comparison = null)
    {
        if ($operationScenarii instanceof OperationScenarii) {
            return $this
                ->addUsingAlias(OperationPrimesPeer::OP_PRIME_ID, $operationScenarii->getOpRPrimeId(), $comparison);
        } elseif ($operationScenarii instanceof PropelObjectCollection) {
            return $this
                ->useOperationScenariiQuery()
                ->filterByPrimaryKeys($operationScenarii->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationScenarii() only accepts arguments of type OperationScenarii or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationScenarii relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function joinOperationScenarii($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationScenarii');

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
            $this->addJoinObject($join, 'OperationScenarii');
        }

        return $this;
    }

    /**
     * Use the OperationScenarii relation OperationScenarii object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationScenariiQuery A secondary query class using the current class as primary query
     */
    public function useOperationScenariiQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationScenarii($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationScenarii', 'OperationScenariiQuery');
    }

    /**
     * Filter the query by a related LnkOperationPrimeRCountries object
     *
     * @param   LnkOperationPrimeRCountries|PropelObjectCollection $lnkOperationPrimeRCountries  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrimesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkOperationPrimeRCountries($lnkOperationPrimeRCountries, $comparison = null)
    {
        if ($lnkOperationPrimeRCountries instanceof LnkOperationPrimeRCountries) {
            return $this
                ->addUsingAlias(OperationPrimesPeer::OP_PRIME_ID, $lnkOperationPrimeRCountries->getLnkOperationPrimeRCountryOperationPrimeId(), $comparison);
        } elseif ($lnkOperationPrimeRCountries instanceof PropelObjectCollection) {
            return $this
                ->useLnkOperationPrimeRCountriesQuery()
                ->filterByPrimaryKeys($lnkOperationPrimeRCountries->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkOperationPrimeRCountries() only accepts arguments of type LnkOperationPrimeRCountries or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkOperationPrimeRCountries relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function joinLnkOperationPrimeRCountries($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkOperationPrimeRCountries');

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
            $this->addJoinObject($join, 'LnkOperationPrimeRCountries');
        }

        return $this;
    }

    /**
     * Use the LnkOperationPrimeRCountries relation LnkOperationPrimeRCountries object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkOperationPrimeRCountriesQuery A secondary query class using the current class as primary query
     */
    public function useLnkOperationPrimeRCountriesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLnkOperationPrimeRCountries($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkOperationPrimeRCountries', 'LnkOperationPrimeRCountriesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   OperationPrimes $operationPrimes Object to remove from the list of results
     *
     * @return OperationPrimesQuery The current query, for fluid interface
     */
    public function prune($operationPrimes = null)
    {
        if ($operationPrimes) {
            $this->addUsingAlias(OperationPrimesPeer::OP_PRIME_ID, $operationPrimes->getOpPrimeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
