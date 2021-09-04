
BEGIN TRANSACTION
GO
ALTER TABLE dbo.operations ADD
	op_date_last_compil_data datetime NULL
GO
ALTER TABLE dbo.operations SET (LOCK_ESCALATION = TABLE)
GO
COMMIT