<?php


/**
 * Base class that represents a query for the 'r_operation_statut_refus' table.
 *
 *
 *
 * @method ROperationStatutRefusQuery orderByROpStatutRefusId($order = Criteria::ASC) Order by the r_op_statut_refus_id column
 * @method ROperationStatutRefusQuery orderByROpStatutRefusMotif($order = Criteria::ASC) Order by the r_op_statut_refus_motif column
 *
 * @method ROperationStatutRefusQuery groupByROpStatutRefusId() Group by the r_op_statut_refus_id column
 * @method ROperationStatutRefusQuery groupByROpStatutRefusMotif() Group by the r_op_statut_refus_motif column
 *
 * @method ROperationStatutRefusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationStatutRefusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationStatutRefusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationStatutRefusQuery leftJoinOperationStatuts($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationStatuts relation
 * @method ROperationStatutRefusQuery rightJoinOperationStatuts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationStatuts relation
 * @method ROperationStatutRefusQuery innerJoinOperationStatuts($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationStatuts relation
 *
 * @method ROperationStatutRefus findOne(PropelPDO $con = null) Return the first ROperationStatutRefus matching the query
 * @method ROperationStatutRefus findOneOrCreate(PropelPDO $con = null) Return the first ROperationStatutRefus matching the query, or a new ROperationStatutRefus object populated from the query conditions when no match is found
 *
 * @method ROperationStatutRefus findOneByROpStatutRefusMotif(string $r_op_statut_refus_motif) Return the first ROperationStatutRefus filtered by the r_op_statut_refus_motif column
 *
 * @method array findByROpStatutRefusId(int $r_op_statut_refus_id) Return ROperationStatutRefus objects filtered by the r_op_statut_refus_id column
 * @method array findByROpStatutRefusMotif(string $r_op_statut_refus_motif) Return ROperationStatutRefus objects filtered by the r_op_statut_refus_motif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationStatutRefusQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationStatutRefusQuery object.
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
            $modelName = 'ROperationStatutRefus';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationStatutRefusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationStatutRefusQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationStatutRefusQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationStatutRefusQuery) {
            return $criteria;
        }
        $query = new ROperationStatutRefusQuery(null, null, $modelAlias);

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
     * @return   ROperationStatutRefus|ROperationStatutRefus[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationStatutRefusPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationStatutRefusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationStatutRefus A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROpStatutRefusId($key, $con = null)
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
     * @return                 ROperationStatutRefus A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_op_statut_refus_id`, `r_op_statut_refus_motif` FROM `r_operation_statut_refus` WHERE `r_op_statut_refus_id` = :p0';
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
            $obj = new ROperationStatutRefus();
            $obj->hydrate($row);
            ROperationStatutRefusPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationStatutRefus|ROperationStatutRefus[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationStatutRefus[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationStatutRefusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationStatutRefusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_op_statut_refus_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROpStatutRefusId(1234); // WHERE r_op_statut_refus_id = 1234
     * $query->filterByROpStatutRefusId(array(12, 34)); // WHERE r_op_statut_refus_id IN (12, 34)
     * $query->filterByROpStatutRefusId(array('min' => 12)); // WHERE r_op_statut_refus_id >= 12
     * $query->filterByROpStatutRefusId(array('max' => 12)); // WHERE r_op_statut_refus_id <= 12
     * </code>
     *
     * @param     mixed $rOpStatutRefusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationStatutRefusQuery The current query, for fluid interface
     */
    public function filterByROpStatutRefusId($rOpStatutRefusId = null, $comparison = null)
    {
        if (is_array($rOpStatutRefusId)) {
            $useMinMax = false;
            if (isset($rOpStatutRefusId['min'])) {
                $this->addUsingAlias(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $rOpStatutRefusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpStatutRefusId['max'])) {
                $this->addUsingAlias(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $rOpStatutRefusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $rOpStatutRefusId, $comparison);
    }

    /**
     * Filter the query on the r_op_statut_refus_motif column
     *
     * Example usage:
     * <code>
     * $query->filterByROpStatutRefusMotif('fooValue');   // WHERE r_op_statut_refus_motif = 'fooValue'
     * $query->filterByROpStatutRefusMotif('%fooValue%'); // WHERE r_op_statut_refus_motif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rOpStatutRefusMotif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationStatutRefusQuery The current query, for fluid interface
     */
    public function filterByROpStatutRefusMotif($rOpStatutRefusMotif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rOpStatutRefusMotif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rOpStatutRefusMotif)) {
                $rOpStatutRefusMotif = str_replace('*', '%', $rOpStatutRefusMotif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_MOTIF, $rOpStatutRefusMotif, $comparison);
    }

    /**
     * Filter the query by a related OperationStatuts object
     *
     * @param   OperationStatuts|PropelObjectCollection $operationStatuts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationStatutRefusQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationStatuts($operationStatuts, $comparison = null)
    {
        if ($operationStatuts instanceof OperationStatuts) {
            return $this
                ->addUsingAlias(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $operationStatuts->getHsRefusId(), $comparison);
        } elseif ($operationStatuts instanceof PropelObjectCollection) {
            return $this
                ->useOperationStatutsQuery()
                ->filterByPrimaryKeys($operationStatuts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationStatuts() only accepts arguments of type OperationStatuts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationStatuts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationStatutRefusQuery The current query, for fluid interface
     */
    public function joinOperationStatuts($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationStatuts');

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
            $this->addJoinObject($join, 'OperationStatuts');
        }

        return $this;
    }

    /**
     * Use the OperationStatuts relation OperationStatuts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationStatutsQuery A secondary query class using the current class as primary query
     */
    public function useOperationStatutsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationStatuts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationStatuts', 'OperationStatutsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationStatutRefus $rOperationStatutRefus Object to remove from the list of results
     *
     * @return ROperationStatutRefusQuery The current query, for fluid interface
     */
    public function prune($rOperationStatutRefus = null)
    {
        if ($rOperationStatutRefus) {
            $this->addUsingAlias(ROperationStatutRefusPeer::R_OP_STATUT_REFUS_ID, $rOperationStatutRefus->getROpStatutRefusId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
