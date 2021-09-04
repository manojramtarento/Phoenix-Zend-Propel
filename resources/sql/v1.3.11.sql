BEGIN TRANSACTION
GO
ALTER TABLE dbo.factures ADD
	fact_pays_iso3 nvarchar(5) NULL
GO
ALTER TABLE dbo.factures SET (LOCK_ESCALATION = TABLE)
GO
COMMIT

-- coorection des prestation orphelines
update factures_prestations 
set factures_prestations.fact_id=(
	select factures.fact_id
	FROM factures_prestations as fp INNER JOIN factures_rubriques ON (factures_prestations.FACT_RUB_ID=factures_rubriques.FACT_RUB_ID)
	join factures on factures.fact_id=factures_rubriques.fact_id
	where factures_prestations.fact_id is null
	and factures_prestations.fact_prest_id=fp.fact_prest_id
)
where factures_prestations.fact_prest_id in (
	select factures_prestations.fact_prest_id
	FROM factures_prestations INNER JOIN factures_rubriques ON (factures_prestations.FACT_RUB_ID=factures_rubriques.FACT_RUB_ID)
	join factures on factures.fact_id=factures_rubriques.fact_id
	where factures_prestations.fact_id is null
)
