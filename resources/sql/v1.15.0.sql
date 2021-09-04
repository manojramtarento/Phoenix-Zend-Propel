USE [phoenix]
GO

--29168 ajout de nouveaux tables pour la configurations des motifs spécifiques pour les factures
CREATE TABLE [dbo].[r_facture_motifs](
	[r_fact_motif_id] [int] IDENTITY(1,1) NOT NULL,
	[r_fact_motif_libelle] [nvarchar](100) NOT NULL,
	[actif] [bit] NOT NULL,
 CONSTRAINT [PK_r_facture_motif] PRIMARY KEY NONCLUSTERED 
(
	[r_fact_motif_id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

CREATE TABLE [dbo].[lnk_facture_motifs](
	[lnk_fact_motif_id] [int] IDENTITY(1,1) NOT NULL,
	[fact_id] [int] NOT NULL,
	[motif_id] [int] NOT NULL,	
 CONSTRAINT [PK_lnk_facture_motifs] PRIMARY KEY CLUSTERED 
(
	[lnk_fact_motif_id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

-- ####################### Alter Querys ####################################################
-- 29172 Ajout d'une nouvele colonne
ALTER TABLE dbo.contacts ADD [ct_receive_fact_by_email] [bit] NULL
GO

-- 17553 Ajout d'un nouveau champs dans la table client_prestations
ALTER TABLE dbo.client_prestations ADD [r_p_client_libelle] [nvarchar](255) NULL
GO

-- 17553 Ajout du r_p_client_libelle champs dans la view 
ALTER VIEW [dbo].[View_Client_Prestations_Listing]
AS
SELECT     RPREST.r_prestation_id, CLPREST.cl_prest_id, RPREST.r_p_libelle, CLPREST.cl_id, CLPREST.cl_prest_pv, 
                      ROUND((CLPREST.cl_prest_pv - RPREST.r_p_cout_total) / RPREST.r_p_cout_total * 100, 2) AS marge, 
                      ROUND((1 - CLPREST.cl_prest_pv / RPREST.r_p_prix_vente) * 100, 2) AS remise,
                      r_p_client_libelle
FROM         dbo.client_prestations AS CLPREST LEFT OUTER JOIN
                      dbo.r_prestations AS RPREST ON RPREST.r_prestation_id = CLPREST.r_prest_id
GO

-- 29168 Ajout d'une contrainte d'unicité du couple de valeur fact_id, motif_id
ALTER TABLE dbo.lnk_facture_motifs ADD CONSTRAINT UC_fact_motifs UNIQUE (fact_id, motif_id)
GO

-- #29147 : Ajout du champs [r_tva_libelle_fact_synthese_en] dans la table r_tva_type
ALTER TABLE [phoenix].[dbo].[r_tva_type] ADD [r_tva_libelle_fact_synthese_en]  [nvarchar](50) NULL;
GO

-- 25468 Ajout des champs date_modify et user_modify dans la table operation_prestations
ALTER TABLE dbo.operation_prestations ADD [date_modify] [datetime] NULL
GO

ALTER TABLE dbo.operation_prestations ADD [user_modify] [int] NULL
GO 

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
                            WHERE      (FP.op_prest_id = OP.op_prest_id) AND (F.fact_status_id = 1)) AS nb_factures_en_attente, OP.op_user_couts_reel, dbo.operations.op_libelle, 
                      OP.op_prest_libelle_devis, dbo.operations.op_status_id, dbo.r_p_type_validation.r_p_type_validation_libelle, dbo.operations.op_stamp_start, 
                      dbo.operations.op_stamp_end, dbo.operations.op_dateConso_start, dbo.operations.op_dateConso_end, dbo.operations.op_datePoste_end, 
                      dbo.clients.cl_libelle, OP.date_modify as op_prest_date_modify, OP.user_modify as op_prest_user_modify
FROM         dbo.operation_prestations AS OP LEFT OUTER JOIN
                      dbo.operation_primes ON OP.op_prest_prime_id = dbo.operation_primes.op_prime_id LEFT OUTER JOIN
                      dbo.clients INNER JOIN
                      dbo.operations ON dbo.clients.cl_id = dbo.operations.op_cl_id ON OP.op_id = dbo.operations.op_id LEFT OUTER JOIN
                      dbo.r_p_type_validation RIGHT OUTER JOIN
                      dbo.r_prestations ON dbo.r_p_type_validation.r_p_type_validation_id = dbo.r_prestations.r_p_validation_id ON OP.op_r_prest_id = dbo.r_prestations.r_prestation_id
GO

-- ################## Start Transaction ##############################################
BEGIN TRANSACTION	
GO

-- 11416 : Ajout d'une nouvelle fonctionnalité dans l'ACL
--Insertion d'une nouvelle fonctionnalité qui recalcule les relances des factures : module comptabilite

--Insertion d'une nouvelle fonctionnalitées 
INSERT INTO [phoenix].[dbo].[acl_fonctionnalites]
           ([int_cont_id]
           ,[fonc_name])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 6 AND controller_name = 'relances'), 
           'Recalcul des relances')
GO

--insertion d'une nouvelles actions : index pour le controleur 
INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id],
            [action_name],
            [fonc_id],
            [comment])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 6 AND controller_name = 'relances'),
            'recalculaterelance',
           (SELECT top 1 fonc_id FROM [phoenix].[dbo].[acl_fonctionnalites] order by (fonc_id) desc),
		   'AJAX - Recalcul des relances de factures')
