<?php

return array(
    'ADMINISTRATION_AXES_AXE1' => array(
        'axe_name' => 'Activité',
        'axe_table_name' => 'r_p_axe1',
        'axe_mapped_class_name' => 'RPAxe1',
        'activity_field_name' => 'r_p_axe1_actif',
        'fields_to_select' => array(
            'Code section' => 'r_p_axe1_id',
            'Tag de la section' => 'r_p_axe1_tag',
            'Intitulé de la section' => 'r_p_axe1_libelle',
            'Activation' => 'r_p_axe1_actif',
        ),
        'additional_fields_by_joins' => array(
            array(
                'table_to_join_with' => array('kpiact' => 'r_activity_kpi'),
                'join_condition' => 'r_p_axe1.r_activity_kpi_id=kpiact.r_activity_kpi_id',
                'fields_to_select' => array('KPI activité' => 'kpiact.r_activity_kpi_libelle'),
                'join_type' => Zend_Db_Select::LEFT_JOIN,
            ),
        ),
        'additional_inputs' => array(
            array(
                'field_label' => 'KPI activité',
                'field_type' => 'select_from_table',
                'field_setting' => array(
                    'table_to_select_from' => 'r_activity_kpi',
                    'attributes' => array('id ' => 'id_r_activity_kpi_id', 'name' => 'r_activity_kpi_id', 'class' => 'unit size2of3 form-select lastUnit'),
                    'option_mapper' => array('name' => 'r_activity_kpi_libelle', 'value' => 'r_activity_kpi_id'),
                    'parameters' => array('clause_order' => 'r_activity_kpi_id'),
                ),
                'default_value' => RActivityKpi::KPI_ACTIVITY_DIGITAL,
            ),
        ),
        'fields_classes' => array(
            'r_p_axe1_id' => 'axe_identifiant',
            'r_p_axe1_tag' => 'axe_tag',
            'r_p_axe1_libelle' => 'axe_libelle',
            'r_p_axe1_actif' => 'axe_activity',
        ),
    ),
    'ADMINISTRATION_AXES_AXE2' => array(
        'axe_name' => 'Axe 2',
        'axe_table_name' => 'r_p_axe2',
        'axe_mapped_class_name' => 'RPAxe2',
        'activity_field_name' => 'r_p_axe2_actif',
        'fields_to_select' => array(
            'Code section' => 'r_p_axe2_id',
            'Tag de la section' => 'r_p_axe2_tag',
            'Intitulé de la section' => 'r_p_axe2_libelle',
            'Activation' => 'r_p_axe2_actif',
        ),
        'fields_classes' => array(
            'r_p_axe2_id' => 'axe_identifiant',
            'r_p_axe2_tag' => 'axe_tag',
            'r_p_axe2_libelle' => 'axe_libelle',
            'r_p_axe2_actif' => 'axe_activity',
        ),
    ),
    'ADMINISTRATION_AXES_AXE3' => array(
        'axe_name' => 'Famille',
        'axe_table_name' => 'r_p_axe3',
        'axe_mapped_class_name' => 'RPAxe3',
        'activity_field_name' => 'r_p_axe3_actif',
        'fields_to_select' => array(
            'Code section' => 'r_p_axe3_id',
            'Tag de la section' => 'r_p_axe3_tag',
            'Intitulé de la section' => 'r_p_axe3_libelle',
            'Activation' => 'r_p_axe3_actif',
        ),
        'fields_classes' => array(
            'r_p_axe3_id' => 'axe_identifiant',
            'r_p_axe3_tag' => 'axe_tag',
            'r_p_axe3_libelle' => 'axe_libelle',
            'r_p_axe3_actif' => 'axe_activity',
        ),
    ),
    'ADMINISTRATION_AXES_AXE4' => array(
        'axe_name' => 'Catégorie',
        'axe_table_name' => 'r_p_axe4',
        'axe_mapped_class_name' => 'RPAxe4',
        'activity_field_name' => 'r_p_axe4_actif',
        'fields_to_select' => array(
            'Code section' => 'r_p_axe4_id',
            'Tag de la section' => 'r_p_axe4_tag',
            'Intitulé de la section' => 'r_p_axe4_libelle',
            'Activation' => 'r_p_axe4_actif',
        ),
        'fields_classes' => array(
            'r_p_axe4_id' => 'axe_identifiant',
            'r_p_axe4_tag' => 'axe_tag',
            'r_p_axe4_libelle' => 'axe_libelle',
            'r_p_axe4_actif' => 'axe_activity',
        ),
    ),
    'ADMINISTRATION_AXES_AXE5' => array(
        'axe_name' => 'Axe 5',
        'axe_table_name' => 'r_p_axe5',
        'axe_mapped_class_name' => 'RPAxe5',
        'activity_field_name' => 'r_p_axe5_actif',
        'fields_to_select' => array(
            'Code section' => 'r_p_axe5_id',
            'Tag de la section' => 'r_p_axe5_tag',
            'Intitulé de la section' => 'r_p_axe5_libelle',
            'Activation' => 'r_p_axe5_actif',
        ),
        'fields_classes' => array(
            'r_p_axe5_id' => 'axe_identifiant',
            'r_p_axe5_tag' => 'axe_tag',
            'r_p_axe5_libelle' => 'axe_libelle',
            'r_p_axe5_actif' => 'axe_activity',
        ),
    )
);
