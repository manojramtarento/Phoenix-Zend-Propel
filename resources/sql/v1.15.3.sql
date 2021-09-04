USE [phoenix]
GO
-- ####################### Alter Querys ####################################################

-- ################## Start Transaction ##############################################
BEGIN TRANSACTION	
GO

-- ####################### Insert Querys ####################################################

-- #31633 : Ajout de l'action blocksalesteammembers at association de cette action à la fonctionnalité Génération d'une liste paginée

INSERT INTO dbo.acl_actions
([int_cont_id], [action_name], [fonc_id], [comment])
VALUES
(12, 'blocksalesteammembers', 61, 'AJAX - Affichage des membres de l''Ã©quipe de vente')

GO

COMMIT


GO
