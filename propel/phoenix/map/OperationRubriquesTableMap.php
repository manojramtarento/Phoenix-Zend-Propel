<?php



/**
 * This class defines the structure of the 'operation_rubriques' table.
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
class OperationRubriquesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationRubriquesTableMap';

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
        $this->setName('operation_rubriques');
        $this->setPhpName('OperationRubriques');
        $this->setClassname('OperationRubriques');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        $this->setIsCrossRef(true);
        // columns
        $this->addPrimaryKey('op_rubrique_id', 'OpRubriqueId', 'INTEGER', true, 4, null);
        $this->addColumn('op_r_rubrique_id', 'OpRRubriqueId', 'INTEGER', false, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', false, 4, null);
        $this->addColumn('op_rubrique_libelle', 'OpRubriqueLibelle', 'VARCHAR', false, 100, null);
        $this->addColumn('op_rubrique_order', 'OpRubriqueOrder', 'SMALLINT', false, 2, null);
        $this->addForeignKey('r_tva_type_id', 'RTvaTypeId', 'INTEGER', 'r_tva_type', 'r_tva_id', true, 4, null);
        $this->addForeignKey('r_rub_type_id', 'RRubTypeId', 'INTEGER', 'r_rubriques_type', 'rubrique_type_id', true, 4, null);
        // validators
        $this->addValidator('op_r_rubrique_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_r_rubrique_id doit être un int.');
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('op_rubrique_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ op_rubrique_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('op_rubrique_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_rubrique_libelle doit être un string.');
        $this->addValidator('op_rubrique_order', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_rubrique_order doit être un int.');
        $this->addValidator('r_tva_type_id', 'required', 'propel.validator.RequiredValidator', '', 'Un taux de tva doit être défini pour la prestation.');
        $this->addValidator('r_rub_type_id', 'required', 'propel.validator.RequiredValidator', '', 'Le type de frais doit être défini pour la prestation.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('RRubriquesType', 'RRubriquesType', RelationMap::MANY_TO_ONE, array('r_rub_type_id' => 'rubrique_type_id', ), null, null);
        $this->addRelation('RTvaType', 'RTvaType', RelationMap::MANY_TO_ONE, array('r_tva_type_id' => 'r_tva_id', ), null, null);
        $this->addRelation('OperationPrestations', 'OperationPrestations', RelationMap::ONE_TO_MANY, array('op_rubrique_id' => 'op_prest_rubri_id', ), null, null, 'OperationPrestationss');
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

} // OperationRubriquesTableMap
