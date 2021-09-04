-- *********************** --
-- BLOCK QUERY TYPE CREATE -- 
-- *********************** --

-- 37855 Optimizing View_Operation_ADF By replacing subquires with joins
-- Adding 2 new Views View_Operation_ADF_Estime_Reel View_Operation_ADF_Facture
-- Updating previously created (in v2.0.2) View_Operation_ADF_Encaisse as this new verion is Quicker

-- Adding a new view that computes the ADF_Reel and ADF_Estim
CREATE OR REPLACE VIEW View_Operation_ADF_Estime_Reel AS
    SELECT 
    operation_prestations.op_id, SUM(operation_prestations.op_prest_mestim * r_tva_type.r_tva_coeff) AS ADF_Estim,
    SUM(operation_prestations.op_prest_mreel * r_tva_type.r_tva_coeff) AS ADF_Reel
    FROM operation_prestations
    INNER JOIN operation_rubriques 
            ON operation_prestations.op_prest_rubri_id = operation_rubriques.op_rubrique_id
    INNER JOIN r_tva_type 
            ON operation_rubriques.r_tva_type_id = r_tva_type.r_tva_id
    WHERE operation_prestations.op_adf = 1
    GROUP BY op_id;

-- Adding a new view that computes the ADF_Facture
CREATE OR REPLACE VIEW View_Operation_ADF_Facture AS
    SELECT 
    factures.op_id, SUM(factures_prestations.fact_prest_montant_facture_final * r_tva_type_1.r_tva_coeff) AS ADF_Facture
    FROM factures
    INNER JOIN factures_rubriques
           ON factures.fact_id = factures_rubriques.fact_id
    INNER JOIN factures_prestations
            ON factures_rubriques.fact_rub_id = factures_prestations.fact_rub_id
    INNER JOIN r_tva_type AS r_tva_type_1 FORCE INDEX(PRIMARY)
           ON factures_prestations.r_tva_type_id = r_tva_type_1.r_tva_id
        WHERE factures.fact_status_id IN (3 , 4, 5)
              AND factures_prestations.fact_prest_adf = 1
    GROUP BY (factures.op_id);

-- Updating the view View_Operation_ADF
CREATE OR REPLACE VIEW View_Operation_ADF AS
    SELECT 
        VOAE.op_id,
        VOAER.ADF_Estim,
        VOAF.ADF_Facture,
        VOAE.ADF_Encaisse,
        VOAER.ADF_Reel
        FROM View_Operation_ADF_Encaisse VOAE
        LEFT JOIN View_Operation_ADF_Estime_Reel VOAER ON VOAER.op_id = VOAE.op_id
        LEFT JOIN View_Operation_ADF_Facture VOAF ON VOAF.op_id = VOAE.op_id;