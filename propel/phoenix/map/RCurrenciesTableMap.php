<?php



/**
 * This class defines the structure of the 'r_currencies' table.
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
class RCurrenciesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RCurrenciesTableMap';

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
        $this->setName('r_currencies');
        $this->setPhpName('RCurrencies');
        $this->setClassname('RCurrencies');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_currency_id', 'RCurrencyId', 'INTEGER', true, 4, null);
        $this->addColumn('r_currency_iso_code', 'RCurrencyIsoCode', 'VARCHAR', true, 3, null);
        $this->addColumn('r_currency_label', 'RCurrencyLabel', 'VARCHAR', false, 100, null);
        $this->addColumn('r_currency_actif', 'RCurrencyActif', 'TINYINT', true, 1, 1);
        // validators
        $this->addValidator('r_currency_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_currency_id doit être un int.');
        $this->addValidator('r_currency_iso_code', 'maxLength', 'propel.validator.MaxLengthValidator', '3', 'Le champ r_currency_iso_code ne doit pas dépasser 3 caractères.');
        $this->addValidator('r_currency_iso_code', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_currency_iso_code doit être renseigné.');
        $this->addValidator('r_currency_iso_code', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_currency_iso_code doit être un string.');
        $this->addValidator('r_currency_label', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_currency_label ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_currency_label', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_currency_label doit être un string.');
        $this->addValidator('r_currency_actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_currency_actif doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OperationPrimes', 'OperationPrimes', RelationMap::ONE_TO_MANY, array('r_currency_id' => 'operation_prime_currency_id', ), null, null, 'OperationPrimess');
        $this->addRelation('RCountries', 'RCountries', RelationMap::ONE_TO_MANY, array('r_currency_id' => 'r_country_r_currency_id', ), null, null, 'RCountriess');
        $this->addRelation('ROperationTypeSubTplCurrencies', 'ROperationTypeSubTplCurrencies', RelationMap::ONE_TO_MANY, array('r_currency_id' => 'r_operation_type_sub_tpl_currency_r_currency_id', ), null, null, 'ROperationTypeSubTplCurrenciess');
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
  'columns' => 'r_currency_iso_code',
  'message' => 'Ce code de devise existe déjà.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // RCurrenciesTableMap
