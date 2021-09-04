-- #29636 typage champ file version de la table files de tinyint => integer
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
CREATE TABLE dbo.Tmp_files
     (
     file_id int NOT NULL IDENTITY (1, 1),
     file_category_id tinyint NULL,
     file_version int NULL,
     file_entity_name nvarchar(50) NULL,
     file_entity_id int NULL,
     file_name nvarchar(150) NULL,
     date_create datetime NULL,
     user_id int NULL
     )  ON [PRIMARY]
GO
ALTER TABLE dbo.Tmp_files SET (LOCK_ESCALATION = TABLE)
GO
SET IDENTITY_INSERT dbo.Tmp_files ON
GO
IF EXISTS(SELECT * FROM dbo.files)
     EXEC('INSERT INTO dbo.Tmp_files (file_id, file_category_id, file_version, file_entity_name, file_entity_id, file_name, date_create, user_id)
          SELECT file_id, file_category_id, CONVERT(int, file_version), file_entity_name, file_entity_id, file_name, date_create, user_id FROM dbo.files WITH (HOLDLOCK TABLOCKX)')
GO
SET IDENTITY_INSERT dbo.Tmp_files OFF
GO
DROP TABLE dbo.files
GO
EXECUTE sp_rename N'dbo.Tmp_files', N'files', 'OBJECT' 
GO
ALTER TABLE dbo.files ADD CONSTRAINT
     PK_files PRIMARY KEY CLUSTERED 
     (
     file_id
     ) WITH( STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]

GO
ALTER TABLE dbo.files ADD CONSTRAINT
     IX_files UNIQUE NONCLUSTERED 
     (
     file_category_id,
     file_version,
     file_entity_name,
     file_entity_id
     ) WITH( STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]

GO
COMMIT
select Has_Perms_By_Name(N'dbo.files', 'Object', 'ALTER') as ALT_Per, Has_Perms_By_Name(N'dbo.files', 'Object', 'VIEW DEFINITION') as View_def_Per, Has_Perms_By_Name(N'dbo.files', 'Object', 'CONTROL') as Contr_Per 