USE phoenix;

-- *********************** --
-- BLOCK QUERY TYPE CREATE --
-- *********************** --

-- 32374 Modifying the fields fact_date_validation_fr and fact_date_validation data source

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
                users_cp.user_prenom) AS op_cp_name
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
            INNER JOIN
        r_facture_statuts ON factures.fact_status_id = r_facture_statuts.r_fact_stat_id
            INNER JOIN
        r_facture_options_echeances ON factures.fact_echeance_id = r_facture_options_echeances.fact_opt_echeance_id ON r_facture_types.r_fact_type_id = factures.r_fact_type_id
            LEFT OUTER JOIN
        clients ON factures.cl_id = clients.cl_id ON operations.op_id = factures.op_id
            LEFT OUTER JOIN
        r_operation_type ON operations.op_type_id = r_operation_type.ot_id;

-- 38425 : Add new view to retrieve the first date of passage to accepted status

CREATE OR REPLACE VIEW View_Operation_First_Acceptation AS

SELECT
    op.op_cl_id AS cl_id,
    op.op_id AS op_id,
    MIN(ops.date_create) AS date_first_acceptation
FROM
    operations op
        INNER JOIN
    operation_statuts ops ON op.op_id = ops.op_id
WHERE
    hs_new_statut_id = 2
GROUP BY op.op_id;

 -- 37959 : Correction first accepted quotes indicator 1_1

CREATE OR REPLACE VIEW View_Client_First_Accepted_Quotes AS
    SELECT
        vofa.cl_id,
        vofa.date_first_acceptation,
        '0' AS is_reactivated
    FROM
        View_Operation_First_Acceptation vofa
    WHERE
        vofa.cl_id NOT IN (SELECT
                cl_id
            FROM
                View_Operation_First_Acceptation vofa2
            WHERE
                vofa2.cl_id = vofa.cl_id
                    AND vofa2.op_id <> vofa.op_id
                    AND vofa2.date_first_acceptation < vofa.date_first_acceptation)
    UNION SELECT
        vofa.cl_id,
        vofa.date_first_acceptation,
        '1' AS is_reactivated
    FROM
        View_Operation_First_Acceptation vofa
    WHERE
        DATEDIFF(vofa.date_first_acceptation,
                (SELECT
                        vofa2.date_first_acceptation
                    FROM
                        View_Operation_First_Acceptation vofa2
                    WHERE
                        vofa2.cl_id = vofa.cl_id
                    ORDER BY vofa2.date_first_acceptation DESC
                    LIMIT 1 , 1)) > 365 ;

-- 37959 : Correction first accepted quotes indicator 1_1
-- Add Condition on date_create operation_statuts for client that have many Accepted Ops
-- Adding condition to display the quote only onces for operation that have been accepted many times

CREATE OR REPLACE VIEW Indicateur_1_1 AS
SELECT clients.cl_libelle,
       operations.op_number,
       operations.op_libelle,
       r_custom_activites.act_libelle,
       r_operation_type.ot_libelle,
       r_operation_type_sub.ost_libelle,
       CONCAT(users_dc.user_nom, ' ', users_dc.user_prenom) AS dc,
       CONCAT(users_cp.user_nom, ' ', users_cp.user_prenom) AS cp,

  (SELECT SUM(r_tva_type.r_tva_coeff * operation_prestations.op_prest_mestim) AS Expr1
   FROM operation_prestations
   INNER JOIN operation_rubriques ON operation_prestations.op_prest_rubri_id = operation_rubriques.op_rubrique_id
   INNER JOIN r_tva_type ON operation_rubriques.r_tva_type_id = r_tva_type.r_tva_id
   WHERE operation_rubriques.op_id = operations.op_id
     AND operation_prestations.op_prest_off = 0
     AND operation_prestations.op_prest_npa = 0) AS montant_ttc,
  ops.date_create AS date_accepte,
       vcfaq.date_first_acceptation,
       operations.op_status_id,
       r_operation_status.os_libelle,
       vcfaq.is_reactivated
