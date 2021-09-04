<?php



/**
 * This class defines the structure of the 'lnk_r_country_r_cultures' table.
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
class LnkRCountryRCulturesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkRCountryRCulturesTableMap';

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
        $this->setName('lnk_r_country_r_cultures');
        $this->setPhpName('LnkRCountryRCultures');
        $this->setClassname('LnkRCountryRCultures');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('lnk_r_country_r_culture_id', 'LnkRCountryRCultureId', 'INTEGER', true, 4, null);
        $this->addForeignKey('lnk_r_country_r_culture_r_country_id', 'LnkRCountryRCultureRCountryId', 'INTEGER', 'r_countries', 'r_country_id', false, 4, null);
        $this->addForeignKey('lnk_r_country_r_culture_r_culture_id', 'LnkRCountryRCultureRCultureId', 'INTEGER', 'r_cultures', 'r_culture_id', false, 4, null);
        // validators
        $this->addValidator('lnk_r_country_r_culture_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_r_country_r_culture_id doit être un int.');
        $this->addValidator('lnk_r_country_r_culture_r_country_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_r_country_r_culture_r_country_id doit être un int.');
        $this->addValidator('lnk_r_country_r_culture_r_culture_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_r_country_r_culture_r_culture_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RCountries', 'RCountries', RelationMap::MANY_TO_ONE, array('lnk_r_country_r_culture_r_country_id' => 'r_country_id', ), null, null);
        $this->addRelation('RCultures', 'RCultures', RelationMap::MANY_TO_ONE, array('lnk_r_country_r_culture_r_culture_id' => 'r_culture_id', ), null, null);
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

} // LnkRCountryRCulturesTableMap
