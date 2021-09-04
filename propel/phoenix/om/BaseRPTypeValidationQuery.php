<?php


/**
 * Base class that represents a query for the 'r_p_type_validation' table.
 *
 *
 *
 * @method RPTypeValidationQuery orderByRPTypeValidationId($order = Criteria::ASC) Order by the r_p_type_validation_id column
 * @method RPTypeValidationQuery orderByRPTypeValidationLibelle($order = Criteria::ASC) Order by the r_p_type_validation_libelle column
 *
 * @method RPTypeValidationQuery groupByRPTypeValidationId() Group by the r_p_type_validation_id column
 * @method RPTypeValidationQuery groupByRPTypeValidationLibelle() Group by the r_p_type_validation_libelle column
 *
 * @method RPTypeValidationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RPTypeValidationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RPTypeValidationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RPTypeValidation findOne(PropelPDO $con = null) Return the first RPTypeValidation matching the query
 * @method RPTypeValidation findOneOrCreate(PropelPDO $con = null) Return the first RPTypeValidation matching the query, or a new RPTypeValidation object populated from the query conditions when no match is found
 *
 * @method RPTypeValidation findOneByRPTypeValidationLibelle(string $r_p_type_validation_libelle) Return the first RPTypeValidation filtered by the r_p_type_validation_libelle column
 *
 * @method array findByRPTypeValidationId(int $r_p_type_validation_id) Return RPTypeValidation objects filtered by the r_p_type_validation_id column
 * @method array findByRPTypeValidationLibelle(string $r_p_type_validation_libelle) Return RPTypeValidation objects filtered by the r_p_type_validation_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPTypeValidationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRPTypeValidationQuery object.
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
            $modelName = 'RPTypeValidation';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RPTypeValidationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RPTypeValidationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RPTypeValidationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RPTypeValidationQuery) {
            return $criteria;
        }
        $query = new RPTypeValidationQuery(null, null, $modelAlias);

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
     * @return   RPTypeValidation|RPTypeValidation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RPTypeValidationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RPTypeValidationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RPTypeValidation A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRPTypeValidationId($key, $con = null)
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
     * @return                 RPTypeValidation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_p_type_validation_id`, `r_p_type_validation_libelle` FROM `r_p_type_validation` WHERE `r_p_type_validation_id` = :p0';
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
            $obj = new RPTypeValidation();
            $obj->hydrate($row);
            RPTypeValidationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RPTypeValidation|RPTypeValidation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RPTypeValidation[]|mixed the list of results, formatted by the current formatter
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
     * @return RPTypeValidationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RPTypeValidationPeer::R_P_TYPE_VALIDATION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RPTypeValidationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RPTypeValidationPeer::R_P_TYPE_VALIDATION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_p_type_validation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPTypeValidationId(1234); // WHERE r_p_type_validation_id = 1234
     * $query->filterByRPTypeValidationId(array(12, 34)); // WHERE r_p_type_validation_id IN (12, 34)
     * $query->filterByRPTypeValidationId(array('min' => 12)); // WHERE r_p_type_validation_id >= 12
     * $query->filterByRPTypeValidationId(array('max' => 12)); // WHERE r_p_type_validation_id <= 12
     * </code>
     *
     * @param     mixed $rPTypeValidationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPTypeValidationQuery The current query, for fluid interface
     */
    public function filterByRPTypeValidationId($rPTypeValidationId = null, $comparison = null)
    {
        if (is_array($rPTypeValidationId)) {
            $useMinMax = false;
            if (isset($rPTypeValidationId['min'])) {
                $this->addUsingAlias(RPTypeValidationPeer::R_P_TYPE_VALIDATION_ID, $rPTypeValidationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPTypeValidationId['max'])) {
                $this->addUsingAlias(RPTypeValidationPeer::R_P_TYPE_VALIDATION_ID, $rPTypeValidationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPTypeValidationPeer::R_P_TYPE_VALIDATION_ID, $rPTypeValidationId, $comparison);
    }

    /**
     * Filter the query on the r_p_type_validation_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPTypeValidationLibelle('fooValue');   // WHERE r_p_type_validation_libelle = 'fooValue'
     * $query->filterByRPTypeValidationLibelle('%fooValue%'); // WHERE r_p_type_validation_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPTypeValidationLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPTypeValidationQuery The current query, for fluid interface
     */
    public function filterByRPTypeValidationLibelle($rPTypeValidationLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPTypeValidationLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPTypeValidationLibelle)) {
                $rPTypeValidationLibelle = str_replace('*', '%', $rPTypeValidationLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPTypeValidationPeer::R_P_TYPE_VALIDATION_LIBELLE, $rPTypeValidationLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RPTypeValidation $rPTypeValidation Object to remove from the list of results
     *
     * @return RPTypeValidationQuery The current query, for fluid interface
     */
    public function prune($rPTypeValidation = null)
    {
        if ($rPTypeValidation) {
            $this->addUsingAlias(RPTypeValidationPeer::R_P_TYPE_VALIDATION_ID, $rPTypeValidation->getRPTypeValidationId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
