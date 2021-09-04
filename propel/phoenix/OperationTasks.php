<?php

/**
 * Skeleton subclass for representing a row from the 'operation_tasks' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class OperationTasks extends BaseOperationTasks
{

    const STATUS_PROGRESS = 0;
    const STATUS_WARNING = 1;
    const STATUS_LATE = 2;
    const STATUS_FINISHED = 3;

    /*     * *************************************************
     *            TRIGGERS
     * *************************************************** */

    /**
     * Exécutée automatiquement lors de la validation
     * Validation de la cohérence de la durée (doit être une valeur numérique >= 0)
     */
    protected function _validateIsDureeCorrect()
    {
        $duree = $this->getOpTaskDureeEstim();
        if (! empty($duree) && (! is_numeric($duree) || $duree < 0)) {
            $this->addValidationFailed('La durée doit être une valeur numérique supérieure à 0', 'operation_tasks.op_task_duree_estim');
        }

        $duree = $this->getOpTaskDureeReelle();
        if (! empty($duree) && (! is_numeric($duree) || $duree < 0)) {
            $this->addValidationFailed('La durée doit être une valeur numérique supérieure à 0', 'operation_tasks.op_task_duree_reelle');
        }
    }

    /**
     * Exécutée automatiquement lors de la validation
     * Validation du num. d'opération (doit correspondre à une opé existante)
     */
    protected function _validateIsTypeCorrect()
    {
        if ($this->getOpTaskTypeId() <= 0) {
            $this->addValidationFailed('Le type de tâche doit être renseigné', 'operation_tasks.op_task_type_id');
        }
    }

    /**
     * Exécutée automatiquement lors de la validation
     * Validation du num. d'opération (doit correspondre à une opé existante)
     */
    protected function _validateIsNumOpCorrect()
    {
        $ope = OperationsQuery::create()->findOneByOpId($this->getOpId());
        if (($ope instanceof Operations) === false) {
            $this->addValidationFailed('Le numéro d\'opération ne correspond pas à une opération existante', 'operation_tasks.op_id');
        }
    }

    /**
     * Rempli certains champs de manière automatique grâce à l'opération et au type de tâche
     * @param type $ope_id
     */
    public function autofillFields()
    {
        $ope_id = $this->getOpId();
        $task_type_id = $this->getOpTaskTypeId();

        $ope = OperationsQuery::create()->findOneByOpId($ope_id);
        if ($ope instanceof Operations) {
            $task_type = ROperationTasksTypeQuery::create()->findOneByROpTaskTypeId($task_type_id);
            if ($task_type instanceof ROperationTasksType) {
                // Récupération de la date de référence (minuscule et sans accents)
                $date_referentiel = null;
                $date_ref_type = $task_type->getROpTaskTypeDateRef();
                switch ($date_ref_type) {
                    case 1:  // debut conso
                        $date_referentiel = $ope->getOpDateconsoStart(null);
                        break;

                    case 2:  // fin conso
                        $date_referentiel = $ope->getOpDateconsoEnd(null);
                        break;

                    case 3:  // debut gestion
                        $date_referentiel = $ope->getOpStampStart(null);
                        break;

                    case 4:  // fin gestion
                        $date_referentiel = $ope->getOpStampEnd(null);
                        break;

                    case 5:  // fin poste
                        $date_referentiel = $ope->getOpDateposteEnd(null);
                        break;

                    case 6:  // devis accepte
                        // On parcourt la liste des status et on enregistre
                        // la date du status "Accepté"
                        // Note: On ne garde en mémoire que date la plus récente
                        $status_list = $ope->getOperationStatutss();
                        foreach ($status_list as $status) {
                            if ($status->getNewROperationStatus()->getOsLibelle() == "Accepté") {
                                $date_referentiel = $status->getDateCreate(null);
                            }
                        }
                        break;
                }

                // Calcul des dates suivant la date de référence
                if ($date_referentiel instanceof DateTime) {
                    $delta = $task_type->getROpTaskTypeDelta();
                    $rappel_delay = abs($task_type->getROpTaskTypeRappel());

                    // Calcul de la deadline
                    $date_deadline = clone $date_referentiel;
                    if ($delta < 0) {
                        $date_deadline->sub(new DateInterval('P' . abs($delta) . 'D'));
                    } elseif ($delta > 0) {
                        $date_deadline->add(new DateInterval('P' . abs($delta) . 'D'));
                    }
                    $op_task_deadline = $date_deadline->format("d/m/Y");

                    // Calcul de l'alerte (deadline - $rappel_delay)
                    $date_alerte = clone $date_deadline;
                    $date_alerte->sub(new DateInterval('P' . $rappel_delay . 'D'));
                    $op_task_alerte = $date_alerte->format("d/m/Y");

                    // Calcul du retard (deadline + 1j)
                    $date_retard = clone $date_deadline;
                    $date_retard->add(new DateInterval('P1D'));
                    $op_task_retard = $date_retard->format("d/m/Y");

                    // 32655 Utilisation d'une nouvelle fonction de formattage de date pour MySQL
                    // On enregistre les champs
                    $op_task_deadline = Phoenix_Data_Convert::FormatDateForMysql($op_task_deadline);
                    $this->setOpTaskDeadline($op_task_deadline);

                    $op_task_alerte = Phoenix_Data_Convert::FormatDateForMysql($op_task_alerte);
                    $this->setOpTaskAlerte($op_task_alerte);

                    $op_task_retard = Phoenix_Data_Convert::FormatDateForMysql($op_task_retard);
                    $this->setOpTaskRetard($op_task_retard);
                }

                // Affectations de la tache
                if ($task_type->getROpTaskTypeAssignToCp() == true && ($iOpCpId = $ope->getOpCpId())) {
                    $this->setOpTaskAssignToUser($iOpCpId);
                } elseif ($task_type->getROpTaskTypeAssignToDc() == true) {
                    $this->setOpTaskAssignToUser($ope->getOpDcId());
                } else {
                    $this->setOpTaskAssignToUser($task_type->getROpTaskTypeAssignToUser());
                }

                $this->setOpTaskAssignToGroup($task_type->getROpTaskTypeAssignToGroup());
                $this->setOpTaskNotifyToUser($task_type->getROpTaskTypeNotifyToUser());
                $this->setOpTaskAssignToGroup($task_type->getROpTaskTypeNotifyToGroup());
            }
        }
    }

    /**
     * Retourne des statistiques propres à un utilisateur
     */
    public function getStatsForUser($user_id)
    {
        $datetime_now = new Datetime();
        $date_now = $datetime_now->format('Ymd 00:00:00');

        $oZend_Db_Select = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aNbAssignTotal = $oZend_Db_Select->from('view_operation_tasks_listing', array('nb' => '(count(*))'))->where("user_id_assign = '$user_id'")->query()->fetchAll();

        $oZend_Db_Select = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aNbAssignAlerte = $oZend_Db_Select->from('view_operation_tasks_listing', array('nb' => '(count(*))'))->where("user_id_assign = '$user_id' AND op_task_done = NULL AND op_task_alerte <= '$date_now'")->query()->fetchAll();

        $oZend_Db_Select = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $aNbAssignRetard = $oZend_Db_Select->from('view_operation_tasks_listing', array('nb' => '(count(*))'))->where("user_id_assign = '$user_id' AND op_task_done = NULL AND op_task_retard <= '$date_now'")->query()->fetchAll();

        $nbTasks_assign_total = $aNbAssignTotal[0]["nb"];
        $nbTasks_assign_alerte = $aNbAssignAlerte[0]["nb"];
        $nbTasks_assign_retard = $aNbAssignRetard[0]["nb"];

        $data = array(
            'nbTasks_assign_total' => $nbTasks_assign_total,
            'nbTasks_assign_alerte' => $nbTasks_assign_alerte,
            'nbTasks_assign_retard' => $nbTasks_assign_retard,
        );

        return $data;
    }

    /**
     * Exécutée automatiquement lors de la validation
     * Validation de la concordance des dates
     */
    protected function _validateIsDateCorrect()
    {
        // On récupère les dates au format Datetime ($format=null)
        $date_deadline = $this->getOpTaskDeadline($format = null);
        $date_alerte = $this->getOpTaskAlerte($format = null);
        $date_retard = $this->getOpTaskRetard($format = null);

        // Vérification date alerte < date deadline
        if ($date_alerte instanceof DateTime && $date_deadline instanceof DateTime && $date_alerte > $date_deadline) {
            $this->addValidationFailed('La date d\'alerte doit être inférieure à la deadline', 'operation_tasks.op_task_alerte');
        }

        // Vérification date retard > date deadline
        if ($date_retard instanceof DateTime && $date_deadline instanceof DateTime && $date_retard < $date_deadline) {
            $this->addValidationFailed('La date de retard doit être supérieure à la deadline', 'operation_tasks.op_task_retard');
        }
    }

}
