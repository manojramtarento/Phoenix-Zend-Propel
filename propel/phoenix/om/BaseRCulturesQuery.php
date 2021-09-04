<?php


/**
 * Base class that represents a query for the 'r_cultures' table.
 *
 *
 *
 * @method RCulturesQuery orderByRCultureId($order = Criteria::ASC) Order by the r_culture_id column
 * @method RCulturesQuery orderByRCultureCode($order = Criteria::ASC) Order by the r_culture_code column
 * @method RCulturesQuery orderByRCultureLabel($order = Criteria::ASC) Order by the r_culture_label column
 * @method RCulturesQuery orderByRCultureLanguageCode($order = Criteria::ASC) Order by the r_culture_language_code column
 * @method RCulturesQuery orderByRCultureActif($order = Criteria::ASC) Order by the r_culture_actif column
 *
 * @method RCulturesQuery groupByRCultureId() Group by the r_culture_id column
 * @method RCulturesQuery groupByRCultureCode() Group by the r_culture_code column
 * @method RCulturesQuery groupByRCultureLabel() Group by the r_culture_label column
 * @method RCulturesQuery groupByRCultureLanguageCode() Group by the r_culture_language_code column
 * @method RCulturesQuery groupByRCultureActif() Group by the r_culture_actif column
 *
 * @method RCulturesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RCulturesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RCulturesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RCulturesQuery leftJoinRLanguages($relationAlias = null) Adds a LEFT JOIN clause to the query using the RLanguages relation
 * @method RCulturesQuery rightJoinRLanguages($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RLanguages relation
 * @method RCulturesQuery innerJoinRLanguages($relationAlias = null) Adds a INNER JOIN clause to the query using the RLanguages relation
 *
 * @method RCulturesQuery leftJoinLnkRCountryRCultures($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkRCountryRCultures relation
 * @method RCulturesQuery rightJoinLnkRCountryRCultures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkRCountryRCultures relation
 * @method RCulturesQuery innerJoinLnkRCountryRCultures($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkRCountryRCultures relation
 *
 * @method RCulturesQuery leftJoinROperationTypeSubTplCultures($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSubTplCultures relation
 * @method RCulturesQuery rightJoinROperationTypeSubTplCultures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSubTplCultures relation
 * @method RCulturesQuery innerJoinROperationTypeSubTplCultures($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSubTplCultures relation
 *
 * @method RCultures findOne(PropelPDO $con = null) Return the first RCultures matching the query
 * @method RCultures findOneOrCreate(PropelPDO $con = null) Return the first RCultures matching the query, or a new RCultures object populated from the query conditions when no match is found
 *
 * @method RCultures findOneByRCultureCode(string $r_culture_code) Return the first RCultures filtered by the r_culture_code column
 * @method RCultures findOneByRCultureLabel(string $r_culture_label) Return the first RCultures filtered by the r_culture_label column
 * @method RCultures findOneByRCultureLanguageCode(string $r_culture_language_code) Return the first RCultures filtered by the r_culture_language_code column
 * @method RCultures findOneByRCultureActif(int $r_culture_actif) Return the first RCultures filtered by the r_culture_actif column
 *
 * @method array findByRCultureId(int $r_culture_id) Return RCultures objects filtered by the r_culture_id column
 * @method array findByRCultureCode(string $r_culture_code) Return RCultures objects filtered by the r_culture_code column
 * @method array findByRCultureLabel(string $r_culture_label) Return RCultures objects filtered by the r_culture_label column
 * @method array findByRCultureLanguageCode(string $r_culture_language_code) Return RCultures objects filtered by the r_culture_language_code column
 * @method array findByRCultureActif(int $r_culture_actif) Return RCultures objects filtered by the r_culture_actif column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRCulturesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRCulturesQuery object.
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
            $modelName = 'RCultures';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RCulturesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RCulturesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RCulturesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RCulturesQuery) {
            return $criteria;
        }
        $query = new RCulturesQuery(null, null, $modelAlias);

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
     * @return   RCultures|RCultures[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RCulturesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RCulturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RCultures A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRCultureId($key, $con = null)
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
     * @return                 RCultures A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_culture_id`, `r_culture_code`, `r_culture_label`, `r_culture_language_code`, `r_culture_actif` FROM `r_cultures` WHERE `r_culture_id` = :p0';
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
            $obj = new RCultures();
            $obj->hydrate($row);
            RCulturesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RCultures|RCultures[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RCultures[]|mixed the list of results, formatted by the current formatter
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
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RCulturesPeer::R_CULTURE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RCulturesPeer::R_CULTURE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_culture_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRCultureId(1234); // WHERE r_culture_id = 1234
     * $query->filterByRCultureId(array(12, 34)); // WHERE r_culture_id IN (12, 34)
     * $query->filterByRCultureId(array('min' => 12)); // WHERE r_culture_id >= 12
     * $query->filterByRCultureId(array('max' => 12)); // WHERE r_culture_id <= 12
     * </code>
     *
     * @param     mixed $rCultureId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function filterByRCultureId($rCultureId = null, $comparison = null)
    {
        if (is_array($rCultureId)) {
            $useMinMax = false;
            if (isset($rCultureId['min'])) {
                $this->addUsingAlias(RCulturesPeer::R_CULTURE_ID, $rCultureId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCultureId['max'])) {
                $this->addUsingAlias(RCulturesPeer::R_CULTURE_ID, $rCultureId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCulturesPeer::R_CULTURE_ID, $rCultureId, $comparison);
    }

    /**
     * Filter the query on the r_culture_code column
     *
     * Example usage:
     * <code>
     * $query->filterByRCultureCode('fooValue');   // WHERE r_culture_code = 'fooValue'
     * $query->filterByRCultureCode('%fooValue%'); // WHERE r_culture_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCultureCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function filterByRCultureCode($rCultureCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCultureCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rCultureCode)) {
                $rCultureCode = str_replace('*', '%', $rCultureCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCulturesPeer::R_CULTURE_CODE, $rCultureCode, $comparison);
    }

    /**
     * Filter the query on the r_culture_label column
     *
     * Example usage:
     * <code>
     * $query->filterByRCultureLabel('fooValue');   // WHERE r_culture_label = 'fooValue'
     * $query->filterByRCultureLabel('%fooValue%'); // WHERE r_culture_label LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCultureLabel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function filterByRCultureLabel($rCultureLabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCultureLabel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rCultureLabel)) {
                $rCultureLabel = str_replace('*', '%', $rCultureLabel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCulturesPeer::R_CULTURE_LABEL, $rCultureLabel, $comparison);
    }

    /**
     * Filter the query on the r_culture_language_code column
     *
     * Example usage:
     * <code>
     * $query->filterByRCultureLanguageCode('fooValue');   // WHERE r_culture_language_code = 'fooValue'
     * $query->filterByRCultureLanguageCode('%fooValue%'); // WHERE r_culture_language_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rCultureLanguageCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function filterByRCultureLanguageCode($rCultureLanguageCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rCultureLanguageCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rCultureLanguageCode)) {
                $rCultureLanguageCode = str_replace('*', '%', $rCultureLanguageCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RCulturesPeer::R_CULTURE_LANGUAGE_CODE, $rCultureLanguageCode, $comparison);
    }

    /**
     * Filter the query on the r_culture_actif column
     *
     * Example usage:
     * <code>
     * $query->filterByRCultureActif(1234); // WHERE r_culture_actif = 1234
     * $query->filterByRCultureActif(array(12, 34)); // WHERE r_culture_actif IN (12, 34)
     * $query->filterByRCultureActif(array('min' => 12)); // WHERE r_culture_actif >= 12
     * $query->filterByRCultureActif(array('max' => 12)); // WHERE r_culture_actif <= 12
     * </code>
     *
     * @param     mixed $rCultureActif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function filterByRCultureActif($rCultureActif = null, $comparison = null)
    {
        if (is_array($rCultureActif)) {
            $useMinMax = false;
            if (isset($rCultureActif['min'])) {
                $this->addUsingAlias(RCulturesPeer::R_CULTURE_ACTIF, $rCultureActif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rCultureActif['max'])) {
                $this->addUsingAlias(RCulturesPeer::R_CULTURE_ACTIF, $rCultureActif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RCulturesPeer::R_CULTURE_ACTIF, $rCultureActif, $comparison);
    }

    /**
     * Filter the query by a related RLanguages object
     *
     * @param   RLanguages|PropelObjectCollection $rLanguages The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCulturesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRLanguages($rLanguages, $comparison = null)
    {
        if ($rLanguages instanceof RLanguages) {
            return $this
                ->addUsingAlias(RCulturesPeer::R_CULTURE_LANGUAGE_CODE, $rLanguages->getRLangCode(), $comparison);
        } elseif ($rLanguages instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RCulturesPeer::R_CULTURE_LANGUAGE_CODE, $rLanguages->toKeyValue('PrimaryKey', 'RLangCode'), $comparison);
        } else {
            throw new PropelException('filterByRLanguages() only accepts arguments of type RLanguages or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RLanguages relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function joinRLanguages($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RLanguages');

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
            $this->addJoinObject($join, 'RLanguages');
        }

        return $this;
    }

    /**
     * Use the RLanguages relation RLanguages object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RLanguagesQuery A secondary query class using the current class as primary query
     */
    public function useRLanguagesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRLanguages($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RLanguages', 'RLanguagesQuery');
    }

    /**
     * Filter the query by a related LnkRCountryRCultures object
     *
     * @param   LnkRCountryRCultures|PropelObjectCollection $lnkRCountryRCultures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCulturesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkRCountryRCultures($lnkRCountryRCultures, $comparison = null)
    {
        if ($lnkRCountryRCultures instanceof LnkRCountryRCultures) {
            return $this
                ->addUsingAlias(RCulturesPeer::R_CULTURE_ID, $lnkRCountryRCultures->getLnkRCountryRCultureRCultureId(), $comparison);
        } elseif ($lnkRCountryRCultures instanceof PropelObjectCollection) {
            return $this
                ->useLnkRCountryRCulturesQuery()
                ->filterByPrimaryKeys($lnkRCountryRCultures->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkRCountryRCultures() only accepts arguments of type LnkRCountryRCultures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkRCountryRCultures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function joinLnkRCountryRCultures($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkRCountryRCultures');

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
            $this->addJoinObject($join, 'LnkRCountryRCultures');
        }

        return $this;
    }

    /**
     * Use the LnkRCountryRCultures relation LnkRCountryRCultures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkRCountryRCulturesQuery A secondary query class using the current class as primary query
     */
    public function useLnkRCountryRCulturesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLnkRCountryRCultures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkRCountryRCultures', 'LnkRCountryRCulturesQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTplCultures object
     *
     * @param   ROperationTypeSubTplCultures|PropelObjectCollection $rOperationTypeSubTplCultures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RCulturesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSubTplCultures($rOperationTypeSubTplCultures, $comparison = null)
    {
        if ($rOperationTypeSubTplCultures instanceof ROperationTypeSubTplCultures) {
            return $this
                ->addUsingAlias(RCulturesPeer::R_CULTURE_ID, $rOperationTypeSubTplCultures->getROperationTypeSubTplCultureRCultureId(), $comparison);
        } elseif ($rOperationTypeSubTplCultures instanceof PropelObjectCollection) {
            return $this
                ->useROperationTypeSubTplCulturesQuery()
                ->filterByPrimaryKeys($rOperationTypeSubTplCultures->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByROperationTypeSubTplCultures() only accepts arguments of type ROperationTypeSubTplCultures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSubTplCultures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function joinROperationTypeSubTplCultures($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSubTplCultures');

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
            $this->addJoinObject($join, 'ROperationTypeSubTplCultures');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSubTplCultures relation ROperationTypeSubTplCultures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplCulturesQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubTplCulturesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSubTplCultures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSubTplCultures', 'ROperationTypeSubTplCulturesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RCultures $rCultures Object to remove from the list of results
     *
     * @return RCulturesQuery The current query, for fluid interface
     */
    public function prune($rCultures = null)
    {
        if ($rCultures) {
            $this->addUsingAlias(RCulturesPeer::R_CULTURE_ID, $rCultures->getRCultureId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
