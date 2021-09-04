-- Add new ACL fonctionality for operation end date
INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (331, '8', 'Affichage de la date de fin de gestion');

 INSERT INTO `lnk_acl_groups_fonctionnalites` (`lnk_acl_groups_fonctionnalite_group_id`,`lnk_acl_groups_fonctionnalite_fonc_id`)
    SELECT group_id AS lnk_acl_groups_fonctionnalite_group_id,"331" AS lnk_acl_groups_fonctionnalite_fonc_id FROM `acl_groups`
 ON DUPLICATE KEY UPDATE lnk_acl_groups_fonctionnalite_group_id=lnk_acl_groups_fonctionnalite_group_id;

 -- Add new ACL fonctionality for display operation data in invoice
INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (332, '10', 'Affichage des infos de l''opération dans la facture');

 INSERT INTO `lnk_acl_groups_fonctionnalites` (`lnk_acl_groups_fonctionnalite_group_id`,`lnk_acl_groups_fonctionnalite_fonc_id`)
    SELECT group_id AS lnk_acl_groups_fonctionnalite_group_id,"332" AS lnk_acl_groups_fonctionnalite_fonc_id FROM `acl_groups`
 ON DUPLICATE KEY UPDATE lnk_acl_groups_fonctionnalite_group_id=lnk_acl_groups_fonctionnalite_group_id;