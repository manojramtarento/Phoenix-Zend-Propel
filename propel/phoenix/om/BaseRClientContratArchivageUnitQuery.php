<?php


/**
 * Base class that represents a query for the 'r_client_contrat_archivage_unit' table.
 *
 *
 *
 * @method RClientContratArchivageUnitQuery orderByRClCtArchivageUnitId($order = Criteria::ASC) Order by the r_cl_ct_archivage_unit_id column
 * @method RClientContratArchivageUnitQuery orderByRClCtArchivageLibelle($order = Criteria::ASC) Order by the r_cl_ct_archivage_libelle column
 *
 * @method RClientContratArchivageUnitQuery groupByRClCtArchivageUnitId() Group by the r_cl_ct_archivage_unit_id column
 * @method RClientContratArchivageUnitQuery groupByRClCtArchivageLibelle() Group by the r_cl_ct_archivage_libelle column
 *
 * @method RClientContratArchivageUnitQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RClientContratArchivageUnitQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RClientContratArchivageUnitQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RClientContratArchivageUnit findOne(PropelPDO $con = null) Return the first RClientContratArchivageUnit matching the query
 * @method RClientContratArchivageUnit findOneOrCreate(PropelPDO $con = null) Return the first RClientContratArchivageUnit matching the query, or a new RClientContratArchivageUnit object populated from the query conditions when no match is found
 *
 * @method RClientContratArchivageUnit findOneByRClCtArchivageLibelle(string $r_cl_ct_archivage_libelle) Return the first RClientContratArchivageUnit filtered by the r_cl_ct_archivage_libelle column
 *
 * @method array findByRClCtArchivageUnitId(int $r_cl_ct_archivage_unit_id) Return RClientContratArchivageUnit objects filtered by the r_cl_ct_archivage_unit_id column
 * @method array findByRClCtArchivageLibelle(string $r_cl_ct_archivage_libelle) Return RClientContratArchivageUnit objects filtered by the r_cl_ct_archivage_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRClientContratArchivageUnitQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRClientContratArchivageUnitQuery object.
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
            $modelName = 'RClientContratArchivageUnit';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RClientContratArchivageUnitQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RClientContratArchivageUnitQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RClientContratArchivageUnitQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RClientContratArchivageUnitQuery) {
            return $criteria;
        }
        $query = new RClientContratArchivageUnitQuery(null, null, $modelAlias);

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
     * @return   RClientContratArchivageUnit|RClientContratArchivageUnit[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RClientContratArchivageUnitPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RClientContratArchivageUnitPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RClientContratArchivageUnit A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRClCtArchivageUnitId($key, $con = null)
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
     * @return                 RClientContratArchivageUnit A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_cl_ct_archivage_unit_id`, `r_cl_ct_archivage_libelle` FROM `r_client_contrat_archivage_unit` WHERE `r_cl_ct_archivage_unit_id` = :p0';
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
            $obj = new RClientContratArchivageUnit();
            $obj->hydrate($row);
            RClientContratArchivageUnitPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RClientContratArchivageUnit|RClientContratArchivageUnit[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RClientContratArchivageUnit[]|mixed the list of results, formatted by the current formatter
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
     * @return RClientContratArchivageUnitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RClientContratArchivageUnitPeer::R_CL_CT_ARCHIVAGE_UNIT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RClientContratArchivageUnitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RClientContratArchivageUnitPeer::R_CL_CT_ARCHIVAGE_UNIT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_cl_ct_archivage_unit_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRClCtArchivageUnitId(1234); // WHERE r_cl_ct_archivage_unit_id = 1234
     * $query->filterByRClCtArchivageUnitId(array(12, 34)); // WHERE r_cl_ct_archivage_unit_id IN (12, 34)
     * $query->filterByRClCtArchivageUnitId(array('min' => 12)); // WHERE r_cl_ct_archivage_unit_id >= 12
     * $query->filterByRClCtArchivageUnitId(array('max' => 12)); // WHERE r_cl_ct_archivage_unit_id <= 12
     * </code>
     *
     * @param     mixed $rClCtArchivageUnitId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RClientContratArchivageUnitQuery The current query, for fluid interface
     */
    public function filterByRClCtArchivageUnitId($rClCtArchivageUnitId = null, $comparison = null)
    {
        if (is_array($rClCtArchivageUnitId)) {
            $useMinMax = false;
            if (isset($rClCtArchivageUnitId['min'])) {
                $this->addUsingAlias(RClientContratArchivageUnitPeer::R_CL_CT_ARCHIVAGE_UNIT_ID, $rClCtArchivageUnitId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rClCtArchivageUnitId['max'])) {
                $this->addUsingAlias(RClientContratArchivageUnitPeer::R_CL_CT_ARCHIVAGE_UNIT_ID, $rClCtArchivageUnitId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RClientContratArchivageUnitPeer::R_CL_CT_ARCHIVAGE_UNIT_ID, $rClCtArchivageUnitId, $comparison);
    }

    /**
     * Filter the query on the r_cl_ct_archivage_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRClCtArchivageLibelle('fooValue');   // WHERE r_cl_ct_archivage_libelle = 'fooValue'
     * $query->filterByRClCtArchivageLibelle('%fooValue%'); // WHERE r_cl_ct_archivage_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rClCtArchivageLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RClientContratArchivageUnitQuery The current query, for fluid interface
     */
    public function filterByRClCtArchivageLibelle($rClCtArchivageLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rClCtArchivageLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rClCtArchivageLibelle)) {
                $rClCtArchivageLibelle = str_replace('*', '%', $rClCtArchivageLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RClientContratArchivageUnitPeer::R_CL_CT_ARCHIVAGE_LIBELLE, $rClCtArchivageLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RClientContratArchivageUnit $rClientContratArchivageUnit Object to remove from the list of results
     *
     * @return RClientContratArchivageUnitQuery The current query, for fluid interface
     */
    public function prune($rClientContratArchivageUnit = null)
    {
        if ($rClientContratArchivageUnit) {
            $this->addUsingAlias(RClientContratArchivageUnitPeer::R_CL_CT_ARCHIVAGE_UNIT_ID, $rClientContratArchivageUnit->getRClCtArchivageUnitId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
