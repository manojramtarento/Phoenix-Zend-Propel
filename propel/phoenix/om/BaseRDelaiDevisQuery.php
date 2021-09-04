<?php


/**
 * Base class that represents a query for the 'r_delai_devis' table.
 *
 *
 *
 * @method RDelaiDevisQuery orderByRDelaiDevisId($order = Criteria::ASC) Order by the r_delai_devis_id column
 * @method RDelaiDevisQuery orderByRDelaiDevisLibelle($order = Criteria::ASC) Order by the r_delai_devis_libelle column
 * @method RDelaiDevisQuery orderByRDelaiDevisLibelleEn($order = Criteria::ASC) Order by the r_delai_devis_libelle_en column
 *
 * @method RDelaiDevisQuery groupByRDelaiDevisId() Group by the r_delai_devis_id column
 * @method RDelaiDevisQuery groupByRDelaiDevisLibelle() Group by the r_delai_devis_libelle column
 * @method RDelaiDevisQuery groupByRDelaiDevisLibelleEn() Group by the r_delai_devis_libelle_en column
 *
 * @method RDelaiDevisQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RDelaiDevisQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RDelaiDevisQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RDelaiDevisQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method RDelaiDevisQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method RDelaiDevisQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method RDelaiDevis findOne(PropelPDO $con = null) Return the first RDelaiDevis matching the query
 * @method RDelaiDevis findOneOrCreate(PropelPDO $con = null) Return the first RDelaiDevis matching the query, or a new RDelaiDevis object populated from the query conditions when no match is found
 *
 * @method RDelaiDevis findOneByRDelaiDevisLibelle(string $r_delai_devis_libelle) Return the first RDelaiDevis filtered by the r_delai_devis_libelle column
 * @method RDelaiDevis findOneByRDelaiDevisLibelleEn(string $r_delai_devis_libelle_en) Return the first RDelaiDevis filtered by the r_delai_devis_libelle_en column
 *
 * @method array findByRDelaiDevisId(int $r_delai_devis_id) Return RDelaiDevis objects filtered by the r_delai_devis_id column
 * @method array findByRDelaiDevisLibelle(string $r_delai_devis_libelle) Return RDelaiDevis objects filtered by the r_delai_devis_libelle column
 * @method array findByRDelaiDevisLibelleEn(string $r_delai_devis_libelle_en) Return RDelaiDevis objects filtered by the r_delai_devis_libelle_en column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRDelaiDevisQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRDelaiDevisQuery object.
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
            $modelName = 'RDelaiDevis';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RDelaiDevisQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RDelaiDevisQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RDelaiDevisQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RDelaiDevisQuery) {
            return $criteria;
        }
        $query = new RDelaiDevisQuery(null, null, $modelAlias);

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
     * @return   RDelaiDevis|RDelaiDevis[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RDelaiDevisPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RDelaiDevisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RDelaiDevis A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRDelaiDevisId($key, $con = null)
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
     * @return                 RDelaiDevis A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_delai_devis_id`, `r_delai_devis_libelle`, `r_delai_devis_libelle_en` FROM `r_delai_devis` WHERE `r_delai_devis_id` = :p0';
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
            $obj = new RDelaiDevis();
            $obj->hydrate($row);
            RDelaiDevisPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RDelaiDevis|RDelaiDevis[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RDelaiDevis[]|mixed the list of results, formatted by the current formatter
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
     * @return RDelaiDevisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RDelaiDevisPeer::R_DELAI_DEVIS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RDelaiDevisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RDelaiDevisPeer::R_DELAI_DEVIS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_delai_devis_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRDelaiDevisId(1234); // WHERE r_delai_devis_id = 1234
     * $query->filterByRDelaiDevisId(array(12, 34)); // WHERE r_delai_devis_id IN (12, 34)
     * $query->filterByRDelaiDevisId(array('min' => 12)); // WHERE r_delai_devis_id >= 12
     * $query->filterByRDelaiDevisId(array('max' => 12)); // WHERE r_delai_devis_id <= 12
     * </code>
     *
     * @param     mixed $rDelaiDevisId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RDelaiDevisQuery The current query, for fluid interface
     */
    public function filterByRDelaiDevisId($rDelaiDevisId = null, $comparison = null)
    {
        if (is_array($rDelaiDevisId)) {
            $useMinMax = false;
            if (isset($rDelaiDevisId['min'])) {
                $this->addUsingAlias(RDelaiDevisPeer::R_DELAI_DEVIS_ID, $rDelaiDevisId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rDelaiDevisId['max'])) {
                $this->addUsingAlias(RDelaiDevisPeer::R_DELAI_DEVIS_ID, $rDelaiDevisId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RDelaiDevisPeer::R_DELAI_DEVIS_ID, $rDelaiDevisId, $comparison);
    }

    /**
     * Filter the query on the r_delai_devis_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRDelaiDevisLibelle('fooValue');   // WHERE r_delai_devis_libelle = 'fooValue'
     * $query->filterByRDelaiDevisLibelle('%fooValue%'); // WHERE r_delai_devis_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rDelaiDevisLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RDelaiDevisQuery The current query, for fluid interface
     */
    public function filterByRDelaiDevisLibelle($rDelaiDevisLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rDelaiDevisLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rDelaiDevisLibelle)) {
                $rDelaiDevisLibelle = str_replace('*', '%', $rDelaiDevisLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RDelaiDevisPeer::R_DELAI_DEVIS_LIBELLE, $rDelaiDevisLibelle, $comparison);
    }

    /**
     * Filter the query on the r_delai_devis_libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByRDelaiDevisLibelleEn('fooValue');   // WHERE r_delai_devis_libelle_en = 'fooValue'
     * $query->filterByRDelaiDevisLibelleEn('%fooValue%'); // WHERE r_delai_devis_libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rDelaiDevisLibelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RDelaiDevisQuery The current query, for fluid interface
     */
    public function filterByRDelaiDevisLibelleEn($rDelaiDevisLibelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rDelaiDevisLibelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rDelaiDevisLibelleEn)) {
                $rDelaiDevisLibelleEn = str_replace('*', '%', $rDelaiDevisLibelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RDelaiDevisPeer::R_DELAI_DEVIS_LIBELLE_EN, $rDelaiDevisLibelleEn, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RDelaiDevisQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(RDelaiDevisPeer::R_DELAI_DEVIS_ID, $operations->getOpDelaiDevisId(), $comparison);
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
     * @return RDelaiDevisQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   RDelaiDevis $rDelaiDevis Object to remove from the list of results
     *
     * @return RDelaiDevisQuery The current query, for fluid interface
     */
    public function prune($rDelaiDevis = null)
    {
        if ($rDelaiDevis) {
            $this->addUsingAlias(RDelaiDevisPeer::R_DELAI_DEVIS_ID, $rDelaiDevis->getRDelaiDevisId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
