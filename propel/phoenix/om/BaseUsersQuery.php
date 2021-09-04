<?php


/**
 * Base class that represents a query for the 'users' table.
 *
 *
 *
 * @method UsersQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method UsersQuery orderByUserLogin($order = Criteria::ASC) Order by the user_login column
 * @method UsersQuery orderByUserNom($order = Criteria::ASC) Order by the user_nom column
 * @method UsersQuery orderByUserPrenom($order = Criteria::ASC) Order by the user_prenom column
 * @method UsersQuery orderByUserMail($order = Criteria::ASC) Order by the user_mail column
 * @method UsersQuery orderByUserPhone($order = Criteria::ASC) Order by the user_phone column
 * @method UsersQuery orderByUserMobile($order = Criteria::ASC) Order by the user_mobile column
 * @method UsersQuery orderByRUserTypeId($order = Criteria::ASC) Order by the r_user_type_id column
 * @method UsersQuery orderByUserLanguage($order = Criteria::ASC) Order by the user_language column
 * @method UsersQuery orderByUserPassword($order = Criteria::ASC) Order by the user_password column
 * @method UsersQuery orderByUserPasswordSalt($order = Criteria::ASC) Order by the user_password_salt column
 * @method UsersQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 *
 * @method UsersQuery groupByUserId() Group by the user_id column
 * @method UsersQuery groupByUserLogin() Group by the user_login column
 * @method UsersQuery groupByUserNom() Group by the user_nom column
 * @method UsersQuery groupByUserPrenom() Group by the user_prenom column
 * @method UsersQuery groupByUserMail() Group by the user_mail column
 * @method UsersQuery groupByUserPhone() Group by the user_phone column
 * @method UsersQuery groupByUserMobile() Group by the user_mobile column
 * @method UsersQuery groupByRUserTypeId() Group by the r_user_type_id column
 * @method UsersQuery groupByUserLanguage() Group by the user_language column
 * @method UsersQuery groupByUserPassword() Group by the user_password column
 * @method UsersQuery groupByUserPasswordSalt() Group by the user_password_salt column
 * @method UsersQuery groupByDateCreate() Group by the date_create column
 *
 * @method UsersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsersQuery leftJoinRUserTypes($relationAlias = null) Adds a LEFT JOIN clause to the query using the RUserTypes relation
 * @method UsersQuery rightJoinRUserTypes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RUserTypes relation
 * @method UsersQuery innerJoinRUserTypes($relationAlias = null) Adds a INNER JOIN clause to the query using the RUserTypes relation
 *
 * @method UsersQuery leftJoinClients($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clients relation
 * @method UsersQuery rightJoinClients($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clients relation
 * @method UsersQuery innerJoinClients($relationAlias = null) Adds a INNER JOIN clause to the query using the Clients relation
 *
 * @method UsersQuery leftJoinLnkUsersAclGroups($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkUsersAclGroups relation
 * @method UsersQuery rightJoinLnkUsersAclGroups($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkUsersAclGroups relation
 * @method UsersQuery innerJoinLnkUsersAclGroups($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkUsersAclGroups relation
 *
 * @method UsersQuery leftJoinOperationPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrestations relation
 * @method UsersQuery rightJoinOperationPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrestations relation
 * @method UsersQuery innerJoinOperationPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrestations relation
 *
 * @method UsersQuery leftJoinOperationStatuts($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationStatuts relation
 * @method UsersQuery rightJoinOperationStatuts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationStatuts relation
 * @method UsersQuery innerJoinOperationStatuts($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationStatuts relation
 *
 * @method UsersQuery leftJoinOperationsRelatedByOpDcId($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationsRelatedByOpDcId relation
 * @method UsersQuery rightJoinOperationsRelatedByOpDcId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationsRelatedByOpDcId relation
 * @method UsersQuery innerJoinOperationsRelatedByOpDcId($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationsRelatedByOpDcId relation
 *
 * @method UsersQuery leftJoinOperationsRelatedByOpCpId($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationsRelatedByOpCpId relation
 * @method UsersQuery rightJoinOperationsRelatedByOpCpId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationsRelatedByOpCpId relation
 * @method UsersQuery innerJoinOperationsRelatedByOpCpId($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationsRelatedByOpCpId relation
 *
 * @method UsersQuery leftJoinOperationsRelatedByOpCdpId($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationsRelatedByOpCdpId relation
 * @method UsersQuery rightJoinOperationsRelatedByOpCdpId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationsRelatedByOpCdpId relation
 * @method UsersQuery innerJoinOperationsRelatedByOpCdpId($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationsRelatedByOpCdpId relation
 *
 * @method UsersQuery leftJoinFactureEditionHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureEditionHistory relation
 * @method UsersQuery rightJoinFactureEditionHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureEditionHistory relation
 * @method UsersQuery innerJoinFactureEditionHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureEditionHistory relation
 *
 * @method UsersQuery leftJoinUserKpiSettings($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserKpiSettings relation
 * @method UsersQuery rightJoinUserKpiSettings($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserKpiSettings relation
 * @method UsersQuery innerJoinUserKpiSettings($relationAlias = null) Adds a INNER JOIN clause to the query using the UserKpiSettings relation
 *
 * @method UsersQuery leftJoinLnkGrpValidationUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkGrpValidationUsers relation
 * @method UsersQuery rightJoinLnkGrpValidationUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkGrpValidationUsers relation
 * @method UsersQuery innerJoinLnkGrpValidationUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkGrpValidationUsers relation
 *
 * @method UsersQuery leftJoinLnkUsersOrganisations($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkUsersOrganisations relation
 * @method UsersQuery rightJoinLnkUsersOrganisations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkUsersOrganisations relation
 * @method UsersQuery innerJoinLnkUsersOrganisations($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkUsersOrganisations relation
 *
 * @method Users findOne(PropelPDO $con = null) Return the first Users matching the query
 * @method Users findOneOrCreate(PropelPDO $con = null) Return the first Users matching the query, or a new Users object populated from the query conditions when no match is found
 *
 * @method Users findOneByUserLogin(string $user_login) Return the first Users filtered by the user_login column
 * @method Users findOneByUserNom(string $user_nom) Return the first Users filtered by the user_nom column
 * @method Users findOneByUserPrenom(string $user_prenom) Return the first Users filtered by the user_prenom column
 * @method Users findOneByUserMail(string $user_mail) Return the first Users filtered by the user_mail column
 * @method Users findOneByUserPhone(string $user_phone) Return the first Users filtered by the user_phone column
 * @method Users findOneByUserMobile(string $user_mobile) Return the first Users filtered by the user_mobile column
 * @method Users findOneByRUserTypeId(int $r_user_type_id) Return the first Users filtered by the r_user_type_id column
 * @method Users findOneByUserLanguage(string $user_language) Return the first Users filtered by the user_language column
 * @method Users findOneByUserPassword(string $user_password) Return the first Users filtered by the user_password column
 * @method Users findOneByUserPasswordSalt(string $user_password_salt) Return the first Users filtered by the user_password_salt column
 * @method Users findOneByDateCreate(string $date_create) Return the first Users filtered by the date_create column
 *
 * @method array findByUserId(int $user_id) Return Users objects filtered by the user_id column
 * @method array findByUserLogin(string $user_login) Return Users objects filtered by the user_login column
 * @method array findByUserNom(string $user_nom) Return Users objects filtered by the user_nom column
 * @method array findByUserPrenom(string $user_prenom) Return Users objects filtered by the user_prenom column
 * @method array findByUserMail(string $user_mail) Return Users objects filtered by the user_mail column
 * @method array findByUserPhone(string $user_phone) Return Users objects filtered by the user_phone column
 * @method array findByUserMobile(string $user_mobile) Return Users objects filtered by the user_mobile column
 * @method array findByRUserTypeId(int $r_user_type_id) Return Users objects filtered by the r_user_type_id column
 * @method array findByUserLanguage(string $user_language) Return Users objects filtered by the user_language column
 * @method array findByUserPassword(string $user_password) Return Users objects filtered by the user_password column
 * @method array findByUserPasswordSalt(string $user_password_salt) Return Users objects filtered by the user_password_salt column
 * @method array findByDateCreate(string $date_create) Return Users objects filtered by the date_create column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseUsersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsersQuery object.
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
            $modelName = 'Users';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UsersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsersQuery) {
            return $criteria;
        }
        $query = new UsersQuery(null, null, $modelAlias);

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
     * @return   Users|Users[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Users A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUserId($key, $con = null)
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
     * @return                 Users A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `user_id`, `user_login`, `user_nom`, `user_prenom`, `user_mail`, `user_phone`, `user_mobile`, `r_user_type_id`, `user_language`, `user_password`, `user_password_salt`, `date_create` FROM `users` WHERE `user_id` = :p0';
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
            $obj = new Users();
            $obj->hydrate($row);
            UsersPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Users|Users[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Users[]|mixed the list of results, formatted by the current formatter
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
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsersPeer::USER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsersPeer::USER_ID, $keys, Criteria::IN);
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
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(UsersPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(UsersPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsersPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the user_login column
     *
     * Example usage:
     * <code>
     * $query->filterByUserLogin('fooValue');   // WHERE user_login = 'fooValue'
     * $query->filterByUserLogin('%fooValue%'); // WHERE user_login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userLogin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByUserLogin($userLogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userLogin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userLogin)) {
                $userLogin = str_replace('*', '%', $userLogin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::USER_LOGIN, $userLogin, $comparison);
    }

    /**
     * Filter the query on the user_nom column
     *
     * Example usage:
     * <code>
     * $query->filterByUserNom('fooValue');   // WHERE user_nom = 'fooValue'
     * $query->filterByUserNom('%fooValue%'); // WHERE user_nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userNom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByUserNom($userNom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userNom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userNom)) {
                $userNom = str_replace('*', '%', $userNom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::USER_NOM, $userNom, $comparison);
    }

    /**
     * Filter the query on the user_prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByUserPrenom('fooValue');   // WHERE user_prenom = 'fooValue'
     * $query->filterByUserPrenom('%fooValue%'); // WHERE user_prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userPrenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByUserPrenom($userPrenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userPrenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userPrenom)) {
                $userPrenom = str_replace('*', '%', $userPrenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::USER_PRENOM, $userPrenom, $comparison);
    }

    /**
     * Filter the query on the user_mail column
     *
     * Example usage:
     * <code>
     * $query->filterByUserMail('fooValue');   // WHERE user_mail = 'fooValue'
     * $query->filterByUserMail('%fooValue%'); // WHERE user_mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userMail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByUserMail($userMail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userMail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userMail)) {
                $userMail = str_replace('*', '%', $userMail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::USER_MAIL, $userMail, $comparison);
    }

    /**
     * Filter the query on the user_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByUserPhone('fooValue');   // WHERE user_phone = 'fooValue'
     * $query->filterByUserPhone('%fooValue%'); // WHERE user_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userPhone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByUserPhone($userPhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userPhone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userPhone)) {
                $userPhone = str_replace('*', '%', $userPhone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::USER_PHONE, $userPhone, $comparison);
    }

    /**
     * Filter the query on the user_mobile column
     *
     * Example usage:
     * <code>
     * $query->filterByUserMobile('fooValue');   // WHERE user_mobile = 'fooValue'
     * $query->filterByUserMobile('%fooValue%'); // WHERE user_mobile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userMobile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByUserMobile($userMobile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userMobile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userMobile)) {
                $userMobile = str_replace('*', '%', $userMobile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::USER_MOBILE, $userMobile, $comparison);
    }

    /**
     * Filter the query on the r_user_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRUserTypeId(1234); // WHERE r_user_type_id = 1234
     * $query->filterByRUserTypeId(array(12, 34)); // WHERE r_user_type_id IN (12, 34)
     * $query->filterByRUserTypeId(array('min' => 12)); // WHERE r_user_type_id >= 12
     * $query->filterByRUserTypeId(array('max' => 12)); // WHERE r_user_type_id <= 12
     * </code>
     *
     * @see       filterByRUserTypes()
     *
     * @param     mixed $rUserTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByRUserTypeId($rUserTypeId = null, $comparison = null)
    {
        if (is_array($rUserTypeId)) {
            $useMinMax = false;
            if (isset($rUserTypeId['min'])) {
                $this->addUsingAlias(UsersPeer::R_USER_TYPE_ID, $rUserTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rUserTypeId['max'])) {
                $this->addUsingAlias(UsersPeer::R_USER_TYPE_ID, $rUserTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsersPeer::R_USER_TYPE_ID, $rUserTypeId, $comparison);
    }

    /**
     * Filter the query on the user_language column
     *
     * Example usage:
     * <code>
     * $query->filterByUserLanguage('fooValue');   // WHERE user_language = 'fooValue'
     * $query->filterByUserLanguage('%fooValue%'); // WHERE user_language LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userLanguage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByUserLanguage($userLanguage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userLanguage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userLanguage)) {
                $userLanguage = str_replace('*', '%', $userLanguage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::USER_LANGUAGE, $userLanguage, $comparison);
    }

    /**
     * Filter the query on the user_password column
     *
     * Example usage:
     * <code>
     * $query->filterByUserPassword('fooValue');   // WHERE user_password = 'fooValue'
     * $query->filterByUserPassword('%fooValue%'); // WHERE user_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByUserPassword($userPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userPassword)) {
                $userPassword = str_replace('*', '%', $userPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::USER_PASSWORD, $userPassword, $comparison);
    }

    /**
     * Filter the query on the user_password_salt column
     *
     * Example usage:
     * <code>
     * $query->filterByUserPasswordSalt('fooValue');   // WHERE user_password_salt = 'fooValue'
     * $query->filterByUserPasswordSalt('%fooValue%'); // WHERE user_password_salt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userPasswordSalt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByUserPasswordSalt($userPasswordSalt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userPasswordSalt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userPasswordSalt)) {
                $userPasswordSalt = str_replace('*', '%', $userPasswordSalt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsersPeer::USER_PASSWORD_SALT, $userPasswordSalt, $comparison);
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
     * @return UsersQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(UsersPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(UsersPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsersPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query by a related RUserTypes object
     *
     * @param   RUserTypes|PropelObjectCollection $rUserTypes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRUserTypes($rUserTypes, $comparison = null)
    {
        if ($rUserTypes instanceof RUserTypes) {
            return $this
                ->addUsingAlias(UsersPeer::R_USER_TYPE_ID, $rUserTypes->getRUserTypeId(), $comparison);
        } elseif ($rUserTypes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsersPeer::R_USER_TYPE_ID, $rUserTypes->toKeyValue('PrimaryKey', 'RUserTypeId'), $comparison);
        } else {
            throw new PropelException('filterByRUserTypes() only accepts arguments of type RUserTypes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RUserTypes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinRUserTypes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RUserTypes');

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
            $this->addJoinObject($join, 'RUserTypes');
        }

        return $this;
    }

    /**
     * Use the RUserTypes relation RUserTypes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RUserTypesQuery A secondary query class using the current class as primary query
     */
    public function useRUserTypesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRUserTypes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RUserTypes', 'RUserTypesQuery');
    }

    /**
     * Filter the query by a related Clients object
     *
     * @param   Clients|PropelObjectCollection $clients  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClients($clients, $comparison = null)
    {
        if ($clients instanceof Clients) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $clients->getClDcId(), $comparison);
        } elseif ($clients instanceof PropelObjectCollection) {
            return $this
                ->useClientsQuery()
                ->filterByPrimaryKeys($clients->getPrimaryKeys())
                ->endUse();
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
     * @return UsersQuery The current query, for fluid interface
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
     * Filter the query by a related LnkUsersAclGroups object
     *
     * @param   LnkUsersAclGroups|PropelObjectCollection $lnkUsersAclGroups  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkUsersAclGroups($lnkUsersAclGroups, $comparison = null)
    {
        if ($lnkUsersAclGroups instanceof LnkUsersAclGroups) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $lnkUsersAclGroups->getUserId(), $comparison);
        } elseif ($lnkUsersAclGroups instanceof PropelObjectCollection) {
            return $this
                ->useLnkUsersAclGroupsQuery()
                ->filterByPrimaryKeys($lnkUsersAclGroups->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkUsersAclGroups() only accepts arguments of type LnkUsersAclGroups or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkUsersAclGroups relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinLnkUsersAclGroups($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkUsersAclGroups');

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
            $this->addJoinObject($join, 'LnkUsersAclGroups');
        }

        return $this;
    }

    /**
     * Use the LnkUsersAclGroups relation LnkUsersAclGroups object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkUsersAclGroupsQuery A secondary query class using the current class as primary query
     */
    public function useLnkUsersAclGroupsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkUsersAclGroups($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkUsersAclGroups', 'LnkUsersAclGroupsQuery');
    }

    /**
     * Filter the query by a related OperationPrestations object
     *
     * @param   OperationPrestations|PropelObjectCollection $operationPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrestations($operationPrestations, $comparison = null)
    {
        if ($operationPrestations instanceof OperationPrestations) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $operationPrestations->getCostUpdaterUser(), $comparison);
        } elseif ($operationPrestations instanceof PropelObjectCollection) {
            return $this
                ->useOperationPrestationsQuery()
                ->filterByPrimaryKeys($operationPrestations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationPrestations() only accepts arguments of type OperationPrestations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationPrestations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinOperationPrestations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationPrestations');

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
            $this->addJoinObject($join, 'OperationPrestations');
        }

        return $this;
    }

    /**
     * Use the OperationPrestations relation OperationPrestations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationPrestationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationPrestationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationPrestations', 'OperationPrestationsQuery');
    }

    /**
     * Filter the query by a related OperationStatuts object
     *
     * @param   OperationStatuts|PropelObjectCollection $operationStatuts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationStatuts($operationStatuts, $comparison = null)
    {
        if ($operationStatuts instanceof OperationStatuts) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $operationStatuts->getUserId(), $comparison);
        } elseif ($operationStatuts instanceof PropelObjectCollection) {
            return $this
                ->useOperationStatutsQuery()
                ->filterByPrimaryKeys($operationStatuts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationStatuts() only accepts arguments of type OperationStatuts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationStatuts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinOperationStatuts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationStatuts');

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
            $this->addJoinObject($join, 'OperationStatuts');
        }

        return $this;
    }

    /**
     * Use the OperationStatuts relation OperationStatuts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationStatutsQuery A secondary query class using the current class as primary query
     */
    public function useOperationStatutsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationStatuts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationStatuts', 'OperationStatutsQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationsRelatedByOpDcId($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $operations->getOpDcId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsRelatedByOpDcIdQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationsRelatedByOpDcId() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationsRelatedByOpDcId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinOperationsRelatedByOpDcId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationsRelatedByOpDcId');

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
            $this->addJoinObject($join, 'OperationsRelatedByOpDcId');
        }

        return $this;
    }

    /**
     * Use the OperationsRelatedByOpDcId relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsRelatedByOpDcIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationsRelatedByOpDcId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationsRelatedByOpDcId', 'OperationsQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationsRelatedByOpCpId($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $operations->getOpCpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsRelatedByOpCpIdQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationsRelatedByOpCpId() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationsRelatedByOpCpId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinOperationsRelatedByOpCpId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationsRelatedByOpCpId');

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
            $this->addJoinObject($join, 'OperationsRelatedByOpCpId');
        }

        return $this;
    }

    /**
     * Use the OperationsRelatedByOpCpId relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsRelatedByOpCpIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationsRelatedByOpCpId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationsRelatedByOpCpId', 'OperationsQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationsRelatedByOpCdpId($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $operations->getOpCdpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsRelatedByOpCdpIdQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationsRelatedByOpCdpId() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationsRelatedByOpCdpId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinOperationsRelatedByOpCdpId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationsRelatedByOpCdpId');

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
            $this->addJoinObject($join, 'OperationsRelatedByOpCdpId');
        }

        return $this;
    }

    /**
     * Use the OperationsRelatedByOpCdpId relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsRelatedByOpCdpIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationsRelatedByOpCdpId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationsRelatedByOpCdpId', 'OperationsQuery');
    }

    /**
     * Filter the query by a related FactureEditionHistory object
     *
     * @param   FactureEditionHistory|PropelObjectCollection $factureEditionHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureEditionHistory($factureEditionHistory, $comparison = null)
    {
        if ($factureEditionHistory instanceof FactureEditionHistory) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $factureEditionHistory->getFactEhUserId(), $comparison);
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
     * @return UsersQuery The current query, for fluid interface
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
     * Filter the query by a related UserKpiSettings object
     *
     * @param   UserKpiSettings|PropelObjectCollection $userKpiSettings  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUserKpiSettings($userKpiSettings, $comparison = null)
    {
        if ($userKpiSettings instanceof UserKpiSettings) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $userKpiSettings->getUserKpiSettingsUserId(), $comparison);
        } elseif ($userKpiSettings instanceof PropelObjectCollection) {
            return $this
                ->useUserKpiSettingsQuery()
                ->filterByPrimaryKeys($userKpiSettings->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUserKpiSettings() only accepts arguments of type UserKpiSettings or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserKpiSettings relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinUserKpiSettings($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserKpiSettings');

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
            $this->addJoinObject($join, 'UserKpiSettings');
        }

        return $this;
    }

    /**
     * Use the UserKpiSettings relation UserKpiSettings object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserKpiSettingsQuery A secondary query class using the current class as primary query
     */
    public function useUserKpiSettingsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUserKpiSettings($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserKpiSettings', 'UserKpiSettingsQuery');
    }

    /**
     * Filter the query by a related LnkGrpValidationUsers object
     *
     * @param   LnkGrpValidationUsers|PropelObjectCollection $lnkGrpValidationUsers  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkGrpValidationUsers($lnkGrpValidationUsers, $comparison = null)
    {
        if ($lnkGrpValidationUsers instanceof LnkGrpValidationUsers) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $lnkGrpValidationUsers->getUserId(), $comparison);
        } elseif ($lnkGrpValidationUsers instanceof PropelObjectCollection) {
            return $this
                ->useLnkGrpValidationUsersQuery()
                ->filterByPrimaryKeys($lnkGrpValidationUsers->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkGrpValidationUsers() only accepts arguments of type LnkGrpValidationUsers or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkGrpValidationUsers relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinLnkGrpValidationUsers($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkGrpValidationUsers');

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
            $this->addJoinObject($join, 'LnkGrpValidationUsers');
        }

        return $this;
    }

    /**
     * Use the LnkGrpValidationUsers relation LnkGrpValidationUsers object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkGrpValidationUsersQuery A secondary query class using the current class as primary query
     */
    public function useLnkGrpValidationUsersQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLnkGrpValidationUsers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkGrpValidationUsers', 'LnkGrpValidationUsersQuery');
    }

    /**
     * Filter the query by a related LnkUsersOrganisations object
     *
     * @param   LnkUsersOrganisations|PropelObjectCollection $lnkUsersOrganisations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsersQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkUsersOrganisations($lnkUsersOrganisations, $comparison = null)
    {
        if ($lnkUsersOrganisations instanceof LnkUsersOrganisations) {
            return $this
                ->addUsingAlias(UsersPeer::USER_ID, $lnkUsersOrganisations->getLnkUsersOrganisationsUserId(), $comparison);
        } elseif ($lnkUsersOrganisations instanceof PropelObjectCollection) {
            return $this
                ->useLnkUsersOrganisationsQuery()
                ->filterByPrimaryKeys($lnkUsersOrganisations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkUsersOrganisations() only accepts arguments of type LnkUsersOrganisations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkUsersOrganisations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function joinLnkUsersOrganisations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkUsersOrganisations');

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
            $this->addJoinObject($join, 'LnkUsersOrganisations');
        }

        return $this;
    }

    /**
     * Use the LnkUsersOrganisations relation LnkUsersOrganisations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkUsersOrganisationsQuery A secondary query class using the current class as primary query
     */
    public function useLnkUsersOrganisationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkUsersOrganisations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkUsersOrganisations', 'LnkUsersOrganisationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Users $users Object to remove from the list of results
     *
     * @return UsersQuery The current query, for fluid interface
     */
    public function prune($users = null)
    {
        if ($users) {
            $this->addUsingAlias(UsersPeer::USER_ID, $users->getUserId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
