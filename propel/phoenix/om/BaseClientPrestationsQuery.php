<?php


/**
 * Base class that represents a query for the 'client_prestations' table.
 *
 *
 *
 * @method ClientPrestationsQuery orderByClPrestId($order = Criteria::ASC) Order by the cl_prest_id column
 * @method ClientPrestationsQuery orderByClId($order = Criteria::ASC) Order by the cl_id column
 * @method ClientPrestationsQuery orderByRPrestId($order = Criteria::ASC) Order by the r_prest_id column
 * @method ClientPrestationsQuery orderByClPrestPv($order = Criteria::ASC) Order by the cl_prest_pv column
 * @method ClientPrestationsQuery orderByRPClientLibelle($order = Criteria::ASC) Order by the r_p_client_libelle column
 *
 * @method ClientPrestationsQuery groupByClPrestId() Group by the cl_prest_id column
 * @method ClientPrestationsQuery groupByClId() Group by the cl_id column
 * @method ClientPrestationsQuery groupByRPrestId() Group by the r_prest_id column
 * @method ClientPrestationsQuery groupByClPrestPv() Group by the cl_prest_pv column
 * @method ClientPrestationsQuery groupByRPClientLibelle() Group by the r_p_client_libelle column
 *
 * @method ClientPrestationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClientPrestationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClientPrestationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ClientPrestationsQuery leftJoinClients($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clients relation
 * @method ClientPrestationsQuery rightJoinClients($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clients relation
 * @method ClientPrestationsQuery innerJoinClients($relationAlias = null) Adds a INNER JOIN clause to the query using the Clients relation
 *
 * @method ClientPrestations findOne(PropelPDO $con = null) Return the first ClientPrestations matching the query
 * @method ClientPrestations findOneOrCreate(PropelPDO $con = null) Return the first ClientPrestations matching the query, or a new ClientPrestations object populated from the query conditions when no match is found
 *
 * @method ClientPrestations findOneByClId(int $cl_id) Return the first ClientPrestations filtered by the cl_id column
 * @method ClientPrestations findOneByRPrestId(int $r_prest_id) Return the first ClientPrestations filtered by the r_prest_id column
 * @method ClientPrestations findOneByClPrestPv(float $cl_prest_pv) Return the first ClientPrestations filtered by the cl_prest_pv column
 * @method ClientPrestations findOneByRPClientLibelle(string $r_p_client_libelle) Return the first ClientPrestations filtered by the r_p_client_libelle column
 *
 * @method array findByClPrestId(int $cl_prest_id) Return ClientPrestations objects filtered by the cl_prest_id column
 * @method array findByClId(int $cl_id) Return ClientPrestations objects filtered by the cl_id column
 * @method array findByRPrestId(int $r_prest_id) Return ClientPrestations objects filtered by the r_prest_id column
 * @method array findByClPrestPv(float $cl_prest_pv) Return ClientPrestations objects filtered by the cl_prest_pv column
 * @method array findByRPClientLibelle(string $r_p_client_libelle) Return ClientPrestations objects filtered by the r_p_client_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseClientPrestationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClientPrestationsQuery object.
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
            $modelName = 'ClientPrestations';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClientPrestationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClientPrestationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClientPrestationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClientPrestationsQuery) {
            return $criteria;
        }
        $query = new ClientPrestationsQuery(null, null, $modelAlias);

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
     * @return   ClientPrestations|ClientPrestations[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClientPrestationsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClientPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ClientPrestations A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByClPrestId($key, $con = null)
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
     * @return                 ClientPrestations A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `cl_prest_id`, `cl_id`, `r_prest_id`, `cl_prest_pv`, `r_p_client_libelle` FROM `client_prestations` WHERE `cl_prest_id` = :p0';
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
            $obj = new ClientPrestations();
            $obj->hydrate($row);
            ClientPrestationsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ClientPrestations|ClientPrestations[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ClientPrestations[]|mixed the list of results, formatted by the current formatter
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
     * @return ClientPrestationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClientPrestationsPeer::CL_PREST_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClientPrestationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClientPrestationsPeer::CL_PREST_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the cl_prest_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClPrestId(1234); // WHERE cl_prest_id = 1234
     * $query->filterByClPrestId(array(12, 34)); // WHERE cl_prest_id IN (12, 34)
     * $query->filterByClPrestId(array('min' => 12)); // WHERE cl_prest_id >= 12
     * $query->filterByClPrestId(array('max' => 12)); // WHERE cl_prest_id <= 12
     * </code>
     *
     * @param     mixed $clPrestId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientPrestationsQuery The current query, for fluid interface
     */
    public function filterByClPrestId($clPrestId = null, $comparison = null)
    {
        if (is_array($clPrestId)) {
            $useMinMax = false;
            if (isset($clPrestId['min'])) {
                $this->addUsingAlias(ClientPrestationsPeer::CL_PREST_ID, $clPrestId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clPrestId['max'])) {
                $this->addUsingAlias(ClientPrestationsPeer::CL_PREST_ID, $clPrestId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientPrestationsPeer::CL_PREST_ID, $clPrestId, $comparison);
    }

    /**
     * Filter the query on the cl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClId(1234); // WHERE cl_id = 1234
     * $query->filterByClId(array(12, 34)); // WHERE cl_id IN (12, 34)
     * $query->filterByClId(array('min' => 12)); // WHERE cl_id >= 12
     * $query->filterByClId(array('max' => 12)); // WHERE cl_id <= 12
     * </code>
     *
     * @see       filterByClients()
     *
     * @param     mixed $clId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientPrestationsQuery The current query, for fluid interface
     */
    public function filterByClId($clId = null, $comparison = null)
    {
        if (is_array($clId)) {
            $useMinMax = false;
            if (isset($clId['min'])) {
                $this->addUsingAlias(ClientPrestationsPeer::CL_ID, $clId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clId['max'])) {
                $this->addUsingAlias(ClientPrestationsPeer::CL_ID, $clId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientPrestationsPeer::CL_ID, $clId, $comparison);
    }

    /**
     * Filter the query on the r_prest_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPrestId(1234); // WHERE r_prest_id = 1234
     * $query->filterByRPrestId(array(12, 34)); // WHERE r_prest_id IN (12, 34)
     * $query->filterByRPrestId(array('min' => 12)); // WHERE r_prest_id >= 12
     * $query->filterByRPrestId(array('max' => 12)); // WHERE r_prest_id <= 12
     * </code>
     *
     * @param     mixed $rPrestId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPrestId($rPrestId = null, $comparison = null)
    {
        if (is_array($rPrestId)) {
            $useMinMax = false;
            if (isset($rPrestId['min'])) {
                $this->addUsingAlias(ClientPrestationsPeer::R_PREST_ID, $rPrestId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPrestId['max'])) {
                $this->addUsingAlias(ClientPrestationsPeer::R_PREST_ID, $rPrestId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientPrestationsPeer::R_PREST_ID, $rPrestId, $comparison);
    }

    /**
     * Filter the query on the cl_prest_pv column
     *
     * Example usage:
     * <code>
     * $query->filterByClPrestPv(1234); // WHERE cl_prest_pv = 1234
     * $query->filterByClPrestPv(array(12, 34)); // WHERE cl_prest_pv IN (12, 34)
     * $query->filterByClPrestPv(array('min' => 12)); // WHERE cl_prest_pv >= 12
     * $query->filterByClPrestPv(array('max' => 12)); // WHERE cl_prest_pv <= 12
     * </code>
     *
     * @param     mixed $clPrestPv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientPrestationsQuery The current query, for fluid interface
     */
    public function filterByClPrestPv($clPrestPv = null, $comparison = null)
    {
        if (is_array($clPrestPv)) {
            $useMinMax = false;
            if (isset($clPrestPv['min'])) {
                $this->addUsingAlias(ClientPrestationsPeer::CL_PREST_PV, $clPrestPv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clPrestPv['max'])) {
                $this->addUsingAlias(ClientPrestationsPeer::CL_PREST_PV, $clPrestPv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientPrestationsPeer::CL_PREST_PV, $clPrestPv, $comparison);
    }

    /**
     * Filter the query on the r_p_client_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPClientLibelle('fooValue');   // WHERE r_p_client_libelle = 'fooValue'
     * $query->filterByRPClientLibelle('%fooValue%'); // WHERE r_p_client_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPClientLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPClientLibelle($rPClientLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPClientLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPClientLibelle)) {
                $rPClientLibelle = str_replace('*', '%', $rPClientLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientPrestationsPeer::R_P_CLIENT_LIBELLE, $rPClientLibelle, $comparison);
    }

    /**
     * Filter the query by a related Clients object
     *
     * @param   Clients|PropelObjectCollection $clients The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClients($clients, $comparison = null)
    {
        if ($clients instanceof Clients) {
            return $this
                ->addUsingAlias(ClientPrestationsPeer::CL_ID, $clients->getClId(), $comparison);
        } elseif ($clients instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientPrestationsPeer::CL_ID, $clients->toKeyValue('PrimaryKey', 'ClId'), $comparison);
        } else {
            throw new PropelException('filterByClients() only accepts arguments of type Clients or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Clients relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientPrestationsQuery The current query, for fluid interface
     */
    public function joinClients($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Clients');

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
            $this->addJoinObject($join, 'Clients');
        }

        return $this;
    }

    /**
     * Use the Clients relation Clients object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientsQuery A secondary query class using the current class as primary query
     */
    public function useClientsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClients($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Clients', 'ClientsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ClientPrestations $clientPrestations Object to remove from the list of results
     *
     * @return ClientPrestationsQuery The current query, for fluid interface
     */
    public function prune($clientPrestations = null)
    {
        if ($clientPrestations) {
            $this->addUsingAlias(ClientPrestationsPeer::CL_PREST_ID, $clientPrestations->getClPrestId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
