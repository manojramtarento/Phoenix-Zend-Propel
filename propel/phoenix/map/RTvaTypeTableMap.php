<?php



/**
 * This class defines the structure of the 'r_tva_type' table.
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
class RTvaTypeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RTvaTypeTableMap';

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
        $this->setName('r_tva_type');
        $this->setPhpName('RTvaType');
        $this->setClassname('RTvaType');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_tva_id', 'RTvaId', 'INTEGER', true, 4, null);
        $this->addColumn('r_tva_libelle', 'RTvaLibelle', 'VARCHAR', true, 100, null);
        $this->addColumn('r_tva_libelle_fact_synthese', 'RTvaLibelleFactSynthese', 'VARCHAR', false, 100, null);
        $this->addColumn('r_tva_typologie', 'RTvaTypologie', 'VARCHAR', false, 3, null);
        $this->addColumn('r_tva_statut', 'RTvaStatut', 'VARCHAR', false, 50, null);
        $this->addColumn('r_tva_descriptif', 'RTvaDescriptif', 'VARCHAR', false, 510, null);
        $this->addColumn('r_tva_taux', 'RTvaTaux', 'NUMERIC', false, 7, null);
        $this->addColumn('r_tva_coeff', 'RTvaCoeff', 'NUMERIC', true, 7, null);
        $this->addColumn('r_tva_type_recup_coeff', 'RTvaTypeRecupCoeff', 'NUMERIC', true, 7, null);
        $this->addColumn('r_tva_rub_order', 'RTvaRubOrder', 'SMALLINT', false, 2, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', true, 1, null);
        $this->addColumn('r_tva_libelle_en', 'RTvaLibelleEn', 'VARCHAR', true, 100, null);
        $this->addColumn('r_tva_libelle_fact_synthese_en', 'RTvaLibelleFactSyntheseEn', 'VARCHAR', true, 100, null);
        // validators
        $this->addValidator('r_tva_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_tva_libelle doit être renseigné.');
        $this->addValidator('r_tva_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_tva_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_tva_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_tva_libelle doit être un string.');
        $this->addValidator('r_tva_libelle_fact_synthese', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_tva_libelle_fact_synthese ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_tva_libelle_fact_synthese', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_tva_libelle_fact_synthese doit être un string.');
        $this->addValidator('r_tva_typologie', 'maxLength', 'propel.validator.MaxLengthValidator', '3', 'Le champ r_tva_typologie ne doit pas dépasser 3 caractères.');
        $this->addValidator('r_tva_typologie', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_tva_typologie doit être un string.');
        $this->addValidator('r_tva_statut', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Le champ r_tva_statut ne doit pas dépasser 50 caractères.');
        $this->addValidator('r_tva_statut', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_tva_statut doit être un string.');
        $this->addValidator('r_tva_descriptif', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ r_tva_descriptif ne doit pas dépasser 510 caractères.');
        $this->addValidator('r_tva_descriptif', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_tva_descriptif doit être un string.');
        $this->addValidator('r_tva_taux', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ r_tva_taux doit être un float.');
        $this->addValidator('r_tva_coeff', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_tva_coeff doit être renseigné.');
        $this->addValidator('r_tva_coeff', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ r_tva_coeff doit être un float.');
        $this->addValidator('r_tva_type_recup_coeff', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_tva_type_recup_coeff doit être renseigné.');
        $this->addValidator('r_tva_type_recup_coeff', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ r_tva_type_recup_coeff doit être un float.');
        $this->addValidator('r_tva_rub_order', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_tva_rub_order doit être un int.');
        $this->addValidator('actif', 'required', 'propel.validator.RequiredValidator', '', 'Le champ actif doit être renseigné.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ actif doit être un boolean.');
        $this->addValidator('r_tva_libelle_en', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_tva_libelle_en doit être renseigné.');
        $this->addValidator('r_tva_libelle_en', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_tva_libelle_en ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_tva_libelle_en', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_tva_libelle doit être un string.');
        $this->addValidator('r_tva_libelle_fact_synthese_en', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_tva_libelle_fact_synthese_en doit être renseigné.');
        $this->addValidator('r_tva_libelle_fact_synthese_en', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_tva_libelle_fact_synthese_en ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_tva_libelle_fact_synthese_en', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_tva_libelle_fact_synthese_en doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('FacturesRubriques', 'FacturesRubriques', RelationMap::ONE_TO_MANY, array('r_tva_id' => 'r_tva_type_id', ), null, null, 'FacturesRubriquess');
        $this->addRelation('OperationRubriques', 'OperationRubriques', RelationMap::ONE_TO_MANY, array('r_tva_id' => 'r_tva_type_id', ), null, null, 'OperationRubriquess');
        $this->addRelation('RRubriques', 'RRubriques', RelationMap::ONE_TO_MANY, array('r_tva_id' => 'r_tva_type_id', ), null, null, 'RRubriquess');
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_MANY, array(), null, null, 'Operationss');
        $this->addRelation('RRubriquesType', 'RRubriquesType', RelationMap::MANY_TO_MANY, array(), null, null, 'RRubriquesTypes');
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

} // RTvaTypeTableMap
