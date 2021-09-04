<?php


/**
 * Base class that represents a query for the 'r_p_type_frais' table.
 *
 *
 *
 * @method RPTypeFraisQuery orderByRPTypeFraisId($order = Criteria::ASC) Order by the r_p_type_frais_id column
 * @method RPTypeFraisQuery orderByRPTypeFraisLibelle($order = Criteria::ASC) Order by the r_p_type_frais_libelle column
 *
 * @method RPTypeFraisQuery groupByRPTypeFraisId() Group by the r_p_type_frais_id column
 * @method RPTypeFraisQuery groupByRPTypeFraisLibelle() Group by the r_p_type_frais_libelle column
 *
 * @method RPTypeFraisQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RPTypeFraisQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RPTypeFraisQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RPTypeFrais findOne(PropelPDO $con = null) Return the first RPTypeFrais matching the query
 * @method RPTypeFrais findOneOrCreate(PropelPDO $con = null) Return the first RPTypeFrais matching the query, or a new RPTypeFrais object populated from the query conditions when no match is found
 *
 * @method RPTypeFrais findOneByRPTypeFraisLibelle(string $r_p_type_frais_libelle) Return the first RPTypeFrais filtered by the r_p_type_frais_libelle column
 *
 * @method array findByRPTypeFraisId(int $r_p_type_frais_id) Return RPTypeFrais objects filtered by the r_p_type_frais_id column
 * @method array findByRPTypeFraisLibelle(string $r_p_type_frais_libelle) Return RPTypeFrais objects filtered by the r_p_type_frais_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPTypeFraisQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRPTypeFraisQuery object.
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
            $modelName = 'RPTypeFrais';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RPTypeFraisQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RPTypeFraisQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RPTypeFraisQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RPTypeFraisQuery) {
            return $criteria;
        }
        $query = new RPTypeFraisQuery(null, null, $modelAlias);

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
     * @return   RPTypeFrais|RPTypeFrais[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RPTypeFraisPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RPTypeFraisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RPTypeFrais A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRPTypeFraisId($key, $con = null)
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
     * @return                 RPTypeFrais A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_p_type_frais_id`, `r_p_type_frais_libelle` FROM `r_p_type_frais` WHERE `r_p_type_frais_id` = :p0';
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
            $obj = new RPTypeFrais();
            $obj->hydrate($row);
            RPTypeFraisPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RPTypeFrais|RPTypeFrais[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RPTypeFrais[]|mixed the list of results, formatted by the current formatter
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
     * @return RPTypeFraisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RPTypeFraisPeer::R_P_TYPE_FRAIS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RPTypeFraisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RPTypeFraisPeer::R_P_TYPE_FRAIS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_p_type_frais_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPTypeFraisId(1234); // WHERE r_p_type_frais_id = 1234
     * $query->filterByRPTypeFraisId(array(12, 34)); // WHERE r_p_type_frais_id IN (12, 34)
     * $query->filterByRPTypeFraisId(array('min' => 12)); // WHERE r_p_type_frais_id >= 12
     * $query->filterByRPTypeFraisId(array('max' => 12)); // WHERE r_p_type_frais_id <= 12
     * </code>
     *
     * @param     mixed $rPTypeFraisId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPTypeFraisQuery The current query, for fluid interface
     */
    public function filterByRPTypeFraisId($rPTypeFraisId = null, $comparison = null)
    {
        if (is_array($rPTypeFraisId)) {
            $useMinMax = false;
            if (isset($rPTypeFraisId['min'])) {
                $this->addUsingAlias(RPTypeFraisPeer::R_P_TYPE_FRAIS_ID, $rPTypeFraisId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPTypeFraisId['max'])) {
                $this->addUsingAlias(RPTypeFraisPeer::R_P_TYPE_FRAIS_ID, $rPTypeFraisId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPTypeFraisPeer::R_P_TYPE_FRAIS_ID, $rPTypeFraisId, $comparison);
    }

    /**
     * Filter the query on the r_p_type_frais_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPTypeFraisLibelle('fooValue');   // WHERE r_p_type_frais_libelle = 'fooValue'
     * $query->filterByRPTypeFraisLibelle('%fooValue%'); // WHERE r_p_type_frais_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPTypeFraisLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPTypeFraisQuery The current query, for fluid interface
     */
    public function filterByRPTypeFraisLibelle($rPTypeFraisLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPTypeFraisLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPTypeFraisLibelle)) {
                $rPTypeFraisLibelle = str_replace('*', '%', $rPTypeFraisLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPTypeFraisPeer::R_P_TYPE_FRAIS_LIBELLE, $rPTypeFraisLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RPTypeFrais $rPTypeFrais Object to remove from the list of results
     *
     * @return RPTypeFraisQuery The current query, for fluid interface
     */
    public function prune($rPTypeFrais = null)
    {
        if ($rPTypeFrais) {
            $this->addUsingAlias(RPTypeFraisPeer::R_P_TYPE_FRAIS_ID, $rPTypeFrais->getRPTypeFraisId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
