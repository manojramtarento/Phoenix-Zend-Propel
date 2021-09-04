USE phoenix;

SET NAMES 'utf8';


-- *********************** --
-- BLOCK QUERY TYPE CREATE --
-- *********************** --


-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE ALTER --
-- *********************** --


-- ********** ---- 53687 START---- ************* --

-- Deleting may Fks that references the users.user_id
ALTER TABLE clients DROP FOREIGN KEY FK_CLIENTS_USERS_USERMODIFY;
ALTER TABLE clients DROP INDEX FK_CLIENTS_USERS_USERMODIFY;

ALTER TABLE clients DROP FOREIGN KEY FK_CLIENTS_USERS_USERID;
ALTER TABLE clients DROP INDEX FK_CLIENTS_USERS_USERID;

ALTER TABLE contacts DROP FOREIGN KEY FK_CONTACTS_USERS_USERMODIFY;
ALTER TABLE contacts DROP INDEX FK_CONTACTS_USERS_USERMODIFY;

ALTER TABLE contacts DROP FOREIGN KEY FK_CONTACTS_USERS_USERID;
ALTER TABLE contacts DROP INDEX FK_CONTACTS_USERS_USERID;

ALTER TABLE facture_statuts DROP FOREIGN KEY FK_FACTURESTATUTS_USERS_USERMODIFY;
ALTER TABLE facture_statuts DROP INDEX FK_FACTURESTATUTS_USERS_USERMODIFY;

ALTER TABLE facture_statuts DROP FOREIGN KEY FK_FACTURESTATUTS_USERS_USERID;
ALTER TABLE facture_statuts DROP INDEX FK_FACTURESTATUTS_USERS_USERID;

ALTER TABLE factures DROP FOREIGN KEY FK_FACTURES_USERS_USERMODIFY;
ALTER TABLE factures DROP INDEX FK_FACTURES_USERS_USERMODIFY;

ALTER TABLE factures DROP FOREIGN KEY FK_FACTURES_USERS_USERID;
ALTER TABLE factures DROP INDEX FK_FACTURES_USERS_USERID;

ALTER TABLE operation_decouverts DROP FOREIGN KEY FK_OPERATIONDECOUVERTS_USERS_USERMODIFY;
ALTER TABLE operation_decouverts DROP INDEX FK_OPERATIONDECOUVERTS_USERS_USERMODIFY;

ALTER TABLE operation_prestations DROP FOREIGN KEY FK_OPERATIONPRESTATIONS_USERS_USERMODIFY;
ALTER TABLE operation_prestations DROP INDEX FK_OPERATIONPRESTATIONS_USERS_USERMODIFY;

ALTER TABLE operation_statuts DROP FOREIGN KEY FK_OPERATIONSTATUTS_USERS_USERMODIFY;
ALTER TABLE operation_statuts DROP INDEX FK_OPERATIONSTATUTS_USERS_USERMODIFY;

ALTER TABLE operation_statuts DROP FOREIGN KEY FK_OPERATIONSTATUTS_USERS_USERID;
ALTER TABLE operation_statuts DROP INDEX FK_OPERATIONSTATUTS_USERS_USERID;

ALTER TABLE operations DROP FOREIGN KEY FK_OPERATIONS_USERS_USERMODIFY;
ALTER TABLE operations DROP INDEX FK_OPERATIONS_USERS_USERMODIFY;

ALTER TABLE operations DROP FOREIGN KEY FK_OPERATIONS_USERS_USERID;
ALTER TABLE operations DROP INDEX FK_OPERATIONS_USERS_USERID;

ALTER TABLE plan_facturation_details DROP FOREIGN KEY FK_PLANFACTURATIONDETAILS_USERS_USERMODIFY;
ALTER TABLE plan_facturation_details DROP INDEX FK_PLANFACTURATIONDETAILS_USERS_USERMODIFY;

ALTER TABLE plan_facturation_details DROP FOREIGN KEY FK_PLANFACTURATIONDETAILS_USERS_USERID;
ALTER TABLE plan_facturation_details DROP INDEX FK_PLANFACTURATIONDETAILS_USERS_USERID;

