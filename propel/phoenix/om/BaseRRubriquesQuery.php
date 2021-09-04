<?php


/**
 * Base class that represents a query for the 'r_rubriques' table.
 *
 *
 *
 * @method RRubriquesQuery orderByRRubId($order = Criteria::ASC) Order by the r_rub_id column
 * @method RRubriquesQuery orderByRRubLibelle($order = Criteria::ASC) Order by the r_rub_libelle column
 * @method RRubriquesQuery orderByRRubLibelleEn($order = Criteria::ASC) Order by the r_rub_libelle_en column
 * @method RRubriquesQuery orderByRRubTypeId($order = Criteria::ASC) Order by the r_rub_type_id column
 * @method RRubriquesQuery orderByRTvaTypeId($order = Criteria::ASC) Order by the r_tva_type_id column
 * @method RRubriquesQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method RRubriquesQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 *
 * @method RRubriquesQuery groupByRRubId() Group by the r_rub_id column
 * @method RRubriquesQuery groupByRRubLibelle() Group by the r_rub_libelle column
 * @method RRubriquesQuery groupByRRubLibelleEn() Group by the r_rub_libelle_en column
 * @method RRubriquesQuery groupByRRubTypeId() Group by the r_rub_type_id column
 * @method RRubriquesQuery groupByRTvaTypeId() Group by the r_tva_type_id column
 * @method RRubriquesQuery groupByActif() Group by the actif column
 * @method RRubriquesQuery groupByDateCreate() Group by the date_create column
 *
 * @method RRubriquesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RRubriquesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RRubriquesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RRubriquesQuery leftJoinRTvaType($relationAlias = null) Adds a LEFT JOIN clause to the query using the RTvaType relation
 * @method RRubriquesQuery rightJoinRTvaType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RTvaType relation
 * @method RRubriquesQuery innerJoinRTvaType($relationAlias = null) Adds a INNER JOIN clause to the query using the RTvaType relation
 *
 * @method RRubriquesQuery leftJoinRRubriquesType($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRubriquesType relation
 * @method RRubriquesQuery rightJoinRRubriquesType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRubriquesType relation
 * @method RRubriquesQuery innerJoinRRubriquesType($relationAlias = null) Adds a INNER JOIN clause to the query using the RRubriquesType relation
 *
 * @method RRubriques findOne(PropelPDO $con = null) Return the first RRubriques matching the query
 * @method RRubriques findOneOrCreate(PropelPDO $con = null) Return the first RRubriques matching the query, or a new RRubriques object populated from the query conditions when no match is found
 *
 * @method RRubriques findOneByRRubLibelle(string $r_rub_libelle) Return the first RRubriques filtered by the r_rub_libelle column
 * @method RRubriques findOneByRRubLibelleEn(string $r_rub_libelle_en) Return the first RRubriques filtered by the r_rub_libelle_en column
 * @method RRubriques findOneByRRubTypeId(int $r_rub_type_id) Return the first RRubriques filtered by the r_rub_type_id column
 * @method RRubriques findOneByRTvaTypeId(int $r_tva_type_id) Return the first RRubriques filtered by the r_tva_type_id column
 * @method RRubriques findOneByActif(boolean $actif) Return the first RRubriques filtered by the actif column
 * @method RRubriques findOneByDateCreate(string $date_create) Return the first RRubriques filtered by the date_create column
 *
 * @method array findByRRubId(int $r_rub_id) Return RRubriques objects filtered by the r_rub_id column
 * @method array findByRRubLibelle(string $r_rub_libelle) Return RRubriques objects filtered by the r_rub_libelle column
 * @method array findByRRubLibelleEn(string $r_rub_libelle_en) Return RRubriques objects filtered by the r_rub_libelle_en column
 * @method array findByRRubTypeId(int $r_rub_type_id) Return RRubriques objects filtered by the r_rub_type_id column
 * @method array findByRTvaTypeId(int $r_tva_type_id) Return RRubriques objects filtered by the r_tva_type_id column
 * @method array findByActif(boolean $actif) Return RRubriques objects filtered by the actif column
 * @method array findByDateCreate(string $date_create) Return RRubriques objects filtered by the date_create column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRRubriquesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRRubriquesQuery object.
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
            $modelName = 'RRubriques';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RRubriquesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RRubriquesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RRubriquesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RRubriquesQuery) {
            return $criteria;
        }
        $query = new RRubriquesQuery(null, null, $modelAlias);

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
     * @return   RRubriques|RRubriques[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RRubriquesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RRubriquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RRubriques A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRRubId($key, $con = null)
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
     * @return                 RRubriques A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_rub_id`, `r_rub_libelle`, `r_rub_libelle_en`, `r_rub_type_id`, `r_tva_type_id`, `actif`, `date_create` FROM `r_rubriques` WHERE `r_rub_id` = :p0';
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
            $obj = new RRubriques();
            $obj->hydrate($row);
            RRubriquesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RRubriques|RRubriques[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RRubriques[]|mixed the list of results, formatted by the current formatter
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
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RRubriquesPeer::R_RUB_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RRubriquesPeer::R_RUB_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_rub_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRubId(1234); // WHERE r_rub_id = 1234
     * $query->filterByRRubId(array(12, 34)); // WHERE r_rub_id IN (12, 34)
     * $query->filterByRRubId(array('min' => 12)); // WHERE r_rub_id >= 12
     * $query->filterByRRubId(array('max' => 12)); // WHERE r_rub_id <= 12
     * </code>
     *
     * @param     mixed $rRubId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function filterByRRubId($rRubId = null, $comparison = null)
    {
        if (is_array($rRubId)) {
            $useMinMax = false;
            if (isset($rRubId['min'])) {
                $this->addUsingAlias(RRubriquesPeer::R_RUB_ID, $rRubId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRubId['max'])) {
                $this->addUsingAlias(RRubriquesPeer::R_RUB_ID, $rRubId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRubriquesPeer::R_RUB_ID, $rRubId, $comparison);
    }

    /**
     * Filter the query on the r_rub_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRRubLibelle('fooValue');   // WHERE r_rub_libelle = 'fooValue'
     * $query->filterByRRubLibelle('%fooValue%'); // WHERE r_rub_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rRubLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function filterByRRubLibelle($rRubLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rRubLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rRubLibelle)) {
                $rRubLibelle = str_replace('*', '%', $rRubLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RRubriquesPeer::R_RUB_LIBELLE, $rRubLibelle, $comparison);
    }

    /**
     * Filter the query on the r_rub_libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByRRubLibelleEn('fooValue');   // WHERE r_rub_libelle_en = 'fooValue'
     * $query->filterByRRubLibelleEn('%fooValue%'); // WHERE r_rub_libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rRubLibelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function filterByRRubLibelleEn($rRubLibelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rRubLibelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rRubLibelleEn)) {
                $rRubLibelleEn = str_replace('*', '%', $rRubLibelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RRubriquesPeer::R_RUB_LIBELLE_EN, $rRubLibelleEn, $comparison);
    }

    /**
     * Filter the query on the r_rub_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRRubTypeId(1234); // WHERE r_rub_type_id = 1234
     * $query->filterByRRubTypeId(array(12, 34)); // WHERE r_rub_type_id IN (12, 34)
     * $query->filterByRRubTypeId(array('min' => 12)); // WHERE r_rub_type_id >= 12
     * $query->filterByRRubTypeId(array('max' => 12)); // WHERE r_rub_type_id <= 12
     * </code>
     *
     * @see       filterByRRubriquesType()
     *
     * @param     mixed $rRubTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function filterByRRubTypeId($rRubTypeId = null, $comparison = null)
    {
        if (is_array($rRubTypeId)) {
            $useMinMax = false;
            if (isset($rRubTypeId['min'])) {
                $this->addUsingAlias(RRubriquesPeer::R_RUB_TYPE_ID, $rRubTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRubTypeId['max'])) {
                $this->addUsingAlias(RRubriquesPeer::R_RUB_TYPE_ID, $rRubTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRubriquesPeer::R_RUB_TYPE_ID, $rRubTypeId, $comparison);
    }

    /**
     * Filter the query on the r_tva_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaTypeId(1234); // WHERE r_tva_type_id = 1234
     * $query->filterByRTvaTypeId(array(12, 34)); // WHERE r_tva_type_id IN (12, 34)
     * $query->filterByRTvaTypeId(array('min' => 12)); // WHERE r_tva_type_id >= 12
     * $query->filterByRTvaTypeId(array('max' => 12)); // WHERE r_tva_type_id <= 12
     * </code>
     *
     * @see       filterByRTvaType()
     *
     * @param     mixed $rTvaTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function filterByRTvaTypeId($rTvaTypeId = null, $comparison = null)
    {
        if (is_array($rTvaTypeId)) {
            $useMinMax = false;
            if (isset($rTvaTypeId['min'])) {
                $this->addUsingAlias(RRubriquesPeer::R_TVA_TYPE_ID, $rTvaTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rTvaTypeId['max'])) {
                $this->addUsingAlias(RRubriquesPeer::R_TVA_TYPE_ID, $rTvaTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRubriquesPeer::R_TVA_TYPE_ID, $rTvaTypeId, $comparison);
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
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RRubriquesPeer::ACTIF, $actif, $comparison);
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
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(RRubriquesPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(RRubriquesPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RRubriquesPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query by a related RTvaType object
     *
     * @param   RTvaType|PropelObjectCollection $rTvaType The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRubriquesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRTvaType($rTvaType, $comparison = null)
    {
        if ($rTvaType instanceof RTvaType) {
            return $this
                ->addUsingAlias(RRubriquesPeer::R_TVA_TYPE_ID, $rTvaType->getRTvaId(), $comparison);
        } elseif ($rTvaType instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RRubriquesPeer::R_TVA_TYPE_ID, $rTvaType->toKeyValue('PrimaryKey', 'RTvaId'), $comparison);
        } else {
            throw new PropelException('filterByRTvaType() only accepts arguments of type RTvaType or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RTvaType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function joinRTvaType($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RTvaType');

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
            $this->addJoinObject($join, 'RTvaType');
        }

        return $this;
    }

    /**
     * Use the RTvaType relation RTvaType object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RTvaTypeQuery A secondary query class using the current class as primary query
     */
    public function useRTvaTypeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRTvaType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RTvaType', 'RTvaTypeQuery');
    }

    /**
     * Filter the query by a related RRubriquesType object
     *
     * @param   RRubriquesType|PropelObjectCollection $rRubriquesType The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RRubriquesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRubriquesType($rRubriquesType, $comparison = null)
    {
        if ($rRubriquesType instanceof RRubriquesType) {
            return $this
                ->addUsingAlias(RRubriquesPeer::R_RUB_TYPE_ID, $rRubriquesType->getRubriqueTypeId(), $comparison);
        } elseif ($rRubriquesType instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RRubriquesPeer::R_RUB_TYPE_ID, $rRubriquesType->toKeyValue('PrimaryKey', 'RubriqueTypeId'), $comparison);
        } else {
            throw new PropelException('filterByRRubriquesType() only accepts arguments of type RRubriquesType or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRubriquesType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function joinRRubriquesType($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRubriquesType');

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
            $this->addJoinObject($join, 'RRubriquesType');
        }

        return $this;
    }

    /**
     * Use the RRubriquesType relation RRubriquesType object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRubriquesTypeQuery A secondary query class using the current class as primary query
     */
    public function useRRubriquesTypeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRRubriquesType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRubriquesType', 'RRubriquesTypeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RRubriques $rRubriques Object to remove from the list of results
     *
     * @return RRubriquesQuery The current query, for fluid interface
     */
    public function prune($rRubriques = null)
    {
        if ($rRubriques) {
            $this->addUsingAlias(RRubriquesPeer::R_RUB_ID, $rRubriques->getRRubId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
