
/****** Object:  View [dbo].[View_Facture_Listing]    Script Date: 03/27/2014 17:37:39 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

ALTER VIEW [dbo].[View_Facture_Listing]
AS
SELECT     dbo.factures.fact_id, dbo.factures.r_fact_type_id, dbo.factures.op_id, dbo.factures.cl_id, dbo.factures.ct_id, dbo.factures.dc_id, dbo.factures.fact_numero, 
                      dbo.factures.fact_num_cmd, dbo.factures.fact_montant_ht, dbo.factures.fact_montant_ttc, dbo.factures.fact_montant_encaisse, dbo.factures.fact_destinataire, 
                      dbo.factures.fact_attention, dbo.factures.fact_adresse1, dbo.factures.fact_adresse2, dbo.factures.fact_adresse3, dbo.factures.fact_code_postal, dbo.factures.fact_ville, 
                      dbo.factures.fact_pays, dbo.factures.fact_user_edition, dbo.factures.fact_verrou, dbo.factures.fact_parent_id, dbo.factures.fact_annul_id, CONVERT(nvarchar, 
                      dbo.factures.fact_date_echeance, 103) AS fact_date_echeance_fr, dbo.factures.fact_taux_adf, dbo.factures.date_create AS fact_date_create, 
                      dbo.factures.date_modify AS fact_date_modify, dbo.factures.user_id, dbo.factures.user_modify, dbo.r_operation_type.ot_libelle, dbo.operations.op_number, 
                      dbo.clients.cl_libelle, dbo.factures.fact_reference, dbo.r_facture_statuts.r_fact_stat_libelle, dbo.r_facture_types.r_fact_type_libelle, dbo.operations.op_act_id, 
                      dbo.operations.op_type_id, dbo.operations.op_status_id, dbo.factures.fact_montant_ttc - dbo.factures.fact_montant_encaisse AS fact_solde, 
                      CASE WHEN (dbo.r_facture_statuts.r_fact_stat_id != 4 AND fact_montant_encaisse < fact_montant_ttc) THEN 1 ELSE 0 END AS fact_has_paiement_partiel, 
                      dbo.factures.fact_status_id,
                          (SELECT     CONVERT(nvarchar, date_create, 103) AS Expr1
                            FROM          dbo.View_Facture_Status
                            WHERE      (fact_id = dbo.factures.fact_id) AND (r_fact_stat_id = 4)) AS fact_date_encaisse_fr,
                          (SELECT     CONVERT(nvarchar, date_create, 103) AS Expr1
                            FROM          dbo.View_Facture_Status AS View_Facture_Status_2
                            WHERE      (fact_id = dbo.factures.fact_id) AND (r_fact_stat_id = 3)) AS fact_date_edition_fr,
                          (SELECT     CONVERT(nvarchar, date_create, 103) AS Expr1
                            FROM          dbo.View_Facture_Status AS View_Facture_Status_1
                            WHERE      (fact_id = dbo.factures.fact_id) AND (r_fact_stat_id = 2)) AS fact_date_validation_fr, dbo.plan_facturation_params.plan_fact_periode_id, 
                      dbo.plan_facturation_params.plan_fact_periode_type_id, CONVERT(nvarchar, dbo.factures.date_create, 103) AS fact_date_create_fr, CONVERT(nvarchar, 
                      dbo.factures.date_modify, 103) AS fact_date_modify_fr, dbo.r_facture_options_echeances.fact_opt_echeance_libelle AS fact_echeance_libelle, 
                      CASE WHEN (GETDATE() > dbo.factures.fact_date_echeance AND fact_status_id != 4) THEN 1 ELSE 0 END AS fact_is_echu, 
                      dbo.plan_facturation_params.plan_fact_note_interne
FROM         dbo.r_facture_types RIGHT OUTER JOIN
                      dbo.factures INNER JOIN
                      dbo.r_facture_statuts ON dbo.factures.fact_status_id = dbo.r_facture_statuts.r_fact_stat_id INNER JOIN
                      dbo.r_facture_options_echeances ON dbo.factures.fact_echeance_id = dbo.r_facture_options_echeances.fact_opt_echeance_id ON 
                      dbo.r_facture_types.r_fact_type_id = dbo.factures.r_fact_type_id LEFT OUTER JOIN
                      dbo.clients ON dbo.factures.cl_id = dbo.clients.cl_id LEFT OUTER JOIN
                      dbo.plan_facturation_params RIGHT OUTER JOIN
                      dbo.operations ON dbo.plan_facturation_params.op_id = dbo.operations.op_id ON dbo.factures.op_id = dbo.operations.op_id LEFT OUTER JOIN
                      dbo.r_operation_type ON dbo.operations.op_type_id = dbo.r_operation_type.ot_id

GO


/****** Object:  View [dbo].[View_Operation_Tasks_Listing]    Script Date: 03/28/2014 17:01:16 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

ALTER VIEW [dbo].[View_Operation_Tasks_Listing]
AS
SELECT     dbo.operation_tasks.op_task_id, dbo.operation_tasks.op_id, dbo.operations.op_number, dbo.operation_tasks.op_task_type_id, 
                      dbo.operation_tasks.op_task_deadline, dbo.operation_tasks.op_task_alerte, dbo.operation_tasks.op_task_retard, dbo.operation_tasks.op_task_duree_estim, 
                      dbo.operation_tasks.op_task_duree_reelle, dbo.operation_tasks.op_task_done, dbo.r_operation_tasks_type.r_op_task_type_libelle, 
                      dbo.operation_tasks.op_task_comments, dbo.operation_tasks.user_id, users_assign.user_nom + N' ' + users_assign.user_prenom AS assign_to_user, 
                      users_notify.user_nom + N' ' + users_notify.user_prenom AS notify_to_user, acl_groups_notify.group_name AS notify_to_group, 
                      acl_groups_assign.group_name AS assign_to_group, dbo.operation_tasks.op_task_assign_to_user, dbo.operation_tasks.op_task_notify_to_user, 
                      dbo.operation_tasks.op_task_assign_to_group, dbo.operation_tasks.op_task_notify_to_group, 
                      user_create.user_nom + N' ' + user_create.user_prenom AS user_create_name, dbo.operation_tasks.op_task_detail, dbo.operations.op_cp_id, 
                      dbo.operations.op_dc_id, dbo.operations.op_libelle, CONVERT(nvarchar, dbo.operation_tasks.op_task_deadline, 103) AS op_task_deadline_fr, CONVERT(nvarchar, 
                      dbo.operation_tasks.op_task_alerte, 103) AS op_task_alerte_fr, CONVERT(nvarchar, dbo.operation_tasks.op_task_retard, 103) AS op_task_retard_fr, 
                      CONVERT(nvarchar, dbo.operation_tasks.op_task_done, 103) AS op_task_done_fr
FROM         dbo.users AS users_assign RIGHT OUTER JOIN
                      dbo.operation_tasks ON users_assign.user_id = dbo.operation_tasks.op_task_assign_to_user LEFT OUTER JOIN
                      dbo.users AS users_notify ON dbo.operation_tasks.op_task_notify_to_user = users_notify.user_id LEFT OUTER JOIN
                      dbo.acl_groups AS acl_groups_notify ON dbo.operation_tasks.op_task_notify_to_group = acl_groups_notify.group_id LEFT OUTER JOIN
                      dbo.acl_groups AS acl_groups_assign ON dbo.operation_tasks.op_task_assign_to_group = acl_groups_assign.group_id LEFT OUTER JOIN
                      dbo.operations ON dbo.operation_tasks.op_id = dbo.operations.op_id LEFT OUTER JOIN
                      dbo.users AS user_create ON dbo.operation_tasks.user_id = user_create.user_id LEFT OUTER JOIN
                      dbo.r_operation_tasks_type ON dbo.operation_tasks.op_task_type_id = dbo.r_operation_tasks_type.r_op_task_type_id

GO






/****** Object:  View [dbo].[View_Compta_Decouverts]    Script Date: 03/28/2014 17:19:31 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

ALTER VIEW [dbo].[View_Compta_Decouverts]
AS
SELECT     dbo.operation_decouverts.op_dec_id, dbo.clients.cl_id, dbo.clients.cl_libelle, dbo.operation_decouverts.op_dec_mont_demande, 
                      dbo.operation_decouverts.op_dec_mont_accord, dbo.operation_decouverts.op_dec_statut_id, dbo.operations.op_id, dbo.operations.op_number, 
                      dbo.operation_decouverts.date_create, dbo.operation_decouverts.date_modify, dbo.r_operation_status.os_libelle, 
                      dbo.View_Compta_Operation_Facturation.montant_non_encaisse_echu, dbo.View_Compta_Operation_Facturation.montant_non_encaisse_total, 
                      dbo.View_Compta_Operation_Facturation.montant_facture_total, dbo.View_Compta_Operation_Facturation.montant_encaisse_total, CONVERT(nvarchar, 
                      dbo.operation_decouverts.date_create, 103) AS date_create_fr, CONVERT(nvarchar, dbo.operation_decouverts.date_modify, 103) AS date_modify_fr
FROM         dbo.View_Compta_Operation_Facturation INNER JOIN
                      dbo.operations ON dbo.View_Compta_Operation_Facturation.op_id = dbo.operations.op_id RIGHT OUTER JOIN
                      dbo.r_operation_status ON dbo.operations.op_status_id = dbo.r_operation_status.os_id RIGHT OUTER JOIN
                      dbo.operation_decouverts ON dbo.operations.op_id = dbo.operation_decouverts.op_id LEFT OUTER JOIN
                      dbo.clients ON dbo.operations.op_cl_id = dbo.clients.cl_id

GO


