--correction factures annulées

--champs
update factures 
set fact_montant_encaisse=null,
jdv_id = null,
fact_has_relance = 0 
where 
r_fact_type_id in(2,13) and fact_status_id in(1,2)

#statuts
delete from facture_statuts where fact_id in(
select fact_id from factures 
where r_fact_type_id in(2,13) and fact_status_id in (1,2)
) and r_fact_stat_id not in (1,2)

