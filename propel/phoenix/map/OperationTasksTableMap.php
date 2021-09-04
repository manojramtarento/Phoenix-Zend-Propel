<?php



/**
 * This class defines the structure of the 'operation_tasks' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.phoenix.map
 */
class OperationTasksTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationTasksTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('operation_tasks');
        $this->setPhpName('OperationTasks');
        $this->setClassname('OperationTasks');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('op_task_id', 'OpTaskId', 'INTEGER', true, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', false, 4, null);
        $this->addColumn('op_task_type_id', 'OpTaskTypeId', 'INTEGER', false, 4, null);
        $this->addColumn('op_task_deadline', 'OpTaskDeadline', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_task_alerte', 'OpTaskAlerte', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_task_retard', 'OpTaskRetard', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_task_duree_estim', 'OpTaskDureeEstim', 'INTEGER', false, 4, null);
        $this->addColumn('op_task_duree_reelle', 'OpTaskDureeReelle', 'INTEGER', false, 4, null);
        $this->addColumn('op_task_detail', 'OpTaskDetail', 'LONGVARCHAR', false, 2147483647, null);
        $this->addColumn('op_task_done', 'OpTaskDone', 'TIMESTAMP', false, 16, null);
        $this->addColumn('op_task_comments', 'OpTaskComments', 'LONGVARCHAR', false, 2147483647, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('op_task_assign_to_user', 'OpTaskAssignToUser', 'INTEGER', false, 4, null);
        $this->addColumn('op_task_notify_to_user', 'OpTaskNotifyToUser', 'INTEGER', false, 4, null);
        $this->addColumn('op_task_assign_to_group', 'OpTaskAssignToGroup', 'SMALLINT', false, 2, null);
        $this->addColumn('op_task_notify_to_group', 'OpTaskNotifyToGroup', 'SMALLINT', false, 2, null);
        // validators
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('op_task_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_task_type_id doit être un int.');
        $this->addValidator('op_task_deadline', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_task_deadline doit être un string.');
        $this->addValidator('op_task_alerte', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_task_alerte doit être un string.');
        $this->addValidator('op_task_retard', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_task_retard doit être un string.');
        $this->addValidator('op_task_duree_estim', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_task_duree_estim doit être un int.');
        $this->addValidator('op_task_duree_reelle', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_task_duree_reelle doit être un int.');
        $this->addValidator('op_task_detail', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ op_task_detail ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('op_task_detail', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_task_detail doit être un string.');
        $this->addValidator('op_task_done', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_task_done doit être un string.');
        $this->addValidator('op_task_comments', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ op_task_comments ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('op_task_comments', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_task_comments doit être un string.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('op_task_assign_to_user', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_task_assign_to_user doit être un int.');
        $this->addValidator('op_task_notify_to_user', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_task_notify_to_user doit être un int.');
        $this->addValidator('op_task_assign_to_group', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_task_assign_to_group doit être un int.');
        $this->addValidator('op_task_notify_to_group', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_task_notify_to_group doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // OperationTasksTableMap
