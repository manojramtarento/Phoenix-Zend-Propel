<?php


/**
 * Base class that represents a query for the 'lnk_operations_contacts_mail' table.
 *
 *
 *
 * @method LnkOperationsContactsMailQuery orderByIdLnkOpContactMail($order = Criteria::ASC) Order by the id_lnk_op_contact_mail column
 * @method LnkOperationsContactsMailQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method LnkOperationsContactsMailQuery orderByCtId($order = Criteria::ASC) Order by the ct_id column
 * @method LnkOperationsContactsMailQuery orderBySendMail($order = Criteria::ASC) Order by the send_mail column
 *
 * @method LnkOperationsContactsMailQuery groupByIdLnkOpContactMail() Group by the id_lnk_op_contact_mail column
 * @method LnkOperationsContactsMailQuery groupByOpId() Group by the op_id column
 * @method LnkOperationsContactsMailQuery groupByCtId() Group by the ct_id column
 * @method LnkOperationsContactsMailQuery groupBySendMail() Group by the send_mail column
 *
 * @method LnkOperationsContactsMailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkOperationsContactsMailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkOperationsContactsMailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkOperationsContactsMailQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method LnkOperationsContactsMailQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method LnkOperationsContactsMailQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method LnkOperationsContactsMailQuery leftJoinContacts($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contacts relation
 * @method LnkOperationsContactsMailQuery rightJoinContacts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contacts relation
 * @method LnkOperationsContactsMailQuery innerJoinContacts($relationAlias = null) Adds a INNER JOIN clause to the query using the Contacts relation
 *
 * @method LnkOperationsContactsMail findOne(PropelPDO $con = null) Return the first LnkOperationsContactsMail matching the query
 * @method LnkOperationsContactsMail findOneOrCreate(PropelPDO $con = null) Return the first LnkOperationsContactsMail matching the query, or a new LnkOperationsContactsMail object populated from the query conditions when no match is found
 *
 * @method LnkOperationsContactsMail findOneByOpId(int $op_id) Return the first LnkOperationsContactsMail filtered by the op_id column
 * @method LnkOperationsContactsMail findOneByCtId(int $ct_id) Return the first LnkOperationsContactsMail filtered by the ct_id column
 * @method LnkOperationsContactsMail findOneBySendMail(boolean $send_mail) Return the first LnkOperationsContactsMail filtered by the send_mail column
 *
 * @method array findByIdLnkOpContactMail(int $id_lnk_op_contact_mail) Return LnkOperationsContactsMail objects filtered by the id_lnk_op_contact_mail column
 * @method array findByOpId(int $op_id) Return LnkOperationsContactsMail objects filtered by the op_id column
 * @method array findByCtId(int $ct_id) Return LnkOperationsContactsMail objects filtered by the ct_id column
 * @method array findBySendMail(boolean $send_mail) Return LnkOperationsContactsMail objects filtered by the send_mail column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkOperationsContactsMailQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkOperationsContactsMailQuery object.
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
            $modelName = 'LnkOperationsContactsMail';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkOperationsContactsMailQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkOperationsContactsMailQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkOperationsContactsMailQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkOperationsContactsMailQuery) {
            return $criteria;
        }
        $query = new LnkOperationsContactsMailQuery(null, null, $modelAlias);

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
     * @return   LnkOperationsContactsMail|LnkOperationsContactsMail[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkOperationsContactsMailPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkOperationsContactsMailPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 LnkOperationsContactsMail A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdLnkOpContactMail($key, $con = null)
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
     * @return                 LnkOperationsContactsMail A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_lnk_op_contact_mail`, `op_id`, `ct_id`, `send_mail` FROM `lnk_operations_contacts_mail` WHERE `id_lnk_op_contact_mail` = :p0';
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
            $obj = new LnkOperationsContactsMail();
            $obj->hydrate($row);
            LnkOperationsContactsMailPeer::addInstanceToPool($obj, (string) $key);
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
     * @return LnkOperationsContactsMail|LnkOperationsContactsMail[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LnkOperationsContactsMail[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkOperationsContactsMailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LnkOperationsContactsMailPeer::ID_LNK_OP_CONTACT_MAIL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkOperationsContactsMailQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LnkOperationsContactsMailPeer::ID_LNK_OP_CONTACT_MAIL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_lnk_op_contact_mail column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLnkOpContactMail(1234); // WHERE id_lnk_op_contact_mail = 1234
     * $query->filterByIdLnkOpContactMail(array(12, 34)); // WHERE id_lnk_op_contact_mail IN (12, 34)
     * $query->filterByIdLnkOpContactMail(array('min' => 12)); // WHERE id_lnk_op_contact_mail >= 12
     * $query->filterByIdLnkOpContactMail(array('max' => 12)); // WHERE id_lnk_op_contact_mail <= 12
     * </code>
     *
     * @param     mixed $idLnkOpContactMail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationsContactsMailQuery The current query, for fluid interface
     */
    public function filterByIdLnkOpContactMail($idLnkOpContactMail = null, $comparison = null)
    {
        if (is_array($idLnkOpContactMail)) {
            $useMinMax = false;
            if (isset($idLnkOpContactMail['min'])) {
                $this->addUsingAlias(LnkOperationsContactsMailPeer::ID_LNK_OP_CONTACT_MAIL, $idLnkOpContactMail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLnkOpContactMail['max'])) {
                $this->addUsingAlias(LnkOperationsContactsMailPeer::ID_LNK_OP_CONTACT_MAIL, $idLnkOpContactMail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationsContactsMailPeer::ID_LNK_OP_CONTACT_MAIL, $idLnkOpContactMail, $comparison);
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
     * @see       filterByOperations()
     *
     * @param     mixed $opId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationsContactsMailQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(LnkOperationsContactsMailPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(LnkOperationsContactsMailPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationsContactsMailPeer::OP_ID, $opId, $comparison);
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
     * @see       filterByContacts()
     *
     * @param     mixed $ctId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationsContactsMailQuery The current query, for fluid interface
     */
    public function filterByCtId($ctId = null, $comparison = null)
    {
        if (is_array($ctId)) {
            $useMinMax = false;
            if (isset($ctId['min'])) {
                $this->addUsingAlias(LnkOperationsContactsMailPeer::CT_ID, $ctId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ctId['max'])) {
                $this->addUsingAlias(LnkOperationsContactsMailPeer::CT_ID, $ctId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkOperationsContactsMailPeer::CT_ID, $ctId, $comparison);
    }

    /**
     * Filter the query on the send_mail column
     *
     * Example usage:
     * <code>
     * $query->filterBySendMail(true); // WHERE send_mail = true
     * $query->filterBySendMail('yes'); // WHERE send_mail = true
     * </code>
     *
     * @param     boolean|string $sendMail The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkOperationsContactsMailQuery The current query, for fluid interface
     */
    public function filterBySendMail($sendMail = null, $comparison = null)
    {
        if (is_string($sendMail)) {
            $sendMail = in_array(strtolower($sendMail), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(LnkOperationsContactsMailPeer::SEND_MAIL, $sendMail, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkOperationsContactsMailQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(LnkOperationsContactsMailPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkOperationsContactsMailPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return LnkOperationsContactsMailQuery The current query, for fluid interface
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
     * Filter the query by a related Contacts object
     *
     * @param   Contacts|PropelObjectCollection $contacts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkOperationsContactsMailQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContacts($contacts, $comparison = null)
    {
        if ($contacts instanceof Contacts) {
            return $this
                ->addUsingAlias(LnkOperationsContactsMailPeer::CT_ID, $contacts->getCtId(), $comparison);
        } elseif ($contacts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkOperationsContactsMailPeer::CT_ID, $contacts->toKeyValue('PrimaryKey', 'CtId'), $comparison);
        } else {
            throw new PropelException('filterByContacts() only accepts arguments of type Contacts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Contacts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkOperationsContactsMailQuery The current query, for fluid interface
     */
    public function joinContacts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Contacts');

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
            $this->addJoinObject($join, 'Contacts');
        }

        return $this;
    }

    /**
     * Use the Contacts relation Contacts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContactsQuery A secondary query class using the current class as primary query
     */
    public function useContactsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinContacts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Contacts', 'ContactsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   LnkOperationsContactsMail $lnkOperationsContactsMail Object to remove from the list of results
     *
     * @return LnkOperationsContactsMailQuery The current query, for fluid interface
     */
    public function prune($lnkOperationsContactsMail = null)
    {
        if ($lnkOperationsContactsMail) {
            $this->addUsingAlias(LnkOperationsContactsMailPeer::ID_LNK_OP_CONTACT_MAIL, $lnkOperationsContactsMail->getIdLnkOpContactMail(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
