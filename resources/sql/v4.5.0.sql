-- Remove space when the internal commentary contains only spaces
UPDATE r_prestations SET `r_p_commentaires`= CASE WHEN trim(`r_p_commentaires`) = '' THEN null ELSE `r_p_commentaires` END; 
UPDATE `operation_prestations` SET `op_prest_comment_interne`= CASE WHEN trim(`op_prest_comment_interne`) = '' THEN null ELSE `op_prest_comment_interne` END;

-- Improve View_Operation_Dates view
CREATE
    OR REPLACE ALGORITHM = UNDEFINED
    DEFINER = `root`@`localhost`
    SQL SECURITY DEFINER
VIEW `View_Operation_Dates` AS
    SELECT 
        `operations`.`op_id` AS `op_id`,
        MIN(`os_ongoing`.`date_create`) AS date_ongoing,
        DATE_FORMAT(MIN(`os_ongoing`.`date_create`), '%d/%m/%Y') AS `date_ongoing_fr`,        
        
        MIN(`os_accepted`.`date_create`) AS date_accepted,
        DATE_FORMAT( MIN(`os_accepted`.`date_create`), '%d/%m/%Y') AS `date_accepte_fr`,
                
        MIN(`os_rejected`.`date_create`) AS date_rejected,
        DATE_FORMAT(MIN(`os_rejected`.`date_create`), '%d/%m/%Y') AS `date_rejected_fr`,
                
        MIN(`os_closed`.`date_create`) AS date_closed,
        DATE_FORMAT( MIN(`os_closed`.`date_create`), '%d/%m/%Y') AS `date_closed_fr`,
                
        MIN(`os_balanced`.`date_create`) AS date_balanced,
        DATE_FORMAT(MIN(`os_balanced`.`date_create`), '%d/%m/%Y') AS `date_balanced_fr`
    FROM
        `operations`
        LEFT JOIN `operation_statuts` `os_ongoing` ON `os_ongoing`.`op_id` = `operations`.`op_id` AND `os_ongoing`.`hs_new_statut_id` = 1
        LEFT JOIN `operation_statuts` `os_accepted` ON `os_accepted`.`op_id` = `operations`.`op_id` AND `os_accepted`.`hs_new_statut_id` = 2
        LEFT JOIN `operation_statuts` `os_rejected` ON `os_rejected`.`op_id` = `operations`.`op_id` AND `os_rejected`.`hs_new_statut_id` = 3 
        LEFT JOIN `operation_statuts` `os_closed` ON `os_closed`.`op_id` = `operations`.`op_id` AND `os_closed`.`hs_new_statut_id` = 4  
        LEFT JOIN `operation_statuts` `os_balanced` ON `os_balanced`.`op_id` = `operations`.`op_id` AND `os_balanced`.`hs_new_statut_id` = 6   
    GROUP BY `operations`.`op_id`;


