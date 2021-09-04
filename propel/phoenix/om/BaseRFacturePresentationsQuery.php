<?php


/**
 * Base class that represents a query for the 'r_facture_presentations' table.
 *
 *
 *
 * @method RFacturePresentationsQuery orderByRFactPresId($order = Criteria::ASC) Order by the r_fact_pres_id column
 * @method RFacturePresentationsQuery orderByRFactPresLibelle($order = Criteria::ASC) Order by the r_fact_pres_libelle column
 *
 * @method RFacturePresentationsQuery groupByRFactPresId() Group by the r_fact_pres_id column
 * @method RFacturePresentationsQuery groupByRFactPresLibelle() Group by the r_fact_pres_libelle column
 *
 * @method RFacturePresentationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RFacturePresentationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RFacturePresentationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RFacturePresentationsQuery leftJoinRFactureTypes($relationAlias = null) Adds a LEFT JOIN clause to the query using the RFactureTypes relation
 * @method RFacturePresentationsQuery rightJoinRFactureTypes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RFactureTypes relation
 * @method RFacturePresentationsQuery innerJoinRFactureTypes($relationAlias = null) Adds a INNER JOIN clause to the query using the RFactureTypes relation
 *
 * @method RFacturePresentations findOne(PropelPDO $con = null) Return the first RFacturePresentations matching the query
 * @method RFacturePresentations findOneOrCreate(PropelPDO $con = null) Return the first RFacturePresentations matching the query, or a new RFacturePresentations object populated from the query conditions when no match is found
 *
 * @method RFacturePresentations findOneByRFactPresLibelle(string $r_fact_pres_libelle) Return the first RFacturePresentations filtered by the r_fact_pres_libelle column
 *
 * @method array findByRFactPresId(int $r_fact_pres_id) Return RFacturePresentations objects filtered by the r_fact_pres_id column
 * @method array findByRFactPresLibelle(string $r_fact_pres_libelle) Return RFacturePresentations objects filtered by the r_fact_pres_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRFacturePresentationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRFacturePresentationsQuery object.
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
            $modelName = 'RFacturePresentations';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RFacturePresentationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RFacturePresentationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RFacturePresentationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RFacturePresentationsQuery) {
            return $criteria;
        }
        $query = new RFacturePresentationsQuery(null, null, $modelAlias);

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
     * @return   RFacturePresentations|RFacturePresentations[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RFacturePresentationsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RFacturePresentationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RFacturePresentations A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRFactPresId($key, $con = null)
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
     * @return                 RFacturePresentations A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_fact_pres_id`, `r_fact_pres_libelle` FROM `r_facture_presentations` WHERE `r_fact_pres_id` = :p0';
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
            $obj = new RFacturePresentations();
            $obj->hydrate($row);
            RFacturePresentationsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RFacturePresentations|RFacturePresentations[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RFacturePresentations[]|mixed the list of results, formatted by the current formatter
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
     * @return RFacturePresentationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RFacturePresentationsPeer::R_FACT_PRES_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RFacturePresentationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RFacturePresentationsPeer::R_FACT_PRES_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_fact_pres_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactPresId(1234); // WHERE r_fact_pres_id = 1234
     * $query->filterByRFactPresId(array(12, 34)); // WHERE r_fact_pres_id IN (12, 34)
     * $query->filterByRFactPresId(array('min' => 12)); // WHERE r_fact_pres_id >= 12
     * $query->filterByRFactPresId(array('max' => 12)); // WHERE r_fact_pres_id <= 12
     * </code>
     *
     * @param     mixed $rFactPresId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFacturePresentationsQuery The current query, for fluid interface
     */
    public function filterByRFactPresId($rFactPresId = null, $comparison = null)
    {
        if (is_array($rFactPresId)) {
            $useMinMax = false;
            if (isset($rFactPresId['min'])) {
                $this->addUsingAlias(RFacturePresentationsPeer::R_FACT_PRES_ID, $rFactPresId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactPresId['max'])) {
                $this->addUsingAlias(RFacturePresentationsPeer::R_FACT_PRES_ID, $rFactPresId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFacturePresentationsPeer::R_FACT_PRES_ID, $rFactPresId, $comparison);
    }

    /**
     * Filter the query on the r_fact_pres_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactPresLibelle('fooValue');   // WHERE r_fact_pres_libelle = 'fooValue'
     * $query->filterByRFactPresLibelle('%fooValue%'); // WHERE r_fact_pres_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rFactPresLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFacturePresentationsQuery The current query, for fluid interface
     */
    public function filterByRFactPresLibelle($rFactPresLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rFactPresLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rFactPresLibelle)) {
                $rFactPresLibelle = str_replace('*', '%', $rFactPresLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFacturePresentationsPeer::R_FACT_PRES_LIBELLE, $rFactPresLibelle, $comparison);
    }

    /**
     * Filter the query by a related RFactureTypes object
     *
     * @param   RFactureTypes|PropelObjectCollection $rFactureTypes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFacturePresentationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRFactureTypes($rFactureTypes, $comparison = null)
    {
        if ($rFactureTypes instanceof RFactureTypes) {
            return $this
                ->addUsingAlias(RFacturePresentationsPeer::R_FACT_PRES_ID, $rFactureTypes->getRFactPresId(), $comparison);
        } elseif ($rFactureTypes instanceof PropelObjectCollection) {
            return $this
                ->useRFactureTypesQuery()
                ->filterByPrimaryKeys($rFactureTypes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRFactureTypes() only accepts arguments of type RFactureTypes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RFactureTypes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RFacturePresentationsQuery The current query, for fluid interface
     */
    public function joinRFactureTypes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RFactureTypes');

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
            $this->addJoinObject($join, 'RFactureTypes');
        }

        return $this;
    }

    /**
     * Use the RFactureTypes relation RFactureTypes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RFactureTypesQuery A secondary query class using the current class as primary query
     */
    public function useRFactureTypesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRFactureTypes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RFactureTypes', 'RFactureTypesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RFacturePresentations $rFacturePresentations Object to remove from the list of results
     *
     * @return RFacturePresentationsQuery The current query, for fluid interface
     */
    public function prune($rFacturePresentations = null)
    {
        if ($rFacturePresentations) {
            $this->addUsingAlias(RFacturePresentationsPeer::R_FACT_PRES_ID, $rFacturePresentations->getRFactPresId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
