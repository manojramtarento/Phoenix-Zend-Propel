<?php


/**
 * Base class that represents a query for the 'lnk_r_operation_type_sub_template_medias_universes' table.
 *
 *
 *
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery orderByLnkROperationTypeSubTemplateMediaUniverseId($order = Criteria::ASC) Order by the lnk_r_operation_type_sub_template_media_universe_id column
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery orderByLnkROperationTypeSubTemplateMediaUniverseOstId($order = Criteria::ASC) Order by the lnk_r_operation_type_sub_template_media_universe_ost_id column
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery orderByLnkROperationTypeSubTemplateMediaUniverseTplId($order = Criteria::ASC) Order by the lnk_r_operation_type_sub_template_media_universe_tpl_id column
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery orderByLnkROperationTypeSubTemplateMediaUniverseUniverseId($order = Criteria::ASC) Order by the lnk_r_operation_type_sub_template_media_universe_universe_id column
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery orderByLnkROperationTypeSubTemplateMediaUniverseMediaId($order = Criteria::ASC) Order by the lnk_r_operation_type_sub_template_media_universe_media_id column
 *
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery groupByLnkROperationTypeSubTemplateMediaUniverseId() Group by the lnk_r_operation_type_sub_template_media_universe_id column
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery groupByLnkROperationTypeSubTemplateMediaUniverseOstId() Group by the lnk_r_operation_type_sub_template_media_universe_ost_id column
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery groupByLnkROperationTypeSubTemplateMediaUniverseTplId() Group by the lnk_r_operation_type_sub_template_media_universe_tpl_id column
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery groupByLnkROperationTypeSubTemplateMediaUniverseUniverseId() Group by the lnk_r_operation_type_sub_template_media_universe_universe_id column
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery groupByLnkROperationTypeSubTemplateMediaUniverseMediaId() Group by the lnk_r_operation_type_sub_template_media_universe_media_id column
 *
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery leftJoinOperationTypeSub($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationTypeSub relation
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery rightJoinOperationTypeSub($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationTypeSub relation
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery innerJoinOperationTypeSub($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationTypeSub relation
 *
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery leftJoinOerationTypeSubTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the OerationTypeSubTemplate relation
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery rightJoinOerationTypeSubTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OerationTypeSubTemplate relation
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery innerJoinOerationTypeSubTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the OerationTypeSubTemplate relation
 *
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery leftJoinOperationUniverse($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationUniverse relation
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery rightJoinOperationUniverse($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationUniverse relation
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery innerJoinOperationUniverse($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationUniverse relation
 *
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery leftJoinOperationMedia($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationMedia relation
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery rightJoinOperationMedia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationMedia relation
 * @method LnkROperationTypeSubTemplateMediasUniversesQuery innerJoinOperationMedia($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationMedia relation
 *
 * @method LnkROperationTypeSubTemplateMediasUniverses findOne(PropelPDO $con = null) Return the first LnkROperationTypeSubTemplateMediasUniverses matching the query
 * @method LnkROperationTypeSubTemplateMediasUniverses findOneOrCreate(PropelPDO $con = null) Return the first LnkROperationTypeSubTemplateMediasUniverses matching the query, or a new LnkROperationTypeSubTemplateMediasUniverses object populated from the query conditions when no match is found
 *
 * @method LnkROperationTypeSubTemplateMediasUniverses findOneByLnkROperationTypeSubTemplateMediaUniverseOstId(int $lnk_r_operation_type_sub_template_media_universe_ost_id) Return the first LnkROperationTypeSubTemplateMediasUniverses filtered by the lnk_r_operation_type_sub_template_media_universe_ost_id column
 * @method LnkROperationTypeSubTemplateMediasUniverses findOneByLnkROperationTypeSubTemplateMediaUniverseTplId(int $lnk_r_operation_type_sub_template_media_universe_tpl_id) Return the first LnkROperationTypeSubTemplateMediasUniverses filtered by the lnk_r_operation_type_sub_template_media_universe_tpl_id column
 * @method LnkROperationTypeSubTemplateMediasUniverses findOneByLnkROperationTypeSubTemplateMediaUniverseUniverseId(int $lnk_r_operation_type_sub_template_media_universe_universe_id) Return the first LnkROperationTypeSubTemplateMediasUniverses filtered by the lnk_r_operation_type_sub_template_media_universe_universe_id column
 * @method LnkROperationTypeSubTemplateMediasUniverses findOneByLnkROperationTypeSubTemplateMediaUniverseMediaId(int $lnk_r_operation_type_sub_template_media_universe_media_id) Return the first LnkROperationTypeSubTemplateMediasUniverses filtered by the lnk_r_operation_type_sub_template_media_universe_media_id column
 *
 * @method array findByLnkROperationTypeSubTemplateMediaUniverseId(int $lnk_r_operation_type_sub_template_media_universe_id) Return LnkROperationTypeSubTemplateMediasUniverses objects filtered by the lnk_r_operation_type_sub_template_media_universe_id column
 * @method array findByLnkROperationTypeSubTemplateMediaUniverseOstId(int $lnk_r_operation_type_sub_template_media_universe_ost_id) Return LnkROperationTypeSubTemplateMediasUniverses objects filtered by the lnk_r_operation_type_sub_template_media_universe_ost_id column
 * @method array findByLnkROperationTypeSubTemplateMediaUniverseTplId(int $lnk_r_operation_type_sub_template_media_universe_tpl_id) Return LnkROperationTypeSubTemplateMediasUniverses objects filtered by the lnk_r_operation_type_sub_template_media_universe_tpl_id column
 * @method array findByLnkROperationTypeSubTemplateMediaUniverseUniverseId(int $lnk_r_operation_type_sub_template_media_universe_universe_id) Return LnkROperationTypeSubTemplateMediasUniverses objects filtered by the lnk_r_operation_type_sub_template_media_universe_universe_id column
 * @method array findByLnkROperationTypeSubTemplateMediaUniverseMediaId(int $lnk_r_operation_type_sub_template_media_universe_media_id) Return LnkROperationTypeSubTemplateMediasUniverses objects filtered by the lnk_r_operation_type_sub_template_media_universe_media_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseLnkROperationTypeSubTemplateMediasUniversesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLnkROperationTypeSubTemplateMediasUniversesQuery object.
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
            $modelName = 'LnkROperationTypeSubTemplateMediasUniverses';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LnkROperationTypeSubTemplateMediasUniversesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LnkROperationTypeSubTemplateMediasUniversesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LnkROperationTypeSubTemplateMediasUniversesQuery) {
            return $criteria;
        }
        $query = new LnkROperationTypeSubTemplateMediasUniversesQuery(null, null, $modelAlias);

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
     * @return   LnkROperationTypeSubTemplateMediasUniverses|LnkROperationTypeSubTemplateMediasUniverses[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LnkROperationTypeSubTemplateMediasUniversesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LnkROperationTypeSubTemplateMediasUniversesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 LnkROperationTypeSubTemplateMediasUniverses A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLnkROperationTypeSubTemplateMediaUniverseId($key, $con = null)
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
     * @return                 LnkROperationTypeSubTemplateMediasUniverses A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `lnk_r_operation_type_sub_template_media_universe_id`, `lnk_r_operation_type_sub_template_media_universe_ost_id`, `lnk_r_operation_type_sub_template_media_universe_tpl_id`, `lnk_r_operation_type_sub_template_media_universe_universe_id`, `lnk_r_operation_type_sub_template_media_universe_media_id` FROM `lnk_r_operation_type_sub_template_medias_universes` WHERE `lnk_r_operation_type_sub_template_media_universe_id` = :p0';
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
            $obj = new LnkROperationTypeSubTemplateMediasUniverses();
            $obj->hydrate($row);
            LnkROperationTypeSubTemplateMediasUniversesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return LnkROperationTypeSubTemplateMediasUniverses|LnkROperationTypeSubTemplateMediasUniverses[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|LnkROperationTypeSubTemplateMediasUniverses[]|mixed the list of results, formatted by the current formatter
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
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the lnk_r_operation_type_sub_template_media_universe_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseId(1234); // WHERE lnk_r_operation_type_sub_template_media_universe_id = 1234
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseId(array(12, 34)); // WHERE lnk_r_operation_type_sub_template_media_universe_id IN (12, 34)
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseId(array('min' => 12)); // WHERE lnk_r_operation_type_sub_template_media_universe_id >= 12
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseId(array('max' => 12)); // WHERE lnk_r_operation_type_sub_template_media_universe_id <= 12
     * </code>
     *
     * @param     mixed $lnkROperationTypeSubTemplateMediaUniverseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function filterByLnkROperationTypeSubTemplateMediaUniverseId($lnkROperationTypeSubTemplateMediaUniverseId = null, $comparison = null)
    {
        if (is_array($lnkROperationTypeSubTemplateMediaUniverseId)) {
            $useMinMax = false;
            if (isset($lnkROperationTypeSubTemplateMediaUniverseId['min'])) {
                $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $lnkROperationTypeSubTemplateMediaUniverseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkROperationTypeSubTemplateMediaUniverseId['max'])) {
                $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $lnkROperationTypeSubTemplateMediaUniverseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $lnkROperationTypeSubTemplateMediaUniverseId, $comparison);
    }

    /**
     * Filter the query on the lnk_r_operation_type_sub_template_media_universe_ost_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseOstId(1234); // WHERE lnk_r_operation_type_sub_template_media_universe_ost_id = 1234
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseOstId(array(12, 34)); // WHERE lnk_r_operation_type_sub_template_media_universe_ost_id IN (12, 34)
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseOstId(array('min' => 12)); // WHERE lnk_r_operation_type_sub_template_media_universe_ost_id >= 12
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseOstId(array('max' => 12)); // WHERE lnk_r_operation_type_sub_template_media_universe_ost_id <= 12
     * </code>
     *
     * @see       filterByOperationTypeSub()
     *
     * @param     mixed $lnkROperationTypeSubTemplateMediaUniverseOstId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function filterByLnkROperationTypeSubTemplateMediaUniverseOstId($lnkROperationTypeSubTemplateMediaUniverseOstId = null, $comparison = null)
    {
        if (is_array($lnkROperationTypeSubTemplateMediaUniverseOstId)) {
            $useMinMax = false;
            if (isset($lnkROperationTypeSubTemplateMediaUniverseOstId['min'])) {
                $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, $lnkROperationTypeSubTemplateMediaUniverseOstId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkROperationTypeSubTemplateMediaUniverseOstId['max'])) {
                $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, $lnkROperationTypeSubTemplateMediaUniverseOstId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, $lnkROperationTypeSubTemplateMediaUniverseOstId, $comparison);
    }

    /**
     * Filter the query on the lnk_r_operation_type_sub_template_media_universe_tpl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseTplId(1234); // WHERE lnk_r_operation_type_sub_template_media_universe_tpl_id = 1234
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseTplId(array(12, 34)); // WHERE lnk_r_operation_type_sub_template_media_universe_tpl_id IN (12, 34)
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseTplId(array('min' => 12)); // WHERE lnk_r_operation_type_sub_template_media_universe_tpl_id >= 12
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseTplId(array('max' => 12)); // WHERE lnk_r_operation_type_sub_template_media_universe_tpl_id <= 12
     * </code>
     *
     * @see       filterByOerationTypeSubTemplate()
     *
     * @param     mixed $lnkROperationTypeSubTemplateMediaUniverseTplId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function filterByLnkROperationTypeSubTemplateMediaUniverseTplId($lnkROperationTypeSubTemplateMediaUniverseTplId = null, $comparison = null)
    {
        if (is_array($lnkROperationTypeSubTemplateMediaUniverseTplId)) {
            $useMinMax = false;
            if (isset($lnkROperationTypeSubTemplateMediaUniverseTplId['min'])) {
                $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, $lnkROperationTypeSubTemplateMediaUniverseTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkROperationTypeSubTemplateMediaUniverseTplId['max'])) {
                $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, $lnkROperationTypeSubTemplateMediaUniverseTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, $lnkROperationTypeSubTemplateMediaUniverseTplId, $comparison);
    }

    /**
     * Filter the query on the lnk_r_operation_type_sub_template_media_universe_universe_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseUniverseId(1234); // WHERE lnk_r_operation_type_sub_template_media_universe_universe_id = 1234
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseUniverseId(array(12, 34)); // WHERE lnk_r_operation_type_sub_template_media_universe_universe_id IN (12, 34)
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseUniverseId(array('min' => 12)); // WHERE lnk_r_operation_type_sub_template_media_universe_universe_id >= 12
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseUniverseId(array('max' => 12)); // WHERE lnk_r_operation_type_sub_template_media_universe_universe_id <= 12
     * </code>
     *
     * @see       filterByOperationUniverse()
     *
     * @param     mixed $lnkROperationTypeSubTemplateMediaUniverseUniverseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function filterByLnkROperationTypeSubTemplateMediaUniverseUniverseId($lnkROperationTypeSubTemplateMediaUniverseUniverseId = null, $comparison = null)
    {
        if (is_array($lnkROperationTypeSubTemplateMediaUniverseUniverseId)) {
            $useMinMax = false;
            if (isset($lnkROperationTypeSubTemplateMediaUniverseUniverseId['min'])) {
                $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, $lnkROperationTypeSubTemplateMediaUniverseUniverseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkROperationTypeSubTemplateMediaUniverseUniverseId['max'])) {
                $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, $lnkROperationTypeSubTemplateMediaUniverseUniverseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, $lnkROperationTypeSubTemplateMediaUniverseUniverseId, $comparison);
    }

    /**
     * Filter the query on the lnk_r_operation_type_sub_template_media_universe_media_id column
     *
     * Example usage:
     * <code>
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseMediaId(1234); // WHERE lnk_r_operation_type_sub_template_media_universe_media_id = 1234
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseMediaId(array(12, 34)); // WHERE lnk_r_operation_type_sub_template_media_universe_media_id IN (12, 34)
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseMediaId(array('min' => 12)); // WHERE lnk_r_operation_type_sub_template_media_universe_media_id >= 12
     * $query->filterByLnkROperationTypeSubTemplateMediaUniverseMediaId(array('max' => 12)); // WHERE lnk_r_operation_type_sub_template_media_universe_media_id <= 12
     * </code>
     *
     * @see       filterByOperationMedia()
     *
     * @param     mixed $lnkROperationTypeSubTemplateMediaUniverseMediaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function filterByLnkROperationTypeSubTemplateMediaUniverseMediaId($lnkROperationTypeSubTemplateMediaUniverseMediaId = null, $comparison = null)
    {
        if (is_array($lnkROperationTypeSubTemplateMediaUniverseMediaId)) {
            $useMinMax = false;
            if (isset($lnkROperationTypeSubTemplateMediaUniverseMediaId['min'])) {
                $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, $lnkROperationTypeSubTemplateMediaUniverseMediaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lnkROperationTypeSubTemplateMediaUniverseMediaId['max'])) {
                $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, $lnkROperationTypeSubTemplateMediaUniverseMediaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, $lnkROperationTypeSubTemplateMediaUniverseMediaId, $comparison);
    }

    /**
     * Filter the query by a related ROperationTypeSub object
     *
     * @param   ROperationTypeSub|PropelObjectCollection $rOperationTypeSub The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationTypeSub($rOperationTypeSub, $comparison = null)
    {
        if ($rOperationTypeSub instanceof ROperationTypeSub) {
            return $this
                ->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, $rOperationTypeSub->getOstId(), $comparison);
        } elseif ($rOperationTypeSub instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_OST_ID, $rOperationTypeSub->toKeyValue('PrimaryKey', 'OstId'), $comparison);
        } else {
            throw new PropelException('filterByOperationTypeSub() only accepts arguments of type ROperationTypeSub or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationTypeSub relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function joinOperationTypeSub($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationTypeSub');

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
            $this->addJoinObject($join, 'OperationTypeSub');
        }

        return $this;
    }

    /**
     * Use the OperationTypeSub relation ROperationTypeSub object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubQuery A secondary query class using the current class as primary query
     */
    public function useOperationTypeSubQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationTypeSub($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationTypeSub', 'ROperationTypeSubQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTpl object
     *
     * @param   ROperationTypeSubTpl|PropelObjectCollection $rOperationTypeSubTpl The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOerationTypeSubTemplate($rOperationTypeSubTpl, $comparison = null)
    {
        if ($rOperationTypeSubTpl instanceof ROperationTypeSubTpl) {
            return $this
                ->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, $rOperationTypeSubTpl->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTpl instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_TPL_ID, $rOperationTypeSubTpl->toKeyValue('PrimaryKey', 'OstTplId'), $comparison);
        } else {
            throw new PropelException('filterByOerationTypeSubTemplate() only accepts arguments of type ROperationTypeSubTpl or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OerationTypeSubTemplate relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function joinOerationTypeSubTemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OerationTypeSubTemplate');

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
            $this->addJoinObject($join, 'OerationTypeSubTemplate');
        }

        return $this;
    }

    /**
     * Use the OerationTypeSubTemplate relation ROperationTypeSubTpl object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplQuery A secondary query class using the current class as primary query
     */
    public function useOerationTypeSubTemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOerationTypeSubTemplate($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OerationTypeSubTemplate', 'ROperationTypeSubTplQuery');
    }

    /**
     * Filter the query by a related ROperationUniverses object
     *
     * @param   ROperationUniverses|PropelObjectCollection $rOperationUniverses The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationUniverse($rOperationUniverses, $comparison = null)
    {
        if ($rOperationUniverses instanceof ROperationUniverses) {
            return $this
                ->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, $rOperationUniverses->getROperationUniverseId(), $comparison);
        } elseif ($rOperationUniverses instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_UNIVERSE_ID, $rOperationUniverses->toKeyValue('PrimaryKey', 'ROperationUniverseId'), $comparison);
        } else {
            throw new PropelException('filterByOperationUniverse() only accepts arguments of type ROperationUniverses or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationUniverse relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function joinOperationUniverse($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationUniverse');

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
            $this->addJoinObject($join, 'OperationUniverse');
        }

        return $this;
    }

    /**
     * Use the OperationUniverse relation ROperationUniverses object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationUniversesQuery A secondary query class using the current class as primary query
     */
    public function useOperationUniverseQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationUniverse($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationUniverse', 'ROperationUniversesQuery');
    }

    /**
     * Filter the query by a related ROperationMedias object
     *
     * @param   ROperationMedias|PropelObjectCollection $rOperationMedias The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationMedia($rOperationMedias, $comparison = null)
    {
        if ($rOperationMedias instanceof ROperationMedias) {
            return $this
                ->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, $rOperationMedias->getROperationMediaId(), $comparison);
        } elseif ($rOperationMedias instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_MEDIA_ID, $rOperationMedias->toKeyValue('PrimaryKey', 'ROperationMediaId'), $comparison);
        } else {
            throw new PropelException('filterByOperationMedia() only accepts arguments of type ROperationMedias or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationMedia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function joinOperationMedia($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationMedia');

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
            $this->addJoinObject($join, 'OperationMedia');
        }

        return $this;
    }

    /**
     * Use the OperationMedia relation ROperationMedias object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationMediasQuery A secondary query class using the current class as primary query
     */
    public function useOperationMediaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationMedia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationMedia', 'ROperationMediasQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   LnkROperationTypeSubTemplateMediasUniverses $lnkROperationTypeSubTemplateMediasUniverses Object to remove from the list of results
     *
     * @return LnkROperationTypeSubTemplateMediasUniversesQuery The current query, for fluid interface
     */
    public function prune($lnkROperationTypeSubTemplateMediasUniverses = null)
    {
        if ($lnkROperationTypeSubTemplateMediasUniverses) {
            $this->addUsingAlias(LnkROperationTypeSubTemplateMediasUniversesPeer::LNK_R_OPERATION_TYPE_SUB_TEMPLATE_MEDIA_UNIVERSE_ID, $lnkROperationTypeSubTemplateMediasUniverses->getLnkROperationTypeSubTemplateMediaUniverseId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
