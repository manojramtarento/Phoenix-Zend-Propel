USE phoenix;

SET NAMES 'utf8';


-- *********************** --
-- BLOCK QUERY TYPE UPDATE --
-- *********************** --


UPDATE `r_operation_status` SET `os_libelle` = 'Soldé'
WHERE os_id = 6 ;


-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE INSERT --
-- *********************** --

-- 33369 Adding a new functionnality available only for the GP.DAF team
INSERT INTO acl_fonctionnalites (int_cont_id, fonc_name) VALUES ((SELECT int_cont_id from acl_interfaces_controllers where module_id = 7 and interface_name = 'index' and controller_name = 'index'), 'VALIDATION COUTS OP SOLDE');
INSERT INTO lnk_acl_groups_fonctionnalites (group_name, fonc_id) values ('GP.DAF',  (SELECT fonc_id FROM acl_fonctionnalites order by (fonc_id) desc LIMIT 1));


-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE DELETE --
-- *********************** --

-- 33369 Removing unused functionnality Validation des coûts sur les opérations cloturé

delete from lnk_acl_groups_fonctionnalites
    where fonc_id = 111;

delete from acl_fonctionnalites
    where fonc_id = 111;
