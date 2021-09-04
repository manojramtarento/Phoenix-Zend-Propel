<?php


/**
 * Base class that represents a query for the 'r_prestation_categories' table.
 *
 *
 *
 * @method RPrestationCategoriesQuery orderByRPrestaCatId($order = Criteria::ASC) Order by the r_presta_cat_id column
 * @method RPrestationCategoriesQuery orderByRPrestaCatLibelle($order = Criteria::ASC) Order by the r_presta_cat_libelle column
 *
 * @method RPrestationCategoriesQuery groupByRPrestaCatId() Group by the r_presta_cat_id column
 * @method RPrestationCategoriesQuery groupByRPrestaCatLibelle() Group by the r_presta_cat_libelle column
 *
 * @method RPrestationCategoriesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RPrestationCategoriesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RPrestationCategoriesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RPrestationCategories findOne(PropelPDO $con = null) Return the first RPrestationCategories matching the query
 * @method RPrestationCategories findOneOrCreate(PropelPDO $con = null) Return the first RPrestationCategories matching the query, or a new RPrestationCategories object populated from the query conditions when no match is found
 *
 * @method RPrestationCategories findOneByRPrestaCatLibelle(string $r_presta_cat_libelle) Return the first RPrestationCategories filtered by the r_presta_cat_libelle column
 *
 * @method array findByRPrestaCatId(int $r_presta_cat_id) Return RPrestationCategories objects filtered by the r_presta_cat_id column
 * @method array findByRPrestaCatLibelle(string $r_presta_cat_libelle) Return RPrestationCategories objects filtered by the r_presta_cat_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPrestationCategoriesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRPrestationCategoriesQuery object.
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
            $modelName = 'RPrestationCategories';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RPrestationCategoriesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RPrestationCategoriesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RPrestationCategoriesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RPrestationCategoriesQuery) {
            return $criteria;
        }
        $query = new RPrestationCategoriesQuery(null, null, $modelAlias);

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
     * @return   RPrestationCategories|RPrestationCategories[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RPrestationCategoriesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RPrestationCategoriesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RPrestationCategories A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRPrestaCatId($key, $con = null)
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
     * @return                 RPrestationCategories A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_presta_cat_id`, `r_presta_cat_libelle` FROM `r_prestation_categories` WHERE `r_presta_cat_id` = :p0';
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
            $obj = new RPrestationCategories();
            $obj->hydrate($row);
            RPrestationCategoriesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RPrestationCategories|RPrestationCategories[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RPrestationCategories[]|mixed the list of results, formatted by the current formatter
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
     * @return RPrestationCategoriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RPrestationCategoriesPeer::R_PRESTA_CAT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RPrestationCategoriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RPrestationCategoriesPeer::R_PRESTA_CAT_ID, $keys, Criteria::IN);
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
     * @return RPrestationCategoriesQuery The current query, for fluid interface
     */
    public function filterByRPrestaCatId($rPrestaCatId = null, $comparison = null)
    {
        if (is_array($rPrestaCatId)) {
            $useMinMax = false;
            if (isset($rPrestaCatId['min'])) {
                $this->addUsingAlias(RPrestationCategoriesPeer::R_PRESTA_CAT_ID, $rPrestaCatId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPrestaCatId['max'])) {
                $this->addUsingAlias(RPrestationCategoriesPeer::R_PRESTA_CAT_ID, $rPrestaCatId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationCategoriesPeer::R_PRESTA_CAT_ID, $rPrestaCatId, $comparison);
    }

    /**
     * Filter the query on the r_presta_cat_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPrestaCatLibelle('fooValue');   // WHERE r_presta_cat_libelle = 'fooValue'
     * $query->filterByRPrestaCatLibelle('%fooValue%'); // WHERE r_presta_cat_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPrestaCatLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationCategoriesQuery The current query, for fluid interface
     */
    public function filterByRPrestaCatLibelle($rPrestaCatLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPrestaCatLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPrestaCatLibelle)) {
                $rPrestaCatLibelle = str_replace('*', '%', $rPrestaCatLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPrestationCategoriesPeer::R_PRESTA_CAT_LIBELLE, $rPrestaCatLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RPrestationCategories $rPrestationCategories Object to remove from the list of results
     *
     * @return RPrestationCategoriesQuery The current query, for fluid interface
     */
    public function prune($rPrestationCategories = null)
    {
        if ($rPrestationCategories) {
            $this->addUsingAlias(RPrestationCategoriesPeer::R_PRESTA_CAT_ID, $rPrestationCategories->getRPrestaCatId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
