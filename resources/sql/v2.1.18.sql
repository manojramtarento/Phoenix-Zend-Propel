USE phoenix;

SET NAMES 'utf8';

-- *********************** --
-- BLOCK QUERY TYPE CREATE --
-- *********************** --

-- Create new table r_activity_kpi witch contain liste of Activity Kpi
CREATE TABLE `r_activity_kpi`
(`r_activity_kpi_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `r_activity_kpi_libelle` VARCHAR(255) NOT NULL);

-- Create new table user_kpi_settings containing kpi settings
CREATE TABLE `user_kpi_settings`
(`user_kpi_settings_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `user_kpi_settings_user_id` INT NOT NULL,
 `user_kpi_settings_name` VARCHAR(255) NOT NULL,
 `user_kpi_settings_value` TEXT NOT NULL);

-- *********************** --
-- BLOCK QUERY TYPE ALTER --
-- *********************** --
-- Add new column r_activity_kpi_id to r_p_axe1 table
ALTER TABLE  `r_p_axe1` ADD  `r_activity_kpi_id` INT NULL;

-- Add new foreign key (r_activity_kpi_id) that referances r_activity_kpi table

SET FOREIGN_KEY_CHECKS = 0;

ALTER TABLE `r_p_axe1`
    ADD CONSTRAINT `FK_RPAXE1_RACTIVITYKPI_RACTIVITYKPIID` FOREIGN KEY (`r_activity_kpi_id`) REFERENCES `r_activity_kpi` (`r_activity_kpi_id`);


-- Create Constraint for user_kpi_settings_user_id foreign key
ALTER TABLE `user_kpi_settings`
    ADD CONSTRAINT `FK_UKS_USERS_USERID` FOREIGN KEY (`user_kpi_settings_user_id`) REFERENCES `users` (`user_id`);

-- Create relation between options and kpi activities
ALTER TABLE `r_operation_options` ADD `r_operation_option_r_activity_kpi_id` INT NULL AFTER `r_custom_act_id` ;

ALTER TABLE `r_operation_options`
    ADD CONSTRAINT `FK_R_OPERATION_OPTIONS_R_ACTIVITY_KPI` FOREIGN KEY (`r_operation_option_r_activity_kpi_id`) REFERENCES `r_activity_kpi` (`r_activity_kpi_id`);

SET FOREIGN_KEY_CHECKS = 1;

-- *********************** --
-- BLOCK QUERY TYPE INSERT --
-- *********************** --

-- 38166 Add ACLS for Reporting/KPI interface
-- Add new acl controller kpirender
INSERT INTO `acl_interfaces_controllers`
           (`module_id`,
            `interface_name`,
            `controller_name`)
     VALUES
           ('9', 'kpirender', 'kpirender');

-- Add new acl fonctionality for kpi interface
INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
           'Accés à l\'interface Reporting/KPI');

-- Add new acl action for index action in Kpirender controller associated with the fonctionality of kpi interface
INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
            'index',
           (SELECT `fonc_id` FROM `acl_fonctionnalites` ORDER BY (`fonc_id`)  DESC LIMIT 0,1));

-- Add new acl fonctionality for kpi activity table
INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
           'TABLEAU KPI ACTIVITE');

-- Add new acl action for activitytable action in Kpirender controller associated with the fonctionality of kpi activity table
INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
            'activitytable',
           (SELECT `fonc_id` FROM `acl_fonctionnalites` ORDER BY (`fonc_id`)  DESC LIMIT 0,1));

-- 38287 Add ACLS for Reporting/KPI Back Logs

-- Add new acl fonctionality for kpi Back Logs
INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
           'TABLEAU KPI CARNET DE COMMANDE');

-- Add new acl action for backlogstable action in Kpirender controller associated with the fonctionality of kpi Back Logs
INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
            'backlogstable',
           (SELECT `fonc_id` FROM `acl_fonctionnalites` ORDER BY (`fonc_id`)  DESC LIMIT 0,1));

-- Insert Activities list
INSERT INTO `r_activity_kpi` VALUES (1,'Digital'),(2,'Customer Care'),(3,'Saisie'),(4,'Logistique'),(5,'Relation client'),(6,'Achat'),(7,'Autre');

