<?php


/**
 * Base class that represents a query for the 'files' table.
 *
 *
 *
 * @method FilesQuery orderByFileId($order = Criteria::ASC) Order by the file_id column
 * @method FilesQuery orderByFileCategoryId($order = Criteria::ASC) Order by the file_category_id column
 * @method FilesQuery orderByFileVersion($order = Criteria::ASC) Order by the file_version column
 * @method FilesQuery orderByFileEntityName($order = Criteria::ASC) Order by the file_entity_name column
 * @method FilesQuery orderByFileEntityId($order = Criteria::ASC) Order by the file_entity_id column
 * @method FilesQuery orderByFileName($order = Criteria::ASC) Order by the file_name column
 * @method FilesQuery orderByFileIsAcceptedVersion($order = Criteria::ASC) Order by the file_is_accepted_version column
 * @method FilesQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method FilesQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method FilesQuery groupByFileId() Group by the file_id column
 * @method FilesQuery groupByFileCategoryId() Group by the file_category_id column
 * @method FilesQuery groupByFileVersion() Group by the file_version column
 * @method FilesQuery groupByFileEntityName() Group by the file_entity_name column
 * @method FilesQuery groupByFileEntityId() Group by the file_entity_id column
 * @method FilesQuery groupByFileName() Group by the file_name column
 * @method FilesQuery groupByFileIsAcceptedVersion() Group by the file_is_accepted_version column
 * @method FilesQuery groupByDateCreate() Group by the date_create column
 * @method FilesQuery groupByUserId() Group by the user_id column
 *
 * @method FilesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FilesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FilesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FilesQuery leftJoinRFileCategories($relationAlias = null) Adds a LEFT JOIN clause to the query using the RFileCategories relation
 * @method FilesQuery rightJoinRFileCategories($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RFileCategories relation
 * @method FilesQuery innerJoinRFileCategories($relationAlias = null) Adds a INNER JOIN clause to the query using the RFileCategories relation
 *
 * @method Files findOne(PropelPDO $con = null) Return the first Files matching the query
 * @method Files findOneOrCreate(PropelPDO $con = null) Return the first Files matching the query, or a new Files object populated from the query conditions when no match is found
 *
 * @method Files findOneByFileCategoryId(int $file_category_id) Return the first Files filtered by the file_category_id column
 * @method Files findOneByFileVersion(int $file_version) Return the first Files filtered by the file_version column
 * @method Files findOneByFileEntityName(string $file_entity_name) Return the first Files filtered by the file_entity_name column
 * @method Files findOneByFileEntityId(int $file_entity_id) Return the first Files filtered by the file_entity_id column
 * @method Files findOneByFileName(string $file_name) Return the first Files filtered by the file_name column
 * @method Files findOneByFileIsAcceptedVersion(boolean $file_is_accepted_version) Return the first Files filtered by the file_is_accepted_version column
 * @method Files findOneByDateCreate(string $date_create) Return the first Files filtered by the date_create column
 * @method Files findOneByUserId(int $user_id) Return the first Files filtered by the user_id column
 *
 * @method array findByFileId(int $file_id) Return Files objects filtered by the file_id column
 * @method array findByFileCategoryId(int $file_category_id) Return Files objects filtered by the file_category_id column
 * @method array findByFileVersion(int $file_version) Return Files objects filtered by the file_version column
 * @method array findByFileEntityName(string $file_entity_name) Return Files objects filtered by the file_entity_name column
 * @method array findByFileEntityId(int $file_entity_id) Return Files objects filtered by the file_entity_id column
 * @method array findByFileName(string $file_name) Return Files objects filtered by the file_name column
 * @method array findByFileIsAcceptedVersion(boolean $file_is_accepted_version) Return Files objects filtered by the file_is_accepted_version column
 * @method array findByDateCreate(string $date_create) Return Files objects filtered by the date_create column
 * @method array findByUserId(int $user_id) Return Files objects filtered by the user_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseFilesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFilesQuery object.
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
            $modelName = 'Files';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FilesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FilesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FilesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FilesQuery) {
            return $criteria;
        }
        $query = new FilesQuery(null, null, $modelAlias);

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
     * @return   Files|Files[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FilesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FilesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Files A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFileId($key, $con = null)
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
     * @return                 Files A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `file_id`, `file_category_id`, `file_version`, `file_entity_name`, `file_entity_id`, `file_name`, `file_is_accepted_version`, `date_create`, `user_id` FROM `files` WHERE `file_id` = :p0';
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
            $obj = new Files();
            $obj->hydrate($row);
            FilesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Files|Files[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Files[]|mixed the list of results, formatted by the current formatter
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
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FilesPeer::FILE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FilesPeer::FILE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the file_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFileId(1234); // WHERE file_id = 1234
     * $query->filterByFileId(array(12, 34)); // WHERE file_id IN (12, 34)
     * $query->filterByFileId(array('min' => 12)); // WHERE file_id >= 12
     * $query->filterByFileId(array('max' => 12)); // WHERE file_id <= 12
     * </code>
     *
     * @param     mixed $fileId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByFileId($fileId = null, $comparison = null)
    {
        if (is_array($fileId)) {
            $useMinMax = false;
            if (isset($fileId['min'])) {
                $this->addUsingAlias(FilesPeer::FILE_ID, $fileId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fileId['max'])) {
                $this->addUsingAlias(FilesPeer::FILE_ID, $fileId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FilesPeer::FILE_ID, $fileId, $comparison);
    }

    /**
     * Filter the query on the file_category_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFileCategoryId(1234); // WHERE file_category_id = 1234
     * $query->filterByFileCategoryId(array(12, 34)); // WHERE file_category_id IN (12, 34)
     * $query->filterByFileCategoryId(array('min' => 12)); // WHERE file_category_id >= 12
     * $query->filterByFileCategoryId(array('max' => 12)); // WHERE file_category_id <= 12
     * </code>
     *
     * @see       filterByRFileCategories()
     *
     * @param     mixed $fileCategoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByFileCategoryId($fileCategoryId = null, $comparison = null)
    {
        if (is_array($fileCategoryId)) {
            $useMinMax = false;
            if (isset($fileCategoryId['min'])) {
                $this->addUsingAlias(FilesPeer::FILE_CATEGORY_ID, $fileCategoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fileCategoryId['max'])) {
                $this->addUsingAlias(FilesPeer::FILE_CATEGORY_ID, $fileCategoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FilesPeer::FILE_CATEGORY_ID, $fileCategoryId, $comparison);
    }

    /**
     * Filter the query on the file_version column
     *
     * Example usage:
     * <code>
     * $query->filterByFileVersion(1234); // WHERE file_version = 1234
     * $query->filterByFileVersion(array(12, 34)); // WHERE file_version IN (12, 34)
     * $query->filterByFileVersion(array('min' => 12)); // WHERE file_version >= 12
     * $query->filterByFileVersion(array('max' => 12)); // WHERE file_version <= 12
     * </code>
     *
     * @param     mixed $fileVersion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByFileVersion($fileVersion = null, $comparison = null)
    {
        if (is_array($fileVersion)) {
            $useMinMax = false;
            if (isset($fileVersion['min'])) {
                $this->addUsingAlias(FilesPeer::FILE_VERSION, $fileVersion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fileVersion['max'])) {
                $this->addUsingAlias(FilesPeer::FILE_VERSION, $fileVersion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FilesPeer::FILE_VERSION, $fileVersion, $comparison);
    }

    /**
     * Filter the query on the file_entity_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFileEntityName('fooValue');   // WHERE file_entity_name = 'fooValue'
     * $query->filterByFileEntityName('%fooValue%'); // WHERE file_entity_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fileEntityName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByFileEntityName($fileEntityName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fileEntityName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fileEntityName)) {
                $fileEntityName = str_replace('*', '%', $fileEntityName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FilesPeer::FILE_ENTITY_NAME, $fileEntityName, $comparison);
    }

    /**
     * Filter the query on the file_entity_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFileEntityId(1234); // WHERE file_entity_id = 1234
     * $query->filterByFileEntityId(array(12, 34)); // WHERE file_entity_id IN (12, 34)
     * $query->filterByFileEntityId(array('min' => 12)); // WHERE file_entity_id >= 12
     * $query->filterByFileEntityId(array('max' => 12)); // WHERE file_entity_id <= 12
     * </code>
     *
     * @param     mixed $fileEntityId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByFileEntityId($fileEntityId = null, $comparison = null)
    {
        if (is_array($fileEntityId)) {
            $useMinMax = false;
            if (isset($fileEntityId['min'])) {
                $this->addUsingAlias(FilesPeer::FILE_ENTITY_ID, $fileEntityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fileEntityId['max'])) {
                $this->addUsingAlias(FilesPeer::FILE_ENTITY_ID, $fileEntityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FilesPeer::FILE_ENTITY_ID, $fileEntityId, $comparison);
    }

    /**
     * Filter the query on the file_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFileName('fooValue');   // WHERE file_name = 'fooValue'
     * $query->filterByFileName('%fooValue%'); // WHERE file_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fileName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByFileName($fileName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fileName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fileName)) {
                $fileName = str_replace('*', '%', $fileName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FilesPeer::FILE_NAME, $fileName, $comparison);
    }

    /**
     * Filter the query on the file_is_accepted_version column
     *
     * Example usage:
     * <code>
     * $query->filterByFileIsAcceptedVersion(true); // WHERE file_is_accepted_version = true
     * $query->filterByFileIsAcceptedVersion('yes'); // WHERE file_is_accepted_version = true
     * </code>
     *
     * @param     boolean|string $fileIsAcceptedVersion The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByFileIsAcceptedVersion($fileIsAcceptedVersion = null, $comparison = null)
    {
        if (is_string($fileIsAcceptedVersion)) {
            $fileIsAcceptedVersion = in_array(strtolower($fileIsAcceptedVersion), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FilesPeer::FILE_IS_ACCEPTED_VERSION, $fileIsAcceptedVersion, $comparison);
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
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(FilesPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(FilesPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FilesPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(FilesPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(FilesPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FilesPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query by a related RFileCategories object
     *
     * @param   RFileCategories|PropelObjectCollection $rFileCategories The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FilesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRFileCategories($rFileCategories, $comparison = null)
    {
        if ($rFileCategories instanceof RFileCategories) {
            return $this
                ->addUsingAlias(FilesPeer::FILE_CATEGORY_ID, $rFileCategories->getRFcaId(), $comparison);
        } elseif ($rFileCategories instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FilesPeer::FILE_CATEGORY_ID, $rFileCategories->toKeyValue('PrimaryKey', 'RFcaId'), $comparison);
        } else {
            throw new PropelException('filterByRFileCategories() only accepts arguments of type RFileCategories or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RFileCategories relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function joinRFileCategories($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RFileCategories');

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
            $this->addJoinObject($join, 'RFileCategories');
        }

        return $this;
    }

    /**
     * Use the RFileCategories relation RFileCategories object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RFileCategoriesQuery A secondary query class using the current class as primary query
     */
    public function useRFileCategoriesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRFileCategories($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RFileCategories', 'RFileCategoriesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Files $files Object to remove from the list of results
     *
     * @return FilesQuery The current query, for fluid interface
     */
    public function prune($files = null)
    {
        if ($files) {
            $this->addUsingAlias(FilesPeer::FILE_ID, $files->getFileId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
