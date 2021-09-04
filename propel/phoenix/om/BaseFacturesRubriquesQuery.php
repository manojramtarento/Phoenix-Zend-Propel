<?php


/**
 * Base class that represents a query for the 'factures_rubriques' table.
 *
 *
 *
 * @method FacturesRubriquesQuery orderByFactRubId($order = Criteria::ASC) Order by the fact_rub_id column
 * @method FacturesRubriquesQuery orderByFactId($order = Criteria::ASC) Order by the fact_id column
 * @method FacturesRubriquesQuery orderByRRubriqueId($order = Criteria::ASC) Order by the r_rubrique_id column
 * @method FacturesRubriquesQuery orderByOpRubriqueId($order = Criteria::ASC) Order by the op_rubrique_id column
 * @method FacturesRubriquesQuery orderByFactRubOrder($order = Criteria::ASC) Order by the fact_rub_order column
 * @method FacturesRubriquesQuery orderByFactRubLibelle($order = Criteria::ASC) Order by the fact_rub_libelle column
 * @method FacturesRubriquesQuery orderByFactRubMontantHt($order = Criteria::ASC) Order by the fact_rub_montant_ht column
 * @method FacturesRubriquesQuery orderByFactRubMontantTTC($order = Criteria::ASC) Order by the fact_rub_montant_ttc column
 * @method FacturesRubriquesQuery orderByRTvaTypeId($order = Criteria::ASC) Order by the r_tva_type_id column
 * @method FacturesRubriquesQuery orderByRRubTypeId($order = Criteria::ASC) Order by the r_rub_type_id column
 *
 * @method FacturesRubriquesQuery groupByFactRubId() Group by the fact_rub_id column
 * @method FacturesRubriquesQuery groupByFactId() Group by the fact_id column
 * @method FacturesRubriquesQuery groupByRRubriqueId() Group by the r_rubrique_id column
 * @method FacturesRubriquesQuery groupByOpRubriqueId() Group by the op_rubrique_id column
 * @method FacturesRubriquesQuery groupByFactRubOrder() Group by the fact_rub_order column
 * @method FacturesRubriquesQuery groupByFactRubLibelle() Group by the fact_rub_libelle column
 * @method FacturesRubriquesQuery groupByFactRubMontantHt() Group by the fact_rub_montant_ht column
 * @method FacturesRubriquesQuery groupByFactRubMontantTTC() Group by the fact_rub_montant_ttc column
 * @method FacturesRubriquesQuery groupByRTvaTypeId() Group by the r_tva_type_id column
 * @method FacturesRubriquesQuery groupByRRubTypeId() Group by the r_rub_type_id column
 *
 * @method FacturesRubriquesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FacturesRubriquesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FacturesRubriquesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FacturesRubriquesQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method FacturesRubriquesQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method FacturesRubriquesQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method FacturesRubriquesQuery leftJoinRTvaType($relationAlias = null) Adds a LEFT JOIN clause to the query using the RTvaType relation
 * @method FacturesRubriquesQuery rightJoinRTvaType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RTvaType relation
 * @method FacturesRubriquesQuery innerJoinRTvaType($relationAlias = null) Adds a INNER JOIN clause to the query using the RTvaType relation
 *
 * @method FacturesRubriquesQuery leftJoinFacturesPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the FacturesPrestations relation
 * @method FacturesRubriquesQuery rightJoinFacturesPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FacturesPrestations relation
 * @method FacturesRubriquesQuery innerJoinFacturesPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the FacturesPrestations relation
 *
 * @method FacturesRubriques findOne(PropelPDO $con = null) Return the first FacturesRubriques matching the query
 * @method FacturesRubriques findOneOrCreate(PropelPDO $con = null) Return the first FacturesRubriques matching the query, or a new FacturesRubriques object populated from the query conditions when no match is found
 *
 * @method FacturesRubriques findOneByFactId(int $fact_id) Return the first FacturesRubriques filtered by the fact_id column
 * @method FacturesRubriques findOneByRRubriqueId(int $r_rubrique_id) Return the first FacturesRubriques filtered by the r_rubrique_id column
 * @method FacturesRubriques findOneByOpRubriqueId(int $op_rubrique_id) Return the first FacturesRubriques filtered by the op_rubrique_id column
 * @method FacturesRubriques findOneByFactRubOrder(int $fact_rub_order) Return the first FacturesRubriques filtered by the fact_rub_order column
 * @method FacturesRubriques findOneByFactRubLibelle(string $fact_rub_libelle) Return the first FacturesRubriques filtered by the fact_rub_libelle column
 * @method FacturesRubriques findOneByFactRubMontantHt(float $fact_rub_montant_ht) Return the first FacturesRubriques filtered by the fact_rub_montant_ht column
 * @method FacturesRubriques findOneByFactRubMontantTTC(float $fact_rub_montant_ttc) Return the first FacturesRubriques filtered by the fact_rub_montant_ttc column
 * @method FacturesRubriques findOneByRTvaTypeId(int $r_tva_type_id) Return the first FacturesRubriques filtered by the r_tva_type_id column
 * @method FacturesRubriques findOneByRRubTypeId(int $r_rub_type_id) Return the first FacturesRubriques filtered by the r_rub_type_id column
 *
 * @method array findByFactRubId(int $fact_rub_id) Return FacturesRubriques objects filtered by the fact_rub_id column
 * @method array findByFactId(int $fact_id) Return FacturesRubriques objects filtered by the fact_id column
 * @method array findByRRubriqueId(int $r_rubrique_id) Return FacturesRubriques objects filtered by the r_rubrique_id column
 * @method array findByOpRubriqueId(int $op_rubrique_id) Return FacturesRubriques objects filtered by the op_rubrique_id column
 * @method array findByFactRubOrder(int $fact_rub_order) Return FacturesRubriques objects filtered by the fact_rub_order column
 * @method array findByFactRubLibelle(string $fact_rub_libelle) Return FacturesRubriques objects filtered by the fact_rub_libelle column
 * @method array findByFactRubMontantHt(float $fact_rub_montant_ht) Return FacturesRubriques objects filtered by the fact_rub_montant_ht column
 * @method array findByFactRubMontantTTC(float $fact_rub_montant_ttc) Return FacturesRubriques objects filtered by the fact_rub_montant_ttc column
 * @method array findByRTvaTypeId(int $r_tva_type_id) Return FacturesRubriques objects filtered by the r_tva_type_id column
 * @method array findByRRubTypeId(int $r_rub_type_id) Return FacturesRubriques objects filtered by the r_rub_type_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseFacturesRubriquesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFacturesRubriquesQuery object.
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
            $modelName = 'FacturesRubriques';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FacturesRubriquesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FacturesRubriquesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FacturesRubriquesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FacturesRubriquesQuery) {
            return $criteria;
        }
        $query = new FacturesRubriquesQuery(null, null, $modelAlias);

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
     * @return   FacturesRubriques|FacturesRubriques[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FacturesRubriquesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FacturesRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FacturesRubriques A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFactRubId($key, $con = null)
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
     * @return                 FacturesRubriques A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `fact_rub_id`, `fact_id`, `r_rubrique_id`, `op_rubrique_id`, `fact_rub_order`, `fact_rub_libelle`, `fact_rub_montant_ht`, `fact_rub_montant_ttc`, `r_tva_type_id`, `r_rub_type_id` FROM `factures_rubriques` WHERE `fact_rub_id` = :p0';
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
            $obj = new FacturesRubriques();
            $obj->hydrate($row);
            FacturesRubriquesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FacturesRubriques|FacturesRubriques[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FacturesRubriques[]|mixed the list of results, formatted by the current formatter
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
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the fact_rub_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactRubId(1234); // WHERE fact_rub_id = 1234
     * $query->filterByFactRubId(array(12, 34)); // WHERE fact_rub_id IN (12, 34)
     * $query->filterByFactRubId(array('min' => 12)); // WHERE fact_rub_id >= 12
     * $query->filterByFactRubId(array('max' => 12)); // WHERE fact_rub_id <= 12
     * </code>
     *
     * @param     mixed $factRubId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByFactRubId($factRubId = null, $comparison = null)
    {
        if (is_array($factRubId)) {
            $useMinMax = false;
            if (isset($factRubId['min'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_ID, $factRubId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factRubId['max'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_ID, $factRubId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_ID, $factRubId, $comparison);
    }

    /**
     * Filter the query on the fact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactId(1234); // WHERE fact_id = 1234
     * $query->filterByFactId(array(12, 34)); // WHERE fact_id IN (12, 34)
     * $query->filterByFactId(array('min' => 12)); // WHERE fact_id >= 12
     * $query->filterByFactId(array('max' => 12)); // WHERE fact_id <= 12
     * </code>
     *
     * @see       filterByFactures()
     *
     * @param     mixed $factId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByFactId($factId = null, $comparison = null)
    {
        if (is_array($factId)) {
            $useMinMax = false;
            if (isset($factId['min'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::FACT_ID, $factId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factId['max'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::FACT_ID, $factId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesRubriquesPeer::FACT_ID, $factId, $comparison);
    }

    /**
     * Filter the query on the r_rubrique_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRubriqueId(1234); // WHERE r_rubrique_id = 1234
     * $query->filterByRRubriqueId(array(12, 34)); // WHERE r_rubrique_id IN (12, 34)
     * $query->filterByRRubriqueId(array('min' => 12)); // WHERE r_rubrique_id >= 12
     * $query->filterByRRubriqueId(array('max' => 12)); // WHERE r_rubrique_id <= 12
     * </code>
     *
     * @param     mixed $rRubriqueId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByRRubriqueId($rRubriqueId = null, $comparison = null)
    {
        if (is_array($rRubriqueId)) {
            $useMinMax = false;
            if (isset($rRubriqueId['min'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::R_RUBRIQUE_ID, $rRubriqueId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRubriqueId['max'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::R_RUBRIQUE_ID, $rRubriqueId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesRubriquesPeer::R_RUBRIQUE_ID, $rRubriqueId, $comparison);
    }

    /**
     * Filter the query on the op_rubrique_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRubriqueId(1234); // WHERE op_rubrique_id = 1234
     * $query->filterByOpRubriqueId(array(12, 34)); // WHERE op_rubrique_id IN (12, 34)
     * $query->filterByOpRubriqueId(array('min' => 12)); // WHERE op_rubrique_id >= 12
     * $query->filterByOpRubriqueId(array('max' => 12)); // WHERE op_rubrique_id <= 12
     * </code>
     *
     * @param     mixed $opRubriqueId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByOpRubriqueId($opRubriqueId = null, $comparison = null)
    {
        if (is_array($opRubriqueId)) {
            $useMinMax = false;
            if (isset($opRubriqueId['min'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::OP_RUBRIQUE_ID, $opRubriqueId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opRubriqueId['max'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::OP_RUBRIQUE_ID, $opRubriqueId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesRubriquesPeer::OP_RUBRIQUE_ID, $opRubriqueId, $comparison);
    }

    /**
     * Filter the query on the fact_rub_order column
     *
     * Example usage:
     * <code>
     * $query->filterByFactRubOrder(1234); // WHERE fact_rub_order = 1234
     * $query->filterByFactRubOrder(array(12, 34)); // WHERE fact_rub_order IN (12, 34)
     * $query->filterByFactRubOrder(array('min' => 12)); // WHERE fact_rub_order >= 12
     * $query->filterByFactRubOrder(array('max' => 12)); // WHERE fact_rub_order <= 12
     * </code>
     *
     * @param     mixed $factRubOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByFactRubOrder($factRubOrder = null, $comparison = null)
    {
        if (is_array($factRubOrder)) {
            $useMinMax = false;
            if (isset($factRubOrder['min'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_ORDER, $factRubOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factRubOrder['max'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_ORDER, $factRubOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_ORDER, $factRubOrder, $comparison);
    }

    /**
     * Filter the query on the fact_rub_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByFactRubLibelle('fooValue');   // WHERE fact_rub_libelle = 'fooValue'
     * $query->filterByFactRubLibelle('%fooValue%'); // WHERE fact_rub_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factRubLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByFactRubLibelle($factRubLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factRubLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factRubLibelle)) {
                $factRubLibelle = str_replace('*', '%', $factRubLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_LIBELLE, $factRubLibelle, $comparison);
    }

    /**
     * Filter the query on the fact_rub_montant_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByFactRubMontantHt(1234); // WHERE fact_rub_montant_ht = 1234
     * $query->filterByFactRubMontantHt(array(12, 34)); // WHERE fact_rub_montant_ht IN (12, 34)
     * $query->filterByFactRubMontantHt(array('min' => 12)); // WHERE fact_rub_montant_ht >= 12
     * $query->filterByFactRubMontantHt(array('max' => 12)); // WHERE fact_rub_montant_ht <= 12
     * </code>
     *
     * @param     mixed $factRubMontantHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByFactRubMontantHt($factRubMontantHt = null, $comparison = null)
    {
        if (is_array($factRubMontantHt)) {
            $useMinMax = false;
            if (isset($factRubMontantHt['min'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_MONTANT_HT, $factRubMontantHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factRubMontantHt['max'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_MONTANT_HT, $factRubMontantHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_MONTANT_HT, $factRubMontantHt, $comparison);
    }

    /**
     * Filter the query on the fact_rub_montant_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByFactRubMontantTTC(1234); // WHERE fact_rub_montant_ttc = 1234
     * $query->filterByFactRubMontantTTC(array(12, 34)); // WHERE fact_rub_montant_ttc IN (12, 34)
     * $query->filterByFactRubMontantTTC(array('min' => 12)); // WHERE fact_rub_montant_ttc >= 12
     * $query->filterByFactRubMontantTTC(array('max' => 12)); // WHERE fact_rub_montant_ttc <= 12
     * </code>
     *
     * @param     mixed $factRubMontantTTC The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByFactRubMontantTTC($factRubMontantTTC = null, $comparison = null)
    {
        if (is_array($factRubMontantTTC)) {
            $useMinMax = false;
            if (isset($factRubMontantTTC['min'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_MONTANT_TTC, $factRubMontantTTC['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factRubMontantTTC['max'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_MONTANT_TTC, $factRubMontantTTC['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_MONTANT_TTC, $factRubMontantTTC, $comparison);
    }

    /**
     * Filter the query on the r_tva_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaTypeId(1234); // WHERE r_tva_type_id = 1234
     * $query->filterByRTvaTypeId(array(12, 34)); // WHERE r_tva_type_id IN (12, 34)
     * $query->filterByRTvaTypeId(array('min' => 12)); // WHERE r_tva_type_id >= 12
     * $query->filterByRTvaTypeId(array('max' => 12)); // WHERE r_tva_type_id <= 12
     * </code>
     *
     * @see       filterByRTvaType()
     *
     * @param     mixed $rTvaTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByRTvaTypeId($rTvaTypeId = null, $comparison = null)
    {
        if (is_array($rTvaTypeId)) {
            $useMinMax = false;
            if (isset($rTvaTypeId['min'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::R_TVA_TYPE_ID, $rTvaTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rTvaTypeId['max'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::R_TVA_TYPE_ID, $rTvaTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesRubriquesPeer::R_TVA_TYPE_ID, $rTvaTypeId, $comparison);
    }

    /**
     * Filter the query on the r_rub_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRubTypeId(1234); // WHERE r_rub_type_id = 1234
     * $query->filterByRRubTypeId(array(12, 34)); // WHERE r_rub_type_id IN (12, 34)
     * $query->filterByRRubTypeId(array('min' => 12)); // WHERE r_rub_type_id >= 12
     * $query->filterByRRubTypeId(array('max' => 12)); // WHERE r_rub_type_id <= 12
     * </code>
     *
     * @param     mixed $rRubTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function filterByRRubTypeId($rRubTypeId = null, $comparison = null)
    {
        if (is_array($rRubTypeId)) {
            $useMinMax = false;
            if (isset($rRubTypeId['min'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::R_RUB_TYPE_ID, $rRubTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRubTypeId['max'])) {
                $this->addUsingAlias(FacturesRubriquesPeer::R_RUB_TYPE_ID, $rRubTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesRubriquesPeer::R_RUB_TYPE_ID, $rRubTypeId, $comparison);
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FacturesRubriquesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(FacturesRubriquesPeer::FACT_ID, $factures->getFactId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FacturesRubriquesPeer::FACT_ID, $factures->toKeyValue('PrimaryKey', 'FactId'), $comparison);
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
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function joinFactures($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useFacturesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factures', 'FacturesQuery');
    }

    /**
     * Filter the query by a related RTvaType object
     *
     * @param   RTvaType|PropelObjectCollection $rTvaType The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FacturesRubriquesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRTvaType($rTvaType, $comparison = null)
    {
        if ($rTvaType instanceof RTvaType) {
            return $this
                ->addUsingAlias(FacturesRubriquesPeer::R_TVA_TYPE_ID, $rTvaType->getRTvaId(), $comparison);
        } elseif ($rTvaType instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FacturesRubriquesPeer::R_TVA_TYPE_ID, $rTvaType->toKeyValue('PrimaryKey', 'RTvaId'), $comparison);
        } else {
            throw new PropelException('filterByRTvaType() only accepts arguments of type RTvaType or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RTvaType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function joinRTvaType($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RTvaType');

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
            $this->addJoinObject($join, 'RTvaType');
        }

        return $this;
    }

    /**
     * Use the RTvaType relation RTvaType object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RTvaTypeQuery A secondary query class using the current class as primary query
     */
    public function useRTvaTypeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRTvaType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RTvaType', 'RTvaTypeQuery');
    }

    /**
     * Filter the query by a related FacturesPrestations object
     *
     * @param   FacturesPrestations|PropelObjectCollection $facturesPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FacturesRubriquesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFacturesPrestations($facturesPrestations, $comparison = null)
    {
        if ($facturesPrestations instanceof FacturesPrestations) {
            return $this
                ->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_ID, $facturesPrestations->getFactRubId(), $comparison);
        } elseif ($facturesPrestations instanceof PropelObjectCollection) {
            return $this
                ->useFacturesPrestationsQuery()
                ->filterByPrimaryKeys($facturesPrestations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFacturesPrestations() only accepts arguments of type FacturesPrestations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FacturesPrestations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function joinFacturesPrestations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FacturesPrestations');

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
            $this->addJoinObject($join, 'FacturesPrestations');
        }

        return $this;
    }

    /**
     * Use the FacturesPrestations relation FacturesPrestations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturesPrestationsQuery A secondary query class using the current class as primary query
     */
    public function useFacturesPrestationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFacturesPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FacturesPrestations', 'FacturesPrestationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   FacturesRubriques $facturesRubriques Object to remove from the list of results
     *
     * @return FacturesRubriquesQuery The current query, for fluid interface
     */
    public function prune($facturesRubriques = null)
    {
        if ($facturesRubriques) {
            $this->addUsingAlias(FacturesRubriquesPeer::FACT_RUB_ID, $facturesRubriques->getFactRubId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
