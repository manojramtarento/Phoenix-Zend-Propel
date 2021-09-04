<?php


/**
 * Base class that represents a query for the 'r_operation_classifications' table.
 *
 *
 *
 * @method ROperationClassificationsQuery orderByROperationClassificationId($order = Criteria::ASC) Order by the r_operation_classification_id column
 * @method ROperationClassificationsQuery orderByROperationClassificationLabel($order = Criteria::ASC) Order by the r_operation_classification_label column
 *
 * @method ROperationClassificationsQuery groupByROperationClassificationId() Group by the r_operation_classification_id column
 * @method ROperationClassificationsQuery groupByROperationClassificationLabel() Group by the r_operation_classification_label column
 *
 * @method ROperationClassificationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationClassificationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationClassificationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationClassificationsQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ROperationClassificationsQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ROperationClassificationsQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ROperationClassifications findOne(PropelPDO $con = null) Return the first ROperationClassifications matching the query
 * @method ROperationClassifications findOneOrCreate(PropelPDO $con = null) Return the first ROperationClassifications matching the query, or a new ROperationClassifications object populated from the query conditions when no match is found
 *
 * @method ROperationClassifications findOneByROperationClassificationLabel(string $r_operation_classification_label) Return the first ROperationClassifications filtered by the r_operation_classification_label column
 *
 * @method array findByROperationClassificationId(int $r_operation_classification_id) Return ROperationClassifications objects filtered by the r_operation_classification_id column
 * @method array findByROperationClassificationLabel(string $r_operation_classification_label) Return ROperationClassifications objects filtered by the r_operation_classification_label column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationClassificationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationClassificationsQuery object.
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
            $modelName = 'ROperationClassifications';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationClassificationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationClassificationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationClassificationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationClassificationsQuery) {
            return $criteria;
        }
        $query = new ROperationClassificationsQuery(null, null, $modelAlias);

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
     * @return   ROperationClassifications|ROperationClassifications[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationClassificationsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationClassificationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationClassifications A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROperationClassificationId($key, $con = null)
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
     * @return                 ROperationClassifications A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_operation_classification_id`, `r_operation_classification_label` FROM `r_operation_classifications` WHERE `r_operation_classification_id` = :p0';
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
            $obj = new ROperationClassifications();
            $obj->hydrate($row);
            ROperationClassificationsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationClassifications|ROperationClassifications[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationClassifications[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationClassificationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationClassificationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_operation_classification_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationClassificationId(1234); // WHERE r_operation_classification_id = 1234
     * $query->filterByROperationClassificationId(array(12, 34)); // WHERE r_operation_classification_id IN (12, 34)
     * $query->filterByROperationClassificationId(array('min' => 12)); // WHERE r_operation_classification_id >= 12
     * $query->filterByROperationClassificationId(array('max' => 12)); // WHERE r_operation_classification_id <= 12
     * </code>
     *
     * @param     mixed $rOperationClassificationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationClassificationsQuery The current query, for fluid interface
     */
    public function filterByROperationClassificationId($rOperationClassificationId = null, $comparison = null)
    {
        if (is_array($rOperationClassificationId)) {
            $useMinMax = false;
            if (isset($rOperationClassificationId['min'])) {
                $this->addUsingAlias(ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $rOperationClassificationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOperationClassificationId['max'])) {
                $this->addUsingAlias(ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $rOperationClassificationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $rOperationClassificationId, $comparison);
    }

    /**
     * Filter the query on the r_operation_classification_label column
     *
     * Example usage:
     * <code>
     * $query->filterByROperationClassificationLabel('fooValue');   // WHERE r_operation_classification_label = 'fooValue'
     * $query->filterByROperationClassificationLabel('%fooValue%'); // WHERE r_operation_classification_label LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rOperationClassificationLabel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationClassificationsQuery The current query, for fluid interface
     */
    public function filterByROperationClassificationLabel($rOperationClassificationLabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rOperationClassificationLabel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rOperationClassificationLabel)) {
                $rOperationClassificationLabel = str_replace('*', '%', $rOperationClassificationLabel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_LABEL, $rOperationClassificationLabel, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationClassificationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $operations->getOpClassificationId(), $comparison);
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
     * @return ROperationClassificationsQuery The current query, for fluid interface
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
     * @param   ROperationClassifications $rOperationClassifications Object to remove from the list of results
     *
     * @return ROperationClassificationsQuery The current query, for fluid interface
     */
    public function prune($rOperationClassifications = null)
    {
        if ($rOperationClassifications) {
            $this->addUsingAlias(ROperationClassificationsPeer::R_OPERATION_CLASSIFICATION_ID, $rOperationClassifications->getROperationClassificationId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