-- Add missing ACL fonctionnalities for Administration_RtypesdevisController actions
INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (288, '42', 'Liste des templates');
UPDATE acl_actions SET fonc_id = 288, comment = "Liste des templates" WHERE action_id = 186;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (289, '42', 'Affichage du template');
UPDATE acl_actions SET fonc_id = 289, comment = "Affichage du template" WHERE action_id = 187;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (290, '42', 'Création d''un template');
UPDATE acl_actions SET fonc_id = 290, comment = "Création d''un template" WHERE action_id = 188;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (291, '42', 'Gestion des activités');
UPDATE acl_actions SET fonc_id = 291, comment = "Gestion des activités" WHERE action_id = 189;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (292, '42', 'Gestion des types');
UPDATE acl_actions SET fonc_id = 292, comment = "Gestion des types" WHERE action_id = 190;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (293, '42', 'Gestion des sous-types');
UPDATE acl_actions SET fonc_id = 293, comment = "Gestion des sous-types" WHERE action_id = 191;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (294, '42', 'Affichage des primes');
UPDATE acl_actions SET fonc_id = 294, comment = "Affichage des primes" WHERE action_id = 192;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (295, '42', 'Affichage des scenarii');
UPDATE acl_actions SET fonc_id = 295, comment = "Affichage des scenarii" WHERE action_id = 193;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (296, '42', 'Affichage des rubriques');
UPDATE acl_actions SET fonc_id = 296, comment = "Affichage des rubriques" WHERE action_id = 194;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (297, '42', 'Affichage d''une rubrique');
UPDATE acl_actions SET fonc_id = 297, comment = "Affichage d''une rubrique" WHERE action_id = 195;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (298, '42', 'Ajout d''une prime');
UPDATE acl_actions SET fonc_id = 298, comment = "Ajout d''une prime" WHERE action_id = 196;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (299, '42', 'Ajout d''un scénario');
UPDATE acl_actions SET fonc_id = 299, comment = "Ajout d''un scénario" WHERE action_id = 197;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (300, '42', 'Mise à jour d''une prime');
UPDATE acl_actions SET fonc_id = 300, comment = "Mise à jour d''une prime" WHERE action_id = 198;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (301, '42', 'Ajout d''une rubrique à un template');
UPDATE acl_actions SET fonc_id = 301, comment = "Ajout d''une rubrique à un template" WHERE action_id = 199;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (302, '42', 'Ajout d''une prestation à une rubrique de template');
UPDATE acl_actions SET fonc_id = 302, comment = "Ajout d''une prestation à une rubrique de template" WHERE action_id = 200;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (303, '42', 'Suppression d''une rubrique');
UPDATE acl_actions SET fonc_id = 303, comment = "Suppression d''une rubrique" WHERE action_id = 201;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (304, '42', 'Suppression d''un scénario');
UPDATE acl_actions SET fonc_id = 304, comment = "Suppression d''un scénario" WHERE action_id = 202;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (305, '42', 'Suppression d''une prime');
UPDATE acl_actions SET fonc_id = 305, comment = "Suppression d''une prime" WHERE action_id = 203;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (306, '42', 'Suppression d''une prestation');
UPDATE acl_actions SET fonc_id = 306, comment = "Suppression d''une prestation" WHERE action_id = 204;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (307, '42', 'Mise à jour d''un champ d''une prestation');
UPDATE acl_actions SET fonc_id = 307, comment = "Mise à jour d''un champ d''une prestation" WHERE action_id = 205;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (308, '42', 'Mise à jour d''un champ d''un scénario');
UPDATE acl_actions SET fonc_id = 308, comment = "Mise à jour d''un champ d''un scénario" WHERE action_id = 206;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (309, '42', 'Mise à jour d''un champ d''un template');
UPDATE acl_actions SET fonc_id = 309, comment = "Mise à jour d''un champ d''un template" WHERE action_id = 207;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (310, '42', 'Mise à jour d''un champ d''une activité');
UPDATE acl_actions SET fonc_id = 310, comment = "Mise à jour d''un champ d''une activité" WHERE action_id = 208;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (311, '42', 'Mise à jour d''un champ d''un type');
UPDATE acl_actions SET fonc_id = 311, comment = "Mise à jour d''un champ d''un type" WHERE action_id = 209;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (312, '42', 'Mise à jour d''un champ d''un sous-type');
UPDATE acl_actions SET fonc_id = 312, comment = "Mise à jour d''un champ d''un sous-type" WHERE action_id = 210;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (313, '42', 'Mise à jour de la position d''un scénario');
UPDATE acl_actions SET fonc_id = 313, comment = "Mise à jour de la position d''un scénario" WHERE action_id = 247;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (314, '42', 'Mise à jour de la position d''une prestation');
UPDATE acl_actions SET fonc_id = 314, comment = "Mise à jour de la position d''une prestation" WHERE action_id = 248;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (315, '42', 'Mise à jour de la position d''une rubrique');
UPDATE acl_actions SET fonc_id = 315, comment = "Mise à jour de la position d''une rubrique" WHERE action_id = 251;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (316, '42', 'Gestion des médias');
UPDATE acl_actions SET fonc_id = 316, comment = "Gestion des médias" WHERE action_id = 294;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (317, '42', 'Mise à jour des univers');
UPDATE acl_actions SET fonc_id = 317, comment = "Mise à jour des univers" WHERE action_id = 295;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (318, '42', 'Mise à jour des médias');
UPDATE acl_actions SET fonc_id = 318, comment = "Mise à jour des médias" WHERE action_id = 296;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (319, '42', 'Identification des templates');
UPDATE acl_actions SET fonc_id = 319, comment = "Identification des templates" WHERE action_id = 297;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (320, '42', 'Liste des pays des templates');
UPDATE acl_actions SET fonc_id = 320, comment = "Liste des pays des templates" WHERE action_id = 298;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (321, '42', 'Modification des pays des templates');
UPDATE acl_actions SET fonc_id = 321, comment = "Modification des pays des templates" WHERE action_id = 299;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (322, '42', 'Liste des cultures des templates');
UPDATE acl_actions SET fonc_id = 322, comment = "Liste des cultures des templates" WHERE action_id = 300;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (323, '42', 'Modification des cultures des templates');
UPDATE acl_actions SET fonc_id = 323, comment = "Modification des cultures des templates" WHERE action_id = 301;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (324, '42', 'Liste des langues des templates');
UPDATE acl_actions SET fonc_id = 324, comment = "Liste des langues des templates" WHERE action_id = 302;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (325, '42', 'Liste des devises des templates');
UPDATE acl_actions SET fonc_id = 325, comment = "Liste des devises des templates" WHERE action_id = 303;

INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (326, '42', 'Modification des devises des templates');
UPDATE acl_actions SET fonc_id = 326, comment = "Modification des devises des templates" WHERE action_id = 304;