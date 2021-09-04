<?php


/**
 * Base class that represents a query for the 'i18n' table.
 *
 *
 *
 * @method I18nQuery orderByI18nId($order = Criteria::ASC) Order by the i18n_id column
 * @method I18nQuery orderByModelName($order = Criteria::ASC) Order by the model_name column
 * @method I18nQuery orderByLocale($order = Criteria::ASC) Order by the locale column
 * @method I18nQuery orderByFieldName($order = Criteria::ASC) Order by the field_name column
 * @method I18nQuery orderByForeignKey($order = Criteria::ASC) Order by the foreign_key column
 * @method I18nQuery orderByFieldValue($order = Criteria::ASC) Order by the field_value column
 *
 * @method I18nQuery groupByI18nId() Group by the i18n_id column
 * @method I18nQuery groupByModelName() Group by the model_name column
 * @method I18nQuery groupByLocale() Group by the locale column
 * @method I18nQuery groupByFieldName() Group by the field_name column
 * @method I18nQuery groupByForeignKey() Group by the foreign_key column
 * @method I18nQuery groupByFieldValue() Group by the field_value column
 *
 * @method I18nQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method I18nQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method I18nQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method I18n findOne(PropelPDO $con = null) Return the first I18n matching the query
 * @method I18n findOneOrCreate(PropelPDO $con = null) Return the first I18n matching the query, or a new I18n object populated from the query conditions when no match is found
 *
 * @method I18n findOneByModelName(string $model_name) Return the first I18n filtered by the model_name column
 * @method I18n findOneByLocale(string $locale) Return the first I18n filtered by the locale column
 * @method I18n findOneByFieldName(string $field_name) Return the first I18n filtered by the field_name column
 * @method I18n findOneByForeignKey(int $foreign_key) Return the first I18n filtered by the foreign_key column
 * @method I18n findOneByFieldValue(string $field_value) Return the first I18n filtered by the field_value column
 *
 * @method array findByI18nId(int $i18n_id) Return I18n objects filtered by the i18n_id column
 * @method array findByModelName(string $model_name) Return I18n objects filtered by the model_name column
 * @method array findByLocale(string $locale) Return I18n objects filtered by the locale column
 * @method array findByFieldName(string $field_name) Return I18n objects filtered by the field_name column
 * @method array findByForeignKey(int $foreign_key) Return I18n objects filtered by the foreign_key column
 * @method array findByFieldValue(string $field_value) Return I18n objects filtered by the field_value column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseI18nQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseI18nQuery object.
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
            $modelName = 'I18n';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new I18nQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   I18nQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return I18nQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof I18nQuery) {
            return $criteria;
        }
        $query = new I18nQuery(null, null, $modelAlias);

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
     * @return   I18n|I18n[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = I18nPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(I18nPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 I18n A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByI18nId($key, $con = null)
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
     * @return                 I18n A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `i18n_id`, `model_name`, `locale`, `field_name`, `foreign_key`, `field_value` FROM `i18n` WHERE `i18n_id` = :p0';
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
            $obj = new I18n();
            $obj->hydrate($row);
            I18nPeer::addInstanceToPool($obj, (string) $key);
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
     * @return I18n|I18n[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|I18n[]|mixed the list of results, formatted by the current formatter
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
     * @return I18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(I18nPeer::I18N_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return I18nQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(I18nPeer::I18N_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the i18n_id column
     *
     * Example usage:
     * <code>
     * $query->filterByI18nId(1234); // WHERE i18n_id = 1234
     * $query->filterByI18nId(array(12, 34)); // WHERE i18n_id IN (12, 34)
     * $query->filterByI18nId(array('min' => 12)); // WHERE i18n_id >= 12
     * $query->filterByI18nId(array('max' => 12)); // WHERE i18n_id <= 12
     * </code>
     *
     * @param     mixed $i18nId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return I18nQuery The current query, for fluid interface
     */
    public function filterByI18nId($i18nId = null, $comparison = null)
    {
        if (is_array($i18nId)) {
            $useMinMax = false;
            if (isset($i18nId['min'])) {
                $this->addUsingAlias(I18nPeer::I18N_ID, $i18nId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($i18nId['max'])) {
                $this->addUsingAlias(I18nPeer::I18N_ID, $i18nId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(I18nPeer::I18N_ID, $i18nId, $comparison);
    }

    /**
     * Filter the query on the model_name column
     *
     * Example usage:
     * <code>
     * $query->filterByModelName('fooValue');   // WHERE model_name = 'fooValue'
     * $query->filterByModelName('%fooValue%'); // WHERE model_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modelName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return I18nQuery The current query, for fluid interface
     */
    public function filterByModelName($modelName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modelName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modelName)) {
                $modelName = str_replace('*', '%', $modelName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(I18nPeer::MODEL_NAME, $modelName, $comparison);
    }

    /**
     * Filter the query on the locale column
     *
     * Example usage:
     * <code>
     * $query->filterByLocale('fooValue');   // WHERE locale = 'fooValue'
     * $query->filterByLocale('%fooValue%'); // WHERE locale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return I18nQuery The current query, for fluid interface
     */
    public function filterByLocale($locale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locale)) {
                $locale = str_replace('*', '%', $locale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(I18nPeer::LOCALE, $locale, $comparison);
    }

    /**
     * Filter the query on the field_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFieldName('fooValue');   // WHERE field_name = 'fooValue'
     * $query->filterByFieldName('%fooValue%'); // WHERE field_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fieldName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return I18nQuery The current query, for fluid interface
     */
    public function filterByFieldName($fieldName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fieldName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fieldName)) {
                $fieldName = str_replace('*', '%', $fieldName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(I18nPeer::FIELD_NAME, $fieldName, $comparison);
    }

    /**
     * Filter the query on the foreign_key column
     *
     * Example usage:
     * <code>
     * $query->filterByForeignKey(1234); // WHERE foreign_key = 1234
     * $query->filterByForeignKey(array(12, 34)); // WHERE foreign_key IN (12, 34)
     * $query->filterByForeignKey(array('min' => 12)); // WHERE foreign_key >= 12
     * $query->filterByForeignKey(array('max' => 12)); // WHERE foreign_key <= 12
     * </code>
     *
     * @param     mixed $foreignKey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return I18nQuery The current query, for fluid interface
     */
    public function filterByForeignKey($foreignKey = null, $comparison = null)
    {
        if (is_array($foreignKey)) {
            $useMinMax = false;
            if (isset($foreignKey['min'])) {
                $this->addUsingAlias(I18nPeer::FOREIGN_KEY, $foreignKey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foreignKey['max'])) {
                $this->addUsingAlias(I18nPeer::FOREIGN_KEY, $foreignKey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(I18nPeer::FOREIGN_KEY, $foreignKey, $comparison);
    }

    /**
     * Filter the query on the field_value column
     *
     * Example usage:
     * <code>
     * $query->filterByFieldValue('fooValue');   // WHERE field_value = 'fooValue'
     * $query->filterByFieldValue('%fooValue%'); // WHERE field_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fieldValue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return I18nQuery The current query, for fluid interface
     */
    public function filterByFieldValue($fieldValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fieldValue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fieldValue)) {
                $fieldValue = str_replace('*', '%', $fieldValue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(I18nPeer::FIELD_VALUE, $fieldValue, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   I18n $i18n Object to remove from the list of results
     *
     * @return I18nQuery The current query, for fluid interface
     */
    public function prune($i18n = null)
    {
        if ($i18n) {
            $this->addUsingAlias(I18nPeer::I18N_ID, $i18n->getI18nId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
