<?php


/**
 * Base class that represents a query for the 'r_operation_options_type' table.
 *
 *
 *
 * @method ROperationOptionsTypeQuery orderByROpOptionTypeId($order = Criteria::ASC) Order by the r_op_option_type_id column
 * @method ROperationOptionsTypeQuery orderByROpOptionTypeLibelle($order = Criteria::ASC) Order by the r_op_option_type_libelle column
 *
 * @method ROperationOptionsTypeQuery groupByROpOptionTypeId() Group by the r_op_option_type_id column
 * @method ROperationOptionsTypeQuery groupByROpOptionTypeLibelle() Group by the r_op_option_type_libelle column
 *
 * @method ROperationOptionsTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationOptionsTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationOptionsTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationOptionsType findOne(PropelPDO $con = null) Return the first ROperationOptionsType matching the query
 * @method ROperationOptionsType findOneOrCreate(PropelPDO $con = null) Return the first ROperationOptionsType matching the query, or a new ROperationOptionsType object populated from the query conditions when no match is found
 *
 * @method ROperationOptionsType findOneByROpOptionTypeLibelle(string $r_op_option_type_libelle) Return the first ROperationOptionsType filtered by the r_op_option_type_libelle column
 *
 * @method array findByROpOptionTypeId(int $r_op_option_type_id) Return ROperationOptionsType objects filtered by the r_op_option_type_id column
 * @method array findByROpOptionTypeLibelle(string $r_op_option_type_libelle) Return ROperationOptionsType objects filtered by the r_op_option_type_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationOptionsTypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationOptionsTypeQuery object.
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
            $modelName = 'ROperationOptionsType';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationOptionsTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationOptionsTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationOptionsTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationOptionsTypeQuery) {
            return $criteria;
        }
        $query = new ROperationOptionsTypeQuery(null, null, $modelAlias);

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
     * @return   ROperationOptionsType|ROperationOptionsType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationOptionsTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationOptionsTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationOptionsType A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROpOptionTypeId($key, $con = null)
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
     * @return                 ROperationOptionsType A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_op_option_type_id`, `r_op_option_type_libelle` FROM `r_operation_options_type` WHERE `r_op_option_type_id` = :p0';
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
            $obj = new ROperationOptionsType();
            $obj->hydrate($row);
            ROperationOptionsTypePeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationOptionsType|ROperationOptionsType[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationOptionsType[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationOptionsTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationOptionsTypePeer::R_OP_OPTION_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationOptionsTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationOptionsTypePeer::R_OP_OPTION_TYPE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_op_option_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROpOptionTypeId(1234); // WHERE r_op_option_type_id = 1234
     * $query->filterByROpOptionTypeId(array(12, 34)); // WHERE r_op_option_type_id IN (12, 34)
     * $query->filterByROpOptionTypeId(array('min' => 12)); // WHERE r_op_option_type_id >= 12
     * $query->filterByROpOptionTypeId(array('max' => 12)); // WHERE r_op_option_type_id <= 12
     * </code>
     *
     * @param     mixed $rOpOptionTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsTypeQuery The current query, for fluid interface
     */
    public function filterByROpOptionTypeId($rOpOptionTypeId = null, $comparison = null)
    {
        if (is_array($rOpOptionTypeId)) {
            $useMinMax = false;
            if (isset($rOpOptionTypeId['min'])) {
                $this->addUsingAlias(ROperationOptionsTypePeer::R_OP_OPTION_TYPE_ID, $rOpOptionTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpOptionTypeId['max'])) {
                $this->addUsingAlias(ROperationOptionsTypePeer::R_OP_OPTION_TYPE_ID, $rOpOptionTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationOptionsTypePeer::R_OP_OPTION_TYPE_ID, $rOpOptionTypeId, $comparison);
    }

    /**
     * Filter the query on the r_op_option_type_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByROpOptionTypeLibelle('fooValue');   // WHERE r_op_option_type_libelle = 'fooValue'
     * $query->filterByROpOptionTypeLibelle('%fooValue%'); // WHERE r_op_option_type_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rOpOptionTypeLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationOptionsTypeQuery The current query, for fluid interface
     */
    public function filterByROpOptionTypeLibelle($rOpOptionTypeLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rOpOptionTypeLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rOpOptionTypeLibelle)) {
                $rOpOptionTypeLibelle = str_replace('*', '%', $rOpOptionTypeLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationOptionsTypePeer::R_OP_OPTION_TYPE_LIBELLE, $rOpOptionTypeLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationOptionsType $rOperationOptionsType Object to remove from the list of results
     *
     * @return ROperationOptionsTypeQuery The current query, for fluid interface
     */
    public function prune($rOperationOptionsType = null)
    {
        if ($rOperationOptionsType) {
            $this->addUsingAlias(ROperationOptionsTypePeer::R_OP_OPTION_TYPE_ID, $rOperationOptionsType->getROpOptionTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
