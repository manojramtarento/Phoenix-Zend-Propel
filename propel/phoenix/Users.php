<?php

/**
 * Skeleton subclass for representing a row from the 'users' table.
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package propel.generator.phoenix
 */
class Users extends BaseUsers
{
    
    public function fromArray($aUserData, $sKeyType = BasePeer::TYPE_PHPNAME)
    {
        if (Phoenix_Auth_User::getAuthenticationEngine()->allowsUserCreation() && ! empty($aUserData['user_password'])) {
            // Generate a new password salt
            $aUserData['user_password_salt'] = str_shuffle(uniqid(uniqid()));
            // Set new password
            $aUserData['user_password'] = md5($aUserData['user_password'].$aUserData['user_password_salt']);
        } else {
            unset($aUserData['user_password']);
        }
        return parent::fromArray($aUserData, $sKeyType);
    }


    public function getUserNomPrenom()
    {
        return ucfirst($this->getUserNom()) . ' ' . ucfirst($this->getUserPrenom());
    }

    public function getUserPrenomNom()
    {
        return ucfirst($this->getUserPrenom()) . ' ' . ucfirst($this->getUserNom());
    }

    /**
     *
     * @param string historise une version de fichier contrat
     * @return int
     */
    public function addFileSigature($sName)
    {

        $oFile = new Files();
        $oFile->setFileCategoryId(RFileCategories::SIGNATURE_MAIL);
        $oFile->setFileEntityName('users');
        $oFile->setFileEntityId($this->getUserId());
        $oFile->setFileName($sName);

        if (! in_array($oFile->getMimeType(), array('text/html', 'text/plain'))) {
            $this->addValidationFailed('La signature doit être au format html');
            return false;
        }

        if ($oFile->validate()) {
            //suppression ancienne version
            FilesQuery::create()->filterbyFileCategoryId(RFileCategories::SIGNATURE_MAIL)
                    ->filterByFileEntityName('users')
                    ->filterByFileEntityId($this->getUserId())
                    ->delete();

            $oFile->save();

            return $oFile->getFileId();
        } else {
            $aErrors = $oFile->getValidationFailures();

            // 34852: correction bug de récupération des messages de validation
            foreach ($aErrors as $sFieldname => $aErrorsField) {
                foreach ($aErrorsField as $oError) {
                    $this->addValidationFailed($oError->getMessage());
                }
            }
        }

        return false;
    }

    /**
     *
     * @return Files
     */
    public function getUploadedSignature()
    {
        $oFile = FilesQuery::create()->filterbyFileCategoryId(RFileCategories::SIGNATURE_MAIL)
                ->filterByFileEntityName('users')
                ->filterByFileEntityId($this->getUserId())
                ->findOne();

        return $oFile;
    }

    /**
     * @param array $aOptions [disable_function]
     * @return string
     */
    public function getDefaultSignature($aOptions = array())
    {
        $oZendView = clone Zend_Controller_Front::getInstance()->getParam('bootstrap')->getPluginResource('view')->getView();
        $oZendView->assign('user_mail', $this->getUserMail());
        $oZendView->assign('user_phone', $this->getUserPhone());
        $oZendView->assign('user_mobile', $this->getUserMobile());
        $oZendView->assign('user_name', $this->getUserPrenomNom());
        if (isset($aOptions['disable_function']) && $aOptions['disable_function'] == true) {
            if ($this->getRUserTypes() != null) {
                $oZendView->assign('user_title', $this->getRUserTypes()->getRUserTypeShortName());
            } else {
                $oZendView->assign('user_title', null);
            }
        }
        $oZendView->setScriptPath(APPLICATION_PATH . '/views/scripts/emails/');
        $sSignature = $oZendView->render('signature.phtml');

        return $sSignature;
    }

    /**
     *
     * @param array $aOptions [disable_function]
     * @return string
     */
    public function getSignature($aOptions = array())
    {
        $oUploadedSignature = $this->getUploadedSignature();
        if ($oUploadedSignature == null) {
            $sSignature = $this->getDefaultSignature($aOptions);
        } else {
            $sSignature = $oUploadedSignature->getFileContent();
        }


        return $sSignature;
    }

