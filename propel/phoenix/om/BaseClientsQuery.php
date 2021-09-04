<?php


/**
 * Base class that represents a query for the 'clients' table.
 *
 *
 *
 * @method ClientsQuery orderByClId($order = Criteria::ASC) Order by the cl_id column
 * @method ClientsQuery orderByClLibelle($order = Criteria::ASC) Order by the cl_libelle column
 * @method ClientsQuery orderByClActivityId($order = Criteria::ASC) Order by the cl_activity_id column
 * @method ClientsQuery orderByClTypeId($order = Criteria::ASC) Order by the cl_type_id column
 * @method ClientsQuery orderByClCtGestion($order = Criteria::ASC) Order by the cl_ct_gestion column
 * @method ClientsQuery orderByClCtFacturation($order = Criteria::ASC) Order by the cl_ct_facturation column
 * @method ClientsQuery orderByClDcId($order = Criteria::ASC) Order by the cl_dc_id column
 * @method ClientsQuery orderByClExcludeOfQ3Campaign($order = Criteria::ASC) Order by the cl_exclude_of_q3_campaign column
 * @method ClientsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method ClientsQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method ClientsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method ClientsQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method ClientsQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method ClientsQuery groupByClId() Group by the cl_id column
 * @method ClientsQuery groupByClLibelle() Group by the cl_libelle column
 * @method ClientsQuery groupByClActivityId() Group by the cl_activity_id column
 * @method ClientsQuery groupByClTypeId() Group by the cl_type_id column
 * @method ClientsQuery groupByClCtGestion() Group by the cl_ct_gestion column
 * @method ClientsQuery groupByClCtFacturation() Group by the cl_ct_facturation column
 * @method ClientsQuery groupByClDcId() Group by the cl_dc_id column
 * @method ClientsQuery groupByClExcludeOfQ3Campaign() Group by the cl_exclude_of_q3_campaign column
 * @method ClientsQuery groupByUserId() Group by the user_id column
 * @method ClientsQuery groupByUserModify() Group by the user_modify column
 * @method ClientsQuery groupByDateCreate() Group by the date_create column
 * @method ClientsQuery groupByDateModify() Group by the date_modify column
 * @method ClientsQuery groupByActif() Group by the actif column
 *
 * @method ClientsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClientsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClientsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ClientsQuery leftJoinUserDc($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserDc relation
 * @method ClientsQuery rightJoinUserDc($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserDc relation
 * @method ClientsQuery innerJoinUserDc($relationAlias = null) Adds a INNER JOIN clause to the query using the UserDc relation
 *
 * @method ClientsQuery leftJoinContactFacturation($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContactFacturation relation
 * @method ClientsQuery rightJoinContactFacturation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContactFacturation relation
 * @method ClientsQuery innerJoinContactFacturation($relationAlias = null) Adds a INNER JOIN clause to the query using the ContactFacturation relation
 *
 * @method ClientsQuery leftJoinContactGestion($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContactGestion relation
 * @method ClientsQuery rightJoinContactGestion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContactGestion relation
 * @method ClientsQuery innerJoinContactGestion($relationAlias = null) Adds a INNER JOIN clause to the query using the ContactGestion relation
 *
 * @method ClientsQuery leftJoinClientContratOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientContratOptions relation
 * @method ClientsQuery rightJoinClientContratOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientContratOptions relation
 * @method ClientsQuery innerJoinClientContratOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientContratOptions relation
 *
 * @method ClientsQuery leftJoinClientFactureOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientFactureOptions relation
 * @method ClientsQuery rightJoinClientFactureOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientFactureOptions relation
 * @method ClientsQuery innerJoinClientFactureOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientFactureOptions relation
 *
 * @method ClientsQuery leftJoinClientPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientPrestations relation
 * @method ClientsQuery rightJoinClientPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientPrestations relation
 * @method ClientsQuery innerJoinClientPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientPrestations relation
 *
 * @method ClientsQuery leftJoinContactsRelatedByClId($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContactsRelatedByClId relation
 * @method ClientsQuery rightJoinContactsRelatedByClId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContactsRelatedByClId relation
 * @method ClientsQuery innerJoinContactsRelatedByClId($relationAlias = null) Adds a INNER JOIN clause to the query using the ContactsRelatedByClId relation
 *
 * @method ClientsQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method ClientsQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method ClientsQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method ClientsQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method ClientsQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method ClientsQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method ClientsQuery leftJoinRelances($relationAlias = null) Adds a LEFT JOIN clause to the query using the Relances relation
 * @method ClientsQuery rightJoinRelances($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Relances relation
 * @method ClientsQuery innerJoinRelances($relationAlias = null) Adds a INNER JOIN clause to the query using the Relances relation
 *
 * @method ClientsQuery leftJoinFactureEditionHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureEditionHistory relation
 * @method ClientsQuery rightJoinFactureEditionHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureEditionHistory relation
 * @method ClientsQuery innerJoinFactureEditionHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureEditionHistory relation
 *
 * @method Clients findOne(PropelPDO $con = null) Return the first Clients matching the query
 * @method Clients findOneOrCreate(PropelPDO $con = null) Return the first Clients matching the query, or a new Clients object populated from the query conditions when no match is found
 *
 * @method Clients findOneByClLibelle(string $cl_libelle) Return the first Clients filtered by the cl_libelle column
 * @method Clients findOneByClActivityId(int $cl_activity_id) Return the first Clients filtered by the cl_activity_id column
 * @method Clients findOneByClTypeId(int $cl_type_id) Return the first Clients filtered by the cl_type_id column
 * @method Clients findOneByClCtGestion(int $cl_ct_gestion) Return the first Clients filtered by the cl_ct_gestion column
 * @method Clients findOneByClCtFacturation(int $cl_ct_facturation) Return the first Clients filtered by the cl_ct_facturation column
 * @method Clients findOneByClDcId(int $cl_dc_id) Return the first Clients filtered by the cl_dc_id column
 * @method Clients findOneByClExcludeOfQ3Campaign(boolean $cl_exclude_of_q3_campaign) Return the first Clients filtered by the cl_exclude_of_q3_campaign column
 * @method Clients findOneByUserId(int $user_id) Return the first Clients filtered by the user_id column
 * @method Clients findOneByUserModify(int $user_modify) Return the first Clients filtered by the user_modify column
 * @method Clients findOneByDateCreate(string $date_create) Return the first Clients filtered by the date_create column
 * @method Clients findOneByDateModify(string $date_modify) Return the first Clients filtered by the date_modify column
 * @method Clients findOneByActif(int $actif) Return the first Clients filtered by the actif column
 *
 * @method array findByClId(int $cl_id) Return Clients objects filtered by the cl_id column
 * @method array findByClLibelle(string $cl_libelle) Return Clients objects filtered by the cl_libelle column
 * @method array findByClActivityId(int $cl_activity_id) Return Clients objects filtered by the cl_activity_id column
 * @method array findByClTypeId(int $cl_type_id) Return Clients objects filtered by the cl_type_id column
 * @method array findByClCtGestion(int $cl_ct_gestion) Return Clients objects filtered by the cl_ct_gestion column
 * @method array findByClCtFacturation(int $cl_ct_facturation) Return Clients objects filtered by the cl_ct_facturation column
 * @method array findByClDcId(int $cl_dc_id) Return Clients objects filtered by the cl_dc_id column
 * @method array findByClExcludeOfQ3Campaign(boolean $cl_exclude_of_q3_campaign) Return Clients objects filtered by the cl_exclude_of_q3_campaign column
 * @method array findByUserId(int $user_id) Return Clients objects filtered by the user_id column
 * @method array findByUserModify(int $user_modify) Return Clients objects filtered by the user_modify column
 * @method array findByDateCreate(string $date_create) Return Clients objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return Clients objects filtered by the date_modify column
 * @method array findByActif(int $actif) Return Clients objects filtered by the actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseClientsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClientsQuery object.
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
            $modelName = 'Clients';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClientsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClientsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClientsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClientsQuery) {
            return $criteria;
        }
        $query = new ClientsQuery(null, null, $modelAlias);

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
     * @return   Clients|Clients[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClientsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClientsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Clients A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByClId($key, $con = null)
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
     * @return                 Clients A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `cl_id`, `cl_libelle`, `cl_activity_id`, `cl_type_id`, `cl_ct_gestion`, `cl_ct_facturation`, `cl_dc_id`, `cl_exclude_of_q3_campaign`, `user_id`, `user_modify`, `date_create`, `date_modify`, `actif` FROM `clients` WHERE `cl_id` = :p0';
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
            $obj = new Clients();
            $obj->hydrate($row);
            ClientsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Clients|Clients[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Clients[]|mixed the list of results, formatted by the current formatter
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
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClientsPeer::CL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClientsPeer::CL_ID, $keys, Criteria::IN);
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
     * @param     mixed $clId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByClId($clId = null, $comparison = null)
    {
        if (is_array($clId)) {
            $useMinMax = false;
            if (isset($clId['min'])) {
                $this->addUsingAlias(ClientsPeer::CL_ID, $clId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clId['max'])) {
                $this->addUsingAlias(ClientsPeer::CL_ID, $clId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::CL_ID, $clId, $comparison);
    }

    /**
     * Filter the query on the cl_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByClLibelle('fooValue');   // WHERE cl_libelle = 'fooValue'
     * $query->filterByClLibelle('%fooValue%'); // WHERE cl_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByClLibelle($clLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clLibelle)) {
                $clLibelle = str_replace('*', '%', $clLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientsPeer::CL_LIBELLE, $clLibelle, $comparison);
    }

    /**
     * Filter the query on the cl_activity_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClActivityId(1234); // WHERE cl_activity_id = 1234
     * $query->filterByClActivityId(array(12, 34)); // WHERE cl_activity_id IN (12, 34)
     * $query->filterByClActivityId(array('min' => 12)); // WHERE cl_activity_id >= 12
     * $query->filterByClActivityId(array('max' => 12)); // WHERE cl_activity_id <= 12
     * </code>
     *
     * @param     mixed $clActivityId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByClActivityId($clActivityId = null, $comparison = null)
    {
        if (is_array($clActivityId)) {
            $useMinMax = false;
            if (isset($clActivityId['min'])) {
                $this->addUsingAlias(ClientsPeer::CL_ACTIVITY_ID, $clActivityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clActivityId['max'])) {
                $this->addUsingAlias(ClientsPeer::CL_ACTIVITY_ID, $clActivityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::CL_ACTIVITY_ID, $clActivityId, $comparison);
    }

    /**
     * Filter the query on the cl_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClTypeId(1234); // WHERE cl_type_id = 1234
     * $query->filterByClTypeId(array(12, 34)); // WHERE cl_type_id IN (12, 34)
     * $query->filterByClTypeId(array('min' => 12)); // WHERE cl_type_id >= 12
     * $query->filterByClTypeId(array('max' => 12)); // WHERE cl_type_id <= 12
     * </code>
     *
     * @param     mixed $clTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByClTypeId($clTypeId = null, $comparison = null)
    {
        if (is_array($clTypeId)) {
            $useMinMax = false;
            if (isset($clTypeId['min'])) {
                $this->addUsingAlias(ClientsPeer::CL_TYPE_ID, $clTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clTypeId['max'])) {
                $this->addUsingAlias(ClientsPeer::CL_TYPE_ID, $clTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::CL_TYPE_ID, $clTypeId, $comparison);
    }

    /**
     * Filter the query on the cl_ct_gestion column
     *
     * Example usage:
     * <code>
     * $query->filterByClCtGestion(1234); // WHERE cl_ct_gestion = 1234
     * $query->filterByClCtGestion(array(12, 34)); // WHERE cl_ct_gestion IN (12, 34)
     * $query->filterByClCtGestion(array('min' => 12)); // WHERE cl_ct_gestion >= 12
     * $query->filterByClCtGestion(array('max' => 12)); // WHERE cl_ct_gestion <= 12
     * </code>
     *
     * @see       filterByContactGestion()
     *
     * @param     mixed $clCtGestion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByClCtGestion($clCtGestion = null, $comparison = null)
    {
        if (is_array($clCtGestion)) {
            $useMinMax = false;
            if (isset($clCtGestion['min'])) {
                $this->addUsingAlias(ClientsPeer::CL_CT_GESTION, $clCtGestion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clCtGestion['max'])) {
                $this->addUsingAlias(ClientsPeer::CL_CT_GESTION, $clCtGestion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::CL_CT_GESTION, $clCtGestion, $comparison);
    }

    /**
     * Filter the query on the cl_ct_facturation column
     *
     * Example usage:
     * <code>
     * $query->filterByClCtFacturation(1234); // WHERE cl_ct_facturation = 1234
     * $query->filterByClCtFacturation(array(12, 34)); // WHERE cl_ct_facturation IN (12, 34)
     * $query->filterByClCtFacturation(array('min' => 12)); // WHERE cl_ct_facturation >= 12
     * $query->filterByClCtFacturation(array('max' => 12)); // WHERE cl_ct_facturation <= 12
     * </code>
     *
     * @see       filterByContactFacturation()
     *
     * @param     mixed $clCtFacturation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByClCtFacturation($clCtFacturation = null, $comparison = null)
    {
        if (is_array($clCtFacturation)) {
            $useMinMax = false;
            if (isset($clCtFacturation['min'])) {
                $this->addUsingAlias(ClientsPeer::CL_CT_FACTURATION, $clCtFacturation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clCtFacturation['max'])) {
                $this->addUsingAlias(ClientsPeer::CL_CT_FACTURATION, $clCtFacturation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::CL_CT_FACTURATION, $clCtFacturation, $comparison);
    }

    /**
     * Filter the query on the cl_dc_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClDcId(1234); // WHERE cl_dc_id = 1234
     * $query->filterByClDcId(array(12, 34)); // WHERE cl_dc_id IN (12, 34)
     * $query->filterByClDcId(array('min' => 12)); // WHERE cl_dc_id >= 12
     * $query->filterByClDcId(array('max' => 12)); // WHERE cl_dc_id <= 12
     * </code>
     *
     * @see       filterByUserDc()
     *
     * @param     mixed $clDcId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByClDcId($clDcId = null, $comparison = null)
    {
        if (is_array($clDcId)) {
            $useMinMax = false;
            if (isset($clDcId['min'])) {
                $this->addUsingAlias(ClientsPeer::CL_DC_ID, $clDcId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clDcId['max'])) {
                $this->addUsingAlias(ClientsPeer::CL_DC_ID, $clDcId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::CL_DC_ID, $clDcId, $comparison);
    }

    /**
     * Filter the query on the cl_exclude_of_q3_campaign column
     *
     * Example usage:
     * <code>
     * $query->filterByClExcludeOfQ3Campaign(true); // WHERE cl_exclude_of_q3_campaign = true
     * $query->filterByClExcludeOfQ3Campaign('yes'); // WHERE cl_exclude_of_q3_campaign = true
     * </code>
     *
     * @param     boolean|string $clExcludeOfQ3Campaign The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByClExcludeOfQ3Campaign($clExcludeOfQ3Campaign = null, $comparison = null)
    {
        if (is_string($clExcludeOfQ3Campaign)) {
            $clExcludeOfQ3Campaign = in_array(strtolower($clExcludeOfQ3Campaign), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ClientsPeer::CL_EXCLUDE_OF_Q3_CAMPAIGN, $clExcludeOfQ3Campaign, $comparison);
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
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(ClientsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(ClientsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::USER_ID, $userId, $comparison);
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
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(ClientsPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(ClientsPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::USER_MODIFY, $userModify, $comparison);
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
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(ClientsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(ClientsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(ClientsPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(ClientsPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::DATE_MODIFY, $dateModify, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(1234); // WHERE actif = 1234
     * $query->filterByActif(array(12, 34)); // WHERE actif IN (12, 34)
     * $query->filterByActif(array('min' => 12)); // WHERE actif >= 12
     * $query->filterByActif(array('max' => 12)); // WHERE actif <= 12
     * </code>
     *
     * @param     mixed $actif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(ClientsPeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(ClientsPeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientsPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUserDc($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_DC_ID, $users->getUserId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientsPeer::CL_DC_ID, $users->toKeyValue('PrimaryKey', 'UserId'), $comparison);
        } else {
            throw new PropelException('filterByUserDc() only accepts arguments of type Users or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserDc relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function joinUserDc($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserDc');

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
            $this->addJoinObject($join, 'UserDc');
        }

        return $this;
    }

    /**
     * Use the UserDc relation Users object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsersQuery A secondary query class using the current class as primary query
     */
    public function useUserDcQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUserDc($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserDc', 'UsersQuery');
    }

    /**
     * Filter the query by a related Contacts object
     *
     * @param   Contacts|PropelObjectCollection $contacts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContactFacturation($contacts, $comparison = null)
    {
        if ($contacts instanceof Contacts) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_CT_FACTURATION, $contacts->getCtId(), $comparison);
        } elseif ($contacts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientsPeer::CL_CT_FACTURATION, $contacts->toKeyValue('PrimaryKey', 'CtId'), $comparison);
        } else {
            throw new PropelException('filterByContactFacturation() only accepts arguments of type Contacts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ContactFacturation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function joinContactFacturation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ContactFacturation');

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
            $this->addJoinObject($join, 'ContactFacturation');
        }

        return $this;
    }

    /**
     * Use the ContactFacturation relation Contacts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContactsQuery A secondary query class using the current class as primary query
     */
    public function useContactFacturationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinContactFacturation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ContactFacturation', 'ContactsQuery');
    }

    /**
     * Filter the query by a related Contacts object
     *
     * @param   Contacts|PropelObjectCollection $contacts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContactGestion($contacts, $comparison = null)
    {
        if ($contacts instanceof Contacts) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_CT_GESTION, $contacts->getCtId(), $comparison);
        } elseif ($contacts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientsPeer::CL_CT_GESTION, $contacts->toKeyValue('PrimaryKey', 'CtId'), $comparison);
        } else {
            throw new PropelException('filterByContactGestion() only accepts arguments of type Contacts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ContactGestion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function joinContactGestion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ContactGestion');

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
            $this->addJoinObject($join, 'ContactGestion');
        }

        return $this;
    }

    /**
     * Use the ContactGestion relation Contacts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContactsQuery A secondary query class using the current class as primary query
     */
    public function useContactGestionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinContactGestion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ContactGestion', 'ContactsQuery');
    }

    /**
     * Filter the query by a related ClientContratOptions object
     *
     * @param   ClientContratOptions|PropelObjectCollection $clientContratOptions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientContratOptions($clientContratOptions, $comparison = null)
    {
        if ($clientContratOptions instanceof ClientContratOptions) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_ID, $clientContratOptions->getClId(), $comparison);
        } elseif ($clientContratOptions instanceof PropelObjectCollection) {
            return $this
                ->useClientContratOptionsQuery()
                ->filterByPrimaryKeys($clientContratOptions->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClientContratOptions() only accepts arguments of type ClientContratOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientContratOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function joinClientContratOptions($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientContratOptions');

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
            $this->addJoinObject($join, 'ClientContratOptions');
        }

        return $this;
    }

    /**
     * Use the ClientContratOptions relation ClientContratOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientContratOptionsQuery A secondary query class using the current class as primary query
     */
    public function useClientContratOptionsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClientContratOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientContratOptions', 'ClientContratOptionsQuery');
    }

    /**
     * Filter the query by a related ClientFactureOptions object
     *
     * @param   ClientFactureOptions|PropelObjectCollection $clientFactureOptions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientFactureOptions($clientFactureOptions, $comparison = null)
    {
        if ($clientFactureOptions instanceof ClientFactureOptions) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_ID, $clientFactureOptions->getClId(), $comparison);
        } elseif ($clientFactureOptions instanceof PropelObjectCollection) {
            return $this
                ->useClientFactureOptionsQuery()
                ->filterByPrimaryKeys($clientFactureOptions->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClientFactureOptions() only accepts arguments of type ClientFactureOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientFactureOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function joinClientFactureOptions($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientFactureOptions');

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
            $this->addJoinObject($join, 'ClientFactureOptions');
        }

        return $this;
    }

    /**
     * Use the ClientFactureOptions relation ClientFactureOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientFactureOptionsQuery A secondary query class using the current class as primary query
     */
    public function useClientFactureOptionsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClientFactureOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientFactureOptions', 'ClientFactureOptionsQuery');
    }

    /**
     * Filter the query by a related ClientPrestations object
     *
     * @param   ClientPrestations|PropelObjectCollection $clientPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientPrestations($clientPrestations, $comparison = null)
    {
        if ($clientPrestations instanceof ClientPrestations) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_ID, $clientPrestations->getClId(), $comparison);
        } elseif ($clientPrestations instanceof PropelObjectCollection) {
            return $this
                ->useClientPrestationsQuery()
                ->filterByPrimaryKeys($clientPrestations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClientPrestations() only accepts arguments of type ClientPrestations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientPrestations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function joinClientPrestations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientPrestations');

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
            $this->addJoinObject($join, 'ClientPrestations');
        }

        return $this;
    }

    /**
     * Use the ClientPrestations relation ClientPrestations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientPrestationsQuery A secondary query class using the current class as primary query
     */
    public function useClientPrestationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClientPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientPrestations', 'ClientPrestationsQuery');
    }

    /**
     * Filter the query by a related Contacts object
     *
     * @param   Contacts|PropelObjectCollection $contacts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContactsRelatedByClId($contacts, $comparison = null)
    {
        if ($contacts instanceof Contacts) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_ID, $contacts->getClId(), $comparison);
        } elseif ($contacts instanceof PropelObjectCollection) {
            return $this
                ->useContactsRelatedByClIdQuery()
                ->filterByPrimaryKeys($contacts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByContactsRelatedByClId() only accepts arguments of type Contacts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ContactsRelatedByClId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function joinContactsRelatedByClId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ContactsRelatedByClId');

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
            $this->addJoinObject($join, 'ContactsRelatedByClId');
        }

        return $this;
    }

    /**
     * Use the ContactsRelatedByClId relation Contacts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContactsQuery A secondary query class using the current class as primary query
     */
    public function useContactsRelatedByClIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinContactsRelatedByClId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ContactsRelatedByClId', 'ContactsQuery');
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_ID, $factures->getClId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            return $this
                ->useFacturesQuery()
                ->filterByPrimaryKeys($factures->getPrimaryKeys())
                ->endUse();
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
     * @return ClientsQuery The current query, for fluid interface
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
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_ID, $operations->getOpClId(), $comparison);
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
     * @return ClientsQuery The current query, for fluid interface
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
     * Filter the query by a related Relances object
     *
     * @param   Relances|PropelObjectCollection $relances  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRelances($relances, $comparison = null)
    {
        if ($relances instanceof Relances) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_ID, $relances->getClId(), $comparison);
        } elseif ($relances instanceof PropelObjectCollection) {
            return $this
                ->useRelancesQuery()
                ->filterByPrimaryKeys($relances->getPrimaryKeys())
                ->endUse();
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
     * @return ClientsQuery The current query, for fluid interface
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
     * Filter the query by a related FactureEditionHistory object
     *
     * @param   FactureEditionHistory|PropelObjectCollection $factureEditionHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureEditionHistory($factureEditionHistory, $comparison = null)
    {
        if ($factureEditionHistory instanceof FactureEditionHistory) {
            return $this
                ->addUsingAlias(ClientsPeer::CL_ID, $factureEditionHistory->getClId(), $comparison);
        } elseif ($factureEditionHistory instanceof PropelObjectCollection) {
            return $this
                ->useFactureEditionHistoryQuery()
                ->filterByPrimaryKeys($factureEditionHistory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactureEditionHistory() only accepts arguments of type FactureEditionHistory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FactureEditionHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function joinFactureEditionHistory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FactureEditionHistory');

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
            $this->addJoinObject($join, 'FactureEditionHistory');
        }

        return $this;
    }

    /**
     * Use the FactureEditionHistory relation FactureEditionHistory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FactureEditionHistoryQuery A secondary query class using the current class as primary query
     */
    public function useFactureEditionHistoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactureEditionHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactureEditionHistory', 'FactureEditionHistoryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Clients $clients Object to remove from the list of results
     *
     * @return ClientsQuery The current query, for fluid interface
     */
    public function prune($clients = null)
    {
        if ($clients) {
            $this->addUsingAlias(ClientsPeer::CL_ID, $clients->getClId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
