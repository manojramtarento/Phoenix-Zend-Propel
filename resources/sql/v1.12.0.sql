alter table phoenix.dbo.users add user_language nchar(10) NULL

update r_operation_sales_teams
set r_ope_sales_team_libelle='Internationale'
where [r_ope_sales_team_id]=3


BEGIN TRANSACTION
GO
ALTER TABLE dbo.client_facture_options ADD
	plan_fact_periode_id tinyint NULL,
	plan_fact_periode_type_id tinyint NULL
GO
ALTER TABLE dbo.client_facture_options SET (LOCK_ESCALATION = TABLE)
GO
DELETE FROM phoenix..r_operation_type_tasks
WHERE ot_task_id NOT IN (2,4,36,70,105)

GO

DELETE FROM phoenix..r_operation_type_sub_tasks
WHERE ost_task_id NOT IN (4,3,9,11,13,34,32,30,24,25,46
,45,51,53,55,82,81,80,65,88,70
,75,67,360,363,368,358,373,374,375,116,114,
115,99,122,109,101,394,402,397,392,415,
408,407,409,155,154,153,144,137,150,134,
147,140,176,196,205,206,207,236,425,227,
222,219,249,269,278,279,280,313,312,311,
292,303,298,301,308,324,338,348,349,350
)

GO

DELETE from phoenix..r_operation_options_tasks
WHERE option_task_id NOT IN (5,7,9,11,14,24,28,34,38,44,48,54,57,63,66,72,75,81,86,92,94,96,107,113,115,117)

COMMIT