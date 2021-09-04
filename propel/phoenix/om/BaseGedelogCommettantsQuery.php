<?php


/**
 * Base class that represents a query for the 'gedelog_commettants' table.
 *
 *
 *
 * @method GedelogCommettantsQuery orderByClId($order = Criteria::ASC) Order by the cl_id column
 * @method GedelogCommettantsQuery orderBySiteOptionId($order = Criteria::ASC) Order by the site_option_id column
 * @method GedelogCommettantsQuery orderByGdlComtId($order = Criteria::ASC) Order by the gdl_comt_id column
 *
 * @method GedelogCommettantsQuery groupByClId() Group by the cl_id column
 * @method GedelogCommettantsQuery groupBySiteOptionId() Group by the site_option_id column
 * @method GedelogCommettantsQuery groupByGdlComtId() Group by the gdl_comt_id column
 *
 * @method GedelogCommettantsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GedelogCommettantsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GedelogCommettantsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GedelogCommettants findOne(PropelPDO $con = null) Return the first GedelogCommettants matching the query
 * @method GedelogCommettants findOneOrCreate(PropelPDO $con = null) Return the first GedelogCommettants matching the query, or a new GedelogCommettants object populated from the query conditions when no match is found
 *
 * @method GedelogCommettants findOneByClId(int $cl_id) Return the first GedelogCommettants filtered by the cl_id column
 * @method GedelogCommettants findOneBySiteOptionId(int $site_option_id) Return the first GedelogCommettants filtered by the site_option_id column
 * @method GedelogCommettants findOneByGdlComtId(int $gdl_comt_id) Return the first GedelogCommettants filtered by the gdl_comt_id column
 *
 * @method array findByClId(int $cl_id) Return GedelogCommettants objects filtered by the cl_id column
 * @method array findBySiteOptionId(int $site_option_id) Return GedelogCommettants objects filtered by the site_option_id column
 * @method array findByGdlComtId(int $gdl_comt_id) Return GedelogCommettants objects filtered by the gdl_comt_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseGedelogCommettantsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGedelogCommettantsQuery object.
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
            $modelName = 'GedelogCommettants';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GedelogCommettantsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GedelogCommettantsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GedelogCommettantsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GedelogCommettantsQuery) {
            return $criteria;
        }
        $query = new GedelogCommettantsQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$cl_id, $site_option_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GedelogCommettants|GedelogCommettants[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GedelogCommettantsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GedelogCommettantsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 GedelogCommettants A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `cl_id`, `site_option_id`, `gdl_comt_id` FROM `gedelog_commettants` WHERE `cl_id` = :p0 AND `site_option_id` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GedelogCommettants();
            $obj->hydrate($row);
            GedelogCommettantsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GedelogCommettants|GedelogCommettants[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|GedelogCommettants[]|mixed the list of results, formatted by the current formatter
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
     * @return GedelogCommettantsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GedelogCommettantsPeer::CL_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GedelogCommettantsPeer::SITE_OPTION_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GedelogCommettantsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GedelogCommettantsPeer::CL_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GedelogCommettantsPeer::SITE_OPTION_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return GedelogCommettantsQuery The current query, for fluid interface
     */
    public function filterByClId($clId = null, $comparison = null)
    {
        if (is_array($clId)) {
            $useMinMax = false;
            if (isset($clId['min'])) {
                $this->addUsingAlias(GedelogCommettantsPeer::CL_ID, $clId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clId['max'])) {
                $this->addUsingAlias(GedelogCommettantsPeer::CL_ID, $clId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogCommettantsPeer::CL_ID, $clId, $comparison);
    }

    /**
     * Filter the query on the site_option_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySiteOptionId(1234); // WHERE site_option_id = 1234
     * $query->filterBySiteOptionId(array(12, 34)); // WHERE site_option_id IN (12, 34)
     * $query->filterBySiteOptionId(array('min' => 12)); // WHERE site_option_id >= 12
     * $query->filterBySiteOptionId(array('max' => 12)); // WHERE site_option_id <= 12
     * </code>
     *
     * @param     mixed $siteOptionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GedelogCommettantsQuery The current query, for fluid interface
     */
    public function filterBySiteOptionId($siteOptionId = null, $comparison = null)
    {
        if (is_array($siteOptionId)) {
            $useMinMax = false;
            if (isset($siteOptionId['min'])) {
                $this->addUsingAlias(GedelogCommettantsPeer::SITE_OPTION_ID, $siteOptionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($siteOptionId['max'])) {
                $this->addUsingAlias(GedelogCommettantsPeer::SITE_OPTION_ID, $siteOptionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogCommettantsPeer::SITE_OPTION_ID, $siteOptionId, $comparison);
    }

    /**
     * Filter the query on the gdl_comt_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGdlComtId(1234); // WHERE gdl_comt_id = 1234
     * $query->filterByGdlComtId(array(12, 34)); // WHERE gdl_comt_id IN (12, 34)
     * $query->filterByGdlComtId(array('min' => 12)); // WHERE gdl_comt_id >= 12
     * $query->filterByGdlComtId(array('max' => 12)); // WHERE gdl_comt_id <= 12
     * </code>
     *
     * @param     mixed $gdlComtId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GedelogCommettantsQuery The current query, for fluid interface
     */
    public function filterByGdlComtId($gdlComtId = null, $comparison = null)
    {
        if (is_array($gdlComtId)) {
            $useMinMax = false;
            if (isset($gdlComtId['min'])) {
                $this->addUsingAlias(GedelogCommettantsPeer::GDL_COMT_ID, $gdlComtId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gdlComtId['max'])) {
                $this->addUsingAlias(GedelogCommettantsPeer::GDL_COMT_ID, $gdlComtId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogCommettantsPeer::GDL_COMT_ID, $gdlComtId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GedelogCommettants $gedelogCommettants Object to remove from the list of results
     *
     * @return GedelogCommettantsQuery The current query, for fluid interface
     */
    public function prune($gedelogCommettants = null)
    {
        if ($gedelogCommettants) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GedelogCommettantsPeer::CL_ID), $gedelogCommettants->getClId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GedelogCommettantsPeer::SITE_OPTION_ID), $gedelogCommettants->getSiteOptionId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
