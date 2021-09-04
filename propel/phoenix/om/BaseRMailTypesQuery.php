<?php


/**
 * Base class that represents a query for the 'r_mail_types' table.
 *
 *
 *
 * @method RMailTypesQuery orderByRMailTypeId($order = Criteria::ASC) Order by the r_mail_type_id column
 * @method RMailTypesQuery orderByRMailTypeName($order = Criteria::ASC) Order by the r_mail_type_name column
 *
 * @method RMailTypesQuery groupByRMailTypeId() Group by the r_mail_type_id column
 * @method RMailTypesQuery groupByRMailTypeName() Group by the r_mail_type_name column
 *
 * @method RMailTypesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RMailTypesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RMailTypesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RMailTypesQuery leftJoinMails($relationAlias = null) Adds a LEFT JOIN clause to the query using the Mails relation
 * @method RMailTypesQuery rightJoinMails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Mails relation
 * @method RMailTypesQuery innerJoinMails($relationAlias = null) Adds a INNER JOIN clause to the query using the Mails relation
 *
 * @method RMailTypes findOne(PropelPDO $con = null) Return the first RMailTypes matching the query
 * @method RMailTypes findOneOrCreate(PropelPDO $con = null) Return the first RMailTypes matching the query, or a new RMailTypes object populated from the query conditions when no match is found
 *
 * @method RMailTypes findOneByRMailTypeName(string $r_mail_type_name) Return the first RMailTypes filtered by the r_mail_type_name column
 *
 * @method array findByRMailTypeId(int $r_mail_type_id) Return RMailTypes objects filtered by the r_mail_type_id column
 * @method array findByRMailTypeName(string $r_mail_type_name) Return RMailTypes objects filtered by the r_mail_type_name column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRMailTypesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRMailTypesQuery object.
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
            $modelName = 'RMailTypes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RMailTypesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RMailTypesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RMailTypesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RMailTypesQuery) {
            return $criteria;
        }
        $query = new RMailTypesQuery(null, null, $modelAlias);

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
     * @return   RMailTypes|RMailTypes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RMailTypesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RMailTypesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RMailTypes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRMailTypeId($key, $con = null)
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
     * @return                 RMailTypes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_mail_type_id`, `r_mail_type_name` FROM `r_mail_types` WHERE `r_mail_type_id` = :p0';
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
            $obj = new RMailTypes();
            $obj->hydrate($row);
            RMailTypesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RMailTypes|RMailTypes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RMailTypes[]|mixed the list of results, formatted by the current formatter
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
     * @return RMailTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RMailTypesPeer::R_MAIL_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RMailTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RMailTypesPeer::R_MAIL_TYPE_ID, $keys, Criteria::IN);
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
     * @param     mixed $rMailTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RMailTypesQuery The current query, for fluid interface
     */
    public function filterByRMailTypeId($rMailTypeId = null, $comparison = null)
    {
        if (is_array($rMailTypeId)) {
            $useMinMax = false;
            if (isset($rMailTypeId['min'])) {
                $this->addUsingAlias(RMailTypesPeer::R_MAIL_TYPE_ID, $rMailTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rMailTypeId['max'])) {
                $this->addUsingAlias(RMailTypesPeer::R_MAIL_TYPE_ID, $rMailTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RMailTypesPeer::R_MAIL_TYPE_ID, $rMailTypeId, $comparison);
    }

    /**
     * Filter the query on the r_mail_type_name column
     *
     * Example usage:
     * <code>
     * $query->filterByRMailTypeName('fooValue');   // WHERE r_mail_type_name = 'fooValue'
     * $query->filterByRMailTypeName('%fooValue%'); // WHERE r_mail_type_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rMailTypeName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RMailTypesQuery The current query, for fluid interface
     */
    public function filterByRMailTypeName($rMailTypeName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rMailTypeName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rMailTypeName)) {
                $rMailTypeName = str_replace('*', '%', $rMailTypeName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RMailTypesPeer::R_MAIL_TYPE_NAME, $rMailTypeName, $comparison);
    }

    /**
     * Filter the query by a related Mails object
     *
     * @param   Mails|PropelObjectCollection $mails  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RMailTypesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMails($mails, $comparison = null)
    {
        if ($mails instanceof Mails) {
            return $this
                ->addUsingAlias(RMailTypesPeer::R_MAIL_TYPE_ID, $mails->getRMailTypeId(), $comparison);
        } elseif ($mails instanceof PropelObjectCollection) {
            return $this
                ->useMailsQuery()
                ->filterByPrimaryKeys($mails->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByMails() only accepts arguments of type Mails or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Mails relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RMailTypesQuery The current query, for fluid interface
     */
    public function joinMails($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Mails');

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
            $this->addJoinObject($join, 'Mails');
        }

        return $this;
    }

    /**
     * Use the Mails relation Mails object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MailsQuery A secondary query class using the current class as primary query
     */
    public function useMailsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinMails($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Mails', 'MailsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RMailTypes $rMailTypes Object to remove from the list of results
     *
     * @return RMailTypesQuery The current query, for fluid interface
     */
    public function prune($rMailTypes = null)
    {
        if ($rMailTypes) {
            $this->addUsingAlias(RMailTypesPeer::R_MAIL_TYPE_ID, $rMailTypes->getRMailTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
