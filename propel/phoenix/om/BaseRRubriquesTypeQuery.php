<?php


/**
 * Base class that represents a query for the 'r_rubriques_type' table.
 *
 *
 *
 * @method RRubriquesTypeQuery orderByRubriqueTypeId($order = Criteria::ASC) Order by the rubrique_type_id column
 * @method RRubriquesTypeQuery orderByRubriqueTypeLibelle($order = Criteria::ASC) Order by the rubrique_type_libelle column
 * @method RRubriquesTypeQuery orderByFraisFixe($order = Criteria::ASC) Order by the frais_fixe column
 *
 * @method RRubriquesTypeQuery groupByRubriqueTypeId() Group by the rubrique_type_id column
 * @method RRubriquesTypeQuery groupByRubriqueTypeLibelle() Group by the rubrique_type_libelle column
 * @method RRubriquesTypeQuery groupByFraisFixe() Group by the frais_fixe column
 *
 * @method RRubriquesTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RRubriquesTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RRubriquesTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RRubriquesTypeQuery leftJoinOperationRubriques($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationRubriques relation
 * @method RRubriquesTypeQuery rightJoinOperationRubriques($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationRubriques relation
 * @method RRubriquesTypeQuery innerJoinOperationRubriques($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationRubriques relation
 *
 * @method RRubriquesTypeQuery leftJoinRRubriques($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRubriques relation
 * @method RRubriquesTypeQuery rightJoinRRubriques($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRubriques relation
 * @method RRubriquesTypeQuery innerJoinRRubriques($relationAlias = null) Adds a INNER JOIN clause to the query using the RRubriques relation
 *
 * @method RRubriquesType findOne(PropelPDO $con = null) Return the first RRubriquesType matching the query
 * @method RRubriquesType findOneOrCreate(PropelPDO $con = null) Return the first RRubriquesType matching the query, or a new RRubriquesType object populated from the query conditions when no match is found
 *
 * @method RRubriquesType findOneByRubriqueTypeLibelle(string $rubrique_type_libelle) Return the first RRubriquesType filtered by the rubrique_type_libelle column
 * @method RRubriquesType findOneByFraisFixe(boolean $frais_fixe) Return the first RRubriquesType filtered by the frais_fixe column
 *
 * @method array findByRubriqueTypeId(int $rubrique_type_id) Return RRubriquesType objects filtered by the rubrique_type_id column
 * @method array findByRubriqueTypeLibelle(string $rubrique_type_libelle) Return RRubriquesType objects filtered by the rubrique_type_libelle column
 * @method array findByFraisFixe(boolean $frais_fixe) Return RRubriquesType objects filtered by the frais_fixe column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRRubriquesTypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRRubriquesTypeQuery object.
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
            $modelName = 'RRubriquesType';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RRubriquesTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RRubriquesTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RRubriquesTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RRubriquesTypeQuery) {
            return $criteria;
        }
        $query = new RRubriquesTypeQuery(null, null, $modelAlias);

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
     * @return   RRubriquesType|RRubriquesType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RRubriquesTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RRubriquesTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RRubriquesType A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRubriqueTypeId($key, $con = null)
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
     * @return                 RRubriquesType A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `rubrique_type_id`, `rubrique_type_libelle`, `frais_fixe` FROM `r_rubriques_type` WHERE `rubrique_type_id` = :p0';
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
            $obj = new RRubriquesType();
            $obj->hydrate($row);
            RRubriquesTypePeer::addInstanceToPool($obj, (string) $key);
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
     * @return RRubriquesType|RRubriquesType[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RRubriquesType[]|mixed the list of results, formatted by the current formatter
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
     * @return RRubriquesTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RRubriquesTypePeer::RUBRIQUE_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RRubriquesTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RRubriquesTypePeer::RUBRIQUE_TYPE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the rubrique_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRubriqueTypeId(1234); // WHERE rubrique_type_id = 1234
     * $query->filterByRubriqueTypeId(array(12, 34)); // WHERE rubrique_type_id IN (12, 34)
     * $query->filterByRubriqueTypeId(array('min' => 12)); // WHERE rubrique_type_id >= 12
     * $query->filterByRubriqueTypeId(array('max' => 12)); // WHERE rubrique_type_id <= 12
     * </code>
     *
     * @param     mixed $rubriqueTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRubriquesTypeQuery The current query, for fluid interface
     */
    public function filterByRubriqueTypeId($rubriqueTypeId = null, $comparison = null)
    {
        if (is_array($rubriqueTypeId)) {
            $useMinMax = false;
            if (isset($rubriqueTypeId['min'])) {
                $this->addUsingAlias(RRubriquesTypePeer::RUBRIQUE_TYPE_ID, $rubriqueTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rubriqueTypeId['max'])) {
                $this->addUsingAlias(RRubriquesTypePeer::RUBRIQUE_TYPE_ID, $rubriqueTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRubriquesTypePeer::RUBRIQUE_TYPE_ID, $rubriqueTypeId, $comparison);
    }

    /**
     * Filter the query on the rubrique_type_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRubriqueTypeLibelle('fooValue');   // WHERE rubrique_type_libelle = 'fooValue'
     * $query->filterByRubriqueTypeLibelle('%fooValue%'); // WHERE rubrique_type_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rubriqueTypeLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRubriquesTypeQuery The current query, for fluid interface
     */
    public function filterByRubriqueTypeLibelle($rubriqueTypeLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rubriqueTypeLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rubriqueTypeLibelle)) {
                $rubriqueTypeLibelle = str_replace('*', '%', $rubriqueTypeLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RRubriquesTypePeer::RUBRIQUE_TYPE_LIBELLE, $rubriqueTypeLibelle, $comparison);
    }

    /**
     * Filter the query on the frais_fixe column
     *
     * Example usage:
     * <code>
     * $query->filterByFraisFixe(true); // WHERE frais_fixe = true
     * $query->filterByFraisFixe('yes'); // WHERE frais_fixe = true
     * </code>
     *
     * @param     boolean|string $fraisFixe The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRubriquesTypeQuery The current query, for fluid interface
     */
    public function filterByFraisFixe($fraisFixe = null, $comparison = null)
    {
        if (is_string($fraisFixe)) {
            $fraisFixe = in_array(strtolower($fraisFixe), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RRubriquesTypePeer::FRAIS_FIXE, $fraisFixe, $comparison);
    }

    /**
     * Filter the query by a related OperationRubriques object
     *
     * @param   OperationRubriques|PropelObjectCollection $operationRubriques  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRubriquesTypeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationRubriques($operationRubriques, $comparison = null)
    {
        if ($operationRubriques instanceof OperationRubriques) {
            return $this
                ->addUsingAlias(RRubriquesTypePeer::RUBRIQUE_TYPE_ID, $operationRubriques->getRRubTypeId(), $comparison);
        } elseif ($operationRubriques instanceof PropelObjectCollection) {
            return $this
                ->useOperationRubriquesQuery()
                ->filterByPrimaryKeys($operationRubriques->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationRubriques() only accepts arguments of type OperationRubriques or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationRubriques relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RRubriquesTypeQuery The current query, for fluid interface
     */
    public function joinOperationRubriques($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationRubriques');

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
            $this->addJoinObject($join, 'OperationRubriques');
        }

        return $this;
    }

    /**
     * Use the OperationRubriques relation OperationRubriques object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationRubriquesQuery A secondary query class using the current class as primary query
     */
    public function useOperationRubriquesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationRubriques($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationRubriques', 'OperationRubriquesQuery');
    }

    /**
     * Filter the query by a related RRubriques object
     *
     * @param   RRubriques|PropelObjectCollection $rRubriques  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRubriquesTypeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRubriques($rRubriques, $comparison = null)
    {
        if ($rRubriques instanceof RRubriques) {
            return $this
                ->addUsingAlias(RRubriquesTypePeer::RUBRIQUE_TYPE_ID, $rRubriques->getRRubTypeId(), $comparison);
        } elseif ($rRubriques instanceof PropelObjectCollection) {
            return $this
                ->useRRubriquesQuery()
                ->filterByPrimaryKeys($rRubriques->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRRubriques() only accepts arguments of type RRubriques or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRubriques relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RRubriquesTypeQuery The current query, for fluid interface
     */
    public function joinRRubriques($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRubriques');

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
            $this->addJoinObject($join, 'RRubriques');
        }

        return $this;
    }

    /**
     * Use the RRubriques relation RRubriques object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRubriquesQuery A secondary query class using the current class as primary query
     */
    public function useRRubriquesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRRubriques($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRubriques', 'RRubriquesQuery');
    }

    /**
     * Filter the query by a related Operations object
     * using the operation_rubriques table as cross reference
     *
     * @param   Operations $operations the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   RRubriquesTypeQuery The current query, for fluid interface
     */
    public function filterByOperations($operations, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useOperationRubriquesQuery()
            ->filterByOperations($operations, $comparison)
            ->endUse();
    }

    /**
     * Filter the query by a related RTvaType object
     * using the operation_rubriques table as cross reference
     *
     * @param   RTvaType $rTvaType the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   RRubriquesTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaType($rTvaType, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useOperationRubriquesQuery()
            ->filterByRTvaType($rTvaType, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   RRubriquesType $rRubriquesType Object to remove from the list of results
     *
     * @return RRubriquesTypeQuery The current query, for fluid interface
     */
    public function prune($rRubriquesType = null)
    {
        if ($rRubriquesType) {
            $this->addUsingAlias(RRubriquesTypePeer::RUBRIQUE_TYPE_ID, $rRubriquesType->getRubriqueTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
