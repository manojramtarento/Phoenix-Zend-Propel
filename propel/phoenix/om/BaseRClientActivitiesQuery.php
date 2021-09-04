<?php


/**
 * Base class that represents a query for the 'r_client_activities' table.
 *
 *
 *
 * @method RClientActivitiesQuery orderByClActivityId($order = Criteria::ASC) Order by the cl_activity_id column
 * @method RClientActivitiesQuery orderByClActivityLibelle($order = Criteria::ASC) Order by the cl_activity_libelle column
 * @method RClientActivitiesQuery orderByOrdre($order = Criteria::ASC) Order by the ordre column
 * @method RClientActivitiesQuery orderByClTypeId($order = Criteria::ASC) Order by the cl_type_id column
 * @method RClientActivitiesQuery orderByParentClActivityId($order = Criteria::ASC) Order by the parent_cl_activity_id column
 * @method RClientActivitiesQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method RClientActivitiesQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method RClientActivitiesQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method RClientActivitiesQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method RClientActivitiesQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method RClientActivitiesQuery groupByClActivityId() Group by the cl_activity_id column
 * @method RClientActivitiesQuery groupByClActivityLibelle() Group by the cl_activity_libelle column
 * @method RClientActivitiesQuery groupByOrdre() Group by the ordre column
 * @method RClientActivitiesQuery groupByClTypeId() Group by the cl_type_id column
 * @method RClientActivitiesQuery groupByParentClActivityId() Group by the parent_cl_activity_id column
 * @method RClientActivitiesQuery groupByUserId() Group by the user_id column
 * @method RClientActivitiesQuery groupByUserModify() Group by the user_modify column
 * @method RClientActivitiesQuery groupByDateCreate() Group by the date_create column
 * @method RClientActivitiesQuery groupByDateModify() Group by the date_modify column
 * @method RClientActivitiesQuery groupByActif() Group by the actif column
 *
 * @method RClientActivitiesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RClientActivitiesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RClientActivitiesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RClientActivities findOne(PropelPDO $con = null) Return the first RClientActivities matching the query
 * @method RClientActivities findOneOrCreate(PropelPDO $con = null) Return the first RClientActivities matching the query, or a new RClientActivities object populated from the query conditions when no match is found
 *
 * @method RClientActivities findOneByClActivityLibelle(string $cl_activity_libelle) Return the first RClientActivities filtered by the cl_activity_libelle column
 * @method RClientActivities findOneByOrdre(int $ordre) Return the first RClientActivities filtered by the ordre column
 * @method RClientActivities findOneByClTypeId(int $cl_type_id) Return the first RClientActivities filtered by the cl_type_id column
 * @method RClientActivities findOneByParentClActivityId(int $parent_cl_activity_id) Return the first RClientActivities filtered by the parent_cl_activity_id column
 * @method RClientActivities findOneByUserId(int $user_id) Return the first RClientActivities filtered by the user_id column
 * @method RClientActivities findOneByUserModify(int $user_modify) Return the first RClientActivities filtered by the user_modify column
 * @method RClientActivities findOneByDateCreate(string $date_create) Return the first RClientActivities filtered by the date_create column
 * @method RClientActivities findOneByDateModify(string $date_modify) Return the first RClientActivities filtered by the date_modify column
 * @method RClientActivities findOneByActif(int $actif) Return the first RClientActivities filtered by the actif column
 *
 * @method array findByClActivityId(int $cl_activity_id) Return RClientActivities objects filtered by the cl_activity_id column
 * @method array findByClActivityLibelle(string $cl_activity_libelle) Return RClientActivities objects filtered by the cl_activity_libelle column
 * @method array findByOrdre(int $ordre) Return RClientActivities objects filtered by the ordre column
 * @method array findByClTypeId(int $cl_type_id) Return RClientActivities objects filtered by the cl_type_id column
 * @method array findByParentClActivityId(int $parent_cl_activity_id) Return RClientActivities objects filtered by the parent_cl_activity_id column
 * @method array findByUserId(int $user_id) Return RClientActivities objects filtered by the user_id column
 * @method array findByUserModify(int $user_modify) Return RClientActivities objects filtered by the user_modify column
 * @method array findByDateCreate(string $date_create) Return RClientActivities objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return RClientActivities objects filtered by the date_modify column
 * @method array findByActif(int $actif) Return RClientActivities objects filtered by the actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRClientActivitiesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRClientActivitiesQuery object.
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
            $modelName = 'RClientActivities';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RClientActivitiesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RClientActivitiesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RClientActivitiesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RClientActivitiesQuery) {
            return $criteria;
        }
        $query = new RClientActivitiesQuery(null, null, $modelAlias);

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
     * @return   RClientActivities|RClientActivities[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RClientActivitiesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RClientActivitiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RClientActivities A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByClActivityId($key, $con = null)
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
     * @return                 RClientActivities A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `cl_activity_id`, `cl_activity_libelle`, `ordre`, `cl_type_id`, `parent_cl_activity_id`, `user_id`, `user_modify`, `date_create`, `date_modify`, `actif` FROM `r_client_activities` WHERE `cl_activity_id` = :p0';
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
            $obj = new RClientActivities();
            $obj->hydrate($row);
            RClientActivitiesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RClientActivities|RClientActivities[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RClientActivities[]|mixed the list of results, formatted by the current formatter
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
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RClientActivitiesPeer::CL_ACTIVITY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RClientActivitiesPeer::CL_ACTIVITY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the cl_activity_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClActivityId(1234); // WHERE cl_activity_id = 1234
     * $query->filterByClActivityId(array(12, 34)); // WHERE cl_activity_id IN (12, 34)
     * $query->filterByClActivityId(array('min' => 12)); // WHERE cl_activity_id >= 12
     * $query->filterByClActivityId(array('max' => 12)); // WHERE cl_activity_id <= 12
     * </code>
     *
     * @param     mixed $clActivityId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByClActivityId($clActivityId = null, $comparison = null)
    {
        if (is_array($clActivityId)) {
            $useMinMax = false;
            if (isset($clActivityId['min'])) {
                $this->addUsingAlias(RClientActivitiesPeer::CL_ACTIVITY_ID, $clActivityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clActivityId['max'])) {
                $this->addUsingAlias(RClientActivitiesPeer::CL_ACTIVITY_ID, $clActivityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RClientActivitiesPeer::CL_ACTIVITY_ID, $clActivityId, $comparison);
    }

    /**
     * Filter the query on the cl_activity_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByClActivityLibelle('fooValue');   // WHERE cl_activity_libelle = 'fooValue'
     * $query->filterByClActivityLibelle('%fooValue%'); // WHERE cl_activity_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clActivityLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByClActivityLibelle($clActivityLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clActivityLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clActivityLibelle)) {
                $clActivityLibelle = str_replace('*', '%', $clActivityLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RClientActivitiesPeer::CL_ACTIVITY_LIBELLE, $clActivityLibelle, $comparison);
    }

    /**
     * Filter the query on the ordre column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdre(1234); // WHERE ordre = 1234
     * $query->filterByOrdre(array(12, 34)); // WHERE ordre IN (12, 34)
     * $query->filterByOrdre(array('min' => 12)); // WHERE ordre >= 12
     * $query->filterByOrdre(array('max' => 12)); // WHERE ordre <= 12
     * </code>
     *
     * @param     mixed $ordre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByOrdre($ordre = null, $comparison = null)
    {
        if (is_array($ordre)) {
            $useMinMax = false;
            if (isset($ordre['min'])) {
                $this->addUsingAlias(RClientActivitiesPeer::ORDRE, $ordre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordre['max'])) {
                $this->addUsingAlias(RClientActivitiesPeer::ORDRE, $ordre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RClientActivitiesPeer::ORDRE, $ordre, $comparison);
    }

    /**
     * Filter the query on the cl_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClTypeId(1234); // WHERE cl_type_id = 1234
     * $query->filterByClTypeId(array(12, 34)); // WHERE cl_type_id IN (12, 34)
     * $query->filterByClTypeId(array('min' => 12)); // WHERE cl_type_id >= 12
     * $query->filterByClTypeId(array('max' => 12)); // WHERE cl_type_id <= 12
     * </code>
     *
     * @param     mixed $clTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByClTypeId($clTypeId = null, $comparison = null)
    {
        if (is_array($clTypeId)) {
            $useMinMax = false;
            if (isset($clTypeId['min'])) {
                $this->addUsingAlias(RClientActivitiesPeer::CL_TYPE_ID, $clTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clTypeId['max'])) {
                $this->addUsingAlias(RClientActivitiesPeer::CL_TYPE_ID, $clTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RClientActivitiesPeer::CL_TYPE_ID, $clTypeId, $comparison);
    }

    /**
     * Filter the query on the parent_cl_activity_id column
     *
     * Example usage:
     * <code>
     * $query->filterByParentClActivityId(1234); // WHERE parent_cl_activity_id = 1234
     * $query->filterByParentClActivityId(array(12, 34)); // WHERE parent_cl_activity_id IN (12, 34)
     * $query->filterByParentClActivityId(array('min' => 12)); // WHERE parent_cl_activity_id >= 12
     * $query->filterByParentClActivityId(array('max' => 12)); // WHERE parent_cl_activity_id <= 12
     * </code>
     *
     * @param     mixed $parentClActivityId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByParentClActivityId($parentClActivityId = null, $comparison = null)
    {
        if (is_array($parentClActivityId)) {
            $useMinMax = false;
            if (isset($parentClActivityId['min'])) {
                $this->addUsingAlias(RClientActivitiesPeer::PARENT_CL_ACTIVITY_ID, $parentClActivityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parentClActivityId['max'])) {
                $this->addUsingAlias(RClientActivitiesPeer::PARENT_CL_ACTIVITY_ID, $parentClActivityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RClientActivitiesPeer::PARENT_CL_ACTIVITY_ID, $parentClActivityId, $comparison);
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
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(RClientActivitiesPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(RClientActivitiesPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RClientActivitiesPeer::USER_ID, $userId, $comparison);
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
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(RClientActivitiesPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(RClientActivitiesPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RClientActivitiesPeer::USER_MODIFY, $userModify, $comparison);
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
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(RClientActivitiesPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(RClientActivitiesPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RClientActivitiesPeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(RClientActivitiesPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(RClientActivitiesPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RClientActivitiesPeer::DATE_MODIFY, $dateModify, $comparison);
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
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(RClientActivitiesPeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(RClientActivitiesPeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RClientActivitiesPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RClientActivities $rClientActivities Object to remove from the list of results
     *
     * @return RClientActivitiesQuery The current query, for fluid interface
     */
    public function prune($rClientActivities = null)
    {
        if ($rClientActivities) {
            $this->addUsingAlias(RClientActivitiesPeer::CL_ACTIVITY_ID, $rClientActivities->getClActivityId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
