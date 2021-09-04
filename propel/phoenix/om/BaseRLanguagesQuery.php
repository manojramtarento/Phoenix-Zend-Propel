<?php


/**
 * Base class that represents a query for the 'r_languages' table.
 *
 *
 *
 * @method RLanguagesQuery orderByRLangCode($order = Criteria::ASC) Order by the r_lang_code column
 * @method RLanguagesQuery orderByRLangLibelle($order = Criteria::ASC) Order by the r_lang_libelle column
 * @method RLanguagesQuery orderByRLangHasTraductionDevis($order = Criteria::ASC) Order by the r_lang_has_traduction_devis column
 *
 * @method RLanguagesQuery groupByRLangCode() Group by the r_lang_code column
 * @method RLanguagesQuery groupByRLangLibelle() Group by the r_lang_libelle column
 * @method RLanguagesQuery groupByRLangHasTraductionDevis() Group by the r_lang_has_traduction_devis column
 *
 * @method RLanguagesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RLanguagesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RLanguagesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RLanguagesQuery leftJoinClientFactureOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientFactureOptions relation
 * @method RLanguagesQuery rightJoinClientFactureOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientFactureOptions relation
 * @method RLanguagesQuery innerJoinClientFactureOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientFactureOptions relation
 *
 * @method RLanguagesQuery leftJoinRCultures($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCultures relation
 * @method RLanguagesQuery rightJoinRCultures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCultures relation
 * @method RLanguagesQuery innerJoinRCultures($relationAlias = null) Adds a INNER JOIN clause to the query using the RCultures relation
 *
 * @method RLanguages findOne(PropelPDO $con = null) Return the first RLanguages matching the query
 * @method RLanguages findOneOrCreate(PropelPDO $con = null) Return the first RLanguages matching the query, or a new RLanguages object populated from the query conditions when no match is found
 *
 * @method RLanguages findOneByRLangLibelle(string $r_lang_libelle) Return the first RLanguages filtered by the r_lang_libelle column
 * @method RLanguages findOneByRLangHasTraductionDevis(boolean $r_lang_has_traduction_devis) Return the first RLanguages filtered by the r_lang_has_traduction_devis column
 *
 * @method array findByRLangCode(string $r_lang_code) Return RLanguages objects filtered by the r_lang_code column
 * @method array findByRLangLibelle(string $r_lang_libelle) Return RLanguages objects filtered by the r_lang_libelle column
 * @method array findByRLangHasTraductionDevis(boolean $r_lang_has_traduction_devis) Return RLanguages objects filtered by the r_lang_has_traduction_devis column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRLanguagesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRLanguagesQuery object.
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
            $modelName = 'RLanguages';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RLanguagesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RLanguagesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RLanguagesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RLanguagesQuery) {
            return $criteria;
        }
        $query = new RLanguagesQuery(null, null, $modelAlias);

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
     * @return   RLanguages|RLanguages[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RLanguagesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RLanguagesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RLanguages A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRLangCode($key, $con = null)
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
     * @return                 RLanguages A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_lang_code`, `r_lang_libelle`, `r_lang_has_traduction_devis` FROM `r_languages` WHERE `r_lang_code` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new RLanguages();
            $obj->hydrate($row);
            RLanguagesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RLanguages|RLanguages[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RLanguages[]|mixed the list of results, formatted by the current formatter
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
     * @return RLanguagesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RLanguagesPeer::R_LANG_CODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RLanguagesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RLanguagesPeer::R_LANG_CODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_lang_code column
     *
     * Example usage:
     * <code>
     * $query->filterByRLangCode('fooValue');   // WHERE r_lang_code = 'fooValue'
     * $query->filterByRLangCode('%fooValue%'); // WHERE r_lang_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rLangCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RLanguagesQuery The current query, for fluid interface
     */
    public function filterByRLangCode($rLangCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rLangCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rLangCode)) {
                $rLangCode = str_replace('*', '%', $rLangCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RLanguagesPeer::R_LANG_CODE, $rLangCode, $comparison);
    }

    /**
     * Filter the query on the r_lang_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRLangLibelle('fooValue');   // WHERE r_lang_libelle = 'fooValue'
     * $query->filterByRLangLibelle('%fooValue%'); // WHERE r_lang_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rLangLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RLanguagesQuery The current query, for fluid interface
     */
    public function filterByRLangLibelle($rLangLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rLangLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rLangLibelle)) {
                $rLangLibelle = str_replace('*', '%', $rLangLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RLanguagesPeer::R_LANG_LIBELLE, $rLangLibelle, $comparison);
    }

    /**
     * Filter the query on the r_lang_has_traduction_devis column
     *
     * Example usage:
     * <code>
     * $query->filterByRLangHasTraductionDevis(true); // WHERE r_lang_has_traduction_devis = true
     * $query->filterByRLangHasTraductionDevis('yes'); // WHERE r_lang_has_traduction_devis = true
     * </code>
     *
     * @param     boolean|string $rLangHasTraductionDevis The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RLanguagesQuery The current query, for fluid interface
     */
    public function filterByRLangHasTraductionDevis($rLangHasTraductionDevis = null, $comparison = null)
    {
        if (is_string($rLangHasTraductionDevis)) {
            $rLangHasTraductionDevis = in_array(strtolower($rLangHasTraductionDevis), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RLanguagesPeer::R_LANG_HAS_TRADUCTION_DEVIS, $rLangHasTraductionDevis, $comparison);
    }

    /**
     * Filter the query by a related ClientFactureOptions object
     *
     * @param   ClientFactureOptions|PropelObjectCollection $clientFactureOptions  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RLanguagesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientFactureOptions($clientFactureOptions, $comparison = null)
    {
        if ($clientFactureOptions instanceof ClientFactureOptions) {
            return $this
                ->addUsingAlias(RLanguagesPeer::R_LANG_CODE, $clientFactureOptions->getClFactLang(), $comparison);
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
     * @return RLanguagesQuery The current query, for fluid interface
     */
    public function joinClientFactureOptions($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useClientFactureOptionsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClientFactureOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientFactureOptions', 'ClientFactureOptionsQuery');
    }

    /**
     * Filter the query by a related RCultures object
     *
     * @param   RCultures|PropelObjectCollection $rCultures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RLanguagesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCultures($rCultures, $comparison = null)
    {
        if ($rCultures instanceof RCultures) {
            return $this
                ->addUsingAlias(RLanguagesPeer::R_LANG_CODE, $rCultures->getRCultureLanguageCode(), $comparison);
        } elseif ($rCultures instanceof PropelObjectCollection) {
            return $this
                ->useRCulturesQuery()
                ->filterByPrimaryKeys($rCultures->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRCultures() only accepts arguments of type RCultures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RCultures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RLanguagesQuery The current query, for fluid interface
     */
    public function joinRCultures($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RCultures');

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
            $this->addJoinObject($join, 'RCultures');
        }

        return $this;
    }

    /**
     * Use the RCultures relation RCultures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCulturesQuery A secondary query class using the current class as primary query
     */
    public function useRCulturesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRCultures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RCultures', 'RCulturesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RLanguages $rLanguages Object to remove from the list of results
     *
     * @return RLanguagesQuery The current query, for fluid interface
     */
    public function prune($rLanguages = null)
    {
        if ($rLanguages) {
            $this->addUsingAlias(RLanguagesPeer::R_LANG_CODE, $rLanguages->getRLangCode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