ALTER TABLE r_client_activities DROP FOREIGN KEY FK_RCLIENTACTIVITIES_USERS_USERMODIFY;
ALTER TABLE r_client_activities DROP INDEX FK_RCLIENTACTIVITIES_USERS_USERMODIFY;

ALTER TABLE r_client_activities DROP FOREIGN KEY FK_RCLIENTACTIVITIES_USERS_USERID;
ALTER TABLE r_client_activities DROP INDEX FK_RCLIENTACTIVITIES_USERS_USERID;

ALTER TABLE r_client_types DROP FOREIGN KEY FK_RCLIENTTYPES_USERS_USERMODIFY;
ALTER TABLE r_client_types DROP INDEX FK_RCLIENTTYPES_USERS_USERMODIFY;

ALTER TABLE r_client_types DROP FOREIGN KEY FK_RCLIENTTYPES_USERS_USERID;
ALTER TABLE r_client_types DROP INDEX FK_RCLIENTTYPES_USERS_USERID;

ALTER TABLE r_operation_status DROP FOREIGN KEY FK_ROPERATIONSTATUS_USERS_USERMODIFY;
ALTER TABLE r_operation_status DROP INDEX FK_ROPERATIONSTATUS_USERS_USERMODIFY;

ALTER TABLE r_operation_status DROP FOREIGN KEY FK_ROPERATIONSTATUS_USERS_USERID;
ALTER TABLE r_operation_status DROP INDEX FK_ROPERATIONSTATUS_USERS_USERID;

ALTER TABLE r_operation_type DROP FOREIGN KEY FK_ROPERATIONTYPE_USERS_USERMODIFY;
ALTER TABLE r_operation_type DROP INDEX FK_ROPERATIONTYPE_USERS_USERMODIFY;

ALTER TABLE r_operation_type DROP FOREIGN KEY FK_ROPERATIONTYPE_USERS_USERID;
ALTER TABLE r_operation_type DROP INDEX FK_ROPERATIONTYPE_USERS_USERID;

ALTER TABLE r_prestations DROP FOREIGN KEY FK_RPRESTATIONS_USERS_USERCREATE;
ALTER TABLE r_prestations DROP INDEX FK_RPRESTATIONS_USERS_USERCREATE;

ALTER TABLE r_prestations DROP FOREIGN KEY FK_RPRESTATIONS_USERS_USERMODIFY;
ALTER TABLE r_prestations DROP INDEX FK_RPRESTATIONS_USERS_USERMODIFY;

ALTER TABLE relance_statuts DROP FOREIGN KEY FK_RELANCESTATUS_USERS_USERMODIFY;
ALTER TABLE relance_statuts DROP INDEX FK_RELANCESTATUS_USERS_USERMODIFY;

ALTER TABLE relance_statuts DROP FOREIGN KEY FK_RELANCESTATUS_USERS_USERID;
ALTER TABLE relance_statuts DROP INDEX FK_RELANCESTATUS_USERS_USERID;

ALTER TABLE users DROP FOREIGN KEY FK_USERS_RUSERTYPES_USERTYPE;
ALTER TABLE users DROP INDEX FK_USERS_RUSERTYPES_USERTYPE;

ALTER TABLE facture_edition_history DROP FOREIGN KEY FK_FACTEDITIONHIST_USERS_FACTEHUSERID;
ALTER TABLE facture_edition_history DROP INDEX FK_FACTEDITIONHIST_USERS_FACTEHUSERID;

ALTER TABLE facture_edition_history DROP FOREIGN KEY FK_FACTEDITIONHIST_USERS_FACTUSEREDITION;
ALTER TABLE facture_edition_history DROP INDEX FK_FACTEDITIONHIST_USERS_FACTUSEREDITION;

ALTER TABLE facture_edition_history DROP FOREIGN KEY FK_FACTEDITIONHIST_USERS_USERID;
ALTER TABLE facture_edition_history DROP INDEX FK_FACTEDITIONHIST_USERS_USERID;

