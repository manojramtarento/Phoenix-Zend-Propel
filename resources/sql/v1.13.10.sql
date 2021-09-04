USE [arthur_param]
GO
BEGIN TRANSACTION	
GO
--28598 : Ajout de champs d'ordre de la finalité et du param

ALTER VIEW [dbo].[vue_phoenix_documents_global]
AS
SELECT     TOP (100) PERCENT p.op_id, p.op_param_id, p.libelle, t.doc_type_libelle, s.dst_libelle, f.ordre as finalite_order, p.ordre as param_order,
                          (SELECT     COUNT(*) AS Expr1
                            FROM          arthur_consos.dbo.documents
                            WHERE      (edite = 0) AND (op_param_id = p.op_param_id) AND (actif = 1)) AS attente,
                          (SELECT     COUNT(*) AS Expr1
                            FROM          arthur_consos.dbo.documents AS documents_3
                            WHERE      (edite = 1) AND (envoye = 0) AND (op_param_id = p.op_param_id) AND (actif = 1)) AS edite,
                          (SELECT     COUNT(*) AS Expr1
                            FROM          arthur_consos.dbo.documents AS documents_2
                            WHERE      (edite = 1) AND (envoye = 1) AND (op_param_id = p.op_param_id) AND (actif = 1)) AS envoye,
                          (SELECT     COUNT(*) AS Expr1
                            FROM          arthur_consos.dbo.documents AS documents_1
                            WHERE      (retour = 1) AND (op_param_id = p.op_param_id) AND (actif = 1)) AS retour,
                          (SELECT     COUNT(*) AS Expr1
                            FROM          arthur_consos.dbo.documents AS d4 INNER JOIN
                                                   arthur_consos.dbo.demandes_consolidees AS dc ON dc.demandes_id = d4.demandes_id
                            WHERE      (dc.demandeTimbre = 1) AND (d4.op_param_id = p.op_param_id) AND (d4.actif = 1)) AS RT,
                          (SELECT     SUM(montant_a_rembourser) AS Expr1
                            FROM          arthur_consos.dbo.documents AS d5
                            WHERE      (op_param_id = p.op_param_id) AND (actif = 1)) AS Remb,
                          (SELECT     SUM(COALESCE (montant_a_rembourser, 0) + COALESCE (montant_frais_envois, 0)) AS Expr1
                            FROM          arthur_consos.dbo.documents AS d6
                            WHERE      (op_param_id = p.op_param_id) AND (actif = 1) AND (edite = 0)) AS Requis,
                          (SELECT     SUM(COALESCE (montant_a_rembourser, 0) + COALESCE (montant_frais_envois, 0)) AS Expr1
                            FROM          arthur_consos.dbo.documents AS d7
                            WHERE      (op_param_id = p.op_param_id) AND (actif = 1) AND (edite = 1)) AS Utilise,
                          (SELECT     SUM(montant_frais_envois) AS Expr1
                            FROM          arthur_consos.dbo.documents AS d7
                            WHERE      (op_param_id = p.op_param_id) AND (actif = 1)) AS Frais
FROM         dbo.doc_param_ops AS p INNER JOIN
                      dbo.doc_docs_type AS t ON t.doc_type_id = p.doc_type_id INNER JOIN
                      dbo.r_doc_type_sub AS s ON s.dst_id = p.dst_id INNER JOIN
                      dbo.doc_finalites_op AS f ON f.finalite_id = p.finalite_id
ORDER BY p.finalite_id, p.op_param_id

GO
COMMIT
