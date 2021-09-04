<?php


/**
 * Base class that represents a query for the 'r_plan_fact_periodes_type' table.
 *
 *
 *
 * @method RPlanFactPeriodesTypeQuery orderByRPfptId($order = Criteria::ASC) Order by the r_pfpt_id column
 * @method RPlanFactPeriodesTypeQuery orderByRPfptLibelle($order = Criteria::ASC) Order by the r_pfpt_libelle column
 *
 * @method RPlanFactPeriodesTypeQuery groupByRPfptId() Group by the r_pfpt_id column
 * @method RPlanFactPeriodesTypeQuery groupByRPfptLibelle() Group by the r_pfpt_libelle column
 *
 * @method RPlanFactPeriodesTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RPlanFactPeriodesTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RPlanFactPeriodesTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RPlanFactPeriodesType findOne(PropelPDO $con = null) Return the first RPlanFactPeriodesType matching the query
 * @method RPlanFactPeriodesType findOneOrCreate(PropelPDO $con = null) Return the first RPlanFactPeriodesType matching the query, or a new RPlanFactPeriodesType object populated from the query conditions when no match is found
 *
 * @method RPlanFactPeriodesType findOneByRPfptLibelle(string $r_pfpt_libelle) Return the first RPlanFactPeriodesType filtered by the r_pfpt_libelle column
 *
 * @method array findByRPfptId(int $r_pfpt_id) Return RPlanFactPeriodesType objects filtered by the r_pfpt_id column
 * @method array findByRPfptLibelle(string $r_pfpt_libelle) Return RPlanFactPeriodesType objects filtered by the r_pfpt_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPlanFactPeriodesTypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRPlanFactPeriodesTypeQuery object.
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
            $modelName = 'RPlanFactPeriodesType';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RPlanFactPeriodesTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RPlanFactPeriodesTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RPlanFactPeriodesTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RPlanFactPeriodesTypeQuery) {
            return $criteria;
        }
        $query = new RPlanFactPeriodesTypeQuery(null, null, $modelAlias);

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
     * @return   RPlanFactPeriodesType|RPlanFactPeriodesType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RPlanFactPeriodesTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RPlanFactPeriodesTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RPlanFactPeriodesType A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRPfptId($key, $con = null)
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
     * @return                 RPlanFactPeriodesType A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_pfpt_id`, `r_pfpt_libelle` FROM `r_plan_fact_periodes_type` WHERE `r_pfpt_id` = :p0';
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
            $obj = new RPlanFactPeriodesType();
            $obj->hydrate($row);
            RPlanFactPeriodesTypePeer::addInstanceToPool($obj, (string) $key);
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
     * @return RPlanFactPeriodesType|RPlanFactPeriodesType[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RPlanFactPeriodesType[]|mixed the list of results, formatted by the current formatter
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
     * @return RPlanFactPeriodesTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RPlanFactPeriodesTypePeer::R_PFPT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RPlanFactPeriodesTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RPlanFactPeriodesTypePeer::R_PFPT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_pfpt_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPfptId(1234); // WHERE r_pfpt_id = 1234
     * $query->filterByRPfptId(array(12, 34)); // WHERE r_pfpt_id IN (12, 34)
     * $query->filterByRPfptId(array('min' => 12)); // WHERE r_pfpt_id >= 12
     * $query->filterByRPfptId(array('max' => 12)); // WHERE r_pfpt_id <= 12
     * </code>
     *
     * @param     mixed $rPfptId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPlanFactPeriodesTypeQuery The current query, for fluid interface
     */
    public function filterByRPfptId($rPfptId = null, $comparison = null)
    {
        if (is_array($rPfptId)) {
            $useMinMax = false;
            if (isset($rPfptId['min'])) {
                $this->addUsingAlias(RPlanFactPeriodesTypePeer::R_PFPT_ID, $rPfptId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPfptId['max'])) {
                $this->addUsingAlias(RPlanFactPeriodesTypePeer::R_PFPT_ID, $rPfptId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPlanFactPeriodesTypePeer::R_PFPT_ID, $rPfptId, $comparison);
    }

    /**
     * Filter the query on the r_pfpt_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPfptLibelle('fooValue');   // WHERE r_pfpt_libelle = 'fooValue'
     * $query->filterByRPfptLibelle('%fooValue%'); // WHERE r_pfpt_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPfptLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPlanFactPeriodesTypeQuery The current query, for fluid interface
     */
    public function filterByRPfptLibelle($rPfptLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPfptLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPfptLibelle)) {
                $rPfptLibelle = str_replace('*', '%', $rPfptLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPlanFactPeriodesTypePeer::R_PFPT_LIBELLE, $rPfptLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RPlanFactPeriodesType $rPlanFactPeriodesType Object to remove from the list of results
     *
     * @return RPlanFactPeriodesTypeQuery The current query, for fluid interface
     */
    public function prune($rPlanFactPeriodesType = null)
    {
        if ($rPlanFactPeriodesType) {
            $this->addUsingAlias(RPlanFactPeriodesTypePeer::R_PFPT_ID, $rPlanFactPeriodesType->getRPfptId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
