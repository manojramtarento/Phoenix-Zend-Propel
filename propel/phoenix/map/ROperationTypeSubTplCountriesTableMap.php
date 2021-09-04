<?php



/**
 * This class defines the structure of the 'r_operation_type_sub_tpl_countries' table.
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
class ROperationTypeSubTplCountriesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationTypeSubTplCountriesTableMap';

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
        $this->setName('r_operation_type_sub_tpl_countries');
        $this->setPhpName('ROperationTypeSubTplCountries');
        $this->setClassname('ROperationTypeSubTplCountries');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_operation_type_sub_tpl_country_id', 'ROperationTypeSubTplCountryId', 'INTEGER', true, 4, null);
        $this->addForeignKey('r_operation_type_sub_tpl_country_tpl_id', 'ROperationTypeSubTplCountryTplId', 'INTEGER', 'r_operation_type_sub_tpl', 'ost_tpl_id', false, 4, null);
        $this->addForeignKey('r_operation_type_sub_tpl_country_r_country_id', 'ROperationTypeSubTplCountryRCountryId', 'INTEGER', 'r_countries', 'r_country_id', false, 4, null);
        $this->addColumn('r_operation_type_sub_tpl_country_is_country_linked', 'ROperationTypeSubTplCountryIsCountryLinked', 'TINYINT', true, 1, 1);
        // validators
        $this->addValidator('r_operation_type_sub_tpl_country_tpl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_type_sub_tpl_country_tpl_id doit être un string.');
        $this->addValidator('r_operation_type_sub_tpl_country_r_country_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_type_sub_tpl_country_r_country_id doit être un int.');
        $this->addValidator('r_operation_type_sub_tpl_country_is_country_linked', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_operation_type_sub_tpl_country_is_country_linked doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TemplateCountry', 'RCountries', RelationMap::MANY_TO_ONE, array('r_operation_type_sub_tpl_country_r_country_id' => 'r_country_id', ), null, null);
        $this->addRelation('Template', 'ROperationTypeSubTpl', RelationMap::MANY_TO_ONE, array('r_operation_type_sub_tpl_country_tpl_id' => 'ost_tpl_id', ), null, null);
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

} // ROperationTypeSubTplCountriesTableMap
