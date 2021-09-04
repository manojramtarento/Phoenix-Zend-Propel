-- Update client view to add cl_activity_id field
CREATE
    OR REPLACE ALGORITHM = UNDEFINED
    DEFINER = `root`@`localhost`
    SQL SECURITY DEFINER 
VIEW `View_Client_Listing` AS select `CL`.`cl_libelle` AS `cl_libelle`,`CL`.`cl_id` AS `cl_id`,(select count(`operations`.`op_id`) AS `Expr1` from `operations` where ((`operations`.`op_cl_id` = `CL`.`cl_id`) and (`operations`.`op_status_id` = 1))) AS `nb_devis_en_cours`,(select count(`operations_4`.`op_id`) AS `Expr1` from `operations` `operations_4` where ((`operations_4`.`op_cl_id` = `CL`.`cl_id`) and (`operations_4`.`op_status_id` = 2))) AS `nb_accepte`,(select count(`operations_3`.`op_id`) AS `Expr1` from `operations` `operations_3` where ((`operations_3`.`op_cl_id` = `CL`.`cl_id`) and (`operations_3`.`op_status_id` = 3))) AS `nb_refus`,(select count(`operations_2`.`op_id`) AS `Expr1` from `operations` `operations_2` where ((`operations_2`.`op_cl_id` = `CL`.`cl_id`) and (`operations_2`.`op_status_id` = 4))) AS `nb_cloture`,coalesce(concat(`users`.`user_nom`,' ',left(`users`.`user_prenom`,1),'.'),'') AS `cl_dc_name`,`CL`.`cl_dc_id` AS `cl_dc_id`,`CL`.`cl_type_id` AS `cl_type_id`,`CL`.`cl_activity_id` AS `cl_activity_id`,`RCT`.`cl_type_libelle` AS `cl_type_libelle`,coalesce((select (case when (count(`factures`.`cl_id`) = 0) then '1' when (count(`factures`.`cl_id`) > 0) then '0' end) AS `inactif` from (`factures` join `facture_statuts` on((`factures`.`fact_id` = `facture_statuts`.`fact_id`))) where ((`factures`.`cl_id` = `CL`.`cl_id`) and (`facture_statuts`.`r_fact_stat_id` = 3) and (`facture_statuts`.`date_create` > (now() - interval 365 day))) group by `factures`.`cl_id`),1) AS `inactif`,(select count(`files`.`file_name`) AS `Expr1` from `files` where ((`files`.`file_category_id` = 1) and (`files`.`file_entity_name` = 'clients') and (`files`.`file_entity_id` = `CL`.`cl_id`))) AS `nb_contrats` from ((`clients` `CL` left join `users` on((`CL`.`cl_dc_id` = `users`.`user_id`))) left join `r_client_types` `RCT` on((`RCT`.`cl_type_id` = `CL`.`cl_type_id`)));

-- Update activity view
CREATE
    OR REPLACE ALGORITHM = UNDEFINED
    DEFINER = `root`@`localhost`
    SQL SECURITY DEFINER 
VIEW `View_Rclient_Activites_Listing` AS select `r_client_activities`.`cl_activity_id` AS `cl_activity_id`,`r_client_activities`.`cl_activity_libelle` AS `cl_activity_libelle`,`r_client_activities`.`ordre` AS `ordre`,`r_client_activities`.`cl_type_id` AS `cl_type_id`,`r_client_activities`.`parent_cl_activity_id` AS `parent_cl_activity_id`,`r_client_activities`.`actif` AS `actif` from `r_client_activities`;

-- Update client type  view
CREATE
    OR REPLACE ALGORITHM = UNDEFINED
    DEFINER = `root`@`localhost`
    SQL SECURITY DEFINER 
VIEW `View_Rclient_Types_Listing` AS select `r_client_types`.`cl_type_id` AS `cl_type_id`,`r_client_types`.`cl_type_libelle` AS `cl_type_libelle`,`r_client_types`.`ordre` AS `ordre`,`r_client_types`.`actif` AS `actif` from `r_client_types`;

-- Update View_Operation_Listing_Simplifie
CREATE
    OR REPLACE ALGORITHM = UNDEFINED
    DEFINER = `root`@`localhost`
    SQL SECURITY DEFINER 
