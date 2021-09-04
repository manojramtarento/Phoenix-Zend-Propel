BEGIN TRANSACTION	
GO
USE [phoenix]
GO
INSERT INTO [phoenix].[dbo].[acl_actions]
           ([int_cont_id]
           ,[action_name]
           ,[fonc_id]
           ,[comment])
     VALUES
           ((SELECT int_cont_id FROM acl_interfaces_controllers
			WHERE module_id = 3 and interface_name = 'listing' and controller_name = 'listing'),
           'blocksalesteammembers',
            (SELECT fonc_id FROM acl_fonctionnalites
			WHERE int_cont_id = (
			SELECT int_cont_id FROM acl_interfaces_controllers
			WHERE module_id = 3 and interface_name = 'listing' and controller_name = 'listing')),
            'AJAX - Affichage des membres de l''équipe de vente'
           )
GO
COMMIT