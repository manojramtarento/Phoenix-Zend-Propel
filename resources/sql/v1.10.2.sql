--correction types de devis
update r_operation_type_sub_tpl_prestation
set ost_tpl_prestation_order = (
select prestation_order from
(select ost_tpl_rubrique_id,ROW_NUMBER() over (partition by ost_tpl_rubrique_id order by ost_tpl_prestation_order) as 'prestation_order',ost_tpl_prestation_id
from r_operation_type_sub_tpl_prestation ) as tbl
where tbl.ost_tpl_prestation_id=r_operation_type_sub_tpl_prestation.ost_tpl_prestation_id
)