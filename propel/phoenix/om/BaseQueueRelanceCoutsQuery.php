<?php


/**
 * Base class that represents a query for the 'queue_relance_couts' table.
 *
 *
 *
 * @method QueueRelanceCoutsQuery orderByQueueRelanceCoutsId($order = Criteria::ASC) Order by the queue_relance_couts_id column
 * @method QueueRelanceCoutsQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method QueueRelanceCoutsQuery orderByMailSent($order = Criteria::ASC) Order by the mail_sent column
 * @method QueueRelanceCoutsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method QueueRelanceCoutsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method QueueRelanceCoutsQuery groupByQueueRelanceCoutsId() Group by the queue_relance_couts_id column
 * @method QueueRelanceCoutsQuery groupByOpId() Group by the op_id column
 * @method QueueRelanceCoutsQuery groupByMailSent() Group by the mail_sent column
 * @method QueueRelanceCoutsQuery groupByDateCreate() Group by the date_create column
 * @method QueueRelanceCoutsQuery groupByUserId() Group by the user_id column
 *
 * @method QueueRelanceCoutsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method QueueRelanceCoutsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method QueueRelanceCoutsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method QueueRelanceCouts findOne(PropelPDO $con = null) Return the first QueueRelanceCouts matching the query
 * @method QueueRelanceCouts findOneOrCreate(PropelPDO $con = null) Return the first QueueRelanceCouts matching the query, or a new QueueRelanceCouts object populated from the query conditions when no match is found
 *
 * @method QueueRelanceCouts findOneByOpId(int $op_id) Return the first QueueRelanceCouts filtered by the op_id column
 * @method QueueRelanceCouts findOneByMailSent(boolean $mail_sent) Return the first QueueRelanceCouts filtered by the mail_sent column
 * @method QueueRelanceCouts findOneByDateCreate(string $date_create) Return the first QueueRelanceCouts filtered by the date_create column
 * @method QueueRelanceCouts findOneByUserId(int $user_id) Return the first QueueRelanceCouts filtered by the user_id column
 *
 * @method array findByQueueRelanceCoutsId(int $queue_relance_couts_id) Return QueueRelanceCouts objects filtered by the queue_relance_couts_id column
 * @method array findByOpId(int $op_id) Return QueueRelanceCouts objects filtered by the op_id column
 * @method array findByMailSent(boolean $mail_sent) Return QueueRelanceCouts objects filtered by the mail_sent column
 * @method array findByDateCreate(string $date_create) Return QueueRelanceCouts objects filtered by the date_create column
 * @method array findByUserId(int $user_id) Return QueueRelanceCouts objects filtered by the user_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseQueueRelanceCoutsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseQueueRelanceCoutsQuery object.
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
            $modelName = 'QueueRelanceCouts';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new QueueRelanceCoutsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   QueueRelanceCoutsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return QueueRelanceCoutsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof QueueRelanceCoutsQuery) {
            return $criteria;
        }
        $query = new QueueRelanceCoutsQuery(null, null, $modelAlias);

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
     * @return   QueueRelanceCouts|QueueRelanceCouts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = QueueRelanceCoutsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(QueueRelanceCoutsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 QueueRelanceCouts A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByQueueRelanceCoutsId($key, $con = null)
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
     * @return                 QueueRelanceCouts A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `queue_relance_couts_id`, `op_id`, `mail_sent`, `date_create`, `user_id` FROM `queue_relance_couts` WHERE `queue_relance_couts_id` = :p0';
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
            $obj = new QueueRelanceCouts();
            $obj->hydrate($row);
            QueueRelanceCoutsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return QueueRelanceCouts|QueueRelanceCouts[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|QueueRelanceCouts[]|mixed the list of results, formatted by the current formatter
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
     * @return QueueRelanceCoutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(QueueRelanceCoutsPeer::QUEUE_RELANCE_COUTS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return QueueRelanceCoutsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(QueueRelanceCoutsPeer::QUEUE_RELANCE_COUTS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the queue_relance_couts_id column
     *
     * Example usage:
     * <code>
     * $query->filterByQueueRelanceCoutsId(1234); // WHERE queue_relance_couts_id = 1234
     * $query->filterByQueueRelanceCoutsId(array(12, 34)); // WHERE queue_relance_couts_id IN (12, 34)
     * $query->filterByQueueRelanceCoutsId(array('min' => 12)); // WHERE queue_relance_couts_id >= 12
     * $query->filterByQueueRelanceCoutsId(array('max' => 12)); // WHERE queue_relance_couts_id <= 12
     * </code>
     *
     * @param     mixed $queueRelanceCoutsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QueueRelanceCoutsQuery The current query, for fluid interface
     */
    public function filterByQueueRelanceCoutsId($queueRelanceCoutsId = null, $comparison = null)
    {
        if (is_array($queueRelanceCoutsId)) {
            $useMinMax = false;
            if (isset($queueRelanceCoutsId['min'])) {
                $this->addUsingAlias(QueueRelanceCoutsPeer::QUEUE_RELANCE_COUTS_ID, $queueRelanceCoutsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($queueRelanceCoutsId['max'])) {
                $this->addUsingAlias(QueueRelanceCoutsPeer::QUEUE_RELANCE_COUTS_ID, $queueRelanceCoutsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QueueRelanceCoutsPeer::QUEUE_RELANCE_COUTS_ID, $queueRelanceCoutsId, $comparison);
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
     * @param     mixed $opId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QueueRelanceCoutsQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(QueueRelanceCoutsPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(QueueRelanceCoutsPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QueueRelanceCoutsPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the mail_sent column
     *
     * Example usage:
     * <code>
     * $query->filterByMailSent(true); // WHERE mail_sent = true
     * $query->filterByMailSent('yes'); // WHERE mail_sent = true
     * </code>
     *
     * @param     boolean|string $mailSent The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return QueueRelanceCoutsQuery The current query, for fluid interface
     */
    public function filterByMailSent($mailSent = null, $comparison = null)
    {
        if (is_string($mailSent)) {
            $mailSent = in_array(strtolower($mailSent), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(QueueRelanceCoutsPeer::MAIL_SENT, $mailSent, $comparison);
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
     * @return QueueRelanceCoutsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(QueueRelanceCoutsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(QueueRelanceCoutsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QueueRelanceCoutsPeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return QueueRelanceCoutsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(QueueRelanceCoutsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(QueueRelanceCoutsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(QueueRelanceCoutsPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   QueueRelanceCouts $queueRelanceCouts Object to remove from the list of results
     *
     * @return QueueRelanceCoutsQuery The current query, for fluid interface
     */
    public function prune($queueRelanceCouts = null)
    {
        if ($queueRelanceCouts) {
            $this->addUsingAlias(QueueRelanceCoutsPeer::QUEUE_RELANCE_COUTS_ID, $queueRelanceCouts->getQueueRelanceCoutsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
