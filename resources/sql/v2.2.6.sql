use phoenix;

-- *********************** --
-- BLOCK QUERY TYPE ALTER --
-- *********************** --

-- 23223 Adding a new column plan_facturation_params_auto_display_vat
ALTER TABLE `plan_facturation_params`
ADD COLUMN `plan_facturation_params_auto_display_vat` TINYINT(1) NULL DEFAULT 0 AFTER `plan_fact_lib_avoir`;

-- 23223 Adding a new column r_tva_type_recup_coef
ALTER TABLE `r_tva_type`
ADD COLUMN `r_tva_type_recup_coeff` DECIMAL(5,4) NULL AFTER `r_tva_coeff`;

-- *********************** --
-- BLOCK QUERY TYPE UPDATE --
-- *********************** --

-- 23223 Setting the value of the r_tva_type_recup_coef column for the VTA 'Frais TTC (débours)'
UPDATE `r_tva_type`
SET `r_tva_type_recup_coeff` = 1.2000
WHERE `r_tva_id` = 4;

UPDATE `r_tva_type`
SET `r_tva_type_recup_coeff` = 1.0000
WHERE `r_tva_id` <> 4;