<?php


/**
 * Base class that represents a query for the 'r_operation_type_sub' table.
 *
 *
 *
 * @method ROperationTypeSubQuery orderByOstId($order = Criteria::ASC) Order by the ost_id column
 * @method ROperationTypeSubQuery orderByOstOtId($order = Criteria::ASC) Order by the ost_ot_id column
 * @method ROperationTypeSubQuery orderByOstLibelle($order = Criteria::ASC) Order by the ost_libelle column
 * @method ROperationTypeSubQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method ROperationTypeSubQuery orderByUserModiy($order = Criteria::ASC) Order by the user_modiy column
 * @method ROperationTypeSubQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method ROperationTypeSubQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method ROperationTypeSubQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method ROperationTypeSubQuery orderByOrd($order = Criteria::ASC) Order by the ord column
 *
 * @method ROperationTypeSubQuery groupByOstId() Group by the ost_id column
 * @method ROperationTypeSubQuery groupByOstOtId() Group by the ost_ot_id column
 * @method ROperationTypeSubQuery groupByOstLibelle() Group by the ost_libelle column
 * @method ROperationTypeSubQuery groupByUserId() Group by the user_id column
 * @method ROperationTypeSubQuery groupByUserModiy() Group by the user_modiy column
 * @method ROperationTypeSubQuery groupByDateCreate() Group by the date_create column
 * @method ROperationTypeSubQuery groupByDateModify() Group by the date_modify column
 * @method ROperationTypeSubQuery groupByActif() Group by the actif column
 * @method ROperationTypeSubQuery groupByOrd() Group by the ord column
 *
 * @method ROperationTypeSubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeSubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeSubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeSubQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ROperationTypeSubQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ROperationTypeSubQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ROperationTypeSubQuery leftJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 * @method ROperationTypeSubQuery rightJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 * @method ROperationTypeSubQuery innerJoinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
 *
 * @method ROperationTypeSub findOne(PropelPDO $con = null) Return the first ROperationTypeSub matching the query
 * @method ROperationTypeSub findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeSub matching the query, or a new ROperationTypeSub object populated from the query conditions when no match is found
 *
 * @method ROperationTypeSub findOneByOstOtId(int $ost_ot_id) Return the first ROperationTypeSub filtered by the ost_ot_id column
 * @method ROperationTypeSub findOneByOstLibelle(string $ost_libelle) Return the first ROperationTypeSub filtered by the ost_libelle column
 * @method ROperationTypeSub findOneByUserId(int $user_id) Return the first ROperationTypeSub filtered by the user_id column
 * @method ROperationTypeSub findOneByUserModiy(int $user_modiy) Return the first ROperationTypeSub filtered by the user_modiy column
 * @method ROperationTypeSub findOneByDateCreate(string $date_create) Return the first ROperationTypeSub filtered by the date_create column
 * @method ROperationTypeSub findOneByDateModify(string $date_modify) Return the first ROperationTypeSub filtered by the date_modify column
 * @method ROperationTypeSub findOneByActif(boolean $actif) Return the first ROperationTypeSub filtered by the actif column
 * @method ROperationTypeSub findOneByOrd(int $ord) Return the first ROperationTypeSub filtered by the ord column
 *
 * @method array findByOstId(int $ost_id) Return ROperationTypeSub objects filtered by the ost_id column
 * @method array findByOstOtId(int $ost_ot_id) Return ROperationTypeSub objects filtered by the ost_ot_id column
 * @method array findByOstLibelle(string $ost_libelle) Return ROperationTypeSub objects filtered by the ost_libelle column
 * @method array findByUserId(int $user_id) Return ROperationTypeSub objects filtered by the user_id column
 * @method array findByUserModiy(int $user_modiy) Return ROperationTypeSub objects filtered by the user_modiy column
 * @method array findByDateCreate(string $date_create) Return ROperationTypeSub objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return ROperationTypeSub objects filtered by the date_modify column
 * @method array findByActif(boolean $actif) Return ROperationTypeSub objects filtered by the actif column
 * @method array findByOrd(int $ord) Return ROperationTypeSub objects filtered by the ord column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeSubQuery object.
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
            $modelName = 'ROperationTypeSub';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeSubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeSubQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeSubQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeSubQuery) {
            return $criteria;
        }
        $query = new ROperationTypeSubQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeSub|ROperationTypeSub[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeSubPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeSub A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOstId($key, $con = null)
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
     * @return                 ROperationTypeSub A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ost_id`, `ost_ot_id`, `ost_libelle`, `user_id`, `user_modiy`, `date_create`, `date_modify`, `actif`, `ord` FROM `r_operation_type_sub` WHERE `ost_id` = :p0';
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
            $obj = new ROperationTypeSub();
            $obj->hydrate($row);
            ROperationTypeSubPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeSub|ROperationTypeSub[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeSub[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeSubPeer::OST_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeSubPeer::OST_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ost_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstId(1234); // WHERE ost_id = 1234
     * $query->filterByOstId(array(12, 34)); // WHERE ost_id IN (12, 34)
     * $query->filterByOstId(array('min' => 12)); // WHERE ost_id >= 12
     * $query->filterByOstId(array('max' => 12)); // WHERE ost_id <= 12
     * </code>
     *
     * @param     mixed $ostId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByOstId($ostId = null, $comparison = null)
    {
        if (is_array($ostId)) {
            $useMinMax = false;
            if (isset($ostId['min'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::OST_ID, $ostId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostId['max'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::OST_ID, $ostId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubPeer::OST_ID, $ostId, $comparison);
    }

    /**
     * Filter the query on the ost_ot_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstOtId(1234); // WHERE ost_ot_id = 1234
     * $query->filterByOstOtId(array(12, 34)); // WHERE ost_ot_id IN (12, 34)
     * $query->filterByOstOtId(array('min' => 12)); // WHERE ost_ot_id >= 12
     * $query->filterByOstOtId(array('max' => 12)); // WHERE ost_ot_id <= 12
     * </code>
     *
     * @param     mixed $ostOtId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByOstOtId($ostOtId = null, $comparison = null)
    {
        if (is_array($ostOtId)) {
            $useMinMax = false;
            if (isset($ostOtId['min'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::OST_OT_ID, $ostOtId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostOtId['max'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::OST_OT_ID, $ostOtId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubPeer::OST_OT_ID, $ostOtId, $comparison);
    }

    /**
     * Filter the query on the ost_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOstLibelle('fooValue');   // WHERE ost_libelle = 'fooValue'
     * $query->filterByOstLibelle('%fooValue%'); // WHERE ost_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ostLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByOstLibelle($ostLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ostLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ostLibelle)) {
                $ostLibelle = str_replace('*', '%', $ostLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubPeer::OST_LIBELLE, $ostLibelle, $comparison);
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
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the user_modiy column
     *
     * Example usage:
     * <code>
     * $query->filterByUserModiy(1234); // WHERE user_modiy = 1234
     * $query->filterByUserModiy(array(12, 34)); // WHERE user_modiy IN (12, 34)
     * $query->filterByUserModiy(array('min' => 12)); // WHERE user_modiy >= 12
     * $query->filterByUserModiy(array('max' => 12)); // WHERE user_modiy <= 12
     * </code>
     *
     * @param     mixed $userModiy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByUserModiy($userModiy = null, $comparison = null)
    {
        if (is_array($userModiy)) {
            $useMinMax = false;
            if (isset($userModiy['min'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::USER_MODIY, $userModiy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModiy['max'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::USER_MODIY, $userModiy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubPeer::USER_MODIY, $userModiy, $comparison);
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
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubPeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubPeer::DATE_MODIFY, $dateModify, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(true); // WHERE actif = true
     * $query->filterByActif('yes'); // WHERE actif = true
     * </code>
     *
     * @param     boolean|string $actif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ROperationTypeSubPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the ord column
     *
     * Example usage:
     * <code>
     * $query->filterByOrd(1234); // WHERE ord = 1234
     * $query->filterByOrd(array(12, 34)); // WHERE ord IN (12, 34)
     * $query->filterByOrd(array('min' => 12)); // WHERE ord >= 12
     * $query->filterByOrd(array('max' => 12)); // WHERE ord <= 12
     * </code>
     *
     * @param     mixed $ord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function filterByOrd($ord = null, $comparison = null)
    {
        if (is_array($ord)) {
            $useMinMax = false;
            if (isset($ord['min'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::ORD, $ord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ord['max'])) {
                $this->addUsingAlias(ROperationTypeSubPeer::ORD, $ord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubPeer::ORD, $ord, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ROperationTypeSubPeer::OST_ID, $operations->getOpSubtypeId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
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
     * @return ROperationTypeSubQuery The current query, for fluid interface
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
     * Filter the query by a related LnkROperationTypeSubTemplateMediasUniverses object
     *
     * @param   LnkROperationTypeSubTemplateMediasUniverses|PropelObjectCollection $lnkROperationTypeSubTemplateMediasUniverses  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkROperationTypeSubTemplateMediasUniverses($lnkROperationTypeSubTemplateMediasUniverses, $comparison = null)
    {
        if ($lnkROperationTypeSubTemplateMediasUniverses instanceof LnkROperationTypeSubTemplateMediasUniverses) {
            return $this
                ->addUsingAlias(ROperationTypeSubPeer::OST_ID, $lnkROperationTypeSubTemplateMediasUniverses->getLnkROperationTypeSubTemplateMediaUniverseOstId(), $comparison);
        } elseif ($lnkROperationTypeSubTemplateMediasUniverses instanceof PropelObjectCollection) {
            return $this
                ->useLnkROperationTypeSubTemplateMediasUniversesQuery()
                ->filterByPrimaryKeys($lnkROperationTypeSubTemplateMediasUniverses->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkROperationTypeSubTemplateMediasUniverses() only accepts arguments of type LnkROperationTypeSubTemplateMediasUniverses or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkROperationTypeSubTemplateMediasUniverses relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function joinLnkROperationTypeSubTemplateMediasUniverses($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkROperationTypeSubTemplateMediasUniverses');

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
            $this->addJoinObject($join, 'LnkROperationTypeSubTemplateMediasUniverses');
        }

        return $this;
    }

    /**
     * Use the LnkROperationTypeSubTemplateMediasUniverses relation LnkROperationTypeSubTemplateMediasUniverses object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkROperationTypeSubTemplateMediasUniversesQuery A secondary query class using the current class as primary query
     */
    public function useLnkROperationTypeSubTemplateMediasUniversesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLnkROperationTypeSubTemplateMediasUniverses($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkROperationTypeSubTemplateMediasUniverses', 'LnkROperationTypeSubTemplateMediasUniversesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTypeSub $rOperationTypeSub Object to remove from the list of results
     *
     * @return ROperationTypeSubQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeSub = null)
    {
        if ($rOperationTypeSub) {
            $this->addUsingAlias(ROperationTypeSubPeer::OST_ID, $rOperationTypeSub->getOstId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
