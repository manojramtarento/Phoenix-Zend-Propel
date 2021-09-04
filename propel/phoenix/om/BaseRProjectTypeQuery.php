<?php


/**
 * Base class that represents a query for the 'r_project_type' table.
 *
 *
 *
 * @method RProjectTypeQuery orderByRProjectTypeId($order = Criteria::ASC) Order by the r_project_type_id column
 * @method RProjectTypeQuery orderByRProjectTypeLibelle($order = Criteria::ASC) Order by the r_project_type_libelle column
 * @method RProjectTypeQuery orderByRProjectTypeActif($order = Criteria::ASC) Order by the r_project_type_actif column
 * @method RProjectTypeQuery orderByr_project_type_order($order = Criteria::ASC) Order by the r_project_type_order column
 *
 * @method RProjectTypeQuery groupByRProjectTypeId() Group by the r_project_type_id column
 * @method RProjectTypeQuery groupByRProjectTypeLibelle() Group by the r_project_type_libelle column
 * @method RProjectTypeQuery groupByRProjectTypeActif() Group by the r_project_type_actif column
 * @method RProjectTypeQuery groupByr_project_type_order() Group by the r_project_type_order column
 *
 * @method RProjectTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RProjectTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RProjectTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RProjectType findOne(PropelPDO $con = null) Return the first RProjectType matching the query
 * @method RProjectType findOneOrCreate(PropelPDO $con = null) Return the first RProjectType matching the query, or a new RProjectType object populated from the query conditions when no match is found
 *
 * @method RProjectType findOneByRProjectTypeLibelle(string $r_project_type_libelle) Return the first RProjectType filtered by the r_project_type_libelle column
 * @method RProjectType findOneByRProjectTypeActif(int $r_project_type_actif) Return the first RProjectType filtered by the r_project_type_actif column
 * @method RProjectType findOneByr_project_type_order(int $r_project_type_order) Return the first RProjectType filtered by the r_project_type_order column
 *
 * @method array findByRProjectTypeId(int $r_project_type_id) Return RProjectType objects filtered by the r_project_type_id column
 * @method array findByRProjectTypeLibelle(string $r_project_type_libelle) Return RProjectType objects filtered by the r_project_type_libelle column
 * @method array findByRProjectTypeActif(int $r_project_type_actif) Return RProjectType objects filtered by the r_project_type_actif column
 * @method array findByr_project_type_order(int $r_project_type_order) Return RProjectType objects filtered by the r_project_type_order column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRProjectTypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRProjectTypeQuery object.
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
            $modelName = 'RProjectType';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RProjectTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RProjectTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RProjectTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RProjectTypeQuery) {
            return $criteria;
        }
        $query = new RProjectTypeQuery(null, null, $modelAlias);

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
     * @return   RProjectType|RProjectType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RProjectTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RProjectTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RProjectType A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRProjectTypeId($key, $con = null)
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
     * @return                 RProjectType A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_project_type_id`, `r_project_type_libelle`, `r_project_type_actif`, `r_project_type_order` FROM `r_project_type` WHERE `r_project_type_id` = :p0';
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
            $obj = new RProjectType();
            $obj->hydrate($row);
            RProjectTypePeer::addInstanceToPool($obj, (string) $key);
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
     * @return RProjectType|RProjectType[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RProjectType[]|mixed the list of results, formatted by the current formatter
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
     * @return RProjectTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RProjectTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_project_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRProjectTypeId(1234); // WHERE r_project_type_id = 1234
     * $query->filterByRProjectTypeId(array(12, 34)); // WHERE r_project_type_id IN (12, 34)
     * $query->filterByRProjectTypeId(array('min' => 12)); // WHERE r_project_type_id >= 12
     * $query->filterByRProjectTypeId(array('max' => 12)); // WHERE r_project_type_id <= 12
     * </code>
     *
     * @param     mixed $rProjectTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RProjectTypeQuery The current query, for fluid interface
     */
    public function filterByRProjectTypeId($rProjectTypeId = null, $comparison = null)
    {
        if (is_array($rProjectTypeId)) {
            $useMinMax = false;
            if (isset($rProjectTypeId['min'])) {
                $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ID, $rProjectTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rProjectTypeId['max'])) {
                $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ID, $rProjectTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ID, $rProjectTypeId, $comparison);
    }

    /**
     * Filter the query on the r_project_type_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRProjectTypeLibelle('fooValue');   // WHERE r_project_type_libelle = 'fooValue'
     * $query->filterByRProjectTypeLibelle('%fooValue%'); // WHERE r_project_type_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rProjectTypeLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RProjectTypeQuery The current query, for fluid interface
     */
    public function filterByRProjectTypeLibelle($rProjectTypeLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rProjectTypeLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rProjectTypeLibelle)) {
                $rProjectTypeLibelle = str_replace('*', '%', $rProjectTypeLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_LIBELLE, $rProjectTypeLibelle, $comparison);
    }

    /**
     * Filter the query on the r_project_type_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRProjectTypeActif(1234); // WHERE r_project_type_actif = 1234
     * $query->filterByRProjectTypeActif(array(12, 34)); // WHERE r_project_type_actif IN (12, 34)
     * $query->filterByRProjectTypeActif(array('min' => 12)); // WHERE r_project_type_actif >= 12
     * $query->filterByRProjectTypeActif(array('max' => 12)); // WHERE r_project_type_actif <= 12
     * </code>
     *
     * @param     mixed $rProjectTypeActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RProjectTypeQuery The current query, for fluid interface
     */
    public function filterByRProjectTypeActif($rProjectTypeActif = null, $comparison = null)
    {
        if (is_array($rProjectTypeActif)) {
            $useMinMax = false;
            if (isset($rProjectTypeActif['min'])) {
                $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ACTIF, $rProjectTypeActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rProjectTypeActif['max'])) {
                $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ACTIF, $rProjectTypeActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ACTIF, $rProjectTypeActif, $comparison);
    }

    /**
     * Filter the query on the r_project_type_order column
     *
     * Example usage:
     * <code>
     * $query->filterByr_project_type_order(1234); // WHERE r_project_type_order = 1234
     * $query->filterByr_project_type_order(array(12, 34)); // WHERE r_project_type_order IN (12, 34)
     * $query->filterByr_project_type_order(array('min' => 12)); // WHERE r_project_type_order >= 12
     * $query->filterByr_project_type_order(array('max' => 12)); // WHERE r_project_type_order <= 12
     * </code>
     *
     * @param     mixed $r_project_type_order The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RProjectTypeQuery The current query, for fluid interface
     */
    public function filterByr_project_type_order($r_project_type_order = null, $comparison = null)
    {
        if (is_array($r_project_type_order)) {
            $useMinMax = false;
            if (isset($r_project_type_order['min'])) {
                $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ORDER, $r_project_type_order['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($r_project_type_order['max'])) {
                $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ORDER, $r_project_type_order['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ORDER, $r_project_type_order, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RProjectType $rProjectType Object to remove from the list of results
     *
     * @return RProjectTypeQuery The current query, for fluid interface
     */
    public function prune($rProjectType = null)
    {
        if ($rProjectType) {
            $this->addUsingAlias(RProjectTypePeer::R_PROJECT_TYPE_ID, $rProjectType->getRProjectTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
