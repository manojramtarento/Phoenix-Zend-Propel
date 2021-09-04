<?php


/**
 * Base class that represents a query for the 'r_relance_types' table.
 *
 *
 *
 * @method RRelanceTypesQuery orderByRRelTypeId($order = Criteria::ASC) Order by the r_rel_type_id column
 * @method RRelanceTypesQuery orderByRRelTypeLibelle($order = Criteria::ASC) Order by the r_rel_type_libelle column
 * @method RRelanceTypesQuery orderByRRelTypeLibelleEn($order = Criteria::ASC) Order by the r_rel_type_libelle_en column
 * @method RRelanceTypesQuery orderByRRelTypeLettreRecommandee($order = Criteria::ASC) Order by the r_rel_type_lettre_recommandee column
 * @method RRelanceTypesQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method RRelanceTypesQuery groupByRRelTypeId() Group by the r_rel_type_id column
 * @method RRelanceTypesQuery groupByRRelTypeLibelle() Group by the r_rel_type_libelle column
 * @method RRelanceTypesQuery groupByRRelTypeLibelleEn() Group by the r_rel_type_libelle_en column
 * @method RRelanceTypesQuery groupByRRelTypeLettreRecommandee() Group by the r_rel_type_lettre_recommandee column
 * @method RRelanceTypesQuery groupByActif() Group by the actif column
 *
 * @method RRelanceTypesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RRelanceTypesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RRelanceTypesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RRelanceTypesQuery leftJoinRelances($relationAlias = null) Adds a LEFT JOIN clause to the query using the Relances relation
 * @method RRelanceTypesQuery rightJoinRelances($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Relances relation
 * @method RRelanceTypesQuery innerJoinRelances($relationAlias = null) Adds a INNER JOIN clause to the query using the Relances relation
 *
 * @method RRelanceTypes findOne(PropelPDO $con = null) Return the first RRelanceTypes matching the query
 * @method RRelanceTypes findOneOrCreate(PropelPDO $con = null) Return the first RRelanceTypes matching the query, or a new RRelanceTypes object populated from the query conditions when no match is found
 *
 * @method RRelanceTypes findOneByRRelTypeLibelle(string $r_rel_type_libelle) Return the first RRelanceTypes filtered by the r_rel_type_libelle column
 * @method RRelanceTypes findOneByRRelTypeLibelleEn(string $r_rel_type_libelle_en) Return the first RRelanceTypes filtered by the r_rel_type_libelle_en column
 * @method RRelanceTypes findOneByRRelTypeLettreRecommandee(boolean $r_rel_type_lettre_recommandee) Return the first RRelanceTypes filtered by the r_rel_type_lettre_recommandee column
 * @method RRelanceTypes findOneByActif(int $actif) Return the first RRelanceTypes filtered by the actif column
 *
 * @method array findByRRelTypeId(int $r_rel_type_id) Return RRelanceTypes objects filtered by the r_rel_type_id column
 * @method array findByRRelTypeLibelle(string $r_rel_type_libelle) Return RRelanceTypes objects filtered by the r_rel_type_libelle column
 * @method array findByRRelTypeLibelleEn(string $r_rel_type_libelle_en) Return RRelanceTypes objects filtered by the r_rel_type_libelle_en column
 * @method array findByRRelTypeLettreRecommandee(boolean $r_rel_type_lettre_recommandee) Return RRelanceTypes objects filtered by the r_rel_type_lettre_recommandee column
 * @method array findByActif(int $actif) Return RRelanceTypes objects filtered by the actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRRelanceTypesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRRelanceTypesQuery object.
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
            $modelName = 'RRelanceTypes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RRelanceTypesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RRelanceTypesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RRelanceTypesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RRelanceTypesQuery) {
            return $criteria;
        }
        $query = new RRelanceTypesQuery(null, null, $modelAlias);

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
     * @return   RRelanceTypes|RRelanceTypes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RRelanceTypesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RRelanceTypesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RRelanceTypes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRRelTypeId($key, $con = null)
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
     * @return                 RRelanceTypes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_rel_type_id`, `r_rel_type_libelle`, `r_rel_type_libelle_en`, `r_rel_type_lettre_recommandee`, `actif` FROM `r_relance_types` WHERE `r_rel_type_id` = :p0';
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
            $obj = new RRelanceTypes();
            $obj->hydrate($row);
            RRelanceTypesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RRelanceTypes|RRelanceTypes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RRelanceTypes[]|mixed the list of results, formatted by the current formatter
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
     * @return RRelanceTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RRelanceTypesPeer::R_REL_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RRelanceTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RRelanceTypesPeer::R_REL_TYPE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_rel_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRelTypeId(1234); // WHERE r_rel_type_id = 1234
     * $query->filterByRRelTypeId(array(12, 34)); // WHERE r_rel_type_id IN (12, 34)
     * $query->filterByRRelTypeId(array('min' => 12)); // WHERE r_rel_type_id >= 12
     * $query->filterByRRelTypeId(array('max' => 12)); // WHERE r_rel_type_id <= 12
     * </code>
     *
     * @param     mixed $rRelTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRelanceTypesQuery The current query, for fluid interface
     */
    public function filterByRRelTypeId($rRelTypeId = null, $comparison = null)
    {
        if (is_array($rRelTypeId)) {
            $useMinMax = false;
            if (isset($rRelTypeId['min'])) {
                $this->addUsingAlias(RRelanceTypesPeer::R_REL_TYPE_ID, $rRelTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRelTypeId['max'])) {
                $this->addUsingAlias(RRelanceTypesPeer::R_REL_TYPE_ID, $rRelTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRelanceTypesPeer::R_REL_TYPE_ID, $rRelTypeId, $comparison);
    }

    /**
     * Filter the query on the r_rel_type_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRRelTypeLibelle('fooValue');   // WHERE r_rel_type_libelle = 'fooValue'
     * $query->filterByRRelTypeLibelle('%fooValue%'); // WHERE r_rel_type_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rRelTypeLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRelanceTypesQuery The current query, for fluid interface
     */
    public function filterByRRelTypeLibelle($rRelTypeLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rRelTypeLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rRelTypeLibelle)) {
                $rRelTypeLibelle = str_replace('*', '%', $rRelTypeLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RRelanceTypesPeer::R_REL_TYPE_LIBELLE, $rRelTypeLibelle, $comparison);
    }

    /**
     * Filter the query on the r_rel_type_libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByRRelTypeLibelleEn('fooValue');   // WHERE r_rel_type_libelle_en = 'fooValue'
     * $query->filterByRRelTypeLibelleEn('%fooValue%'); // WHERE r_rel_type_libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rRelTypeLibelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRelanceTypesQuery The current query, for fluid interface
     */
    public function filterByRRelTypeLibelleEn($rRelTypeLibelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rRelTypeLibelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rRelTypeLibelleEn)) {
                $rRelTypeLibelleEn = str_replace('*', '%', $rRelTypeLibelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RRelanceTypesPeer::R_REL_TYPE_LIBELLE_EN, $rRelTypeLibelleEn, $comparison);
    }

    /**
     * Filter the query on the r_rel_type_lettre_recommandee column
     *
     * Example usage:
     * <code>
     * $query->filterByRRelTypeLettreRecommandee(true); // WHERE r_rel_type_lettre_recommandee = true
     * $query->filterByRRelTypeLettreRecommandee('yes'); // WHERE r_rel_type_lettre_recommandee = true
     * </code>
     *
     * @param     boolean|string $rRelTypeLettreRecommandee The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRelanceTypesQuery The current query, for fluid interface
     */
    public function filterByRRelTypeLettreRecommandee($rRelTypeLettreRecommandee = null, $comparison = null)
    {
        if (is_string($rRelTypeLettreRecommandee)) {
            $rRelTypeLettreRecommandee = in_array(strtolower($rRelTypeLettreRecommandee), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RRelanceTypesPeer::R_REL_TYPE_LETTRE_RECOMMANDEE, $rRelTypeLettreRecommandee, $comparison);
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
     * @return RRelanceTypesQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(RRelanceTypesPeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(RRelanceTypesPeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRelanceTypesPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query by a related Relances object
     *
     * @param   Relances|PropelObjectCollection $relances  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRelanceTypesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRelances($relances, $comparison = null)
    {
        if ($relances instanceof Relances) {
            return $this
                ->addUsingAlias(RRelanceTypesPeer::R_REL_TYPE_ID, $relances->getRelTypeId(), $comparison);
        } elseif ($relances instanceof PropelObjectCollection) {
            return $this
                ->useRelancesQuery()
                ->filterByPrimaryKeys($relances->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRelances() only accepts arguments of type Relances or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Relances relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RRelanceTypesQuery The current query, for fluid interface
     */
    public function joinRelances($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Relances');

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
            $this->addJoinObject($join, 'Relances');
        }

        return $this;
    }

    /**
     * Use the Relances relation Relances object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RelancesQuery A secondary query class using the current class as primary query
     */
    public function useRelancesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRelances($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Relances', 'RelancesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RRelanceTypes $rRelanceTypes Object to remove from the list of results
     *
     * @return RRelanceTypesQuery The current query, for fluid interface
     */
    public function prune($rRelanceTypes = null)
    {
        if ($rRelanceTypes) {
            $this->addUsingAlias(RRelanceTypesPeer::R_REL_TYPE_ID, $rRelanceTypes->getRRelTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
