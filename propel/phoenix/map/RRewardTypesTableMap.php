<?php



/**
 * This class defines the structure of the 'r_reward_types' table.
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
class RRewardTypesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RRewardTypesTableMap';

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
        $this->setName('r_reward_types');
        $this->setPhpName('RRewardTypes');
        $this->setClassname('RRewardTypes');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_reward_type_id', 'RRewardTypeId', 'INTEGER', true, 4, null);
        $this->addColumn('r_reward_type_label', 'RRewardTypeLabel', 'VARCHAR', true, 50, null);
        $this->addColumn('r_reward_type_actif', 'RRewardTypeActif', 'TINYINT', true, 1, 1);
        // validators
        $this->addValidator('r_reward_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_reward_type_id doit être un int.');
        $this->addValidator('r_reward_type_label', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Le champ r_reward_type_label ne doit pas dépasser 50 caractères.');
        $this->addValidator('r_reward_type_label', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_reward_type_label doit être renseigné.');
        $this->addValidator('r_reward_type_label', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_reward_type_label doit être un string.');
        $this->addValidator('r_reward_type_actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_reward_type_actif doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OperationPrimes', 'OperationPrimes', RelationMap::ONE_TO_MANY, array('r_reward_type_id' => 'operation_prime_r_reward_type_id', ), null, null, 'OperationPrimess');
        $this->addRelation('ROperationTypeSubTplPrime', 'ROperationTypeSubTplPrime', RelationMap::ONE_TO_MANY, array('r_reward_type_id' => 'ost_tpl_reward_type', ), null, null, 'ROperationTypeSubTplPrimes');
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
  'columns' => 'r_reward_type_label',
  'message' => 'Ce type de prime existe déjà.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // RRewardTypesTableMap
