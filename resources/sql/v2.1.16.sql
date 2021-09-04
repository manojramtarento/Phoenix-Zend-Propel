USE phoenix;

-- *********************** --
-- BLOCK QUERY TYPE CREATE --
-- *********************** --
-- 44268 Creating a new view that contains the estimated operation amounts

CREATE OR REPLACE VIEW view_operation_estimated_amounts AS
SELECT op.op_id,
(SELECT COALESCE(SUM(oprest.op_prest_mestim), 0)
FROM operation_prestations oprest
WHERE oprest.op_prest_off = 0 AND oprest.op_prest_npa = 0
AND oprest.op_prest_code_comptable LIKE '70%'
AND oprest.op_id = op.op_id) AS 'montant_total_estime_ca',

(SELECT COALESCE(SUM(oprest.op_prest_mestim * tva.r_tva_coeff), 0)
FROM operation_prestations oprest
LEFT JOIN operation_rubriques oprub ON oprub.op_rubrique_id = oprest.op_prest_rubri_id
LEFT JOIN r_tva_type tva ON tva.r_tva_id = oprub.r_tva_type_id
WHERE oprest.op_prest_off = 0 AND oprest.op_prest_npa = 0
AND oprest.op_id = op.op_id) as 'montant_total_estime_ttc'

FROM operations op;