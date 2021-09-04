<?php



/**
 * This class defines the structure of the 'operation_sales_teams' table.
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
class OperationSalesTeamsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationSalesTeamsTableMap';

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
        $this->setName('operation_sales_teams');
        $this->setPhpName('OperationSalesTeams');
        $this->setClassname('OperationSalesTeams');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ope_sales_team_id', 'OpeSalesTeamId', 'INTEGER', true, 4, null);
        $this->addColumn('sales_team_id', 'SalesTeamId', 'TINYINT', false, 1, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        // validators
        $this->addValidator('sales_team_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ sales_team_id doit être un int.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
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

} // OperationSalesTeamsTableMap
