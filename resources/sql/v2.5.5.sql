USE phoenix;

CREATE TABLE IF NOT EXISTS `r_operation_type_required_options`(
  `r_operation_type_required_option_r_operation_type_id` TINYINT(3) UNSIGNED,
  `r_operation_type_required_option_r_operation_option_id` INT(11),
   PRIMARY KEY (`r_operation_type_required_option_r_operation_type_id`, `r_operation_type_required_option_r_operation_option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


ALTER TABLE `clients` ADD `cl_exclude_of_q3_campaign` TINYINT(1) NOT NULL DEFAULT 0 AFTER `cl_dc_id`;

ALTER TABLE `r_operation_type_required_options`
    ADD CONSTRAINT `FK_ROPTYPEREQOPT_ROPOPTION_ROPOPTIONID` FOREIGN KEY (`r_operation_type_required_option_r_operation_option_id`) REFERENCES `r_operation_options` (`r_op_option_id`),
    ADD CONSTRAINT `FK_ROPTYPEREQOPT_ROPTYPE_ROPTYPEID` FOREIGN KEY (`r_operation_type_required_option_r_operation_type_id`) REFERENCES `r_operation_type` (`ot_id`);

INSERT INTO r_operation_options (r_op_option_libelle, r_op_option_type, r_op_option_parent, r_custom_act_id, actif)
VALUES ('Custom Satisfaction', 3, null, 1,1);

INSERT INTO r_operation_options (r_op_option_libelle, r_op_option_type, r_op_option_parent, r_custom_act_id, actif)
SELECT 'Inclure cette opération', 1, r_op_option_id, 1, 1
	FROM r_operation_options
	WHERE r_op_option_libelle = 'Custom Satisfaction';

INSERT INTO r_operation_options (r_op_option_libelle, r_op_option_type, r_op_option_parent, r_custom_act_id, actif)
SELECT 'Exclure cette opération', 1, r_op_option_id, 1, 1
	FROM r_operation_options
	WHERE r_op_option_libelle = 'Custom Satisfaction';

INSERT INTO r_operation_type_required_options (r_operation_type_required_option_r_operation_type_id, r_operation_type_required_option_r_operation_option_id)
SELECT ot_id, r_op_option_id
	FROM r_operation_options
		INNER JOIN r_operation_type
	WHERE r_op_option_libelle = 'Custom Satisfaction' AND ot_id IN (1, 2);

INSERT INTO lnk_operation_option(op_id, op_opt_id, is_linked)
    SELECT op_id, r_op_option_id, 1
        FROM operations
            INNER JOIN r_operation_options
    WHERE r_op_option_libelle = 'Inclure cette opération'
            AND r_op_option_parent = (SELECT r_op_option_id FROM r_operation_options WHERE r_op_option_libelle = 'Custom Satisfaction')
            AND op_type_id IN (1, 2)
            AND op_status_id IN (2, 6);