 -- new table r_operation_status_required_options
 
 
CREATE TABLE `r_operation_status_required_options` (
  `r_operation_status_required_options_r_operation_status_os_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `r_operation_status_required_options_r_operation_option_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


ALTER TABLE `r_operation_status_required_options`
  ADD PRIMARY KEY (`r_operation_status_required_options_r_operation_status_os_id`,`r_operation_status_required_options_r_operation_option_id`),
  ADD KEY `FK_ROPSTATUSREQOPT_ROPOPTION_ROPOPTIONID` (`r_operation_status_required_options_r_operation_option_id`);

  
  
ALTER TABLE `r_operation_status_required_options`
  ADD CONSTRAINT `FK_ROPSTATUSREQOPT_ROPOPTION_ROPOPTIONID` FOREIGN KEY (`r_operation_status_required_options_r_operation_option_id`) REFERENCES `r_operation_options` (`r_op_option_id`),
  ADD CONSTRAINT `FK_ROPSTATUSREQOPT_ROPTYPE_ROPSTATUS_OSID` FOREIGN KEY (`r_operation_status_required_options_r_operation_status_os_id`) REFERENCES `r_operation_status` (`os_id`);
  

  -- UPDATE status = 2
-- First truncate table 
TRUNCATE table `r_operation_status_required_options`;

-- Insert all required options to r_operation_status_required_options
INSERT 
  INTO  `r_operation_status_required_options` (
    `r_operation_status_required_options_r_operation_status_os_id`, 
    `r_operation_status_required_options_r_operation_option_id`
  ) SELECT DISTINCT 
    2 as r_operation_status_required_options_r_operation_status_os_id , 
    `r_operation_type_required_option_r_operation_option_id` AS `r_operation_status_required_options_r_operation_option_id` 
  FROM `r_operation_type_required_options`;
