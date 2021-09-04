<?php


/**
 * Base class that represents a query for the 'facture_edition_history' table.
 *
 *
 *
 * @method FactureEditionHistoryQuery orderByFactEhId($order = Criteria::ASC) Order by the fact_eh_id column
 * @method FactureEditionHistoryQuery orderByFactEhUserId($order = Criteria::ASC) Order by the fact_eh_user_id column
 * @method FactureEditionHistoryQuery orderByReeditionDate($order = Criteria::ASC) Order by the reedition_date column
 * @method FactureEditionHistoryQuery orderByFactId($order = Criteria::ASC) Order by the fact_id column
 * @method FactureEditionHistoryQuery orderByRFactTypeId($order = Criteria::ASC) Order by the r_fact_type_id column
 * @method FactureEditionHistoryQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method FactureEditionHistoryQuery orderByClId($order = Criteria::ASC) Order by the cl_id column
 * @method FactureEditionHistoryQuery orderByCtId($order = Criteria::ASC) Order by the ct_id column
 * @method FactureEditionHistoryQuery orderByDcId($order = Criteria::ASC) Order by the dc_id column
 * @method FactureEditionHistoryQuery orderByFactNumero($order = Criteria::ASC) Order by the fact_numero column
 * @method FactureEditionHistoryQuery orderByFactReference($order = Criteria::ASC) Order by the fact_reference column
 * @method FactureEditionHistoryQuery orderByFactLang($order = Criteria::ASC) Order by the fact_lang column
 * @method FactureEditionHistoryQuery orderByFactNumCmd($order = Criteria::ASC) Order by the fact_num_cmd column
 * @method FactureEditionHistoryQuery orderByFactMontantHt($order = Criteria::ASC) Order by the fact_montant_ht column
 * @method FactureEditionHistoryQuery orderByFactMontantTtc($order = Criteria::ASC) Order by the fact_montant_ttc column
 * @method FactureEditionHistoryQuery orderByFactMontantEncaisse($order = Criteria::ASC) Order by the fact_montant_encaisse column
 * @method FactureEditionHistoryQuery orderByFactDestinataire($order = Criteria::ASC) Order by the fact_destinataire column
 * @method FactureEditionHistoryQuery orderByFactAttention($order = Criteria::ASC) Order by the fact_attention column
 * @method FactureEditionHistoryQuery orderByFactAdresse1($order = Criteria::ASC) Order by the fact_adresse1 column
 * @method FactureEditionHistoryQuery orderByFactAdresse2($order = Criteria::ASC) Order by the fact_adresse2 column
 * @method FactureEditionHistoryQuery orderByFactAdresse3($order = Criteria::ASC) Order by the fact_adresse3 column
 * @method FactureEditionHistoryQuery orderByFactCodePostal($order = Criteria::ASC) Order by the fact_code_postal column
 * @method FactureEditionHistoryQuery orderByFactVille($order = Criteria::ASC) Order by the fact_ville column
 * @method FactureEditionHistoryQuery orderByFactPays($order = Criteria::ASC) Order by the fact_pays column
 * @method FactureEditionHistoryQuery orderByFactMentionSpec($order = Criteria::ASC) Order by the fact_mention_spec column
 * @method FactureEditionHistoryQuery orderByFactUserEdition($order = Criteria::ASC) Order by the fact_user_edition column
 * @method FactureEditionHistoryQuery orderByFactStatusId($order = Criteria::ASC) Order by the fact_status_id column
 * @method FactureEditionHistoryQuery orderByFactVerrou($order = Criteria::ASC) Order by the fact_verrou column
 * @method FactureEditionHistoryQuery orderByFactHasRelance($order = Criteria::ASC) Order by the fact_has_relance column
 * @method FactureEditionHistoryQuery orderByFactAnnulId($order = Criteria::ASC) Order by the fact_annul_id column
 * @method FactureEditionHistoryQuery orderByFactDateEcheance($order = Criteria::ASC) Order by the fact_date_echeance column
 * @method FactureEditionHistoryQuery orderByFactTauxAdf($order = Criteria::ASC) Order by the fact_taux_adf column
 * @method FactureEditionHistoryQuery orderByFactDateCreate($order = Criteria::ASC) Order by the fact_date_create column
 * @method FactureEditionHistoryQuery orderByFactDateModify($order = Criteria::ASC) Order by the fact_date_modify column
 * @method FactureEditionHistoryQuery orderByFactUserId($order = Criteria::ASC) Order by the fact_user_id column
 * @method FactureEditionHistoryQuery orderByFactUserModify($order = Criteria::ASC) Order by the fact_user_modify column
 * @method FactureEditionHistoryQuery orderByFactEcheanceId($order = Criteria::ASC) Order by the fact_echeance_id column
 * @method FactureEditionHistoryQuery orderByJdvId($order = Criteria::ASC) Order by the jdv_id column
 * @method FactureEditionHistoryQuery orderByFactDate($order = Criteria::ASC) Order by the fact_date column
 * @method FactureEditionHistoryQuery orderByFactEmail($order = Criteria::ASC) Order by the fact_email column
 *
 * @method FactureEditionHistoryQuery groupByFactEhId() Group by the fact_eh_id column
 * @method FactureEditionHistoryQuery groupByFactEhUserId() Group by the fact_eh_user_id column
 * @method FactureEditionHistoryQuery groupByReeditionDate() Group by the reedition_date column
 * @method FactureEditionHistoryQuery groupByFactId() Group by the fact_id column
 * @method FactureEditionHistoryQuery groupByRFactTypeId() Group by the r_fact_type_id column
 * @method FactureEditionHistoryQuery groupByOpId() Group by the op_id column
 * @method FactureEditionHistoryQuery groupByClId() Group by the cl_id column
 * @method FactureEditionHistoryQuery groupByCtId() Group by the ct_id column
 * @method FactureEditionHistoryQuery groupByDcId() Group by the dc_id column
 * @method FactureEditionHistoryQuery groupByFactNumero() Group by the fact_numero column
 * @method FactureEditionHistoryQuery groupByFactReference() Group by the fact_reference column
 * @method FactureEditionHistoryQuery groupByFactLang() Group by the fact_lang column
 * @method FactureEditionHistoryQuery groupByFactNumCmd() Group by the fact_num_cmd column
 * @method FactureEditionHistoryQuery groupByFactMontantHt() Group by the fact_montant_ht column
 * @method FactureEditionHistoryQuery groupByFactMontantTtc() Group by the fact_montant_ttc column
 * @method FactureEditionHistoryQuery groupByFactMontantEncaisse() Group by the fact_montant_encaisse column
 * @method FactureEditionHistoryQuery groupByFactDestinataire() Group by the fact_destinataire column
 * @method FactureEditionHistoryQuery groupByFactAttention() Group by the fact_attention column
 * @method FactureEditionHistoryQuery groupByFactAdresse1() Group by the fact_adresse1 column
 * @method FactureEditionHistoryQuery groupByFactAdresse2() Group by the fact_adresse2 column
 * @method FactureEditionHistoryQuery groupByFactAdresse3() Group by the fact_adresse3 column
 * @method FactureEditionHistoryQuery groupByFactCodePostal() Group by the fact_code_postal column
 * @method FactureEditionHistoryQuery groupByFactVille() Group by the fact_ville column
 * @method FactureEditionHistoryQuery groupByFactPays() Group by the fact_pays column
 * @method FactureEditionHistoryQuery groupByFactMentionSpec() Group by the fact_mention_spec column
 * @method FactureEditionHistoryQuery groupByFactUserEdition() Group by the fact_user_edition column
 * @method FactureEditionHistoryQuery groupByFactStatusId() Group by the fact_status_id column
 * @method FactureEditionHistoryQuery groupByFactVerrou() Group by the fact_verrou column
 * @method FactureEditionHistoryQuery groupByFactHasRelance() Group by the fact_has_relance column
 * @method FactureEditionHistoryQuery groupByFactAnnulId() Group by the fact_annul_id column
 * @method FactureEditionHistoryQuery groupByFactDateEcheance() Group by the fact_date_echeance column
 * @method FactureEditionHistoryQuery groupByFactTauxAdf() Group by the fact_taux_adf column
 * @method FactureEditionHistoryQuery groupByFactDateCreate() Group by the fact_date_create column
 * @method FactureEditionHistoryQuery groupByFactDateModify() Group by the fact_date_modify column
 * @method FactureEditionHistoryQuery groupByFactUserId() Group by the fact_user_id column
 * @method FactureEditionHistoryQuery groupByFactUserModify() Group by the fact_user_modify column
 * @method FactureEditionHistoryQuery groupByFactEcheanceId() Group by the fact_echeance_id column
 * @method FactureEditionHistoryQuery groupByJdvId() Group by the jdv_id column
 * @method FactureEditionHistoryQuery groupByFactDate() Group by the fact_date column
 * @method FactureEditionHistoryQuery groupByFactEmail() Group by the fact_email column
 *
 * @method FactureEditionHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FactureEditionHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FactureEditionHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FactureEditionHistoryQuery leftJoinOperations($relationAlias = null) Adds a LEFT JOIN clause to the query using the Operations relation
 * @method FactureEditionHistoryQuery rightJoinOperations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Operations relation
 * @method FactureEditionHistoryQuery innerJoinOperations($relationAlias = null) Adds a INNER JOIN clause to the query using the Operations relation
 *
 * @method FactureEditionHistoryQuery leftJoinRFactureTypes($relationAlias = null) Adds a LEFT JOIN clause to the query using the RFactureTypes relation
 * @method FactureEditionHistoryQuery rightJoinRFactureTypes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RFactureTypes relation
 * @method FactureEditionHistoryQuery innerJoinRFactureTypes($relationAlias = null) Adds a INNER JOIN clause to the query using the RFactureTypes relation
 *
 * @method FactureEditionHistoryQuery leftJoinClients($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clients relation
 * @method FactureEditionHistoryQuery rightJoinClients($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clients relation
 * @method FactureEditionHistoryQuery innerJoinClients($relationAlias = null) Adds a INNER JOIN clause to the query using the Clients relation
 *
 * @method FactureEditionHistoryQuery leftJoinClientFactureOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientFactureOptions relation
 * @method FactureEditionHistoryQuery rightJoinClientFactureOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientFactureOptions relation
 * @method FactureEditionHistoryQuery innerJoinClientFactureOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientFactureOptions relation
 *
 * @method FactureEditionHistoryQuery leftJoinRFactureStatuts($relationAlias = null) Adds a LEFT JOIN clause to the query using the RFactureStatuts relation
 * @method FactureEditionHistoryQuery rightJoinRFactureStatuts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RFactureStatuts relation
 * @method FactureEditionHistoryQuery innerJoinRFactureStatuts($relationAlias = null) Adds a INNER JOIN clause to the query using the RFactureStatuts relation
 *
 * @method FactureEditionHistoryQuery leftJoinPlanFacturationParams($relationAlias = null) Adds a LEFT JOIN clause to the query using the PlanFacturationParams relation
 * @method FactureEditionHistoryQuery rightJoinPlanFacturationParams($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PlanFacturationParams relation
 * @method FactureEditionHistoryQuery innerJoinPlanFacturationParams($relationAlias = null) Adds a INNER JOIN clause to the query using the PlanFacturationParams relation
 *
 * @method FactureEditionHistoryQuery leftJoinRFactureOptionsEcheances($relationAlias = null) Adds a LEFT JOIN clause to the query using the RFactureOptionsEcheances relation
 * @method FactureEditionHistoryQuery rightJoinRFactureOptionsEcheances($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RFactureOptionsEcheances relation
 * @method FactureEditionHistoryQuery innerJoinRFactureOptionsEcheances($relationAlias = null) Adds a INNER JOIN clause to the query using the RFactureOptionsEcheances relation
 *
 * @method FactureEditionHistoryQuery leftJoinJournalDeVente($relationAlias = null) Adds a LEFT JOIN clause to the query using the JournalDeVente relation
 * @method FactureEditionHistoryQuery rightJoinJournalDeVente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the JournalDeVente relation
 * @method FactureEditionHistoryQuery innerJoinJournalDeVente($relationAlias = null) Adds a INNER JOIN clause to the query using the JournalDeVente relation
 *
 * @method FactureEditionHistoryQuery leftJoinContactFacturation($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContactFacturation relation
 * @method FactureEditionHistoryQuery rightJoinContactFacturation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContactFacturation relation
 * @method FactureEditionHistoryQuery innerJoinContactFacturation($relationAlias = null) Adds a INNER JOIN clause to the query using the ContactFacturation relation
 *
 * @method FactureEditionHistoryQuery leftJoinFactReeditionUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactReeditionUser relation
 * @method FactureEditionHistoryQuery rightJoinFactReeditionUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactReeditionUser relation
 * @method FactureEditionHistoryQuery innerJoinFactReeditionUser($relationAlias = null) Adds a INNER JOIN clause to the query using the FactReeditionUser relation
 *
 * @method FactureEditionHistoryQuery leftJoinReeditedFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the ReeditedFacture relation
 * @method FactureEditionHistoryQuery rightJoinReeditedFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ReeditedFacture relation
 * @method FactureEditionHistoryQuery innerJoinReeditedFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the ReeditedFacture relation
 *
 * @method FactureEditionHistory findOne(PropelPDO $con = null) Return the first FactureEditionHistory matching the query
 * @method FactureEditionHistory findOneOrCreate(PropelPDO $con = null) Return the first FactureEditionHistory matching the query, or a new FactureEditionHistory object populated from the query conditions when no match is found
 *
 * @method FactureEditionHistory findOneByFactEhUserId(int $fact_eh_user_id) Return the first FactureEditionHistory filtered by the fact_eh_user_id column
 * @method FactureEditionHistory findOneByReeditionDate(string $reedition_date) Return the first FactureEditionHistory filtered by the reedition_date column
 * @method FactureEditionHistory findOneByFactId(int $fact_id) Return the first FactureEditionHistory filtered by the fact_id column
 * @method FactureEditionHistory findOneByRFactTypeId(int $r_fact_type_id) Return the first FactureEditionHistory filtered by the r_fact_type_id column
 * @method FactureEditionHistory findOneByOpId(int $op_id) Return the first FactureEditionHistory filtered by the op_id column
 * @method FactureEditionHistory findOneByClId(int $cl_id) Return the first FactureEditionHistory filtered by the cl_id column
 * @method FactureEditionHistory findOneByCtId(int $ct_id) Return the first FactureEditionHistory filtered by the ct_id column
 * @method FactureEditionHistory findOneByDcId(int $dc_id) Return the first FactureEditionHistory filtered by the dc_id column
 * @method FactureEditionHistory findOneByFactNumero(int $fact_numero) Return the first FactureEditionHistory filtered by the fact_numero column
 * @method FactureEditionHistory findOneByFactReference(string $fact_reference) Return the first FactureEditionHistory filtered by the fact_reference column
 * @method FactureEditionHistory findOneByFactLang(string $fact_lang) Return the first FactureEditionHistory filtered by the fact_lang column
 * @method FactureEditionHistory findOneByFactNumCmd(string $fact_num_cmd) Return the first FactureEditionHistory filtered by the fact_num_cmd column
 * @method FactureEditionHistory findOneByFactMontantHt(float $fact_montant_ht) Return the first FactureEditionHistory filtered by the fact_montant_ht column
 * @method FactureEditionHistory findOneByFactMontantTtc(float $fact_montant_ttc) Return the first FactureEditionHistory filtered by the fact_montant_ttc column
 * @method FactureEditionHistory findOneByFactMontantEncaisse(float $fact_montant_encaisse) Return the first FactureEditionHistory filtered by the fact_montant_encaisse column
 * @method FactureEditionHistory findOneByFactDestinataire(string $fact_destinataire) Return the first FactureEditionHistory filtered by the fact_destinataire column
 * @method FactureEditionHistory findOneByFactAttention(string $fact_attention) Return the first FactureEditionHistory filtered by the fact_attention column
 * @method FactureEditionHistory findOneByFactAdresse1(string $fact_adresse1) Return the first FactureEditionHistory filtered by the fact_adresse1 column
 * @method FactureEditionHistory findOneByFactAdresse2(string $fact_adresse2) Return the first FactureEditionHistory filtered by the fact_adresse2 column
 * @method FactureEditionHistory findOneByFactAdresse3(string $fact_adresse3) Return the first FactureEditionHistory filtered by the fact_adresse3 column
 * @method FactureEditionHistory findOneByFactCodePostal(string $fact_code_postal) Return the first FactureEditionHistory filtered by the fact_code_postal column
 * @method FactureEditionHistory findOneByFactVille(string $fact_ville) Return the first FactureEditionHistory filtered by the fact_ville column
 * @method FactureEditionHistory findOneByFactPays(string $fact_pays) Return the first FactureEditionHistory filtered by the fact_pays column
 * @method FactureEditionHistory findOneByFactMentionSpec(string $fact_mention_spec) Return the first FactureEditionHistory filtered by the fact_mention_spec column
 * @method FactureEditionHistory findOneByFactUserEdition(int $fact_user_edition) Return the first FactureEditionHistory filtered by the fact_user_edition column
 * @method FactureEditionHistory findOneByFactStatusId(int $fact_status_id) Return the first FactureEditionHistory filtered by the fact_status_id column
 * @method FactureEditionHistory findOneByFactVerrou(boolean $fact_verrou) Return the first FactureEditionHistory filtered by the fact_verrou column
 * @method FactureEditionHistory findOneByFactHasRelance(boolean $fact_has_relance) Return the first FactureEditionHistory filtered by the fact_has_relance column
 * @method FactureEditionHistory findOneByFactAnnulId(int $fact_annul_id) Return the first FactureEditionHistory filtered by the fact_annul_id column
 * @method FactureEditionHistory findOneByFactDateEcheance(string $fact_date_echeance) Return the first FactureEditionHistory filtered by the fact_date_echeance column
 * @method FactureEditionHistory findOneByFactTauxAdf(float $fact_taux_adf) Return the first FactureEditionHistory filtered by the fact_taux_adf column
 * @method FactureEditionHistory findOneByFactDateCreate(string $fact_date_create) Return the first FactureEditionHistory filtered by the fact_date_create column
 * @method FactureEditionHistory findOneByFactDateModify(string $fact_date_modify) Return the first FactureEditionHistory filtered by the fact_date_modify column
 * @method FactureEditionHistory findOneByFactUserId(int $fact_user_id) Return the first FactureEditionHistory filtered by the fact_user_id column
 * @method FactureEditionHistory findOneByFactUserModify(int $fact_user_modify) Return the first FactureEditionHistory filtered by the fact_user_modify column
 * @method FactureEditionHistory findOneByFactEcheanceId(int $fact_echeance_id) Return the first FactureEditionHistory filtered by the fact_echeance_id column
 * @method FactureEditionHistory findOneByJdvId(int $jdv_id) Return the first FactureEditionHistory filtered by the jdv_id column
 * @method FactureEditionHistory findOneByFactDate(string $fact_date) Return the first FactureEditionHistory filtered by the fact_date column
 * @method FactureEditionHistory findOneByFactEmail(string $fact_email) Return the first FactureEditionHistory filtered by the fact_email column
 *
 * @method array findByFactEhId(int $fact_eh_id) Return FactureEditionHistory objects filtered by the fact_eh_id column
 * @method array findByFactEhUserId(int $fact_eh_user_id) Return FactureEditionHistory objects filtered by the fact_eh_user_id column
 * @method array findByReeditionDate(string $reedition_date) Return FactureEditionHistory objects filtered by the reedition_date column
 * @method array findByFactId(int $fact_id) Return FactureEditionHistory objects filtered by the fact_id column
 * @method array findByRFactTypeId(int $r_fact_type_id) Return FactureEditionHistory objects filtered by the r_fact_type_id column
 * @method array findByOpId(int $op_id) Return FactureEditionHistory objects filtered by the op_id column
 * @method array findByClId(int $cl_id) Return FactureEditionHistory objects filtered by the cl_id column
 * @method array findByCtId(int $ct_id) Return FactureEditionHistory objects filtered by the ct_id column
 * @method array findByDcId(int $dc_id) Return FactureEditionHistory objects filtered by the dc_id column
 * @method array findByFactNumero(int $fact_numero) Return FactureEditionHistory objects filtered by the fact_numero column
 * @method array findByFactReference(string $fact_reference) Return FactureEditionHistory objects filtered by the fact_reference column
 * @method array findByFactLang(string $fact_lang) Return FactureEditionHistory objects filtered by the fact_lang column
 * @method array findByFactNumCmd(string $fact_num_cmd) Return FactureEditionHistory objects filtered by the fact_num_cmd column
 * @method array findByFactMontantHt(float $fact_montant_ht) Return FactureEditionHistory objects filtered by the fact_montant_ht column
 * @method array findByFactMontantTtc(float $fact_montant_ttc) Return FactureEditionHistory objects filtered by the fact_montant_ttc column
 * @method array findByFactMontantEncaisse(float $fact_montant_encaisse) Return FactureEditionHistory objects filtered by the fact_montant_encaisse column
 * @method array findByFactDestinataire(string $fact_destinataire) Return FactureEditionHistory objects filtered by the fact_destinataire column
 * @method array findByFactAttention(string $fact_attention) Return FactureEditionHistory objects filtered by the fact_attention column
 * @method array findByFactAdresse1(string $fact_adresse1) Return FactureEditionHistory objects filtered by the fact_adresse1 column
 * @method array findByFactAdresse2(string $fact_adresse2) Return FactureEditionHistory objects filtered by the fact_adresse2 column
 * @method array findByFactAdresse3(string $fact_adresse3) Return FactureEditionHistory objects filtered by the fact_adresse3 column
 * @method array findByFactCodePostal(string $fact_code_postal) Return FactureEditionHistory objects filtered by the fact_code_postal column
 * @method array findByFactVille(string $fact_ville) Return FactureEditionHistory objects filtered by the fact_ville column
 * @method array findByFactPays(string $fact_pays) Return FactureEditionHistory objects filtered by the fact_pays column
 * @method array findByFactMentionSpec(string $fact_mention_spec) Return FactureEditionHistory objects filtered by the fact_mention_spec column
 * @method array findByFactUserEdition(int $fact_user_edition) Return FactureEditionHistory objects filtered by the fact_user_edition column
 * @method array findByFactStatusId(int $fact_status_id) Return FactureEditionHistory objects filtered by the fact_status_id column
 * @method array findByFactVerrou(boolean $fact_verrou) Return FactureEditionHistory objects filtered by the fact_verrou column
 * @method array findByFactHasRelance(boolean $fact_has_relance) Return FactureEditionHistory objects filtered by the fact_has_relance column
 * @method array findByFactAnnulId(int $fact_annul_id) Return FactureEditionHistory objects filtered by the fact_annul_id column
 * @method array findByFactDateEcheance(string $fact_date_echeance) Return FactureEditionHistory objects filtered by the fact_date_echeance column
 * @method array findByFactTauxAdf(float $fact_taux_adf) Return FactureEditionHistory objects filtered by the fact_taux_adf column
 * @method array findByFactDateCreate(string $fact_date_create) Return FactureEditionHistory objects filtered by the fact_date_create column
 * @method array findByFactDateModify(string $fact_date_modify) Return FactureEditionHistory objects filtered by the fact_date_modify column
 * @method array findByFactUserId(int $fact_user_id) Return FactureEditionHistory objects filtered by the fact_user_id column
 * @method array findByFactUserModify(int $fact_user_modify) Return FactureEditionHistory objects filtered by the fact_user_modify column
 * @method array findByFactEcheanceId(int $fact_echeance_id) Return FactureEditionHistory objects filtered by the fact_echeance_id column
 * @method array findByJdvId(int $jdv_id) Return FactureEditionHistory objects filtered by the jdv_id column
 * @method array findByFactDate(string $fact_date) Return FactureEditionHistory objects filtered by the fact_date column
 * @method array findByFactEmail(string $fact_email) Return FactureEditionHistory objects filtered by the fact_email column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseFactureEditionHistoryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFactureEditionHistoryQuery object.
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
            $modelName = 'FactureEditionHistory';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FactureEditionHistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FactureEditionHistoryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FactureEditionHistoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FactureEditionHistoryQuery) {
            return $criteria;
        }
        $query = new FactureEditionHistoryQuery(null, null, $modelAlias);

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
     * @return   FactureEditionHistory|FactureEditionHistory[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FactureEditionHistoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FactureEditionHistoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FactureEditionHistory A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFactEhId($key, $con = null)
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
     * @return                 FactureEditionHistory A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `fact_eh_id`, `fact_eh_user_id`, `reedition_date`, `fact_id`, `r_fact_type_id`, `op_id`, `cl_id`, `ct_id`, `dc_id`, `fact_numero`, `fact_reference`, `fact_lang`, `fact_num_cmd`, `fact_montant_ht`, `fact_montant_ttc`, `fact_montant_encaisse`, `fact_destinataire`, `fact_attention`, `fact_adresse1`, `fact_adresse2`, `fact_adresse3`, `fact_code_postal`, `fact_ville`, `fact_pays`, `fact_mention_spec`, `fact_user_edition`, `fact_status_id`, `fact_verrou`, `fact_has_relance`, `fact_annul_id`, `fact_date_echeance`, `fact_taux_adf`, `fact_date_create`, `fact_date_modify`, `fact_user_id`, `fact_user_modify`, `fact_echeance_id`, `jdv_id`, `fact_date`, `fact_email` FROM `facture_edition_history` WHERE `fact_eh_id` = :p0';
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
            $obj = new FactureEditionHistory();
            $obj->hydrate($row);
            FactureEditionHistoryPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FactureEditionHistory|FactureEditionHistory[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FactureEditionHistory[]|mixed the list of results, formatted by the current formatter
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
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the fact_eh_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactEhId(1234); // WHERE fact_eh_id = 1234
     * $query->filterByFactEhId(array(12, 34)); // WHERE fact_eh_id IN (12, 34)
     * $query->filterByFactEhId(array('min' => 12)); // WHERE fact_eh_id >= 12
     * $query->filterByFactEhId(array('max' => 12)); // WHERE fact_eh_id <= 12
     * </code>
     *
     * @param     mixed $factEhId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactEhId($factEhId = null, $comparison = null)
    {
        if (is_array($factEhId)) {
            $useMinMax = false;
            if (isset($factEhId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_ID, $factEhId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factEhId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_ID, $factEhId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_ID, $factEhId, $comparison);
    }

    /**
     * Filter the query on the fact_eh_user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactEhUserId(1234); // WHERE fact_eh_user_id = 1234
     * $query->filterByFactEhUserId(array(12, 34)); // WHERE fact_eh_user_id IN (12, 34)
     * $query->filterByFactEhUserId(array('min' => 12)); // WHERE fact_eh_user_id >= 12
     * $query->filterByFactEhUserId(array('max' => 12)); // WHERE fact_eh_user_id <= 12
     * </code>
     *
     * @see       filterByFactReeditionUser()
     *
     * @param     mixed $factEhUserId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactEhUserId($factEhUserId = null, $comparison = null)
    {
        if (is_array($factEhUserId)) {
            $useMinMax = false;
            if (isset($factEhUserId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_USER_ID, $factEhUserId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factEhUserId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_USER_ID, $factEhUserId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_USER_ID, $factEhUserId, $comparison);
    }

    /**
     * Filter the query on the reedition_date column
     *
     * Example usage:
     * <code>
     * $query->filterByReeditionDate('2011-03-14'); // WHERE reedition_date = '2011-03-14'
     * $query->filterByReeditionDate('now'); // WHERE reedition_date = '2011-03-14'
     * $query->filterByReeditionDate(array('max' => 'yesterday')); // WHERE reedition_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $reeditionDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByReeditionDate($reeditionDate = null, $comparison = null)
    {
        if (is_array($reeditionDate)) {
            $useMinMax = false;
            if (isset($reeditionDate['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::REEDITION_DATE, $reeditionDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reeditionDate['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::REEDITION_DATE, $reeditionDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::REEDITION_DATE, $reeditionDate, $comparison);
    }

    /**
     * Filter the query on the fact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactId(1234); // WHERE fact_id = 1234
     * $query->filterByFactId(array(12, 34)); // WHERE fact_id IN (12, 34)
     * $query->filterByFactId(array('min' => 12)); // WHERE fact_id >= 12
     * $query->filterByFactId(array('max' => 12)); // WHERE fact_id <= 12
     * </code>
     *
     * @see       filterByReeditedFacture()
     *
     * @param     mixed $factId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactId($factId = null, $comparison = null)
    {
        if (is_array($factId)) {
            $useMinMax = false;
            if (isset($factId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ID, $factId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ID, $factId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ID, $factId, $comparison);
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
     * @see       filterByRFactureTypes()
     *
     * @param     mixed $rFactTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByRFactTypeId($rFactTypeId = null, $comparison = null)
    {
        if (is_array($rFactTypeId)) {
            $useMinMax = false;
            if (isset($rFactTypeId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::R_FACT_TYPE_ID, $rFactTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rFactTypeId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::R_FACT_TYPE_ID, $rFactTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::R_FACT_TYPE_ID, $rFactTypeId, $comparison);
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
     * @see       filterByPlanFacturationParams()
     *
     * @param     mixed $opId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the cl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByClId(1234); // WHERE cl_id = 1234
     * $query->filterByClId(array(12, 34)); // WHERE cl_id IN (12, 34)
     * $query->filterByClId(array('min' => 12)); // WHERE cl_id >= 12
     * $query->filterByClId(array('max' => 12)); // WHERE cl_id <= 12
     * </code>
     *
     * @see       filterByClients()
     *
     * @see       filterByClientFactureOptions()
     *
     * @param     mixed $clId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByClId($clId = null, $comparison = null)
    {
        if (is_array($clId)) {
            $useMinMax = false;
            if (isset($clId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::CL_ID, $clId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::CL_ID, $clId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::CL_ID, $clId, $comparison);
    }

    /**
     * Filter the query on the ct_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCtId(1234); // WHERE ct_id = 1234
     * $query->filterByCtId(array(12, 34)); // WHERE ct_id IN (12, 34)
     * $query->filterByCtId(array('min' => 12)); // WHERE ct_id >= 12
     * $query->filterByCtId(array('max' => 12)); // WHERE ct_id <= 12
     * </code>
     *
     * @see       filterByContactFacturation()
     *
     * @param     mixed $ctId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByCtId($ctId = null, $comparison = null)
    {
        if (is_array($ctId)) {
            $useMinMax = false;
            if (isset($ctId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::CT_ID, $ctId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ctId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::CT_ID, $ctId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::CT_ID, $ctId, $comparison);
    }

    /**
     * Filter the query on the dc_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDcId(1234); // WHERE dc_id = 1234
     * $query->filterByDcId(array(12, 34)); // WHERE dc_id IN (12, 34)
     * $query->filterByDcId(array('min' => 12)); // WHERE dc_id >= 12
     * $query->filterByDcId(array('max' => 12)); // WHERE dc_id <= 12
     * </code>
     *
     * @param     mixed $dcId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByDcId($dcId = null, $comparison = null)
    {
        if (is_array($dcId)) {
            $useMinMax = false;
            if (isset($dcId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::DC_ID, $dcId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dcId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::DC_ID, $dcId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::DC_ID, $dcId, $comparison);
    }

    /**
     * Filter the query on the fact_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByFactNumero(1234); // WHERE fact_numero = 1234
     * $query->filterByFactNumero(array(12, 34)); // WHERE fact_numero IN (12, 34)
     * $query->filterByFactNumero(array('min' => 12)); // WHERE fact_numero >= 12
     * $query->filterByFactNumero(array('max' => 12)); // WHERE fact_numero <= 12
     * </code>
     *
     * @param     mixed $factNumero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactNumero($factNumero = null, $comparison = null)
    {
        if (is_array($factNumero)) {
            $useMinMax = false;
            if (isset($factNumero['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_NUMERO, $factNumero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factNumero['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_NUMERO, $factNumero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_NUMERO, $factNumero, $comparison);
    }

    /**
     * Filter the query on the fact_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByFactReference('fooValue');   // WHERE fact_reference = 'fooValue'
     * $query->filterByFactReference('%fooValue%'); // WHERE fact_reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactReference($factReference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factReference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factReference)) {
                $factReference = str_replace('*', '%', $factReference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_REFERENCE, $factReference, $comparison);
    }

    /**
     * Filter the query on the fact_lang column
     *
     * Example usage:
     * <code>
     * $query->filterByFactLang('fooValue');   // WHERE fact_lang = 'fooValue'
     * $query->filterByFactLang('%fooValue%'); // WHERE fact_lang LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factLang The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactLang($factLang = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factLang)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factLang)) {
                $factLang = str_replace('*', '%', $factLang);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_LANG, $factLang, $comparison);
    }

    /**
     * Filter the query on the fact_num_cmd column
     *
     * Example usage:
     * <code>
     * $query->filterByFactNumCmd('fooValue');   // WHERE fact_num_cmd = 'fooValue'
     * $query->filterByFactNumCmd('%fooValue%'); // WHERE fact_num_cmd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factNumCmd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactNumCmd($factNumCmd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factNumCmd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factNumCmd)) {
                $factNumCmd = str_replace('*', '%', $factNumCmd);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_NUM_CMD, $factNumCmd, $comparison);
    }

    /**
     * Filter the query on the fact_montant_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByFactMontantHt(1234); // WHERE fact_montant_ht = 1234
     * $query->filterByFactMontantHt(array(12, 34)); // WHERE fact_montant_ht IN (12, 34)
     * $query->filterByFactMontantHt(array('min' => 12)); // WHERE fact_montant_ht >= 12
     * $query->filterByFactMontantHt(array('max' => 12)); // WHERE fact_montant_ht <= 12
     * </code>
     *
     * @param     mixed $factMontantHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactMontantHt($factMontantHt = null, $comparison = null)
    {
        if (is_array($factMontantHt)) {
            $useMinMax = false;
            if (isset($factMontantHt['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_MONTANT_HT, $factMontantHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factMontantHt['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_MONTANT_HT, $factMontantHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_MONTANT_HT, $factMontantHt, $comparison);
    }

    /**
     * Filter the query on the fact_montant_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByFactMontantTtc(1234); // WHERE fact_montant_ttc = 1234
     * $query->filterByFactMontantTtc(array(12, 34)); // WHERE fact_montant_ttc IN (12, 34)
     * $query->filterByFactMontantTtc(array('min' => 12)); // WHERE fact_montant_ttc >= 12
     * $query->filterByFactMontantTtc(array('max' => 12)); // WHERE fact_montant_ttc <= 12
     * </code>
     *
     * @param     mixed $factMontantTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactMontantTtc($factMontantTtc = null, $comparison = null)
    {
        if (is_array($factMontantTtc)) {
            $useMinMax = false;
            if (isset($factMontantTtc['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_MONTANT_TTC, $factMontantTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factMontantTtc['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_MONTANT_TTC, $factMontantTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_MONTANT_TTC, $factMontantTtc, $comparison);
    }

    /**
     * Filter the query on the fact_montant_encaisse column
     *
     * Example usage:
     * <code>
     * $query->filterByFactMontantEncaisse(1234); // WHERE fact_montant_encaisse = 1234
     * $query->filterByFactMontantEncaisse(array(12, 34)); // WHERE fact_montant_encaisse IN (12, 34)
     * $query->filterByFactMontantEncaisse(array('min' => 12)); // WHERE fact_montant_encaisse >= 12
     * $query->filterByFactMontantEncaisse(array('max' => 12)); // WHERE fact_montant_encaisse <= 12
     * </code>
     *
     * @param     mixed $factMontantEncaisse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactMontantEncaisse($factMontantEncaisse = null, $comparison = null)
    {
        if (is_array($factMontantEncaisse)) {
            $useMinMax = false;
            if (isset($factMontantEncaisse['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_MONTANT_ENCAISSE, $factMontantEncaisse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factMontantEncaisse['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_MONTANT_ENCAISSE, $factMontantEncaisse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_MONTANT_ENCAISSE, $factMontantEncaisse, $comparison);
    }

    /**
     * Filter the query on the fact_destinataire column
     *
     * Example usage:
     * <code>
     * $query->filterByFactDestinataire('fooValue');   // WHERE fact_destinataire = 'fooValue'
     * $query->filterByFactDestinataire('%fooValue%'); // WHERE fact_destinataire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factDestinataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactDestinataire($factDestinataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factDestinataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factDestinataire)) {
                $factDestinataire = str_replace('*', '%', $factDestinataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DESTINATAIRE, $factDestinataire, $comparison);
    }

    /**
     * Filter the query on the fact_attention column
     *
     * Example usage:
     * <code>
     * $query->filterByFactAttention('fooValue');   // WHERE fact_attention = 'fooValue'
     * $query->filterByFactAttention('%fooValue%'); // WHERE fact_attention LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factAttention The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactAttention($factAttention = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factAttention)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factAttention)) {
                $factAttention = str_replace('*', '%', $factAttention);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ATTENTION, $factAttention, $comparison);
    }

    /**
     * Filter the query on the fact_adresse1 column
     *
     * Example usage:
     * <code>
     * $query->filterByFactAdresse1('fooValue');   // WHERE fact_adresse1 = 'fooValue'
     * $query->filterByFactAdresse1('%fooValue%'); // WHERE fact_adresse1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factAdresse1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactAdresse1($factAdresse1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factAdresse1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factAdresse1)) {
                $factAdresse1 = str_replace('*', '%', $factAdresse1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ADRESSE1, $factAdresse1, $comparison);
    }

    /**
     * Filter the query on the fact_adresse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByFactAdresse2('fooValue');   // WHERE fact_adresse2 = 'fooValue'
     * $query->filterByFactAdresse2('%fooValue%'); // WHERE fact_adresse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factAdresse2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactAdresse2($factAdresse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factAdresse2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factAdresse2)) {
                $factAdresse2 = str_replace('*', '%', $factAdresse2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ADRESSE2, $factAdresse2, $comparison);
    }

    /**
     * Filter the query on the fact_adresse3 column
     *
     * Example usage:
     * <code>
     * $query->filterByFactAdresse3('fooValue');   // WHERE fact_adresse3 = 'fooValue'
     * $query->filterByFactAdresse3('%fooValue%'); // WHERE fact_adresse3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factAdresse3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactAdresse3($factAdresse3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factAdresse3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factAdresse3)) {
                $factAdresse3 = str_replace('*', '%', $factAdresse3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ADRESSE3, $factAdresse3, $comparison);
    }

    /**
     * Filter the query on the fact_code_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByFactCodePostal('fooValue');   // WHERE fact_code_postal = 'fooValue'
     * $query->filterByFactCodePostal('%fooValue%'); // WHERE fact_code_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factCodePostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactCodePostal($factCodePostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factCodePostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factCodePostal)) {
                $factCodePostal = str_replace('*', '%', $factCodePostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_CODE_POSTAL, $factCodePostal, $comparison);
    }

    /**
     * Filter the query on the fact_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByFactVille('fooValue');   // WHERE fact_ville = 'fooValue'
     * $query->filterByFactVille('%fooValue%'); // WHERE fact_ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factVille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactVille($factVille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factVille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factVille)) {
                $factVille = str_replace('*', '%', $factVille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_VILLE, $factVille, $comparison);
    }

    /**
     * Filter the query on the fact_pays column
     *
     * Example usage:
     * <code>
     * $query->filterByFactPays('fooValue');   // WHERE fact_pays = 'fooValue'
     * $query->filterByFactPays('%fooValue%'); // WHERE fact_pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factPays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactPays($factPays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factPays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factPays)) {
                $factPays = str_replace('*', '%', $factPays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_PAYS, $factPays, $comparison);
    }

    /**
     * Filter the query on the fact_mention_spec column
     *
     * Example usage:
     * <code>
     * $query->filterByFactMentionSpec('fooValue');   // WHERE fact_mention_spec = 'fooValue'
     * $query->filterByFactMentionSpec('%fooValue%'); // WHERE fact_mention_spec LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factMentionSpec The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactMentionSpec($factMentionSpec = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factMentionSpec)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factMentionSpec)) {
                $factMentionSpec = str_replace('*', '%', $factMentionSpec);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_MENTION_SPEC, $factMentionSpec, $comparison);
    }

    /**
     * Filter the query on the fact_user_edition column
     *
     * Example usage:
     * <code>
     * $query->filterByFactUserEdition(1234); // WHERE fact_user_edition = 1234
     * $query->filterByFactUserEdition(array(12, 34)); // WHERE fact_user_edition IN (12, 34)
     * $query->filterByFactUserEdition(array('min' => 12)); // WHERE fact_user_edition >= 12
     * $query->filterByFactUserEdition(array('max' => 12)); // WHERE fact_user_edition <= 12
     * </code>
     *
     * @param     mixed $factUserEdition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactUserEdition($factUserEdition = null, $comparison = null)
    {
        if (is_array($factUserEdition)) {
            $useMinMax = false;
            if (isset($factUserEdition['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_USER_EDITION, $factUserEdition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factUserEdition['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_USER_EDITION, $factUserEdition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_USER_EDITION, $factUserEdition, $comparison);
    }

    /**
     * Filter the query on the fact_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactStatusId(1234); // WHERE fact_status_id = 1234
     * $query->filterByFactStatusId(array(12, 34)); // WHERE fact_status_id IN (12, 34)
     * $query->filterByFactStatusId(array('min' => 12)); // WHERE fact_status_id >= 12
     * $query->filterByFactStatusId(array('max' => 12)); // WHERE fact_status_id <= 12
     * </code>
     *
     * @see       filterByRFactureStatuts()
     *
     * @param     mixed $factStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactStatusId($factStatusId = null, $comparison = null)
    {
        if (is_array($factStatusId)) {
            $useMinMax = false;
            if (isset($factStatusId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_STATUS_ID, $factStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factStatusId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_STATUS_ID, $factStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_STATUS_ID, $factStatusId, $comparison);
    }

    /**
     * Filter the query on the fact_verrou column
     *
     * Example usage:
     * <code>
     * $query->filterByFactVerrou(true); // WHERE fact_verrou = true
     * $query->filterByFactVerrou('yes'); // WHERE fact_verrou = true
     * </code>
     *
     * @param     boolean|string $factVerrou The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactVerrou($factVerrou = null, $comparison = null)
    {
        if (is_string($factVerrou)) {
            $factVerrou = in_array(strtolower($factVerrou), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_VERROU, $factVerrou, $comparison);
    }

    /**
     * Filter the query on the fact_has_relance column
     *
     * Example usage:
     * <code>
     * $query->filterByFactHasRelance(true); // WHERE fact_has_relance = true
     * $query->filterByFactHasRelance('yes'); // WHERE fact_has_relance = true
     * </code>
     *
     * @param     boolean|string $factHasRelance The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactHasRelance($factHasRelance = null, $comparison = null)
    {
        if (is_string($factHasRelance)) {
            $factHasRelance = in_array(strtolower($factHasRelance), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_HAS_RELANCE, $factHasRelance, $comparison);
    }

    /**
     * Filter the query on the fact_annul_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactAnnulId(1234); // WHERE fact_annul_id = 1234
     * $query->filterByFactAnnulId(array(12, 34)); // WHERE fact_annul_id IN (12, 34)
     * $query->filterByFactAnnulId(array('min' => 12)); // WHERE fact_annul_id >= 12
     * $query->filterByFactAnnulId(array('max' => 12)); // WHERE fact_annul_id <= 12
     * </code>
     *
     * @param     mixed $factAnnulId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactAnnulId($factAnnulId = null, $comparison = null)
    {
        if (is_array($factAnnulId)) {
            $useMinMax = false;
            if (isset($factAnnulId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ANNUL_ID, $factAnnulId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factAnnulId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ANNUL_ID, $factAnnulId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ANNUL_ID, $factAnnulId, $comparison);
    }

    /**
     * Filter the query on the fact_date_echeance column
     *
     * Example usage:
     * <code>
     * $query->filterByFactDateEcheance('2011-03-14'); // WHERE fact_date_echeance = '2011-03-14'
     * $query->filterByFactDateEcheance('now'); // WHERE fact_date_echeance = '2011-03-14'
     * $query->filterByFactDateEcheance(array('max' => 'yesterday')); // WHERE fact_date_echeance < '2011-03-13'
     * </code>
     *
     * @param     mixed $factDateEcheance The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactDateEcheance($factDateEcheance = null, $comparison = null)
    {
        if (is_array($factDateEcheance)) {
            $useMinMax = false;
            if (isset($factDateEcheance['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE_ECHEANCE, $factDateEcheance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factDateEcheance['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE_ECHEANCE, $factDateEcheance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE_ECHEANCE, $factDateEcheance, $comparison);
    }

    /**
     * Filter the query on the fact_taux_adf column
     *
     * Example usage:
     * <code>
     * $query->filterByFactTauxAdf(1234); // WHERE fact_taux_adf = 1234
     * $query->filterByFactTauxAdf(array(12, 34)); // WHERE fact_taux_adf IN (12, 34)
     * $query->filterByFactTauxAdf(array('min' => 12)); // WHERE fact_taux_adf >= 12
     * $query->filterByFactTauxAdf(array('max' => 12)); // WHERE fact_taux_adf <= 12
     * </code>
     *
     * @param     mixed $factTauxAdf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactTauxAdf($factTauxAdf = null, $comparison = null)
    {
        if (is_array($factTauxAdf)) {
            $useMinMax = false;
            if (isset($factTauxAdf['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_TAUX_ADF, $factTauxAdf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factTauxAdf['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_TAUX_ADF, $factTauxAdf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_TAUX_ADF, $factTauxAdf, $comparison);
    }

    /**
     * Filter the query on the fact_date_create column
     *
     * Example usage:
     * <code>
     * $query->filterByFactDateCreate('2011-03-14'); // WHERE fact_date_create = '2011-03-14'
     * $query->filterByFactDateCreate('now'); // WHERE fact_date_create = '2011-03-14'
     * $query->filterByFactDateCreate(array('max' => 'yesterday')); // WHERE fact_date_create < '2011-03-13'
     * </code>
     *
     * @param     mixed $factDateCreate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactDateCreate($factDateCreate = null, $comparison = null)
    {
        if (is_array($factDateCreate)) {
            $useMinMax = false;
            if (isset($factDateCreate['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE_CREATE, $factDateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factDateCreate['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE_CREATE, $factDateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE_CREATE, $factDateCreate, $comparison);
    }

    /**
     * Filter the query on the fact_date_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByFactDateModify('2011-03-14'); // WHERE fact_date_modify = '2011-03-14'
     * $query->filterByFactDateModify('now'); // WHERE fact_date_modify = '2011-03-14'
     * $query->filterByFactDateModify(array('max' => 'yesterday')); // WHERE fact_date_modify < '2011-03-13'
     * </code>
     *
     * @param     mixed $factDateModify The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactDateModify($factDateModify = null, $comparison = null)
    {
        if (is_array($factDateModify)) {
            $useMinMax = false;
            if (isset($factDateModify['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE_MODIFY, $factDateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factDateModify['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE_MODIFY, $factDateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE_MODIFY, $factDateModify, $comparison);
    }

    /**
     * Filter the query on the fact_user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactUserId(1234); // WHERE fact_user_id = 1234
     * $query->filterByFactUserId(array(12, 34)); // WHERE fact_user_id IN (12, 34)
     * $query->filterByFactUserId(array('min' => 12)); // WHERE fact_user_id >= 12
     * $query->filterByFactUserId(array('max' => 12)); // WHERE fact_user_id <= 12
     * </code>
     *
     * @param     mixed $factUserId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactUserId($factUserId = null, $comparison = null)
    {
        if (is_array($factUserId)) {
            $useMinMax = false;
            if (isset($factUserId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_USER_ID, $factUserId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factUserId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_USER_ID, $factUserId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_USER_ID, $factUserId, $comparison);
    }

    /**
     * Filter the query on the fact_user_modify column
     *
     * Example usage:
     * <code>
     * $query->filterByFactUserModify(1234); // WHERE fact_user_modify = 1234
     * $query->filterByFactUserModify(array(12, 34)); // WHERE fact_user_modify IN (12, 34)
     * $query->filterByFactUserModify(array('min' => 12)); // WHERE fact_user_modify >= 12
     * $query->filterByFactUserModify(array('max' => 12)); // WHERE fact_user_modify <= 12
     * </code>
     *
     * @param     mixed $factUserModify The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactUserModify($factUserModify = null, $comparison = null)
    {
        if (is_array($factUserModify)) {
            $useMinMax = false;
            if (isset($factUserModify['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_USER_MODIFY, $factUserModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factUserModify['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_USER_MODIFY, $factUserModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_USER_MODIFY, $factUserModify, $comparison);
    }

    /**
     * Filter the query on the fact_echeance_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFactEcheanceId(1234); // WHERE fact_echeance_id = 1234
     * $query->filterByFactEcheanceId(array(12, 34)); // WHERE fact_echeance_id IN (12, 34)
     * $query->filterByFactEcheanceId(array('min' => 12)); // WHERE fact_echeance_id >= 12
     * $query->filterByFactEcheanceId(array('max' => 12)); // WHERE fact_echeance_id <= 12
     * </code>
     *
     * @see       filterByRFactureOptionsEcheances()
     *
     * @param     mixed $factEcheanceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactEcheanceId($factEcheanceId = null, $comparison = null)
    {
        if (is_array($factEcheanceId)) {
            $useMinMax = false;
            if (isset($factEcheanceId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ECHEANCE_ID, $factEcheanceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factEcheanceId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ECHEANCE_ID, $factEcheanceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_ECHEANCE_ID, $factEcheanceId, $comparison);
    }

    /**
     * Filter the query on the jdv_id column
     *
     * Example usage:
     * <code>
     * $query->filterByJdvId(1234); // WHERE jdv_id = 1234
     * $query->filterByJdvId(array(12, 34)); // WHERE jdv_id IN (12, 34)
     * $query->filterByJdvId(array('min' => 12)); // WHERE jdv_id >= 12
     * $query->filterByJdvId(array('max' => 12)); // WHERE jdv_id <= 12
     * </code>
     *
     * @see       filterByJournalDeVente()
     *
     * @param     mixed $jdvId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByJdvId($jdvId = null, $comparison = null)
    {
        if (is_array($jdvId)) {
            $useMinMax = false;
            if (isset($jdvId['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::JDV_ID, $jdvId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jdvId['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::JDV_ID, $jdvId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::JDV_ID, $jdvId, $comparison);
    }

    /**
     * Filter the query on the fact_date column
     *
     * Example usage:
     * <code>
     * $query->filterByFactDate('2011-03-14'); // WHERE fact_date = '2011-03-14'
     * $query->filterByFactDate('now'); // WHERE fact_date = '2011-03-14'
     * $query->filterByFactDate(array('max' => 'yesterday')); // WHERE fact_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $factDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactDate($factDate = null, $comparison = null)
    {
        if (is_array($factDate)) {
            $useMinMax = false;
            if (isset($factDate['min'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE, $factDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($factDate['max'])) {
                $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE, $factDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_DATE, $factDate, $comparison);
    }

    /**
     * Filter the query on the fact_email column
     *
     * Example usage:
     * <code>
     * $query->filterByFactEmail('fooValue');   // WHERE fact_email = 'fooValue'
     * $query->filterByFactEmail('%fooValue%'); // WHERE fact_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $factEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function filterByFactEmail($factEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($factEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $factEmail)) {
                $factEmail = str_replace('*', '%', $factEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FactureEditionHistoryPeer::FACT_EMAIL, $factEmail, $comparison);
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperations($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::OP_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::OP_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
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
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinOperations($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useOperationsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperations($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Operations', 'OperationsQuery');
    }

    /**
     * Filter the query by a related RFactureTypes object
     *
     * @param   RFactureTypes|PropelObjectCollection $rFactureTypes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRFactureTypes($rFactureTypes, $comparison = null)
    {
        if ($rFactureTypes instanceof RFactureTypes) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::R_FACT_TYPE_ID, $rFactureTypes->getRFactTypeId(), $comparison);
        } elseif ($rFactureTypes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::R_FACT_TYPE_ID, $rFactureTypes->toKeyValue('PrimaryKey', 'RFactTypeId'), $comparison);
        } else {
            throw new PropelException('filterByRFactureTypes() only accepts arguments of type RFactureTypes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RFactureTypes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinRFactureTypes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RFactureTypes');

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
            $this->addJoinObject($join, 'RFactureTypes');
        }

        return $this;
    }

    /**
     * Use the RFactureTypes relation RFactureTypes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RFactureTypesQuery A secondary query class using the current class as primary query
     */
    public function useRFactureTypesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRFactureTypes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RFactureTypes', 'RFactureTypesQuery');
    }

    /**
     * Filter the query by a related Clients object
     *
     * @param   Clients|PropelObjectCollection $clients The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClients($clients, $comparison = null)
    {
        if ($clients instanceof Clients) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::CL_ID, $clients->getClId(), $comparison);
        } elseif ($clients instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::CL_ID, $clients->toKeyValue('PrimaryKey', 'ClId'), $comparison);
        } else {
            throw new PropelException('filterByClients() only accepts arguments of type Clients or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Clients relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinClients($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Clients');

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
            $this->addJoinObject($join, 'Clients');
        }

        return $this;
    }

    /**
     * Use the Clients relation Clients object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientsQuery A secondary query class using the current class as primary query
     */
    public function useClientsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClients($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Clients', 'ClientsQuery');
    }

    /**
     * Filter the query by a related ClientFactureOptions object
     *
     * @param   ClientFactureOptions|PropelObjectCollection $clientFactureOptions The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientFactureOptions($clientFactureOptions, $comparison = null)
    {
        if ($clientFactureOptions instanceof ClientFactureOptions) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::CL_ID, $clientFactureOptions->getClId(), $comparison);
        } elseif ($clientFactureOptions instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::CL_ID, $clientFactureOptions->toKeyValue('PrimaryKey', 'ClId'), $comparison);
        } else {
            throw new PropelException('filterByClientFactureOptions() only accepts arguments of type ClientFactureOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientFactureOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinClientFactureOptions($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientFactureOptions');

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
            $this->addJoinObject($join, 'ClientFactureOptions');
        }

        return $this;
    }

    /**
     * Use the ClientFactureOptions relation ClientFactureOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientFactureOptionsQuery A secondary query class using the current class as primary query
     */
    public function useClientFactureOptionsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClientFactureOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientFactureOptions', 'ClientFactureOptionsQuery');
    }

    /**
     * Filter the query by a related RFactureStatuts object
     *
     * @param   RFactureStatuts|PropelObjectCollection $rFactureStatuts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRFactureStatuts($rFactureStatuts, $comparison = null)
    {
        if ($rFactureStatuts instanceof RFactureStatuts) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::FACT_STATUS_ID, $rFactureStatuts->getRFactStatId(), $comparison);
        } elseif ($rFactureStatuts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::FACT_STATUS_ID, $rFactureStatuts->toKeyValue('PrimaryKey', 'RFactStatId'), $comparison);
        } else {
            throw new PropelException('filterByRFactureStatuts() only accepts arguments of type RFactureStatuts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RFactureStatuts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinRFactureStatuts($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RFactureStatuts');

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
            $this->addJoinObject($join, 'RFactureStatuts');
        }

        return $this;
    }

    /**
     * Use the RFactureStatuts relation RFactureStatuts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RFactureStatutsQuery A secondary query class using the current class as primary query
     */
    public function useRFactureStatutsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRFactureStatuts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RFactureStatuts', 'RFactureStatutsQuery');
    }

    /**
     * Filter the query by a related PlanFacturationParams object
     *
     * @param   PlanFacturationParams|PropelObjectCollection $planFacturationParams The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlanFacturationParams($planFacturationParams, $comparison = null)
    {
        if ($planFacturationParams instanceof PlanFacturationParams) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::OP_ID, $planFacturationParams->getOpId(), $comparison);
        } elseif ($planFacturationParams instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::OP_ID, $planFacturationParams->toKeyValue('PrimaryKey', 'OpId'), $comparison);
        } else {
            throw new PropelException('filterByPlanFacturationParams() only accepts arguments of type PlanFacturationParams or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PlanFacturationParams relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinPlanFacturationParams($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PlanFacturationParams');

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
            $this->addJoinObject($join, 'PlanFacturationParams');
        }

        return $this;
    }

    /**
     * Use the PlanFacturationParams relation PlanFacturationParams object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlanFacturationParamsQuery A secondary query class using the current class as primary query
     */
    public function usePlanFacturationParamsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPlanFacturationParams($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PlanFacturationParams', 'PlanFacturationParamsQuery');
    }

    /**
     * Filter the query by a related RFactureOptionsEcheances object
     *
     * @param   RFactureOptionsEcheances|PropelObjectCollection $rFactureOptionsEcheances The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRFactureOptionsEcheances($rFactureOptionsEcheances, $comparison = null)
    {
        if ($rFactureOptionsEcheances instanceof RFactureOptionsEcheances) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::FACT_ECHEANCE_ID, $rFactureOptionsEcheances->getFactOptEcheanceId(), $comparison);
        } elseif ($rFactureOptionsEcheances instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::FACT_ECHEANCE_ID, $rFactureOptionsEcheances->toKeyValue('PrimaryKey', 'FactOptEcheanceId'), $comparison);
        } else {
            throw new PropelException('filterByRFactureOptionsEcheances() only accepts arguments of type RFactureOptionsEcheances or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RFactureOptionsEcheances relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinRFactureOptionsEcheances($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RFactureOptionsEcheances');

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
            $this->addJoinObject($join, 'RFactureOptionsEcheances');
        }

        return $this;
    }

    /**
     * Use the RFactureOptionsEcheances relation RFactureOptionsEcheances object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RFactureOptionsEcheancesQuery A secondary query class using the current class as primary query
     */
    public function useRFactureOptionsEcheancesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRFactureOptionsEcheances($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RFactureOptionsEcheances', 'RFactureOptionsEcheancesQuery');
    }

    /**
     * Filter the query by a related JournalDeVente object
     *
     * @param   JournalDeVente|PropelObjectCollection $journalDeVente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByJournalDeVente($journalDeVente, $comparison = null)
    {
        if ($journalDeVente instanceof JournalDeVente) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::JDV_ID, $journalDeVente->getJdvId(), $comparison);
        } elseif ($journalDeVente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::JDV_ID, $journalDeVente->toKeyValue('PrimaryKey', 'JdvId'), $comparison);
        } else {
            throw new PropelException('filterByJournalDeVente() only accepts arguments of type JournalDeVente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the JournalDeVente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinJournalDeVente($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('JournalDeVente');

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
            $this->addJoinObject($join, 'JournalDeVente');
        }

        return $this;
    }

    /**
     * Use the JournalDeVente relation JournalDeVente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   JournalDeVenteQuery A secondary query class using the current class as primary query
     */
    public function useJournalDeVenteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinJournalDeVente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'JournalDeVente', 'JournalDeVenteQuery');
    }

    /**
     * Filter the query by a related Contacts object
     *
     * @param   Contacts|PropelObjectCollection $contacts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContactFacturation($contacts, $comparison = null)
    {
        if ($contacts instanceof Contacts) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::CT_ID, $contacts->getCtId(), $comparison);
        } elseif ($contacts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::CT_ID, $contacts->toKeyValue('PrimaryKey', 'CtId'), $comparison);
        } else {
            throw new PropelException('filterByContactFacturation() only accepts arguments of type Contacts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ContactFacturation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinContactFacturation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ContactFacturation');

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
            $this->addJoinObject($join, 'ContactFacturation');
        }

        return $this;
    }

    /**
     * Use the ContactFacturation relation Contacts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContactsQuery A secondary query class using the current class as primary query
     */
    public function useContactFacturationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinContactFacturation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ContactFacturation', 'ContactsQuery');
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactReeditionUser($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_USER_ID, $users->getUserId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_USER_ID, $users->toKeyValue('PrimaryKey', 'UserId'), $comparison);
        } else {
            throw new PropelException('filterByFactReeditionUser() only accepts arguments of type Users or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FactReeditionUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinFactReeditionUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FactReeditionUser');

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
            $this->addJoinObject($join, 'FactReeditionUser');
        }

        return $this;
    }

    /**
     * Use the FactReeditionUser relation Users object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsersQuery A secondary query class using the current class as primary query
     */
    public function useFactReeditionUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactReeditionUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactReeditionUser', 'UsersQuery');
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactureEditionHistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByReeditedFacture($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::FACT_ID, $factures->getFactId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactureEditionHistoryPeer::FACT_ID, $factures->toKeyValue('PrimaryKey', 'FactId'), $comparison);
        } else {
            throw new PropelException('filterByReeditedFacture() only accepts arguments of type Factures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ReeditedFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function joinReeditedFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ReeditedFacture');

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
            $this->addJoinObject($join, 'ReeditedFacture');
        }

        return $this;
    }

    /**
     * Use the ReeditedFacture relation Factures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturesQuery A secondary query class using the current class as primary query
     */
    public function useReeditedFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinReeditedFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ReeditedFacture', 'FacturesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   FactureEditionHistory $factureEditionHistory Object to remove from the list of results
     *
     * @return FactureEditionHistoryQuery The current query, for fluid interface
     */
    public function prune($factureEditionHistory = null)
    {
        if ($factureEditionHistory) {
            $this->addUsingAlias(FactureEditionHistoryPeer::FACT_EH_ID, $factureEditionHistory->getFactEhId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
