UPDATE operation_prestations 
JOIN operations ON operation_prestations.op_id = operations.op_id
JOIN r_prestations ON operation_prestations.op_r_prest_id = r_prestations.r_prestation_id
JOIN r_p_type_validation ON r_prestations.r_p_validation_id = r_p_type_validation.r_p_type_validation_id
SET operation_prestations.op_prest_couts_valides = 1,
    operation_prestations.op_prest_cireel = r_prestations.r_p_cout_interne,
    operation_prestations.op_prest_cereel = r_prestations.r_p_cout_externe
WHERE operations.op_status_id = 2
AND operation_prestations.op_prest_couts_valides = 0
and r_p_type_validation.r_p_type_validation_id = 1;