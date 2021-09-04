BEGIN TRANSACTION	
GO
USE [phoenix]
GO
-- 25789 : Ajout d'une nouvelle fonctionnalité dans l'ACL
--Insertion d'un nouveau controleur : indicateursca, associé au module reporting
INSERT INTO [phoenix].[dbo].[acl_interfaces_controllers]
           ([module_id],
            [interface_name],
            [controller_name])
     VALUES
           ('9', 'pilotage', 'pilotage')
GO

--Insertion d'une nouvelle fonctionnalitées 
INSERT INTO [phoenix].[dbo].[acl_fonctionnalites]
           ([int_cont_id]
           ,[fonc_name])
     VALUES
           ((select top 1 int_cont_id from [phoenix].[dbo].[acl_interfaces_controllers] order by(int_cont_id) desc ), 
           'AccÃ¨s Ã  l''interface')
GO

--insertion d'une nouvelles actions : index pour le controleur indicateursca
INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id],
            [action_name],
            [fonc_id])
     VALUES
           ((select top 1 int_cont_id from [phoenix].[dbo].[acl_interfaces_controllers] order by(int_cont_id) desc),
            'index',
           (SELECT top 1 fonc_id FROM [phoenix].[dbo].[acl_fonctionnalites] order by (fonc_id) desc))
GO

--25789 : Ajout d'une nouvelle fonctionnalité d'accès à l'indicateursde de pilotage pilotage CA
INSERT INTO acl_fonctionnalites ([int_cont_id], [fonc_name]) VALUES (
(select top 1 int_cont_id from [phoenix].[dbo].[acl_interfaces_controllers] order by(int_cont_id) desc)
, 'REPORTING PILOTAGE INDICATEUR CA')

GO


--26746 : Ajout des champs date_last_update, date_last_update_fr, date_edition, rel_echance view View_Compta_Relances

/****** Object:  View [dbo].[View_Compta_Relances]    Script Date: 10/27/2014 10:17:29 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO


ALTER VIEW [dbo].[View_Compta_Relances]
AS
SELECT     dbo.relances.rel_id, dbo.relances.rel_reference, dbo.relances.cl_id, dbo.clients.cl_libelle, dbo.relances.rel_parent_id, CONVERT(char, dbo.relances.date_create, 103) 
                      AS date_create_fr,
                          (SELECT     SUM(montant_a_regler) AS Expr1
                            FROM          dbo.lnk_relance_facture
                            WHERE      (actif = 1) AND (rel_id = dbo.relances.rel_id)) AS montant_a_regler, dbo.r_relance_statuts.r_rel_statut_libelle, dbo.r_relance_types.r_rel_type_libelle,
                      dbo.relances.rel_statut_id, dbo.relances.rel_type_id, dbo.relances.rel_echeance AS rel_echeance, CONVERT(char, dbo.relances.rel_echeance, 103) AS rel_echeance_fr,
                          (SELECT     TOP (1) date_create AS Expr1
                            FROM          dbo.relance_statuts
                            WHERE      (rel_id = dbo.relances.rel_id) AND (r_rel_stat_id = 2)
                            ORDER BY date_create DESC) AS date_edition,                          
                          (SELECT     TOP (1) CONVERT(char, date_create, 103) AS Expr1
                            FROM          dbo.relance_statuts
                            WHERE      (rel_id = dbo.relances.rel_id) AND (r_rel_stat_id = 2)
                            ORDER BY date_create DESC) AS date_edition_fr,
                            (SELECT     TOP (1) date_create AS Expr1
                            FROM          dbo.relance_statuts
                            WHERE      (rel_id = dbo.relances.rel_id) 
                            ORDER BY date_create DESC) AS date_last_update,
                            (SELECT     TOP (1) CONVERT(char, date_create, 103) AS Expr1
                            FROM          dbo.relance_statuts
                            WHERE      (rel_id = dbo.relances.rel_id) 
                            ORDER BY date_create DESC) AS date_last_update_fr
							, dbo.relances.date_create
FROM         dbo.relances INNER JOIN
                      dbo.r_relance_types ON dbo.relances.rel_type_id = dbo.r_relance_types.r_rel_type_id INNER JOIN
                      dbo.clients ON dbo.relances.cl_id = dbo.clients.cl_id INNER JOIN
                      dbo.r_relance_statuts ON dbo.relances.rel_statut_id = dbo.r_relance_statuts.r_rel_statut_id

GO

COMMIT

GO




