USE [phoenix]
--correction encodage
update r_languages set r_lang_libelle='GrÃ¨ce' where r_lang_code='GRC'
update r_languages set r_lang_libelle='MacÃ©doine' where r_lang_code='MKD'
update r_languages set r_lang_libelle='RÃ©publique TchÃ¨que' where r_lang_code='CZE'
update r_languages set r_lang_libelle='SlovÃ©nie' where r_lang_code='SVN'

GO
BEGIN TRANSACTION	
GO
--adding op_ct_fact_addr_id column into operations table
ALTER TABLE dbo.operations ADD op_ct_fact_addr_id int NULL
GO
COMMIT

GO
BEGIN TRANSACTION	
GO
--adding op_parent_id column into operations table
ALTER TABLE dbo.operations ADD op_parent_id int NULL
GO
COMMIT

-- ticker redmine 25195 :MAJ de la vue "Arthur_Operation_Extended" dans la DB "phoenix" avec la valeur de l'option "Dématérialisation"
USE [phoenix]
GO

BEGIN TRANSACTION	
GO

ALTER VIEW dbo.Arthur_Operation_Extended AS

SELECT OP.op_id,
       OP.op_number,
       OP.op_libelle,
       OP.op_cl_id,
       CL.cl_libelle AS op_cl_libelle,
       OP.op_stamp_start AS op_debut_gestion,
       OP.op_stamp_end AS op_fin_gestion,
       OP.op_dateConso_start AS op_debut_conso,
       OP.op_dateConso_end AS op_fin_conso,
       OP.op_datePoste_end AS op_fin_poste,
       DEMAT.is_linked as dematerialiser,

  (SELECT COUNT(lnk_op_opt_id) AS Expr1
   FROM dbo.lnk_operation_option
   WHERE (op_opt_id = 27)
     AND (is_linked = 1)
     AND (op_id = OP.op_id)) AS op_assurance,

  (SELECT COUNT(lnk_op_opt_id) AS Expr1
   FROM dbo.lnk_operation_option AS lnk_operation_option_1
   WHERE (op_opt_id = 56)
     AND (is_linked = 1)
     AND (op_id = OP.op_id)) AS op_internationale,
       OP.op_type_id,
       ROPT.ot_libelle AS op_type_libelle,
       OP.op_subtype_id,
       ROPTS.ost_libelle AS op_ss_type_libelle,
       OP.op_status_id,
       OPST.os_libelle AS op_status_libelle,
       COALESCE (USRDC.user_nom + ' ' + LEFT(USRDC.user_prenom, 1) + '.',
                 '') AS op_dc,
                COALESCE (USRCP.user_nom + ' ' + LEFT(USRCP.user_prenom, 1) + '.',
                          '') AS op_cp,
                         OP.op_instructionSaisie,
                         OP.op_modalite,

  (SELECT COUNT(op_prest_id) AS Expr1
   FROM dbo.operation_prestations
   WHERE (op_r_prest_id = 367)
     AND (op_id = OP.op_id)) AS P_367,

  (SELECT COALESCE (SUM(op_prest_qestim),
                    0) AS Expr1
   FROM dbo.operation_prestations AS operation_prestations_2
   WHERE (op_r_prest_id = 367)
     AND (op_id = OP.op_id)) AS QEST_367,
                         OP.op_project_type_id,
                         RPROJTYPE.r_project_type_libelle,
                         OP.op_delai_trait_courrier_id,
                         RDELAICOUR.r_delai_trait_courrier_libelle,

  (SELECT MAX(op_task_done) AS Expr1
   FROM dbo.operation_tasks
   WHERE (op_task_type_id = 85)
     AND (op_id = OP.op_id)) AS tout_ok_masque_stamp,

  (SELECT MAX(op_task_done) AS Expr1
   FROM dbo.operation_tasks AS operation_tasks_2
   WHERE (op_task_type_id = 86)
     AND (op_id = OP.op_id)) AS creation_masque_stamp,

  (SELECT MAX(op_task_done) AS Expr1
   FROM dbo.operation_tasks AS operation_tasks_1
   WHERE (op_task_type_id = 87)
     AND (op_id = OP.op_id)) AS validation_masque_stamp,

  (SELECT COALESCE (SUM(op_prest_qestim),
                    0) AS Expr1
   FROM dbo.operation_prestations AS operation_prestations_6
   WHERE (op_r_prest_id = 378)
     AND (op_id = OP.op_id)) AS QEST_378,

  (SELECT COALESCE (SUM(op_prest_qreel),
                    0) AS Expr1
   FROM dbo.operation_prestations AS operation_prestations_5
   WHERE (op_r_prest_id = 378)
     AND (op_id = OP.op_id)) AS QREEL_378,

  (SELECT COALESCE (SUM(op_prest_qestim),
                    0) AS Expr1
   FROM dbo.operation_prestations AS operation_prestations_4
   WHERE (op_r_prest_id = 319)
     AND (op_id = OP.op_id)) AS QEST_319,

  (SELECT COALESCE (SUM(op_prest_qreel),
                    0) AS Expr1
   FROM dbo.operation_prestations AS operation_prestations_3
   WHERE (op_r_prest_id = 319)
     AND (op_id = OP.op_id)) AS QREEL_319,

  (SELECT COALESCE (SUM(op_prest_qestim),
                    0) AS Expr1
   FROM dbo.operation_prestations AS operation_prestations_2
   WHERE (op_r_prest_id = 380)
     AND (op_id = OP.op_id)) AS QEST_380,

  (SELECT COALESCE (SUM(op_prest_qreel),
                    0) AS Expr1
   FROM dbo.operation_prestations AS operation_prestations_1
   WHERE (op_r_prest_id = 380)
     AND (op_id = OP.op_id)) AS QREEL_380,

  (SELECT COUNT(LOP.op_opt_id) AS Expr1
   FROM dbo.lnk_operation_option AS LOP
   LEFT OUTER JOIN dbo.r_operation_options AS ROP ON ROP.r_op_option_id = LOP.op_opt_id
   WHERE (ROP.r_op_option_parent IN (1,
                                     2,
                                     6))
     AND (LOP.is_linked = 1)
     AND (LOP.op_id = OP.op_id)) AS option_hotline,

  (SELECT COUNT(LOP.op_opt_id) AS Expr1
   FROM dbo.lnk_operation_option AS LOP
   LEFT OUTER JOIN dbo.r_operation_options AS ROP ON ROP.r_op_option_id = LOP.op_opt_id
   WHERE (ROP.r_op_option_parent IN (30,
                                     31,
                                     37))
     AND (LOP.is_linked = 1)
     AND (LOP.op_id = OP.op_id)) AS option_cartavenue,

  (SELECT COUNT(op_prest_id) AS Expr1
   FROM dbo.operation_prestations AS operation_prestations_7
   WHERE (op_r_prest_id = 299)
     AND (op_prest_npr IS NULL)
     AND (op_id = OP.op_id)) AS PREST_299,
                         OP.op_description,
                         OP.op_commentaire
