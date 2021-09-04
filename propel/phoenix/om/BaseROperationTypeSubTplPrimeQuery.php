<?php


/**
 * Base class that represents a query for the 'r_operation_type_sub_tpl_prime' table.
 *
 *
 *
 * @method ROperationTypeSubTplPrimeQuery orderByOstTplPrimeId($order = Criteria::ASC) Order by the ost_tpl_prime_id column
 * @method ROperationTypeSubTplPrimeQuery orderByOstTplId($order = Criteria::ASC) Order by the ost_tpl_id column
 * @method ROperationTypeSubTplPrimeQuery orderByOstTplPrimeLibelle($order = Criteria::ASC) Order by the ost_tpl_prime_libelle column
 * @method ROperationTypeSubTplPrimeQuery orderByOstTplPrimeNumero($order = Criteria::ASC) Order by the ost_tpl_prime_numero column
 * @method ROperationTypeSubTplPrimeQuery orderByOstTplRewardType($order = Criteria::ASC) Order by the ost_tpl_reward_type column
 *
 * @method ROperationTypeSubTplPrimeQuery groupByOstTplPrimeId() Group by the ost_tpl_prime_id column
 * @method ROperationTypeSubTplPrimeQuery groupByOstTplId() Group by the ost_tpl_id column
 * @method ROperationTypeSubTplPrimeQuery groupByOstTplPrimeLibelle() Group by the ost_tpl_prime_libelle column
 * @method ROperationTypeSubTplPrimeQuery groupByOstTplPrimeNumero() Group by the ost_tpl_prime_numero column
 * @method ROperationTypeSubTplPrimeQuery groupByOstTplRewardType() Group by the ost_tpl_reward_type column
 *
 * @method ROperationTypeSubTplPrimeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationTypeSubTplPrimeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationTypeSubTplPrimeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationTypeSubTplPrimeQuery leftJoinROperationTypeSubTpl($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplPrimeQuery rightJoinROperationTypeSubTpl($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTpl relation
 * @method ROperationTypeSubTplPrimeQuery innerJoinROperationTypeSubTpl($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTpl relation
 *
 * @method ROperationTypeSubTplPrimeQuery leftJoinRRewardTypes($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRewardTypes relation
 * @method ROperationTypeSubTplPrimeQuery rightJoinRRewardTypes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRewardTypes relation
 * @method ROperationTypeSubTplPrimeQuery innerJoinRRewardTypes($relationAlias = null) Adds a INNER JOIN clause to the query using the RRewardTypes relation
 *
 * @method ROperationTypeSubTplPrime findOne(PropelPDO $con = null) Return the first ROperationTypeSubTplPrime matching the query
 * @method ROperationTypeSubTplPrime findOneOrCreate(PropelPDO $con = null) Return the first ROperationTypeSubTplPrime matching the query, or a new ROperationTypeSubTplPrime object populated from the query conditions when no match is found
 *
 * @method ROperationTypeSubTplPrime findOneByOstTplId(int $ost_tpl_id) Return the first ROperationTypeSubTplPrime filtered by the ost_tpl_id column
 * @method ROperationTypeSubTplPrime findOneByOstTplPrimeLibelle(string $ost_tpl_prime_libelle) Return the first ROperationTypeSubTplPrime filtered by the ost_tpl_prime_libelle column
 * @method ROperationTypeSubTplPrime findOneByOstTplPrimeNumero(int $ost_tpl_prime_numero) Return the first ROperationTypeSubTplPrime filtered by the ost_tpl_prime_numero column
 * @method ROperationTypeSubTplPrime findOneByOstTplRewardType(int $ost_tpl_reward_type) Return the first ROperationTypeSubTplPrime filtered by the ost_tpl_reward_type column
 *
 * @method array findByOstTplPrimeId(int $ost_tpl_prime_id) Return ROperationTypeSubTplPrime objects filtered by the ost_tpl_prime_id column
 * @method array findByOstTplId(int $ost_tpl_id) Return ROperationTypeSubTplPrime objects filtered by the ost_tpl_id column
 * @method array findByOstTplPrimeLibelle(string $ost_tpl_prime_libelle) Return ROperationTypeSubTplPrime objects filtered by the ost_tpl_prime_libelle column
 * @method array findByOstTplPrimeNumero(int $ost_tpl_prime_numero) Return ROperationTypeSubTplPrime objects filtered by the ost_tpl_prime_numero column
 * @method array findByOstTplRewardType(int $ost_tpl_reward_type) Return ROperationTypeSubTplPrime objects filtered by the ost_tpl_reward_type column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationTypeSubTplPrimeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationTypeSubTplPrimeQuery object.
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
            $modelName = 'ROperationTypeSubTplPrime';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationTypeSubTplPrimeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationTypeSubTplPrimeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationTypeSubTplPrimeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationTypeSubTplPrimeQuery) {
            return $criteria;
        }
        $query = new ROperationTypeSubTplPrimeQuery(null, null, $modelAlias);

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
     * @return   ROperationTypeSubTplPrime|ROperationTypeSubTplPrime[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationTypeSubTplPrimePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationTypeSubTplPrimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationTypeSubTplPrime A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOstTplPrimeId($key, $con = null)
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
     * @return                 ROperationTypeSubTplPrime A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ost_tpl_prime_id`, `ost_tpl_id`, `ost_tpl_prime_libelle`, `ost_tpl_prime_numero`, `ost_tpl_reward_type` FROM `r_operation_type_sub_tpl_prime` WHERE `ost_tpl_prime_id` = :p0';
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
            $obj = new ROperationTypeSubTplPrime();
            $obj->hydrate($row);
            ROperationTypeSubTplPrimePeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationTypeSubTplPrime|ROperationTypeSubTplPrime[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationTypeSubTplPrime[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ost_tpl_prime_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplPrimeId(1234); // WHERE ost_tpl_prime_id = 1234
     * $query->filterByOstTplPrimeId(array(12, 34)); // WHERE ost_tpl_prime_id IN (12, 34)
     * $query->filterByOstTplPrimeId(array('min' => 12)); // WHERE ost_tpl_prime_id >= 12
     * $query->filterByOstTplPrimeId(array('max' => 12)); // WHERE ost_tpl_prime_id <= 12
     * </code>
     *
     * @param     mixed $ostTplPrimeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     */
    public function filterByOstTplPrimeId($ostTplPrimeId = null, $comparison = null)
    {
        if (is_array($ostTplPrimeId)) {
            $useMinMax = false;
            if (isset($ostTplPrimeId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $ostTplPrimeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplPrimeId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $ostTplPrimeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $ostTplPrimeId, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplId(1234); // WHERE ost_tpl_id = 1234
     * $query->filterByOstTplId(array(12, 34)); // WHERE ost_tpl_id IN (12, 34)
     * $query->filterByOstTplId(array('min' => 12)); // WHERE ost_tpl_id >= 12
     * $query->filterByOstTplId(array('max' => 12)); // WHERE ost_tpl_id <= 12
     * </code>
     *
     * @see       filterByROperationTypeSubTpl()
     *
     * @param     mixed $ostTplId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     */
    public function filterByOstTplId($ostTplId = null, $comparison = null)
    {
        if (is_array($ostTplId)) {
            $useMinMax = false;
            if (isset($ostTplId['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_ID, $ostTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplId['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_ID, $ostTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_ID, $ostTplId, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_prime_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplPrimeLibelle('fooValue');   // WHERE ost_tpl_prime_libelle = 'fooValue'
     * $query->filterByOstTplPrimeLibelle('%fooValue%'); // WHERE ost_tpl_prime_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ostTplPrimeLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     */
    public function filterByOstTplPrimeLibelle($ostTplPrimeLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ostTplPrimeLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ostTplPrimeLibelle)) {
                $ostTplPrimeLibelle = str_replace('*', '%', $ostTplPrimeLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_LIBELLE, $ostTplPrimeLibelle, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_prime_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplPrimeNumero(1234); // WHERE ost_tpl_prime_numero = 1234
     * $query->filterByOstTplPrimeNumero(array(12, 34)); // WHERE ost_tpl_prime_numero IN (12, 34)
     * $query->filterByOstTplPrimeNumero(array('min' => 12)); // WHERE ost_tpl_prime_numero >= 12
     * $query->filterByOstTplPrimeNumero(array('max' => 12)); // WHERE ost_tpl_prime_numero <= 12
     * </code>
     *
     * @param     mixed $ostTplPrimeNumero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     */
    public function filterByOstTplPrimeNumero($ostTplPrimeNumero = null, $comparison = null)
    {
        if (is_array($ostTplPrimeNumero)) {
            $useMinMax = false;
            if (isset($ostTplPrimeNumero['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO, $ostTplPrimeNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplPrimeNumero['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO, $ostTplPrimeNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_NUMERO, $ostTplPrimeNumero, $comparison);
    }

    /**
     * Filter the query on the ost_tpl_reward_type column
     *
     * Example usage:
     * <code>
     * $query->filterByOstTplRewardType(1234); // WHERE ost_tpl_reward_type = 1234
     * $query->filterByOstTplRewardType(array(12, 34)); // WHERE ost_tpl_reward_type IN (12, 34)
     * $query->filterByOstTplRewardType(array('min' => 12)); // WHERE ost_tpl_reward_type >= 12
     * $query->filterByOstTplRewardType(array('max' => 12)); // WHERE ost_tpl_reward_type <= 12
     * </code>
     *
     * @see       filterByRRewardTypes()
     *
     * @param     mixed $ostTplRewardType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     */
    public function filterByOstTplRewardType($ostTplRewardType = null, $comparison = null)
    {
        if (is_array($ostTplRewardType)) {
            $useMinMax = false;
            if (isset($ostTplRewardType['min'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, $ostTplRewardType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ostTplRewardType['max'])) {
                $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, $ostTplRewardType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, $ostTplRewardType, $comparison);
    }

    /**
     * Filter the query by a related ROperationTypeSubTpl object
     *
     * @param   ROperationTypeSubTpl|PropelObjectCollection $rOperationTypeSubTpl The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTpl($rOperationTypeSubTpl, $comparison = null)
    {
        if ($rOperationTypeSubTpl instanceof ROperationTypeSubTpl) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_ID, $rOperationTypeSubTpl->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTpl instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_ID, $rOperationTypeSubTpl->toKeyValue('PrimaryKey', 'OstTplId'), $comparison);
        } else {
            throw new PropelException('filterByROperationTypeSubTpl() only accepts arguments of type ROperationTypeSubTpl or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTpl relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTpl($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTpl');

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
            $this->addJoinObject($join, 'ROperationTypeSubTpl');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTpl relation ROperationTypeSubTpl object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTpl($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTpl', 'ROperationTypeSubTplQuery');
    }

    /**
     * Filter the query by a related RRewardTypes object
     *
     * @param   RRewardTypes|PropelObjectCollection $rRewardTypes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRewardTypes($rRewardTypes, $comparison = null)
    {
        if ($rRewardTypes instanceof RRewardTypes) {
            return $this
                ->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, $rRewardTypes->getRRewardTypeId(), $comparison);
        } elseif ($rRewardTypes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_REWARD_TYPE, $rRewardTypes->toKeyValue('PrimaryKey', 'RRewardTypeId'), $comparison);
        } else {
            throw new PropelException('filterByRRewardTypes() only accepts arguments of type RRewardTypes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRewardTypes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     */
    public function joinRRewardTypes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRewardTypes');

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
            $this->addJoinObject($join, 'RRewardTypes');
        }

        return $this;
    }

    /**
     * Use the RRewardTypes relation RRewardTypes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRewardTypesQuery A secondary query class using the current class as primary query
     */
    public function useRRewardTypesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRRewardTypes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRewardTypes', 'RRewardTypesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationTypeSubTplPrime $rOperationTypeSubTplPrime Object to remove from the list of results
     *
     * @return ROperationTypeSubTplPrimeQuery The current query, for fluid interface
     */
    public function prune($rOperationTypeSubTplPrime = null)
    {
        if ($rOperationTypeSubTplPrime) {
            $this->addUsingAlias(ROperationTypeSubTplPrimePeer::OST_TPL_PRIME_ID, $rOperationTypeSubTplPrime->getOstTplPrimeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
