<?php


/**
 * Base class that represents a query for the 'r_operation_decouvert_motif_accord' table.
 *
 *
 *
 * @method ROperationDecouvertMotifAccordQuery orderByROpDecMotifId($order = Criteria::ASC) Order by the r_op_dec_motif_id column
 * @method ROperationDecouvertMotifAccordQuery orderByROpDecMotifLibelle($order = Criteria::ASC) Order by the r_op_dec_motif_libelle column
 *
 * @method ROperationDecouvertMotifAccordQuery groupByROpDecMotifId() Group by the r_op_dec_motif_id column
 * @method ROperationDecouvertMotifAccordQuery groupByROpDecMotifLibelle() Group by the r_op_dec_motif_libelle column
 *
 * @method ROperationDecouvertMotifAccordQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ROperationDecouvertMotifAccordQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ROperationDecouvertMotifAccordQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ROperationDecouvertMotifAccord findOne(PropelPDO $con = null) Return the first ROperationDecouvertMotifAccord matching the query
 * @method ROperationDecouvertMotifAccord findOneOrCreate(PropelPDO $con = null) Return the first ROperationDecouvertMotifAccord matching the query, or a new ROperationDecouvertMotifAccord object populated from the query conditions when no match is found
 *
 * @method ROperationDecouvertMotifAccord findOneByROpDecMotifLibelle(string $r_op_dec_motif_libelle) Return the first ROperationDecouvertMotifAccord filtered by the r_op_dec_motif_libelle column
 *
 * @method array findByROpDecMotifId(int $r_op_dec_motif_id) Return ROperationDecouvertMotifAccord objects filtered by the r_op_dec_motif_id column
 * @method array findByROpDecMotifLibelle(string $r_op_dec_motif_libelle) Return ROperationDecouvertMotifAccord objects filtered by the r_op_dec_motif_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseROperationDecouvertMotifAccordQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseROperationDecouvertMotifAccordQuery object.
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
            $modelName = 'ROperationDecouvertMotifAccord';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ROperationDecouvertMotifAccordQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ROperationDecouvertMotifAccordQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ROperationDecouvertMotifAccordQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ROperationDecouvertMotifAccordQuery) {
            return $criteria;
        }
        $query = new ROperationDecouvertMotifAccordQuery(null, null, $modelAlias);

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
     * @return   ROperationDecouvertMotifAccord|ROperationDecouvertMotifAccord[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ROperationDecouvertMotifAccordPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ROperationDecouvertMotifAccordPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ROperationDecouvertMotifAccord A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByROpDecMotifId($key, $con = null)
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
     * @return                 ROperationDecouvertMotifAccord A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_op_dec_motif_id`, `r_op_dec_motif_libelle` FROM `r_operation_decouvert_motif_accord` WHERE `r_op_dec_motif_id` = :p0';
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
            $obj = new ROperationDecouvertMotifAccord();
            $obj->hydrate($row);
            ROperationDecouvertMotifAccordPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ROperationDecouvertMotifAccord|ROperationDecouvertMotifAccord[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ROperationDecouvertMotifAccord[]|mixed the list of results, formatted by the current formatter
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
     * @return ROperationDecouvertMotifAccordQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ROperationDecouvertMotifAccordPeer::R_OP_DEC_MOTIF_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ROperationDecouvertMotifAccordQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ROperationDecouvertMotifAccordPeer::R_OP_DEC_MOTIF_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_op_dec_motif_id column
     *
     * Example usage:
     * <code>
     * $query->filterByROpDecMotifId(1234); // WHERE r_op_dec_motif_id = 1234
     * $query->filterByROpDecMotifId(array(12, 34)); // WHERE r_op_dec_motif_id IN (12, 34)
     * $query->filterByROpDecMotifId(array('min' => 12)); // WHERE r_op_dec_motif_id >= 12
     * $query->filterByROpDecMotifId(array('max' => 12)); // WHERE r_op_dec_motif_id <= 12
     * </code>
     *
     * @param     mixed $rOpDecMotifId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationDecouvertMotifAccordQuery The current query, for fluid interface
     */
    public function filterByROpDecMotifId($rOpDecMotifId = null, $comparison = null)
    {
        if (is_array($rOpDecMotifId)) {
            $useMinMax = false;
            if (isset($rOpDecMotifId['min'])) {
                $this->addUsingAlias(ROperationDecouvertMotifAccordPeer::R_OP_DEC_MOTIF_ID, $rOpDecMotifId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rOpDecMotifId['max'])) {
                $this->addUsingAlias(ROperationDecouvertMotifAccordPeer::R_OP_DEC_MOTIF_ID, $rOpDecMotifId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ROperationDecouvertMotifAccordPeer::R_OP_DEC_MOTIF_ID, $rOpDecMotifId, $comparison);
    }

    /**
     * Filter the query on the r_op_dec_motif_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByROpDecMotifLibelle('fooValue');   // WHERE r_op_dec_motif_libelle = 'fooValue'
     * $query->filterByROpDecMotifLibelle('%fooValue%'); // WHERE r_op_dec_motif_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rOpDecMotifLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ROperationDecouvertMotifAccordQuery The current query, for fluid interface
     */
    public function filterByROpDecMotifLibelle($rOpDecMotifLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rOpDecMotifLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rOpDecMotifLibelle)) {
                $rOpDecMotifLibelle = str_replace('*', '%', $rOpDecMotifLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ROperationDecouvertMotifAccordPeer::R_OP_DEC_MOTIF_LIBELLE, $rOpDecMotifLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ROperationDecouvertMotifAccord $rOperationDecouvertMotifAccord Object to remove from the list of results
     *
     * @return ROperationDecouvertMotifAccordQuery The current query, for fluid interface
     */
    public function prune($rOperationDecouvertMotifAccord = null)
    {
        if ($rOperationDecouvertMotifAccord) {
            $this->addUsingAlias(ROperationDecouvertMotifAccordPeer::R_OP_DEC_MOTIF_ID, $rOperationDecouvertMotifAccord->getROpDecMotifId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
