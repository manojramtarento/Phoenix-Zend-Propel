-- Add new ACL  controllers
INSERT INTO `acl_interfaces_controllers` (`int_cont_id`, `module_id`, `interface_name`, `controller_name`) VALUES ('3', '1', 'utilisateur', 'user');

-- Add new ACL fonctionality
INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (280, '3', 'Accéder au paramétrage utilisateur');
INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (281, '3', 'Upload de la signature utilisateur');
INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (282, '3', 'Supression de la signature utilisateur');
INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (283, '3', 'Changement de la langue utilisateur');

-- Add new ACL  actions
INSERT INTO `acl_actions` (`int_cont_id`, `action_name`, `fonc_id`, `comment`) VALUES ('3', 'index', '280', 'Méthode par défaut lors de l''appel au controlleur');
INSERT INTO `acl_actions` (`int_cont_id`, `action_name`, `fonc_id`, `comment`) VALUES ('3', 'uploadsignature', '281', 'Méthode pour l''upload de la signature');
INSERT INTO `acl_actions` (`int_cont_id`, `action_name`, `fonc_id`, `comment`) VALUES ('3', 'deletesignature', '282', 'Méthode pour la suppression de la signature');
INSERT INTO `acl_actions` (`int_cont_id`, `action_name`, `fonc_id`, `comment`) VALUES ('3', 'changelanguage', '283', 'Méthode pour le changement de langue');

-- Allows all groups to default/user route
INSERT INTO `lnk_acl_groups_fonctionnalites` (`lnk_acl_groups_fonctionnalite_group_id`,`lnk_acl_groups_fonctionnalite_fonc_id`) 
    SELECT group_id AS lnk_acl_groups_fonctionnalite_group_id,"280" AS lnk_acl_groups_fonctionnalite_fonc_id FROM `acl_groups`
ON DUPLICATE KEY UPDATE lnk_acl_groups_fonctionnalite_group_id=lnk_acl_groups_fonctionnalite_group_id;
INSERT INTO `lnk_acl_groups_fonctionnalites` (`lnk_acl_groups_fonctionnalite_group_id`,`lnk_acl_groups_fonctionnalite_fonc_id`) 
    SELECT group_id AS lnk_acl_groups_fonctionnalite_group_id,"281" AS lnk_acl_groups_fonctionnalite_fonc_id FROM `acl_groups`
ON DUPLICATE KEY UPDATE lnk_acl_groups_fonctionnalite_group_id=lnk_acl_groups_fonctionnalite_group_id;
INSERT INTO `lnk_acl_groups_fonctionnalites` (`lnk_acl_groups_fonctionnalite_group_id`,`lnk_acl_groups_fonctionnalite_fonc_id`) 
    SELECT group_id AS lnk_acl_groups_fonctionnalite_group_id,"282" AS lnk_acl_groups_fonctionnalite_fonc_id FROM `acl_groups`
ON DUPLICATE KEY UPDATE lnk_acl_groups_fonctionnalite_group_id=lnk_acl_groups_fonctionnalite_group_id;
INSERT INTO `lnk_acl_groups_fonctionnalites` (`lnk_acl_groups_fonctionnalite_group_id`,`lnk_acl_groups_fonctionnalite_fonc_id`) 
    SELECT group_id AS lnk_acl_groups_fonctionnalite_group_id,"283" AS lnk_acl_groups_fonctionnalite_fonc_id FROM `acl_groups`
ON DUPLICATE KEY UPDATE lnk_acl_groups_fonctionnalite_group_id=lnk_acl_groups_fonctionnalite_group_id;