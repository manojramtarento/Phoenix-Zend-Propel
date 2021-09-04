-- Add new ACL fonctionality
INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (287, '8', 'Affichage des dates de consommation');

 INSERT INTO `lnk_acl_groups_fonctionnalites` (`lnk_acl_groups_fonctionnalite_group_id`,`lnk_acl_groups_fonctionnalite_fonc_id`)
    SELECT group_id AS lnk_acl_groups_fonctionnalite_group_id,"287" AS lnk_acl_groups_fonctionnalite_fonc_id FROM `acl_groups`
 ON DUPLICATE KEY UPDATE lnk_acl_groups_fonctionnalite_group_id=lnk_acl_groups_fonctionnalite_group_id;

-- Add default settings
INSERT INTO `settings` (`setting_key`, `setting_value`) VALUES ('globalBudgetTermsOfSale','Sous réserve d\'évolution des remontées consommateurs et tarifs Poste et opérateurs télécom');
INSERT INTO `i18n` ( `model_name`, `locale`, `field_name`, `foreign_key`, `field_value`) SELECT
    'settings' as model_name,
    'en_GB' as locale,
    'setting_value' as field_name,
    setting_id as foreign_key,
    'Subject to the evolution of the consumer\'s returns, the costs of the Post office and telephone companies' as field_value
FROM settings
WHERE setting_key = 'globalBudgetTermsOfSale';

-- Update View_Facture_Listing
CREATE
    OR REPLACE ALGORITHM = UNDEFINED
    DEFINER = `root`@`localhost`
    SQL SECURITY DEFINER
