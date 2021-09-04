<?php


/**
 * Base class that represents a query for the 'lnk_relance_facture' table.
 *
 *
 *
 * @method LnkRelanceFactureQuery orderByLnkRelFactId($order = Criteria::ASC) Order by the lnk_rel_fact_id column
 * @method LnkRelanceFactureQuery orderByRelId($order = Criteria::ASC) Order by the rel_id column
 * @method LnkRelanceFactureQuery orderByFactId($order = Criteria::ASC) Order by the fact_id column
 * @method LnkRelanceFactureQuery orderByMontantARegler($order = Criteria::ASC) Order by the montant_a_regler column
 * @method LnkRelanceFactureQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method LnkRelanceFactureQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method LnkRelanceFactureQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method LnkRelanceFactureQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method LnkRelanceFactureQuery groupByLnkRelFactId() Group by the lnk_rel_fact_id column
 * @method LnkRelanceFactureQuery groupByRelId() Group by the rel_id column
 * @method LnkRelanceFactureQuery groupByFactId() Group by the fact_id column
 * @method LnkRelanceFactureQuery groupByMontantARegler() Group by the montant_a_regler column
 * @method LnkRelanceFactureQuery groupByActif() Group by the actif column
 * @method LnkRelanceFactureQuery groupByDateCreate() Group by the date_create column
 * @method LnkRelanceFactureQuery groupByDateModify() Group by the date_modify column
 * @method LnkRelanceFactureQuery groupByUserId() Group by the user_id column
 *
 * @method LnkRelanceFactureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkRelanceFactureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkRelanceFactureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkRelanceFactureQuery leftJoinRelances($relationAlias = null) Adds a LEFT JOIN clause to the query using the Relances relation
 * @method LnkRelanceFactureQuery rightJoinRelances($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Relances relation
 * @method LnkRelanceFactureQuery innerJoinRelances($relationAlias = null) Adds a INNER JOIN clause to the query using the Relances relation
 *
 * @method LnkRelanceFactureQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method LnkRelanceFactureQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method LnkRelanceFactureQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method LnkRelanceFacture findOne(PropelPDO $con = null) Return the first LnkRelanceFacture matching the query
 * @method LnkRelanceFacture findOneOrCreate(PropelPDO $con = null) Return the first LnkRelanceFacture matching the query, or a new LnkRelanceFacture object populated from the query conditions when no match is found
 *
 * @method LnkRelanceFacture findOneByRelId(int $rel_id) Return the first LnkRelanceFacture filtered by the rel_id column
 * @method LnkRelanceFacture findOneByFactId(int $fact_id) Return the first LnkRelanceFacture filtered by the fact_id column
 * @method LnkRelanceFacture findOneByMontantARegler(float $montant_a_regler) Return the first LnkRelanceFacture filtered by the montant_a_regler column
 * @method LnkRelanceFacture findOneByActif(boolean $actif) Return the first LnkRelanceFacture filtered by the actif column
 * @method LnkRelanceFacture findOneByDateCreate(string $date_create) Return the first LnkRelanceFacture filtered by the date_create column
 * @method LnkRelanceFacture findOneByDateModify(string $date_modify) Return the first LnkRelanceFacture filtered by the date_modify column
 * @method LnkRelanceFacture findOneByUserId(int $user_id) Return the first LnkRelanceFacture filtered by the user_id column
 *
 * @method array findByLnkRelFactId(int $lnk_rel_fact_id) Return LnkRelanceFacture objects filtered by the lnk_rel_fact_id column
 * @method array findByRelId(int $rel_id) Return LnkRelanceFacture objects filtered by the rel_id column
 * @method array findByFactId(int $fact_id) Return LnkRelanceFacture objects filtered by the fact_id column
 * @method array findByMontantARegler(float $montant_a_regler) Return LnkRelanceFacture objects filtered by the montant_a_regler column
 * @method array findByActif(boolean $actif) Return LnkRelanceFacture objects filtered by the actif column
 * @method array findByDateCreate(string $date_create) Return LnkRelanceFacture objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return LnkRelanceFacture objects filtered by the date_modify column
 * @method array findByUserId(int $user_id) Return LnkRelanceFacture objects filtered by the user_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkRelanceFactureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkRelanceFactureQuery object.
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
            $modelName = 'LnkRelanceFacture';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkRelanceFactureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkRelanceFactureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkRelanceFactureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkRelanceFactureQuery) {
            return $criteria;
        }
        $query = new LnkRelanceFactureQuery(null, null, $modelAlias);

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
     * @return   LnkRelanceFacture|LnkRelanceFacture[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkRelanceFacturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkRelanceFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 LnkRelanceFacture A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLnkRelFactId($key, $con = null)
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
     * @return                 LnkRelanceFacture A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `lnk_rel_fact_id`, `rel_id`, `fact_id`, `montant_a_regler`, `actif`, `date_create`, `date_modify`, `user_id` FROM `lnk_relance_facture` WHERE `lnk_rel_fact_id` = :p0';
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
            $obj = new LnkRelanceFacture();
            $obj->hydrate($row);
            LnkRelanceFacturePeer::addInstanceToPool($obj, (string) $key);
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
     * @return LnkRelanceFacture|LnkRelanceFacture[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LnkRelanceFacture[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LnkRelanceFacturePeer::LNK_REL_FACT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LnkRelanceFacturePeer::LNK_REL_FACT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the lnk_rel_fact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkRelFactId(1234); // WHERE lnk_rel_fact_id = 1234
     * $query->filterByLnkRelFactId(array(12, 34)); // WHERE lnk_rel_fact_id IN (12, 34)
     * $query->filterByLnkRelFactId(array('min' => 12)); // WHERE lnk_rel_fact_id >= 12
     * $query->filterByLnkRelFactId(array('max' => 12)); // WHERE lnk_rel_fact_id <= 12
     * </code>
     *
     * @param     mixed $lnkRelFactId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function filterByLnkRelFactId($lnkRelFactId = null, $comparison = null)
    {
        if (is_array($lnkRelFactId)) {
            $useMinMax = false;
            if (isset($lnkRelFactId['min'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::LNK_REL_FACT_ID, $lnkRelFactId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkRelFactId['max'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::LNK_REL_FACT_ID, $lnkRelFactId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkRelanceFacturePeer::LNK_REL_FACT_ID, $lnkRelFactId, $comparison);
    }

    /**
     * Filter the query on the rel_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelId(1234); // WHERE rel_id = 1234
     * $query->filterByRelId(array(12, 34)); // WHERE rel_id IN (12, 34)
     * $query->filterByRelId(array('min' => 12)); // WHERE rel_id >= 12
     * $query->filterByRelId(array('max' => 12)); // WHERE rel_id <= 12
     * </code>
     *
     * @see       filterByRelances()
     *
     * @param     mixed $relId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function filterByRelId($relId = null, $comparison = null)
    {
        if (is_array($relId)) {
            $useMinMax = false;
            if (isset($relId['min'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::REL_ID, $relId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relId['max'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::REL_ID, $relId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkRelanceFacturePeer::REL_ID, $relId, $comparison);
    }

    /**
     * Filter the query on the fact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactId(1234); // WHERE fact_id = 1234
     * $query->filterByFactId(array(12, 34)); // WHERE fact_id IN (12, 34)
     * $query->filterByFactId(array('min' => 12)); // WHERE fact_id >= 12
     * $query->filterByFactId(array('max' => 12)); // WHERE fact_id <= 12
     * </code>
     *
     * @see       filterByFactures()
     *
     * @param     mixed $factId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function filterByFactId($factId = null, $comparison = null)
    {
        if (is_array($factId)) {
            $useMinMax = false;
            if (isset($factId['min'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::FACT_ID, $factId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factId['max'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::FACT_ID, $factId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkRelanceFacturePeer::FACT_ID, $factId, $comparison);
    }

    /**
     * Filter the query on the montant_a_regler column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantARegler(1234); // WHERE montant_a_regler = 1234
     * $query->filterByMontantARegler(array(12, 34)); // WHERE montant_a_regler IN (12, 34)
     * $query->filterByMontantARegler(array('min' => 12)); // WHERE montant_a_regler >= 12
     * $query->filterByMontantARegler(array('max' => 12)); // WHERE montant_a_regler <= 12
     * </code>
     *
     * @param     mixed $montantARegler The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function filterByMontantARegler($montantARegler = null, $comparison = null)
    {
        if (is_array($montantARegler)) {
            $useMinMax = false;
            if (isset($montantARegler['min'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::MONTANT_A_REGLER, $montantARegler['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantARegler['max'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::MONTANT_A_REGLER, $montantARegler['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkRelanceFacturePeer::MONTANT_A_REGLER, $montantARegler, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(true); // WHERE actif = true
     * $query->filterByActif('yes'); // WHERE actif = true
     * </code>
     *
     * @param     boolean|string $actif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(LnkRelanceFacturePeer::ACTIF, $actif, $comparison);
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
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkRelanceFacturePeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkRelanceFacturePeer::DATE_MODIFY, $dateModify, $comparison);
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
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(LnkRelanceFacturePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkRelanceFacturePeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query by a related Relances object
     *
     * @param   Relances|PropelObjectCollection $relances The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkRelanceFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRelances($relances, $comparison = null)
    {
        if ($relances instanceof Relances) {
            return $this
                ->addUsingAlias(LnkRelanceFacturePeer::REL_ID, $relances->getRelId(), $comparison);
        } elseif ($relances instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkRelanceFacturePeer::REL_ID, $relances->toKeyValue('PrimaryKey', 'RelId'), $comparison);
        } else {
            throw new PropelException('filterByRelances() only accepts arguments of type Relances or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Relances relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function joinRelances($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Relances');

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
            $this->addJoinObject($join, 'Relances');
        }

        return $this;
    }

    /**
     * Use the Relances relation Relances object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RelancesQuery A secondary query class using the current class as primary query
     */
    public function useRelancesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRelances($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Relances', 'RelancesQuery');
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkRelanceFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(LnkRelanceFacturePeer::FACT_ID, $factures->getFactId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkRelanceFacturePeer::FACT_ID, $factures->toKeyValue('PrimaryKey', 'FactId'), $comparison);
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
     * @return LnkRelanceFactureQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   LnkRelanceFacture $lnkRelanceFacture Object to remove from the list of results
     *
     * @return LnkRelanceFactureQuery The current query, for fluid interface
     */
    public function prune($lnkRelanceFacture = null)
    {
        if ($lnkRelanceFacture) {
            $this->addUsingAlias(LnkRelanceFacturePeer::LNK_REL_FACT_ID, $lnkRelanceFacture->getLnkRelFactId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
