<?php


/**
 * Base class that represents a query for the 'operation_statuts' table.
 *
 *
 *
 * @method OperationStatutsQuery orderByHsId($order = Criteria::ASC) Order by the hs_id column
 * @method OperationStatutsQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method OperationStatutsQuery orderByHsOldStatutId($order = Criteria::ASC) Order by the hs_old_statut_id column
 * @method OperationStatutsQuery orderByHsNewStatutId($order = Criteria::ASC) Order by the hs_new_statut_id column
 * @method OperationStatutsQuery orderByHsRefusId($order = Criteria::ASC) Order by the hs_refus_id column
 * @method OperationStatutsQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method OperationStatutsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method OperationStatutsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method OperationStatutsQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method OperationStatutsQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 *
 * @method OperationStatutsQuery groupByHsId() Group by the hs_id column
 * @method OperationStatutsQuery groupByOpId() Group by the op_id column
 * @method OperationStatutsQuery groupByHsOldStatutId() Group by the hs_old_statut_id column
 * @method OperationStatutsQuery groupByHsNewStatutId() Group by the hs_new_statut_id column
 * @method OperationStatutsQuery groupByHsRefusId() Group by the hs_refus_id column
 * @method OperationStatutsQuery groupByActif() Group by the actif column
 * @method OperationStatutsQuery groupByUserId() Group by the user_id column
 * @method OperationStatutsQuery groupByDateCreate() Group by the date_create column
 * @method OperationStatutsQuery groupByUserModify() Group by the user_modify column
 * @method OperationStatutsQuery groupByDateModify() Group by the date_modify column
 *
 * @method OperationStatutsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationStatutsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationStatutsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationStatutsQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method OperationStatutsQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method OperationStatutsQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method OperationStatutsQuery leftJoinOldROperationStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the OldROperationStatus relation
 * @method OperationStatutsQuery rightJoinOldROperationStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OldROperationStatus relation
 * @method OperationStatutsQuery innerJoinOldROperationStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the OldROperationStatus relation
 *
 * @method OperationStatutsQuery leftJoinNewROperationStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the NewROperationStatus relation
 * @method OperationStatutsQuery rightJoinNewROperationStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NewROperationStatus relation
 * @method OperationStatutsQuery innerJoinNewROperationStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the NewROperationStatus relation
 *
 * @method OperationStatutsQuery leftJoinROperationStatutRefus($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationStatutRefus relation
 * @method OperationStatutsQuery rightJoinROperationStatutRefus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationStatutRefus relation
 * @method OperationStatutsQuery innerJoinROperationStatutRefus($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationStatutRefus relation
 *
 * @method OperationStatutsQuery leftJoinUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Users relation
 * @method OperationStatutsQuery rightJoinUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Users relation
 * @method OperationStatutsQuery innerJoinUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the Users relation
 *
 * @method OperationStatuts findOne(PropelPDO $con = null) Return the first OperationStatuts matching the query
 * @method OperationStatuts findOneOrCreate(PropelPDO $con = null) Return the first OperationStatuts matching the query, or a new OperationStatuts object populated from the query conditions when no match is found
 *
 * @method OperationStatuts findOneByOpId(int $op_id) Return the first OperationStatuts filtered by the op_id column
 * @method OperationStatuts findOneByHsOldStatutId(int $hs_old_statut_id) Return the first OperationStatuts filtered by the hs_old_statut_id column
 * @method OperationStatuts findOneByHsNewStatutId(int $hs_new_statut_id) Return the first OperationStatuts filtered by the hs_new_statut_id column
 * @method OperationStatuts findOneByHsRefusId(int $hs_refus_id) Return the first OperationStatuts filtered by the hs_refus_id column
 * @method OperationStatuts findOneByActif(int $actif) Return the first OperationStatuts filtered by the actif column
 * @method OperationStatuts findOneByUserId(int $user_id) Return the first OperationStatuts filtered by the user_id column
 * @method OperationStatuts findOneByDateCreate(string $date_create) Return the first OperationStatuts filtered by the date_create column
 * @method OperationStatuts findOneByUserModify(int $user_modify) Return the first OperationStatuts filtered by the user_modify column
 * @method OperationStatuts findOneByDateModify(string $date_modify) Return the first OperationStatuts filtered by the date_modify column
 *
 * @method array findByHsId(int $hs_id) Return OperationStatuts objects filtered by the hs_id column
 * @method array findByOpId(int $op_id) Return OperationStatuts objects filtered by the op_id column
 * @method array findByHsOldStatutId(int $hs_old_statut_id) Return OperationStatuts objects filtered by the hs_old_statut_id column
 * @method array findByHsNewStatutId(int $hs_new_statut_id) Return OperationStatuts objects filtered by the hs_new_statut_id column
 * @method array findByHsRefusId(int $hs_refus_id) Return OperationStatuts objects filtered by the hs_refus_id column
 * @method array findByActif(int $actif) Return OperationStatuts objects filtered by the actif column
 * @method array findByUserId(int $user_id) Return OperationStatuts objects filtered by the user_id column
 * @method array findByDateCreate(string $date_create) Return OperationStatuts objects filtered by the date_create column
 * @method array findByUserModify(int $user_modify) Return OperationStatuts objects filtered by the user_modify column
 * @method array findByDateModify(string $date_modify) Return OperationStatuts objects filtered by the date_modify column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationStatutsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationStatutsQuery object.
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
            $modelName = 'OperationStatuts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationStatutsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationStatutsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationStatutsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationStatutsQuery) {
            return $criteria;
        }
        $query = new OperationStatutsQuery(null, null, $modelAlias);

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
     * @return   OperationStatuts|OperationStatuts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationStatutsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByHsId($key, $con = null)
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
     * @return                 OperationStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `hs_id`, `op_id`, `hs_old_statut_id`, `hs_new_statut_id`, `hs_refus_id`, `actif`, `user_id`, `date_create`, `user_modify`, `date_modify` FROM `operation_statuts` WHERE `hs_id` = :p0';
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
            $obj = new OperationStatuts();
            $obj->hydrate($row);
            OperationStatutsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OperationStatuts|OperationStatuts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationStatuts[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationStatutsPeer::HS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationStatutsPeer::HS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the hs_id column
     *
     * Example usage:
     * <code>
     * $query->filterByHsId(1234); // WHERE hs_id = 1234
     * $query->filterByHsId(array(12, 34)); // WHERE hs_id IN (12, 34)
     * $query->filterByHsId(array('min' => 12)); // WHERE hs_id >= 12
     * $query->filterByHsId(array('max' => 12)); // WHERE hs_id <= 12
     * </code>
     *
     * @param     mixed $hsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByHsId($hsId = null, $comparison = null)
    {
        if (is_array($hsId)) {
            $useMinMax = false;
            if (isset($hsId['min'])) {
                $this->addUsingAlias(OperationStatutsPeer::HS_ID, $hsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hsId['max'])) {
                $this->addUsingAlias(OperationStatutsPeer::HS_ID, $hsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationStatutsPeer::HS_ID, $hsId, $comparison);
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
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(OperationStatutsPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(OperationStatutsPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationStatutsPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the hs_old_statut_id column
     *
     * Example usage:
     * <code>
     * $query->filterByHsOldStatutId(1234); // WHERE hs_old_statut_id = 1234
     * $query->filterByHsOldStatutId(array(12, 34)); // WHERE hs_old_statut_id IN (12, 34)
     * $query->filterByHsOldStatutId(array('min' => 12)); // WHERE hs_old_statut_id >= 12
     * $query->filterByHsOldStatutId(array('max' => 12)); // WHERE hs_old_statut_id <= 12
     * </code>
     *
     * @see       filterByOldROperationStatus()
     *
     * @param     mixed $hsOldStatutId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByHsOldStatutId($hsOldStatutId = null, $comparison = null)
    {
        if (is_array($hsOldStatutId)) {
            $useMinMax = false;
            if (isset($hsOldStatutId['min'])) {
                $this->addUsingAlias(OperationStatutsPeer::HS_OLD_STATUT_ID, $hsOldStatutId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hsOldStatutId['max'])) {
                $this->addUsingAlias(OperationStatutsPeer::HS_OLD_STATUT_ID, $hsOldStatutId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationStatutsPeer::HS_OLD_STATUT_ID, $hsOldStatutId, $comparison);
    }

    /**
     * Filter the query on the hs_new_statut_id column
     *
     * Example usage:
     * <code>
     * $query->filterByHsNewStatutId(1234); // WHERE hs_new_statut_id = 1234
     * $query->filterByHsNewStatutId(array(12, 34)); // WHERE hs_new_statut_id IN (12, 34)
     * $query->filterByHsNewStatutId(array('min' => 12)); // WHERE hs_new_statut_id >= 12
     * $query->filterByHsNewStatutId(array('max' => 12)); // WHERE hs_new_statut_id <= 12
     * </code>
     *
     * @see       filterByNewROperationStatus()
     *
     * @param     mixed $hsNewStatutId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByHsNewStatutId($hsNewStatutId = null, $comparison = null)
    {
        if (is_array($hsNewStatutId)) {
            $useMinMax = false;
            if (isset($hsNewStatutId['min'])) {
                $this->addUsingAlias(OperationStatutsPeer::HS_NEW_STATUT_ID, $hsNewStatutId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hsNewStatutId['max'])) {
                $this->addUsingAlias(OperationStatutsPeer::HS_NEW_STATUT_ID, $hsNewStatutId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationStatutsPeer::HS_NEW_STATUT_ID, $hsNewStatutId, $comparison);
    }

    /**
     * Filter the query on the hs_refus_id column
     *
     * Example usage:
     * <code>
     * $query->filterByHsRefusId(1234); // WHERE hs_refus_id = 1234
     * $query->filterByHsRefusId(array(12, 34)); // WHERE hs_refus_id IN (12, 34)
     * $query->filterByHsRefusId(array('min' => 12)); // WHERE hs_refus_id >= 12
     * $query->filterByHsRefusId(array('max' => 12)); // WHERE hs_refus_id <= 12
     * </code>
     *
     * @see       filterByROperationStatutRefus()
     *
     * @param     mixed $hsRefusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByHsRefusId($hsRefusId = null, $comparison = null)
    {
        if (is_array($hsRefusId)) {
            $useMinMax = false;
            if (isset($hsRefusId['min'])) {
                $this->addUsingAlias(OperationStatutsPeer::HS_REFUS_ID, $hsRefusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hsRefusId['max'])) {
                $this->addUsingAlias(OperationStatutsPeer::HS_REFUS_ID, $hsRefusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationStatutsPeer::HS_REFUS_ID, $hsRefusId, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(1234); // WHERE actif = 1234
     * $query->filterByActif(array(12, 34)); // WHERE actif IN (12, 34)
     * $query->filterByActif(array('min' => 12)); // WHERE actif >= 12
     * $query->filterByActif(array('max' => 12)); // WHERE actif <= 12
     * </code>
     *
     * @param     mixed $actif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(OperationStatutsPeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(OperationStatutsPeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationStatutsPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @see       filterByUsers()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(OperationStatutsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(OperationStatutsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationStatutsPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the date_create column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreate('2011-03-14'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate('now'); // WHERE date_create = '2011-03-14'
     * $query->filterByDateCreate(array('max' => 'yesterday')); // WHERE date_create < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(OperationStatutsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(OperationStatutsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationStatutsPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query on the user_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByUserModify(1234); // WHERE user_modify = 1234
     * $query->filterByUserModify(array(12, 34)); // WHERE user_modify IN (12, 34)
     * $query->filterByUserModify(array('min' => 12)); // WHERE user_modify >= 12
     * $query->filterByUserModify(array('max' => 12)); // WHERE user_modify <= 12
     * </code>
     *
     * @param     mixed $userModify The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(OperationStatutsPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(OperationStatutsPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationStatutsPeer::USER_MODIFY, $userModify, $comparison);
    }

    /**
     * Filter the query on the date_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModify('2011-03-14'); // WHERE date_modify = '2011-03-14'
     * $query->filterByDateModify('now'); // WHERE date_modify = '2011-03-14'
     * $query->filterByDateModify(array('max' => 'yesterday')); // WHERE date_modify < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModify The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(OperationStatutsPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(OperationStatutsPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationStatutsPeer::DATE_MODIFY, $dateModify, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(OperationStatutsPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationStatutsPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return OperationStatutsQuery The current query, for fluid interface
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
     * Filter the query by a related ROperationStatus object
     *
     * @param   ROperationStatus|PropelObjectCollection $rOperationStatus The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOldROperationStatus($rOperationStatus, $comparison = null)
    {
        if ($rOperationStatus instanceof ROperationStatus) {
            return $this
                ->addUsingAlias(OperationStatutsPeer::HS_OLD_STATUT_ID, $rOperationStatus->getOsId(), $comparison);
        } elseif ($rOperationStatus instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationStatutsPeer::HS_OLD_STATUT_ID, $rOperationStatus->toKeyValue('PrimaryKey', 'OsId'), $comparison);
        } else {
            throw new PropelException('filterByOldROperationStatus() only accepts arguments of type ROperationStatus or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OldROperationStatus relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function joinOldROperationStatus($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OldROperationStatus');

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
            $this->addJoinObject($join, 'OldROperationStatus');
        }

        return $this;
    }

    /**
     * Use the OldROperationStatus relation ROperationStatus object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationStatusQuery A secondary query class using the current class as primary query
     */
    public function useOldROperationStatusQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOldROperationStatus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OldROperationStatus', 'ROperationStatusQuery');
    }

    /**
     * Filter the query by a related ROperationStatus object
     *
     * @param   ROperationStatus|PropelObjectCollection $rOperationStatus The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNewROperationStatus($rOperationStatus, $comparison = null)
    {
        if ($rOperationStatus instanceof ROperationStatus) {
            return $this
                ->addUsingAlias(OperationStatutsPeer::HS_NEW_STATUT_ID, $rOperationStatus->getOsId(), $comparison);
        } elseif ($rOperationStatus instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationStatutsPeer::HS_NEW_STATUT_ID, $rOperationStatus->toKeyValue('PrimaryKey', 'OsId'), $comparison);
        } else {
            throw new PropelException('filterByNewROperationStatus() only accepts arguments of type ROperationStatus or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the NewROperationStatus relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function joinNewROperationStatus($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('NewROperationStatus');

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
            $this->addJoinObject($join, 'NewROperationStatus');
        }

        return $this;
    }

    /**
     * Use the NewROperationStatus relation ROperationStatus object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationStatusQuery A secondary query class using the current class as primary query
     */
    public function useNewROperationStatusQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinNewROperationStatus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'NewROperationStatus', 'ROperationStatusQuery');
    }

    /**
     * Filter the query by a related ROperationStatutRefus object
     *
     * @param   ROperationStatutRefus|PropelObjectCollection $rOperationStatutRefus The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationStatutRefus($rOperationStatutRefus, $comparison = null)
    {
        if ($rOperationStatutRefus instanceof ROperationStatutRefus) {
            return $this
                ->addUsingAlias(OperationStatutsPeer::HS_REFUS_ID, $rOperationStatutRefus->getROpStatutRefusId(), $comparison);
        } elseif ($rOperationStatutRefus instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationStatutsPeer::HS_REFUS_ID, $rOperationStatutRefus->toKeyValue('PrimaryKey', 'ROpStatutRefusId'), $comparison);
        } else {
            throw new PropelException('filterByROperationStatutRefus() only accepts arguments of type ROperationStatutRefus or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationStatutRefus relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function joinROperationStatutRefus($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationStatutRefus');

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
            $this->addJoinObject($join, 'ROperationStatutRefus');
        }

        return $this;
    }

    /**
     * Use the ROperationStatutRefus relation ROperationStatutRefus object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationStatutRefusQuery A secondary query class using the current class as primary query
     */
    public function useROperationStatutRefusQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationStatutRefus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationStatutRefus', 'ROperationStatutRefusQuery');
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationStatutsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsers($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(OperationStatutsPeer::USER_ID, $users->getUserId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationStatutsPeer::USER_ID, $users->toKeyValue('PrimaryKey', 'UserId'), $comparison);
        } else {
            throw new PropelException('filterByUsers() only accepts arguments of type Users or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Users relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function joinUsers($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Users');

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
            $this->addJoinObject($join, 'Users');
        }

        return $this;
    }

    /**
     * Use the Users relation Users object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsersQuery A secondary query class using the current class as primary query
     */
    public function useUsersQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Users', 'UsersQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   OperationStatuts $operationStatuts Object to remove from the list of results
     *
     * @return OperationStatutsQuery The current query, for fluid interface
     */
    public function prune($operationStatuts = null)
    {
        if ($operationStatuts) {
            $this->addUsingAlias(OperationStatutsPeer::HS_ID, $operationStatuts->getHsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
