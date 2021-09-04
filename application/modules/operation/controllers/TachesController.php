<?php

class Operation_TachesController extends My_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $this->_helper->ContextSwitch()
                //->addActionContext('index', 'csv')
                ->initContext();
    }

    /**
     * Méthode par défaut lors de l'appel au controlleur
     */
    public function indexAction()
    {
        $aData = $this->_request->getParams();

        $user = Zend_auth::getInstance()->getIdentity();
        $userId = $user->getUserId();

        /**
         * Instance de l'objet requête
         */
        $oZend_Db_Select = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
        $select = $oZend_Db_Select->order('op_task_deadline asc');

        //moteur de recherche sur la requête
        $oMy_Search_Engine = new My_Search_Engine($select);
        $oMy_Search_Engine->findWordOn(
            array(
                    'op_number' => array('operator' => 'like'),
                    'assign_to_user' => array('operator' => 'like'),
                    'notify_to_user' => array('operator' => 'like'),
                    'r_op_task_type_libelle' => array('operator' => 'like'),
                )
        );

        // Filtrage "Mes tâches uniquement" (filtrage par défaut)
        // > on filtre par 'assignée à', 'notifiée à' et 'créée par'
        $searchIsActive = ($this->view->getParam('findword', null) != null) || ($this->view->getParam('findbyfields', null) != null);
        $use_default_view = isset($aData['find_my_tasks_only']) || ((! $searchIsActive) && ! isset($aData['disable_default_view']));


        if ($use_default_view) {
            $where = "(op_task_assign_to_user = '$userId' OR op_task_notify_to_user = '$userId' OR user_id = '$userId'
				or op_task_assign_to_group in (" . implode(',', Phoenix_Auth_User::getInstance()->getGroupIds()) . ")
				or op_task_notify_to_group in (" . implode(',', Phoenix_Auth_User::getInstance()->getGroupIds()) . ")
			)";
            $oMy_Search_Engine->where($where);

            $this->_request->setParam('find_my_tasks_only', 1);
            $this->_request->setParam('findbyfields', 1);
        }

        $oMy_Search_Engine->findByFields(
            array(
                    'op_id' => array('operator' => 'eql'),
                    'op_task_comments' => array('operator' => 'like'),
                    'op_task_type_id' => array('operator' => 'eql'),
                    'op_task_assign_to_user' => array('operator' => 'eql'),
                    'op_task_notify_to_user' => array('operator' => 'eql'),
                    'op_task_notify_to_group' => array('operator' => 'eql'),
                    'op_task_assign_to_group' => array('operator' => 'eql'),
                    'user_id' => array('operator' => 'eql'),
                    'op_task_deadline' => array(
                        array('operator' => $this->_request->getParam('find_op_task_deadline_comp'), 'date_format' => true),
                        array('operator' => 'inf', 'date_format' => true, 'value' => $this->_request->getParam('find_op_task_retard_deadline'), 'date_format' => true, 'clause' => 'op_task_done is null')
                    ),
                    'op_task_alerte' => array('operator' => $this->_request->getParam('find_op_task_alerte_comp'), 'date_format' => true),
                    'op_task_retard' => array('operator' => $this->_request->getParam('find_op_task_retard_comp'), 'date_format' => true),
                    'op_task_done' => array('operator' => $this->_request->getParam('find_op_task_done_comp'), 'date_format' => true)
                )
        );

        $oMy_Search_Engine->makeOrderBy();

        /**
         * Affichage (CSV ou HTML)
         */
        if ($this->getParam('format') == 'csv') {
            // Affichage CSV

            $adapter_export = new My_Data_Export_Source_Adapter_Select($oMy_Search_Engine->getSelect()->from('View_Operation_Tasks_Listing', array(
                        'op_number' => 'op_number',
                        'r_op_task_type_libelle' => 'r_op_task_type_libelle',
                        'op_task_comments' => 'op_task_comments',
                        'op_task_deadline_fr' => 'op_task_deadline_fr',
                        'op_task_alerte_fr' => 'op_task_alerte_fr',
                        'op_task_retard_fr' => 'op_task_retard_fr',
                        'op_task_duree_estim' => 'op_task_duree_estim',
                        'op_task_duree_reelle' => 'op_task_duree_reelle',
                        'op_task_done_fr' => 'op_task_done_fr',
                        'assign_to_user' => 'assign_to_user',
                        'notify_to_user' => 'notify_to_user',
                        'notify_to_group' => 'notify_to_group',
                        'assign_to_group' => 'assign_to_group',
                        'op_task_notify_to_user' => 'op_task_notify_to_user',
                        'user_create_name' => 'user_create_name',
                        'op_task_detail' => 'op_task_detail',
                        'op_libelle' => 'op_libelle'
            )));
            $export = new My_Data_Export_CSV($adapter_export);

            $filename = My_Env::getInstance()->getConfig()->path->tmp . '/' . Phoenix_Data_Export_Csv::buildFileName();
            file_put_contents($filename, $export->make());
            My_File_Transfer::getInstance()->send($filename);
        } else {
            // Affichage HTML

            $adapter = new Zend_Paginator_Adapter_DbSelect($oMy_Search_Engine->getSelect()->from('View_Operation_Tasks_Listing'));

            /**
             * Gestion de la pagination
             */
            $paginator = new My_Paginator($adapter);
            $paginator->setCurrentPageNumber($this->_getParam('page'));
            $paginator->setItemCountPerPage(40);
            $this->view->paginator = $paginator;

            /*
             * Calcul des totaux
             */
            $oDateNow = new DateTime();
            $sNow = $oDateNow->format("Y-m-d");

            // 35061: correction bug requete nombre des taches en cours.
            $oZendDbSelect1 = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aNbTasksProgress = $oZendDbSelect1->from('View_Operation_Tasks_Listing', array('nb' => '(count(*))'))->where('op_task_done IS NULL')->query()->fetchAll();

            $oZendDbSelect2 = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aNbTasksAlerte = $oZendDbSelect2->from('View_Operation_Tasks_Listing', array('nb' => '(count(*))'))->where('op_task_done IS NULL AND op_task_alerte <= \'' . $sNow . '\'')->query()->fetchAll();

            $oZendDbSelect3 = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aNbTasksLate = $oZendDbSelect3->from('View_Operation_Tasks_Listing', array('nb' => '(count(*))'))->where('op_task_done IS NULL AND op_task_retard <= \'' . $sNow . '\'')->query()->fetchAll();

            // 35061: correction bug requete nombre des taches terminées.
            $oZendDbSelect4 = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $aNbTasksDone = $oZendDbSelect4->from('View_Operation_Tasks_Listing', array('nb' => '(count(*))'))->where('op_task_done IS NOT NULL')->query()->fetchAll();

            $this->view->stats = array(
                'nb_progress' => $aNbTasksProgress[0]['nb'],
                'nb_alerte' => $aNbTasksAlerte[0]['nb'],
                'nb_late' => $aNbTasksLate[0]['nb'],
                'nb_done' => $aNbTasksDone[0]['nb'],
            );
        }
    }

    /**
     * Affiche un widget pour l'utilisateur courant
     */
    function widgetAction()
    {
        $Zend_Auth = Zend_Auth::getInstance();
        if ($Zend_Auth->hasIdentity()) {
            $userId = $Zend_Auth->getIdentity()->getUserId();
            $this->view->userId = $userId;

            $oTask = new OperationTasks();
            $this->view->data = $oTask->getStatsForUser($userId);
        }
    }

    /**
     * AJAX function. Retourne le nom de l'opération dont on fournit l'id
     */
    public function getopeinfoAction()
    {
        $aData = $this->getRequest()->getPost();
        $name = $this->view->translate('Cette opération est inconnue');

        if (is_numeric($aData["op_id"]) && $aData["op_id"] > 0) {
            $ope = OperationsQuery::create()->findOneByOpNumber($aData["op_id"]);
            if ($ope instanceof Operations) {
                $name = $ope->getOpLibelle();
            }
        }

        $json = "{'ope_libelle' : '$name'}";
        $this->_helper->Json($json);
    }

    /**
     * AJAX function. Retourne certaines informations d'après le type de tâche
     * Nécessite de connaître le numéro d'opération
     */
    public function gettypeinfoAction()
    {
        $aData = $this->getRequest()->getPost();
        $op_task_deadline = '';
        $op_task_alerte = '';
        $op_task_retard = '';
        $op_task_assign_to = '';
        $autocomplete_assign_to = '';
        $op_task_notify_to = '';
        $autocomplete_notify_to = '';

        if (is_numeric($aData['op_id']) && $aData['op_id'] > 0) {
            $oTask = new OperationTasks();
            $oTask->setOpId($aData['op_id']);
            $oTask->setOpTaskTypeId($aData['type_id']);
            $oTask->autofillFields();

            // Retrieve fields
            $op_task_deadline = $oTask->getOpTaskDeadline('d/m/Y');
            $op_task_alerte = $oTask->getOpTaskAlerte('d/m/Y');
            $op_task_retard = $oTask->getOpTaskRetard('d/m/Y');

            $op_task_assign_to = $oTask->getOpTaskAssignToUser();
            if ($op_task_assign_to > 0) {
                $user = UsersQuery::create()->findOneByUserId($op_task_assign_to);
                if ($user instanceof Users) {
                    $autocomplete_assign_to = $user->getUserNom() . ' ' . $user->getUserPrenom();
                }
            }

            $op_task_notify_to = $oTask->getOpTaskNotifyToUser();
            if ($op_task_notify_to > 0) {
                $user = UsersQuery::create()->findOneByUserId($op_task_notify_to);
                if ($user instanceof Users) {
                    $autocomplete_notify_to = $user->getUserNom() . ' ' . $user->getUserPrenom();
                }
            }
        }

        $json = "{'op_task_deadline' : '$op_task_deadline',
                  'op_task_alerte' : '$op_task_alerte',
                  'op_task_retard' : '$op_task_retard',
                  'op_task_assign_to' : '$op_task_assign_to',
                  'op_task_notify_to' : '$op_task_notify_to',
                  'autocomplete_assign_to' : '$autocomplete_assign_to',
				  'autocomplete_notify_to' : '$autocomplete_notify_to'}";
        $this->_helper->Json($json);
    }

    /**
     * AJAX function. Listing des types de tâche en json pour autocomplete
     */
    public function autocompletetacheAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $response = $this->_helper->AjaxComponents()->autocomplete('r_operation_tasks_type', array('r_op_task_type_id', 'r_op_task_type_libelle'), array('value' => 'r_op_task_type_libelle', 'id' => 'r_op_task_type_id'));
            $this->_helper->Json($response);
        }
    }

    /**
     * Méthode de mise à jour d'une tâche (ou de création si 'op_task_id' est vide)
     */
    public function updateAction()
    {
        $this->_helper->layout->disableLayout();
        $aData = $this->getAllParams();

        if (! empty($aData["submit_update_task"])) {
            // On met à jour les informations (insert/update)
            if (isset($aData["op_task_id"]) && is_numeric($aData["op_task_id"])) {
                $oTask = OperationTasksQuery::create()->findPk($aData["op_task_id"]);
            } else {
                $oTask = new OperationTasks();
            }
            /**
             * Traitement des données du formulaire
             */
            // On efface les ids utilisateurs si les champs associés sont vides
            if (empty($aData["autocomplete_assign_to"])) {
                $aData["op_task_assign_to"] = "";
            }

            if (empty($aData["autocomplete_notify_to"])) {
                $aData["op_task_notify_to"] = "";
            }

            // On convertit les champs "date"
            // 32655 Formattage de date pour MySQL
            $aData['op_task_deadline'] = Phoenix_Data_Convert::FormatDateForMysql($aData['op_task_deadline']);
            $aData['op_task_alerte'] = Phoenix_Data_Convert::FormatDateForMysql($aData['op_task_alerte']);
            $aData['op_task_retard'] = Phoenix_Data_Convert::FormatDateForMysql($aData['op_task_retard']);

            /*
             * On charge les nouvelles informations
             */
            $oTask->fromArray($aData, BasePeer::TYPE_FIELDNAME);

            $isValidated = ($oTask->getOpTaskDone() != "");
            if (! $isValidated) {
                if ($oTask->validate()) {
                    $oTask->save();

                    $this->_helper->json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_RELOAD, 'maj ok'));
                } else {
                    $errors = $oTask->getValidationFailures();
                    $this->_helper->PropelFailures()->registerErrors($errors);
                }
            } else {
                $this->_response->clearBody();
                $this->_response->setBody($this->view->translate('Erreur: Modification impossible car la tâche est validée') . '.');
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        } else {
            if (isset($aData["op_task_id"])) {
                $oZend_Db_Select = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
                $task_data = $oZend_Db_Select->from('View_Operation_Tasks_Listing')->where('op_task_id=?', $aData["op_task_id"])->query()->fetch(PDO::FETCH_ASSOC);

                $this->_request->setParams($task_data);

                if (! (count($task_data) > 0)) {
                    $this->_response->clearBody();
                    $this->_response->setBody($this->view->translate('Erreur: Cette tâche est invalide'));
                    $this->_helper->ViewRenderer->setNoRender(true);
                }
            }
        }
    }

    /**
     * Méthode de suppression d'une tâche
     */
    public function deleteAction()
    {
        if ($this->_request->isXmlHttpRequest()) {
            $aData = $this->_request->getParams();
            $oTask = null;

            // On récupère l'id de la tâche à supprimer
            if (isset($aData["op_task_id"]) && is_numeric($aData["op_task_id"])) {
                $oTask = OperationTasksQuery::create()->findOneByOpTaskId($aData["op_task_id"]);
            }

            if ($oTask instanceof OperationTasks) {
                $isValidated = ($oTask->getOpTaskDone() != "");
                if (! $isValidated) {
                    $oTask->delete();

                    $response = new Phoenix_Ajax_Components_Response(
                        Phoenix_Ajax_Components_Response::ACTION_CLOSE_POPUP,
                        array()
                    );
                    $this->_helper->Json($response);
                } else {
                    $this->_response->clearBody();
                    $this->_response->setBody($this->view->translate('Erreur: Suppression impossible car la tâche est validée') . '.');
                    $this->_helper->ViewRenderer->setNoRender(true);
                }
            } else {
                $this->_response->clearBody();
                $this->_response->setBody($this->view->translate('Erreur: Cette tâche est invalide'));
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }
    }

    /**
     * Méthode de validation d'une tâche
     */
    public function validateAction()
    {
        $this->_helper->layout->disableLayout();

        /**
         * On s'occupe du formulaire
         */
        if ($this->_request->isPost()) {
            $aData = $this->getRequest()->getPost();
            $oTask = null;

            // On récupère l'id de la tâche à valider
            if (isset($aData["op_task_id"]) && is_numeric($aData["op_task_id"])) {
                $oTask = OperationTasksQuery::create()->filterByOpTaskId($aData["op_task_id"])
                        ->useOperationsQuery()->endUse()
                        ->with('Operations')
                        ->findOne();
            }

            if ($oTask instanceof OperationTasks) {
                // On passe l'objet à la vue pour mettre à jour les champs
                $this->view->task_data = $oTask;

                if (! empty($aData["submit_validate_task"])) {
                    // On met à jour les informations (update)

                    /**
                     * Traitement des données du formulaire
                     */
                    // On convertit les champs "date"
                    // 32655 Formattage de date pour MySQL
                    $aData['op_task_done'] = Phoenix_Data_Convert::FormatDateForMysql($aData['op_task_done']);

                    /*
                     * On charge les nouvelles informations
                     */
                    $oTask->fromArray($aData, BasePeer::TYPE_FIELDNAME);

                    if ($oTask->validate()) {
                        $oTask->save();

                        $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                            Phoenix_Ajax_Components_Response::ACTION_RELOAD,
                            'ok'
                        ));
                    } else {
                        $errors = $oTask->getValidationFailures();
                        $this->_helper->PropelFailures()->registerErrors($errors);
                    }
                } else {
                    // On affiche le formulaire de confirmation
                    // Rien à faire
                }
            } else {
                $this->_response->clearBody();
                $this->_response->setBody($this->view->translate('Erreur: Cette tâche est invalide'));
                $this->_helper->ViewRenderer->setNoRender(true);
            }
        }
    }

    /**
     * Méthode de visualisation d'une tâche
     */
    public function viewAction()
    {
        $this->_helper->layout->disableLayout();

        $aData = $this->getRequest()->getPost();

        // On récupère l'id de la tâche
        if (isset($aData["op_task_id"]) && is_numeric($aData["op_task_id"])) {
            $oTask = OperationTasksQuery::create()->findOneByOpTaskId($aData["op_task_id"]);
        }

        if ($oTask instanceof OperationTasks) {
            // On passe l'objet à la vue pour mettre à jour les champs
            $this->view->task_data = $oTask;

            // On affiche le formulaire de confirmation
            // Rien à faire
        } else {
            $this->_response->clearBody();
            $this->_response->setBody($this->view->translate('Erreur: Cette tâche est invalide'));
            $this->_helper->ViewRenderer->setNoRender(true);
        }
    }
}
