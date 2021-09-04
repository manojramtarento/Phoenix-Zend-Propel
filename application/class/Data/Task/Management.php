<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Management
 *
 * @author info20
 */
class Data_Task_Management {

    /**
     * Va créer des tâches automatiquement pour une opération donnée suivant
     * les référentiels existants pour le type de l'opération
     * > On vérifie que l'opération a le statut "en validation" et qu'elle n'a pas déjà été validée
     * @param type $opId
     * @return int|bool number of created tasks or false
     * @throws Phoenix_Exception_UserError
     */
    static public function createTasksForOperation($opId) {
        // Les tâches sont créés lors du statut "Accepté"
        $status_for_creating_task = Operations::STATUS_ACCEPTE;

        // Si le nouveau status est en validation, on va créér les tâches associées
        $oOperation = OperationsQuery::create()->findPk($opId);

        if (!($oOperation instanceof Operations)) {
            throw new RuntimeException('Operation not found');
            return;
        } elseif ($oOperation->getOpStatusId() !== $status_for_creating_task) {
            throw new Phoenix_Exception_UserError("L'opération n'a pas le statut accepté");
            return;
        } elseif ($oOperation->getOperationsExt()->getOptSyncTaskUserId() != null) {
            throw new Phoenix_Exception_UserWarning("Les tâches ont déjà été créées");
            return;
        } else {

            // On vérifie qu'il s'agit de la PREMIERE validation
            $nb_occ_status = 0;
            $nb_occ_status = OperationStatutsQuery::create()->filterByOpId($opId)
                            ->filterByHsNewStatutId($status_for_creating_task)->count();

            if ($nb_occ_status === 1) {
                $list_task_type_ids = array();

                // On récupère les ids des tâches associées au type
                $ot_id = $oOperation->getOpTypeId();
                $tasks_list = ROperationTypeTasksQuery::create()->findByOtId($ot_id);
                foreach ($tasks_list as $t) {
                    if ($t instanceof ROperationTypeTasks) {
                        $list_task_type_ids[] = $t->getROpTaskTypeId();
                    }
                }

                // On récupère les ids des tâches associées au sous-type
                $ost_id = $oOperation->getOpSubtypeId();
                $tasks_list = ROperationTypeSubTasksQuery::create()->findByOstId($ost_id);
                foreach ($tasks_list as $t) {
                    if ($t instanceof ROperationTypeSubTasks) {
                        $list_task_type_ids[] = $t->getROpTaskTypeId();
                    }
                }

                // On récupère les ids des tâches associées aux options
                $options_list = LnkOperationOptionQuery::create()->findByOpId($opId);

                foreach ($options_list as $o) {

                    if ($o instanceof LnkOperationOption) {
                        $tasks_list = ROperationOptionsTasksQuery::create()->findByOptionId($o->getOpOptId());
                        foreach ($tasks_list as $t) {
                            if ($t instanceof ROperationOptionsTasks) {
                                $list_task_type_ids[] = $t->getROpTaskTypeId();
                            }
                        }
                    }
                }
                // print_r($list_task_type_ids);die;
                // On crée les tâches
                $list_task_type_ids = array_unique($list_task_type_ids);
                foreach ($list_task_type_ids as $task_type_id) {
                    $oTask = new OperationTasks;
                    $oTask->setOpId($opId);
                    $oTask->setOpTaskTypeId($task_type_id);
                    $oTask->autofillFields();
                    $oTask->save();
                }

                $oOperation->assignTasksToCurentCp();

                //historisation du traitement
                $oOperation->getOperationsExt()
                        ->setOptSyncTaskUserId(Phoenix_Auth_User::getInstance()->getUserId())
                        ->setOptSyncTaskDate(date('Ymd H:i:s'))
                        ->save();

                return count($list_task_type_ids);
            }
        }
    }

}