<?php


/**
 * Base class that represents a query for the 'relances' table.
 *
 *
 *
 * @method RelancesQuery orderByRelId($order = Criteria::ASC) Order by the rel_id column
 * @method RelancesQuery orderByRelNumero($order = Criteria::ASC) Order by the rel_numero column
 * @method RelancesQuery orderByRelReference($order = Criteria::ASC) Order by the rel_reference column
 * @method RelancesQuery orderByClId($order = Criteria::ASC) Order by the cl_id column
 * @method RelancesQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method RelancesQuery orderByRelEcheance($order = Criteria::ASC) Order by the rel_echeance column
 * @method RelancesQuery orderByRelTypeId($order = Criteria::ASC) Order by the rel_type_id column
 * @method RelancesQuery orderByRelParentId($order = Criteria::ASC) Order by the rel_parent_id column
 * @method RelancesQuery orderByRelStatutId($order = Criteria::ASC) Order by the rel_statut_id column
 * @method RelancesQuery orderByRelLang($order = Criteria::ASC) Order by the rel_lang column
 * @method RelancesQuery orderByRelCtFacturation($order = Criteria::ASC) Order by the rel_ct_facturation column
 * @method RelancesQuery orderByRelAdresse1($order = Criteria::ASC) Order by the rel_adresse1 column
 * @method RelancesQuery orderByRelAdresse2($order = Criteria::ASC) Order by the rel_adresse2 column
 * @method RelancesQuery orderByRelAdresse3($order = Criteria::ASC) Order by the rel_adresse3 column
 * @method RelancesQuery orderByRelCodePostal($order = Criteria::ASC) Order by the rel_code_postal column
 * @method RelancesQuery orderByRelVille($order = Criteria::ASC) Order by the rel_ville column
 * @method RelancesQuery orderByRelPays($order = Criteria::ASC) Order by the rel_pays column
 * @method RelancesQuery orderByLastRecalculationDate($order = Criteria::ASC) Order by the last_recalculation_date column
 *
 * @method RelancesQuery groupByRelId() Group by the rel_id column
 * @method RelancesQuery groupByRelNumero() Group by the rel_numero column
 * @method RelancesQuery groupByRelReference() Group by the rel_reference column
 * @method RelancesQuery groupByClId() Group by the cl_id column
 * @method RelancesQuery groupByDateCreate() Group by the date_create column
 * @method RelancesQuery groupByRelEcheance() Group by the rel_echeance column
 * @method RelancesQuery groupByRelTypeId() Group by the rel_type_id column
 * @method RelancesQuery groupByRelParentId() Group by the rel_parent_id column
 * @method RelancesQuery groupByRelStatutId() Group by the rel_statut_id column
 * @method RelancesQuery groupByRelLang() Group by the rel_lang column
 * @method RelancesQuery groupByRelCtFacturation() Group by the rel_ct_facturation column
 * @method RelancesQuery groupByRelAdresse1() Group by the rel_adresse1 column
 * @method RelancesQuery groupByRelAdresse2() Group by the rel_adresse2 column
 * @method RelancesQuery groupByRelAdresse3() Group by the rel_adresse3 column
 * @method RelancesQuery groupByRelCodePostal() Group by the rel_code_postal column
 * @method RelancesQuery groupByRelVille() Group by the rel_ville column
 * @method RelancesQuery groupByRelPays() Group by the rel_pays column
 * @method RelancesQuery groupByLastRecalculationDate() Group by the last_recalculation_date column
 *
 * @method RelancesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RelancesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RelancesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RelancesQuery leftJoinClients($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clients relation
 * @method RelancesQuery rightJoinClients($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clients relation
 * @method RelancesQuery innerJoinClients($relationAlias = null) Adds a INNER JOIN clause to the query using the Clients relation
 *
 * @method RelancesQuery leftJoinRRelanceTypes($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRelanceTypes relation
 * @method RelancesQuery rightJoinRRelanceTypes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRelanceTypes relation
 * @method RelancesQuery innerJoinRRelanceTypes($relationAlias = null) Adds a INNER JOIN clause to the query using the RRelanceTypes relation
 *
 * @method RelancesQuery leftJoinRRelanceStatuts($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRelanceStatuts relation
 * @method RelancesQuery rightJoinRRelanceStatuts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRelanceStatuts relation
 * @method RelancesQuery innerJoinRRelanceStatuts($relationAlias = null) Adds a INNER JOIN clause to the query using the RRelanceStatuts relation
 *
 * @method RelancesQuery leftJoinClientFactureOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientFactureOptions relation
 * @method RelancesQuery rightJoinClientFactureOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientFactureOptions relation
 * @method RelancesQuery innerJoinClientFactureOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientFactureOptions relation
 *
 * @method RelancesQuery leftJoinContactFacturation($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContactFacturation relation
 * @method RelancesQuery rightJoinContactFacturation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContactFacturation relation
 * @method RelancesQuery innerJoinContactFacturation($relationAlias = null) Adds a INNER JOIN clause to the query using the ContactFacturation relation
 *
 * @method RelancesQuery leftJoinLnkRelanceFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkRelanceFacture relation
 * @method RelancesQuery rightJoinLnkRelanceFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkRelanceFacture relation
 * @method RelancesQuery innerJoinLnkRelanceFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkRelanceFacture relation
 *
 * @method RelancesQuery leftJoinRelanceStatuts($relationAlias = null) Adds a LEFT JOIN clause to the query using the RelanceStatuts relation
 * @method RelancesQuery rightJoinRelanceStatuts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RelanceStatuts relation
 * @method RelancesQuery innerJoinRelanceStatuts($relationAlias = null) Adds a INNER JOIN clause to the query using the RelanceStatuts relation
 *
 * @method Relances findOne(PropelPDO $con = null) Return the first Relances matching the query
 * @method Relances findOneOrCreate(PropelPDO $con = null) Return the first Relances matching the query, or a new Relances object populated from the query conditions when no match is found
 *
 * @method Relances findOneByRelNumero(int $rel_numero) Return the first Relances filtered by the rel_numero column
 * @method Relances findOneByRelReference(string $rel_reference) Return the first Relances filtered by the rel_reference column
 * @method Relances findOneByClId(int $cl_id) Return the first Relances filtered by the cl_id column
 * @method Relances findOneByDateCreate(string $date_create) Return the first Relances filtered by the date_create column
 * @method Relances findOneByRelEcheance(string $rel_echeance) Return the first Relances filtered by the rel_echeance column
 * @method Relances findOneByRelTypeId(int $rel_type_id) Return the first Relances filtered by the rel_type_id column
 * @method Relances findOneByRelParentId(int $rel_parent_id) Return the first Relances filtered by the rel_parent_id column
 * @method Relances findOneByRelStatutId(int $rel_statut_id) Return the first Relances filtered by the rel_statut_id column
 * @method Relances findOneByRelLang(string $rel_lang) Return the first Relances filtered by the rel_lang column
 * @method Relances findOneByRelCtFacturation(int $rel_ct_facturation) Return the first Relances filtered by the rel_ct_facturation column
 * @method Relances findOneByRelAdresse1(string $rel_adresse1) Return the first Relances filtered by the rel_adresse1 column
 * @method Relances findOneByRelAdresse2(string $rel_adresse2) Return the first Relances filtered by the rel_adresse2 column
 * @method Relances findOneByRelAdresse3(string $rel_adresse3) Return the first Relances filtered by the rel_adresse3 column
 * @method Relances findOneByRelCodePostal(string $rel_code_postal) Return the first Relances filtered by the rel_code_postal column
 * @method Relances findOneByRelVille(string $rel_ville) Return the first Relances filtered by the rel_ville column
 * @method Relances findOneByRelPays(string $rel_pays) Return the first Relances filtered by the rel_pays column
 * @method Relances findOneByLastRecalculationDate(string $last_recalculation_date) Return the first Relances filtered by the last_recalculation_date column
 *
 * @method array findByRelId(int $rel_id) Return Relances objects filtered by the rel_id column
 * @method array findByRelNumero(int $rel_numero) Return Relances objects filtered by the rel_numero column
 * @method array findByRelReference(string $rel_reference) Return Relances objects filtered by the rel_reference column
 * @method array findByClId(int $cl_id) Return Relances objects filtered by the cl_id column
 * @method array findByDateCreate(string $date_create) Return Relances objects filtered by the date_create column
 * @method array findByRelEcheance(string $rel_echeance) Return Relances objects filtered by the rel_echeance column
 * @method array findByRelTypeId(int $rel_type_id) Return Relances objects filtered by the rel_type_id column
 * @method array findByRelParentId(int $rel_parent_id) Return Relances objects filtered by the rel_parent_id column
 * @method array findByRelStatutId(int $rel_statut_id) Return Relances objects filtered by the rel_statut_id column
 * @method array findByRelLang(string $rel_lang) Return Relances objects filtered by the rel_lang column
 * @method array findByRelCtFacturation(int $rel_ct_facturation) Return Relances objects filtered by the rel_ct_facturation column
 * @method array findByRelAdresse1(string $rel_adresse1) Return Relances objects filtered by the rel_adresse1 column
 * @method array findByRelAdresse2(string $rel_adresse2) Return Relances objects filtered by the rel_adresse2 column
 * @method array findByRelAdresse3(string $rel_adresse3) Return Relances objects filtered by the rel_adresse3 column
 * @method array findByRelCodePostal(string $rel_code_postal) Return Relances objects filtered by the rel_code_postal column
 * @method array findByRelVille(string $rel_ville) Return Relances objects filtered by the rel_ville column
 * @method array findByRelPays(string $rel_pays) Return Relances objects filtered by the rel_pays column
 * @method array findByLastRecalculationDate(string $last_recalculation_date) Return Relances objects filtered by the last_recalculation_date column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRelancesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRelancesQuery object.
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
            $modelName = 'Relances';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RelancesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RelancesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RelancesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RelancesQuery) {
            return $criteria;
        }
        $query = new RelancesQuery(null, null, $modelAlias);

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
     * @return   Relances|Relances[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RelancesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Relances A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRelId($key, $con = null)
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
     * @return                 Relances A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `rel_id`, `rel_numero`, `rel_reference`, `cl_id`, `date_create`, `rel_echeance`, `rel_type_id`, `rel_parent_id`, `rel_statut_id`, `rel_lang`, `rel_ct_facturation`, `rel_adresse1`, `rel_adresse2`, `rel_adresse3`, `rel_code_postal`, `rel_ville`, `rel_pays`, `last_recalculation_date` FROM `relances` WHERE `rel_id` = :p0';
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
            $obj = new Relances();
            $obj->hydrate($row);
            RelancesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Relances|Relances[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Relances[]|mixed the list of results, formatted by the current formatter
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
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RelancesPeer::REL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RelancesPeer::REL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the rel_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelId(1234); // WHERE rel_id = 1234
     * $query->filterByRelId(array(12, 34)); // WHERE rel_id IN (12, 34)
     * $query->filterByRelId(array('min' => 12)); // WHERE rel_id >= 12
     * $query->filterByRelId(array('max' => 12)); // WHERE rel_id <= 12
     * </code>
     *
     * @param     mixed $relId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelId($relId = null, $comparison = null)
    {
        if (is_array($relId)) {
            $useMinMax = false;
            if (isset($relId['min'])) {
                $this->addUsingAlias(RelancesPeer::REL_ID, $relId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relId['max'])) {
                $this->addUsingAlias(RelancesPeer::REL_ID, $relId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_ID, $relId, $comparison);
    }

    /**
     * Filter the query on the rel_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByRelNumero(1234); // WHERE rel_numero = 1234
     * $query->filterByRelNumero(array(12, 34)); // WHERE rel_numero IN (12, 34)
     * $query->filterByRelNumero(array('min' => 12)); // WHERE rel_numero >= 12
     * $query->filterByRelNumero(array('max' => 12)); // WHERE rel_numero <= 12
     * </code>
     *
     * @param     mixed $relNumero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelNumero($relNumero = null, $comparison = null)
    {
        if (is_array($relNumero)) {
            $useMinMax = false;
            if (isset($relNumero['min'])) {
                $this->addUsingAlias(RelancesPeer::REL_NUMERO, $relNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relNumero['max'])) {
                $this->addUsingAlias(RelancesPeer::REL_NUMERO, $relNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_NUMERO, $relNumero, $comparison);
    }

    /**
     * Filter the query on the rel_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByRelReference('fooValue');   // WHERE rel_reference = 'fooValue'
     * $query->filterByRelReference('%fooValue%'); // WHERE rel_reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelReference($relReference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relReference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relReference)) {
                $relReference = str_replace('*', '%', $relReference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_REFERENCE, $relReference, $comparison);
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
     * @see       filterByClientFactureOptions()
     *
     * @param     mixed $clId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByClId($clId = null, $comparison = null)
    {
        if (is_array($clId)) {
            $useMinMax = false;
            if (isset($clId['min'])) {
                $this->addUsingAlias(RelancesPeer::CL_ID, $clId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clId['max'])) {
                $this->addUsingAlias(RelancesPeer::CL_ID, $clId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelancesPeer::CL_ID, $clId, $comparison);
    }

    /**
     * Filter the query on the date_create column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreate('2011-03-14'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate('now'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate(array('max' => 'yesterday')); // WHERE date_create < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(RelancesPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(RelancesPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelancesPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query on the rel_echeance column
     *
     * Example usage:
     * <code>
     * $query->filterByRelEcheance('2011-03-14'); // WHERE rel_echeance = '2011-03-14'
     * $query->filterByRelEcheance('now'); // WHERE rel_echeance = '2011-03-14'
     * $query->filterByRelEcheance(array('max' => 'yesterday')); // WHERE rel_echeance < '2011-03-13'
     * </code>
     *
     * @param     mixed $relEcheance The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelEcheance($relEcheance = null, $comparison = null)
    {
        if (is_array($relEcheance)) {
            $useMinMax = false;
            if (isset($relEcheance['min'])) {
                $this->addUsingAlias(RelancesPeer::REL_ECHEANCE, $relEcheance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relEcheance['max'])) {
                $this->addUsingAlias(RelancesPeer::REL_ECHEANCE, $relEcheance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_ECHEANCE, $relEcheance, $comparison);
    }

    /**
     * Filter the query on the rel_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelTypeId(1234); // WHERE rel_type_id = 1234
     * $query->filterByRelTypeId(array(12, 34)); // WHERE rel_type_id IN (12, 34)
     * $query->filterByRelTypeId(array('min' => 12)); // WHERE rel_type_id >= 12
     * $query->filterByRelTypeId(array('max' => 12)); // WHERE rel_type_id <= 12
     * </code>
     *
     * @see       filterByRRelanceTypes()
     *
     * @param     mixed $relTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelTypeId($relTypeId = null, $comparison = null)
    {
        if (is_array($relTypeId)) {
            $useMinMax = false;
            if (isset($relTypeId['min'])) {
                $this->addUsingAlias(RelancesPeer::REL_TYPE_ID, $relTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relTypeId['max'])) {
                $this->addUsingAlias(RelancesPeer::REL_TYPE_ID, $relTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_TYPE_ID, $relTypeId, $comparison);
    }

    /**
     * Filter the query on the rel_parent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelParentId(1234); // WHERE rel_parent_id = 1234
     * $query->filterByRelParentId(array(12, 34)); // WHERE rel_parent_id IN (12, 34)
     * $query->filterByRelParentId(array('min' => 12)); // WHERE rel_parent_id >= 12
     * $query->filterByRelParentId(array('max' => 12)); // WHERE rel_parent_id <= 12
     * </code>
     *
     * @param     mixed $relParentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelParentId($relParentId = null, $comparison = null)
    {
        if (is_array($relParentId)) {
            $useMinMax = false;
            if (isset($relParentId['min'])) {
                $this->addUsingAlias(RelancesPeer::REL_PARENT_ID, $relParentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relParentId['max'])) {
                $this->addUsingAlias(RelancesPeer::REL_PARENT_ID, $relParentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_PARENT_ID, $relParentId, $comparison);
    }

    /**
     * Filter the query on the rel_statut_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelStatutId(1234); // WHERE rel_statut_id = 1234
     * $query->filterByRelStatutId(array(12, 34)); // WHERE rel_statut_id IN (12, 34)
     * $query->filterByRelStatutId(array('min' => 12)); // WHERE rel_statut_id >= 12
     * $query->filterByRelStatutId(array('max' => 12)); // WHERE rel_statut_id <= 12
     * </code>
     *
     * @see       filterByRRelanceStatuts()
     *
     * @param     mixed $relStatutId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelStatutId($relStatutId = null, $comparison = null)
    {
        if (is_array($relStatutId)) {
            $useMinMax = false;
            if (isset($relStatutId['min'])) {
                $this->addUsingAlias(RelancesPeer::REL_STATUT_ID, $relStatutId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relStatutId['max'])) {
                $this->addUsingAlias(RelancesPeer::REL_STATUT_ID, $relStatutId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_STATUT_ID, $relStatutId, $comparison);
    }

    /**
     * Filter the query on the rel_lang column
     *
     * Example usage:
     * <code>
     * $query->filterByRelLang('fooValue');   // WHERE rel_lang = 'fooValue'
     * $query->filterByRelLang('%fooValue%'); // WHERE rel_lang LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relLang The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelLang($relLang = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relLang)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relLang)) {
                $relLang = str_replace('*', '%', $relLang);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_LANG, $relLang, $comparison);
    }

    /**
     * Filter the query on the rel_ct_facturation column
     *
     * Example usage:
     * <code>
     * $query->filterByRelCtFacturation(1234); // WHERE rel_ct_facturation = 1234
     * $query->filterByRelCtFacturation(array(12, 34)); // WHERE rel_ct_facturation IN (12, 34)
     * $query->filterByRelCtFacturation(array('min' => 12)); // WHERE rel_ct_facturation >= 12
     * $query->filterByRelCtFacturation(array('max' => 12)); // WHERE rel_ct_facturation <= 12
     * </code>
     *
     * @see       filterByContactFacturation()
     *
     * @param     mixed $relCtFacturation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelCtFacturation($relCtFacturation = null, $comparison = null)
    {
        if (is_array($relCtFacturation)) {
            $useMinMax = false;
            if (isset($relCtFacturation['min'])) {
                $this->addUsingAlias(RelancesPeer::REL_CT_FACTURATION, $relCtFacturation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relCtFacturation['max'])) {
                $this->addUsingAlias(RelancesPeer::REL_CT_FACTURATION, $relCtFacturation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_CT_FACTURATION, $relCtFacturation, $comparison);
    }

    /**
     * Filter the query on the rel_adresse1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRelAdresse1('fooValue');   // WHERE rel_adresse1 = 'fooValue'
     * $query->filterByRelAdresse1('%fooValue%'); // WHERE rel_adresse1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relAdresse1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelAdresse1($relAdresse1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relAdresse1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relAdresse1)) {
                $relAdresse1 = str_replace('*', '%', $relAdresse1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_ADRESSE1, $relAdresse1, $comparison);
    }

    /**
     * Filter the query on the rel_adresse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRelAdresse2('fooValue');   // WHERE rel_adresse2 = 'fooValue'
     * $query->filterByRelAdresse2('%fooValue%'); // WHERE rel_adresse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relAdresse2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelAdresse2($relAdresse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relAdresse2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relAdresse2)) {
                $relAdresse2 = str_replace('*', '%', $relAdresse2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_ADRESSE2, $relAdresse2, $comparison);
    }

    /**
     * Filter the query on the rel_adresse3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRelAdresse3('fooValue');   // WHERE rel_adresse3 = 'fooValue'
     * $query->filterByRelAdresse3('%fooValue%'); // WHERE rel_adresse3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relAdresse3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelAdresse3($relAdresse3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relAdresse3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relAdresse3)) {
                $relAdresse3 = str_replace('*', '%', $relAdresse3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_ADRESSE3, $relAdresse3, $comparison);
    }

    /**
     * Filter the query on the rel_code_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByRelCodePostal('fooValue');   // WHERE rel_code_postal = 'fooValue'
     * $query->filterByRelCodePostal('%fooValue%'); // WHERE rel_code_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relCodePostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelCodePostal($relCodePostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relCodePostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relCodePostal)) {
                $relCodePostal = str_replace('*', '%', $relCodePostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_CODE_POSTAL, $relCodePostal, $comparison);
    }

    /**
     * Filter the query on the rel_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByRelVille('fooValue');   // WHERE rel_ville = 'fooValue'
     * $query->filterByRelVille('%fooValue%'); // WHERE rel_ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relVille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelVille($relVille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relVille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relVille)) {
                $relVille = str_replace('*', '%', $relVille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_VILLE, $relVille, $comparison);
    }

    /**
     * Filter the query on the rel_pays column
     *
     * Example usage:
     * <code>
     * $query->filterByRelPays('fooValue');   // WHERE rel_pays = 'fooValue'
     * $query->filterByRelPays('%fooValue%'); // WHERE rel_pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relPays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByRelPays($relPays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relPays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relPays)) {
                $relPays = str_replace('*', '%', $relPays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RelancesPeer::REL_PAYS, $relPays, $comparison);
    }

    /**
     * Filter the query on the last_recalculation_date column
     *
     * Example usage:
     * <code>
     * $query->filterByLastRecalculationDate('2011-03-14'); // WHERE last_recalculation_date = '2011-03-14'
     * $query->filterByLastRecalculationDate('now'); // WHERE last_recalculation_date = '2011-03-14'
     * $query->filterByLastRecalculationDate(array('max' => 'yesterday')); // WHERE last_recalculation_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $lastRecalculationDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function filterByLastRecalculationDate($lastRecalculationDate = null, $comparison = null)
    {
        if (is_array($lastRecalculationDate)) {
            $useMinMax = false;
            if (isset($lastRecalculationDate['min'])) {
                $this->addUsingAlias(RelancesPeer::LAST_RECALCULATION_DATE, $lastRecalculationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastRecalculationDate['max'])) {
                $this->addUsingAlias(RelancesPeer::LAST_RECALCULATION_DATE, $lastRecalculationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RelancesPeer::LAST_RECALCULATION_DATE, $lastRecalculationDate, $comparison);
    }

    /**
     * Filter the query by a related Clients object
     *
     * @param   Clients|PropelObjectCollection $clients The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RelancesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClients($clients, $comparison = null)
    {
        if ($clients instanceof Clients) {
            return $this
                ->addUsingAlias(RelancesPeer::CL_ID, $clients->getClId(), $comparison);
        } elseif ($clients instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RelancesPeer::CL_ID, $clients->toKeyValue('PrimaryKey', 'ClId'), $comparison);
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
     * @return RelancesQuery The current query, for fluid interface
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
     * Filter the query by a related RRelanceTypes object
     *
     * @param   RRelanceTypes|PropelObjectCollection $rRelanceTypes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RelancesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRelanceTypes($rRelanceTypes, $comparison = null)
    {
        if ($rRelanceTypes instanceof RRelanceTypes) {
            return $this
                ->addUsingAlias(RelancesPeer::REL_TYPE_ID, $rRelanceTypes->getRRelTypeId(), $comparison);
        } elseif ($rRelanceTypes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RelancesPeer::REL_TYPE_ID, $rRelanceTypes->toKeyValue('PrimaryKey', 'RRelTypeId'), $comparison);
        } else {
            throw new PropelException('filterByRRelanceTypes() only accepts arguments of type RRelanceTypes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRelanceTypes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function joinRRelanceTypes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRelanceTypes');

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
            $this->addJoinObject($join, 'RRelanceTypes');
        }

        return $this;
    }

    /**
     * Use the RRelanceTypes relation RRelanceTypes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRelanceTypesQuery A secondary query class using the current class as primary query
     */
    public function useRRelanceTypesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRRelanceTypes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRelanceTypes', 'RRelanceTypesQuery');
    }

    /**
     * Filter the query by a related RRelanceStatuts object
     *
     * @param   RRelanceStatuts|PropelObjectCollection $rRelanceStatuts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RelancesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRelanceStatuts($rRelanceStatuts, $comparison = null)
    {
        if ($rRelanceStatuts instanceof RRelanceStatuts) {
            return $this
                ->addUsingAlias(RelancesPeer::REL_STATUT_ID, $rRelanceStatuts->getRRelStatutId(), $comparison);
        } elseif ($rRelanceStatuts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RelancesPeer::REL_STATUT_ID, $rRelanceStatuts->toKeyValue('PrimaryKey', 'RRelStatutId'), $comparison);
        } else {
            throw new PropelException('filterByRRelanceStatuts() only accepts arguments of type RRelanceStatuts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRelanceStatuts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function joinRRelanceStatuts($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRelanceStatuts');

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
            $this->addJoinObject($join, 'RRelanceStatuts');
        }

        return $this;
    }

    /**
     * Use the RRelanceStatuts relation RRelanceStatuts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRelanceStatutsQuery A secondary query class using the current class as primary query
     */
    public function useRRelanceStatutsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRRelanceStatuts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRelanceStatuts', 'RRelanceStatutsQuery');
    }

    /**
     * Filter the query by a related ClientFactureOptions object
     *
     * @param   ClientFactureOptions|PropelObjectCollection $clientFactureOptions The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RelancesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientFactureOptions($clientFactureOptions, $comparison = null)
    {
        if ($clientFactureOptions instanceof ClientFactureOptions) {
            return $this
                ->addUsingAlias(RelancesPeer::CL_ID, $clientFactureOptions->getClId(), $comparison);
        } elseif ($clientFactureOptions instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RelancesPeer::CL_ID, $clientFactureOptions->toKeyValue('PrimaryKey', 'ClId'), $comparison);
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
     * @return RelancesQuery The current query, for fluid interface
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
     * Filter the query by a related Contacts object
     *
     * @param   Contacts|PropelObjectCollection $contacts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RelancesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContactFacturation($contacts, $comparison = null)
    {
        if ($contacts instanceof Contacts) {
            return $this
                ->addUsingAlias(RelancesPeer::REL_CT_FACTURATION, $contacts->getCtId(), $comparison);
        } elseif ($contacts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RelancesPeer::REL_CT_FACTURATION, $contacts->toKeyValue('PrimaryKey', 'CtId'), $comparison);
        } else {
            throw new PropelException('filterByContactFacturation() only accepts arguments of type Contacts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ContactFacturation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function joinContactFacturation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ContactFacturation');

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
            $this->addJoinObject($join, 'ContactFacturation');
        }

        return $this;
    }

    /**
     * Use the ContactFacturation relation Contacts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContactsQuery A secondary query class using the current class as primary query
     */
    public function useContactFacturationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinContactFacturation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ContactFacturation', 'ContactsQuery');
    }

    /**
     * Filter the query by a related LnkRelanceFacture object
     *
     * @param   LnkRelanceFacture|PropelObjectCollection $lnkRelanceFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RelancesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkRelanceFacture($lnkRelanceFacture, $comparison = null)
    {
        if ($lnkRelanceFacture instanceof LnkRelanceFacture) {
            return $this
                ->addUsingAlias(RelancesPeer::REL_ID, $lnkRelanceFacture->getRelId(), $comparison);
        } elseif ($lnkRelanceFacture instanceof PropelObjectCollection) {
            return $this
                ->useLnkRelanceFactureQuery()
                ->filterByPrimaryKeys($lnkRelanceFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkRelanceFacture() only accepts arguments of type LnkRelanceFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkRelanceFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function joinLnkRelanceFacture($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkRelanceFacture');

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
            $this->addJoinObject($join, 'LnkRelanceFacture');
        }

        return $this;
    }

    /**
     * Use the LnkRelanceFacture relation LnkRelanceFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkRelanceFactureQuery A secondary query class using the current class as primary query
     */
    public function useLnkRelanceFactureQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLnkRelanceFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkRelanceFacture', 'LnkRelanceFactureQuery');
    }

    /**
     * Filter the query by a related RelanceStatuts object
     *
     * @param   RelanceStatuts|PropelObjectCollection $relanceStatuts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RelancesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRelanceStatuts($relanceStatuts, $comparison = null)
    {
        if ($relanceStatuts instanceof RelanceStatuts) {
            return $this
                ->addUsingAlias(RelancesPeer::REL_ID, $relanceStatuts->getRelId(), $comparison);
        } elseif ($relanceStatuts instanceof PropelObjectCollection) {
            return $this
                ->useRelanceStatutsQuery()
                ->filterByPrimaryKeys($relanceStatuts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRelanceStatuts() only accepts arguments of type RelanceStatuts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RelanceStatuts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function joinRelanceStatuts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RelanceStatuts');

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
            $this->addJoinObject($join, 'RelanceStatuts');
        }

        return $this;
    }

    /**
     * Use the RelanceStatuts relation RelanceStatuts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RelanceStatutsQuery A secondary query class using the current class as primary query
     */
    public function useRelanceStatutsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRelanceStatuts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RelanceStatuts', 'RelanceStatutsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Relances $relances Object to remove from the list of results
     *
     * @return RelancesQuery The current query, for fluid interface
     */
    public function prune($relances = null)
    {
        if ($relances) {
            $this->addUsingAlias(RelancesPeer::REL_ID, $relances->getRelId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
