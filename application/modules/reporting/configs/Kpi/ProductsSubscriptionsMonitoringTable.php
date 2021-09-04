<?php

return array(
    1 => array(
        'name' => 'CACurrentYear',
        'displayed_name' => 'Cumul charge vendue',
        'type' => 'bar',
        'query' => 'SELECT
                            r_op_option_libelle AS Id,
                            SUM(fact_prest_montant_facture_final) AS Value
                        FROM
                            factures f
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
                        GROUP BY r_op_option_libelle',
        'filters' => array(
            'year' => '{year}',
        )
    ),
    2 => array(
        'name' => 'CAPastYear',
        'displayed_name' => 'Cumul charge vendue année N-1',
        'type' => 'bar',
        'query' => 'SELECT
                            r_op_option_libelle AS Id,
                            SUM(fact_prest_montant_facture_final) AS Value
                        FROM
                            factures f
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
                        GROUP BY r_op_option_libelle',
        'filters' => array(
            'year' => '{year}',
        )
    ),
    3 => array(
        'name' => 'CACurrentMonth',
        'displayed_name' => 'Charge vendue mois en cours',
        'type' => 'bar',
        'query' => 'SELECT
                            r_op_option_libelle AS Id,
                            SUM(fact_prest_montant_facture_final) AS Value
                        FROM
                            factures f
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
                        GROUP BY r_op_option_libelle',
        'filters' => array(
            'year' => '{year}',
            'month' => 'AND MONTH(f.fact_date) = {month}',
        )
    ),
    4 => array(
        'name' => 'CAPastMonth',
        'displayed_name' => 'Charge vendue mois année N-1',
        'type' => 'bar',
        'query' => 'SELECT
                            r_op_option_libelle AS Id,
                            SUM(fact_prest_montant_facture_final) AS Value
                        FROM
                            factures f
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
                        GROUP BY r_op_option_libelle',
        'filters' => array(
            'year' => '{year}',
            'month' => 'AND MONTH(f.fact_date) = {month}',
        )
    ),
);
