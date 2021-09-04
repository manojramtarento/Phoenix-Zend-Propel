<?php

return array(
    'select_all_deselect_all_label' => 'Sélectionner tout / Désélectionner tout',
    'operation_project_complexity' => 'Complexité de projet',
    'all_project_complexities' => 'Toutes complexités de projets',
    'label_all_businesses' => 'Tous métiers',
    'label_all_catagories' => 'Toutes catégories',
    'label_all_mecanics' => 'Toutes mécaniques',
    'lable_all_status' => 'Tous statuts',
    'terminology_selection_label' => 'Choix de la terminologie',
    'option_required_for_operation_type' => 'Une valeur doit être choisie pour l\'option "%s"',
    'unallowed_user_to_switch_operation_status' => 'Vous n\'êtes pas autorisé à passer l\'opération au statut "%s"',
    'label_accepted_status' => 'Accepté',
    'label_balanced_status' => 'Soldé',
    'label_completed_status' => 'Clôturé',
    'message_operation_must_be_accpeted_or_completed' => 'L\'opération doit être au status accepté ou clôturé',
    'message_bad_operation_status_to_complete_operation' => 'Le statut actuel doit être "soldé", pour pouvoir clôturer l\'opération',
    'label_detached_options_groups' => 'Groupes d\'options détachées',
    'label_service_name' => 'Nom de la prestation',
    'adding_r_operation_option_related_services_success_message' => 'L\'option choisie ainsi que les prestations liées ont été ajoutées avec succès au devis',
    'gedelog_repository_change_warning_message' => 'Vous venez de demander un changement d\'entrepôt sur l\'opération, vous devez contacter les services logistique des entrepôts pour la gestion du déménagement de l\'opération',
    'adding_option_related_services_label' => 'Ajout des prestations associées à l\'option',
    'only_one_option_required_for_operation_type' => 'Une seule valeur doit être choisie pour l\'option "%s"',
    'option_related_services_label' => 'Prestations liées à l\'options',
    'operation_options_removal_information_message_first_line' => 'Ci-dessous la liste des prestations rattachées à l\'option.',
    'operation_options_removal_information_message_second_line' => 'Supprimez, ajoutez ou modifiez les prestations dans l\'onglet « Prestations »',
    'option_required_for_operation_type' => 'Une valeur doit être choisie pour l\'option "%s"',
    'error_operation_universe_is_mandatory_on_operation_creation' => 'L\'univers de l\'opération doit être renseigné',
    'error_operation_participation_media_is_mandatory_on_operation_creation' => 'Le média de participation doit être renseigné',
    'error_operation_mecanic_is_mandatory_on_operation_creation' => 'La mécanique de l\'opération doit être renseignée',
    'error_operation_business_is_mandatory_on_operation_creation' => 'Le métier de l\'opération doit être renseigné',
    'error_operation_category_is_mandatory_on_operation_creation' => 'La catégorie de l\'opération doit être renseignée',
    'unallowed_operation_universe_change' => 'L\'univers de l\'opération ne peut être changée hors statut "en cours"',
    'unallowed_operation_participation_media_change' => 'Le média de participation de l\'opération ne peut être changée hors statut "en cours"',
    'label_customer_documents_language' => 'Langue documents client',
    'message_no_template_used' => 'Aucun template utilisé',
    'message_deleted_template' => 'Template supprimé',
    'option_required_for_operation_type' => 'Une valeur doit être choisie pour l\'option "%s"',
    'label_reward_type' => 'Type de prime',
    'label_reward_currency' => 'Devise prime',
    'label_reward_country' => 'Pays prime',
    'label_rewarded_countries' => 'Pays récompensés',
    'view_more' => 'Afficher plus',
    'label_fix_amount' => 'Montant fixe',
    'label_product_amount' => 'Montant produit',
    'label_max_amount' => 'Montant maximal',
    'label_expedition_mode' => 'Mode d\'envoi',
    'label_transporter' => 'Transporteur',
    'label_add_operation_reward_countries' => 'Ajouter des pays',
    'label_reward_countries' => 'Pays de la prime',
    'label_add_new_reward' => 'Ajouter une nouvelle prime',
    'label_reward_name' => 'Nom de la prime',
    'operation_reward_validation_failure_already_synchronized_to_change_field' => 'Ce champ ne peut pas être modifié lorsque la prime est déjà paramétrée (Arthur et/ou Gedelog)',
    'operation_reward_validation_failure_invalid_reward_type_to_change_reward_fixed_amount_field' => 'Le type de la prime doit être "virtuelle montant fixe" pour pouvoir renseigner le champ "Montant fixe"',
    'operation_reward_validation_failure_invalid_reward_type_to_change_reward_max_amount_field' => 'Le type de la prime doit être "virtuelle montant variable" pour pouvoir renseigner le champ "Montant maximal"',
    'operation_reward_validation_failure_invalid_reward_type_to_change_product_price_pourcentage_field' => 'Le type de la prime doit être "virtuelle montant variable" pour pouvoir renseigner le champ "% Montant produit"',
    'operation_reward_validation_failure_invalid_reward_type_to_change_reward_expedition_mode_field' => 'Le type de la prime doit être "Physique" pour pouvoir renseigner le champ "Mode d\'envoie"',
    'operation_reward_validation_failure_invalid_reward_type_to_change_reward_transporter_field' => 'Le type de la prime doit être "Physique" pour pouvoir renseigner le champ "Transporteur"',
    'operation_reward_validation_failure_invalid_reward_type_to_change_reward_currency_field' => 'Le type de la prime doit être "Physique" pour pouvoir renseigner le champ "Devise prime"',
    'message_real_reward_pushed_to_gedelog_contact_logistic_service' => 'Vous venez d\'ajouter une nouvelle prime réelle dans Phoenix. Vous devez contacter le service Logistique pour mise à jour des approvisionnements dans Gedelog en fonction des quantités estimées',
    'message_real_reward_not_pushed_to_gedelog_contact_logistic_service' => 'La prime n\'a pu être poussée dans Gedelog. Vous devez contacter le service Logistique pour mise à jour des approvisionnements dans Gedelog en fonction des quantités estimées',
    'message_operation_prime_product_price_pourcentage_must_be_an_integer' => 'La valeur du pourcentage du montant du produit doit être un entier',
    'message_operation_prime_product_price_pourcentage_value_overflow' => 'La valeur du pourcentage du montant du produit ne doit pas dépasser 100',
    'message_unable_to_delete_countries_that_are_related_to_operation_rewards' => 'Des primes sont définies pour un ou plusieurs pays que vous souhaitez retirer. Modifiez la ou les primes avant de supprimer ce pays.',
    'message_operation_reward_validation_failure_operation_must_in_accepted_status' => 'L\'opération doit avoir le statut en cours pour modifier la prime',
    'option_required_for_operation_type' => 'Une valeur doit être choisie pour l\'option "%s"',
    'message_success_reminder_sent' => 'Relance envoyée',
    'message_error_reminder_sent' => 'Reminder impossible',
    'operation_options_removal_information_message_first_line' => 'Attention: Ci-dessous la liste des prestations rattachées à l\'option.',
    'operation_options_removal_information_message_second_line' => 'Supprimez, ajoutez ou modifiez les prestations dans l\'onglet « Prestations » ',
    'option_required_for_operation_type' => 'Une valeur doit être choisie pour l\'option "%s"',
    'label_delete_service_internal_comment' => 'Supprimer le commentaire interne',
    'physic_rewards_with_expedition_mode_transporter_but_no_transported' => 'Les primes physiques suivantes n\'ont pas de tranporteur : %s',
    'physic_rewards_without_expedition_mode' => 'Les primes physiques suivantes n\'ont pas de mode d\'envoi : %s',
    'rewards_do_not_have_reward_type' => 'Les primes suivantes n\'ont pas de type de prime associé : %s',
    'label_service_of_company' => 'Prestation %s',
    'label_service_of_company_english' => 'Prestation %s (anglais)',
    'label_update_service_of_company' => 'Modifier la prestation de %s',
    'quantity_must_be_interger_of_less_than_20' => 'La quantité de chaque prestation doit être un entier inférieur à 20',
    'error_no_warehouse_selected' => 'Aucun entrepôt sélectionné',
    'error_operation_has_already_been_pushed_into_gedelog' => 'L\'opération a déjà été poussée dans Gedelog',
    'error_operation_not_accepted_balanced' => 'L\'opération n\'est pas acceptée/soldé',
    'error_gedelog_warehouse_not_selected_in_options' => 'L\'entrepôt Gedelog n\'est pas sélectionné dans les options',
    'error_physical_rewards_must_exist' => 'Des primes physiques doivent être présentes',
    'error_gedelog_customer_address_not_customer_site' => 'Vous devez sélectionner un site client comme adresse client pour Gedelog',
    'import_operations' => 'Import',
    'title_import_operations' => 'Import des opérations',
);