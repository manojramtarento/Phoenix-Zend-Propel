-- update view View_Validation_Couts_Simplifie
CREATE OR REPLACE VIEW `View_Validation_Couts_Simplifie` AS select `OP`.`op_prest_id` AS `op_prest_id`,`operations`.`op_number` AS `op_number`,(case when (`operation_primes`.`op_prime_libelle` is not null) then concat(`r_prestations`.`r_p_libelle`,' (prime : ',`operation_primes`.`op_prime_libelle`,')') else `r_prestations`.`r_p_libelle` end) AS `r_p_libelle`,`OP`.`op_prest_pv` AS `op_prest_pv`,`OP`.`op_prest_ciestim` AS `op_prest_ciestim`,`OP`.`op_prest_cireel` AS `op_prest_cireel`,`OP`.`op_prest_ceestim` AS `op_prest_ceestim`,`OP`.`op_prest_cereel` AS `op_prest_cereel`,`r_prestations`.`r_p_validation_id` AS `r_p_validation_id`,`operations`.`op_cl_id` AS `op_cl_id`,`operations`.`op_id` AS `op_id`,`operations`.`op_dc_id` AS `op_dc_id`,`operations`.`op_cp_id` AS `op_cp_id`,`operations`.`op_cdp_id` AS `op_cdp_id`,`OP`.`op_prest_couts_valides` AS `op_prest_couts_valides`,`r_prestations`.`r_p_groupe_validation_id` AS `r_p_groupe_validation_id`,`r_prestations`.`r_prestation_id` AS `r_prestation_id`,((ifnull(`OP`.`op_prest_cireel`,0) + ifnull(`OP`.`op_prest_cereel`,0)) - (ifnull(`OP`.`op_prest_ciestim`,0) + ifnull(`OP`.`op_prest_ceestim`,0))) AS `ecart`,`VCAD`.`deadline_facture_fr` AS `deadline_facture_fr`,ifnull(`VCAD`.`nb_factures_en_attente`,0) AS `nb_factures_en_attente`,`OP`.`op_user_couts_reel` AS `op_user_couts_reel`,`operations`.`op_libelle` AS `op_libelle`,`OP`.`op_prest_libelle_devis` AS `op_prest_libelle_devis`,`operations`.`op_status_id` AS `op_status_id`,`r_p_type_validation`.`r_p_type_validation_libelle` AS `r_p_type_validation_libelle`,`operations`.`op_stamp_start` AS `op_stamp_start`,`operations`.`op_stamp_end` AS `op_stamp_end`,`operations`.`op_dateConso_start` AS `op_dateConso_start`,`operations`.`op_dateConso_end` AS `op_dateConso_end`,`operations`.`op_datePoste_end` AS `op_datePoste_end`,`clients`.`cl_libelle` AS `cl_libelle`,`OP`.`op_prest_npr` AS `op_prest_npr`,`OP`.`op_prest_npa` AS `op_prest_npa` from ((((((`operation_prestations` `OP` left join `View_Validation_Couts_Additional_Data` `VCAD` on((`VCAD`.`op_prest_id` = `OP`.`op_prest_id`))) left join `operation_primes` on((`OP`.`op_prest_prime_id` = `operation_primes`.`op_prime_id`))) join `operations` on((`OP`.`op_id` = `operations`.`op_id`))) left join `clients` on((`clients`.`cl_id` = `operations`.`op_cl_id`))) left join `r_prestations` on((`OP`.`op_r_prest_id` = `r_prestations`.`r_prestation_id`))) left join `r_p_type_validation` on((`r_p_type_validation`.`r_p_type_validation_id` = `r_prestations`.`r_p_validation_id`)));