ALTER TABLE facture_edition_history DROP FOREIGN KEY FK_FACTEDITIONHIST_USERS_USERMODIFY;
ALTER TABLE facture_edition_history DROP INDEX FK_FACTEDITIONHIST_USERS_USERMODIFY;

ALTER TABLE files DROP FOREIGN KEY FK_FILES_USERS_USERID;
ALTER TABLE files DROP INDEX FK_FILES_USERS_USERID;

ALTER TABLE histo_couts DROP FOREIGN KEY FK_HISTOCOUTS_USERS_USERID;
ALTER TABLE histo_couts DROP INDEX FK_HISTOCOUTS_USERS_USERID;

ALTER TABLE journal_de_vente DROP FOREIGN KEY FK_JOURNALDEVENTE_USERS_USERID;
ALTER TABLE journal_de_vente DROP INDEX FK_JOURNALDEVENTE_USERS_USERID;

ALTER TABLE journal_de_vente_ligne DROP FOREIGN KEY FK_JOURNALDEVENTELIGNE_USERS_USERID;
ALTER TABLE journal_de_vente_ligne DROP INDEX FK_JOURNALDEVENTELIGNE_USERS_USERID;

ALTER TABLE lnk_relance_facture DROP FOREIGN KEY FK_LNKRELANCEFACTURE_USERS_USERID;
ALTER TABLE lnk_relance_facture DROP INDEX FK_LNKRELANCEFACTURE_USERS_USERID;

ALTER TABLE mails DROP FOREIGN KEY FK_MAILS_USERS_USERID;
ALTER TABLE mails DROP INDEX FK_MAILS_USERS_USERID;

ALTER TABLE operations_ext DROP FOREIGN KEY FK_OPERATIONSEXT_USERS_OPSYNCGEDELOGUSERID;
ALTER TABLE operations_ext DROP INDEX FK_OPERATIONSEXT_USERS_OPSYNCGEDELOGUSERID;

ALTER TABLE operation_decouverts DROP FOREIGN KEY FK_OPERATIONDECOUVERTS_USERS_USERID;
ALTER TABLE operation_decouverts DROP INDEX FK_OPERATIONDECOUVERTS_USERS_USERID;

ALTER TABLE operation_prestations DROP FOREIGN KEY FK_OPERATIONPRESTATIONS_USERS_COSTUPDATERUSER;
ALTER TABLE operation_prestations DROP INDEX FK_OPERATIONPRESTATIONS_USERS_COSTUPDATERUSER;

ALTER TABLE operation_prestations DROP FOREIGN KEY FK_OPERATIONPRESTATIONS_USERS_OPUSRCOUTESTIM;
ALTER TABLE operation_prestations DROP INDEX FK_OPERATIONPRESTATIONS_USERS_OPUSRCOUTESTIM;

ALTER TABLE operation_prestations DROP FOREIGN KEY FK_OPERATIONPRESTATIONS_USERS_OPUSRCOUTSREEL;
ALTER TABLE operation_prestations DROP INDEX FK_OPERATIONPRESTATIONS_USERS_OPUSRCOUTSREEL;

ALTER TABLE operation_sales_teams DROP FOREIGN KEY FK_OPERATIONSALESTEAMS_USERS_USERID;
ALTER TABLE operation_sales_teams DROP INDEX FK_OPERATIONSALESTEAMS_USERS_USERID;

ALTER TABLE operation_tasks DROP FOREIGN KEY FK_OPERATIONTASKS_USERS_USERID;
ALTER TABLE operation_tasks DROP INDEX FK_OPERATIONTASKS_USERS_USERID;

ALTER TABLE queue_relance_couts DROP FOREIGN KEY FK_QUEUERELANCECOUTS_USERS_USERID;
ALTER TABLE queue_relance_couts DROP INDEX FK_QUEUERELANCECOUTS_USERS_USERID;

