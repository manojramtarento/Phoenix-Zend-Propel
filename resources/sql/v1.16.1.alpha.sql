USE [phoenix]
GO
-- ####################### Alter Querys ####################################################

-- ################## Start Transaction ##############################################
BEGIN TRANSACTION	
GO

-- ####################### Insert Querys ####################################################

-- #31633 : Ajout de l'utilisateur Yves HONORE à l'équipe de vente internationale
INSERT INTO dbo.operation_sales_teams
([sales_team_id], [user_id])
VALUES
(3, 16)

GO

COMMIT


GO
