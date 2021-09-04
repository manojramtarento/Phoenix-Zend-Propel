<?php


/**
 * Base class that represents a query for the 'r_operation_type_sub_tpl_cultures' table.
 *
 *
 *
 * @method ROperationTypeSubTplCulturesQuery orderByROperationTypeSubTplCultureId($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_culture_id column
 * @method ROperationTypeSubTplCulturesQuery orderByROperationTypeSubTplCultureTplId($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_culture_tpl_id column
 * @method ROperationTypeSubTplCulturesQuery orderByROperationTypeSubTplCultureRCultureId($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_culture_r_culture_id column
 * @method ROperationTypeSubTplCulturesQuery orderByROperationTypeSubTplCultureIsCultureLinked($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_culture_is_culture_linked column
 *
 * @method ROperationTypeSubTplCulturesQuery groupByROperationTypeSubTplCultureId() Group by the r_operation_type_sub_tpl_culture_id column
 * @method ROperationTypeSubTplCulturesQuery groupByROperationTypeSubTplCultureTplId() Group by the r_operation_type_sub_tpl_culture_tpl_id column
 * @method ROperationTypeSubTplCulturesQuery groupByROperationTypeSubTplCultureRCultureId() Group by the r_operation_type_sub_tpl_culture_r_culture_id column
 * @method ROperationTypeSubTplCulturesQuery groupByROperationTypeSubTplCultureIsCultureLinked() Group by the r_operation_type_sub_tpl_culture_is_culture_linked column
 *
 * @method ROperationTypeSubTplCulturesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeSubTplCulturesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeSubTplCulturesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeSubTplCulturesQuery leftJoinROperationTypeSubTpl($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplCulturesQuery rightJoinROperationTypeSubTpl($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplCulturesQuery innerJoinROperationTypeSubTpl($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTpl relation
 *
 * @method ROperationTypeSubTplCulturesQuery leftJoinRCultures($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCultures relation
 * @method ROperationTypeSubTplCulturesQuery rightJoinRCultures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCultures relation
 * @method ROperationTypeSubTplCulturesQuery innerJoinRCultures($relationAlias = null) Adds a INNER JOIN clause to the query using the RCultures relation
 *
 * @method ROperationTypeSubTplCultures findOne(PropelPDO $con = null) Return the first ROperationTypeSubTplCultures matching the query
 * @method ROperationTypeSubTplCultures findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeSubTplCultures matching the query, or a new ROperationTypeSubTplCultures object populated from the query conditions when no match is found
 *
 * @method ROperationTypeSubTplCultures findOneByROperationTypeSubTplCultureTplId(int $r_operation_type_sub_tpl_culture_tpl_id) Return the first ROperationTypeSubTplCultures filtered by the r_operation_type_sub_tpl_culture_tpl_id column
 * @method ROperationTypeSubTplCultures findOneByROperationTypeSubTplCultureRCultureId(int $r_operation_type_sub_tpl_culture_r_culture_id) Return the first ROperationTypeSubTplCultures filtered by the r_operation_type_sub_tpl_culture_r_culture_id column
 * @method ROperationTypeSubTplCultures findOneByROperationTypeSubTplCultureIsCultureLinked(int $r_operation_type_sub_tpl_culture_is_culture_linked) Return the first ROperationTypeSubTplCultures filtered by the r_operation_type_sub_tpl_culture_is_culture_linked column
 *
 * @method array findByROperationTypeSubTplCultureId(int $r_operation_type_sub_tpl_culture_id) Return ROperationTypeSubTplCultures objects filtered by the r_operation_type_sub_tpl_culture_id column
 * @method array findByROperationTypeSubTplCultureTplId(int $r_operation_type_sub_tpl_culture_tpl_id) Return ROperationTypeSubTplCultures objects filtered by the r_operation_type_sub_tpl_culture_tpl_id column
 * @method array findByROperationTypeSubTplCultureRCultureId(int $r_operation_type_sub_tpl_culture_r_culture_id) Return ROperationTypeSubTplCultures objects filtered by the r_operation_type_sub_tpl_culture_r_culture_id column
 * @method array findByROperationTypeSubTplCultureIsCultureLinked(int $r_operation_type_sub_tpl_culture_is_culture_linked) Return ROperationTypeSubTplCultures objects filtered by the r_operation_type_sub_tpl_culture_is_culture_linked column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplCulturesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeSubTplCulturesQuery object.
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
            $modelName = 'ROperationTypeSubTplCultures';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeSubTplCulturesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeSubTplCulturesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeSubTplCulturesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeSubTplCulturesQuery) {
            return $criteria;
        }
        $query = new ROperationTypeSubTplCulturesQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeSubTplCultures|ROperationTypeSubTplCultures[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeSubTplCulturesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplCulturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeSubTplCultures A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROperationTypeSubTplCultureId($key, $con = null)
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
     * @return                 ROperationTypeSubTplCultures A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_operation_type_sub_tpl_culture_id`, `r_operation_type_sub_tpl_culture_tpl_id`, `r_operation_type_sub_tpl_culture_r_culture_id`, `r_operation_type_sub_tpl_culture_is_culture_linked` FROM `r_operation_type_sub_tpl_cultures` WHERE `r_operation_type_sub_tpl_culture_id` = :p0';
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
            $obj = new ROperationTypeSubTplCultures();
            $obj->hydrate($row);
            ROperationTypeSubTplCulturesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeSubTplCultures|ROperationTypeSubTplCultures[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeSubTplCultures[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_culture_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCultureId(1234); // WHERE r_operation_type_sub_tpl_culture_id = 1234
     * $query->filterByROperationTypeSubTplCultureId(array(12, 34)); // WHERE r_operation_type_sub_tpl_culture_id IN (12, 34)
     * $query->filterByROperationTypeSubTplCultureId(array('min' => 12)); // WHERE r_operation_type_sub_tpl_culture_id >= 12
     * $query->filterByROperationTypeSubTplCultureId(array('max' => 12)); // WHERE r_operation_type_sub_tpl_culture_id <= 12
     * </code>
     *
     * @param     mixed $rOperationTypeSubTplCultureId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCultureId($rOperationTypeSubTplCultureId = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCultureId)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCultureId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_ID, $rOperationTypeSubTplCultureId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCultureId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_ID, $rOperationTypeSubTplCultureId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_ID, $rOperationTypeSubTplCultureId, $comparison);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_culture_tpl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCultureTplId(1234); // WHERE r_operation_type_sub_tpl_culture_tpl_id = 1234
     * $query->filterByROperationTypeSubTplCultureTplId(array(12, 34)); // WHERE r_operation_type_sub_tpl_culture_tpl_id IN (12, 34)
     * $query->filterByROperationTypeSubTplCultureTplId(array('min' => 12)); // WHERE r_operation_type_sub_tpl_culture_tpl_id >= 12
     * $query->filterByROperationTypeSubTplCultureTplId(array('max' => 12)); // WHERE r_operation_type_sub_tpl_culture_tpl_id <= 12
     * </code>
     *
     * @see       filterByROperationTypeSubTpl()
     *
     * @param     mixed $rOperationTypeSubTplCultureTplId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCultureTplId($rOperationTypeSubTplCultureTplId = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCultureTplId)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCultureTplId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_TPL_ID, $rOperationTypeSubTplCultureTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCultureTplId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_TPL_ID, $rOperationTypeSubTplCultureTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_TPL_ID, $rOperationTypeSubTplCultureTplId, $comparison);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_culture_r_culture_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCultureRCultureId(1234); // WHERE r_operation_type_sub_tpl_culture_r_culture_id = 1234
     * $query->filterByROperationTypeSubTplCultureRCultureId(array(12, 34)); // WHERE r_operation_type_sub_tpl_culture_r_culture_id IN (12, 34)
     * $query->filterByROperationTypeSubTplCultureRCultureId(array('min' => 12)); // WHERE r_operation_type_sub_tpl_culture_r_culture_id >= 12
     * $query->filterByROperationTypeSubTplCultureRCultureId(array('max' => 12)); // WHERE r_operation_type_sub_tpl_culture_r_culture_id <= 12
     * </code>
     *
     * @see       filterByRCultures()
     *
     * @param     mixed $rOperationTypeSubTplCultureRCultureId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCultureRCultureId($rOperationTypeSubTplCultureRCultureId = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCultureRCultureId)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCultureRCultureId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_R_CULTURE_ID, $rOperationTypeSubTplCultureRCultureId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCultureRCultureId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_R_CULTURE_ID, $rOperationTypeSubTplCultureRCultureId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_R_CULTURE_ID, $rOperationTypeSubTplCultureRCultureId, $comparison);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_culture_is_culture_linked column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCultureIsCultureLinked(1234); // WHERE r_operation_type_sub_tpl_culture_is_culture_linked = 1234
     * $query->filterByROperationTypeSubTplCultureIsCultureLinked(array(12, 34)); // WHERE r_operation_type_sub_tpl_culture_is_culture_linked IN (12, 34)
     * $query->filterByROperationTypeSubTplCultureIsCultureLinked(array('min' => 12)); // WHERE r_operation_type_sub_tpl_culture_is_culture_linked >= 12
     * $query->filterByROperationTypeSubTplCultureIsCultureLinked(array('max' => 12)); // WHERE r_operation_type_sub_tpl_culture_is_culture_linked <= 12
     * </code>
     *
     * @param     mixed $rOperationTypeSubTplCultureIsCultureLinked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCultureIsCultureLinked($rOperationTypeSubTplCultureIsCultureLinked = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCultureIsCultureLinked)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCultureIsCultureLinked['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_IS_CULTURE_LINKED, $rOperationTypeSubTplCultureIsCultureLinked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCultureIsCultureLinked['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_IS_CULTURE_LINKED, $rOperationTypeSubTplCultureIsCultureLinked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_IS_CULTURE_LINKED, $rOperationTypeSubTplCultureIsCultureLinked, $comparison);
    }

    /**
     * Filter the query by a related ROperationTypeSubTpl object
     *
     * @param   ROperationTypeSubTpl|PropelObjectCollection $rOperationTypeSubTpl The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTpl($rOperationTypeSubTpl, $comparison = null)
    {
        if ($rOperationTypeSubTpl instanceof ROperationTypeSubTpl) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_TPL_ID, $rOperationTypeSubTpl->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTpl instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_TPL_ID, $rOperationTypeSubTpl->toKeyValue('PrimaryKey', 'OstTplId'), $comparison);
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
     * @return ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTpl($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useROperationTypeSubTplQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTpl($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTpl', 'ROperationTypeSubTplQuery');
    }

    /**
     * Filter the query by a related RCultures object
     *
     * @param   RCultures|PropelObjectCollection $rCultures The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCultures($rCultures, $comparison = null)
    {
        if ($rCultures instanceof RCultures) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_R_CULTURE_ID, $rCultures->getRCultureId(), $comparison);
        } elseif ($rCultures instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_R_CULTURE_ID, $rCultures->toKeyValue('PrimaryKey', 'RCultureId'), $comparison);
        } else {
            throw new PropelException('filterByRCultures() only accepts arguments of type RCultures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RCultures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     */
    public function joinRCultures($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RCultures');

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
            $this->addJoinObject($join, 'RCultures');
        }

        return $this;
    }

    /**
     * Use the RCultures relation RCultures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCulturesQuery A secondary query class using the current class as primary query
     */
    public function useRCulturesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRCultures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RCultures', 'RCulturesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTypeSubTplCultures $rOperationTypeSubTplCultures Object to remove from the list of results
     *
     * @return ROperationTypeSubTplCulturesQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeSubTplCultures = null)
    {
        if ($rOperationTypeSubTplCultures) {
            $this->addUsingAlias(ROperationTypeSubTplCulturesPeer::R_OPERATION_TYPE_SUB_TPL_CULTURE_ID, $rOperationTypeSubTplCultures->getROperationTypeSubTplCultureId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
