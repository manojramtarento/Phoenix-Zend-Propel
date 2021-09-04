<?php


/**
 * Base class that represents a query for the 'r_prestations' table.
 *
 *
 *
 * @method RPrestationsQuery orderByRPrestationId($order = Criteria::ASC) Order by the r_prestation_id column
 * @method RPrestationsQuery orderByRPLibelle($order = Criteria::ASC) Order by the r_p_libelle column
 * @method RPrestationsQuery orderByRPLibelleEn($order = Criteria::ASC) Order by the r_p_libelle_en column
 * @method RPrestationsQuery orderByRPControle($order = Criteria::ASC) Order by the r_p_controle column
 * @method RPrestationsQuery orderByRPAxe1($order = Criteria::ASC) Order by the r_p_axe1 column
 * @method RPrestationsQuery orderByRPAxe2($order = Criteria::ASC) Order by the r_p_axe2 column
 * @method RPrestationsQuery orderByRPAxe3($order = Criteria::ASC) Order by the r_p_axe3 column
 * @method RPrestationsQuery orderByRPAxe4($order = Criteria::ASC) Order by the r_p_axe4 column
 * @method RPrestationsQuery orderByRPAxe5($order = Criteria::ASC) Order by the r_p_axe5 column
 * @method RPrestationsQuery orderByRPCodeComptable($order = Criteria::ASC) Order by the r_p_code_comptable column
 * @method RPrestationsQuery orderByRPAdf($order = Criteria::ASC) Order by the r_p_adf column
 * @method RPrestationsQuery orderByRPCommentaires($order = Criteria::ASC) Order by the r_p_commentaires column
 * @method RPrestationsQuery orderByRPDescriptionFr($order = Criteria::ASC) Order by the r_p_description_fr column
 * @method RPrestationsQuery orderByRPDescriptionEn($order = Criteria::ASC) Order by the r_p_description_en column
 * @method RPrestationsQuery orderByRPQuiValide($order = Criteria::ASC) Order by the r_p_qui_valide column
 * @method RPrestationsQuery orderByRPGroupeValidationId($order = Criteria::ASC) Order by the r_p_groupe_validation_id column
 * @method RPrestationsQuery orderByRPCoutsEstimesModifiables($order = Criteria::ASC) Order by the r_p_couts_estimes_modifiables column
 * @method RPrestationsQuery orderByRPCoutInterne($order = Criteria::ASC) Order by the r_p_cout_interne column
 * @method RPrestationsQuery orderByRPCoutExterne($order = Criteria::ASC) Order by the r_p_cout_externe column
 * @method RPrestationsQuery orderByRPCoutTotal($order = Criteria::ASC) Order by the r_p_cout_total column
 * @method RPrestationsQuery orderByRPValidationId($order = Criteria::ASC) Order by the r_p_validation_id column
 * @method RPrestationsQuery orderByRPTauxMargeMin($order = Criteria::ASC) Order by the r_p_taux_marge_min column
 * @method RPrestationsQuery orderByRPPrixVente($order = Criteria::ASC) Order by the r_p_prix_vente column
 * @method RPrestationsQuery orderByRPTypeFraisId($order = Criteria::ASC) Order by the r_p_type_frais_id column
 * @method RPrestationsQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method RPrestationsQuery orderByRPTvaId($order = Criteria::ASC) Order by the r_p_tva_id column
 * @method RPrestationsQuery orderByRPRfa($order = Criteria::ASC) Order by the r_p_rfa column
 * @method RPrestationsQuery orderByValideDaf($order = Criteria::ASC) Order by the valide_daf column
 * @method RPrestationsQuery orderByRPIsMajFromCompiluo($order = Criteria::ASC) Order by the r_p_is_maj_from_compiluo column
 * @method RPrestationsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method RPrestationsQuery orderByUserCreate($order = Criteria::ASC) Order by the user_create column
 * @method RPrestationsQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method RPrestationsQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method RPrestationsQuery orderByRPIsMandatory($order = Criteria::ASC) Order by the r_p_is_mandatory column
 * @method RPrestationsQuery orderByRPIsEligibleForPrime($order = Criteria::ASC) Order by the r_p_is_eligible_for_prime column
 *
 * @method RPrestationsQuery groupByRPrestationId() Group by the r_prestation_id column
 * @method RPrestationsQuery groupByRPLibelle() Group by the r_p_libelle column
 * @method RPrestationsQuery groupByRPLibelleEn() Group by the r_p_libelle_en column
 * @method RPrestationsQuery groupByRPControle() Group by the r_p_controle column
 * @method RPrestationsQuery groupByRPAxe1() Group by the r_p_axe1 column
 * @method RPrestationsQuery groupByRPAxe2() Group by the r_p_axe2 column
 * @method RPrestationsQuery groupByRPAxe3() Group by the r_p_axe3 column
 * @method RPrestationsQuery groupByRPAxe4() Group by the r_p_axe4 column
 * @method RPrestationsQuery groupByRPAxe5() Group by the r_p_axe5 column
 * @method RPrestationsQuery groupByRPCodeComptable() Group by the r_p_code_comptable column
 * @method RPrestationsQuery groupByRPAdf() Group by the r_p_adf column
 * @method RPrestationsQuery groupByRPCommentaires() Group by the r_p_commentaires column
 * @method RPrestationsQuery groupByRPDescriptionFr() Group by the r_p_description_fr column
 * @method RPrestationsQuery groupByRPDescriptionEn() Group by the r_p_description_en column
 * @method RPrestationsQuery groupByRPQuiValide() Group by the r_p_qui_valide column
 * @method RPrestationsQuery groupByRPGroupeValidationId() Group by the r_p_groupe_validation_id column
 * @method RPrestationsQuery groupByRPCoutsEstimesModifiables() Group by the r_p_couts_estimes_modifiables column
 * @method RPrestationsQuery groupByRPCoutInterne() Group by the r_p_cout_interne column
 * @method RPrestationsQuery groupByRPCoutExterne() Group by the r_p_cout_externe column
 * @method RPrestationsQuery groupByRPCoutTotal() Group by the r_p_cout_total column
 * @method RPrestationsQuery groupByRPValidationId() Group by the r_p_validation_id column
 * @method RPrestationsQuery groupByRPTauxMargeMin() Group by the r_p_taux_marge_min column
 * @method RPrestationsQuery groupByRPPrixVente() Group by the r_p_prix_vente column
 * @method RPrestationsQuery groupByRPTypeFraisId() Group by the r_p_type_frais_id column
 * @method RPrestationsQuery groupByActif() Group by the actif column
 * @method RPrestationsQuery groupByRPTvaId() Group by the r_p_tva_id column
 * @method RPrestationsQuery groupByRPRfa() Group by the r_p_rfa column
 * @method RPrestationsQuery groupByValideDaf() Group by the valide_daf column
 * @method RPrestationsQuery groupByRPIsMajFromCompiluo() Group by the r_p_is_maj_from_compiluo column
 * @method RPrestationsQuery groupByDateCreate() Group by the date_create column
 * @method RPrestationsQuery groupByUserCreate() Group by the user_create column
 * @method RPrestationsQuery groupByDateModify() Group by the date_modify column
 * @method RPrestationsQuery groupByUserModify() Group by the user_modify column
 * @method RPrestationsQuery groupByRPIsMandatory() Group by the r_p_is_mandatory column
 * @method RPrestationsQuery groupByRPIsEligibleForPrime() Group by the r_p_is_eligible_for_prime column
 *
 * @method RPrestationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RPrestationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RPrestationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RPrestationsQuery leftJoinGroupValidation($relationAlias = null) Adds a LEFT JOIN clause to the query using the GroupValidation relation
 * @method RPrestationsQuery rightJoinGroupValidation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GroupValidation relation
 * @method RPrestationsQuery innerJoinGroupValidation($relationAlias = null) Adds a INNER JOIN clause to the query using the GroupValidation relation
 *
 * @method RPrestationsQuery leftJoinAxe1($relationAlias = null) Adds a LEFT JOIN clause to the query using the Axe1 relation
 * @method RPrestationsQuery rightJoinAxe1($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Axe1 relation
 * @method RPrestationsQuery innerJoinAxe1($relationAlias = null) Adds a INNER JOIN clause to the query using the Axe1 relation
 *
 * @method RPrestationsQuery leftJoinAxe2($relationAlias = null) Adds a LEFT JOIN clause to the query using the Axe2 relation
 * @method RPrestationsQuery rightJoinAxe2($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Axe2 relation
 * @method RPrestationsQuery innerJoinAxe2($relationAlias = null) Adds a INNER JOIN clause to the query using the Axe2 relation
 *
 * @method RPrestationsQuery leftJoinAxe3($relationAlias = null) Adds a LEFT JOIN clause to the query using the Axe3 relation
 * @method RPrestationsQuery rightJoinAxe3($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Axe3 relation
 * @method RPrestationsQuery innerJoinAxe3($relationAlias = null) Adds a INNER JOIN clause to the query using the Axe3 relation
 *
 * @method RPrestationsQuery leftJoinAxe4($relationAlias = null) Adds a LEFT JOIN clause to the query using the Axe4 relation
 * @method RPrestationsQuery rightJoinAxe4($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Axe4 relation
 * @method RPrestationsQuery innerJoinAxe4($relationAlias = null) Adds a INNER JOIN clause to the query using the Axe4 relation
 *
 * @method RPrestationsQuery leftJoinAxe5($relationAlias = null) Adds a LEFT JOIN clause to the query using the Axe5 relation
 * @method RPrestationsQuery rightJoinAxe5($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Axe5 relation
 * @method RPrestationsQuery innerJoinAxe5($relationAlias = null) Adds a INNER JOIN clause to the query using the Axe5 relation
 *
 * @method RPrestationsQuery leftJoinFacturesPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the FacturesPrestations relation
 * @method RPrestationsQuery rightJoinFacturesPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FacturesPrestations relation
 * @method RPrestationsQuery innerJoinFacturesPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the FacturesPrestations relation
 *
 * @method RPrestationsQuery leftJoinOperationPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrestations relation
 * @method RPrestationsQuery rightJoinOperationPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrestations relation
 * @method RPrestationsQuery innerJoinOperationPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrestations relation
 *
 * @method RPrestations findOne(PropelPDO $con = null) Return the first RPrestations matching the query
 * @method RPrestations findOneOrCreate(PropelPDO $con = null) Return the first RPrestations matching the query, or a new RPrestations object populated from the query conditions when no match is found
 *
 * @method RPrestations findOneByRPLibelle(string $r_p_libelle) Return the first RPrestations filtered by the r_p_libelle column
 * @method RPrestations findOneByRPLibelleEn(string $r_p_libelle_en) Return the first RPrestations filtered by the r_p_libelle_en column
 * @method RPrestations findOneByRPControle(string $r_p_controle) Return the first RPrestations filtered by the r_p_controle column
 * @method RPrestations findOneByRPAxe1(int $r_p_axe1) Return the first RPrestations filtered by the r_p_axe1 column
 * @method RPrestations findOneByRPAxe2(int $r_p_axe2) Return the first RPrestations filtered by the r_p_axe2 column
 * @method RPrestations findOneByRPAxe3(int $r_p_axe3) Return the first RPrestations filtered by the r_p_axe3 column
 * @method RPrestations findOneByRPAxe4(int $r_p_axe4) Return the first RPrestations filtered by the r_p_axe4 column
 * @method RPrestations findOneByRPAxe5(int $r_p_axe5) Return the first RPrestations filtered by the r_p_axe5 column
 * @method RPrestations findOneByRPCodeComptable(string $r_p_code_comptable) Return the first RPrestations filtered by the r_p_code_comptable column
 * @method RPrestations findOneByRPAdf(boolean $r_p_adf) Return the first RPrestations filtered by the r_p_adf column
 * @method RPrestations findOneByRPCommentaires(string $r_p_commentaires) Return the first RPrestations filtered by the r_p_commentaires column
 * @method RPrestations findOneByRPDescriptionFr(string $r_p_description_fr) Return the first RPrestations filtered by the r_p_description_fr column
 * @method RPrestations findOneByRPDescriptionEn(string $r_p_description_en) Return the first RPrestations filtered by the r_p_description_en column
 * @method RPrestations findOneByRPQuiValide(string $r_p_qui_valide) Return the first RPrestations filtered by the r_p_qui_valide column
 * @method RPrestations findOneByRPGroupeValidationId(int $r_p_groupe_validation_id) Return the first RPrestations filtered by the r_p_groupe_validation_id column
 * @method RPrestations findOneByRPCoutsEstimesModifiables(boolean $r_p_couts_estimes_modifiables) Return the first RPrestations filtered by the r_p_couts_estimes_modifiables column
 * @method RPrestations findOneByRPCoutInterne(float $r_p_cout_interne) Return the first RPrestations filtered by the r_p_cout_interne column
 * @method RPrestations findOneByRPCoutExterne(float $r_p_cout_externe) Return the first RPrestations filtered by the r_p_cout_externe column
 * @method RPrestations findOneByRPCoutTotal(float $r_p_cout_total) Return the first RPrestations filtered by the r_p_cout_total column
 * @method RPrestations findOneByRPValidationId(int $r_p_validation_id) Return the first RPrestations filtered by the r_p_validation_id column
 * @method RPrestations findOneByRPTauxMargeMin(float $r_p_taux_marge_min) Return the first RPrestations filtered by the r_p_taux_marge_min column
 * @method RPrestations findOneByRPPrixVente(float $r_p_prix_vente) Return the first RPrestations filtered by the r_p_prix_vente column
 * @method RPrestations findOneByRPTypeFraisId(int $r_p_type_frais_id) Return the first RPrestations filtered by the r_p_type_frais_id column
 * @method RPrestations findOneByActif(boolean $actif) Return the first RPrestations filtered by the actif column
 * @method RPrestations findOneByRPTvaId(int $r_p_tva_id) Return the first RPrestations filtered by the r_p_tva_id column
 * @method RPrestations findOneByRPRfa(boolean $r_p_rfa) Return the first RPrestations filtered by the r_p_rfa column
 * @method RPrestations findOneByValideDaf(boolean $valide_daf) Return the first RPrestations filtered by the valide_daf column
 * @method RPrestations findOneByRPIsMajFromCompiluo(boolean $r_p_is_maj_from_compiluo) Return the first RPrestations filtered by the r_p_is_maj_from_compiluo column
 * @method RPrestations findOneByDateCreate(string $date_create) Return the first RPrestations filtered by the date_create column
 * @method RPrestations findOneByUserCreate(int $user_create) Return the first RPrestations filtered by the user_create column
 * @method RPrestations findOneByDateModify(string $date_modify) Return the first RPrestations filtered by the date_modify column
 * @method RPrestations findOneByUserModify(int $user_modify) Return the first RPrestations filtered by the user_modify column
 * @method RPrestations findOneByRPIsMandatory(boolean $r_p_is_mandatory) Return the first RPrestations filtered by the r_p_is_mandatory column
 * @method RPrestations findOneByRPIsEligibleForPrime(boolean $r_p_is_eligible_for_prime) Return the first RPrestations filtered by the r_p_is_eligible_for_prime column
 *
 * @method array findByRPrestationId(int $r_prestation_id) Return RPrestations objects filtered by the r_prestation_id column
 * @method array findByRPLibelle(string $r_p_libelle) Return RPrestations objects filtered by the r_p_libelle column
 * @method array findByRPLibelleEn(string $r_p_libelle_en) Return RPrestations objects filtered by the r_p_libelle_en column
 * @method array findByRPControle(string $r_p_controle) Return RPrestations objects filtered by the r_p_controle column
 * @method array findByRPAxe1(int $r_p_axe1) Return RPrestations objects filtered by the r_p_axe1 column
 * @method array findByRPAxe2(int $r_p_axe2) Return RPrestations objects filtered by the r_p_axe2 column
 * @method array findByRPAxe3(int $r_p_axe3) Return RPrestations objects filtered by the r_p_axe3 column
 * @method array findByRPAxe4(int $r_p_axe4) Return RPrestations objects filtered by the r_p_axe4 column
 * @method array findByRPAxe5(int $r_p_axe5) Return RPrestations objects filtered by the r_p_axe5 column
 * @method array findByRPCodeComptable(string $r_p_code_comptable) Return RPrestations objects filtered by the r_p_code_comptable column
 * @method array findByRPAdf(boolean $r_p_adf) Return RPrestations objects filtered by the r_p_adf column
 * @method array findByRPCommentaires(string $r_p_commentaires) Return RPrestations objects filtered by the r_p_commentaires column
 * @method array findByRPDescriptionFr(string $r_p_description_fr) Return RPrestations objects filtered by the r_p_description_fr column
 * @method array findByRPDescriptionEn(string $r_p_description_en) Return RPrestations objects filtered by the r_p_description_en column
 * @method array findByRPQuiValide(string $r_p_qui_valide) Return RPrestations objects filtered by the r_p_qui_valide column
 * @method array findByRPGroupeValidationId(int $r_p_groupe_validation_id) Return RPrestations objects filtered by the r_p_groupe_validation_id column
 * @method array findByRPCoutsEstimesModifiables(boolean $r_p_couts_estimes_modifiables) Return RPrestations objects filtered by the r_p_couts_estimes_modifiables column
 * @method array findByRPCoutInterne(float $r_p_cout_interne) Return RPrestations objects filtered by the r_p_cout_interne column
 * @method array findByRPCoutExterne(float $r_p_cout_externe) Return RPrestations objects filtered by the r_p_cout_externe column
 * @method array findByRPCoutTotal(float $r_p_cout_total) Return RPrestations objects filtered by the r_p_cout_total column
 * @method array findByRPValidationId(int $r_p_validation_id) Return RPrestations objects filtered by the r_p_validation_id column
 * @method array findByRPTauxMargeMin(float $r_p_taux_marge_min) Return RPrestations objects filtered by the r_p_taux_marge_min column
 * @method array findByRPPrixVente(float $r_p_prix_vente) Return RPrestations objects filtered by the r_p_prix_vente column
 * @method array findByRPTypeFraisId(int $r_p_type_frais_id) Return RPrestations objects filtered by the r_p_type_frais_id column
 * @method array findByActif(boolean $actif) Return RPrestations objects filtered by the actif column
 * @method array findByRPTvaId(int $r_p_tva_id) Return RPrestations objects filtered by the r_p_tva_id column
 * @method array findByRPRfa(boolean $r_p_rfa) Return RPrestations objects filtered by the r_p_rfa column
 * @method array findByValideDaf(boolean $valide_daf) Return RPrestations objects filtered by the valide_daf column
 * @method array findByRPIsMajFromCompiluo(boolean $r_p_is_maj_from_compiluo) Return RPrestations objects filtered by the r_p_is_maj_from_compiluo column
 * @method array findByDateCreate(string $date_create) Return RPrestations objects filtered by the date_create column
 * @method array findByUserCreate(int $user_create) Return RPrestations objects filtered by the user_create column
 * @method array findByDateModify(string $date_modify) Return RPrestations objects filtered by the date_modify column
 * @method array findByUserModify(int $user_modify) Return RPrestations objects filtered by the user_modify column
 * @method array findByRPIsMandatory(boolean $r_p_is_mandatory) Return RPrestations objects filtered by the r_p_is_mandatory column
 * @method array findByRPIsEligibleForPrime(boolean $r_p_is_eligible_for_prime) Return RPrestations objects filtered by the r_p_is_eligible_for_prime column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPrestationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRPrestationsQuery object.
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
            $modelName = 'RPrestations';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RPrestationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RPrestationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RPrestationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RPrestationsQuery) {
            return $criteria;
        }
        $query = new RPrestationsQuery(null, null, $modelAlias);

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
     * @return   RPrestations|RPrestations[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RPrestationsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RPrestations A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRPrestationId($key, $con = null)
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
     * @return                 RPrestations A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `r_prestation_id`, `r_p_libelle`, `r_p_libelle_en`, `r_p_controle`, `r_p_axe1`, `r_p_axe2`, `r_p_axe3`, `r_p_axe4`, `r_p_axe5`, `r_p_code_comptable`, `r_p_adf`, `r_p_commentaires`, `r_p_description_fr`, `r_p_description_en`, `r_p_qui_valide`, `r_p_groupe_validation_id`, `r_p_couts_estimes_modifiables`, `r_p_cout_interne`, `r_p_cout_externe`, `r_p_cout_total`, `r_p_validation_id`, `r_p_taux_marge_min`, `r_p_prix_vente`, `r_p_type_frais_id`, `actif`, `r_p_tva_id`, `r_p_rfa`, `valide_daf`, `r_p_is_maj_from_compiluo`, `date_create`, `user_create`, `date_modify`, `user_modify`, `r_p_is_mandatory`, `r_p_is_eligible_for_prime` FROM `r_prestations` WHERE `r_prestation_id` = :p0';
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
            $obj = new RPrestations();
            $obj->hydrate($row);
            RPrestationsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RPrestations|RPrestations[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RPrestations[]|mixed the list of results, formatted by the current formatter
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
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RPrestationsPeer::R_PRESTATION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RPrestationsPeer::R_PRESTATION_ID, $keys, Criteria::IN);
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
     * @param     mixed $rPrestationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPrestationId($rPrestationId = null, $comparison = null)
    {
        if (is_array($rPrestationId)) {
            $useMinMax = false;
            if (isset($rPrestationId['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_PRESTATION_ID, $rPrestationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPrestationId['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_PRESTATION_ID, $rPrestationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_PRESTATION_ID, $rPrestationId, $comparison);
    }

    /**
     * Filter the query on the r_p_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPLibelle('fooValue');   // WHERE r_p_libelle = 'fooValue'
     * $query->filterByRPLibelle('%fooValue%'); // WHERE r_p_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPLibelle($rPLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPLibelle)) {
                $rPLibelle = str_replace('*', '%', $rPLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_LIBELLE, $rPLibelle, $comparison);
    }

    /**
     * Filter the query on the r_p_libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByRPLibelleEn('fooValue');   // WHERE r_p_libelle_en = 'fooValue'
     * $query->filterByRPLibelleEn('%fooValue%'); // WHERE r_p_libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPLibelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPLibelleEn($rPLibelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPLibelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPLibelleEn)) {
                $rPLibelleEn = str_replace('*', '%', $rPLibelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_LIBELLE_EN, $rPLibelleEn, $comparison);
    }

    /**
     * Filter the query on the r_p_controle column
     *
     * Example usage:
     * <code>
     * $query->filterByRPControle('fooValue');   // WHERE r_p_controle = 'fooValue'
     * $query->filterByRPControle('%fooValue%'); // WHERE r_p_controle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPControle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPControle($rPControle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPControle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPControle)) {
                $rPControle = str_replace('*', '%', $rPControle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_CONTROLE, $rPControle, $comparison);
    }

    /**
     * Filter the query on the r_p_axe1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe1(1234); // WHERE r_p_axe1 = 1234
     * $query->filterByRPAxe1(array(12, 34)); // WHERE r_p_axe1 IN (12, 34)
     * $query->filterByRPAxe1(array('min' => 12)); // WHERE r_p_axe1 >= 12
     * $query->filterByRPAxe1(array('max' => 12)); // WHERE r_p_axe1 <= 12
     * </code>
     *
     * @see       filterByAxe1()
     *
     * @param     mixed $rPAxe1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPAxe1($rPAxe1 = null, $comparison = null)
    {
        if (is_array($rPAxe1)) {
            $useMinMax = false;
            if (isset($rPAxe1['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_AXE1, $rPAxe1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPAxe1['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_AXE1, $rPAxe1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_AXE1, $rPAxe1, $comparison);
    }

    /**
     * Filter the query on the r_p_axe2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe2(1234); // WHERE r_p_axe2 = 1234
     * $query->filterByRPAxe2(array(12, 34)); // WHERE r_p_axe2 IN (12, 34)
     * $query->filterByRPAxe2(array('min' => 12)); // WHERE r_p_axe2 >= 12
     * $query->filterByRPAxe2(array('max' => 12)); // WHERE r_p_axe2 <= 12
     * </code>
     *
     * @see       filterByAxe2()
     *
     * @param     mixed $rPAxe2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPAxe2($rPAxe2 = null, $comparison = null)
    {
        if (is_array($rPAxe2)) {
            $useMinMax = false;
            if (isset($rPAxe2['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_AXE2, $rPAxe2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPAxe2['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_AXE2, $rPAxe2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_AXE2, $rPAxe2, $comparison);
    }

    /**
     * Filter the query on the r_p_axe3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe3(1234); // WHERE r_p_axe3 = 1234
     * $query->filterByRPAxe3(array(12, 34)); // WHERE r_p_axe3 IN (12, 34)
     * $query->filterByRPAxe3(array('min' => 12)); // WHERE r_p_axe3 >= 12
     * $query->filterByRPAxe3(array('max' => 12)); // WHERE r_p_axe3 <= 12
     * </code>
     *
     * @see       filterByAxe3()
     *
     * @param     mixed $rPAxe3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPAxe3($rPAxe3 = null, $comparison = null)
    {
        if (is_array($rPAxe3)) {
            $useMinMax = false;
            if (isset($rPAxe3['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_AXE3, $rPAxe3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPAxe3['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_AXE3, $rPAxe3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_AXE3, $rPAxe3, $comparison);
    }

    /**
     * Filter the query on the r_p_axe4 column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe4(1234); // WHERE r_p_axe4 = 1234
     * $query->filterByRPAxe4(array(12, 34)); // WHERE r_p_axe4 IN (12, 34)
     * $query->filterByRPAxe4(array('min' => 12)); // WHERE r_p_axe4 >= 12
     * $query->filterByRPAxe4(array('max' => 12)); // WHERE r_p_axe4 <= 12
     * </code>
     *
     * @see       filterByAxe4()
     *
     * @param     mixed $rPAxe4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPAxe4($rPAxe4 = null, $comparison = null)
    {
        if (is_array($rPAxe4)) {
            $useMinMax = false;
            if (isset($rPAxe4['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_AXE4, $rPAxe4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPAxe4['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_AXE4, $rPAxe4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_AXE4, $rPAxe4, $comparison);
    }

    /**
     * Filter the query on the r_p_axe5 column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAxe5(1234); // WHERE r_p_axe5 = 1234
     * $query->filterByRPAxe5(array(12, 34)); // WHERE r_p_axe5 IN (12, 34)
     * $query->filterByRPAxe5(array('min' => 12)); // WHERE r_p_axe5 >= 12
     * $query->filterByRPAxe5(array('max' => 12)); // WHERE r_p_axe5 <= 12
     * </code>
     *
     * @see       filterByAxe5()
     *
     * @param     mixed $rPAxe5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPAxe5($rPAxe5 = null, $comparison = null)
    {
        if (is_array($rPAxe5)) {
            $useMinMax = false;
            if (isset($rPAxe5['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_AXE5, $rPAxe5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPAxe5['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_AXE5, $rPAxe5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_AXE5, $rPAxe5, $comparison);
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
     * @return RPrestationsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RPrestationsPeer::R_P_CODE_COMPTABLE, $rPCodeComptable, $comparison);
    }

    /**
     * Filter the query on the r_p_adf column
     *
     * Example usage:
     * <code>
     * $query->filterByRPAdf(true); // WHERE r_p_adf = true
     * $query->filterByRPAdf('yes'); // WHERE r_p_adf = true
     * </code>
     *
     * @param     boolean|string $rPAdf The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPAdf($rPAdf = null, $comparison = null)
    {
        if (is_string($rPAdf)) {
            $rPAdf = in_array(strtolower($rPAdf), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_ADF, $rPAdf, $comparison);
    }

    /**
     * Filter the query on the r_p_commentaires column
     *
     * Example usage:
     * <code>
     * $query->filterByRPCommentaires('fooValue');   // WHERE r_p_commentaires = 'fooValue'
     * $query->filterByRPCommentaires('%fooValue%'); // WHERE r_p_commentaires LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPCommentaires The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPCommentaires($rPCommentaires = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPCommentaires)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPCommentaires)) {
                $rPCommentaires = str_replace('*', '%', $rPCommentaires);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_COMMENTAIRES, $rPCommentaires, $comparison);
    }

    /**
     * Filter the query on the r_p_description_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByRPDescriptionFr('fooValue');   // WHERE r_p_description_fr = 'fooValue'
     * $query->filterByRPDescriptionFr('%fooValue%'); // WHERE r_p_description_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPDescriptionFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPDescriptionFr($rPDescriptionFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPDescriptionFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPDescriptionFr)) {
                $rPDescriptionFr = str_replace('*', '%', $rPDescriptionFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_DESCRIPTION_FR, $rPDescriptionFr, $comparison);
    }

    /**
     * Filter the query on the r_p_description_en column
     *
     * Example usage:
     * <code>
     * $query->filterByRPDescriptionEn('fooValue');   // WHERE r_p_description_en = 'fooValue'
     * $query->filterByRPDescriptionEn('%fooValue%'); // WHERE r_p_description_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPDescriptionEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPDescriptionEn($rPDescriptionEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPDescriptionEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPDescriptionEn)) {
                $rPDescriptionEn = str_replace('*', '%', $rPDescriptionEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_DESCRIPTION_EN, $rPDescriptionEn, $comparison);
    }

    /**
     * Filter the query on the r_p_qui_valide column
     *
     * Example usage:
     * <code>
     * $query->filterByRPQuiValide('fooValue');   // WHERE r_p_qui_valide = 'fooValue'
     * $query->filterByRPQuiValide('%fooValue%'); // WHERE r_p_qui_valide LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rPQuiValide The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPQuiValide($rPQuiValide = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rPQuiValide)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rPQuiValide)) {
                $rPQuiValide = str_replace('*', '%', $rPQuiValide);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_QUI_VALIDE, $rPQuiValide, $comparison);
    }

    /**
     * Filter the query on the r_p_groupe_validation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPGroupeValidationId(1234); // WHERE r_p_groupe_validation_id = 1234
     * $query->filterByRPGroupeValidationId(array(12, 34)); // WHERE r_p_groupe_validation_id IN (12, 34)
     * $query->filterByRPGroupeValidationId(array('min' => 12)); // WHERE r_p_groupe_validation_id >= 12
     * $query->filterByRPGroupeValidationId(array('max' => 12)); // WHERE r_p_groupe_validation_id <= 12
     * </code>
     *
     * @see       filterByGroupValidation()
     *
     * @param     mixed $rPGroupeValidationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPGroupeValidationId($rPGroupeValidationId = null, $comparison = null)
    {
        if (is_array($rPGroupeValidationId)) {
            $useMinMax = false;
            if (isset($rPGroupeValidationId['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, $rPGroupeValidationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPGroupeValidationId['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, $rPGroupeValidationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, $rPGroupeValidationId, $comparison);
    }

    /**
     * Filter the query on the r_p_couts_estimes_modifiables column
     *
     * Example usage:
     * <code>
     * $query->filterByRPCoutsEstimesModifiables(true); // WHERE r_p_couts_estimes_modifiables = true
     * $query->filterByRPCoutsEstimesModifiables('yes'); // WHERE r_p_couts_estimes_modifiables = true
     * </code>
     *
     * @param     boolean|string $rPCoutsEstimesModifiables The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPCoutsEstimesModifiables($rPCoutsEstimesModifiables = null, $comparison = null)
    {
        if (is_string($rPCoutsEstimesModifiables)) {
            $rPCoutsEstimesModifiables = in_array(strtolower($rPCoutsEstimesModifiables), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_COUTS_ESTIMES_MODIFIABLES, $rPCoutsEstimesModifiables, $comparison);
    }

    /**
     * Filter the query on the r_p_cout_interne column
     *
     * Example usage:
     * <code>
     * $query->filterByRPCoutInterne(1234); // WHERE r_p_cout_interne = 1234
     * $query->filterByRPCoutInterne(array(12, 34)); // WHERE r_p_cout_interne IN (12, 34)
     * $query->filterByRPCoutInterne(array('min' => 12)); // WHERE r_p_cout_interne >= 12
     * $query->filterByRPCoutInterne(array('max' => 12)); // WHERE r_p_cout_interne <= 12
     * </code>
     *
     * @param     mixed $rPCoutInterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPCoutInterne($rPCoutInterne = null, $comparison = null)
    {
        if (is_array($rPCoutInterne)) {
            $useMinMax = false;
            if (isset($rPCoutInterne['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_COUT_INTERNE, $rPCoutInterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPCoutInterne['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_COUT_INTERNE, $rPCoutInterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_COUT_INTERNE, $rPCoutInterne, $comparison);
    }

    /**
     * Filter the query on the r_p_cout_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByRPCoutExterne(1234); // WHERE r_p_cout_externe = 1234
     * $query->filterByRPCoutExterne(array(12, 34)); // WHERE r_p_cout_externe IN (12, 34)
     * $query->filterByRPCoutExterne(array('min' => 12)); // WHERE r_p_cout_externe >= 12
     * $query->filterByRPCoutExterne(array('max' => 12)); // WHERE r_p_cout_externe <= 12
     * </code>
     *
     * @param     mixed $rPCoutExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPCoutExterne($rPCoutExterne = null, $comparison = null)
    {
        if (is_array($rPCoutExterne)) {
            $useMinMax = false;
            if (isset($rPCoutExterne['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_COUT_EXTERNE, $rPCoutExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPCoutExterne['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_COUT_EXTERNE, $rPCoutExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_COUT_EXTERNE, $rPCoutExterne, $comparison);
    }

    /**
     * Filter the query on the r_p_cout_total column
     *
     * Example usage:
     * <code>
     * $query->filterByRPCoutTotal(1234); // WHERE r_p_cout_total = 1234
     * $query->filterByRPCoutTotal(array(12, 34)); // WHERE r_p_cout_total IN (12, 34)
     * $query->filterByRPCoutTotal(array('min' => 12)); // WHERE r_p_cout_total >= 12
     * $query->filterByRPCoutTotal(array('max' => 12)); // WHERE r_p_cout_total <= 12
     * </code>
     *
     * @param     mixed $rPCoutTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPCoutTotal($rPCoutTotal = null, $comparison = null)
    {
        if (is_array($rPCoutTotal)) {
            $useMinMax = false;
            if (isset($rPCoutTotal['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_COUT_TOTAL, $rPCoutTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPCoutTotal['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_COUT_TOTAL, $rPCoutTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_COUT_TOTAL, $rPCoutTotal, $comparison);
    }

    /**
     * Filter the query on the r_p_validation_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPValidationId(1234); // WHERE r_p_validation_id = 1234
     * $query->filterByRPValidationId(array(12, 34)); // WHERE r_p_validation_id IN (12, 34)
     * $query->filterByRPValidationId(array('min' => 12)); // WHERE r_p_validation_id >= 12
     * $query->filterByRPValidationId(array('max' => 12)); // WHERE r_p_validation_id <= 12
     * </code>
     *
     * @param     mixed $rPValidationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPValidationId($rPValidationId = null, $comparison = null)
    {
        if (is_array($rPValidationId)) {
            $useMinMax = false;
            if (isset($rPValidationId['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_VALIDATION_ID, $rPValidationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPValidationId['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_VALIDATION_ID, $rPValidationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_VALIDATION_ID, $rPValidationId, $comparison);
    }

    /**
     * Filter the query on the r_p_taux_marge_min column
     *
     * Example usage:
     * <code>
     * $query->filterByRPTauxMargeMin(1234); // WHERE r_p_taux_marge_min = 1234
     * $query->filterByRPTauxMargeMin(array(12, 34)); // WHERE r_p_taux_marge_min IN (12, 34)
     * $query->filterByRPTauxMargeMin(array('min' => 12)); // WHERE r_p_taux_marge_min >= 12
     * $query->filterByRPTauxMargeMin(array('max' => 12)); // WHERE r_p_taux_marge_min <= 12
     * </code>
     *
     * @param     mixed $rPTauxMargeMin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPTauxMargeMin($rPTauxMargeMin = null, $comparison = null)
    {
        if (is_array($rPTauxMargeMin)) {
            $useMinMax = false;
            if (isset($rPTauxMargeMin['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_TAUX_MARGE_MIN, $rPTauxMargeMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPTauxMargeMin['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_TAUX_MARGE_MIN, $rPTauxMargeMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_TAUX_MARGE_MIN, $rPTauxMargeMin, $comparison);
    }

    /**
     * Filter the query on the r_p_prix_vente column
     *
     * Example usage:
     * <code>
     * $query->filterByRPPrixVente(1234); // WHERE r_p_prix_vente = 1234
     * $query->filterByRPPrixVente(array(12, 34)); // WHERE r_p_prix_vente IN (12, 34)
     * $query->filterByRPPrixVente(array('min' => 12)); // WHERE r_p_prix_vente >= 12
     * $query->filterByRPPrixVente(array('max' => 12)); // WHERE r_p_prix_vente <= 12
     * </code>
     *
     * @param     mixed $rPPrixVente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPPrixVente($rPPrixVente = null, $comparison = null)
    {
        if (is_array($rPPrixVente)) {
            $useMinMax = false;
            if (isset($rPPrixVente['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_PRIX_VENTE, $rPPrixVente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPPrixVente['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_PRIX_VENTE, $rPPrixVente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_PRIX_VENTE, $rPPrixVente, $comparison);
    }

    /**
     * Filter the query on the r_p_type_frais_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPTypeFraisId(1234); // WHERE r_p_type_frais_id = 1234
     * $query->filterByRPTypeFraisId(array(12, 34)); // WHERE r_p_type_frais_id IN (12, 34)
     * $query->filterByRPTypeFraisId(array('min' => 12)); // WHERE r_p_type_frais_id >= 12
     * $query->filterByRPTypeFraisId(array('max' => 12)); // WHERE r_p_type_frais_id <= 12
     * </code>
     *
     * @param     mixed $rPTypeFraisId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPTypeFraisId($rPTypeFraisId = null, $comparison = null)
    {
        if (is_array($rPTypeFraisId)) {
            $useMinMax = false;
            if (isset($rPTypeFraisId['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_TYPE_FRAIS_ID, $rPTypeFraisId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPTypeFraisId['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_TYPE_FRAIS_ID, $rPTypeFraisId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_TYPE_FRAIS_ID, $rPTypeFraisId, $comparison);
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
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPrestationsPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the r_p_tva_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRPTvaId(1234); // WHERE r_p_tva_id = 1234
     * $query->filterByRPTvaId(array(12, 34)); // WHERE r_p_tva_id IN (12, 34)
     * $query->filterByRPTvaId(array('min' => 12)); // WHERE r_p_tva_id >= 12
     * $query->filterByRPTvaId(array('max' => 12)); // WHERE r_p_tva_id <= 12
     * </code>
     *
     * @param     mixed $rPTvaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPTvaId($rPTvaId = null, $comparison = null)
    {
        if (is_array($rPTvaId)) {
            $useMinMax = false;
            if (isset($rPTvaId['min'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_TVA_ID, $rPTvaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rPTvaId['max'])) {
                $this->addUsingAlias(RPrestationsPeer::R_P_TVA_ID, $rPTvaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_TVA_ID, $rPTvaId, $comparison);
    }

    /**
     * Filter the query on the r_p_rfa column
     *
     * Example usage:
     * <code>
     * $query->filterByRPRfa(true); // WHERE r_p_rfa = true
     * $query->filterByRPRfa('yes'); // WHERE r_p_rfa = true
     * </code>
     *
     * @param     boolean|string $rPRfa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPRfa($rPRfa = null, $comparison = null)
    {
        if (is_string($rPRfa)) {
            $rPRfa = in_array(strtolower($rPRfa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_RFA, $rPRfa, $comparison);
    }

    /**
     * Filter the query on the valide_daf column
     *
     * Example usage:
     * <code>
     * $query->filterByValideDaf(true); // WHERE valide_daf = true
     * $query->filterByValideDaf('yes'); // WHERE valide_daf = true
     * </code>
     *
     * @param     boolean|string $valideDaf The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByValideDaf($valideDaf = null, $comparison = null)
    {
        if (is_string($valideDaf)) {
            $valideDaf = in_array(strtolower($valideDaf), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPrestationsPeer::VALIDE_DAF, $valideDaf, $comparison);
    }

    /**
     * Filter the query on the r_p_is_maj_from_compiluo column
     *
     * Example usage:
     * <code>
     * $query->filterByRPIsMajFromCompiluo(true); // WHERE r_p_is_maj_from_compiluo = true
     * $query->filterByRPIsMajFromCompiluo('yes'); // WHERE r_p_is_maj_from_compiluo = true
     * </code>
     *
     * @param     boolean|string $rPIsMajFromCompiluo The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPIsMajFromCompiluo($rPIsMajFromCompiluo = null, $comparison = null)
    {
        if (is_string($rPIsMajFromCompiluo)) {
            $rPIsMajFromCompiluo = in_array(strtolower($rPIsMajFromCompiluo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_IS_MAJ_FROM_COMPILUO, $rPIsMajFromCompiluo, $comparison);
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
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(RPrestationsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(RPrestationsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::DATE_CREATE, $dateCreate, $comparison);
    }

    /**
     * Filter the query on the user_create column
     *
     * Example usage:
     * <code>
     * $query->filterByUserCreate(1234); // WHERE user_create = 1234
     * $query->filterByUserCreate(array(12, 34)); // WHERE user_create IN (12, 34)
     * $query->filterByUserCreate(array('min' => 12)); // WHERE user_create >= 12
     * $query->filterByUserCreate(array('max' => 12)); // WHERE user_create <= 12
     * </code>
     *
     * @param     mixed $userCreate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByUserCreate($userCreate = null, $comparison = null)
    {
        if (is_array($userCreate)) {
            $useMinMax = false;
            if (isset($userCreate['min'])) {
                $this->addUsingAlias(RPrestationsPeer::USER_CREATE, $userCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userCreate['max'])) {
                $this->addUsingAlias(RPrestationsPeer::USER_CREATE, $userCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::USER_CREATE, $userCreate, $comparison);
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
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(RPrestationsPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(RPrestationsPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::DATE_MODIFY, $dateModify, $comparison);
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
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(RPrestationsPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(RPrestationsPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RPrestationsPeer::USER_MODIFY, $userModify, $comparison);
    }

    /**
     * Filter the query on the r_p_is_mandatory column
     *
     * Example usage:
     * <code>
     * $query->filterByRPIsMandatory(true); // WHERE r_p_is_mandatory = true
     * $query->filterByRPIsMandatory('yes'); // WHERE r_p_is_mandatory = true
     * </code>
     *
     * @param     boolean|string $rPIsMandatory The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPIsMandatory($rPIsMandatory = null, $comparison = null)
    {
        if (is_string($rPIsMandatory)) {
            $rPIsMandatory = in_array(strtolower($rPIsMandatory), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_IS_MANDATORY, $rPIsMandatory, $comparison);
    }

    /**
     * Filter the query on the r_p_is_eligible_for_prime column
     *
     * Example usage:
     * <code>
     * $query->filterByRPIsEligibleForPrime(true); // WHERE r_p_is_eligible_for_prime = true
     * $query->filterByRPIsEligibleForPrime('yes'); // WHERE r_p_is_eligible_for_prime = true
     * </code>
     *
     * @param     boolean|string $rPIsEligibleForPrime The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function filterByRPIsEligibleForPrime($rPIsEligibleForPrime = null, $comparison = null)
    {
        if (is_string($rPIsEligibleForPrime)) {
            $rPIsEligibleForPrime = in_array(strtolower($rPIsEligibleForPrime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RPrestationsPeer::R_P_IS_ELIGIBLE_FOR_PRIME, $rPIsEligibleForPrime, $comparison);
    }

    /**
     * Filter the query by a related AclGroups object
     *
     * @param   AclGroups|PropelObjectCollection $aclGroups The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGroupValidation($aclGroups, $comparison = null)
    {
        if ($aclGroups instanceof AclGroups) {
            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, $aclGroups->getGroupId(), $comparison);
        } elseif ($aclGroups instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, $aclGroups->toKeyValue('PrimaryKey', 'GroupId'), $comparison);
        } else {
            throw new PropelException('filterByGroupValidation() only accepts arguments of type AclGroups or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GroupValidation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function joinGroupValidation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GroupValidation');

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
            $this->addJoinObject($join, 'GroupValidation');
        }

        return $this;
    }

    /**
     * Use the GroupValidation relation AclGroups object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AclGroupsQuery A secondary query class using the current class as primary query
     */
    public function useGroupValidationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGroupValidation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GroupValidation', 'AclGroupsQuery');
    }

    /**
     * Filter the query by a related RPAxe1 object
     *
     * @param   RPAxe1|PropelObjectCollection $rPAxe1 The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAxe1($rPAxe1, $comparison = null)
    {
        if ($rPAxe1 instanceof RPAxe1) {
            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_AXE1, $rPAxe1->getRPAxe1Id(), $comparison);
        } elseif ($rPAxe1 instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_AXE1, $rPAxe1->toKeyValue('PrimaryKey', 'RPAxe1Id'), $comparison);
        } else {
            throw new PropelException('filterByAxe1() only accepts arguments of type RPAxe1 or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Axe1 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function joinAxe1($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Axe1');

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
            $this->addJoinObject($join, 'Axe1');
        }

        return $this;
    }

    /**
     * Use the Axe1 relation RPAxe1 object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RPAxe1Query A secondary query class using the current class as primary query
     */
    public function useAxe1Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAxe1($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Axe1', 'RPAxe1Query');
    }

    /**
     * Filter the query by a related RPAxe2 object
     *
     * @param   RPAxe2|PropelObjectCollection $rPAxe2 The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAxe2($rPAxe2, $comparison = null)
    {
        if ($rPAxe2 instanceof RPAxe2) {
            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_AXE2, $rPAxe2->getRPAxe2Id(), $comparison);
        } elseif ($rPAxe2 instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_AXE2, $rPAxe2->toKeyValue('PrimaryKey', 'RPAxe2Id'), $comparison);
        } else {
            throw new PropelException('filterByAxe2() only accepts arguments of type RPAxe2 or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Axe2 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function joinAxe2($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Axe2');

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
            $this->addJoinObject($join, 'Axe2');
        }

        return $this;
    }

    /**
     * Use the Axe2 relation RPAxe2 object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RPAxe2Query A secondary query class using the current class as primary query
     */
    public function useAxe2Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAxe2($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Axe2', 'RPAxe2Query');
    }

    /**
     * Filter the query by a related RPAxe3 object
     *
     * @param   RPAxe3|PropelObjectCollection $rPAxe3 The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAxe3($rPAxe3, $comparison = null)
    {
        if ($rPAxe3 instanceof RPAxe3) {
            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_AXE3, $rPAxe3->getRPAxe3Id(), $comparison);
        } elseif ($rPAxe3 instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_AXE3, $rPAxe3->toKeyValue('PrimaryKey', 'RPAxe3Id'), $comparison);
        } else {
            throw new PropelException('filterByAxe3() only accepts arguments of type RPAxe3 or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Axe3 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function joinAxe3($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Axe3');

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
            $this->addJoinObject($join, 'Axe3');
        }

        return $this;
    }

    /**
     * Use the Axe3 relation RPAxe3 object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RPAxe3Query A secondary query class using the current class as primary query
     */
    public function useAxe3Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAxe3($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Axe3', 'RPAxe3Query');
    }

    /**
     * Filter the query by a related RPAxe4 object
     *
     * @param   RPAxe4|PropelObjectCollection $rPAxe4 The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAxe4($rPAxe4, $comparison = null)
    {
        if ($rPAxe4 instanceof RPAxe4) {
            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_AXE4, $rPAxe4->getRPAxe4Id(), $comparison);
        } elseif ($rPAxe4 instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_AXE4, $rPAxe4->toKeyValue('PrimaryKey', 'RPAxe4Id'), $comparison);
        } else {
            throw new PropelException('filterByAxe4() only accepts arguments of type RPAxe4 or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Axe4 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function joinAxe4($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Axe4');

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
            $this->addJoinObject($join, 'Axe4');
        }

        return $this;
    }

    /**
     * Use the Axe4 relation RPAxe4 object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RPAxe4Query A secondary query class using the current class as primary query
     */
    public function useAxe4Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAxe4($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Axe4', 'RPAxe4Query');
    }

    /**
     * Filter the query by a related RPAxe5 object
     *
     * @param   RPAxe5|PropelObjectCollection $rPAxe5 The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAxe5($rPAxe5, $comparison = null)
    {
        if ($rPAxe5 instanceof RPAxe5) {
            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_AXE5, $rPAxe5->getRPAxe5Id(), $comparison);
        } elseif ($rPAxe5 instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RPrestationsPeer::R_P_AXE5, $rPAxe5->toKeyValue('PrimaryKey', 'RPAxe5Id'), $comparison);
        } else {
            throw new PropelException('filterByAxe5() only accepts arguments of type RPAxe5 or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Axe5 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function joinAxe5($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Axe5');

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
            $this->addJoinObject($join, 'Axe5');
        }

        return $this;
    }

    /**
     * Use the Axe5 relation RPAxe5 object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RPAxe5Query A secondary query class using the current class as primary query
     */
    public function useAxe5Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAxe5($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Axe5', 'RPAxe5Query');
    }

    /**
     * Filter the query by a related FacturesPrestations object
     *
     * @param   FacturesPrestations|PropelObjectCollection $facturesPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFacturesPrestations($facturesPrestations, $comparison = null)
    {
        if ($facturesPrestations instanceof FacturesPrestations) {
            return $this
                ->addUsingAlias(RPrestationsPeer::R_PRESTATION_ID, $facturesPrestations->getRPrestationId(), $comparison);
        } elseif ($facturesPrestations instanceof PropelObjectCollection) {
            return $this
                ->useFacturesPrestationsQuery()
                ->filterByPrimaryKeys($facturesPrestations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFacturesPrestations() only accepts arguments of type FacturesPrestations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FacturesPrestations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function joinFacturesPrestations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FacturesPrestations');

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
            $this->addJoinObject($join, 'FacturesPrestations');
        }

        return $this;
    }

    /**
     * Use the FacturesPrestations relation FacturesPrestations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturesPrestationsQuery A secondary query class using the current class as primary query
     */
    public function useFacturesPrestationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFacturesPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FacturesPrestations', 'FacturesPrestationsQuery');
    }

    /**
     * Filter the query by a related OperationPrestations object
     *
     * @param   OperationPrestations|PropelObjectCollection $operationPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RPrestationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrestations($operationPrestations, $comparison = null)
    {
        if ($operationPrestations instanceof OperationPrestations) {
            return $this
                ->addUsingAlias(RPrestationsPeer::R_PRESTATION_ID, $operationPrestations->getOpRPrestId(), $comparison);
        } elseif ($operationPrestations instanceof PropelObjectCollection) {
            return $this
                ->useOperationPrestationsQuery()
                ->filterByPrimaryKeys($operationPrestations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationPrestations() only accepts arguments of type OperationPrestations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationPrestations relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function joinOperationPrestations($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationPrestations');

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
            $this->addJoinObject($join, 'OperationPrestations');
        }

        return $this;
    }

    /**
     * Use the OperationPrestations relation OperationPrestations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationPrestationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationPrestationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationPrestations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationPrestations', 'OperationPrestationsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RPrestations $rPrestations Object to remove from the list of results
     *
     * @return RPrestationsQuery The current query, for fluid interface
     */
    public function prune($rPrestations = null)
    {
        if ($rPrestations) {
            $this->addUsingAlias(RPrestationsPeer::R_PRESTATION_ID, $rPrestations->getRPrestationId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
