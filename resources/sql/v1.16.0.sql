USE [phoenix]
GO

-- *********************** --
-- BLOCK QUERY TYPE CREATE -- 
-- *********************** --

-- 29225 : Ajout d'une nouvelle table d'internationnalisation de phoenix
CREATE TABLE [dbo].[i18n]
(
    [i18n_id] [int] IDENTITY(1,1) NOT NULL,
    [model_name] [nvarchar](100) NOT NULL,
    [locale] [nchar](10) NOT NULL,
    [field_name] [nvarchar](100) NOT NULL,
    [foreign_key] [int] NOT NULL,
    [field_value] VARCHAR(MAX) NULL,
    CONSTRAINT [PK_i18n] PRIMARY KEY NONCLUSTERED 
(
	[i18n_id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE ALTER -- 
-- *********************** --

-- #25601 : Add new columns : rel_ct_facturation, rel_adresse1, rel_adresse2, rel_adresse3, rel_code_postal, rel_ville, rel_pays to relances table
ALTER TABLE [phoenix].[dbo].[relances] ADD 
[rel_ct_facturation] [int] NULL,
[rel_adresse1] [nvarchar](255) NULL,
[rel_adresse2] [nvarchar](255) NULL,
[rel_adresse3] [nvarchar](255) NULL,
[rel_code_postal] [nvarchar](50) NULL,
[rel_ville] [nvarchar](255) NULL,
[rel_pays] [nvarchar](255) NULL;
GO

-- 29225 Ajout d'une contrainte d'unicité du quadruple de valeur model_name, locale, field_name, field_value
ALTER TABLE [dbo].[i18n] ADD CONSTRAINT UC_i18n_data_translates UNIQUE (model_name, locale, field_name, foreign_key)
GO

-- 31199 Ajout d'un nouveau champ indiquant la dernière date de mdification et de recalcul des relances
ALTER TABLE [dbo].[relances] ADD [last_recalculation_date] [datetime] NULL
GO


-- #25601 Add new columns : rel_ct_facturation, rel_adresse1, rel_adresse2, rel_adresse3, rel_code_postal, rel_ville, rel_pays in View_Compta_Relances
-- #31199 Add new columns : last_recalculation_date et last_recalculation_date_fr

ALTER VIEW [dbo].[View_Compta_Relances]
AS
SELECT     dbo.relances.rel_id, dbo.relances.rel_reference, dbo.relances.cl_id, dbo.clients.cl_libelle, dbo.relances.rel_parent_id, CONVERT(char, dbo.relances.date_create, 103) 
                      AS date_create_fr, dbo.relances.rel_ct_facturation, dbo.relances.rel_adresse1, dbo.relances.rel_adresse2, dbo.relances.rel_adresse3, dbo.relances.rel_code_postal, dbo.relances.rel_ville, 
                      dbo.relances.rel_pays,
                          (SELECT     SUM(montant_a_regler) AS Expr1
                            FROM          dbo.lnk_relance_facture
                            WHERE      (actif = 1) AND (rel_id = dbo.relances.rel_id)) AS montant_a_regler, dbo.r_relance_statuts.r_rel_statut_libelle, dbo.r_relance_types.r_rel_type_libelle, 
                      dbo.relances.rel_statut_id, dbo.relances.rel_type_id, dbo.relances.rel_echeance, CONVERT(char, dbo.relances.rel_echeance, 103) AS rel_echeance_fr,
                          (SELECT     TOP (1) date_create AS Expr1
                            FROM          dbo.relance_statuts
                            WHERE      (rel_id = dbo.relances.rel_id) AND (r_rel_stat_id = 2)
                            ORDER BY Expr1 DESC) AS date_edition,
                          (SELECT     TOP (1) CONVERT(char, date_create, 103) AS Expr1
                            FROM          dbo.relance_statuts AS relance_statuts_3
                            WHERE      (rel_id = dbo.relances.rel_id) AND (r_rel_stat_id = 2)
                            ORDER BY date_create DESC) AS date_edition_fr,
                          (SELECT     TOP (1) date_create AS Expr1
                            FROM          dbo.relance_statuts AS relance_statuts_2
                            WHERE      (rel_id = dbo.relances.rel_id)
                            ORDER BY Expr1 DESC) AS date_last_update,
                          (SELECT     TOP (1) CONVERT(char, date_create, 103) AS Expr1
                            FROM          dbo.relance_statuts AS relance_statuts_1
                            WHERE      (rel_id = dbo.relances.rel_id)
                            ORDER BY date_create DESC) AS date_last_update_fr, 
                            dbo.relances.last_recalculation_date,
                            (SELECT CONVERT(char, dbo.relances.last_recalculation_date, 103) AS Expr1
                            ) AS last_recalculation_date_fr,
                            
                            dbo.relances.date_create
FROM         dbo.relances INNER JOIN
                      dbo.r_relance_types ON dbo.relances.rel_type_id = dbo.r_relance_types.r_rel_type_id INNER JOIN
                      dbo.clients ON dbo.relances.cl_id = dbo.clients.cl_id INNER JOIN
                      dbo.r_relance_statuts ON dbo.relances.rel_statut_id = dbo.r_relance_statuts.r_rel_statut_id;
GO

-- #30837 Add new columns : quantite_estimee, quantite_realisee, quantite_facturee
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
                      OP.date_modify AS op_prest_date_modify, OP.user_modify AS op_prest_user_modify
FROM         dbo.operation_prestations AS OP LEFT OUTER JOIN
                      dbo.operation_primes ON OP.op_prest_prime_id = dbo.operation_primes.op_prime_id LEFT OUTER JOIN
                      dbo.clients INNER JOIN
                      dbo.operations ON dbo.clients.cl_id = dbo.operations.op_cl_id ON OP.op_id = dbo.operations.op_id LEFT OUTER JOIN
                      dbo.r_p_type_validation RIGHT OUTER JOIN
                      dbo.r_prestations ON dbo.r_p_type_validation.r_p_type_validation_id = dbo.r_prestations.r_p_validation_id ON OP.op_r_prest_id = dbo.r_prestations.r_prestation_id;
GO 

-- #26818  mise à jour de la view View_Facture_Listing avec ajout des champs : fact_date_validation, fact_date_edition, fact_date_echeance, fact_date_encaisse
ALTER VIEW [dbo].[View_Facture_Listing]
AS
SELECT     dbo.factures.fact_id, dbo.factures.r_fact_type_id, dbo.factures.op_id, dbo.factures.cl_id, dbo.factures.ct_id, dbo.factures.dc_id, dbo.factures.fact_numero, 
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

-- #25601 : Permettre la sélection d'un contact dans le référentiel client et la modification des données associées pour l'édition de la relance
INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id],
            [action_name],
            [fonc_id],
            [comment])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 6 AND controller_name = 'relances'),
            'editsinglerelance',
           (SELECT top 1 fonc_id FROM [phoenix].[dbo].[acl_fonctionnalites] order by (fonc_id) desc),
	   'Edition Relance')
