-- consolidation de la date de facture
BEGIN TRANSACTION
GO
ALTER TABLE dbo.factures ADD
	fact_date datetime NULL
GO
ALTER TABLE dbo.factures SET (LOCK_ESCALATION = TABLE)
GO
COMMIT



-- récupération des dates de facture
update factures set fact_date=(
select date_create from View_Facture_Status where r_fact_stat_id=3 and View_Facture_Status.fact_id=factures.fact_id
)
where fact_id in (
select fact_id from View_Facture_Status where r_fact_stat_id=3 and date_create < '20131202'
)


update factures set fact_date=(
select date_create from View_Facture_Status where r_fact_stat_id=2 and View_Facture_Status.fact_id=factures.fact_id
)
where fact_id in (
select fact_id from View_Facture_Status where (r_fact_stat_id=2 and date_create > '20131202') or (r_fact_stat_id=3 and date_create > '20131202')
)