<?php



/**
 * This class defines the structure of the 'operation_statuts' table.
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
class OperationStatutsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationStatutsTableMap';

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
        $this->setName('operation_statuts');
        $this->setPhpName('OperationStatuts');
        $this->setClassname('OperationStatuts');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('hs_id', 'HsId', 'INTEGER', true, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', false, 4, null);
        $this->addForeignKey('hs_old_statut_id', 'HsOldStatutId', 'TINYINT', 'r_operation_status', 'os_id', false, 1, null);
        $this->addForeignKey('hs_new_statut_id', 'HsNewStatutId', 'TINYINT', 'r_operation_status', 'os_id', false, 1, null);
        $this->addForeignKey('hs_refus_id', 'HsRefusId', 'SMALLINT', 'r_operation_statut_refus', 'r_op_statut_refus_id', false, 2, null);
        $this->addColumn('actif', 'Actif', 'TINYINT', true, 1, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'users', 'user_id', true, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', true, 16, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        // validators
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('hs_old_statut_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ hs_old_statut_id doit être un int.');
        $this->addValidator('hs_new_statut_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ hs_new_statut_id doit être un int.');
        $this->addValidator('hs_refus_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ hs_refus_id doit être un int.');
        $this->addValidator('actif', 'required', 'propel.validator.RequiredValidator', '', 'Le champ actif doit être renseigné.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ actif doit être un int.');
        $this->addValidator('user_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ user_id doit être renseigné.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('date_create', 'required', 'propel.validator.RequiredValidator', '', 'Le champ date_create doit être renseigné.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('OldROperationStatus', 'ROperationStatus', RelationMap::MANY_TO_ONE, array('hs_old_statut_id' => 'os_id', ), null, null);
        $this->addRelation('NewROperationStatus', 'ROperationStatus', RelationMap::MANY_TO_ONE, array('hs_new_statut_id' => 'os_id', ), null, null);
        $this->addRelation('ROperationStatutRefus', 'ROperationStatutRefus', RelationMap::MANY_TO_ONE, array('hs_refus_id' => 'r_op_statut_refus_id', ), null, null);
        $this->addRelation('Users', 'Users', RelationMap::MANY_TO_ONE, array('user_id' => 'user_id', ), null, null);
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

} // OperationStatutsTableMap
