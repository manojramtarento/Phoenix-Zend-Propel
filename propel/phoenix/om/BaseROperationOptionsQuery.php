<?php


/**
 * Base class that represents a query for the 'r_operation_options' table.
 *
 *
 *
 * @method ROperationOptionsQuery orderByROpOptionId($order = Criteria::ASC) Order by the r_op_option_id column
 * @method ROperationOptionsQuery orderByROpOptionLibelle($order = Criteria::ASC) Order by the r_op_option_libelle column
 * @method ROperationOptionsQuery orderByROpOptionType($order = Criteria::ASC) Order by the r_op_option_type column
 * @method ROperationOptionsQuery orderByROpOptionParent($order = Criteria::ASC) Order by the r_op_option_parent column
 * @method ROperationOptionsQuery orderByROpOptionOrder($order = Criteria::ASC) Order by the r_op_option_order column
 * @method ROperationOptionsQuery orderByROperationOptionRActivityKpiId($order = Criteria::ASC) Order by the r_operation_option_r_activity_kpi_id column
 * @method ROperationOptionsQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method ROperationOptionsQuery groupByROpOptionId() Group by the r_op_option_id column
 * @method ROperationOptionsQuery groupByROpOptionLibelle() Group by the r_op_option_libelle column
 * @method ROperationOptionsQuery groupByROpOptionType() Group by the r_op_option_type column
 * @method ROperationOptionsQuery groupByROpOptionParent() Group by the r_op_option_parent column
 * @method ROperationOptionsQuery groupByROpOptionOrder() Group by the r_op_option_order column
 * @method ROperationOptionsQuery groupByROperationOptionRActivityKpiId() Group by the r_operation_option_r_activity_kpi_id column
 * @method ROperationOptionsQuery groupByActif() Group by the actif column
 *
 * @method ROperationOptionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationOptionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationOptionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationOptionsQuery leftJoinLnkOperationOption($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkOperationOption relation
 * @method ROperationOptionsQuery rightJoinLnkOperationOption($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkOperationOption relation
 * @method ROperationOptionsQuery innerJoinLnkOperationOption($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkOperationOption relation
 *
 * @method ROperationOptionsQuery leftJoinROperationTypeRequiredOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeRequiredOptions relation
 * @method ROperationOptionsQuery rightJoinROperationTypeRequiredOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeRequiredOptions relation
 * @method ROperationOptionsQuery innerJoinROperationTypeRequiredOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeRequiredOptions relation
 *
 * @method ROperationOptionsQuery leftJoinROperationStatusRequiredOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationStatusRequiredOptions relation
 * @method ROperationOptionsQuery rightJoinROperationStatusRequiredOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationStatusRequiredOptions relation
 * @method ROperationOptionsQuery innerJoinROperationStatusRequiredOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationStatusRequiredOptions relation
 *
 * @method ROperationOptions findOne(PropelPDO $con = null) Return the first ROperationOptions matching the query
 * @method ROperationOptions findOneOrCreate(PropelPDO $con = null) Return the first ROperationOptions matching the query, or a new ROperationOptions object populated from the query conditions when no match is found
 *
 * @method ROperationOptions findOneByROpOptionLibelle(string $r_op_option_libelle) Return the first ROperationOptions filtered by the r_op_option_libelle column
 * @method ROperationOptions findOneByROpOptionType(int $r_op_option_type) Return the first ROperationOptions filtered by the r_op_option_type column
 * @method ROperationOptions findOneByROpOptionParent(int $r_op_option_parent) Return the first ROperationOptions filtered by the r_op_option_parent column
 * @method ROperationOptions findOneByROpOptionOrder(int $r_op_option_order) Return the first ROperationOptions filtered by the r_op_option_order column
 * @method ROperationOptions findOneByROperationOptionRActivityKpiId(int $r_operation_option_r_activity_kpi_id) Return the first ROperationOptions filtered by the r_operation_option_r_activity_kpi_id column
 * @method ROperationOptions findOneByActif(boolean $actif) Return the first ROperationOptions filtered by the actif column
 *
 * @method array findByROpOptionId(int $r_op_option_id) Return ROperationOptions objects filtered by the r_op_option_id column
 * @method array findByROpOptionLibelle(string $r_op_option_libelle) Return ROperationOptions objects filtered by the r_op_option_libelle column
 * @method array findByROpOptionType(int $r_op_option_type) Return ROperationOptions objects filtered by the r_op_option_type column
 * @method array findByROpOptionParent(int $r_op_option_parent) Return ROperationOptions objects filtered by the r_op_option_parent column
 * @method array findByROpOptionOrder(int $r_op_option_order) Return ROperationOptions objects filtered by the r_op_option_order column
 * @method array findByROperationOptionRActivityKpiId(int $r_operation_option_r_activity_kpi_id) Return ROperationOptions objects filtered by the r_operation_option_r_activity_kpi_id column
 * @method array findByActif(boolean $actif) Return ROperationOptions objects filtered by the actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationOptionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationOptionsQuery object.
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
            $modelName = 'ROperationOptions';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationOptionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationOptionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationOptionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationOptionsQuery) {
            return $criteria;
        }
        $query = new ROperationOptionsQuery(null, null, $modelAlias);

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
     * @return   ROperationOptions|ROperationOptions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationOptionsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationOptions A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROpOptionId($key, $con = null)
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
     * @return                 ROperationOptions A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_op_option_id`, `r_op_option_libelle`, `r_op_option_type`, `r_op_option_parent`, `r_op_option_order`, `r_operation_option_r_activity_kpi_id`, `actif` FROM `r_operation_options` WHERE `r_op_option_id` = :p0';
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
            $obj = new ROperationOptions();
            $obj->hydrate($row);
            ROperationOptionsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationOptions|ROperationOptions[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationOptions[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_op_option_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROpOptionId(1234); // WHERE r_op_option_id = 1234
     * $query->filterByROpOptionId(array(12, 34)); // WHERE r_op_option_id IN (12, 34)
     * $query->filterByROpOptionId(array('min' => 12)); // WHERE r_op_option_id >= 12
     * $query->filterByROpOptionId(array('max' => 12)); // WHERE r_op_option_id <= 12
     * </code>
     *
     * @param     mixed $rOpOptionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function filterByROpOptionId($rOpOptionId = null, $comparison = null)
    {
        if (is_array($rOpOptionId)) {
            $useMinMax = false;
            if (isset($rOpOptionId['min'])) {
                $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ID, $rOpOptionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpOptionId['max'])) {
                $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ID, $rOpOptionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ID, $rOpOptionId, $comparison);
    }

    /**
     * Filter the query on the r_op_option_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByROpOptionLibelle('fooValue');   // WHERE r_op_option_libelle = 'fooValue'
     * $query->filterByROpOptionLibelle('%fooValue%'); // WHERE r_op_option_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rOpOptionLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function filterByROpOptionLibelle($rOpOptionLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rOpOptionLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rOpOptionLibelle)) {
                $rOpOptionLibelle = str_replace('*', '%', $rOpOptionLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_LIBELLE, $rOpOptionLibelle, $comparison);
    }

    /**
     * Filter the query on the r_op_option_type column
     *
     * Example usage:
     * <code>
     * $query->filterByROpOptionType(1234); // WHERE r_op_option_type = 1234
     * $query->filterByROpOptionType(array(12, 34)); // WHERE r_op_option_type IN (12, 34)
     * $query->filterByROpOptionType(array('min' => 12)); // WHERE r_op_option_type >= 12
     * $query->filterByROpOptionType(array('max' => 12)); // WHERE r_op_option_type <= 12
     * </code>
     *
     * @param     mixed $rOpOptionType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function filterByROpOptionType($rOpOptionType = null, $comparison = null)
    {
        if (is_array($rOpOptionType)) {
            $useMinMax = false;
            if (isset($rOpOptionType['min'])) {
                $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_TYPE, $rOpOptionType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpOptionType['max'])) {
                $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_TYPE, $rOpOptionType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_TYPE, $rOpOptionType, $comparison);
    }

    /**
     * Filter the query on the r_op_option_parent column
     *
     * Example usage:
     * <code>
     * $query->filterByROpOptionParent(1234); // WHERE r_op_option_parent = 1234
     * $query->filterByROpOptionParent(array(12, 34)); // WHERE r_op_option_parent IN (12, 34)
     * $query->filterByROpOptionParent(array('min' => 12)); // WHERE r_op_option_parent >= 12
     * $query->filterByROpOptionParent(array('max' => 12)); // WHERE r_op_option_parent <= 12
     * </code>
     *
     * @param     mixed $rOpOptionParent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function filterByROpOptionParent($rOpOptionParent = null, $comparison = null)
    {
        if (is_array($rOpOptionParent)) {
            $useMinMax = false;
            if (isset($rOpOptionParent['min'])) {
                $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_PARENT, $rOpOptionParent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpOptionParent['max'])) {
                $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_PARENT, $rOpOptionParent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_PARENT, $rOpOptionParent, $comparison);
    }

    /**
     * Filter the query on the r_op_option_order column
     *
     * Example usage:
     * <code>
     * $query->filterByROpOptionOrder(1234); // WHERE r_op_option_order = 1234
     * $query->filterByROpOptionOrder(array(12, 34)); // WHERE r_op_option_order IN (12, 34)
     * $query->filterByROpOptionOrder(array('min' => 12)); // WHERE r_op_option_order >= 12
     * $query->filterByROpOptionOrder(array('max' => 12)); // WHERE r_op_option_order <= 12
     * </code>
     *
     * @param     mixed $rOpOptionOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function filterByROpOptionOrder($rOpOptionOrder = null, $comparison = null)
    {
        if (is_array($rOpOptionOrder)) {
            $useMinMax = false;
            if (isset($rOpOptionOrder['min'])) {
                $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ORDER, $rOpOptionOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpOptionOrder['max'])) {
                $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ORDER, $rOpOptionOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ORDER, $rOpOptionOrder, $comparison);
    }

    /**
     * Filter the query on the r_operation_option_r_activity_kpi_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationOptionRActivityKpiId(1234); // WHERE r_operation_option_r_activity_kpi_id = 1234
     * $query->filterByROperationOptionRActivityKpiId(array(12, 34)); // WHERE r_operation_option_r_activity_kpi_id IN (12, 34)
     * $query->filterByROperationOptionRActivityKpiId(array('min' => 12)); // WHERE r_operation_option_r_activity_kpi_id >= 12
     * $query->filterByROperationOptionRActivityKpiId(array('max' => 12)); // WHERE r_operation_option_r_activity_kpi_id <= 12
     * </code>
     *
     * @param     mixed $rOperationOptionRActivityKpiId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function filterByROperationOptionRActivityKpiId($rOperationOptionRActivityKpiId = null, $comparison = null)
    {
        if (is_array($rOperationOptionRActivityKpiId)) {
            $useMinMax = false;
            if (isset($rOperationOptionRActivityKpiId['min'])) {
                $this->addUsingAlias(ROperationOptionsPeer::R_OPERATION_OPTION_R_ACTIVITY_KPI_ID, $rOperationOptionRActivityKpiId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationOptionRActivityKpiId['max'])) {
                $this->addUsingAlias(ROperationOptionsPeer::R_OPERATION_OPTION_R_ACTIVITY_KPI_ID, $rOperationOptionRActivityKpiId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsPeer::R_OPERATION_OPTION_R_ACTIVITY_KPI_ID, $rOperationOptionRActivityKpiId, $comparison);
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
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ROperationOptionsPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query by a related LnkOperationOption object
     *
     * @param   LnkOperationOption|PropelObjectCollection $lnkOperationOption  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkOperationOption($lnkOperationOption, $comparison = null)
    {
        if ($lnkOperationOption instanceof LnkOperationOption) {
            return $this
                ->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ID, $lnkOperationOption->getOpOptId(), $comparison);
        } elseif ($lnkOperationOption instanceof PropelObjectCollection) {
            return $this
                ->useLnkOperationOptionQuery()
                ->filterByPrimaryKeys($lnkOperationOption->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkOperationOption() only accepts arguments of type LnkOperationOption or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkOperationOption relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function joinLnkOperationOption($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkOperationOption');

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
            $this->addJoinObject($join, 'LnkOperationOption');
        }

        return $this;
    }

    /**
     * Use the LnkOperationOption relation LnkOperationOption object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkOperationOptionQuery A secondary query class using the current class as primary query
     */
    public function useLnkOperationOptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkOperationOption($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkOperationOption', 'LnkOperationOptionQuery');
    }

    /**
     * Filter the query by a related ROperationTypeRequiredOptions object
     *
     * @param   ROperationTypeRequiredOptions|PropelObjectCollection $rOperationTypeRequiredOptions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeRequiredOptions($rOperationTypeRequiredOptions, $comparison = null)
    {
        if ($rOperationTypeRequiredOptions instanceof ROperationTypeRequiredOptions) {
            return $this
                ->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ID, $rOperationTypeRequiredOptions->getROperationTypeRequiredOptionROperationOptionId(), $comparison);
        } elseif ($rOperationTypeRequiredOptions instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeRequiredOptionsQuery()
                ->filterByPrimaryKeys($rOperationTypeRequiredOptions->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeRequiredOptions() only accepts arguments of type ROperationTypeRequiredOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeRequiredOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function joinROperationTypeRequiredOptions($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeRequiredOptions');

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
            $this->addJoinObject($join, 'ROperationTypeRequiredOptions');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeRequiredOptions relation ROperationTypeRequiredOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeRequiredOptionsQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeRequiredOptionsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationTypeRequiredOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeRequiredOptions', 'ROperationTypeRequiredOptionsQuery');
    }

    /**
     * Filter the query by a related ROperationStatusRequiredOptions object
     *
     * @param   ROperationStatusRequiredOptions|PropelObjectCollection $rOperationStatusRequiredOptions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationStatusRequiredOptions($rOperationStatusRequiredOptions, $comparison = null)
    {
        if ($rOperationStatusRequiredOptions instanceof ROperationStatusRequiredOptions) {
            return $this
                ->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ID, $rOperationStatusRequiredOptions->getROperationStatusRequiredOptionsROperationOptionId(), $comparison);
        } elseif ($rOperationStatusRequiredOptions instanceof PropelObjectCollection) {
            return $this
                ->useROperationStatusRequiredOptionsQuery()
                ->filterByPrimaryKeys($rOperationStatusRequiredOptions->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationStatusRequiredOptions() only accepts arguments of type ROperationStatusRequiredOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationStatusRequiredOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function joinROperationStatusRequiredOptions($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationStatusRequiredOptions');

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
            $this->addJoinObject($join, 'ROperationStatusRequiredOptions');
        }

        return $this;
    }

    /**
     * Use the ROperationStatusRequiredOptions relation ROperationStatusRequiredOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationStatusRequiredOptionsQuery A secondary query class using the current class as primary query
     */
    public function useROperationStatusRequiredOptionsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationStatusRequiredOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationStatusRequiredOptions', 'ROperationStatusRequiredOptionsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationOptions $rOperationOptions Object to remove from the list of results
     *
     * @return ROperationOptionsQuery The current query, for fluid interface
     */
    public function prune($rOperationOptions = null)
    {
        if ($rOperationOptions) {
            $this->addUsingAlias(ROperationOptionsPeer::R_OP_OPTION_ID, $rOperationOptions->getROpOptionId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
