<?php

return array(
    1 => array(
        'name' => 'NbOpPastYear',
        'displayed_name' => 'Nombre d\'op par mois année N - 1',
        'type' => 'spline',
        'axes' => 'y2',
        'query' => 'SELECT
                                MONTH(dop.op_stamp_start) AS M , SUM(CASE dop.op_status_id
                                                                    WHEN 1 THEN (dop.op_taux_conversion / 100)
                                                                    ELSE 1
                                                                END) AS Value
                            FROM
                            (SELECT distinct op.op_id , op.op_stamp_start , op.op_status_id , op.op_taux_conversion FROM
                                operations op
                                LEFT JOIN operation_prestations oppres on op.op_id = oppres.op_id
                                LEFT JOIN r_prestations pres on pres.r_prestation_id = oppres.op_r_prest_id
                                LEFT JOIN r_p_axe1 pax1 on pax1.r_p_axe1_id = pres.r_p_axe1
                                LEFT JOIN r_activity_kpi kpiact on kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                            WHERE
                                op_status_id IN (2, 4, 6)
                                    AND YEAR(op_stamp_start) = ({year} - 1)
                                    {client}
                                    {activity}) as dop
                            GROUP BY M',
        'filters' => array(
            'year' => '{year}',
            'client' => 'AND op_cl_id = {client}',
            'activity' => ' AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    2 => array(
        'name' => 'NbOpCurrentYear',
        'displayed_name' => 'Nombre d\'op par mois année N',
        'type' => 'spline',
        'axes' => 'y2',
        'query' => 'SELECT
                                MONTH(dop.op_stamp_start) AS M , SUM(CASE dop.op_status_id
                                                                    WHEN 1 THEN (dop.op_taux_conversion / 100)
                                                                    ELSE 1
                                                                END) AS Value
                            FROM
                            (SELECT distinct op.op_id , op.op_stamp_start , op.op_status_id , op.op_taux_conversion FROM
                                operations op
                                LEFT JOIN operation_prestations oppres on op.op_id = oppres.op_id
                                LEFT JOIN r_prestations pres on pres.r_prestation_id = oppres.op_r_prest_id
                                LEFT JOIN r_p_axe1 pax1 on pax1.r_p_axe1_id = pres.r_p_axe1
                                LEFT JOIN r_activity_kpi kpiact on kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                            WHERE
                                op_status_id IN (2, 4, 6)
                                    AND YEAR(op_stamp_start) = {year}
                                    AND MONTH(op_stamp_start) <= MONTH(NOW())
                                    {client}
                                    {activity}) as dop
                            GROUP BY M',
        'filters' => array(
            'year' => '{year}',
            'client' => 'AND op_cl_id = {client}',
            'activity' => ' AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    3 => array(
        'name' => 'NbOpCurrentYearPredictive',
        'displayed_name' => 'Nombre d\'op par mois année N Prédictive',
        'type' => 'spline',
        'axes' => 'y2',
        'query' => 'SELECT
                                MONTH(dop.op_stamp_start) AS M , SUM(CASE dop.op_status_id
                                                                    WHEN 1 THEN (dop.op_taux_conversion / 100)
                                                                    ELSE 1
                                                                END) AS Value
                            FROM
                            (SELECT distinct op.op_id , op.op_stamp_start , op.op_status_id , op.op_taux_conversion FROM
                                operations op
                                LEFT JOIN operation_prestations oppres on op.op_id = oppres.op_id
                                LEFT JOIN r_prestations pres on pres.r_prestation_id = oppres.op_r_prest_id
                                LEFT JOIN r_p_axe1 pax1 on pax1.r_p_axe1_id = pres.r_p_axe1
                                LEFT JOIN r_activity_kpi kpiact on kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                            WHERE
                                op_status_id IN (2, 4, 1, 6)
                                    AND YEAR(op_stamp_start) = {year}
                                    AND MONTH(op_stamp_start) > MONTH(NOW())
                                    {client}
                                    {activity}) as dop
                            GROUP BY M',
        'filters' => array(
            'year' => '{year}',
            'client' => 'AND op_cl_id = {client}',
            'activity' => ' AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    4 => array(
        'name' => 'RealizedExpensesPastYear',
        'displayed_name' => 'Coût interne N - 1',
        'type' => 'bar',
        'query' => 'SELECT
                                    MONTH(op_dateConso_start) AS M,
                                    SUM(op_prest_cireel)/1000 AS Value
                                FROM
                                    operation_prestations opprest
                                        INNER JOIN
                                    operations op ON opprest.op_id = op.op_id
                                INNER JOIN r_prestations pres on pres.r_prestation_id = opprest.op_r_prest_id
                                INNER JOIN r_p_axe1 pax1 on pax1.r_p_axe1_id = pres.r_p_axe1
                                INNER JOIN r_activity_kpi kpiact on kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                                        AND YEAR(op_dateConso_start) = ({year} - 1)
                                        {client}
                                        {activity}
                                        AND op_status_id IN (2, 4, 6)
                                        AND opprest.op_prest_couts_valides = 1
                                GROUP BY M',
        'filters' => array(
            'year' => '{year}',
            'client' => 'AND op_cl_id = {client}',
            'activity' => ' AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    5 => array(
        'name' => 'RealizedExpensesCurrentYear',
        'displayed_name' => 'Coût interne N',
        'type' => 'bar',
        'query' => 'SELECT
                                    MONTH(op_dateConso_start) AS M,
                                    SUM(op_prest_cireel)/1000 AS Value
                                FROM
                                    operation_prestations opprest
                                        INNER JOIN
                                    operations op ON opprest.op_id = op.op_id
                                INNER JOIN r_prestations pres on pres.r_prestation_id = opprest.op_r_prest_id
                                INNER JOIN r_p_axe1 pax1 on pax1.r_p_axe1_id = pres.r_p_axe1
                                INNER JOIN r_activity_kpi kpiact on kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                                        AND YEAR(op_dateConso_start) = {year}
                                        {client}
                                        {activity}
                                        AND op_status_id IN (2, 4, 6)
                                        AND opprest.op_prest_couts_valides = 1
                                GROUP BY M',
        'filters' => array(
            'year' => '{year}',
            'client' => 'AND op_cl_id = {client}',
            'activity' => ' AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    6 => array(
        'name' => 'SoldPastYear',
        'displayed_name' => 'CA Vendu N - 1',
        'type' => 'bar',
        'query' => 'SELECT
                                MONTH(op_dateConso_start) AS M,
                                SUM(fact_prest_montant_facture_final)/1000 AS Value
                            FROM
                                factures f
                                        INNER JOIN
                                    factures_rubriques frub ON f.fact_id = frub.fact_id
                                        INNER JOIN
                                    factures_prestations fp ON frub.fact_rub_id = fp.fact_rub_id
                                        INNER JOIN
                                    operations op ON f.op_id = op.op_id
                                        INNER JOIN
                                    r_prestations pres ON pres.r_prestation_id = fp.r_prestation_id
                                        INNER JOIN
                                    r_p_axe1 pax1 ON pax1.r_p_axe1_id = pres.r_p_axe1
                                        INNER JOIN
                                    r_activity_kpi kpiact ON kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                                    AND YEAR(op_dateConso_start) = ({year} - 1)
                                    {client}
                                    {activity}
                                    AND f.fact_status_id IN (3 , 4, 5)
                                    AND op_status_id IN (2, 4, 6)
                            GROUP BY M',
        'filters' => array(
            'year' => '{year}',
            'client' => 'AND op_cl_id = {client}',
            'activity' => ' AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    7 => array(
        'name' => 'SoldCurrentYear',
        'displayed_name' => 'CA Vendu N',
        'type' => 'bar',
        'query' => 'SELECT
                                MONTH(op_dateConso_start) AS M,
                                SUM(fact_prest_montant_facture_final)/1000 AS Value
                            FROM
                                factures f
                                        INNER JOIN
                                    factures_rubriques frub ON f.fact_id = frub.fact_id
                                        INNER JOIN
                                    factures_prestations fp ON frub.fact_rub_id = fp.fact_rub_id
                                        INNER JOIN
                                    operations op ON f.op_id = op.op_id
                                        INNER JOIN
                                    r_prestations pres ON pres.r_prestation_id = fp.r_prestation_id
                                        INNER JOIN
                                    r_p_axe1 pax1 ON pax1.r_p_axe1_id = pres.r_p_axe1
                                        INNER JOIN
                                    r_activity_kpi kpiact ON kpiact.r_activity_kpi_id = pax1.r_activity_kpi_id
                                    AND YEAR(op_dateConso_start) = {year}
                                    {client}
                                    {activity}
                                    AND f.fact_status_id IN (3 , 4, 5)
                                    AND op_status_id IN (2, 4, 6)
                            GROUP BY M',
        'filters' => array(
            'year' => '{year}',
            'client' => 'AND op_cl_id = {client}',
            'activity' => ' AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
);