VIEW `View_Facture_Listing` AS

    SELECT
        `factures`.`fact_id` AS `fact_id`,
        `factures`.`r_fact_type_id` AS `r_fact_type_id`,
        `factures`.`op_id` AS `op_id`,
        `factures`.`cl_id` AS `cl_id`,
        `factures`.`ct_id` AS `ct_id`,
        CASE
            WHEN `factures`.`fact_status_id` NOT IN (1 , 2)
            THEN `factures`.`dc_id`
            ELSE `operations`.`op_dc_id`
        END AS `dc_id`,
        `factures`.`fact_numero` AS `fact_numero`,
        `factures`.`fact_num_cmd` AS `fact_num_cmd`,
        `factures`.`fact_montant_ht` AS `fact_montant_ht`,
        `factures`.`fact_montant_ttc` AS `fact_montant_ttc`,
        `factures`.`fact_montant_encaisse` AS `fact_montant_encaisse`,
        `factures`.`fact_destinataire` AS `fact_destinataire`,
        `factures`.`fact_attention` AS `fact_attention`,
        `factures`.`fact_adresse1` AS `fact_adresse1`,
        `factures`.`fact_adresse2` AS `fact_adresse2`,
        `factures`.`fact_adresse3` AS `fact_adresse3`,
        `factures`.`fact_code_postal` AS `fact_code_postal`,
        `factures`.`fact_ville` AS `fact_ville`,
        `factures`.`fact_pays` AS `fact_pays`,
        `factures`.`fact_user_edition` AS `fact_user_edition`,
        `factures`.`fact_verrou` AS `fact_verrou`,
        `factures`.`fact_annul_id` AS `fact_annul_id`,
        `factures`.`fact_taux_adf` AS `fact_taux_adf`,
        `factures`.`date_create` AS `fact_date_create`,
        `factures`.`date_modify` AS `fact_date_modify`,
        `factures`.`user_id` AS `user_id`,
        `factures`.`user_modify` AS `user_modify`,
        `r_operation_type`.`ot_libelle` AS `ot_libelle`,
        `operations`.`op_number` AS `op_number`,
        `operations`.`op_libelle` AS `op_libelle`,
        `clients`.`cl_libelle` AS `cl_libelle`,
        `factures`.`fact_reference` AS `fact_reference`,
        `r_facture_statuts`.`r_fact_stat_libelle` AS `r_fact_stat_libelle`,
        `r_facture_types`.`r_fact_type_libelle` AS `r_fact_type_libelle`,
        `operations`.`op_act_id` AS `op_act_id`,
        `operations`.`op_type_id` AS `op_type_id`,
        `operations`.`op_status_id` AS `op_status_id`,
        `factures`.`fact_montant_ttc` - `factures`.`fact_montant_encaisse` AS `fact_solde`,
        CASE
            WHEN `r_facture_statuts`.`r_fact_stat_id` <> 4 AND `factures`.`fact_montant_encaisse` < `factures`.`fact_montant_ttc`
            THEN 1
            ELSE 0
        END AS `fact_has_paiement_partiel`,
        `factures`.`fact_status_id` AS `fact_status_id`,
        DATE_FORMAT(`factures`.`fact_date`, '%d/%m/%Y') AS `fact_date_validation_fr`,
        (
            SELECT DATE_FORMAT(`View_Facture_Status_2`.`date_create`, '%d/%m/%Y') AS `Expr1`
            FROM `View_Facture_Status` `View_Facture_Status_2`
            WHERE `View_Facture_Status_2`.`fact_id` = `factures`.`fact_id`
			AND `View_Facture_Status_2`.`r_fact_stat_id` = 3
        ) AS `fact_date_edition_fr`,
		DATE_FORMAT(`factures`.`fact_date_echeance`, '%d/%m/%Y') AS `fact_date_echeance_fr`,
        (
            SELECT DATE_FORMAT(`View_Facture_Status`.`date_create`,'%d/%m/%Y') AS `Expr1`
            FROM `View_Facture_Status`
            WHERE `View_Facture_Status`.`fact_id` = `factures`.`fact_id`
			AND `View_Facture_Status`.`r_fact_stat_id` = 4
        ) AS `fact_date_encaisse_fr`,
        `factures`.`fact_date` AS `fact_date_validation`,
        (
            SELECT `View_Facture_Status_2`.`date_create` AS `Expr1`
            FROM `View_Facture_Status` `View_Facture_Status_2`
            WHERE `View_Facture_Status_2`.`fact_id` = `factures`.`fact_id`
			AND `View_Facture_Status_2`.`r_fact_stat_id` = 3
        )   AS `fact_date_edition`,
        `factures`.`fact_date_echeance` AS `fact_date_echeance`,
        (
            SELECT `View_Facture_Status`.`date_create` AS `Expr1`
            FROM `View_Facture_Status`
            WHERE `View_Facture_Status`.`fact_id` = `factures`.`fact_id`
            AND `View_Facture_Status`.`r_fact_stat_id` = 4
        ) AS `fact_date_encaisse`,
        `plan_facturation_params`.`plan_fact_periode_id` AS `plan_fact_periode_id`,
        `plan_facturation_params`.`plan_fact_periode_type_id` AS `plan_fact_periode_type_id`,
        DATE_FORMAT(`factures`.`date_create`, '%d/%m/%Y') AS `fact_date_create_fr`,
        DATE_FORMAT(`factures`.`date_modify`, '%d/%m/%Y') AS `fact_date_modify_fr`,
        `r_facture_options_echeances`.`fact_opt_echeance_libelle` AS `fact_echeance_libelle`,
        CASE
            WHEN NOW() > `factures`.`fact_date_echeance` AND `factures`.`fact_status_id` <> 4
            THEN 1
            ELSE 0
        END AS `fact_is_echu`,
        `plan_facturation_params`.`plan_fact_note_interne` AS `plan_fact_note_interne`,
        `operations`.`op_cp_id` AS `op_cp_id`,
        CONCAT(`users_cp`.`user_nom`, ' ', `users_cp`.`user_prenom`) AS `op_cp_name`,
        `r_facture_annulation_motifs`.`r_facture_annulation_motifs_motif_libelle` AS `motif_annulation`,
        `plan_facturation_details`.`pfd_fact_annul_autre_motif` AS `motif_annulation_autre`
    FROM  `factures`
    LEFT JOIN `plan_facturation_details` ON `plan_facturation_details`.`pfd_fact_id` = `factures`.`fact_id`
    LEFT JOIN `r_facture_annulation_motifs` ON `r_facture_annulation_motifs`.`r_facture_annulation_motifs_motif_id` = `plan_facturation_details`.`pfd_fact_annul_motif_id`
    JOIN `r_facture_statuts` ON `factures`.`fact_status_id` = `r_facture_statuts`.`r_fact_stat_id`
    JOIN `r_facture_options_echeances` ON `factures`.`fact_echeance_id` = `r_facture_options_echeances`.`fact_opt_echeance_id`
    LEFT JOIN `r_facture_types` ON `r_facture_types`.`r_fact_type_id` = `factures`.`r_fact_type_id`
    LEFT JOIN `clients` ON `factures`.`cl_id` = `clients`.`cl_id`
    LEFT JOIN `operations` ON `operations`.`op_id` = `factures`.`op_id`
    LEFT JOIN `plan_facturation_params` ON `operations`.`op_id` = `plan_facturation_params`.`op_id`
    LEFT JOIN `r_operation_type` ON `operations`.`op_type_id` = `r_operation_type`.`ot_id`
    LEFT JOIN `users` `users_cp` ON `users_cp`.`user_id` = `operations`.`op_cp_id`;

