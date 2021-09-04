<?php


/**
 * Base class that represents a query for the 'operations' table.
 *
 *
 *
 * @method OperationsQuery orderByOpId($order = Criteria::ASC) Order by the op_id column
 * @method OperationsQuery orderByOpNumber($order = Criteria::ASC) Order by the op_number column
 * @method OperationsQuery orderByOpClId($order = Criteria::ASC) Order by the op_cl_id column
 * @method OperationsQuery orderByOpCtId($order = Criteria::ASC) Order by the op_ct_id column
 * @method OperationsQuery orderByOpCtFactId($order = Criteria::ASC) Order by the op_ct_fact_id column
 * @method OperationsQuery orderByOpLibelle($order = Criteria::ASC) Order by the op_libelle column
 * @method OperationsQuery orderByOpTypeId($order = Criteria::ASC) Order by the op_type_id column
 * @method OperationsQuery orderByOpSubtypeId($order = Criteria::ASC) Order by the op_subtype_id column
 * @method OperationsQuery orderByOpActId($order = Criteria::ASC) Order by the op_act_id column
 * @method OperationsQuery orderByOperationUniverseId($order = Criteria::ASC) Order by the operation_universe_id column
 * @method OperationsQuery orderByOperationMediaId($order = Criteria::ASC) Order by the operation_media_id column
 * @method OperationsQuery orderByOperationOstTplId($order = Criteria::ASC) Order by the operation_ost_tpl_id column
 * @method OperationsQuery orderByOpProjectTypeId($order = Criteria::ASC) Order by the op_project_type_id column
 * @method OperationsQuery orderByOpDcId($order = Criteria::ASC) Order by the op_dc_id column
 * @method OperationsQuery orderByOpCpId($order = Criteria::ASC) Order by the op_cp_id column
 * @method OperationsQuery orderByOpCdpId($order = Criteria::ASC) Order by the op_cdp_id column
 * @method OperationsQuery orderByOpDescription($order = Criteria::ASC) Order by the op_description column
 * @method OperationsQuery orderByOpCommentaire($order = Criteria::ASC) Order by the op_commentaire column
 * @method OperationsQuery orderByOpModalite($order = Criteria::ASC) Order by the op_modalite column
 * @method OperationsQuery orderByOpStampStart($order = Criteria::ASC) Order by the op_stamp_start column
 * @method OperationsQuery orderByOpStampEnd($order = Criteria::ASC) Order by the op_stamp_end column
 * @method OperationsQuery orderByOpStampClose($order = Criteria::ASC) Order by the op_stamp_close column
 * @method OperationsQuery orderByOpDateconsoStart($order = Criteria::ASC) Order by the op_dateConso_start column
 * @method OperationsQuery orderByOpDateconsoEnd($order = Criteria::ASC) Order by the op_dateConso_end column
 * @method OperationsQuery orderByOpDateposteEnd($order = Criteria::ASC) Order by the op_datePoste_end column
 * @method OperationsQuery orderByOpStatusId($order = Criteria::ASC) Order by the op_status_id column
 * @method OperationsQuery orderByOpUsePrestaNegoce($order = Criteria::ASC) Order by the op_use_presta_negoce column
 * @method OperationsQuery orderByOpTauxConversion($order = Criteria::ASC) Order by the op_taux_conversion column
 * @method OperationsQuery orderByOpDelaiTraitCourrierId($order = Criteria::ASC) Order by the op_delai_trait_courrier_id column
 * @method OperationsQuery orderByOpDelaiDevisId($order = Criteria::ASC) Order by the op_delai_devis_id column
 * @method OperationsQuery orderByOpMailsDest($order = Criteria::ASC) Order by the op_mails_dest column
 * @method OperationsQuery orderByOpDateRelanceCouts($order = Criteria::ASC) Order by the op_date_relance_couts column
 * @method OperationsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method OperationsQuery orderByUserModify($order = Criteria::ASC) Order by the user_modify column
 * @method OperationsQuery orderByDateCreate($order = Criteria::ASC) Order by the date_create column
 * @method OperationsQuery orderByDateModify($order = Criteria::ASC) Order by the date_modify column
 * @method OperationsQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method OperationsQuery orderByOpCgvId($order = Criteria::ASC) Order by the op_cgv_id column
 * @method OperationsQuery orderByOpFreqStatMailId($order = Criteria::ASC) Order by the op_freq_stat_mail_id column
 * @method OperationsQuery orderByOpDateLastSendStat($order = Criteria::ASC) Order by the op_date_last_send_stat column
 * @method OperationsQuery orderByOpAttachFileStatsExcel($order = Criteria::ASC) Order by the op_attach_file_stats_excel column
 * @method OperationsQuery orderByOpDevisLang($order = Criteria::ASC) Order by the op_devis_lang column
 * @method OperationsQuery orderByOpBriefLog($order = Criteria::ASC) Order by the op_brief_log column
 * @method OperationsQuery orderByOpHasMailArchivSent($order = Criteria::ASC) Order by the op_has_mail_archiv_sent column
 * @method OperationsQuery orderByClSiteIdForLog($order = Criteria::ASC) Order by the cl_site_id_for_log column
 * @method OperationsQuery orderByOpDateLastCompilData($order = Criteria::ASC) Order by the op_date_last_compil_data column
 * @method OperationsQuery orderByOpCtFactAddrId($order = Criteria::ASC) Order by the op_ct_fact_addr_id column
 * @method OperationsQuery orderByOpParentId($order = Criteria::ASC) Order by the op_parent_id column
 * @method OperationsQuery orderByOpDateArchivageEnd($order = Criteria::ASC) Order by the op_date_archivage_end column
 * @method OperationsQuery orderByOpClassificationId($order = Criteria::ASC) Order by the op_classification_id column
 *
 * @method OperationsQuery groupByOpId() Group by the op_id column
 * @method OperationsQuery groupByOpNumber() Group by the op_number column
 * @method OperationsQuery groupByOpClId() Group by the op_cl_id column
 * @method OperationsQuery groupByOpCtId() Group by the op_ct_id column
 * @method OperationsQuery groupByOpCtFactId() Group by the op_ct_fact_id column
 * @method OperationsQuery groupByOpLibelle() Group by the op_libelle column
 * @method OperationsQuery groupByOpTypeId() Group by the op_type_id column
 * @method OperationsQuery groupByOpSubtypeId() Group by the op_subtype_id column
 * @method OperationsQuery groupByOpActId() Group by the op_act_id column
 * @method OperationsQuery groupByOperationUniverseId() Group by the operation_universe_id column
 * @method OperationsQuery groupByOperationMediaId() Group by the operation_media_id column
 * @method OperationsQuery groupByOperationOstTplId() Group by the operation_ost_tpl_id column
 * @method OperationsQuery groupByOpProjectTypeId() Group by the op_project_type_id column
 * @method OperationsQuery groupByOpDcId() Group by the op_dc_id column
 * @method OperationsQuery groupByOpCpId() Group by the op_cp_id column
 * @method OperationsQuery groupByOpCdpId() Group by the op_cdp_id column
 * @method OperationsQuery groupByOpDescription() Group by the op_description column
 * @method OperationsQuery groupByOpCommentaire() Group by the op_commentaire column
 * @method OperationsQuery groupByOpModalite() Group by the op_modalite column
 * @method OperationsQuery groupByOpStampStart() Group by the op_stamp_start column
 * @method OperationsQuery groupByOpStampEnd() Group by the op_stamp_end column
 * @method OperationsQuery groupByOpStampClose() Group by the op_stamp_close column
 * @method OperationsQuery groupByOpDateconsoStart() Group by the op_dateConso_start column
 * @method OperationsQuery groupByOpDateconsoEnd() Group by the op_dateConso_end column
 * @method OperationsQuery groupByOpDateposteEnd() Group by the op_datePoste_end column
 * @method OperationsQuery groupByOpStatusId() Group by the op_status_id column
 * @method OperationsQuery groupByOpUsePrestaNegoce() Group by the op_use_presta_negoce column
 * @method OperationsQuery groupByOpTauxConversion() Group by the op_taux_conversion column
 * @method OperationsQuery groupByOpDelaiTraitCourrierId() Group by the op_delai_trait_courrier_id column
 * @method OperationsQuery groupByOpDelaiDevisId() Group by the op_delai_devis_id column
 * @method OperationsQuery groupByOpMailsDest() Group by the op_mails_dest column
 * @method OperationsQuery groupByOpDateRelanceCouts() Group by the op_date_relance_couts column
 * @method OperationsQuery groupByUserId() Group by the user_id column
 * @method OperationsQuery groupByUserModify() Group by the user_modify column
 * @method OperationsQuery groupByDateCreate() Group by the date_create column
 * @method OperationsQuery groupByDateModify() Group by the date_modify column
 * @method OperationsQuery groupByActif() Group by the actif column
 * @method OperationsQuery groupByOpCgvId() Group by the op_cgv_id column
 * @method OperationsQuery groupByOpFreqStatMailId() Group by the op_freq_stat_mail_id column
 * @method OperationsQuery groupByOpDateLastSendStat() Group by the op_date_last_send_stat column
 * @method OperationsQuery groupByOpAttachFileStatsExcel() Group by the op_attach_file_stats_excel column
 * @method OperationsQuery groupByOpDevisLang() Group by the op_devis_lang column
 * @method OperationsQuery groupByOpBriefLog() Group by the op_brief_log column
 * @method OperationsQuery groupByOpHasMailArchivSent() Group by the op_has_mail_archiv_sent column
 * @method OperationsQuery groupByClSiteIdForLog() Group by the cl_site_id_for_log column
 * @method OperationsQuery groupByOpDateLastCompilData() Group by the op_date_last_compil_data column
 * @method OperationsQuery groupByOpCtFactAddrId() Group by the op_ct_fact_addr_id column
 * @method OperationsQuery groupByOpParentId() Group by the op_parent_id column
 * @method OperationsQuery groupByOpDateArchivageEnd() Group by the op_date_archivage_end column
 * @method OperationsQuery groupByOpClassificationId() Group by the op_classification_id column
 *
 * @method OperationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OperationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OperationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OperationsQuery leftJoinClients($relationAlias = null) Adds a LEFT JOIN clause to the query using the Clients relation
 * @method OperationsQuery rightJoinClients($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Clients relation
 * @method OperationsQuery innerJoinClients($relationAlias = null) Adds a INNER JOIN clause to the query using the Clients relation
 *
 * @method OperationsQuery leftJoinContactClient($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContactClient relation
 * @method OperationsQuery rightJoinContactClient($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContactClient relation
 * @method OperationsQuery innerJoinContactClient($relationAlias = null) Adds a INNER JOIN clause to the query using the ContactClient relation
 *
 * @method OperationsQuery leftJoinContactFacturation($relationAlias = null) Adds a LEFT JOIN clause to the query using the ContactFacturation relation
 * @method OperationsQuery rightJoinContactFacturation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ContactFacturation relation
 * @method OperationsQuery innerJoinContactFacturation($relationAlias = null) Adds a INNER JOIN clause to the query using the ContactFacturation relation
 *
 * @method OperationsQuery leftJoinUserDC($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserDC relation
 * @method OperationsQuery rightJoinUserDC($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserDC relation
 * @method OperationsQuery innerJoinUserDC($relationAlias = null) Adds a INNER JOIN clause to the query using the UserDC relation
 *
 * @method OperationsQuery leftJoinUserCP($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserCP relation
 * @method OperationsQuery rightJoinUserCP($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserCP relation
 * @method OperationsQuery innerJoinUserCP($relationAlias = null) Adds a INNER JOIN clause to the query using the UserCP relation
 *
 * @method OperationsQuery leftJoinUserCdp($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserCdp relation
 * @method OperationsQuery rightJoinUserCdp($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserCdp relation
 * @method OperationsQuery innerJoinUserCdp($relationAlias = null) Adds a INNER JOIN clause to the query using the UserCdp relation
 *
 * @method OperationsQuery leftJoinClientFactureOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientFactureOptions relation
 * @method OperationsQuery rightJoinClientFactureOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientFactureOptions relation
 * @method OperationsQuery innerJoinClientFactureOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientFactureOptions relation
 *
 * @method OperationsQuery leftJoinClientContratOptions($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientContratOptions relation
 * @method OperationsQuery rightJoinClientContratOptions($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientContratOptions relation
 * @method OperationsQuery innerJoinClientContratOptions($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientContratOptions relation
 *
 * @method OperationsQuery leftJoinClientSiteForLog($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClientSiteForLog relation
 * @method OperationsQuery rightJoinClientSiteForLog($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClientSiteForLog relation
 * @method OperationsQuery innerJoinClientSiteForLog($relationAlias = null) Adds a INNER JOIN clause to the query using the ClientSiteForLog relation
 *
 * @method OperationsQuery leftJoinGedelogOperationParams($relationAlias = null) Adds a LEFT JOIN clause to the query using the GedelogOperationParams relation
 * @method OperationsQuery rightJoinGedelogOperationParams($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GedelogOperationParams relation
 * @method OperationsQuery innerJoinGedelogOperationParams($relationAlias = null) Adds a INNER JOIN clause to the query using the GedelogOperationParams relation
 *
 * @method OperationsQuery leftJoinROperationStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationStatus relation
 * @method OperationsQuery rightJoinROperationStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationStatus relation
 * @method OperationsQuery innerJoinROperationStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationStatus relation
 *
 * @method OperationsQuery leftJoinRCustomActivites($relationAlias = null) Adds a LEFT JOIN clause to the query using the RCustomActivites relation
 * @method OperationsQuery rightJoinRCustomActivites($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RCustomActivites relation
 * @method OperationsQuery innerJoinRCustomActivites($relationAlias = null) Adds a INNER JOIN clause to the query using the RCustomActivites relation
 *
 * @method OperationsQuery leftJoinROperationType($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationType relation
 * @method OperationsQuery rightJoinROperationType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationType relation
 * @method OperationsQuery innerJoinROperationType($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationType relation
 *
 * @method OperationsQuery leftJoinROperationTypeSub($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationTypeSub relation
 * @method OperationsQuery rightJoinROperationTypeSub($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationTypeSub relation
 * @method OperationsQuery innerJoinROperationTypeSub($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationTypeSub relation
 *
 * @method OperationsQuery leftJoinOperationsExt($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationsExt relation
 * @method OperationsQuery rightJoinOperationsExt($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationsExt relation
 * @method OperationsQuery innerJoinOperationsExt($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationsExt relation
 *
 * @method OperationsQuery leftJoinRDelaiDevis($relationAlias = null) Adds a LEFT JOIN clause to the query using the RDelaiDevis relation
 * @method OperationsQuery rightJoinRDelaiDevis($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RDelaiDevis relation
 * @method OperationsQuery innerJoinRDelaiDevis($relationAlias = null) Adds a INNER JOIN clause to the query using the RDelaiDevis relation
 *
 * @method OperationsQuery leftJoinInvoicingAddressContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvoicingAddressContact relation
 * @method OperationsQuery rightJoinInvoicingAddressContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvoicingAddressContact relation
 * @method OperationsQuery innerJoinInvoicingAddressContact($relationAlias = null) Adds a INNER JOIN clause to the query using the InvoicingAddressContact relation
 *
 * @method OperationsQuery leftJoinOperationsRelatedByOpParentId($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationsRelatedByOpParentId relation
 * @method OperationsQuery rightJoinOperationsRelatedByOpParentId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationsRelatedByOpParentId relation
 * @method OperationsQuery innerJoinOperationsRelatedByOpParentId($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationsRelatedByOpParentId relation
 *
 * @method OperationsQuery leftJoinOperationUniverse($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationUniverse relation
 * @method OperationsQuery rightJoinOperationUniverse($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationUniverse relation
 * @method OperationsQuery innerJoinOperationUniverse($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationUniverse relation
 *
 * @method OperationsQuery leftJoinOperationMedia($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationMedia relation
 * @method OperationsQuery rightJoinOperationMedia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationMedia relation
 * @method OperationsQuery innerJoinOperationMedia($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationMedia relation
 *
 * @method OperationsQuery leftJoinOperationTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationTemplate relation
 * @method OperationsQuery rightJoinOperationTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationTemplate relation
 * @method OperationsQuery innerJoinOperationTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationTemplate relation
 *
 * @method OperationsQuery leftJoinROperationClassifications($relationAlias = null) Adds a LEFT JOIN clause to the query using the ROperationClassifications relation
 * @method OperationsQuery rightJoinROperationClassifications($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ROperationClassifications relation
 * @method OperationsQuery innerJoinROperationClassifications($relationAlias = null) Adds a INNER JOIN clause to the query using the ROperationClassifications relation
 *
 * @method OperationsQuery leftJoinFactures($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factures relation
 * @method OperationsQuery rightJoinFactures($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factures relation
 * @method OperationsQuery innerJoinFactures($relationAlias = null) Adds a INNER JOIN clause to the query using the Factures relation
 *
 * @method OperationsQuery leftJoinLnkOperationOption($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkOperationOption relation
 * @method OperationsQuery rightJoinLnkOperationOption($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkOperationOption relation
 * @method OperationsQuery innerJoinLnkOperationOption($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkOperationOption relation
 *
 * @method OperationsQuery leftJoinLnkOperationsContactsMail($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkOperationsContactsMail relation
 * @method OperationsQuery rightJoinLnkOperationsContactsMail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkOperationsContactsMail relation
 * @method OperationsQuery innerJoinLnkOperationsContactsMail($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkOperationsContactsMail relation
 *
 * @method OperationsQuery leftJoinLnkOperationCountry($relationAlias = null) Adds a LEFT JOIN clause to the query using the LnkOperationCountry relation
 * @method OperationsQuery rightJoinLnkOperationCountry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LnkOperationCountry relation
 * @method OperationsQuery innerJoinLnkOperationCountry($relationAlias = null) Adds a INNER JOIN clause to the query using the LnkOperationCountry relation
 *
 * @method OperationsQuery leftJoinOperationDecouverts($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationDecouverts relation
 * @method OperationsQuery rightJoinOperationDecouverts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationDecouverts relation
 * @method OperationsQuery innerJoinOperationDecouverts($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationDecouverts relation
 *
 * @method OperationsQuery leftJoinOperationPrestations($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrestations relation
 * @method OperationsQuery rightJoinOperationPrestations($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrestations relation
 * @method OperationsQuery innerJoinOperationPrestations($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrestations relation
 *
 * @method OperationsQuery leftJoinOperationPrimes($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationPrimes relation
 * @method OperationsQuery rightJoinOperationPrimes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationPrimes relation
 * @method OperationsQuery innerJoinOperationPrimes($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationPrimes relation
 *
 * @method OperationsQuery leftJoinOperationRubriques($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationRubriques relation
 * @method OperationsQuery rightJoinOperationRubriques($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationRubriques relation
 * @method OperationsQuery innerJoinOperationRubriques($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationRubriques relation
 *
 * @method OperationsQuery leftJoinOperationScenarii($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationScenarii relation
 * @method OperationsQuery rightJoinOperationScenarii($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationScenarii relation
 * @method OperationsQuery innerJoinOperationScenarii($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationScenarii relation
 *
 * @method OperationsQuery leftJoinOperationStatuts($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationStatuts relation
 * @method OperationsQuery rightJoinOperationStatuts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationStatuts relation
 * @method OperationsQuery innerJoinOperationStatuts($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationStatuts relation
 *
 * @method OperationsQuery leftJoinOperationTasks($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationTasks relation
 * @method OperationsQuery rightJoinOperationTasks($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationTasks relation
 * @method OperationsQuery innerJoinOperationTasks($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationTasks relation
 *
 * @method OperationsQuery leftJoinOperationsRelatedByOpId($relationAlias = null) Adds a LEFT JOIN clause to the query using the OperationsRelatedByOpId relation
 * @method OperationsQuery rightJoinOperationsRelatedByOpId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OperationsRelatedByOpId relation
 * @method OperationsQuery innerJoinOperationsRelatedByOpId($relationAlias = null) Adds a INNER JOIN clause to the query using the OperationsRelatedByOpId relation
 *
 * @method OperationsQuery leftJoinPlanFacturationDetails($relationAlias = null) Adds a LEFT JOIN clause to the query using the PlanFacturationDetails relation
 * @method OperationsQuery rightJoinPlanFacturationDetails($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PlanFacturationDetails relation
 * @method OperationsQuery innerJoinPlanFacturationDetails($relationAlias = null) Adds a INNER JOIN clause to the query using the PlanFacturationDetails relation
 *
 * @method OperationsQuery leftJoinPlanFacturationParams($relationAlias = null) Adds a LEFT JOIN clause to the query using the PlanFacturationParams relation
 * @method OperationsQuery rightJoinPlanFacturationParams($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PlanFacturationParams relation
 * @method OperationsQuery innerJoinPlanFacturationParams($relationAlias = null) Adds a INNER JOIN clause to the query using the PlanFacturationParams relation
 *
 * @method OperationsQuery leftJoinFactureEditionHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactureEditionHistory relation
 * @method OperationsQuery rightJoinFactureEditionHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactureEditionHistory relation
 * @method OperationsQuery innerJoinFactureEditionHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the FactureEditionHistory relation
 *
 * @method Operations findOne(PropelPDO $con = null) Return the first Operations matching the query
 * @method Operations findOneOrCreate(PropelPDO $con = null) Return the first Operations matching the query, or a new Operations object populated from the query conditions when no match is found
 *
 * @method Operations findOneByOpNumber(string $op_number) Return the first Operations filtered by the op_number column
 * @method Operations findOneByOpClId(int $op_cl_id) Return the first Operations filtered by the op_cl_id column
 * @method Operations findOneByOpCtId(int $op_ct_id) Return the first Operations filtered by the op_ct_id column
 * @method Operations findOneByOpCtFactId(int $op_ct_fact_id) Return the first Operations filtered by the op_ct_fact_id column
 * @method Operations findOneByOpLibelle(string $op_libelle) Return the first Operations filtered by the op_libelle column
 * @method Operations findOneByOpTypeId(int $op_type_id) Return the first Operations filtered by the op_type_id column
 * @method Operations findOneByOpSubtypeId(int $op_subtype_id) Return the first Operations filtered by the op_subtype_id column
 * @method Operations findOneByOpActId(int $op_act_id) Return the first Operations filtered by the op_act_id column
 * @method Operations findOneByOperationUniverseId(int $operation_universe_id) Return the first Operations filtered by the operation_universe_id column
 * @method Operations findOneByOperationMediaId(int $operation_media_id) Return the first Operations filtered by the operation_media_id column
 * @method Operations findOneByOperationOstTplId(int $operation_ost_tpl_id) Return the first Operations filtered by the operation_ost_tpl_id column
 * @method Operations findOneByOpProjectTypeId(int $op_project_type_id) Return the first Operations filtered by the op_project_type_id column
 * @method Operations findOneByOpDcId(int $op_dc_id) Return the first Operations filtered by the op_dc_id column
 * @method Operations findOneByOpCpId(int $op_cp_id) Return the first Operations filtered by the op_cp_id column
 * @method Operations findOneByOpCdpId(int $op_cdp_id) Return the first Operations filtered by the op_cdp_id column
 * @method Operations findOneByOpDescription(string $op_description) Return the first Operations filtered by the op_description column
 * @method Operations findOneByOpCommentaire(string $op_commentaire) Return the first Operations filtered by the op_commentaire column
 * @method Operations findOneByOpModalite(string $op_modalite) Return the first Operations filtered by the op_modalite column
 * @method Operations findOneByOpStampStart(string $op_stamp_start) Return the first Operations filtered by the op_stamp_start column
 * @method Operations findOneByOpStampEnd(string $op_stamp_end) Return the first Operations filtered by the op_stamp_end column
 * @method Operations findOneByOpStampClose(string $op_stamp_close) Return the first Operations filtered by the op_stamp_close column
 * @method Operations findOneByOpDateconsoStart(string $op_dateConso_start) Return the first Operations filtered by the op_dateConso_start column
 * @method Operations findOneByOpDateconsoEnd(string $op_dateConso_end) Return the first Operations filtered by the op_dateConso_end column
 * @method Operations findOneByOpDateposteEnd(string $op_datePoste_end) Return the first Operations filtered by the op_datePoste_end column
 * @method Operations findOneByOpStatusId(int $op_status_id) Return the first Operations filtered by the op_status_id column
 * @method Operations findOneByOpUsePrestaNegoce(boolean $op_use_presta_negoce) Return the first Operations filtered by the op_use_presta_negoce column
 * @method Operations findOneByOpTauxConversion(int $op_taux_conversion) Return the first Operations filtered by the op_taux_conversion column
 * @method Operations findOneByOpDelaiTraitCourrierId(int $op_delai_trait_courrier_id) Return the first Operations filtered by the op_delai_trait_courrier_id column
 * @method Operations findOneByOpDelaiDevisId(int $op_delai_devis_id) Return the first Operations filtered by the op_delai_devis_id column
 * @method Operations findOneByOpMailsDest(string $op_mails_dest) Return the first Operations filtered by the op_mails_dest column
 * @method Operations findOneByOpDateRelanceCouts(string $op_date_relance_couts) Return the first Operations filtered by the op_date_relance_couts column
 * @method Operations findOneByUserId(int $user_id) Return the first Operations filtered by the user_id column
 * @method Operations findOneByUserModify(int $user_modify) Return the first Operations filtered by the user_modify column
 * @method Operations findOneByDateCreate(string $date_create) Return the first Operations filtered by the date_create column
 * @method Operations findOneByDateModify(string $date_modify) Return the first Operations filtered by the date_modify column
 * @method Operations findOneByActif(int $actif) Return the first Operations filtered by the actif column
 * @method Operations findOneByOpCgvId(int $op_cgv_id) Return the first Operations filtered by the op_cgv_id column
 * @method Operations findOneByOpFreqStatMailId(int $op_freq_stat_mail_id) Return the first Operations filtered by the op_freq_stat_mail_id column
 * @method Operations findOneByOpDateLastSendStat(string $op_date_last_send_stat) Return the first Operations filtered by the op_date_last_send_stat column
 * @method Operations findOneByOpAttachFileStatsExcel(boolean $op_attach_file_stats_excel) Return the first Operations filtered by the op_attach_file_stats_excel column
 * @method Operations findOneByOpDevisLang(string $op_devis_lang) Return the first Operations filtered by the op_devis_lang column
 * @method Operations findOneByOpBriefLog(string $op_brief_log) Return the first Operations filtered by the op_brief_log column
 * @method Operations findOneByOpHasMailArchivSent(boolean $op_has_mail_archiv_sent) Return the first Operations filtered by the op_has_mail_archiv_sent column
 * @method Operations findOneByClSiteIdForLog(int $cl_site_id_for_log) Return the first Operations filtered by the cl_site_id_for_log column
 * @method Operations findOneByOpDateLastCompilData(string $op_date_last_compil_data) Return the first Operations filtered by the op_date_last_compil_data column
 * @method Operations findOneByOpCtFactAddrId(int $op_ct_fact_addr_id) Return the first Operations filtered by the op_ct_fact_addr_id column
 * @method Operations findOneByOpParentId(int $op_parent_id) Return the first Operations filtered by the op_parent_id column
 * @method Operations findOneByOpDateArchivageEnd(string $op_date_archivage_end) Return the first Operations filtered by the op_date_archivage_end column
 * @method Operations findOneByOpClassificationId(int $op_classification_id) Return the first Operations filtered by the op_classification_id column
 *
 * @method array findByOpId(int $op_id) Return Operations objects filtered by the op_id column
 * @method array findByOpNumber(string $op_number) Return Operations objects filtered by the op_number column
 * @method array findByOpClId(int $op_cl_id) Return Operations objects filtered by the op_cl_id column
 * @method array findByOpCtId(int $op_ct_id) Return Operations objects filtered by the op_ct_id column
 * @method array findByOpCtFactId(int $op_ct_fact_id) Return Operations objects filtered by the op_ct_fact_id column
 * @method array findByOpLibelle(string $op_libelle) Return Operations objects filtered by the op_libelle column
 * @method array findByOpTypeId(int $op_type_id) Return Operations objects filtered by the op_type_id column
 * @method array findByOpSubtypeId(int $op_subtype_id) Return Operations objects filtered by the op_subtype_id column
 * @method array findByOpActId(int $op_act_id) Return Operations objects filtered by the op_act_id column
 * @method array findByOperationUniverseId(int $operation_universe_id) Return Operations objects filtered by the operation_universe_id column
 * @method array findByOperationMediaId(int $operation_media_id) Return Operations objects filtered by the operation_media_id column
 * @method array findByOperationOstTplId(int $operation_ost_tpl_id) Return Operations objects filtered by the operation_ost_tpl_id column
 * @method array findByOpProjectTypeId(int $op_project_type_id) Return Operations objects filtered by the op_project_type_id column
 * @method array findByOpDcId(int $op_dc_id) Return Operations objects filtered by the op_dc_id column
 * @method array findByOpCpId(int $op_cp_id) Return Operations objects filtered by the op_cp_id column
 * @method array findByOpCdpId(int $op_cdp_id) Return Operations objects filtered by the op_cdp_id column
 * @method array findByOpDescription(string $op_description) Return Operations objects filtered by the op_description column
 * @method array findByOpCommentaire(string $op_commentaire) Return Operations objects filtered by the op_commentaire column
 * @method array findByOpModalite(string $op_modalite) Return Operations objects filtered by the op_modalite column
 * @method array findByOpStampStart(string $op_stamp_start) Return Operations objects filtered by the op_stamp_start column
 * @method array findByOpStampEnd(string $op_stamp_end) Return Operations objects filtered by the op_stamp_end column
 * @method array findByOpStampClose(string $op_stamp_close) Return Operations objects filtered by the op_stamp_close column
 * @method array findByOpDateconsoStart(string $op_dateConso_start) Return Operations objects filtered by the op_dateConso_start column
 * @method array findByOpDateconsoEnd(string $op_dateConso_end) Return Operations objects filtered by the op_dateConso_end column
 * @method array findByOpDateposteEnd(string $op_datePoste_end) Return Operations objects filtered by the op_datePoste_end column
 * @method array findByOpStatusId(int $op_status_id) Return Operations objects filtered by the op_status_id column
 * @method array findByOpUsePrestaNegoce(boolean $op_use_presta_negoce) Return Operations objects filtered by the op_use_presta_negoce column
 * @method array findByOpTauxConversion(int $op_taux_conversion) Return Operations objects filtered by the op_taux_conversion column
 * @method array findByOpDelaiTraitCourrierId(int $op_delai_trait_courrier_id) Return Operations objects filtered by the op_delai_trait_courrier_id column
 * @method array findByOpDelaiDevisId(int $op_delai_devis_id) Return Operations objects filtered by the op_delai_devis_id column
 * @method array findByOpMailsDest(string $op_mails_dest) Return Operations objects filtered by the op_mails_dest column
 * @method array findByOpDateRelanceCouts(string $op_date_relance_couts) Return Operations objects filtered by the op_date_relance_couts column
 * @method array findByUserId(int $user_id) Return Operations objects filtered by the user_id column
 * @method array findByUserModify(int $user_modify) Return Operations objects filtered by the user_modify column
 * @method array findByDateCreate(string $date_create) Return Operations objects filtered by the date_create column
 * @method array findByDateModify(string $date_modify) Return Operations objects filtered by the date_modify column
 * @method array findByActif(int $actif) Return Operations objects filtered by the actif column
 * @method array findByOpCgvId(int $op_cgv_id) Return Operations objects filtered by the op_cgv_id column
 * @method array findByOpFreqStatMailId(int $op_freq_stat_mail_id) Return Operations objects filtered by the op_freq_stat_mail_id column
 * @method array findByOpDateLastSendStat(string $op_date_last_send_stat) Return Operations objects filtered by the op_date_last_send_stat column
 * @method array findByOpAttachFileStatsExcel(boolean $op_attach_file_stats_excel) Return Operations objects filtered by the op_attach_file_stats_excel column
 * @method array findByOpDevisLang(string $op_devis_lang) Return Operations objects filtered by the op_devis_lang column
 * @method array findByOpBriefLog(string $op_brief_log) Return Operations objects filtered by the op_brief_log column
 * @method array findByOpHasMailArchivSent(boolean $op_has_mail_archiv_sent) Return Operations objects filtered by the op_has_mail_archiv_sent column
 * @method array findByClSiteIdForLog(int $cl_site_id_for_log) Return Operations objects filtered by the cl_site_id_for_log column
 * @method array findByOpDateLastCompilData(string $op_date_last_compil_data) Return Operations objects filtered by the op_date_last_compil_data column
 * @method array findByOpCtFactAddrId(int $op_ct_fact_addr_id) Return Operations objects filtered by the op_ct_fact_addr_id column
 * @method array findByOpParentId(int $op_parent_id) Return Operations objects filtered by the op_parent_id column
 * @method array findByOpDateArchivageEnd(string $op_date_archivage_end) Return Operations objects filtered by the op_date_archivage_end column
 * @method array findByOpClassificationId(int $op_classification_id) Return Operations objects filtered by the op_classification_id column
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseOperationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOperationsQuery object.
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
            $modelName = 'Operations';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OperationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OperationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OperationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OperationsQuery) {
            return $criteria;
        }
        $query = new OperationsQuery(null, null, $modelAlias);

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
     * @return   Operations|Operations[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OperationsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Operations A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByOpId($key, $con = null)
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
     * @return                 Operations A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `op_id`, `op_number`, `op_cl_id`, `op_ct_id`, `op_ct_fact_id`, `op_libelle`, `op_type_id`, `op_subtype_id`, `op_act_id`, `operation_universe_id`, `operation_media_id`, `operation_ost_tpl_id`, `op_project_type_id`, `op_dc_id`, `op_cp_id`, `op_cdp_id`, `op_description`, `op_commentaire`, `op_modalite`, `op_stamp_start`, `op_stamp_end`, `op_stamp_close`, `op_dateConso_start`, `op_dateConso_end`, `op_datePoste_end`, `op_status_id`, `op_use_presta_negoce`, `op_taux_conversion`, `op_delai_trait_courrier_id`, `op_delai_devis_id`, `op_mails_dest`, `op_date_relance_couts`, `user_id`, `user_modify`, `date_create`, `date_modify`, `actif`, `op_cgv_id`, `op_freq_stat_mail_id`, `op_date_last_send_stat`, `op_attach_file_stats_excel`, `op_devis_lang`, `op_brief_log`, `op_has_mail_archiv_sent`, `cl_site_id_for_log`, `op_date_last_compil_data`, `op_ct_fact_addr_id`, `op_parent_id`, `op_date_archivage_end`, `op_classification_id` FROM `operations` WHERE `op_id` = :p0';
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
            $obj = new Operations();
            $obj->hydrate($row);
            OperationsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Operations|Operations[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Operations[]|mixed the list of results, formatted by the current formatter
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
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OperationsPeer::OP_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OperationsPeer::OP_ID, $keys, Criteria::IN);
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
     * @see       filterByGedelogOperationParams()
     *
     * @see       filterByOperationsExt()
     *
     * @param     mixed $opId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpId($opId = null, $comparison = null)
    {
        if (is_array($opId)) {
            $useMinMax = false;
            if (isset($opId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_ID, $opId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_ID, $opId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_ID, $opId, $comparison);
    }

    /**
     * Filter the query on the op_number column
     *
     * Example usage:
     * <code>
     * $query->filterByOpNumber('fooValue');   // WHERE op_number = 'fooValue'
     * $query->filterByOpNumber('%fooValue%'); // WHERE op_number LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opNumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpNumber($opNumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opNumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opNumber)) {
                $opNumber = str_replace('*', '%', $opNumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_NUMBER, $opNumber, $comparison);
    }

    /**
     * Filter the query on the op_cl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpClId(1234); // WHERE op_cl_id = 1234
     * $query->filterByOpClId(array(12, 34)); // WHERE op_cl_id IN (12, 34)
     * $query->filterByOpClId(array('min' => 12)); // WHERE op_cl_id >= 12
     * $query->filterByOpClId(array('max' => 12)); // WHERE op_cl_id <= 12
     * </code>
     *
     * @see       filterByClients()
     *
     * @see       filterByClientFactureOptions()
     *
     * @see       filterByClientContratOptions()
     *
     * @param     mixed $opClId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpClId($opClId = null, $comparison = null)
    {
        if (is_array($opClId)) {
            $useMinMax = false;
            if (isset($opClId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_CL_ID, $opClId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opClId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_CL_ID, $opClId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_CL_ID, $opClId, $comparison);
    }

    /**
     * Filter the query on the op_ct_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpCtId(1234); // WHERE op_ct_id = 1234
     * $query->filterByOpCtId(array(12, 34)); // WHERE op_ct_id IN (12, 34)
     * $query->filterByOpCtId(array('min' => 12)); // WHERE op_ct_id >= 12
     * $query->filterByOpCtId(array('max' => 12)); // WHERE op_ct_id <= 12
     * </code>
     *
     * @see       filterByContactClient()
     *
     * @param     mixed $opCtId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpCtId($opCtId = null, $comparison = null)
    {
        if (is_array($opCtId)) {
            $useMinMax = false;
            if (isset($opCtId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_CT_ID, $opCtId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opCtId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_CT_ID, $opCtId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_CT_ID, $opCtId, $comparison);
    }

    /**
     * Filter the query on the op_ct_fact_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpCtFactId(1234); // WHERE op_ct_fact_id = 1234
     * $query->filterByOpCtFactId(array(12, 34)); // WHERE op_ct_fact_id IN (12, 34)
     * $query->filterByOpCtFactId(array('min' => 12)); // WHERE op_ct_fact_id >= 12
     * $query->filterByOpCtFactId(array('max' => 12)); // WHERE op_ct_fact_id <= 12
     * </code>
     *
     * @see       filterByContactFacturation()
     *
     * @param     mixed $opCtFactId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpCtFactId($opCtFactId = null, $comparison = null)
    {
        if (is_array($opCtFactId)) {
            $useMinMax = false;
            if (isset($opCtFactId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_CT_FACT_ID, $opCtFactId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opCtFactId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_CT_FACT_ID, $opCtFactId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_CT_FACT_ID, $opCtFactId, $comparison);
    }

    /**
     * Filter the query on the op_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByOpLibelle('fooValue');   // WHERE op_libelle = 'fooValue'
     * $query->filterByOpLibelle('%fooValue%'); // WHERE op_libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opLibelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpLibelle($opLibelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opLibelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opLibelle)) {
                $opLibelle = str_replace('*', '%', $opLibelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_LIBELLE, $opLibelle, $comparison);
    }

    /**
     * Filter the query on the op_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTypeId(1234); // WHERE op_type_id = 1234
     * $query->filterByOpTypeId(array(12, 34)); // WHERE op_type_id IN (12, 34)
     * $query->filterByOpTypeId(array('min' => 12)); // WHERE op_type_id >= 12
     * $query->filterByOpTypeId(array('max' => 12)); // WHERE op_type_id <= 12
     * </code>
     *
     * @see       filterByROperationType()
     *
     * @param     mixed $opTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpTypeId($opTypeId = null, $comparison = null)
    {
        if (is_array($opTypeId)) {
            $useMinMax = false;
            if (isset($opTypeId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_TYPE_ID, $opTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTypeId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_TYPE_ID, $opTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_TYPE_ID, $opTypeId, $comparison);
    }

    /**
     * Filter the query on the op_subtype_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpSubtypeId(1234); // WHERE op_subtype_id = 1234
     * $query->filterByOpSubtypeId(array(12, 34)); // WHERE op_subtype_id IN (12, 34)
     * $query->filterByOpSubtypeId(array('min' => 12)); // WHERE op_subtype_id >= 12
     * $query->filterByOpSubtypeId(array('max' => 12)); // WHERE op_subtype_id <= 12
     * </code>
     *
     * @see       filterByROperationTypeSub()
     *
     * @param     mixed $opSubtypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpSubtypeId($opSubtypeId = null, $comparison = null)
    {
        if (is_array($opSubtypeId)) {
            $useMinMax = false;
            if (isset($opSubtypeId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_SUBTYPE_ID, $opSubtypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opSubtypeId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_SUBTYPE_ID, $opSubtypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_SUBTYPE_ID, $opSubtypeId, $comparison);
    }

    /**
     * Filter the query on the op_act_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpActId(1234); // WHERE op_act_id = 1234
     * $query->filterByOpActId(array(12, 34)); // WHERE op_act_id IN (12, 34)
     * $query->filterByOpActId(array('min' => 12)); // WHERE op_act_id >= 12
     * $query->filterByOpActId(array('max' => 12)); // WHERE op_act_id <= 12
     * </code>
     *
     * @see       filterByRCustomActivites()
     *
     * @param     mixed $opActId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpActId($opActId = null, $comparison = null)
    {
        if (is_array($opActId)) {
            $useMinMax = false;
            if (isset($opActId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_ACT_ID, $opActId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opActId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_ACT_ID, $opActId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_ACT_ID, $opActId, $comparison);
    }

    /**
     * Filter the query on the operation_universe_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationUniverseId(1234); // WHERE operation_universe_id = 1234
     * $query->filterByOperationUniverseId(array(12, 34)); // WHERE operation_universe_id IN (12, 34)
     * $query->filterByOperationUniverseId(array('min' => 12)); // WHERE operation_universe_id >= 12
     * $query->filterByOperationUniverseId(array('max' => 12)); // WHERE operation_universe_id <= 12
     * </code>
     *
     * @see       filterByOperationUniverse()
     *
     * @param     mixed $operationUniverseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOperationUniverseId($operationUniverseId = null, $comparison = null)
    {
        if (is_array($operationUniverseId)) {
            $useMinMax = false;
            if (isset($operationUniverseId['min'])) {
                $this->addUsingAlias(OperationsPeer::OPERATION_UNIVERSE_ID, $operationUniverseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationUniverseId['max'])) {
                $this->addUsingAlias(OperationsPeer::OPERATION_UNIVERSE_ID, $operationUniverseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OPERATION_UNIVERSE_ID, $operationUniverseId, $comparison);
    }

    /**
     * Filter the query on the operation_media_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationMediaId(1234); // WHERE operation_media_id = 1234
     * $query->filterByOperationMediaId(array(12, 34)); // WHERE operation_media_id IN (12, 34)
     * $query->filterByOperationMediaId(array('min' => 12)); // WHERE operation_media_id >= 12
     * $query->filterByOperationMediaId(array('max' => 12)); // WHERE operation_media_id <= 12
     * </code>
     *
     * @see       filterByOperationMedia()
     *
     * @param     mixed $operationMediaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOperationMediaId($operationMediaId = null, $comparison = null)
    {
        if (is_array($operationMediaId)) {
            $useMinMax = false;
            if (isset($operationMediaId['min'])) {
                $this->addUsingAlias(OperationsPeer::OPERATION_MEDIA_ID, $operationMediaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationMediaId['max'])) {
                $this->addUsingAlias(OperationsPeer::OPERATION_MEDIA_ID, $operationMediaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OPERATION_MEDIA_ID, $operationMediaId, $comparison);
    }

    /**
     * Filter the query on the operation_ost_tpl_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationOstTplId(1234); // WHERE operation_ost_tpl_id = 1234
     * $query->filterByOperationOstTplId(array(12, 34)); // WHERE operation_ost_tpl_id IN (12, 34)
     * $query->filterByOperationOstTplId(array('min' => 12)); // WHERE operation_ost_tpl_id >= 12
     * $query->filterByOperationOstTplId(array('max' => 12)); // WHERE operation_ost_tpl_id <= 12
     * </code>
     *
     * @see       filterByOperationTemplate()
     *
     * @param     mixed $operationOstTplId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOperationOstTplId($operationOstTplId = null, $comparison = null)
    {
        if (is_array($operationOstTplId)) {
            $useMinMax = false;
            if (isset($operationOstTplId['min'])) {
                $this->addUsingAlias(OperationsPeer::OPERATION_OST_TPL_ID, $operationOstTplId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationOstTplId['max'])) {
                $this->addUsingAlias(OperationsPeer::OPERATION_OST_TPL_ID, $operationOstTplId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OPERATION_OST_TPL_ID, $operationOstTplId, $comparison);
    }

    /**
     * Filter the query on the op_project_type_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpProjectTypeId(1234); // WHERE op_project_type_id = 1234
     * $query->filterByOpProjectTypeId(array(12, 34)); // WHERE op_project_type_id IN (12, 34)
     * $query->filterByOpProjectTypeId(array('min' => 12)); // WHERE op_project_type_id >= 12
     * $query->filterByOpProjectTypeId(array('max' => 12)); // WHERE op_project_type_id <= 12
     * </code>
     *
     * @param     mixed $opProjectTypeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpProjectTypeId($opProjectTypeId = null, $comparison = null)
    {
        if (is_array($opProjectTypeId)) {
            $useMinMax = false;
            if (isset($opProjectTypeId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_PROJECT_TYPE_ID, $opProjectTypeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opProjectTypeId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_PROJECT_TYPE_ID, $opProjectTypeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_PROJECT_TYPE_ID, $opProjectTypeId, $comparison);
    }

    /**
     * Filter the query on the op_dc_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDcId(1234); // WHERE op_dc_id = 1234
     * $query->filterByOpDcId(array(12, 34)); // WHERE op_dc_id IN (12, 34)
     * $query->filterByOpDcId(array('min' => 12)); // WHERE op_dc_id >= 12
     * $query->filterByOpDcId(array('max' => 12)); // WHERE op_dc_id <= 12
     * </code>
     *
     * @see       filterByUserDC()
     *
     * @param     mixed $opDcId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDcId($opDcId = null, $comparison = null)
    {
        if (is_array($opDcId)) {
            $useMinMax = false;
            if (isset($opDcId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_DC_ID, $opDcId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDcId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_DC_ID, $opDcId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DC_ID, $opDcId, $comparison);
    }

    /**
     * Filter the query on the op_cp_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpCpId(1234); // WHERE op_cp_id = 1234
     * $query->filterByOpCpId(array(12, 34)); // WHERE op_cp_id IN (12, 34)
     * $query->filterByOpCpId(array('min' => 12)); // WHERE op_cp_id >= 12
     * $query->filterByOpCpId(array('max' => 12)); // WHERE op_cp_id <= 12
     * </code>
     *
     * @see       filterByUserCP()
     *
     * @param     mixed $opCpId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpCpId($opCpId = null, $comparison = null)
    {
        if (is_array($opCpId)) {
            $useMinMax = false;
            if (isset($opCpId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_CP_ID, $opCpId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opCpId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_CP_ID, $opCpId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_CP_ID, $opCpId, $comparison);
    }

    /**
     * Filter the query on the op_cdp_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpCdpId(1234); // WHERE op_cdp_id = 1234
     * $query->filterByOpCdpId(array(12, 34)); // WHERE op_cdp_id IN (12, 34)
     * $query->filterByOpCdpId(array('min' => 12)); // WHERE op_cdp_id >= 12
     * $query->filterByOpCdpId(array('max' => 12)); // WHERE op_cdp_id <= 12
     * </code>
     *
     * @see       filterByUserCdp()
     *
     * @param     mixed $opCdpId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpCdpId($opCdpId = null, $comparison = null)
    {
        if (is_array($opCdpId)) {
            $useMinMax = false;
            if (isset($opCdpId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_CDP_ID, $opCdpId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opCdpId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_CDP_ID, $opCdpId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_CDP_ID, $opCdpId, $comparison);
    }

    /**
     * Filter the query on the op_description column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDescription('fooValue');   // WHERE op_description = 'fooValue'
     * $query->filterByOpDescription('%fooValue%'); // WHERE op_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDescription($opDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opDescription)) {
                $opDescription = str_replace('*', '%', $opDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DESCRIPTION, $opDescription, $comparison);
    }

    /**
     * Filter the query on the op_commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByOpCommentaire('fooValue');   // WHERE op_commentaire = 'fooValue'
     * $query->filterByOpCommentaire('%fooValue%'); // WHERE op_commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opCommentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpCommentaire($opCommentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opCommentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opCommentaire)) {
                $opCommentaire = str_replace('*', '%', $opCommentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_COMMENTAIRE, $opCommentaire, $comparison);
    }

    /**
     * Filter the query on the op_modalite column
     *
     * Example usage:
     * <code>
     * $query->filterByOpModalite('fooValue');   // WHERE op_modalite = 'fooValue'
     * $query->filterByOpModalite('%fooValue%'); // WHERE op_modalite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opModalite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpModalite($opModalite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opModalite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opModalite)) {
                $opModalite = str_replace('*', '%', $opModalite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_MODALITE, $opModalite, $comparison);
    }

    /**
     * Filter the query on the op_stamp_start column
     *
     * Example usage:
     * <code>
     * $query->filterByOpStampStart('2011-03-14'); // WHERE op_stamp_start = '2011-03-14'
     * $query->filterByOpStampStart('now'); // WHERE op_stamp_start = '2011-03-14'
     * $query->filterByOpStampStart(array('max' => 'yesterday')); // WHERE op_stamp_start < '2011-03-13'
     * </code>
     *
     * @param     mixed $opStampStart The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpStampStart($opStampStart = null, $comparison = null)
    {
        if (is_array($opStampStart)) {
            $useMinMax = false;
            if (isset($opStampStart['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_STAMP_START, $opStampStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opStampStart['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_STAMP_START, $opStampStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_STAMP_START, $opStampStart, $comparison);
    }

    /**
     * Filter the query on the op_stamp_end column
     *
     * Example usage:
     * <code>
     * $query->filterByOpStampEnd('2011-03-14'); // WHERE op_stamp_end = '2011-03-14'
     * $query->filterByOpStampEnd('now'); // WHERE op_stamp_end = '2011-03-14'
     * $query->filterByOpStampEnd(array('max' => 'yesterday')); // WHERE op_stamp_end < '2011-03-13'
     * </code>
     *
     * @param     mixed $opStampEnd The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpStampEnd($opStampEnd = null, $comparison = null)
    {
        if (is_array($opStampEnd)) {
            $useMinMax = false;
            if (isset($opStampEnd['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_STAMP_END, $opStampEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opStampEnd['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_STAMP_END, $opStampEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_STAMP_END, $opStampEnd, $comparison);
    }

    /**
     * Filter the query on the op_stamp_close column
     *
     * Example usage:
     * <code>
     * $query->filterByOpStampClose('2011-03-14'); // WHERE op_stamp_close = '2011-03-14'
     * $query->filterByOpStampClose('now'); // WHERE op_stamp_close = '2011-03-14'
     * $query->filterByOpStampClose(array('max' => 'yesterday')); // WHERE op_stamp_close < '2011-03-13'
     * </code>
     *
     * @param     mixed $opStampClose The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpStampClose($opStampClose = null, $comparison = null)
    {
        if (is_array($opStampClose)) {
            $useMinMax = false;
            if (isset($opStampClose['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_STAMP_CLOSE, $opStampClose['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opStampClose['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_STAMP_CLOSE, $opStampClose['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_STAMP_CLOSE, $opStampClose, $comparison);
    }

    /**
     * Filter the query on the op_dateConso_start column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDateconsoStart('2011-03-14'); // WHERE op_dateConso_start = '2011-03-14'
     * $query->filterByOpDateconsoStart('now'); // WHERE op_dateConso_start = '2011-03-14'
     * $query->filterByOpDateconsoStart(array('max' => 'yesterday')); // WHERE op_dateConso_start < '2011-03-13'
     * </code>
     *
     * @param     mixed $opDateconsoStart The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDateconsoStart($opDateconsoStart = null, $comparison = null)
    {
        if (is_array($opDateconsoStart)) {
            $useMinMax = false;
            if (isset($opDateconsoStart['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATECONSO_START, $opDateconsoStart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDateconsoStart['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATECONSO_START, $opDateconsoStart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DATECONSO_START, $opDateconsoStart, $comparison);
    }

    /**
     * Filter the query on the op_dateConso_end column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDateconsoEnd('2011-03-14'); // WHERE op_dateConso_end = '2011-03-14'
     * $query->filterByOpDateconsoEnd('now'); // WHERE op_dateConso_end = '2011-03-14'
     * $query->filterByOpDateconsoEnd(array('max' => 'yesterday')); // WHERE op_dateConso_end < '2011-03-13'
     * </code>
     *
     * @param     mixed $opDateconsoEnd The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDateconsoEnd($opDateconsoEnd = null, $comparison = null)
    {
        if (is_array($opDateconsoEnd)) {
            $useMinMax = false;
            if (isset($opDateconsoEnd['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATECONSO_END, $opDateconsoEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDateconsoEnd['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATECONSO_END, $opDateconsoEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DATECONSO_END, $opDateconsoEnd, $comparison);
    }

    /**
     * Filter the query on the op_datePoste_end column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDateposteEnd('2011-03-14'); // WHERE op_datePoste_end = '2011-03-14'
     * $query->filterByOpDateposteEnd('now'); // WHERE op_datePoste_end = '2011-03-14'
     * $query->filterByOpDateposteEnd(array('max' => 'yesterday')); // WHERE op_datePoste_end < '2011-03-13'
     * </code>
     *
     * @param     mixed $opDateposteEnd The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDateposteEnd($opDateposteEnd = null, $comparison = null)
    {
        if (is_array($opDateposteEnd)) {
            $useMinMax = false;
            if (isset($opDateposteEnd['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATEPOSTE_END, $opDateposteEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDateposteEnd['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATEPOSTE_END, $opDateposteEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DATEPOSTE_END, $opDateposteEnd, $comparison);
    }

    /**
     * Filter the query on the op_status_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpStatusId(1234); // WHERE op_status_id = 1234
     * $query->filterByOpStatusId(array(12, 34)); // WHERE op_status_id IN (12, 34)
     * $query->filterByOpStatusId(array('min' => 12)); // WHERE op_status_id >= 12
     * $query->filterByOpStatusId(array('max' => 12)); // WHERE op_status_id <= 12
     * </code>
     *
     * @see       filterByROperationStatus()
     *
     * @param     mixed $opStatusId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpStatusId($opStatusId = null, $comparison = null)
    {
        if (is_array($opStatusId)) {
            $useMinMax = false;
            if (isset($opStatusId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_STATUS_ID, $opStatusId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opStatusId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_STATUS_ID, $opStatusId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_STATUS_ID, $opStatusId, $comparison);
    }

    /**
     * Filter the query on the op_use_presta_negoce column
     *
     * Example usage:
     * <code>
     * $query->filterByOpUsePrestaNegoce(true); // WHERE op_use_presta_negoce = true
     * $query->filterByOpUsePrestaNegoce('yes'); // WHERE op_use_presta_negoce = true
     * </code>
     *
     * @param     boolean|string $opUsePrestaNegoce The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpUsePrestaNegoce($opUsePrestaNegoce = null, $comparison = null)
    {
        if (is_string($opUsePrestaNegoce)) {
            $opUsePrestaNegoce = in_array(strtolower($opUsePrestaNegoce), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationsPeer::OP_USE_PRESTA_NEGOCE, $opUsePrestaNegoce, $comparison);
    }

    /**
     * Filter the query on the op_taux_conversion column
     *
     * Example usage:
     * <code>
     * $query->filterByOpTauxConversion(1234); // WHERE op_taux_conversion = 1234
     * $query->filterByOpTauxConversion(array(12, 34)); // WHERE op_taux_conversion IN (12, 34)
     * $query->filterByOpTauxConversion(array('min' => 12)); // WHERE op_taux_conversion >= 12
     * $query->filterByOpTauxConversion(array('max' => 12)); // WHERE op_taux_conversion <= 12
     * </code>
     *
     * @param     mixed $opTauxConversion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpTauxConversion($opTauxConversion = null, $comparison = null)
    {
        if (is_array($opTauxConversion)) {
            $useMinMax = false;
            if (isset($opTauxConversion['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_TAUX_CONVERSION, $opTauxConversion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opTauxConversion['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_TAUX_CONVERSION, $opTauxConversion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_TAUX_CONVERSION, $opTauxConversion, $comparison);
    }

    /**
     * Filter the query on the op_delai_trait_courrier_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDelaiTraitCourrierId(1234); // WHERE op_delai_trait_courrier_id = 1234
     * $query->filterByOpDelaiTraitCourrierId(array(12, 34)); // WHERE op_delai_trait_courrier_id IN (12, 34)
     * $query->filterByOpDelaiTraitCourrierId(array('min' => 12)); // WHERE op_delai_trait_courrier_id >= 12
     * $query->filterByOpDelaiTraitCourrierId(array('max' => 12)); // WHERE op_delai_trait_courrier_id <= 12
     * </code>
     *
     * @param     mixed $opDelaiTraitCourrierId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDelaiTraitCourrierId($opDelaiTraitCourrierId = null, $comparison = null)
    {
        if (is_array($opDelaiTraitCourrierId)) {
            $useMinMax = false;
            if (isset($opDelaiTraitCourrierId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_DELAI_TRAIT_COURRIER_ID, $opDelaiTraitCourrierId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDelaiTraitCourrierId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_DELAI_TRAIT_COURRIER_ID, $opDelaiTraitCourrierId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DELAI_TRAIT_COURRIER_ID, $opDelaiTraitCourrierId, $comparison);
    }

    /**
     * Filter the query on the op_delai_devis_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDelaiDevisId(1234); // WHERE op_delai_devis_id = 1234
     * $query->filterByOpDelaiDevisId(array(12, 34)); // WHERE op_delai_devis_id IN (12, 34)
     * $query->filterByOpDelaiDevisId(array('min' => 12)); // WHERE op_delai_devis_id >= 12
     * $query->filterByOpDelaiDevisId(array('max' => 12)); // WHERE op_delai_devis_id <= 12
     * </code>
     *
     * @see       filterByRDelaiDevis()
     *
     * @param     mixed $opDelaiDevisId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDelaiDevisId($opDelaiDevisId = null, $comparison = null)
    {
        if (is_array($opDelaiDevisId)) {
            $useMinMax = false;
            if (isset($opDelaiDevisId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_DELAI_DEVIS_ID, $opDelaiDevisId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDelaiDevisId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_DELAI_DEVIS_ID, $opDelaiDevisId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DELAI_DEVIS_ID, $opDelaiDevisId, $comparison);
    }

    /**
     * Filter the query on the op_mails_dest column
     *
     * Example usage:
     * <code>
     * $query->filterByOpMailsDest('fooValue');   // WHERE op_mails_dest = 'fooValue'
     * $query->filterByOpMailsDest('%fooValue%'); // WHERE op_mails_dest LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opMailsDest The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpMailsDest($opMailsDest = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opMailsDest)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opMailsDest)) {
                $opMailsDest = str_replace('*', '%', $opMailsDest);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_MAILS_DEST, $opMailsDest, $comparison);
    }

    /**
     * Filter the query on the op_date_relance_couts column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDateRelanceCouts('2011-03-14'); // WHERE op_date_relance_couts = '2011-03-14'
     * $query->filterByOpDateRelanceCouts('now'); // WHERE op_date_relance_couts = '2011-03-14'
     * $query->filterByOpDateRelanceCouts(array('max' => 'yesterday')); // WHERE op_date_relance_couts < '2011-03-13'
     * </code>
     *
     * @param     mixed $opDateRelanceCouts The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDateRelanceCouts($opDateRelanceCouts = null, $comparison = null)
    {
        if (is_array($opDateRelanceCouts)) {
            $useMinMax = false;
            if (isset($opDateRelanceCouts['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATE_RELANCE_COUTS, $opDateRelanceCouts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDateRelanceCouts['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATE_RELANCE_COUTS, $opDateRelanceCouts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DATE_RELANCE_COUTS, $opDateRelanceCouts, $comparison);
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
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(OperationsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(OperationsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::USER_ID, $userId, $comparison);
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
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByUserModify($userModify = null, $comparison = null)
    {
        if (is_array($userModify)) {
            $useMinMax = false;
            if (isset($userModify['min'])) {
                $this->addUsingAlias(OperationsPeer::USER_MODIFY, $userModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userModify['max'])) {
                $this->addUsingAlias(OperationsPeer::USER_MODIFY, $userModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::USER_MODIFY, $userModify, $comparison);
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
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByDateCreate($dateCreate = null, $comparison = null)
    {
        if (is_array($dateCreate)) {
            $useMinMax = false;
            if (isset($dateCreate['min'])) {
                $this->addUsingAlias(OperationsPeer::DATE_CREATE, $dateCreate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreate['max'])) {
                $this->addUsingAlias(OperationsPeer::DATE_CREATE, $dateCreate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::DATE_CREATE, $dateCreate, $comparison);
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
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByDateModify($dateModify = null, $comparison = null)
    {
        if (is_array($dateModify)) {
            $useMinMax = false;
            if (isset($dateModify['min'])) {
                $this->addUsingAlias(OperationsPeer::DATE_MODIFY, $dateModify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModify['max'])) {
                $this->addUsingAlias(OperationsPeer::DATE_MODIFY, $dateModify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::DATE_MODIFY, $dateModify, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(1234); // WHERE actif = 1234
     * $query->filterByActif(array(12, 34)); // WHERE actif IN (12, 34)
     * $query->filterByActif(array('min' => 12)); // WHERE actif >= 12
     * $query->filterByActif(array('max' => 12)); // WHERE actif <= 12
     * </code>
     *
     * @param     mixed $actif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(OperationsPeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(OperationsPeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the op_cgv_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpCgvId(1234); // WHERE op_cgv_id = 1234
     * $query->filterByOpCgvId(array(12, 34)); // WHERE op_cgv_id IN (12, 34)
     * $query->filterByOpCgvId(array('min' => 12)); // WHERE op_cgv_id >= 12
     * $query->filterByOpCgvId(array('max' => 12)); // WHERE op_cgv_id <= 12
     * </code>
     *
     * @param     mixed $opCgvId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpCgvId($opCgvId = null, $comparison = null)
    {
        if (is_array($opCgvId)) {
            $useMinMax = false;
            if (isset($opCgvId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_CGV_ID, $opCgvId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opCgvId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_CGV_ID, $opCgvId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_CGV_ID, $opCgvId, $comparison);
    }

    /**
     * Filter the query on the op_freq_stat_mail_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpFreqStatMailId(1234); // WHERE op_freq_stat_mail_id = 1234
     * $query->filterByOpFreqStatMailId(array(12, 34)); // WHERE op_freq_stat_mail_id IN (12, 34)
     * $query->filterByOpFreqStatMailId(array('min' => 12)); // WHERE op_freq_stat_mail_id >= 12
     * $query->filterByOpFreqStatMailId(array('max' => 12)); // WHERE op_freq_stat_mail_id <= 12
     * </code>
     *
     * @param     mixed $opFreqStatMailId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpFreqStatMailId($opFreqStatMailId = null, $comparison = null)
    {
        if (is_array($opFreqStatMailId)) {
            $useMinMax = false;
            if (isset($opFreqStatMailId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_FREQ_STAT_MAIL_ID, $opFreqStatMailId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opFreqStatMailId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_FREQ_STAT_MAIL_ID, $opFreqStatMailId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_FREQ_STAT_MAIL_ID, $opFreqStatMailId, $comparison);
    }

    /**
     * Filter the query on the op_date_last_send_stat column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDateLastSendStat('2011-03-14'); // WHERE op_date_last_send_stat = '2011-03-14'
     * $query->filterByOpDateLastSendStat('now'); // WHERE op_date_last_send_stat = '2011-03-14'
     * $query->filterByOpDateLastSendStat(array('max' => 'yesterday')); // WHERE op_date_last_send_stat < '2011-03-13'
     * </code>
     *
     * @param     mixed $opDateLastSendStat The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDateLastSendStat($opDateLastSendStat = null, $comparison = null)
    {
        if (is_array($opDateLastSendStat)) {
            $useMinMax = false;
            if (isset($opDateLastSendStat['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATE_LAST_SEND_STAT, $opDateLastSendStat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDateLastSendStat['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATE_LAST_SEND_STAT, $opDateLastSendStat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DATE_LAST_SEND_STAT, $opDateLastSendStat, $comparison);
    }

    /**
     * Filter the query on the op_attach_file_stats_excel column
     *
     * Example usage:
     * <code>
     * $query->filterByOpAttachFileStatsExcel(true); // WHERE op_attach_file_stats_excel = true
     * $query->filterByOpAttachFileStatsExcel('yes'); // WHERE op_attach_file_stats_excel = true
     * </code>
     *
     * @param     boolean|string $opAttachFileStatsExcel The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpAttachFileStatsExcel($opAttachFileStatsExcel = null, $comparison = null)
    {
        if (is_string($opAttachFileStatsExcel)) {
            $opAttachFileStatsExcel = in_array(strtolower($opAttachFileStatsExcel), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationsPeer::OP_ATTACH_FILE_STATS_EXCEL, $opAttachFileStatsExcel, $comparison);
    }

    /**
     * Filter the query on the op_devis_lang column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDevisLang('fooValue');   // WHERE op_devis_lang = 'fooValue'
     * $query->filterByOpDevisLang('%fooValue%'); // WHERE op_devis_lang LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opDevisLang The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDevisLang($opDevisLang = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opDevisLang)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opDevisLang)) {
                $opDevisLang = str_replace('*', '%', $opDevisLang);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DEVIS_LANG, $opDevisLang, $comparison);
    }

    /**
     * Filter the query on the op_brief_log column
     *
     * Example usage:
     * <code>
     * $query->filterByOpBriefLog('fooValue');   // WHERE op_brief_log = 'fooValue'
     * $query->filterByOpBriefLog('%fooValue%'); // WHERE op_brief_log LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opBriefLog The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpBriefLog($opBriefLog = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opBriefLog)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opBriefLog)) {
                $opBriefLog = str_replace('*', '%', $opBriefLog);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_BRIEF_LOG, $opBriefLog, $comparison);
    }

    /**
     * Filter the query on the op_has_mail_archiv_sent column
     *
     * Example usage:
     * <code>
     * $query->filterByOpHasMailArchivSent(true); // WHERE op_has_mail_archiv_sent = true
     * $query->filterByOpHasMailArchivSent('yes'); // WHERE op_has_mail_archiv_sent = true
     * </code>
     *
     * @param     boolean|string $opHasMailArchivSent The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpHasMailArchivSent($opHasMailArchivSent = null, $comparison = null)
    {
        if (is_string($opHasMailArchivSent)) {
            $opHasMailArchivSent = in_array(strtolower($opHasMailArchivSent), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OperationsPeer::OP_HAS_MAIL_ARCHIV_SENT, $opHasMailArchivSent, $comparison);
    }

    /**
     * Filter the query on the cl_site_id_for_log column
     *
     * Example usage:
     * <code>
     * $query->filterByClSiteIdForLog(1234); // WHERE cl_site_id_for_log = 1234
     * $query->filterByClSiteIdForLog(array(12, 34)); // WHERE cl_site_id_for_log IN (12, 34)
     * $query->filterByClSiteIdForLog(array('min' => 12)); // WHERE cl_site_id_for_log >= 12
     * $query->filterByClSiteIdForLog(array('max' => 12)); // WHERE cl_site_id_for_log <= 12
     * </code>
     *
     * @see       filterByClientSiteForLog()
     *
     * @param     mixed $clSiteIdForLog The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByClSiteIdForLog($clSiteIdForLog = null, $comparison = null)
    {
        if (is_array($clSiteIdForLog)) {
            $useMinMax = false;
            if (isset($clSiteIdForLog['min'])) {
                $this->addUsingAlias(OperationsPeer::CL_SITE_ID_FOR_LOG, $clSiteIdForLog['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clSiteIdForLog['max'])) {
                $this->addUsingAlias(OperationsPeer::CL_SITE_ID_FOR_LOG, $clSiteIdForLog['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::CL_SITE_ID_FOR_LOG, $clSiteIdForLog, $comparison);
    }

    /**
     * Filter the query on the op_date_last_compil_data column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDateLastCompilData('2011-03-14'); // WHERE op_date_last_compil_data = '2011-03-14'
     * $query->filterByOpDateLastCompilData('now'); // WHERE op_date_last_compil_data = '2011-03-14'
     * $query->filterByOpDateLastCompilData(array('max' => 'yesterday')); // WHERE op_date_last_compil_data < '2011-03-13'
     * </code>
     *
     * @param     mixed $opDateLastCompilData The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDateLastCompilData($opDateLastCompilData = null, $comparison = null)
    {
        if (is_array($opDateLastCompilData)) {
            $useMinMax = false;
            if (isset($opDateLastCompilData['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATE_LAST_COMPIL_DATA, $opDateLastCompilData['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDateLastCompilData['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATE_LAST_COMPIL_DATA, $opDateLastCompilData['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DATE_LAST_COMPIL_DATA, $opDateLastCompilData, $comparison);
    }

    /**
     * Filter the query on the op_ct_fact_addr_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpCtFactAddrId(1234); // WHERE op_ct_fact_addr_id = 1234
     * $query->filterByOpCtFactAddrId(array(12, 34)); // WHERE op_ct_fact_addr_id IN (12, 34)
     * $query->filterByOpCtFactAddrId(array('min' => 12)); // WHERE op_ct_fact_addr_id >= 12
     * $query->filterByOpCtFactAddrId(array('max' => 12)); // WHERE op_ct_fact_addr_id <= 12
     * </code>
     *
     * @see       filterByInvoicingAddressContact()
     *
     * @param     mixed $opCtFactAddrId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpCtFactAddrId($opCtFactAddrId = null, $comparison = null)
    {
        if (is_array($opCtFactAddrId)) {
            $useMinMax = false;
            if (isset($opCtFactAddrId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_CT_FACT_ADDR_ID, $opCtFactAddrId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opCtFactAddrId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_CT_FACT_ADDR_ID, $opCtFactAddrId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_CT_FACT_ADDR_ID, $opCtFactAddrId, $comparison);
    }

    /**
     * Filter the query on the op_parent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpParentId(1234); // WHERE op_parent_id = 1234
     * $query->filterByOpParentId(array(12, 34)); // WHERE op_parent_id IN (12, 34)
     * $query->filterByOpParentId(array('min' => 12)); // WHERE op_parent_id >= 12
     * $query->filterByOpParentId(array('max' => 12)); // WHERE op_parent_id <= 12
     * </code>
     *
     * @see       filterByOperationsRelatedByOpParentId()
     *
     * @param     mixed $opParentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpParentId($opParentId = null, $comparison = null)
    {
        if (is_array($opParentId)) {
            $useMinMax = false;
            if (isset($opParentId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_PARENT_ID, $opParentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opParentId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_PARENT_ID, $opParentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_PARENT_ID, $opParentId, $comparison);
    }

    /**
     * Filter the query on the op_date_archivage_end column
     *
     * Example usage:
     * <code>
     * $query->filterByOpDateArchivageEnd('2011-03-14'); // WHERE op_date_archivage_end = '2011-03-14'
     * $query->filterByOpDateArchivageEnd('now'); // WHERE op_date_archivage_end = '2011-03-14'
     * $query->filterByOpDateArchivageEnd(array('max' => 'yesterday')); // WHERE op_date_archivage_end < '2011-03-13'
     * </code>
     *
     * @param     mixed $opDateArchivageEnd The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpDateArchivageEnd($opDateArchivageEnd = null, $comparison = null)
    {
        if (is_array($opDateArchivageEnd)) {
            $useMinMax = false;
            if (isset($opDateArchivageEnd['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATE_ARCHIVAGE_END, $opDateArchivageEnd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opDateArchivageEnd['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_DATE_ARCHIVAGE_END, $opDateArchivageEnd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_DATE_ARCHIVAGE_END, $opDateArchivageEnd, $comparison);
    }

    /**
     * Filter the query on the op_classification_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOpClassificationId(1234); // WHERE op_classification_id = 1234
     * $query->filterByOpClassificationId(array(12, 34)); // WHERE op_classification_id IN (12, 34)
     * $query->filterByOpClassificationId(array('min' => 12)); // WHERE op_classification_id >= 12
     * $query->filterByOpClassificationId(array('max' => 12)); // WHERE op_classification_id <= 12
     * </code>
     *
     * @see       filterByROperationClassifications()
     *
     * @param     mixed $opClassificationId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function filterByOpClassificationId($opClassificationId = null, $comparison = null)
    {
        if (is_array($opClassificationId)) {
            $useMinMax = false;
            if (isset($opClassificationId['min'])) {
                $this->addUsingAlias(OperationsPeer::OP_CLASSIFICATION_ID, $opClassificationId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opClassificationId['max'])) {
                $this->addUsingAlias(OperationsPeer::OP_CLASSIFICATION_ID, $opClassificationId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OperationsPeer::OP_CLASSIFICATION_ID, $opClassificationId, $comparison);
    }

    /**
     * Filter the query by a related Clients object
     *
     * @param   Clients|PropelObjectCollection $clients The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClients($clients, $comparison = null)
    {
        if ($clients instanceof Clients) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_CL_ID, $clients->getClId(), $comparison);
        } elseif ($clients instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_CL_ID, $clients->toKeyValue('PrimaryKey', 'ClId'), $comparison);
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
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinClients($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useClientsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClients($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Clients', 'ClientsQuery');
    }

    /**
     * Filter the query by a related Contacts object
     *
     * @param   Contacts|PropelObjectCollection $contacts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContactClient($contacts, $comparison = null)
    {
        if ($contacts instanceof Contacts) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_CT_ID, $contacts->getCtId(), $comparison);
        } elseif ($contacts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_CT_ID, $contacts->toKeyValue('PrimaryKey', 'CtId'), $comparison);
        } else {
            throw new PropelException('filterByContactClient() only accepts arguments of type Contacts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ContactClient relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinContactClient($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ContactClient');

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
            $this->addJoinObject($join, 'ContactClient');
        }

        return $this;
    }

    /**
     * Use the ContactClient relation Contacts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContactsQuery A secondary query class using the current class as primary query
     */
    public function useContactClientQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinContactClient($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ContactClient', 'ContactsQuery');
    }

    /**
     * Filter the query by a related Contacts object
     *
     * @param   Contacts|PropelObjectCollection $contacts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContactFacturation($contacts, $comparison = null)
    {
        if ($contacts instanceof Contacts) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_CT_FACT_ID, $contacts->getCtId(), $comparison);
        } elseif ($contacts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_CT_FACT_ID, $contacts->toKeyValue('PrimaryKey', 'CtId'), $comparison);
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
     * @return OperationsQuery The current query, for fluid interface
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
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUserDC($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_DC_ID, $users->getUserId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_DC_ID, $users->toKeyValue('PrimaryKey', 'UserId'), $comparison);
        } else {
            throw new PropelException('filterByUserDC() only accepts arguments of type Users or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserDC relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinUserDC($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserDC');

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
            $this->addJoinObject($join, 'UserDC');
        }

        return $this;
    }

    /**
     * Use the UserDC relation Users object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsersQuery A secondary query class using the current class as primary query
     */
    public function useUserDCQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUserDC($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserDC', 'UsersQuery');
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUserCP($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_CP_ID, $users->getUserId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_CP_ID, $users->toKeyValue('PrimaryKey', 'UserId'), $comparison);
        } else {
            throw new PropelException('filterByUserCP() only accepts arguments of type Users or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserCP relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinUserCP($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserCP');

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
            $this->addJoinObject($join, 'UserCP');
        }

        return $this;
    }

    /**
     * Use the UserCP relation Users object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsersQuery A secondary query class using the current class as primary query
     */
    public function useUserCPQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUserCP($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserCP', 'UsersQuery');
    }

    /**
     * Filter the query by a related Users object
     *
     * @param   Users|PropelObjectCollection $users The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUserCdp($users, $comparison = null)
    {
        if ($users instanceof Users) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_CDP_ID, $users->getUserId(), $comparison);
        } elseif ($users instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_CDP_ID, $users->toKeyValue('PrimaryKey', 'UserId'), $comparison);
        } else {
            throw new PropelException('filterByUserCdp() only accepts arguments of type Users or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserCdp relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinUserCdp($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserCdp');

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
            $this->addJoinObject($join, 'UserCdp');
        }

        return $this;
    }

    /**
     * Use the UserCdp relation Users object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsersQuery A secondary query class using the current class as primary query
     */
    public function useUserCdpQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUserCdp($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserCdp', 'UsersQuery');
    }

    /**
     * Filter the query by a related ClientFactureOptions object
     *
     * @param   ClientFactureOptions|PropelObjectCollection $clientFactureOptions The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientFactureOptions($clientFactureOptions, $comparison = null)
    {
        if ($clientFactureOptions instanceof ClientFactureOptions) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_CL_ID, $clientFactureOptions->getClId(), $comparison);
        } elseif ($clientFactureOptions instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_CL_ID, $clientFactureOptions->toKeyValue('PrimaryKey', 'ClId'), $comparison);
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
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinClientFactureOptions($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useClientFactureOptionsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClientFactureOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientFactureOptions', 'ClientFactureOptionsQuery');
    }

    /**
     * Filter the query by a related ClientContratOptions object
     *
     * @param   ClientContratOptions|PropelObjectCollection $clientContratOptions The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientContratOptions($clientContratOptions, $comparison = null)
    {
        if ($clientContratOptions instanceof ClientContratOptions) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_CL_ID, $clientContratOptions->getClId(), $comparison);
        } elseif ($clientContratOptions instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_CL_ID, $clientContratOptions->toKeyValue('PrimaryKey', 'ClId'), $comparison);
        } else {
            throw new PropelException('filterByClientContratOptions() only accepts arguments of type ClientContratOptions or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientContratOptions relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinClientContratOptions($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientContratOptions');

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
            $this->addJoinObject($join, 'ClientContratOptions');
        }

        return $this;
    }

    /**
     * Use the ClientContratOptions relation ClientContratOptions object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientContratOptionsQuery A secondary query class using the current class as primary query
     */
    public function useClientContratOptionsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClientContratOptions($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientContratOptions', 'ClientContratOptionsQuery');
    }

    /**
     * Filter the query by a related ClientSites object
     *
     * @param   ClientSites|PropelObjectCollection $clientSites The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClientSiteForLog($clientSites, $comparison = null)
    {
        if ($clientSites instanceof ClientSites) {
            return $this
                ->addUsingAlias(OperationsPeer::CL_SITE_ID_FOR_LOG, $clientSites->getClSiteId(), $comparison);
        } elseif ($clientSites instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::CL_SITE_ID_FOR_LOG, $clientSites->toKeyValue('PrimaryKey', 'ClSiteId'), $comparison);
        } else {
            throw new PropelException('filterByClientSiteForLog() only accepts arguments of type ClientSites or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClientSiteForLog relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinClientSiteForLog($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClientSiteForLog');

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
            $this->addJoinObject($join, 'ClientSiteForLog');
        }

        return $this;
    }

    /**
     * Use the ClientSiteForLog relation ClientSites object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClientSitesQuery A secondary query class using the current class as primary query
     */
    public function useClientSiteForLogQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClientSiteForLog($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClientSiteForLog', 'ClientSitesQuery');
    }

    /**
     * Filter the query by a related GedelogOperationParams object
     *
     * @param   GedelogOperationParams|PropelObjectCollection $gedelogOperationParams The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGedelogOperationParams($gedelogOperationParams, $comparison = null)
    {
        if ($gedelogOperationParams instanceof GedelogOperationParams) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $gedelogOperationParams->getOpId(), $comparison);
        } elseif ($gedelogOperationParams instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $gedelogOperationParams->toKeyValue('PrimaryKey', 'OpId'), $comparison);
        } else {
            throw new PropelException('filterByGedelogOperationParams() only accepts arguments of type GedelogOperationParams or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GedelogOperationParams relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinGedelogOperationParams($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GedelogOperationParams');

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
            $this->addJoinObject($join, 'GedelogOperationParams');
        }

        return $this;
    }

    /**
     * Use the GedelogOperationParams relation GedelogOperationParams object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GedelogOperationParamsQuery A secondary query class using the current class as primary query
     */
    public function useGedelogOperationParamsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGedelogOperationParams($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GedelogOperationParams', 'GedelogOperationParamsQuery');
    }

    /**
     * Filter the query by a related ROperationStatus object
     *
     * @param   ROperationStatus|PropelObjectCollection $rOperationStatus The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationStatus($rOperationStatus, $comparison = null)
    {
        if ($rOperationStatus instanceof ROperationStatus) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_STATUS_ID, $rOperationStatus->getOsId(), $comparison);
        } elseif ($rOperationStatus instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_STATUS_ID, $rOperationStatus->toKeyValue('PrimaryKey', 'OsId'), $comparison);
        } else {
            throw new PropelException('filterByROperationStatus() only accepts arguments of type ROperationStatus or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationStatus relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinROperationStatus($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationStatus');

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
            $this->addJoinObject($join, 'ROperationStatus');
        }

        return $this;
    }

    /**
     * Use the ROperationStatus relation ROperationStatus object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationStatusQuery A secondary query class using the current class as primary query
     */
    public function useROperationStatusQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationStatus($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationStatus', 'ROperationStatusQuery');
    }

    /**
     * Filter the query by a related RCustomActivites object
     *
     * @param   RCustomActivites|PropelObjectCollection $rCustomActivites The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRCustomActivites($rCustomActivites, $comparison = null)
    {
        if ($rCustomActivites instanceof RCustomActivites) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ACT_ID, $rCustomActivites->getActId(), $comparison);
        } elseif ($rCustomActivites instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_ACT_ID, $rCustomActivites->toKeyValue('PrimaryKey', 'ActId'), $comparison);
        } else {
            throw new PropelException('filterByRCustomActivites() only accepts arguments of type RCustomActivites or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RCustomActivites relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinRCustomActivites($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RCustomActivites');

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
            $this->addJoinObject($join, 'RCustomActivites');
        }

        return $this;
    }

    /**
     * Use the RCustomActivites relation RCustomActivites object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RCustomActivitesQuery A secondary query class using the current class as primary query
     */
    public function useRCustomActivitesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRCustomActivites($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RCustomActivites', 'RCustomActivitesQuery');
    }

    /**
     * Filter the query by a related ROperationType object
     *
     * @param   ROperationType|PropelObjectCollection $rOperationType The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationType($rOperationType, $comparison = null)
    {
        if ($rOperationType instanceof ROperationType) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_TYPE_ID, $rOperationType->getOtId(), $comparison);
        } elseif ($rOperationType instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_TYPE_ID, $rOperationType->toKeyValue('PrimaryKey', 'OtId'), $comparison);
        } else {
            throw new PropelException('filterByROperationType() only accepts arguments of type ROperationType or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationType relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinROperationType($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationType');

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
            $this->addJoinObject($join, 'ROperationType');
        }

        return $this;
    }

    /**
     * Use the ROperationType relation ROperationType object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationType($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationType', 'ROperationTypeQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSub object
     *
     * @param   ROperationTypeSub|PropelObjectCollection $rOperationTypeSub The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationTypeSub($rOperationTypeSub, $comparison = null)
    {
        if ($rOperationTypeSub instanceof ROperationTypeSub) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_SUBTYPE_ID, $rOperationTypeSub->getOstId(), $comparison);
        } elseif ($rOperationTypeSub instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_SUBTYPE_ID, $rOperationTypeSub->toKeyValue('PrimaryKey', 'OstId'), $comparison);
        } else {
            throw new PropelException('filterByROperationTypeSub() only accepts arguments of type ROperationTypeSub or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationTypeSub relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinROperationTypeSub($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationTypeSub');

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
            $this->addJoinObject($join, 'ROperationTypeSub');
        }

        return $this;
    }

    /**
     * Use the ROperationTypeSub relation ROperationTypeSub object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubQuery A secondary query class using the current class as primary query
     */
    public function useROperationTypeSubQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationTypeSub($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationTypeSub', 'ROperationTypeSubQuery');
    }

    /**
     * Filter the query by a related OperationsExt object
     *
     * @param   OperationsExt|PropelObjectCollection $operationsExt The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationsExt($operationsExt, $comparison = null)
    {
        if ($operationsExt instanceof OperationsExt) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $operationsExt->getOpId(), $comparison);
        } elseif ($operationsExt instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $operationsExt->toKeyValue('PrimaryKey', 'OpId'), $comparison);
        } else {
            throw new PropelException('filterByOperationsExt() only accepts arguments of type OperationsExt or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationsExt relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinOperationsExt($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationsExt');

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
            $this->addJoinObject($join, 'OperationsExt');
        }

        return $this;
    }

    /**
     * Use the OperationsExt relation OperationsExt object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsExtQuery A secondary query class using the current class as primary query
     */
    public function useOperationsExtQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationsExt($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationsExt', 'OperationsExtQuery');
    }

    /**
     * Filter the query by a related RDelaiDevis object
     *
     * @param   RDelaiDevis|PropelObjectCollection $rDelaiDevis The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRDelaiDevis($rDelaiDevis, $comparison = null)
    {
        if ($rDelaiDevis instanceof RDelaiDevis) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_DELAI_DEVIS_ID, $rDelaiDevis->getRDelaiDevisId(), $comparison);
        } elseif ($rDelaiDevis instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_DELAI_DEVIS_ID, $rDelaiDevis->toKeyValue('PrimaryKey', 'RDelaiDevisId'), $comparison);
        } else {
            throw new PropelException('filterByRDelaiDevis() only accepts arguments of type RDelaiDevis or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RDelaiDevis relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinRDelaiDevis($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RDelaiDevis');

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
            $this->addJoinObject($join, 'RDelaiDevis');
        }

        return $this;
    }

    /**
     * Use the RDelaiDevis relation RDelaiDevis object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RDelaiDevisQuery A secondary query class using the current class as primary query
     */
    public function useRDelaiDevisQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRDelaiDevis($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RDelaiDevis', 'RDelaiDevisQuery');
    }

    /**
     * Filter the query by a related Contacts object
     *
     * @param   Contacts|PropelObjectCollection $contacts The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInvoicingAddressContact($contacts, $comparison = null)
    {
        if ($contacts instanceof Contacts) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_CT_FACT_ADDR_ID, $contacts->getCtId(), $comparison);
        } elseif ($contacts instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_CT_FACT_ADDR_ID, $contacts->toKeyValue('PrimaryKey', 'CtId'), $comparison);
        } else {
            throw new PropelException('filterByInvoicingAddressContact() only accepts arguments of type Contacts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvoicingAddressContact relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinInvoicingAddressContact($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvoicingAddressContact');

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
            $this->addJoinObject($join, 'InvoicingAddressContact');
        }

        return $this;
    }

    /**
     * Use the InvoicingAddressContact relation Contacts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContactsQuery A secondary query class using the current class as primary query
     */
    public function useInvoicingAddressContactQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinInvoicingAddressContact($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvoicingAddressContact', 'ContactsQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationsRelatedByOpParentId($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_PARENT_ID, $operations->getOpId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_PARENT_ID, $operations->toKeyValue('PrimaryKey', 'OpId'), $comparison);
        } else {
            throw new PropelException('filterByOperationsRelatedByOpParentId() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationsRelatedByOpParentId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinOperationsRelatedByOpParentId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationsRelatedByOpParentId');

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
            $this->addJoinObject($join, 'OperationsRelatedByOpParentId');
        }

        return $this;
    }

    /**
     * Use the OperationsRelatedByOpParentId relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsRelatedByOpParentIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationsRelatedByOpParentId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationsRelatedByOpParentId', 'OperationsQuery');
    }

    /**
     * Filter the query by a related ROperationUniverses object
     *
     * @param   ROperationUniverses|PropelObjectCollection $rOperationUniverses The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationUniverse($rOperationUniverses, $comparison = null)
    {
        if ($rOperationUniverses instanceof ROperationUniverses) {
            return $this
                ->addUsingAlias(OperationsPeer::OPERATION_UNIVERSE_ID, $rOperationUniverses->getROperationUniverseId(), $comparison);
        } elseif ($rOperationUniverses instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OPERATION_UNIVERSE_ID, $rOperationUniverses->toKeyValue('PrimaryKey', 'ROperationUniverseId'), $comparison);
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
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinOperationUniverse($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useOperationUniverseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationMedia($rOperationMedias, $comparison = null)
    {
        if ($rOperationMedias instanceof ROperationMedias) {
            return $this
                ->addUsingAlias(OperationsPeer::OPERATION_MEDIA_ID, $rOperationMedias->getROperationMediaId(), $comparison);
        } elseif ($rOperationMedias instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OPERATION_MEDIA_ID, $rOperationMedias->toKeyValue('PrimaryKey', 'ROperationMediaId'), $comparison);
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
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinOperationMedia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useOperationMediaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationMedia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationMedia', 'ROperationMediasQuery');
    }

    /**
     * Filter the query by a related ROperationTypeSubTpl object
     *
     * @param   ROperationTypeSubTpl|PropelObjectCollection $rOperationTypeSubTpl The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationTemplate($rOperationTypeSubTpl, $comparison = null)
    {
        if ($rOperationTypeSubTpl instanceof ROperationTypeSubTpl) {
            return $this
                ->addUsingAlias(OperationsPeer::OPERATION_OST_TPL_ID, $rOperationTypeSubTpl->getOstTplId(), $comparison);
        } elseif ($rOperationTypeSubTpl instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OPERATION_OST_TPL_ID, $rOperationTypeSubTpl->toKeyValue('PrimaryKey', 'OstTplId'), $comparison);
        } else {
            throw new PropelException('filterByOperationTemplate() only accepts arguments of type ROperationTypeSubTpl or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationTemplate relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinOperationTemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationTemplate');

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
            $this->addJoinObject($join, 'OperationTemplate');
        }

        return $this;
    }

    /**
     * Use the OperationTemplate relation ROperationTypeSubTpl object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationTypeSubTplQuery A secondary query class using the current class as primary query
     */
    public function useOperationTemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationTemplate($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationTemplate', 'ROperationTypeSubTplQuery');
    }

    /**
     * Filter the query by a related ROperationClassifications object
     *
     * @param   ROperationClassifications|PropelObjectCollection $rOperationClassifications The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByROperationClassifications($rOperationClassifications, $comparison = null)
    {
        if ($rOperationClassifications instanceof ROperationClassifications) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_CLASSIFICATION_ID, $rOperationClassifications->getROperationClassificationId(), $comparison);
        } elseif ($rOperationClassifications instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OperationsPeer::OP_CLASSIFICATION_ID, $rOperationClassifications->toKeyValue('PrimaryKey', 'ROperationClassificationId'), $comparison);
        } else {
            throw new PropelException('filterByROperationClassifications() only accepts arguments of type ROperationClassifications or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ROperationClassifications relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinROperationClassifications($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ROperationClassifications');

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
            $this->addJoinObject($join, 'ROperationClassifications');
        }

        return $this;
    }

    /**
     * Use the ROperationClassifications relation ROperationClassifications object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ROperationClassificationsQuery A secondary query class using the current class as primary query
     */
    public function useROperationClassificationsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinROperationClassifications($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ROperationClassifications', 'ROperationClassificationsQuery');
    }

    /**
     * Filter the query by a related Factures object
     *
     * @param   Factures|PropelObjectCollection $factures  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactures($factures, $comparison = null)
    {
        if ($factures instanceof Factures) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $factures->getOpId(), $comparison);
        } elseif ($factures instanceof PropelObjectCollection) {
            return $this
                ->useFacturesQuery()
                ->filterByPrimaryKeys($factures->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactures() only accepts arguments of type Factures or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Factures relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinFactures($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Factures');

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
            $this->addJoinObject($join, 'Factures');
        }

        return $this;
    }

    /**
     * Use the Factures relation Factures object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturesQuery A secondary query class using the current class as primary query
     */
    public function useFacturesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactures($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factures', 'FacturesQuery');
    }

    /**
     * Filter the query by a related LnkOperationOption object
     *
     * @param   LnkOperationOption|PropelObjectCollection $lnkOperationOption  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkOperationOption($lnkOperationOption, $comparison = null)
    {
        if ($lnkOperationOption instanceof LnkOperationOption) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $lnkOperationOption->getOpId(), $comparison);
        } elseif ($lnkOperationOption instanceof PropelObjectCollection) {
            return $this
                ->useLnkOperationOptionQuery()
                ->filterByPrimaryKeys($lnkOperationOption->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkOperationOption() only accepts arguments of type LnkOperationOption or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkOperationOption relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinLnkOperationOption($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkOperationOption');

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
            $this->addJoinObject($join, 'LnkOperationOption');
        }

        return $this;
    }

    /**
     * Use the LnkOperationOption relation LnkOperationOption object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkOperationOptionQuery A secondary query class using the current class as primary query
     */
    public function useLnkOperationOptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkOperationOption($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkOperationOption', 'LnkOperationOptionQuery');
    }

    /**
     * Filter the query by a related LnkOperationsContactsMail object
     *
     * @param   LnkOperationsContactsMail|PropelObjectCollection $lnkOperationsContactsMail  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkOperationsContactsMail($lnkOperationsContactsMail, $comparison = null)
    {
        if ($lnkOperationsContactsMail instanceof LnkOperationsContactsMail) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $lnkOperationsContactsMail->getOpId(), $comparison);
        } elseif ($lnkOperationsContactsMail instanceof PropelObjectCollection) {
            return $this
                ->useLnkOperationsContactsMailQuery()
                ->filterByPrimaryKeys($lnkOperationsContactsMail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkOperationsContactsMail() only accepts arguments of type LnkOperationsContactsMail or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkOperationsContactsMail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinLnkOperationsContactsMail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkOperationsContactsMail');

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
            $this->addJoinObject($join, 'LnkOperationsContactsMail');
        }

        return $this;
    }

    /**
     * Use the LnkOperationsContactsMail relation LnkOperationsContactsMail object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkOperationsContactsMailQuery A secondary query class using the current class as primary query
     */
    public function useLnkOperationsContactsMailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkOperationsContactsMail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkOperationsContactsMail', 'LnkOperationsContactsMailQuery');
    }

    /**
     * Filter the query by a related LnkOperationCountry object
     *
     * @param   LnkOperationCountry|PropelObjectCollection $lnkOperationCountry  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLnkOperationCountry($lnkOperationCountry, $comparison = null)
    {
        if ($lnkOperationCountry instanceof LnkOperationCountry) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $lnkOperationCountry->getOpId(), $comparison);
        } elseif ($lnkOperationCountry instanceof PropelObjectCollection) {
            return $this
                ->useLnkOperationCountryQuery()
                ->filterByPrimaryKeys($lnkOperationCountry->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLnkOperationCountry() only accepts arguments of type LnkOperationCountry or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LnkOperationCountry relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinLnkOperationCountry($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LnkOperationCountry');

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
            $this->addJoinObject($join, 'LnkOperationCountry');
        }

        return $this;
    }

    /**
     * Use the LnkOperationCountry relation LnkOperationCountry object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LnkOperationCountryQuery A secondary query class using the current class as primary query
     */
    public function useLnkOperationCountryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLnkOperationCountry($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LnkOperationCountry', 'LnkOperationCountryQuery');
    }

    /**
     * Filter the query by a related OperationDecouverts object
     *
     * @param   OperationDecouverts|PropelObjectCollection $operationDecouverts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationDecouverts($operationDecouverts, $comparison = null)
    {
        if ($operationDecouverts instanceof OperationDecouverts) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $operationDecouverts->getOpId(), $comparison);
        } elseif ($operationDecouverts instanceof PropelObjectCollection) {
            return $this
                ->useOperationDecouvertsQuery()
                ->filterByPrimaryKeys($operationDecouverts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationDecouverts() only accepts arguments of type OperationDecouverts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationDecouverts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinOperationDecouverts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationDecouverts');

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
            $this->addJoinObject($join, 'OperationDecouverts');
        }

        return $this;
    }

    /**
     * Use the OperationDecouverts relation OperationDecouverts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationDecouvertsQuery A secondary query class using the current class as primary query
     */
    public function useOperationDecouvertsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOperationDecouverts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationDecouverts', 'OperationDecouvertsQuery');
    }

    /**
     * Filter the query by a related OperationPrestations object
     *
     * @param   OperationPrestations|PropelObjectCollection $operationPrestations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrestations($operationPrestations, $comparison = null)
    {
        if ($operationPrestations instanceof OperationPrestations) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $operationPrestations->getOpId(), $comparison);
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
     * @return OperationsQuery The current query, for fluid interface
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
     * Filter the query by a related OperationPrimes object
     *
     * @param   OperationPrimes|PropelObjectCollection $operationPrimes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationPrimes($operationPrimes, $comparison = null)
    {
        if ($operationPrimes instanceof OperationPrimes) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $operationPrimes->getOpId(), $comparison);
        } elseif ($operationPrimes instanceof PropelObjectCollection) {
            return $this
                ->useOperationPrimesQuery()
                ->filterByPrimaryKeys($operationPrimes->getPrimaryKeys())
                ->endUse();
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
     * @return OperationsQuery The current query, for fluid interface
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
     * Filter the query by a related OperationRubriques object
     *
     * @param   OperationRubriques|PropelObjectCollection $operationRubriques  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationRubriques($operationRubriques, $comparison = null)
    {
        if ($operationRubriques instanceof OperationRubriques) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $operationRubriques->getOpId(), $comparison);
        } elseif ($operationRubriques instanceof PropelObjectCollection) {
            return $this
                ->useOperationRubriquesQuery()
                ->filterByPrimaryKeys($operationRubriques->getPrimaryKeys())
                ->endUse();
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
     * @return OperationsQuery The current query, for fluid interface
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
     * Filter the query by a related OperationScenarii object
     *
     * @param   OperationScenarii|PropelObjectCollection $operationScenarii  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationScenarii($operationScenarii, $comparison = null)
    {
        if ($operationScenarii instanceof OperationScenarii) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $operationScenarii->getOpId(), $comparison);
        } elseif ($operationScenarii instanceof PropelObjectCollection) {
            return $this
                ->useOperationScenariiQuery()
                ->filterByPrimaryKeys($operationScenarii->getPrimaryKeys())
                ->endUse();
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
     * @return OperationsQuery The current query, for fluid interface
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
     * Filter the query by a related OperationStatuts object
     *
     * @param   OperationStatuts|PropelObjectCollection $operationStatuts  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationStatuts($operationStatuts, $comparison = null)
    {
        if ($operationStatuts instanceof OperationStatuts) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $operationStatuts->getOpId(), $comparison);
        } elseif ($operationStatuts instanceof PropelObjectCollection) {
            return $this
                ->useOperationStatutsQuery()
                ->filterByPrimaryKeys($operationStatuts->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationStatuts() only accepts arguments of type OperationStatuts or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationStatuts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinOperationStatuts($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationStatuts');

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
            $this->addJoinObject($join, 'OperationStatuts');
        }

        return $this;
    }

    /**
     * Use the OperationStatuts relation OperationStatuts object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationStatutsQuery A secondary query class using the current class as primary query
     */
    public function useOperationStatutsQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationStatuts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationStatuts', 'OperationStatutsQuery');
    }

    /**
     * Filter the query by a related OperationTasks object
     *
     * @param   OperationTasks|PropelObjectCollection $operationTasks  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationTasks($operationTasks, $comparison = null)
    {
        if ($operationTasks instanceof OperationTasks) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $operationTasks->getOpId(), $comparison);
        } elseif ($operationTasks instanceof PropelObjectCollection) {
            return $this
                ->useOperationTasksQuery()
                ->filterByPrimaryKeys($operationTasks->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationTasks() only accepts arguments of type OperationTasks or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationTasks relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinOperationTasks($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationTasks');

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
            $this->addJoinObject($join, 'OperationTasks');
        }

        return $this;
    }

    /**
     * Use the OperationTasks relation OperationTasks object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationTasksQuery A secondary query class using the current class as primary query
     */
    public function useOperationTasksQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationTasks($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationTasks', 'OperationTasksQuery');
    }

    /**
     * Filter the query by a related Operations object
     *
     * @param   Operations|PropelObjectCollection $operations  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOperationsRelatedByOpId($operations, $comparison = null)
    {
        if ($operations instanceof Operations) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $operations->getOpParentId(), $comparison);
        } elseif ($operations instanceof PropelObjectCollection) {
            return $this
                ->useOperationsRelatedByOpIdQuery()
                ->filterByPrimaryKeys($operations->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOperationsRelatedByOpId() only accepts arguments of type Operations or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OperationsRelatedByOpId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinOperationsRelatedByOpId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OperationsRelatedByOpId');

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
            $this->addJoinObject($join, 'OperationsRelatedByOpId');
        }

        return $this;
    }

    /**
     * Use the OperationsRelatedByOpId relation Operations object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OperationsQuery A secondary query class using the current class as primary query
     */
    public function useOperationsRelatedByOpIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOperationsRelatedByOpId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OperationsRelatedByOpId', 'OperationsQuery');
    }

    /**
     * Filter the query by a related PlanFacturationDetails object
     *
     * @param   PlanFacturationDetails|PropelObjectCollection $planFacturationDetails  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlanFacturationDetails($planFacturationDetails, $comparison = null)
    {
        if ($planFacturationDetails instanceof PlanFacturationDetails) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $planFacturationDetails->getOpId(), $comparison);
        } elseif ($planFacturationDetails instanceof PropelObjectCollection) {
            return $this
                ->usePlanFacturationDetailsQuery()
                ->filterByPrimaryKeys($planFacturationDetails->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPlanFacturationDetails() only accepts arguments of type PlanFacturationDetails or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PlanFacturationDetails relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinPlanFacturationDetails($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PlanFacturationDetails');

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
            $this->addJoinObject($join, 'PlanFacturationDetails');
        }

        return $this;
    }

    /**
     * Use the PlanFacturationDetails relation PlanFacturationDetails object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlanFacturationDetailsQuery A secondary query class using the current class as primary query
     */
    public function usePlanFacturationDetailsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPlanFacturationDetails($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PlanFacturationDetails', 'PlanFacturationDetailsQuery');
    }

    /**
     * Filter the query by a related PlanFacturationParams object
     *
     * @param   PlanFacturationParams|PropelObjectCollection $planFacturationParams  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlanFacturationParams($planFacturationParams, $comparison = null)
    {
        if ($planFacturationParams instanceof PlanFacturationParams) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $planFacturationParams->getOpId(), $comparison);
        } elseif ($planFacturationParams instanceof PropelObjectCollection) {
            return $this
                ->usePlanFacturationParamsQuery()
                ->filterByPrimaryKeys($planFacturationParams->getPrimaryKeys())
                ->endUse();
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
     * @return OperationsQuery The current query, for fluid interface
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
     * Filter the query by a related FactureEditionHistory object
     *
     * @param   FactureEditionHistory|PropelObjectCollection $factureEditionHistory  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OperationsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactureEditionHistory($factureEditionHistory, $comparison = null)
    {
        if ($factureEditionHistory instanceof FactureEditionHistory) {
            return $this
                ->addUsingAlias(OperationsPeer::OP_ID, $factureEditionHistory->getOpId(), $comparison);
        } elseif ($factureEditionHistory instanceof PropelObjectCollection) {
            return $this
                ->useFactureEditionHistoryQuery()
                ->filterByPrimaryKeys($factureEditionHistory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactureEditionHistory() only accepts arguments of type FactureEditionHistory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FactureEditionHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function joinFactureEditionHistory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FactureEditionHistory');

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
            $this->addJoinObject($join, 'FactureEditionHistory');
        }

        return $this;
    }

    /**
     * Use the FactureEditionHistory relation FactureEditionHistory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FactureEditionHistoryQuery A secondary query class using the current class as primary query
     */
    public function useFactureEditionHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactureEditionHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactureEditionHistory', 'FactureEditionHistoryQuery');
    }

    /**
     * Filter the query by a related RRubriquesType object
     * using the operation_rubriques table as cross reference
     *
     * @param   RRubriquesType $rRubriquesType the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   OperationsQuery The current query, for fluid interface
     */
    public function filterByRRubriquesType($rRubriquesType, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useOperationRubriquesQuery()
            ->filterByRRubriquesType($rRubriquesType, $comparison)
            ->endUse();
    }

    /**
     * Filter the query by a related RTvaType object
     * using the operation_rubriques table as cross reference
     *
     * @param   RTvaType $rTvaType the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   OperationsQuery The current query, for fluid interface
     */
    public function filterByRTvaType($rTvaType, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useOperationRubriquesQuery()
            ->filterByRTvaType($rTvaType, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   Operations $operations Object to remove from the list of results
     *
     * @return OperationsQuery The current query, for fluid interface
     */
    public function prune($operations = null)
    {
        if ($operations) {
            $this->addUsingAlias(OperationsPeer::OP_ID, $operations->getOpId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
