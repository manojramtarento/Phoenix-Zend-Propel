-- Add new ACL fonctionality
INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (284, '8', 'Gestionnaire obligatoire');
INSERT INTO `lnk_acl_groups_fonctionnalites` (`lnk_acl_groups_fonctionnalite_group_id`,`lnk_acl_groups_fonctionnalite_fonc_id`) 
    SELECT group_id AS lnk_acl_groups_fonctionnalite_group_id,"284" AS lnk_acl_groups_fonctionnalite_fonc_id FROM `acl_groups`
ON DUPLICATE KEY UPDATE lnk_acl_groups_fonctionnalite_group_id=lnk_acl_groups_fonctionnalite_group_id;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (285, '8', 'Type de projet obligatoire');
INSERT INTO `lnk_acl_groups_fonctionnalites` (`lnk_acl_groups_fonctionnalite_group_id`,`lnk_acl_groups_fonctionnalite_fonc_id`) 
    SELECT group_id AS lnk_acl_groups_fonctionnalite_group_id,"285" AS lnk_acl_groups_fonctionnalite_fonc_id FROM `acl_groups`
ON DUPLICATE KEY UPDATE lnk_acl_groups_fonctionnalite_group_id=lnk_acl_groups_fonctionnalite_group_id;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (286, '3', 'Modification du mot de passe');
INSERT INTO `acl_actions` (`int_cont_id`, `action_name`, `fonc_id`, `comment`) VALUES ('3', 'updatepassword', '286', 'Méthode pour la modification du mot de passe');
INSERT INTO `lnk_acl_groups_fonctionnalites` (`lnk_acl_groups_fonctionnalite_group_id`,`lnk_acl_groups_fonctionnalite_fonc_id`) 
    SELECT group_id AS lnk_acl_groups_fonctionnalite_group_id,"286" AS lnk_acl_groups_fonctionnalite_fonc_id FROM `acl_groups`
ON DUPLICATE KEY UPDATE lnk_acl_groups_fonctionnalite_group_id=lnk_acl_groups_fonctionnalite_group_id;

-- Add new setting for operationNumberFormat
INSERT INTO `settings` (`setting_key`, `setting_value`) VALUES ('operationNumberFormat', '[3-9]{1}[0-9]{4}');

-- Change type of operation number
ALTER TABLE `operations` CHANGE COLUMN `op_number` `op_number` VARCHAR(255) NOT NULL;

-- CHANGE ACL fonctionality controller
UPDATE acl_fonctionnalites SET int_cont_id = 19 WHERE fonc_name = "Affichage de la ref de compte ADF";



