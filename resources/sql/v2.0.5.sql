USE phoenix;

-- *********************** --
-- BLOCK QUERY TYPE ALTER -- 
-- *********************** --

-- ************************************************************************************** --
-- 38331 changing the gdl_fourn_id field type--
-- ************************************************************************************** --

ALTER TABLE `client_sites`
MODIFY gdl_fourn_id INT(11) NOT NULL DEFAULT 0;