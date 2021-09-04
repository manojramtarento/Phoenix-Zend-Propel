<?php



/**
 * This class defines the structure of the 'plan_facturation_params' table.
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
class PlanFacturationParamsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.PlanFacturationParamsTableMap';

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
        $this->setName('plan_facturation_params');
        $this->setPhpName('PlanFacturationParams');
        $this->setClassname('PlanFacturationParams');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('plan_fact_id', 'PlanFactId', 'INTEGER', true, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', true, 4, null);
        $this->addColumn('plan_fact_date_prem_fact', 'PlanFactDatePremFact', 'TIMESTAMP', true, 16, null);
        $this->addColumn('plan_fact_date_der_fact', 'PlanFactDateDerFact', 'TIMESTAMP', true, 16, null);
        $this->addColumn('plan_fact_periode_id', 'PlanFactPeriodeId', 'TINYINT', true, 1, null);
        $this->addColumn('plan_fact_periode_type_id', 'PlanFactPeriodeTypeId', 'TINYINT', true, 1, null);
        $this->addColumn('plan_fact_lib_avoir', 'PlanFactLibAvoir', 'VARCHAR', true, 100, null);
        $this->addColumn('plan_facturation_params_auto_display_vat', 'PlanFacturationParamsAutoDisplayVat', 'TINYINT', false, 1, null);
        $this->addColumn('plan_fact_lib_facture', 'PlanFactLibFacture', 'VARCHAR', true, 100, null);
        $this->addColumn('plan_fact_info', 'PlanFactInfo', 'LONGVARCHAR', false, 2147483647, null);
        $this->addColumn('plan_fact_note_interne', 'PlanFactNoteInterne', 'LONGVARCHAR', false, 2147483647, null);
        // validators
        $this->addValidator('plan_fact_date_prem_fact', 'required', 'propel.validator.RequiredValidator', '', 'La date de dernière facture doit être renseignée.');
        $this->addValidator('plan_fact_date_prem_fact', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ plan_fact_date_prem_fact doit être un string.');
        $this->addValidator('plan_fact_date_der_fact', 'required', 'propel.validator.RequiredValidator', '', 'La date de dernière facture doit être renseignée.');
        $this->addValidator('plan_fact_date_der_fact', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ plan_fact_date_der_fact doit être un string.');
        $this->addValidator('plan_fact_periode_id', 'required', 'propel.validator.RequiredValidator', '', 'La périodicité doit être renseignée.');
        $this->addValidator('plan_fact_periode_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ plan_fact_periode doit être un int.');
        $this->addValidator('plan_fact_periode_type_id', 'required', 'propel.validator.RequiredValidator', '', 'Le type de facturation doit être renseigné.');
        $this->addValidator('plan_fact_periode_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ plan_fact_type_fact_id doit être un int.');
        $this->addValidator('plan_fact_lib_avoir', 'required', 'propel.validator.RequiredValidator', '', 'Le libéllé avoir doit être renseigné.');
        $this->addValidator('plan_fact_lib_avoir', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ plan_fact_lib_avoir ne doit pas dépasser 100 caractères.');
        $this->addValidator('plan_fact_lib_avoir', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ plan_fact_lib_avoir doit être un string.');
        $this->addValidator('plan_facturation_params_auto_display_vat', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ plan_facturation_params_auto_display_vat doit être un int.');
        $this->addValidator('plan_fact_lib_facture', 'required', 'propel.validator.RequiredValidator', '', 'Le libéllé facture doit être renseigné.');
        $this->addValidator('plan_fact_lib_facture', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ plan_fact_lib_facture ne doit pas dépasser 100 caractères.');
        $this->addValidator('plan_fact_lib_facture', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ plan_fact_lib_facture doit être un string.');
        $this->addValidator('plan_fact_info', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ plan_fact_info ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('plan_fact_info', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ plan_fact_info doit être un string.');
        $this->addValidator('plan_fact_note_interne', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ plan_fact_note_interne ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('plan_fact_note_interne', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ plan_fact_note_interne doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('Factures', 'Factures', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'Facturess');
        $this->addRelation('FactureEditionHistory', 'FactureEditionHistory', RelationMap::ONE_TO_MANY, array('op_id' => 'op_id', ), null, null, 'FactureEditionHistorys');
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

} // PlanFacturationParamsTableMap