-- update view View_Validation_Couts_Simplifie
CREATE OR REPLACE  VIEW `View_Validation_Couts` AS select `OP`.`op_prest_id` AS `op_prest_id`,`operations`.`op_number` AS `op_number`,(case when (`operation_primes`.`op_prime_libelle` is not null) then concat(`r_prestations`.`r_p_libelle`,' (prime : ',`operation_primes`.`op_prime_libelle`,')') else `r_prestations`.`r_p_libelle` end) AS `r_p_libelle`,`OP`.`op_prest_pv` AS `op_prest_pv`,`OP`.`op_prest_ciestim` AS `op_prest_ciestim`,`OP`.`op_prest_cireel` AS `op_prest_cireel`,`OP`.`op_prest_ceestim` AS `op_prest_ceestim`,`OP`.`op_prest_cereel` AS `op_prest_cereel`,`r_prestations`.`r_p_validation_id` AS `r_p_validation_id`,`operations`.`op_cl_id` AS `op_cl_id`,`operations`.`op_id` AS `op_id`,`operations`.`op_dc_id` AS `op_dc_id`,`operations`.`op_cp_id` AS `op_cp_id`,`operations`.`op_cdp_id` AS `op_cdp_id`,`OP`.`op_prest_couts_valides` AS `op_prest_couts_valides`,`r_prestations`.`r_p_groupe_validation_id` AS `r_p_groupe_validation_id`,`r_prestations`.`r_prestation_id` AS `r_prestation_id`,((ifnull(`OP`.`op_prest_cireel`,0) + ifnull(`OP`.`op_prest_cereel`,0)) - (ifnull(`OP`.`op_prest_ciestim`,0) + ifnull(`OP`.`op_prest_ceestim`,0))) AS `ecart`,`VCAD`.`deadline_facture_fr` AS `deadline_facture_fr`,ifnull(`VCAD`.`nb_factures_en_attente`,0) AS `nb_factures_en_attente`,`OP`.`op_prest_qestim` AS `quantite_estimee`,`OP`.`op_prest_qreel` AS `quantite_realisee`,`VPQF`.`quantite_facturee` AS `quantite_facturee`,`OP`.`op_user_couts_reel` AS `op_user_couts_reel`,`operations`.`op_libelle` AS `op_libelle`,`OP`.`op_prest_libelle_devis` AS `op_prest_libelle_devis`,`operations`.`op_status_id` AS `op_status_id`,`r_p_type_validation`.`r_p_type_validation_libelle` AS `r_p_type_validation_libelle`,`operations`.`op_stamp_start` AS `op_stamp_start`,`operations`.`op_stamp_end` AS `op_stamp_end`,`operations`.`op_dateConso_start` AS `op_dateConso_start`,`operations`.`op_dateConso_end` AS `op_dateConso_end`,`operations`.`op_datePoste_end` AS `op_datePoste_end`,`clients`.`cl_libelle` AS `cl_libelle`,`OP`.`date_modify` AS `op_prest_date_modify`,`OP`.`user_modify` AS `op_prest_user_modify`,`OP`.`cost_validation_date` AS `cost_validation_date`,`OP`.`cost_updater_user` AS `cost_updater_user`,`OP`.`op_prest_npr` AS `op_prest_npr`,`OP`.`op_prest_npa` AS `op_prest_npa` from (((((((`operation_prestations` `OP` left join `View_Validation_Couts_Additional_Data` `VCAD` on((`VCAD`.`op_prest_id` = `OP`.`op_prest_id`))) left join `View_Prestation_Quantitee_Facturee` `VPQF` on((`VPQF`.`op_prest_id` = `OP`.`op_prest_id`))) left join `operation_primes` on((`OP`.`op_prest_prime_id` = `operation_primes`.`op_prime_id`))) join `operations` on((`OP`.`op_id` = `operations`.`op_id`))) left join `clients` on((`clients`.`cl_id` = `operations`.`op_cl_id`))) left join `r_prestations` on((`OP`.`op_r_prest_id` = `r_prestations`.`r_prestation_id`))) left join `r_p_type_validation` on((`r_p_type_validation`.`r_p_type_validation_id` = `r_prestations`.`r_p_validation_id`)));

UPDATE `r_reward_expedition_modes` SET `r_reward_expedition_mode_label`='non géré par Qwamplify Activation' WHERE `r_reward_expedition_mode_label`='non géré par Custom';

-- Add new mail type "quotation"
INSERT INTO `r_mail_types` (`r_mail_type_id`,`r_mail_type_name`) VALUES (2, 'quotation');

-- Add tplQuotationMailSubject settings
INSERT INTO `settings` (`setting_key`, `setting_value`) VALUES ('tplQuotationMailSubject','Devis N° {{ operation_number }} | {{ operation_label }}');
INSERT INTO `i18n` ( `model_name`, `locale`, `field_name`, `foreign_key`, `field_value`) SELECT
    'settings' as model_name,
    'en_GB' as locale,
    'setting_value' as field_name,
    setting_id as foreign_key,
    'Quote N° {{ operation_number }} | {{ operation_label }}' as field_value
FROM settings
WHERE setting_key = 'tplQuotationMailSubject';

