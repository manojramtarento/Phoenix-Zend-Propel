
/* Pour éviter les problèmes éventuels de perte de données, passez attentivement ce script en revue avant de l'exécuter en dehors du contexte du Concepteur de bases de données.*/
BEGIN TRANSACTION
SET QUOTED_IDENTIFIER ON
SET ARITHABORT ON
SET NUMERIC_ROUNDABORT OFF
SET CONCAT_NULL_YIELDS_NULL ON
SET ANSI_NULLS ON
SET ANSI_PADDING ON
SET ANSI_WARNINGS ON
COMMIT
BEGIN TRANSACTION
GO
CREATE TABLE dbo.Tmp_plan_facturation_details
	(
	pfd_id int NOT NULL IDENTITY (1, 1),
	op_id int NOT NULL,
	pfd_type_fact_id tinyint NOT NULL,
	pfd_date_planif datetime NOT NULL,
	pfd_taux_adf int NULL,
	pfd_taux_partiel int NULL,
	pfd_id_to_cancel int NULL,
	pfd_fact_annul int NULL,
	pfd_fact_id int NULL,
	date_create datetime NULL,
	date_modify datetime NULL,
	user_id int NULL,
	user_modify int NULL,
	pfd_num_cmd nvarchar(50) NULL
	)  ON [PRIMARY]
GO
ALTER TABLE dbo.Tmp_plan_facturation_details SET (LOCK_ESCALATION = TABLE)
GO
SET IDENTITY_INSERT dbo.Tmp_plan_facturation_details ON
GO
IF EXISTS(SELECT * FROM dbo.plan_facturation_details)
	 EXEC('INSERT INTO dbo.Tmp_plan_facturation_details (pfd_id, op_id, pfd_type_fact_id, pfd_date_planif, pfd_taux_adf, pfd_taux_partiel, pfd_id_to_cancel, pfd_fact_annul, pfd_fact_id, date_create, date_modify, user_id, user_modify, pfd_num_cmd)
		SELECT pfd_id, op_id, pfd_type_fact_id, pfd_date_planif, CONVERT(int, pfd_taux_adf), CONVERT(int, pfd_taux_partiel), pfd_id_to_cancel, pfd_fact_annul, pfd_fact_id, date_create, date_modify, user_id, user_modify, pfd_num_cmd FROM dbo.plan_facturation_details WITH (HOLDLOCK TABLOCKX)')
GO
SET IDENTITY_INSERT dbo.Tmp_plan_facturation_details OFF
GO
DROP TABLE dbo.plan_facturation_details
GO
EXECUTE sp_rename N'dbo.Tmp_plan_facturation_details', N'plan_facturation_details', 'OBJECT' 
GO
ALTER TABLE dbo.plan_facturation_details ADD CONSTRAINT
	PK_plan_facturation_details PRIMARY KEY CLUSTERED 
	(
	pfd_id
	) WITH( STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]

GO
CREATE NONCLUSTERED INDEX FK_OpId ON dbo.plan_facturation_details
	(
	op_id
	) WITH( STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
COMMIT
select Has_Perms_By_Name(N'dbo.plan_facturation_details', 'Object', 'ALTER') as ALT_Per, Has_Perms_By_Name(N'dbo.plan_facturation_details', 'Object', 'VIEW DEFINITION') as View_def_Per, Has_Perms_By_Name(N'dbo.plan_facturation_details', 'Object', 'CONTROL') as Contr_Per 