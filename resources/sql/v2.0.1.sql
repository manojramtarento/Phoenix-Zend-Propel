CREATE OR REPLACE VIEW View_Operation_ADF_Encaisse AS
SELECT operations.op_id, 
       Sum(factures_prestations.fact_prest_montant_facture_final * 
           r_tva_type.r_tva_coeff) AS ADF_encaisse 
FROM   operations 
       LEFT JOIN factures 
              ON factures.op_id = operations.op_id 
                 AND ( factures.fact_status_id IN ( 4, 5 ) ) 
       LEFT JOIN factures_rubriques 
              ON factures.fact_id = factures_rubriques.fact_id 
       LEFT JOIN factures_prestations  
              ON factures_rubriques.fact_rub_id = 
                 factures_prestations.fact_rub_id 
                 AND factures_prestations.fact_prest_adf = 1 
       LEFT JOIN r_tva_type AS r_tva_type 
              ON factures_prestations.r_tva_type_id = r_tva_type.r_tva_id 
GROUP  BY operations.op_id ;