-- Clean useless ACL
DELETE FROM acl_actions WHERE int_cont_id = 9;
DELETE FROM acl_interfaces_controllers WHERE int_cont_id = 9;

-- Improve operation dates view
CREATE
    OR REPLACE ALGORITHM = UNDEFINED
    DEFINER = `root`@`localhost`
    SQL SECURITY DEFINER
VIEW `View_Operation_Dates` AS
SELECT
	operations.op_id AS op_id,
	DATE_FORMAT(MIN(os_accepted.date_create),'%d/%m/%Y') AS `date_accepte_fr`,
	DATE_FORMAT(MIN(os_balanced.date_create),'%d/%m/%Y') AS `date_balanced_fr`,
	DATE_FORMAT(MIN(os_rejected.date_create),'%d/%m/%Y') AS `date_rejected_fr`,
	DATE_FORMAT(MAX(os_closed.date_create),'%d/%m/%Y') AS `date_closed_fr`
FROM operations
LEFT JOIN operation_statuts os_accepted ON os_accepted.op_id = operations.op_id AND os_accepted.hs_new_statut_id = 2
LEFT JOIN operation_statuts os_balanced ON os_balanced.op_id = operations.op_id AND os_balanced.hs_new_statut_id = 6
LEFT JOIN operation_statuts os_rejected ON os_rejected.op_id = operations.op_id AND os_rejected.hs_new_statut_id = 3
LEFT JOIN operation_statuts os_closed ON os_closed.op_id = operations.op_id AND os_closed.hs_new_statut_id = 4
GROUP BY operations.op_id;

-- Improve operation listing view
CREATE
    OR REPLACE ALGORITHM = UNDEFINED
    DEFINER = `root`@`localhost`
    SQL SECURITY DEFINER
