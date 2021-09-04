<?php



/**
 * This class defines the structure of the 'operations' table.
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
class OperationsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationsTableMap';

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
        $this->setName('operations');
        $this->setPhpName('Operations');
        $this->setClassname('Operations');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addForeignPrimaryKey('op_id', 'OpId', 'INTEGER' , 'gedelog_operation_params', 'op_id', true, 4, null);
        $this->addForeignPrimaryKey('op_id', 'OpId', 'INTEGER' , 'operations_ext', 'op_id', true, 4, null);
        $this->addColumn('op_number', 'OpNumber', 'VARCHAR', true, 255, null);
        $this->addForeignKey('op_cl_id', 'OpClId', 'INTEGER', 'clients', 'cl_id', true, 4, null);
        $this->addForeignKey('op_cl_id', 'OpClId', 'INTEGER', 'client_facture_options', 'cl_id', true, 4, null);
        $this->addForeignKey('op_cl_id', 'OpClId', 'INTEGER', 'client_contrat_options', 'cl_id', true, 4, null);
        $this->addForeignKey('op_ct_id', 'OpCtId', 'INTEGER', 'contacts', 'ct_id', false, 4, null);
        $this->addForeignKey('op_ct_fact_id', 'OpCtFactId', 'INTEGER', 'contacts', 'ct_id', false, 4, null);
        $this->addColumn('op_libelle', 'OpLibelle', 'VARCHAR', true, 510, null);
        $this->addForeignKey('op_type_id', 'OpTypeId', 'TINYINT', 'r_operation_type', 'ot_id', false, 1, null);
        $this->addForeignKey('op_subtype_id', 'OpSubtypeId', 'TINYINT', 'r_operation_type_sub', 'ost_id', false, 1, null);
        $this->addForeignKey('op_act_id', 'OpActId', 'TINYINT', 'r_custom_activites', 'act_id', false, 1, null);
        $this->addForeignKey('operation_universe_id', 'OperationUniverseId', 'INTEGER', 'r_operation_universes', 'r_operation_universe_id', true, 4, null);
        $this->addForeignKey('operation_media_id', 'OperationMediaId', 'INTEGER', 'r_operation_medias', 'r_operation_media_id', true, 4, null);
        $this->addForeignKey('operation_ost_tpl_id', 'OperationOstTplId', 'INTEGER', 'r_operation_type_sub_tpl', 'ost_tpl_id', false, 4, null);
        $this->addColumn('op_project_type_id', 'OpProjectTypeId', 'TINYINT', false, 1, null);
        $this->addForeignKey('op_dc_id', 'OpDcId', 'INTEGER', 'users', 'user_id', false, 4, null);
        $this->addForeignKey('op_cp_id', 'OpCpId', 'INTEGER', 'users', 'user_id', false, 4, null);
        $this->addForeignKey('op_cdp_id', 'OpCdpId', 'INTEGER', 'users', 'user_id', false, 4, null);
        $this->addColumn('op_description', 'OpDescription', 'VARCHAR', false, 8000, null);
        $this->addColumn('op_commentaire', 'OpCommentaire', 'VARCHAR', false, 8000, null);
        $this->addColumn('op_modalite', 'OpModalite', 'VARCHAR', false, 8000, null);
        $this->addColumn('op_stamp_start', 'OpStampStart', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_stamp_end', 'OpStampEnd', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_stamp_close', 'OpStampClose', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_dateConso_start', 'OpDateconsoStart', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_dateConso_end', 'OpDateconsoEnd', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_datePoste_end', 'OpDateposteEnd', 'TIMESTAMP', false, 16, null);
        $this->addForeignKey('op_status_id', 'OpStatusId', 'TINYINT', 'r_operation_status', 'os_id', false, 1, null);
        $this->addColumn('op_use_presta_negoce', 'OpUsePrestaNegoce', 'BOOLEAN', true, 1, false);
        $this->addColumn('op_taux_conversion', 'OpTauxConversion', 'SMALLINT', true, 2, null);
        $this->addColumn('op_delai_trait_courrier_id', 'OpDelaiTraitCourrierId', 'TINYINT', false, 1, null);
        $this->addForeignKey('op_delai_devis_id', 'OpDelaiDevisId', 'TINYINT', 'r_delai_devis', 'r_delai_devis_id', false, 1, null);
        $this->addColumn('op_mails_dest', 'OpMailsDest', 'VARCHAR', false, 8000, null);
        $this->addColumn('op_date_relance_couts', 'OpDateRelanceCouts', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('actif', 'Actif', 'TINYINT', false, 1, null);
        $this->addColumn('op_cgv_id', 'OpCgvId', 'TINYINT', false, 1, null);
        $this->addColumn('op_freq_stat_mail_id', 'OpFreqStatMailId', 'TINYINT', false, 1, null);
        $this->addColumn('op_date_last_send_stat', 'OpDateLastSendStat', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_attach_file_stats_excel', 'OpAttachFileStatsExcel', 'BOOLEAN', false, 1, false);
        $this->addColumn('op_devis_lang', 'OpDevisLang', 'VARCHAR', false, 6, null);
        $this->addColumn('op_brief_log', 'OpBriefLog', 'VARCHAR', false, 8000, null);
        $this->addColumn('op_has_mail_archiv_sent', 'OpHasMailArchivSent', 'BOOLEAN', true, 1, false);
        $this->addForeignKey('cl_site_id_for_log', 'ClSiteIdForLog', 'INTEGER', 'client_sites', 'cl_site_id', false, 4, null);
        $this->addColumn('op_date_last_compil_data', 'OpDateLastCompilData', 'TIMESTAMP', false, 16, null);
        $this->addForeignKey('op_ct_fact_addr_id', 'OpCtFactAddrId', 'INTEGER', 'contacts', 'ct_id', false, 4, null);
        $this->addForeignKey('op_parent_id', 'OpParentId', 'INTEGER', 'operations', 'op_id', false, 4, null);
        $this->addColumn('op_date_archivage_end', 'OpDateArchivageEnd', 'TIMESTAMP', false, 16, null);
        $this->addForeignKey('op_classification_id', 'OpClassificationId', 'TINYINT', 'r_operation_classifications', 'r_operation_classification_id', false, 1, null);
        // validators
        $this->addValidator('op_number', 'required', 'propel.validator.RequiredValidator', '', 'Le numéro d\'opération doit être renseigné.');
        $this->addValidator('op_number', 'type', 'propel.validator.TypeValidator', 'string', 'Le numéro d\'opération doit être une chaîne de caractères.');
        $this->addValidator('op_number', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'Le numéro d\'opération est limité à 255 caractères.');
        $this->addValidator('op_cl_id', 'required', 'propel.validator.RequiredValidator', '', 'Un client doit être rattaché à l\'opération.');
        $this->addValidator('op_cl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_cl_id doit être un int.');
        $this->addValidator('op_ct_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_ct_id doit être un int.');
        $this->addValidator('op_libelle', 'required', 'propel.validator.RequiredValidator', '', 'L\'intitulé de l\'opération doit être renseigné.');
        $this->addValidator('op_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '67', 'Vous êtes limité à 67 caractères pour rédiger l\'intitulé de votre opération');
        $this->addValidator('op_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_libelle doit être un string.');
        $this->addValidator('op_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_type_id doit être un int.');
        $this->addValidator('op_subtype_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_subtype_id doit être un int.');
        $this->addValidator('op_act_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_act_id doit être un int.');
        $this->addValidator('operation_universe_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ operation_universe_id doit être un int.');
        $this->addValidator('operation_universe_id', 'required', 'propel.validator.RequiredValidator', '', 'L\'univers de l\'opération doit être renseigné.');
        $this->addValidator('operation_media_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ operation_media_id doit être un int.');
        $this->addValidator('operation_media_id', 'required', 'propel.validator.RequiredValidator', '', 'Le média de participation de l\'opération doit être renseigné.');
        $this->addValidator('operation_ost_tpl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ operation_ost_tpl_id doit être un int.');
        $this->addValidator('op_dc_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_dc_id doit être un int.');
        $this->addValidator('op_cp_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_cp_id doit être un int.');
        $this->addValidator('op_cdp_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_cdp_id doit être un int.');
        $this->addValidator('op_description', 'maxLength', 'propel.validator.MaxLengthValidator', '8000', 'Le champ op_description ne doit pas dépasser 8000 caractères.');
        $this->addValidator('op_description', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_description doit être un string.');
        $this->addValidator('op_commentaire', 'maxLength', 'propel.validator.MaxLengthValidator', '8000', 'Le champ op_commentaire ne doit pas dépasser 8000 caractères.');
        $this->addValidator('op_commentaire', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_commentaire doit être un string.');
        $this->addValidator('op_modalite', 'maxLength', 'propel.validator.MaxLengthValidator', '8000', 'Le champ op_modalite ne doit pas dépasser 8000 caractères.');
        $this->addValidator('op_modalite', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_modalite doit être un string.');
        $this->addValidator('op_stamp_start', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_stamp_start doit être un string.');
        $this->addValidator('op_stamp_end', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_stamp_end doit être un string.');
        $this->addValidator('op_stamp_close', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_stamp_close doit être un string.');
        $this->addValidator('op_dateConso_start', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_dateConso_start doit être un string.');
        $this->addValidator('op_dateConso_end', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_dateConso_end doit être un string.');
        $this->addValidator('op_datePoste_end', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_datePoste_end doit être un string.');
        $this->addValidator('op_date_archivage_end', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_date_archivage_end doit être un string.');
        $this->addValidator('op_status_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_status_id doit être un int.');
        $this->addValidator('op_taux_conversion', 'required', 'propel.validator.RequiredValidator', '', 'Le taux de conversion doit être renseigné.');
        $this->addValidator('op_taux_conversion', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_taux_conversion doit être un int.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ actif doit être un int.');
        $this->addValidator('op_cgv_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_cgv_id doit être un int.');
        $this->addValidator('op_freq_stat_mail_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_freq_stat_mail_id doit être un int.');
        $this->addValidator('op_date_last_send_stat', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_date_last_send_stat doit être un string.');
        $this->addValidator('op_attach_file_stats_excel', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ op_attach_file_stats_excel doit être un boolean.');
        $this->addValidator('op_devis_lang', 'maxLength', 'propel.validator.MaxLengthValidator', '6', 'Le champ op_devis_lang ne doit pas dépasser 6 caractères.');
        $this->addValidator('op_devis_lang', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_devis_lang doit être un string.');
        $this->addValidator('op_brief_log', 'maxLength', 'propel.validator.MaxLengthValidator', '8000', 'Le champ op_brief_log ne doit pas dépasser 8000 caractères.');
        $this->addValidator('op_brief_log', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_brief_log doit être un string.');
        $this->addValidator('op_has_mail_archiv_sent', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_has_mail_archiv_sent doit être renseigné.');
        $this->addValidator('op_has_mail_archiv_sent', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ op_has_mail_archiv_sent doit être un boolean.');
        $this->addValidator('cl_site_id_for_log', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_site_id_for_log doit être un int.');
        $this->addValidator('op_date_last_compil_data', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_date_last_compil_data doit être un string.');
        $this->addValidator('op_ct_fact_addr_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_ct_fact_addr_id doit être un int.');
        $this->addValidator('op_parent_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_parent_id doit être un int.');
        $this->addValidator('op_classification_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_classification_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clients', 'Clients', RelationMap::MANY_TO_ONE, array('op_cl_id' => 'cl_id', ), null, null);
        $this->addRelation('ContactClient', 'Contacts', RelationMap::MANY_TO_ONE, array('op_ct_id' => 'ct_id', ), null, null);
        $this->addRelation('ContactFacturation', 'Contacts', RelationMap::MANY_TO_ONE, array('op_ct_fact_id' => 'ct_id', ), null, null);
        $this->addRelation('UserDC', 'Users', RelationMap::MANY_TO_ONE, array('op_dc_id' => 'user_id', ), null, null);
        $this->addRelation('UserCP', 'Users', RelationMap::MANY_TO_ONE, array('op_cp_id' => 'user_id', ), null, null);
        $this->addRelation('UserCdp', 'Users', RelationMap::MANY_TO_ONE, array('op_cdp_id' => 'user_id', ), null, null);
        $this->addRelation('ClientFactureOptions', 'ClientFactureOptions', RelationMap::MANY_TO_ONE, array('op_cl_id' => 'cl_id', ), null, null);
        $this->addRelation('ClientContratOptions', 'ClientContratOptions', RelationMap::MANY_TO_ONE, array('op_cl_id' => 'cl_id', ), null, null);
        $this->addRelation('ClientSiteForLog', 'ClientSites', RelationMap::MANY_TO_ONE, array('cl_site_id_for_log' => 'cl_site_id', ), null, null);
        $this->addRelation('GedelogOperationParams', 'GedelogOperationParams', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('ROperationStatus', 'ROperationStatus', RelationMap::MANY_TO_ONE, array('op_status_id' => 'os_id', ), null, null);
        $this->addRelation('RCustomActivites', 'RCustomActivites', RelationMap::MANY_TO_ONE, array('op_act_id' => 'act_id', ), null, null);
        $this->addRelation('ROperationType', 'ROperationType', RelationMap::MANY_TO_ONE, array('op_type_id' => 'ot_id', ), null, null);
        $this->addRelation('ROperationTypeSub', 'ROperationTypeSub', RelationMap::MANY_TO_ONE, array('op_subtype_id' => 'ost_id', ), null, null);
        $this->addRelation('OperationsExt', 'OperationsExt', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('RDelaiDevis', 'RDelaiDevis', RelationMap::MANY_TO_ONE, array('op_delai_devis_id' => 'r_delai_devis_id', ), null, null);
        $this->addRelation('InvoicingAddressContact', 'Contacts', RelationMap::MANY_TO_ONE, array('op_ct_fact_addr_id' => 'ct_id', ), null, null);
        $this->addRelation('OperationsRelatedByOpParentId', 'Operations', RelationMap::MANY_TO_ONE, array('op_parent_id' => 'op_id', ), null, null);
        $this->addRelation('OperationUniverse', 'ROperationUniverses', RelationMap::MANY_TO_ONE, array('operation_universe_id' => 'r_operation_universe_id', ), null, null);
        $this->addRelation('OperationMedia', 'ROperationMedias', RelationMap::MANY_TO_ONE, array('operation_media_id' => 'r_operation_media_id', ), null, null);
        $this->addRelation('OperationTemplate', 'ROperationTypeSubTpl', RelationMap::MANY_TO_ONE, array('operation_ost_tpl_id' => 'ost_tpl_id', ), null, null);
        $this->addRelation('ROperationClassifications', 'ROperationClassifications', RelationMap::MANY_TO_ONE, array('op_classification_id' => 'r_operation_classification_id', ), null, null);
        $this->addRelation('Factures', 'Factures', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'Facturess');
        $this->addRelation('LnkOperationOption', 'LnkOperationOption', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'LnkOperationOptions');
        $this->addRelation('LnkOperationsContactsMail', 'LnkOperationsContactsMail', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'LnkOperationsContactsMails');
        $this->addRelation('LnkOperationCountry', 'LnkOperationCountry', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'LnkOperationCountrys');
        $this->addRelation('OperationDecouverts', 'OperationDecouverts', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'OperationDecouvertss');
        $this->addRelation('OperationPrestations', 'OperationPrestations', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'OperationPrestationss');
        $this->addRelation('OperationPrimes', 'OperationPrimes', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'OperationPrimess');
        $this->addRelation('OperationRubriques', 'OperationRubriques', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'OperationRubriquess');
        $this->addRelation('OperationScenarii', 'OperationScenarii', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'OperationScenariis');
        $this->addRelation('OperationStatuts', 'OperationStatuts', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'OperationStatutss');
        $this->addRelation('OperationTasks', 'OperationTasks', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'OperationTaskss');
        $this->addRelation('OperationsRelatedByOpId', 'Operations', RelationMap::ONE_TO_MANY, array('op_id' => 'op_parent_id', ), null, null, 'OperationssRelatedByOpId');
        $this->addRelation('PlanFacturationDetails', 'PlanFacturationDetails', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'PlanFacturationDetailss');
        $this->addRelation('PlanFacturationParams', 'PlanFacturationParams', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'PlanFacturationParamss');
        $this->addRelation('FactureEditionHistory', 'FactureEditionHistory', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'FactureEditionHistorys');
        $this->addRelation('RRubriquesType', 'RRubriquesType', RelationMap::MANY_TO_MANY, array(), null, null, 'RRubriquesTypes');
        $this->addRelation('RTvaType', 'RTvaType', RelationMap::MANY_TO_MANY, array(), null, null, 'RTvaTypes');
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
            'validateisunique' =>  array (
  'columns' => 'op_number',
  'message' => 'Ce numéro d\'opération est déjà utilisé.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // OperationsTableMap
