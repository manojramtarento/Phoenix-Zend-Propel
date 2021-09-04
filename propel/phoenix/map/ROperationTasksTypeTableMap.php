<?php



/**
 * This class defines the structure of the 'r_operation_tasks_type' table.
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
class ROperationTasksTypeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationTasksTypeTableMap';

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
        $this->setName('r_operation_tasks_type');
        $this->setPhpName('ROperationTasksType');
        $this->setClassname('ROperationTasksType');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_op_task_type_id', 'ROpTaskTypeId', 'INTEGER', true, 4, null);
        $this->addColumn('r_op_task_type_libelle', 'ROpTaskTypeLibelle', 'VARCHAR', true, 200, null);
        $this->addColumn('r_op_task_type_date_ref', 'ROpTaskTypeDateRef', 'TINYINT', false, 1, null);
        $this->addColumn('r_op_task_type_delta', 'ROpTaskTypeDelta', 'INTEGER', false, 4, null);
        $this->addColumn('r_op_task_type_rappel', 'ROpTaskTypeRappel', 'INTEGER', false, 4, 0);
        $this->addColumn('r_op_task_type_assign_to_user', 'ROpTaskTypeAssignToUser', 'INTEGER', false, 4, null);
        $this->addColumn('r_op_task_type_notify_to_user', 'ROpTaskTypeNotifyToUser', 'INTEGER', false, 4, null);
        $this->addColumn('r_op_task_type_assign_to_group', 'ROpTaskTypeAssignToGroup', 'SMALLINT', false, 2, null);
        $this->addColumn('r_op_task_type_notify_to_group', 'ROpTaskTypeNotifyToGroup', 'SMALLINT', false, 2, null);
        $this->addColumn('r_op_task_type_assign_to_cp', 'ROpTaskTypeAssignToCp', 'BOOLEAN', false, 1, null);
        $this->addColumn('r_op_task_type_assign_to_dc', 'ROpTaskTypeAssignToDc', 'BOOLEAN', false, 1, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        // validators
        $this->addValidator('r_op_task_type_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_op_task_type_libelle doit être renseigné.');
        $this->addValidator('r_op_task_type_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '200', 'Le champ r_op_task_type_libelle ne doit pas dépasser 200 caractères.');
        $this->addValidator('r_op_task_type_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_op_task_type_libelle doit être un string.');
        $this->addValidator('r_op_task_type_date_ref', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_task_type_date_ref doit être un int.');
        $this->addValidator('r_op_task_type_delta', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_task_type_delta doit être un int.');
        $this->addValidator('r_op_task_type_rappel', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_task_type_rappel doit être un int.');
        $this->addValidator('r_op_task_type_assign_to_user', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_task_type_assign_to_user doit être un int.');
        $this->addValidator('r_op_task_type_notify_to_user', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_task_type_notify_to_user doit être un int.');
        $this->addValidator('r_op_task_type_assign_to_group', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_task_type_assign_to_group doit être un int.');
        $this->addValidator('r_op_task_type_notify_to_group', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_op_task_type_notify_to_group doit être un int.');
        $this->addValidator('r_op_task_type_assign_to_cp', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ r_op_task_type_assign_to_cp doit être un boolean.');
        $this->addValidator('r_op_task_type_assign_to_dc', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ r_op_task_type_assign_to_dc doit être un boolean.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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

} // ROperationTasksTypeTableMap
