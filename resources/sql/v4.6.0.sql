-- Add missing ACL (#90091)
INSERT INTO `acl_fonctionnalites` (`fonc_id`, `int_cont_id`, `fonc_name`) VALUES (328, '42', 'Liste des templates');
INSERT INTO `acl_actions` (`int_cont_id`,`action_name`,`fonc_id`,`comment`) VALUES (42,'edittemplatemediasanduniverses',328,'Méthode pour la modification des médias et univers des templates');
