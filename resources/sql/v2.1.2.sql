USE phoenix;

-- *********************** --
-- BLOCK QUERY TYPE CREATE --
-- *********************** --


-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE ALTER --
-- *********************** --


-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE INSERT --
-- *********************** --

-- #37038 : Adding a new file category, dedicated to the compilated statistic data
INSERT INTO r_file_categories
           (r_fca_name)
     VALUES
           ('statistique_json');

-- #37038 : Adding required ACL data for the module/controller and actions of statistics

INSERT INTO acl_modules
           (module_name)
     VALUES
           ('statistics');

INSERT INTO acl_interfaces_controllers
           (module_id,
            interface_name,
            controller_name)
     VALUES
           ((SELECT module_id FROM acl_modules ORDER BY module_id DESC LIMIT 1), 'index', 'index');

INSERT INTO acl_fonctionnalites
           (int_cont_id
           ,fonc_name)
     VALUES
           ((select int_cont_id from acl_interfaces_controllers order by(int_cont_id) desc LIMIT 1),
           'Téléchargement du statistique PDF');

INSERT INTO acl_actions
           (int_cont_id,
            action_name,
            fonc_id)
     VALUES
           ((select int_cont_id from acl_interfaces_controllers order by(int_cont_id) desc LIMIT 1),
            'downloadstatisticspdf',
           (SELECT fonc_id FROM acl_fonctionnalites order by (fonc_id) desc LIMIT 1));