ALTER TABLE r_operation_tasks_type DROP FOREIGN KEY FK_ROPERATIONTASKTYPE_USERS_USERID;
ALTER TABLE r_operation_tasks_type DROP INDEX FK_ROPERATIONTASKTYPE_USERS_USERID;

ALTER TABLE r_operation_type_sub DROP FOREIGN KEY FK_ROPERATIONTYPESUB_USERS_USERID;
ALTER TABLE r_operation_type_sub DROP INDEX FK_ROPERATIONTYPESUB_USERS_USERID;

ALTER TABLE r_operation_type_sub DROP FOREIGN KEY FK_ROPERATIONTYPESUB_USERS_USERMODIFY;
ALTER TABLE r_operation_type_sub DROP INDEX FK_ROPERATIONTYPESUB_USERS_USERMODIFY;

ALTER TABLE user_kpi_settings DROP FOREIGN KEY FK_UKS_USERS_USERID;
ALTER TABLE user_kpi_settings DROP INDEX FK_UKS_USERS_USERID;

-- Modify table r_user_types
ALTER TABLE r_user_types DROP PRIMARY KEY;

ALTER TABLE r_user_types ADD COLUMN r_user_type_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
    ADD PRIMARY KEY(r_user_type_id);

ALTER TABLE r_user_types ADD COLUMN r_user_type_short_name VARCHAR(5) NOT NULL;
ALTER TABLE r_user_types ADD COLUMN r_user_type_full_name VARCHAR(60) NULL;
ALTER TABLE r_user_types ADD COLUMN r_user_type_actif TINYINT(1) UNSIGNED NOT NULL DEFAULT 1;

ALTER TABLE r_user_types DROP user_type_name;
ALTER TABLE r_user_types DROP user_type;

--  Delete AND Insert into r_user_types before change values in table users
-- Order of execution this code is very important
DELETE  FROM `r_user_types`;
ALTER TABLE r_user_types AUTO_INCREMENT = 1;
INSERT INTO `r_user_types` (`r_user_type_short_name`, `r_user_type_full_name`, `r_user_type_actif`)
    VALUES ('CP', 'Chargé de projet', 1),
           ('DC', 'Directeur de clientèle', 1);

-- earing all user_type column values

UPDATE users set user_type = NULL;

-- Modify type and rename column user_type table users
ALTER TABLE users CHANGE user_type r_user_type_id INT(11) UNSIGNED NULL;

-- ADD foreign key in table users
ALTER TABLE `users`
    ADD CONSTRAINT `FK_USERS_RUSERTYPES_RUSERTYPEID` FOREIGN KEY (`r_user_type_id`) REFERENCES `r_user_types` (`r_user_type_id`);

ALTER TABLE acl_groups DROP COLUMN user_type;
ALTER TABLE acl_groups DROP COLUMN user_type_priority;

-- ********** ----  END 53687 ---- ************* --

-- ********** ----  START 55480 ---- ************* --

ALTER TABLE `lnk_acl_groups_fonctionnalites` DROP FOREIGN KEY FK_LNKACLGRPSFONCTS_ACLFONCTS_FONCID;

ALTER TABLE `lnk_acl_groups_fonctionnalites` DROP INDEX FK_LNKACLGRPSFONCTS_ACLFONCTS_FONCID;

ALTER TABLE `lnk_acl_groups_fonctionnalites` DROP FOREIGN KEY FK_LNKACLGRPSFONCTS_ACLGROUPS_GROUPNAME;

ALTER TABLE `lnk_acl_groups_fonctionnalites` DROP PRIMARY KEY;

ALTER TABLE `lnk_acl_groups_fonctionnalites` ADD COLUMN `lnk_acl_groups_fonctionnalite_id` INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT FIRST;

ALTER TABLE `lnk_acl_groups_fonctionnalites` ADD COLUMN `lnk_acl_groups_fonctionnalite_group_id` SMALLINT(6) NOT NULL AFTER `lnk_acl_groups_fonctionnalite_id`;

