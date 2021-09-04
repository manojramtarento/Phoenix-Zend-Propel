<?php


/**
 * Base class that represents a query for the 'r_countries' table.
 *
 *
 *
 * @method RCountriesQuery orderByRCountryId($order = Criteria::ASC) Order by the r_country_id column
 * @method RCountriesQuery orderByRCountryCode($order = Criteria::ASC) Order by the r_country_code column
 * @method RCountriesQuery orderByRCountryName($order = Criteria::ASC) Order by the r_country_name column
 * @method RCountriesQuery orderByRCountryZoneCodeBin($order = Criteria::ASC) Order by the r_country_zone_code_bin column
 * @method RCountriesQuery orderByRCountryRCurrencyId($order = Criteria::ASC) Order by the r_country_r_currency_id column
 * @method RCountriesQuery orderByRCountryRCountryCallingCodeId($order = Criteria::ASC) Order by the r_country_r_country_calling_code_id column
 * @method RCountriesQuery orderByRCountryActif($order = Criteria::ASC) Order by the r_country_actif column
 *
 * @method RCountriesQuery groupByRCountryId() Group by the r_country_id column
 * @method RCountriesQuery groupByRCountryCode() Group by the r_country_code column
 * @method RCountriesQuery groupByRCountryName() Group by the r_country_name column
 * @method RCountriesQuery groupByRCountryZoneCodeBin() Group by the r_country_zone_code_bin column
 * @method RCountriesQuery groupByRCountryRCurrencyId() Group by the r_country_r_currency_id column
 * @method RCountriesQuery groupByRCountryRCountryCallingCodeId() Group by the r_country_r_country_calling_code_id column
 * @method RCountriesQuery groupByRCountryActif() Group by the r_country_actif column
 *
 * @method RCountriesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RCountriesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RCountriesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RCountriesQuery leftJoinRCurrencies($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCurrencies relation
 * @method RCountriesQuery rightJoinRCurrencies($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCurrencies relation
 * @method RCountriesQuery innerJoinRCurrencies($relationAlias = null) Adds a INNER JOIN clause to the query using the RCurrencies relation
 *
 * @method RCountriesQuery leftJoinRCountriesCallingCodes($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCountriesCallingCodes relation
 * @method RCountriesQuery rightJoinRCountriesCallingCodes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCountriesCallingCodes relation
 * @method RCountriesQuery innerJoinRCountriesCallingCodes($relationAlias = null) Adds a INNER JOIN clause to the query using the RCountriesCallingCodes relation
 *
 * @method RCountriesQuery leftJoinClientFactureOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientFactureOptions relation
 * @method RCountriesQuery rightJoinClientFactureOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientFactureOptions relation
 * @method RCountriesQuery innerJoinClientFactureOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientFactureOptions relation
 *
 * @method RCountriesQuery leftJoinLnkOperationCountry($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkOperationCountry relation
 * @method RCountriesQuery rightJoinLnkOperationCountry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkOperationCountry relation
 * @method RCountriesQuery innerJoinLnkOperationCountry($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkOperationCountry relation
 *
 * @method RCountriesQuery leftJoinLnkRCountryRCultures($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkRCountryRCultures relation
 * @method RCountriesQuery rightJoinLnkRCountryRCultures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkRCountryRCultures relation
 * @method RCountriesQuery innerJoinLnkRCountryRCultures($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkRCountryRCultures relation
 *
 * @method RCountriesQuery leftJoinLnkOperationPrimeRCountries($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkOperationPrimeRCountries relation
 * @method RCountriesQuery rightJoinLnkOperationPrimeRCountries($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkOperationPrimeRCountries relation
 * @method RCountriesQuery innerJoinLnkOperationPrimeRCountries($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkOperationPrimeRCountries relation
 *
 * @method RCountriesQuery leftJoinROperationTypeSubTplCountries($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplCountries relation
 * @method RCountriesQuery rightJoinROperationTypeSubTplCountries($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplCountries relation
 * @method RCountriesQuery innerJoinROperationTypeSubTplCountries($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplCountries relation
 *
 * @method RCountries findOne(PropelPDO $con = null) Return the first RCountries matching the query
 * @method RCountries findOneOrCreate(PropelPDO $con = null) Return the first RCountries matching the query, or a new RCountries object populated from the query conditions when no match is found
 *
 * @method RCountries findOneByRCountryCode(string $r_country_code) Return the first RCountries filtered by the r_country_code column
 * @method RCountries findOneByRCountryName(string $r_country_name) Return the first RCountries filtered by the r_country_name column
 * @method RCountries findOneByRCountryZoneCodeBin(int $r_country_zone_code_bin) Return the first RCountries filtered by the r_country_zone_code_bin column
 * @method RCountries findOneByRCountryRCurrencyId(int $r_country_r_currency_id) Return the first RCountries filtered by the r_country_r_currency_id column
 * @method RCountries findOneByRCountryRCountryCallingCodeId(int $r_country_r_country_calling_code_id) Return the first RCountries filtered by the r_country_r_country_calling_code_id column
 * @method RCountries findOneByRCountryActif(int $r_country_actif) Return the first RCountries filtered by the r_country_actif column
 *
 * @method array findByRCountryId(int $r_country_id) Return RCountries objects filtered by the r_country_id column
 * @method array findByRCountryCode(string $r_country_code) Return RCountries objects filtered by the r_country_code column
 * @method array findByRCountryName(string $r_country_name) Return RCountries objects filtered by the r_country_name column
 * @method array findByRCountryZoneCodeBin(int $r_country_zone_code_bin) Return RCountries objects filtered by the r_country_zone_code_bin column
 * @method array findByRCountryRCurrencyId(int $r_country_r_currency_id) Return RCountries objects filtered by the r_country_r_currency_id column
 * @method array findByRCountryRCountryCallingCodeId(int $r_country_r_country_calling_code_id) Return RCountries objects filtered by the r_country_r_country_calling_code_id column
 * @method array findByRCountryActif(int $r_country_actif) Return RCountries objects filtered by the r_country_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRCountriesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRCountriesQuery object.
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
            $modelName = 'RCountries';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RCountriesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RCountriesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RCountriesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RCountriesQuery) {
            return $criteria;
        }
        $query = new RCountriesQuery(null, null, $modelAlias);

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
     * @return   RCountries|RCountries[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RCountriesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RCountriesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RCountries A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRCountryId($key, $con = null)
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
     * @return                 RCountries A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_country_id`, `r_country_code`, `r_country_name`, `r_country_zone_code_bin`, `r_country_r_currency_id`, `r_country_r_country_calling_code_id`, `r_country_actif` FROM `r_countries` WHERE `r_country_id` = :p0';
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
            $obj = new RCountries();
            $obj->hydrate($row);
            RCountriesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RCountries|RCountries[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RCountries[]|mixed the list of results, formatted by the current formatter
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
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryId(1234); // WHERE r_country_id = 1234
     * $query->filterByRCountryId(array(12, 34)); // WHERE r_country_id IN (12, 34)
     * $query->filterByRCountryId(array('min' => 12)); // WHERE r_country_id >= 12
     * $query->filterByRCountryId(array('max' => 12)); // WHERE r_country_id <= 12
     * </code>
     *
     * @param     mixed $rCountryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function filterByRCountryId($rCountryId = null, $comparison = null)
    {
        if (is_array($rCountryId)) {
            $useMinMax = false;
            if (isset($rCountryId['min'])) {
                $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $rCountryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCountryId['max'])) {
                $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $rCountryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $rCountryId, $comparison);
    }

    /**
     * Filter the query on the r_country_code column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryCode('fooValue');   // WHERE r_country_code = 'fooValue'
     * $query->filterByRCountryCode('%fooValue%'); // WHERE r_country_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCountryCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function filterByRCountryCode($rCountryCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCountryCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rCountryCode)) {
                $rCountryCode = str_replace('*', '%', $rCountryCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCountriesPeer::R_COUNTRY_CODE, $rCountryCode, $comparison);
    }

    /**
     * Filter the query on the r_country_name column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryName('fooValue');   // WHERE r_country_name = 'fooValue'
     * $query->filterByRCountryName('%fooValue%'); // WHERE r_country_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCountryName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function filterByRCountryName($rCountryName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCountryName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rCountryName)) {
                $rCountryName = str_replace('*', '%', $rCountryName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCountriesPeer::R_COUNTRY_NAME, $rCountryName, $comparison);
    }

    /**
     * Filter the query on the r_country_zone_code_bin column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryZoneCodeBin(1234); // WHERE r_country_zone_code_bin = 1234
     * $query->filterByRCountryZoneCodeBin(array(12, 34)); // WHERE r_country_zone_code_bin IN (12, 34)
     * $query->filterByRCountryZoneCodeBin(array('min' => 12)); // WHERE r_country_zone_code_bin >= 12
     * $query->filterByRCountryZoneCodeBin(array('max' => 12)); // WHERE r_country_zone_code_bin <= 12
     * </code>
     *
     * @param     mixed $rCountryZoneCodeBin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function filterByRCountryZoneCodeBin($rCountryZoneCodeBin = null, $comparison = null)
    {
        if (is_array($rCountryZoneCodeBin)) {
            $useMinMax = false;
            if (isset($rCountryZoneCodeBin['min'])) {
                $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ZONE_CODE_BIN, $rCountryZoneCodeBin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCountryZoneCodeBin['max'])) {
                $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ZONE_CODE_BIN, $rCountryZoneCodeBin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ZONE_CODE_BIN, $rCountryZoneCodeBin, $comparison);
    }

    /**
     * Filter the query on the r_country_r_currency_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryRCurrencyId(1234); // WHERE r_country_r_currency_id = 1234
     * $query->filterByRCountryRCurrencyId(array(12, 34)); // WHERE r_country_r_currency_id IN (12, 34)
     * $query->filterByRCountryRCurrencyId(array('min' => 12)); // WHERE r_country_r_currency_id >= 12
     * $query->filterByRCountryRCurrencyId(array('max' => 12)); // WHERE r_country_r_currency_id <= 12
     * </code>
     *
     * @see       filterByRCurrencies()
     *
     * @param     mixed $rCountryRCurrencyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function filterByRCountryRCurrencyId($rCountryRCurrencyId = null, $comparison = null)
    {
        if (is_array($rCountryRCurrencyId)) {
            $useMinMax = false;
            if (isset($rCountryRCurrencyId['min'])) {
                $this->addUsingAlias(RCountriesPeer::R_COUNTRY_R_CURRENCY_ID, $rCountryRCurrencyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCountryRCurrencyId['max'])) {
                $this->addUsingAlias(RCountriesPeer::R_COUNTRY_R_CURRENCY_ID, $rCountryRCurrencyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCountriesPeer::R_COUNTRY_R_CURRENCY_ID, $rCountryRCurrencyId, $comparison);
    }

    /**
     * Filter the query on the r_country_r_country_calling_code_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryRCountryCallingCodeId(1234); // WHERE r_country_r_country_calling_code_id = 1234
     * $query->filterByRCountryRCountryCallingCodeId(array(12, 34)); // WHERE r_country_r_country_calling_code_id IN (12, 34)
     * $query->filterByRCountryRCountryCallingCodeId(array('min' => 12)); // WHERE r_country_r_country_calling_code_id >= 12
     * $query->filterByRCountryRCountryCallingCodeId(array('max' => 12)); // WHERE r_country_r_country_calling_code_id <= 12
     * </code>
     *
     * @see       filterByRCountriesCallingCodes()
     *
     * @param     mixed $rCountryRCountryCallingCodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function filterByRCountryRCountryCallingCodeId($rCountryRCountryCallingCodeId = null, $comparison = null)
    {
        if (is_array($rCountryRCountryCallingCodeId)) {
            $useMinMax = false;
            if (isset($rCountryRCountryCallingCodeId['min'])) {
                $this->addUsingAlias(RCountriesPeer::R_COUNTRY_R_COUNTRY_CALLING_CODE_ID, $rCountryRCountryCallingCodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCountryRCountryCallingCodeId['max'])) {
                $this->addUsingAlias(RCountriesPeer::R_COUNTRY_R_COUNTRY_CALLING_CODE_ID, $rCountryRCountryCallingCodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCountriesPeer::R_COUNTRY_R_COUNTRY_CALLING_CODE_ID, $rCountryRCountryCallingCodeId, $comparison);
    }

    /**
     * Filter the query on the r_country_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryActif(1234); // WHERE r_country_actif = 1234
     * $query->filterByRCountryActif(array(12, 34)); // WHERE r_country_actif IN (12, 34)
     * $query->filterByRCountryActif(array('min' => 12)); // WHERE r_country_actif >= 12
     * $query->filterByRCountryActif(array('max' => 12)); // WHERE r_country_actif <= 12
     * </code>
     *
     * @param     mixed $rCountryActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function filterByRCountryActif($rCountryActif = null, $comparison = null)
    {
        if (is_array($rCountryActif)) {
            $useMinMax = false;
            if (isset($rCountryActif['min'])) {
                $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ACTIF, $rCountryActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCountryActif['max'])) {
                $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ACTIF, $rCountryActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ACTIF, $rCountryActif, $comparison);
    }

    /**
     * Filter the query by a related RCurrencies object
     *
     * @param   RCurrencies|PropelObjectCollection $rCurrencies The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCurrencies($rCurrencies, $comparison = null)
    {
        if ($rCurrencies instanceof RCurrencies) {
            return $this
                ->addUsingAlias(RCountriesPeer::R_COUNTRY_R_CURRENCY_ID, $rCurrencies->getRCurrencyId(), $comparison);
        } elseif ($rCurrencies instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RCountriesPeer::R_COUNTRY_R_CURRENCY_ID, $rCurrencies->toKeyValue('PrimaryKey', 'RCurrencyId'), $comparison);
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
     * @return RCountriesQuery The current query, for fluid interface
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
     * Filter the query by a related RCountriesCallingCodes object
     *
     * @param   RCountriesCallingCodes|PropelObjectCollection $rCountriesCallingCodes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCountriesCallingCodes($rCountriesCallingCodes, $comparison = null)
    {
        if ($rCountriesCallingCodes instanceof RCountriesCallingCodes) {
            return $this
                ->addUsingAlias(RCountriesPeer::R_COUNTRY_R_COUNTRY_CALLING_CODE_ID, $rCountriesCallingCodes->getRCountryCallingCodeId(), $comparison);
        } elseif ($rCountriesCallingCodes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RCountriesPeer::R_COUNTRY_R_COUNTRY_CALLING_CODE_ID, $rCountriesCallingCodes->toKeyValue('PrimaryKey', 'RCountryCallingCodeId'), $comparison);
        } else {
            throw new PropelException('filterByRCountriesCallingCodes() only accepts arguments of type RCountriesCallingCodes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RCountriesCallingCodes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function joinRCountriesCallingCodes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RCountriesCallingCodes');

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
            $this->addJoinObject($join, 'RCountriesCallingCodes');
        }

        return $this;
    }

    /**
     * Use the RCountriesCallingCodes relation RCountriesCallingCodes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCountriesCallingCodesQuery A secondary query class using the current class as primary query
     */
    public function useRCountriesCallingCodesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRCountriesCallingCodes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RCountriesCallingCodes', 'RCountriesCallingCodesQuery');
    }

    /**
     * Filter the query by a related ClientFactureOptions object
     *
     * @param   ClientFactureOptions|PropelObjectCollection $clientFactureOptions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientFactureOptions($clientFactureOptions, $comparison = null)
    {
        if ($clientFactureOptions instanceof ClientFactureOptions) {
            return $this
                ->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $clientFactureOptions->getClFactCountryId(), $comparison);
        } elseif ($clientFactureOptions instanceof PropelObjectCollection) {
            return $this
                ->useClientFactureOptionsQuery()
                ->filterByPrimaryKeys($clientFactureOptions->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClientFactureOptions() only accepts arguments of type ClientFactureOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientFactureOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function joinClientFactureOptions($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientFactureOptions');

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
            $this->addJoinObject($join, 'ClientFactureOptions');
        }

        return $this;
    }

    /**
     * Use the ClientFactureOptions relation ClientFactureOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientFactureOptionsQuery A secondary query class using the current class as primary query
     */
    public function useClientFactureOptionsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClientFactureOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientFactureOptions', 'ClientFactureOptionsQuery');
    }

    /**
     * Filter the query by a related LnkOperationCountry object
     *
     * @param   LnkOperationCountry|PropelObjectCollection $lnkOperationCountry  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkOperationCountry($lnkOperationCountry, $comparison = null)
    {
        if ($lnkOperationCountry instanceof LnkOperationCountry) {
            return $this
                ->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $lnkOperationCountry->getLnkOpCountryId(), $comparison);
        } elseif ($lnkOperationCountry instanceof PropelObjectCollection) {
            return $this
                ->useLnkOperationCountryQuery()
                ->filterByPrimaryKeys($lnkOperationCountry->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkOperationCountry() only accepts arguments of type LnkOperationCountry or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkOperationCountry relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function joinLnkOperationCountry($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkOperationCountry');

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
            $this->addJoinObject($join, 'LnkOperationCountry');
        }

        return $this;
    }

    /**
     * Use the LnkOperationCountry relation LnkOperationCountry object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkOperationCountryQuery A secondary query class using the current class as primary query
     */
    public function useLnkOperationCountryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkOperationCountry($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkOperationCountry', 'LnkOperationCountryQuery');
    }

    /**
     * Filter the query by a related LnkRCountryRCultures object
     *
     * @param   LnkRCountryRCultures|PropelObjectCollection $lnkRCountryRCultures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkRCountryRCultures($lnkRCountryRCultures, $comparison = null)
    {
        if ($lnkRCountryRCultures instanceof LnkRCountryRCultures) {
            return $this
                ->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $lnkRCountryRCultures->getLnkRCountryRCultureRCountryId(), $comparison);
        } elseif ($lnkRCountryRCultures instanceof PropelObjectCollection) {
            return $this
                ->useLnkRCountryRCulturesQuery()
                ->filterByPrimaryKeys($lnkRCountryRCultures->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkRCountryRCultures() only accepts arguments of type LnkRCountryRCultures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkRCountryRCultures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function joinLnkRCountryRCultures($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkRCountryRCultures');

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
            $this->addJoinObject($join, 'LnkRCountryRCultures');
        }

        return $this;
    }

    /**
     * Use the LnkRCountryRCultures relation LnkRCountryRCultures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkRCountryRCulturesQuery A secondary query class using the current class as primary query
     */
    public function useLnkRCountryRCulturesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLnkRCountryRCultures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkRCountryRCultures', 'LnkRCountryRCulturesQuery');
    }

    /**
     * Filter the query by a related LnkOperationPrimeRCountries object
     *
     * @param   LnkOperationPrimeRCountries|PropelObjectCollection $lnkOperationPrimeRCountries  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkOperationPrimeRCountries($lnkOperationPrimeRCountries, $comparison = null)
    {
        if ($lnkOperationPrimeRCountries instanceof LnkOperationPrimeRCountries) {
            return $this
                ->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $lnkOperationPrimeRCountries->getLnkOperationPrimeRCountryRcountryId(), $comparison);
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
     * @return RCountriesQuery The current query, for fluid interface
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
     * Filter the query by a related ROperationTypeSubTplCountries object
     *
     * @param   ROperationTypeSubTplCountries|PropelObjectCollection $rOperationTypeSubTplCountries  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplCountries($rOperationTypeSubTplCountries, $comparison = null)
    {
        if ($rOperationTypeSubTplCountries instanceof ROperationTypeSubTplCountries) {
            return $this
                ->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $rOperationTypeSubTplCountries->getROperationTypeSubTplCountryRCountryId(), $comparison);
        } elseif ($rOperationTypeSubTplCountries instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplCountriesQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplCountries->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplCountries() only accepts arguments of type ROperationTypeSubTplCountries or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplCountries relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplCountries($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplCountries');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplCountries');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplCountries relation ROperationTypeSubTplCountries object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplCountriesQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplCountriesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplCountries($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplCountries', 'ROperationTypeSubTplCountriesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RCountries $rCountries Object to remove from the list of results
     *
     * @return RCountriesQuery The current query, for fluid interface
     */
    public function prune($rCountries = null)
    {
        if ($rCountries) {
            $this->addUsingAlias(RCountriesPeer::R_COUNTRY_ID, $rCountries->getRCountryId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
