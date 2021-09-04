USE [phoenix]
GO
BEGIN TRANSACTION	
GO
--Ajout d'un nouveau groupe AD ReferentsErp
INSERT INTO [acl_groups]
           ([group_name])
     VALUES
           ('GP.ReferentsErp')
GO
COMMIT
