<?php


/**
 * Base class that represents a query for the 'r_plan_fact_periodes' table.
 *
 *
 *
 * @method RPlanFactPeriodesQuery orderByRPlanFactPeriodeId($order = Criteria::ASC) Order by the r_plan_fact_periode_id column
 * @method RPlanFactPeriodesQuery orderByRPlanFactPeriodeLibelle($order = Criteria::ASC) Order by the r_plan_fact_periode_libelle column
 *
 * @method RPlanFactPeriodesQuery groupByRPlanFactPeriodeId() Group by the r_plan_fact_periode_id column
 * @method RPlanFactPeriodesQuery groupByRPlanFactPeriodeLibelle() Group by the r_plan_fact_periode_libelle column
 *
 * @method RPlanFactPeriodesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RPlanFactPeriodesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RPlanFactPeriodesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RPlanFactPeriodes findOne(PropelPDO $con = null) Return the first RPlanFactPeriodes matching the query
 * @method RPlanFactPeriodes findOneOrCreate(PropelPDO $con = null) Return the first RPlanFactPeriodes matching the query, or a new RPlanFactPeriodes object populated from the query conditions when no match is found
 *
 * @method RPlanFactPeriodes findOneByRPlanFactPeriodeLibelle(string $r_plan_fact_periode_libelle) Return the first RPlanFactPeriodes filtered by the r_plan_fact_periode_libelle column
 *
 * @method array findByRPlanFactPeriodeId(int $r_plan_fact_periode_id) Return RPlanFactPeriodes objects filtered by the r_plan_fact_periode_id column
 * @method array findByRPlanFactPeriodeLibelle(string $r_plan_fact_periode_libelle) Return RPlanFactPeriodes objects filtered by the r_plan_fact_periode_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPlanFactPeriodesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRPlanFactPeriodesQuery object.
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
            $modelName = 'RPlanFactPeriodes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RPlanFactPeriodesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RPlanFactPeriodesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RPlanFactPeriodesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RPlanFactPeriodesQuery) {
            return $criteria;
        }
        $query = new RPlanFactPeriodesQuery(null, null, $modelAlias);

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
     * @return   RPlanFactPeriodes|RPlanFactPeriodes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RPlanFactPeriodesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RPlanFactPeriodesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RPlanFactPeriodes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRPlanFactPeriodeId($key, $con = null)
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
     * @return                 RPlanFactPeriodes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_plan_fact_periode_id`, `r_plan_fact_periode_libelle` FROM `r_plan_fact_periodes` WHERE `r_plan_fact_periode_id` = :p0';
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
            $obj = new RPlanFactPeriodes();
            $obj->hydrate($row);
            RPlanFactPeriodesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RPlanFactPeriodes|RPlanFactPeriodes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RPlanFactPeriodes[]|mixed the list of results, formatted by the current formatter
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
     * @return RPlanFactPeriodesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RPlanFactPeriodesPeer::R_PLAN_FACT_PERIODE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RPlanFactPeriodesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RPlanFactPeriodesPeer::R_PLAN_FACT_PERIODE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_plan_fact_periode_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPlanFactPeriodeId(1234); // WHERE r_plan_fact_periode_id = 1234
     * $query->filterByRPlanFactPeriodeId(array(12, 34)); // WHERE r_plan_fact_periode_id IN (12, 34)
     * $query->filterByRPlanFactPeriodeId(array('min' => 12)); // WHERE r_plan_fact_periode_id >= 12
     * $query->filterByRPlanFactPeriodeId(array('max' => 12)); // WHERE r_plan_fact_periode_id <= 12
     * </code>
     *
     * @param     mixed $rPlanFactPeriodeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPlanFactPeriodesQuery The current query, for fluid interface
     */
    public function filterByRPlanFactPeriodeId($rPlanFactPeriodeId = null, $comparison = null)
    {
        if (is_array($rPlanFactPeriodeId)) {
            $useMinMax = false;
            if (isset($rPlanFactPeriodeId['min'])) {
                $this->addUsingAlias(RPlanFactPeriodesPeer::R_PLAN_FACT_PERIODE_ID, $rPlanFactPeriodeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPlanFactPeriodeId['max'])) {
                $this->addUsingAlias(RPlanFactPeriodesPeer::R_PLAN_FACT_PERIODE_ID, $rPlanFactPeriodeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPlanFactPeriodesPeer::R_PLAN_FACT_PERIODE_ID, $rPlanFactPeriodeId, $comparison);
    }

    /**
     * Filter the query on the r_plan_fact_periode_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPlanFactPeriodeLibelle('fooValue');   // WHERE r_plan_fact_periode_libelle = 'fooValue'
     * $query->filterByRPlanFactPeriodeLibelle('%fooValue%'); // WHERE r_plan_fact_periode_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPlanFactPeriodeLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPlanFactPeriodesQuery The current query, for fluid interface
     */
    public function filterByRPlanFactPeriodeLibelle($rPlanFactPeriodeLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPlanFactPeriodeLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPlanFactPeriodeLibelle)) {
                $rPlanFactPeriodeLibelle = str_replace('*', '%', $rPlanFactPeriodeLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPlanFactPeriodesPeer::R_PLAN_FACT_PERIODE_LIBELLE, $rPlanFactPeriodeLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RPlanFactPeriodes $rPlanFactPeriodes Object to remove from the list of results
     *
     * @return RPlanFactPeriodesQuery The current query, for fluid interface
     */
    public function prune($rPlanFactPeriodes = null)
    {
        if ($rPlanFactPeriodes) {
            $this->addUsingAlias(RPlanFactPeriodesPeer::R_PLAN_FACT_PERIODE_ID, $rPlanFactPeriodes->getRPlanFactPeriodeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