    /**
     * Checks weither the current user can be safely deleted
     *
     * @return boolean
     */
    public function checkIfUserCanBeSafelyDeleted()
    {

        $iUserId = $this->getUserId();

        return ! (
                // Searching in clients table
                        ClientsQuery::create()
                        ->condition('cl_dc_id', 'Clients.ClDcId = ?', $iUserId)
                        ->condition('user_id', 'Clients.UserId = ?', $iUserId)
                        ->condition('user_modify', 'Clients.UserModify = ?', $iUserId)
                        ->where(array('cl_dc_id', 'user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in contacts table
                        ContactsQuery::create()
                        ->condition('user_id', 'Contacts.UserId = ?', $iUserId)
                        ->condition('user_modify', 'Contacts.UserModify = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in factures table
                        FacturesQuery::create()
                        ->condition('dc_id', 'Factures.DcId = ?', $iUserId)
                        ->condition('user_id', 'Factures.UserId = ?', $iUserId)
                        ->condition('user_modify', 'Factures.UserModify = ?', $iUserId)
                        ->where(array('dc_id', 'user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in facture_edition_history table
                        FactureEditionHistoryQuery::create()
                        ->condition('dc_id', 'FactureEditionHistory.DcId = ?', $iUserId)
                        ->condition('fact_eh_user_id', 'FactureEditionHistory.FactEhUserId = ?', $iUserId)
                        ->condition('fact_user_edition', 'FactureEditionHistory.FactUserEdition = ?', $iUserId)
                        ->condition('fact_user_id', 'FactureEditionHistory.FactUserId = ?', $iUserId)
                        ->condition('fact_user_modify', 'FactureEditionHistory.FactUserModify = ?', $iUserId)
                        ->where(array('dc_id', 'fact_eh_user_id', 'fact_user_edition', 'fact_user_id', 'fact_user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in facture_status table
                        FactureStatutsQuery::create()
                        ->condition('user_id', 'FactureStatuts.UserId = ?', $iUserId)
                        ->condition('user_modify', 'FactureStatuts.UserModify = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in files table
                        FilesQuery::create()
                        ->filterByUserId($iUserId)
                        ->count() ||
                // Searching in histo_couts table
                        HistoCoutsQuery::create()
                        ->filterByUserId($iUserId)
                        ->count() ||
                // Searching in journal_de_vente table
                        JournalDeVenteQuery::create()
                        ->filterByUserId($iUserId)
                        ->count() ||
                // Searching in journal_de_vente_ligne table
                        JournalDeVenteLigneQuery::create()
                        ->filterByUserId($iUserId)
                        ->count() ||
                // Searching in lnk_grp_validation_users table
                        LnkGrpValidationUsersQuery::create()
                        ->filterByUserId($iUserId)
                        ->count() ||
                // Searching in lnk_relance_facture table
                        LnkRelanceFactureQuery::create()
                        ->filterByUserId($iUserId)
                        ->count() ||
                // Searching in lnk_users_acl_groups table
                        LnkUsersAclGroupsQuery::create()
                        ->filterByUserId($iUserId)
                        ->count() ||
                // Searching in mails table
                        MailsQuery::create()
                        ->filterByUserId($iUserId)
                        ->count() ||
                        OperationsQuery::create()
                        ->condition('op_cp_id', 'Operations.OpDcId = ?', $iUserId)
                        ->condition('op_dc_id', 'Operations.OpCpId = ?', $iUserId)
                        ->condition('user_id', 'Operations.UserId = ?', $iUserId)
                        ->condition('user_modify', 'Operations.UserModify = ?', $iUserId)
                        ->where(array('op_cp_id', 'op_dc_id', 'user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in operations_ext table
                        OperationsExtQuery::create()
                        ->filterByOptSyncGedelogUserId($iUserId)
                        ->count() ||
                // Searching in operation_decouverts table
                        OperationDecouvertsQuery::create()
                        ->condition('user_id', 'OperationDecouverts.UserId = ?', $iUserId)
                        ->condition('user_modify', 'OperationDecouverts.UserModify = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in operation_prestations table
                        OperationPrestationsQuery::create()
                        ->condition('cost_updater_user', 'OperationPrestations.CostUpdaterUser = ?', $iUserId)
                        ->condition('op_user_couts_estim', 'OperationPrestations.OpUserCoutsEstim = ?', $iUserId)
                        ->condition('op_user_couts_reel', 'OperationPrestations.OpUserCoutsReel = ?', $iUserId)
                        ->condition('user_modify', 'OperationPrestations.UserModify = ?', $iUserId)
                        ->where(array('cost_updater_user', 'op_user_couts_estim', 'op_user_couts_reel', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in operation_sales_teams table
                        OperationSalesTeamsQuery::create()
                        ->filterByUserId($iUserId)
                        ->count() ||
                // Searching in operation_statuts table
                        OperationStatutsQuery::create()
                        ->condition('user_id', 'OperationStatuts.UserId = ?', $iUserId)
                        ->condition('user_modify', 'OperationStatuts.UserModify = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in operation_tasks table
                        OperationTasksQuery::create()
                        ->condition('user_id', 'OperationTasks.UserId = ?', $iUserId)
                        ->condition('op_task_assign_to_user', 'OperationTasks.OpTaskAssignToUser = ?', $iUserId)
                        ->condition('op_task_notify_to_user', 'OperationTasks.OpTaskNotifyToUser = ?', $iUserId)
                        ->where(array('user_id', 'op_task_assign_to_user', 'op_task_notify_to_user'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in plan_facturation_details table
                        PlanFacturationDetailsQuery::create()
                        ->condition('user_id', 'PlanFacturationDetails.UserId = ?', $iUserId)
                        ->condition('user_modify', 'PlanFacturationDetails.UserModify = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in queue_relance_couts table
                        QueueRelanceCoutsQuery::create()
                        ->filterByUserId($iUserId)
                        ->count() ||
                // Searching in relance_statuts table
                        RelanceStatutsQuery::create()
                        ->condition('user_id', 'RelanceStatuts.UserId = ?', $iUserId)
                        ->condition('user_modify', 'RelanceStatuts.UserModify = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in r_client_activities table
                        RClientActivitiesQuery::create()
                        ->condition('user_id', 'RClientActivities.UserId = ?', $iUserId)
                        ->condition('user_modify', 'RClientActivities.UserModify = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in r_client_types table
                        RClientTypesQuery::create()
                        ->condition('user_id', 'RClientTypes.UserId = ?', $iUserId)
                        ->condition('user_modify', 'RClientTypes.UserModify = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in r_operation_status table
                        ROperationStatusQuery::create()
                        ->condition('user_id', 'ROperationStatus.UserId = ?', $iUserId)
                        ->condition('user_modify', 'ROperationStatus.UserModify = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in r_operation_tasks_type table
                        ROperationTasksTypeQuery::create()
                        ->condition('r_op_task_type_assign_to_user', 'ROperationTasksType.ROpTaskTypeAssignToUser = ?', $iUserId)
                        ->condition('r_op_task_type_notify_to_user', 'ROperationTasksType.ROpTaskTypeNotifyToUser = ?', $iUserId)
                        ->condition('user_id', 'ROperationTasksType.UserId = ?', $iUserId)
                        ->where(array('user_id', 'r_op_task_type_assign_to_user', 'r_op_task_type_notify_to_user'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in r_operation_type table
                        ROperationTypeQuery::create()
                        ->condition('user_id', 'ROperationType.UserId = ?', $iUserId)
                        ->condition('user_modify', 'ROperationType.UserModify = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in r_operation_type_sub table
                        ROperationTypeSubQuery::create()
                        ->condition('user_id', 'ROperationTypeSub.UserId = ?', $iUserId)
                        ->condition('user_modify', 'ROperationTypeSub.UserModiy = ?', $iUserId)
                        ->where(array('user_id', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in r_prestations table
                        RPrestationsQuery::create()
                        ->condition('user_create', 'RPrestations.UserCreate = ?', $iUserId)
                        ->condition('user_modify', 'RPrestations.UserModify = ?', $iUserId)
                        ->where(array('user_create', 'user_modify'), CRITERIA::LOGICAL_OR)
                        ->count() ||
                // Searching in user_kpi_settings table
                        UserKpiSettingsQuery::create()
                        ->filterByUserKpiSettingsUserId($iUserId)
                        ->count() 
                );
    }
}

// Users
