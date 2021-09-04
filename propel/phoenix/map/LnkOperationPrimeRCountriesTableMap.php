<?php



/**
 * This class defines the structure of the 'lnk_operation_prime_r_countries' table.
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
class LnkOperationPrimeRCountriesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkOperationPrimeRCountriesTableMap';

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
        $this->setName('lnk_operation_prime_r_countries');
        $this->setPhpName('LnkOperationPrimeRCountries');
        $this->setClassname('LnkOperationPrimeRCountries');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('lnk_operation_prime_r_country_id', 'LnkOperationPrimeRCountryId', 'INTEGER', true, 4, null);
        $this->addForeignKey('lnk_operation_prime_r_country_operation_prime_id', 'LnkOperationPrimeRCountryOperationPrimeId', 'INTEGER', 'operation_primes', 'op_prime_id', false, 4, null);
        $this->addForeignKey('lnk_operation_prime_r_country_r_country_id', 'LnkOperationPrimeRCountryRcountryId', 'INTEGER', 'r_countries', 'r_country_id', false, 4, null);
        $this->addColumn('lnk_operation_prime_r_country_is_country_linked', 'LnkOperationPrimeRCountryIsCountryLinked', 'TINYINT', true, 1, 0);
        // validators
        $this->addValidator('lnk_operation_prime_r_country_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_operation_prime_r_country_id doit être un int.');
        $this->addValidator('lnk_operation_prime_r_country_operation_prime_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_operation_prime_r_country_operation_prime_id doit être un int.');
        $this->addValidator('lnk_operation_prime_r_country_r_country_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_operation_prime_r_country_r_country_id doit être un int.');
        $this->addValidator('lnk_operation_prime_r_country_is_country_linked', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_operation_prime_r_country_is_country_linked doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OperationPrimes', 'OperationPrimes', RelationMap::MANY_TO_ONE, array('lnk_operation_prime_r_country_operation_prime_id' => 'op_prime_id', ), null, null);
        $this->addRelation('RCountries', 'RCountries', RelationMap::MANY_TO_ONE, array('lnk_operation_prime_r_country_r_country_id' => 'r_country_id', ), null, null);
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

} // LnkOperationPrimeRCountriesTableMap