VIEW `View_Operation_Listing` AS
    SELECT
        `operations`.`op_id` AS `op_id`,
        `operations`.`op_number` AS `op_number`,
        `operations`.`op_libelle` AS `op_label`,
        `r_operation_status`.`os_libelle` AS `op_status`,
        `parent_operations`.`op_number` AS `op_parent_op_number`,
        `universe`.`r_operation_universe_label` AS `op_universe_label`,
        `r_operation_medias`.`r_operation_media_label` AS `op_media_label`,
        `r_custom_activites`.`act_libelle` AS `op_act_label`,
        `r_operation_type`.`ot_libelle` AS `op_type_label`,
        `r_operation_type_sub`.`ost_libelle` AS `op_subtype_label`,
        `r_project_type`.`r_project_type_libelle` AS `op_project_type_label`,
        DATE_FORMAT(`operations`.`date_create`, '%d/%m/%Y') AS `op_date_create`,
        DATE_FORMAT(`operations`.`op_stamp_start`, '%d/%m/%Y') AS `op_start_date`,
        DATE_FORMAT(`operations`.`op_dateConso_start`, '%d/%m/%Y') AS `op_start_consuming_date`,
        DATE_FORMAT(`operations`.`op_dateConso_end`, '%d/%m/%Y') AS `op_end_consuming_date`,
        DATE_FORMAT(`operations`.`op_datePoste_end`, '%d/%m/%Y') AS `op_end_post_date`,
        DATE_FORMAT(`operations`.`op_stamp_end`, '%d/%m/%Y') AS `op_end_date`,
        DATE_FORMAT(`operations`.`op_date_archivage_end`,'%d/%m/%Y') AS `op_end_archiving_date`,
        `operations_dates`.`date_accepte_fr` AS `op_accepted_date`,
        `operations_dates`.`date_balanced_fr` AS `op_balanced_date`,
        `operations_dates`.`date_rejected_fr` AS `op_rejected_date`,
        `operations_dates`.`date_closed_fr` AS `op_closed_date`,
        DATE_FORMAT(`pfp`.`plan_fact_date_prem_fact`, '%d/%m/%Y') AS `op_first_invoice_date`,
        DATE_FORMAT(`pfp`.`plan_fact_date_der_fact`, '%d/%m/%Y') AS `op_last_invoice_date`,
        COALESCE(CONCAT(`USRDC`.`user_nom`,' ',`USRDC`.`user_prenom`)) AS `op_sales_director`,
        COALESCE(CONCAT(`USRCP`.`user_nom`,' ',`USRCP`.`user_prenom`)) AS `op_manager`,
        COALESCE(CONCAT(`USRCDP`.`user_nom`,' ',`USRCDP`.`user_prenom`)) AS `op_project_manager`,
        `clients`.`cl_libelle` AS `op_client_label`,
        `operations`.`op_taux_conversion` AS `op_conversion_rate`,
        SUM(`invoices`.`fact_montant_ttc`) AS `op_invoices_vat_amount`,
        `voea`.`montant_total_estime_ttc` AS `op_estimated_amount_including_vat`,
        `voea`.`montant_total_estime_ca` AS `op_estimated_amount_turnover`,
        (CASE
            WHEN (`fund_raising`.`ADF_Facture` IS NOT NULL) THEN `fund_raising`.`ADF_Facture`
            ELSE 0
        END) AS `op_invoiced_funds`,
        (CASE
            WHEN (`fund_raising`.`ADF_Encaisse` IS NOT NULL) THEN `fund_raising`.`ADF_Encaisse`
            ELSE 0
        END) AS `op_received_funds`,
        (CASE
            WHEN
                (`operations`.`operation_ost_tpl_id` IS NOT NULL)
            THEN
                `r_operation_type_sub_tpl`.`ost_tpl_libelle`
            ELSE 'Aucun template utilisé'
        END) AS `op_original_template`,
        `r_delai_trait_courrier`.`r_delai_trait_courrier_libelle` AS `op_mail_processing_time`,
        IFNULL(`VOCN`.`nb_contrats`, 0) AS `op_nb_contracts`
    FROM
        (((((((((((((((((((((`operations`
        LEFT JOIN `View_Operation_Contrat_Number` `VOCN` ON ((`VOCN`.`op_id` = `operations`.`op_id`)))
        LEFT JOIN `operations` `parent_operations` ON ((`parent_operations`.`op_id` = `operations`.`op_parent_id`)))
        LEFT JOIN `r_operation_universes` `universe` ON ((`universe`.`r_operation_universe_id` = `operations`.`operation_universe_id`)))
        LEFT JOIN `r_operation_medias` ON ((`operations`.`operation_media_id` = `r_operation_medias`.`r_operation_media_id`)))
        LEFT JOIN `r_custom_activites` ON ((`r_custom_activites`.`act_id` = `operations`.`op_act_id`)))
        LEFT JOIN `r_operation_type` ON ((`r_operation_type`.`ot_id` = `operations`.`op_type_id`)))
        LEFT JOIN `r_operation_type_sub` ON ((`r_operation_type_sub`.`ost_id` = `operations`.`op_subtype_id`)))
        LEFT JOIN `r_project_type` ON ((`r_project_type`.`r_project_type_id` = `operations`.`op_project_type_id`)))
        LEFT JOIN `r_operation_status` ON ((`r_operation_status`.`os_id` = `operations`.`op_status_id`)))
        LEFT JOIN `r_operation_type_sub_tpl` ON ((`operations`.`operation_ost_tpl_id` = `r_operation_type_sub_tpl`.`ost_tpl_id`)))
        LEFT JOIN `clients` ON ((`clients`.`cl_id` = `operations`.`op_cl_id`)))
        LEFT JOIN `users` `USRDC` ON ((`USRDC`.`user_id` = `operations`.`op_dc_id`)))
        LEFT JOIN `users` `USRCP` ON ((`USRCP`.`user_id` = `operations`.`op_cp_id`)))
        LEFT JOIN `users` `USRCDP` ON ((`USRCDP`.`user_id` = `operations`.`op_cdp_id`)))
        LEFT JOIN `View_Operation_Contrat_Number` `contract_number` ON ((`contract_number`.`op_id` = `operations`.`op_id`)))
        LEFT JOIN `View_Operation_Dates` `operations_dates` ON ((`operations_dates`.`op_id` = `operations`.`op_id`)))
        LEFT JOIN `View_Operation_ADF` `fund_raising` ON ((`fund_raising`.`op_id` = `operations`.`op_id`)))
        LEFT JOIN `view_operation_estimated_amounts` `voea` ON ((`voea`.`op_id` = `operations`.`op_id`)))
        LEFT JOIN `plan_facturation_params` `pfp` ON ((`pfp`.`op_id` = `operations`.`op_id`)))
        LEFT JOIN `factures` `invoices` ON ((`invoices`.`op_id` = `operations`.`op_id`)))
        LEFT JOIN `r_delai_trait_courrier` ON ((`r_delai_trait_courrier_id` = `operations`.`op_delai_trait_courrier_id`)))
    GROUP BY `operations`.`op_id`
    ORDER BY `operations`.`op_number` DESC;
