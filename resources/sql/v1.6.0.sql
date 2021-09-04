-- maj date echeance pour ADF non édités
update factures
set fact_echeance_id=1
where r_fact_type_id in (1,2)
and fact_status_id in (1,2)

-- ajout delai devis traduit
BEGIN TRANSACTION
GO
ALTER TABLE dbo.r_delai_devis ADD
	r_delai_devis_libelle_en nvarchar(50) NULL
GO
ALTER TABLE dbo.r_delai_devis SET (LOCK_ESCALATION = TABLE)
GO
COMMIT

update [r_delai_devis] set [r_delai_devis_libelle_en]='15 days' where [r_delai_devis_id]=1
update [r_delai_devis] set [r_delai_devis_libelle_en]='1 month' where [r_delai_devis_id]=2
update [r_delai_devis] set [r_delai_devis_libelle_en]='3 months' where [r_delai_devis_id]=3


/****** Object:  View [dbo].[View_Rrubrique_Listing]    Script Date: 04/07/2014 12:46:40 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

ALTER VIEW [dbo].[View_Rrubrique_Listing]
AS
SELECT     RRUB.r_rub_libelle, RRUBTYPE.rubrique_type_libelle, RTVATYPE.r_tva_libelle, RRUB.r_rub_id, RRUB.r_rub_type_id, RRUB.r_tva_type_id, RRUB.actif, 
                      RRUBTYPE.frais_fixe, RRUB.r_rub_libelle_en
FROM         dbo.r_rubriques AS RRUB LEFT OUTER JOIN
                      dbo.r_rubriques_type AS RRUBTYPE ON RRUBTYPE.rubrique_type_id = RRUB.r_rub_type_id LEFT OUTER JOIN
                      dbo.r_tva_type AS RTVATYPE ON RTVATYPE.r_tva_id = RRUB.r_tva_type_id

GO


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
ALTER TABLE dbo.r_facture_options_echeances
	DROP CONSTRAINT DF_r_facture_options_echeances_actif
GO
CREATE TABLE dbo.Tmp_r_facture_options_echeances
	(
	fact_opt_echeance_id tinyint NOT NULL IDENTITY (1, 1),
	fact_opt_echeance_libelle nvarchar(60) NULL,
	actif bit NULL,
	fact_opt_echeance_libelle_en nvarchar(60) NULL
	)  ON [PRIMARY]
GO
ALTER TABLE dbo.Tmp_r_facture_options_echeances SET (LOCK_ESCALATION = TABLE)
GO
ALTER TABLE dbo.Tmp_r_facture_options_echeances ADD CONSTRAINT
	DF_r_facture_options_echeances_actif DEFAULT ((1)) FOR actif
GO
SET IDENTITY_INSERT dbo.Tmp_r_facture_options_echeances ON
GO
IF EXISTS(SELECT * FROM dbo.r_facture_options_echeances)
	 EXEC('INSERT INTO dbo.Tmp_r_facture_options_echeances (fact_opt_echeance_id, fact_opt_echeance_libelle, actif, fact_opt_echeance_libelle_en)
		SELECT fact_opt_echeance_id, fact_opt_echeance_libelle, actif, fact_opt_echeance_libelle_en FROM dbo.r_facture_options_echeances WITH (HOLDLOCK TABLOCKX)')
GO
SET IDENTITY_INSERT dbo.Tmp_r_facture_options_echeances OFF
GO
DROP TABLE dbo.r_facture_options_echeances
GO
EXECUTE sp_rename N'dbo.Tmp_r_facture_options_echeances', N'r_facture_options_echeances', 'OBJECT' 
GO
ALTER TABLE dbo.r_facture_options_echeances ADD CONSTRAINT
	PK_r_facture_options_echeances PRIMARY KEY CLUSTERED 
	(
	fact_opt_echeance_id
	) WITH( STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]

GO
COMMIT


update r_facture_options_echeances 
set r_facture_options_echeances.fact_opt_echeance_libelle = '30 jours nets Ã  compter de sa rÃ©ception'
where r_facture_options_echeances.fact_opt_echeance_id=2

update r_facture_options_echeances 
set r_facture_options_echeances.fact_opt_echeance_libelle = '15 jours nets Ã  compter de sa rÃ©ception'
where r_facture_options_echeances.fact_opt_echeance_id=5



--ajout tache pour TAS
insert into r_operation_type_sub_tasks(ost_id,r_op_task_type_id) values (10,85)