-- 40472 Add ACLS for Reporting/KPI Graph activity

-- Add new acl fonctionality for kpi Graph activity
INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
           'GRAPH KPI ACTIVITE');

-- Add new acl action for activitygraph action in Kpirender controller associated with the fonctionality of kpi Graph activity
INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
            'activitygraph',
           (SELECT `fonc_id` FROM `acl_fonctionnalites` ORDER BY (`fonc_id`)  DESC LIMIT 0,1));


-- 40475 Add ACLS for Reporting/KPI Graph product

-- Add new acl fonctionality for kpi Graph product
INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
           'GRAPH KPI PRODUIT ANNEE');

-- Add new acl action for activitygraphproduct action in Kpirender controller associated with the fonctionality of kpi Graph product
INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
            'activitygraphproduct',
           (SELECT `fonc_id` FROM `acl_fonctionnalites` ORDER BY (`fonc_id`)  DESC LIMIT 0,1));


-- 40473 Add ACLS for Reporting/KPI kpi product subscriptions monitoring

-- Add new acl fonctionality for kpi kpi product subscriptions monitoring
INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
           'TABLEAU KPI SUIVI ABONNEMENTS PRODUITS');

-- Add new acl action for productsubscriptionsmonitoring action in Kpirender controller associated with the fonctionality of kpi product subscriptions monitoring
INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
            'productsubscriptionsmonitoring',
           (SELECT `fonc_id` FROM `acl_fonctionnalites` ORDER BY (`fonc_id`)  DESC LIMIT 0,1));


-- ACL KPI Settings
-- Add new acl fonctionality for kpi sttings
INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
           'KPI SETTINGS');

-- Add new acl for settings action
INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
            'settings',
           (SELECT `fonc_id` FROM `acl_fonctionnalites` ORDER BY (`fonc_id`)  DESC LIMIT 0,1));

-- Add new acl for retrieveindicatorsettingsform action
INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
            'retrieveindicatorsettingsform',
           (SELECT `fonc_id` FROM `acl_fonctionnalites` ORDER BY (`fonc_id`)  DESC LIMIT 0,1));

-- Add new acl for savekpisettings action
INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
            'savekpisettings',
           (SELECT `fonc_id` FROM `acl_fonctionnalites` ORDER BY (`fonc_id`)  DESC LIMIT 0,1));

-- 44275 Adding a new functionality of kpi setting deletion
INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
           'Suppression du paramétrage d\'un kpi');

-- 44275 Adding a new acl action for deleteuserkpisettings action in Kpirender controller associated with the fonctionality of kpi deletion
INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     VALUES
           ((SELECT
                    `int_cont_id`
                FROM
                    `acl_interfaces_controllers`
                    WHERE module_id = 9
                    AND interface_name = 'kpirender'
                    AND controller_name = 'kpirender'
                ORDER BY (`int_cont_id`) DESC
                LIMIT 0 , 1),
            'deleteuserkpisettings',
           (SELECT `fonc_id` FROM `acl_fonctionnalites` ORDER BY (`fonc_id`)  DESC LIMIT 0,1));


-- Add Saisie option
	INSERT INTO
		r_operation_options
		(r_op_option_libelle, r_op_option_type, r_op_option_parent, r_custom_act_id, actif)
		VALUES(
		'Saisie', 2, NULL, 1, 1) ;

-- Add Ligne mono-client multi-op option
	INSERT INTO
		r_operation_options
		(r_op_option_libelle, r_op_option_type, r_op_option_parent, r_custom_act_id, actif)
		VALUES(
		'Ligne mono-client multi-op', 3, 1, 1, 1) ;

	INSERT INTO
		r_operation_options
		(r_op_option_libelle, r_op_option_type, r_op_option_parent, r_custom_act_id, actif)
		SELECT 'N° majoré (0810...)', 1, r_op_option_id, 1, 1 FROM  r_operation_options WHERE r_op_option_libelle = 'Ligne mono-client multi-op';

	INSERT INTO
		r_operation_options
		(r_op_option_libelle, r_op_option_type, r_op_option_parent, r_custom_act_id, actif)
        SELECT 'N° gratuit (0800 à 0805)', 1, r_op_option_id, 1, 1 FROM  r_operation_options WHERE r_op_option_libelle = 'Ligne mono-client multi-op';

	INSERT INTO
		r_operation_options
		(r_op_option_libelle, r_op_option_type, r_op_option_parent, r_custom_act_id, actif)
        SELECT 'N° banalisé (0806 à 0809)', 1, r_op_option_id, 1, 1 FROM  r_operation_options WHERE r_op_option_libelle = 'Ligne mono-client multi-op';