ALTER TABLE `lnk_acl_groups_fonctionnalites` CHANGE `fonc_id` `lnk_acl_groups_fonctionnalite_fonc_id` INT(11) NOT NULL;

-- The following UPDATE query must absolutely remain before adding the coming FK constraints
UPDATE `lnk_acl_groups_fonctionnalites` lnk
JOIN `acl_groups` grp ON grp.group_name = lnk.group_name
SET lnk.lnk_acl_groups_fonctionnalite_group_id = grp.group_id;

ALTER TABLE `lnk_acl_groups_fonctionnalites`
ADD CONSTRAINT `FK_LNKACLGRPSFONCTS_ACLFONCTS_FONCID` FOREIGN KEY (`lnk_acl_groups_fonctionnalite_fonc_id`) REFERENCES `acl_fonctionnalites` (`fonc_id`),
ADD CONSTRAINT `FK_LNKACLGRPSFONCTS_ACLGROUPS_GROUPID` FOREIGN KEY (`lnk_acl_groups_fonctionnalite_group_id`) REFERENCES `acl_groups` (`group_id`);

ALTER TABLE `lnk_acl_groups_fonctionnalites` DROP COLUMN `group_name`;

ALTER TABLE `acl_groups` ADD CONSTRAINT UQ_ACLGROUPS_GROUPNAME UNIQUE (group_name);


-- ********** ----  END 55480 ---- ************* --

-- *********************** --

-- Start Transaction
START TRANSACTION;
-- *********************** --
-- BLOCK QUERY TYPE INSERT --
-- *********************** --

-- ********** ---- Ticket 53691 START---- ************* --

-- Adding a new interface for roles management
INSERT INTO acl_interfaces_controllers(module_id, interface_name, controller_name)
     VALUES ('10', 'roles', 'roles');

-- feature for accessing role management interface
INSERT INTO `acl_fonctionnalites` (`int_cont_id` ,`fonc_name`)
     SELECT `int_cont_id`, 'Accès à l''interface du référentiel des rôles'
     FROM `acl_interfaces_controllers`
            WHERE `interface_name` = 'roles'
            AND `controller_name` = 'roles'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`,
            `comment`)
     SELECT `int_cont_id`, 'index', `fonc_id`, 'Méthode par défaut lors de l''appel au controlleur'
            FROM `acl_fonctionnalites`
                WHERE `fonc_name` = 'Accès à l''interface du référentiel des rôles'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- feature for aletering an existing user role
INSERT INTO `acl_fonctionnalites` (`int_cont_id` ,`fonc_name`)
     SELECT `int_cont_id`, 'Accès à l''interface du modification des rôles'
     FROM `acl_interfaces_controllers`
            WHERE `interface_name` = 'roles'
            AND `controller_name` = 'roles'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`,
            `comment`)
     SELECT `int_cont_id`, 'loadrolemanagementpopup', `fonc_id`, 'Chargement de la pop de modification du rôle'
            FROM `acl_fonctionnalites`
                WHERE `fonc_name` = 'Accès à l''interface du modification des rôles'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- Feature for saving role changes
INSERT INTO `acl_fonctionnalites` (`int_cont_id` ,`fonc_name`)
     SELECT `int_cont_id`, 'Sauvegarde des modifications des rôles'
     FROM `acl_interfaces_controllers`
            WHERE `interface_name` = 'roles'
            AND `controller_name` = 'roles'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;


INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`,
            `comment`)
     SELECT `int_cont_id`, 'saverole', `fonc_id`, 'Sauvegarde des modifications des rôles'
            FROM `acl_fonctionnalites`
                WHERE `fonc_name` = 'Sauvegarde des modifications des rôles'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- ********** ----  END 53691 ---- ************* --

-- ********** ---- Ticket 53692 START---- ************* --

-- Adding a new interface for users management
INSERT INTO acl_interfaces_controllers(module_id, interface_name, controller_name)
     VALUES ('10', 'users', 'users');


-- feature for accessing user management interface
INSERT INTO `acl_fonctionnalites` (`int_cont_id` ,`fonc_name`)
     SELECT `int_cont_id`, 'Accès à l''interface du référentiel des users'
     FROM `acl_interfaces_controllers`
            WHERE `interface_name` = 'users'
            AND `controller_name` = 'users'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`,
            `comment`)
     SELECT `int_cont_id`, 'index', `fonc_id`, 'Méthode par défaut lors de l''appel au controlleur'
            FROM `acl_fonctionnalites`
                WHERE `fonc_name` = 'Accès à l''interface du référentiel des users'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- feature for aletering an existing user
