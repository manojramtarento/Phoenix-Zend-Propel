use phoenix;

-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE UPDATE --
-- *********************** --

-- 39519 Updating external realized cost for purchased type services
UPDATE operation_prestations op
    INNER JOIN
(
SELECT op_prest_id, (SUM(op_prest_achat_quantite * op_prest_achat_cout_externe)/SUM(op_prest_achat_quantite)) as external_realized_cost
FROM operation_prestations_factures_achats
GROUP BY op_prest_id
) AS external_realized_cost_by_service

ON external_realized_cost_by_service.op_prest_id = op.op_prest_id
SET op.op_prest_cereel = external_realized_cost_by_service.external_realized_cost;