-- Add tplQuotationMailBody settings
INSERT INTO `settings` (`setting_key`, `setting_value`) VALUES ('tplQuotationMailBody','<p style="font-family:Calibri">
Madame/Monsieur,
<br />
<br />
Comme convenu, veuillez trouver ci-attaché le devis intégrant l’ensemble des prestations que nous avons évoquées.
<br />
Je reste bien entendu à votre entière disposition pour vous apporter tout complément d’informations nécessaires.
<br />
En vous remerciant pour votre confiance, veuillez agréer mes très sincères salutations.
<br />
Pour plus d\'informations , n’hésitez pas à me contacter au {{ sales_director_phone_number }}.
<br />
<br />
Cordialement,
<br />
<br />
{{ sales_director_name }}
</p>
{{ signature }}');

INSERT INTO `i18n` ( `model_name`, `locale`, `field_name`, `foreign_key`, `field_value`) SELECT
    'settings' as model_name,
    'en_GB' as locale,
    'setting_value' as field_name,
    setting_id as foreign_key,
    '<p style="font-family:Calibri">
Dear Sir/Madam,
<br />
<br />
As agreed, please find attached the estimate integrating all the services we have mentioned.
<br />
I am of course at your entire disposal to provide you with any additional information you may require.
<br />
Thank you for your confidence. Please accept my very sincere greetings.
<br />
For more information, feel free to contact me at {{ sales_director_phone_number }}.
<br />
<br />
Sincerely,
<br />
<br />
{{ sales_director_name }}
</p>
{{ signature }}' as field_value
FROM settings
WHERE setting_key = 'tplQuotationMailBody';

-- Add tplInvoiceMailSubject settings
INSERT INTO `settings` (`setting_key`, `setting_value`) VALUES ('tplInvoiceMailSubject','Facture - {{ client_label }}<?php if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::INVOICE_DISPLAY_OPERATION_DATA)) { ?> - Offre N°{{ operation_number }} - {{ operation_label }}<?php } ?>');
INSERT INTO `i18n` ( `model_name`, `locale`, `field_name`, `foreign_key`, `field_value`) SELECT
    'settings' as model_name,
    'en_GB' as locale,
    'setting_value' as field_name,
    setting_id as foreign_key,
    'Invoice - {{ client_label }}<?php if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::INVOICE_DISPLAY_OPERATION_DATA)) { ?> - Offer N°{{ operation_number }} - {{ operation_label }}<?php } ?>' as field_value
FROM settings
WHERE setting_key = 'tplInvoiceMailSubject';


-- Add tplInvoiceMailBody settings
INSERT INTO `settings` (`setting_key`, `setting_value`) VALUES ('tplInvoiceMailBody','<p style="font-family:Calibri">
 Madame/Monsieur<?php if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::INVOICE_DISPLAY_CLIENT_CONTACT_DATA)) { ?> {{ invoice_contact_name }}<?php } ?>,
 <br />
 <br />
 Comme convenu, veuillez trouver ci-attachée votre facture<?php if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::INVOICE_DISPLAY_OPERATION_DATA)) { ?>  correspondant au devis N°{{ operation_number }}, relative à l’offre {{ operation_label }}<?php } ?>.
 <br />
 <br />
 Vous en souhaitant bonne réception, nous restons à votre entière disposition pour vous apporter tout complément d’informations nécessaires.
 <br />
 <br />
 Cordialement,
 <br />
 <br />
 Service Facturation {{ Settings::SETTING_KEY_COMPANY_NAME }}
 </p>
 {{ signature }}');

INSERT INTO `i18n` ( `model_name`, `locale`, `field_name`, `foreign_key`, `field_value`) SELECT
    'settings' as model_name,
    'en_GB' as locale,
    'setting_value' as field_name,
    setting_id as foreign_key,
    '<p style="font-family:Calibri">
 Dear Sir/Madam<?php if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::INVOICE_DISPLAY_CLIENT_CONTACT_DATA)) { ?> {{ invoice_contact_name }}<?php } ?>,
 <br />
 <br />
 As agreed, please find attached your invoice<?php if (Phoenix_Auth_User::getInstance()->isAllowed(AclFunctionalites::INVOICE_DISPLAY_OPERATION_DATA)) { ?> corresponding to the quotation N°{{ operation_number }}, relative to the offer {{ operation_label }}<?php } ?>.
 <br />
 <br />
 We wish you a pleasant reception and remain at your entire disposal to provide you with any additional information you may require.
 <br />
 <br />
 Sincerely,
 <br />
 <br />
 Billing Service {{ Settings::SETTING_KEY_COMPANY_NAME }}
 </p>
 {{{ signature }}' as field_value
FROM settings
WHERE setting_key = 'tplInvoiceMailBody';