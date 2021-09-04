<?php


/**
 * Base class that represents a query for the 'operation_prestations_factures_achats' table.
 *
 *
 *
 * @method OperationPrestationsFacturesAchatsQuery orderByOpPrestAchatId($order = Criteria::ASC) Order by the op_prest_achat_id column
 * @method OperationPrestationsFacturesAchatsQuery orderByOpPrestId($order = Criteria::ASC) Order by the op_prest_id column
 * @method OperationPrestationsFacturesAchatsQuery orderByOpPrestAchatNumFacture($order = Criteria::ASC) Order by the op_prest_achat_num_facture column
 * @method OperationPrestationsFacturesAchatsQuery orderByOpPrestAchatDateFacture($order = Criteria::ASC) Order by the op_prest_achat_date_facture column
 * @method OperationPrestationsFacturesAchatsQuery orderByOpPrestAchatQuantite($order = Criteria::ASC) Order by the op_prest_achat_quantite column
 * @method OperationPrestationsFacturesAchatsQuery orderByOpPrestAchatCoutInterne($order = Criteria::ASC) Order by the op_prest_achat_cout_interne column
 * @method OperationPrestationsFacturesAchatsQuery orderByOpPrestAchatCoutExterne($order = Criteria::ASC) Order by the op_prest_achat_cout_externe column
 * @method OperationPrestationsFacturesAchatsQuery orderByOpPrestAchatFileId($order = Criteria::ASC) Order by the op_prest_achat_file_id column
 *
 * @method OperationPrestationsFacturesAchatsQuery groupByOpPrestAchatId() Group by the op_prest_achat_id column
 * @method OperationPrestationsFacturesAchatsQuery groupByOpPrestId() Group by the op_prest_id column
 * @method OperationPrestationsFacturesAchatsQuery groupByOpPrestAchatNumFacture() Group by the op_prest_achat_num_facture column
 * @method OperationPrestationsFacturesAchatsQuery groupByOpPrestAchatDateFacture() Group by the op_prest_achat_date_facture column
 * @method OperationPrestationsFacturesAchatsQuery groupByOpPrestAchatQuantite() Group by the op_prest_achat_quantite column
 * @method OperationPrestationsFacturesAchatsQuery groupByOpPrestAchatCoutInterne() Group by the op_prest_achat_cout_interne column
 * @method OperationPrestationsFacturesAchatsQuery groupByOpPrestAchatCoutExterne() Group by the op_prest_achat_cout_externe column
 * @method OperationPrestationsFacturesAchatsQuery groupByOpPrestAchatFileId() Group by the op_prest_achat_file_id column
 *
 * @method OperationPrestationsFacturesAchatsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationPrestationsFacturesAchatsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationPrestationsFacturesAchatsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationPrestationsFacturesAchats findOne(PropelPDO $con = null) Return the first OperationPrestationsFacturesAchats matching the query
 * @method OperationPrestationsFacturesAchats findOneOrCreate(PropelPDO $con = null) Return the first OperationPrestationsFacturesAchats matching the query, or a new OperationPrestationsFacturesAchats object populated from the query conditions when no match is found
 *
 * @method OperationPrestationsFacturesAchats findOneByOpPrestId(int $op_prest_id) Return the first OperationPrestationsFacturesAchats filtered by the op_prest_id column
 * @method OperationPrestationsFacturesAchats findOneByOpPrestAchatNumFacture(string $op_prest_achat_num_facture) Return the first OperationPrestationsFacturesAchats filtered by the op_prest_achat_num_facture column
 * @method OperationPrestationsFacturesAchats findOneByOpPrestAchatDateFacture(string $op_prest_achat_date_facture) Return the first OperationPrestationsFacturesAchats filtered by the op_prest_achat_date_facture column
 * @method OperationPrestationsFacturesAchats findOneByOpPrestAchatQuantite(int $op_prest_achat_quantite) Return the first OperationPrestationsFacturesAchats filtered by the op_prest_achat_quantite column
 * @method OperationPrestationsFacturesAchats findOneByOpPrestAchatCoutInterne(float $op_prest_achat_cout_interne) Return the first OperationPrestationsFacturesAchats filtered by the op_prest_achat_cout_interne column
 * @method OperationPrestationsFacturesAchats findOneByOpPrestAchatCoutExterne(float $op_prest_achat_cout_externe) Return the first OperationPrestationsFacturesAchats filtered by the op_prest_achat_cout_externe column
 * @method OperationPrestationsFacturesAchats findOneByOpPrestAchatFileId(int $op_prest_achat_file_id) Return the first OperationPrestationsFacturesAchats filtered by the op_prest_achat_file_id column
 *
 * @method array findByOpPrestAchatId(int $op_prest_achat_id) Return OperationPrestationsFacturesAchats objects filtered by the op_prest_achat_id column
 * @method array findByOpPrestId(int $op_prest_id) Return OperationPrestationsFacturesAchats objects filtered by the op_prest_id column
 * @method array findByOpPrestAchatNumFacture(string $op_prest_achat_num_facture) Return OperationPrestationsFacturesAchats objects filtered by the op_prest_achat_num_facture column
 * @method array findByOpPrestAchatDateFacture(string $op_prest_achat_date_facture) Return OperationPrestationsFacturesAchats objects filtered by the op_prest_achat_date_facture column
 * @method array findByOpPrestAchatQuantite(int $op_prest_achat_quantite) Return OperationPrestationsFacturesAchats objects filtered by the op_prest_achat_quantite column
 * @method array findByOpPrestAchatCoutInterne(float $op_prest_achat_cout_interne) Return OperationPrestationsFacturesAchats objects filtered by the op_prest_achat_cout_interne column
 * @method array findByOpPrestAchatCoutExterne(float $op_prest_achat_cout_externe) Return OperationPrestationsFacturesAchats objects filtered by the op_prest_achat_cout_externe column
 * @method array findByOpPrestAchatFileId(int $op_prest_achat_file_id) Return OperationPrestationsFacturesAchats objects filtered by the op_prest_achat_file_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationPrestationsFacturesAchatsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationPrestationsFacturesAchatsQuery object.
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
            $modelName = 'OperationPrestationsFacturesAchats';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationPrestationsFacturesAchatsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationPrestationsFacturesAchatsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationPrestationsFacturesAchatsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationPrestationsFacturesAchatsQuery) {
            return $criteria;
        }
        $query = new OperationPrestationsFacturesAchatsQuery(null, null, $modelAlias);

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
     * @return   OperationPrestationsFacturesAchats|OperationPrestationsFacturesAchats[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationPrestationsFacturesAchatsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsFacturesAchatsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationPrestationsFacturesAchats A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOpPrestAchatId($key, $con = null)
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
     * @return                 OperationPrestationsFacturesAchats A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_prest_achat_id`, `op_prest_id`, `op_prest_achat_num_facture`, `op_prest_achat_date_facture`, `op_prest_achat_quantite`, `op_prest_achat_cout_interne`, `op_prest_achat_cout_externe`, `op_prest_achat_file_id` FROM `operation_prestations_factures_achats` WHERE `op_prest_achat_id` = :p0';
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
            $obj = new OperationPrestationsFacturesAchats();
            $obj->hydrate($row);
            OperationPrestationsFacturesAchatsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OperationPrestationsFacturesAchats|OperationPrestationsFacturesAchats[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationPrestationsFacturesAchats[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the op_prest_achat_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestAchatId(1234); // WHERE op_prest_achat_id = 1234
     * $query->filterByOpPrestAchatId(array(12, 34)); // WHERE op_prest_achat_id IN (12, 34)
     * $query->filterByOpPrestAchatId(array('min' => 12)); // WHERE op_prest_achat_id >= 12
     * $query->filterByOpPrestAchatId(array('max' => 12)); // WHERE op_prest_achat_id <= 12
     * </code>
     *
     * @param     mixed $opPrestAchatId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function filterByOpPrestAchatId($opPrestAchatId = null, $comparison = null)
    {
        if (is_array($opPrestAchatId)) {
            $useMinMax = false;
            if (isset($opPrestAchatId['min'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID, $opPrestAchatId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestAchatId['max'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID, $opPrestAchatId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID, $opPrestAchatId, $comparison);
    }

    /**
     * Filter the query on the op_prest_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestId(1234); // WHERE op_prest_id = 1234
     * $query->filterByOpPrestId(array(12, 34)); // WHERE op_prest_id IN (12, 34)
     * $query->filterByOpPrestId(array('min' => 12)); // WHERE op_prest_id >= 12
     * $query->filterByOpPrestId(array('max' => 12)); // WHERE op_prest_id <= 12
     * </code>
     *
     * @param     mixed $opPrestId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function filterByOpPrestId($opPrestId = null, $comparison = null)
    {
        if (is_array($opPrestId)) {
            $useMinMax = false;
            if (isset($opPrestId['min'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ID, $opPrestId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestId['max'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ID, $opPrestId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ID, $opPrestId, $comparison);
    }

    /**
     * Filter the query on the op_prest_achat_num_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestAchatNumFacture('fooValue');   // WHERE op_prest_achat_num_facture = 'fooValue'
     * $query->filterByOpPrestAchatNumFacture('%fooValue%'); // WHERE op_prest_achat_num_facture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opPrestAchatNumFacture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function filterByOpPrestAchatNumFacture($opPrestAchatNumFacture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opPrestAchatNumFacture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opPrestAchatNumFacture)) {
                $opPrestAchatNumFacture = str_replace('*', '%', $opPrestAchatNumFacture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_NUM_FACTURE, $opPrestAchatNumFacture, $comparison);
    }

    /**
     * Filter the query on the op_prest_achat_date_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestAchatDateFacture('2011-03-14'); // WHERE op_prest_achat_date_facture = '2011-03-14'
     * $query->filterByOpPrestAchatDateFacture('now'); // WHERE op_prest_achat_date_facture = '2011-03-14'
     * $query->filterByOpPrestAchatDateFacture(array('max' => 'yesterday')); // WHERE op_prest_achat_date_facture < '2011-03-13'
     * </code>
     *
     * @param     mixed $opPrestAchatDateFacture The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function filterByOpPrestAchatDateFacture($opPrestAchatDateFacture = null, $comparison = null)
    {
        if (is_array($opPrestAchatDateFacture)) {
            $useMinMax = false;
            if (isset($opPrestAchatDateFacture['min'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_DATE_FACTURE, $opPrestAchatDateFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestAchatDateFacture['max'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_DATE_FACTURE, $opPrestAchatDateFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_DATE_FACTURE, $opPrestAchatDateFacture, $comparison);
    }

    /**
     * Filter the query on the op_prest_achat_quantite column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestAchatQuantite(1234); // WHERE op_prest_achat_quantite = 1234
     * $query->filterByOpPrestAchatQuantite(array(12, 34)); // WHERE op_prest_achat_quantite IN (12, 34)
     * $query->filterByOpPrestAchatQuantite(array('min' => 12)); // WHERE op_prest_achat_quantite >= 12
     * $query->filterByOpPrestAchatQuantite(array('max' => 12)); // WHERE op_prest_achat_quantite <= 12
     * </code>
     *
     * @param     mixed $opPrestAchatQuantite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function filterByOpPrestAchatQuantite($opPrestAchatQuantite = null, $comparison = null)
    {
        if (is_array($opPrestAchatQuantite)) {
            $useMinMax = false;
            if (isset($opPrestAchatQuantite['min'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_QUANTITE, $opPrestAchatQuantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestAchatQuantite['max'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_QUANTITE, $opPrestAchatQuantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_QUANTITE, $opPrestAchatQuantite, $comparison);
    }

    /**
     * Filter the query on the op_prest_achat_cout_interne column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestAchatCoutInterne(1234); // WHERE op_prest_achat_cout_interne = 1234
     * $query->filterByOpPrestAchatCoutInterne(array(12, 34)); // WHERE op_prest_achat_cout_interne IN (12, 34)
     * $query->filterByOpPrestAchatCoutInterne(array('min' => 12)); // WHERE op_prest_achat_cout_interne >= 12
     * $query->filterByOpPrestAchatCoutInterne(array('max' => 12)); // WHERE op_prest_achat_cout_interne <= 12
     * </code>
     *
     * @param     mixed $opPrestAchatCoutInterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function filterByOpPrestAchatCoutInterne($opPrestAchatCoutInterne = null, $comparison = null)
    {
        if (is_array($opPrestAchatCoutInterne)) {
            $useMinMax = false;
            if (isset($opPrestAchatCoutInterne['min'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_INTERNE, $opPrestAchatCoutInterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestAchatCoutInterne['max'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_INTERNE, $opPrestAchatCoutInterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_INTERNE, $opPrestAchatCoutInterne, $comparison);
    }

    /**
     * Filter the query on the op_prest_achat_cout_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestAchatCoutExterne(1234); // WHERE op_prest_achat_cout_externe = 1234
     * $query->filterByOpPrestAchatCoutExterne(array(12, 34)); // WHERE op_prest_achat_cout_externe IN (12, 34)
     * $query->filterByOpPrestAchatCoutExterne(array('min' => 12)); // WHERE op_prest_achat_cout_externe >= 12
     * $query->filterByOpPrestAchatCoutExterne(array('max' => 12)); // WHERE op_prest_achat_cout_externe <= 12
     * </code>
     *
     * @param     mixed $opPrestAchatCoutExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function filterByOpPrestAchatCoutExterne($opPrestAchatCoutExterne = null, $comparison = null)
    {
        if (is_array($opPrestAchatCoutExterne)) {
            $useMinMax = false;
            if (isset($opPrestAchatCoutExterne['min'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_EXTERNE, $opPrestAchatCoutExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestAchatCoutExterne['max'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_EXTERNE, $opPrestAchatCoutExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_COUT_EXTERNE, $opPrestAchatCoutExterne, $comparison);
    }

    /**
     * Filter the query on the op_prest_achat_file_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestAchatFileId(1234); // WHERE op_prest_achat_file_id = 1234
     * $query->filterByOpPrestAchatFileId(array(12, 34)); // WHERE op_prest_achat_file_id IN (12, 34)
     * $query->filterByOpPrestAchatFileId(array('min' => 12)); // WHERE op_prest_achat_file_id >= 12
     * $query->filterByOpPrestAchatFileId(array('max' => 12)); // WHERE op_prest_achat_file_id <= 12
     * </code>
     *
     * @param     mixed $opPrestAchatFileId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function filterByOpPrestAchatFileId($opPrestAchatFileId = null, $comparison = null)
    {
        if (is_array($opPrestAchatFileId)) {
            $useMinMax = false;
            if (isset($opPrestAchatFileId['min'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_FILE_ID, $opPrestAchatFileId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestAchatFileId['max'])) {
                $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_FILE_ID, $opPrestAchatFileId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_FILE_ID, $opPrestAchatFileId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   OperationPrestationsFacturesAchats $operationPrestationsFacturesAchats Object to remove from the list of results
     *
     * @return OperationPrestationsFacturesAchatsQuery The current query, for fluid interface
     */
    public function prune($operationPrestationsFacturesAchats = null)
    {
        if ($operationPrestationsFacturesAchats) {
            $this->addUsingAlias(OperationPrestationsFacturesAchatsPeer::OP_PREST_ACHAT_ID, $operationPrestationsFacturesAchats->getOpPrestAchatId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
