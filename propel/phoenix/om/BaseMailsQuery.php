<?php


/**
 * Base class that represents a query for the 'mails' table.
 *
 *
 *
 * @method MailsQuery orderByMailId($order = Criteria::ASC) Order by the mail_id column
 * @method MailsQuery orderByMailEntityName($order = Criteria::ASC) Order by the mail_entity_name column
 * @method MailsQuery orderByMailEntityId($order = Criteria::ASC) Order by the mail_entity_id column
 * @method MailsQuery orderByMailTo($order = Criteria::ASC) Order by the mail_to column
 * @method MailsQuery orderByMailCc($order = Criteria::ASC) Order by the mail_cc column
 * @method MailsQuery orderByMailBcc($order = Criteria::ASC) Order by the mail_bcc column
 * @method MailsQuery orderByMailSubject($order = Criteria::ASC) Order by the mail_subject column
 * @method MailsQuery orderByMailMessage($order = Criteria::ASC) Order by the mail_message column
 * @method MailsQuery orderByRMailTypeId($order = Criteria::ASC) Order by the r_mail_type_id column
 * @method MailsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method MailsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method MailsQuery groupByMailId() Group by the mail_id column
 * @method MailsQuery groupByMailEntityName() Group by the mail_entity_name column
 * @method MailsQuery groupByMailEntityId() Group by the mail_entity_id column
 * @method MailsQuery groupByMailTo() Group by the mail_to column
 * @method MailsQuery groupByMailCc() Group by the mail_cc column
 * @method MailsQuery groupByMailBcc() Group by the mail_bcc column
 * @method MailsQuery groupByMailSubject() Group by the mail_subject column
 * @method MailsQuery groupByMailMessage() Group by the mail_message column
 * @method MailsQuery groupByRMailTypeId() Group by the r_mail_type_id column
 * @method MailsQuery groupByDateCreate() Group by the date_create column
 * @method MailsQuery groupByUserId() Group by the user_id column
 *
 * @method MailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MailsQuery leftJoinRMailTypes($relationAlias = null) Adds a LEFT JOIN clause to the query using the RMailTypes relation
 * @method MailsQuery rightJoinRMailTypes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RMailTypes relation
 * @method MailsQuery innerJoinRMailTypes($relationAlias = null) Adds a INNER JOIN clause to the query using the RMailTypes relation
 *
 * @method Mails findOne(PropelPDO $con = null) Return the first Mails matching the query
 * @method Mails findOneOrCreate(PropelPDO $con = null) Return the first Mails matching the query, or a new Mails object populated from the query conditions when no match is found
 *
 * @method Mails findOneByMailEntityName(string $mail_entity_name) Return the first Mails filtered by the mail_entity_name column
 * @method Mails findOneByMailEntityId(int $mail_entity_id) Return the first Mails filtered by the mail_entity_id column
 * @method Mails findOneByMailTo(string $mail_to) Return the first Mails filtered by the mail_to column
 * @method Mails findOneByMailCc(string $mail_cc) Return the first Mails filtered by the mail_cc column
 * @method Mails findOneByMailBcc(string $mail_bcc) Return the first Mails filtered by the mail_bcc column
 * @method Mails findOneByMailSubject(string $mail_subject) Return the first Mails filtered by the mail_subject column
 * @method Mails findOneByMailMessage(string $mail_message) Return the first Mails filtered by the mail_message column
 * @method Mails findOneByRMailTypeId(int $r_mail_type_id) Return the first Mails filtered by the r_mail_type_id column
 * @method Mails findOneByDateCreate(string $date_create) Return the first Mails filtered by the date_create column
 * @method Mails findOneByUserId(int $user_id) Return the first Mails filtered by the user_id column
 *
 * @method array findByMailId(int $mail_id) Return Mails objects filtered by the mail_id column
 * @method array findByMailEntityName(string $mail_entity_name) Return Mails objects filtered by the mail_entity_name column
 * @method array findByMailEntityId(int $mail_entity_id) Return Mails objects filtered by the mail_entity_id column
 * @method array findByMailTo(string $mail_to) Return Mails objects filtered by the mail_to column
 * @method array findByMailCc(string $mail_cc) Return Mails objects filtered by the mail_cc column
 * @method array findByMailBcc(string $mail_bcc) Return Mails objects filtered by the mail_bcc column
 * @method array findByMailSubject(string $mail_subject) Return Mails objects filtered by the mail_subject column
 * @method array findByMailMessage(string $mail_message) Return Mails objects filtered by the mail_message column
 * @method array findByRMailTypeId(int $r_mail_type_id) Return Mails objects filtered by the r_mail_type_id column
 * @method array findByDateCreate(string $date_create) Return Mails objects filtered by the date_create column
 * @method array findByUserId(int $user_id) Return Mails objects filtered by the user_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseMailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMailsQuery object.
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
            $modelName = 'Mails';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MailsQuery) {
            return $criteria;
        }
        $query = new MailsQuery(null, null, $modelAlias);

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
     * @return   Mails|Mails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Mails A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByMailId($key, $con = null)
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
     * @return                 Mails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `mail_id`, `mail_entity_name`, `mail_entity_id`, `mail_to`, `mail_cc`, `mail_bcc`, `mail_subject`, `mail_message`, `r_mail_type_id`, `date_create`, `user_id` FROM `mails` WHERE `mail_id` = :p0';
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
            $obj = new Mails();
            $obj->hydrate($row);
            MailsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Mails|Mails[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Mails[]|mixed the list of results, formatted by the current formatter
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
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MailsPeer::MAIL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MailsPeer::MAIL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the mail_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMailId(1234); // WHERE mail_id = 1234
     * $query->filterByMailId(array(12, 34)); // WHERE mail_id IN (12, 34)
     * $query->filterByMailId(array('min' => 12)); // WHERE mail_id >= 12
     * $query->filterByMailId(array('max' => 12)); // WHERE mail_id <= 12
     * </code>
     *
     * @param     mixed $mailId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByMailId($mailId = null, $comparison = null)
    {
        if (is_array($mailId)) {
            $useMinMax = false;
            if (isset($mailId['min'])) {
                $this->addUsingAlias(MailsPeer::MAIL_ID, $mailId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mailId['max'])) {
                $this->addUsingAlias(MailsPeer::MAIL_ID, $mailId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MailsPeer::MAIL_ID, $mailId, $comparison);
    }

    /**
     * Filter the query on the mail_entity_name column
     *
     * Example usage:
     * <code>
     * $query->filterByMailEntityName('fooValue');   // WHERE mail_entity_name = 'fooValue'
     * $query->filterByMailEntityName('%fooValue%'); // WHERE mail_entity_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailEntityName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByMailEntityName($mailEntityName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailEntityName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailEntityName)) {
                $mailEntityName = str_replace('*', '%', $mailEntityName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MailsPeer::MAIL_ENTITY_NAME, $mailEntityName, $comparison);
    }

    /**
     * Filter the query on the mail_entity_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMailEntityId(1234); // WHERE mail_entity_id = 1234
     * $query->filterByMailEntityId(array(12, 34)); // WHERE mail_entity_id IN (12, 34)
     * $query->filterByMailEntityId(array('min' => 12)); // WHERE mail_entity_id >= 12
     * $query->filterByMailEntityId(array('max' => 12)); // WHERE mail_entity_id <= 12
     * </code>
     *
     * @param     mixed $mailEntityId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByMailEntityId($mailEntityId = null, $comparison = null)
    {
        if (is_array($mailEntityId)) {
            $useMinMax = false;
            if (isset($mailEntityId['min'])) {
                $this->addUsingAlias(MailsPeer::MAIL_ENTITY_ID, $mailEntityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mailEntityId['max'])) {
                $this->addUsingAlias(MailsPeer::MAIL_ENTITY_ID, $mailEntityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MailsPeer::MAIL_ENTITY_ID, $mailEntityId, $comparison);
    }

    /**
     * Filter the query on the mail_to column
     *
     * Example usage:
     * <code>
     * $query->filterByMailTo('fooValue');   // WHERE mail_to = 'fooValue'
     * $query->filterByMailTo('%fooValue%'); // WHERE mail_to LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailTo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByMailTo($mailTo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailTo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailTo)) {
                $mailTo = str_replace('*', '%', $mailTo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MailsPeer::MAIL_TO, $mailTo, $comparison);
    }

    /**
     * Filter the query on the mail_cc column
     *
     * Example usage:
     * <code>
     * $query->filterByMailCc('fooValue');   // WHERE mail_cc = 'fooValue'
     * $query->filterByMailCc('%fooValue%'); // WHERE mail_cc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailCc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByMailCc($mailCc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailCc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailCc)) {
                $mailCc = str_replace('*', '%', $mailCc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MailsPeer::MAIL_CC, $mailCc, $comparison);
    }

    /**
     * Filter the query on the mail_bcc column
     *
     * Example usage:
     * <code>
     * $query->filterByMailBcc('fooValue');   // WHERE mail_bcc = 'fooValue'
     * $query->filterByMailBcc('%fooValue%'); // WHERE mail_bcc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailBcc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByMailBcc($mailBcc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailBcc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailBcc)) {
                $mailBcc = str_replace('*', '%', $mailBcc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MailsPeer::MAIL_BCC, $mailBcc, $comparison);
    }

    /**
     * Filter the query on the mail_subject column
     *
     * Example usage:
     * <code>
     * $query->filterByMailSubject('fooValue');   // WHERE mail_subject = 'fooValue'
     * $query->filterByMailSubject('%fooValue%'); // WHERE mail_subject LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailSubject The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByMailSubject($mailSubject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailSubject)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailSubject)) {
                $mailSubject = str_replace('*', '%', $mailSubject);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MailsPeer::MAIL_SUBJECT, $mailSubject, $comparison);
    }

    /**
     * Filter the query on the mail_message column
     *
     * Example usage:
     * <code>
     * $query->filterByMailMessage('fooValue');   // WHERE mail_message = 'fooValue'
     * $query->filterByMailMessage('%fooValue%'); // WHERE mail_message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailMessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByMailMessage($mailMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailMessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailMessage)) {
                $mailMessage = str_replace('*', '%', $mailMessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MailsPeer::MAIL_MESSAGE, $mailMessage, $comparison);
    }

    /**
     * Filter the query on the r_mail_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRMailTypeId(1234); // WHERE r_mail_type_id = 1234
     * $query->filterByRMailTypeId(array(12, 34)); // WHERE r_mail_type_id IN (12, 34)
     * $query->filterByRMailTypeId(array('min' => 12)); // WHERE r_mail_type_id >= 12
     * $query->filterByRMailTypeId(array('max' => 12)); // WHERE r_mail_type_id <= 12
     * </code>
     *
     * @see       filterByRMailTypes()
     *
     * @param     mixed $rMailTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByRMailTypeId($rMailTypeId = null, $comparison = null)
    {
        if (is_array($rMailTypeId)) {
            $useMinMax = false;
            if (isset($rMailTypeId['min'])) {
                $this->addUsingAlias(MailsPeer::R_MAIL_TYPE_ID, $rMailTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rMailTypeId['max'])) {
                $this->addUsingAlias(MailsPeer::R_MAIL_TYPE_ID, $rMailTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MailsPeer::R_MAIL_TYPE_ID, $rMailTypeId, $comparison);
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
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(MailsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(MailsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MailsPeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return MailsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(MailsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(MailsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MailsPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query by a related RMailTypes object
     *
     * @param   RMailTypes|PropelObjectCollection $rMailTypes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MailsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRMailTypes($rMailTypes, $comparison = null)
    {
        if ($rMailTypes instanceof RMailTypes) {
            return $this
                ->addUsingAlias(MailsPeer::R_MAIL_TYPE_ID, $rMailTypes->getRMailTypeId(), $comparison);
        } elseif ($rMailTypes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MailsPeer::R_MAIL_TYPE_ID, $rMailTypes->toKeyValue('PrimaryKey', 'RMailTypeId'), $comparison);
        } else {
            throw new PropelException('filterByRMailTypes() only accepts arguments of type RMailTypes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RMailTypes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function joinRMailTypes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RMailTypes');

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
            $this->addJoinObject($join, 'RMailTypes');
        }

        return $this;
    }

    /**
     * Use the RMailTypes relation RMailTypes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RMailTypesQuery A secondary query class using the current class as primary query
     */
    public function useRMailTypesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRMailTypes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RMailTypes', 'RMailTypesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Mails $mails Object to remove from the list of results
     *
     * @return MailsQuery The current query, for fluid interface
     */
    public function prune($mails = null)
    {
        if ($mails) {
            $this->addUsingAlias(MailsPeer::MAIL_ID, $mails->getMailId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
