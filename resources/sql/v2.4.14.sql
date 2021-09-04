USE phoenix;

-- 54098 Creating a view that computes the ADF_Encaisse_By_Invoice for partially cashed invoices per invoice which is :
-- The cashed amount while it does not exceed the maximum ADF amount of the invoice, if it does exceed, consider the ADF_Encaisse_By_Invoice is the maximum ADF amount of the invoice
CREATE OR REPLACE VIEW View_Operation_ADF_Encaisse_Partiel_Par_Facture AS
SELECT factures.fact_id, factures.op_id,
CASE WHEN factures.fact_montant_encaisse
< COALESCE(SUM(factures_prestations.fact_prest_montant_facture_final * r_tva_type.r_tva_coeff), 0)
        THEN factures.fact_montant_encaisse
        ELSE COALESCE(SUM(factures_prestations.fact_prest_montant_facture_final * r_tva_type.r_tva_coeff), 0)
        END
        AS ADF_Encaisse_By_Invoice
        FROM factures
       LEFT JOIN factures_rubriques
             ON factures.fact_id = factures_rubriques.fact_id
       INNER JOIN factures_prestations
             ON factures_rubriques.fact_rub_id = factures_prestations.fact_rub_id AND factures_prestations.fact_prest_adf = 1
	    LEFT JOIN r_tva_type AS r_tva_type
            ON factures_prestations.r_tva_type_id = r_tva_type.r_tva_id
		WHERE factures.fact_status_id = 5
        GROUP BY factures.fact_id
        ORDER BY factures.op_id;

-- 54098 Summing the ADF_Encaisse_By_Invoice of each invoice and grouping the result by operation
CREATE OR REPLACE VIEW View_Operation_ADF_Encaisse_Partiel AS
SELECT op_id, SUM(ADF_Encaisse_By_Invoice) AS ADF_encaisse
FROM View_Operation_ADF_Encaisse_Partiel_Par_Facture
GROUP BY op_id;
