<?php



/**
 * This class defines the structure of the 'r_facture_types' table.
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
class RFactureTypesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RFactureTypesTableMap';

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
        $this->setName('r_facture_types');
        $this->setPhpName('RFactureTypes');
        $this->setClassname('RFactureTypes');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('r_fact_type_id', 'RFactTypeId', 'TINYINT', true, 1, null);
        $this->addColumn('r_fact_type_libelle', 'RFactTypeLibelle', 'VARCHAR', false, 100, null);
        $this->addColumn('r_fact_type_libelle_detail', 'RFactTypeLibelleDetail', 'VARCHAR', false, 100, null);
        $this->addColumn('r_fact_type_libelle_detail_en', 'RFactTypeLibelleDetailEn', 'VARCHAR', false, 100, null);
        $this->addForeignKey('r_fact_calc_id', 'RFactCalcId', 'INTEGER', 'r_facture_calculs', 'r_fact_calc_id', false, 4, null);
        $this->addForeignKey('r_fact_pres_id', 'RFactPresId', 'TINYINT', 'r_facture_presentations', 'r_fact_pres_id', false, 1, null);
        // validators
        $this->addValidator('r_fact_type_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_fact_type_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_fact_type_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_fact_type_libelle doit être un string.');
        $this->addValidator('r_fact_type_libelle_detail', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_fact_type_libelle_detail ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_fact_type_libelle_detail', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_fact_type_libelle_detail doit être un string.');
        $this->addValidator('r_fact_type_libelle_detail_en', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_fact_type_libelle_detail_en ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_fact_type_libelle_detail_en', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_fact_type_libelle_detail_en doit être un string.');
        $this->addValidator('r_fact_calc_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_fact_calc_id doit être un int.');
        $this->addValidator('r_fact_pres_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_fact_pres_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RFactureCalculs', 'RFactureCalculs', RelationMap::MANY_TO_ONE, array('r_fact_calc_id' => 'r_fact_calc_id', ), null, null);
        $this->addRelation('RFacturePresentations', 'RFacturePresentations', RelationMap::MANY_TO_ONE, array('r_fact_pres_id' => 'r_fact_pres_id', ), null, null);
        $this->addRelation('Factures', 'Factures', RelationMap::ONE_TO_MANY, array('r_fact_type_id' => 'r_fact_type_id', ), null, null, 'Facturess');
        $this->addRelation('PlanFacturationDetails', 'PlanFacturationDetails', RelationMap::ONE_TO_MANY, array('r_fact_type_id' => 'pfd_type_fact_id', ), null, null, 'PlanFacturationDetailss');
        $this->addRelation('FactureEditionHistory', 'FactureEditionHistory', RelationMap::ONE_TO_MANY, array('r_fact_type_id' => 'r_fact_type_id', ), null, null, 'FactureEditionHistorys');
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

} // RFactureTypesTableMap
