<?php


/**
 * Base class that represents a query for the 'gedelog_entites' table.
 *
 *
 *
 * @method GedelogEntitesQuery orderBySiteOptionId($order = Criteria::ASC) Order by the site_option_id column
 * @method GedelogEntitesQuery orderByClSiteId($order = Criteria::ASC) Order by the cl_site_id column
 * @method GedelogEntitesQuery orderByGdlEntId($order = Criteria::ASC) Order by the gdl_ent_id column
 *
 * @method GedelogEntitesQuery groupBySiteOptionId() Group by the site_option_id column
 * @method GedelogEntitesQuery groupByClSiteId() Group by the cl_site_id column
 * @method GedelogEntitesQuery groupByGdlEntId() Group by the gdl_ent_id column
 *
 * @method GedelogEntitesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GedelogEntitesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GedelogEntitesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GedelogEntites findOne(PropelPDO $con = null) Return the first GedelogEntites matching the query
 * @method GedelogEntites findOneOrCreate(PropelPDO $con = null) Return the first GedelogEntites matching the query, or a new GedelogEntites object populated from the query conditions when no match is found
 *
 * @method GedelogEntites findOneBySiteOptionId(int $site_option_id) Return the first GedelogEntites filtered by the site_option_id column
 * @method GedelogEntites findOneByClSiteId(int $cl_site_id) Return the first GedelogEntites filtered by the cl_site_id column
 * @method GedelogEntites findOneByGdlEntId(int $gdl_ent_id) Return the first GedelogEntites filtered by the gdl_ent_id column
 *
 * @method array findBySiteOptionId(int $site_option_id) Return GedelogEntites objects filtered by the site_option_id column
 * @method array findByClSiteId(int $cl_site_id) Return GedelogEntites objects filtered by the cl_site_id column
 * @method array findByGdlEntId(int $gdl_ent_id) Return GedelogEntites objects filtered by the gdl_ent_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseGedelogEntitesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGedelogEntitesQuery object.
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
            $modelName = 'GedelogEntites';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GedelogEntitesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GedelogEntitesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GedelogEntitesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GedelogEntitesQuery) {
            return $criteria;
        }
        $query = new GedelogEntitesQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$site_option_id, $cl_site_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GedelogEntites|GedelogEntites[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GedelogEntitesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GedelogEntitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GedelogEntites A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `site_option_id`, `cl_site_id`, `gdl_ent_id` FROM `gedelog_entites` WHERE `site_option_id` = :p0 AND `cl_site_id` = :p1';
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
            $obj = new GedelogEntites();
            $obj->hydrate($row);
            GedelogEntitesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GedelogEntites|GedelogEntites[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GedelogEntites[]|mixed the list of results, formatted by the current formatter
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
     * @return GedelogEntitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GedelogEntitesPeer::SITE_OPTION_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GedelogEntitesPeer::CL_SITE_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GedelogEntitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GedelogEntitesPeer::SITE_OPTION_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GedelogEntitesPeer::CL_SITE_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return GedelogEntitesQuery The current query, for fluid interface
     */
    public function filterBySiteOptionId($siteOptionId = null, $comparison = null)
    {
        if (is_array($siteOptionId)) {
            $useMinMax = false;
            if (isset($siteOptionId['min'])) {
                $this->addUsingAlias(GedelogEntitesPeer::SITE_OPTION_ID, $siteOptionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($siteOptionId['max'])) {
                $this->addUsingAlias(GedelogEntitesPeer::SITE_OPTION_ID, $siteOptionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogEntitesPeer::SITE_OPTION_ID, $siteOptionId, $comparison);
    }

    /**
     * Filter the query on the cl_site_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteId(1234); // WHERE cl_site_id = 1234
     * $query->filterByClSiteId(array(12, 34)); // WHERE cl_site_id IN (12, 34)
     * $query->filterByClSiteId(array('min' => 12)); // WHERE cl_site_id >= 12
     * $query->filterByClSiteId(array('max' => 12)); // WHERE cl_site_id <= 12
     * </code>
     *
     * @param     mixed $clSiteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GedelogEntitesQuery The current query, for fluid interface
     */
    public function filterByClSiteId($clSiteId = null, $comparison = null)
    {
        if (is_array($clSiteId)) {
            $useMinMax = false;
            if (isset($clSiteId['min'])) {
                $this->addUsingAlias(GedelogEntitesPeer::CL_SITE_ID, $clSiteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clSiteId['max'])) {
                $this->addUsingAlias(GedelogEntitesPeer::CL_SITE_ID, $clSiteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogEntitesPeer::CL_SITE_ID, $clSiteId, $comparison);
    }

    /**
     * Filter the query on the gdl_ent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGdlEntId(1234); // WHERE gdl_ent_id = 1234
     * $query->filterByGdlEntId(array(12, 34)); // WHERE gdl_ent_id IN (12, 34)
     * $query->filterByGdlEntId(array('min' => 12)); // WHERE gdl_ent_id >= 12
     * $query->filterByGdlEntId(array('max' => 12)); // WHERE gdl_ent_id <= 12
     * </code>
     *
     * @param     mixed $gdlEntId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GedelogEntitesQuery The current query, for fluid interface
     */
    public function filterByGdlEntId($gdlEntId = null, $comparison = null)
    {
        if (is_array($gdlEntId)) {
            $useMinMax = false;
            if (isset($gdlEntId['min'])) {
                $this->addUsingAlias(GedelogEntitesPeer::GDL_ENT_ID, $gdlEntId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gdlEntId['max'])) {
                $this->addUsingAlias(GedelogEntitesPeer::GDL_ENT_ID, $gdlEntId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GedelogEntitesPeer::GDL_ENT_ID, $gdlEntId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GedelogEntites $gedelogEntites Object to remove from the list of results
     *
     * @return GedelogEntitesQuery The current query, for fluid interface
     */
    public function prune($gedelogEntites = null)
    {
        if ($gedelogEntites) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GedelogEntitesPeer::SITE_OPTION_ID), $gedelogEntites->getSiteOptionId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GedelogEntitesPeer::CL_SITE_ID), $gedelogEntites->getClSiteId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
