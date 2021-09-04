<?php

return array(
    '2' => array(
        'name' => 'TABLEAU KPI CARNET DE COMMANDE',
        'type' => 'T',
        'filters' => array(
            'kpi_month' => array('name' => 'Mois en cours'),
            'kpi_year' => array('name' => 'Année mois en cours'),
            'activites_id' => array('name' => 'Type d\'activité'),
            'status_taux_id' => array('name' => 'Statut avec taux de conversion estimé'),
        ),
        'description' => 'Description tableau kpi carnet de commande',
    ),
    '3' => array(
        'name' => 'GRAPH KPI ACTIVITE',
        'type' => 'G',
        'filters' => array(
            'client' => array('name' => 'Client'),
            'activites_id' => array('name' => 'Type d\'activité'),
        ),
        'description' => 'Description graph kpi activité',
    ),
    '1' => array(
        'name' => 'TABLEAU KPI ACTIVITE',
        'type' => 'T',
        'filters' => array(
            'kpi_month' => array('name' => 'Mois en cours'),
            'kpi_year' => array('name' => 'Année mois en cours'),
            'activites_id' => array('name' => 'Type d\'activité'),
        ),
        'description' => 'Description tableau kpi activité',
    ),
    '5' => array(
        'name' => 'GRAPH KPI PRODUIT ANNEE',
        'type' => 'G',
        'filters' => array(
            'kpi_month' => array('name' => 'Mois en cours'),
            'kpi_year' => array('name' => 'Année mois en cours'),
        ),
        'description' => 'Description graph kpi produit annee',
    ),
    '4' => array(
        'name' => 'TABLEAU KPI SUIVI ABONNEMENTS PRODUITS',
        'type' => 'T',
        'filters' => array(
            'kpi_month' => array('name' => 'Mois en cours'),
            'kpi_year' => array('name' => 'Année mois en cours'),
        ),
        'description' => 'Description kpi suivi abonnements produits',
    ),
);
