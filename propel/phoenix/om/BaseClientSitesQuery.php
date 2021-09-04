<?php


/**
 * Base class that represents a query for the 'client_sites' table.
 *
 *
 *
 * @method ClientSitesQuery orderByClSiteId($order = Criteria::ASC) Order by the cl_site_id column
 * @method ClientSitesQuery orderByClId($order = Criteria::ASC) Order by the cl_id column
 * @method ClientSitesQuery orderByClSiteLibelle($order = Criteria::ASC) Order by the cl_site_libelle column
 * @method ClientSitesQuery orderByClSiteAddr1($order = Criteria::ASC) Order by the cl_site_addr_1 column
 * @method ClientSitesQuery orderByClSiteAddr2($order = Criteria::ASC) Order by the cl_site_addr_2 column
 * @method ClientSitesQuery orderByClSiteAddr3($order = Criteria::ASC) Order by the cl_site_addr_3 column
 * @method ClientSitesQuery orderByClSiteZipcode($order = Criteria::ASC) Order by the cl_site_zipcode column
 * @method ClientSitesQuery orderByClSiteTown($order = Criteria::ASC) Order by the cl_site_town column
 * @method ClientSitesQuery orderByClSiteCountryId($order = Criteria::ASC) Order by the cl_site_country_id column
 * @method ClientSitesQuery orderByClSiteIsForLog($order = Criteria::ASC) Order by the cl_site_is_for_log column
 * @method ClientSitesQuery orderByGdlFournId($order = Criteria::ASC) Order by the gdl_fourn_id column
 * @method ClientSitesQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method ClientSitesQuery groupByClSiteId() Group by the cl_site_id column
 * @method ClientSitesQuery groupByClId() Group by the cl_id column
 * @method ClientSitesQuery groupByClSiteLibelle() Group by the cl_site_libelle column
 * @method ClientSitesQuery groupByClSiteAddr1() Group by the cl_site_addr_1 column
 * @method ClientSitesQuery groupByClSiteAddr2() Group by the cl_site_addr_2 column
 * @method ClientSitesQuery groupByClSiteAddr3() Group by the cl_site_addr_3 column
 * @method ClientSitesQuery groupByClSiteZipcode() Group by the cl_site_zipcode column
 * @method ClientSitesQuery groupByClSiteTown() Group by the cl_site_town column
 * @method ClientSitesQuery groupByClSiteCountryId() Group by the cl_site_country_id column
 * @method ClientSitesQuery groupByClSiteIsForLog() Group by the cl_site_is_for_log column
 * @method ClientSitesQuery groupByGdlFournId() Group by the gdl_fourn_id column
 * @method ClientSitesQuery groupByActif() Group by the actif column
 *
 * @method ClientSitesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClientSitesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClientSitesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ClientSitesQuery leftJoinContacts($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contacts relation
 * @method ClientSitesQuery rightJoinContacts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contacts relation
 * @method ClientSitesQuery innerJoinContacts($relationAlias = null) Adds a INNER JOIN clause to the query using the Contacts relation
 *
 * @method ClientSitesQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ClientSitesQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ClientSitesQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ClientSites findOne(PropelPDO $con = null) Return the first ClientSites matching the query
 * @method ClientSites findOneOrCreate(PropelPDO $con = null) Return the first ClientSites matching the query, or a new ClientSites object populated from the query conditions when no match is found
 *
 * @method ClientSites findOneByClId(int $cl_id) Return the first ClientSites filtered by the cl_id column
 * @method ClientSites findOneByClSiteLibelle(string $cl_site_libelle) Return the first ClientSites filtered by the cl_site_libelle column
 * @method ClientSites findOneByClSiteAddr1(string $cl_site_addr_1) Return the first ClientSites filtered by the cl_site_addr_1 column
 * @method ClientSites findOneByClSiteAddr2(string $cl_site_addr_2) Return the first ClientSites filtered by the cl_site_addr_2 column
 * @method ClientSites findOneByClSiteAddr3(string $cl_site_addr_3) Return the first ClientSites filtered by the cl_site_addr_3 column
 * @method ClientSites findOneByClSiteZipcode(string $cl_site_zipcode) Return the first ClientSites filtered by the cl_site_zipcode column
 * @method ClientSites findOneByClSiteTown(string $cl_site_town) Return the first ClientSites filtered by the cl_site_town column
 * @method ClientSites findOneByClSiteCountryId(int $cl_site_country_id) Return the first ClientSites filtered by the cl_site_country_id column
 * @method ClientSites findOneByClSiteIsForLog(boolean $cl_site_is_for_log) Return the first ClientSites filtered by the cl_site_is_for_log column
 * @method ClientSites findOneByGdlFournId(int $gdl_fourn_id) Return the first ClientSites filtered by the gdl_fourn_id column
 * @method ClientSites findOneByActif(boolean $actif) Return the first ClientSites filtered by the actif column
 *
 * @method array findByClSiteId(int $cl_site_id) Return ClientSites objects filtered by the cl_site_id column
 * @method array findByClId(int $cl_id) Return ClientSites objects filtered by the cl_id column
 * @method array findByClSiteLibelle(string $cl_site_libelle) Return ClientSites objects filtered by the cl_site_libelle column
 * @method array findByClSiteAddr1(string $cl_site_addr_1) Return ClientSites objects filtered by the cl_site_addr_1 column
 * @method array findByClSiteAddr2(string $cl_site_addr_2) Return ClientSites objects filtered by the cl_site_addr_2 column
 * @method array findByClSiteAddr3(string $cl_site_addr_3) Return ClientSites objects filtered by the cl_site_addr_3 column
 * @method array findByClSiteZipcode(string $cl_site_zipcode) Return ClientSites objects filtered by the cl_site_zipcode column
 * @method array findByClSiteTown(string $cl_site_town) Return ClientSites objects filtered by the cl_site_town column
 * @method array findByClSiteCountryId(int $cl_site_country_id) Return ClientSites objects filtered by the cl_site_country_id column
 * @method array findByClSiteIsForLog(boolean $cl_site_is_for_log) Return ClientSites objects filtered by the cl_site_is_for_log column
 * @method array findByGdlFournId(int $gdl_fourn_id) Return ClientSites objects filtered by the gdl_fourn_id column
 * @method array findByActif(boolean $actif) Return ClientSites objects filtered by the actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseClientSitesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClientSitesQuery object.
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
            $modelName = 'ClientSites';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClientSitesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClientSitesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClientSitesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClientSitesQuery) {
            return $criteria;
        }
        $query = new ClientSitesQuery(null, null, $modelAlias);

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
     * @return   ClientSites|ClientSites[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClientSitesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClientSitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ClientSites A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByClSiteId($key, $con = null)
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
     * @return                 ClientSites A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `cl_site_id`, `cl_id`, `cl_site_libelle`, `cl_site_addr_1`, `cl_site_addr_2`, `cl_site_addr_3`, `cl_site_zipcode`, `cl_site_town`, `cl_site_country_id`, `cl_site_is_for_log`, `gdl_fourn_id`, `actif` FROM `client_sites` WHERE `cl_site_id` = :p0';
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
            $obj = new ClientSites();
            $obj->hydrate($row);
            ClientSitesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ClientSites|ClientSites[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ClientSites[]|mixed the list of results, formatted by the current formatter
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
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the cl_site_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteId(1234); // WHERE cl_site_id = 1234
     * $query->filterByClSiteId(array(12, 34)); // WHERE cl_site_id IN (12, 34)
     * $query->filterByClSiteId(array('min' => 12)); // WHERE cl_site_id >= 12
     * $query->filterByClSiteId(array('max' => 12)); // WHERE cl_site_id <= 12
     * </code>
     *
     * @param     mixed $clSiteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByClSiteId($clSiteId = null, $comparison = null)
    {
        if (is_array($clSiteId)) {
            $useMinMax = false;
            if (isset($clSiteId['min'])) {
                $this->addUsingAlias(ClientSitesPeer::CL_SITE_ID, $clSiteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clSiteId['max'])) {
                $this->addUsingAlias(ClientSitesPeer::CL_SITE_ID, $clSiteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_ID, $clSiteId, $comparison);
    }

    /**
     * Filter the query on the cl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClId(1234); // WHERE cl_id = 1234
     * $query->filterByClId(array(12, 34)); // WHERE cl_id IN (12, 34)
     * $query->filterByClId(array('min' => 12)); // WHERE cl_id >= 12
     * $query->filterByClId(array('max' => 12)); // WHERE cl_id <= 12
     * </code>
     *
     * @param     mixed $clId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByClId($clId = null, $comparison = null)
    {
        if (is_array($clId)) {
            $useMinMax = false;
            if (isset($clId['min'])) {
                $this->addUsingAlias(ClientSitesPeer::CL_ID, $clId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clId['max'])) {
                $this->addUsingAlias(ClientSitesPeer::CL_ID, $clId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientSitesPeer::CL_ID, $clId, $comparison);
    }

    /**
     * Filter the query on the cl_site_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteLibelle('fooValue');   // WHERE cl_site_libelle = 'fooValue'
     * $query->filterByClSiteLibelle('%fooValue%'); // WHERE cl_site_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clSiteLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByClSiteLibelle($clSiteLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clSiteLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clSiteLibelle)) {
                $clSiteLibelle = str_replace('*', '%', $clSiteLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_LIBELLE, $clSiteLibelle, $comparison);
    }

    /**
     * Filter the query on the cl_site_addr_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteAddr1('fooValue');   // WHERE cl_site_addr_1 = 'fooValue'
     * $query->filterByClSiteAddr1('%fooValue%'); // WHERE cl_site_addr_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clSiteAddr1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByClSiteAddr1($clSiteAddr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clSiteAddr1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clSiteAddr1)) {
                $clSiteAddr1 = str_replace('*', '%', $clSiteAddr1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_ADDR_1, $clSiteAddr1, $comparison);
    }

    /**
     * Filter the query on the cl_site_addr_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteAddr2('fooValue');   // WHERE cl_site_addr_2 = 'fooValue'
     * $query->filterByClSiteAddr2('%fooValue%'); // WHERE cl_site_addr_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clSiteAddr2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByClSiteAddr2($clSiteAddr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clSiteAddr2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clSiteAddr2)) {
                $clSiteAddr2 = str_replace('*', '%', $clSiteAddr2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_ADDR_2, $clSiteAddr2, $comparison);
    }

    /**
     * Filter the query on the cl_site_addr_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteAddr3('fooValue');   // WHERE cl_site_addr_3 = 'fooValue'
     * $query->filterByClSiteAddr3('%fooValue%'); // WHERE cl_site_addr_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clSiteAddr3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByClSiteAddr3($clSiteAddr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clSiteAddr3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clSiteAddr3)) {
                $clSiteAddr3 = str_replace('*', '%', $clSiteAddr3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_ADDR_3, $clSiteAddr3, $comparison);
    }

    /**
     * Filter the query on the cl_site_zipcode column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteZipcode('fooValue');   // WHERE cl_site_zipcode = 'fooValue'
     * $query->filterByClSiteZipcode('%fooValue%'); // WHERE cl_site_zipcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clSiteZipcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByClSiteZipcode($clSiteZipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clSiteZipcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clSiteZipcode)) {
                $clSiteZipcode = str_replace('*', '%', $clSiteZipcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_ZIPCODE, $clSiteZipcode, $comparison);
    }

    /**
     * Filter the query on the cl_site_town column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteTown('fooValue');   // WHERE cl_site_town = 'fooValue'
     * $query->filterByClSiteTown('%fooValue%'); // WHERE cl_site_town LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clSiteTown The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByClSiteTown($clSiteTown = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clSiteTown)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clSiteTown)) {
                $clSiteTown = str_replace('*', '%', $clSiteTown);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_TOWN, $clSiteTown, $comparison);
    }

    /**
     * Filter the query on the cl_site_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteCountryId(1234); // WHERE cl_site_country_id = 1234
     * $query->filterByClSiteCountryId(array(12, 34)); // WHERE cl_site_country_id IN (12, 34)
     * $query->filterByClSiteCountryId(array('min' => 12)); // WHERE cl_site_country_id >= 12
     * $query->filterByClSiteCountryId(array('max' => 12)); // WHERE cl_site_country_id <= 12
     * </code>
     *
     * @param     mixed $clSiteCountryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByClSiteCountryId($clSiteCountryId = null, $comparison = null)
    {
        if (is_array($clSiteCountryId)) {
            $useMinMax = false;
            if (isset($clSiteCountryId['min'])) {
                $this->addUsingAlias(ClientSitesPeer::CL_SITE_COUNTRY_ID, $clSiteCountryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clSiteCountryId['max'])) {
                $this->addUsingAlias(ClientSitesPeer::CL_SITE_COUNTRY_ID, $clSiteCountryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_COUNTRY_ID, $clSiteCountryId, $comparison);
    }

    /**
     * Filter the query on the cl_site_is_for_log column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteIsForLog(true); // WHERE cl_site_is_for_log = true
     * $query->filterByClSiteIsForLog('yes'); // WHERE cl_site_is_for_log = true
     * </code>
     *
     * @param     boolean|string $clSiteIsForLog The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByClSiteIsForLog($clSiteIsForLog = null, $comparison = null)
    {
        if (is_string($clSiteIsForLog)) {
            $clSiteIsForLog = in_array(strtolower($clSiteIsForLog), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ClientSitesPeer::CL_SITE_IS_FOR_LOG, $clSiteIsForLog, $comparison);
    }

    /**
     * Filter the query on the gdl_fourn_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGdlFournId(1234); // WHERE gdl_fourn_id = 1234
     * $query->filterByGdlFournId(array(12, 34)); // WHERE gdl_fourn_id IN (12, 34)
     * $query->filterByGdlFournId(array('min' => 12)); // WHERE gdl_fourn_id >= 12
     * $query->filterByGdlFournId(array('max' => 12)); // WHERE gdl_fourn_id <= 12
     * </code>
     *
     * @param     mixed $gdlFournId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByGdlFournId($gdlFournId = null, $comparison = null)
    {
        if (is_array($gdlFournId)) {
            $useMinMax = false;
            if (isset($gdlFournId['min'])) {
                $this->addUsingAlias(ClientSitesPeer::GDL_FOURN_ID, $gdlFournId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gdlFournId['max'])) {
                $this->addUsingAlias(ClientSitesPeer::GDL_FOURN_ID, $gdlFournId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientSitesPeer::GDL_FOURN_ID, $gdlFournId, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(true); // WHERE actif = true
     * $query->filterByActif('yes'); // WHERE actif = true
     * </code>
     *
     * @param     boolean|string $actif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ClientSitesPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query by a related Contacts object
     *
     * @param   Contacts|PropelObjectCollection $contacts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientSitesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContacts($contacts, $comparison = null)
    {
        if ($contacts instanceof Contacts) {
            return $this
                ->addUsingAlias(ClientSitesPeer::CL_SITE_ID, $contacts->getClSiteId(), $comparison);
        } elseif ($contacts instanceof PropelObjectCollection) {
            return $this
                ->useContactsQuery()
                ->filterByPrimaryKeys($contacts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByContacts() only accepts arguments of type Contacts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Contacts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function joinContacts($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Contacts');

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
            $this->addJoinObject($join, 'Contacts');
        }

        return $this;
    }

    /**
     * Use the Contacts relation Contacts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContactsQuery A secondary query class using the current class as primary query
     */
    public function useContactsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinContacts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Contacts', 'ContactsQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientSitesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ClientSitesPeer::CL_SITE_ID, $operations->getClSiteIdForLog(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
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
     * @return ClientSitesQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ClientSites $clientSites Object to remove from the list of results
     *
     * @return ClientSitesQuery The current query, for fluid interface
     */
    public function prune($clientSites = null)
    {
        if ($clientSites) {
            $this->addUsingAlias(ClientSitesPeer::CL_SITE_ID, $clientSites->getClSiteId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
