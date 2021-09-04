
/****** Object:  View [dbo].[View_Rprestation_Listing]    Script Date: 06/04/2014 14:57:10 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

ALTER VIEW [dbo].[View_Rprestation_Listing]
AS
SELECT     RPREST.r_prestation_id, RPREST.r_p_libelle, RPREST.r_p_controle, RPAXE1.r_p_axe1_libelle AS r_p_axe1, RPAXE2.r_p_axe2_libelle AS r_p_axe2, 
                      RPAXE3.r_p_axe3_libelle AS r_p_axe3, RPAXE4.r_p_axe4_libelle AS r_p_axe4, RPAXE5.r_p_axe5_libelle AS r_p_axe5, RPREST.r_p_code_comptable, 
                      RPREST.r_p_adf, RPREST.r_p_commentaires, RPREST.r_p_description_fr, RPREST.r_p_qui_valide, RPREST.r_p_cout_interne, RPREST.r_p_cout_externe, 
                      RPREST.r_p_cout_total, RTYPEVALID.r_p_type_validation_libelle, RPREST.r_p_taux_marge_min, RPREST.r_p_prix_vente, RPREST.actif, RPREST.valide_daf, 
                      RPAXE1.r_p_axe1_id, RPAXE2.r_p_axe2_id, RPAXE3.r_p_axe3_id, RPAXE4.r_p_axe4_id, RPAXE5.r_p_axe5_id, RPREST.r_p_validation_id, 
                      RTYPEFRAIS.r_p_type_frais_libelle, RPREST.r_p_type_frais_id, RPREST.r_p_groupe_validation_id, RPREST.date_create, RPREST.date_modify, 
                      RPREST.user_modify, RPREST.r_p_tva_id, dbo.r_tva_type.r_tva_libelle, RPREST.r_p_description_en, RPREST.r_p_libelle_en, 
                      RPREST.r_p_couts_estimes_modifiables, (RPREST.r_p_prix_vente - RPREST.r_p_cout_total) / RPREST.r_p_cout_total * 100 AS r_p_taux_marge, 
                      dbo.acl_groups.group_name AS r_p_groupe_validation_libelle, RPREST.r_p_is_maj_from_compiluo, RPREST.r_p_is_eligible_for_prime
FROM         dbo.r_prestations AS RPREST LEFT OUTER JOIN
                      dbo.acl_groups ON RPREST.r_p_groupe_validation_id = dbo.acl_groups.group_id LEFT OUTER JOIN
                      dbo.r_p_axe1 AS RPAXE1 ON RPAXE1.r_p_axe1_id = RPREST.r_p_axe1 LEFT OUTER JOIN
                      dbo.r_p_axe2 AS RPAXE2 ON RPAXE2.r_p_axe2_id = RPREST.r_p_axe2 LEFT OUTER JOIN
                      dbo.r_p_axe3 AS RPAXE3 ON RPAXE3.r_p_axe3_id = RPREST.r_p_axe3 LEFT OUTER JOIN
                      dbo.r_p_axe4 AS RPAXE4 ON RPAXE4.r_p_axe4_id = RPREST.r_p_axe4 LEFT OUTER JOIN
                      dbo.r_p_axe5 AS RPAXE5 ON RPAXE5.r_p_axe5_id = RPREST.r_p_axe5 LEFT OUTER JOIN
                      dbo.r_p_type_validation AS RTYPEVALID ON RTYPEVALID.r_p_type_validation_id = RPREST.r_p_validation_id LEFT OUTER JOIN
                      dbo.r_p_type_frais AS RTYPEFRAIS ON RTYPEFRAIS.r_p_type_frais_id = RPREST.r_p_type_frais_id LEFT OUTER JOIN
                      dbo.r_tva_type ON RPREST.r_p_tva_id = dbo.r_tva_type.r_tva_id

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
CREATE TABLE dbo.Tmp_operation_prestations_factures_achats
	(
	op_prest_achat_id int NOT NULL IDENTITY (1, 1),
	op_prest_id int NOT NULL,
	op_prest_achat_num_facture nvarchar(20) NOT NULL,
	op_prest_achat_date_facture datetime NULL,
	op_prest_achat_quantite int NULL,
	op_prest_achat_cout_interne numeric(18, 3) NULL,
	op_prest_achat_cout_externe numeric(18, 3) NULL,
	op_prest_achat_file_id int NULL
	)  ON [PRIMARY]
GO
ALTER TABLE dbo.Tmp_operation_prestations_factures_achats SET (LOCK_ESCALATION = TABLE)
GO
SET IDENTITY_INSERT dbo.Tmp_operation_prestations_factures_achats ON
GO
IF EXISTS(SELECT * FROM dbo.operation_prestations_factures_achats)
	 EXEC('INSERT INTO dbo.Tmp_operation_prestations_factures_achats (op_prest_achat_id, op_prest_id, op_prest_achat_num_facture, op_prest_achat_date_facture, op_prest_achat_quantite, op_prest_achat_cout_interne, op_prest_achat_cout_externe, op_prest_achat_file_id)
		SELECT op_prest_achat_id, op_prest_id, op_prest_achat_num_facture, op_prest_achat_date_facture, op_prest_achat_quantite, CONVERT(numeric(18, 3), op_prest_achat_cout_interne), CONVERT(numeric(18, 3), op_prest_achat_cout_externe), op_prest_achat_file_id FROM dbo.operation_prestations_factures_achats WITH (HOLDLOCK TABLOCKX)')
GO
SET IDENTITY_INSERT dbo.Tmp_operation_prestations_factures_achats OFF
GO
DROP TABLE dbo.operation_prestations_factures_achats
GO
EXECUTE sp_rename N'dbo.Tmp_operation_prestations_factures_achats', N'operation_prestations_factures_achats', 'OBJECT' 
GO
ALTER TABLE dbo.operation_prestations_factures_achats ADD CONSTRAINT
	PK_operation_prestations_factures_achats PRIMARY KEY CLUSTERED 
	(
	op_prest_achat_id
	) WITH( STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]

GO
COMMIT