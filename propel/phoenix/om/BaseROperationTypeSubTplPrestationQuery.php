<?php


/**
 * Base class that represents a query for the 'r_operation_type_sub_tpl_prestation' table.
 *
 *
 *
 * @method ROperationTypeSubTplPrestationQuery orderByOstTplPrestationId($order = Criteria::ASC) Order by the ost_tpl_prestation_id column
 * @method ROperationTypeSubTplPrestationQuery orderByOstTplId($order = Criteria::ASC) Order by the ost_tpl_id column
 * @method ROperationTypeSubTplPrestationQuery orderByOstTplRubriqueId($order = Criteria::ASC) Order by the ost_tpl_rubrique_id column
 * @method ROperationTypeSubTplPrestationQuery orderByRPrestationId($order = Criteria::ASC) Order by the r_prestation_id column
 * @method ROperationTypeSubTplPrestationQuery orderByRScenarioNumero($order = Criteria::ASC) Order by the r_scenario_numero column
 * @method ROperationTypeSubTplPrestationQuery orderByRPrimeNumero($order = Criteria::ASC) Order by the r_prime_numero column
 * @method ROperationTypeSubTplPrestationQuery orderByOstTplPrestationIsMandatory($order = Criteria::ASC) Order by the ost_tpl_prestation_is_mandatory column
 * @method ROperationTypeSubTplPrestationQuery orderByOstTplPrestationOrder($order = Criteria::ASC) Order by the ost_tpl_prestation_order column
 * @method ROperationTypeSubTplPrestationQuery orderByOstTplPrestationIsHidden($order = Criteria::ASC) Order by the ost_tpl_prestation_is_hidden column
 *
 * @method ROperationTypeSubTplPrestationQuery groupByOstTplPrestationId() Group by the ost_tpl_prestation_id column
 * @method ROperationTypeSubTplPrestationQuery groupByOstTplId() Group by the ost_tpl_id column
 * @method ROperationTypeSubTplPrestationQuery groupByOstTplRubriqueId() Group by the ost_tpl_rubrique_id column
 * @method ROperationTypeSubTplPrestationQuery groupByRPrestationId() Group by the r_prestation_id column
 * @method ROperationTypeSubTplPrestationQuery groupByRScenarioNumero() Group by the r_scenario_numero column
 * @method ROperationTypeSubTplPrestationQuery groupByRPrimeNumero() Group by the r_prime_numero column
 * @method ROperationTypeSubTplPrestationQuery groupByOstTplPrestationIsMandatory() Group by the ost_tpl_prestation_is_mandatory column
 * @method ROperationTypeSubTplPrestationQuery groupByOstTplPrestationOrder() Group by the ost_tpl_prestation_order column
 * @method ROperationTypeSubTplPrestationQuery groupByOstTplPrestationIsHidden() Group by the ost_tpl_prestation_is_hidden column
 *
 * @method ROperationTypeSubTplPrestationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeSubTplPrestationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeSubTplPrestationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeSubTplPrestationQuery leftJoinROperationTypeSubTplRubrique($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplRubrique relation
 * @method ROperationTypeSubTplPrestationQuery rightJoinROperationTypeSubTplRubrique($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplRubrique relation
 * @method ROperationTypeSubTplPrestationQuery innerJoinROperationTypeSubTplRubrique($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplRubrique relation
 *
 * @method ROperationTypeSubTplPrestationQuery leftJoinROperationTypeSubTpl($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplPrestationQuery rightJoinROperationTypeSubTpl($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplPrestationQuery innerJoinROperationTypeSubTpl($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTpl relation
 *
 * @method ROperationTypeSubTplPrestation findOne(PropelPDO $con = null) Return the first ROperationTypeSubTplPrestation matching the query
 * @method ROperationTypeSubTplPrestation findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeSubTplPrestation matching the query, or a new ROperationTypeSubTplPrestation object populated from the query conditions when no match is found
 *
 * @method ROperationTypeSubTplPrestation findOneByOstTplId(int $ost_tpl_id) Return the first ROperationTypeSubTplPrestation filtered by the ost_tpl_id column
 * @method ROperationTypeSubTplPrestation findOneByOstTplRubriqueId(int $ost_tpl_rubrique_id) Return the first ROperationTypeSubTplPrestation filtered by the ost_tpl_rubrique_id column
 * @method ROperationTypeSubTplPrestation findOneByRPrestationId(int $r_prestation_id) Return the first ROperationTypeSubTplPrestation filtered by the r_prestation_id column
 * @method ROperationTypeSubTplPrestation findOneByRScenarioNumero(int $r_scenario_numero) Return the first ROperationTypeSubTplPrestation filtered by the r_scenario_numero column
 * @method ROperationTypeSubTplPrestation findOneByRPrimeNumero(int $r_prime_numero) Return the first ROperationTypeSubTplPrestation filtered by the r_prime_numero column
 * @method ROperationTypeSubTplPrestation findOneByOstTplPrestationIsMandatory(boolean $ost_tpl_prestation_is_mandatory) Return the first ROperationTypeSubTplPrestation filtered by the ost_tpl_prestation_is_mandatory column
 * @method ROperationTypeSubTplPrestation findOneByOstTplPrestationOrder(int $ost_tpl_prestation_order) Return the first ROperationTypeSubTplPrestation filtered by the ost_tpl_prestation_order column
 * @method ROperationTypeSubTplPrestation findOneByOstTplPrestationIsHidden(boolean $ost_tpl_prestation_is_hidden) Return the first ROperationTypeSubTplPrestation filtered by the ost_tpl_prestation_is_hidden column
 *
 * @method array findByOstTplPrestationId(int $ost_tpl_prestation_id) Return ROperationTypeSubTplPrestation objects filtered by the ost_tpl_prestation_id column
 * @method array findByOstTplId(int $ost_tpl_id) Return ROperationTypeSubTplPrestation objects filtered by the ost_tpl_id column
 * @method array findByOstTplRubriqueId(int $ost_tpl_rubrique_id) Return ROperationTypeSubTplPrestation objects filtered by the ost_tpl_rubrique_id column
 * @method array findByRPrestationId(int $r_prestation_id) Return ROperationTypeSubTplPrestation objects filtered by the r_prestation_id column
 * @method array findByRScenarioNumero(int $r_scenario_numero) Return ROperationTypeSubTplPrestation objects filtered by the r_scenario_numero column
 * @method array findByRPrimeNumero(int $r_prime_numero) Return ROperationTypeSubTplPrestation objects filtered by the r_prime_numero column
 * @method array findByOstTplPrestationIsMandatory(boolean $ost_tpl_prestation_is_mandatory) Return ROperationTypeSubTplPrestation objects filtered by the ost_tpl_prestation_is_mandatory column
 * @method array findByOstTplPrestationOrder(int $ost_tpl_prestation_order) Return ROperationTypeSubTplPrestation objects filtered by the ost_tpl_prestation_order column
 * @method array findByOstTplPrestationIsHidden(boolean $ost_tpl_prestation_is_hidden) Return ROperationTypeSubTplPrestation objects filtered by the ost_tpl_prestation_is_hidden column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplPrestationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeSubTplPrestationQuery object.
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
            $modelName = 'ROperationTypeSubTplPrestation';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeSubTplPrestationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeSubTplPrestationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeSubTplPrestationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeSubTplPrestationQuery) {
            return $criteria;
        }
        $query = new ROperationTypeSubTplPrestationQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeSubTplPrestation|ROperationTypeSubTplPrestation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeSubTplPrestationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrestationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeSubTplPrestation A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOstTplPrestationId($key, $con = null)
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
     * @return                 ROperationTypeSubTplPrestation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ost_tpl_prestation_id`, `ost_tpl_id`, `ost_tpl_rubrique_id`, `r_prestation_id`, `r_scenario_numero`, `r_prime_numero`, `ost_tpl_prestation_is_mandatory`, `ost_tpl_prestation_order`, `ost_tpl_prestation_is_hidden` FROM `r_operation_type_sub_tpl_prestation` WHERE `ost_tpl_prestation_id` = :p0';
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
            $obj = new ROperationTypeSubTplPrestation();
            $obj->hydrate($row);
            ROperationTypeSubTplPrestationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeSubTplPrestation|ROperationTypeSubTplPrestation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeSubTplPrestation[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ost_tpl_prestation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplPrestationId(1234); // WHERE ost_tpl_prestation_id = 1234
     * $query->filterByOstTplPrestationId(array(12, 34)); // WHERE ost_tpl_prestation_id IN (12, 34)
     * $query->filterByOstTplPrestationId(array('min' => 12)); // WHERE ost_tpl_prestation_id >= 12
     * $query->filterByOstTplPrestationId(array('max' => 12)); // WHERE ost_tpl_prestation_id <= 12
     * </code>
     *
     * @param     mixed $ostTplPrestationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByOstTplPrestationId($ostTplPrestationId = null, $comparison = null)
    {
        if (is_array($ostTplPrestationId)) {
            $useMinMax = false;
            if (isset($ostTplPrestationId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_ID, $ostTplPrestationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplPrestationId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_ID, $ostTplPrestationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_ID, $ostTplPrestationId, $comparison);
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
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByOstTplId($ostTplId = null, $comparison = null)
    {
        if (is_array($ostTplId)) {
            $useMinMax = false;
            if (isset($ostTplId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_ID, $ostTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_ID, $ostTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_ID, $ostTplId, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_rubrique_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplRubriqueId(1234); // WHERE ost_tpl_rubrique_id = 1234
     * $query->filterByOstTplRubriqueId(array(12, 34)); // WHERE ost_tpl_rubrique_id IN (12, 34)
     * $query->filterByOstTplRubriqueId(array('min' => 12)); // WHERE ost_tpl_rubrique_id >= 12
     * $query->filterByOstTplRubriqueId(array('max' => 12)); // WHERE ost_tpl_rubrique_id <= 12
     * </code>
     *
     * @see       filterByROperationTypeSubTplRubrique()
     *
     * @param     mixed $ostTplRubriqueId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByOstTplRubriqueId($ostTplRubriqueId = null, $comparison = null)
    {
        if (is_array($ostTplRubriqueId)) {
            $useMinMax = false;
            if (isset($ostTplRubriqueId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_RUBRIQUE_ID, $ostTplRubriqueId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplRubriqueId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_RUBRIQUE_ID, $ostTplRubriqueId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_RUBRIQUE_ID, $ostTplRubriqueId, $comparison);
    }

    /**
     * Filter the query on the r_prestation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPrestationId(1234); // WHERE r_prestation_id = 1234
     * $query->filterByRPrestationId(array(12, 34)); // WHERE r_prestation_id IN (12, 34)
     * $query->filterByRPrestationId(array('min' => 12)); // WHERE r_prestation_id >= 12
     * $query->filterByRPrestationId(array('max' => 12)); // WHERE r_prestation_id <= 12
     * </code>
     *
     * @param     mixed $rPrestationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByRPrestationId($rPrestationId = null, $comparison = null)
    {
        if (is_array($rPrestationId)) {
            $useMinMax = false;
            if (isset($rPrestationId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::R_PRESTATION_ID, $rPrestationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPrestationId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::R_PRESTATION_ID, $rPrestationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::R_PRESTATION_ID, $rPrestationId, $comparison);
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
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByRScenarioNumero($rScenarioNumero = null, $comparison = null)
    {
        if (is_array($rScenarioNumero)) {
            $useMinMax = false;
            if (isset($rScenarioNumero['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::R_SCENARIO_NUMERO, $rScenarioNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rScenarioNumero['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::R_SCENARIO_NUMERO, $rScenarioNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::R_SCENARIO_NUMERO, $rScenarioNumero, $comparison);
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
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByRPrimeNumero($rPrimeNumero = null, $comparison = null)
    {
        if (is_array($rPrimeNumero)) {
            $useMinMax = false;
            if (isset($rPrimeNumero['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::R_PRIME_NUMERO, $rPrimeNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPrimeNumero['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::R_PRIME_NUMERO, $rPrimeNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::R_PRIME_NUMERO, $rPrimeNumero, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_prestation_is_mandatory column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplPrestationIsMandatory(true); // WHERE ost_tpl_prestation_is_mandatory = true
     * $query->filterByOstTplPrestationIsMandatory('yes'); // WHERE ost_tpl_prestation_is_mandatory = true
     * </code>
     *
     * @param     boolean|string $ostTplPrestationIsMandatory The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByOstTplPrestationIsMandatory($ostTplPrestationIsMandatory = null, $comparison = null)
    {
        if (is_string($ostTplPrestationIsMandatory)) {
            $ostTplPrestationIsMandatory = in_array(strtolower($ostTplPrestationIsMandatory), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_IS_MANDATORY, $ostTplPrestationIsMandatory, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_prestation_order column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplPrestationOrder(1234); // WHERE ost_tpl_prestation_order = 1234
     * $query->filterByOstTplPrestationOrder(array(12, 34)); // WHERE ost_tpl_prestation_order IN (12, 34)
     * $query->filterByOstTplPrestationOrder(array('min' => 12)); // WHERE ost_tpl_prestation_order >= 12
     * $query->filterByOstTplPrestationOrder(array('max' => 12)); // WHERE ost_tpl_prestation_order <= 12
     * </code>
     *
     * @param     mixed $ostTplPrestationOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByOstTplPrestationOrder($ostTplPrestationOrder = null, $comparison = null)
    {
        if (is_array($ostTplPrestationOrder)) {
            $useMinMax = false;
            if (isset($ostTplPrestationOrder['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_ORDER, $ostTplPrestationOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplPrestationOrder['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_ORDER, $ostTplPrestationOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_ORDER, $ostTplPrestationOrder, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_prestation_is_hidden column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplPrestationIsHidden(true); // WHERE ost_tpl_prestation_is_hidden = true
     * $query->filterByOstTplPrestationIsHidden('yes'); // WHERE ost_tpl_prestation_is_hidden = true
     * </code>
     *
     * @param     boolean|string $ostTplPrestationIsHidden The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function filterByOstTplPrestationIsHidden($ostTplPrestationIsHidden = null, $comparison = null)
    {
        if (is_string($ostTplPrestationIsHidden)) {
            $ostTplPrestationIsHidden = in_array(strtolower($ostTplPrestationIsHidden), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_IS_HIDDEN, $ostTplPrestationIsHidden, $comparison);
    }

    /**
     * Filter the query by a related ROperationTypeSubTplRubrique object
     *
     * @param   ROperationTypeSubTplRubrique|PropelObjectCollection $rOperationTypeSubTplRubrique The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplRubrique($rOperationTypeSubTplRubrique, $comparison = null)
    {
        if ($rOperationTypeSubTplRubrique instanceof ROperationTypeSubTplRubrique) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_RUBRIQUE_ID, $rOperationTypeSubTplRubrique->getOstTplRubriqueId(), $comparison);
        } elseif ($rOperationTypeSubTplRubrique instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_RUBRIQUE_ID, $rOperationTypeSubTplRubrique->toKeyValue('PrimaryKey', 'OstTplRubriqueId'), $comparison);
        } else {
            throw new PropelException('filterByROperationTypeSubTplRubrique() only accepts arguments of type ROperationTypeSubTplRubrique or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplRubrique relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplRubrique($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplRubrique');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplRubrique');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplRubrique relation ROperationTypeSubTplRubrique object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplRubriqueQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplRubriqueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplRubrique($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplRubrique', 'ROperationTypeSubTplRubriqueQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTpl object
     *
     * @param   ROperationTypeSubTpl|PropelObjectCollection $rOperationTypeSubTpl The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTpl($rOperationTypeSubTpl, $comparison = null)
    {
        if ($rOperationTypeSubTpl instanceof ROperationTypeSubTpl) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_ID, $rOperationTypeSubTpl->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTpl instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_ID, $rOperationTypeSubTpl->toKeyValue('PrimaryKey', 'OstTplId'), $comparison);
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
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   ROperationTypeSubTplPrestation $rOperationTypeSubTplPrestation Object to remove from the list of results
     *
     * @return ROperationTypeSubTplPrestationQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeSubTplPrestation = null)
    {
        if ($rOperationTypeSubTplPrestation) {
            $this->addUsingAlias(ROperationTypeSubTplPrestationPeer::OST_TPL_PRESTATION_ID, $rOperationTypeSubTplPrestation->getOstTplPrestationId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
