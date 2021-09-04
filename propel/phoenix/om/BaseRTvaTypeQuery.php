<?php


/**
 * Base class that represents a query for the 'r_tva_type' table.
 *
 *
 *
 * @method RTvaTypeQuery orderByRTvaId($order = Criteria::ASC) Order by the r_tva_id column
 * @method RTvaTypeQuery orderByRTvaLibelle($order = Criteria::ASC) Order by the r_tva_libelle column
 * @method RTvaTypeQuery orderByRTvaLibelleFactSynthese($order = Criteria::ASC) Order by the r_tva_libelle_fact_synthese column
 * @method RTvaTypeQuery orderByRTvaTypologie($order = Criteria::ASC) Order by the r_tva_typologie column
 * @method RTvaTypeQuery orderByRTvaStatut($order = Criteria::ASC) Order by the r_tva_statut column
 * @method RTvaTypeQuery orderByRTvaDescriptif($order = Criteria::ASC) Order by the r_tva_descriptif column
 * @method RTvaTypeQuery orderByRTvaTaux($order = Criteria::ASC) Order by the r_tva_taux column
 * @method RTvaTypeQuery orderByRTvaCoeff($order = Criteria::ASC) Order by the r_tva_coeff column
 * @method RTvaTypeQuery orderByRTvaTypeRecupCoeff($order = Criteria::ASC) Order by the r_tva_type_recup_coeff column
 * @method RTvaTypeQuery orderByRTvaRubOrder($order = Criteria::ASC) Order by the r_tva_rub_order column
 * @method RTvaTypeQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method RTvaTypeQuery orderByRTvaLibelleEn($order = Criteria::ASC) Order by the r_tva_libelle_en column
 * @method RTvaTypeQuery orderByRTvaLibelleFactSyntheseEn($order = Criteria::ASC) Order by the r_tva_libelle_fact_synthese_en column
 *
 * @method RTvaTypeQuery groupByRTvaId() Group by the r_tva_id column
 * @method RTvaTypeQuery groupByRTvaLibelle() Group by the r_tva_libelle column
 * @method RTvaTypeQuery groupByRTvaLibelleFactSynthese() Group by the r_tva_libelle_fact_synthese column
 * @method RTvaTypeQuery groupByRTvaTypologie() Group by the r_tva_typologie column
 * @method RTvaTypeQuery groupByRTvaStatut() Group by the r_tva_statut column
 * @method RTvaTypeQuery groupByRTvaDescriptif() Group by the r_tva_descriptif column
 * @method RTvaTypeQuery groupByRTvaTaux() Group by the r_tva_taux column
 * @method RTvaTypeQuery groupByRTvaCoeff() Group by the r_tva_coeff column
 * @method RTvaTypeQuery groupByRTvaTypeRecupCoeff() Group by the r_tva_type_recup_coeff column
 * @method RTvaTypeQuery groupByRTvaRubOrder() Group by the r_tva_rub_order column
 * @method RTvaTypeQuery groupByActif() Group by the actif column
 * @method RTvaTypeQuery groupByRTvaLibelleEn() Group by the r_tva_libelle_en column
 * @method RTvaTypeQuery groupByRTvaLibelleFactSyntheseEn() Group by the r_tva_libelle_fact_synthese_en column
 *
 * @method RTvaTypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RTvaTypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RTvaTypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RTvaTypeQuery leftJoinFacturesRubriques($relationAlias = null) Adds a LEFT JOIN clause to the query using the FacturesRubriques relation
 * @method RTvaTypeQuery rightJoinFacturesRubriques($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FacturesRubriques relation
 * @method RTvaTypeQuery innerJoinFacturesRubriques($relationAlias = null) Adds a INNER JOIN clause to the query using the FacturesRubriques relation
 *
 * @method RTvaTypeQuery leftJoinOperationRubriques($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationRubriques relation
 * @method RTvaTypeQuery rightJoinOperationRubriques($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationRubriques relation
 * @method RTvaTypeQuery innerJoinOperationRubriques($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationRubriques relation
 *
 * @method RTvaTypeQuery leftJoinRRubriques($relationAlias = null) Adds a LEFT JOIN clause to the query using the RRubriques relation
 * @method RTvaTypeQuery rightJoinRRubriques($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RRubriques relation
 * @method RTvaTypeQuery innerJoinRRubriques($relationAlias = null) Adds a INNER JOIN clause to the query using the RRubriques relation
 *
 * @method RTvaType findOne(PropelPDO $con = null) Return the first RTvaType matching the query
 * @method RTvaType findOneOrCreate(PropelPDO $con = null) Return the first RTvaType matching the query, or a new RTvaType object populated from the query conditions when no match is found
 *
 * @method RTvaType findOneByRTvaLibelle(string $r_tva_libelle) Return the first RTvaType filtered by the r_tva_libelle column
 * @method RTvaType findOneByRTvaLibelleFactSynthese(string $r_tva_libelle_fact_synthese) Return the first RTvaType filtered by the r_tva_libelle_fact_synthese column
 * @method RTvaType findOneByRTvaTypologie(string $r_tva_typologie) Return the first RTvaType filtered by the r_tva_typologie column
 * @method RTvaType findOneByRTvaStatut(string $r_tva_statut) Return the first RTvaType filtered by the r_tva_statut column
 * @method RTvaType findOneByRTvaDescriptif(string $r_tva_descriptif) Return the first RTvaType filtered by the r_tva_descriptif column
 * @method RTvaType findOneByRTvaTaux(float $r_tva_taux) Return the first RTvaType filtered by the r_tva_taux column
 * @method RTvaType findOneByRTvaCoeff(float $r_tva_coeff) Return the first RTvaType filtered by the r_tva_coeff column
 * @method RTvaType findOneByRTvaTypeRecupCoeff(float $r_tva_type_recup_coeff) Return the first RTvaType filtered by the r_tva_type_recup_coeff column
 * @method RTvaType findOneByRTvaRubOrder(int $r_tva_rub_order) Return the first RTvaType filtered by the r_tva_rub_order column
 * @method RTvaType findOneByActif(boolean $actif) Return the first RTvaType filtered by the actif column
 * @method RTvaType findOneByRTvaLibelleEn(string $r_tva_libelle_en) Return the first RTvaType filtered by the r_tva_libelle_en column
 * @method RTvaType findOneByRTvaLibelleFactSyntheseEn(string $r_tva_libelle_fact_synthese_en) Return the first RTvaType filtered by the r_tva_libelle_fact_synthese_en column
 *
 * @method array findByRTvaId(int $r_tva_id) Return RTvaType objects filtered by the r_tva_id column
 * @method array findByRTvaLibelle(string $r_tva_libelle) Return RTvaType objects filtered by the r_tva_libelle column
 * @method array findByRTvaLibelleFactSynthese(string $r_tva_libelle_fact_synthese) Return RTvaType objects filtered by the r_tva_libelle_fact_synthese column
 * @method array findByRTvaTypologie(string $r_tva_typologie) Return RTvaType objects filtered by the r_tva_typologie column
 * @method array findByRTvaStatut(string $r_tva_statut) Return RTvaType objects filtered by the r_tva_statut column
 * @method array findByRTvaDescriptif(string $r_tva_descriptif) Return RTvaType objects filtered by the r_tva_descriptif column
 * @method array findByRTvaTaux(float $r_tva_taux) Return RTvaType objects filtered by the r_tva_taux column
 * @method array findByRTvaCoeff(float $r_tva_coeff) Return RTvaType objects filtered by the r_tva_coeff column
 * @method array findByRTvaTypeRecupCoeff(float $r_tva_type_recup_coeff) Return RTvaType objects filtered by the r_tva_type_recup_coeff column
 * @method array findByRTvaRubOrder(int $r_tva_rub_order) Return RTvaType objects filtered by the r_tva_rub_order column
 * @method array findByActif(boolean $actif) Return RTvaType objects filtered by the actif column
 * @method array findByRTvaLibelleEn(string $r_tva_libelle_en) Return RTvaType objects filtered by the r_tva_libelle_en column
 * @method array findByRTvaLibelleFactSyntheseEn(string $r_tva_libelle_fact_synthese_en) Return RTvaType objects filtered by the r_tva_libelle_fact_synthese_en column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRTvaTypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRTvaTypeQuery object.
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
            $modelName = 'RTvaType';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RTvaTypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RTvaTypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RTvaTypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RTvaTypeQuery) {
            return $criteria;
        }
        $query = new RTvaTypeQuery(null, null, $modelAlias);

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
     * @return   RTvaType|RTvaType[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RTvaTypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RTvaTypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RTvaType A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRTvaId($key, $con = null)
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
     * @return                 RTvaType A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_tva_id`, `r_tva_libelle`, `r_tva_libelle_fact_synthese`, `r_tva_typologie`, `r_tva_statut`, `r_tva_descriptif`, `r_tva_taux`, `r_tva_coeff`, `r_tva_type_recup_coeff`, `r_tva_rub_order`, `actif`, `r_tva_libelle_en`, `r_tva_libelle_fact_synthese_en` FROM `r_tva_type` WHERE `r_tva_id` = :p0';
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
            $obj = new RTvaType();
            $obj->hydrate($row);
            RTvaTypePeer::addInstanceToPool($obj, (string) $key);
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
     * @return RTvaType|RTvaType[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RTvaType[]|mixed the list of results, formatted by the current formatter
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
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_tva_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaId(1234); // WHERE r_tva_id = 1234
     * $query->filterByRTvaId(array(12, 34)); // WHERE r_tva_id IN (12, 34)
     * $query->filterByRTvaId(array('min' => 12)); // WHERE r_tva_id >= 12
     * $query->filterByRTvaId(array('max' => 12)); // WHERE r_tva_id <= 12
     * </code>
     *
     * @param     mixed $rTvaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaId($rTvaId = null, $comparison = null)
    {
        if (is_array($rTvaId)) {
            $useMinMax = false;
            if (isset($rTvaId['min'])) {
                $this->addUsingAlias(RTvaTypePeer::R_TVA_ID, $rTvaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rTvaId['max'])) {
                $this->addUsingAlias(RTvaTypePeer::R_TVA_ID, $rTvaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_ID, $rTvaId, $comparison);
    }

    /**
     * Filter the query on the r_tva_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaLibelle('fooValue');   // WHERE r_tva_libelle = 'fooValue'
     * $query->filterByRTvaLibelle('%fooValue%'); // WHERE r_tva_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rTvaLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaLibelle($rTvaLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rTvaLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rTvaLibelle)) {
                $rTvaLibelle = str_replace('*', '%', $rTvaLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_LIBELLE, $rTvaLibelle, $comparison);
    }

    /**
     * Filter the query on the r_tva_libelle_fact_synthese column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaLibelleFactSynthese('fooValue');   // WHERE r_tva_libelle_fact_synthese = 'fooValue'
     * $query->filterByRTvaLibelleFactSynthese('%fooValue%'); // WHERE r_tva_libelle_fact_synthese LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rTvaLibelleFactSynthese The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaLibelleFactSynthese($rTvaLibelleFactSynthese = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rTvaLibelleFactSynthese)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rTvaLibelleFactSynthese)) {
                $rTvaLibelleFactSynthese = str_replace('*', '%', $rTvaLibelleFactSynthese);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE, $rTvaLibelleFactSynthese, $comparison);
    }

    /**
     * Filter the query on the r_tva_typologie column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaTypologie('fooValue');   // WHERE r_tva_typologie = 'fooValue'
     * $query->filterByRTvaTypologie('%fooValue%'); // WHERE r_tva_typologie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rTvaTypologie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaTypologie($rTvaTypologie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rTvaTypologie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rTvaTypologie)) {
                $rTvaTypologie = str_replace('*', '%', $rTvaTypologie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_TYPOLOGIE, $rTvaTypologie, $comparison);
    }

    /**
     * Filter the query on the r_tva_statut column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaStatut('fooValue');   // WHERE r_tva_statut = 'fooValue'
     * $query->filterByRTvaStatut('%fooValue%'); // WHERE r_tva_statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rTvaStatut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaStatut($rTvaStatut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rTvaStatut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rTvaStatut)) {
                $rTvaStatut = str_replace('*', '%', $rTvaStatut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_STATUT, $rTvaStatut, $comparison);
    }

    /**
     * Filter the query on the r_tva_descriptif column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaDescriptif('fooValue');   // WHERE r_tva_descriptif = 'fooValue'
     * $query->filterByRTvaDescriptif('%fooValue%'); // WHERE r_tva_descriptif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rTvaDescriptif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaDescriptif($rTvaDescriptif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rTvaDescriptif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rTvaDescriptif)) {
                $rTvaDescriptif = str_replace('*', '%', $rTvaDescriptif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_DESCRIPTIF, $rTvaDescriptif, $comparison);
    }

    /**
     * Filter the query on the r_tva_taux column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaTaux(1234); // WHERE r_tva_taux = 1234
     * $query->filterByRTvaTaux(array(12, 34)); // WHERE r_tva_taux IN (12, 34)
     * $query->filterByRTvaTaux(array('min' => 12)); // WHERE r_tva_taux >= 12
     * $query->filterByRTvaTaux(array('max' => 12)); // WHERE r_tva_taux <= 12
     * </code>
     *
     * @param     mixed $rTvaTaux The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaTaux($rTvaTaux = null, $comparison = null)
    {
        if (is_array($rTvaTaux)) {
            $useMinMax = false;
            if (isset($rTvaTaux['min'])) {
                $this->addUsingAlias(RTvaTypePeer::R_TVA_TAUX, $rTvaTaux['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rTvaTaux['max'])) {
                $this->addUsingAlias(RTvaTypePeer::R_TVA_TAUX, $rTvaTaux['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_TAUX, $rTvaTaux, $comparison);
    }

    /**
     * Filter the query on the r_tva_coeff column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaCoeff(1234); // WHERE r_tva_coeff = 1234
     * $query->filterByRTvaCoeff(array(12, 34)); // WHERE r_tva_coeff IN (12, 34)
     * $query->filterByRTvaCoeff(array('min' => 12)); // WHERE r_tva_coeff >= 12
     * $query->filterByRTvaCoeff(array('max' => 12)); // WHERE r_tva_coeff <= 12
     * </code>
     *
     * @param     mixed $rTvaCoeff The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaCoeff($rTvaCoeff = null, $comparison = null)
    {
        if (is_array($rTvaCoeff)) {
            $useMinMax = false;
            if (isset($rTvaCoeff['min'])) {
                $this->addUsingAlias(RTvaTypePeer::R_TVA_COEFF, $rTvaCoeff['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rTvaCoeff['max'])) {
                $this->addUsingAlias(RTvaTypePeer::R_TVA_COEFF, $rTvaCoeff['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_COEFF, $rTvaCoeff, $comparison);
    }

    /**
     * Filter the query on the r_tva_type_recup_coeff column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaTypeRecupCoeff(1234); // WHERE r_tva_type_recup_coeff = 1234
     * $query->filterByRTvaTypeRecupCoeff(array(12, 34)); // WHERE r_tva_type_recup_coeff IN (12, 34)
     * $query->filterByRTvaTypeRecupCoeff(array('min' => 12)); // WHERE r_tva_type_recup_coeff >= 12
     * $query->filterByRTvaTypeRecupCoeff(array('max' => 12)); // WHERE r_tva_type_recup_coeff <= 12
     * </code>
     *
     * @param     mixed $rTvaTypeRecupCoeff The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaTypeRecupCoeff($rTvaTypeRecupCoeff = null, $comparison = null)
    {
        if (is_array($rTvaTypeRecupCoeff)) {
            $useMinMax = false;
            if (isset($rTvaTypeRecupCoeff['min'])) {
                $this->addUsingAlias(RTvaTypePeer::R_TVA_TYPE_RECUP_COEFF, $rTvaTypeRecupCoeff['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rTvaTypeRecupCoeff['max'])) {
                $this->addUsingAlias(RTvaTypePeer::R_TVA_TYPE_RECUP_COEFF, $rTvaTypeRecupCoeff['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_TYPE_RECUP_COEFF, $rTvaTypeRecupCoeff, $comparison);
    }

    /**
     * Filter the query on the r_tva_rub_order column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaRubOrder(1234); // WHERE r_tva_rub_order = 1234
     * $query->filterByRTvaRubOrder(array(12, 34)); // WHERE r_tva_rub_order IN (12, 34)
     * $query->filterByRTvaRubOrder(array('min' => 12)); // WHERE r_tva_rub_order >= 12
     * $query->filterByRTvaRubOrder(array('max' => 12)); // WHERE r_tva_rub_order <= 12
     * </code>
     *
     * @param     mixed $rTvaRubOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaRubOrder($rTvaRubOrder = null, $comparison = null)
    {
        if (is_array($rTvaRubOrder)) {
            $useMinMax = false;
            if (isset($rTvaRubOrder['min'])) {
                $this->addUsingAlias(RTvaTypePeer::R_TVA_RUB_ORDER, $rTvaRubOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rTvaRubOrder['max'])) {
                $this->addUsingAlias(RTvaTypePeer::R_TVA_RUB_ORDER, $rTvaRubOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_RUB_ORDER, $rTvaRubOrder, $comparison);
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
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RTvaTypePeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the r_tva_libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaLibelleEn('fooValue');   // WHERE r_tva_libelle_en = 'fooValue'
     * $query->filterByRTvaLibelleEn('%fooValue%'); // WHERE r_tva_libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rTvaLibelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaLibelleEn($rTvaLibelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rTvaLibelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rTvaLibelleEn)) {
                $rTvaLibelleEn = str_replace('*', '%', $rTvaLibelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_LIBELLE_EN, $rTvaLibelleEn, $comparison);
    }

    /**
     * Filter the query on the r_tva_libelle_fact_synthese_en column
     *
     * Example usage:
     * <code>
     * $query->filterByRTvaLibelleFactSyntheseEn('fooValue');   // WHERE r_tva_libelle_fact_synthese_en = 'fooValue'
     * $query->filterByRTvaLibelleFactSyntheseEn('%fooValue%'); // WHERE r_tva_libelle_fact_synthese_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rTvaLibelleFactSyntheseEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRTvaLibelleFactSyntheseEn($rTvaLibelleFactSyntheseEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rTvaLibelleFactSyntheseEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rTvaLibelleFactSyntheseEn)) {
                $rTvaLibelleFactSyntheseEn = str_replace('*', '%', $rTvaLibelleFactSyntheseEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RTvaTypePeer::R_TVA_LIBELLE_FACT_SYNTHESE_EN, $rTvaLibelleFactSyntheseEn, $comparison);
    }

    /**
     * Filter the query by a related FacturesRubriques object
     *
     * @param   FacturesRubriques|PropelObjectCollection $facturesRubriques  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RTvaTypeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFacturesRubriques($facturesRubriques, $comparison = null)
    {
        if ($facturesRubriques instanceof FacturesRubriques) {
            return $this
                ->addUsingAlias(RTvaTypePeer::R_TVA_ID, $facturesRubriques->getRTvaTypeId(), $comparison);
        } elseif ($facturesRubriques instanceof PropelObjectCollection) {
            return $this
                ->useFacturesRubriquesQuery()
                ->filterByPrimaryKeys($facturesRubriques->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFacturesRubriques() only accepts arguments of type FacturesRubriques or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FacturesRubriques relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function joinFacturesRubriques($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FacturesRubriques');

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
            $this->addJoinObject($join, 'FacturesRubriques');
        }

        return $this;
    }

    /**
     * Use the FacturesRubriques relation FacturesRubriques object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturesRubriquesQuery A secondary query class using the current class as primary query
     */
    public function useFacturesRubriquesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFacturesRubriques($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FacturesRubriques', 'FacturesRubriquesQuery');
    }

    /**
     * Filter the query by a related OperationRubriques object
     *
     * @param   OperationRubriques|PropelObjectCollection $operationRubriques  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RTvaTypeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationRubriques($operationRubriques, $comparison = null)
    {
        if ($operationRubriques instanceof OperationRubriques) {
            return $this
                ->addUsingAlias(RTvaTypePeer::R_TVA_ID, $operationRubriques->getRTvaTypeId(), $comparison);
        } elseif ($operationRubriques instanceof PropelObjectCollection) {
            return $this
                ->useOperationRubriquesQuery()
                ->filterByPrimaryKeys($operationRubriques->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationRubriques() only accepts arguments of type OperationRubriques or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationRubriques relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function joinOperationRubriques($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationRubriques');

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
            $this->addJoinObject($join, 'OperationRubriques');
        }

        return $this;
    }

    /**
     * Use the OperationRubriques relation OperationRubriques object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationRubriquesQuery A secondary query class using the current class as primary query
     */
    public function useOperationRubriquesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationRubriques($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationRubriques', 'OperationRubriquesQuery');
    }

    /**
     * Filter the query by a related RRubriques object
     *
     * @param   RRubriques|PropelObjectCollection $rRubriques  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RTvaTypeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRRubriques($rRubriques, $comparison = null)
    {
        if ($rRubriques instanceof RRubriques) {
            return $this
                ->addUsingAlias(RTvaTypePeer::R_TVA_ID, $rRubriques->getRTvaTypeId(), $comparison);
        } elseif ($rRubriques instanceof PropelObjectCollection) {
            return $this
                ->useRRubriquesQuery()
                ->filterByPrimaryKeys($rRubriques->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRRubriques() only accepts arguments of type RRubriques or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RRubriques relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function joinRRubriques($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RRubriques');

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
            $this->addJoinObject($join, 'RRubriques');
        }

        return $this;
    }

    /**
     * Use the RRubriques relation RRubriques object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RRubriquesQuery A secondary query class using the current class as primary query
     */
    public function useRRubriquesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRRubriques($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RRubriques', 'RRubriquesQuery');
    }

    /**
     * Filter the query by a related Operations object
     * using the operation_rubriques table as cross reference
     *
     * @param   Operations $operations the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByOperations($operations, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useOperationRubriquesQuery()
            ->filterByOperations($operations, $comparison)
            ->endUse();
    }

    /**
     * Filter the query by a related RRubriquesType object
     * using the operation_rubriques table as cross reference
     *
     * @param   RRubriquesType $rRubriquesType the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   RTvaTypeQuery The current query, for fluid interface
     */
    public function filterByRRubriquesType($rRubriquesType, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useOperationRubriquesQuery()
            ->filterByRRubriquesType($rRubriquesType, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   RTvaType $rTvaType Object to remove from the list of results
     *
     * @return RTvaTypeQuery The current query, for fluid interface
     */
    public function prune($rTvaType = null)
    {
        if ($rTvaType) {
            $this->addUsingAlias(RTvaTypePeer::R_TVA_ID, $rTvaType->getRTvaId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
