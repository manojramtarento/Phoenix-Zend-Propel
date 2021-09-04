<?php



/**
 * This class defines the structure of the 'operations_ext' table.
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
class OperationsExtTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationsExtTableMap';

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
        $this->setName('operations_ext');
        $this->setPhpName('OperationsExt');
        $this->setClassname('OperationsExt');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('op_id', 'OpId', 'INTEGER', true, 4, null);
        $this->addColumn('opt_stat_hide_bilan_financier', 'OptStatHideBilanFinancier', 'BOOLEAN', true, 1, null);
        $this->addColumn('opt_sync_task_date', 'OptSyncTaskDate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('opt_sync_gedelog_date', 'OptSyncGedelogDate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('opt_sync_task_user_id', 'OptSyncTaskUserId', 'INTEGER', false, 4, null);
        $this->addColumn('opt_sync_gedelog_user_id', 'OptSyncGedelogUserId', 'INTEGER', false, 4, null);
        // validators
        $this->addValidator('opt_stat_hide_bilan_financier', 'required', 'propel.validator.RequiredValidator', '', 'Le champ opt_stat_hide_bilan_financier doit être renseigné.');
        $this->addValidator('opt_stat_hide_bilan_financier', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ opt_stat_hide_bilan_financier doit être un boolean.');
        $this->addValidator('opt_sync_task_date', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ opt_sync_task_date doit être un string.');
        $this->addValidator('opt_sync_gedelog_date', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ opt_sync_gedelog_date doit être un string.');
        $this->addValidator('opt_sync_task_user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ opt_sync_task_user_id doit être un int.');
        $this->addValidator('opt_sync_gedelog_user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ opt_sync_gedelog_user_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_ONE, array('op_id' => 'op_id', ), null, null);
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

} // OperationsExtTableMap
