USE phoenix;

SET NAMES 'utf8';

-- include the partial invoice receipt to export invoiced amount column in costs validations  (Ticket : 52488)

CREATE OR REPLACE VIEW View_Prestation_Quantitee_Facturee
AS
SELECT FP.op_prest_id, SUM(FP.fact_prest_quantite_facture_final) AS quantite_facturee
FROM factures AS F
LEFT JOIN factures_rubriques AS FR ON F.fact_id = FR.fact_id
LEFT JOIN factures_prestations AS FP ON FP.fact_rub_id = FR.fact_rub_id
WHERE F.fact_status_id IN (3, 4 , 5)
group by FP.op_prest_id;