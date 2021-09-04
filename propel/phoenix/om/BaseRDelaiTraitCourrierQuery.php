<?php


/**
 * Base class that represents a query for the 'r_delai_trait_courrier' table.
 *
 *
 *
 * @method RDelaiTraitCourrierQuery orderByRDelaiTraitCourrierId($order = Criteria::ASC) Order by the r_delai_trait_courrier_id column
 * @method RDelaiTraitCourrierQuery orderByRDelaiTraitCourrierLibelle($order = Criteria::ASC) Order by the r_delai_trait_courrier_libelle column
 *
 * @method RDelaiTraitCourrierQuery groupByRDelaiTraitCourrierId() Group by the r_delai_trait_courrier_id column
 * @method RDelaiTraitCourrierQuery groupByRDelaiTraitCourrierLibelle() Group by the r_delai_trait_courrier_libelle column
 *
 * @method RDelaiTraitCourrierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RDelaiTraitCourrierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RDelaiTraitCourrierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RDelaiTraitCourrier findOne(PropelPDO $con = null) Return the first RDelaiTraitCourrier matching the query
 * @method RDelaiTraitCourrier findOneOrCreate(PropelPDO $con = null) Return the first RDelaiTraitCourrier matching the query, or a new RDelaiTraitCourrier object populated from the query conditions when no match is found
 *
 * @method RDelaiTraitCourrier findOneByRDelaiTraitCourrierLibelle(string $r_delai_trait_courrier_libelle) Return the first RDelaiTraitCourrier filtered by the r_delai_trait_courrier_libelle column
 *
 * @method array findByRDelaiTraitCourrierId(int $r_delai_trait_courrier_id) Return RDelaiTraitCourrier objects filtered by the r_delai_trait_courrier_id column
 * @method array findByRDelaiTraitCourrierLibelle(string $r_delai_trait_courrier_libelle) Return RDelaiTraitCourrier objects filtered by the r_delai_trait_courrier_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRDelaiTraitCourrierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRDelaiTraitCourrierQuery object.
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
            $modelName = 'RDelaiTraitCourrier';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RDelaiTraitCourrierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RDelaiTraitCourrierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RDelaiTraitCourrierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RDelaiTraitCourrierQuery) {
            return $criteria;
        }
        $query = new RDelaiTraitCourrierQuery(null, null, $modelAlias);

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
     * @return   RDelaiTraitCourrier|RDelaiTraitCourrier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RDelaiTraitCourrierPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RDelaiTraitCourrierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RDelaiTraitCourrier A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRDelaiTraitCourrierId($key, $con = null)
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
     * @return                 RDelaiTraitCourrier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_delai_trait_courrier_id`, `r_delai_trait_courrier_libelle` FROM `r_delai_trait_courrier` WHERE `r_delai_trait_courrier_id` = :p0';
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
            $obj = new RDelaiTraitCourrier();
            $obj->hydrate($row);
            RDelaiTraitCourrierPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RDelaiTraitCourrier|RDelaiTraitCourrier[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RDelaiTraitCourrier[]|mixed the list of results, formatted by the current formatter
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
     * @return RDelaiTraitCourrierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RDelaiTraitCourrierPeer::R_DELAI_TRAIT_COURRIER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RDelaiTraitCourrierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RDelaiTraitCourrierPeer::R_DELAI_TRAIT_COURRIER_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_delai_trait_courrier_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRDelaiTraitCourrierId(1234); // WHERE r_delai_trait_courrier_id = 1234
     * $query->filterByRDelaiTraitCourrierId(array(12, 34)); // WHERE r_delai_trait_courrier_id IN (12, 34)
     * $query->filterByRDelaiTraitCourrierId(array('min' => 12)); // WHERE r_delai_trait_courrier_id >= 12
     * $query->filterByRDelaiTraitCourrierId(array('max' => 12)); // WHERE r_delai_trait_courrier_id <= 12
     * </code>
     *
     * @param     mixed $rDelaiTraitCourrierId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RDelaiTraitCourrierQuery The current query, for fluid interface
     */
    public function filterByRDelaiTraitCourrierId($rDelaiTraitCourrierId = null, $comparison = null)
    {
        if (is_array($rDelaiTraitCourrierId)) {
            $useMinMax = false;
            if (isset($rDelaiTraitCourrierId['min'])) {
                $this->addUsingAlias(RDelaiTraitCourrierPeer::R_DELAI_TRAIT_COURRIER_ID, $rDelaiTraitCourrierId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rDelaiTraitCourrierId['max'])) {
                $this->addUsingAlias(RDelaiTraitCourrierPeer::R_DELAI_TRAIT_COURRIER_ID, $rDelaiTraitCourrierId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RDelaiTraitCourrierPeer::R_DELAI_TRAIT_COURRIER_ID, $rDelaiTraitCourrierId, $comparison);
    }

    /**
     * Filter the query on the r_delai_trait_courrier_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRDelaiTraitCourrierLibelle('fooValue');   // WHERE r_delai_trait_courrier_libelle = 'fooValue'
     * $query->filterByRDelaiTraitCourrierLibelle('%fooValue%'); // WHERE r_delai_trait_courrier_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rDelaiTraitCourrierLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RDelaiTraitCourrierQuery The current query, for fluid interface
     */
    public function filterByRDelaiTraitCourrierLibelle($rDelaiTraitCourrierLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rDelaiTraitCourrierLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rDelaiTraitCourrierLibelle)) {
                $rDelaiTraitCourrierLibelle = str_replace('*', '%', $rDelaiTraitCourrierLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RDelaiTraitCourrierPeer::R_DELAI_TRAIT_COURRIER_LIBELLE, $rDelaiTraitCourrierLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RDelaiTraitCourrier $rDelaiTraitCourrier Object to remove from the list of results
     *
     * @return RDelaiTraitCourrierQuery The current query, for fluid interface
     */
    public function prune($rDelaiTraitCourrier = null)
    {
        if ($rDelaiTraitCourrier) {
            $this->addUsingAlias(RDelaiTraitCourrierPeer::R_DELAI_TRAIT_COURRIER_ID, $rDelaiTraitCourrier->getRDelaiTraitCourrierId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
