
-- consolidation des dates de facturation
BEGIN TRANSACTION
GO
ALTER TABLE dbo.facture_statuts ADD
	is_effective bit NULL
GO
ALTER TABLE dbo.facture_statuts ADD CONSTRAINT
	DF_facture_statuts_is_effective DEFAULT 0 FOR is_effective
GO
ALTER TABLE dbo.facture_statuts SET (LOCK_ESCALATION = TABLE)
GO
COMMIT


update facture_statuts set is_effective=1
where fs_id in
(
SELECT     fs_id
FROM         (SELECT     ROW_NUMBER() OVER (partition BY fact_id, r_fact_stat_id
                       ORDER BY date_create DESC) AS 'rank', fact_id, r_fact_stat_id, date_create,fs_id
FROM         facture_statuts) tmp
WHERE     rank = 1
)


ALTER VIEW [View_Facture_Status]
AS
SELECT     fact_id, r_fact_stat_id, date_create
FROM         dbo.facture_statuts
WHERE     (is_effective = 1)



-- paramêtrage pour rendre options/prestations obligatoires selon template
BEGIN TRANSACTION
GO
ALTER TABLE dbo.r_prestations ADD
	r_p_is_mandatory bit NULL
GO
ALTER TABLE dbo.r_prestations ADD CONSTRAINT
	DF_r_prestations_r_p_is_mandatory DEFAULT 0 FOR r_p_is_mandatory
GO
ALTER TABLE dbo.r_prestations SET (LOCK_ESCALATION = TABLE)
GO
COMMIT


BEGIN TRANSACTION
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_scenario ADD
	ost_tpl_scenario_is_mandatory bit NULL
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_scenario ADD CONSTRAINT
	DF_r_operation_type_sub_tpl_scenario_ost_tpl_scenario_is_mandatory DEFAULT 0 FOR ost_tpl_scenario_is_mandatory
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_scenario SET (LOCK_ESCALATION = TABLE)
GO
COMMIT



BEGIN TRANSACTION
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_prestation ADD
	ost_tpl_prestation_is_mandatory bit NULL
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_prestation ADD CONSTRAINT
	DF_r_operation_type_sub_tpl_prestation_ost_tpl_prestation_is_mandatory DEFAULT 0 FOR ost_tpl_prestation_is_mandatory
GO
ALTER TABLE dbo.r_operation_type_sub_tpl_prestation SET (LOCK_ESCALATION = TABLE)
GO
COMMIT



BEGIN TRANSACTION
GO
ALTER TABLE dbo.r_operation_options_tpl ADD
	r_op_option_tpl_is_mandatory bit NULL
GO
ALTER TABLE dbo.r_operation_options_tpl ADD CONSTRAINT
	DF_r_operation_options_tpl_r_op_option_tpl_is_mandatory DEFAULT 0 FOR r_op_option_tpl_is_mandatory
GO
ALTER TABLE dbo.r_operation_options_tpl SET (LOCK_ESCALATION = TABLE)
GO
COMMIT


