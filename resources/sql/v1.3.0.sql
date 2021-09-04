/****** Object:  View [dbo].[View_Operation_Tasks_Listing]    Script Date: 01/15/2014 10:47:50 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

ALTER VIEW [dbo].[View_Operation_Tasks_Listing]
AS
SELECT     dbo.operation_tasks.op_task_id, dbo.operation_tasks.op_id, dbo.operations.op_number, dbo.operation_tasks.op_task_type_id, 
                      dbo.operation_tasks.op_task_deadline, dbo.operation_tasks.op_task_alerte, dbo.operation_tasks.op_task_retard, dbo.operation_tasks.op_task_duree_estim, 
                      dbo.operation_tasks.op_task_duree_reelle, dbo.operation_tasks.op_task_done, dbo.r_operation_tasks_type.r_op_task_type_libelle, 
                      dbo.operation_tasks.op_task_comments, dbo.operation_tasks.user_id, users_assign.user_nom + N' ' + users_assign.user_prenom AS assign_to_user, 
                      users_notify.user_nom + N' ' + users_notify.user_prenom AS notify_to_user, acl_groups_notify.group_name AS notify_to_group, 
                      acl_groups_assign.group_name AS assign_to_group, dbo.operation_tasks.op_task_assign_to_user, dbo.operation_tasks.op_task_notify_to_user, 
                      dbo.operation_tasks.op_task_assign_to_group, dbo.operation_tasks.op_task_notify_to_group, 
                      user_create.user_nom + N' ' + user_create.user_prenom AS user_create_name, dbo.operation_tasks.op_task_detail, dbo.operations.op_cp_id, 
                      dbo.operations.op_dc_id, dbo.operations.op_libelle
FROM         dbo.users AS users_assign RIGHT OUTER JOIN
                      dbo.operation_tasks ON users_assign.user_id = dbo.operation_tasks.op_task_assign_to_user LEFT OUTER JOIN
                      dbo.users AS users_notify ON dbo.operation_tasks.op_task_notify_to_user = users_notify.user_id LEFT OUTER JOIN
                      dbo.acl_groups AS acl_groups_notify ON dbo.operation_tasks.op_task_notify_to_group = acl_groups_notify.group_id LEFT OUTER JOIN
                      dbo.acl_groups AS acl_groups_assign ON dbo.operation_tasks.op_task_assign_to_group = acl_groups_assign.group_id LEFT OUTER JOIN
                      dbo.operations ON dbo.operation_tasks.op_id = dbo.operations.op_id LEFT OUTER JOIN
                      dbo.users AS user_create ON dbo.operation_tasks.user_id = user_create.user_id LEFT OUTER JOIN
                      dbo.r_operation_tasks_type ON dbo.operation_tasks.op_task_type_id = dbo.r_operation_tasks_type.r_op_task_type_id

GO

