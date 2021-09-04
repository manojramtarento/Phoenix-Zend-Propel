--#30176 : ajout champ fact_email
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
ALTER TABLE dbo.factures ADD
	fact_email nvarchar(255) NULL
GO
ALTER TABLE dbo.factures SET (LOCK_ESCALATION = TABLE)
GO
COMMIT
select Has_Perms_By_Name(N'dbo.factures', 'Object', 'ALTER') as ALT_Per, Has_Perms_By_Name(N'dbo.factures', 'Object', 'VIEW DEFINITION') as View_def_Per, Has_Perms_By_Name(N'dbo.factures', 'Object', 'CONTROL') as Contr_Per 


-- ajout echéance de factture acquittée
INSERT INTO [phoenix_prod].[dbo].[r_facture_options_echeances]
           ([fact_opt_echeance_libelle]
           ,[actif]
           ,[fact_opt_echeance_libelle_en])
     VALUES
           ('Facture acquittÃ©e'
           ,0
           ,'Paid invoice')
GO




-- maj champs null => 0
update r_prestations set r_p_is_mandatory = 0 where r_p_is_mandatory is null
update r_operation_type_sub_tpl_prestation set ost_tpl_prestation_is_mandatory =0 where ost_tpl_prestation_is_mandatory is null
update r_operation_options_tpl set r_op_option_tpl_is_mandatory = 0 where r_op_option_tpl_is_mandatory is null