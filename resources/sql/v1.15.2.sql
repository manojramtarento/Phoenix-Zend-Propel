USE [phoenix]
GO
-- ####################### Alter Querys ####################################################

-- ################## Start Transaction ##############################################
BEGIN TRANSACTION	
GO

-- ####################### Update Querys ####################################################

-- 31533 Réparation des libellés des prestations concernés par le bug des intitulés vides

UPDATE [dbo].[operation_prestations] SET 
op_prest_libelle_devis = op_prest_libelle
WHERE op_prest_id IN (
126747,
124693,
124692,
124691,
124690,
122397
)
AND op_prest_libelle_devis IS NULL

GO

COMMIT


GO
