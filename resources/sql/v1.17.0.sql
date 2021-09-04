USE [phoenix]
GO

-- *********************** --
-- BLOCK QUERY TYPE CREATE -- 
-- *********************** --

-- 31822 ajout d'une nouvelle table d'historisation des rééditions des factures
CREATE TABLE [dbo].[facture_edition_history](
        [fact_eh_id] [int] IDENTITY(1,1) NOT NULL,
        [fact_eh_user_id] [int] NULL,
        [reedition_date] [datetime] NULL,
        [fact_id] [int] NOT NULL,
	[r_fact_type_id] [tinyint] NOT NULL,
	[op_id] [int] NOT NULL,
	[cl_id] [int] NULL,
	[ct_id] [int] NULL,
	[cl_site_id] [int] NULL,
	[dc_id] [int] NULL,
	[fact_numero] [int] NULL,
	[fact_reference] [nvarchar](30) NULL,
	[fact_lang] [nvarchar](3) NULL,
	[fact_num_cmd] [nvarchar](50) NULL,
	[fact_montant_ht] [numeric](18, 2) NULL,
	[fact_montant_ttc] [numeric](18, 2) NULL,
	[fact_montant_encaisse] [numeric](18, 2) NULL,
	[fact_destinataire] [nvarchar](255) NULL,
	[fact_attention] [nvarchar](60) NULL,
	[fact_adresse1] [nvarchar](255) NULL,
	[fact_adresse2] [nvarchar](255) NULL,
	[fact_adresse3] [nvarchar](255) NULL,
	[fact_code_postal] [nvarchar](50) NULL,
	[fact_ville] [nvarchar](255) NULL,
	[fact_pays] [nvarchar](255) NULL,
	[fact_mention_spec] [nvarchar](4000) NULL,
	[fact_user_edition] [int] NULL,
	[fact_status_id] [tinyint] NULL,
	[fact_verrou] [bit] NULL DEFAULT((0)),
	[fact_has_relance] [bit] NULL DEFAULT((0)),
	[fact_parent_id] [int] NULL,
	[fact_annul_id] [int] NULL,
	[fact_date_echeance] [datetime] NULL,
	[fact_taux_adf] [numeric](18, 4) NULL,
	[fact_date_create] [datetime] NULL,
	[fact_date_modify] [datetime] NULL,
	[fact_user_id] [int] NULL,
	[fact_user_modify] [nchar](10) NULL,
	[fact_echeance_id] [tinyint] NULL,
	[jdv_id] [int] NULL,
	[fact_date] [datetime] NULL,
	[fact_pays_iso3] [nvarchar](5) NULL,
	[fact_email] [nvarchar](255) NULL,

 CONSTRAINT [PK_fact_eh_id] PRIMARY KEY NONCLUSTERED 
(
	[fact_eh_id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE ALTER -- 
-- *********************** --

-- 31852 Ajout des champs date_modify et user_modify dans la table operation_prestations
ALTER TABLE dbo.operation_prestations ADD [cost_validation_date] [datetime] NULL
GO

ALTER TABLE dbo.operation_prestations ADD [cost_updater_user] [int] NULL
GO 

-- 32160 Ajout d'un champs op_date_archivage_end à la table operations

ALTER TABLE [phoenix].[dbo].[operations] ADD [op_date_archivage_end] datetime NULL

GO

--32160 MAJ de la vue View_Validation_Couts en ajoutant les champs cost_validation_date et cost_updater_user

ALTER VIEW [dbo].[View_Validation_Couts]
AS
SELECT     OP.op_prest_id, dbo.operations.op_number, CASE WHEN dbo.operation_primes.op_prime_libelle IS NOT NULL 
                      THEN dbo.r_prestations.r_p_libelle + ' (prime : ' + dbo.operation_primes.op_prime_libelle + ')' ELSE dbo.r_prestations.r_p_libelle END AS r_p_libelle, OP.op_prest_pv,
                       OP.op_prest_ciestim, OP.op_prest_cireel, OP.op_prest_ceestim, OP.op_prest_cereel, dbo.r_prestations.r_p_validation_id, dbo.operations.op_cl_id, 
                      dbo.operations.op_id, dbo.operations.op_dc_id, dbo.operations.op_cp_id, OP.op_prest_couts_valides, dbo.r_prestations.r_p_groupe_validation_id, 
                      dbo.r_prestations.r_prestation_id, (ISNULL(OP.op_prest_cireel, 0) + ISNULL(OP.op_prest_cereel, 0)) - (ISNULL(OP.op_prest_ciestim, 0) + ISNULL(OP.op_prest_ceestim,
                       0)) AS ecart,
                          (SELECT     CONVERT(char, MAX(F.date_create), 103) AS Expr1
                            FROM          dbo.factures AS F LEFT OUTER JOIN
                                                   dbo.factures_rubriques AS FR ON F.fact_id = FR.fact_id LEFT OUTER JOIN
                                                   dbo.factures_prestations AS FP ON FP.fact_rub_id = FR.fact_rub_id
                            WHERE      (FP.op_prest_id = OP.op_prest_id) AND (F.fact_status_id = 1)) AS deadline_facture_fr,
                          (SELECT     COUNT(*) AS Expr1
                            FROM          dbo.factures AS F LEFT OUTER JOIN
                                                   dbo.factures_rubriques AS FR ON F.fact_id = FR.fact_id LEFT OUTER JOIN
                                                   dbo.factures_prestations AS FP ON FP.fact_rub_id = FR.fact_rub_id
                            WHERE      (FP.op_prest_id = OP.op_prest_id) AND (F.fact_status_id = 1)) AS nb_factures_en_attente,
                            op_prest_qestim AS quantite_estimee, op_prest_qreel AS quantite_realisee, 
                            (SELECT     SUM(FP.fact_prest_quantite_facture_final) AS Expr1
                            FROM          dbo.factures AS F LEFT OUTER JOIN
                                                   dbo.factures_prestations AS FP ON F.fact_id = FP.fact_id 
                            WHERE      (FP.op_prest_id = OP.op_prest_id) AND (F.fact_status_id IN (3, 4))) AS quantite_facturee,
                            OP.op_user_couts_reel, dbo.operations.op_libelle, 
                      OP.op_prest_libelle_devis, dbo.operations.op_status_id, dbo.r_p_type_validation.r_p_type_validation_libelle, dbo.operations.op_stamp_start, 
                      dbo.operations.op_stamp_end, dbo.operations.op_dateConso_start, dbo.operations.op_dateConso_end, dbo.operations.op_datePoste_end, dbo.clients.cl_libelle, 
                      OP.date_modify AS op_prest_date_modify, OP.user_modify AS op_prest_user_modify,
                      OP.cost_validation_date, OP.cost_updater_user
FROM         dbo.operation_prestations AS OP LEFT OUTER JOIN
                      dbo.operation_primes ON OP.op_prest_prime_id = dbo.operation_primes.op_prime_id LEFT OUTER JOIN
                      dbo.clients INNER JOIN
                      dbo.operations ON dbo.clients.cl_id = dbo.operations.op_cl_id ON OP.op_id = dbo.operations.op_id LEFT OUTER JOIN
                      dbo.r_p_type_validation RIGHT OUTER JOIN
                      dbo.r_prestations ON dbo.r_p_type_validation.r_p_type_validation_id = dbo.r_prestations.r_p_validation_id ON OP.op_r_prest_id = dbo.r_prestations.r_prestation_id;

GO

-- 32160 MAJ de la vue View_Operation_Listing en ajoutant le champs op_date_archivage_end et op_date_archivage_end_fr

ALTER VIEW [dbo].[View_Operation_Listing]
AS
SELECT     OPST.os_libelle, OP.op_number, OP.op_libelle,
                          (SELECT     COUNT(op_contrat_id) AS Expr1
                            FROM          dbo.operations_contrats
                            WHERE      (op_id = OP.op_id)) AS nb_contrats, CL.cl_libelle, CONVERT(char, OP.op_stamp_start, 103) AS op_start, CONVERT(char, OP.op_stamp_end, 103) 
                      AS op_end, ROPT.ot_libelle + ', ' + ROPTS.ost_libelle AS type, COALESCE (USRDC.user_nom + ' ' + LEFT(USRDC.user_prenom, 1) + '.', '') AS dc, 
                      COALESCE (USRCP.user_nom + ' ' + LEFT(USRCP.user_prenom, 1) + '.', '') AS cp, OP.op_id, OP.op_status_id, OP.op_cl_id, OP.op_type_id, OP.op_subtype_id, 
                      OP.op_dc_id, OP.actif, OP.op_cp_id, OP.op_stamp_start, OP.op_stamp_end, OP.op_dateConso_start, OP.op_dateConso_end, OP.op_datePoste_end, OP.op_date_archivage_end, OP.op_act_id, 
                      OP.op_ct_id,
                          (SELECT     TOP (1) CONVERT(char, date_create, 103) AS Expr1
                            FROM          dbo.operation_statuts
                            WHERE      (op_id = OP.op_id) AND (hs_new_statut_id = 2)
                            ORDER BY date_create DESC) AS date_accepte_fr,
                          (SELECT     dbo.ConcatListOptionsForOpId(op_id) AS Cols
                            FROM          dbo.lnk_operation_option
                            WHERE      (op_id = OP.op_id)
                            GROUP BY op_id) AS list_options, OP.op_project_type_id, OP.op_freq_stat_mail_id, CONVERT(char, OP.op_dateConso_start, 103) AS op_dateConso_start_fr, 
                      CONVERT(char, OP.op_dateConso_end, 103) AS op_dateConso_end_fr, CONVERT(char, OP.op_datePoste_end, 103) AS op_datePoste_end_fr, CONVERT(char, 
                      OP.op_stamp_start, 103) AS op_stamp_start_fr, CONVERT(char, OP.op_stamp_end, 103) AS op_stamp_end_fr, CONVERT(char, OP.op_date_archivage_end, 103) AS op_date_archivage_end_fr, OP.op_devis_lang, OP.date_create, 
                      dbo.operations_ext.opt_sync_task_user_id, dbo.operations_ext.opt_sync_gedelog_user_id, OP.op_parent_id, (SELECT op_number from operations OPF where OPF.op_id = OP.op_parent_id) as op_parent_op_number
FROM         dbo.operations AS OP LEFT OUTER JOIN
                      dbo.operations_ext ON OP.op_id = dbo.operations_ext.op_id LEFT OUTER JOIN
                      dbo.clients AS CL ON CL.cl_id = OP.op_cl_id LEFT OUTER JOIN
                      dbo.r_operation_status AS OPST ON OP.op_status_id = OPST.os_id LEFT OUTER JOIN
                      dbo.r_operation_type AS ROPT ON ROPT.ot_id = OP.op_type_id LEFT OUTER JOIN
                      dbo.r_operation_type_sub AS ROPTS ON ROPTS.ost_id = OP.op_subtype_id LEFT OUTER JOIN
                      dbo.users AS USRDC ON USRDC.user_id = OP.op_dc_id LEFT OUTER JOIN
                      dbo.users AS USRCP ON USRCP.user_id = OP.op_cp_id

 
GO

-- 32160 MAJ de la vue View_Arthur_Operation_Base consommé par Arthur, en ajoutant le champs op_date_archivage_end

ALTER VIEW [dbo].[View_Arthur_Operation_Base]
AS
SELECT     OP.op_id, OP.op_number, OP.op_libelle, OP.op_cl_id, CL.cl_libelle AS op_cl_libelle, OP.op_stamp_start AS op_debut_gestion, OP.op_stamp_end AS op_fin_gestion, 
                      OP.op_dateConso_start AS op_debut_conso, OP.op_dateConso_end AS op_fin_conso, OP.op_datePoste_end AS op_fin_poste, OP.op_date_archivage_end,
                          (SELECT     COUNT(lnk_op_opt_id) AS Expr1
                            FROM          dbo.lnk_operation_option
                            WHERE      (op_opt_id = 27) AND (is_linked = 1) AND (op_id = OP.op_id)) AS op_assurance,
                          (SELECT     COUNT(lnk_op_opt_id) AS Expr1
                            FROM          dbo.lnk_operation_option AS lnk_operation_option_1
                            WHERE      (op_opt_id = 56) AND (is_linked = 1) AND (op_id = OP.op_id)) AS op_internationale, OP.op_type_id, ROPT.ot_libelle AS op_type_libelle, 
                      OP.op_subtype_id, ROPTS.ost_libelle AS op_ss_type_libelle, OP.op_status_id, OPST.os_libelle AS op_status_libelle, 
                      COALESCE (USRDC.user_nom + ' ' + LEFT(USRDC.user_prenom, 1) + '.', '') AS op_dc, COALESCE (USRCP.user_nom + ' ' + LEFT(USRCP.user_prenom, 1) + '.', '') 
                      AS op_cp, OP.op_instructionSaisie, OP.op_modalite,
                          (SELECT     COUNT(op_prest_id) AS Expr1
                            FROM          dbo.operation_prestations
                            WHERE      (op_r_prest_id = 367) AND (op_id = OP.op_id)) AS P_367,
                          (SELECT     COALESCE (SUM(op_prest_qestim), 0) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_2
                            WHERE      (op_r_prest_id = 367) AND (op_id = OP.op_id)) AS QEST_367, OP.op_project_type_id, RPROJTYPE.r_project_type_libelle, OP.op_delai_trait_courrier_id, 
                      RDELAICOUR.r_delai_trait_courrier_libelle,
                          (SELECT     MAX(op_task_done) AS Expr1
                            FROM          dbo.operation_tasks
                            WHERE      (op_task_type_id = 85) AND (op_id = OP.op_id)) AS tout_ok_masque_stamp,
                          (SELECT     MAX(op_task_done) AS Expr1
                            FROM          dbo.operation_tasks AS operation_tasks_2
                            WHERE      (op_task_type_id = 86) AND (op_id = OP.op_id)) AS creation_masque_stamp,
                          (SELECT     MAX(op_task_done) AS Expr1
                            FROM          dbo.operation_tasks AS operation_tasks_1
                            WHERE      (op_task_type_id = 87) AND (op_id = OP.op_id)) AS validation_masque_stamp,
                          (SELECT     COALESCE (SUM(op_prest_qestim), 0) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_6
                            WHERE      (op_r_prest_id = 378) AND (op_id = OP.op_id)) AS QEST_378,
                          (SELECT     COALESCE (SUM(op_prest_qreel), 0) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_5
                            WHERE      (op_r_prest_id = 378) AND (op_id = OP.op_id)) AS QREEL_378,
                          (SELECT     COALESCE (SUM(op_prest_qestim), 0) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_4
                            WHERE      (op_r_prest_id = 319) AND (op_id = OP.op_id)) AS QEST_319,
                          (SELECT     COALESCE (SUM(op_prest_qreel), 0) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_3
                            WHERE      (op_r_prest_id = 319) AND (op_id = OP.op_id)) AS QREEL_319,
                          (SELECT     COALESCE (SUM(op_prest_qestim), 0) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_2
                            WHERE      (op_r_prest_id = 380) AND (op_id = OP.op_id)) AS QEST_380,
                          (SELECT     COALESCE (SUM(op_prest_qreel), 0) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_1
                            WHERE      (op_r_prest_id = 380) AND (op_id = OP.op_id)) AS QREEL_380,
                          (SELECT     COUNT(LOP.op_opt_id) AS Expr1
                            FROM          dbo.lnk_operation_option AS LOP LEFT OUTER JOIN
                                                   dbo.r_operation_options AS ROP ON ROP.r_op_option_id = LOP.op_opt_id
                            WHERE      (ROP.r_op_option_parent IN (1, 2, 6)) AND (LOP.is_linked = 1) AND (LOP.op_id = OP.op_id)) AS option_hotline,
                          (SELECT     COUNT(LOP.op_opt_id) AS Expr1
                            FROM          dbo.lnk_operation_option AS LOP LEFT OUTER JOIN
                                                   dbo.r_operation_options AS ROP ON ROP.r_op_option_id = LOP.op_opt_id
                            WHERE      (ROP.r_op_option_parent IN (30, 234, 235)) AND (LOP.is_linked = 1) AND (LOP.op_id = OP.op_id)) AS option_cartavenue,
                          (SELECT     COUNT(op_prest_id) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_7
                            WHERE      (op_r_prest_id = 299) AND (op_prest_npr IS NULL) AND (op_id = OP.op_id)) AS PREST_299,
                          (SELECT     MAX(date_create) AS Expr1
                            FROM          dbo.operation_statuts
                            WHERE      (hs_new_statut_id = 2) AND (op_id = OP.op_id)) AS date_devis_accepte, 
							OP.op_description, 
							OP.op_commentaire,
						  (SELECT     COUNT(op_prest_id) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_8
                            WHERE      (op_r_prest_id = 40) AND (op_id = OP.op_id)) AS PREST_40,
						  (SELECT     COUNT(op_prest_id) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_9
                            WHERE      (op_r_prest_id = 522) AND (op_id = OP.op_id)) AS PREST_522
FROM         dbo.operations AS OP LEFT OUTER JOIN
                      dbo.clients AS CL ON CL.cl_id = OP.op_cl_id LEFT OUTER JOIN
                      dbo.r_operation_type AS ROPT ON ROPT.ot_id = OP.op_type_id LEFT OUTER JOIN
                      dbo.r_operation_type_sub AS ROPTS ON ROPTS.ost_id = OP.op_subtype_id LEFT OUTER JOIN
                      dbo.r_operation_status AS OPST ON OP.op_status_id = OPST.os_id LEFT OUTER JOIN
                      dbo.users AS USRDC ON USRDC.user_id = OP.op_dc_id LEFT OUTER JOIN
                      dbo.users AS USRCP ON USRCP.user_id = OP.op_cp_id LEFT OUTER JOIN
                      dbo.r_project_type AS RPROJTYPE ON RPROJTYPE.r_project_type_id = OP.op_project_type_id LEFT OUTER JOIN
                      dbo.r_delai_trait_courrier AS RDELAICOUR ON RDELAICOUR.r_delai_trait_courrier_id = OP.op_delai_trait_courrier_id



GO


-- 31827 MAJ du champ dc_id de la Vue pour récupérer le dc_id depuis la facture si le statut <> créé validée, sinon on récupère depuis la table operations

ALTER VIEW [dbo].[View_Facture_Listing]
AS
SELECT     dbo.factures.fact_id, dbo.factures.r_fact_type_id, dbo.factures.op_id, dbo.factures.cl_id, dbo.factures.ct_id,
					CASE WHEN dbo.factures.fact_status_id  NOT IN (1, 2)
				      THEN dbo.factures.dc_id
				      ELSE
					  dbo.operations.op_dc_id
					  END
					  AS dc_id,				
					
					dbo.factures.fact_numero, 
                      dbo.factures.fact_num_cmd, dbo.factures.fact_montant_ht, dbo.factures.fact_montant_ttc, dbo.factures.fact_montant_encaisse, dbo.factures.fact_destinataire, 
                      dbo.factures.fact_attention, dbo.factures.fact_adresse1, dbo.factures.fact_adresse2, dbo.factures.fact_adresse3, dbo.factures.fact_code_postal, dbo.factures.fact_ville, 
                      dbo.factures.fact_pays, dbo.factures.fact_user_edition, dbo.factures.fact_verrou, dbo.factures.fact_parent_id, dbo.factures.fact_annul_id, dbo.factures.fact_taux_adf, dbo.factures.date_create AS fact_date_create, 
                      dbo.factures.date_modify AS fact_date_modify, dbo.factures.user_id, dbo.factures.user_modify, dbo.r_operation_type.ot_libelle, dbo.operations.op_number, 
                      dbo.clients.cl_libelle, dbo.factures.fact_reference, dbo.r_facture_statuts.r_fact_stat_libelle, dbo.r_facture_types.r_fact_type_libelle, dbo.operations.op_act_id, 
                      dbo.operations.op_type_id, dbo.operations.op_status_id, dbo.factures.fact_montant_ttc - dbo.factures.fact_montant_encaisse AS fact_solde, 
                      CASE WHEN (dbo.r_facture_statuts.r_fact_stat_id != 4 AND fact_montant_encaisse < fact_montant_ttc) THEN 1 ELSE 0 END AS fact_has_paiement_partiel, 
                      dbo.factures.fact_status_id,
                            (SELECT     CONVERT(nvarchar, date_create, 103) AS Expr1
                            FROM          dbo.View_Facture_Status AS View_Facture_Status_1
                            WHERE      (fact_id = dbo.factures.fact_id) AND (r_fact_stat_id = 2)) AS fact_date_validation_fr,
                          
                          (SELECT     CONVERT(nvarchar, date_create, 103) AS Expr1
                            FROM          dbo.View_Facture_Status AS View_Facture_Status_2
                            WHERE      (fact_id = dbo.factures.fact_id) AND (r_fact_stat_id = 3)) AS fact_date_edition_fr,
                            
                           CONVERT(nvarchar, dbo.factures.fact_date_echeance, 103) AS fact_date_echeance_fr,
                            
                            (SELECT     CONVERT(nvarchar, date_create, 103) AS Expr1
                            FROM          dbo.View_Facture_Status
                            WHERE      (fact_id = dbo.factures.fact_id) AND (r_fact_stat_id = 4)) AS fact_date_encaisse_fr,
                            
                            (SELECT     date_create AS Expr1
                            FROM          dbo.View_Facture_Status AS View_Facture_Status_1
                            WHERE      (fact_id = dbo.factures.fact_id) AND (r_fact_stat_id = 2)) AS fact_date_validation,
                          
                          (SELECT     date_create AS Expr1
                            FROM          dbo.View_Facture_Status AS View_Facture_Status_2
                            WHERE      (fact_id = dbo.factures.fact_id) AND (r_fact_stat_id = 3)) AS fact_date_edition,
                            
                           dbo.factures.fact_date_echeance,
                            
                              (SELECT     date_create AS Expr1
                            FROM          dbo.View_Facture_Status
                            WHERE      (fact_id = dbo.factures.fact_id) AND (r_fact_stat_id = 4)) AS fact_date_encaisse,
                           
                      dbo.plan_facturation_params.plan_fact_periode_id, 
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

-- *********************** --

BEGIN TRANSACTION	
GO

-- *********************** --
-- BLOCK QUERY TYPE INSERT -- 
-- *********************** --

-- 31500 : Ajout d'une nouvelle fonctionnalité dans l'ACL
--Insertion d'une nouvelle fonctionnalité qui vérifie si le client dispose de préstation négociés

INSERT INTO [phoenix].[dbo].[acl_fonctionnalites]
           ([int_cont_id]
           ,[fonc_name])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 3 AND controller_name = 'new'), 
           'disposition de prÃ©stations nÃ©gociÃ©s')
GO

-- 31500 Insertion d'une nouvelle action : doescustomerhasnegociatedservices

INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id],
            [action_name],
            [fonc_id],
            [comment])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 3 AND controller_name = 'new'),
            'doescustomerhasnegociatedservices',
           (SELECT top 1 fonc_id FROM [phoenix].[dbo].[acl_fonctionnalites] order by (fonc_id) desc),
            'VÃ©rification que le client dispose de prÃ©stations nÃ©gociÃ©s')
