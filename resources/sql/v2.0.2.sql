 -- 37959 : Correction first accepted quotes indicator 1_1

CREATE OR REPLACE VIEW Indicateur_1_1 AS
SELECT clients.cl_libelle,
       operations.op_number,
       operations.op_libelle,
       r_custom_activites.act_libelle,
       r_operation_type.ot_libelle,
       r_operation_type_sub.ost_libelle,
       CONCAT(users_dc.user_nom, ' ', users_dc.user_prenom) AS dc,
       CONCAT(users_cp.user_nom, ' ', users_cp.user_prenom) AS cp,

  (SELECT SUM(r_tva_type.r_tva_coeff * operation_prestations.op_prest_mestim) AS Expr1
   FROM operation_prestations
   INNER JOIN operation_rubriques ON operation_prestations.op_prest_rubri_id = operation_rubriques.op_rubrique_id
   INNER JOIN r_tva_type ON operation_rubriques.r_tva_type_id = r_tva_type.r_tva_id
   WHERE operation_rubriques.op_id = operations.op_id
     AND operation_prestations.op_prest_off = 0
     AND operation_prestations.op_prest_npa = 0) AS montant_ttc,

  (SELECT date_create
   FROM View_Operation_Status
   WHERE hs_new_statut_id = 2
     AND op_id = operations.op_id) AS date_accepte,
       operations.op_status_id,
       r_operation_status.os_libelle,
       '0' AS is_reactivated
FROM View_Operation_Status
INNER JOIN operations ON View_Operation_Status.op_id = operations.op_id
AND View_Operation_Status.hs_new_statut_id = operations.op_status_id
LEFT OUTER JOIN r_operation_status ON operations.op_status_id = r_operation_status.os_id
LEFT OUTER JOIN r_operation_type_sub ON operations.op_subtype_id = r_operation_type_sub.ost_id
LEFT OUTER JOIN r_custom_activites ON operations.op_act_id = r_custom_activites.act_id
LEFT OUTER JOIN users AS users_dc ON operations.op_dc_id = users_dc.user_id
LEFT OUTER JOIN users AS users_cp ON operations.op_cp_id = users_cp.user_id
LEFT OUTER JOIN clients ON operations.op_cl_id = clients.cl_id
LEFT OUTER JOIN r_operation_type ON operations.op_type_id = r_operation_type.ot_id
WHERE clients.cl_id NOT IN
    (SELECT op_cl_id
     FROM operations AS operations_same_client
     INNER JOIN operation_statuts ON operations_same_client.op_id = operation_statuts.op_id
     WHERE operations.op_cl_id = op_cl_id
       AND operations_same_client.op_id <> operations.op_id
       AND operation_statuts.hs_new_statut_id = 2)
  AND View_Operation_Status.hs_new_statut_id = 2
UNION
SELECT clients.cl_libelle,
       operations.op_number,
       operations.op_libelle,
       r_custom_activites.act_libelle,
       r_operation_type.ot_libelle,
       r_operation_type_sub.ost_libelle,
       CONCAT(users_dc.user_nom, ' ', users_dc.user_prenom) AS dc,
       CONCAT(users_cp.user_nom, ' ', users_cp.user_prenom) AS cp,

  (SELECT SUM(r_tva_type.r_tva_coeff * operation_prestations.op_prest_mestim) AS Expr1
   FROM operation_prestations
   INNER JOIN operation_rubriques ON operation_prestations.op_prest_rubri_id = operation_rubriques.op_rubrique_id
   INNER JOIN r_tva_type ON operation_rubriques.r_tva_type_id = r_tva_type.r_tva_id
   WHERE operation_rubriques.op_id = operations.op_id
     AND operation_prestations.op_prest_off = 0
     AND operation_prestations.op_prest_npa = 0) AS montant_ttc,

  (SELECT date_create
   FROM View_Operation_Status
   WHERE hs_new_statut_id = 2
     AND op_id = operations.op_id) AS date_accepte,
       operations.op_status_id,
       r_operation_status.os_libelle,
       '1' AS is_reactivated
FROM View_Operation_Status
INNER JOIN operations ON View_Operation_Status.op_id = operations.op_id
AND View_Operation_Status.hs_new_statut_id = operations.op_status_id
LEFT OUTER JOIN r_operation_status ON operations.op_status_id = r_operation_status.os_id
LEFT OUTER JOIN r_operation_type_sub ON operations.op_subtype_id = r_operation_type_sub.ost_id
LEFT OUTER JOIN r_custom_activites ON operations.op_act_id = r_custom_activites.act_id
LEFT OUTER JOIN users AS users_dc ON operations.op_dc_id = users_dc.user_id
LEFT OUTER JOIN users AS users_cp ON operations.op_cp_id = users_cp.user_id
LEFT OUTER JOIN clients ON operations.op_cl_id = clients.cl_id
LEFT OUTER JOIN r_operation_type ON operations.op_type_id = r_operation_type.ot_id
WHERE DATEDIFF(
                 (SELECT date_create
                  FROM View_Operation_Status
                  WHERE hs_new_statut_id = 2
                    AND op_id = operations.op_id) ,
                 (SELECT
                    (SELECT date_create
                     FROM View_Operation_Status
                     WHERE hs_new_statut_id = 2
                       AND op_id = operations_same_client.op_id) AS op1_date_accepte
                  FROM operations AS operations_same_client
                  WHERE operations_same_client.op_cl_id = operations.op_cl_id
                  ORDER BY op1_date_accepte DESC LIMIT 1,1)) > 365
  AND View_Operation_Status.hs_new_statut_id = 2;

 -- 37997 : Reset service with 0 in order to be the last one of the rubric

UPDATE operation_prestations AS OP 
INNER JOIN (SELECT op_prest_rubri_id, (MAX(op_prest_order)+1) AS new_order FROM operation_prestations AS ope_prest GROUP BY op_prest_rubri_id) AS selection
ON OP.op_prest_rubri_id = selection.op_prest_rubri_id
AND OP.op_prest_order = 0
SET op_prest_order = selection.new_order;