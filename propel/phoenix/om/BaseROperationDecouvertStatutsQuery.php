<?php


/**
 * Base class that represents a query for the 'r_operation_decouvert_statuts' table.
 *
 *
 *
 * @method ROperationDecouvertStatutsQuery orderByROpDecStatutId($order = Criteria::ASC) Order by the r_op_dec_statut_id column
 * @method ROperationDecouvertStatutsQuery orderByROpDecStatutLibelle($order = Criteria::ASC) Order by the r_op_dec_statut_libelle column
 *
 * @method ROperationDecouvertStatutsQuery groupByROpDecStatutId() Group by the r_op_dec_statut_id column
 * @method ROperationDecouvertStatutsQuery groupByROpDecStatutLibelle() Group by the r_op_dec_statut_libelle column
 *
 * @method ROperationDecouvertStatutsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationDecouvertStatutsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationDecouvertStatutsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationDecouvertStatuts findOne(PropelPDO $con = null) Return the first ROperationDecouvertStatuts matching the query
 * @method ROperationDecouvertStatuts findOneOrCreate(PropelPDO $con = null) Return the first ROperationDecouvertStatuts matching the query, or a new ROperationDecouvertStatuts object populated from the query conditions when no match is found
 *
 * @method ROperationDecouvertStatuts findOneByROpDecStatutLibelle(string $r_op_dec_statut_libelle) Return the first ROperationDecouvertStatuts filtered by the r_op_dec_statut_libelle column
 *
 * @method array findByROpDecStatutId(int $r_op_dec_statut_id) Return ROperationDecouvertStatuts objects filtered by the r_op_dec_statut_id column
 * @method array findByROpDecStatutLibelle(string $r_op_dec_statut_libelle) Return ROperationDecouvertStatuts objects filtered by the r_op_dec_statut_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationDecouvertStatutsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationDecouvertStatutsQuery object.
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
            $modelName = 'ROperationDecouvertStatuts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationDecouvertStatutsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationDecouvertStatutsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationDecouvertStatutsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationDecouvertStatutsQuery) {
            return $criteria;
        }
        $query = new ROperationDecouvertStatutsQuery(null, null, $modelAlias);

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
     * @return   ROperationDecouvertStatuts|ROperationDecouvertStatuts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationDecouvertStatutsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationDecouvertStatutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationDecouvertStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROpDecStatutId($key, $con = null)
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
     * @return                 ROperationDecouvertStatuts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_op_dec_statut_id`, `r_op_dec_statut_libelle` FROM `r_operation_decouvert_statuts` WHERE `r_op_dec_statut_id` = :p0';
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
            $obj = new ROperationDecouvertStatuts();
            $obj->hydrate($row);
            ROperationDecouvertStatutsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationDecouvertStatuts|ROperationDecouvertStatuts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationDecouvertStatuts[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationDecouvertStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationDecouvertStatutsPeer::R_OP_DEC_STATUT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationDecouvertStatutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationDecouvertStatutsPeer::R_OP_DEC_STATUT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_op_dec_statut_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROpDecStatutId(1234); // WHERE r_op_dec_statut_id = 1234
     * $query->filterByROpDecStatutId(array(12, 34)); // WHERE r_op_dec_statut_id IN (12, 34)
     * $query->filterByROpDecStatutId(array('min' => 12)); // WHERE r_op_dec_statut_id >= 12
     * $query->filterByROpDecStatutId(array('max' => 12)); // WHERE r_op_dec_statut_id <= 12
     * </code>
     *
     * @param     mixed $rOpDecStatutId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationDecouvertStatutsQuery The current query, for fluid interface
     */
    public function filterByROpDecStatutId($rOpDecStatutId = null, $comparison = null)
    {
        if (is_array($rOpDecStatutId)) {
            $useMinMax = false;
            if (isset($rOpDecStatutId['min'])) {
                $this->addUsingAlias(ROperationDecouvertStatutsPeer::R_OP_DEC_STATUT_ID, $rOpDecStatutId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpDecStatutId['max'])) {
                $this->addUsingAlias(ROperationDecouvertStatutsPeer::R_OP_DEC_STATUT_ID, $rOpDecStatutId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationDecouvertStatutsPeer::R_OP_DEC_STATUT_ID, $rOpDecStatutId, $comparison);
    }

    /**
     * Filter the query on the r_op_dec_statut_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByROpDecStatutLibelle('fooValue');   // WHERE r_op_dec_statut_libelle = 'fooValue'
     * $query->filterByROpDecStatutLibelle('%fooValue%'); // WHERE r_op_dec_statut_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rOpDecStatutLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationDecouvertStatutsQuery The current query, for fluid interface
     */
    public function filterByROpDecStatutLibelle($rOpDecStatutLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rOpDecStatutLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rOpDecStatutLibelle)) {
                $rOpDecStatutLibelle = str_replace('*', '%', $rOpDecStatutLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationDecouvertStatutsPeer::R_OP_DEC_STATUT_LIBELLE, $rOpDecStatutLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationDecouvertStatuts $rOperationDecouvertStatuts Object to remove from the list of results
     *
     * @return ROperationDecouvertStatutsQuery The current query, for fluid interface
     */
    public function prune($rOperationDecouvertStatuts = null)
    {
        if ($rOperationDecouvertStatuts) {
            $this->addUsingAlias(ROperationDecouvertStatutsPeer::R_OP_DEC_STATUT_ID, $rOperationDecouvertStatuts->getROpDecStatutId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
