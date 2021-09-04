
/****** Object:  View [dbo].[View_Facture_Listing]    Script Date: 04/28/2014 12:07:45 ******/
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
                      dbo.plan_facturation_params.plan_fact_note_interne, dbo.operations.op_cp_id, users_cp.user_nom + N' ' + users_cp.user_prenom AS op_cp_name
FROM         dbo.users AS users_cp INNER JOIN
                      dbo.operations ON users_cp.user_id = dbo.operations.op_cp_id LEFT OUTER JOIN
                      dbo.plan_facturation_params ON dbo.operations.op_id = dbo.plan_facturation_params.op_id RIGHT OUTER JOIN
                      dbo.r_facture_types RIGHT OUTER JOIN
                      dbo.factures INNER JOIN
                      dbo.r_facture_statuts ON dbo.factures.fact_status_id = dbo.r_facture_statuts.r_fact_stat_id INNER JOIN
                      dbo.r_facture_options_echeances ON dbo.factures.fact_echeance_id = dbo.r_facture_options_echeances.fact_opt_echeance_id ON 
                      dbo.r_facture_types.r_fact_type_id = dbo.factures.r_fact_type_id LEFT OUTER JOIN
                      dbo.clients ON dbo.factures.cl_id = dbo.clients.cl_id ON dbo.operations.op_id = dbo.factures.op_id LEFT OUTER JOIN
                      dbo.r_operation_type ON dbo.operations.op_type_id = dbo.r_operation_type.ot_id

GO

