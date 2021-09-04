<?php



/**
 * This class defines the structure of the 'r_activity_kpi' table.
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
class RActivityKpiTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RActivityKpiTableMap';

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
        $this->setName('r_activity_kpi');
        $this->setPhpName('RActivityKpi');
        $this->setClassname('RActivityKpi');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_activity_kpi_id', 'RActivityKpiId', 'INTEGER', true, 4, null);
        $this->addColumn('r_activity_kpi_libelle', 'RActivityKpiLibelle', 'VARCHAR', true, 255, null);
        // validators
        $this->addValidator('r_activity_kpi_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_activity_kpi_id doit être un int.');
        $this->addValidator('r_activity_kpi_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'Le champ r_activity_kpi_libelle ne doit pas dépasser 255 caractères.');
        $this->addValidator('r_activity_kpi_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_activity_kpi_libelle doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RPAxe1', 'RPAxe1', RelationMap::ONE_TO_MANY, array('r_activity_kpi_id' => 'r_activity_kpi_id', ), null, null, 'RPAxe1s');
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

} // RActivityKpiTableMap
