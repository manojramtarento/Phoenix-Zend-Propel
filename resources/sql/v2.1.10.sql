USE phoenix;

-- *********************** --
-- BLOCK QUERY TYPE ALTER -- 
-- *********************** --

-- ************************************************************************************** --
-- 39974 Increasing the field cl_site_libelle value range from 50 to 100
-- ************************************************************************************** --

ALTER TABLE `client_sites`
MODIFY `cl_site_libelle` VARCHAR(100) NULL;

-- ************************************************************************************** --
-- 39845 Increasing the fields (ct_phone, ct_mobile, ct_fax) value range from 20 to 50
-- ************************************************************************************** --

ALTER TABLE `contacts`
MODIFY `ct_phone` VARCHAR(50) NULL,
MODIFY `ct_mobile` VARCHAR(50) NULL,
MODIFY `ct_fax` VARCHAR(50) NULL;