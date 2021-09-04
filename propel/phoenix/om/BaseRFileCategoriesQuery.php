<?php


/**
 * Base class that represents a query for the 'r_file_categories' table.
 *
 *
 *
 * @method RFileCategoriesQuery orderByRFcaId($order = Criteria::ASC) Order by the r_fca_id column
 * @method RFileCategoriesQuery orderByRFcaName($order = Criteria::ASC) Order by the r_fca_name column
 *
 * @method RFileCategoriesQuery groupByRFcaId() Group by the r_fca_id column
 * @method RFileCategoriesQuery groupByRFcaName() Group by the r_fca_name column
 *
 * @method RFileCategoriesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RFileCategoriesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RFileCategoriesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RFileCategoriesQuery leftJoinFiles($relationAlias = null) Adds a LEFT JOIN clause to the query using the Files relation
 * @method RFileCategoriesQuery rightJoinFiles($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Files relation
 * @method RFileCategoriesQuery innerJoinFiles($relationAlias = null) Adds a INNER JOIN clause to the query using the Files relation
 *
 * @method RFileCategories findOne(PropelPDO $con = null) Return the first RFileCategories matching the query
 * @method RFileCategories findOneOrCreate(PropelPDO $con = null) Return the first RFileCategories matching the query, or a new RFileCategories object populated from the query conditions when no match is found
 *
 * @method RFileCategories findOneByRFcaName(string $r_fca_name) Return the first RFileCategories filtered by the r_fca_name column
 *
 * @method array findByRFcaId(int $r_fca_id) Return RFileCategories objects filtered by the r_fca_id column
 * @method array findByRFcaName(string $r_fca_name) Return RFileCategories objects filtered by the r_fca_name column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRFileCategoriesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRFileCategoriesQuery object.
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
            $modelName = 'RFileCategories';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RFileCategoriesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RFileCategoriesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RFileCategoriesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RFileCategoriesQuery) {
            return $criteria;
        }
        $query = new RFileCategoriesQuery(null, null, $modelAlias);

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
     * @return   RFileCategories|RFileCategories[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RFileCategoriesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RFileCategoriesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RFileCategories A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRFcaId($key, $con = null)
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
     * @return                 RFileCategories A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_fca_id`, `r_fca_name` FROM `r_file_categories` WHERE `r_fca_id` = :p0';
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
            $obj = new RFileCategories();
            $obj->hydrate($row);
            RFileCategoriesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RFileCategories|RFileCategories[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RFileCategories[]|mixed the list of results, formatted by the current formatter
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
     * @return RFileCategoriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RFileCategoriesPeer::R_FCA_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RFileCategoriesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RFileCategoriesPeer::R_FCA_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the r_fca_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRFcaId(1234); // WHERE r_fca_id = 1234
     * $query->filterByRFcaId(array(12, 34)); // WHERE r_fca_id IN (12, 34)
     * $query->filterByRFcaId(array('min' => 12)); // WHERE r_fca_id >= 12
     * $query->filterByRFcaId(array('max' => 12)); // WHERE r_fca_id <= 12
     * </code>
     *
     * @param     mixed $rFcaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFileCategoriesQuery The current query, for fluid interface
     */
    public function filterByRFcaId($rFcaId = null, $comparison = null)
    {
        if (is_array($rFcaId)) {
            $useMinMax = false;
            if (isset($rFcaId['min'])) {
                $this->addUsingAlias(RFileCategoriesPeer::R_FCA_ID, $rFcaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFcaId['max'])) {
                $this->addUsingAlias(RFileCategoriesPeer::R_FCA_ID, $rFcaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RFileCategoriesPeer::R_FCA_ID, $rFcaId, $comparison);
    }

    /**
     * Filter the query on the r_fca_name column
     *
     * Example usage:
     * <code>
     * $query->filterByRFcaName('fooValue');   // WHERE r_fca_name = 'fooValue'
     * $query->filterByRFcaName('%fooValue%'); // WHERE r_fca_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rFcaName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RFileCategoriesQuery The current query, for fluid interface
     */
    public function filterByRFcaName($rFcaName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rFcaName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rFcaName)) {
                $rFcaName = str_replace('*', '%', $rFcaName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RFileCategoriesPeer::R_FCA_NAME, $rFcaName, $comparison);
    }

    /**
     * Filter the query by a related Files object
     *
     * @param   Files|PropelObjectCollection $files  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RFileCategoriesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFiles($files, $comparison = null)
    {
        if ($files instanceof Files) {
            return $this
                ->addUsingAlias(RFileCategoriesPeer::R_FCA_ID, $files->getFileCategoryId(), $comparison);
        } elseif ($files instanceof PropelObjectCollection) {
            return $this
                ->useFilesQuery()
                ->filterByPrimaryKeys($files->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFiles() only accepts arguments of type Files or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Files relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RFileCategoriesQuery The current query, for fluid interface
     */
    public function joinFiles($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Files');

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
            $this->addJoinObject($join, 'Files');
        }

        return $this;
    }

    /**
     * Use the Files relation Files object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FilesQuery A secondary query class using the current class as primary query
     */
    public function useFilesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFiles($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Files', 'FilesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RFileCategories $rFileCategories Object to remove from the list of results
     *
     * @return RFileCategoriesQuery The current query, for fluid interface
     */
    public function prune($rFileCategories = null)
    {
        if ($rFileCategories) {
            $this->addUsingAlias(RFileCategoriesPeer::R_FCA_ID, $rFileCategories->getRFcaId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
