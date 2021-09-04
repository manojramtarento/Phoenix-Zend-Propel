<?php



/**
 * This class defines the structure of the 'operation_primes' table.
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
class OperationPrimesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationPrimesTableMap';

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
        $this->setName('operation_primes');
        $this->setPhpName('OperationPrimes');
        $this->setClassname('OperationPrimes');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('op_prime_id', 'OpPrimeId', 'INTEGER', true, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', false, 4, null);
        $this->addColumn('op_prime_libelle', 'OpPrimeLibelle', 'VARCHAR', true, 40, null);
        $this->addColumn('op_prime_numero', 'OpPrimeNumero', 'SMALLINT', false, 2, null);
        $this->addColumn('gdl_art_id', 'GdlArtId', 'INTEGER', false, 4, null);
        $this->addForeignKey('operation_prime_currency_id', 'OperationPrimeCurrencyId', 'INTEGER', 'r_currencies', 'r_currency_id', false, 4, null);
        $this->addForeignKey('operation_prime_r_reward_type_id', 'OperationPrimeRRewardTypeId', 'INTEGER', 'r_reward_types', 'r_reward_type_id', false, 4, null);
        $this->addForeignKey('operation_prime_r_reward_expedition_mode_id', 'OperationPrimeRRewardExpeditionModeId', 'INTEGER', 'r_reward_expedition_modes', 'r_reward_expedition_mode_id', false, 4, null);
        $this->addForeignKey('operation_prime_r_reward_transporter_id', 'OperationPrimeRRewardTransporterId', 'INTEGER', 'r_reward_transporters', 'r_reward_transporter_id', false, 4, null);
        $this->addColumn('operation_prime_fixed_amount', 'OperationPrimeFixedAmount', 'NUMERIC', false, 18, null);
        $this->addColumn('operation_prime_product_price_pourcentage', 'OperationPrimeProductPricePourcentage', 'INTEGER', false, 3, null);
        $this->addColumn('operation_prime_maximum_amount', 'OperationPrimeMaximumAmount', 'NUMERIC', false, 18, null);
        // validators
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('op_prime_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Un nom doit être donné à la prime');
        $this->addValidator('op_prime_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ op_prime_libelle ne doit pas dépasser 40 caractères.');
        $this->addValidator('op_prime_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_prime_libelle doit être un string.');
        $this->addValidator('op_prime_numero', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prime_numero doit être un int.');
        $this->addValidator('gdl_art_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ gdl_art_id doit être un int.');
        $this->addValidator('operation_prime_currency_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ operation_prime_currency_id doit être un int.');
        $this->addValidator('operation_prime_r_reward_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ operation_prime_r_reward_type_id doit être un int.');
        $this->addValidator('operation_prime_r_reward_expedition_mode_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ operation_prime_r_reward_expedition_mode_id doit être un int.');
        $this->addValidator('operation_prime_r_reward_transporter_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ operation_prime_r_reward_transporter_id doit être un int.');
        $this->addValidator('operation_prime_fixed_amount', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ Montant fixe doit être un numérique.');
        $this->addValidator('operation_prime_maximum_amount', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ Montant maximal doit être un numérique.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('RCurrencies', 'RCurrencies', RelationMap::MANY_TO_ONE, array('operation_prime_currency_id' => 'r_currency_id', ), null, null);
        $this->addRelation('RRewardTypes', 'RRewardTypes', RelationMap::MANY_TO_ONE, array('operation_prime_r_reward_type_id' => 'r_reward_type_id', ), null, null);
        $this->addRelation('RRewardExpeditionModes', 'RRewardExpeditionModes', RelationMap::MANY_TO_ONE, array('operation_prime_r_reward_expedition_mode_id' => 'r_reward_expedition_mode_id', ), null, null);
        $this->addRelation('RRewardTransporters', 'RRewardTransporters', RelationMap::MANY_TO_ONE, array('operation_prime_r_reward_transporter_id' => 'r_reward_transporter_id', ), null, null);
        $this->addRelation('OperationPrestations', 'OperationPrestations', RelationMap::ONE_TO_MANY, array('op_prime_id' => 'op_prest_prime_id', ), null, null, 'OperationPrestationss');
        $this->addRelation('OperationScenarii', 'OperationScenarii', RelationMap::ONE_TO_MANY, array('op_prime_id' => 'op_r_prime_id', ), null, null, 'OperationScenariis');
        $this->addRelation('LnkOperationPrimeRCountries', 'LnkOperationPrimeRCountries', RelationMap::ONE_TO_MANY, array('op_prime_id' => 'lnk_operation_prime_r_country_operation_prime_id', ), null, null, 'LnkOperationPrimeRCountriess');
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
  'columns' => 'op_prime_libelle,op_id',
  'message' => 'Ce nom est déjà utilisé par un prime de la même opération.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // OperationPrimesTableMap
