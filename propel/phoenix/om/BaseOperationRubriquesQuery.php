<?php


/**
 * Base class that represents a query for the 'operation_rubriques' table.
 *
 *
 *
 * @method OperationRubriquesQuery orderByOpRubriqueId($order = Criteria::ASC) Order by the op_rubrique_id column
 * @method OperationRubriquesQuery orderByOpRRubriqueId($order = Criteria::ASC) Order by the op_r_rubrique_id column
 * @method OperationRubriquesQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method OperationRubriquesQuery orderByOpRubriqueLibelle($order = Criteria::ASC) Order by the op_rubrique_libelle column
 * @method OperationRubriquesQuery orderByOpRubriqueOrder($order = Criteria::ASC) Order by the op_rubrique_order column
 * @method OperationRubriquesQuery orderByRTvaTypeId($order = Criteria::ASC) Order by the r_tva_type_id column
 * @method OperationRubriquesQuery orderByRRubTypeId($order = Criteria::ASC) Order by the r_rub_type_id column
 *
 * @method OperationRubriquesQuery groupByOpRubriqueId() Group by the op_rubrique_id column
 * @method OperationRubriquesQuery groupByOpRRubriqueId() Group by the op_r_rubrique_id column
 * @method OperationRubriquesQuery groupByOpId() Group by the op_id column
 * @method OperationRubriquesQuery groupByOpRubriqueLibelle() Group by the op_rubrique_libelle column
 * @method OperationRubriquesQuery groupByOpRubriqueOrder() Group by the op_rubrique_order column
 * @method OperationRubriquesQuery groupByRTvaTypeId() Group by the r_tva_type_id column
 * @method OperationRubriquesQuery groupByRRubTypeId() Group by the r_rub_type_id column
 *
 * @method OperationRubriquesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationRubriquesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationRubriquesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationRubriquesQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method OperationRubriquesQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method OperationRubriquesQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method OperationRubriquesQuery leftJoinRRubriquesType($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRubriquesType relation
 * @method OperationRubriquesQuery rightJoinRRubriquesType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRubriquesType relation
 * @method OperationRubriquesQuery innerJoinRRubriquesType($relationAlias = null) Adds a INNER JOIN clause to the query using the RRubriquesType relation
 *
 * @method OperationRubriquesQuery leftJoinRTvaType($relationAlias = null) Adds a LEFT JOIN clause to the query using the RTvaType relation
 * @method OperationRubriquesQuery rightJoinRTvaType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RTvaType relation
 * @method OperationRubriquesQuery innerJoinRTvaType($relationAlias = null) Adds a INNER JOIN clause to the query using the RTvaType relation
 *
 * @method OperationRubriquesQuery leftJoinOperationPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrestations relation
 * @method OperationRubriquesQuery rightJoinOperationPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrestations relation
 * @method OperationRubriquesQuery innerJoinOperationPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrestations relation
 *
 * @method OperationRubriques findOne(PropelPDO $con = null) Return the first OperationRubriques matching the query
 * @method OperationRubriques findOneOrCreate(PropelPDO $con = null) Return the first OperationRubriques matching the query, or a new OperationRubriques object populated from the query conditions when no match is found
 *
 * @method OperationRubriques findOneByOpRRubriqueId(int $op_r_rubrique_id) Return the first OperationRubriques filtered by the op_r_rubrique_id column
 * @method OperationRubriques findOneByOpId(int $op_id) Return the first OperationRubriques filtered by the op_id column
 * @method OperationRubriques findOneByOpRubriqueLibelle(string $op_rubrique_libelle) Return the first OperationRubriques filtered by the op_rubrique_libelle column
 * @method OperationRubriques findOneByOpRubriqueOrder(int $op_rubrique_order) Return the first OperationRubriques filtered by the op_rubrique_order column
 * @method OperationRubriques findOneByRTvaTypeId(int $r_tva_type_id) Return the first OperationRubriques filtered by the r_tva_type_id column
 * @method OperationRubriques findOneByRRubTypeId(int $r_rub_type_id) Return the first OperationRubriques filtered by the r_rub_type_id column
 *
 * @method array findByOpRubriqueId(int $op_rubrique_id) Return OperationRubriques objects filtered by the op_rubrique_id column
 * @method array findByOpRRubriqueId(int $op_r_rubrique_id) Return OperationRubriques objects filtered by the op_r_rubrique_id column
 * @method array findByOpId(int $op_id) Return OperationRubriques objects filtered by the op_id column
 * @method array findByOpRubriqueLibelle(string $op_rubrique_libelle) Return OperationRubriques objects filtered by the op_rubrique_libelle column
 * @method array findByOpRubriqueOrder(int $op_rubrique_order) Return OperationRubriques objects filtered by the op_rubrique_order column
 * @method array findByRTvaTypeId(int $r_tva_type_id) Return OperationRubriques objects filtered by the r_tva_type_id column
 * @method array findByRRubTypeId(int $r_rub_type_id) Return OperationRubriques objects filtered by the r_rub_type_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationRubriquesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationRubriquesQuery object.
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
            $modelName = 'OperationRubriques';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationRubriquesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationRubriquesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationRubriquesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationRubriquesQuery) {
            return $criteria;
        }
        $query = new OperationRubriquesQuery(null, null, $modelAlias);

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
     * @return   OperationRubriques|OperationRubriques[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationRubriquesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationRubriques A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOpRubriqueId($key, $con = null)
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
     * @return                 OperationRubriques A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_rubrique_id`, `op_r_rubrique_id`, `op_id`, `op_rubrique_libelle`, `op_rubrique_order`, `r_tva_type_id`, `r_rub_type_id` FROM `operation_rubriques` WHERE `op_rubrique_id` = :p0';
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
            $obj = new OperationRubriques();
            $obj->hydrate($row);
            OperationRubriquesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OperationRubriques|OperationRubriques[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationRubriques[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the op_rubrique_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRubriqueId(1234); // WHERE op_rubrique_id = 1234
     * $query->filterByOpRubriqueId(array(12, 34)); // WHERE op_rubrique_id IN (12, 34)
     * $query->filterByOpRubriqueId(array('min' => 12)); // WHERE op_rubrique_id >= 12
     * $query->filterByOpRubriqueId(array('max' => 12)); // WHERE op_rubrique_id <= 12
     * </code>
     *
     * @param     mixed $opRubriqueId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function filterByOpRubriqueId($opRubriqueId = null, $comparison = null)
    {
        if (is_array($opRubriqueId)) {
            $useMinMax = false;
            if (isset($opRubriqueId['min'])) {
                $this->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_ID, $opRubriqueId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opRubriqueId['max'])) {
                $this->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_ID, $opRubriqueId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_ID, $opRubriqueId, $comparison);
    }

    /**
     * Filter the query on the op_r_rubrique_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRRubriqueId(1234); // WHERE op_r_rubrique_id = 1234
     * $query->filterByOpRRubriqueId(array(12, 34)); // WHERE op_r_rubrique_id IN (12, 34)
     * $query->filterByOpRRubriqueId(array('min' => 12)); // WHERE op_r_rubrique_id >= 12
     * $query->filterByOpRRubriqueId(array('max' => 12)); // WHERE op_r_rubrique_id <= 12
     * </code>
     *
     * @param     mixed $opRRubriqueId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function filterByOpRRubriqueId($opRRubriqueId = null, $comparison = null)
    {
        if (is_array($opRRubriqueId)) {
            $useMinMax = false;
            if (isset($opRRubriqueId['min'])) {
                $this->addUsingAlias(OperationRubriquesPeer::OP_R_RUBRIQUE_ID, $opRRubriqueId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opRRubriqueId['max'])) {
                $this->addUsingAlias(OperationRubriquesPeer::OP_R_RUBRIQUE_ID, $opRRubriqueId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationRubriquesPeer::OP_R_RUBRIQUE_ID, $opRRubriqueId, $comparison);
    }

    /**
     * Filter the query on the op_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpId(1234); // WHERE op_id = 1234
     * $query->filterByOpId(array(12, 34)); // WHERE op_id IN (12, 34)
     * $query->filterByOpId(array('min' => 12)); // WHERE op_id >= 12
     * $query->filterByOpId(array('max' => 12)); // WHERE op_id <= 12
     * </code>
     *
     * @see       filterByOperations()
     *
     * @param     mixed $opId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(OperationRubriquesPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(OperationRubriquesPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationRubriquesPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the op_rubrique_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRubriqueLibelle('fooValue');   // WHERE op_rubrique_libelle = 'fooValue'
     * $query->filterByOpRubriqueLibelle('%fooValue%'); // WHERE op_rubrique_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opRubriqueLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function filterByOpRubriqueLibelle($opRubriqueLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opRubriqueLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opRubriqueLibelle)) {
                $opRubriqueLibelle = str_replace('*', '%', $opRubriqueLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_LIBELLE, $opRubriqueLibelle, $comparison);
    }

    /**
     * Filter the query on the op_rubrique_order column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRubriqueOrder(1234); // WHERE op_rubrique_order = 1234
     * $query->filterByOpRubriqueOrder(array(12, 34)); // WHERE op_rubrique_order IN (12, 34)
     * $query->filterByOpRubriqueOrder(array('min' => 12)); // WHERE op_rubrique_order >= 12
     * $query->filterByOpRubriqueOrder(array('max' => 12)); // WHERE op_rubrique_order <= 12
     * </code>
     *
     * @param     mixed $opRubriqueOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function filterByOpRubriqueOrder($opRubriqueOrder = null, $comparison = null)
    {
        if (is_array($opRubriqueOrder)) {
            $useMinMax = false;
            if (isset($opRubriqueOrder['min'])) {
                $this->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_ORDER, $opRubriqueOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opRubriqueOrder['max'])) {
                $this->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_ORDER, $opRubriqueOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_ORDER, $opRubriqueOrder, $comparison);
    }

    /**
     * Filter the query on the r_tva_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaTypeId(1234); // WHERE r_tva_type_id = 1234
     * $query->filterByRTvaTypeId(array(12, 34)); // WHERE r_tva_type_id IN (12, 34)
     * $query->filterByRTvaTypeId(array('min' => 12)); // WHERE r_tva_type_id >= 12
     * $query->filterByRTvaTypeId(array('max' => 12)); // WHERE r_tva_type_id <= 12
     * </code>
     *
     * @see       filterByRTvaType()
     *
     * @param     mixed $rTvaTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function filterByRTvaTypeId($rTvaTypeId = null, $comparison = null)
    {
        if (is_array($rTvaTypeId)) {
            $useMinMax = false;
            if (isset($rTvaTypeId['min'])) {
                $this->addUsingAlias(OperationRubriquesPeer::R_TVA_TYPE_ID, $rTvaTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rTvaTypeId['max'])) {
                $this->addUsingAlias(OperationRubriquesPeer::R_TVA_TYPE_ID, $rTvaTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationRubriquesPeer::R_TVA_TYPE_ID, $rTvaTypeId, $comparison);
    }

    /**
     * Filter the query on the r_rub_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRubTypeId(1234); // WHERE r_rub_type_id = 1234
     * $query->filterByRRubTypeId(array(12, 34)); // WHERE r_rub_type_id IN (12, 34)
     * $query->filterByRRubTypeId(array('min' => 12)); // WHERE r_rub_type_id >= 12
     * $query->filterByRRubTypeId(array('max' => 12)); // WHERE r_rub_type_id <= 12
     * </code>
     *
     * @see       filterByRRubriquesType()
     *
     * @param     mixed $rRubTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function filterByRRubTypeId($rRubTypeId = null, $comparison = null)
    {
        if (is_array($rRubTypeId)) {
            $useMinMax = false;
            if (isset($rRubTypeId['min'])) {
                $this->addUsingAlias(OperationRubriquesPeer::R_RUB_TYPE_ID, $rRubTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRubTypeId['max'])) {
                $this->addUsingAlias(OperationRubriquesPeer::R_RUB_TYPE_ID, $rRubTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationRubriquesPeer::R_RUB_TYPE_ID, $rRubTypeId, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationRubriquesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(OperationRubriquesPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationRubriquesPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
        } else {
            throw new PropelException('filterByOperations() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Operations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function joinOperations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Operations');

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
            $this->addJoinObject($join, 'Operations');
        }

        return $this;
    }

    /**
     * Use the Operations relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Operations', 'OperationsQuery');
    }

    /**
     * Filter the query by a related RRubriquesType object
     *
     * @param   RRubriquesType|PropelObjectCollection $rRubriquesType The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationRubriquesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRubriquesType($rRubriquesType, $comparison = null)
    {
        if ($rRubriquesType instanceof RRubriquesType) {
            return $this
                ->addUsingAlias(OperationRubriquesPeer::R_RUB_TYPE_ID, $rRubriquesType->getRubriqueTypeId(), $comparison);
        } elseif ($rRubriquesType instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationRubriquesPeer::R_RUB_TYPE_ID, $rRubriquesType->toKeyValue('PrimaryKey', 'RubriqueTypeId'), $comparison);
        } else {
            throw new PropelException('filterByRRubriquesType() only accepts arguments of type RRubriquesType or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRubriquesType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function joinRRubriquesType($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRubriquesType');

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
            $this->addJoinObject($join, 'RRubriquesType');
        }

        return $this;
    }

    /**
     * Use the RRubriquesType relation RRubriquesType object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRubriquesTypeQuery A secondary query class using the current class as primary query
     */
    public function useRRubriquesTypeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRRubriquesType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRubriquesType', 'RRubriquesTypeQuery');
    }

    /**
     * Filter the query by a related RTvaType object
     *
     * @param   RTvaType|PropelObjectCollection $rTvaType The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationRubriquesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRTvaType($rTvaType, $comparison = null)
    {
        if ($rTvaType instanceof RTvaType) {
            return $this
                ->addUsingAlias(OperationRubriquesPeer::R_TVA_TYPE_ID, $rTvaType->getRTvaId(), $comparison);
        } elseif ($rTvaType instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationRubriquesPeer::R_TVA_TYPE_ID, $rTvaType->toKeyValue('PrimaryKey', 'RTvaId'), $comparison);
        } else {
            throw new PropelException('filterByRTvaType() only accepts arguments of type RTvaType or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RTvaType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function joinRTvaType($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RTvaType');

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
            $this->addJoinObject($join, 'RTvaType');
        }

        return $this;
    }

    /**
     * Use the RTvaType relation RTvaType object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RTvaTypeQuery A secondary query class using the current class as primary query
     */
    public function useRTvaTypeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRTvaType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RTvaType', 'RTvaTypeQuery');
    }

    /**
     * Filter the query by a related OperationPrestations object
     *
     * @param   OperationPrestations|PropelObjectCollection $operationPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationRubriquesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrestations($operationPrestations, $comparison = null)
    {
        if ($operationPrestations instanceof OperationPrestations) {
            return $this
                ->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_ID, $operationPrestations->getOpPrestRubriId(), $comparison);
        } elseif ($operationPrestations instanceof PropelObjectCollection) {
            return $this
                ->useOperationPrestationsQuery()
                ->filterByPrimaryKeys($operationPrestations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationPrestations() only accepts arguments of type OperationPrestations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationPrestations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function joinOperationPrestations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationPrestations');

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
            $this->addJoinObject($join, 'OperationPrestations');
        }

        return $this;
    }

    /**
     * Use the OperationPrestations relation OperationPrestations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationPrestationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationPrestationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationPrestations', 'OperationPrestationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   OperationRubriques $operationRubriques Object to remove from the list of results
     *
     * @return OperationRubriquesQuery The current query, for fluid interface
     */
    public function prune($operationRubriques = null)
    {
        if ($operationRubriques) {
            $this->addUsingAlias(OperationRubriquesPeer::OP_RUBRIQUE_ID, $operationRubriques->getOpRubriqueId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
