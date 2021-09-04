update r_tva_type set actif=0 where r_tva_id=2       

INSERT INTO [r_tva_type]
           ([r_tva_libelle]
           ,[r_tva_libelle_fact_synthese]
           ,[r_tva_typologie]
           ,[r_tva_statut]
           ,[r_tva_descriptif]
           ,[r_tva_taux]
           ,[r_tva_coeff]
           ,[r_tva_rub_order]
           ,[actif]
           ,[r_tva_libelle_en])
     VALUES(
           'Soumis TVA 20%'
           ,'TVA 20%'
           ,'ht'
           ,'tva'
           ,'Tarif HT ÃƒÂ  saisir dans le devis, la TVA sera rajoutÃƒÂ©e et facturÃƒÂ©e au client'
           ,20
           ,1.20
           ,2
           ,1
           ,'Subject to VAT 20%')
		  
		  
--maj tva devis		  
update operation_rubriques set operation_rubriques.r_tva_type_id=(
select r_tva_id from r_tva_type where r_tva_taux=20
) 
where operation_rubriques.r_tva_type_id=2 and op_id in
( 
Select op_id from operations where op_status_id not in (3,4) and date_create<'20131231'
)


--maj tva factures
update factures_rubriques set factures_rubriques.r_tva_type_id=(
select r_tva_id from r_tva_type where r_tva_taux=20
) 
where factures_rubriques.r_tva_type_id=2 and fact_id in (
Select fact_id from factures where fact_status_id=1 and date_create<'20131231'
)
   
            
update factures_prestations set factures_prestations.r_tva_type_id=(
select r_tva_id from r_tva_type where r_tva_taux=20
) 
where factures_prestations.r_tva_type_id=2 and fact_id in (
Select fact_id from factures where fact_status_id=1 and date_create<'20131231'
)  

 

--maj calcul factures
update factures set factures.fact_montant_ttc=(
SELECT     sum(factures_prestations.fact_prest_montant_facture_final*r_tva_type.r_tva_coeff)
FROM         factures_prestations INNER JOIN
                      factures_rubriques ON factures_prestations.fact_rub_id = factures_rubriques.fact_rub_id INNER JOIN
                      r_tva_type ON factures_rubriques.r_tva_type_id = r_tva_type.r_tva_id
where factures_prestations.fact_id=factures.fact_id
)
where fact_id in (
	select distinct factures.fact_id from factures_rubriques join factures on factures_rubriques.fact_id=factures.fact_id
	where factures_rubriques.r_tva_type_id=(
		select r_tva_id from r_tva_type where r_tva_taux=20
	) and fact_status_id=1 and date_create<'20131231'
)


--maj catalogue prestation
update r_prestations set r_p_tva_id=(
select r_tva_id from r_tva_type where r_tva_taux=20
) 
where r_p_tva_id = 2

--maj catalogue rubriques
update r_rubriques set r_tva_type_id=(
select r_tva_id from r_tva_type where r_tva_taux=20
) 
where r_tva_type_id = 2




