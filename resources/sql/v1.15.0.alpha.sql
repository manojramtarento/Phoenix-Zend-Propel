-- ####################### Alter Query ####################################################
-- #29147 : Ajout du champs [r_tva_libelle_fact_synthese_en] dans la table r_tva_type
ALTER TABLE [phoenix].[dbo].[r_tva_type] ADD [r_tva_libelle_fact_synthese_en]  [nvarchar](50) NULL;

-- ####################### Start Transaction ##############################################
BEGIN TRANSACTION	
GO
USE [phoenix]
GO

-- #29147 : mise à jour du champs [r_tva_libelle_fact_synthese_en] par [r_tva_libelle_fact_en]
UPDATE [phoenix].[dbo].[r_tva_type] SET r_tva_libelle_fact_synthese_en = r_tva_libelle_en;
GO

/* #29144 retour changement de libellés (rename Non Soumis TVA to Budget estimé non soumis TVA) */
UPDATE [phoenix].[dbo].[r_tva_type] 
set r_tva_libelle = 'Non soumis TVA', r_tva_libelle_en = 'Not submitted to VAT', r_tva_libelle_fact_synthese_en = 'Subtotal not submitted to VAT' 
 WHERE r_tva_id = 3
GO

/* #29144 retour changement de libellés (rename Frais TTC to Frais TTC estimés (débours) ) */
UPDATE [phoenix].[dbo].[r_tva_type] 
set r_tva_libelle = 'Frais TTC', r_tva_libelle_fact_synthese = 'Frais TTC (dÃ©bours)', r_tva_libelle_en = 'Refund'
WHERE r_tva_id = 4
GO

/* #29144 retour changement de libellés (rename soumis TVA xx % to TVA xx %) */
update [phoenix].[dbo].[r_tva_type] set r_tva_libelle = REPLACE(r_tva_libelle, 'TVA', 'Soumis TVA') where r_tva_libelle LIKE 'Soumis TVA %'
GO

COMMIT

GO

