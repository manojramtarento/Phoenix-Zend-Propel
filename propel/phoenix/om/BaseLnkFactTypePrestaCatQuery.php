<?php


/**
 * Base class that represents a query for the 'lnk_fact_type_presta_cat' table.
 *
 *
 *
 * @method LnkFactTypePrestaCatQuery orderByRFactTypeId($order = Criteria::ASC) Order by the r_fact_type_id column
 * @method LnkFactTypePrestaCatQuery orderByRPrestaCatId($order = Criteria::ASC) Order by the r_presta_cat_id column
 *
 * @method LnkFactTypePrestaCatQuery groupByRFactTypeId() Group by the r_fact_type_id column
 * @method LnkFactTypePrestaCatQuery groupByRPrestaCatId() Group by the r_presta_cat_id column
 *
 * @method LnkFactTypePrestaCatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkFactTypePrestaCatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkFactTypePrestaCatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkFactTypePrestaCat findOne(PropelPDO $con = null) Return the first LnkFactTypePrestaCat matching the query
 * @method LnkFactTypePrestaCat findOneOrCreate(PropelPDO $con = null) Return the first LnkFactTypePrestaCat matching the query, or a new LnkFactTypePrestaCat object populated from the query conditions when no match is found
 *
 * @method LnkFactTypePrestaCat findOneByRFactTypeId(int $r_fact_type_id) Return the first LnkFactTypePrestaCat filtered by the r_fact_type_id column
 * @method LnkFactTypePrestaCat findOneByRPrestaCatId(int $r_presta_cat_id) Return the first LnkFactTypePrestaCat filtered by the r_presta_cat_id column
 *
 * @method array findByRFactTypeId(int $r_fact_type_id) Return LnkFactTypePrestaCat objects filtered by the r_fact_type_id column
 * @method array findByRPrestaCatId(int $r_presta_cat_id) Return LnkFactTypePrestaCat objects filtered by the r_presta_cat_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkFactTypePrestaCatQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkFactTypePrestaCatQuery object.
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
            $modelName = 'LnkFactTypePrestaCat';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkFactTypePrestaCatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkFactTypePrestaCatQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkFactTypePrestaCatQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkFactTypePrestaCatQuery) {
            return $criteria;
        }
        $query = new LnkFactTypePrestaCatQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$r_fact_type_id, $r_presta_cat_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   LnkFactTypePrestaCat|LnkFactTypePrestaCat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkFactTypePrestaCatPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkFactTypePrestaCatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 LnkFactTypePrestaCat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_fact_type_id`, `r_presta_cat_id` FROM `lnk_fact_type_presta_cat` WHERE `r_fact_type_id` = :p0 AND `r_presta_cat_id` = :p1';
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
            $obj = new LnkFactTypePrestaCat();
            $obj->hydrate($row);
            LnkFactTypePrestaCatPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return LnkFactTypePrestaCat|LnkFactTypePrestaCat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LnkFactTypePrestaCat[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkFactTypePrestaCatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LnkFactTypePrestaCatPeer::R_FACT_TYPE_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LnkFactTypePrestaCatPeer::R_PRESTA_CAT_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkFactTypePrestaCatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LnkFactTypePrestaCatPeer::R_FACT_TYPE_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LnkFactTypePrestaCatPeer::R_PRESTA_CAT_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the r_fact_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactTypeId(1234); // WHERE r_fact_type_id = 1234
     * $query->filterByRFactTypeId(array(12, 34)); // WHERE r_fact_type_id IN (12, 34)
     * $query->filterByRFactTypeId(array('min' => 12)); // WHERE r_fact_type_id >= 12
     * $query->filterByRFactTypeId(array('max' => 12)); // WHERE r_fact_type_id <= 12
     * </code>
     *
     * @param     mixed $rFactTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkFactTypePrestaCatQuery The current query, for fluid interface
     */
    public function filterByRFactTypeId($rFactTypeId = null, $comparison = null)
    {
        if (is_array($rFactTypeId)) {
            $useMinMax = false;
            if (isset($rFactTypeId['min'])) {
                $this->addUsingAlias(LnkFactTypePrestaCatPeer::R_FACT_TYPE_ID, $rFactTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactTypeId['max'])) {
                $this->addUsingAlias(LnkFactTypePrestaCatPeer::R_FACT_TYPE_ID, $rFactTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkFactTypePrestaCatPeer::R_FACT_TYPE_ID, $rFactTypeId, $comparison);
    }

    /**
     * Filter the query on the r_presta_cat_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPrestaCatId(1234); // WHERE r_presta_cat_id = 1234
     * $query->filterByRPrestaCatId(array(12, 34)); // WHERE r_presta_cat_id IN (12, 34)
     * $query->filterByRPrestaCatId(array('min' => 12)); // WHERE r_presta_cat_id >= 12
     * $query->filterByRPrestaCatId(array('max' => 12)); // WHERE r_presta_cat_id <= 12
     * </code>
     *
     * @param     mixed $rPrestaCatId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkFactTypePrestaCatQuery The current query, for fluid interface
     */
    public function filterByRPrestaCatId($rPrestaCatId = null, $comparison = null)
    {
        if (is_array($rPrestaCatId)) {
            $useMinMax = false;
            if (isset($rPrestaCatId['min'])) {
                $this->addUsingAlias(LnkFactTypePrestaCatPeer::R_PRESTA_CAT_ID, $rPrestaCatId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPrestaCatId['max'])) {
                $this->addUsingAlias(LnkFactTypePrestaCatPeer::R_PRESTA_CAT_ID, $rPrestaCatId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkFactTypePrestaCatPeer::R_PRESTA_CAT_ID, $rPrestaCatId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   LnkFactTypePrestaCat $lnkFactTypePrestaCat Object to remove from the list of results
     *
     * @return LnkFactTypePrestaCatQuery The current query, for fluid interface
     */
    public function prune($lnkFactTypePrestaCat = null)
    {
        if ($lnkFactTypePrestaCat) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LnkFactTypePrestaCatPeer::R_FACT_TYPE_ID), $lnkFactTypePrestaCat->getRFactTypeId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LnkFactTypePrestaCatPeer::R_PRESTA_CAT_ID), $lnkFactTypePrestaCat->getRPrestaCatId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