INSERT INTO `acl_fonctionnalites` (`int_cont_id` ,`fonc_name`)
     SELECT `int_cont_id`, 'Accès à l''interface de MAJ des données des users'
     FROM `acl_interfaces_controllers`
            WHERE `interface_name` = 'users'
            AND `controller_name` = 'users'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`,
            `comment`)
     SELECT `int_cont_id`, 'loaduserdatamanagementpopup', `fonc_id`, 'Chargement de la pop de modification de l''utilisateur'
            FROM `acl_fonctionnalites`
                WHERE `fonc_name` = 'Accès à l''interface de MAJ des données des users'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- Feature for saving user changes
INSERT INTO `acl_fonctionnalites` (`int_cont_id` ,`fonc_name`)
     SELECT `int_cont_id`, 'Sauvegarde de modifs des données utilisateurs'
     FROM `acl_interfaces_controllers`
            WHERE `interface_name` = 'users'
            AND `controller_name` = 'users'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;


INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`,
            `comment`)
     SELECT `int_cont_id`, 'saveuserdata', `fonc_id`, 'Sauvegarde de MAJ des données de l''utilisateur'
            FROM `acl_fonctionnalites`
                WHERE `fonc_name` = 'Sauvegarde de modifs des données utilisateurs'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- Feature for deleting a user record
INSERT INTO `acl_fonctionnalites` (`int_cont_id` ,`fonc_name`)
     SELECT `int_cont_id`, 'Suppression d''un enregistrement utilisateur'
     FROM `acl_interfaces_controllers`
            WHERE `interface_name` = 'users'
            AND `controller_name` = 'users'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;


INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`,
            `comment`)
     SELECT `int_cont_id`, 'deleteuserrecord', `fonc_id`, 'Suppression d''un enregistrement utilisateur'
            FROM `acl_fonctionnalites`
                WHERE `fonc_name` = 'Suppression d''un enregistrement utilisateur'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- ********** ----  END 53692 ---- ************* --


-- ********** ---- Ticket 54570 START---- ************* --

INSERT INTO `acl_fonctionnalites` (`int_cont_id` ,`fonc_name`)
     SELECT `int_cont_id`, 'Suppression des rôles'
     FROM `acl_interfaces_controllers`
            WHERE `interface_name` = 'roles'
            AND `controller_name` = 'roles'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;


INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`,
            `comment`)
     SELECT `int_cont_id`, 'deleterole', `fonc_id`, 'Suppression des rôles'
            FROM `acl_fonctionnalites`
                WHERE `fonc_name` = 'Suppression des rôles'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;


-- ********** ----  END 54570 ---- ************* --


-- ********** ---- Ticket 53687 START---- ************* --

UPDATE users u
JOIN lnk_users_acl_groups lnk on lnk.user_id = u.user_id AND group_id = 3
SET u.r_user_type_id = 2;

UPDATE users u
JOIN lnk_users_acl_groups lnk on lnk.user_id = u.user_id AND group_id IN (16, 1, 6)
SET u.r_user_type_id = 1;

-- ********** ----  END 53687 ---- ************* --

-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE UPDATE --
-- *********************** --

-- ********** ---- Ticket 53687 START---- ************* --
SET FOREIGN_KEY_CHECKS = 0;
UPDATE acl_groups SET group_name = REPLACE(group_name, 'GP.', '');
SET FOREIGN_KEY_CHECKS = 1;
-- ********** ----  END 53687 ---- ************* --

COMMIT;
-- End transaction.
