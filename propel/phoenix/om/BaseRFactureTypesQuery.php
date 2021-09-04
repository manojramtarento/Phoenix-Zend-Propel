<?php


/**
 * Base class that represents a query for the 'r_facture_types' table.
 *
 *
 *
 * @method RFactureTypesQuery orderByRFactTypeId($order = Criteria::ASC) Order by the r_fact_type_id column
 * @method RFactureTypesQuery orderByRFactTypeLibelle($order = Criteria::ASC) Order by the r_fact_type_libelle column
 * @method RFactureTypesQuery orderByRFactTypeLibelleDetail($order = Criteria::ASC) Order by the r_fact_type_libelle_detail column
 * @method RFactureTypesQuery orderByRFactTypeLibelleDetailEn($order = Criteria::ASC) Order by the r_fact_type_libelle_detail_en column
 * @method RFactureTypesQuery orderByRFactCalcId($order = Criteria::ASC) Order by the r_fact_calc_id column
 * @method RFactureTypesQuery orderByRFactPresId($order = Criteria::ASC) Order by the r_fact_pres_id column
 *
 * @method RFactureTypesQuery groupByRFactTypeId() Group by the r_fact_type_id column
 * @method RFactureTypesQuery groupByRFactTypeLibelle() Group by the r_fact_type_libelle column
 * @method RFactureTypesQuery groupByRFactTypeLibelleDetail() Group by the r_fact_type_libelle_detail column
 * @method RFactureTypesQuery groupByRFactTypeLibelleDetailEn() Group by the r_fact_type_libelle_detail_en column
 * @method RFactureTypesQuery groupByRFactCalcId() Group by the r_fact_calc_id column
 * @method RFactureTypesQuery groupByRFactPresId() Group by the r_fact_pres_id column
 *
 * @method RFactureTypesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RFactureTypesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RFactureTypesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RFactureTypesQuery leftJoinRFactureCalculs($relationAlias = null) Adds a LEFT JOIN clause to the query using the RFactureCalculs relation
 * @method RFactureTypesQuery rightJoinRFactureCalculs($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RFactureCalculs relation
 * @method RFactureTypesQuery innerJoinRFactureCalculs($relationAlias = null) Adds a INNER JOIN clause to the query using the RFactureCalculs relation
 *
 * @method RFactureTypesQuery leftJoinRFacturePresentations($relationAlias = null) Adds a LEFT JOIN clause to the query using the RFacturePresentations relation
 * @method RFactureTypesQuery rightJoinRFacturePresentations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RFacturePresentations relation
 * @method RFactureTypesQuery innerJoinRFacturePresentations($relationAlias = null) Adds a INNER JOIN clause to the query using the RFacturePresentations relation
 *
 * @method RFactureTypesQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method RFactureTypesQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method RFactureTypesQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method RFactureTypesQuery leftJoinPlanFacturationDetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the PlanFacturationDetails relation
 * @method RFactureTypesQuery rightJoinPlanFacturationDetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PlanFacturationDetails relation
 * @method RFactureTypesQuery innerJoinPlanFacturationDetails($relationAlias = null) Adds a INNER JOIN clause to the query using the PlanFacturationDetails relation
 *
 * @method RFactureTypesQuery leftJoinFactureEditionHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureEditionHistory relation
 * @method RFactureTypesQuery rightJoinFactureEditionHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureEditionHistory relation
 * @method RFactureTypesQuery innerJoinFactureEditionHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureEditionHistory relation
 *
 * @method RFactureTypes findOne(PropelPDO $con = null) Return the first RFactureTypes matching the query
 * @method RFactureTypes findOneOrCreate(PropelPDO $con = null) Return the first RFactureTypes matching the query, or a new RFactureTypes object populated from the query conditions when no match is found
 *
 * @method RFactureTypes findOneByRFactTypeLibelle(string $r_fact_type_libelle) Return the first RFactureTypes filtered by the r_fact_type_libelle column
 * @method RFactureTypes findOneByRFactTypeLibelleDetail(string $r_fact_type_libelle_detail) Return the first RFactureTypes filtered by the r_fact_type_libelle_detail column
 * @method RFactureTypes findOneByRFactTypeLibelleDetailEn(string $r_fact_type_libelle_detail_en) Return the first RFactureTypes filtered by the r_fact_type_libelle_detail_en column
 * @method RFactureTypes findOneByRFactCalcId(int $r_fact_calc_id) Return the first RFactureTypes filtered by the r_fact_calc_id column
 * @method RFactureTypes findOneByRFactPresId(int $r_fact_pres_id) Return the first RFactureTypes filtered by the r_fact_pres_id column
 *
 * @method array findByRFactTypeId(int $r_fact_type_id) Return RFactureTypes objects filtered by the r_fact_type_id column
 * @method array findByRFactTypeLibelle(string $r_fact_type_libelle) Return RFactureTypes objects filtered by the r_fact_type_libelle column
 * @method array findByRFactTypeLibelleDetail(string $r_fact_type_libelle_detail) Return RFactureTypes objects filtered by the r_fact_type_libelle_detail column
 * @method array findByRFactTypeLibelleDetailEn(string $r_fact_type_libelle_detail_en) Return RFactureTypes objects filtered by the r_fact_type_libelle_detail_en column
 * @method array findByRFactCalcId(int $r_fact_calc_id) Return RFactureTypes objects filtered by the r_fact_calc_id column
 * @method array findByRFactPresId(int $r_fact_pres_id) Return RFactureTypes objects filtered by the r_fact_pres_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRFactureTypesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRFactureTypesQuery object.
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
            $modelName = 'RFactureTypes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RFactureTypesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RFactureTypesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RFactureTypesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RFactureTypesQuery) {
            return $criteria;
        }
        $query = new RFactureTypesQuery(null, null, $modelAlias);

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
     * @return   RFactureTypes|RFactureTypes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RFactureTypesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RFactureTypesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RFactureTypes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRFactTypeId($key, $con = null)
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
     * @return                 RFactureTypes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_fact_type_id`, `r_fact_type_libelle`, `r_fact_type_libelle_detail`, `r_fact_type_libelle_detail_en`, `r_fact_calc_id`, `r_fact_pres_id` FROM `r_facture_types` WHERE `r_fact_type_id` = :p0';
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
            $obj = new RFactureTypes();
            $obj->hydrate($row);
            RFactureTypesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RFactureTypes|RFactureTypes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RFactureTypes[]|mixed the list of results, formatted by the current formatter
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
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_fact_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactTypeId(1234); // WHERE r_fact_type_id = 1234
     * $query->filterByRFactTypeId(array(12, 34)); // WHERE r_fact_type_id IN (12, 34)
     * $query->filterByRFactTypeId(array('min' => 12)); // WHERE r_fact_type_id >= 12
     * $query->filterByRFactTypeId(array('max' => 12)); // WHERE r_fact_type_id <= 12
     * </code>
     *
     * @param     mixed $rFactTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function filterByRFactTypeId($rFactTypeId = null, $comparison = null)
    {
        if (is_array($rFactTypeId)) {
            $useMinMax = false;
            if (isset($rFactTypeId['min'])) {
                $this->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_ID, $rFactTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactTypeId['max'])) {
                $this->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_ID, $rFactTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_ID, $rFactTypeId, $comparison);
    }

    /**
     * Filter the query on the r_fact_type_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactTypeLibelle('fooValue');   // WHERE r_fact_type_libelle = 'fooValue'
     * $query->filterByRFactTypeLibelle('%fooValue%'); // WHERE r_fact_type_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rFactTypeLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function filterByRFactTypeLibelle($rFactTypeLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rFactTypeLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rFactTypeLibelle)) {
                $rFactTypeLibelle = str_replace('*', '%', $rFactTypeLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_LIBELLE, $rFactTypeLibelle, $comparison);
    }

    /**
     * Filter the query on the r_fact_type_libelle_detail column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactTypeLibelleDetail('fooValue');   // WHERE r_fact_type_libelle_detail = 'fooValue'
     * $query->filterByRFactTypeLibelleDetail('%fooValue%'); // WHERE r_fact_type_libelle_detail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rFactTypeLibelleDetail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function filterByRFactTypeLibelleDetail($rFactTypeLibelleDetail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rFactTypeLibelleDetail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rFactTypeLibelleDetail)) {
                $rFactTypeLibelleDetail = str_replace('*', '%', $rFactTypeLibelleDetail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_LIBELLE_DETAIL, $rFactTypeLibelleDetail, $comparison);
    }

    /**
     * Filter the query on the r_fact_type_libelle_detail_en column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactTypeLibelleDetailEn('fooValue');   // WHERE r_fact_type_libelle_detail_en = 'fooValue'
     * $query->filterByRFactTypeLibelleDetailEn('%fooValue%'); // WHERE r_fact_type_libelle_detail_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rFactTypeLibelleDetailEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function filterByRFactTypeLibelleDetailEn($rFactTypeLibelleDetailEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rFactTypeLibelleDetailEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rFactTypeLibelleDetailEn)) {
                $rFactTypeLibelleDetailEn = str_replace('*', '%', $rFactTypeLibelleDetailEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_LIBELLE_DETAIL_EN, $rFactTypeLibelleDetailEn, $comparison);
    }

    /**
     * Filter the query on the r_fact_calc_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactCalcId(1234); // WHERE r_fact_calc_id = 1234
     * $query->filterByRFactCalcId(array(12, 34)); // WHERE r_fact_calc_id IN (12, 34)
     * $query->filterByRFactCalcId(array('min' => 12)); // WHERE r_fact_calc_id >= 12
     * $query->filterByRFactCalcId(array('max' => 12)); // WHERE r_fact_calc_id <= 12
     * </code>
     *
     * @see       filterByRFactureCalculs()
     *
     * @param     mixed $rFactCalcId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function filterByRFactCalcId($rFactCalcId = null, $comparison = null)
    {
        if (is_array($rFactCalcId)) {
            $useMinMax = false;
            if (isset($rFactCalcId['min'])) {
                $this->addUsingAlias(RFactureTypesPeer::R_FACT_CALC_ID, $rFactCalcId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactCalcId['max'])) {
                $this->addUsingAlias(RFactureTypesPeer::R_FACT_CALC_ID, $rFactCalcId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFactureTypesPeer::R_FACT_CALC_ID, $rFactCalcId, $comparison);
    }

    /**
     * Filter the query on the r_fact_pres_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFactPresId(1234); // WHERE r_fact_pres_id = 1234
     * $query->filterByRFactPresId(array(12, 34)); // WHERE r_fact_pres_id IN (12, 34)
     * $query->filterByRFactPresId(array('min' => 12)); // WHERE r_fact_pres_id >= 12
     * $query->filterByRFactPresId(array('max' => 12)); // WHERE r_fact_pres_id <= 12
     * </code>
     *
     * @see       filterByRFacturePresentations()
     *
     * @param     mixed $rFactPresId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function filterByRFactPresId($rFactPresId = null, $comparison = null)
    {
        if (is_array($rFactPresId)) {
            $useMinMax = false;
            if (isset($rFactPresId['min'])) {
                $this->addUsingAlias(RFactureTypesPeer::R_FACT_PRES_ID, $rFactPresId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactPresId['max'])) {
                $this->addUsingAlias(RFactureTypesPeer::R_FACT_PRES_ID, $rFactPresId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFactureTypesPeer::R_FACT_PRES_ID, $rFactPresId, $comparison);
    }

    /**
     * Filter the query by a related RFactureCalculs object
     *
     * @param   RFactureCalculs|PropelObjectCollection $rFactureCalculs The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureTypesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRFactureCalculs($rFactureCalculs, $comparison = null)
    {
        if ($rFactureCalculs instanceof RFactureCalculs) {
            return $this
                ->addUsingAlias(RFactureTypesPeer::R_FACT_CALC_ID, $rFactureCalculs->getRFactCalcId(), $comparison);
        } elseif ($rFactureCalculs instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RFactureTypesPeer::R_FACT_CALC_ID, $rFactureCalculs->toKeyValue('PrimaryKey', 'RFactCalcId'), $comparison);
        } else {
            throw new PropelException('filterByRFactureCalculs() only accepts arguments of type RFactureCalculs or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RFactureCalculs relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function joinRFactureCalculs($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RFactureCalculs');

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
            $this->addJoinObject($join, 'RFactureCalculs');
        }

        return $this;
    }

    /**
     * Use the RFactureCalculs relation RFactureCalculs object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RFactureCalculsQuery A secondary query class using the current class as primary query
     */
    public function useRFactureCalculsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRFactureCalculs($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RFactureCalculs', 'RFactureCalculsQuery');
    }

    /**
     * Filter the query by a related RFacturePresentations object
     *
     * @param   RFacturePresentations|PropelObjectCollection $rFacturePresentations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureTypesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRFacturePresentations($rFacturePresentations, $comparison = null)
    {
        if ($rFacturePresentations instanceof RFacturePresentations) {
            return $this
                ->addUsingAlias(RFactureTypesPeer::R_FACT_PRES_ID, $rFacturePresentations->getRFactPresId(), $comparison);
        } elseif ($rFacturePresentations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RFactureTypesPeer::R_FACT_PRES_ID, $rFacturePresentations->toKeyValue('PrimaryKey', 'RFactPresId'), $comparison);
        } else {
            throw new PropelException('filterByRFacturePresentations() only accepts arguments of type RFacturePresentations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RFacturePresentations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function joinRFacturePresentations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RFacturePresentations');

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
            $this->addJoinObject($join, 'RFacturePresentations');
        }

        return $this;
    }

    /**
     * Use the RFacturePresentations relation RFacturePresentations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RFacturePresentationsQuery A secondary query class using the current class as primary query
     */
    public function useRFacturePresentationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRFacturePresentations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RFacturePresentations', 'RFacturePresentationsQuery');
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureTypesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_ID, $factures->getRFactTypeId(), $comparison);
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
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function joinFactures($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useFacturesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factures', 'FacturesQuery');
    }

    /**
     * Filter the query by a related PlanFacturationDetails object
     *
     * @param   PlanFacturationDetails|PropelObjectCollection $planFacturationDetails  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureTypesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlanFacturationDetails($planFacturationDetails, $comparison = null)
    {
        if ($planFacturationDetails instanceof PlanFacturationDetails) {
            return $this
                ->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_ID, $planFacturationDetails->getPfdTypeFactId(), $comparison);
        } elseif ($planFacturationDetails instanceof PropelObjectCollection) {
            return $this
                ->usePlanFacturationDetailsQuery()
                ->filterByPrimaryKeys($planFacturationDetails->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPlanFacturationDetails() only accepts arguments of type PlanFacturationDetails or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PlanFacturationDetails relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function joinPlanFacturationDetails($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PlanFacturationDetails');

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
            $this->addJoinObject($join, 'PlanFacturationDetails');
        }

        return $this;
    }

    /**
     * Use the PlanFacturationDetails relation PlanFacturationDetails object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlanFacturationDetailsQuery A secondary query class using the current class as primary query
     */
    public function usePlanFacturationDetailsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPlanFacturationDetails($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PlanFacturationDetails', 'PlanFacturationDetailsQuery');
    }

    /**
     * Filter the query by a related FactureEditionHistory object
     *
     * @param   FactureEditionHistory|PropelObjectCollection $factureEditionHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFactureTypesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureEditionHistory($factureEditionHistory, $comparison = null)
    {
        if ($factureEditionHistory instanceof FactureEditionHistory) {
            return $this
                ->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_ID, $factureEditionHistory->getRFactTypeId(), $comparison);
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
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function joinFactureEditionHistory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useFactureEditionHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactureEditionHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactureEditionHistory', 'FactureEditionHistoryQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RFactureTypes $rFactureTypes Object to remove from the list of results
     *
     * @return RFactureTypesQuery The current query, for fluid interface
     */
    public function prune($rFactureTypes = null)
    {
        if ($rFactureTypes) {
            $this->addUsingAlias(RFactureTypesPeer::R_FACT_TYPE_ID, $rFactureTypes->getRFactTypeId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
