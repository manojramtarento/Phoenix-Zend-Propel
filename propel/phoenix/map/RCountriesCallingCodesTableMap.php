<?php



/**
 * This class defines the structure of the 'r_countries_calling_codes' table.
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
class RCountriesCallingCodesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RCountriesCallingCodesTableMap';

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
        $this->setName('r_countries_calling_codes');
        $this->setPhpName('RCountriesCallingCodes');
        $this->setClassname('RCountriesCallingCodes');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_country_calling_code_id', 'RCountryCallingCodeId', 'INTEGER', true, 4, null);
        $this->addColumn('r_country_calling_code', 'RCountryCallingCode', 'VARCHAR', true, 8, null);
        $this->addColumn('r_country_calling_code_actif', 'RCountryCallingCodeActif', 'TINYINT', true, 1, 1);
        // validators
        $this->addValidator('r_country_calling_code_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_country_calling_code_id doit être un int.');
        $this->addValidator('r_country_calling_code', 'maxLength', 'propel.validator.MaxLengthValidator', '8', 'Le champ r_country_calling_code ne doit pas dépasser 8 caractères.');
        $this->addValidator('r_country_calling_code', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_country_calling_code doit être renseigné.');
        $this->addValidator('r_country_calling_code', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_country_calling_code doit être un string.');
        $this->addValidator('r_country_calling_code_actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_country_calling_code_actif doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RCountries', 'RCountries', RelationMap::ONE_TO_MANY, array('r_country_calling_code_id' => 'r_country_r_country_calling_code_id', ), null, null, 'RCountriess');
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
  'columns' => 'r_country_calling_code',
  'message' => 'Cet indicatif existe déjà.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // RCountriesCallingCodesTableMap
