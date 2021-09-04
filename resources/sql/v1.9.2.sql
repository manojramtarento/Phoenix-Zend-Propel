

update operation_prestations set op_prest_is_mandatory=0


update operation_prestations 
set operation_prestations.op_prest_is_mandatory=1
where operation_prestations.op_prest_id in
(
SELECT DISTINCT operation_prestations.op_prest_id
FROM         r_operation_type_sub_tpl INNER JOIN
                      r_operation_type_sub_tpl_prestation ON r_operation_type_sub_tpl.ost_tpl_id = r_operation_type_sub_tpl_prestation.ost_tpl_id INNER JOIN
                      operations ON r_operation_type_sub_tpl.ost_id = operations.op_subtype_id INNER JOIN
                      operation_prestations ON operations.op_id = operation_prestations.op_id AND 
                      r_operation_type_sub_tpl_prestation.r_prestation_id = operation_prestations.op_r_prest_id
WHERE     (r_operation_type_sub_tpl_prestation.ost_tpl_prestation_is_mandatory = 1)
)


update operation_prestations 
set operation_prestations.op_prest_is_mandatory=1
where operation_prestations.op_prest_id in
(
SELECT     operation_prestations.op_prest_id
FROM         operations INNER JOIN
                      lnk_operation_option ON operations.op_id = lnk_operation_option.op_id INNER JOIN
                      operation_prestations ON operations.op_id = operation_prestations.op_id INNER JOIN
                      r_operation_options_tpl ON lnk_operation_option.op_opt_id = r_operation_options_tpl.r_opt_id INNER JOIN
                      r_prestations ON r_operation_options_tpl.r_prest_id = r_prestations.r_prestation_id AND operation_prestations.op_r_prest_id = r_prestations.r_prestation_id
WHERE     (r_operation_options_tpl.r_op_option_tpl_is_mandatory = 1) AND (lnk_operation_option.is_linked = 1)
)
