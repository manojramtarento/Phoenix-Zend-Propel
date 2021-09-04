<?php



/**
 * This class defines the structure of the 'lnk_operation_country' table.
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
class LnkOperationCountryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkOperationCountryTableMap';

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
        $this->setName('lnk_operation_country');
        $this->setPhpName('LnkOperationCountry');
        $this->setClassname('LnkOperationCountry');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('op_id', 'OpId', 'INTEGER' , 'operations', 'op_id', true, 4, null);
        $this->addForeignPrimaryKey('lnk_op_country_id', 'LnkOpCountryId', 'INTEGER' , 'r_countries', 'r_country_id', true, 4, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('RCountries', 'RCountries', RelationMap::MANY_TO_ONE, array('lnk_op_country_id' => 'r_country_id', ), null, null);
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

} // LnkOperationCountryTableMap