-- options de configuration pour opération
CREATE TABLE [dbo].[operation_options](
	[op_id] [int] NOT NULL,
	[opt_stat_hide_bilan_financier] [bit] NOT NULL,
 CONSTRAINT [PK_operation_options_1] PRIMARY KEY CLUSTERED 
(
	[op_id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

ALTER TABLE [dbo].[operation_options] ADD  CONSTRAINT [DF_operation_options_op_opt_stat_hide_bilan_financier]  DEFAULT ((0)) FOR [opt_stat_hide_bilan_financier]
GO


INSERT INTO [operation_options]([op_id])
select op_id from operations



GO
/****** Object:  Table [dbo].[r_couts_nature]    Script Date: 01/31/2014 14:19:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[r_couts_nature](
	[r_couts_nature_id] [tinyint] NOT NULL,
	[r_couts_nature_name] [nvarchar](50) NULL,
 CONSTRAINT [PK_r_nature_couts] PRIMARY KEY CLUSTERED 
(
	[r_couts_nature_id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

INSERT [dbo].[r_couts_nature] ([r_couts_nature_id], [r_couts_nature_name]) VALUES (1, N'CoÃ»t estimÃ© interne')
INSERT [dbo].[r_couts_nature] ([r_couts_nature_id], [r_couts_nature_name]) VALUES (2, N'CoÃ»t estimÃ© externe')
INSERT [dbo].[r_couts_nature] ([r_couts_nature_id], [r_couts_nature_name]) VALUES (3, N'CoÃ»t rÃ©alisÃ© interne')
INSERT [dbo].[r_couts_nature] ([r_couts_nature_id], [r_couts_nature_name]) VALUES (4, N'CoÃ»t rÃ©alisÃ© externe')

/****** Object:  Table [dbo].[histo_couts]    Script Date: 01/31/2014 14:19:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[histo_couts](
	[histo_couts_id] [int] IDENTITY(1,1) NOT NULL,
	[op_prest_id] [int] NOT NULL,
	[user_id] [int] NOT NULL,
	[histo_couts_value] [numeric](18, 3) NULL,
	[r_couts_nature_id] [tinyint] NOT NULL,
	[date_create] [datetime] NOT NULL,
 CONSTRAINT [PK_histo_couts] PRIMARY KEY CLUSTERED 
(
	[histo_couts_id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO



/****** Object:  UserDefinedFunction [dbo].[GetGroupsForUser]    Script Date: 02/26/2014 16:58:24 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date, ,>
-- Description:	<Description, ,>
-- =============================================
CREATE FUNCTION [dbo].[GetGroupsForUser]
(
	@user_id int
)
RETURNS VARCHAR(100)
AS
BEGIN
	DECLARE @RtnStr VARCHAR(100)

SELECT @RtnStr = COALESCE(@RtnStr + ',',',') + convert(nvarchar(10), group_id)
	FROM lnk_users_acl_groups
	WHERE lnk_users_acl_groups.user_id = @user_id
RETURN @RtnStr + ','

END


/****** Object:  View [dbo].[View_Validation_Couts_histo]    Script Date: 02/26/2014 17:00:36 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE VIEW [dbo].[View_Validation_Couts_histo]
AS
SELECT     dbo.histo_couts.date_create, dbo.operations.op_number, dbo.operation_prestations.op_r_prest_id, dbo.operation_prestations.op_prest_libelle, 
                      dbo.r_couts_nature.r_couts_nature_name, dbo.histo_couts.histo_couts_value, dbo.users.user_nom + '  ' + dbo.users.user_prenom AS user_name, 
                      dbo.histo_couts.histo_couts_id, dbo.users.user_id, dbo.histo_couts.r_couts_nature_id, CONVERT(char, dbo.histo_couts.date_create, 103) AS date_create_fr, 
                      dbo.operation_prestations.op_id, dbo.histo_couts.op_prest_id, dbo.GetGroupsForUser(dbo.users.user_id) AS groups
FROM         dbo.users INNER JOIN
                      dbo.histo_couts ON dbo.users.user_id = dbo.histo_couts.user_id INNER JOIN
                      dbo.r_couts_nature ON dbo.histo_couts.r_couts_nature_id = dbo.r_couts_nature.r_couts_nature_id LEFT OUTER JOIN
                      dbo.operation_prestations INNER JOIN
                      dbo.operations ON dbo.operation_prestations.op_id = dbo.operations.op_id ON dbo.histo_couts.op_prest_id = dbo.operation_prestations.op_prest_id

GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[34] 4[19] 2[19] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = -384
         Left = -224
      End
      Begin Tables = 
         Begin Table = "users"
            Begin Extent = 
               Top = 150
               Left = 941
               Bottom = 351
               Right = 1141
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "histo_couts"
            Begin Extent = 
               Top = 196
               Left = 480
               Bottom = 351
               Right = 680
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "r_couts_nature"
            Begin Extent = 
               Top = 407
               Left = 339
               Bottom = 496
               Right = 539
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "operation_prestations"
            Begin Extent = 
               Top = 24
               Left = 43
               Bottom = 465
               Right = 286
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "operations"
            Begin Extent = 
               Top = 0
               Left = 494
               Bottom = 155
               Right = 713
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 15
         Width = 284
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1260
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
  ' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Validation_Couts_histo'
GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane2', @value=N'       Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 5790
         Alias = 2130
         Table = 2010
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Validation_Couts_histo'
GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=2 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Validation_Couts_histo'
GO


/****** Object:  View [dbo].[View_Stock_Etat]    Script Date: 03/25/2014 13:00:07 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE VIEW [dbo].[View_Stock_Etat]
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
                                                    (data_volume_segment_3 = 'PALETE')
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

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[17] 4[22] 2[37] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "data"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 297
               Right = 285
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 15
         Width = 284
         Width = 1920
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 3090
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Stock_Etat'
GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=1 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Stock_Etat'
GO





/****** Object:  View [dbo].[View_Stock_Entree]    Script Date: 02/17/2014 11:59:23 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE VIEW [dbo].[View_Stock_Entree]
AS
SELECT     data_volume_id, data_compil_stamp AS date_reception, data_volume_segment AS ref_prod, data_info_label_1 AS libelle_prod, data_volume_volume AS qte,
                          (SELECT     ISNULL(SUM(data_volume_volume), 0) AS Expr1
                            FROM          uo.dbo.View_CompilData
                            WHERE      (r_indicateur_id = 46) AND (data_compil_op_id = data_qte.data_compil_op_id) AND (data_volume_segment = data_qte.data_volume_segment) AND 
                                                   (data_volume_segment_2 = 'PALETTE')) AS qte_palette,
                          (SELECT     ISNULL(SUM(data_volume_volume), 0) AS Expr1
                            FROM          uo.dbo.View_CompilData AS View_CompilData_1
                            WHERE      (r_indicateur_id = 46) AND (data_compil_op_id = data_qte.data_compil_op_id) AND (data_volume_segment = data_qte.data_volume_segment) AND 
                                                   (data_volume_segment_2 = 'COLIS')) AS qte_colis, data_compil_op_id, CONVERT(char, data_compil_stamp, 103) AS date_reception_fr
FROM         uo.dbo.View_CompilData AS data_qte
WHERE     (r_indicateur_id = 45)

GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[27] 4[29] 2[22] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "data_qte"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 276
               Right = 248
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 9
         Width = 284
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 2895
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Stock_Entree'
GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=1 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Stock_Entree'
GO



/****** Object:  View [dbo].[View_Stock_Sortie]    Script Date: 02/17/2014 11:59:32 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE VIEW [dbo].[View_Stock_Sortie]
AS
SELECT     data_volume_id, data_compil_stamp AS date_sortie, data_volume_segment AS ref_prod, data_info_label_1 AS libelle_prod, data_volume_volume AS qte, 
                      data_compil_op_id, CONVERT(char, data_compil_stamp, 103) AS date_sortie_fr
FROM         uo.dbo.View_CompilData AS data_qte
WHERE     (r_indicateur_id = 48)

GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[40] 4[20] 2[20] 3) )"
      End
      Begin PaneConfiguration = 1
         NumPanes = 3
         Configuration = "(H (1 [50] 4 [25] 3))"
      End
      Begin PaneConfiguration = 2
         NumPanes = 3
         Configuration = "(H (1 [50] 2 [25] 3))"
      End
      Begin PaneConfiguration = 3
         NumPanes = 3
         Configuration = "(H (4 [30] 2 [40] 3))"
      End
      Begin PaneConfiguration = 4
         NumPanes = 2
         Configuration = "(H (1 [56] 3))"
      End
      Begin PaneConfiguration = 5
         NumPanes = 2
         Configuration = "(H (2 [66] 3))"
      End
      Begin PaneConfiguration = 6
         NumPanes = 2
         Configuration = "(H (4 [50] 3))"
      End
      Begin PaneConfiguration = 7
         NumPanes = 1
         Configuration = "(V (3))"
      End
      Begin PaneConfiguration = 8
         NumPanes = 3
         Configuration = "(H (1[56] 4[18] 2) )"
      End
      Begin PaneConfiguration = 9
         NumPanes = 2
         Configuration = "(H (1 [75] 4))"
      End
      Begin PaneConfiguration = 10
         NumPanes = 2
         Configuration = "(H (1[66] 2) )"
      End
      Begin PaneConfiguration = 11
         NumPanes = 2
         Configuration = "(H (4 [60] 2))"
      End
      Begin PaneConfiguration = 12
         NumPanes = 1
         Configuration = "(H (1) )"
      End
      Begin PaneConfiguration = 13
         NumPanes = 1
         Configuration = "(V (4))"
      End
      Begin PaneConfiguration = 14
         NumPanes = 1
         Configuration = "(V (2))"
      End
      ActivePaneConfig = 0
   End
   Begin DiagramPane = 
      Begin Origin = 
         Top = 0
         Left = 0
      End
      Begin Tables = 
         Begin Table = "data_qte"
            Begin Extent = 
               Top = 6
               Left = 38
               Bottom = 270
               Right = 248
            End
            DisplayFlags = 280
            TopColumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 9
         Width = 284
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 3255
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 1440
         Alias = 900
         Table = 1170
         Output = 720
         Append = 1400
         NewValue = 1170
         SortType = 1350
         SortOrder = 1410
         GroupBy = 1350
         Filter = 1350
         Or = 1350
         Or = 1350
         Or = 1350
      End
   End
End
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Stock_Sortie'
GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=1 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Stock_Sortie'
GO

