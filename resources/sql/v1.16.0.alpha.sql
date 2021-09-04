USE [phoenix]
GO

-- *********************** --
-- BLOCK QUERY TYPE CREATE -- 
-- *********************** --

-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE ALTER -- 
-- *********************** --

-- 31199 Ajout d'un nouveau champ indiquant la dernière date de mdification et de recalcul des relances
ALTER TABLE [dbo].[relances] ADD [last_recalculation_date] [datetime] NULL
GO

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

-- *********************** --

BEGIN TRANSACTION	
GO

-- *********************** --
-- BLOCK QUERY TYPE INSERT -- 
-- *********************** --

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