<?php


/**
 * Base class that represents a query for the 'contacts' table.
 *
 *
 *
 * @method ContactsQuery orderByCtId($order = Criteria::ASC) Order by the ct_id column
 * @method ContactsQuery orderByClId($order = Criteria::ASC) Order by the cl_id column
 * @method ContactsQuery orderByCtFirstname($order = Criteria::ASC) Order by the ct_firstname column
 * @method ContactsQuery orderByCtLastname($order = Criteria::ASC) Order by the ct_lastname column
 * @method ContactsQuery orderByCtEmail($order = Criteria::ASC) Order by the ct_email column
 * @method ContactsQuery orderByCtPhone($order = Criteria::ASC) Order by the ct_phone column
 * @method ContactsQuery orderByCtMobile($order = Criteria::ASC) Order by the ct_mobile column
 * @method ContactsQuery orderByCtFax($order = Criteria::ASC) Order by the ct_fax column
 * @method ContactsQuery orderByCtTitle($order = Criteria::ASC) Order by the ct_title column
 * @method ContactsQuery orderByClSiteId($order = Criteria::ASC) Order by the cl_site_id column
 * @method ContactsQuery orderByCtNewsletter($order = Criteria::ASC) Order by the ct_newsletter column
 * @method ContactsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method ContactsQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method ContactsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method ContactsQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method ContactsQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method ContactsQuery orderByCtPhoneIndicatif($order = Criteria::ASC) Order by the ct_phone_indicatif column
 * @method ContactsQuery orderByCtMobileIndicatif($order = Criteria::ASC) Order by the ct_mobile_indicatif column
 * @method ContactsQuery orderByCtFaxIndicatif($order = Criteria::ASC) Order by the ct_fax_indicatif column
 * @method ContactsQuery orderByCtReceiveFactByEmail($order = Criteria::ASC) Order by the ct_receive_fact_by_email column
 *
 * @method ContactsQuery groupByCtId() Group by the ct_id column
 * @method ContactsQuery groupByClId() Group by the cl_id column
 * @method ContactsQuery groupByCtFirstname() Group by the ct_firstname column
 * @method ContactsQuery groupByCtLastname() Group by the ct_lastname column
 * @method ContactsQuery groupByCtEmail() Group by the ct_email column
 * @method ContactsQuery groupByCtPhone() Group by the ct_phone column
 * @method ContactsQuery groupByCtMobile() Group by the ct_mobile column
 * @method ContactsQuery groupByCtFax() Group by the ct_fax column
 * @method ContactsQuery groupByCtTitle() Group by the ct_title column
 * @method ContactsQuery groupByClSiteId() Group by the cl_site_id column
 * @method ContactsQuery groupByCtNewsletter() Group by the ct_newsletter column
 * @method ContactsQuery groupByUserId() Group by the user_id column
 * @method ContactsQuery groupByUserModify() Group by the user_modify column
 * @method ContactsQuery groupByDateCreate() Group by the date_create column
 * @method ContactsQuery groupByDateModify() Group by the date_modify column
 * @method ContactsQuery groupByActif() Group by the actif column
 * @method ContactsQuery groupByCtPhoneIndicatif() Group by the ct_phone_indicatif column
 * @method ContactsQuery groupByCtMobileIndicatif() Group by the ct_mobile_indicatif column
 * @method ContactsQuery groupByCtFaxIndicatif() Group by the ct_fax_indicatif column
 * @method ContactsQuery groupByCtReceiveFactByEmail() Group by the ct_receive_fact_by_email column
 *
 * @method ContactsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ContactsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ContactsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ContactsQuery leftJoinClientSites($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientSites relation
 * @method ContactsQuery rightJoinClientSites($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientSites relation
 * @method ContactsQuery innerJoinClientSites($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientSites relation
 *
 * @method ContactsQuery leftJoinClientsRelatedByClId($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientsRelatedByClId relation
 * @method ContactsQuery rightJoinClientsRelatedByClId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientsRelatedByClId relation
 * @method ContactsQuery innerJoinClientsRelatedByClId($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientsRelatedByClId relation
 *
 * @method ContactsQuery leftJoinClientsRelatedByClCtFacturation($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientsRelatedByClCtFacturation relation
 * @method ContactsQuery rightJoinClientsRelatedByClCtFacturation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientsRelatedByClCtFacturation relation
 * @method ContactsQuery innerJoinClientsRelatedByClCtFacturation($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientsRelatedByClCtFacturation relation
 *
 * @method ContactsQuery leftJoinClientsRelatedByClCtGestion($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientsRelatedByClCtGestion relation
 * @method ContactsQuery rightJoinClientsRelatedByClCtGestion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientsRelatedByClCtGestion relation
 * @method ContactsQuery innerJoinClientsRelatedByClCtGestion($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientsRelatedByClCtGestion relation
 *
 * @method ContactsQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method ContactsQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method ContactsQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method ContactsQuery leftJoinLnkOperationsContactsMail($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkOperationsContactsMail relation
 * @method ContactsQuery rightJoinLnkOperationsContactsMail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkOperationsContactsMail relation
 * @method ContactsQuery innerJoinLnkOperationsContactsMail($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkOperationsContactsMail relation
 *
 * @method ContactsQuery leftJoinOperationsRelatedByOpCtId($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationsRelatedByOpCtId relation
 * @method ContactsQuery rightJoinOperationsRelatedByOpCtId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationsRelatedByOpCtId relation
 * @method ContactsQuery innerJoinOperationsRelatedByOpCtId($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationsRelatedByOpCtId relation
 *
 * @method ContactsQuery leftJoinOperationsRelatedByOpCtFactId($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationsRelatedByOpCtFactId relation
 * @method ContactsQuery rightJoinOperationsRelatedByOpCtFactId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationsRelatedByOpCtFactId relation
 * @method ContactsQuery innerJoinOperationsRelatedByOpCtFactId($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationsRelatedByOpCtFactId relation
 *
 * @method ContactsQuery leftJoinOperationsRelatedByOpCtFactAddrId($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationsRelatedByOpCtFactAddrId relation
 * @method ContactsQuery rightJoinOperationsRelatedByOpCtFactAddrId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationsRelatedByOpCtFactAddrId relation
 * @method ContactsQuery innerJoinOperationsRelatedByOpCtFactAddrId($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationsRelatedByOpCtFactAddrId relation
 *
 * @method ContactsQuery leftJoinRelances($relationAlias = null) Adds a LEFT JOIN clause to the query using the Relances relation
 * @method ContactsQuery rightJoinRelances($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Relances relation
 * @method ContactsQuery innerJoinRelances($relationAlias = null) Adds a INNER JOIN clause to the query using the Relances relation
 *
 * @method ContactsQuery leftJoinFactureEditionHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureEditionHistory relation
 * @method ContactsQuery rightJoinFactureEditionHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureEditionHistory relation
 * @method ContactsQuery innerJoinFactureEditionHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureEditionHistory relation
 *
 * @method Contacts findOne(PropelPDO $con = null) Return the first Contacts matching the query
 * @method Contacts findOneOrCreate(PropelPDO $con = null) Return the first Contacts matching the query, or a new Contacts object populated from the query conditions when no match is found
 *
 * @method Contacts findOneByClId(int $cl_id) Return the first Contacts filtered by the cl_id column
 * @method Contacts findOneByCtFirstname(string $ct_firstname) Return the first Contacts filtered by the ct_firstname column
 * @method Contacts findOneByCtLastname(string $ct_lastname) Return the first Contacts filtered by the ct_lastname column
 * @method Contacts findOneByCtEmail(string $ct_email) Return the first Contacts filtered by the ct_email column
 * @method Contacts findOneByCtPhone(string $ct_phone) Return the first Contacts filtered by the ct_phone column
 * @method Contacts findOneByCtMobile(string $ct_mobile) Return the first Contacts filtered by the ct_mobile column
 * @method Contacts findOneByCtFax(string $ct_fax) Return the first Contacts filtered by the ct_fax column
 * @method Contacts findOneByCtTitle(string $ct_title) Return the first Contacts filtered by the ct_title column
 * @method Contacts findOneByClSiteId(int $cl_site_id) Return the first Contacts filtered by the cl_site_id column
 * @method Contacts findOneByCtNewsletter(boolean $ct_newsletter) Return the first Contacts filtered by the ct_newsletter column
 * @method Contacts findOneByUserId(int $user_id) Return the first Contacts filtered by the user_id column
 * @method Contacts findOneByUserModify(int $user_modify) Return the first Contacts filtered by the user_modify column
 * @method Contacts findOneByDateCreate(string $date_create) Return the first Contacts filtered by the date_create column
 * @method Contacts findOneByDateModify(string $date_modify) Return the first Contacts filtered by the date_modify column
 * @method Contacts findOneByActif(boolean $actif) Return the first Contacts filtered by the actif column
 * @method Contacts findOneByCtPhoneIndicatif(string $ct_phone_indicatif) Return the first Contacts filtered by the ct_phone_indicatif column
 * @method Contacts findOneByCtMobileIndicatif(string $ct_mobile_indicatif) Return the first Contacts filtered by the ct_mobile_indicatif column
 * @method Contacts findOneByCtFaxIndicatif(string $ct_fax_indicatif) Return the first Contacts filtered by the ct_fax_indicatif column
 * @method Contacts findOneByCtReceiveFactByEmail(boolean $ct_receive_fact_by_email) Return the first Contacts filtered by the ct_receive_fact_by_email column
 *
 * @method array findByCtId(int $ct_id) Return Contacts objects filtered by the ct_id column
 * @method array findByClId(int $cl_id) Return Contacts objects filtered by the cl_id column
 * @method array findByCtFirstname(string $ct_firstname) Return Contacts objects filtered by the ct_firstname column
 * @method array findByCtLastname(string $ct_lastname) Return Contacts objects filtered by the ct_lastname column
 * @method array findByCtEmail(string $ct_email) Return Contacts objects filtered by the ct_email column
 * @method array findByCtPhone(string $ct_phone) Return Contacts objects filtered by the ct_phone column
 * @method array findByCtMobile(string $ct_mobile) Return Contacts objects filtered by the ct_mobile column
 * @method array findByCtFax(string $ct_fax) Return Contacts objects filtered by the ct_fax column
 * @method array findByCtTitle(string $ct_title) Return Contacts objects filtered by the ct_title column
 * @method array findByClSiteId(int $cl_site_id) Return Contacts objects filtered by the cl_site_id column
 * @method array findByCtNewsletter(boolean $ct_newsletter) Return Contacts objects filtered by the ct_newsletter column
 * @method array findByUserId(int $user_id) Return Contacts objects filtered by the user_id column
 * @method array findByUserModify(int $user_modify) Return Contacts objects filtered by the user_modify column
 * @method array findByDateCreate(string $date_create) Return Contacts objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return Contacts objects filtered by the date_modify column
 * @method array findByActif(boolean $actif) Return Contacts objects filtered by the actif column
 * @method array findByCtPhoneIndicatif(string $ct_phone_indicatif) Return Contacts objects filtered by the ct_phone_indicatif column
 * @method array findByCtMobileIndicatif(string $ct_mobile_indicatif) Return Contacts objects filtered by the ct_mobile_indicatif column
 * @method array findByCtFaxIndicatif(string $ct_fax_indicatif) Return Contacts objects filtered by the ct_fax_indicatif column
 * @method array findByCtReceiveFactByEmail(boolean $ct_receive_fact_by_email) Return Contacts objects filtered by the ct_receive_fact_by_email column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseContactsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseContactsQuery object.
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
            $modelName = 'Contacts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ContactsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ContactsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ContactsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ContactsQuery) {
            return $criteria;
        }
        $query = new ContactsQuery(null, null, $modelAlias);

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
     * @return   Contacts|Contacts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ContactsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Contacts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCtId($key, $con = null)
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
     * @return                 Contacts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ct_id`, `cl_id`, `ct_firstname`, `ct_lastname`, `ct_email`, `ct_phone`, `ct_mobile`, `ct_fax`, `ct_title`, `cl_site_id`, `ct_newsletter`, `user_id`, `user_modify`, `date_create`, `date_modify`, `actif`, `ct_phone_indicatif`, `ct_mobile_indicatif`, `ct_fax_indicatif`, `ct_receive_fact_by_email` FROM `contacts` WHERE `ct_id` = :p0';
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
            $obj = new Contacts();
            $obj->hydrate($row);
            ContactsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Contacts|Contacts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Contacts[]|mixed the list of results, formatted by the current formatter
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
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ContactsPeer::CT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ContactsPeer::CT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ct_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCtId(1234); // WHERE ct_id = 1234
     * $query->filterByCtId(array(12, 34)); // WHERE ct_id IN (12, 34)
     * $query->filterByCtId(array('min' => 12)); // WHERE ct_id >= 12
     * $query->filterByCtId(array('max' => 12)); // WHERE ct_id <= 12
     * </code>
     *
     * @param     mixed $ctId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtId($ctId = null, $comparison = null)
    {
        if (is_array($ctId)) {
            $useMinMax = false;
            if (isset($ctId['min'])) {
                $this->addUsingAlias(ContactsPeer::CT_ID, $ctId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ctId['max'])) {
                $this->addUsingAlias(ContactsPeer::CT_ID, $ctId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_ID, $ctId, $comparison);
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
     * @see       filterByClientsRelatedByClId()
     *
     * @param     mixed $clId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByClId($clId = null, $comparison = null)
    {
        if (is_array($clId)) {
            $useMinMax = false;
            if (isset($clId['min'])) {
                $this->addUsingAlias(ContactsPeer::CL_ID, $clId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clId['max'])) {
                $this->addUsingAlias(ContactsPeer::CL_ID, $clId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CL_ID, $clId, $comparison);
    }

    /**
     * Filter the query on the ct_firstname column
     *
     * Example usage:
     * <code>
     * $query->filterByCtFirstname('fooValue');   // WHERE ct_firstname = 'fooValue'
     * $query->filterByCtFirstname('%fooValue%'); // WHERE ct_firstname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctFirstname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtFirstname($ctFirstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctFirstname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctFirstname)) {
                $ctFirstname = str_replace('*', '%', $ctFirstname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_FIRSTNAME, $ctFirstname, $comparison);
    }

    /**
     * Filter the query on the ct_lastname column
     *
     * Example usage:
     * <code>
     * $query->filterByCtLastname('fooValue');   // WHERE ct_lastname = 'fooValue'
     * $query->filterByCtLastname('%fooValue%'); // WHERE ct_lastname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctLastname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtLastname($ctLastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctLastname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctLastname)) {
                $ctLastname = str_replace('*', '%', $ctLastname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_LASTNAME, $ctLastname, $comparison);
    }

    /**
     * Filter the query on the ct_email column
     *
     * Example usage:
     * <code>
     * $query->filterByCtEmail('fooValue');   // WHERE ct_email = 'fooValue'
     * $query->filterByCtEmail('%fooValue%'); // WHERE ct_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtEmail($ctEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctEmail)) {
                $ctEmail = str_replace('*', '%', $ctEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_EMAIL, $ctEmail, $comparison);
    }

    /**
     * Filter the query on the ct_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByCtPhone('fooValue');   // WHERE ct_phone = 'fooValue'
     * $query->filterByCtPhone('%fooValue%'); // WHERE ct_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctPhone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtPhone($ctPhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctPhone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctPhone)) {
                $ctPhone = str_replace('*', '%', $ctPhone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_PHONE, $ctPhone, $comparison);
    }

    /**
     * Filter the query on the ct_mobile column
     *
     * Example usage:
     * <code>
     * $query->filterByCtMobile('fooValue');   // WHERE ct_mobile = 'fooValue'
     * $query->filterByCtMobile('%fooValue%'); // WHERE ct_mobile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctMobile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtMobile($ctMobile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctMobile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctMobile)) {
                $ctMobile = str_replace('*', '%', $ctMobile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_MOBILE, $ctMobile, $comparison);
    }

    /**
     * Filter the query on the ct_fax column
     *
     * Example usage:
     * <code>
     * $query->filterByCtFax('fooValue');   // WHERE ct_fax = 'fooValue'
     * $query->filterByCtFax('%fooValue%'); // WHERE ct_fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctFax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtFax($ctFax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctFax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctFax)) {
                $ctFax = str_replace('*', '%', $ctFax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_FAX, $ctFax, $comparison);
    }

    /**
     * Filter the query on the ct_title column
     *
     * Example usage:
     * <code>
     * $query->filterByCtTitle('fooValue');   // WHERE ct_title = 'fooValue'
     * $query->filterByCtTitle('%fooValue%'); // WHERE ct_title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtTitle($ctTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctTitle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctTitle)) {
                $ctTitle = str_replace('*', '%', $ctTitle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_TITLE, $ctTitle, $comparison);
    }

    /**
     * Filter the query on the cl_site_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteId(1234); // WHERE cl_site_id = 1234
     * $query->filterByClSiteId(array(12, 34)); // WHERE cl_site_id IN (12, 34)
     * $query->filterByClSiteId(array('min' => 12)); // WHERE cl_site_id >= 12
     * $query->filterByClSiteId(array('max' => 12)); // WHERE cl_site_id <= 12
     * </code>
     *
     * @see       filterByClientSites()
     *
     * @param     mixed $clSiteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByClSiteId($clSiteId = null, $comparison = null)
    {
        if (is_array($clSiteId)) {
            $useMinMax = false;
            if (isset($clSiteId['min'])) {
                $this->addUsingAlias(ContactsPeer::CL_SITE_ID, $clSiteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clSiteId['max'])) {
                $this->addUsingAlias(ContactsPeer::CL_SITE_ID, $clSiteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CL_SITE_ID, $clSiteId, $comparison);
    }

    /**
     * Filter the query on the ct_newsletter column
     *
     * Example usage:
     * <code>
     * $query->filterByCtNewsletter(true); // WHERE ct_newsletter = true
     * $query->filterByCtNewsletter('yes'); // WHERE ct_newsletter = true
     * </code>
     *
     * @param     boolean|string $ctNewsletter The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtNewsletter($ctNewsletter = null, $comparison = null)
    {
        if (is_string($ctNewsletter)) {
            $ctNewsletter = in_array(strtolower($ctNewsletter), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ContactsPeer::CT_NEWSLETTER, $ctNewsletter, $comparison);
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
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(ContactsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(ContactsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactsPeer::USER_ID, $userId, $comparison);
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
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(ContactsPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(ContactsPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactsPeer::USER_MODIFY, $userModify, $comparison);
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
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(ContactsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(ContactsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactsPeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(ContactsPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(ContactsPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContactsPeer::DATE_MODIFY, $dateModify, $comparison);
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
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ContactsPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the ct_phone_indicatif column
     *
     * Example usage:
     * <code>
     * $query->filterByCtPhoneIndicatif('fooValue');   // WHERE ct_phone_indicatif = 'fooValue'
     * $query->filterByCtPhoneIndicatif('%fooValue%'); // WHERE ct_phone_indicatif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctPhoneIndicatif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtPhoneIndicatif($ctPhoneIndicatif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctPhoneIndicatif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctPhoneIndicatif)) {
                $ctPhoneIndicatif = str_replace('*', '%', $ctPhoneIndicatif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_PHONE_INDICATIF, $ctPhoneIndicatif, $comparison);
    }

    /**
     * Filter the query on the ct_mobile_indicatif column
     *
     * Example usage:
     * <code>
     * $query->filterByCtMobileIndicatif('fooValue');   // WHERE ct_mobile_indicatif = 'fooValue'
     * $query->filterByCtMobileIndicatif('%fooValue%'); // WHERE ct_mobile_indicatif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctMobileIndicatif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtMobileIndicatif($ctMobileIndicatif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctMobileIndicatif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctMobileIndicatif)) {
                $ctMobileIndicatif = str_replace('*', '%', $ctMobileIndicatif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_MOBILE_INDICATIF, $ctMobileIndicatif, $comparison);
    }

    /**
     * Filter the query on the ct_fax_indicatif column
     *
     * Example usage:
     * <code>
     * $query->filterByCtFaxIndicatif('fooValue');   // WHERE ct_fax_indicatif = 'fooValue'
     * $query->filterByCtFaxIndicatif('%fooValue%'); // WHERE ct_fax_indicatif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ctFaxIndicatif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtFaxIndicatif($ctFaxIndicatif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ctFaxIndicatif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ctFaxIndicatif)) {
                $ctFaxIndicatif = str_replace('*', '%', $ctFaxIndicatif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContactsPeer::CT_FAX_INDICATIF, $ctFaxIndicatif, $comparison);
    }

    /**
     * Filter the query on the ct_receive_fact_by_email column
     *
     * Example usage:
     * <code>
     * $query->filterByCtReceiveFactByEmail(true); // WHERE ct_receive_fact_by_email = true
     * $query->filterByCtReceiveFactByEmail('yes'); // WHERE ct_receive_fact_by_email = true
     * </code>
     *
     * @param     boolean|string $ctReceiveFactByEmail The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function filterByCtReceiveFactByEmail($ctReceiveFactByEmail = null, $comparison = null)
    {
        if (is_string($ctReceiveFactByEmail)) {
            $ctReceiveFactByEmail = in_array(strtolower($ctReceiveFactByEmail), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ContactsPeer::CT_RECEIVE_FACT_BY_EMAIL, $ctReceiveFactByEmail, $comparison);
    }

    /**
     * Filter the query by a related ClientSites object
     *
     * @param   ClientSites|PropelObjectCollection $clientSites The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientSites($clientSites, $comparison = null)
    {
        if ($clientSites instanceof ClientSites) {
            return $this
                ->addUsingAlias(ContactsPeer::CL_SITE_ID, $clientSites->getClSiteId(), $comparison);
        } elseif ($clientSites instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ContactsPeer::CL_SITE_ID, $clientSites->toKeyValue('PrimaryKey', 'ClSiteId'), $comparison);
        } else {
            throw new PropelException('filterByClientSites() only accepts arguments of type ClientSites or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientSites relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function joinClientSites($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientSites');

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
            $this->addJoinObject($join, 'ClientSites');
        }

        return $this;
    }

    /**
     * Use the ClientSites relation ClientSites object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientSitesQuery A secondary query class using the current class as primary query
     */
    public function useClientSitesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClientSites($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientSites', 'ClientSitesQuery');
    }

    /**
     * Filter the query by a related Clients object
     *
     * @param   Clients|PropelObjectCollection $clients The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientsRelatedByClId($clients, $comparison = null)
    {
        if ($clients instanceof Clients) {
            return $this
                ->addUsingAlias(ContactsPeer::CL_ID, $clients->getClId(), $comparison);
        } elseif ($clients instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ContactsPeer::CL_ID, $clients->toKeyValue('PrimaryKey', 'ClId'), $comparison);
        } else {
            throw new PropelException('filterByClientsRelatedByClId() only accepts arguments of type Clients or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientsRelatedByClId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function joinClientsRelatedByClId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientsRelatedByClId');

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
            $this->addJoinObject($join, 'ClientsRelatedByClId');
        }

        return $this;
    }

    /**
     * Use the ClientsRelatedByClId relation Clients object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientsQuery A secondary query class using the current class as primary query
     */
    public function useClientsRelatedByClIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClientsRelatedByClId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientsRelatedByClId', 'ClientsQuery');
    }

    /**
     * Filter the query by a related Clients object
     *
     * @param   Clients|PropelObjectCollection $clients  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientsRelatedByClCtFacturation($clients, $comparison = null)
    {
        if ($clients instanceof Clients) {
            return $this
                ->addUsingAlias(ContactsPeer::CT_ID, $clients->getClCtFacturation(), $comparison);
        } elseif ($clients instanceof PropelObjectCollection) {
            return $this
                ->useClientsRelatedByClCtFacturationQuery()
                ->filterByPrimaryKeys($clients->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClientsRelatedByClCtFacturation() only accepts arguments of type Clients or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientsRelatedByClCtFacturation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function joinClientsRelatedByClCtFacturation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientsRelatedByClCtFacturation');

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
            $this->addJoinObject($join, 'ClientsRelatedByClCtFacturation');
        }

        return $this;
    }

    /**
     * Use the ClientsRelatedByClCtFacturation relation Clients object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientsQuery A secondary query class using the current class as primary query
     */
    public function useClientsRelatedByClCtFacturationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClientsRelatedByClCtFacturation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientsRelatedByClCtFacturation', 'ClientsQuery');
    }

    /**
     * Filter the query by a related Clients object
     *
     * @param   Clients|PropelObjectCollection $clients  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientsRelatedByClCtGestion($clients, $comparison = null)
    {
        if ($clients instanceof Clients) {
            return $this
                ->addUsingAlias(ContactsPeer::CT_ID, $clients->getClCtGestion(), $comparison);
        } elseif ($clients instanceof PropelObjectCollection) {
            return $this
                ->useClientsRelatedByClCtGestionQuery()
                ->filterByPrimaryKeys($clients->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClientsRelatedByClCtGestion() only accepts arguments of type Clients or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientsRelatedByClCtGestion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function joinClientsRelatedByClCtGestion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientsRelatedByClCtGestion');

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
            $this->addJoinObject($join, 'ClientsRelatedByClCtGestion');
        }

        return $this;
    }

    /**
     * Use the ClientsRelatedByClCtGestion relation Clients object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientsQuery A secondary query class using the current class as primary query
     */
    public function useClientsRelatedByClCtGestionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClientsRelatedByClCtGestion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientsRelatedByClCtGestion', 'ClientsQuery');
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(ContactsPeer::CT_ID, $factures->getCtId(), $comparison);
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
     * @return ContactsQuery The current query, for fluid interface
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
     * Filter the query by a related LnkOperationsContactsMail object
     *
     * @param   LnkOperationsContactsMail|PropelObjectCollection $lnkOperationsContactsMail  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkOperationsContactsMail($lnkOperationsContactsMail, $comparison = null)
    {
        if ($lnkOperationsContactsMail instanceof LnkOperationsContactsMail) {
            return $this
                ->addUsingAlias(ContactsPeer::CT_ID, $lnkOperationsContactsMail->getCtId(), $comparison);
        } elseif ($lnkOperationsContactsMail instanceof PropelObjectCollection) {
            return $this
                ->useLnkOperationsContactsMailQuery()
                ->filterByPrimaryKeys($lnkOperationsContactsMail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkOperationsContactsMail() only accepts arguments of type LnkOperationsContactsMail or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkOperationsContactsMail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function joinLnkOperationsContactsMail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkOperationsContactsMail');

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
            $this->addJoinObject($join, 'LnkOperationsContactsMail');
        }

        return $this;
    }

    /**
     * Use the LnkOperationsContactsMail relation LnkOperationsContactsMail object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkOperationsContactsMailQuery A secondary query class using the current class as primary query
     */
    public function useLnkOperationsContactsMailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkOperationsContactsMail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkOperationsContactsMail', 'LnkOperationsContactsMailQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationsRelatedByOpCtId($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ContactsPeer::CT_ID, $operations->getOpCtId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsRelatedByOpCtIdQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationsRelatedByOpCtId() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationsRelatedByOpCtId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function joinOperationsRelatedByOpCtId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationsRelatedByOpCtId');

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
            $this->addJoinObject($join, 'OperationsRelatedByOpCtId');
        }

        return $this;
    }

    /**
     * Use the OperationsRelatedByOpCtId relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsRelatedByOpCtIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationsRelatedByOpCtId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationsRelatedByOpCtId', 'OperationsQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationsRelatedByOpCtFactId($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ContactsPeer::CT_ID, $operations->getOpCtFactId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsRelatedByOpCtFactIdQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationsRelatedByOpCtFactId() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationsRelatedByOpCtFactId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function joinOperationsRelatedByOpCtFactId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationsRelatedByOpCtFactId');

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
            $this->addJoinObject($join, 'OperationsRelatedByOpCtFactId');
        }

        return $this;
    }

    /**
     * Use the OperationsRelatedByOpCtFactId relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsRelatedByOpCtFactIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationsRelatedByOpCtFactId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationsRelatedByOpCtFactId', 'OperationsQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationsRelatedByOpCtFactAddrId($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(ContactsPeer::CT_ID, $operations->getOpCtFactAddrId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsRelatedByOpCtFactAddrIdQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationsRelatedByOpCtFactAddrId() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationsRelatedByOpCtFactAddrId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function joinOperationsRelatedByOpCtFactAddrId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationsRelatedByOpCtFactAddrId');

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
            $this->addJoinObject($join, 'OperationsRelatedByOpCtFactAddrId');
        }

        return $this;
    }

    /**
     * Use the OperationsRelatedByOpCtFactAddrId relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsRelatedByOpCtFactAddrIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationsRelatedByOpCtFactAddrId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationsRelatedByOpCtFactAddrId', 'OperationsQuery');
    }

    /**
     * Filter the query by a related Relances object
     *
     * @param   Relances|PropelObjectCollection $relances  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRelances($relances, $comparison = null)
    {
        if ($relances instanceof Relances) {
            return $this
                ->addUsingAlias(ContactsPeer::CT_ID, $relances->getRelCtFacturation(), $comparison);
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
     * @return ContactsQuery The current query, for fluid interface
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
     * @return                 ContactsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureEditionHistory($factureEditionHistory, $comparison = null)
    {
        if ($factureEditionHistory instanceof FactureEditionHistory) {
            return $this
                ->addUsingAlias(ContactsPeer::CT_ID, $factureEditionHistory->getCtId(), $comparison);
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
     * @return ContactsQuery The current query, for fluid interface
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
     * @param   Contacts $contacts Object to remove from the list of results
     *
     * @return ContactsQuery The current query, for fluid interface
     */
    public function prune($contacts = null)
    {
        if ($contacts) {
            $this->addUsingAlias(ContactsPeer::CT_ID, $contacts->getCtId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
