<?php

return array(
    'REPORTING_PILOTAGE_INDICATEUR_CA' => array(
        'name' => 'Indicateur CA',
        'display_mode' => array(
            1 => 'Client',
            2 => 'DC',
            3 => 'Opération',
            4 => 'DC, Client',
            5 => 'Client, Opération'),
        'filter_date' => true,
        'queries' => array(
            1 => array(
                // 32655 : Migration phoenix/migration des modules
                'query' => 'select cl_libelle AS \'Client\', sum(ca_facture_ht) AS \'CA HT\', sum(ca_facture_ttc) AS \'CA TTC\'
                from Indicateur_21
                {{date_critera}}
                group by cl_libelle',
                'date_to_check' => 'fact_date',
                'default_order_by' => 'cl_libelle',
                'default_order_sens' => 'ASC'
            ),
            2 => array(
                // 32655 : Migration phoenix/migration des modules
                'query' => 'select dc AS \'DC\', sum(ca_facture_ht) AS \'CA HT\', sum(ca_facture_ttc) AS \'CA TTC\'
                from Indicateur_21
                {{date_critera}}
                group by dc',
                'date_to_check' => 'fact_date',
                'default_order_by' => 'dc',
                'default_order_sens' => 'ASC'
            ),
            3 => array(
                // 32655 : Migration phoenix/migration des modules
                'query' => 'select op_number AS \'Numéro d\'\'opération\', op_libelle AS \'Libellé d\'\'opération\', sum(ca_facture_ht) AS \'CA HT\', sum(ca_facture_ttc) AS \'CA TTC\'
                from Indicateur_21
                {{date_critera}}
                group by op_number, op_libelle',
                'date_to_check' => 'fact_date',
                'default_order_by' => 'op_number, op_libelle',
                'default_order_sens' => 'ASC'
            ),
            4 => array(
                // 32655 : Migration phoenix/migration des modules
                'query' => 'select dc AS \'DC\', cl_libelle AS \'Client\', sum(ca_facture_ht) AS \'CA HT\', sum(ca_facture_ttc) AS \'CA TTC\'
                 from Indicateur_21
                 {{date_critera}}
                 group by dc, cl_libelle',
                'date_to_check' => 'fact_date',
                'default_order_by' => 'dc, cl_libelle',
                'default_order_sens' => 'ASC'
            ),
            5 => array(
                // 32655 : Migration phoenix/migration des modules
                'query' => 'select cl_libelle AS \'Client\', op_number AS \'Numéro d\'\'opération\', op_libelle AS \'Libellé d\'\'opération\', sum(ca_facture_ht) AS \'CA HT\', sum(ca_facture_ttc) AS \'CA TTC\'
                from Indicateur_21
                {{date_critera}}
                group by cl_libelle, op_number, op_libelle',
                'date_to_check' => 'fact_date',
                'default_order_by' => 'cl_libelle, op_number, op_libelle',
                'default_order_sens' => 'ASC'
            ),
        )),
    'REPORTING_PILOTAGE_INDICATEUR_1_1' => array(
        'name' => 'Devis acceptés pour lesquels un nouveau compte client a été créé',
        'display_mode' => array(
            1 => 'Standard'
        ),
        'filter_date' => true,
        'queries' => array(
            1 => array(
                'query' => 'select
                                            cl_libelle AS \'Client\',
                                            op_number AS \'Numéro d\'\'opération\',
                                            op_libelle AS \'Intitulé d\'\'Opération\',
                                            act_libelle AS \'Métier\',
                                            ot_libelle AS \'Mécanique\',
                                            ost_libelle AS \'Type d\'\'offre\',
                                            dc AS \'Directeur de Clientèle\',
                                            cp AS \'Gestionnaire client\',
                                            DATE_FORMAT(date_accepte,\'%d/%m/%Y\') AS \'Date de signature du devis\',
                                            os_libelle AS \'Libellé du statut en cours\',
                                            montant_ttc AS \'Montant\',
                                            is_reactivated AS \'Réactivé\'
                from Indicateur_1_1
                {{date_critera}}',
                'date_to_check' => 'date_accepte',
                'date_to_check_2' => 'date_first_acceptation',
                'default_order_by' => 'is_reactivated',
                'default_order_sens' => 'ASC'
            ),
        ),
    ),
    'REPORTING_PILOTAGE_INDICATEUR_17' => array(
        'name' => 'Indicateur devis accepté sans facture',
        'display_mode' => array(
            1 => 'Standard'
        ),
        'filter_date' => false,
        'queries' => array(
            1 => array(
                'query' => 'select DATE_FORMAT(pfd_date_planif,\'%d/%m/%Y\') AS \'Date de demande facture\',
                                                op_number AS \'Numéro d\'\'opération\',
                                                act_libelle AS \'Métier\',
                                                ot_libelle AS \'Activité\',
                                                ost_libelle AS \'Type OP\',
                                                op_libelle AS \'Intitulé OP\',
                                                r_fact_type_libelle AS \'Type Facture\',
                                                r_plan_fact_periode_libelle AS \'Périodicité facturation\',
                                                r_pfpt_libelle AS \'Type de facturation\',
                                                cp AS \'Gestionnaire Client\',
                                                fact_opt_echeance_libelle AS \'Echéance de facturation\'
                from Indicateur_17
                {{date_critera}}',
            ),
        ),
    ),
);

