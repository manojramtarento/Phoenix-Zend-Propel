USE phoenix;

-- *********************** --
-- BLOCK QUERY TYPE ALTER --
-- *********************** --

-- 41604 Adding a new view dedicated to invoices totally cashed
CREATE OR REPLACE VIEW View_Operation_ADF_Encaisse_Total AS
SELECT operations.op_id, SUM(factures_prestations.fact_prest_montant_facture_final * r_tva_type.r_tva_coeff) AS ADF_encaisse
       FROM operations
       LEFT JOIN factures
            ON factures.op_id = operations.op_id AND factures.fact_status_id = 4
       LEFT JOIN factures_rubriques
            ON factures.fact_id = factures_rubriques.fact_id
       LEFT JOIN factures_prestations
            ON factures_rubriques.fact_rub_id = factures_prestations.fact_rub_id AND factures_prestations.fact_prest_adf = 1
       LEFT JOIN r_tva_type AS r_tva_type
            ON factures_prestations.r_tva_type_id = r_tva_type.r_tva_id
       GROUP BY operations.op_id;

-- 41604 Adding a new view dedicated to invoices partly cashed, the computed value canno't exceed the maximum ADF amount that can be cashed
CREATE OR REPLACE VIEW View_Operation_ADF_Encaisse_Partiel AS
SELECT operations.op_id,
CASE WHEN SUM(factures.fact_montant_encaisse) < COALESCE(SUM(factures_prestations.fact_prest_montant_facture_final * r_tva_type.r_tva_coeff), 0)
        THEN SUM(factures.fact_montant_encaisse)
        ELSE COALESCE(SUM(factures_prestations.fact_prest_montant_facture_final * r_tva_type.r_tva_coeff), 0)
        END
        AS ADF_encaisse
       FROM operations
       LEFT JOIN factures
             ON factures.op_id = operations.op_id AND factures.fact_status_id = 5
       LEFT JOIN factures_rubriques
             ON factures.fact_id = factures_rubriques.fact_id
       INNER JOIN factures_prestations
             ON factures_rubriques.fact_rub_id = factures_prestations.fact_rub_id AND factures_prestations.fact_prest_adf = 1
             LEFT JOIN r_tva_type AS r_tva_type
            ON factures_prestations.r_tva_type_id = r_tva_type.r_tva_id
       GROUP BY operations.op_id;


-- 41604 altering the existing view to compute the sum of the both possible invoice cashing type
CREATE OR REPLACE VIEW View_Operation_ADF_Encaisse AS
SELECT VOAET.op_id, COALESCE(VOAET.ADF_encaisse, 0) + COALESCE(VOAEP.ADF_encaisse, 0) AS ADF_encaisse
       FROM View_Operation_ADF_Encaisse_Total VOAET
       LEFT JOIN View_Operation_ADF_Encaisse_Partiel VOAEP
            ON VOAEP.op_id = VOAET.op_id
        GROUP BY VOAET.op_id;

-- 51702 Increasing field value length
ALTER TABLE phoenix.users MODIFY `user_mobile` VARCHAR(50) NULL;