<?php


/**
 * Base class that represents a query for the 'r_operation_options_tpl' table.
 *
 *
 *
 * @method ROperationOptionsTplQuery orderByROpOptionTplId($order = Criteria::ASC) Order by the r_op_option_tpl_id column
 * @method ROperationOptionsTplQuery orderByROptId($order = Criteria::ASC) Order by the r_opt_id column
 * @method ROperationOptionsTplQuery orderByRRubId($order = Criteria::ASC) Order by the r_rub_id column
 * @method ROperationOptionsTplQuery orderByRPrestId($order = Criteria::ASC) Order by the r_prest_id column
 * @method ROperationOptionsTplQuery orderByROpOptionTplIsMandatory($order = Criteria::ASC) Order by the r_op_option_tpl_is_mandatory column
 *
 * @method ROperationOptionsTplQuery groupByROpOptionTplId() Group by the r_op_option_tpl_id column
 * @method ROperationOptionsTplQuery groupByROptId() Group by the r_opt_id column
 * @method ROperationOptionsTplQuery groupByRRubId() Group by the r_rub_id column
 * @method ROperationOptionsTplQuery groupByRPrestId() Group by the r_prest_id column
 * @method ROperationOptionsTplQuery groupByROpOptionTplIsMandatory() Group by the r_op_option_tpl_is_mandatory column
 *
 * @method ROperationOptionsTplQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationOptionsTplQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationOptionsTplQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationOptionsTpl findOne(PropelPDO $con = null) Return the first ROperationOptionsTpl matching the query
 * @method ROperationOptionsTpl findOneOrCreate(PropelPDO $con = null) Return the first ROperationOptionsTpl matching the query, or a new ROperationOptionsTpl object populated from the query conditions when no match is found
 *
 * @method ROperationOptionsTpl findOneByROptId(int $r_opt_id) Return the first ROperationOptionsTpl filtered by the r_opt_id column
 * @method ROperationOptionsTpl findOneByRRubId(int $r_rub_id) Return the first ROperationOptionsTpl filtered by the r_rub_id column
 * @method ROperationOptionsTpl findOneByRPrestId(int $r_prest_id) Return the first ROperationOptionsTpl filtered by the r_prest_id column
 * @method ROperationOptionsTpl findOneByROpOptionTplIsMandatory(boolean $r_op_option_tpl_is_mandatory) Return the first ROperationOptionsTpl filtered by the r_op_option_tpl_is_mandatory column
 *
 * @method array findByROpOptionTplId(int $r_op_option_tpl_id) Return ROperationOptionsTpl objects filtered by the r_op_option_tpl_id column
 * @method array findByROptId(int $r_opt_id) Return ROperationOptionsTpl objects filtered by the r_opt_id column
 * @method array findByRRubId(int $r_rub_id) Return ROperationOptionsTpl objects filtered by the r_rub_id column
 * @method array findByRPrestId(int $r_prest_id) Return ROperationOptionsTpl objects filtered by the r_prest_id column
 * @method array findByROpOptionTplIsMandatory(boolean $r_op_option_tpl_is_mandatory) Return ROperationOptionsTpl objects filtered by the r_op_option_tpl_is_mandatory column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationOptionsTplQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationOptionsTplQuery object.
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
            $modelName = 'ROperationOptionsTpl';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationOptionsTplQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationOptionsTplQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationOptionsTplQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationOptionsTplQuery) {
            return $criteria;
        }
        $query = new ROperationOptionsTplQuery(null, null, $modelAlias);

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
     * @return   ROperationOptionsTpl|ROperationOptionsTpl[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationOptionsTplPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationOptionsTplPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationOptionsTpl A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROpOptionTplId($key, $con = null)
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
     * @return                 ROperationOptionsTpl A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_op_option_tpl_id`, `r_opt_id`, `r_rub_id`, `r_prest_id`, `r_op_option_tpl_is_mandatory` FROM `r_operation_options_tpl` WHERE `r_op_option_tpl_id` = :p0';
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
            $obj = new ROperationOptionsTpl();
            $obj->hydrate($row);
            ROperationOptionsTplPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationOptionsTpl|ROperationOptionsTpl[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationOptionsTpl[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationOptionsTplQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationOptionsTplPeer::R_OP_OPTION_TPL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationOptionsTplQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationOptionsTplPeer::R_OP_OPTION_TPL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_op_option_tpl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROpOptionTplId(1234); // WHERE r_op_option_tpl_id = 1234
     * $query->filterByROpOptionTplId(array(12, 34)); // WHERE r_op_option_tpl_id IN (12, 34)
     * $query->filterByROpOptionTplId(array('min' => 12)); // WHERE r_op_option_tpl_id >= 12
     * $query->filterByROpOptionTplId(array('max' => 12)); // WHERE r_op_option_tpl_id <= 12
     * </code>
     *
     * @param     mixed $rOpOptionTplId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsTplQuery The current query, for fluid interface
     */
    public function filterByROpOptionTplId($rOpOptionTplId = null, $comparison = null)
    {
        if (is_array($rOpOptionTplId)) {
            $useMinMax = false;
            if (isset($rOpOptionTplId['min'])) {
                $this->addUsingAlias(ROperationOptionsTplPeer::R_OP_OPTION_TPL_ID, $rOpOptionTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpOptionTplId['max'])) {
                $this->addUsingAlias(ROperationOptionsTplPeer::R_OP_OPTION_TPL_ID, $rOpOptionTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsTplPeer::R_OP_OPTION_TPL_ID, $rOpOptionTplId, $comparison);
    }

    /**
     * Filter the query on the r_opt_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROptId(1234); // WHERE r_opt_id = 1234
     * $query->filterByROptId(array(12, 34)); // WHERE r_opt_id IN (12, 34)
     * $query->filterByROptId(array('min' => 12)); // WHERE r_opt_id >= 12
     * $query->filterByROptId(array('max' => 12)); // WHERE r_opt_id <= 12
     * </code>
     *
     * @param     mixed $rOptId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsTplQuery The current query, for fluid interface
     */
    public function filterByROptId($rOptId = null, $comparison = null)
    {
        if (is_array($rOptId)) {
            $useMinMax = false;
            if (isset($rOptId['min'])) {
                $this->addUsingAlias(ROperationOptionsTplPeer::R_OPT_ID, $rOptId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOptId['max'])) {
                $this->addUsingAlias(ROperationOptionsTplPeer::R_OPT_ID, $rOptId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsTplPeer::R_OPT_ID, $rOptId, $comparison);
    }

    /**
     * Filter the query on the r_rub_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRubId(1234); // WHERE r_rub_id = 1234
     * $query->filterByRRubId(array(12, 34)); // WHERE r_rub_id IN (12, 34)
     * $query->filterByRRubId(array('min' => 12)); // WHERE r_rub_id >= 12
     * $query->filterByRRubId(array('max' => 12)); // WHERE r_rub_id <= 12
     * </code>
     *
     * @param     mixed $rRubId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsTplQuery The current query, for fluid interface
     */
    public function filterByRRubId($rRubId = null, $comparison = null)
    {
        if (is_array($rRubId)) {
            $useMinMax = false;
            if (isset($rRubId['min'])) {
                $this->addUsingAlias(ROperationOptionsTplPeer::R_RUB_ID, $rRubId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRubId['max'])) {
                $this->addUsingAlias(ROperationOptionsTplPeer::R_RUB_ID, $rRubId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsTplPeer::R_RUB_ID, $rRubId, $comparison);
    }

    /**
     * Filter the query on the r_prest_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPrestId(1234); // WHERE r_prest_id = 1234
     * $query->filterByRPrestId(array(12, 34)); // WHERE r_prest_id IN (12, 34)
     * $query->filterByRPrestId(array('min' => 12)); // WHERE r_prest_id >= 12
     * $query->filterByRPrestId(array('max' => 12)); // WHERE r_prest_id <= 12
     * </code>
     *
     * @param     mixed $rPrestId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsTplQuery The current query, for fluid interface
     */
    public function filterByRPrestId($rPrestId = null, $comparison = null)
    {
        if (is_array($rPrestId)) {
            $useMinMax = false;
            if (isset($rPrestId['min'])) {
                $this->addUsingAlias(ROperationOptionsTplPeer::R_PREST_ID, $rPrestId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPrestId['max'])) {
                $this->addUsingAlias(ROperationOptionsTplPeer::R_PREST_ID, $rPrestId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsTplPeer::R_PREST_ID, $rPrestId, $comparison);
    }

    /**
     * Filter the query on the r_op_option_tpl_is_mandatory column
     *
     * Example usage:
     * <code>
     * $query->filterByROpOptionTplIsMandatory(true); // WHERE r_op_option_tpl_is_mandatory = true
     * $query->filterByROpOptionTplIsMandatory('yes'); // WHERE r_op_option_tpl_is_mandatory = true
     * </code>
     *
     * @param     boolean|string $rOpOptionTplIsMandatory The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsTplQuery The current query, for fluid interface
     */
    public function filterByROpOptionTplIsMandatory($rOpOptionTplIsMandatory = null, $comparison = null)
    {
        if (is_string($rOpOptionTplIsMandatory)) {
            $rOpOptionTplIsMandatory = in_array(strtolower($rOpOptionTplIsMandatory), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ROperationOptionsTplPeer::R_OP_OPTION_TPL_IS_MANDATORY, $rOpOptionTplIsMandatory, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationOptionsTpl $rOperationOptionsTpl Object to remove from the list of results
     *
     * @return ROperationOptionsTplQuery The current query, for fluid interface
     */
    public function prune($rOperationOptionsTpl = null)
    {
        if ($rOperationOptionsTpl) {
            $this->addUsingAlias(ROperationOptionsTplPeer::R_OP_OPTION_TPL_ID, $rOperationOptionsTpl->getROpOptionTplId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
