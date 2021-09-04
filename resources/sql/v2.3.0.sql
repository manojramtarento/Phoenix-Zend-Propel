USE phoenix;

SET NAMES 'utf8';
-- *********************** --
-- BLOCK QUERY TYPE CREATE --
-- *********************** --
-- 31828 Adding a new table

CREATE TABLE IF NOT EXISTS `r_facture_annulation_motifs` (
  `r_facture_annulation_motifs_motif_id` INT(11) NOT NULL AUTO_INCREMENT,
  `r_facture_annulation_motifs_motif_libelle` VARCHAR(100) NOT NULL,
  `r_facture_annulation_motifs_actif` TINYINT(1) NOT NULL,
  PRIMARY KEY (`r_facture_annulation_motifs_motif_id`));


-- *********************** --
-- BLOCK QUERY TYPE ALTER --
-- *********************** --

-- 18295 Adding actif fields to the analytical axes table
ALTER TABLE `r_p_axe1` ADD `r_p_axe1_actif` TINYINT(1) NULL DEFAULT 1;
ALTER TABLE `r_p_axe2` ADD `r_p_axe2_actif` TINYINT(1) NULL DEFAULT 1;
ALTER TABLE `r_p_axe3` ADD `r_p_axe3_actif` TINYINT(1) NULL DEFAULT 1;
ALTER TABLE `r_p_axe4` ADD `r_p_axe4_actif` TINYINT(1) NULL DEFAULT 1;
ALTER TABLE `r_p_axe5` ADD `r_p_axe5_actif` TINYINT(1) NULL DEFAULT 1;

-- 31828 Adding fields in plan_facturation_details table
ALTER TABLE `plan_facturation_details` ADD `pfd_fact_annul_motif_id` INT(11) NULL AFTER `pfd_fact_annul`;
ALTER TABLE `plan_facturation_details` ADD `pfd_fact_annul_autre_motif` VARCHAR(255) NULL AFTER `pfd_fact_annul_motif_id`;

-- 31828 Adding foreign key to reference the primary key of r_facture_annulation_motifs table
ALTER TABLE `plan_facturation_details`
    ADD CONSTRAINT `FK_PLNFACTDETAILS_RFACTANNULMOT_PFDFACTANNULMOTIFID` FOREIGN KEY (`pfd_fact_annul_motif_id`) REFERENCES `r_facture_annulation_motifs` (`r_facture_annulation_motifs_motif_id`);

-- 31828 Adding invoice cancellation motives fields : motif_annulation and motif_annulation_autre

