USE phoenix;

SET NAMES 'utf8';

-- *********************** --
-- BLOCK QUERY TYPE INSERT --
-- *********************** --

-- Add activity 'Autre'

INSERT INTO `r_activity_kpi` VALUES (7,'Autre');

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


-- *********************** --
-- BLOCK QUERY TYPE UPDATE --
-- *********************** --

-- Update options (Ticket : 45035)

SET FOREIGN_KEY_CHECKS = 0;

UPDATE `r_activity_kpi` SET r_activity_kpi_libelle = 'Logistique' WHERE r_activity_kpi_libelle = 'Log';

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