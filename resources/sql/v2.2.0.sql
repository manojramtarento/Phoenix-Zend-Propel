USE phoenix;

SET NAMES 'utf8';

-- *********************** --
-- BLOCK QUERY TYPE CREATE --
-- *********************** --

--  Add new column cl_solde_ttc to the view View_Client_Stats_Soldes (Ticket : 32254)

CREATE OR REPLACE VIEW View_Client_Stats_Soldes AS
    SELECT
        cl_id,
        SUM(fact_montant_ttc) AS solde_realise,
        (SELECT
                SUM(fact_montant_ttc) AS Expr1
            FROM
                factures AS factures_2
            WHERE
                (cl_id = factures_1.cl_id)
                    AND (fact_status_id IN (3 , 4))) AS solde_facture,
        SUM(fact_montant_encaisse) AS solde_encaisse,
        (SELECT
                SUM(fact_montant_ttc) AS Expr1
            FROM
                factures AS factures_2
            WHERE
                (cl_id = factures_1.cl_id)
                    AND (fact_status_id = 3 )) AS cl_solde_ttc
    FROM
        factures AS factures_1
    GROUP BY cl_id;

-- 37886 : Performance optimization for "Accounting / Invoice Management" screen

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


-- *********************** --
-- BLOCK QUERY TYPE ALTER --
-- *********************** --

-- 38579 Increasing op_scenario_libelle field size

ALTER TABLE `operation_scenarii`
MODIFY `op_scenario_libelle` VARCHAR(255) NULL;

-- 29146 Adding a new field that indicates if the quotes matches the one generated on operation acceptation

ALTER TABLE `files`
ADD file_is_accepted_version tinyint(1) NULL
AFTER file_name;


-- *********************** --

-- *********************** --
-- BLOCK QUERY TYPE INSERT --
-- *********************** --

-- 33369 Adding a new operation status

INSERT INTO `r_operation_status` (
`os_libelle`, `actif`
) VALUES
('Soldé', 1);


-- 30802 Adding a new feature for multiple documents export

INSERT INTO acl_fonctionnalites
           (int_cont_id
           ,fonc_name)
     VALUES
           ((select int_cont_id from acl_interfaces_controllers where module_id = 3 and interface_name = 'flux' and controller_name = 'flux'),
           'Export de multiple documents');

-- 30802 Adding a new action for multiple documents export

INSERT INTO acl_actions
           (int_cont_id,
            action_name,
            fonc_id)
     VALUES
           ((select int_cont_id from acl_interfaces_controllers where module_id = 3 and interface_name = 'flux' and controller_name = 'flux'),
            'exportmultipledocuments',
           (SELECT fonc_id FROM acl_fonctionnalites order by (fonc_id) desc LIMIT 1));


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
