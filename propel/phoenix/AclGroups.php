<?php

class AclGroups extends BaseAclGroups
{

    const GROUP_SYSTEM_NAME  = 'System';

    /**
     * Checks weither a role can be safely deleted
     *
     * @return bool
     */
    public function checkIfRoleCanBeSafelyDeleted() : bool
    {
        $iRoleId = $this->getGroupId();

        return ! (
                // Searching in lnk_acl_groups_fonctionnalities table
                LnkAclGroupsFonctionnalitesQuery::create()->filterByLnkAclGroupsFonctionnaliteGroupId($iRoleId)->count() ||
                // Searching in lnk_grp_validation_users table
                LnkGrpValidationUsersQuery::create()->filterByRPGroupeValidationId($iRoleId)->count() ||
                // Searching in operation_tasks table
                OperationTasksQuery::create()->condition('op_task_assign_to_group', 'OperationTasks.OpTaskAssignToGroup = ?', $iRoleId)
                ->condition('op_task_notify_to_group', 'OperationTasks.OpTaskNotifyToGroup = ?', $iRoleId)
                ->where(array('op_task_assign_to_group', 'op_task_notify_to_group'), CRITERIA::LOGICAL_OR)
                ->count() ||
                // Searching in r_operation_tasks_type table
                ROperationTasksTypeQuery::create()
                ->condition('r_op_task_type_assign_to_group', 'ROperationTasksType.ROpTaskTypeAssignToGroup = ?', $iRoleId)
                ->condition('r_op_task_type_notify_to_group', 'ROperationTasksType.ROpTaskTypeNotifyToGroup = ?', $iRoleId)
                ->where(array('r_op_task_type_assign_to_group', 'r_op_task_type_notify_to_group'), CRITERIA::LOGICAL_OR)
                ->count() ||
                // Searching in r_prestations table
                RPrestationsQuery::create()->filterByRPGroupeValidationId($iRoleId)->count()
        );
    }
}
