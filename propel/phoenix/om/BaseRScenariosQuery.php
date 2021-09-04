<?php


/**
 * Base class that represents a query for the 'r_scenarios' table.
 *
 *
 *
 * @method RScenariosQuery orderByRScenarioId($order = Criteria::ASC) Order by the r_scenario_id column
 * @method RScenariosQuery orderByRScenarioLibelle($order = Criteria::ASC) Order by the r_scenario_libelle column
 * @method RScenariosQuery orderByRScenarioLibelleEn($order = Criteria::ASC) Order by the r_scenario_libelle_en column
 * @method RScenariosQuery orderByRScenarioActif($order = Criteria::ASC) Order by the r_scenario_actif column
 *
 * @method RScenariosQuery groupByRScenarioId() Group by the r_scenario_id column
 * @method RScenariosQuery groupByRScenarioLibelle() Group by the r_scenario_libelle column
 * @method RScenariosQuery groupByRScenarioLibelleEn() Group by the r_scenario_libelle_en column
 * @method RScenariosQuery groupByRScenarioActif() Group by the r_scenario_actif column
 *
 * @method RScenariosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RScenariosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RScenariosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RScenariosQuery leftJoinOperationScenarii($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationScenarii relation
 * @method RScenariosQuery rightJoinOperationScenarii($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationScenarii relation
 * @method RScenariosQuery innerJoinOperationScenarii($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationScenarii relation
 *
 * @method RScenariosQuery leftJoinROperationTypeSubTplScenario($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplScenario relation
 * @method RScenariosQuery rightJoinROperationTypeSubTplScenario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplScenario relation
 * @method RScenariosQuery innerJoinROperationTypeSubTplScenario($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplScenario relation
 *
 * @method RScenarios findOne(PropelPDO $con = null) Return the first RScenarios matching the query
 * @method RScenarios findOneOrCreate(PropelPDO $con = null) Return the first RScenarios matching the query, or a new RScenarios object populated from the query conditions when no match is found
 *
 * @method RScenarios findOneByRScenarioLibelle(string $r_scenario_libelle) Return the first RScenarios filtered by the r_scenario_libelle column
 * @method RScenarios findOneByRScenarioLibelleEn(string $r_scenario_libelle_en) Return the first RScenarios filtered by the r_scenario_libelle_en column
 * @method RScenarios findOneByRScenarioActif(boolean $r_scenario_actif) Return the first RScenarios filtered by the r_scenario_actif column
 *
 * @method array findByRScenarioId(int $r_scenario_id) Return RScenarios objects filtered by the r_scenario_id column
 * @method array findByRScenarioLibelle(string $r_scenario_libelle) Return RScenarios objects filtered by the r_scenario_libelle column
 * @method array findByRScenarioLibelleEn(string $r_scenario_libelle_en) Return RScenarios objects filtered by the r_scenario_libelle_en column
 * @method array findByRScenarioActif(boolean $r_scenario_actif) Return RScenarios objects filtered by the r_scenario_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRScenariosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRScenariosQuery object.
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
            $modelName = 'RScenarios';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RScenariosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RScenariosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RScenariosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RScenariosQuery) {
            return $criteria;
        }
        $query = new RScenariosQuery(null, null, $modelAlias);

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
     * @return   RScenarios|RScenarios[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RScenariosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RScenariosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RScenarios A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRScenarioId($key, $con = null)
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
     * @return                 RScenarios A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_scenario_id`, `r_scenario_libelle`, `r_scenario_libelle_en`, `r_scenario_actif` FROM `r_scenarios` WHERE `r_scenario_id` = :p0';
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
            $obj = new RScenarios();
            $obj->hydrate($row);
            RScenariosPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RScenarios|RScenarios[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RScenarios[]|mixed the list of results, formatted by the current formatter
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
     * @return RScenariosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RScenariosPeer::R_SCENARIO_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RScenariosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RScenariosPeer::R_SCENARIO_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_scenario_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRScenarioId(1234); // WHERE r_scenario_id = 1234
     * $query->filterByRScenarioId(array(12, 34)); // WHERE r_scenario_id IN (12, 34)
     * $query->filterByRScenarioId(array('min' => 12)); // WHERE r_scenario_id >= 12
     * $query->filterByRScenarioId(array('max' => 12)); // WHERE r_scenario_id <= 12
     * </code>
     *
     * @param     mixed $rScenarioId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RScenariosQuery The current query, for fluid interface
     */
    public function filterByRScenarioId($rScenarioId = null, $comparison = null)
    {
        if (is_array($rScenarioId)) {
            $useMinMax = false;
            if (isset($rScenarioId['min'])) {
                $this->addUsingAlias(RScenariosPeer::R_SCENARIO_ID, $rScenarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rScenarioId['max'])) {
                $this->addUsingAlias(RScenariosPeer::R_SCENARIO_ID, $rScenarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RScenariosPeer::R_SCENARIO_ID, $rScenarioId, $comparison);
    }

    /**
     * Filter the query on the r_scenario_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRScenarioLibelle('fooValue');   // WHERE r_scenario_libelle = 'fooValue'
     * $query->filterByRScenarioLibelle('%fooValue%'); // WHERE r_scenario_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rScenarioLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RScenariosQuery The current query, for fluid interface
     */
    public function filterByRScenarioLibelle($rScenarioLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rScenarioLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rScenarioLibelle)) {
                $rScenarioLibelle = str_replace('*', '%', $rScenarioLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RScenariosPeer::R_SCENARIO_LIBELLE, $rScenarioLibelle, $comparison);
    }

    /**
     * Filter the query on the r_scenario_libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByRScenarioLibelleEn('fooValue');   // WHERE r_scenario_libelle_en = 'fooValue'
     * $query->filterByRScenarioLibelleEn('%fooValue%'); // WHERE r_scenario_libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rScenarioLibelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RScenariosQuery The current query, for fluid interface
     */
    public function filterByRScenarioLibelleEn($rScenarioLibelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rScenarioLibelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rScenarioLibelleEn)) {
                $rScenarioLibelleEn = str_replace('*', '%', $rScenarioLibelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RScenariosPeer::R_SCENARIO_LIBELLE_EN, $rScenarioLibelleEn, $comparison);
    }

    /**
     * Filter the query on the r_scenario_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRScenarioActif(true); // WHERE r_scenario_actif = true
     * $query->filterByRScenarioActif('yes'); // WHERE r_scenario_actif = true
     * </code>
     *
     * @param     boolean|string $rScenarioActif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RScenariosQuery The current query, for fluid interface
     */
    public function filterByRScenarioActif($rScenarioActif = null, $comparison = null)
    {
        if (is_string($rScenarioActif)) {
            $rScenarioActif = in_array(strtolower($rScenarioActif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RScenariosPeer::R_SCENARIO_ACTIF, $rScenarioActif, $comparison);
    }

    /**
     * Filter the query by a related OperationScenarii object
     *
     * @param   OperationScenarii|PropelObjectCollection $operationScenarii  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RScenariosQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationScenarii($operationScenarii, $comparison = null)
    {
        if ($operationScenarii instanceof OperationScenarii) {
            return $this
                ->addUsingAlias(RScenariosPeer::R_SCENARIO_ID, $operationScenarii->getOpRScenarioId(), $comparison);
        } elseif ($operationScenarii instanceof PropelObjectCollection) {
            return $this
                ->useOperationScenariiQuery()
                ->filterByPrimaryKeys($operationScenarii->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationScenarii() only accepts arguments of type OperationScenarii or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationScenarii relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RScenariosQuery The current query, for fluid interface
     */
    public function joinOperationScenarii($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationScenarii');

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
            $this->addJoinObject($join, 'OperationScenarii');
        }

        return $this;
    }

    /**
     * Use the OperationScenarii relation OperationScenarii object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationScenariiQuery A secondary query class using the current class as primary query
     */
    public function useOperationScenariiQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationScenarii($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationScenarii', 'OperationScenariiQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTplScenario object
     *
     * @param   ROperationTypeSubTplScenario|PropelObjectCollection $rOperationTypeSubTplScenario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RScenariosQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplScenario($rOperationTypeSubTplScenario, $comparison = null)
    {
        if ($rOperationTypeSubTplScenario instanceof ROperationTypeSubTplScenario) {
            return $this
                ->addUsingAlias(RScenariosPeer::R_SCENARIO_ID, $rOperationTypeSubTplScenario->getRScenarioId(), $comparison);
        } elseif ($rOperationTypeSubTplScenario instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplScenarioQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplScenario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplScenario() only accepts arguments of type ROperationTypeSubTplScenario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplScenario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RScenariosQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplScenario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplScenario');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplScenario');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplScenario relation ROperationTypeSubTplScenario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplScenarioQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplScenarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplScenario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplScenario', 'ROperationTypeSubTplScenarioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RScenarios $rScenarios Object to remove from the list of results
     *
     * @return RScenariosQuery The current query, for fluid interface
     */
    public function prune($rScenarios = null)
    {
        if ($rScenarios) {
            $this->addUsingAlias(RScenariosPeer::R_SCENARIO_ID, $rScenarios->getRScenarioId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
