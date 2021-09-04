<?php


/**
 * Base class that represents a query for the 'r_countries_zoning' table.
 *
 *
 *
 * @method RCountriesZoningQuery orderByRCountryZoneId($order = Criteria::ASC) Order by the r_country_zone_id column
 * @method RCountriesZoningQuery orderByRCountryZoneCodeBin($order = Criteria::ASC) Order by the r_country_zone_code_bin column
 * @method RCountriesZoningQuery orderByRCountryZoneName($order = Criteria::ASC) Order by the r_country_zone_name column
 *
 * @method RCountriesZoningQuery groupByRCountryZoneId() Group by the r_country_zone_id column
 * @method RCountriesZoningQuery groupByRCountryZoneCodeBin() Group by the r_country_zone_code_bin column
 * @method RCountriesZoningQuery groupByRCountryZoneName() Group by the r_country_zone_name column
 *
 * @method RCountriesZoningQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RCountriesZoningQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RCountriesZoningQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RCountriesZoning findOne(PropelPDO $con = null) Return the first RCountriesZoning matching the query
 * @method RCountriesZoning findOneOrCreate(PropelPDO $con = null) Return the first RCountriesZoning matching the query, or a new RCountriesZoning object populated from the query conditions when no match is found
 *
 * @method RCountriesZoning findOneByRCountryZoneCodeBin(int $r_country_zone_code_bin) Return the first RCountriesZoning filtered by the r_country_zone_code_bin column
 * @method RCountriesZoning findOneByRCountryZoneName(string $r_country_zone_name) Return the first RCountriesZoning filtered by the r_country_zone_name column
 *
 * @method array findByRCountryZoneId(int $r_country_zone_id) Return RCountriesZoning objects filtered by the r_country_zone_id column
 * @method array findByRCountryZoneCodeBin(int $r_country_zone_code_bin) Return RCountriesZoning objects filtered by the r_country_zone_code_bin column
 * @method array findByRCountryZoneName(string $r_country_zone_name) Return RCountriesZoning objects filtered by the r_country_zone_name column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRCountriesZoningQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRCountriesZoningQuery object.
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
            $modelName = 'RCountriesZoning';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RCountriesZoningQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RCountriesZoningQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RCountriesZoningQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RCountriesZoningQuery) {
            return $criteria;
        }
        $query = new RCountriesZoningQuery(null, null, $modelAlias);

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
     * @return   RCountriesZoning|RCountriesZoning[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RCountriesZoningPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RCountriesZoningPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RCountriesZoning A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRCountryZoneId($key, $con = null)
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
     * @return                 RCountriesZoning A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_country_zone_id`, `r_country_zone_code_bin`, `r_country_zone_name` FROM `r_countries_zoning` WHERE `r_country_zone_id` = :p0';
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
            $obj = new RCountriesZoning();
            $obj->hydrate($row);
            RCountriesZoningPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RCountriesZoning|RCountriesZoning[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RCountriesZoning[]|mixed the list of results, formatted by the current formatter
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
     * @return RCountriesZoningQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RCountriesZoningPeer::R_COUNTRY_ZONE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RCountriesZoningQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RCountriesZoningPeer::R_COUNTRY_ZONE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_country_zone_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryZoneId(1234); // WHERE r_country_zone_id = 1234
     * $query->filterByRCountryZoneId(array(12, 34)); // WHERE r_country_zone_id IN (12, 34)
     * $query->filterByRCountryZoneId(array('min' => 12)); // WHERE r_country_zone_id >= 12
     * $query->filterByRCountryZoneId(array('max' => 12)); // WHERE r_country_zone_id <= 12
     * </code>
     *
     * @param     mixed $rCountryZoneId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesZoningQuery The current query, for fluid interface
     */
    public function filterByRCountryZoneId($rCountryZoneId = null, $comparison = null)
    {
        if (is_array($rCountryZoneId)) {
            $useMinMax = false;
            if (isset($rCountryZoneId['min'])) {
                $this->addUsingAlias(RCountriesZoningPeer::R_COUNTRY_ZONE_ID, $rCountryZoneId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCountryZoneId['max'])) {
                $this->addUsingAlias(RCountriesZoningPeer::R_COUNTRY_ZONE_ID, $rCountryZoneId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCountriesZoningPeer::R_COUNTRY_ZONE_ID, $rCountryZoneId, $comparison);
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
     * @return RCountriesZoningQuery The current query, for fluid interface
     */
    public function filterByRCountryZoneCodeBin($rCountryZoneCodeBin = null, $comparison = null)
    {
        if (is_array($rCountryZoneCodeBin)) {
            $useMinMax = false;
            if (isset($rCountryZoneCodeBin['min'])) {
                $this->addUsingAlias(RCountriesZoningPeer::R_COUNTRY_ZONE_CODE_BIN, $rCountryZoneCodeBin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCountryZoneCodeBin['max'])) {
                $this->addUsingAlias(RCountriesZoningPeer::R_COUNTRY_ZONE_CODE_BIN, $rCountryZoneCodeBin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCountriesZoningPeer::R_COUNTRY_ZONE_CODE_BIN, $rCountryZoneCodeBin, $comparison);
    }

    /**
     * Filter the query on the r_country_zone_name column
     *
     * Example usage:
     * <code>
     * $query->filterByRCountryZoneName('fooValue');   // WHERE r_country_zone_name = 'fooValue'
     * $query->filterByRCountryZoneName('%fooValue%'); // WHERE r_country_zone_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCountryZoneName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCountriesZoningQuery The current query, for fluid interface
     */
    public function filterByRCountryZoneName($rCountryZoneName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCountryZoneName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rCountryZoneName)) {
                $rCountryZoneName = str_replace('*', '%', $rCountryZoneName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCountriesZoningPeer::R_COUNTRY_ZONE_NAME, $rCountryZoneName, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RCountriesZoning $rCountriesZoning Object to remove from the list of results
     *
     * @return RCountriesZoningQuery The current query, for fluid interface
     */
    public function prune($rCountriesZoning = null)
    {
        if ($rCountriesZoning) {
            $this->addUsingAlias(RCountriesZoningPeer::R_COUNTRY_ZONE_ID, $rCountriesZoning->getRCountryZoneId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
