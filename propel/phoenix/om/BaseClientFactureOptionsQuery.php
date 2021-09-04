<?php


/**
 * Base class that represents a query for the 'client_facture_options' table.
 *
 *
 *
 * @method ClientFactureOptionsQuery orderByClFactOptId($order = Criteria::ASC) Order by the cl_fact_opt_id column
 * @method ClientFactureOptionsQuery orderByClId($order = Criteria::ASC) Order by the cl_id column
 * @method ClientFactureOptionsQuery orderByClFactBdcRequired($order = Criteria::ASC) Order by the cl_fact_bdc_required column
 * @method ClientFactureOptionsQuery orderByClFactBdc($order = Criteria::ASC) Order by the cl_fact_bdc column
 * @method ClientFactureOptionsQuery orderByClFactTvaintra($order = Criteria::ASC) Order by the cl_fact_tvaintra column
 * @method ClientFactureOptionsQuery orderByClFactCountryId($order = Criteria::ASC) Order by the cl_fact_country_id column
 * @method ClientFactureOptionsQuery orderByClFactAdf($order = Criteria::ASC) Order by the cl_fact_adf column
 * @method ClientFactureOptionsQuery orderByClFactCompte($order = Criteria::ASC) Order by the cl_fact_compte column
 * @method ClientFactureOptionsQuery orderByClFactRfa($order = Criteria::ASC) Order by the cl_fact_rfa column
 * @method ClientFactureOptionsQuery orderByClFactRfaDescr($order = Criteria::ASC) Order by the cl_fact_rfa_descr column
 * @method ClientFactureOptionsQuery orderByClFactEcheance($order = Criteria::ASC) Order by the cl_fact_echeance column
 * @method ClientFactureOptionsQuery orderByClFactLang($order = Criteria::ASC) Order by the cl_fact_lang column
 * @method ClientFactureOptionsQuery orderByPlanFactPeriodeId($order = Criteria::ASC) Order by the plan_fact_periode_id column
 * @method ClientFactureOptionsQuery orderByPlanFactPeriodeTypeId($order = Criteria::ASC) Order by the plan_fact_periode_type_id column
 * @method ClientFactureOptionsQuery orderByClFactSiret($order = Criteria::ASC) Order by the cl_fact_siret column
 *
 * @method ClientFactureOptionsQuery groupByClFactOptId() Group by the cl_fact_opt_id column
 * @method ClientFactureOptionsQuery groupByClId() Group by the cl_id column
 * @method ClientFactureOptionsQuery groupByClFactBdcRequired() Group by the cl_fact_bdc_required column
 * @method ClientFactureOptionsQuery groupByClFactBdc() Group by the cl_fact_bdc column
 * @method ClientFactureOptionsQuery groupByClFactTvaintra() Group by the cl_fact_tvaintra column
 * @method ClientFactureOptionsQuery groupByClFactCountryId() Group by the cl_fact_country_id column
 * @method ClientFactureOptionsQuery groupByClFactAdf() Group by the cl_fact_adf column
 * @method ClientFactureOptionsQuery groupByClFactCompte() Group by the cl_fact_compte column
 * @method ClientFactureOptionsQuery groupByClFactRfa() Group by the cl_fact_rfa column
 * @method ClientFactureOptionsQuery groupByClFactRfaDescr() Group by the cl_fact_rfa_descr column
 * @method ClientFactureOptionsQuery groupByClFactEcheance() Group by the cl_fact_echeance column
 * @method ClientFactureOptionsQuery groupByClFactLang() Group by the cl_fact_lang column
 * @method ClientFactureOptionsQuery groupByPlanFactPeriodeId() Group by the plan_fact_periode_id column
 * @method ClientFactureOptionsQuery groupByPlanFactPeriodeTypeId() Group by the plan_fact_periode_type_id column
 * @method ClientFactureOptionsQuery groupByClFactSiret() Group by the cl_fact_siret column
 *
 * @method ClientFactureOptionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClientFactureOptionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClientFactureOptionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ClientFactureOptionsQuery leftJoinRFactureOptionsEcheances($relationAlias = null) Adds a LEFT JOIN clause to the query using the RFactureOptionsEcheances relation
 * @method ClientFactureOptionsQuery rightJoinRFactureOptionsEcheances($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RFactureOptionsEcheances relation
 * @method ClientFactureOptionsQuery innerJoinRFactureOptionsEcheances($relationAlias = null) Adds a INNER JOIN clause to the query using the RFactureOptionsEcheances relation
 *
 * @method ClientFactureOptionsQuery leftJoinClients($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clients relation
 * @method ClientFactureOptionsQuery rightJoinClients($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clients relation
 * @method ClientFactureOptionsQuery innerJoinClients($relationAlias = null) Adds a INNER JOIN clause to the query using the Clients relation
 *
 * @method ClientFactureOptionsQuery leftJoinRLanguages($relationAlias = null) Adds a LEFT JOIN clause to the query using the RLanguages relation
 * @method ClientFactureOptionsQuery rightJoinRLanguages($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RLanguages relation
 * @method ClientFactureOptionsQuery innerJoinRLanguages($relationAlias = null) Adds a INNER JOIN clause to the query using the RLanguages relation
 *
 * @method ClientFactureOptionsQuery leftJoinCountryInvoiced($relationAlias = null) Adds a LEFT JOIN clause to the query using the CountryInvoiced relation
 * @method ClientFactureOptionsQuery rightJoinCountryInvoiced($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CountryInvoiced relation
 * @method ClientFactureOptionsQuery innerJoinCountryInvoiced($relationAlias = null) Adds a INNER JOIN clause to the query using the CountryInvoiced relation
 *
 * @method ClientFactureOptionsQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method ClientFactureOptionsQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method ClientFactureOptionsQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method ClientFactureOptionsQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ClientFactureOptionsQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ClientFactureOptionsQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ClientFactureOptionsQuery leftJoinRelances($relationAlias = null) Adds a LEFT JOIN clause to the query using the Relances relation
 * @method ClientFactureOptionsQuery rightJoinRelances($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Relances relation
 * @method ClientFactureOptionsQuery innerJoinRelances($relationAlias = null) Adds a INNER JOIN clause to the query using the Relances relation
 *
 * @method ClientFactureOptionsQuery leftJoinFactureEditionHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureEditionHistory relation
 * @method ClientFactureOptionsQuery rightJoinFactureEditionHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureEditionHistory relation
 * @method ClientFactureOptionsQuery innerJoinFactureEditionHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureEditionHistory relation
 *
 * @method ClientFactureOptions findOne(PropelPDO $con = null) Return the first ClientFactureOptions matching the query
 * @method ClientFactureOptions findOneOrCreate(PropelPDO $con = null) Return the first ClientFactureOptions matching the query, or a new ClientFactureOptions object populated from the query conditions when no match is found
 *
 * @method ClientFactureOptions findOneByClId(int $cl_id) Return the first ClientFactureOptions filtered by the cl_id column
 * @method ClientFactureOptions findOneByClFactBdcRequired(boolean $cl_fact_bdc_required) Return the first ClientFactureOptions filtered by the cl_fact_bdc_required column
 * @method ClientFactureOptions findOneByClFactBdc(string $cl_fact_bdc) Return the first ClientFactureOptions filtered by the cl_fact_bdc column
 * @method ClientFactureOptions findOneByClFactTvaintra(string $cl_fact_tvaintra) Return the first ClientFactureOptions filtered by the cl_fact_tvaintra column
 * @method ClientFactureOptions findOneByClFactCountryId(int $cl_fact_country_id) Return the first ClientFactureOptions filtered by the cl_fact_country_id column
 * @method ClientFactureOptions findOneByClFactAdf(string $cl_fact_adf) Return the first ClientFactureOptions filtered by the cl_fact_adf column
 * @method ClientFactureOptions findOneByClFactCompte(string $cl_fact_compte) Return the first ClientFactureOptions filtered by the cl_fact_compte column
 * @method ClientFactureOptions findOneByClFactRfa(boolean $cl_fact_rfa) Return the first ClientFactureOptions filtered by the cl_fact_rfa column
 * @method ClientFactureOptions findOneByClFactRfaDescr(string $cl_fact_rfa_descr) Return the first ClientFactureOptions filtered by the cl_fact_rfa_descr column
 * @method ClientFactureOptions findOneByClFactEcheance(int $cl_fact_echeance) Return the first ClientFactureOptions filtered by the cl_fact_echeance column
 * @method ClientFactureOptions findOneByClFactLang(string $cl_fact_lang) Return the first ClientFactureOptions filtered by the cl_fact_lang column
 * @method ClientFactureOptions findOneByPlanFactPeriodeId(int $plan_fact_periode_id) Return the first ClientFactureOptions filtered by the plan_fact_periode_id column
 * @method ClientFactureOptions findOneByPlanFactPeriodeTypeId(int $plan_fact_periode_type_id) Return the first ClientFactureOptions filtered by the plan_fact_periode_type_id column
 * @method ClientFactureOptions findOneByClFactSiret(string $cl_fact_siret) Return the first ClientFactureOptions filtered by the cl_fact_siret column
 *
 * @method array findByClFactOptId(int $cl_fact_opt_id) Return ClientFactureOptions objects filtered by the cl_fact_opt_id column
 * @method array findByClId(int $cl_id) Return ClientFactureOptions objects filtered by the cl_id column
 * @method array findByClFactBdcRequired(boolean $cl_fact_bdc_required) Return ClientFactureOptions objects filtered by the cl_fact_bdc_required column
 * @method array findByClFactBdc(string $cl_fact_bdc) Return ClientFactureOptions objects filtered by the cl_fact_bdc column
 * @method array findByClFactTvaintra(string $cl_fact_tvaintra) Return ClientFactureOptions objects filtered by the cl_fact_tvaintra column
 * @method array findByClFactCountryId(int $cl_fact_country_id) Return ClientFactureOptions objects filtered by the cl_fact_country_id column
 * @method array findByClFactAdf(string $cl_fact_adf) Return ClientFactureOptions objects filtered by the cl_fact_adf column
 * @method array findByClFactCompte(string $cl_fact_compte) Return ClientFactureOptions objects filtered by the cl_fact_compte column
 * @method array findByClFactRfa(boolean $cl_fact_rfa) Return ClientFactureOptions objects filtered by the cl_fact_rfa column
 * @method array findByClFactRfaDescr(string $cl_fact_rfa_descr) Return ClientFactureOptions objects filtered by the cl_fact_rfa_descr column
 * @method array findByClFactEcheance(int $cl_fact_echeance) Return ClientFactureOptions objects filtered by the cl_fact_echeance column
 * @method array findByClFactLang(string $cl_fact_lang) Return ClientFactureOptions objects filtered by the cl_fact_lang column
 * @method array findByPlanFactPeriodeId(int $plan_fact_periode_id) Return ClientFactureOptions objects filtered by the plan_fact_periode_id column
 * @method array findByPlanFactPeriodeTypeId(int $plan_fact_periode_type_id) Return ClientFactureOptions objects filtered by the plan_fact_periode_type_id column
 * @method array findByClFactSiret(string $cl_fact_siret) Return ClientFactureOptions objects filtered by the cl_fact_siret column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseClientFactureOptionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClientFactureOptionsQuery object.
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
            $modelName = 'ClientFactureOptions';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClientFactureOptionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClientFactureOptionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClientFactureOptionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClientFactureOptionsQuery) {
            return $criteria;
        }
        $query = new ClientFactureOptionsQuery(null, null, $modelAlias);

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
     * @return   ClientFactureOptions|ClientFactureOptions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClientFactureOptionsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClientFactureOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ClientFactureOptions A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByClFactOptId($key, $con = null)
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
     * @return                 ClientFactureOptions A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `cl_fact_opt_id`, `cl_id`, `cl_fact_bdc_required`, `cl_fact_bdc`, `cl_fact_tvaintra`, `cl_fact_country_id`, `cl_fact_adf`, `cl_fact_compte`, `cl_fact_rfa`, `cl_fact_rfa_descr`, `cl_fact_echeance`, `cl_fact_lang`, `plan_fact_periode_id`, `plan_fact_periode_type_id`, `cl_fact_siret` FROM `client_facture_options` WHERE `cl_fact_opt_id` = :p0';
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
            $obj = new ClientFactureOptions();
            $obj->hydrate($row);
            ClientFactureOptionsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ClientFactureOptions|ClientFactureOptions[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ClientFactureOptions[]|mixed the list of results, formatted by the current formatter
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
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the cl_fact_opt_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactOptId(1234); // WHERE cl_fact_opt_id = 1234
     * $query->filterByClFactOptId(array(12, 34)); // WHERE cl_fact_opt_id IN (12, 34)
     * $query->filterByClFactOptId(array('min' => 12)); // WHERE cl_fact_opt_id >= 12
     * $query->filterByClFactOptId(array('max' => 12)); // WHERE cl_fact_opt_id <= 12
     * </code>
     *
     * @param     mixed $clFactOptId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactOptId($clFactOptId = null, $comparison = null)
    {
        if (is_array($clFactOptId)) {
            $useMinMax = false;
            if (isset($clFactOptId['min'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $clFactOptId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clFactOptId['max'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $clFactOptId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $clFactOptId, $comparison);
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
     * @see       filterByClients()
     *
     * @param     mixed $clId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClId($clId = null, $comparison = null)
    {
        if (is_array($clId)) {
            $useMinMax = false;
            if (isset($clId['min'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::CL_ID, $clId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clId['max'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::CL_ID, $clId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_ID, $clId, $comparison);
    }

    /**
     * Filter the query on the cl_fact_bdc_required column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactBdcRequired(true); // WHERE cl_fact_bdc_required = true
     * $query->filterByClFactBdcRequired('yes'); // WHERE cl_fact_bdc_required = true
     * </code>
     *
     * @param     boolean|string $clFactBdcRequired The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactBdcRequired($clFactBdcRequired = null, $comparison = null)
    {
        if (is_string($clFactBdcRequired)) {
            $clFactBdcRequired = in_array(strtolower($clFactBdcRequired), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_BDC_REQUIRED, $clFactBdcRequired, $comparison);
    }

    /**
     * Filter the query on the cl_fact_bdc column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactBdc('fooValue');   // WHERE cl_fact_bdc = 'fooValue'
     * $query->filterByClFactBdc('%fooValue%'); // WHERE cl_fact_bdc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clFactBdc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactBdc($clFactBdc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clFactBdc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clFactBdc)) {
                $clFactBdc = str_replace('*', '%', $clFactBdc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_BDC, $clFactBdc, $comparison);
    }

    /**
     * Filter the query on the cl_fact_tvaintra column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactTvaintra('fooValue');   // WHERE cl_fact_tvaintra = 'fooValue'
     * $query->filterByClFactTvaintra('%fooValue%'); // WHERE cl_fact_tvaintra LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clFactTvaintra The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactTvaintra($clFactTvaintra = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clFactTvaintra)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clFactTvaintra)) {
                $clFactTvaintra = str_replace('*', '%', $clFactTvaintra);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_TVAINTRA, $clFactTvaintra, $comparison);
    }

    /**
     * Filter the query on the cl_fact_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactCountryId(1234); // WHERE cl_fact_country_id = 1234
     * $query->filterByClFactCountryId(array(12, 34)); // WHERE cl_fact_country_id IN (12, 34)
     * $query->filterByClFactCountryId(array('min' => 12)); // WHERE cl_fact_country_id >= 12
     * $query->filterByClFactCountryId(array('max' => 12)); // WHERE cl_fact_country_id <= 12
     * </code>
     *
     * @see       filterByCountryInvoiced()
     *
     * @param     mixed $clFactCountryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactCountryId($clFactCountryId = null, $comparison = null)
    {
        if (is_array($clFactCountryId)) {
            $useMinMax = false;
            if (isset($clFactCountryId['min'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, $clFactCountryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clFactCountryId['max'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, $clFactCountryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, $clFactCountryId, $comparison);
    }

    /**
     * Filter the query on the cl_fact_adf column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactAdf('fooValue');   // WHERE cl_fact_adf = 'fooValue'
     * $query->filterByClFactAdf('%fooValue%'); // WHERE cl_fact_adf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clFactAdf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactAdf($clFactAdf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clFactAdf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clFactAdf)) {
                $clFactAdf = str_replace('*', '%', $clFactAdf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_ADF, $clFactAdf, $comparison);
    }

    /**
     * Filter the query on the cl_fact_compte column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactCompte('fooValue');   // WHERE cl_fact_compte = 'fooValue'
     * $query->filterByClFactCompte('%fooValue%'); // WHERE cl_fact_compte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clFactCompte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactCompte($clFactCompte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clFactCompte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clFactCompte)) {
                $clFactCompte = str_replace('*', '%', $clFactCompte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_COMPTE, $clFactCompte, $comparison);
    }

    /**
     * Filter the query on the cl_fact_rfa column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactRfa(true); // WHERE cl_fact_rfa = true
     * $query->filterByClFactRfa('yes'); // WHERE cl_fact_rfa = true
     * </code>
     *
     * @param     boolean|string $clFactRfa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactRfa($clFactRfa = null, $comparison = null)
    {
        if (is_string($clFactRfa)) {
            $clFactRfa = in_array(strtolower($clFactRfa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_RFA, $clFactRfa, $comparison);
    }

    /**
     * Filter the query on the cl_fact_rfa_descr column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactRfaDescr('fooValue');   // WHERE cl_fact_rfa_descr = 'fooValue'
     * $query->filterByClFactRfaDescr('%fooValue%'); // WHERE cl_fact_rfa_descr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clFactRfaDescr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactRfaDescr($clFactRfaDescr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clFactRfaDescr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clFactRfaDescr)) {
                $clFactRfaDescr = str_replace('*', '%', $clFactRfaDescr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_RFA_DESCR, $clFactRfaDescr, $comparison);
    }

    /**
     * Filter the query on the cl_fact_echeance column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactEcheance(1234); // WHERE cl_fact_echeance = 1234
     * $query->filterByClFactEcheance(array(12, 34)); // WHERE cl_fact_echeance IN (12, 34)
     * $query->filterByClFactEcheance(array('min' => 12)); // WHERE cl_fact_echeance >= 12
     * $query->filterByClFactEcheance(array('max' => 12)); // WHERE cl_fact_echeance <= 12
     * </code>
     *
     * @see       filterByRFactureOptionsEcheances()
     *
     * @param     mixed $clFactEcheance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactEcheance($clFactEcheance = null, $comparison = null)
    {
        if (is_array($clFactEcheance)) {
            $useMinMax = false;
            if (isset($clFactEcheance['min'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, $clFactEcheance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clFactEcheance['max'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, $clFactEcheance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, $clFactEcheance, $comparison);
    }

    /**
     * Filter the query on the cl_fact_lang column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactLang('fooValue');   // WHERE cl_fact_lang = 'fooValue'
     * $query->filterByClFactLang('%fooValue%'); // WHERE cl_fact_lang LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clFactLang The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactLang($clFactLang = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clFactLang)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clFactLang)) {
                $clFactLang = str_replace('*', '%', $clFactLang);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_LANG, $clFactLang, $comparison);
    }

    /**
     * Filter the query on the plan_fact_periode_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanFactPeriodeId(1234); // WHERE plan_fact_periode_id = 1234
     * $query->filterByPlanFactPeriodeId(array(12, 34)); // WHERE plan_fact_periode_id IN (12, 34)
     * $query->filterByPlanFactPeriodeId(array('min' => 12)); // WHERE plan_fact_periode_id >= 12
     * $query->filterByPlanFactPeriodeId(array('max' => 12)); // WHERE plan_fact_periode_id <= 12
     * </code>
     *
     * @param     mixed $planFactPeriodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByPlanFactPeriodeId($planFactPeriodeId = null, $comparison = null)
    {
        if (is_array($planFactPeriodeId)) {
            $useMinMax = false;
            if (isset($planFactPeriodeId['min'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_ID, $planFactPeriodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($planFactPeriodeId['max'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_ID, $planFactPeriodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_ID, $planFactPeriodeId, $comparison);
    }

    /**
     * Filter the query on the plan_fact_periode_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanFactPeriodeTypeId(1234); // WHERE plan_fact_periode_type_id = 1234
     * $query->filterByPlanFactPeriodeTypeId(array(12, 34)); // WHERE plan_fact_periode_type_id IN (12, 34)
     * $query->filterByPlanFactPeriodeTypeId(array('min' => 12)); // WHERE plan_fact_periode_type_id >= 12
     * $query->filterByPlanFactPeriodeTypeId(array('max' => 12)); // WHERE plan_fact_periode_type_id <= 12
     * </code>
     *
     * @param     mixed $planFactPeriodeTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByPlanFactPeriodeTypeId($planFactPeriodeTypeId = null, $comparison = null)
    {
        if (is_array($planFactPeriodeTypeId)) {
            $useMinMax = false;
            if (isset($planFactPeriodeTypeId['min'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_TYPE_ID, $planFactPeriodeTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($planFactPeriodeTypeId['max'])) {
                $this->addUsingAlias(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_TYPE_ID, $planFactPeriodeTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::PLAN_FACT_PERIODE_TYPE_ID, $planFactPeriodeTypeId, $comparison);
    }

    /**
     * Filter the query on the cl_fact_siret column
     *
     * Example usage:
     * <code>
     * $query->filterByClFactSiret('fooValue');   // WHERE cl_fact_siret = 'fooValue'
     * $query->filterByClFactSiret('%fooValue%'); // WHERE cl_fact_siret LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clFactSiret The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function filterByClFactSiret($clFactSiret = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clFactSiret)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clFactSiret)) {
                $clFactSiret = str_replace('*', '%', $clFactSiret);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_SIRET, $clFactSiret, $comparison);
    }

    /**
     * Filter the query by a related RFactureOptionsEcheances object
     *
     * @param   RFactureOptionsEcheances|PropelObjectCollection $rFactureOptionsEcheances The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientFactureOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRFactureOptionsEcheances($rFactureOptionsEcheances, $comparison = null)
    {
        if ($rFactureOptionsEcheances instanceof RFactureOptionsEcheances) {
            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, $rFactureOptionsEcheances->getFactOptEcheanceId(), $comparison);
        } elseif ($rFactureOptionsEcheances instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_ECHEANCE, $rFactureOptionsEcheances->toKeyValue('PrimaryKey', 'FactOptEcheanceId'), $comparison);
        } else {
            throw new PropelException('filterByRFactureOptionsEcheances() only accepts arguments of type RFactureOptionsEcheances or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RFactureOptionsEcheances relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function joinRFactureOptionsEcheances($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RFactureOptionsEcheances');

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
            $this->addJoinObject($join, 'RFactureOptionsEcheances');
        }

        return $this;
    }

    /**
     * Use the RFactureOptionsEcheances relation RFactureOptionsEcheances object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RFactureOptionsEcheancesQuery A secondary query class using the current class as primary query
     */
    public function useRFactureOptionsEcheancesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRFactureOptionsEcheances($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RFactureOptionsEcheances', 'RFactureOptionsEcheancesQuery');
    }

    /**
     * Filter the query by a related Clients object
     *
     * @param   Clients|PropelObjectCollection $clients The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientFactureOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClients($clients, $comparison = null)
    {
        if ($clients instanceof Clients) {
            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_ID, $clients->getClId(), $comparison);
        } elseif ($clients instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_ID, $clients->toKeyValue('PrimaryKey', 'ClId'), $comparison);
        } else {
            throw new PropelException('filterByClients() only accepts arguments of type Clients or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Clients relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function joinClients($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Clients');

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
            $this->addJoinObject($join, 'Clients');
        }

        return $this;
    }

    /**
     * Use the Clients relation Clients object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientsQuery A secondary query class using the current class as primary query
     */
    public function useClientsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClients($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Clients', 'ClientsQuery');
    }

    /**
     * Filter the query by a related RLanguages object
     *
     * @param   RLanguages|PropelObjectCollection $rLanguages The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientFactureOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRLanguages($rLanguages, $comparison = null)
    {
        if ($rLanguages instanceof RLanguages) {
            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_LANG, $rLanguages->getRLangCode(), $comparison);
        } elseif ($rLanguages instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_LANG, $rLanguages->toKeyValue('PrimaryKey', 'RLangCode'), $comparison);
        } else {
            throw new PropelException('filterByRLanguages() only accepts arguments of type RLanguages or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RLanguages relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function joinRLanguages($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RLanguages');

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
            $this->addJoinObject($join, 'RLanguages');
        }

        return $this;
    }

    /**
     * Use the RLanguages relation RLanguages object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RLanguagesQuery A secondary query class using the current class as primary query
     */
    public function useRLanguagesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRLanguages($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RLanguages', 'RLanguagesQuery');
    }

    /**
     * Filter the query by a related RCountries object
     *
     * @param   RCountries|PropelObjectCollection $rCountries The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientFactureOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCountryInvoiced($rCountries, $comparison = null)
    {
        if ($rCountries instanceof RCountries) {
            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, $rCountries->getRCountryId(), $comparison);
        } elseif ($rCountries instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_COUNTRY_ID, $rCountries->toKeyValue('PrimaryKey', 'RCountryId'), $comparison);
        } else {
            throw new PropelException('filterByCountryInvoiced() only accepts arguments of type RCountries or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CountryInvoiced relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function joinCountryInvoiced($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CountryInvoiced');

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
            $this->addJoinObject($join, 'CountryInvoiced');
        }

        return $this;
    }

    /**
     * Use the CountryInvoiced relation RCountries object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCountriesQuery A secondary query class using the current class as primary query
     */
    public function useCountryInvoicedQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCountryInvoiced($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CountryInvoiced', 'RCountriesQuery');
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientFactureOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_ID, $factures->getClId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            return $this
                ->useFacturesQuery()
                ->filterByPrimaryKeys($factures->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactures() only accepts arguments of type Factures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Factures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function joinFactures($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Factures');

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
            $this->addJoinObject($join, 'Factures');
        }

        return $this;
    }

    /**
     * Use the Factures relation Factures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturesQuery A secondary query class using the current class as primary query
     */
    public function useFacturesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factures', 'FacturesQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientFactureOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_ID, $operations->getOpClId(), $comparison);
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
     * @return ClientFactureOptionsQuery The current query, for fluid interface
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
     * Filter the query by a related Relances object
     *
     * @param   Relances|PropelObjectCollection $relances  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientFactureOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRelances($relances, $comparison = null)
    {
        if ($relances instanceof Relances) {
            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_ID, $relances->getClId(), $comparison);
        } elseif ($relances instanceof PropelObjectCollection) {
            return $this
                ->useRelancesQuery()
                ->filterByPrimaryKeys($relances->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRelances() only accepts arguments of type Relances or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Relances relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function joinRelances($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Relances');

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
            $this->addJoinObject($join, 'Relances');
        }

        return $this;
    }

    /**
     * Use the Relances relation Relances object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RelancesQuery A secondary query class using the current class as primary query
     */
    public function useRelancesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRelances($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Relances', 'RelancesQuery');
    }

    /**
     * Filter the query by a related FactureEditionHistory object
     *
     * @param   FactureEditionHistory|PropelObjectCollection $factureEditionHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientFactureOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureEditionHistory($factureEditionHistory, $comparison = null)
    {
        if ($factureEditionHistory instanceof FactureEditionHistory) {
            return $this
                ->addUsingAlias(ClientFactureOptionsPeer::CL_ID, $factureEditionHistory->getClId(), $comparison);
        } elseif ($factureEditionHistory instanceof PropelObjectCollection) {
            return $this
                ->useFactureEditionHistoryQuery()
                ->filterByPrimaryKeys($factureEditionHistory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactureEditionHistory() only accepts arguments of type FactureEditionHistory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FactureEditionHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function joinFactureEditionHistory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FactureEditionHistory');

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
            $this->addJoinObject($join, 'FactureEditionHistory');
        }

        return $this;
    }

    /**
     * Use the FactureEditionHistory relation FactureEditionHistory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FactureEditionHistoryQuery A secondary query class using the current class as primary query
     */
    public function useFactureEditionHistoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactureEditionHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactureEditionHistory', 'FactureEditionHistoryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ClientFactureOptions $clientFactureOptions Object to remove from the list of results
     *
     * @return ClientFactureOptionsQuery The current query, for fluid interface
     */
    public function prune($clientFactureOptions = null)
    {
        if ($clientFactureOptions) {
            $this->addUsingAlias(ClientFactureOptionsPeer::CL_FACT_OPT_ID, $clientFactureOptions->getClFactOptId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
