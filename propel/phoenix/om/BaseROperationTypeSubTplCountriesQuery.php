<?php


/**
 * Base class that represents a query for the 'r_operation_type_sub_tpl_countries' table.
 *
 *
 *
 * @method ROperationTypeSubTplCountriesQuery orderByROperationTypeSubTplCountryId($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_country_id column
 * @method ROperationTypeSubTplCountriesQuery orderByROperationTypeSubTplCountryTplId($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_country_tpl_id column
 * @method ROperationTypeSubTplCountriesQuery orderByROperationTypeSubTplCountryRCountryId($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_country_r_country_id column
 * @method ROperationTypeSubTplCountriesQuery orderByROperationTypeSubTplCountryIsCountryLinked($order = Criteria::ASC) Order by the r_operation_type_sub_tpl_country_is_country_linked column
 *
 * @method ROperationTypeSubTplCountriesQuery groupByROperationTypeSubTplCountryId() Group by the r_operation_type_sub_tpl_country_id column
 * @method ROperationTypeSubTplCountriesQuery groupByROperationTypeSubTplCountryTplId() Group by the r_operation_type_sub_tpl_country_tpl_id column
 * @method ROperationTypeSubTplCountriesQuery groupByROperationTypeSubTplCountryRCountryId() Group by the r_operation_type_sub_tpl_country_r_country_id column
 * @method ROperationTypeSubTplCountriesQuery groupByROperationTypeSubTplCountryIsCountryLinked() Group by the r_operation_type_sub_tpl_country_is_country_linked column
 *
 * @method ROperationTypeSubTplCountriesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeSubTplCountriesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeSubTplCountriesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeSubTplCountriesQuery leftJoinTemplateCountry($relationAlias = null) Adds a LEFT JOIN clause to the query using the TemplateCountry relation
 * @method ROperationTypeSubTplCountriesQuery rightJoinTemplateCountry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TemplateCountry relation
 * @method ROperationTypeSubTplCountriesQuery innerJoinTemplateCountry($relationAlias = null) Adds a INNER JOIN clause to the query using the TemplateCountry relation
 *
 * @method ROperationTypeSubTplCountriesQuery leftJoinTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the Template relation
 * @method ROperationTypeSubTplCountriesQuery rightJoinTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Template relation
 * @method ROperationTypeSubTplCountriesQuery innerJoinTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the Template relation
 *
 * @method ROperationTypeSubTplCountries findOne(PropelPDO $con = null) Return the first ROperationTypeSubTplCountries matching the query
 * @method ROperationTypeSubTplCountries findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeSubTplCountries matching the query, or a new ROperationTypeSubTplCountries object populated from the query conditions when no match is found
 *
 * @method ROperationTypeSubTplCountries findOneByROperationTypeSubTplCountryTplId(int $r_operation_type_sub_tpl_country_tpl_id) Return the first ROperationTypeSubTplCountries filtered by the r_operation_type_sub_tpl_country_tpl_id column
 * @method ROperationTypeSubTplCountries findOneByROperationTypeSubTplCountryRCountryId(int $r_operation_type_sub_tpl_country_r_country_id) Return the first ROperationTypeSubTplCountries filtered by the r_operation_type_sub_tpl_country_r_country_id column
 * @method ROperationTypeSubTplCountries findOneByROperationTypeSubTplCountryIsCountryLinked(int $r_operation_type_sub_tpl_country_is_country_linked) Return the first ROperationTypeSubTplCountries filtered by the r_operation_type_sub_tpl_country_is_country_linked column
 *
 * @method array findByROperationTypeSubTplCountryId(int $r_operation_type_sub_tpl_country_id) Return ROperationTypeSubTplCountries objects filtered by the r_operation_type_sub_tpl_country_id column
 * @method array findByROperationTypeSubTplCountryTplId(int $r_operation_type_sub_tpl_country_tpl_id) Return ROperationTypeSubTplCountries objects filtered by the r_operation_type_sub_tpl_country_tpl_id column
 * @method array findByROperationTypeSubTplCountryRCountryId(int $r_operation_type_sub_tpl_country_r_country_id) Return ROperationTypeSubTplCountries objects filtered by the r_operation_type_sub_tpl_country_r_country_id column
 * @method array findByROperationTypeSubTplCountryIsCountryLinked(int $r_operation_type_sub_tpl_country_is_country_linked) Return ROperationTypeSubTplCountries objects filtered by the r_operation_type_sub_tpl_country_is_country_linked column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplCountriesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeSubTplCountriesQuery object.
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
            $modelName = 'ROperationTypeSubTplCountries';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeSubTplCountriesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeSubTplCountriesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeSubTplCountriesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeSubTplCountriesQuery) {
            return $criteria;
        }
        $query = new ROperationTypeSubTplCountriesQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeSubTplCountries|ROperationTypeSubTplCountries[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeSubTplCountriesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplCountriesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeSubTplCountries A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROperationTypeSubTplCountryId($key, $con = null)
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
     * @return                 ROperationTypeSubTplCountries A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_operation_type_sub_tpl_country_id`, `r_operation_type_sub_tpl_country_tpl_id`, `r_operation_type_sub_tpl_country_r_country_id`, `r_operation_type_sub_tpl_country_is_country_linked` FROM `r_operation_type_sub_tpl_countries` WHERE `r_operation_type_sub_tpl_country_id` = :p0';
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
            $obj = new ROperationTypeSubTplCountries();
            $obj->hydrate($row);
            ROperationTypeSubTplCountriesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeSubTplCountries|ROperationTypeSubTplCountries[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeSubTplCountries[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCountryId(1234); // WHERE r_operation_type_sub_tpl_country_id = 1234
     * $query->filterByROperationTypeSubTplCountryId(array(12, 34)); // WHERE r_operation_type_sub_tpl_country_id IN (12, 34)
     * $query->filterByROperationTypeSubTplCountryId(array('min' => 12)); // WHERE r_operation_type_sub_tpl_country_id >= 12
     * $query->filterByROperationTypeSubTplCountryId(array('max' => 12)); // WHERE r_operation_type_sub_tpl_country_id <= 12
     * </code>
     *
     * @param     mixed $rOperationTypeSubTplCountryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCountryId($rOperationTypeSubTplCountryId = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCountryId)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCountryId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID, $rOperationTypeSubTplCountryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCountryId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID, $rOperationTypeSubTplCountryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID, $rOperationTypeSubTplCountryId, $comparison);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_country_tpl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCountryTplId(1234); // WHERE r_operation_type_sub_tpl_country_tpl_id = 1234
     * $query->filterByROperationTypeSubTplCountryTplId(array(12, 34)); // WHERE r_operation_type_sub_tpl_country_tpl_id IN (12, 34)
     * $query->filterByROperationTypeSubTplCountryTplId(array('min' => 12)); // WHERE r_operation_type_sub_tpl_country_tpl_id >= 12
     * $query->filterByROperationTypeSubTplCountryTplId(array('max' => 12)); // WHERE r_operation_type_sub_tpl_country_tpl_id <= 12
     * </code>
     *
     * @see       filterByTemplate()
     *
     * @param     mixed $rOperationTypeSubTplCountryTplId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCountryTplId($rOperationTypeSubTplCountryTplId = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCountryTplId)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCountryTplId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_TPL_ID, $rOperationTypeSubTplCountryTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCountryTplId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_TPL_ID, $rOperationTypeSubTplCountryTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_TPL_ID, $rOperationTypeSubTplCountryTplId, $comparison);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_country_r_country_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCountryRCountryId(1234); // WHERE r_operation_type_sub_tpl_country_r_country_id = 1234
     * $query->filterByROperationTypeSubTplCountryRCountryId(array(12, 34)); // WHERE r_operation_type_sub_tpl_country_r_country_id IN (12, 34)
     * $query->filterByROperationTypeSubTplCountryRCountryId(array('min' => 12)); // WHERE r_operation_type_sub_tpl_country_r_country_id >= 12
     * $query->filterByROperationTypeSubTplCountryRCountryId(array('max' => 12)); // WHERE r_operation_type_sub_tpl_country_r_country_id <= 12
     * </code>
     *
     * @see       filterByTemplateCountry()
     *
     * @param     mixed $rOperationTypeSubTplCountryRCountryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCountryRCountryId($rOperationTypeSubTplCountryRCountryId = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCountryRCountryId)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCountryRCountryId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID, $rOperationTypeSubTplCountryRCountryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCountryRCountryId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID, $rOperationTypeSubTplCountryRCountryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID, $rOperationTypeSubTplCountryRCountryId, $comparison);
    }

    /**
     * Filter the query on the r_operation_type_sub_tpl_country_is_country_linked column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationTypeSubTplCountryIsCountryLinked(1234); // WHERE r_operation_type_sub_tpl_country_is_country_linked = 1234
     * $query->filterByROperationTypeSubTplCountryIsCountryLinked(array(12, 34)); // WHERE r_operation_type_sub_tpl_country_is_country_linked IN (12, 34)
     * $query->filterByROperationTypeSubTplCountryIsCountryLinked(array('min' => 12)); // WHERE r_operation_type_sub_tpl_country_is_country_linked >= 12
     * $query->filterByROperationTypeSubTplCountryIsCountryLinked(array('max' => 12)); // WHERE r_operation_type_sub_tpl_country_is_country_linked <= 12
     * </code>
     *
     * @param     mixed $rOperationTypeSubTplCountryIsCountryLinked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     */
    public function filterByROperationTypeSubTplCountryIsCountryLinked($rOperationTypeSubTplCountryIsCountryLinked = null, $comparison = null)
    {
        if (is_array($rOperationTypeSubTplCountryIsCountryLinked)) {
            $useMinMax = false;
            if (isset($rOperationTypeSubTplCountryIsCountryLinked['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_IS_COUNTRY_LINKED, $rOperationTypeSubTplCountryIsCountryLinked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationTypeSubTplCountryIsCountryLinked['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_IS_COUNTRY_LINKED, $rOperationTypeSubTplCountryIsCountryLinked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_IS_COUNTRY_LINKED, $rOperationTypeSubTplCountryIsCountryLinked, $comparison);
    }

    /**
     * Filter the query by a related RCountries object
     *
     * @param   RCountries|PropelObjectCollection $rCountries The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTemplateCountry($rCountries, $comparison = null)
    {
        if ($rCountries instanceof RCountries) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID, $rCountries->getRCountryId(), $comparison);
        } elseif ($rCountries instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_R_COUNTRY_ID, $rCountries->toKeyValue('PrimaryKey', 'RCountryId'), $comparison);
        } else {
            throw new PropelException('filterByTemplateCountry() only accepts arguments of type RCountries or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TemplateCountry relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     */
    public function joinTemplateCountry($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TemplateCountry');

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
            $this->addJoinObject($join, 'TemplateCountry');
        }

        return $this;
    }

    /**
     * Use the TemplateCountry relation RCountries object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCountriesQuery A secondary query class using the current class as primary query
     */
    public function useTemplateCountryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTemplateCountry($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TemplateCountry', 'RCountriesQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTpl object
     *
     * @param   ROperationTypeSubTpl|PropelObjectCollection $rOperationTypeSubTpl The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTemplate($rOperationTypeSubTpl, $comparison = null)
    {
        if ($rOperationTypeSubTpl instanceof ROperationTypeSubTpl) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_TPL_ID, $rOperationTypeSubTpl->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTpl instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_TPL_ID, $rOperationTypeSubTpl->toKeyValue('PrimaryKey', 'OstTplId'), $comparison);
        } else {
            throw new PropelException('filterByTemplate() only accepts arguments of type ROperationTypeSubTpl or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Template relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     */
    public function joinTemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Template');

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
            $this->addJoinObject($join, 'Template');
        }

        return $this;
    }

    /**
     * Use the Template relation ROperationTypeSubTpl object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplQuery A secondary query class using the current class as primary query
     */
    public function useTemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTemplate($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Template', 'ROperationTypeSubTplQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTypeSubTplCountries $rOperationTypeSubTplCountries Object to remove from the list of results
     *
     * @return ROperationTypeSubTplCountriesQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeSubTplCountries = null)
    {
        if ($rOperationTypeSubTplCountries) {
            $this->addUsingAlias(ROperationTypeSubTplCountriesPeer::R_OPERATION_TYPE_SUB_TPL_COUNTRY_ID, $rOperationTypeSubTplCountries->getROperationTypeSubTplCountryId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