-- Add new values to r_p_axe1 (ticket : 41927)

SET FOREIGN_KEY_CHECKS = 0;

INSERT INTO `r_p_axe1` (`r_p_axe1_tag` ,`r_p_axe1_libelle` ,`r_activity_kpi_id`)
VALUES
('DIGITAL', 'DIGITAL', '1'),
('RC', 'RELATION CLIENT', '5'),
('CC', 'CUSTOMER CARE', '2'),
('SAISIE', 'SAISIE', '3'),
('ACHATS', 'ACHATS', '6');

SET FOREIGN_KEY_CHECKS = 1;

-- *********************** --
-- BLOCK QUERY TYPE UPDATE --
-- *********************** --

-- Update options (Ticket : 45035)

SET FOREIGN_KEY_CHECKS = 0;


UPDATE `phoenix`.`r_p_axe1` SET `r_activity_kpi_id` = '7' WHERE `r_p_axe1`.`r_p_axe1_id` = 1;

UPDATE `phoenix`.`r_p_axe1` SET `r_activity_kpi_id` = '7' WHERE `r_p_axe1`.`r_p_axe1_id` = 2;

UPDATE `phoenix`.`r_p_axe1` SET `r_activity_kpi_id` = '4' WHERE `r_p_axe1`.`r_p_axe1_id` = 3;

UPDATE `phoenix`.`r_p_axe1` SET `r_activity_kpi_id` = '7' WHERE `r_p_axe1`.`r_p_axe1_id` = 4;

UPDATE `phoenix`.`r_p_axe1` SET `r_activity_kpi_id` = '7' WHERE `r_p_axe1`.`r_p_axe1_id` = 5;

UPDATE r_operation_options SET actif = 0
WHERE r_op_option_id IN (192,195,196,197,198,199,202,203,204,207,208,209,216,217,218,221,222,223,226,227,228,229,230,231,22,24,16);

UPDATE r_operation_options ropop
INNER JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_libelle = 'Saisie'
SET ropop.r_op_option_parent = ropop_parent.r_op_option_id
WHERE ropop.r_op_option_id = 252;

UPDATE r_operation_options SET r_op_option_libelle = 'Achat'
WHERE r_op_option_id = 20;

UPDATE r_operation_options SET r_op_option_parent = 20
WHERE r_op_option_id = 25;

UPDATE r_operation_options SET r_op_option_parent = 253
WHERE r_op_option_id = 246;

UPDATE r_operation_options SET r_op_option_parent = 10
WHERE r_op_option_id IN (23,17,18);

UPDATE r_operation_options SET r_operation_option_r_activity_kpi_id = 2
WHERE r_op_option_id = 1 OR r_op_option_parent = 1;

UPDATE r_operation_options SET r_operation_option_r_activity_kpi_id = 1
WHERE r_op_option_id = 10  OR r_op_option_parent = 10;

UPDATE r_operation_options SET r_operation_option_r_activity_kpi_id = 6
WHERE r_op_option_id = 20 OR r_op_option_parent = 20;

UPDATE r_operation_options SET r_operation_option_r_activity_kpi_id = 7
WHERE r_op_option_id = 30 OR r_op_option_parent = 30;

UPDATE r_operation_options SET r_operation_option_r_activity_kpi_id = 4
WHERE r_op_option_id = 74 OR r_op_option_parent = 74;

UPDATE r_operation_options SET r_operation_option_r_activity_kpi_id = 1
WHERE r_op_option_id = 253 OR r_op_option_parent = 253;

SET FOREIGN_KEY_CHECKS = 1;
-- *********************** --
-- BLOCK QUERY TYPE DELETE --
-- *********************** --