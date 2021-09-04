<?php


/**
 * Base class that represents a query for the 'operation_prestations' table.
 *
 *
 *
 * @method OperationPrestationsQuery orderByOpPrestId($order = Criteria::ASC) Order by the op_prest_id column
 * @method OperationPrestationsQuery orderByOpRPrestId($order = Criteria::ASC) Order by the op_r_prest_id column
 * @method OperationPrestationsQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method OperationPrestationsQuery orderByOpPrestRubriId($order = Criteria::ASC) Order by the op_prest_rubri_id column
 * @method OperationPrestationsQuery orderByOpPrestLibelle($order = Criteria::ASC) Order by the op_prest_libelle column
 * @method OperationPrestationsQuery orderByOpPrestLibelleDevis($order = Criteria::ASC) Order by the op_prest_libelle_devis column
 * @method OperationPrestationsQuery orderByOpPrestDescription($order = Criteria::ASC) Order by the op_prest_description column
 * @method OperationPrestationsQuery orderByOpPrestCommentInterne($order = Criteria::ASC) Order by the op_prest_comment_interne column
 * @method OperationPrestationsQuery orderByOpPrestOrder($order = Criteria::ASC) Order by the op_prest_order column
 * @method OperationPrestationsQuery orderByOpPrestScenaId($order = Criteria::ASC) Order by the op_prest_scena_id column
 * @method OperationPrestationsQuery orderByOpPrestPrimeId($order = Criteria::ASC) Order by the op_prest_prime_id column
 * @method OperationPrestationsQuery orderByOpPrestPv($order = Criteria::ASC) Order by the op_prest_pv column
 * @method OperationPrestationsQuery orderByOpPrestCoef($order = Criteria::ASC) Order by the op_prest_coef column
 * @method OperationPrestationsQuery orderByOpPrestCiestim($order = Criteria::ASC) Order by the op_prest_ciestim column
 * @method OperationPrestationsQuery orderByOpPrestCeestim($order = Criteria::ASC) Order by the op_prest_ceestim column
 * @method OperationPrestationsQuery orderByOpPrestQestim($order = Criteria::ASC) Order by the op_prest_qestim column
 * @method OperationPrestationsQuery orderByOpPrestMestim($order = Criteria::ASC) Order by the op_prest_mestim column
 * @method OperationPrestationsQuery orderByOpPrestCireel($order = Criteria::ASC) Order by the op_prest_cireel column
 * @method OperationPrestationsQuery orderByOpPrestCereel($order = Criteria::ASC) Order by the op_prest_cereel column
 * @method OperationPrestationsQuery orderByOpPrestQreel($order = Criteria::ASC) Order by the op_prest_qreel column
 * @method OperationPrestationsQuery orderByOpPrestMreel($order = Criteria::ASC) Order by the op_prest_mreel column
 * @method OperationPrestationsQuery orderByOpPrestCoutsValides($order = Criteria::ASC) Order by the op_prest_couts_valides column
 * @method OperationPrestationsQuery orderByOpPrestOff($order = Criteria::ASC) Order by the op_prest_off column
 * @method OperationPrestationsQuery orderByOpPrestNpr($order = Criteria::ASC) Order by the op_prest_npr column
 * @method OperationPrestationsQuery orderByOpPrestNpa($order = Criteria::ASC) Order by the op_prest_npa column
 * @method OperationPrestationsQuery orderByOpPrestCodeComptable($order = Criteria::ASC) Order by the op_prest_code_comptable column
 * @method OperationPrestationsQuery orderByOpAdf($order = Criteria::ASC) Order by the op_adf column
 * @method OperationPrestationsQuery orderByOpUserCoutsEstim($order = Criteria::ASC) Order by the op_user_couts_estim column
 * @method OperationPrestationsQuery orderByOpUserCoutsReel($order = Criteria::ASC) Order by the op_user_couts_reel column
 * @method OperationPrestationsQuery orderByOpPrestIsMajFromCompiluo($order = Criteria::ASC) Order by the op_prest_is_maj_from_compiluo column
 * @method OperationPrestationsQuery orderByDateDebutPrestation($order = Criteria::ASC) Order by the date_debut_prestation column
 * @method OperationPrestationsQuery orderByDateFinPrestation($order = Criteria::ASC) Order by the date_fin_prestation column
 * @method OperationPrestationsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method OperationPrestationsQuery orderByOpPrestIsMandatory($order = Criteria::ASC) Order by the op_prest_is_mandatory column
 * @method OperationPrestationsQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method OperationPrestationsQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method OperationPrestationsQuery orderByCostUpdaterUser($order = Criteria::ASC) Order by the cost_updater_user column
 * @method OperationPrestationsQuery orderByCostValidationDate($order = Criteria::ASC) Order by the cost_validation_date column
 *
 * @method OperationPrestationsQuery groupByOpPrestId() Group by the op_prest_id column
 * @method OperationPrestationsQuery groupByOpRPrestId() Group by the op_r_prest_id column
 * @method OperationPrestationsQuery groupByOpId() Group by the op_id column
 * @method OperationPrestationsQuery groupByOpPrestRubriId() Group by the op_prest_rubri_id column
 * @method OperationPrestationsQuery groupByOpPrestLibelle() Group by the op_prest_libelle column
 * @method OperationPrestationsQuery groupByOpPrestLibelleDevis() Group by the op_prest_libelle_devis column
 * @method OperationPrestationsQuery groupByOpPrestDescription() Group by the op_prest_description column
 * @method OperationPrestationsQuery groupByOpPrestCommentInterne() Group by the op_prest_comment_interne column
 * @method OperationPrestationsQuery groupByOpPrestOrder() Group by the op_prest_order column
 * @method OperationPrestationsQuery groupByOpPrestScenaId() Group by the op_prest_scena_id column
 * @method OperationPrestationsQuery groupByOpPrestPrimeId() Group by the op_prest_prime_id column
 * @method OperationPrestationsQuery groupByOpPrestPv() Group by the op_prest_pv column
 * @method OperationPrestationsQuery groupByOpPrestCoef() Group by the op_prest_coef column
 * @method OperationPrestationsQuery groupByOpPrestCiestim() Group by the op_prest_ciestim column
 * @method OperationPrestationsQuery groupByOpPrestCeestim() Group by the op_prest_ceestim column
 * @method OperationPrestationsQuery groupByOpPrestQestim() Group by the op_prest_qestim column
 * @method OperationPrestationsQuery groupByOpPrestMestim() Group by the op_prest_mestim column
 * @method OperationPrestationsQuery groupByOpPrestCireel() Group by the op_prest_cireel column
 * @method OperationPrestationsQuery groupByOpPrestCereel() Group by the op_prest_cereel column
 * @method OperationPrestationsQuery groupByOpPrestQreel() Group by the op_prest_qreel column
 * @method OperationPrestationsQuery groupByOpPrestMreel() Group by the op_prest_mreel column
 * @method OperationPrestationsQuery groupByOpPrestCoutsValides() Group by the op_prest_couts_valides column
 * @method OperationPrestationsQuery groupByOpPrestOff() Group by the op_prest_off column
 * @method OperationPrestationsQuery groupByOpPrestNpr() Group by the op_prest_npr column
 * @method OperationPrestationsQuery groupByOpPrestNpa() Group by the op_prest_npa column
 * @method OperationPrestationsQuery groupByOpPrestCodeComptable() Group by the op_prest_code_comptable column
 * @method OperationPrestationsQuery groupByOpAdf() Group by the op_adf column
 * @method OperationPrestationsQuery groupByOpUserCoutsEstim() Group by the op_user_couts_estim column
 * @method OperationPrestationsQuery groupByOpUserCoutsReel() Group by the op_user_couts_reel column
 * @method OperationPrestationsQuery groupByOpPrestIsMajFromCompiluo() Group by the op_prest_is_maj_from_compiluo column
 * @method OperationPrestationsQuery groupByDateDebutPrestation() Group by the date_debut_prestation column
 * @method OperationPrestationsQuery groupByDateFinPrestation() Group by the date_fin_prestation column
 * @method OperationPrestationsQuery groupByDateCreate() Group by the date_create column
 * @method OperationPrestationsQuery groupByOpPrestIsMandatory() Group by the op_prest_is_mandatory column
 * @method OperationPrestationsQuery groupByUserModify() Group by the user_modify column
 * @method OperationPrestationsQuery groupByDateModify() Group by the date_modify column
 * @method OperationPrestationsQuery groupByCostUpdaterUser() Group by the cost_updater_user column
 * @method OperationPrestationsQuery groupByCostValidationDate() Group by the cost_validation_date column
 *
 * @method OperationPrestationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationPrestationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationPrestationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationPrestationsQuery leftJoinOperationScenarii($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationScenarii relation
 * @method OperationPrestationsQuery rightJoinOperationScenarii($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationScenarii relation
 * @method OperationPrestationsQuery innerJoinOperationScenarii($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationScenarii relation
 *
 * @method OperationPrestationsQuery leftJoinOperationRubriques($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationRubriques relation
 * @method OperationPrestationsQuery rightJoinOperationRubriques($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationRubriques relation
 * @method OperationPrestationsQuery innerJoinOperationRubriques($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationRubriques relation
 *
 * @method OperationPrestationsQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method OperationPrestationsQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method OperationPrestationsQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method OperationPrestationsQuery leftJoinRPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the RPrestations relation
 * @method OperationPrestationsQuery rightJoinRPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RPrestations relation
 * @method OperationPrestationsQuery innerJoinRPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the RPrestations relation
 *
 * @method OperationPrestationsQuery leftJoinOperationPrimes($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrimes relation
 * @method OperationPrestationsQuery rightJoinOperationPrimes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrimes relation
 * @method OperationPrestationsQuery innerJoinOperationPrimes($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrimes relation
 *
 * @method OperationPrestationsQuery leftJoinHistoCouts($relationAlias = null) Adds a LEFT JOIN clause to the query using the HistoCouts relation
 * @method OperationPrestationsQuery rightJoinHistoCouts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the HistoCouts relation
 * @method OperationPrestationsQuery innerJoinHistoCouts($relationAlias = null) Adds a INNER JOIN clause to the query using the HistoCouts relation
 *
 * @method OperationPrestationsQuery leftJoinUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the Users relation
 * @method OperationPrestationsQuery rightJoinUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Users relation
 * @method OperationPrestationsQuery innerJoinUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the Users relation
 *
 * @method OperationPrestations findOne(PropelPDO $con = null) Return the first OperationPrestations matching the query
 * @method OperationPrestations findOneOrCreate(PropelPDO $con = null) Return the first OperationPrestations matching the query, or a new OperationPrestations object populated from the query conditions when no match is found
 *
 * @method OperationPrestations findOneByOpRPrestId(int $op_r_prest_id) Return the first OperationPrestations filtered by the op_r_prest_id column
 * @method OperationPrestations findOneByOpId(int $op_id) Return the first OperationPrestations filtered by the op_id column
 * @method OperationPrestations findOneByOpPrestRubriId(int $op_prest_rubri_id) Return the first OperationPrestations filtered by the op_prest_rubri_id column
 * @method OperationPrestations findOneByOpPrestLibelle(string $op_prest_libelle) Return the first OperationPrestations filtered by the op_prest_libelle column
 * @method OperationPrestations findOneByOpPrestLibelleDevis(string $op_prest_libelle_devis) Return the first OperationPrestations filtered by the op_prest_libelle_devis column
 * @method OperationPrestations findOneByOpPrestDescription(string $op_prest_description) Return the first OperationPrestations filtered by the op_prest_description column
 * @method OperationPrestations findOneByOpPrestCommentInterne(string $op_prest_comment_interne) Return the first OperationPrestations filtered by the op_prest_comment_interne column
 * @method OperationPrestations findOneByOpPrestOrder(int $op_prest_order) Return the first OperationPrestations filtered by the op_prest_order column
 * @method OperationPrestations findOneByOpPrestScenaId(int $op_prest_scena_id) Return the first OperationPrestations filtered by the op_prest_scena_id column
 * @method OperationPrestations findOneByOpPrestPrimeId(int $op_prest_prime_id) Return the first OperationPrestations filtered by the op_prest_prime_id column
 * @method OperationPrestations findOneByOpPrestPv(float $op_prest_pv) Return the first OperationPrestations filtered by the op_prest_pv column
 * @method OperationPrestations findOneByOpPrestCoef(float $op_prest_coef) Return the first OperationPrestations filtered by the op_prest_coef column
 * @method OperationPrestations findOneByOpPrestCiestim(float $op_prest_ciestim) Return the first OperationPrestations filtered by the op_prest_ciestim column
 * @method OperationPrestations findOneByOpPrestCeestim(float $op_prest_ceestim) Return the first OperationPrestations filtered by the op_prest_ceestim column
 * @method OperationPrestations findOneByOpPrestQestim(int $op_prest_qestim) Return the first OperationPrestations filtered by the op_prest_qestim column
 * @method OperationPrestations findOneByOpPrestMestim(float $op_prest_mestim) Return the first OperationPrestations filtered by the op_prest_mestim column
 * @method OperationPrestations findOneByOpPrestCireel(float $op_prest_cireel) Return the first OperationPrestations filtered by the op_prest_cireel column
 * @method OperationPrestations findOneByOpPrestCereel(float $op_prest_cereel) Return the first OperationPrestations filtered by the op_prest_cereel column
 * @method OperationPrestations findOneByOpPrestQreel(int $op_prest_qreel) Return the first OperationPrestations filtered by the op_prest_qreel column
 * @method OperationPrestations findOneByOpPrestMreel(float $op_prest_mreel) Return the first OperationPrestations filtered by the op_prest_mreel column
 * @method OperationPrestations findOneByOpPrestCoutsValides(boolean $op_prest_couts_valides) Return the first OperationPrestations filtered by the op_prest_couts_valides column
 * @method OperationPrestations findOneByOpPrestOff(boolean $op_prest_off) Return the first OperationPrestations filtered by the op_prest_off column
 * @method OperationPrestations findOneByOpPrestNpr(boolean $op_prest_npr) Return the first OperationPrestations filtered by the op_prest_npr column
 * @method OperationPrestations findOneByOpPrestNpa(boolean $op_prest_npa) Return the first OperationPrestations filtered by the op_prest_npa column
 * @method OperationPrestations findOneByOpPrestCodeComptable(string $op_prest_code_comptable) Return the first OperationPrestations filtered by the op_prest_code_comptable column
 * @method OperationPrestations findOneByOpAdf(boolean $op_adf) Return the first OperationPrestations filtered by the op_adf column
 * @method OperationPrestations findOneByOpUserCoutsEstim(int $op_user_couts_estim) Return the first OperationPrestations filtered by the op_user_couts_estim column
 * @method OperationPrestations findOneByOpUserCoutsReel(int $op_user_couts_reel) Return the first OperationPrestations filtered by the op_user_couts_reel column
 * @method OperationPrestations findOneByOpPrestIsMajFromCompiluo(boolean $op_prest_is_maj_from_compiluo) Return the first OperationPrestations filtered by the op_prest_is_maj_from_compiluo column
 * @method OperationPrestations findOneByDateDebutPrestation(string $date_debut_prestation) Return the first OperationPrestations filtered by the date_debut_prestation column
 * @method OperationPrestations findOneByDateFinPrestation(string $date_fin_prestation) Return the first OperationPrestations filtered by the date_fin_prestation column
 * @method OperationPrestations findOneByDateCreate(string $date_create) Return the first OperationPrestations filtered by the date_create column
 * @method OperationPrestations findOneByOpPrestIsMandatory(boolean $op_prest_is_mandatory) Return the first OperationPrestations filtered by the op_prest_is_mandatory column
 * @method OperationPrestations findOneByUserModify(int $user_modify) Return the first OperationPrestations filtered by the user_modify column
 * @method OperationPrestations findOneByDateModify(string $date_modify) Return the first OperationPrestations filtered by the date_modify column
 * @method OperationPrestations findOneByCostUpdaterUser(int $cost_updater_user) Return the first OperationPrestations filtered by the cost_updater_user column
 * @method OperationPrestations findOneByCostValidationDate(string $cost_validation_date) Return the first OperationPrestations filtered by the cost_validation_date column
 *
 * @method array findByOpPrestId(int $op_prest_id) Return OperationPrestations objects filtered by the op_prest_id column
 * @method array findByOpRPrestId(int $op_r_prest_id) Return OperationPrestations objects filtered by the op_r_prest_id column
 * @method array findByOpId(int $op_id) Return OperationPrestations objects filtered by the op_id column
 * @method array findByOpPrestRubriId(int $op_prest_rubri_id) Return OperationPrestations objects filtered by the op_prest_rubri_id column
 * @method array findByOpPrestLibelle(string $op_prest_libelle) Return OperationPrestations objects filtered by the op_prest_libelle column
 * @method array findByOpPrestLibelleDevis(string $op_prest_libelle_devis) Return OperationPrestations objects filtered by the op_prest_libelle_devis column
 * @method array findByOpPrestDescription(string $op_prest_description) Return OperationPrestations objects filtered by the op_prest_description column
 * @method array findByOpPrestCommentInterne(string $op_prest_comment_interne) Return OperationPrestations objects filtered by the op_prest_comment_interne column
 * @method array findByOpPrestOrder(int $op_prest_order) Return OperationPrestations objects filtered by the op_prest_order column
 * @method array findByOpPrestScenaId(int $op_prest_scena_id) Return OperationPrestations objects filtered by the op_prest_scena_id column
 * @method array findByOpPrestPrimeId(int $op_prest_prime_id) Return OperationPrestations objects filtered by the op_prest_prime_id column
 * @method array findByOpPrestPv(float $op_prest_pv) Return OperationPrestations objects filtered by the op_prest_pv column
 * @method array findByOpPrestCoef(float $op_prest_coef) Return OperationPrestations objects filtered by the op_prest_coef column
 * @method array findByOpPrestCiestim(float $op_prest_ciestim) Return OperationPrestations objects filtered by the op_prest_ciestim column
 * @method array findByOpPrestCeestim(float $op_prest_ceestim) Return OperationPrestations objects filtered by the op_prest_ceestim column
 * @method array findByOpPrestQestim(int $op_prest_qestim) Return OperationPrestations objects filtered by the op_prest_qestim column
 * @method array findByOpPrestMestim(float $op_prest_mestim) Return OperationPrestations objects filtered by the op_prest_mestim column
 * @method array findByOpPrestCireel(float $op_prest_cireel) Return OperationPrestations objects filtered by the op_prest_cireel column
 * @method array findByOpPrestCereel(float $op_prest_cereel) Return OperationPrestations objects filtered by the op_prest_cereel column
 * @method array findByOpPrestQreel(int $op_prest_qreel) Return OperationPrestations objects filtered by the op_prest_qreel column
 * @method array findByOpPrestMreel(float $op_prest_mreel) Return OperationPrestations objects filtered by the op_prest_mreel column
 * @method array findByOpPrestCoutsValides(boolean $op_prest_couts_valides) Return OperationPrestations objects filtered by the op_prest_couts_valides column
 * @method array findByOpPrestOff(boolean $op_prest_off) Return OperationPrestations objects filtered by the op_prest_off column
 * @method array findByOpPrestNpr(boolean $op_prest_npr) Return OperationPrestations objects filtered by the op_prest_npr column
 * @method array findByOpPrestNpa(boolean $op_prest_npa) Return OperationPrestations objects filtered by the op_prest_npa column
 * @method array findByOpPrestCodeComptable(string $op_prest_code_comptable) Return OperationPrestations objects filtered by the op_prest_code_comptable column
 * @method array findByOpAdf(boolean $op_adf) Return OperationPrestations objects filtered by the op_adf column
 * @method array findByOpUserCoutsEstim(int $op_user_couts_estim) Return OperationPrestations objects filtered by the op_user_couts_estim column
 * @method array findByOpUserCoutsReel(int $op_user_couts_reel) Return OperationPrestations objects filtered by the op_user_couts_reel column
 * @method array findByOpPrestIsMajFromCompiluo(boolean $op_prest_is_maj_from_compiluo) Return OperationPrestations objects filtered by the op_prest_is_maj_from_compiluo column
 * @method array findByDateDebutPrestation(string $date_debut_prestation) Return OperationPrestations objects filtered by the date_debut_prestation column
 * @method array findByDateFinPrestation(string $date_fin_prestation) Return OperationPrestations objects filtered by the date_fin_prestation column
 * @method array findByDateCreate(string $date_create) Return OperationPrestations objects filtered by the date_create column
 * @method array findByOpPrestIsMandatory(boolean $op_prest_is_mandatory) Return OperationPrestations objects filtered by the op_prest_is_mandatory column
 * @method array findByUserModify(int $user_modify) Return OperationPrestations objects filtered by the user_modify column
 * @method array findByDateModify(string $date_modify) Return OperationPrestations objects filtered by the date_modify column
 * @method array findByCostUpdaterUser(int $cost_updater_user) Return OperationPrestations objects filtered by the cost_updater_user column
 * @method array findByCostValidationDate(string $cost_validation_date) Return OperationPrestations objects filtered by the cost_validation_date column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationPrestationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationPrestationsQuery object.
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
            $modelName = 'OperationPrestations';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationPrestationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationPrestationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationPrestationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationPrestationsQuery) {
            return $criteria;
        }
        $query = new OperationPrestationsQuery(null, null, $modelAlias);

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
     * @return   OperationPrestations|OperationPrestations[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationPrestationsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 OperationPrestations A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOpPrestId($key, $con = null)
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
     * @return                 OperationPrestations A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_prest_id`, `op_r_prest_id`, `op_id`, `op_prest_rubri_id`, `op_prest_libelle`, `op_prest_libelle_devis`, `op_prest_description`, `op_prest_comment_interne`, `op_prest_order`, `op_prest_scena_id`, `op_prest_prime_id`, `op_prest_pv`, `op_prest_coef`, `op_prest_ciestim`, `op_prest_ceestim`, `op_prest_qestim`, `op_prest_mestim`, `op_prest_cireel`, `op_prest_cereel`, `op_prest_qreel`, `op_prest_mreel`, `op_prest_couts_valides`, `op_prest_off`, `op_prest_npr`, `op_prest_npa`, `op_prest_code_comptable`, `op_adf`, `op_user_couts_estim`, `op_user_couts_reel`, `op_prest_is_maj_from_compiluo`, `date_debut_prestation`, `date_fin_prestation`, `date_create`, `op_prest_is_mandatory`, `user_modify`, `date_modify`, `cost_updater_user`, `cost_validation_date` FROM `operation_prestations` WHERE `op_prest_id` = :p0';
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
            $obj = new OperationPrestations();
            $obj->hydrate($row);
            OperationPrestationsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return OperationPrestations|OperationPrestations[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|OperationPrestations[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_ID, $keys, Criteria::IN);
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
     * @see       filterByHistoCouts()
     *
     * @param     mixed $opPrestId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestId($opPrestId = null, $comparison = null)
    {
        if (is_array($opPrestId)) {
            $useMinMax = false;
            if (isset($opPrestId['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_ID, $opPrestId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestId['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_ID, $opPrestId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_ID, $opPrestId, $comparison);
    }

    /**
     * Filter the query on the op_r_prest_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpRPrestId(1234); // WHERE op_r_prest_id = 1234
     * $query->filterByOpRPrestId(array(12, 34)); // WHERE op_r_prest_id IN (12, 34)
     * $query->filterByOpRPrestId(array('min' => 12)); // WHERE op_r_prest_id >= 12
     * $query->filterByOpRPrestId(array('max' => 12)); // WHERE op_r_prest_id <= 12
     * </code>
     *
     * @see       filterByRPrestations()
     *
     * @param     mixed $opRPrestId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpRPrestId($opRPrestId = null, $comparison = null)
    {
        if (is_array($opRPrestId)) {
            $useMinMax = false;
            if (isset($opRPrestId['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_R_PREST_ID, $opRPrestId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opRPrestId['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_R_PREST_ID, $opRPrestId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_R_PREST_ID, $opRPrestId, $comparison);
    }

    /**
     * Filter the query on the op_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpId(1234); // WHERE op_id = 1234
     * $query->filterByOpId(array(12, 34)); // WHERE op_id IN (12, 34)
     * $query->filterByOpId(array('min' => 12)); // WHERE op_id >= 12
     * $query->filterByOpId(array('max' => 12)); // WHERE op_id <= 12
     * </code>
     *
     * @see       filterByOperations()
     *
     * @param     mixed $opId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the op_prest_rubri_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestRubriId(1234); // WHERE op_prest_rubri_id = 1234
     * $query->filterByOpPrestRubriId(array(12, 34)); // WHERE op_prest_rubri_id IN (12, 34)
     * $query->filterByOpPrestRubriId(array('min' => 12)); // WHERE op_prest_rubri_id >= 12
     * $query->filterByOpPrestRubriId(array('max' => 12)); // WHERE op_prest_rubri_id <= 12
     * </code>
     *
     * @see       filterByOperationRubriques()
     *
     * @param     mixed $opPrestRubriId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestRubriId($opPrestRubriId = null, $comparison = null)
    {
        if (is_array($opPrestRubriId)) {
            $useMinMax = false;
            if (isset($opPrestRubriId['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_RUBRI_ID, $opPrestRubriId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestRubriId['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_RUBRI_ID, $opPrestRubriId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_RUBRI_ID, $opPrestRubriId, $comparison);
    }

    /**
     * Filter the query on the op_prest_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestLibelle('fooValue');   // WHERE op_prest_libelle = 'fooValue'
     * $query->filterByOpPrestLibelle('%fooValue%'); // WHERE op_prest_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opPrestLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestLibelle($opPrestLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opPrestLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opPrestLibelle)) {
                $opPrestLibelle = str_replace('*', '%', $opPrestLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_LIBELLE, $opPrestLibelle, $comparison);
    }

    /**
     * Filter the query on the op_prest_libelle_devis column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestLibelleDevis('fooValue');   // WHERE op_prest_libelle_devis = 'fooValue'
     * $query->filterByOpPrestLibelleDevis('%fooValue%'); // WHERE op_prest_libelle_devis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opPrestLibelleDevis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestLibelleDevis($opPrestLibelleDevis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opPrestLibelleDevis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opPrestLibelleDevis)) {
                $opPrestLibelleDevis = str_replace('*', '%', $opPrestLibelleDevis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_LIBELLE_DEVIS, $opPrestLibelleDevis, $comparison);
    }

    /**
     * Filter the query on the op_prest_description column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestDescription('fooValue');   // WHERE op_prest_description = 'fooValue'
     * $query->filterByOpPrestDescription('%fooValue%'); // WHERE op_prest_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opPrestDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestDescription($opPrestDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opPrestDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opPrestDescription)) {
                $opPrestDescription = str_replace('*', '%', $opPrestDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_DESCRIPTION, $opPrestDescription, $comparison);
    }

    /**
     * Filter the query on the op_prest_comment_interne column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestCommentInterne('fooValue');   // WHERE op_prest_comment_interne = 'fooValue'
     * $query->filterByOpPrestCommentInterne('%fooValue%'); // WHERE op_prest_comment_interne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opPrestCommentInterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestCommentInterne($opPrestCommentInterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opPrestCommentInterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opPrestCommentInterne)) {
                $opPrestCommentInterne = str_replace('*', '%', $opPrestCommentInterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_COMMENT_INTERNE, $opPrestCommentInterne, $comparison);
    }

    /**
     * Filter the query on the op_prest_order column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestOrder(1234); // WHERE op_prest_order = 1234
     * $query->filterByOpPrestOrder(array(12, 34)); // WHERE op_prest_order IN (12, 34)
     * $query->filterByOpPrestOrder(array('min' => 12)); // WHERE op_prest_order >= 12
     * $query->filterByOpPrestOrder(array('max' => 12)); // WHERE op_prest_order <= 12
     * </code>
     *
     * @param     mixed $opPrestOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestOrder($opPrestOrder = null, $comparison = null)
    {
        if (is_array($opPrestOrder)) {
            $useMinMax = false;
            if (isset($opPrestOrder['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_ORDER, $opPrestOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestOrder['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_ORDER, $opPrestOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_ORDER, $opPrestOrder, $comparison);
    }

    /**
     * Filter the query on the op_prest_scena_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestScenaId(1234); // WHERE op_prest_scena_id = 1234
     * $query->filterByOpPrestScenaId(array(12, 34)); // WHERE op_prest_scena_id IN (12, 34)
     * $query->filterByOpPrestScenaId(array('min' => 12)); // WHERE op_prest_scena_id >= 12
     * $query->filterByOpPrestScenaId(array('max' => 12)); // WHERE op_prest_scena_id <= 12
     * </code>
     *
     * @see       filterByOperationScenarii()
     *
     * @param     mixed $opPrestScenaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestScenaId($opPrestScenaId = null, $comparison = null)
    {
        if (is_array($opPrestScenaId)) {
            $useMinMax = false;
            if (isset($opPrestScenaId['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_SCENA_ID, $opPrestScenaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestScenaId['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_SCENA_ID, $opPrestScenaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_SCENA_ID, $opPrestScenaId, $comparison);
    }

    /**
     * Filter the query on the op_prest_prime_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestPrimeId(1234); // WHERE op_prest_prime_id = 1234
     * $query->filterByOpPrestPrimeId(array(12, 34)); // WHERE op_prest_prime_id IN (12, 34)
     * $query->filterByOpPrestPrimeId(array('min' => 12)); // WHERE op_prest_prime_id >= 12
     * $query->filterByOpPrestPrimeId(array('max' => 12)); // WHERE op_prest_prime_id <= 12
     * </code>
     *
     * @see       filterByOperationPrimes()
     *
     * @param     mixed $opPrestPrimeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestPrimeId($opPrestPrimeId = null, $comparison = null)
    {
        if (is_array($opPrestPrimeId)) {
            $useMinMax = false;
            if (isset($opPrestPrimeId['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_PRIME_ID, $opPrestPrimeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestPrimeId['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_PRIME_ID, $opPrestPrimeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_PRIME_ID, $opPrestPrimeId, $comparison);
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
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestPv($opPrestPv = null, $comparison = null)
    {
        if (is_array($opPrestPv)) {
            $useMinMax = false;
            if (isset($opPrestPv['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_PV, $opPrestPv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestPv['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_PV, $opPrestPv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_PV, $opPrestPv, $comparison);
    }

    /**
     * Filter the query on the op_prest_coef column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestCoef(1234); // WHERE op_prest_coef = 1234
     * $query->filterByOpPrestCoef(array(12, 34)); // WHERE op_prest_coef IN (12, 34)
     * $query->filterByOpPrestCoef(array('min' => 12)); // WHERE op_prest_coef >= 12
     * $query->filterByOpPrestCoef(array('max' => 12)); // WHERE op_prest_coef <= 12
     * </code>
     *
     * @param     mixed $opPrestCoef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestCoef($opPrestCoef = null, $comparison = null)
    {
        if (is_array($opPrestCoef)) {
            $useMinMax = false;
            if (isset($opPrestCoef['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_COEF, $opPrestCoef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestCoef['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_COEF, $opPrestCoef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_COEF, $opPrestCoef, $comparison);
    }

    /**
     * Filter the query on the op_prest_ciestim column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestCiestim(1234); // WHERE op_prest_ciestim = 1234
     * $query->filterByOpPrestCiestim(array(12, 34)); // WHERE op_prest_ciestim IN (12, 34)
     * $query->filterByOpPrestCiestim(array('min' => 12)); // WHERE op_prest_ciestim >= 12
     * $query->filterByOpPrestCiestim(array('max' => 12)); // WHERE op_prest_ciestim <= 12
     * </code>
     *
     * @param     mixed $opPrestCiestim The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestCiestim($opPrestCiestim = null, $comparison = null)
    {
        if (is_array($opPrestCiestim)) {
            $useMinMax = false;
            if (isset($opPrestCiestim['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CIESTIM, $opPrestCiestim['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestCiestim['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CIESTIM, $opPrestCiestim['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CIESTIM, $opPrestCiestim, $comparison);
    }

    /**
     * Filter the query on the op_prest_ceestim column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestCeestim(1234); // WHERE op_prest_ceestim = 1234
     * $query->filterByOpPrestCeestim(array(12, 34)); // WHERE op_prest_ceestim IN (12, 34)
     * $query->filterByOpPrestCeestim(array('min' => 12)); // WHERE op_prest_ceestim >= 12
     * $query->filterByOpPrestCeestim(array('max' => 12)); // WHERE op_prest_ceestim <= 12
     * </code>
     *
     * @param     mixed $opPrestCeestim The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestCeestim($opPrestCeestim = null, $comparison = null)
    {
        if (is_array($opPrestCeestim)) {
            $useMinMax = false;
            if (isset($opPrestCeestim['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CEESTIM, $opPrestCeestim['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestCeestim['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CEESTIM, $opPrestCeestim['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CEESTIM, $opPrestCeestim, $comparison);
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
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestQestim($opPrestQestim = null, $comparison = null)
    {
        if (is_array($opPrestQestim)) {
            $useMinMax = false;
            if (isset($opPrestQestim['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_QESTIM, $opPrestQestim['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestQestim['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_QESTIM, $opPrestQestim['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_QESTIM, $opPrestQestim, $comparison);
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
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestMestim($opPrestMestim = null, $comparison = null)
    {
        if (is_array($opPrestMestim)) {
            $useMinMax = false;
            if (isset($opPrestMestim['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_MESTIM, $opPrestMestim['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestMestim['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_MESTIM, $opPrestMestim['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_MESTIM, $opPrestMestim, $comparison);
    }

    /**
     * Filter the query on the op_prest_cireel column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestCireel(1234); // WHERE op_prest_cireel = 1234
     * $query->filterByOpPrestCireel(array(12, 34)); // WHERE op_prest_cireel IN (12, 34)
     * $query->filterByOpPrestCireel(array('min' => 12)); // WHERE op_prest_cireel >= 12
     * $query->filterByOpPrestCireel(array('max' => 12)); // WHERE op_prest_cireel <= 12
     * </code>
     *
     * @param     mixed $opPrestCireel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestCireel($opPrestCireel = null, $comparison = null)
    {
        if (is_array($opPrestCireel)) {
            $useMinMax = false;
            if (isset($opPrestCireel['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CIREEL, $opPrestCireel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestCireel['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CIREEL, $opPrestCireel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CIREEL, $opPrestCireel, $comparison);
    }

    /**
     * Filter the query on the op_prest_cereel column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestCereel(1234); // WHERE op_prest_cereel = 1234
     * $query->filterByOpPrestCereel(array(12, 34)); // WHERE op_prest_cereel IN (12, 34)
     * $query->filterByOpPrestCereel(array('min' => 12)); // WHERE op_prest_cereel >= 12
     * $query->filterByOpPrestCereel(array('max' => 12)); // WHERE op_prest_cereel <= 12
     * </code>
     *
     * @param     mixed $opPrestCereel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestCereel($opPrestCereel = null, $comparison = null)
    {
        if (is_array($opPrestCereel)) {
            $useMinMax = false;
            if (isset($opPrestCereel['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CEREEL, $opPrestCereel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestCereel['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CEREEL, $opPrestCereel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CEREEL, $opPrestCereel, $comparison);
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
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestQreel($opPrestQreel = null, $comparison = null)
    {
        if (is_array($opPrestQreel)) {
            $useMinMax = false;
            if (isset($opPrestQreel['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_QREEL, $opPrestQreel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestQreel['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_QREEL, $opPrestQreel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_QREEL, $opPrestQreel, $comparison);
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
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestMreel($opPrestMreel = null, $comparison = null)
    {
        if (is_array($opPrestMreel)) {
            $useMinMax = false;
            if (isset($opPrestMreel['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_MREEL, $opPrestMreel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opPrestMreel['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_MREEL, $opPrestMreel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_MREEL, $opPrestMreel, $comparison);
    }

    /**
     * Filter the query on the op_prest_couts_valides column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestCoutsValides(true); // WHERE op_prest_couts_valides = true
     * $query->filterByOpPrestCoutsValides('yes'); // WHERE op_prest_couts_valides = true
     * </code>
     *
     * @param     boolean|string $opPrestCoutsValides The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestCoutsValides($opPrestCoutsValides = null, $comparison = null)
    {
        if (is_string($opPrestCoutsValides)) {
            $opPrestCoutsValides = in_array(strtolower($opPrestCoutsValides), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_COUTS_VALIDES, $opPrestCoutsValides, $comparison);
    }

    /**
     * Filter the query on the op_prest_off column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestOff(true); // WHERE op_prest_off = true
     * $query->filterByOpPrestOff('yes'); // WHERE op_prest_off = true
     * </code>
     *
     * @param     boolean|string $opPrestOff The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestOff($opPrestOff = null, $comparison = null)
    {
        if (is_string($opPrestOff)) {
            $opPrestOff = in_array(strtolower($opPrestOff), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_OFF, $opPrestOff, $comparison);
    }

    /**
     * Filter the query on the op_prest_npr column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestNpr(true); // WHERE op_prest_npr = true
     * $query->filterByOpPrestNpr('yes'); // WHERE op_prest_npr = true
     * </code>
     *
     * @param     boolean|string $opPrestNpr The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestNpr($opPrestNpr = null, $comparison = null)
    {
        if (is_string($opPrestNpr)) {
            $opPrestNpr = in_array(strtolower($opPrestNpr), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_NPR, $opPrestNpr, $comparison);
    }

    /**
     * Filter the query on the op_prest_npa column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestNpa(true); // WHERE op_prest_npa = true
     * $query->filterByOpPrestNpa('yes'); // WHERE op_prest_npa = true
     * </code>
     *
     * @param     boolean|string $opPrestNpa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestNpa($opPrestNpa = null, $comparison = null)
    {
        if (is_string($opPrestNpa)) {
            $opPrestNpa = in_array(strtolower($opPrestNpa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_NPA, $opPrestNpa, $comparison);
    }

    /**
     * Filter the query on the op_prest_code_comptable column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestCodeComptable('fooValue');   // WHERE op_prest_code_comptable = 'fooValue'
     * $query->filterByOpPrestCodeComptable('%fooValue%'); // WHERE op_prest_code_comptable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opPrestCodeComptable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestCodeComptable($opPrestCodeComptable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opPrestCodeComptable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opPrestCodeComptable)) {
                $opPrestCodeComptable = str_replace('*', '%', $opPrestCodeComptable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_CODE_COMPTABLE, $opPrestCodeComptable, $comparison);
    }

    /**
     * Filter the query on the op_adf column
     *
     * Example usage:
     * <code>
     * $query->filterByOpAdf(true); // WHERE op_adf = true
     * $query->filterByOpAdf('yes'); // WHERE op_adf = true
     * </code>
     *
     * @param     boolean|string $opAdf The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpAdf($opAdf = null, $comparison = null)
    {
        if (is_string($opAdf)) {
            $opAdf = in_array(strtolower($opAdf), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_ADF, $opAdf, $comparison);
    }

    /**
     * Filter the query on the op_user_couts_estim column
     *
     * Example usage:
     * <code>
     * $query->filterByOpUserCoutsEstim(1234); // WHERE op_user_couts_estim = 1234
     * $query->filterByOpUserCoutsEstim(array(12, 34)); // WHERE op_user_couts_estim IN (12, 34)
     * $query->filterByOpUserCoutsEstim(array('min' => 12)); // WHERE op_user_couts_estim >= 12
     * $query->filterByOpUserCoutsEstim(array('max' => 12)); // WHERE op_user_couts_estim <= 12
     * </code>
     *
     * @param     mixed $opUserCoutsEstim The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpUserCoutsEstim($opUserCoutsEstim = null, $comparison = null)
    {
        if (is_array($opUserCoutsEstim)) {
            $useMinMax = false;
            if (isset($opUserCoutsEstim['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_USER_COUTS_ESTIM, $opUserCoutsEstim['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opUserCoutsEstim['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_USER_COUTS_ESTIM, $opUserCoutsEstim['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_USER_COUTS_ESTIM, $opUserCoutsEstim, $comparison);
    }

    /**
     * Filter the query on the op_user_couts_reel column
     *
     * Example usage:
     * <code>
     * $query->filterByOpUserCoutsReel(1234); // WHERE op_user_couts_reel = 1234
     * $query->filterByOpUserCoutsReel(array(12, 34)); // WHERE op_user_couts_reel IN (12, 34)
     * $query->filterByOpUserCoutsReel(array('min' => 12)); // WHERE op_user_couts_reel >= 12
     * $query->filterByOpUserCoutsReel(array('max' => 12)); // WHERE op_user_couts_reel <= 12
     * </code>
     *
     * @param     mixed $opUserCoutsReel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpUserCoutsReel($opUserCoutsReel = null, $comparison = null)
    {
        if (is_array($opUserCoutsReel)) {
            $useMinMax = false;
            if (isset($opUserCoutsReel['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_USER_COUTS_REEL, $opUserCoutsReel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opUserCoutsReel['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::OP_USER_COUTS_REEL, $opUserCoutsReel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_USER_COUTS_REEL, $opUserCoutsReel, $comparison);
    }

    /**
     * Filter the query on the op_prest_is_maj_from_compiluo column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestIsMajFromCompiluo(true); // WHERE op_prest_is_maj_from_compiluo = true
     * $query->filterByOpPrestIsMajFromCompiluo('yes'); // WHERE op_prest_is_maj_from_compiluo = true
     * </code>
     *
     * @param     boolean|string $opPrestIsMajFromCompiluo The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestIsMajFromCompiluo($opPrestIsMajFromCompiluo = null, $comparison = null)
    {
        if (is_string($opPrestIsMajFromCompiluo)) {
            $opPrestIsMajFromCompiluo = in_array(strtolower($opPrestIsMajFromCompiluo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_IS_MAJ_FROM_COMPILUO, $opPrestIsMajFromCompiluo, $comparison);
    }

    /**
     * Filter the query on the date_debut_prestation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebutPrestation('2011-03-14'); // WHERE date_debut_prestation = '2011-03-14'
     * $query->filterByDateDebutPrestation('now'); // WHERE date_debut_prestation = '2011-03-14'
     * $query->filterByDateDebutPrestation(array('max' => 'yesterday')); // WHERE date_debut_prestation < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDebutPrestation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByDateDebutPrestation($dateDebutPrestation = null, $comparison = null)
    {
        if (is_array($dateDebutPrestation)) {
            $useMinMax = false;
            if (isset($dateDebutPrestation['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::DATE_DEBUT_PRESTATION, $dateDebutPrestation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDebutPrestation['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::DATE_DEBUT_PRESTATION, $dateDebutPrestation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::DATE_DEBUT_PRESTATION, $dateDebutPrestation, $comparison);
    }

    /**
     * Filter the query on the date_fin_prestation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinPrestation('2011-03-14'); // WHERE date_fin_prestation = '2011-03-14'
     * $query->filterByDateFinPrestation('now'); // WHERE date_fin_prestation = '2011-03-14'
     * $query->filterByDateFinPrestation(array('max' => 'yesterday')); // WHERE date_fin_prestation < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateFinPrestation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByDateFinPrestation($dateFinPrestation = null, $comparison = null)
    {
        if (is_array($dateFinPrestation)) {
            $useMinMax = false;
            if (isset($dateFinPrestation['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::DATE_FIN_PRESTATION, $dateFinPrestation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFinPrestation['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::DATE_FIN_PRESTATION, $dateFinPrestation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::DATE_FIN_PRESTATION, $dateFinPrestation, $comparison);
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
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query on the op_prest_is_mandatory column
     *
     * Example usage:
     * <code>
     * $query->filterByOpPrestIsMandatory(true); // WHERE op_prest_is_mandatory = true
     * $query->filterByOpPrestIsMandatory('yes'); // WHERE op_prest_is_mandatory = true
     * </code>
     *
     * @param     boolean|string $opPrestIsMandatory The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByOpPrestIsMandatory($opPrestIsMandatory = null, $comparison = null)
    {
        if (is_string($opPrestIsMandatory)) {
            $opPrestIsMandatory = in_array(strtolower($opPrestIsMandatory), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_IS_MANDATORY, $opPrestIsMandatory, $comparison);
    }

    /**
     * Filter the query on the user_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByUserModify(1234); // WHERE user_modify = 1234
     * $query->filterByUserModify(array(12, 34)); // WHERE user_modify IN (12, 34)
     * $query->filterByUserModify(array('min' => 12)); // WHERE user_modify >= 12
     * $query->filterByUserModify(array('max' => 12)); // WHERE user_modify <= 12
     * </code>
     *
     * @param     mixed $userModify The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::USER_MODIFY, $userModify, $comparison);
    }

    /**
     * Filter the query on the date_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModify('2011-03-14'); // WHERE date_modify = '2011-03-14'
     * $query->filterByDateModify('now'); // WHERE date_modify = '2011-03-14'
     * $query->filterByDateModify(array('max' => 'yesterday')); // WHERE date_modify < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModify The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::DATE_MODIFY, $dateModify, $comparison);
    }

    /**
     * Filter the query on the cost_updater_user column
     *
     * Example usage:
     * <code>
     * $query->filterByCostUpdaterUser(1234); // WHERE cost_updater_user = 1234
     * $query->filterByCostUpdaterUser(array(12, 34)); // WHERE cost_updater_user IN (12, 34)
     * $query->filterByCostUpdaterUser(array('min' => 12)); // WHERE cost_updater_user >= 12
     * $query->filterByCostUpdaterUser(array('max' => 12)); // WHERE cost_updater_user <= 12
     * </code>
     *
     * @see       filterByUsers()
     *
     * @param     mixed $costUpdaterUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByCostUpdaterUser($costUpdaterUser = null, $comparison = null)
    {
        if (is_array($costUpdaterUser)) {
            $useMinMax = false;
            if (isset($costUpdaterUser['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::COST_UPDATER_USER, $costUpdaterUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($costUpdaterUser['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::COST_UPDATER_USER, $costUpdaterUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::COST_UPDATER_USER, $costUpdaterUser, $comparison);
    }

    /**
     * Filter the query on the cost_validation_date column
     *
     * Example usage:
     * <code>
     * $query->filterByCostValidationDate('2011-03-14'); // WHERE cost_validation_date = '2011-03-14'
     * $query->filterByCostValidationDate('now'); // WHERE cost_validation_date = '2011-03-14'
     * $query->filterByCostValidationDate(array('max' => 'yesterday')); // WHERE cost_validation_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $costValidationDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function filterByCostValidationDate($costValidationDate = null, $comparison = null)
    {
        if (is_array($costValidationDate)) {
            $useMinMax = false;
            if (isset($costValidationDate['min'])) {
                $this->addUsingAlias(OperationPrestationsPeer::COST_VALIDATION_DATE, $costValidationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($costValidationDate['max'])) {
                $this->addUsingAlias(OperationPrestationsPeer::COST_VALIDATION_DATE, $costValidationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationPrestationsPeer::COST_VALIDATION_DATE, $costValidationDate, $comparison);
    }

    /**
     * Filter the query by a related OperationScenarii object
     *
     * @param   OperationScenarii|PropelObjectCollection $operationScenarii The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationScenarii($operationScenarii, $comparison = null)
    {
        if ($operationScenarii instanceof OperationScenarii) {
            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_PREST_SCENA_ID, $operationScenarii->getOpScenarioId(), $comparison);
        } elseif ($operationScenarii instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_PREST_SCENA_ID, $operationScenarii->toKeyValue('PrimaryKey', 'OpScenarioId'), $comparison);
        } else {
            throw new PropelException('filterByOperationScenarii() only accepts arguments of type OperationScenarii or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationScenarii relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function joinOperationScenarii($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationScenarii');

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
            $this->addJoinObject($join, 'OperationScenarii');
        }

        return $this;
    }

    /**
     * Use the OperationScenarii relation OperationScenarii object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationScenariiQuery A secondary query class using the current class as primary query
     */
    public function useOperationScenariiQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationScenarii($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationScenarii', 'OperationScenariiQuery');
    }

    /**
     * Filter the query by a related OperationRubriques object
     *
     * @param   OperationRubriques|PropelObjectCollection $operationRubriques The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationRubriques($operationRubriques, $comparison = null)
    {
        if ($operationRubriques instanceof OperationRubriques) {
            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_PREST_RUBRI_ID, $operationRubriques->getOpRubriqueId(), $comparison);
        } elseif ($operationRubriques instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_PREST_RUBRI_ID, $operationRubriques->toKeyValue('PrimaryKey', 'OpRubriqueId'), $comparison);
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
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function joinOperationRubriques($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useOperationRubriquesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationRubriques($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationRubriques', 'OperationRubriquesQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
        } else {
            throw new PropelException('filterByOperations() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Operations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function joinOperations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Operations');

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
            $this->addJoinObject($join, 'Operations');
        }

        return $this;
    }

    /**
     * Use the Operations relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Operations', 'OperationsQuery');
    }

    /**
     * Filter the query by a related RPrestations object
     *
     * @param   RPrestations|PropelObjectCollection $rPrestations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRPrestations($rPrestations, $comparison = null)
    {
        if ($rPrestations instanceof RPrestations) {
            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_R_PREST_ID, $rPrestations->getRPrestationId(), $comparison);
        } elseif ($rPrestations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_R_PREST_ID, $rPrestations->toKeyValue('PrimaryKey', 'RPrestationId'), $comparison);
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
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function joinRPrestations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useRPrestationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RPrestations', 'RPrestationsQuery');
    }

    /**
     * Filter the query by a related OperationPrimes object
     *
     * @param   OperationPrimes|PropelObjectCollection $operationPrimes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrimes($operationPrimes, $comparison = null)
    {
        if ($operationPrimes instanceof OperationPrimes) {
            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_PREST_PRIME_ID, $operationPrimes->getOpPrimeId(), $comparison);
        } elseif ($operationPrimes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_PREST_PRIME_ID, $operationPrimes->toKeyValue('PrimaryKey', 'OpPrimeId'), $comparison);
        } else {
            throw new PropelException('filterByOperationPrimes() only accepts arguments of type OperationPrimes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationPrimes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function joinOperationPrimes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationPrimes');

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
            $this->addJoinObject($join, 'OperationPrimes');
        }

        return $this;
    }

    /**
     * Use the OperationPrimes relation OperationPrimes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationPrimesQuery A secondary query class using the current class as primary query
     */
    public function useOperationPrimesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationPrimes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationPrimes', 'OperationPrimesQuery');
    }

    /**
     * Filter the query by a related HistoCouts object
     *
     * @param   HistoCouts|PropelObjectCollection $histoCouts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByHistoCouts($histoCouts, $comparison = null)
    {
        if ($histoCouts instanceof HistoCouts) {
            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_PREST_ID, $histoCouts->getOpPrestId(), $comparison);
        } elseif ($histoCouts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrestationsPeer::OP_PREST_ID, $histoCouts->toKeyValue('PrimaryKey', 'OpPrestId'), $comparison);
        } else {
            throw new PropelException('filterByHistoCouts() only accepts arguments of type HistoCouts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the HistoCouts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function joinHistoCouts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('HistoCouts');

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
            $this->addJoinObject($join, 'HistoCouts');
        }

        return $this;
    }

    /**
     * Use the HistoCouts relation HistoCouts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   HistoCoutsQuery A secondary query class using the current class as primary query
     */
    public function useHistoCoutsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinHistoCouts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'HistoCouts', 'HistoCoutsQuery');
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsers($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(OperationPrestationsPeer::COST_UPDATER_USER, $users->getUserId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationPrestationsPeer::COST_UPDATER_USER, $users->toKeyValue('PrimaryKey', 'UserId'), $comparison);
        } else {
            throw new PropelException('filterByUsers() only accepts arguments of type Users or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Users relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function joinUsers($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Users');

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
            $this->addJoinObject($join, 'Users');
        }

        return $this;
    }

    /**
     * Use the Users relation Users object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsersQuery A secondary query class using the current class as primary query
     */
    public function useUsersQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Users', 'UsersQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   OperationPrestations $operationPrestations Object to remove from the list of results
     *
     * @return OperationPrestationsQuery The current query, for fluid interface
     */
    public function prune($operationPrestations = null)
    {
        if ($operationPrestations) {
            $this->addUsingAlias(OperationPrestationsPeer::OP_PREST_ID, $operationPrestations->getOpPrestId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
