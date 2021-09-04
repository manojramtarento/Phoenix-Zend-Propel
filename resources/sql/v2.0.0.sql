
-- *********************** --
-- BLOCK QUERY TYPE INSERT -- 
-- *********************** --

-- ************************************************************************************** --
-- 37150 Add new features associated with the indicators for the access rights management --
-- ************************************************************************************** --

-- 37150 Inserting a new feature for the indicator 1_1

INSERT INTO acl_fonctionnalites
           (fonc_id
            ,int_cont_id
           ,fonc_name)
     VALUES
           ( 200 , 
            (SELECT int_cont_id FROM acl_interfaces_controllers WHERE module_id = 9 AND controller_name = 'pilotage'), 
           'Indicateur Devis acceptés & nouveau client');

-- 37150 Inserting a new feature for the indicator 17

INSERT INTO acl_fonctionnalites
           (fonc_id
            ,int_cont_id
           ,fonc_name)
     VALUES
           ( 201 , 
             (SELECT int_cont_id FROM acl_interfaces_controllers WHERE module_id = 9 AND controller_name = 'pilotage'), 
           'Indicateur Devis accepté sans facture');