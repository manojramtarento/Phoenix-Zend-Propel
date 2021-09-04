<?php


/**
 * Base class that represents a query for the 'plan_facturation_params' table.
 *
 *
 *
 * @method PlanFacturationParamsQuery orderByPlanFactId($order = Criteria::ASC) Order by the plan_fact_id column
 * @method PlanFacturationParamsQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method PlanFacturationParamsQuery orderByPlanFactDatePremFact($order = Criteria::ASC) Order by the plan_fact_date_prem_fact column
 * @method PlanFacturationParamsQuery orderByPlanFactDateDerFact($order = Criteria::ASC) Order by the plan_fact_date_der_fact column
 * @method PlanFacturationParamsQuery orderByPlanFactPeriodeId($order = Criteria::ASC) Order by the plan_fact_periode_id column
 * @method PlanFacturationParamsQuery orderByPlanFactPeriodeTypeId($order = Criteria::ASC) Order by the plan_fact_periode_type_id column
 * @method PlanFacturationParamsQuery orderByPlanFactLibAvoir($order = Criteria::ASC) Order by the plan_fact_lib_avoir column
 * @method PlanFacturationParamsQuery orderByPlanFacturationParamsAutoDisplayVat($order = Criteria::ASC) Order by the plan_facturation_params_auto_display_vat column
 * @method PlanFacturationParamsQuery orderByPlanFactLibFacture($order = Criteria::ASC) Order by the plan_fact_lib_facture column
 * @method PlanFacturationParamsQuery orderByPlanFactInfo($order = Criteria::ASC) Order by the plan_fact_info column
 * @method PlanFacturationParamsQuery orderByPlanFactNoteInterne($order = Criteria::ASC) Order by the plan_fact_note_interne column
 *
 * @method PlanFacturationParamsQuery groupByPlanFactId() Group by the plan_fact_id column
 * @method PlanFacturationParamsQuery groupByOpId() Group by the op_id column
 * @method PlanFacturationParamsQuery groupByPlanFactDatePremFact() Group by the plan_fact_date_prem_fact column
 * @method PlanFacturationParamsQuery groupByPlanFactDateDerFact() Group by the plan_fact_date_der_fact column
 * @method PlanFacturationParamsQuery groupByPlanFactPeriodeId() Group by the plan_fact_periode_id column
 * @method PlanFacturationParamsQuery groupByPlanFactPeriodeTypeId() Group by the plan_fact_periode_type_id column
 * @method PlanFacturationParamsQuery groupByPlanFactLibAvoir() Group by the plan_fact_lib_avoir column
 * @method PlanFacturationParamsQuery groupByPlanFacturationParamsAutoDisplayVat() Group by the plan_facturation_params_auto_display_vat column
 * @method PlanFacturationParamsQuery groupByPlanFactLibFacture() Group by the plan_fact_lib_facture column
 * @method PlanFacturationParamsQuery groupByPlanFactInfo() Group by the plan_fact_info column
 * @method PlanFacturationParamsQuery groupByPlanFactNoteInterne() Group by the plan_fact_note_interne column
 *
 * @method PlanFacturationParamsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PlanFacturationParamsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PlanFacturationParamsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PlanFacturationParamsQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method PlanFacturationParamsQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method PlanFacturationParamsQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method PlanFacturationParamsQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method PlanFacturationParamsQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method PlanFacturationParamsQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method PlanFacturationParamsQuery leftJoinFactureEditionHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureEditionHistory relation
 * @method PlanFacturationParamsQuery rightJoinFactureEditionHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureEditionHistory relation
 * @method PlanFacturationParamsQuery innerJoinFactureEditionHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureEditionHistory relation
 *
 * @method PlanFacturationParams findOne(PropelPDO $con = null) Return the first PlanFacturationParams matching the query
 * @method PlanFacturationParams findOneOrCreate(PropelPDO $con = null) Return the first PlanFacturationParams matching the query, or a new PlanFacturationParams object populated from the query conditions when no match is found
 *
 * @method PlanFacturationParams findOneByOpId(int $op_id) Return the first PlanFacturationParams filtered by the op_id column
 * @method PlanFacturationParams findOneByPlanFactDatePremFact(string $plan_fact_date_prem_fact) Return the first PlanFacturationParams filtered by the plan_fact_date_prem_fact column
 * @method PlanFacturationParams findOneByPlanFactDateDerFact(string $plan_fact_date_der_fact) Return the first PlanFacturationParams filtered by the plan_fact_date_der_fact column
 * @method PlanFacturationParams findOneByPlanFactPeriodeId(int $plan_fact_periode_id) Return the first PlanFacturationParams filtered by the plan_fact_periode_id column
 * @method PlanFacturationParams findOneByPlanFactPeriodeTypeId(int $plan_fact_periode_type_id) Return the first PlanFacturationParams filtered by the plan_fact_periode_type_id column
 * @method PlanFacturationParams findOneByPlanFactLibAvoir(string $plan_fact_lib_avoir) Return the first PlanFacturationParams filtered by the plan_fact_lib_avoir column
 * @method PlanFacturationParams findOneByPlanFacturationParamsAutoDisplayVat(int $plan_facturation_params_auto_display_vat) Return the first PlanFacturationParams filtered by the plan_facturation_params_auto_display_vat column
 * @method PlanFacturationParams findOneByPlanFactLibFacture(string $plan_fact_lib_facture) Return the first PlanFacturationParams filtered by the plan_fact_lib_facture column
 * @method PlanFacturationParams findOneByPlanFactInfo(string $plan_fact_info) Return the first PlanFacturationParams filtered by the plan_fact_info column
 * @method PlanFacturationParams findOneByPlanFactNoteInterne(string $plan_fact_note_interne) Return the first PlanFacturationParams filtered by the plan_fact_note_interne column
 *
 * @method array findByPlanFactId(int $plan_fact_id) Return PlanFacturationParams objects filtered by the plan_fact_id column
 * @method array findByOpId(int $op_id) Return PlanFacturationParams objects filtered by the op_id column
 * @method array findByPlanFactDatePremFact(string $plan_fact_date_prem_fact) Return PlanFacturationParams objects filtered by the plan_fact_date_prem_fact column
 * @method array findByPlanFactDateDerFact(string $plan_fact_date_der_fact) Return PlanFacturationParams objects filtered by the plan_fact_date_der_fact column
 * @method array findByPlanFactPeriodeId(int $plan_fact_periode_id) Return PlanFacturationParams objects filtered by the plan_fact_periode_id column
 * @method array findByPlanFactPeriodeTypeId(int $plan_fact_periode_type_id) Return PlanFacturationParams objects filtered by the plan_fact_periode_type_id column
 * @method array findByPlanFactLibAvoir(string $plan_fact_lib_avoir) Return PlanFacturationParams objects filtered by the plan_fact_lib_avoir column
 * @method array findByPlanFacturationParamsAutoDisplayVat(int $plan_facturation_params_auto_display_vat) Return PlanFacturationParams objects filtered by the plan_facturation_params_auto_display_vat column
 * @method array findByPlanFactLibFacture(string $plan_fact_lib_facture) Return PlanFacturationParams objects filtered by the plan_fact_lib_facture column
 * @method array findByPlanFactInfo(string $plan_fact_info) Return PlanFacturationParams objects filtered by the plan_fact_info column
 * @method array findByPlanFactNoteInterne(string $plan_fact_note_interne) Return PlanFacturationParams objects filtered by the plan_fact_note_interne column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BasePlanFacturationParamsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePlanFacturationParamsQuery object.
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
            $modelName = 'PlanFacturationParams';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PlanFacturationParamsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PlanFacturationParamsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PlanFacturationParamsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PlanFacturationParamsQuery) {
            return $criteria;
        }
        $query = new PlanFacturationParamsQuery(null, null, $modelAlias);

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
     * @return   PlanFacturationParams|PlanFacturationParams[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PlanFacturationParamsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationParamsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PlanFacturationParams A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPlanFactId($key, $con = null)
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
     * @return                 PlanFacturationParams A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `plan_fact_id`, `op_id`, `plan_fact_date_prem_fact`, `plan_fact_date_der_fact`, `plan_fact_periode_id`, `plan_fact_periode_type_id`, `plan_fact_lib_avoir`, `plan_facturation_params_auto_display_vat`, `plan_fact_lib_facture`, `plan_fact_info`, `plan_fact_note_interne` FROM `plan_facturation_params` WHERE `plan_fact_id` = :p0';
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
            $obj = new PlanFacturationParams();
            $obj->hydrate($row);
            PlanFacturationParamsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PlanFacturationParams|PlanFacturationParams[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PlanFacturationParams[]|mixed the list of results, formatted by the current formatter
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
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the plan_fact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanFactId(1234); // WHERE plan_fact_id = 1234
     * $query->filterByPlanFactId(array(12, 34)); // WHERE plan_fact_id IN (12, 34)
     * $query->filterByPlanFactId(array('min' => 12)); // WHERE plan_fact_id >= 12
     * $query->filterByPlanFactId(array('max' => 12)); // WHERE plan_fact_id <= 12
     * </code>
     *
     * @param     mixed $planFactId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPlanFactId($planFactId = null, $comparison = null)
    {
        if (is_array($planFactId)) {
            $useMinMax = false;
            if (isset($planFactId['min'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_ID, $planFactId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($planFactId['max'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_ID, $planFactId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_ID, $planFactId, $comparison);
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
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the plan_fact_date_prem_fact column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanFactDatePremFact('2011-03-14'); // WHERE plan_fact_date_prem_fact = '2011-03-14'
     * $query->filterByPlanFactDatePremFact('now'); // WHERE plan_fact_date_prem_fact = '2011-03-14'
     * $query->filterByPlanFactDatePremFact(array('max' => 'yesterday')); // WHERE plan_fact_date_prem_fact < '2011-03-13'
     * </code>
     *
     * @param     mixed $planFactDatePremFact The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPlanFactDatePremFact($planFactDatePremFact = null, $comparison = null)
    {
        if (is_array($planFactDatePremFact)) {
            $useMinMax = false;
            if (isset($planFactDatePremFact['min'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT, $planFactDatePremFact['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($planFactDatePremFact['max'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT, $planFactDatePremFact['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_DATE_PREM_FACT, $planFactDatePremFact, $comparison);
    }

    /**
     * Filter the query on the plan_fact_date_der_fact column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanFactDateDerFact('2011-03-14'); // WHERE plan_fact_date_der_fact = '2011-03-14'
     * $query->filterByPlanFactDateDerFact('now'); // WHERE plan_fact_date_der_fact = '2011-03-14'
     * $query->filterByPlanFactDateDerFact(array('max' => 'yesterday')); // WHERE plan_fact_date_der_fact < '2011-03-13'
     * </code>
     *
     * @param     mixed $planFactDateDerFact The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPlanFactDateDerFact($planFactDateDerFact = null, $comparison = null)
    {
        if (is_array($planFactDateDerFact)) {
            $useMinMax = false;
            if (isset($planFactDateDerFact['min'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT, $planFactDateDerFact['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($planFactDateDerFact['max'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT, $planFactDateDerFact['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_DATE_DER_FACT, $planFactDateDerFact, $comparison);
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
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPlanFactPeriodeId($planFactPeriodeId = null, $comparison = null)
    {
        if (is_array($planFactPeriodeId)) {
            $useMinMax = false;
            if (isset($planFactPeriodeId['min'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID, $planFactPeriodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($planFactPeriodeId['max'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID, $planFactPeriodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_ID, $planFactPeriodeId, $comparison);
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
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPlanFactPeriodeTypeId($planFactPeriodeTypeId = null, $comparison = null)
    {
        if (is_array($planFactPeriodeTypeId)) {
            $useMinMax = false;
            if (isset($planFactPeriodeTypeId['min'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID, $planFactPeriodeTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($planFactPeriodeTypeId['max'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID, $planFactPeriodeTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_PERIODE_TYPE_ID, $planFactPeriodeTypeId, $comparison);
    }

    /**
     * Filter the query on the plan_fact_lib_avoir column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanFactLibAvoir('fooValue');   // WHERE plan_fact_lib_avoir = 'fooValue'
     * $query->filterByPlanFactLibAvoir('%fooValue%'); // WHERE plan_fact_lib_avoir LIKE '%fooValue%'
     * </code>
     *
     * @param     string $planFactLibAvoir The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPlanFactLibAvoir($planFactLibAvoir = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($planFactLibAvoir)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $planFactLibAvoir)) {
                $planFactLibAvoir = str_replace('*', '%', $planFactLibAvoir);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_LIB_AVOIR, $planFactLibAvoir, $comparison);
    }

    /**
     * Filter the query on the plan_facturation_params_auto_display_vat column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanFacturationParamsAutoDisplayVat(1234); // WHERE plan_facturation_params_auto_display_vat = 1234
     * $query->filterByPlanFacturationParamsAutoDisplayVat(array(12, 34)); // WHERE plan_facturation_params_auto_display_vat IN (12, 34)
     * $query->filterByPlanFacturationParamsAutoDisplayVat(array('min' => 12)); // WHERE plan_facturation_params_auto_display_vat >= 12
     * $query->filterByPlanFacturationParamsAutoDisplayVat(array('max' => 12)); // WHERE plan_facturation_params_auto_display_vat <= 12
     * </code>
     *
     * @param     mixed $planFacturationParamsAutoDisplayVat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPlanFacturationParamsAutoDisplayVat($planFacturationParamsAutoDisplayVat = null, $comparison = null)
    {
        if (is_array($planFacturationParamsAutoDisplayVat)) {
            $useMinMax = false;
            if (isset($planFacturationParamsAutoDisplayVat['min'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT, $planFacturationParamsAutoDisplayVat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($planFacturationParamsAutoDisplayVat['max'])) {
                $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT, $planFacturationParamsAutoDisplayVat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACTURATION_PARAMS_AUTO_DISPLAY_VAT, $planFacturationParamsAutoDisplayVat, $comparison);
    }

    /**
     * Filter the query on the plan_fact_lib_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanFactLibFacture('fooValue');   // WHERE plan_fact_lib_facture = 'fooValue'
     * $query->filterByPlanFactLibFacture('%fooValue%'); // WHERE plan_fact_lib_facture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $planFactLibFacture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPlanFactLibFacture($planFactLibFacture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($planFactLibFacture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $planFactLibFacture)) {
                $planFactLibFacture = str_replace('*', '%', $planFactLibFacture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_LIB_FACTURE, $planFactLibFacture, $comparison);
    }

    /**
     * Filter the query on the plan_fact_info column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanFactInfo('fooValue');   // WHERE plan_fact_info = 'fooValue'
     * $query->filterByPlanFactInfo('%fooValue%'); // WHERE plan_fact_info LIKE '%fooValue%'
     * </code>
     *
     * @param     string $planFactInfo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPlanFactInfo($planFactInfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($planFactInfo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $planFactInfo)) {
                $planFactInfo = str_replace('*', '%', $planFactInfo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_INFO, $planFactInfo, $comparison);
    }

    /**
     * Filter the query on the plan_fact_note_interne column
     *
     * Example usage:
     * <code>
     * $query->filterByPlanFactNoteInterne('fooValue');   // WHERE plan_fact_note_interne = 'fooValue'
     * $query->filterByPlanFactNoteInterne('%fooValue%'); // WHERE plan_fact_note_interne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $planFactNoteInterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function filterByPlanFactNoteInterne($planFactNoteInterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($planFactNoteInterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $planFactNoteInterne)) {
                $planFactNoteInterne = str_replace('*', '%', $planFactNoteInterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_NOTE_INTERNE, $planFactNoteInterne, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanFacturationParamsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(PlanFacturationParamsPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlanFacturationParamsPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return PlanFacturationParamsQuery The current query, for fluid interface
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
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanFacturationParamsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(PlanFacturationParamsPeer::OP_ID, $factures->getOpId(), $comparison);
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
     * @return PlanFacturationParamsQuery The current query, for fluid interface
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
     * Filter the query by a related FactureEditionHistory object
     *
     * @param   FactureEditionHistory|PropelObjectCollection $factureEditionHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanFacturationParamsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureEditionHistory($factureEditionHistory, $comparison = null)
    {
        if ($factureEditionHistory instanceof FactureEditionHistory) {
            return $this
                ->addUsingAlias(PlanFacturationParamsPeer::OP_ID, $factureEditionHistory->getOpId(), $comparison);
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
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function joinFactureEditionHistory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useFactureEditionHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactureEditionHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactureEditionHistory', 'FactureEditionHistoryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   PlanFacturationParams $planFacturationParams Object to remove from the list of results
     *
     * @return PlanFacturationParamsQuery The current query, for fluid interface
     */
    public function prune($planFacturationParams = null)
    {
        if ($planFacturationParams) {
            $this->addUsingAlias(PlanFacturationParamsPeer::PLAN_FACT_ID, $planFacturationParams->getPlanFactId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