GO

-- 31198 : Ajout d'une nouvelle fonctionnalité dans l'ACL
--Insertion d'une nouvelle fonctionnalité qui annule l'edition d'une relance

--Insertion d'une nouvelle fonctionnalitées 
INSERT INTO [phoenix].[dbo].[acl_fonctionnalites]
           ([int_cont_id]
           ,[fonc_name])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 6 AND controller_name = 'relances'), 
           'DÃ©sedition des relances')
GO

-- 31198 Insertion d'une nouvelles actions : index pour le controleur 
INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id],
            [action_name],
            [fonc_id],
            [comment])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 6 AND controller_name = 'relances'),
            'desedition',
           (SELECT top 1 fonc_id FROM [phoenix].[dbo].[acl_fonctionnalites] order by (fonc_id) desc),
		   'AJAX - DÃ©sedition des relances de factures')
GO


-- *********************** --



-- 31197 : Ajout d'une nouvelle fonctionnalité dans l'ACL
--Insertion d'une nouvelle fonctionnalité qui affiche plusieurs relances dans un seul PDF

INSERT INTO [phoenix].[dbo].[acl_fonctionnalites]
           ([int_cont_id]
           ,[fonc_name])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 6 AND controller_name = 'relances'), 
           'Affichage de plusieurs relances dans un seul PDF')
GO

-- 31197 Insertion d'une nouvelle action : displayrelancepdf

INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id],
            [action_name],
            [fonc_id],
            [comment])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 6 AND controller_name = 'relances'),
            'displayrelancespdf',
           (SELECT top 1 fonc_id FROM [phoenix].[dbo].[acl_fonctionnalites] order by (fonc_id) desc),
            'Affichage de plusieurs relances dans un seul PDF')
GO

-- *********************** --
-- BLOCK QUERY TYPE UPDATE -- 
-- *********************** --

-- 31199 Maj du champs last_recalculation_date pour avoir initialement la dernière date de modification de la relance si elle est en statut créé
-- La date d'édition sinon

UPDATE r set r.last_recalculation_date = 
    CASE 
        WHEN r.rel_statut_id = 1
            THEN vr.date_last_update
        WHEN r.rel_statut_id <> 1
            THEN vr.date_edition
    END
FROM [phoenix].[dbo].[relances] r
INNER JOIN [dbo].[View_Compta_Relances] vr on
r.rel_id = vr.rel_id

GO

-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE DELETE -- 
-- *********************** --

-- *********************** --
COMMIT
GO