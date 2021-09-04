<?php


/**
 * Base class that represents a query for the 'r_freq_stat_mail' table.
 *
 *
 *
 * @method RFreqStatMailQuery orderByRFreqStatMailId($order = Criteria::ASC) Order by the r_freq_stat_mail_id column
 * @method RFreqStatMailQuery orderByRFreqStatMailLibelle($order = Criteria::ASC) Order by the r_freq_stat_mail_libelle column
 *
 * @method RFreqStatMailQuery groupByRFreqStatMailId() Group by the r_freq_stat_mail_id column
 * @method RFreqStatMailQuery groupByRFreqStatMailLibelle() Group by the r_freq_stat_mail_libelle column
 *
 * @method RFreqStatMailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RFreqStatMailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RFreqStatMailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RFreqStatMail findOne(PropelPDO $con = null) Return the first RFreqStatMail matching the query
 * @method RFreqStatMail findOneOrCreate(PropelPDO $con = null) Return the first RFreqStatMail matching the query, or a new RFreqStatMail object populated from the query conditions when no match is found
 *
 * @method RFreqStatMail findOneByRFreqStatMailLibelle(string $r_freq_stat_mail_libelle) Return the first RFreqStatMail filtered by the r_freq_stat_mail_libelle column
 *
 * @method array findByRFreqStatMailId(int $r_freq_stat_mail_id) Return RFreqStatMail objects filtered by the r_freq_stat_mail_id column
 * @method array findByRFreqStatMailLibelle(string $r_freq_stat_mail_libelle) Return RFreqStatMail objects filtered by the r_freq_stat_mail_libelle column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRFreqStatMailQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRFreqStatMailQuery object.
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
            $modelName = 'RFreqStatMail';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RFreqStatMailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RFreqStatMailQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RFreqStatMailQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RFreqStatMailQuery) {
            return $criteria;
        }
        $query = new RFreqStatMailQuery(null, null, $modelAlias);

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
     * @return   RFreqStatMail|RFreqStatMail[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RFreqStatMailPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RFreqStatMailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RFreqStatMail A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRFreqStatMailId($key, $con = null)
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
     * @return                 RFreqStatMail A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_freq_stat_mail_id`, `r_freq_stat_mail_libelle` FROM `r_freq_stat_mail` WHERE `r_freq_stat_mail_id` = :p0';
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
            $obj = new RFreqStatMail();
            $obj->hydrate($row);
            RFreqStatMailPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RFreqStatMail|RFreqStatMail[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RFreqStatMail[]|mixed the list of results, formatted by the current formatter
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
     * @return RFreqStatMailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RFreqStatMailPeer::R_FREQ_STAT_MAIL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RFreqStatMailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RFreqStatMailPeer::R_FREQ_STAT_MAIL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_freq_stat_mail_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFreqStatMailId(1234); // WHERE r_freq_stat_mail_id = 1234
     * $query->filterByRFreqStatMailId(array(12, 34)); // WHERE r_freq_stat_mail_id IN (12, 34)
     * $query->filterByRFreqStatMailId(array('min' => 12)); // WHERE r_freq_stat_mail_id >= 12
     * $query->filterByRFreqStatMailId(array('max' => 12)); // WHERE r_freq_stat_mail_id <= 12
     * </code>
     *
     * @param     mixed $rFreqStatMailId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFreqStatMailQuery The current query, for fluid interface
     */
    public function filterByRFreqStatMailId($rFreqStatMailId = null, $comparison = null)
    {
        if (is_array($rFreqStatMailId)) {
            $useMinMax = false;
            if (isset($rFreqStatMailId['min'])) {
                $this->addUsingAlias(RFreqStatMailPeer::R_FREQ_STAT_MAIL_ID, $rFreqStatMailId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFreqStatMailId['max'])) {
                $this->addUsingAlias(RFreqStatMailPeer::R_FREQ_STAT_MAIL_ID, $rFreqStatMailId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFreqStatMailPeer::R_FREQ_STAT_MAIL_ID, $rFreqStatMailId, $comparison);
    }

    /**
     * Filter the query on the r_freq_stat_mail_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRFreqStatMailLibelle('fooValue');   // WHERE r_freq_stat_mail_libelle = 'fooValue'
     * $query->filterByRFreqStatMailLibelle('%fooValue%'); // WHERE r_freq_stat_mail_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rFreqStatMailLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFreqStatMailQuery The current query, for fluid interface
     */
    public function filterByRFreqStatMailLibelle($rFreqStatMailLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rFreqStatMailLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rFreqStatMailLibelle)) {
                $rFreqStatMailLibelle = str_replace('*', '%', $rFreqStatMailLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFreqStatMailPeer::R_FREQ_STAT_MAIL_LIBELLE, $rFreqStatMailLibelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RFreqStatMail $rFreqStatMail Object to remove from the list of results
     *
     * @return RFreqStatMailQuery The current query, for fluid interface
     */
    public function prune($rFreqStatMail = null)
    {
        if ($rFreqStatMail) {
            $this->addUsingAlias(RFreqStatMailPeer::R_FREQ_STAT_MAIL_ID, $rFreqStatMail->getRFreqStatMailId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
