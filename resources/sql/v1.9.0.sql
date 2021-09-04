
-- ajout champ r_prestations
BEGIN TRANSACTION
GO
ALTER TABLE dbo.r_prestations ADD
	r_p_is_eligible_for_prime bit NOT NULL CONSTRAINT DF_r_prestations_r_p_is_eligible_for_prime DEFAULT 1
GO
ALTER TABLE dbo.r_prestations SET (LOCK_ESCALATION = TABLE)
GO
COMMIT

update r_prestations set r_prestations.r_p_is_eligible_for_prime=0
where r_prestations.r_prestation_id not in (32,33,67,118,164,174,175,176,178,203,204,205,206,207,208,209,210,244,245,256,270,278,279,285,288,289,298,299,300,301,304,305,306,307,310,311,313,314,316,317,318,319,320,367,409,429,430,431,432,434,437,440,441,442,444,477,622,622)



--ordonancemet tpl prestations
BEGIN TRANSACTION
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_prestation ADD
	ost_tpl_prestation_order smallint NULL
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_prestation SET (LOCK_ESCALATION = TABLE)
GO
COMMIT


update r_operation_type_sub_tpl_prestation
set ost_tpl_prestation_order = (
select prestation_order from
(select ost_tpl_rubrique_id,ROW_NUMBER() over (partition by ost_tpl_rubrique_id order by ost_tpl_prestation_id) as 'prestation_order',ost_tpl_prestation_id
from r_operation_type_sub_tpl_prestation) as tbl
where tbl.ost_tpl_prestation_id=r_operation_type_sub_tpl_prestation.ost_tpl_prestation_id
)

BEGIN TRANSACTION
GO
CREATE UNIQUE NONCLUSTERED INDEX IX_r_operation_type_sub_tpl_prestation ON dbo.r_operation_type_sub_tpl_prestation
	(
	ost_tpl_rubrique_id,
	ost_tpl_prestation_order
	) WITH( STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_prestation SET (LOCK_ESCALATION = TABLE)
GO
COMMIT




-- prestation obligatoires

BEGIN TRANSACTION
GO
ALTER TABLE dbo.operation_prestations ADD
	op_prest_is_mandatory bit NOT NULL CONSTRAINT DF_operation_prestations_op_prest_is_mandatory DEFAULT 0
GO
ALTER TABLE dbo.operation_prestations SET (LOCK_ESCALATION = TABLE)
GO
COMMIT

update operation_prestations 
set operation_prestations.op_prest_is_mandatory=1
where operation_prestations.op_prest_id in
(
SELECT     distinct operation_prestations.op_prest_id
FROM         r_operation_type_sub_tpl INNER JOIN
                      r_operation_type_sub_tpl_prestation ON r_operation_type_sub_tpl.ost_tpl_id = r_operation_type_sub_tpl_prestation.ost_tpl_id INNER JOIN
                      operations ON r_operation_type_sub_tpl.ost_id = operations.op_subtype_id INNER JOIN
                      operation_prestations ON operations.op_id = operation_prestations.op_id
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



