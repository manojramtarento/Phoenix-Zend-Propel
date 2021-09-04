<?php


/**
 * Base class that represents a query for the 'factures_prestations' table.
 *
 *
 *
 * @method FacturesPrestationsQuery orderByFactPrestId($order = Criteria::ASC) Order by the fact_prest_id column
 * @method FacturesPrestationsQuery orderByFactRubId($order = Criteria::ASC) Order by the fact_rub_id column
 * @method FacturesPrestationsQuery orderByOpPrestId($order = Criteria::ASC) Order by the op_prest_id column
 * @method FacturesPrestationsQuery orderByRPrestationId($order = Criteria::ASC) Order by the r_prestation_id column
 * @method FacturesPrestationsQuery orderByFactPrestLibelle($order = Criteria::ASC) Order by the fact_prest_libelle column
 * @method FacturesPrestationsQuery orderByFactPrestDescription($order = Criteria::ASC) Order by the fact_prest_description column
 * @method FacturesPrestationsQuery orderByFactPrestOrder($order = Criteria::ASC) Order by the fact_prest_order column
 * @method FacturesPrestationsQuery orderByFactPrestOff($order = Criteria::ASC) Order by the fact_prest_off column
 * @method FacturesPrestationsQuery orderByFactPrestAdf($order = Criteria::ASC) Order by the fact_prest_adf column
 * @method FacturesPrestationsQuery orderByRPCodeComptable($order = Criteria::ASC) Order by the r_p_code_comptable column
 * @method FacturesPrestationsQuery orderByRPAxe1($order = Criteria::ASC) Order by the r_p_axe1 column
 * @method FacturesPrestationsQuery orderByRPAxe3($order = Criteria::ASC) Order by the r_p_axe3 column
 * @method FacturesPrestationsQuery orderByRPAxe4($order = Criteria::ASC) Order by the r_p_axe4 column
 * @method FacturesPrestationsQuery orderByOpPrestPv($order = Criteria::ASC) Order by the op_prest_pv column
 * @method FacturesPrestationsQuery orderByOpPrestQestim($order = Criteria::ASC) Order by the op_prest_qestim column
 * @method FacturesPrestationsQuery orderByOpPrestMestim($order = Criteria::ASC) Order by the op_prest_mestim column
 * @method FacturesPrestationsQuery orderByOpPrestQreel($order = Criteria::ASC) Order by the op_prest_qreel column
 * @method FacturesPrestationsQuery orderByOpPrestMreel($order = Criteria::ASC) Order by the op_prest_mreel column
 * @method FacturesPrestationsQuery orderByFactPrestQestimDejaFacture($order = Criteria::ASC) Order by the fact_prest_qestim_deja_facture column
 * @method FacturesPrestationsQuery orderByFactPrestQuantiteDejaFacture($order = Criteria::ASC) Order by the fact_prest_quantite_deja_facture column
 * @method FacturesPrestationsQuery orderByFactPrestMontantDejaFacture($order = Criteria::ASC) Order by the fact_prest_montant_deja_facture column
 * @method FacturesPrestationsQuery orderByRTvaTypeId($order = Criteria::ASC) Order by the r_tva_type_id column
 * @method FacturesPrestationsQuery orderByRRubTypeId($order = Criteria::ASC) Order by the r_rub_type_id column
 * @method FacturesPrestationsQuery orderByFactPrestQestimFacture($order = Criteria::ASC) Order by the fact_prest_qestim_facture column
 * @method FacturesPrestationsQuery orderByFactPrestQuantiteFacture($order = Criteria::ASC) Order by the fact_prest_quantite_facture column
 * @method FacturesPrestationsQuery orderByFactPrestMontantFacture($order = Criteria::ASC) Order by the fact_prest_montant_facture column
 * @method FacturesPrestationsQuery orderByFactPrestTauxAdf($order = Criteria::ASC) Order by the fact_prest_taux_adf column
 * @method FacturesPrestationsQuery orderByFactPrestTauxPartiel($order = Criteria::ASC) Order by the fact_prest_taux_partiel column
 * @method FacturesPrestationsQuery orderByFactPrestQestimFactureFinal($order = Criteria::ASC) Order by the fact_prest_qestim_facture_final column
 * @method FacturesPrestationsQuery orderByFactPrestQuantiteFactureFinal($order = Criteria::ASC) Order by the fact_prest_quantite_facture_final column
 * @method FacturesPrestationsQuery orderByFactPrestMontantFactureFinal($order = Criteria::ASC) Order by the fact_prest_montant_facture_final column
 *
 * @method FacturesPrestationsQuery groupByFactPrestId() Group by the fact_prest_id column
 * @method FacturesPrestationsQuery groupByFactRubId() Group by the fact_rub_id column
 * @method FacturesPrestationsQuery groupByOpPrestId() Group by the op_prest_id column
 * @method FacturesPrestationsQuery groupByRPrestationId() Group by the r_prestation_id column
 * @method FacturesPrestationsQuery groupByFactPrestLibelle() Group by the fact_prest_libelle column
 * @method FacturesPrestationsQuery groupByFactPrestDescription() Group by the fact_prest_description column
 * @method FacturesPrestationsQuery groupByFactPrestOrder() Group by the fact_prest_order column
 * @method FacturesPrestationsQuery groupByFactPrestOff() Group by the fact_prest_off column
 * @method FacturesPrestationsQuery groupByFactPrestAdf() Group by the fact_prest_adf column
 * @method FacturesPrestationsQuery groupByRPCodeComptable() Group by the r_p_code_comptable column
 * @method FacturesPrestationsQuery groupByRPAxe1() Group by the r_p_axe1 column
 * @method FacturesPrestationsQuery groupByRPAxe3() Group by the r_p_axe3 column
 * @method FacturesPrestationsQuery groupByRPAxe4() Group by the r_p_axe4 column
 * @method FacturesPrestationsQuery groupByOpPrestPv() Group by the op_prest_pv column
 * @method FacturesPrestationsQuery groupByOpPrestQestim() Group by the op_prest_qestim column
 * @method FacturesPrestationsQuery groupByOpPrestMestim() Group by the op_prest_mestim column
 * @method FacturesPrestationsQuery groupByOpPrestQreel() Group by the op_prest_qreel column
 * @method FacturesPrestationsQuery groupByOpPrestMreel() Group by the op_prest_mreel column
 * @method FacturesPrestationsQuery groupByFactPrestQestimDejaFacture() Group by the fact_prest_qestim_deja_facture column
 * @method FacturesPrestationsQuery groupByFactPrestQuantiteDejaFacture() Group by the fact_prest_quantite_deja_facture column
 * @method FacturesPrestationsQuery groupByFactPrestMontantDejaFacture() Group by the fact_prest_montant_deja_facture column
 * @method FacturesPrestationsQuery groupByRTvaTypeId() Group by the r_tva_type_id column
 * @method FacturesPrestationsQuery groupByRRubTypeId() Group by the r_rub_type_id column
 * @method FacturesPrestationsQuery groupByFactPrestQestimFacture() Group by the fact_prest_qestim_facture column
 * @method FacturesPrestationsQuery groupByFactPrestQuantiteFacture() Group by the fact_prest_quantite_facture column
 * @method FacturesPrestationsQuery groupByFactPrestMontantFacture() Group by the fact_prest_montant_facture column
 * @method FacturesPrestationsQuery groupByFactPrestTauxAdf() Group by the fact_prest_taux_adf column
 * @method FacturesPrestationsQuery groupByFactPrestTauxPartiel() Group by the fact_prest_taux_partiel column
 * @method FacturesPrestationsQuery groupByFactPrestQestimFactureFinal() Group by the fact_prest_qestim_facture_final column
 * @method FacturesPrestationsQuery groupByFactPrestQuantiteFactureFinal() Group by the fact_prest_quantite_facture_final column
 * @method FacturesPrestationsQuery groupByFactPrestMontantFactureFinal() Group by the fact_prest_montant_facture_final column
 *
 * @method FacturesPrestationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FacturesPrestationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FacturesPrestationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FacturesPrestationsQuery leftJoinFacturesRubriques($relationAlias = null) Adds a LEFT JOIN clause to the query using the FacturesRubriques relation
 * @method FacturesPrestationsQuery rightJoinFacturesRubriques($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FacturesRubriques relation
 * @method FacturesPrestationsQuery innerJoinFacturesRubriques($relationAlias = null) Adds a INNER JOIN clause to the query using the FacturesRubriques relation
 *
 * @method FacturesPrestationsQuery leftJoinRPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the RPrestations relation
 * @method FacturesPrestationsQuery rightJoinRPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RPrestations relation
 * @method FacturesPrestationsQuery innerJoinRPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the RPrestations relation
 *
 * @method FacturesPrestations findOne(PropelPDO $con = null) Return the first FacturesPrestations matching the query
 * @method FacturesPrestations findOneOrCreate(PropelPDO $con = null) Return the first FacturesPrestations matching the query, or a new FacturesPrestations object populated from the query conditions when no match is found
 *
 * @method FacturesPrestations findOneByFactRubId(int $fact_rub_id) Return the first FacturesPrestations filtered by the fact_rub_id column
 * @method FacturesPrestations findOneByOpPrestId(int $op_prest_id) Return the first FacturesPrestations filtered by the op_prest_id column
 * @method FacturesPrestations findOneByRPrestationId(int $r_prestation_id) Return the first FacturesPrestations filtered by the r_prestation_id column
 * @method FacturesPrestations findOneByFactPrestLibelle(string $fact_prest_libelle) Return the first FacturesPrestations filtered by the fact_prest_libelle column
 * @method FacturesPrestations findOneByFactPrestDescription(string $fact_prest_description) Return the first FacturesPrestations filtered by the fact_prest_description column
 * @method FacturesPrestations findOneByFactPrestOrder(int $fact_prest_order) Return the first FacturesPrestations filtered by the fact_prest_order column
 * @method FacturesPrestations findOneByFactPrestOff(boolean $fact_prest_off) Return the first FacturesPrestations filtered by the fact_prest_off column
 * @method FacturesPrestations findOneByFactPrestAdf(boolean $fact_prest_adf) Return the first FacturesPrestations filtered by the fact_prest_adf column
 * @method FacturesPrestations findOneByRPCodeComptable(string $r_p_code_comptable) Return the first FacturesPrestations filtered by the r_p_code_comptable column
 * @method FacturesPrestations findOneByRPAxe1(string $r_p_axe1) Return the first FacturesPrestations filtered by the r_p_axe1 column
 * @method FacturesPrestations findOneByRPAxe3(string $r_p_axe3) Return the first FacturesPrestations filtered by the r_p_axe3 column
 * @method FacturesPrestations findOneByRPAxe4(string $r_p_axe4) Return the first FacturesPrestations filtered by the r_p_axe4 column
 * @method FacturesPrestations findOneByOpPrestPv(float $op_prest_pv) Return the first FacturesPrestations filtered by the op_prest_pv column
 * @method FacturesPrestations findOneByOpPrestQestim(int $op_prest_qestim) Return the first FacturesPrestations filtered by the op_prest_qestim column
 * @method FacturesPrestations findOneByOpPrestMestim(float $op_prest_mestim) Return the first FacturesPrestations filtered by the op_prest_mestim column
 * @method FacturesPrestations findOneByOpPrestQreel(int $op_prest_qreel) Return the first FacturesPrestations filtered by the op_prest_qreel column
 * @method FacturesPrestations findOneByOpPrestMreel(float $op_prest_mreel) Return the first FacturesPrestations filtered by the op_prest_mreel column
 * @method FacturesPrestations findOneByFactPrestQestimDejaFacture(float $fact_prest_qestim_deja_facture) Return the first FacturesPrestations filtered by the fact_prest_qestim_deja_facture column
 * @method FacturesPrestations findOneByFactPrestQuantiteDejaFacture(float $fact_prest_quantite_deja_facture) Return the first FacturesPrestations filtered by the fact_prest_quantite_deja_facture column
 * @method FacturesPrestations findOneByFactPrestMontantDejaFacture(float $fact_prest_montant_deja_facture) Return the first FacturesPrestations filtered by the fact_prest_montant_deja_facture column
 * @method FacturesPrestations findOneByRTvaTypeId(int $r_tva_type_id) Return the first FacturesPrestations filtered by the r_tva_type_id column
 * @method FacturesPrestations findOneByRRubTypeId(int $r_rub_type_id) Return the first FacturesPrestations filtered by the r_rub_type_id column
 * @method FacturesPrestations findOneByFactPrestQestimFacture(int $fact_prest_qestim_facture) Return the first FacturesPrestations filtered by the fact_prest_qestim_facture column
 * @method FacturesPrestations findOneByFactPrestQuantiteFacture(int $fact_prest_quantite_facture) Return the first FacturesPrestations filtered by the fact_prest_quantite_facture column
 * @method FacturesPrestations findOneByFactPrestMontantFacture(float $fact_prest_montant_facture) Return the first FacturesPrestations filtered by the fact_prest_montant_facture column
 * @method FacturesPrestations findOneByFactPrestTauxAdf(int $fact_prest_taux_adf) Return the first FacturesPrestations filtered by the fact_prest_taux_adf column
 * @method FacturesPrestations findOneByFactPrestTauxPartiel(int $fact_prest_taux_partiel) Return the first FacturesPrestations filtered by the fact_prest_taux_partiel column
 * @method FacturesPrestations findOneByFactPrestQestimFactureFinal(float $fact_prest_qestim_facture_final) Return the first FacturesPrestations filtered by the fact_prest_qestim_facture_final column
 * @method FacturesPrestations findOneByFactPrestQuantiteFactureFinal(float $fact_prest_quantite_facture_final) Return the first FacturesPrestations filtered by the fact_prest_quantite_facture_final column
 * @method FacturesPrestations findOneByFactPrestMontantFactureFinal(float $fact_prest_montant_facture_final) Return the first FacturesPrestations filtered by the fact_prest_montant_facture_final column
 *
 * @method array findByFactPrestId(int $fact_prest_id) Return FacturesPrestations objects filtered by the fact_prest_id column
 * @method array findByFactRubId(int $fact_rub_id) Return FacturesPrestations objects filtered by the fact_rub_id column
 * @method array findByOpPrestId(int $op_prest_id) Return FacturesPrestations objects filtered by the op_prest_id column
 * @method array findByRPrestationId(int $r_prestation_id) Return FacturesPrestations objects filtered by the r_prestation_id column
 * @method array findByFactPrestLibelle(string $fact_prest_libelle) Return FacturesPrestations objects filtered by the fact_prest_libelle column
 * @method array findByFactPrestDescription(string $fact_prest_description) Return FacturesPrestations objects filtered by the fact_prest_description column
 * @method array findByFactPrestOrder(int $fact_prest_order) Return FacturesPrestations objects filtered by the fact_prest_order column
 * @method array findByFactPrestOff(boolean $fact_prest_off) Return FacturesPrestations objects filtered by the fact_prest_off column
 * @method array findByFactPrestAdf(boolean $fact_prest_adf) Return FacturesPrestations objects filtered by the fact_prest_adf column
 * @method array findByRPCodeComptable(string $r_p_code_comptable) Return FacturesPrestations objects filtered by the r_p_code_comptable column
 * @method array findByRPAxe1(string $r_p_axe1) Return FacturesPrestations objects filtered by the r_p_axe1 column
 * @method array findByRPAxe3(string $r_p_axe3) Return FacturesPrestations objects filtered by the r_p_axe3 column
 * @method array findByRPAxe4(string $r_p_axe4) Return FacturesPrestations objects filtered by the r_p_axe4 column
 * @method array findByOpPrestPv(float $op_prest_pv) Return FacturesPrestations objects filtered by the op_prest_pv column
 * @method array findByOpPrestQestim(int $op_prest_qestim) Return FacturesPrestations objects filtered by the op_prest_qestim column
 * @method array findByOpPrestMestim(float $op_prest_mestim) Return FacturesPrestations objects filtered by the op_prest_mestim column
 * @method array findByOpPrestQreel(int $op_prest_qreel) Return FacturesPrestations objects filtered by the op_prest_qreel column
 * @method array findByOpPrestMreel(float $op_prest_mreel) Return FacturesPrestations objects filtered by the op_prest_mreel column
 * @method array findByFactPrestQestimDejaFacture(float $fact_prest_qestim_deja_facture) Return FacturesPrestations objects filtered by the fact_prest_qestim_deja_facture column
 * @method array findByFactPrestQuantiteDejaFacture(float $fact_prest_quantite_deja_facture) Return FacturesPrestations objects filtered by the fact_prest_quantite_deja_facture column
 * @method array findByFactPrestMontantDejaFacture(float $fact_prest_montant_deja_facture) Return FacturesPrestations objects filtered by the fact_prest_montant_deja_facture column
 * @method array findByRTvaTypeId(int $r_tva_type_id) Return FacturesPrestations objects filtered by the r_tva_type_id column
 * @method array findByRRubTypeId(int $r_rub_type_id) Return FacturesPrestations objects filtered by the r_rub_type_id column
 * @method array findByFactPrestQestimFacture(int $fact_prest_qestim_facture) Return FacturesPrestations objects filtered by the fact_prest_qestim_facture column
 * @method array findByFactPrestQuantiteFacture(int $fact_prest_quantite_facture) Return FacturesPrestations objects filtered by the fact_prest_quantite_facture column
 * @method array findByFactPrestMontantFacture(float $fact_prest_montant_facture) Return FacturesPrestations objects filtered by the fact_prest_montant_facture column
 * @method array findByFactPrestTauxAdf(int $fact_prest_taux_adf) Return FacturesPrestations objects filtered by the fact_prest_taux_adf column
 * @method array findByFactPrestTauxPartiel(int $fact_prest_taux_partiel) Return FacturesPrestations objects filtered by the fact_prest_taux_partiel column
 * @method array findByFactPrestQestimFactureFinal(float $fact_prest_qestim_facture_final) Return FacturesPrestations objects filtered by the fact_prest_qestim_facture_final column
 * @method array findByFactPrestQuantiteFactureFinal(float $fact_prest_quantite_facture_final) Return FacturesPrestations objects filtered by the fact_prest_quantite_facture_final column
 * @method array findByFactPrestMontantFactureFinal(float $fact_prest_montant_facture_final) Return FacturesPrestations objects filtered by the fact_prest_montant_facture_final column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseFacturesPrestationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFacturesPrestationsQuery object.
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
            $modelName = 'FacturesPrestations';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FacturesPrestationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FacturesPrestationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FacturesPrestationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FacturesPrestationsQuery) {
            return $criteria;
        }
        $query = new FacturesPrestationsQuery(null, null, $modelAlias);

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
     * @return   FacturesPrestations|FacturesPrestations[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FacturesPrestationsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FacturesPrestations A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFactPrestId($key, $con = null)
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
     * @return                 FacturesPrestations A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `fact_prest_id`, `fact_rub_id`, `op_prest_id`, `r_prestation_id`, `fact_prest_libelle`, `fact_prest_description`, `fact_prest_order`, `fact_prest_off`, `fact_prest_adf`, `r_p_code_comptable`, `r_p_axe1`, `r_p_axe3`, `r_p_axe4`, `op_prest_pv`, `op_prest_qestim`, `op_prest_mestim`, `op_prest_qreel`, `op_prest_mreel`, `fact_prest_qestim_deja_facture`, `fact_prest_quantite_deja_facture`, `fact_prest_montant_deja_facture`, `r_tva_type_id`, `r_rub_type_id`, `fact_prest_qestim_facture`, `fact_prest_quantite_facture`, `fact_prest_montant_facture`, `fact_prest_taux_adf`, `fact_prest_taux_partiel`, `fact_prest_qestim_facture_final`, `fact_prest_quantite_facture_final`, `fact_prest_montant_facture_final` FROM `factures_prestations` WHERE `fact_prest_id` = :p0';
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
            $obj = new FacturesPrestations();
            $obj->hydrate($row);
            FacturesPrestationsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FacturesPrestations|FacturesPrestations[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FacturesPrestations[]|mixed the list of results, formatted by the current formatter
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
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the fact_prest_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestId(1234); // WHERE fact_prest_id = 1234
     * $query->filterByFactPrestId(array(12, 34)); // WHERE fact_prest_id IN (12, 34)
     * $query->filterByFactPrestId(array('min' => 12)); // WHERE fact_prest_id >= 12
     * $query->filterByFactPrestId(array('max' => 12)); // WHERE fact_prest_id <= 12
     * </code>
     *
     * @param     mixed $factPrestId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestId($factPrestId = null, $comparison = null)
    {
        if (is_array($factPrestId)) {
            $useMinMax = false;
            if (isset($factPrestId['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_ID, $factPrestId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestId['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_ID, $factPrestId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_ID, $factPrestId, $comparison);
    }

    /**
     * Filter the query on the fact_rub_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactRubId(1234); // WHERE fact_rub_id = 1234
     * $query->filterByFactRubId(array(12, 34)); // WHERE fact_rub_id IN (12, 34)
     * $query->filterByFactRubId(array('min' => 12)); // WHERE fact_rub_id >= 12
     * $query->filterByFactRubId(array('max' => 12)); // WHERE fact_rub_id <= 12
     * </code>
     *
     * @see       filterByFacturesRubriques()
     *
     * @param     mixed $factRubId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactRubId($factRubId = null, $comparison = null)
    {
        if (is_array($factRubId)) {
            $useMinMax = false;
            if (isset($factRubId['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_RUB_ID, $factRubId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factRubId['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_RUB_ID, $factRubId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_RUB_ID, $factRubId, $comparison);
    }

    /**
     * Filter the query on the op_prest_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestId(1234); // WHERE op_prest_id = 1234
     * $query->filterByOpPrestId(array(12, 34)); // WHERE op_prest_id IN (12, 34)
     * $query->filterByOpPrestId(array('min' => 12)); // WHERE op_prest_id >= 12
     * $query->filterByOpPrestId(array('max' => 12)); // WHERE op_prest_id <= 12
     * </code>
     *
     * @param     mixed $opPrestId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestId($opPrestId = null, $comparison = null)
    {
        if (is_array($opPrestId)) {
            $useMinMax = false;
            if (isset($opPrestId['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_ID, $opPrestId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestId['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_ID, $opPrestId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_ID, $opPrestId, $comparison);
    }

    /**
     * Filter the query on the r_prestation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPrestationId(1234); // WHERE r_prestation_id = 1234
     * $query->filterByRPrestationId(array(12, 34)); // WHERE r_prestation_id IN (12, 34)
     * $query->filterByRPrestationId(array('min' => 12)); // WHERE r_prestation_id >= 12
     * $query->filterByRPrestationId(array('max' => 12)); // WHERE r_prestation_id <= 12
     * </code>
     *
     * @see       filterByRPrestations()
     *
     * @param     mixed $rPrestationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPrestationId($rPrestationId = null, $comparison = null)
    {
        if (is_array($rPrestationId)) {
            $useMinMax = false;
            if (isset($rPrestationId['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::R_PRESTATION_ID, $rPrestationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPrestationId['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::R_PRESTATION_ID, $rPrestationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::R_PRESTATION_ID, $rPrestationId, $comparison);
    }

    /**
     * Filter the query on the fact_prest_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestLibelle('fooValue');   // WHERE fact_prest_libelle = 'fooValue'
     * $query->filterByFactPrestLibelle('%fooValue%'); // WHERE fact_prest_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factPrestLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestLibelle($factPrestLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factPrestLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factPrestLibelle)) {
                $factPrestLibelle = str_replace('*', '%', $factPrestLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_LIBELLE, $factPrestLibelle, $comparison);
    }

    /**
     * Filter the query on the fact_prest_description column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestDescription('fooValue');   // WHERE fact_prest_description = 'fooValue'
     * $query->filterByFactPrestDescription('%fooValue%'); // WHERE fact_prest_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factPrestDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestDescription($factPrestDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factPrestDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factPrestDescription)) {
                $factPrestDescription = str_replace('*', '%', $factPrestDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_DESCRIPTION, $factPrestDescription, $comparison);
    }

    /**
     * Filter the query on the fact_prest_order column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestOrder(1234); // WHERE fact_prest_order = 1234
     * $query->filterByFactPrestOrder(array(12, 34)); // WHERE fact_prest_order IN (12, 34)
     * $query->filterByFactPrestOrder(array('min' => 12)); // WHERE fact_prest_order >= 12
     * $query->filterByFactPrestOrder(array('max' => 12)); // WHERE fact_prest_order <= 12
     * </code>
     *
     * @param     mixed $factPrestOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestOrder($factPrestOrder = null, $comparison = null)
    {
        if (is_array($factPrestOrder)) {
            $useMinMax = false;
            if (isset($factPrestOrder['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_ORDER, $factPrestOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestOrder['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_ORDER, $factPrestOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_ORDER, $factPrestOrder, $comparison);
    }

    /**
     * Filter the query on the fact_prest_off column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestOff(true); // WHERE fact_prest_off = true
     * $query->filterByFactPrestOff('yes'); // WHERE fact_prest_off = true
     * </code>
     *
     * @param     boolean|string $factPrestOff The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestOff($factPrestOff = null, $comparison = null)
    {
        if (is_string($factPrestOff)) {
            $factPrestOff = in_array(strtolower($factPrestOff), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_OFF, $factPrestOff, $comparison);
    }

    /**
     * Filter the query on the fact_prest_adf column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestAdf(true); // WHERE fact_prest_adf = true
     * $query->filterByFactPrestAdf('yes'); // WHERE fact_prest_adf = true
     * </code>
     *
     * @param     boolean|string $factPrestAdf The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestAdf($factPrestAdf = null, $comparison = null)
    {
        if (is_string($factPrestAdf)) {
            $factPrestAdf = in_array(strtolower($factPrestAdf), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_ADF, $factPrestAdf, $comparison);
    }

    /**
     * Filter the query on the r_p_code_comptable column
     *
     * Example usage:
     * <code>
     * $query->filterByRPCodeComptable('fooValue');   // WHERE r_p_code_comptable = 'fooValue'
     * $query->filterByRPCodeComptable('%fooValue%'); // WHERE r_p_code_comptable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPCodeComptable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPCodeComptable($rPCodeComptable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPCodeComptable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPCodeComptable)) {
                $rPCodeComptable = str_replace('*', '%', $rPCodeComptable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::R_P_CODE_COMPTABLE, $rPCodeComptable, $comparison);
    }

    /**
     * Filter the query on the r_p_axe1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe1('fooValue');   // WHERE r_p_axe1 = 'fooValue'
     * $query->filterByRPAxe1('%fooValue%'); // WHERE r_p_axe1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPAxe1($rPAxe1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe1)) {
                $rPAxe1 = str_replace('*', '%', $rPAxe1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::R_P_AXE1, $rPAxe1, $comparison);
    }

    /**
     * Filter the query on the r_p_axe3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe3('fooValue');   // WHERE r_p_axe3 = 'fooValue'
     * $query->filterByRPAxe3('%fooValue%'); // WHERE r_p_axe3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPAxe3($rPAxe3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe3)) {
                $rPAxe3 = str_replace('*', '%', $rPAxe3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::R_P_AXE3, $rPAxe3, $comparison);
    }

    /**
     * Filter the query on the r_p_axe4 column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe4('fooValue');   // WHERE r_p_axe4 = 'fooValue'
     * $query->filterByRPAxe4('%fooValue%'); // WHERE r_p_axe4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPAxe4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPAxe4($rPAxe4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPAxe4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPAxe4)) {
                $rPAxe4 = str_replace('*', '%', $rPAxe4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::R_P_AXE4, $rPAxe4, $comparison);
    }

    /**
     * Filter the query on the op_prest_pv column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestPv(1234); // WHERE op_prest_pv = 1234
     * $query->filterByOpPrestPv(array(12, 34)); // WHERE op_prest_pv IN (12, 34)
     * $query->filterByOpPrestPv(array('min' => 12)); // WHERE op_prest_pv >= 12
     * $query->filterByOpPrestPv(array('max' => 12)); // WHERE op_prest_pv <= 12
     * </code>
     *
     * @param     mixed $opPrestPv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestPv($opPrestPv = null, $comparison = null)
    {
        if (is_array($opPrestPv)) {
            $useMinMax = false;
            if (isset($opPrestPv['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_PV, $opPrestPv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestPv['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_PV, $opPrestPv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_PV, $opPrestPv, $comparison);
    }

    /**
     * Filter the query on the op_prest_qestim column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestQestim(1234); // WHERE op_prest_qestim = 1234
     * $query->filterByOpPrestQestim(array(12, 34)); // WHERE op_prest_qestim IN (12, 34)
     * $query->filterByOpPrestQestim(array('min' => 12)); // WHERE op_prest_qestim >= 12
     * $query->filterByOpPrestQestim(array('max' => 12)); // WHERE op_prest_qestim <= 12
     * </code>
     *
     * @param     mixed $opPrestQestim The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestQestim($opPrestQestim = null, $comparison = null)
    {
        if (is_array($opPrestQestim)) {
            $useMinMax = false;
            if (isset($opPrestQestim['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_QESTIM, $opPrestQestim['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestQestim['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_QESTIM, $opPrestQestim['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_QESTIM, $opPrestQestim, $comparison);
    }

    /**
     * Filter the query on the op_prest_mestim column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestMestim(1234); // WHERE op_prest_mestim = 1234
     * $query->filterByOpPrestMestim(array(12, 34)); // WHERE op_prest_mestim IN (12, 34)
     * $query->filterByOpPrestMestim(array('min' => 12)); // WHERE op_prest_mestim >= 12
     * $query->filterByOpPrestMestim(array('max' => 12)); // WHERE op_prest_mestim <= 12
     * </code>
     *
     * @param     mixed $opPrestMestim The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestMestim($opPrestMestim = null, $comparison = null)
    {
        if (is_array($opPrestMestim)) {
            $useMinMax = false;
            if (isset($opPrestMestim['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_MESTIM, $opPrestMestim['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestMestim['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_MESTIM, $opPrestMestim['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_MESTIM, $opPrestMestim, $comparison);
    }

    /**
     * Filter the query on the op_prest_qreel column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestQreel(1234); // WHERE op_prest_qreel = 1234
     * $query->filterByOpPrestQreel(array(12, 34)); // WHERE op_prest_qreel IN (12, 34)
     * $query->filterByOpPrestQreel(array('min' => 12)); // WHERE op_prest_qreel >= 12
     * $query->filterByOpPrestQreel(array('max' => 12)); // WHERE op_prest_qreel <= 12
     * </code>
     *
     * @param     mixed $opPrestQreel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestQreel($opPrestQreel = null, $comparison = null)
    {
        if (is_array($opPrestQreel)) {
            $useMinMax = false;
            if (isset($opPrestQreel['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_QREEL, $opPrestQreel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestQreel['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_QREEL, $opPrestQreel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_QREEL, $opPrestQreel, $comparison);
    }

    /**
     * Filter the query on the op_prest_mreel column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestMreel(1234); // WHERE op_prest_mreel = 1234
     * $query->filterByOpPrestMreel(array(12, 34)); // WHERE op_prest_mreel IN (12, 34)
     * $query->filterByOpPrestMreel(array('min' => 12)); // WHERE op_prest_mreel >= 12
     * $query->filterByOpPrestMreel(array('max' => 12)); // WHERE op_prest_mreel <= 12
     * </code>
     *
     * @param     mixed $opPrestMreel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestMreel($opPrestMreel = null, $comparison = null)
    {
        if (is_array($opPrestMreel)) {
            $useMinMax = false;
            if (isset($opPrestMreel['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_MREEL, $opPrestMreel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestMreel['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_MREEL, $opPrestMreel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::OP_PREST_MREEL, $opPrestMreel, $comparison);
    }

    /**
     * Filter the query on the fact_prest_qestim_deja_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestQestimDejaFacture(1234); // WHERE fact_prest_qestim_deja_facture = 1234
     * $query->filterByFactPrestQestimDejaFacture(array(12, 34)); // WHERE fact_prest_qestim_deja_facture IN (12, 34)
     * $query->filterByFactPrestQestimDejaFacture(array('min' => 12)); // WHERE fact_prest_qestim_deja_facture >= 12
     * $query->filterByFactPrestQestimDejaFacture(array('max' => 12)); // WHERE fact_prest_qestim_deja_facture <= 12
     * </code>
     *
     * @param     mixed $factPrestQestimDejaFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestQestimDejaFacture($factPrestQestimDejaFacture = null, $comparison = null)
    {
        if (is_array($factPrestQestimDejaFacture)) {
            $useMinMax = false;
            if (isset($factPrestQestimDejaFacture['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE, $factPrestQestimDejaFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestQestimDejaFacture['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE, $factPrestQestimDejaFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE, $factPrestQestimDejaFacture, $comparison);
    }

    /**
     * Filter the query on the fact_prest_quantite_deja_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestQuantiteDejaFacture(1234); // WHERE fact_prest_quantite_deja_facture = 1234
     * $query->filterByFactPrestQuantiteDejaFacture(array(12, 34)); // WHERE fact_prest_quantite_deja_facture IN (12, 34)
     * $query->filterByFactPrestQuantiteDejaFacture(array('min' => 12)); // WHERE fact_prest_quantite_deja_facture >= 12
     * $query->filterByFactPrestQuantiteDejaFacture(array('max' => 12)); // WHERE fact_prest_quantite_deja_facture <= 12
     * </code>
     *
     * @param     mixed $factPrestQuantiteDejaFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestQuantiteDejaFacture($factPrestQuantiteDejaFacture = null, $comparison = null)
    {
        if (is_array($factPrestQuantiteDejaFacture)) {
            $useMinMax = false;
            if (isset($factPrestQuantiteDejaFacture['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE, $factPrestQuantiteDejaFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestQuantiteDejaFacture['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE, $factPrestQuantiteDejaFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE, $factPrestQuantiteDejaFacture, $comparison);
    }

    /**
     * Filter the query on the fact_prest_montant_deja_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestMontantDejaFacture(1234); // WHERE fact_prest_montant_deja_facture = 1234
     * $query->filterByFactPrestMontantDejaFacture(array(12, 34)); // WHERE fact_prest_montant_deja_facture IN (12, 34)
     * $query->filterByFactPrestMontantDejaFacture(array('min' => 12)); // WHERE fact_prest_montant_deja_facture >= 12
     * $query->filterByFactPrestMontantDejaFacture(array('max' => 12)); // WHERE fact_prest_montant_deja_facture <= 12
     * </code>
     *
     * @param     mixed $factPrestMontantDejaFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestMontantDejaFacture($factPrestMontantDejaFacture = null, $comparison = null)
    {
        if (is_array($factPrestMontantDejaFacture)) {
            $useMinMax = false;
            if (isset($factPrestMontantDejaFacture['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE, $factPrestMontantDejaFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestMontantDejaFacture['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE, $factPrestMontantDejaFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE, $factPrestMontantDejaFacture, $comparison);
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
     * @param     mixed $rTvaTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByRTvaTypeId($rTvaTypeId = null, $comparison = null)
    {
        if (is_array($rTvaTypeId)) {
            $useMinMax = false;
            if (isset($rTvaTypeId['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::R_TVA_TYPE_ID, $rTvaTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rTvaTypeId['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::R_TVA_TYPE_ID, $rTvaTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::R_TVA_TYPE_ID, $rTvaTypeId, $comparison);
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
     * @param     mixed $rRubTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByRRubTypeId($rRubTypeId = null, $comparison = null)
    {
        if (is_array($rRubTypeId)) {
            $useMinMax = false;
            if (isset($rRubTypeId['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::R_RUB_TYPE_ID, $rRubTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rRubTypeId['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::R_RUB_TYPE_ID, $rRubTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::R_RUB_TYPE_ID, $rRubTypeId, $comparison);
    }

    /**
     * Filter the query on the fact_prest_qestim_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestQestimFacture(1234); // WHERE fact_prest_qestim_facture = 1234
     * $query->filterByFactPrestQestimFacture(array(12, 34)); // WHERE fact_prest_qestim_facture IN (12, 34)
     * $query->filterByFactPrestQestimFacture(array('min' => 12)); // WHERE fact_prest_qestim_facture >= 12
     * $query->filterByFactPrestQestimFacture(array('max' => 12)); // WHERE fact_prest_qestim_facture <= 12
     * </code>
     *
     * @param     mixed $factPrestQestimFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestQestimFacture($factPrestQestimFacture = null, $comparison = null)
    {
        if (is_array($factPrestQestimFacture)) {
            $useMinMax = false;
            if (isset($factPrestQestimFacture['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE, $factPrestQestimFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestQestimFacture['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE, $factPrestQestimFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE, $factPrestQestimFacture, $comparison);
    }

    /**
     * Filter the query on the fact_prest_quantite_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestQuantiteFacture(1234); // WHERE fact_prest_quantite_facture = 1234
     * $query->filterByFactPrestQuantiteFacture(array(12, 34)); // WHERE fact_prest_quantite_facture IN (12, 34)
     * $query->filterByFactPrestQuantiteFacture(array('min' => 12)); // WHERE fact_prest_quantite_facture >= 12
     * $query->filterByFactPrestQuantiteFacture(array('max' => 12)); // WHERE fact_prest_quantite_facture <= 12
     * </code>
     *
     * @param     mixed $factPrestQuantiteFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestQuantiteFacture($factPrestQuantiteFacture = null, $comparison = null)
    {
        if (is_array($factPrestQuantiteFacture)) {
            $useMinMax = false;
            if (isset($factPrestQuantiteFacture['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE, $factPrestQuantiteFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestQuantiteFacture['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE, $factPrestQuantiteFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE, $factPrestQuantiteFacture, $comparison);
    }

    /**
     * Filter the query on the fact_prest_montant_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestMontantFacture(1234); // WHERE fact_prest_montant_facture = 1234
     * $query->filterByFactPrestMontantFacture(array(12, 34)); // WHERE fact_prest_montant_facture IN (12, 34)
     * $query->filterByFactPrestMontantFacture(array('min' => 12)); // WHERE fact_prest_montant_facture >= 12
     * $query->filterByFactPrestMontantFacture(array('max' => 12)); // WHERE fact_prest_montant_facture <= 12
     * </code>
     *
     * @param     mixed $factPrestMontantFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestMontantFacture($factPrestMontantFacture = null, $comparison = null)
    {
        if (is_array($factPrestMontantFacture)) {
            $useMinMax = false;
            if (isset($factPrestMontantFacture['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE, $factPrestMontantFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestMontantFacture['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE, $factPrestMontantFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE, $factPrestMontantFacture, $comparison);
    }

    /**
     * Filter the query on the fact_prest_taux_adf column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestTauxAdf(1234); // WHERE fact_prest_taux_adf = 1234
     * $query->filterByFactPrestTauxAdf(array(12, 34)); // WHERE fact_prest_taux_adf IN (12, 34)
     * $query->filterByFactPrestTauxAdf(array('min' => 12)); // WHERE fact_prest_taux_adf >= 12
     * $query->filterByFactPrestTauxAdf(array('max' => 12)); // WHERE fact_prest_taux_adf <= 12
     * </code>
     *
     * @param     mixed $factPrestTauxAdf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestTauxAdf($factPrestTauxAdf = null, $comparison = null)
    {
        if (is_array($factPrestTauxAdf)) {
            $useMinMax = false;
            if (isset($factPrestTauxAdf['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_TAUX_ADF, $factPrestTauxAdf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestTauxAdf['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_TAUX_ADF, $factPrestTauxAdf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_TAUX_ADF, $factPrestTauxAdf, $comparison);
    }

    /**
     * Filter the query on the fact_prest_taux_partiel column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestTauxPartiel(1234); // WHERE fact_prest_taux_partiel = 1234
     * $query->filterByFactPrestTauxPartiel(array(12, 34)); // WHERE fact_prest_taux_partiel IN (12, 34)
     * $query->filterByFactPrestTauxPartiel(array('min' => 12)); // WHERE fact_prest_taux_partiel >= 12
     * $query->filterByFactPrestTauxPartiel(array('max' => 12)); // WHERE fact_prest_taux_partiel <= 12
     * </code>
     *
     * @param     mixed $factPrestTauxPartiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestTauxPartiel($factPrestTauxPartiel = null, $comparison = null)
    {
        if (is_array($factPrestTauxPartiel)) {
            $useMinMax = false;
            if (isset($factPrestTauxPartiel['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL, $factPrestTauxPartiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestTauxPartiel['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL, $factPrestTauxPartiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL, $factPrestTauxPartiel, $comparison);
    }

    /**
     * Filter the query on the fact_prest_qestim_facture_final column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestQestimFactureFinal(1234); // WHERE fact_prest_qestim_facture_final = 1234
     * $query->filterByFactPrestQestimFactureFinal(array(12, 34)); // WHERE fact_prest_qestim_facture_final IN (12, 34)
     * $query->filterByFactPrestQestimFactureFinal(array('min' => 12)); // WHERE fact_prest_qestim_facture_final >= 12
     * $query->filterByFactPrestQestimFactureFinal(array('max' => 12)); // WHERE fact_prest_qestim_facture_final <= 12
     * </code>
     *
     * @param     mixed $factPrestQestimFactureFinal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestQestimFactureFinal($factPrestQestimFactureFinal = null, $comparison = null)
    {
        if (is_array($factPrestQestimFactureFinal)) {
            $useMinMax = false;
            if (isset($factPrestQestimFactureFinal['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL, $factPrestQestimFactureFinal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestQestimFactureFinal['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL, $factPrestQestimFactureFinal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL, $factPrestQestimFactureFinal, $comparison);
    }

    /**
     * Filter the query on the fact_prest_quantite_facture_final column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestQuantiteFactureFinal(1234); // WHERE fact_prest_quantite_facture_final = 1234
     * $query->filterByFactPrestQuantiteFactureFinal(array(12, 34)); // WHERE fact_prest_quantite_facture_final IN (12, 34)
     * $query->filterByFactPrestQuantiteFactureFinal(array('min' => 12)); // WHERE fact_prest_quantite_facture_final >= 12
     * $query->filterByFactPrestQuantiteFactureFinal(array('max' => 12)); // WHERE fact_prest_quantite_facture_final <= 12
     * </code>
     *
     * @param     mixed $factPrestQuantiteFactureFinal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestQuantiteFactureFinal($factPrestQuantiteFactureFinal = null, $comparison = null)
    {
        if (is_array($factPrestQuantiteFactureFinal)) {
            $useMinMax = false;
            if (isset($factPrestQuantiteFactureFinal['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL, $factPrestQuantiteFactureFinal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestQuantiteFactureFinal['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL, $factPrestQuantiteFactureFinal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL, $factPrestQuantiteFactureFinal, $comparison);
    }

    /**
     * Filter the query on the fact_prest_montant_facture_final column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPrestMontantFactureFinal(1234); // WHERE fact_prest_montant_facture_final = 1234
     * $query->filterByFactPrestMontantFactureFinal(array(12, 34)); // WHERE fact_prest_montant_facture_final IN (12, 34)
     * $query->filterByFactPrestMontantFactureFinal(array('min' => 12)); // WHERE fact_prest_montant_facture_final >= 12
     * $query->filterByFactPrestMontantFactureFinal(array('max' => 12)); // WHERE fact_prest_montant_facture_final <= 12
     * </code>
     *
     * @param     mixed $factPrestMontantFactureFinal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function filterByFactPrestMontantFactureFinal($factPrestMontantFactureFinal = null, $comparison = null)
    {
        if (is_array($factPrestMontantFactureFinal)) {
            $useMinMax = false;
            if (isset($factPrestMontantFactureFinal['min'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL, $factPrestMontantFactureFinal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factPrestMontantFactureFinal['max'])) {
                $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL, $factPrestMontantFactureFinal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL, $factPrestMontantFactureFinal, $comparison);
    }

    /**
     * Filter the query by a related FacturesRubriques object
     *
     * @param   FacturesRubriques|PropelObjectCollection $facturesRubriques The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FacturesPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFacturesRubriques($facturesRubriques, $comparison = null)
    {
        if ($facturesRubriques instanceof FacturesRubriques) {
            return $this
                ->addUsingAlias(FacturesPrestationsPeer::FACT_RUB_ID, $facturesRubriques->getFactRubId(), $comparison);
        } elseif ($facturesRubriques instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FacturesPrestationsPeer::FACT_RUB_ID, $facturesRubriques->toKeyValue('PrimaryKey', 'FactRubId'), $comparison);
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
     * @return FacturesPrestationsQuery The current query, for fluid interface
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
     * Filter the query by a related RPrestations object
     *
     * @param   RPrestations|PropelObjectCollection $rPrestations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FacturesPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRPrestations($rPrestations, $comparison = null)
    {
        if ($rPrestations instanceof RPrestations) {
            return $this
                ->addUsingAlias(FacturesPrestationsPeer::R_PRESTATION_ID, $rPrestations->getRPrestationId(), $comparison);
        } elseif ($rPrestations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FacturesPrestationsPeer::R_PRESTATION_ID, $rPrestations->toKeyValue('PrimaryKey', 'RPrestationId'), $comparison);
        } else {
            throw new PropelException('filterByRPrestations() only accepts arguments of type RPrestations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RPrestations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function joinRPrestations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RPrestations');

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
            $this->addJoinObject($join, 'RPrestations');
        }

        return $this;
    }

    /**
     * Use the RPrestations relation RPrestations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RPrestationsQuery A secondary query class using the current class as primary query
     */
    public function useRPrestationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RPrestations', 'RPrestationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   FacturesPrestations $facturesPrestations Object to remove from the list of results
     *
     * @return FacturesPrestationsQuery The current query, for fluid interface
     */
    public function prune($facturesPrestations = null)
    {
        if ($facturesPrestations) {
            $this->addUsingAlias(FacturesPrestationsPeer::FACT_PREST_ID, $facturesPrestations->getFactPrestId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