CREATE OR REPLACE VIEW View_Facture_Listing AS
    SELECT
        factures.fact_id,
        factures.r_fact_type_id,
        factures.op_id,
        factures.cl_id,
        factures.ct_id,
        CASE
            WHEN factures.fact_status_id NOT IN (1 , 2) THEN factures.dc_id
            ELSE operations.op_dc_id
        END AS dc_id,
        factures.fact_numero,
        factures.fact_num_cmd,
        factures.fact_montant_ht,
        factures.fact_montant_ttc,
        factures.fact_montant_encaisse,
        factures.fact_destinataire,
        factures.fact_attention,
        factures.fact_adresse1,
        factures.fact_adresse2,
        factures.fact_adresse3,
        factures.fact_code_postal,
        factures.fact_ville,
        factures.fact_pays,
        factures.fact_user_edition,
        factures.fact_verrou,
        factures.fact_annul_id,
        factures.fact_taux_adf,
        factures.date_create AS fact_date_create,
        factures.date_modify AS fact_date_modify,
        factures.user_id,
        factures.user_modify,
        r_operation_type.ot_libelle,
        operations.op_number,
        clients.cl_libelle,
        factures.fact_reference,
        r_facture_statuts.r_fact_stat_libelle,
        r_facture_types.r_fact_type_libelle,
        operations.op_act_id,
        operations.op_type_id,
        operations.op_status_id,
        factures.fact_montant_ttc - factures.fact_montant_encaisse AS fact_solde,
        CASE
            WHEN
                (r_facture_statuts.r_fact_stat_id != 4
                    AND fact_montant_encaisse < fact_montant_ttc)
            THEN
                1
            ELSE 0
        END AS fact_has_paiement_partiel,
        factures.fact_status_id,
        DATE_FORMAT(factures.fact_date, '%d/%m/%Y') AS fact_date_validation_fr,
        (SELECT
                DATE_FORMAT(date_create, '%d/%m/%Y') AS Expr1
            FROM
                View_Facture_Status AS View_Facture_Status_2
            WHERE
                (fact_id = factures.fact_id)
                    AND (r_fact_stat_id = 3)) AS fact_date_edition_fr,
        DATE_FORMAT(factures.fact_date_echeance, '%d/%m/%Y') AS fact_date_echeance_fr,
        (SELECT
                DATE_FORMAT(date_create, '%d/%m/%Y') AS Expr1
            FROM
                View_Facture_Status
            WHERE
                (fact_id = factures.fact_id)
                    AND (r_fact_stat_id = 4)) AS fact_date_encaisse_fr,
        factures.fact_date AS fact_date_validation,
        (SELECT
                date_create AS Expr1
            FROM
                View_Facture_Status AS View_Facture_Status_2
            WHERE
                (fact_id = factures.fact_id)
                    AND (r_fact_stat_id = 3)) AS fact_date_edition,
        factures.fact_date_echeance,
        (SELECT
                date_create AS Expr1
            FROM
                View_Facture_Status
            WHERE
                (fact_id = factures.fact_id)
                    AND (r_fact_stat_id = 4)) AS fact_date_encaisse,
        plan_facturation_params.plan_fact_periode_id,
        plan_facturation_params.plan_fact_periode_type_id,
        DATE_FORMAT(factures.date_create, '%d/%m/%Y') AS fact_date_create_fr,
        DATE_FORMAT(factures.date_modify, '%d/%m/%Y') AS fact_date_modify_fr,
        r_facture_options_echeances.fact_opt_echeance_libelle AS fact_echeance_libelle,
        CASE
            WHEN
                (NOW() > factures.fact_date_echeance
                    AND fact_status_id != 4)
            THEN
                1
            ELSE 0
        END AS fact_is_echu,
        plan_facturation_params.plan_fact_note_interne,
        operations.op_cp_id,
        CONCAT(users_cp.user_nom,
                ' ',
                users_cp.user_prenom) AS op_cp_name,
        r_facture_annulation_motifs.r_facture_annulation_motifs_motif_libelle as motif_annulation,
        plan_facturation_details.pfd_fact_annul_autre_motif as motif_annulation_autre
    FROM
        users AS users_cp
            INNER JOIN
        operations ON users_cp.user_id = operations.op_cp_id
            LEFT OUTER JOIN
        plan_facturation_params ON operations.op_id = plan_facturation_params.op_id
            RIGHT OUTER JOIN
        r_facture_types
            RIGHT OUTER JOIN
        factures
		 LEFT JOIN
        plan_facturation_details ON plan_facturation_details.pfd_fact_id = factures.fact_id
            LEFT JOIN
        r_facture_annulation_motifs ON r_facture_annulation_motifs.r_facture_annulation_motifs_motif_id = plan_facturation_details.pfd_fact_annul_motif_id
            INNER JOIN
        r_facture_statuts ON factures.fact_status_id = r_facture_statuts.r_fact_stat_id
            INNER JOIN
        r_facture_options_echeances ON factures.fact_echeance_id = r_facture_options_echeances.fact_opt_echeance_id ON r_facture_types.r_fact_type_id = factures.r_fact_type_id
            LEFT OUTER JOIN
        clients ON factures.cl_id = clients.cl_id ON operations.op_id = factures.op_id
            LEFT OUTER JOIN
        r_operation_type ON operations.op_type_id = r_operation_type.ot_id;

-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE INSERT --
-- *********************** --

-- 18295 Adding new acl controller axes

INSERT INTO `acl_interfaces_controllers`
           (`module_id`,
            `interface_name`,
            `controller_name`)
           SELECT module_id, 'axes', 'axes'
           FROM acl_modules WHERE module_name = 'administration';

-- 18295 Adding a new feature for the index action

INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     SELECT `int_cont_id`, 'Accés à l\'interface de Listing des axes'
     FROM `acl_interfaces_controllers`
            WHERE interface_name = 'axes'
            AND controller_name = 'axes'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

-- 18295 Adding a new action for the index action

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     SELECT `int_cont_id`, 'index', `fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Accés à l\'interface de Listing des axes'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- 18295 Adding a new feature for the updateaxe action

INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     SELECT `int_cont_id`, 'Ajout/Modification d\'un axe analytique'
     FROM `acl_interfaces_controllers`
            WHERE interface_name = 'axes'
            AND controller_name = 'axes'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

-- 18295 Adding a new action for the updateaxe action

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     SELECT `int_cont_id`, 'updateaxe', `fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Ajout/Modification d\'un axe analytique'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- 18295 Adding a new feature for the deleteaxe action

INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     SELECT `int_cont_id`, 'Suppression d\'un axe analytique'
     FROM `acl_interfaces_controllers`
            WHERE interface_name = 'axes'
            AND controller_name = 'axes'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

-- 18295 Adding a new action for the deleteaxe action

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     SELECT `int_cont_id`, 'deleteaxe', `fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Suppression d\'un axe analytique'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- 31828 Inserting some invoice cancellation motives

INSERT INTO r_facture_annulation_motifs (`r_facture_annulation_motifs_motif_libelle`, `r_facture_annulation_motifs_actif`)
VALUES
('TVA à corriger (erreur devis)', 1),
('TVA à modifier (demande client)', 1),
('PO erroné', 1),
('PO à ajouter', 1),
('Montant PO différent montant facturé', 1),
('Erreur devis initial', 1),
('Facture estimée trop importante', 1),
('Contestation client', 1),
('Bug facture dématérialisée', 1),
('Modification opération', 1),
('Autre', 1);


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
