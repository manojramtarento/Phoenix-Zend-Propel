<?php



/**
 * This class defines the structure of the 'r_operation_status' table.
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
class ROperationStatusTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationStatusTableMap';

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
        $this->setName('r_operation_status');
        $this->setPhpName('ROperationStatus');
        $this->setClassname('ROperationStatus');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('os_id', 'OsId', 'TINYINT', true, 1, null);
        $this->addColumn('os_libelle', 'OsLibelle', 'VARCHAR', true, 510, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('actif', 'Actif', 'TINYINT', false, 1, null);
        // validators
        $this->addValidator('os_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Le champ os_libelle doit être renseigné.');
        $this->addValidator('os_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ os_libelle ne doit pas dépasser 510 caractères.');
        $this->addValidator('os_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ os_libelle doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ actif doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OperationStatutsRelatedByHsOldStatutId', 'OperationStatuts', RelationMap::ONE_TO_MANY, array('os_id' => 'hs_old_statut_id', ), null, null, 'OperationStatutssRelatedByHsOldStatutId');
        $this->addRelation('OperationStatutsRelatedByHsNewStatutId', 'OperationStatuts', RelationMap::ONE_TO_MANY, array('os_id' => 'hs_new_statut_id', ), null, null, 'OperationStatutssRelatedByHsNewStatutId');
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('os_id' => 'op_status_id', ), null, null, 'Operationss');
        $this->addRelation('ROperationStatusRequiredOptions', 'ROperationStatusRequiredOptions', RelationMap::ONE_TO_MANY, array('os_id' => 'r_operation_status_required_options_r_operation_status_os_id', ), null, null, 'ROperationStatusRequiredOptionss');
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

} // ROperationStatusTableMap
