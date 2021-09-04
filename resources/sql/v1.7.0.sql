
/****** Object:  View [dbo].[View_Operation_ADF]    Script Date: 04/18/2014 12:09:31 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

ALTER VIEW [dbo].[View_Operation_ADF]
AS
SELECT     op_id,
                          (SELECT     SUM(dbo.operation_prestations.op_prest_mestim * dbo.r_tva_type.r_tva_coeff) AS Expr1
                            FROM          dbo.operation_prestations INNER JOIN
                                                   dbo.operation_rubriques ON dbo.operation_prestations.op_prest_rubri_id = dbo.operation_rubriques.op_rubrique_id INNER JOIN
                                                   dbo.r_tva_type ON dbo.operation_rubriques.r_tva_type_id = dbo.r_tva_type.r_tva_id
                            WHERE      (dbo.operation_prestations.op_adf = 1) AND (dbo.operation_prestations.op_id = Op.op_id)) AS ADF_Estim,
                          (SELECT     SUM(dbo.factures_prestations.fact_prest_montant_facture_final * r_tva_type_1.r_tva_coeff) AS Expr1
                            FROM          dbo.factures INNER JOIN
                                                   dbo.factures_rubriques ON dbo.factures.fact_id = dbo.factures_rubriques.fact_id INNER JOIN
                                                   dbo.factures_prestations ON dbo.factures_rubriques.fact_rub_id = dbo.factures_prestations.fact_rub_id INNER JOIN
                                                   dbo.r_tva_type AS r_tva_type_1 ON dbo.factures_prestations.r_tva_type_id = r_tva_type_1.r_tva_id
                            WHERE      (dbo.factures.op_id = Op.op_id) AND (dbo.factures.fact_status_id IN (3, 4, 5)) AND (dbo.factures_prestations.fact_prest_adf = 1)) AS ADF_Facture,
                          (SELECT     SUM(factures_prestations_1.fact_prest_montant_facture_final * r_tva_type_1.r_tva_coeff) AS Expr1
                            FROM          dbo.factures AS factures_1 INNER JOIN
                                                   dbo.factures_rubriques AS factures_rubriques_1 ON factures_1.fact_id = factures_rubriques_1.fact_id INNER JOIN
                                                   dbo.factures_prestations AS factures_prestations_1 ON factures_rubriques_1.fact_rub_id = factures_prestations_1.fact_rub_id INNER JOIN
                                                   dbo.r_tva_type AS r_tva_type_1 ON factures_prestations_1.r_tva_type_id = r_tva_type_1.r_tva_id
                            WHERE      (factures_1.op_id = Op.op_id) AND (factures_1.fact_status_id IN (4, 5)) AND (factures_prestations_1.fact_prest_adf = 1)) AS ADF_Encaisse,
                          (SELECT     SUM(operation_prestations_1.op_prest_mreel * r_tva_type_2.r_tva_coeff) AS Expr1
                            FROM          dbo.operation_prestations AS operation_prestations_1 INNER JOIN
                                                   dbo.operation_rubriques AS operation_rubriques_1 ON operation_prestations_1.op_prest_rubri_id = operation_rubriques_1.op_rubrique_id INNER JOIN
                                                   dbo.r_tva_type AS r_tva_type_2 ON operation_rubriques_1.r_tva_type_id = r_tva_type_2.r_tva_id
                            WHERE      (operation_prestations_1.op_id = Op.op_id) AND (operation_prestations_1.op_adf = 1)) AS ADF_Reel,
                          (SELECT     SUM(Utilise) AS Expr1
                            FROM          arthur_param.dbo.vue_phoenix_documents_global
                            WHERE      (op_id = Op.op_id)) AS ADF_Utilise
FROM         dbo.operations AS Op

GO




