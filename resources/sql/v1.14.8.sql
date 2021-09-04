USE [phoenix]
--#25511 : correction quantités palettes et colis
GO
/****** Object:  View [dbo].[View_Stock_Entree]    Script Date: 02/03/2015 15:26:48 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

ALTER VIEW [dbo].[View_Stock_Entree]
AS
SELECT     data_volume_id, data_compil_stamp AS date_reception, data_volume_segment AS ref_prod, data_info_label_1 AS libelle_prod, data_volume_volume AS qte,
                          (SELECT     ISNULL(SUM(data_volume_volume), 0) AS Expr1
                            FROM          uo.dbo.View_CompilData
                            WHERE      (r_indicateur_id = 46) AND (data_compil_op_id = data_qte.data_compil_op_id) AND (data_volume_segment = data_qte.data_volume_segment) AND 
                                                   (data_volume_segment_2 = 'PALETTE') AND (data_compil_stamp = data_qte.data_compil_stamp)) AS qte_palette,
                          (SELECT     ISNULL(SUM(data_volume_volume), 0) AS Expr1
                            FROM          uo.dbo.View_CompilData AS View_CompilData_1
                            WHERE      (r_indicateur_id = 46) AND (data_compil_op_id = data_qte.data_compil_op_id) AND (data_volume_segment = data_qte.data_volume_segment) AND 
                                                   (data_volume_segment_2 = 'COLIS') AND (data_compil_stamp = data_qte.data_compil_stamp)) AS qte_colis, data_compil_op_id, CONVERT(char, 
                      data_compil_stamp, 103) AS date_reception_fr
FROM         uo.dbo.View_CompilData AS data_qte
WHERE     (r_indicateur_id = 45)

GO

/****** Object:  View [dbo].[View_Stock_Etat]    Script Date: 02/03/2015 15:41:08 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

ALTER VIEW [dbo].[View_Stock_Etat]
AS
SELECT     data_compil_op_id, data_volume_segment AS ref_prod, data_info_label_1 AS libelle_prod,
                          (SELECT     ISNULL(SUM(data_volume_volume), 0) AS Expr1
                            FROM          uo.dbo.View_CompilData
                            WHERE      (r_indicateur_id = 45) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment)) AS qte_entree,
                          (SELECT     ISNULL(SUM(data_volume_volume), 0) AS Expr1
                            FROM          uo.dbo.View_CompilData AS View_CompilData_10
                            WHERE      (r_indicateur_id = 47) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment)) AS qte_sortie,
                          (SELECT     TOP (1) ISNULL(data_volume_volume, 0) AS Expr1
                            FROM          uo.dbo.View_CompilData AS View_CompilData_9
                            WHERE      (r_indicateur_id = 49) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment)
                            ORDER BY data_compil_stamp DESC) AS qte_stock,
                          (SELECT     ISNULL(SUM(data_volume_volume), 0) AS Expr1
                            FROM          uo.dbo.View_CompilData AS View_CompilData_8
                            WHERE      (r_indicateur_id = 46) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment) AND 
                                                   (data_volume_segment_2 = 'PALETTE')) AS palette_entree,
                          (SELECT     ISNULL(SUM(data_volume_volume), 0) AS Expr1
                            FROM          uo.dbo.View_CompilData AS View_CompilData_7
                            WHERE      (r_indicateur_id = 46) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment) AND 
                                                   (data_volume_segment_2 = 'COLIS')) AS colis_entree,
                          (SELECT     ISNULL(SUM(data_volume_volume), 0) AS Expr1
                            FROM          uo.dbo.View_CompilData AS View_CompilData_6
                            WHERE      (r_indicateur_id = 48) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment) AND 
                                                   (data_volume_segment_2 = 'PALETTE')) AS palette_sortie,
                          (SELECT     ISNULL(SUM(data_volume_volume), 0) AS Expr1
                            FROM          uo.dbo.View_CompilData AS View_CompilData_5
                            WHERE      (r_indicateur_id = 48) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment) AND 
                                                   (data_volume_segment_2 = 'COLIS')) AS colis_sortie, ISNULL
                          ((SELECT     TOP (1) data_volume_volume
                              FROM         uo.dbo.View_CompilData AS View_CompilData_4
                              WHERE     (r_indicateur_id = 50) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment) AND 
                                                    (data_volume_segment_3 = 'PALETTE_SECURISEE')
                              ORDER BY data_compil_stamp DESC), 0) AS palette_stock_secu, ISNULL
                          ((SELECT     TOP (1) data_volume_volume
                              FROM         uo.dbo.View_CompilData AS View_CompilData_3
                              WHERE     (r_indicateur_id = 50) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment) AND 
                                                    (data_volume_segment_3 = 'PALETTE')
                              ORDER BY data_compil_stamp DESC), 0) AS palette_stock, ISNULL
                          ((SELECT     TOP (1) data_volume_volume
                              FROM         uo.dbo.View_CompilData AS View_CompilData_2
                              WHERE     (r_indicateur_id = 50) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment) AND 
                                                    (data_volume_segment_3 = 'CASIER_SECURISE')
                              ORDER BY data_compil_stamp DESC), 0) AS casier_stock_secu, ISNULL
                          ((SELECT     TOP (1) data_volume_volume
                              FROM         uo.dbo.View_CompilData AS View_CompilData_1
                              WHERE     (r_indicateur_id = 50) AND (data_compil_op_id = data.data_compil_op_id) AND (data_volume_segment = data.data_volume_segment) AND 
                                                    (data_volume_segment_3 = 'CASIER')
                              ORDER BY data_compil_stamp DESC), 0) AS casier_stock
FROM         uo.dbo.View_CompilData AS data
WHERE     (r_indicateur_id = 49) AND (data_compil_stamp =
                          (SELECT     TOP (1) data_compil_stamp
                            FROM          uo.dbo.View_CompilData AS data_date
                            WHERE      (r_indicateur_id = 49) AND (data.data_compil_op_id = data_compil_op_id)))

GO


-- ajout du groupe GP.Facturation
INSERT INTO [acl_groups]
           ([group_name])
     VALUES
           ('GP.Facturation')