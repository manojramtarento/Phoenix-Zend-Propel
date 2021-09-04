<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author info20
 */
class AccueilController extends My_Controller_Action
{

    /**
     * Index action
     */
    function indexAction()
    {
        $oUser = Phoenix_Auth_User::getInstance();
        $aGroupsId = $oUser->getGroupIds();

        // Retrieve data user
        $this->view->user = $oUser;

        // Retrieve the costs of the user
        $oCoutsList = array();
        if ($aGroupsId) {
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            // 36759 Usage of View_Validation_Couts_Simplifie View_Validation_Couts in order to
            // Optimise the response time
            // 33369 Making the following process also availble for "soldé" status
            $oCoutsList = $oZendDbSelect->from('View_Validation_Couts_Simplifie')
                            ->where('r_p_groupe_validation_id IN (?)', $aGroupsId)
                            ->where('(r_p_validation_id = ' . RPTypeValidation::MANUELLE . ' OR r_p_validation_id = ' . RPTypeValidation::ACHAT . ')')
                            ->where('(op_prest_couts_valides IS NULL OR op_prest_couts_valides = 0)')
                            ->order('nb_factures_en_attente desc')
                            ->order('deadline_facture_fr asc')
                            ->order('r_p_libelle asc')
                            ->where('op_status_id IN (?)', array(Operations::STATUS_ACCEPTE, Operations::STATUS_SOLDE))
                            ->query()->fetchAll();
        }
        $this->view->couts = $oCoutsList;
        $oTachesList = array();

        /// Retrive task of user
        if ($aGroupsId) {
            $oZendDbSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());
            $oTachesList = $oZendDbSelect->from('View_Operation_Tasks_Listing')
                            ->where('op_task_assign_to_user = ' . $oUser->getUserId() . ' or op_task_assign_to_group in (?)', $aGroupsId)
                            ->where('op_task_done IS NULL')
                            ->order('op_task_deadline asc')
                            ->query()->fetchAll();
        }
        $this->view->taches = $oTachesList;
    }
}
