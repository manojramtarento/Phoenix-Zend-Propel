<?php

return array(
    1 => array(
        'name' => 'NbOpCurrentMonth',
        'displayed_name' => 'Nb op mois en cours',
        'type' => '',
        'query' => 'SELECT
                                    tmp.r_activity_kpi_libelle AS Id,
                                    COUNT(tmp.op_id) AS Value
                                FROM
                                    (SELECT
                                        kpiact.r_activity_kpi_libelle,
                                            op.op_id
                                    FROM
                                        operations op
                                    INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                        AND lopop.is_linked = 1
                                    INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                    LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                    LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                    INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                        OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                    WHERE
                                        op.op_status_id IN (2 , 4, 6)
                                        AND YEAR(op_dateConso_start) = {year}
                                        {month}
                                        {activity}
                                    GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'month' => 'AND MONTH(op_dateConso_start) = {month}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    2 => array(
        'name' => 'NbOpCurrentMonthLastYear',
        'displayed_name' => 'Nb op mois Année N - 1',
        'type' => '',
        'query' => 'SELECT
                                    tmp.r_activity_kpi_libelle AS Id,
                                    COUNT(tmp.op_id) AS Value
                                FROM
                                    (SELECT
                                        kpiact.r_activity_kpi_libelle,
                                            op.op_id
                                    FROM
                                        operations op
                                    INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                        AND lopop.is_linked = 1
                                    INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                    LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                    LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                    INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                        OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                    WHERE
                                        op.op_status_id IN (2 , 4, 6)
                                        AND YEAR(op_dateConso_start) = ({year} - 1)
                                        {month}
                                        {activity}
                                    GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'month' => 'AND MONTH(op_dateConso_start) = {month}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    3 => array(
        'name' => 'NbOpCurrentYear',
        'displayed_name' => 'Nb op année N',
        'type' => '',
        'query' => 'SELECT
                                    tmp.r_activity_kpi_libelle AS Id,
                                    COUNT(tmp.op_id) AS Value
                                FROM
                                    (SELECT
                                        kpiact.r_activity_kpi_libelle,
                                            op.op_id
                                    FROM
                                        operations op
                                    INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                        AND lopop.is_linked = 1
                                    INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                    LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                    LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                    INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                        OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                    WHERE
                                        op.op_status_id IN (2, 4, 6)
                                        AND YEAR(op_dateConso_start) = {year}
                                        {activity}
                                    GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    4 => array(
        'name' => 'NbOpPastYear',
        'displayed_name' => 'Nb op année N - 1',
        'type' => '',
        'query' => 'SELECT
                                    tmp.r_activity_kpi_libelle AS Id,
                                    COUNT(tmp.op_id) AS Value
                                FROM
                                    (SELECT
                                        kpiact.r_activity_kpi_libelle,
                                        op.op_id
                                    FROM
                                        operations op
                                    INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                        AND lopop.is_linked = 1
                                    INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                    LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                    LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                    INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                        OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                    WHERE
                                        op.op_status_id IN (2, 4, 6)
                                        AND YEAR(op_dateConso_start) = ({year} - 1)
                                        {activity}
                                    GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    5 => array(
        'name' => 'SoldCurrentMonth',
        'displayed_name' => 'Charge vendue mois en cours',
        'type' => '',
        'query' => 'SELECT
                                    tmp.r_activity_kpi_libelle AS Id,
                                    SUM(fact_prest_montant_facture_final) AS Value
                                FROM
                                    (SELECT
                                        kpiact.r_activity_kpi_libelle,
                                        op.op_id,
                                        kpiact.r_activity_kpi_id
                                    FROM
                                        operations op
                                    INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                        AND lopop.is_linked = 1
                                    INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                    LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                    LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                    INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                        OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                        WHERE
                                        op.op_status_id IN (2, 4, 6)
                                        AND YEAR(op_dateConso_start) = {year}
                                        {month}
                                        {activity}
                                    GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                        INNER JOIN
                                    r_p_axe1 pax1 ON tmp.r_activity_kpi_id = pax1.r_activity_kpi_id
                                        INNER JOIN
                                    r_prestations pres ON pres.r_p_axe1 = pax1.r_p_axe1_id
                                        INNER JOIN
                                    factures f ON f.op_id = tmp.op_id AND f.fact_status_id IN (3 , 4, 5)
                                        INNER JOIN
                                    factures_rubriques frub ON frub.fact_id = f.fact_id
                                        INNER JOIN
                                    factures_prestations fp ON fp.r_prestation_id = pres.r_prestation_id
                                        AND fp.fact_rub_id = frub.fact_rub_id
                                GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'month' => 'AND MONTH(op_dateConso_start) = {month}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    6 => array(
        'name' => 'SoldCurrentMonthLastYear',
        'displayed_name' => 'Charge vendue mois année N - 1',
        'type' => '',
        'query' => 'SELECT
                                    tmp.r_activity_kpi_libelle AS Id,
                                    SUM(fact_prest_montant_facture_final) AS Value
                                FROM
                                    (SELECT
                                        kpiact.r_activity_kpi_libelle,
                                        op.op_id,
                                        kpiact.r_activity_kpi_id
                                    FROM
                                        operations op
                                    INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                        AND lopop.is_linked = 1
                                    INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                    LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                    LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                    INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                        OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                        WHERE
                                        op.op_status_id IN (2, 4, 6)
                                        AND YEAR(op_dateConso_start) = ({year} - 1)
                                        {month}
                                        {activity}
                                    GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                        INNER JOIN
                                    r_p_axe1 pax1 ON tmp.r_activity_kpi_id = pax1.r_activity_kpi_id
                                        INNER JOIN
                                    r_prestations pres ON pres.r_p_axe1 = pax1.r_p_axe1_id
                                        INNER JOIN
                                    factures f ON f.op_id = tmp.op_id AND f.fact_status_id IN (3 , 4, 5)
                                        INNER JOIN
                                    factures_rubriques frub ON frub.fact_id = f.fact_id
                                        INNER JOIN
                                    factures_prestations fp ON fp.r_prestation_id = pres.r_prestation_id
                                        AND fp.fact_rub_id = frub.fact_rub_id
                                GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'month' => 'AND MONTH(op_dateConso_start) = {month}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    7 => array(
        'name' => 'SoldCurrentYear',
        'displayed_name' => 'Charge vendue année N',
        'type' => '',
        'query' => 'SELECT
                                    tmp.r_activity_kpi_libelle AS Id,
                                    SUM(fact_prest_montant_facture_final) AS Value
                                FROM
                                    (SELECT
                                        kpiact.r_activity_kpi_libelle,
                                        op.op_id,
                                        kpiact.r_activity_kpi_id
                                    FROM
                                        operations op
                                    INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                        AND lopop.is_linked = 1
                                    INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                    LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                    LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                    INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                        OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                        WHERE
                                        op.op_status_id IN (2, 4, 6)
                                        AND YEAR(op_dateConso_start) = {year}
                                        {activity}
                                    GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                        INNER JOIN
                                    r_p_axe1 pax1 ON tmp.r_activity_kpi_id = pax1.r_activity_kpi_id
                                        INNER JOIN
                                    r_prestations pres ON pres.r_p_axe1 = pax1.r_p_axe1_id
                                        INNER JOIN
                                    factures f ON f.op_id = tmp.op_id AND f.fact_status_id IN (3 , 4, 5)
                                        INNER JOIN
                                    factures_rubriques frub ON frub.fact_id = f.fact_id
                                        INNER JOIN
                                    factures_prestations fp ON fp.r_prestation_id = pres.r_prestation_id
                                        AND fp.fact_rub_id = frub.fact_rub_id
                                GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    8 => array(
        'name' => 'SoldPastYear',
        'displayed_name' => 'Charge vendue année N - 1',
        'type' => '',
        'query' => 'SELECT
                                    tmp.r_activity_kpi_libelle AS Id,
                                    SUM(fact_prest_montant_facture_final) AS Value
                                FROM
                                    (SELECT
                                        kpiact.r_activity_kpi_libelle,
                                        op.op_id,
                                        kpiact.r_activity_kpi_id
                                    FROM
                                        operations op
                                    INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                        AND lopop.is_linked = 1
                                    INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                    LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                    LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                    INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                        OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                        WHERE
                                        op.op_status_id IN (2, 4, 6)
                                        AND YEAR(op_dateConso_start) = ({year} - 1)
                                        {activity}
                                    GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                        INNER JOIN
                                    r_p_axe1 pax1 ON tmp.r_activity_kpi_id = pax1.r_activity_kpi_id
                                        INNER JOIN
                                    r_prestations pres ON pres.r_p_axe1 = pax1.r_p_axe1_id
                                        INNER JOIN
                                    factures f ON f.op_id = tmp.op_id AND f.fact_status_id IN (3 , 4, 5)
                                        INNER JOIN
                                    factures_rubriques frub ON frub.fact_id = f.fact_id
                                        INNER JOIN
                                    factures_prestations fp ON fp.r_prestation_id = pres.r_prestation_id
                                        AND fp.fact_rub_id = frub.fact_rub_id
                                GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    9 => array(
        'name' => 'RealizedCurrentMonth',
        'displayed_name' => 'Charge réalisée mois en cours',
        'type' => '',
        'query' => 'SELECT
                                        tmp.r_activity_kpi_libelle AS Id,
                                        SUM(op_prest_cireel) AS Value
                                    FROM
                                        (SELECT
                                            kpiact.r_activity_kpi_libelle,
                                            op.op_id,
                                            kpiact.r_activity_kpi_id
                                        FROM
                                            operations op
                                        INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                            AND lopop.is_linked = 1
                                        INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                        LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                        LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                        INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                            OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                            WHERE
                                                op.op_status_id IN (2, 4, 6)
                                                AND YEAR(op_dateConso_start) = {year}
                                                {month}
                                                {activity}
                                        GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                            INNER JOIN
                                        r_p_axe1 pax1  ON tmp.r_activity_kpi_id = pax1.r_activity_kpi_id
                                            INNER JOIN
                                        r_prestations pres ON pres.r_p_axe1 = pax1.r_p_axe1_id
                                            INNER JOIN
                                            operation_prestations opprest ON pres.r_prestation_id = opprest.op_r_prest_id AND opprest.op_id = tmp.op_id
                                            AND opprest.op_prest_couts_valides = 1
                                    GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'month' => 'AND MONTH(op_dateConso_start) = {month}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    10 => array(
        'name' => 'RealizedChargeCurrentMonthLastYear',
        'displayed_name' => 'Charge réalisée mois année',
        'type' => '',
        'query' => 'SELECT
                                        tmp.r_activity_kpi_libelle AS Id,
                                        SUM(op_prest_cireel) AS Value
                                    FROM
                                        (SELECT
                                            kpiact.r_activity_kpi_libelle,
                                            op.op_id,
                                            kpiact.r_activity_kpi_id
                                        FROM
                                            operations op
                                        INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                            AND lopop.is_linked = 1
                                        INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                        LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                        LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                        INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                            OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                            WHERE
                                                op.op_status_id IN (2, 4, 6)
                                                AND YEAR(op_dateConso_start) = ({year} - 1)
                                                {month}
                                                {activity}
                                        GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                            INNER JOIN
                                        r_p_axe1 pax1  ON tmp.r_activity_kpi_id = pax1.r_activity_kpi_id
                                            INNER JOIN
                                        r_prestations pres ON pres.r_p_axe1 = pax1.r_p_axe1_id
                                            INNER JOIN
                                            operation_prestations opprest ON pres.r_prestation_id = opprest.op_r_prest_id AND opprest.op_id = tmp.op_id
                                            AND opprest.op_prest_couts_valides = 1
                                    GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'month' => 'AND MONTH(op_dateConso_start) = {month}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    11 => array(
        'name' => 'RealizedCurrentYear',
        'displayed_name' => 'Charge réalisée année N',
        'type' => '',
        'query' => 'SELECT
                                        tmp.r_activity_kpi_libelle AS Id,
                                        SUM(op_prest_cireel) AS Value
                                    FROM
                                        (SELECT
                                            kpiact.r_activity_kpi_libelle,
                                                op.op_id,
                                                kpiact.r_activity_kpi_id
                                        FROM
                                            operations op
                                        INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                            AND lopop.is_linked = 1
                                        INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                        LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                        LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                        INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                            OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                            WHERE
                                                op.op_status_id IN (2, 4, 6)
                                                AND YEAR(op_dateConso_start) = {year}
                                                {activity}
                                        GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                            INNER JOIN
                                        r_p_axe1 pax1  ON tmp.r_activity_kpi_id = pax1.r_activity_kpi_id
                                            INNER JOIN
                                        r_prestations pres ON pres.r_p_axe1 = pax1.r_p_axe1_id
                                            INNER JOIN
                                            operation_prestations opprest ON pres.r_prestation_id = opprest.op_r_prest_id AND opprest.op_id = tmp.op_id
                                            AND opprest.op_prest_couts_valides = 1
                                    GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
    12 => array(
        'name' => 'RealizedPastYear',
        'displayed_name' => 'Charge réalisée année N - 1',
        'type' => '',
        'query' => 'SELECT
                                        tmp.r_activity_kpi_libelle AS Id,
                                        SUM(op_prest_cireel) AS Value
                                    FROM
                                        (SELECT
                                            kpiact.r_activity_kpi_libelle,
                                            op.op_id,
                                            kpiact.r_activity_kpi_id
                                        FROM
                                            operations op
                                        INNER JOIN lnk_operation_option lopop ON lopop.op_id = op.op_id
                                            AND lopop.is_linked = 1
                                        INNER JOIN r_operation_options ropop ON ropop.r_op_option_id = lopop.op_opt_id
                                        LEFT JOIN r_operation_options ropop_parent ON ropop_parent.r_op_option_id = ropop.r_op_option_parent
                                        LEFT JOIN r_operation_options ropop_parent_2 ON ropop_parent_2.r_op_option_id = ropop_parent.r_op_option_parent
                                        INNER JOIN r_activity_kpi kpiact ON (kpiact.r_activity_kpi_id = ropop_parent.r_operation_option_r_activity_kpi_id
                                            OR kpiact.r_activity_kpi_id = ropop_parent_2.r_operation_option_r_activity_kpi_id)
                                            WHERE
                                                op.op_status_id IN (2, 4, 6)
                                                AND YEAR(op_dateConso_start) = ({year} - 1)
                                                {activity}
                                        GROUP BY kpiact.r_activity_kpi_libelle , op.op_id) tmp
                                            INNER JOIN
                                        r_p_axe1 pax1  ON tmp.r_activity_kpi_id = pax1.r_activity_kpi_id
                                            INNER JOIN
                                        r_prestations pres ON pres.r_p_axe1 = pax1.r_p_axe1_id
                                            INNER JOIN
                                            operation_prestations opprest ON pres.r_prestation_id = opprest.op_r_prest_id AND opprest.op_id = tmp.op_id
                                            AND opprest.op_prest_couts_valides = 1
                                    GROUP BY Id',
        'filters' => array(
            'year' => '{year}',
            'activity' => 'AND kpiact.r_activity_kpi_id = {activity}',
        )
    ),
);
