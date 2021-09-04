<?php


/**
 * Base class that represents a query for the 'operation_decouverts' table.
 *
 *
 *
 * @method OperationDecouvertsQuery orderByOpDecId($order = Criteria::ASC) Order by the op_dec_id column
 * @method OperationDecouvertsQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method OperationDecouvertsQuery orderByOpDecMontDemande($order = Criteria::ASC) Order by the op_dec_mont_demande column
 * @method OperationDecouvertsQuery orderByOpDecMontAccord($order = Criteria::ASC) Order by the op_dec_mont_accord column
 * @method OperationDecouvertsQuery orderByOpDecMotifDemande($order = Criteria::ASC) Order by the op_dec_motif_demande column
 * @method OperationDecouvertsQuery orderByOpDecMotifAccord($order = Criteria::ASC) Order by the op_dec_motif_accord column
 * @method OperationDecouvertsQuery orderByOpDecStatutId($order = Criteria::ASC) Order by the op_dec_statut_id column
 * @method OperationDecouvertsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method OperationDecouvertsQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method OperationDecouvertsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method OperationDecouvertsQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 *
 * @method OperationDecouvertsQuery groupByOpDecId() Group by the op_dec_id column
 * @method OperationDecouvertsQuery groupByOpId() Group by the op_id column
 * @method OperationDecouvertsQuery groupByOpDecMontDemande() Group by the op_dec_mont_demande column
 * @method OperationDecouvertsQuery groupByOpDecMontAccord() Group by the op_dec_mont_accord column
 * @method OperationDecouvertsQuery groupByOpDecMotifDemande() Group by the op_dec_motif_demande column
 * @method OperationDecouvertsQuery groupByOpDecMotifAccord() Group by the op_dec_motif_accord column
 * @method OperationDecouvertsQuery groupByOpDecStatutId() Group by the op_dec_statut_id column
 * @method OperationDecouvertsQuery groupByDateCreate() Group by the date_create column
 * @method OperationDecouvertsQuery groupByDateModify() Group by the date_modify column
 * @method OperationDecouvertsQuery groupByUserId() Group by the user_id column
 * @method OperationDecouvertsQuery groupByUserModify() Group by the user_modify column
 *
 * @method OperationDecouvertsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationDecouvertsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationDecouvertsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationDecouvertsQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method OperationDecouvertsQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method OperationDecouvertsQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method OperationDecouverts findOne(PropelPDO $con = null) Return the first OperationDecouverts matching the query
 * @method OperationDecouverts findOneOrCreate(PropelPDO $con = null) Return the first OperationDecouverts matching the query, or a new OperationDecouverts object populated from the query conditions when no match is found
 *
 * @method OperationDecouverts findOneByOpId(int $op_id) Return the first OperationDecouverts filtered by the op_id column
 * @method OperationDecouverts findOneByOpDecMontDemande(float $op_dec_mont_demande) Return the first OperationDecouverts filtered by the op_dec_mont_demande column
 * @method OperationDecouverts findOneByOpDecMontAccord(float $op_dec_mont_accord) Return the first OperationDecouverts filtered by the op_dec_mont_accord column
 * @method OperationDecouverts findOneByOpDecMotifDemande(string $op_dec_motif_demande) Return the first OperationDecouverts filtered by the op_dec_motif_demande column
 * @method OperationDecouverts findOneByOpDecMotifAccord(int $op_dec_motif_accord) Return the first OperationDecouverts filtered by the op_dec_motif_accord column
 * @method OperationDecouverts findOneByOpDecStatutId(int $op_dec_statut_id) Return the first OperationDecouverts filtered by the op_dec_statut_id column
 * @method OperationDecouverts findOneByDateCreate(string $date_create) Return the first OperationDecouverts filtered by the date_create column
 * @method OperationDecouverts findOneByDateModify(string $date_modify) Return the first OperationDecouverts filtered by the date_modify column
 * @method OperationDecouverts findOneByUserId(int $user_id) Return the first OperationDecouverts filtered by the user_id column
 * @method OperationDecouverts findOneByUserModify(int $user_modify) Return the first OperationDecouverts filtered by the user_modify column
 *
 * @method array findByOpDecId(int $op_dec_id) Return OperationDecouverts objects filtered by the op_dec_id column
 * @method array findByOpId(int $op_id) Return OperationDecouverts objects filtered by the op_id column
 * @method array findByOpDecMontDemande(float $op_dec_mont_demande) Return OperationDecouverts objects filtered by the op_dec_mont_demande column
 * @method array findByOpDecMontAccord(float $op_dec_mont_accord) Return OperationDecouverts objects filtered by the op_dec_mont_accord column
 * @method array findByOpDecMotifDemande(string $op_dec_motif_demande) Return OperationDecouverts objects filtered by the op_dec_motif_demande column
 * @method array findByOpDecMotifAccord(int $op_dec_motif_accord) Return OperationDecouverts objects filtered by the op_dec_motif_accord column
 * @method array findByOpDecStatutId(int $op_dec_statut_id) Return OperationDecouverts objects filtered by the op_dec_statut_id column
 * @method array findByDateCreate(string $date_create) Return OperationDecouverts objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return OperationDecouverts objects filtered by the date_modify column
 * @method array findByUserId(int $user_id) Return OperationDecouverts objects filtered by the user_id column
 * @method array findByUserModify(int $user_modify) Return OperationDecouverts objects filtered by the user_modify column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationDecouvertsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationDecouvertsQuery object.
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
            $modelName = 'OperationDecouverts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationDecouvertsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationDecouvertsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationDecouvertsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationDecouvertsQuery) {
            return $criteria;
        }
        $query = new OperationDecouvertsQuery(null, null, $modelAlias);

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
     * @return   OperationDecouverts|OperationDecouverts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationDecouvertsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationDecouvertsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationDecouverts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOpDecId($key, $con = null)
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
     * @return                 OperationDecouverts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_dec_id`, `op_id`, `op_dec_mont_demande`, `op_dec_mont_accord`, `op_dec_motif_demande`, `op_dec_motif_accord`, `op_dec_statut_id`, `date_create`, `date_modify`, `user_id`, `user_modify` FROM `operation_decouverts` WHERE `op_dec_id` = :p0';
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
            $obj = new OperationDecouverts();
            $obj->hydrate($row);
            OperationDecouvertsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OperationDecouverts|OperationDecouverts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationDecouverts[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the op_dec_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDecId(1234); // WHERE op_dec_id = 1234
     * $query->filterByOpDecId(array(12, 34)); // WHERE op_dec_id IN (12, 34)
     * $query->filterByOpDecId(array('min' => 12)); // WHERE op_dec_id >= 12
     * $query->filterByOpDecId(array('max' => 12)); // WHERE op_dec_id <= 12
     * </code>
     *
     * @param     mixed $opDecId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByOpDecId($opDecId = null, $comparison = null)
    {
        if (is_array($opDecId)) {
            $useMinMax = false;
            if (isset($opDecId['min'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_ID, $opDecId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDecId['max'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_ID, $opDecId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_ID, $opDecId, $comparison);
    }

    /**
     * Filter the query on the op_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpId(1234); // WHERE op_id = 1234
     * $query->filterByOpId(array(12, 34)); // WHERE op_id IN (12, 34)
     * $query->filterByOpId(array('min' => 12)); // WHERE op_id >= 12
     * $query->filterByOpId(array('max' => 12)); // WHERE op_id <= 12
     * </code>
     *
     * @see       filterByOperations()
     *
     * @param     mixed $opId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the op_dec_mont_demande column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDecMontDemande(1234); // WHERE op_dec_mont_demande = 1234
     * $query->filterByOpDecMontDemande(array(12, 34)); // WHERE op_dec_mont_demande IN (12, 34)
     * $query->filterByOpDecMontDemande(array('min' => 12)); // WHERE op_dec_mont_demande >= 12
     * $query->filterByOpDecMontDemande(array('max' => 12)); // WHERE op_dec_mont_demande <= 12
     * </code>
     *
     * @param     mixed $opDecMontDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByOpDecMontDemande($opDecMontDemande = null, $comparison = null)
    {
        if (is_array($opDecMontDemande)) {
            $useMinMax = false;
            if (isset($opDecMontDemande['min'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE, $opDecMontDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDecMontDemande['max'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE, $opDecMontDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_MONT_DEMANDE, $opDecMontDemande, $comparison);
    }

    /**
     * Filter the query on the op_dec_mont_accord column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDecMontAccord(1234); // WHERE op_dec_mont_accord = 1234
     * $query->filterByOpDecMontAccord(array(12, 34)); // WHERE op_dec_mont_accord IN (12, 34)
     * $query->filterByOpDecMontAccord(array('min' => 12)); // WHERE op_dec_mont_accord >= 12
     * $query->filterByOpDecMontAccord(array('max' => 12)); // WHERE op_dec_mont_accord <= 12
     * </code>
     *
     * @param     mixed $opDecMontAccord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByOpDecMontAccord($opDecMontAccord = null, $comparison = null)
    {
        if (is_array($opDecMontAccord)) {
            $useMinMax = false;
            if (isset($opDecMontAccord['min'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_MONT_ACCORD, $opDecMontAccord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDecMontAccord['max'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_MONT_ACCORD, $opDecMontAccord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_MONT_ACCORD, $opDecMontAccord, $comparison);
    }

    /**
     * Filter the query on the op_dec_motif_demande column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDecMotifDemande('fooValue');   // WHERE op_dec_motif_demande = 'fooValue'
     * $query->filterByOpDecMotifDemande('%fooValue%'); // WHERE op_dec_motif_demande LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opDecMotifDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByOpDecMotifDemande($opDecMotifDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opDecMotifDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opDecMotifDemande)) {
                $opDecMotifDemande = str_replace('*', '%', $opDecMotifDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_MOTIF_DEMANDE, $opDecMotifDemande, $comparison);
    }

    /**
     * Filter the query on the op_dec_motif_accord column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDecMotifAccord(1234); // WHERE op_dec_motif_accord = 1234
     * $query->filterByOpDecMotifAccord(array(12, 34)); // WHERE op_dec_motif_accord IN (12, 34)
     * $query->filterByOpDecMotifAccord(array('min' => 12)); // WHERE op_dec_motif_accord >= 12
     * $query->filterByOpDecMotifAccord(array('max' => 12)); // WHERE op_dec_motif_accord <= 12
     * </code>
     *
     * @param     mixed $opDecMotifAccord The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByOpDecMotifAccord($opDecMotifAccord = null, $comparison = null)
    {
        if (is_array($opDecMotifAccord)) {
            $useMinMax = false;
            if (isset($opDecMotifAccord['min'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD, $opDecMotifAccord['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDecMotifAccord['max'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD, $opDecMotifAccord['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_MOTIF_ACCORD, $opDecMotifAccord, $comparison);
    }

    /**
     * Filter the query on the op_dec_statut_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDecStatutId(1234); // WHERE op_dec_statut_id = 1234
     * $query->filterByOpDecStatutId(array(12, 34)); // WHERE op_dec_statut_id IN (12, 34)
     * $query->filterByOpDecStatutId(array('min' => 12)); // WHERE op_dec_statut_id >= 12
     * $query->filterByOpDecStatutId(array('max' => 12)); // WHERE op_dec_statut_id <= 12
     * </code>
     *
     * @param     mixed $opDecStatutId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByOpDecStatutId($opDecStatutId = null, $comparison = null)
    {
        if (is_array($opDecStatutId)) {
            $useMinMax = false;
            if (isset($opDecStatutId['min'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_STATUT_ID, $opDecStatutId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDecStatutId['max'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_STATUT_ID, $opDecStatutId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_STATUT_ID, $opDecStatutId, $comparison);
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
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query on the date_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModify('2011-03-14'); // WHERE date_modify = '2011-03-14'
     * $query->filterByDateModify('now'); // WHERE date_modify = '2011-03-14'
     * $query->filterByDateModify(array('max' => 'yesterday')); // WHERE date_modify < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModify The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::DATE_MODIFY, $dateModify, $comparison);
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
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the user_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByUserModify(1234); // WHERE user_modify = 1234
     * $query->filterByUserModify(array(12, 34)); // WHERE user_modify IN (12, 34)
     * $query->filterByUserModify(array('min' => 12)); // WHERE user_modify >= 12
     * $query->filterByUserModify(array('max' => 12)); // WHERE user_modify <= 12
     * </code>
     *
     * @param     mixed $userModify The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(OperationDecouvertsPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationDecouvertsPeer::USER_MODIFY, $userModify, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationDecouvertsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(OperationDecouvertsPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationDecouvertsPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function joinOperations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useOperationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Operations', 'OperationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   OperationDecouverts $operationDecouverts Object to remove from the list of results
     *
     * @return OperationDecouvertsQuery The current query, for fluid interface
     */
    public function prune($operationDecouverts = null)
    {
        if ($operationDecouverts) {
            $this->addUsingAlias(OperationDecouvertsPeer::OP_DEC_ID, $operationDecouverts->getOpDecId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
