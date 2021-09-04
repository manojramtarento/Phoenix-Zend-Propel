<?php



/**
 * This class defines the structure of the 'r_operation_type_sub_tpl_prime' table.
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
class ROperationTypeSubTplPrimeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationTypeSubTplPrimeTableMap';

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
        $this->setName('r_operation_type_sub_tpl_prime');
        $this->setPhpName('ROperationTypeSubTplPrime');
        $this->setClassname('ROperationTypeSubTplPrime');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ost_tpl_prime_id', 'OstTplPrimeId', 'INTEGER', true, 4, null);
        $this->addForeignKey('ost_tpl_id', 'OstTplId', 'INTEGER', 'r_operation_type_sub_tpl', 'ost_tpl_id', false, 4, null);
        $this->addColumn('ost_tpl_prime_libelle', 'OstTplPrimeLibelle', 'VARCHAR', true, 100, null);
        $this->addColumn('ost_tpl_prime_numero', 'OstTplPrimeNumero', 'SMALLINT', false, 2, null);
        $this->addForeignKey('ost_tpl_reward_type', 'OstTplRewardType', 'INTEGER', 'r_reward_types', 'r_reward_type_id', false, 4, null);
        // validators
        $this->addValidator('ost_tpl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ost_tpl_id doit être un int.');
        $this->addValidator('ost_tpl_prime_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Un nom doit être donné à la prime');
        $this->addValidator('ost_tpl_prime_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ ost_tpl_prime_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('ost_tpl_prime_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ost_tpl_prime_libelle doit être un string.');
        $this->addValidator('ost_tpl_prime_numero', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ost_tpl_prime_numero doit être un int.');
        $this->addValidator('ost_tpl_reward_type', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ost_tpl_reward_type doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ROperationTypeSubTpl', 'ROperationTypeSubTpl', RelationMap::MANY_TO_ONE, array('ost_tpl_id' => 'ost_tpl_id', ), null, null);
        $this->addRelation('RRewardTypes', 'RRewardTypes', RelationMap::MANY_TO_ONE, array('ost_tpl_reward_type' => 'r_reward_type_id', ), null, null);
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

} // ROperationTypeSubTplPrimeTableMap