GO


-- 31822 Insertion d'une nouvelle fonctionnalitées de réédition

INSERT INTO [phoenix].[dbo].[acl_fonctionnalites]
           ([int_cont_id]
           ,[fonc_name])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 6 AND controller_name = 'factures'), 
           'RÃ©Ã©dition des factures')
GO

-- 31822 Insertion d'une nouvelles actions : reedition des factures

INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id],
            [action_name],
            [fonc_id],
            [comment])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 6 AND controller_name = 'factures'),
            'reedition',
           (SELECT top 1 fonc_id FROM [phoenix].[dbo].[acl_fonctionnalites] order by (fonc_id) desc),
		   'AJAX - RÃ©Ã©dition des factures')
GO

-- *********************** --
-- BLOCK QUERY TYPE UPDATE -- 
-- *********************** --

-- 31827 Initialisation des directeurs commerciaux par défauts des factures dont statut
-- <> (créé ou validée)

UPDATE ft
SET ft.dc_id = (
CASE 
WHEN ft.fact_status_id NOT IN (1, 2)
THEN op.op_dc_id
ELSE
NULL
END
)
FROM dbo.factures ft
LEFT JOIN dbo.operations op
ON ft.op_id = op.op_id
GO

-- 31852 : reprise des valeurs des champs date_modify , user_modify pour ne pas avoir des valeurs NULL sur la Vue View_Validation_Couts

UPDATE dbo.operation_prestations 
SET cost_validation_date = date_modify , cost_updater_user = user_modify
WHERE op_prest_couts_valides = 1 AND cost_updater_user IS NULL AND user_modify IS NOT NULL
GO

-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE DELETE -- 
-- *********************** --

-- *********************** --
COMMIT
GO