VIEW `View_Operation_Listing_Simplifie` AS select `OPST`.`os_libelle` AS `os_libelle`,`OP`.`op_number` AS `op_number`,`OP`.`op_libelle` AS `op_libelle`,ifnull(`VOCN`.`nb_contrats`,0) AS `nb_contrats`,`CL`.`cl_libelle` AS `cl_libelle`,`CL`.`cl_type_id` AS `cl_type_id`,`CL`.`cl_activity_id` AS `cl_activity_id`,concat(ifnull(`ROPT`.`ot_libelle`,''),', ',ifnull(`ROPTS`.`ost_libelle`,'')) AS `type`,coalesce(concat(`USRDC`.`user_nom`,' ',left(`USRDC`.`user_prenom`,1),'.'),'') AS `dc`,`OP`.`op_id` AS `op_id`,`OP`.`op_status_id` AS `op_status_id`,`OP`.`op_cl_id` AS `op_cl_id`,`OP`.`op_type_id` AS `op_type_id`,`OP`.`op_subtype_id` AS `op_subtype_id`,`OP`.`operation_universe_id` AS `operation_universe_id`,`OP`.`operation_media_id` AS `operation_media_id`,`OP`.`operation_ost_tpl_id` AS `operation_ost_tpl_id`,`OP`.`op_dc_id` AS `op_dc_id`,`OP`.`actif` AS `actif`,`OP`.`op_cp_id` AS `op_cp_id`,`OP`.`op_cdp_id` AS `op_cdp_id`,`OP`.`op_stamp_start` AS `op_stamp_start`,`OP`.`op_stamp_end` AS `op_stamp_end`,`OP`.`op_dateConso_start` AS `op_dateConso_start`,`OP`.`op_dateConso_end` AS `op_dateConso_end`,`OP`.`op_datePoste_end` AS `op_datePoste_end`,`OP`.`op_act_id` AS `op_act_id`,`OP`.`op_ct_id` AS `op_ct_id`,(`CONCATLISTOPTIONSFOROPID`(`OP`.`op_id`) collate utf8_unicode_ci) AS `list_options`,`OP`.`op_project_type_id` AS `op_project_type_id`,`OP`.`op_freq_stat_mail_id` AS `op_freq_stat_mail_id`,`OP`.`op_devis_lang` AS `op_devis_lang`,`OP`.`date_create` AS `date_create`,`operations_ext`.`opt_sync_task_user_id` AS `opt_sync_task_user_id`,`operations_ext`.`opt_sync_gedelog_user_id` AS `opt_sync_gedelog_user_id` from (((((((`operations` `OP` left join `View_Operation_Contrat_Number` `VOCN` on((`VOCN`.`op_id` = `OP`.`op_id`))) left join `operations_ext` on((`OP`.`op_id` = `operations_ext`.`op_id`))) left join `clients` `CL` on((`CL`.`cl_id` = `OP`.`op_cl_id`))) left join `r_operation_status` `OPST` on((`OP`.`op_status_id` = `OPST`.`os_id`))) left join `r_operation_type` `ROPT` on((`ROPT`.`ot_id` = `OP`.`op_type_id`))) left join `r_operation_type_sub` `ROPTS` on((`ROPTS`.`ost_id` = `OP`.`op_subtype_id`))) left join `users` `USRDC` on((`USRDC`.`user_id` = `OP`.`op_dc_id`)));

-- Update Client Sites Table to add actif column
ALTER TABLE `client_sites` ADD `actif` TINYINT(1) NOT NULL DEFAULT '1' AFTER `gdl_fourn_id`;

-- Updates some tables.
UPDATE r_client_types SET actif = 1, ordre = 40 WHERE cl_type_id = 1 AND actif = 0;

UPDATE r_client_types SET actif = 1 WHERE cl_type_id = 5 AND actif = 0;

UPDATE r_client_types SET  ordre = 50 WHERE cl_type_id = 4;

UPDATE r_client_activities SET actif = 1 WHERE cl_activity_id in (20,21, 22);

-- Update View_Client_Sites_Listing
CREATE
    OR REPLACE ALGORITHM = UNDEFINED
    DEFINER = `root`@`localhost`
    SQL SECURITY DEFINER 
VIEW `View_Client_Sites_Listing` AS select `client_sites`.`cl_site_id` AS `cl_site_id`,`client_sites`.`cl_id` AS `cl_id`,`client_sites`.`cl_site_libelle` AS `cl_site_libelle`,`client_sites`.`cl_site_addr_1` AS `cl_site_addr_1`,`client_sites`.`cl_site_addr_2` AS `cl_site_addr_2`,`client_sites`.`cl_site_addr_3` AS `cl_site_addr_3`,`r_countries`.`r_country_name` AS `cl_site_country`,`r_countries`.`r_country_code` AS `cl_site_country_a3`,`client_sites`.`cl_site_zipcode` AS `cl_site_zipcode`,`client_sites`.`cl_site_town` AS `cl_site_town`,`client_sites`.`actif` AS `actif` from (`client_sites` left join `r_countries` on((`r_countries`.`r_country_id` = `client_sites`.`cl_site_country_id`)));

-- Update method name
UPDATE `acl_actions` SET `action_name` = 'switchsite' WHERE `acl_actions`.`action_id` = 128;

UPDATE `acl_fonctionnalites` SET `fonc_name` = 'Basculer le statut du site client (actif / inactif)' WHERE `acl_fonctionnalites`.`fonc_id` = 5;