FROM dbo.operations AS OP
LEFT OUTER JOIN dbo.clients AS CL ON CL.cl_id = OP.op_cl_id
LEFT OUTER JOIN dbo.r_operation_type AS ROPT ON ROPT.ot_id = OP.op_type_id
LEFT OUTER JOIN dbo.r_operation_type_sub AS ROPTS ON ROPTS.ost_id = OP.op_subtype_id
LEFT OUTER JOIN dbo.r_operation_status AS OPST ON OP.op_status_id = OPST.os_id
LEFT OUTER JOIN dbo.users AS USRDC ON USRDC.user_id = OP.op_dc_id
LEFT OUTER JOIN dbo.users AS USRCP ON USRCP.user_id = OP.op_cp_id
LEFT OUTER JOIN dbo.r_project_type AS RPROJTYPE ON RPROJTYPE.r_project_type_id = OP.op_project_type_id
LEFT OUTER JOIN dbo.r_delai_trait_courrier AS RDELAICOUR ON RDELAICOUR.r_delai_trait_courrier_id = OP.op_delai_trait_courrier_id
LEFT JOIN dbo.lnk_operation_option DEMAT ON OP.op_id = DEMAT.op_id AND DEMAT.op_opt_id = 252

GO 
COMMIT

USE [phoenix]
GO

/****** Object:  View [dbo].[View_Operation_Listing]    Script Date: 09/08/2014 17:45:52 ******/
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
                      dbo.operations_ext.opt_sync_task_user_id, dbo.operations_ext.opt_sync_gedelog_user_id, OP.op_parent_id, (SELECT op_number from operations OPF where OPF.op_id = OP.op_parent_id) as op_parent_op_number
FROM         dbo.operations AS OP LEFT OUTER JOIN
                      dbo.operations_ext ON OP.op_id = dbo.operations_ext.op_id LEFT OUTER JOIN
                      dbo.clients AS CL ON CL.cl_id = OP.op_cl_id LEFT OUTER JOIN
                      dbo.r_operation_status AS OPST ON OP.op_status_id = OPST.os_id LEFT OUTER JOIN
                      dbo.r_operation_type AS ROPT ON ROPT.ot_id = OP.op_type_id LEFT OUTER JOIN
                      dbo.r_operation_type_sub AS ROPTS ON ROPTS.ost_id = OP.op_subtype_id LEFT OUTER JOIN
                      dbo.users AS USRDC ON USRDC.user_id = OP.op_dc_id LEFT OUTER JOIN
                      dbo.users AS USRCP ON USRCP.user_id = OP.op_cp_id


USE [phoenix]
GO

/** 23640 : Autoriser les groupes GP.Daf et GP.Compta valider des coûts sur les opérations clotûrées **/

INSERT INTO acl_fonctionnalites ([int_cont_id], [fonc_name]) VALUES ('31', 'VALIDATION COUTS OP CLOTURE'); 
INSERT INTO lnk_acl_groups_fonctionnalites ([group_name], [fonc_id]) values 
('GP.DAF', (SELECT top 1 fonc_id FROM acl_fonctionnalites ORDER BY (fonc_id) DESC)),
('GP.Compta', (SELECT top 1 fonc_id FROM acl_fonctionnalites ORDER BY (fonc_id) DESC));

GO