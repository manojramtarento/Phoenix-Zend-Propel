USE phoenix;

SET NAMES 'utf8';

-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE UPDATE --
-- *********************** --

-- 36254 Setting old employees email adress to NULL
UPDATE users
SET user_mail = NULL
WHERE user_mail IS NOT NULL
AND user_mail NOT IN  (
'agnes.branger@customsolutions.fr',
'alexandra.treiber@customsolutions.fr',
'assist.stock1@customsolutions.fr',
'berenice.bonello@customsolutions.fr',
'brice.burty@customsolutions.fr',
'bruno.semeria@customsolutions.fr',
'carine.rousson@customsolutions.fr',
'catherine.voreppe@customsolutions.fr',
'cathy.bezet@customsolutions.fr',
'cedric.fournier@customsolutions.fr',
'cedric.reny@customsolutions.fr',
'celine.arnaud@customsolutions.fr',
'celine.bremond@customsolutions.fr',
'celine.ciuffetelli@customsolutions.fr',
'cindy.vernet@customsolutions.fr',
'claire.hasbani@customsolutions.fr',
'corinne.bargagli@customsolutions.fr',
'courrier@customsolutions.fr',
'david.lebec@customsolutions.fr',
'delphine.vitali@customsolutions.fr',
'elise.baechelen@customsolutions.fr',
'emilie.wery@customsolutions.fr',
'emilien.escalle@customsolutions.fr',
'fabienne.deluc@customsolutions.fr',
'florence.chodacki@customsolutions.fr',
'florian.louche@customsolutions.fr',
'giovanna.tapia@customsolutions.fr',
'guillaume.benhaim@customsolutions.fr',
'helene.churin@customsolutions.fr',
'helene.greffier@customsolutions.fr',
'ingrid.rodrigues@customsolutions.fr',
'ingrid.salmon@customsolutions.fr',
'isabelle.amato@customsolutions.fr',
'jeanluc.martinez@customsolutions.fr',
'jm.hoarau@customsolutions.fr',
'jeremy.jayme@customsolutions.fr',
'jerome.durand@customsolutions.fr',
'johan.barbier@customsolutions.fr',
'johana.dangreau@customsolutions.fr',
'joris.pothin@customsolutions.fr',
'julie.castellani@customsolutions.fr',
'julie.leher@customsolutions.fr',
'karen.devivo@customsolutions.fr',
'karima.bouacid@customsolutions.fr',
'lena.lallemand@customsolutions.fr',
'maeva.boudjaballah@customsolutions.fr',
'magali.personnier@customsolutions.fr',
'marina.ries@customsolutions.fr',
'marina.rossignol@customsolutions.fr',
'marjorie.march@customsolutions.fr',
'michael.palm@customsolutions.fr',
'mylene.pica@customsolutions.fr',
'nadege.rapinel@customsolutions.fr',
'nathalie.boileau@customsolutions.fr',
'oceane.poirot@customsolutions.fr',
'olivier.poggi@customsolutions.fr',
'olivier.roquand@customsolutions.fr',
'ouassila.guendoul@customsolutions.fr',
'pascal.rakoto@customsolutions.fr',
'pascale.sulpice@customsolutions.fr',
'patrick.benoit@customsolutions.fr',
'pauline.bazan@customsolutions.fr',
'raphael.parmentier@customsolutions.fr',
'reception.rousset@customsolutions.fr',
'romain.frolich@customsolutions.fr',
'samia.beloued@customsolutions.fr',
'samia.lebellego@customsolutions.fr',
'sandie.colin@customsolutions.fr',
'sandra.bourgoin@customsolutions.fr',
'sandrine.martin@customsolutions.fr',
'service.logistique@customsolutions.fr',
'steeve.zorzi@customsolutions.fr',
'stephane.gimenez@customsolutions.fr',
'stephanie.priou@customsolutions.fr',
'sylvie.rouchy@customsolutions.fr',
'valerie.defline@customsolutions.fr',
'virginie.beaujard@customsolutions.fr'
);