FROM operations
LEFT JOIN r_operation_status ON operations.op_status_id = r_operation_status.os_id
LEFT JOIN r_operation_type_sub ON operations.op_subtype_id = r_operation_type_sub.ost_id
LEFT JOIN r_custom_activites ON operations.op_act_id = r_custom_activites.act_id
LEFT JOIN users AS users_dc ON operations.op_dc_id = users_dc.user_id
LEFT JOIN users AS users_cp ON operations.op_cp_id = users_cp.user_id
LEFT JOIN clients ON operations.op_cl_id = clients.cl_id
LEFT JOIN r_operation_type ON operations.op_type_id = r_operation_type.ot_id
INNER JOIN View_Client_First_Accepted_Quotes vcfaq ON vcfaq.cl_id = clients.cl_id
INNER JOIN View_Operation_First_Acceptation vofa ON vofa.op_id = operations.op_id
INNER JOIN operation_statuts ops ON operations.op_id = ops.op_id
      AND ops.hs_new_statut_id = 2 AND ops.date_create = vofa.date_first_acceptation;


-- 38452 Correction view Indicateur_17 (Accepted quotes without invoices)

CREATE OR REPLACE VIEW Indicateur_17 AS
SELECT plan_facturation_details.pfd_date_planif,
       operations.op_number,
       r_custom_activites.act_libelle,
       r_operation_type.ot_libelle,
       r_operation_type_sub.ost_libelle,
       operations.op_libelle,
       r_facture_types.r_fact_type_libelle,
       r_plan_fact_periodes.r_plan_fact_periode_libelle,
       r_plan_fact_periodes_type.r_pfpt_libelle,
       CONCAT(user_cp.user_nom, ' ', user_cp.user_prenom) AS cp,
       operations.op_act_id,
       operations.op_type_id,
       operations.op_subtype_id,
       plan_facturation_params.plan_fact_periode_id,
       plan_facturation_params.plan_fact_periode_type_id,
       user_cp.user_id,
       plan_facturation_details.pfd_type_fact_id,
       r_facture_options_echeances.fact_opt_echeance_libelle
FROM operations
LEFT JOIN plan_facturation_params ON operations.op_id = plan_facturation_params.op_id
LEFT JOIN r_plan_fact_periodes ON plan_facturation_params.plan_fact_periode_id = r_plan_fact_periodes.r_plan_fact_periode_id
LEFT JOIN r_plan_fact_periodes_type ON plan_facturation_params.plan_fact_periode_type_id = r_plan_fact_periodes_type.r_pfpt_id
LEFT JOIN plan_facturation_details ON operations.op_id = plan_facturation_details.op_id
LEFT JOIN r_custom_activites ON operations.op_act_id = r_custom_activites.act_id
LEFT JOIN r_operation_type ON operations.op_type_id = r_operation_type.ot_id
LEFT JOIN r_operation_type_sub ON operations.op_subtype_id = r_operation_type_sub.ost_id
LEFT JOIN r_facture_types ON plan_facturation_details.pfd_type_fact_id = r_facture_types.r_fact_type_id
LEFT JOIN users AS user_cp ON operations.op_cp_id = user_cp.user_id
LEFT JOIN client_facture_options ON operations.op_cl_id = client_facture_options.cl_id
LEFT JOIN r_facture_options_echeances ON client_facture_options.cl_fact_echeance = r_facture_options_echeances.fact_opt_echeance_id
WHERE (operations.op_status_id = 2)
  AND (
         (SELECT COUNT(fact_id) AS Expr1
          FROM factures
          WHERE (op_id = operations.op_id)) = 0);

-- *********************** --
-- BLOCK QUERY TYPE ALTER --
-- *********************** --

-- ************************************************************************************** --
-- 38327 Increasing user_phone field size --
-- ************************************************************************************** --

ALTER TABLE `users`
MODIFY user_phone VARCHAR(50) NULL;

-- 35233 Adding new field to indicate of a type is enabled
ALTER TABLE r_relance_types
ADD actif tinyint(1) NULL;

-- *********************** --
-- BLOCK QUERY TYPE UPDATE -- 
-- *********************** --

-- 35233 Enabling the types "première relance", "deuxième relances" and "mise en demeure"
UPDATE r_relance_types
set actif = 1
WHERE r_rel_type_id IN (1, 2, 3);

-- 35233 Disabling the types "Lettre avocat" and "injonction de payer"
UPDATE r_relance_types
set actif = 0
WHERE r_rel_type_id IN (4, 5);