-- ordonnancement rubrique modele de devis

BEGIN TRANSACTION
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_rubrique ADD
	ost_tpl_rubrique_order smallint NULL
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_rubrique SET (LOCK_ESCALATION = TABLE)
GO
COMMIT

update r_operation_type_sub_tpl_rubrique
set ost_tpl_rubrique_order = (
select rubrique_order from
(
select ost_tpl_rubrique_id,ost_tpl_id,ROW_NUMBER() over (partition by ost_tpl_id,ost_tpl_id order by ost_tpl_rubrique_id) as 'rubrique_order'
from r_operation_type_sub_tpl_rubrique
) as tbl
where tbl.ost_tpl_rubrique_id=r_operation_type_sub_tpl_rubrique.ost_tpl_rubrique_id
)


-- renomage table
EXEC sp_rename 'operation_options', 'operations_ext';


BEGIN TRANSACTION
GO
ALTER TABLE dbo.operations_ext ADD
	opt_sync_task_date datetime NULL,
	opt_sync_gedelog_date datetime NULL,
	opt_sync_task_user_id int NULL,
	opt_sync_gedelog_user_id int NULL
GO
ALTER TABLE dbo.operations_ext SET (LOCK_ESCALATION = TABLE)
GO
COMMIT



/****** Object:  View [dbo].[View_Operation_Listing]    Script Date: 06/02/2014 17:30:58 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

ALTER VIEW [dbo].[View_Operation_Listing]
AS
SELECT     OPST.os_libelle, OP.op_number, OP.op_libelle,
                          (SELECT     COUNT(op_contrat_id) AS Expr1
                            FROM          dbo.operations_contrats
                            WHERE      (op_id = OP.op_id)) AS nb_contrats, CL.cl_libelle, CONVERT(char, OP.op_stamp_start, 103) AS op_start, CONVERT(char, OP.op_stamp_end, 103) 
                      AS op_end, ROPT.ot_libelle + ', ' + ROPTS.ost_libelle AS type, COALESCE (USRDC.user_nom + ' ' + LEFT(USRDC.user_prenom, 1) + '.', '') AS dc, 
                      COALESCE (USRCP.user_nom + ' ' + LEFT(USRCP.user_prenom, 1) + '.', '') AS cp, OP.op_id, OP.op_status_id, OP.op_cl_id, OP.op_type_id, OP.op_subtype_id, 
                      OP.op_dc_id, OP.actif, OP.op_cp_id, OP.op_stamp_start, OP.op_stamp_end, OP.op_dateConso_start, OP.op_dateConso_end, OP.op_datePoste_end, OP.op_act_id, 
                      OP.op_ct_id,
                          (SELECT     TOP (1) CONVERT(char, date_create, 103) AS Expr1
                            FROM          dbo.operation_statuts
                            WHERE      (op_id = OP.op_id) AND (hs_new_statut_id = 2)
                            ORDER BY date_create DESC) AS date_accepte_fr,
                          (SELECT     dbo.ConcatListOptionsForOpId(op_id) AS Cols
                            FROM          dbo.lnk_operation_option
                            WHERE      (op_id = OP.op_id)
                            GROUP BY op_id) AS list_options, OP.op_project_type_id, OP.op_freq_stat_mail_id, CONVERT(char, OP.op_dateConso_start, 103) AS op_dateConso_start_fr, 
                      CONVERT(char, OP.op_dateConso_end, 103) AS op_dateConso_end_fr, CONVERT(char, OP.op_datePoste_end, 103) AS op_datePoste_end_fr, CONVERT(char, 
                      OP.op_stamp_start, 103) AS op_stamp_start_fr, CONVERT(char, OP.op_stamp_end, 103) AS op_stamp_end_fr, OP.op_devis_lang, OP.date_create, 
                      dbo.operations_ext.opt_sync_task_user_id, dbo.operations_ext.opt_sync_gedelog_user_id
FROM         dbo.operations AS OP LEFT OUTER JOIN
                      dbo.operations_ext ON OP.op_id = dbo.operations_ext.op_id LEFT OUTER JOIN
                      dbo.clients AS CL ON CL.cl_id = OP.op_cl_id LEFT OUTER JOIN
                      dbo.r_operation_status AS OPST ON OP.op_status_id = OPST.os_id LEFT OUTER JOIN
                      dbo.r_operation_type AS ROPT ON ROPT.ot_id = OP.op_type_id LEFT OUTER JOIN
                      dbo.r_operation_type_sub AS ROPTS ON ROPTS.ost_id = OP.op_subtype_id LEFT OUTER JOIN
                      dbo.users AS USRDC ON USRDC.user_id = OP.op_dc_id LEFT OUTER JOIN
                      dbo.users AS USRCP ON USRCP.user_id = OP.op_cp_id

GO


-- ratrapage synchronisation des tâches et gedelog
update operations_ext
set opt_sync_task_date=GETDATE(),
operations_ext.opt_sync_task_user_id=0
where op_id in(
select distinct op_id from operation_statuts
where hs_new_statut_id=2
)


update operations_ext
set opt_sync_gedelog_date=GETDATE(),
opt_sync_gedelog_user_id=0
where op_id in(
Select gedelog_operation_params.op_id 
from gedelog_operation_params
where gedelog_operation_params.gdl_comt_id is not null
and gedelog_operation_params.gdl_ent_id is not null
and gedelog_operation_params.gdl_fourn_id is not null
and gedelog_operation_params.gdl_op_id is not null
)
