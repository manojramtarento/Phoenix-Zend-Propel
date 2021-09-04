USE [phoenix]

-- ################## Start Transaction ##############################################
BEGIN TRANSACTION	
GO

/* #29144 Frais TTC à passer en "Frais TTC (débours)"  */
UPDATE [r_tva_type] 
set r_tva_libelle = 'Frais TTC (dÃ©bours)'
WHERE r_tva_id = 4
GO


/* #29144 rename soumis TVA xx % to TVA xx % */
UPDATE [r_tva_type] 
set r_tva_libelle = 'TVA 5,5%', r_tva_libelle_en = 'VAT 5,5%'
WHERE r_tva_id  = 1
GO

UPDATE [r_tva_type] 
set r_tva_libelle = 'TVA 19,6%', r_tva_libelle_en = 'VAT 19,6%'
WHERE r_tva_id  = 2
GO

UPDATE [r_tva_type] 
set r_tva_libelle = 'TVA 20%', r_tva_libelle_en = 'VAT 20%'
WHERE r_tva_id  = 5
GO

UPDATE [r_tva_type] 
set r_tva_libelle = 'TVA 8,5%', r_tva_libelle_en = 'VAT 8,5%'
WHERE r_tva_id  = 6
GO


-- #29147 : mise à jour du champs [r_tva_libelle_fact_synthese_en] par [r_tva_libelle_fact_en]
UPDATE [phoenix].[dbo].[r_tva_type] SET r_tva_libelle_fact_synthese_en = r_tva_libelle_en;
GO

/* #29144 Traduction */
UPDATE [phoenix].[dbo].[r_tva_type] 
set r_tva_libelle_en = 'Not submitted to VAT', r_tva_libelle_fact_synthese_en = 'Subtotal not submitted to VAT' 
 WHERE r_tva_id = 3
GO

COMMIT

GO