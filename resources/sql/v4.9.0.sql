-- Add cl_fact_siret column in client_facture_options
ALTER TABLE `client_facture_options` ADD COLUMN `cl_fact_siret` VARCHAR(255) NULL DEFAULT NULL AFTER `plan_fact_periode_type_id`;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (330, '13', 'Importer des operations');
INSERT INTO `acl_actions` (`int_cont_id`, `action_name`, `fonc_id`, `comment`) VALUES ('13', 'import', '330', 'Méthode pour l''import des operations');