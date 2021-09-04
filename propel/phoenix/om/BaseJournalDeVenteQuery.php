<?php


/**
 * Base class that represents a query for the 'journal_de_vente' table.
 *
 *
 *
 * @method JournalDeVenteQuery orderByJdvId($order = Criteria::ASC) Order by the jdv_id column
 * @method JournalDeVenteQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method JournalDeVenteQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method JournalDeVenteQuery groupByJdvId() Group by the jdv_id column
 * @method JournalDeVenteQuery groupByDateCreate() Group by the date_create column
 * @method JournalDeVenteQuery groupByUserId() Group by the user_id column
 *
 * @method JournalDeVenteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method JournalDeVenteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method JournalDeVenteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method JournalDeVenteQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method JournalDeVenteQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method JournalDeVenteQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method JournalDeVenteQuery leftJoinJournalDeVenteLigne($relationAlias = null) Adds a LEFT JOIN clause to the query using the JournalDeVenteLigne relation
 * @method JournalDeVenteQuery rightJoinJournalDeVenteLigne($relationAlias = null) Adds a RIGHT JOIN clause to the query using the JournalDeVenteLigne relation
 * @method JournalDeVenteQuery innerJoinJournalDeVenteLigne($relationAlias = null) Adds a INNER JOIN clause to the query using the JournalDeVenteLigne relation
 *
 * @method JournalDeVenteQuery leftJoinFactureEditionHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureEditionHistory relation
 * @method JournalDeVenteQuery rightJoinFactureEditionHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureEditionHistory relation
 * @method JournalDeVenteQuery innerJoinFactureEditionHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureEditionHistory relation
 *
 * @method JournalDeVente findOne(PropelPDO $con = null) Return the first JournalDeVente matching the query
 * @method JournalDeVente findOneOrCreate(PropelPDO $con = null) Return the first JournalDeVente matching the query, or a new JournalDeVente object populated from the query conditions when no match is found
 *
 * @method JournalDeVente findOneByDateCreate(string $date_create) Return the first JournalDeVente filtered by the date_create column
 * @method JournalDeVente findOneByUserId(int $user_id) Return the first JournalDeVente filtered by the user_id column
 *
 * @method array findByJdvId(int $jdv_id) Return JournalDeVente objects filtered by the jdv_id column
 * @method array findByDateCreate(string $date_create) Return JournalDeVente objects filtered by the date_create column
 * @method array findByUserId(int $user_id) Return JournalDeVente objects filtered by the user_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseJournalDeVenteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseJournalDeVenteQuery object.
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
            $modelName = 'JournalDeVente';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new JournalDeVenteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   JournalDeVenteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return JournalDeVenteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof JournalDeVenteQuery) {
            return $criteria;
        }
        $query = new JournalDeVenteQuery(null, null, $modelAlias);

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
     * @return   JournalDeVente|JournalDeVente[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = JournalDeVentePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(JournalDeVentePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 JournalDeVente A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByJdvId($key, $con = null)
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
     * @return                 JournalDeVente A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `jdv_id`, `date_create`, `user_id` FROM `journal_de_vente` WHERE `jdv_id` = :p0';
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
            $obj = new JournalDeVente();
            $obj->hydrate($row);
            JournalDeVentePeer::addInstanceToPool($obj, (string) $key);
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
     * @return JournalDeVente|JournalDeVente[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|JournalDeVente[]|mixed the list of results, formatted by the current formatter
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
     * @return JournalDeVenteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(JournalDeVentePeer::JDV_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return JournalDeVenteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(JournalDeVentePeer::JDV_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the jdv_id column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvId(1234); // WHERE jdv_id = 1234
     * $query->filterByJdvId(array(12, 34)); // WHERE jdv_id IN (12, 34)
     * $query->filterByJdvId(array('min' => 12)); // WHERE jdv_id >= 12
     * $query->filterByJdvId(array('max' => 12)); // WHERE jdv_id <= 12
     * </code>
     *
     * @param     mixed $jdvId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalDeVenteQuery The current query, for fluid interface
     */
    public function filterByJdvId($jdvId = null, $comparison = null)
    {
        if (is_array($jdvId)) {
            $useMinMax = false;
            if (isset($jdvId['min'])) {
                $this->addUsingAlias(JournalDeVentePeer::JDV_ID, $jdvId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jdvId['max'])) {
                $this->addUsingAlias(JournalDeVentePeer::JDV_ID, $jdvId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVentePeer::JDV_ID, $jdvId, $comparison);
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
     * @return JournalDeVenteQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(JournalDeVentePeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(JournalDeVentePeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVentePeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return JournalDeVenteQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(JournalDeVentePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(JournalDeVentePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalDeVentePeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 JournalDeVenteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(JournalDeVentePeer::JDV_ID, $factures->getJdvId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            return $this
                ->useFacturesQuery()
                ->filterByPrimaryKeys($factures->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactures() only accepts arguments of type Factures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Factures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return JournalDeVenteQuery The current query, for fluid interface
     */
    public function joinFactures($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Factures');

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
            $this->addJoinObject($join, 'Factures');
        }

        return $this;
    }

    /**
     * Use the Factures relation Factures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturesQuery A secondary query class using the current class as primary query
     */
    public function useFacturesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factures', 'FacturesQuery');
    }

    /**
     * Filter the query by a related JournalDeVenteLigne object
     *
     * @param   JournalDeVenteLigne|PropelObjectCollection $journalDeVenteLigne  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 JournalDeVenteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByJournalDeVenteLigne($journalDeVenteLigne, $comparison = null)
    {
        if ($journalDeVenteLigne instanceof JournalDeVenteLigne) {
            return $this
                ->addUsingAlias(JournalDeVentePeer::JDV_ID, $journalDeVenteLigne->getJdvId(), $comparison);
        } elseif ($journalDeVenteLigne instanceof PropelObjectCollection) {
            return $this
                ->useJournalDeVenteLigneQuery()
                ->filterByPrimaryKeys($journalDeVenteLigne->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByJournalDeVenteLigne() only accepts arguments of type JournalDeVenteLigne or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the JournalDeVenteLigne relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return JournalDeVenteQuery The current query, for fluid interface
     */
    public function joinJournalDeVenteLigne($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('JournalDeVenteLigne');

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
            $this->addJoinObject($join, 'JournalDeVenteLigne');
        }

        return $this;
    }

    /**
     * Use the JournalDeVenteLigne relation JournalDeVenteLigne object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   JournalDeVenteLigneQuery A secondary query class using the current class as primary query
     */
    public function useJournalDeVenteLigneQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinJournalDeVenteLigne($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'JournalDeVenteLigne', 'JournalDeVenteLigneQuery');
    }

    /**
     * Filter the query by a related FactureEditionHistory object
     *
     * @param   FactureEditionHistory|PropelObjectCollection $factureEditionHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 JournalDeVenteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureEditionHistory($factureEditionHistory, $comparison = null)
    {
        if ($factureEditionHistory instanceof FactureEditionHistory) {
            return $this
                ->addUsingAlias(JournalDeVentePeer::JDV_ID, $factureEditionHistory->getJdvId(), $comparison);
        } elseif ($factureEditionHistory instanceof PropelObjectCollection) {
            return $this
                ->useFactureEditionHistoryQuery()
                ->filterByPrimaryKeys($factureEditionHistory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactureEditionHistory() only accepts arguments of type FactureEditionHistory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FactureEditionHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return JournalDeVenteQuery The current query, for fluid interface
     */
    public function joinFactureEditionHistory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FactureEditionHistory');

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
            $this->addJoinObject($join, 'FactureEditionHistory');
        }

        return $this;
    }

    /**
     * Use the FactureEditionHistory relation FactureEditionHistory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FactureEditionHistoryQuery A secondary query class using the current class as primary query
     */
    public function useFactureEditionHistoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactureEditionHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactureEditionHistory', 'FactureEditionHistoryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   JournalDeVente $journalDeVente Object to remove from the list of results
     *
     * @return JournalDeVenteQuery The current query, for fluid interface
     */
    public function prune($journalDeVente = null)
    {
        if ($journalDeVente) {
            $this->addUsingAlias(JournalDeVentePeer::JDV_ID, $journalDeVente->getJdvId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
