<?php


/**
 * Base class that represents a query for the 'plan_facturation_details' table.
 *
 *
 *
 * @method PlanFacturationDetailsQuery orderByPfdId($order = Criteria::ASC) Order by the pfd_id column
 * @method PlanFacturationDetailsQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method PlanFacturationDetailsQuery orderByPfdTypeFactId($order = Criteria::ASC) Order by the pfd_type_fact_id column
 * @method PlanFacturationDetailsQuery orderByPfdDatePlanif($order = Criteria::ASC) Order by the pfd_date_planif column
 * @method PlanFacturationDetailsQuery orderByPfdTauxAdf($order = Criteria::ASC) Order by the pfd_taux_adf column
 * @method PlanFacturationDetailsQuery orderByPfdTauxPartiel($order = Criteria::ASC) Order by the pfd_taux_partiel column
 * @method PlanFacturationDetailsQuery orderByPfdIdToCancel($order = Criteria::ASC) Order by the pfd_id_to_cancel column
 * @method PlanFacturationDetailsQuery orderByPfdFactAnnul($order = Criteria::ASC) Order by the pfd_fact_annul column
 * @method PlanFacturationDetailsQuery orderByPfdFactAnnulMotifId($order = Criteria::ASC) Order by the pfd_fact_annul_motif_id column
 * @method PlanFacturationDetailsQuery orderByPfdFactAnnulAutreMotif($order = Criteria::ASC) Order by the pfd_fact_annul_autre_motif column
 * @method PlanFacturationDetailsQuery orderByPfdFactId($order = Criteria::ASC) Order by the pfd_fact_id column
 * @method PlanFacturationDetailsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method PlanFacturationDetailsQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method PlanFacturationDetailsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method PlanFacturationDetailsQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method PlanFacturationDetailsQuery orderByPfdNumCmd($order = Criteria::ASC) Order by the pfd_num_cmd column
 *
 * @method PlanFacturationDetailsQuery groupByPfdId() Group by the pfd_id column
 * @method PlanFacturationDetailsQuery groupByOpId() Group by the op_id column
 * @method PlanFacturationDetailsQuery groupByPfdTypeFactId() Group by the pfd_type_fact_id column
 * @method PlanFacturationDetailsQuery groupByPfdDatePlanif() Group by the pfd_date_planif column
 * @method PlanFacturationDetailsQuery groupByPfdTauxAdf() Group by the pfd_taux_adf column
 * @method PlanFacturationDetailsQuery groupByPfdTauxPartiel() Group by the pfd_taux_partiel column
 * @method PlanFacturationDetailsQuery groupByPfdIdToCancel() Group by the pfd_id_to_cancel column
 * @method PlanFacturationDetailsQuery groupByPfdFactAnnul() Group by the pfd_fact_annul column
 * @method PlanFacturationDetailsQuery groupByPfdFactAnnulMotifId() Group by the pfd_fact_annul_motif_id column
 * @method PlanFacturationDetailsQuery groupByPfdFactAnnulAutreMotif() Group by the pfd_fact_annul_autre_motif column
 * @method PlanFacturationDetailsQuery groupByPfdFactId() Group by the pfd_fact_id column
 * @method PlanFacturationDetailsQuery groupByDateCreate() Group by the date_create column
 * @method PlanFacturationDetailsQuery groupByDateModify() Group by the date_modify column
 * @method PlanFacturationDetailsQuery groupByUserId() Group by the user_id column
 * @method PlanFacturationDetailsQuery groupByUserModify() Group by the user_modify column
 * @method PlanFacturationDetailsQuery groupByPfdNumCmd() Group by the pfd_num_cmd column
 *
 * @method PlanFacturationDetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PlanFacturationDetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PlanFacturationDetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PlanFacturationDetailsQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method PlanFacturationDetailsQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method PlanFacturationDetailsQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method PlanFacturationDetailsQuery leftJoinRFactureTypes($relationAlias = null) Adds a LEFT JOIN clause to the query using the RFactureTypes relation
 * @method PlanFacturationDetailsQuery rightJoinRFactureTypes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RFactureTypes relation
 * @method PlanFacturationDetailsQuery innerJoinRFactureTypes($relationAlias = null) Adds a INNER JOIN clause to the query using the RFactureTypes relation
 *
 * @method PlanFacturationDetailsQuery leftJoinFactureToCancel($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureToCancel relation
 * @method PlanFacturationDetailsQuery rightJoinFactureToCancel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureToCancel relation
 * @method PlanFacturationDetailsQuery innerJoinFactureToCancel($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureToCancel relation
 *
 * @method PlanFacturationDetailsQuery leftJoinPlanFacturationDetailToCancel($relationAlias = null) Adds a LEFT JOIN clause to the query using the PlanFacturationDetailToCancel relation
 * @method PlanFacturationDetailsQuery rightJoinPlanFacturationDetailToCancel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PlanFacturationDetailToCancel relation
 * @method PlanFacturationDetailsQuery innerJoinPlanFacturationDetailToCancel($relationAlias = null) Adds a INNER JOIN clause to the query using the PlanFacturationDetailToCancel relation
 *
 * @method PlanFacturationDetailsQuery leftJoinFactureGenerated($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureGenerated relation
 * @method PlanFacturationDetailsQuery rightJoinFactureGenerated($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureGenerated relation
 * @method PlanFacturationDetailsQuery innerJoinFactureGenerated($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureGenerated relation
 *
 * @method PlanFacturationDetailsQuery leftJoinInvoiceCancellationMotive($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvoiceCancellationMotive relation
 * @method PlanFacturationDetailsQuery rightJoinInvoiceCancellationMotive($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvoiceCancellationMotive relation
 * @method PlanFacturationDetailsQuery innerJoinInvoiceCancellationMotive($relationAlias = null) Adds a INNER JOIN clause to the query using the InvoiceCancellationMotive relation
 *
 * @method PlanFacturationDetailsQuery leftJoinPlanFacturationDetailsRelatedByPfdId($relationAlias = null) Adds a LEFT JOIN clause to the query using the PlanFacturationDetailsRelatedByPfdId relation
 * @method PlanFacturationDetailsQuery rightJoinPlanFacturationDetailsRelatedByPfdId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PlanFacturationDetailsRelatedByPfdId relation
 * @method PlanFacturationDetailsQuery innerJoinPlanFacturationDetailsRelatedByPfdId($relationAlias = null) Adds a INNER JOIN clause to the query using the PlanFacturationDetailsRelatedByPfdId relation
 *
 * @method PlanFacturationDetails findOne(PropelPDO $con = null) Return the first PlanFacturationDetails matching the query
 * @method PlanFacturationDetails findOneOrCreate(PropelPDO $con = null) Return the first PlanFacturationDetails matching the query, or a new PlanFacturationDetails object populated from the query conditions when no match is found
 *
 * @method PlanFacturationDetails findOneByOpId(int $op_id) Return the first PlanFacturationDetails filtered by the op_id column
 * @method PlanFacturationDetails findOneByPfdTypeFactId(int $pfd_type_fact_id) Return the first PlanFacturationDetails filtered by the pfd_type_fact_id column
 * @method PlanFacturationDetails findOneByPfdDatePlanif(string $pfd_date_planif) Return the first PlanFacturationDetails filtered by the pfd_date_planif column
 * @method PlanFacturationDetails findOneByPfdTauxAdf(int $pfd_taux_adf) Return the first PlanFacturationDetails filtered by the pfd_taux_adf column
 * @method PlanFacturationDetails findOneByPfdTauxPartiel(int $pfd_taux_partiel) Return the first PlanFacturationDetails filtered by the pfd_taux_partiel column
 * @method PlanFacturationDetails findOneByPfdIdToCancel(int $pfd_id_to_cancel) Return the first PlanFacturationDetails filtered by the pfd_id_to_cancel column
 * @method PlanFacturationDetails findOneByPfdFactAnnul(int $pfd_fact_annul) Return the first PlanFacturationDetails filtered by the pfd_fact_annul column
 * @method PlanFacturationDetails findOneByPfdFactAnnulMotifId(int $pfd_fact_annul_motif_id) Return the first PlanFacturationDetails filtered by the pfd_fact_annul_motif_id column
 * @method PlanFacturationDetails findOneByPfdFactAnnulAutreMotif(string $pfd_fact_annul_autre_motif) Return the first PlanFacturationDetails filtered by the pfd_fact_annul_autre_motif column
 * @method PlanFacturationDetails findOneByPfdFactId(int $pfd_fact_id) Return the first PlanFacturationDetails filtered by the pfd_fact_id column
 * @method PlanFacturationDetails findOneByDateCreate(string $date_create) Return the first PlanFacturationDetails filtered by the date_create column
 * @method PlanFacturationDetails findOneByDateModify(string $date_modify) Return the first PlanFacturationDetails filtered by the date_modify column
 * @method PlanFacturationDetails findOneByUserId(int $user_id) Return the first PlanFacturationDetails filtered by the user_id column
 * @method PlanFacturationDetails findOneByUserModify(int $user_modify) Return the first PlanFacturationDetails filtered by the user_modify column
 * @method PlanFacturationDetails findOneByPfdNumCmd(string $pfd_num_cmd) Return the first PlanFacturationDetails filtered by the pfd_num_cmd column
 *
 * @method array findByPfdId(int $pfd_id) Return PlanFacturationDetails objects filtered by the pfd_id column
 * @method array findByOpId(int $op_id) Return PlanFacturationDetails objects filtered by the op_id column
 * @method array findByPfdTypeFactId(int $pfd_type_fact_id) Return PlanFacturationDetails objects filtered by the pfd_type_fact_id column
 * @method array findByPfdDatePlanif(string $pfd_date_planif) Return PlanFacturationDetails objects filtered by the pfd_date_planif column
 * @method array findByPfdTauxAdf(int $pfd_taux_adf) Return PlanFacturationDetails objects filtered by the pfd_taux_adf column
 * @method array findByPfdTauxPartiel(int $pfd_taux_partiel) Return PlanFacturationDetails objects filtered by the pfd_taux_partiel column
 * @method array findByPfdIdToCancel(int $pfd_id_to_cancel) Return PlanFacturationDetails objects filtered by the pfd_id_to_cancel column
 * @method array findByPfdFactAnnul(int $pfd_fact_annul) Return PlanFacturationDetails objects filtered by the pfd_fact_annul column
 * @method array findByPfdFactAnnulMotifId(int $pfd_fact_annul_motif_id) Return PlanFacturationDetails objects filtered by the pfd_fact_annul_motif_id column
 * @method array findByPfdFactAnnulAutreMotif(string $pfd_fact_annul_autre_motif) Return PlanFacturationDetails objects filtered by the pfd_fact_annul_autre_motif column
 * @method array findByPfdFactId(int $pfd_fact_id) Return PlanFacturationDetails objects filtered by the pfd_fact_id column
 * @method array findByDateCreate(string $date_create) Return PlanFacturationDetails objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return PlanFacturationDetails objects filtered by the date_modify column
 * @method array findByUserId(int $user_id) Return PlanFacturationDetails objects filtered by the user_id column
 * @method array findByUserModify(int $user_modify) Return PlanFacturationDetails objects filtered by the user_modify column
 * @method array findByPfdNumCmd(string $pfd_num_cmd) Return PlanFacturationDetails objects filtered by the pfd_num_cmd column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BasePlanFacturationDetailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePlanFacturationDetailsQuery object.
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
            $modelName = 'PlanFacturationDetails';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PlanFacturationDetailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PlanFacturationDetailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PlanFacturationDetailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PlanFacturationDetailsQuery) {
            return $criteria;
        }
        $query = new PlanFacturationDetailsQuery(null, null, $modelAlias);

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
     * @return   PlanFacturationDetails|PlanFacturationDetails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PlanFacturationDetailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PlanFacturationDetails A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPfdId($key, $con = null)
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
     * @return                 PlanFacturationDetails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `pfd_id`, `op_id`, `pfd_type_fact_id`, `pfd_date_planif`, `pfd_taux_adf`, `pfd_taux_partiel`, `pfd_id_to_cancel`, `pfd_fact_annul`, `pfd_fact_annul_motif_id`, `pfd_fact_annul_autre_motif`, `pfd_fact_id`, `date_create`, `date_modify`, `user_id`, `user_modify`, `pfd_num_cmd` FROM `plan_facturation_details` WHERE `pfd_id` = :p0';
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
            $obj = new PlanFacturationDetails();
            $obj->hydrate($row);
            PlanFacturationDetailsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PlanFacturationDetails|PlanFacturationDetails[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PlanFacturationDetails[]|mixed the list of results, formatted by the current formatter
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
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the pfd_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdId(1234); // WHERE pfd_id = 1234
     * $query->filterByPfdId(array(12, 34)); // WHERE pfd_id IN (12, 34)
     * $query->filterByPfdId(array('min' => 12)); // WHERE pfd_id >= 12
     * $query->filterByPfdId(array('max' => 12)); // WHERE pfd_id <= 12
     * </code>
     *
     * @param     mixed $pfdId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdId($pfdId = null, $comparison = null)
    {
        if (is_array($pfdId)) {
            $useMinMax = false;
            if (isset($pfdId['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID, $pfdId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfdId['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID, $pfdId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID, $pfdId, $comparison);
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
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the pfd_type_fact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdTypeFactId(1234); // WHERE pfd_type_fact_id = 1234
     * $query->filterByPfdTypeFactId(array(12, 34)); // WHERE pfd_type_fact_id IN (12, 34)
     * $query->filterByPfdTypeFactId(array('min' => 12)); // WHERE pfd_type_fact_id >= 12
     * $query->filterByPfdTypeFactId(array('max' => 12)); // WHERE pfd_type_fact_id <= 12
     * </code>
     *
     * @see       filterByRFactureTypes()
     *
     * @param     mixed $pfdTypeFactId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdTypeFactId($pfdTypeFactId = null, $comparison = null)
    {
        if (is_array($pfdTypeFactId)) {
            $useMinMax = false;
            if (isset($pfdTypeFactId['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, $pfdTypeFactId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfdTypeFactId['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, $pfdTypeFactId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, $pfdTypeFactId, $comparison);
    }

    /**
     * Filter the query on the pfd_date_planif column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdDatePlanif('2011-03-14'); // WHERE pfd_date_planif = '2011-03-14'
     * $query->filterByPfdDatePlanif('now'); // WHERE pfd_date_planif = '2011-03-14'
     * $query->filterByPfdDatePlanif(array('max' => 'yesterday')); // WHERE pfd_date_planif < '2011-03-13'
     * </code>
     *
     * @param     mixed $pfdDatePlanif The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdDatePlanif($pfdDatePlanif = null, $comparison = null)
    {
        if (is_array($pfdDatePlanif)) {
            $useMinMax = false;
            if (isset($pfdDatePlanif['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_DATE_PLANIF, $pfdDatePlanif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfdDatePlanif['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_DATE_PLANIF, $pfdDatePlanif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_DATE_PLANIF, $pfdDatePlanif, $comparison);
    }

    /**
     * Filter the query on the pfd_taux_adf column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdTauxAdf(1234); // WHERE pfd_taux_adf = 1234
     * $query->filterByPfdTauxAdf(array(12, 34)); // WHERE pfd_taux_adf IN (12, 34)
     * $query->filterByPfdTauxAdf(array('min' => 12)); // WHERE pfd_taux_adf >= 12
     * $query->filterByPfdTauxAdf(array('max' => 12)); // WHERE pfd_taux_adf <= 12
     * </code>
     *
     * @param     mixed $pfdTauxAdf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdTauxAdf($pfdTauxAdf = null, $comparison = null)
    {
        if (is_array($pfdTauxAdf)) {
            $useMinMax = false;
            if (isset($pfdTauxAdf['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_TAUX_ADF, $pfdTauxAdf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfdTauxAdf['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_TAUX_ADF, $pfdTauxAdf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_TAUX_ADF, $pfdTauxAdf, $comparison);
    }

    /**
     * Filter the query on the pfd_taux_partiel column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdTauxPartiel(1234); // WHERE pfd_taux_partiel = 1234
     * $query->filterByPfdTauxPartiel(array(12, 34)); // WHERE pfd_taux_partiel IN (12, 34)
     * $query->filterByPfdTauxPartiel(array('min' => 12)); // WHERE pfd_taux_partiel >= 12
     * $query->filterByPfdTauxPartiel(array('max' => 12)); // WHERE pfd_taux_partiel <= 12
     * </code>
     *
     * @param     mixed $pfdTauxPartiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdTauxPartiel($pfdTauxPartiel = null, $comparison = null)
    {
        if (is_array($pfdTauxPartiel)) {
            $useMinMax = false;
            if (isset($pfdTauxPartiel['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL, $pfdTauxPartiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfdTauxPartiel['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL, $pfdTauxPartiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL, $pfdTauxPartiel, $comparison);
    }

    /**
     * Filter the query on the pfd_id_to_cancel column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdIdToCancel(1234); // WHERE pfd_id_to_cancel = 1234
     * $query->filterByPfdIdToCancel(array(12, 34)); // WHERE pfd_id_to_cancel IN (12, 34)
     * $query->filterByPfdIdToCancel(array('min' => 12)); // WHERE pfd_id_to_cancel >= 12
     * $query->filterByPfdIdToCancel(array('max' => 12)); // WHERE pfd_id_to_cancel <= 12
     * </code>
     *
     * @see       filterByPlanFacturationDetailToCancel()
     *
     * @param     mixed $pfdIdToCancel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdIdToCancel($pfdIdToCancel = null, $comparison = null)
    {
        if (is_array($pfdIdToCancel)) {
            $useMinMax = false;
            if (isset($pfdIdToCancel['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL, $pfdIdToCancel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfdIdToCancel['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL, $pfdIdToCancel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL, $pfdIdToCancel, $comparison);
    }

    /**
     * Filter the query on the pfd_fact_annul column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdFactAnnul(1234); // WHERE pfd_fact_annul = 1234
     * $query->filterByPfdFactAnnul(array(12, 34)); // WHERE pfd_fact_annul IN (12, 34)
     * $query->filterByPfdFactAnnul(array('min' => 12)); // WHERE pfd_fact_annul >= 12
     * $query->filterByPfdFactAnnul(array('max' => 12)); // WHERE pfd_fact_annul <= 12
     * </code>
     *
     * @see       filterByFactureToCancel()
     *
     * @param     mixed $pfdFactAnnul The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdFactAnnul($pfdFactAnnul = null, $comparison = null)
    {
        if (is_array($pfdFactAnnul)) {
            $useMinMax = false;
            if (isset($pfdFactAnnul['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, $pfdFactAnnul['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfdFactAnnul['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, $pfdFactAnnul['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, $pfdFactAnnul, $comparison);
    }

    /**
     * Filter the query on the pfd_fact_annul_motif_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdFactAnnulMotifId(1234); // WHERE pfd_fact_annul_motif_id = 1234
     * $query->filterByPfdFactAnnulMotifId(array(12, 34)); // WHERE pfd_fact_annul_motif_id IN (12, 34)
     * $query->filterByPfdFactAnnulMotifId(array('min' => 12)); // WHERE pfd_fact_annul_motif_id >= 12
     * $query->filterByPfdFactAnnulMotifId(array('max' => 12)); // WHERE pfd_fact_annul_motif_id <= 12
     * </code>
     *
     * @see       filterByInvoiceCancellationMotive()
     *
     * @param     mixed $pfdFactAnnulMotifId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdFactAnnulMotifId($pfdFactAnnulMotifId = null, $comparison = null)
    {
        if (is_array($pfdFactAnnulMotifId)) {
            $useMinMax = false;
            if (isset($pfdFactAnnulMotifId['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, $pfdFactAnnulMotifId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfdFactAnnulMotifId['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, $pfdFactAnnulMotifId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, $pfdFactAnnulMotifId, $comparison);
    }

    /**
     * Filter the query on the pfd_fact_annul_autre_motif column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdFactAnnulAutreMotif('fooValue');   // WHERE pfd_fact_annul_autre_motif = 'fooValue'
     * $query->filterByPfdFactAnnulAutreMotif('%fooValue%'); // WHERE pfd_fact_annul_autre_motif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pfdFactAnnulAutreMotif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdFactAnnulAutreMotif($pfdFactAnnulAutreMotif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pfdFactAnnulAutreMotif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pfdFactAnnulAutreMotif)) {
                $pfdFactAnnulAutreMotif = str_replace('*', '%', $pfdFactAnnulAutreMotif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_AUTRE_MOTIF, $pfdFactAnnulAutreMotif, $comparison);
    }

    /**
     * Filter the query on the pfd_fact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdFactId(1234); // WHERE pfd_fact_id = 1234
     * $query->filterByPfdFactId(array(12, 34)); // WHERE pfd_fact_id IN (12, 34)
     * $query->filterByPfdFactId(array('min' => 12)); // WHERE pfd_fact_id >= 12
     * $query->filterByPfdFactId(array('max' => 12)); // WHERE pfd_fact_id <= 12
     * </code>
     *
     * @see       filterByFactureGenerated()
     *
     * @param     mixed $pfdFactId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdFactId($pfdFactId = null, $comparison = null)
    {
        if (is_array($pfdFactId)) {
            $useMinMax = false;
            if (isset($pfdFactId['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ID, $pfdFactId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfdFactId['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ID, $pfdFactId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ID, $pfdFactId, $comparison);
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
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::DATE_MODIFY, $dateModify, $comparison);
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
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::USER_ID, $userId, $comparison);
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
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(PlanFacturationDetailsPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::USER_MODIFY, $userModify, $comparison);
    }

    /**
     * Filter the query on the pfd_num_cmd column
     *
     * Example usage:
     * <code>
     * $query->filterByPfdNumCmd('fooValue');   // WHERE pfd_num_cmd = 'fooValue'
     * $query->filterByPfdNumCmd('%fooValue%'); // WHERE pfd_num_cmd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pfdNumCmd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function filterByPfdNumCmd($pfdNumCmd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pfdNumCmd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pfdNumCmd)) {
                $pfdNumCmd = str_replace('*', '%', $pfdNumCmd);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_NUM_CMD, $pfdNumCmd, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanFacturationDetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
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
     * Filter the query by a related RFactureTypes object
     *
     * @param   RFactureTypes|PropelObjectCollection $rFactureTypes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanFacturationDetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRFactureTypes($rFactureTypes, $comparison = null)
    {
        if ($rFactureTypes instanceof RFactureTypes) {
            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, $rFactureTypes->getRFactTypeId(), $comparison);
        } elseif ($rFactureTypes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, $rFactureTypes->toKeyValue('PrimaryKey', 'RFactTypeId'), $comparison);
        } else {
            throw new PropelException('filterByRFactureTypes() only accepts arguments of type RFactureTypes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RFactureTypes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function joinRFactureTypes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RFactureTypes');

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
            $this->addJoinObject($join, 'RFactureTypes');
        }

        return $this;
    }

    /**
     * Use the RFactureTypes relation RFactureTypes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RFactureTypesQuery A secondary query class using the current class as primary query
     */
    public function useRFactureTypesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRFactureTypes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RFactureTypes', 'RFactureTypesQuery');
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanFacturationDetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureToCancel($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, $factures->getFactId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, $factures->toKeyValue('PrimaryKey', 'FactId'), $comparison);
        } else {
            throw new PropelException('filterByFactureToCancel() only accepts arguments of type Factures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FactureToCancel relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function joinFactureToCancel($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FactureToCancel');

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
            $this->addJoinObject($join, 'FactureToCancel');
        }

        return $this;
    }

    /**
     * Use the FactureToCancel relation Factures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturesQuery A secondary query class using the current class as primary query
     */
    public function useFactureToCancelQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactureToCancel($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactureToCancel', 'FacturesQuery');
    }

    /**
     * Filter the query by a related PlanFacturationDetails object
     *
     * @param   PlanFacturationDetails|PropelObjectCollection $planFacturationDetails The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanFacturationDetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlanFacturationDetailToCancel($planFacturationDetails, $comparison = null)
    {
        if ($planFacturationDetails instanceof PlanFacturationDetails) {
            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL, $planFacturationDetails->getPfdId(), $comparison);
        } elseif ($planFacturationDetails instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL, $planFacturationDetails->toKeyValue('PrimaryKey', 'PfdId'), $comparison);
        } else {
            throw new PropelException('filterByPlanFacturationDetailToCancel() only accepts arguments of type PlanFacturationDetails or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PlanFacturationDetailToCancel relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function joinPlanFacturationDetailToCancel($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PlanFacturationDetailToCancel');

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
            $this->addJoinObject($join, 'PlanFacturationDetailToCancel');
        }

        return $this;
    }

    /**
     * Use the PlanFacturationDetailToCancel relation PlanFacturationDetails object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlanFacturationDetailsQuery A secondary query class using the current class as primary query
     */
    public function usePlanFacturationDetailToCancelQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPlanFacturationDetailToCancel($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PlanFacturationDetailToCancel', 'PlanFacturationDetailsQuery');
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanFacturationDetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureGenerated($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ID, $factures->getFactId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ID, $factures->toKeyValue('PrimaryKey', 'FactId'), $comparison);
        } else {
            throw new PropelException('filterByFactureGenerated() only accepts arguments of type Factures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FactureGenerated relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function joinFactureGenerated($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FactureGenerated');

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
            $this->addJoinObject($join, 'FactureGenerated');
        }

        return $this;
    }

    /**
     * Use the FactureGenerated relation Factures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturesQuery A secondary query class using the current class as primary query
     */
    public function useFactureGeneratedQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactureGenerated($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactureGenerated', 'FacturesQuery');
    }

    /**
     * Filter the query by a related RFactureAnnulationMotifs object
     *
     * @param   RFactureAnnulationMotifs|PropelObjectCollection $rFactureAnnulationMotifs The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanFacturationDetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInvoiceCancellationMotive($rFactureAnnulationMotifs, $comparison = null)
    {
        if ($rFactureAnnulationMotifs instanceof RFactureAnnulationMotifs) {
            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, $rFactureAnnulationMotifs->getRFactureAnnulationMotifsMotifId(), $comparison);
        } elseif ($rFactureAnnulationMotifs instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, $rFactureAnnulationMotifs->toKeyValue('PrimaryKey', 'RFactureAnnulationMotifsMotifId'), $comparison);
        } else {
            throw new PropelException('filterByInvoiceCancellationMotive() only accepts arguments of type RFactureAnnulationMotifs or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvoiceCancellationMotive relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function joinInvoiceCancellationMotive($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvoiceCancellationMotive');

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
            $this->addJoinObject($join, 'InvoiceCancellationMotive');
        }

        return $this;
    }

    /**
     * Use the InvoiceCancellationMotive relation RFactureAnnulationMotifs object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RFactureAnnulationMotifsQuery A secondary query class using the current class as primary query
     */
    public function useInvoiceCancellationMotiveQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinInvoiceCancellationMotive($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvoiceCancellationMotive', 'RFactureAnnulationMotifsQuery');
    }

    /**
     * Filter the query by a related PlanFacturationDetails object
     *
     * @param   PlanFacturationDetails|PropelObjectCollection $planFacturationDetails  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlanFacturationDetailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlanFacturationDetailsRelatedByPfdId($planFacturationDetails, $comparison = null)
    {
        if ($planFacturationDetails instanceof PlanFacturationDetails) {
            return $this
                ->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID, $planFacturationDetails->getPfdIdToCancel(), $comparison);
        } elseif ($planFacturationDetails instanceof PropelObjectCollection) {
            return $this
                ->usePlanFacturationDetailsRelatedByPfdIdQuery()
                ->filterByPrimaryKeys($planFacturationDetails->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPlanFacturationDetailsRelatedByPfdId() only accepts arguments of type PlanFacturationDetails or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PlanFacturationDetailsRelatedByPfdId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function joinPlanFacturationDetailsRelatedByPfdId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PlanFacturationDetailsRelatedByPfdId');

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
            $this->addJoinObject($join, 'PlanFacturationDetailsRelatedByPfdId');
        }

        return $this;
    }

    /**
     * Use the PlanFacturationDetailsRelatedByPfdId relation PlanFacturationDetails object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlanFacturationDetailsQuery A secondary query class using the current class as primary query
     */
    public function usePlanFacturationDetailsRelatedByPfdIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPlanFacturationDetailsRelatedByPfdId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PlanFacturationDetailsRelatedByPfdId', 'PlanFacturationDetailsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   PlanFacturationDetails $planFacturationDetails Object to remove from the list of results
     *
     * @return PlanFacturationDetailsQuery The current query, for fluid interface
     */
    public function prune($planFacturationDetails = null)
    {
        if ($planFacturationDetails) {
            $this->addUsingAlias(PlanFacturationDetailsPeer::PFD_ID, $planFacturationDetails->getPfdId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
