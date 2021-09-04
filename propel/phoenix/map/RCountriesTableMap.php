<?php



/**
 * This class defines the structure of the 'r_countries' table.
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
class RCountriesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RCountriesTableMap';

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
        $this->setName('r_countries');
        $this->setPhpName('RCountries');
        $this->setClassname('RCountries');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_country_id', 'RCountryId', 'INTEGER', true, 4, null);
        $this->addColumn('r_country_code', 'RCountryCode', 'VARCHAR', true, 3, null);
        $this->addColumn('r_country_name', 'RCountryName', 'VARCHAR', false, 100, null);
        $this->addColumn('r_country_zone_code_bin', 'RCountryZoneCodeBin', 'SMALLINT', false, 2, null);
        $this->addForeignKey('r_country_r_currency_id', 'RCountryRCurrencyId', 'INTEGER', 'r_currencies', 'r_currency_id', false, 4, null);
        $this->addForeignKey('r_country_r_country_calling_code_id', 'RCountryRCountryCallingCodeId', 'INTEGER', 'r_countries_calling_codes', 'r_country_calling_code_id', false, 4, null);
        $this->addColumn('r_country_actif', 'RCountryActif', 'TINYINT', true, 1, 1);
        // validators
        $this->addValidator('r_country_code', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_country_code doit être renseigné.');
        $this->addValidator('r_country_code', 'maxLength', 'propel.validator.MaxLengthValidator', '3', 'Le champ r_country_code ne doit pas dépasser 3 caractères.');
        $this->addValidator('r_country_code', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_country_code doit être un string.');
        $this->addValidator('r_country_name', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Le champ r_country_name ne doit pas dépasser 50 caractères.');
        $this->addValidator('r_country_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_country_name doit être un string.');
        $this->addValidator('r_country_zone_code_bin', 'maxLength', 'propel.validator.MaxLengthValidator', '2', 'Le champ r_country_zone_code_bin ne doit pas dépasser 2 caractères.');
        $this->addValidator('r_country_zone_code_bin', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_country_zone_code_bin doit être un int.');
        $this->addValidator('r_country_r_currency_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_country_r_currency_id doit être un int.');
        $this->addValidator('r_country_r_country_calling_code_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_country_r_country_calling_code_id doit être un int.');
        $this->addValidator('r_country_actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_country_actif doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RCurrencies', 'RCurrencies', RelationMap::MANY_TO_ONE, array('r_country_r_currency_id' => 'r_currency_id', ), null, null);
        $this->addRelation('RCountriesCallingCodes', 'RCountriesCallingCodes', RelationMap::MANY_TO_ONE, array('r_country_r_country_calling_code_id' => 'r_country_calling_code_id', ), null, null);
        $this->addRelation('ClientFactureOptions', 'ClientFactureOptions', RelationMap::ONE_TO_MANY, array('r_country_id' => 'cl_fact_country_id', ), null, null, 'ClientFactureOptionss');
        $this->addRelation('LnkOperationCountry', 'LnkOperationCountry', RelationMap::ONE_TO_MANY, array('r_country_id' => 'lnk_op_country_id', ), null, null, 'LnkOperationCountrys');
        $this->addRelation('LnkRCountryRCultures', 'LnkRCountryRCultures', RelationMap::ONE_TO_MANY, array('r_country_id' => 'lnk_r_country_r_culture_r_country_id', ), null, null, 'LnkRCountryRCulturess');
        $this->addRelation('LnkOperationPrimeRCountries', 'LnkOperationPrimeRCountries', RelationMap::ONE_TO_MANY, array('r_country_id' => 'lnk_operation_prime_r_country_r_country_id', ), null, null, 'LnkOperationPrimeRCountriess');
        $this->addRelation('ROperationTypeSubTplCountries', 'ROperationTypeSubTplCountries', RelationMap::ONE_TO_MANY, array('r_country_id' => 'r_operation_type_sub_tpl_country_r_country_id', ), null, null, 'ROperationTypeSubTplCountriess');
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
            'validateisunique' =>  array (
  'columns' => 'r_country_code',
  'message' => 'Ce code pays existe déjà.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // RCountriesTableMap
