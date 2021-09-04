<?php


/**
 * Base class that represents a query for the 'client_contrat_options' table.
 *
 *
 *
 * @method ClientContratOptionsQuery orderByClCtOptId($order = Criteria::ASC) Order by the cl_ct_opt_id column
 * @method ClientContratOptionsQuery orderByClId($order = Criteria::ASC) Order by the cl_id column
 * @method ClientContratOptionsQuery orderByClCtArchivageDuree($order = Criteria::ASC) Order by the cl_ct_archivage_duree column
 * @method ClientContratOptionsQuery orderByClCtArchivageUnit($order = Criteria::ASC) Order by the cl_ct_archivage_unit column
 * @method ClientContratOptionsQuery orderByClCtRevisionBirthday($order = Criteria::ASC) Order by the cl_ct_revision_birthday column
 * @method ClientContratOptionsQuery orderByClCtReconduction($order = Criteria::ASC) Order by the cl_ct_reconduction column
 * @method ClientContratOptionsQuery orderByClCtStart($order = Criteria::ASC) Order by the cl_ct_start column
 * @method ClientContratOptionsQuery orderByClCtEcheance($order = Criteria::ASC) Order by the cl_ct_echeance column
 *
 * @method ClientContratOptionsQuery groupByClCtOptId() Group by the cl_ct_opt_id column
 * @method ClientContratOptionsQuery groupByClId() Group by the cl_id column
 * @method ClientContratOptionsQuery groupByClCtArchivageDuree() Group by the cl_ct_archivage_duree column
 * @method ClientContratOptionsQuery groupByClCtArchivageUnit() Group by the cl_ct_archivage_unit column
 * @method ClientContratOptionsQuery groupByClCtRevisionBirthday() Group by the cl_ct_revision_birthday column
 * @method ClientContratOptionsQuery groupByClCtReconduction() Group by the cl_ct_reconduction column
 * @method ClientContratOptionsQuery groupByClCtStart() Group by the cl_ct_start column
 * @method ClientContratOptionsQuery groupByClCtEcheance() Group by the cl_ct_echeance column
 *
 * @method ClientContratOptionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClientContratOptionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClientContratOptionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ClientContratOptionsQuery leftJoinClients($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clients relation
 * @method ClientContratOptionsQuery rightJoinClients($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clients relation
 * @method ClientContratOptionsQuery innerJoinClients($relationAlias = null) Adds a INNER JOIN clause to the query using the Clients relation
 *
 * @method ClientContratOptionsQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ClientContratOptionsQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ClientContratOptionsQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ClientContratOptions findOne(PropelPDO $con = null) Return the first ClientContratOptions matching the query
 * @method ClientContratOptions findOneOrCreate(PropelPDO $con = null) Return the first ClientContratOptions matching the query, or a new ClientContratOptions object populated from the query conditions when no match is found
 *
 * @method ClientContratOptions findOneByClId(int $cl_id) Return the first ClientContratOptions filtered by the cl_id column
 * @method ClientContratOptions findOneByClCtArchivageDuree(int $cl_ct_archivage_duree) Return the first ClientContratOptions filtered by the cl_ct_archivage_duree column
 * @method ClientContratOptions findOneByClCtArchivageUnit(string $cl_ct_archivage_unit) Return the first ClientContratOptions filtered by the cl_ct_archivage_unit column
 * @method ClientContratOptions findOneByClCtRevisionBirthday(boolean $cl_ct_revision_birthday) Return the first ClientContratOptions filtered by the cl_ct_revision_birthday column
 * @method ClientContratOptions findOneByClCtReconduction(boolean $cl_ct_reconduction) Return the first ClientContratOptions filtered by the cl_ct_reconduction column
 * @method ClientContratOptions findOneByClCtStart(string $cl_ct_start) Return the first ClientContratOptions filtered by the cl_ct_start column
 * @method ClientContratOptions findOneByClCtEcheance(string $cl_ct_echeance) Return the first ClientContratOptions filtered by the cl_ct_echeance column
 *
 * @method array findByClCtOptId(int $cl_ct_opt_id) Return ClientContratOptions objects filtered by the cl_ct_opt_id column
 * @method array findByClId(int $cl_id) Return ClientContratOptions objects filtered by the cl_id column
 * @method array findByClCtArchivageDuree(int $cl_ct_archivage_duree) Return ClientContratOptions objects filtered by the cl_ct_archivage_duree column
 * @method array findByClCtArchivageUnit(string $cl_ct_archivage_unit) Return ClientContratOptions objects filtered by the cl_ct_archivage_unit column
 * @method array findByClCtRevisionBirthday(boolean $cl_ct_revision_birthday) Return ClientContratOptions objects filtered by the cl_ct_revision_birthday column
 * @method array findByClCtReconduction(boolean $cl_ct_reconduction) Return ClientContratOptions objects filtered by the cl_ct_reconduction column
 * @method array findByClCtStart(string $cl_ct_start) Return ClientContratOptions objects filtered by the cl_ct_start column
 * @method array findByClCtEcheance(string $cl_ct_echeance) Return ClientContratOptions objects filtered by the cl_ct_echeance column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseClientContratOptionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClientContratOptionsQuery object.
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
            $modelName = 'ClientContratOptions';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClientContratOptionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClientContratOptionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClientContratOptionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClientContratOptionsQuery) {
            return $criteria;
        }
        $query = new ClientContratOptionsQuery(null, null, $modelAlias);

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
     * @return   ClientContratOptions|ClientContratOptions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClientContratOptionsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClientContratOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ClientContratOptions A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByClCtOptId($key, $con = null)
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
     * @return                 ClientContratOptions A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `cl_ct_opt_id`, `cl_id`, `cl_ct_archivage_duree`, `cl_ct_archivage_unit`, `cl_ct_revision_birthday`, `cl_ct_reconduction`, `cl_ct_start`, `cl_ct_echeance` FROM `client_contrat_options` WHERE `cl_ct_opt_id` = :p0';
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
            $obj = new ClientContratOptions();
            $obj->hydrate($row);
            ClientContratOptionsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ClientContratOptions|ClientContratOptions[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ClientContratOptions[]|mixed the list of results, formatted by the current formatter
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
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_OPT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_OPT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the cl_ct_opt_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClCtOptId(1234); // WHERE cl_ct_opt_id = 1234
     * $query->filterByClCtOptId(array(12, 34)); // WHERE cl_ct_opt_id IN (12, 34)
     * $query->filterByClCtOptId(array('min' => 12)); // WHERE cl_ct_opt_id >= 12
     * $query->filterByClCtOptId(array('max' => 12)); // WHERE cl_ct_opt_id <= 12
     * </code>
     *
     * @param     mixed $clCtOptId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function filterByClCtOptId($clCtOptId = null, $comparison = null)
    {
        if (is_array($clCtOptId)) {
            $useMinMax = false;
            if (isset($clCtOptId['min'])) {
                $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_OPT_ID, $clCtOptId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clCtOptId['max'])) {
                $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_OPT_ID, $clCtOptId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_OPT_ID, $clCtOptId, $comparison);
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
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function filterByClId($clId = null, $comparison = null)
    {
        if (is_array($clId)) {
            $useMinMax = false;
            if (isset($clId['min'])) {
                $this->addUsingAlias(ClientContratOptionsPeer::CL_ID, $clId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clId['max'])) {
                $this->addUsingAlias(ClientContratOptionsPeer::CL_ID, $clId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientContratOptionsPeer::CL_ID, $clId, $comparison);
    }

    /**
     * Filter the query on the cl_ct_archivage_duree column
     *
     * Example usage:
     * <code>
     * $query->filterByClCtArchivageDuree(1234); // WHERE cl_ct_archivage_duree = 1234
     * $query->filterByClCtArchivageDuree(array(12, 34)); // WHERE cl_ct_archivage_duree IN (12, 34)
     * $query->filterByClCtArchivageDuree(array('min' => 12)); // WHERE cl_ct_archivage_duree >= 12
     * $query->filterByClCtArchivageDuree(array('max' => 12)); // WHERE cl_ct_archivage_duree <= 12
     * </code>
     *
     * @param     mixed $clCtArchivageDuree The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function filterByClCtArchivageDuree($clCtArchivageDuree = null, $comparison = null)
    {
        if (is_array($clCtArchivageDuree)) {
            $useMinMax = false;
            if (isset($clCtArchivageDuree['min'])) {
                $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_ARCHIVAGE_DUREE, $clCtArchivageDuree['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clCtArchivageDuree['max'])) {
                $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_ARCHIVAGE_DUREE, $clCtArchivageDuree['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_ARCHIVAGE_DUREE, $clCtArchivageDuree, $comparison);
    }

    /**
     * Filter the query on the cl_ct_archivage_unit column
     *
     * Example usage:
     * <code>
     * $query->filterByClCtArchivageUnit('fooValue');   // WHERE cl_ct_archivage_unit = 'fooValue'
     * $query->filterByClCtArchivageUnit('%fooValue%'); // WHERE cl_ct_archivage_unit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clCtArchivageUnit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function filterByClCtArchivageUnit($clCtArchivageUnit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clCtArchivageUnit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clCtArchivageUnit)) {
                $clCtArchivageUnit = str_replace('*', '%', $clCtArchivageUnit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_ARCHIVAGE_UNIT, $clCtArchivageUnit, $comparison);
    }

    /**
     * Filter the query on the cl_ct_revision_birthday column
     *
     * Example usage:
     * <code>
     * $query->filterByClCtRevisionBirthday(true); // WHERE cl_ct_revision_birthday = true
     * $query->filterByClCtRevisionBirthday('yes'); // WHERE cl_ct_revision_birthday = true
     * </code>
     *
     * @param     boolean|string $clCtRevisionBirthday The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function filterByClCtRevisionBirthday($clCtRevisionBirthday = null, $comparison = null)
    {
        if (is_string($clCtRevisionBirthday)) {
            $clCtRevisionBirthday = in_array(strtolower($clCtRevisionBirthday), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_REVISION_BIRTHDAY, $clCtRevisionBirthday, $comparison);
    }

    /**
     * Filter the query on the cl_ct_reconduction column
     *
     * Example usage:
     * <code>
     * $query->filterByClCtReconduction(true); // WHERE cl_ct_reconduction = true
     * $query->filterByClCtReconduction('yes'); // WHERE cl_ct_reconduction = true
     * </code>
     *
     * @param     boolean|string $clCtReconduction The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function filterByClCtReconduction($clCtReconduction = null, $comparison = null)
    {
        if (is_string($clCtReconduction)) {
            $clCtReconduction = in_array(strtolower($clCtReconduction), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_RECONDUCTION, $clCtReconduction, $comparison);
    }

    /**
     * Filter the query on the cl_ct_start column
     *
     * Example usage:
     * <code>
     * $query->filterByClCtStart('2011-03-14'); // WHERE cl_ct_start = '2011-03-14'
     * $query->filterByClCtStart('now'); // WHERE cl_ct_start = '2011-03-14'
     * $query->filterByClCtStart(array('max' => 'yesterday')); // WHERE cl_ct_start < '2011-03-13'
     * </code>
     *
     * @param     mixed $clCtStart The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function filterByClCtStart($clCtStart = null, $comparison = null)
    {
        if (is_array($clCtStart)) {
            $useMinMax = false;
            if (isset($clCtStart['min'])) {
                $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_START, $clCtStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clCtStart['max'])) {
                $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_START, $clCtStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_START, $clCtStart, $comparison);
    }

    /**
     * Filter the query on the cl_ct_echeance column
     *
     * Example usage:
     * <code>
     * $query->filterByClCtEcheance('2011-03-14'); // WHERE cl_ct_echeance = '2011-03-14'
     * $query->filterByClCtEcheance('now'); // WHERE cl_ct_echeance = '2011-03-14'
     * $query->filterByClCtEcheance(array('max' => 'yesterday')); // WHERE cl_ct_echeance < '2011-03-13'
     * </code>
     *
     * @param     mixed $clCtEcheance The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function filterByClCtEcheance($clCtEcheance = null, $comparison = null)
    {
        if (is_array($clCtEcheance)) {
            $useMinMax = false;
            if (isset($clCtEcheance['min'])) {
                $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_ECHEANCE, $clCtEcheance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clCtEcheance['max'])) {
                $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_ECHEANCE, $clCtEcheance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_ECHEANCE, $clCtEcheance, $comparison);
    }

    /**
     * Filter the query by a related Clients object
     *
     * @param   Clients|PropelObjectCollection $clients The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientContratOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClients($clients, $comparison = null)
    {
        if ($clients instanceof Clients) {
            return $this
                ->addUsingAlias(ClientContratOptionsPeer::CL_ID, $clients->getClId(), $comparison);
        } elseif ($clients instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientContratOptionsPeer::CL_ID, $clients->toKeyValue('PrimaryKey', 'ClId'), $comparison);
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
     * @return ClientContratOptionsQuery The current query, for fluid interface
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
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientContratOptionsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ClientContratOptionsPeer::CL_ID, $operations->getOpClId(), $comparison);
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
     * @return ClientContratOptionsQuery The current query, for fluid interface
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
     * @param   ClientContratOptions $clientContratOptions Object to remove from the list of results
     *
     * @return ClientContratOptionsQuery The current query, for fluid interface
     */
    public function prune($clientContratOptions = null)
    {
        if ($clientContratOptions) {
            $this->addUsingAlias(ClientContratOptionsPeer::CL_CT_OPT_ID, $clientContratOptions->getClCtOptId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