GO

-- 26797 Ajout d'une nouvel action dans les ACL
INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id]
           ,[action_name]
           ,[fonc_id]
           ,[comment])
     VALUES
           (13,
           'checkdisabledprestations',
           25,
           'AJAX - Verification des prÃ©stations desactivÃ©es')
GO

--29168 Insertion des motifs spécifique 
INSERT INTO [phoenix].[dbo].[r_facture_motifs]
           ([r_fact_motif_libelle]
           ,[actif])
     VALUES
           ('DÃ©matÃ©rialisation', 1),
           ('Documents Ã  joindre', 1),
           ('Facturation en devises', 1)
GO

-- 29168 : Ajout d'une nouvelle fonctionnalité d'affichage et de modification des motifs spécifiques aux factures

--Insertion d'une nouvelle fonctionnalitées 
INSERT INTO [phoenix].[dbo].[acl_fonctionnalites]
           ([int_cont_id]
           ,[fonc_name])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 3 AND controller_name = 'facturation'), 
           'Affichage des motifs spÃ©cifiques aux factures')
GO

--insertion d'une nouvelles actions : popupmodifffacturemotifs
INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id],
            [action_name],
            [fonc_id],
            [comment])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 3 AND controller_name = 'facturation'),
            'popupmodifffacturemotifs',
           (SELECT top 1 fonc_id FROM [phoenix].[dbo].[acl_fonctionnalites] order by (fonc_id) desc),
	   'Affichage et modification des motifs spÃ©cifiques aux factures')
GO

--Insertion d'une nouvelle fonctionnalité d'annulation des motifs associés à une facture
INSERT INTO [phoenix].[dbo].[acl_fonctionnalites]
           ([int_cont_id]
           ,[fonc_name])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 3 AND controller_name = 'facturation'), 
           'Annulation des motifs associÃ© Ã  une facture')
GO

--insertion d'une nouvelles actions : cancelfacturemotifs
INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id],
            [action_name],
            [fonc_id],
            [comment])
     VALUES
           ((SELECT int_cont_id FROM [phoenix].[dbo].[acl_interfaces_controllers] WHERE module_id = 3 AND controller_name = 'facturation'),
            'cancelfacturemotifs',
           (SELECT top 1 fonc_id FROM [phoenix].[dbo].[acl_fonctionnalites] order by (fonc_id) desc),
	   'Annulation des motifs associÃ© Ã  une facture')
GO

--25516 Désactivation des options d'échéance de facturations hors à réception' ou '30 jours nets à compter de sa réception'
UPDATE [dbo].[r_facture_options_echeances] SET actif = 0 WHERE fact_opt_echeance_id NOT IN (1, 2)
GO

------ 29144 Modifier la présentation de la synthèse du devis (partie grisée sous budget global estimé) pour limiter les risques d’erreur dans les montants engagés par les clients pour leur bon de commande 
/* #29144 rename Frais TTC to Frais TTC (débours)  */
UPDATE [phoenix].[dbo].[r_tva_type] 
set r_tva_libelle = 'Frais TTC (dÃ©bours)', r_tva_libelle_fact_synthese = 'Frais TTC (dÃ©bours)', r_tva_libelle_en = 'Refund'
WHERE r_tva_id = 4
GO

/* #29144 rename soumis TVA xx % to TVA xx % */
UPDATE [r_tva_type] 
set r_tva_libelle = 'TVA 5,5%', r_tva_libelle_en = 'VAT 5,5%'
WHERE r_tva_id  = 1
GO

UPDATE [r_tva_type] 
set r_tva_libelle = 'TVA 19,6%', r_tva_libelle_en = 'VAT 19,6%'
WHERE r_tva_id  = 2
GO

UPDATE [r_tva_type] 
set r_tva_libelle = 'TVA 20%', r_tva_libelle_en = 'VAT 20%'
WHERE r_tva_id  = 5
GO

UPDATE [r_tva_type] 
set r_tva_libelle = 'TVA 8,5%', r_tva_libelle_en = 'VAT 8,5%'
WHERE r_tva_id  = 6
GO

-- #29147 : mise à jour du champs [r_tva_libelle_fact_synthese_en] par [r_tva_libelle_fact_en]
UPDATE [phoenix].[dbo].[r_tva_type] SET r_tva_libelle_fact_synthese_en = r_tva_libelle_en;
GO

/* #29144 Traduction */
UPDATE [phoenix].[dbo].[r_tva_type] 
set r_tva_libelle_en = 'Not submitted to VAT', r_tva_libelle_fact_synthese_en = 'Subtotal not submitted to VAT' 
 WHERE r_tva_id = 3
GO

COMMIT
GO