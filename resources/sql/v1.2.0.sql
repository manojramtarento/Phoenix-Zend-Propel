

/****** Object:  Table [dbo].[lnk_operation_country]    Script Date: 11/29/2013 17:07:50 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[lnk_operation_country](
	[op_id] [int] NOT NULL,
	[r_lang_code] [nvarchar](3) NOT NULL,
 CONSTRAINT [PK_lnk_operation_country] PRIMARY KEY CLUSTERED 
(
	[op_id] ASC,
	[r_lang_code] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

GO



/****** Object:  View [dbo].[View_Operation_Listing]    Script Date: 11/29/2013 17:07:06 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE VIEW [dbo].[View_Operation_Listing]
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
                      OP.op_stamp_start, 103) AS op_stamp_start_fr, CONVERT(char, OP.op_stamp_end, 103) AS op_stamp_end_fr, OP.op_devis_lang, CASE WHEN
                          (SELECT     COUNT(r_lang_code)
                            FROM          lnk_operation_country
                            WHERE      op_id = OP.op_id) > 0 THEN 1 ELSE 0 END AS is_international
FROM         dbo.operations AS OP LEFT OUTER JOIN
                      dbo.clients AS CL ON CL.cl_id = OP.op_cl_id LEFT OUTER JOIN
                      dbo.r_operation_status AS OPST ON OP.op_status_id = OPST.os_id LEFT OUTER JOIN
                      dbo.r_operation_type AS ROPT ON ROPT.ot_id = OP.op_type_id LEFT OUTER JOIN
                      dbo.r_operation_type_sub AS ROPTS ON ROPTS.ost_id = OP.op_subtype_id LEFT OUTER JOIN
                      dbo.users AS USRDC ON USRDC.user_id = OP.op_dc_id LEFT OUTER JOIN
                      dbo.users AS USRCP ON USRCP.user_id = OP.op_cp_id

GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane1', @value=N'[0E232FF0-B466-11cf-A24F-00AA00A3EFFF, 1.00]
Begin DesignProperties = 
   Begin PaneConfigurations = 
      Begin PaneConfiguration = 0
         NumPanes = 4
         Configuration = "(H (1[36] 4[16] 2[19] 3) )"
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
         Top = -288
         Left = 0
      End
      Begin Tables = 
         Begin Table = "OP"
            Begin Extent = 
               Top = 218
               Left = 306
               Bottom = 526
               Right = 498
            End
            DisplayFlags = 280
            TopColumn = 28
         End
         Begin Table = "CL"
            Begin Extent = 
               Top = 16
               Left = 518
               Bottom = 124
               Right = 709
            End
            DisplayFlags = 280
            TopColumn = 1
         End
         Begin Table = "OPST"
            Begin Extent = 
               Top = 84
               Left = 749
               Bottom = 192
               Right = 940
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "ROPT"
            Begin Extent = 
               Top = 77
               Left = 58
               Bottom = 185
               Right = 249
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "ROPTS"
            Begin Extent = 
               Top = 447
               Left = 601
               Bottom = 546
               Right = 792
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "USRDC"
            Begin Extent = 
               Top = 246
               Left = 718
               Bottom = 391
               Right = 909
            End
            DisplayFlags = 280
            TopColumn = 0
         End
         Begin Table = "USRCP"
            Begin Extent = 
               Top = 259
               Left = 6
               Bottom = 374
               Right = 198
            End
            DisplayFlags = 280
            TopC' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Operation_Listing'
GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPane2', @value=N'olumn = 0
         End
      End
   End
   Begin SQLPane = 
   End
   Begin DataPane = 
      Begin ParameterDefaults = ""
      End
      Begin ColumnWidths = 35
         Width = 284
         Width = 1500
         Width = 1500
         Width = 1815
         Width = 1500
         Width = 1905
         Width = 2910
         Width = 1500
         Width = 5940
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
         Width = 3720
         Width = 1500
         Width = 2025
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 2205
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1770
         Width = 1500
         Width = 1500
         Width = 1500
         Width = 1500
      End
   End
   Begin CriteriaPane = 
      Begin ColumnWidths = 11
         Column = 10980
         Alias = 3780
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
' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Operation_Listing'
GO

EXEC sys.sp_addextendedproperty @name=N'MS_DiagramPaneCount', @value=2 , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'VIEW',@level1name=N'View_Operation_Listing'
GO



update r_languages set r_lang_libelle='RÈpublique TchËque' where r_lang_code='CZE'
update r_languages set r_lang_libelle='GrËce' where r_lang_code='GRC'
update r_languages set r_lang_libelle='SlovÈnie' where r_lang_code='SVN'
delete from r_languages where r_lang_code='GBR'


/****** Object:  View [dbo].[View_Operation_Listing]    Script Date: 11/28/2013 17:17:59 ******/
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
                      OP.op_stamp_start, 103) AS op_stamp_start_fr, CONVERT(char, OP.op_stamp_end, 103) AS op_stamp_end_fr, OP.op_devis_lang
FROM         dbo.operations AS OP LEFT OUTER JOIN
                      dbo.clients AS CL ON CL.cl_id = OP.op_cl_id LEFT OUTER JOIN
                      dbo.r_operation_status AS OPST ON OP.op_status_id = OPST.os_id LEFT OUTER JOIN
                      dbo.r_operation_type AS ROPT ON ROPT.ot_id = OP.op_type_id LEFT OUTER JOIN
                      dbo.r_operation_type_sub AS ROPTS ON ROPTS.ost_id = OP.op_subtype_id LEFT OUTER JOIN
                      dbo.users AS USRDC ON USRDC.user_id = OP.op_dc_id LEFT OUTER JOIN
                      dbo.users AS USRCP ON USRCP.user_id = OP.op_cp_id

GO




drop table r_countries

GO
/****** Object:  Table [dbo].[r_countries]    Script Date: 12/10/2013 12:13:01 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[r_countries](
	[r_country_code] [nvarchar](3) NOT NULL,
	[r_country_name] [nvarchar](50) NULL,
 CONSTRAINT [PK_r_countries_1] PRIMARY KEY CLUSTERED 
(
	[r_country_code] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'AUT', N'Autriche')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'BEL', N'Belgique')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'BGR', N'Bulgarie')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'CYP', N'Chypre')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'CZE', N'R√©publique Tch√®que')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'DEU', N'Allemagne')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'DNK', N'Danemark')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'ESP', N'Espagne')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'EST', N'Estonie')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'FIN', N'Finlande')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'FRA', N'France')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'GBR', N'Royaume-Uni')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'GRC', N'Gr√®ce')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'HUN', N'Hongrie')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'IRL', N'Irlance')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'ITA', N'Italie')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'LTU', N'Lituanie')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'LUX', N'Luxembourg')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'LVA', N'Lettonie')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'MLT', N'Malte')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'NLD', N'Pays-Bas')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'POL', N'Pologne')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'PRT', N'Portugal')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'ROU', N'Roumanie')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'SGP', N'Singapour')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'SVK', N'Slovaquie')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'SVN', N'Slov√©nie')
INSERT [dbo].[r_countries] ([r_country_code], [r_country_name]) VALUES (N'SWE', N'Su√®de')



