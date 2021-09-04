<?php



/**
 * This class defines the structure of the 'r_countries_zoning' table.
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
class RCountriesZoningTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RCountriesZoningTableMap';

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
        $this->setName('r_countries_zoning');
        $this->setPhpName('RCountriesZoning');
        $this->setClassname('RCountriesZoning');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('r_country_zone_id', 'RCountryZoneId', 'SMALLINT', true, 2, null);
        $this->addColumn('r_country_zone_code_bin', 'RCountryZoneCodeBin', 'TINYINT', true, 1, null);
        $this->addColumn('r_country_zone_name', 'RCountryZoneName', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('r_country_zone_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_country_zone_id doit être renseigné.');
        $this->addValidator('r_country_zone_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_country_zone_id doit être un int.');
        $this->addValidator('r_country_zone_code_bin', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_country_zone_code_bin doit être renseigné.');
        $this->addValidator('r_country_zone_code_bin', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_country_zone_code_bin doit être un int.');
        $this->addValidator('r_country_zone_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_country_zone_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_country_zone_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_country_zone_name doit être un string.');
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

} // RCountriesZoningTableMap
