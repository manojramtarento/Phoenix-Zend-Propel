<?php



/**
 * This class defines the structure of the 'r_rubriques_type' table.
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
class RRubriquesTypeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RRubriquesTypeTableMap';

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
        $this->setName('r_rubriques_type');
        $this->setPhpName('RRubriquesType');
        $this->setClassname('RRubriquesType');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('rubrique_type_id', 'RubriqueTypeId', 'INTEGER', true, 4, null);
        $this->addColumn('rubrique_type_libelle', 'RubriqueTypeLibelle', 'VARCHAR', false, 510, null);
        $this->addColumn('frais_fixe', 'FraisFixe', 'BOOLEAN', false, 1, null);
        // validators
        $this->addValidator('rubrique_type_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ rubrique_type_libelle ne doit pas dépasser 510 caractères.');
        $this->addValidator('rubrique_type_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ rubrique_type_libelle doit être un string.');
        $this->addValidator('frais_fixe', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ frais_fixe doit être un boolean.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OperationRubriques', 'OperationRubriques', RelationMap::ONE_TO_MANY, array('rubrique_type_id' => 'r_rub_type_id', ), null, null, 'OperationRubriquess');
        $this->addRelation('RRubriques', 'RRubriques', RelationMap::ONE_TO_MANY, array('rubrique_type_id' => 'r_rub_type_id', ), null, null, 'RRubriquess');
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_MANY, array(), null, null, 'Operationss');
        $this->addRelation('RTvaType', 'RTvaType', RelationMap::MANY_TO_MANY, array(), null, null, 'RTvaTypes');
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

} // RRubriquesTypeTableMap
