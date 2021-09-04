<?php



/**
 * This class defines the structure of the 'factures' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.phoenix.map
 */
class FacturesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.FacturesTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('factures');
        $this->setPhpName('Factures');
        $this->setClassname('Factures');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('fact_id', 'FactId', 'INTEGER', true, 4, null);
        $this->addForeignKey('r_fact_type_id', 'RFactTypeId', 'TINYINT', 'r_facture_types', 'r_fact_type_id', true, 1, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', true, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'plan_facturation_params', 'op_id', true, 4, null);
        $this->addForeignKey('cl_id', 'ClId', 'INTEGER', 'clients', 'cl_id', false, 4, null);
        $this->addForeignKey('cl_id', 'ClId', 'INTEGER', 'client_facture_options', 'cl_id', false, 4, null);
        $this->addForeignKey('ct_id', 'CtId', 'INTEGER', 'contacts', 'ct_id', false, 4, null);
        $this->addColumn('dc_id', 'DcId', 'INTEGER', false, 4, null);
        $this->addColumn('fact_numero', 'FactNumero', 'INTEGER', false, 4, null);
        $this->addColumn('fact_reference', 'FactReference', 'VARCHAR', false, 30, null);
        $this->addColumn('fact_lang', 'FactLang', 'VARCHAR', false, 6, null);
        $this->addColumn('fact_num_cmd', 'FactNumCmd', 'VARCHAR', false, 100, null);
        $this->addColumn('fact_montant_ht', 'FactMontantHt', 'NUMERIC', false, 20, null);
        $this->addColumn('fact_montant_ttc', 'FactMontantTtc', 'NUMERIC', false, 20, null);
        $this->addColumn('fact_montant_encaisse', 'FactMontantEncaisse', 'NUMERIC', false, 20, null);
        $this->addColumn('fact_destinataire', 'FactDestinataire', 'VARCHAR', false, 510, null);
        $this->addColumn('fact_attention', 'FactAttention', 'VARCHAR', false, 120, null);
        $this->addColumn('fact_adresse1', 'FactAdresse1', 'VARCHAR', false, 510, null);
        $this->addColumn('fact_adresse2', 'FactAdresse2', 'VARCHAR', false, 510, null);
        $this->addColumn('fact_adresse3', 'FactAdresse3', 'VARCHAR', false, 510, null);
        $this->addColumn('fact_code_postal', 'FactCodePostal', 'VARCHAR', false, 100, null);
        $this->addColumn('fact_ville', 'FactVille', 'VARCHAR', false, 510, null);
        $this->addColumn('fact_pays', 'FactPays', 'VARCHAR', false, 510, null);
        $this->addColumn('fact_mention_spec', 'FactMentionSpec', 'VARCHAR', false, 8000, null);
        $this->addColumn('fact_user_edition', 'FactUserEdition', 'INTEGER', false, 4, null);
        $this->addForeignKey('fact_status_id', 'FactStatusId', 'TINYINT', 'r_facture_statuts', 'r_fact_stat_id', false, 1, null);
        $this->addColumn('fact_verrou', 'FactVerrou', 'BOOLEAN', false, 1, false);
        $this->addColumn('fact_has_relance', 'FactHasRelance', 'BOOLEAN', false, 1, false);
        $this->addColumn('fact_annul_id', 'FactAnnulId', 'INTEGER', false, 4, null);
        $this->addColumn('fact_date_echeance', 'FactDateEcheance', 'TIMESTAMP', false, 16, null);
        $this->addColumn('fact_taux_adf', 'FactTauxAdf', 'NUMERIC', false, 20, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        $this->addForeignKey('fact_echeance_id', 'FactEcheanceId', 'TINYINT', 'r_facture_options_echeances', 'fact_opt_echeance_id', false, 1, null);
        $this->addForeignKey('jdv_id', 'JdvId', 'INTEGER', 'journal_de_vente', 'jdv_id', false, 4, null);
        $this->addColumn('fact_date', 'FactDate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('fact_email', 'FactEmail', 'VARCHAR', false, 255, null);
        // validators
        $this->addValidator('r_fact_type_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_fact_type_id doit être renseigné.');
        $this->addValidator('r_fact_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_fact_type_id doit être un int.');
        $this->addValidator('op_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_id doit être renseigné.');
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('cl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_id doit être un int.');
        $this->addValidator('ct_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ct_id doit être un int.');
        $this->addValidator('dc_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ dc_id doit être un int.');
        $this->addValidator('fact_numero', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_numero doit être un string.');
        $this->addValidator('fact_reference', 'maxLength', 'propel.validator.MaxLengthValidator', '30', 'Le champ fact_reference ne doit pas dépasser 40 caractères.');
        $this->addValidator('fact_reference', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_reference doit être un string.');
        $this->addValidator('fact_lang', 'maxLength', 'propel.validator.MaxLengthValidator', '6', 'Le champ fact_lang ne doit pas dépasser 6 caractères.');
        $this->addValidator('fact_lang', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_lang doit être un string.');
        $this->addValidator('fact_num_cmd', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ fact_num_cmd ne doit pas dépasser 100 caractères.');
        $this->addValidator('fact_num_cmd', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_num_cmd doit être un string.');
        $this->addValidator('fact_montant_ht', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_montant_ht doit être un float.');
        $this->addValidator('fact_montant_ttc', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_montant_ttc doit être un float.');
        $this->addValidator('fact_montant_encaisse', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_montant_encaisse doit être un float.');
        $this->addValidator('fact_destinataire', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ fact_destinataire ne doit pas dépasser 510 caractères.');
        $this->addValidator('fact_destinataire', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_destinataire doit être un string.');
        $this->addValidator('fact_attention', 'maxLength', 'propel.validator.MaxLengthValidator', '120', 'Le champ fact_attention ne doit pas dépasser 120 caractères.');
        $this->addValidator('fact_attention', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_attention doit être un string.');
        $this->addValidator('fact_adresse1', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ fact_adresse1 ne doit pas dépasser 510 caractères.');
        $this->addValidator('fact_adresse1', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_adresse1 doit être un string.');
        $this->addValidator('fact_adresse2', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ fact_adresse2 ne doit pas dépasser 510 caractères.');
        $this->addValidator('fact_adresse2', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_adresse2 doit être un string.');
        $this->addValidator('fact_adresse3', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ fact_adresse3 ne doit pas dépasser 510 caractères.');
        $this->addValidator('fact_adresse3', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_adresse3 doit être un string.');
        $this->addValidator('fact_code_postal', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ fact_code_postal ne doit pas dépasser 100 caractères.');
        $this->addValidator('fact_code_postal', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_code_postal doit être un string.');
        $this->addValidator('fact_ville', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ fact_ville ne doit pas dépasser 510 caractères.');
        $this->addValidator('fact_ville', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_ville doit être un string.');
        $this->addValidator('fact_pays', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ fact_pays ne doit pas dépasser 510 caractères.');
        $this->addValidator('fact_pays', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_pays doit être un string.');
        $this->addValidator('fact_mention_spec', 'maxLength', 'propel.validator.MaxLengthValidator', '8000', 'Le champ fact_mention_spec ne doit pas dépasser 8000 caractères.');
        $this->addValidator('fact_mention_spec', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_mention_spec doit être un string.');
        $this->addValidator('fact_user_edition', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_user_edition doit être un int.');
        $this->addValidator('fact_status_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_status_id doit être un int.');
        $this->addValidator('fact_verrou', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ fact_verrou doit être un boolean.');
        $this->addValidator('fact_annul_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_annul_id doit être un int.');
        $this->addValidator('fact_date_echeance', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_date_echeance doit être un string.');
        $this->addValidator('fact_taux_adf', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ fact_taux_adf doit être un float.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
        $this->addValidator('fact_echeance_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_echeance_id doit être un int.');
        $this->addValidator('jdv_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ jdv_id doit être un int.');
        $this->addValidator('fact_date', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ fact_date doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('RFactureTypes', 'RFactureTypes', RelationMap::MANY_TO_ONE, array('r_fact_type_id' => 'r_fact_type_id', ), null, null);
        $this->addRelation('Clients', 'Clients', RelationMap::MANY_TO_ONE, array('cl_id' => 'cl_id', ), null, null);
        $this->addRelation('ClientFactureOptions', 'ClientFactureOptions', RelationMap::MANY_TO_ONE, array('cl_id' => 'cl_id', ), null, null);
        $this->addRelation('RFactureStatuts', 'RFactureStatuts', RelationMap::MANY_TO_ONE, array('fact_status_id' => 'r_fact_stat_id', ), null, null);
        $this->addRelation('PlanFacturationParams', 'PlanFacturationParams', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('RFactureOptionsEcheances', 'RFactureOptionsEcheances', RelationMap::MANY_TO_ONE, array('fact_echeance_id' => 'fact_opt_echeance_id', ), null, null);
        $this->addRelation('JournalDeVente', 'JournalDeVente', RelationMap::MANY_TO_ONE, array('jdv_id' => 'jdv_id', ), null, null);
        $this->addRelation('ContactFacturation', 'Contacts', RelationMap::MANY_TO_ONE, array('ct_id' => 'ct_id', ), null, null);
        $this->addRelation('FactureStatuts', 'FactureStatuts', RelationMap::ONE_TO_MANY, array('fact_id' => 'fact_id', ), null, null, 'FactureStatutss');
        $this->addRelation('FacturesRubriques', 'FacturesRubriques', RelationMap::ONE_TO_MANY, array('fact_id' => 'fact_id', ), null, null, 'FacturesRubriquess');
        $this->addRelation('LnkRelanceFacture', 'LnkRelanceFacture', RelationMap::ONE_TO_MANY, array('fact_id' => 'fact_id', ), null, null, 'LnkRelanceFactures');
        $this->addRelation('PlanFacturationDetailsRelatedByPfdFactAnnul', 'PlanFacturationDetails', RelationMap::ONE_TO_MANY, array('fact_id' => 'pfd_fact_annul', ), null, null, 'PlanFacturationDetailssRelatedByPfdFactAnnul');
        $this->addRelation('PlanFacturationDetailsRelatedByPfdFactId', 'PlanFacturationDetails', RelationMap::ONE_TO_MANY, array('fact_id' => 'pfd_fact_id', ), null, null, 'PlanFacturationDetailssRelatedByPfdFactId');
        $this->addRelation('LnkFactureMotifs', 'LnkFactureMotifs', RelationMap::ONE_TO_MANY, array('fact_id' => 'fact_id', ), null, null, 'LnkFactureMotifss');
        $this->addRelation('FactureEditionHistory', 'FactureEditionHistory', RelationMap::ONE_TO_MANY, array('fact_id' => 'fact_id', ), null, null, 'FactureEditionHistorys');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // FacturesTableMap
