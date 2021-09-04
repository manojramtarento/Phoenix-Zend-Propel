USE phoenix;

SET NAMES 'utf8';

-- *********************** --
-- BLOCK QUERY TYPE CREATE --
-- *********************** --

-- 42316 : Adding field op_libelle to View_Facture_Listing_Simplifie

CREATE OR REPLACE VIEW View_Facture_Listing_Simplifie AS
SELECT factures.fact_id,
       factures.r_fact_type_id,
       factures.op_id,
       factures.cl_id,
       factures.fact_num_cmd,
       factures.fact_montant_ht,
       factures.fact_montant_ttc,
       factures.fact_montant_encaisse,
       factures.date_create AS fact_date_create,
       r_operation_type.ot_libelle,
       operations.op_number,
       operations.op_libelle,
       clients.cl_libelle,
       factures.fact_reference,
       r_facture_statuts.r_fact_stat_libelle,
       r_facture_types.r_fact_type_libelle,
       operations.op_type_id,
       factures.fact_montant_ttc - factures.fact_montant_encaisse AS fact_solde,
       CASE
           WHEN (r_facture_statuts.r_fact_stat_id != 4
                 AND fact_montant_encaisse < fact_montant_ttc) THEN 1
           ELSE 0
       END AS fact_has_paiement_partiel,
       factures.fact_status_id,
       DATE_FORMAT(factures.fact_date, '%d/%m/%Y') AS fact_date_validation_fr,
       DATE_FORMAT(View_Facture_Status_3.date_create, '%d/%m/%Y') AS fact_date_edition_fr,
       DATE_FORMAT(factures.fact_date_echeance, '%d/%m/%Y') AS fact_date_echeance_fr,
       DATE_FORMAT(View_Facture_Status_4.date_create, '%d/%m/%Y') AS fact_date_encaisse_fr,
       factures.fact_date AS fact_date_validation,
       View_Facture_Status_3.date_create fact_date_edition,
       factures.fact_date_echeance,
       View_Facture_Status_4.date_create AS fact_date_encaisse,
       plan_facturation_params.plan_fact_periode_id,
       plan_facturation_params.plan_fact_periode_type_id,
       CASE
           WHEN (NOW() > factures.fact_date_echeance
                 AND fact_status_id != 4) THEN 1
           ELSE 0
       END AS fact_is_echu,
       operations.op_cp_id
FROM operations
INNER JOIN factures ON operations.op_id = factures.op_id
INNER JOIN r_facture_types ON r_facture_types.r_fact_type_id = factures.r_fact_type_id
INNER JOIN r_facture_statuts ON factures.fact_status_id = r_facture_statuts.r_fact_stat_id
LEFT JOIN clients ON factures.cl_id = clients.cl_id
LEFT JOIN r_operation_type ON operations.op_type_id = r_operation_type.ot_id
LEFT JOIN plan_facturation_params ON operations.op_id = plan_facturation_params.op_id
LEFT JOIN View_Facture_Status AS View_Facture_Status_3 ON View_Facture_Status_3.fact_id = factures.fact_id
AND View_Facture_Status_3.r_fact_stat_id = 3
LEFT JOIN View_Facture_Status AS View_Facture_Status_4 ON View_Facture_Status_4.fact_id = factures.fact_id
AND View_Facture_Status_4.r_fact_stat_id = 4;

-- 42316 : Adding field op_libelle to View_Facture_Listing
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
        operations.op_libelle,
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
-- BLOCK QUERY TYPE ALTER --
-- *********************** --

-- ************************************************************************************** --
-- 41879 changing the ct_title field size--
-- ************************************************************************************** --


ALTER TABLE `contacts` CHANGE `ct_title` `ct_title` VARCHAR( 100 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL ;

-- 48990 Adding a new feature for checking invoicing address contact activity

INSERT INTO acl_fonctionnalites
           (int_cont_id
           ,fonc_name)
     VALUES
           ((select int_cont_id from acl_interfaces_controllers where module_id = 3 and interface_name = 'facturation' and controller_name = 'facturation'),
           'Contrôle d\'activité de l\'adresse de facturation');

-- 48990 Adding a new action for checking invoicing address contact activity

INSERT INTO acl_actions
           (int_cont_id,
            action_name,
            fonc_id)
     VALUES
           ((select int_cont_id from acl_interfaces_controllers where module_id = 3 and interface_name = 'facturation' and controller_name = 'facturation'),
            'checkinvoicingaddresscontactactivity',
           (SELECT fonc_id FROM acl_fonctionnalites order by (fonc_id) desc LIMIT 1));




-- *********************** --
-- BLOCK QUERY TYPE INSERT --
-- *********************** --


-- Add a new feature to manage acls export invoices (Ticket : 52998)

INSERT INTO `acl_fonctionnalites`
           (`int_cont_id`
           ,`fonc_name`)
     SELECT `int_cont_id`, 'Exports des factures'
     FROM `acl_interfaces_controllers`
            WHERE interface_name = 'factures'
            AND controller_name = 'factures'
     ORDER BY (`int_cont_id`) DESC
     LIMIT 0, 1;

-- Add the new action used for export invoices (Ticket : 52998)

INSERT INTO `acl_actions`
           (`int_cont_id`,
            `action_name`,
            `fonc_id`)
     SELECT `int_cont_id`, 'exportcsv', `fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Exports des factures'
    ORDER BY (`fonc_id`)
    DESC LIMIT 0, 1;

-- alow groups GP.DAF , GP.ReferentsErp, GP.Compta, GP.Managers, GP.Informatique to export invoices (Ticket : 52998)
INSERT INTO `lnk_acl_groups_fonctionnalites` (`GROUP_NAME`,`FONC_ID`) SELECT 'GP.DAF',`fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Exports des factures'
    ORDER BY (`fonc_id`) DESC LIMIT 0, 1;

INSERT INTO `lnk_acl_groups_fonctionnalites` (`GROUP_NAME`,`FONC_ID`) SELECT 'GP.ReferentsErp',`fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Exports des factures'
    ORDER BY (`fonc_id`) DESC LIMIT 0, 1;

INSERT INTO `lnk_acl_groups_fonctionnalites` (`GROUP_NAME`,`FONC_ID`) SELECT 'GP.Compta',`fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Exports des factures'
    ORDER BY (`fonc_id`) DESC LIMIT 0, 1;

INSERT INTO `lnk_acl_groups_fonctionnalites` (`GROUP_NAME`,`FONC_ID`) SELECT 'GP.Managers',`fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Exports des factures'
    ORDER BY (`fonc_id`) DESC LIMIT 0, 1;

INSERT INTO `lnk_acl_groups_fonctionnalites` (`GROUP_NAME`,`FONC_ID`) SELECT 'GP.Informatique',`fonc_id`
            FROM `acl_fonctionnalites`
                WHERE fonc_name = 'Exports des factures'
    ORDER BY (`fonc_id`) DESC LIMIT 0, 1;
