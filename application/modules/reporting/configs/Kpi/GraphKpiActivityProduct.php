<?php

return array(
    1 => array(
        'name' => 'CACurrentMonth',
        'displayed_name' => 'CA mois en cours',
        'type' => 'bar',
        'query' => 'SELECT
                            r_op_option_libelle AS Id,
                            SUM(fact_prest_montant_facture_final) / 1000 AS Value
                        FROM
                            factures f
                                INNER JOIN
                                operations op ON op.op_id = f.op_id
                                INNER JOIN
                                factures_rubriques frub ON frub.fact_id = f.fact_id
                                INNER JOIN
                            factures_prestations fp ON fp.fact_rub_id = frub.fact_rub_id
                                INNER JOIN
                            r_operation_options_tpl ropttpl ON ropttpl.r_prest_id = fp.r_prestation_id
                                INNER JOIN
                            r_operation_options ropt ON ropttpl.r_opt_id = ropt.r_op_option_id
                        WHERE
                            r_op_option_parent = ' . ROperationOptions::OPT_PRODUIT . '
                                AND YEAR(f.fact_date) = {year}
                                {month}
                                AND f.fact_status_id IN (3 , 4, 5)
                                AND op.op_status_id IN (2, 4, 6)
                        GROUP BY r_op_option_libelle',
        'filters' => array(
            'year' => '{year}',
            'month' => 'AND MONTH(f.fact_date) = {month}',
        )
    ),
    2 => array(
        'name' => 'CACurrentYear',
        'displayed_name' => 'CA cumulé année N',
        'type' => 'bar',
        'query' => 'SELECT
                            r_op_option_libelle AS Id,
                            SUM(fact_prest_montant_facture_final) / 1000 AS Value
                        FROM
                            factures f
                                INNER JOIN
                                operations op ON op.op_id = f.op_id
                                INNER JOIN
                                factures_rubriques frub ON frub.fact_id = f.fact_id
                                INNER JOIN
                            factures_prestations fp ON fp.fact_rub_id = frub.fact_rub_id
                                INNER JOIN
                            r_operation_options_tpl ropttpl ON ropttpl.r_prest_id = fp.r_prestation_id
                                INNER JOIN
                            r_operation_options ropt ON ropttpl.r_opt_id = ropt.r_op_option_id
                        WHERE
                            r_op_option_parent = ' . ROperationOptions::OPT_PRODUIT . '
                                AND YEAR(f.fact_date) = {year}
                                AND f.fact_status_id IN (3 , 4, 5)
                                AND op.op_status_id IN (2, 4, 6)
                        GROUP BY r_op_option_libelle',
        'filters' => array(
            'year' => '{year}',
        )
    ),
    3 => array(
        'name' => 'CAPastMonth',
        'displayed_name' => 'CA mois année N-1',
        'type' => 'bar',
        'query' => 'SELECT
                            r_op_option_libelle AS Id,
                            SUM(fact_prest_montant_facture_final) / 1000 AS Value
                        FROM
                            factures f
                                INNER JOIN
                                operations op ON op.op_id = f.op_id
                                INNER JOIN
                                factures_rubriques frub ON frub.fact_id = f.fact_id
                                INNER JOIN
                            factures_prestations fp ON fp.fact_rub_id = frub.fact_rub_id
                                INNER JOIN
                            r_operation_options_tpl ropttpl ON ropttpl.r_prest_id = fp.r_prestation_id
                                INNER JOIN
                            r_operation_options ropt ON ropttpl.r_opt_id = ropt.r_op_option_id
                        WHERE
                            r_op_option_parent = ' . ROperationOptions::OPT_PRODUIT . '
                                AND YEAR(f.fact_date) = ({year} - 1)
                                {month}
                                AND f.fact_status_id IN (3 , 4, 5)
                                AND op.op_status_id IN (2, 4, 6)
                        GROUP BY r_op_option_libelle',
        'filters' => array(
            'year' => '{year}',
            'month' => 'AND MONTH(f.fact_date) = {month}',
        )
    ),
    4 => array(
        'name' => 'CAPastYear',
        'displayed_name' => 'CA cumulé année N-1',
        'type' => 'bar',
        'query' => 'SELECT
                            r_op_option_libelle AS Id,
                            SUM(fact_prest_montant_facture_final) / 1000 AS Value
                        FROM
                            factures f
                                INNER JOIN
                                operations op ON op.op_id = f.op_id
                                INNER JOIN
                                factures_rubriques frub ON frub.fact_id = f.fact_id
                                INNER JOIN
                            factures_prestations fp ON fp.fact_rub_id = frub.fact_rub_id
                                INNER JOIN
                            r_operation_options_tpl ropttpl ON ropttpl.r_prest_id = fp.r_prestation_id
                                INNER JOIN
                            r_operation_options ropt ON ropttpl.r_opt_id = ropt.r_op_option_id
                        WHERE
                            r_op_option_parent = ' . ROperationOptions::OPT_PRODUIT . '
                                AND YEAR(f.fact_date) = ({year} - 1)
                                AND f.fact_status_id IN (3 , 4, 5)
                                AND op.op_status_id IN (2, 4, 6)
                        GROUP BY r_op_option_libelle',
        'filters' => array(
            'year' => '{year}',
        )
    ),
    5 => array(
        'name' => 'NbOpCurrentYear',
        'displayed_name' => 'Nombre d\'op année N',
        'type' => 'bar',
        'axes' => 'y2',
        'query' => 'SELECT
						r_op_option_libelle AS Id, count(op.op_id) AS Value
                        FROM
                            operations op
                        INNER JOIN lnk_operation_option lnkopopt ON lnkopopt.op_id = op.op_id
                        INNER JOIN r_operation_options ropt ON lnkopopt.op_opt_id = ropt.r_op_option_id
                        WHERE
                            r_op_option_parent = ' . ROperationOptions::OPT_PRODUIT . '
                            AND op_status_id IN (2, 4, 6)
                            AND YEAR(op_stamp_start) = {year}
                    GROUP BY r_op_option_libelle',
        'filters' => array(
            'year' => '{year}',
        )
    ),
    6 => array(
        'name' => 'NbOpPastYear',
        'displayed_name' => 'Nombre d\'op année N-1',
        'type' => 'bar',
        'axes' => 'y2',
        'query' => 'SELECT
						r_op_option_libelle AS Id, count(op.op_id) AS Value
                        FROM
                            operations op
                        INNER JOIN lnk_operation_option lnkopopt ON lnkopopt.op_id = op.op_id
                        INNER JOIN r_operation_options ropt ON lnkopopt.op_opt_id = ropt.r_op_option_id
                        WHERE
                            r_op_option_parent = ' . ROperationOptions::OPT_PRODUIT . '
                            AND op_status_id IN (2, 4, 6)
                            AND YEAR(op_stamp_start) = {year} - 1
                    GROUP BY r_op_option_libelle',
        'filters' => array(
            'year' => '{year}',
        )
    ),
);
