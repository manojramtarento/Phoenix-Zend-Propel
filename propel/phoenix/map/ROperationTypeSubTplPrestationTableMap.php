<?php



/**
 * This class defines the structure of the 'r_operation_type_sub_tpl_prestation' table.
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
class ROperationTypeSubTplPrestationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationTypeSubTplPrestationTableMap';

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
        $this->setName('r_operation_type_sub_tpl_prestation');
        $this->setPhpName('ROperationTypeSubTplPrestation');
        $this->setClassname('ROperationTypeSubTplPrestation');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ost_tpl_prestation_id', 'OstTplPrestationId', 'INTEGER', true, 4, null);
        $this->addForeignKey('ost_tpl_id', 'OstTplId', 'INTEGER', 'r_operation_type_sub_tpl', 'ost_tpl_id', true, 4, null);
        $this->addForeignKey('ost_tpl_rubrique_id', 'OstTplRubriqueId', 'INTEGER', 'r_operation_type_sub_tpl_rubrique', 'ost_tpl_rubrique_id', true, 4, null);
        $this->addColumn('r_prestation_id', 'RPrestationId', 'INTEGER', true, 4, null);
        $this->addColumn('r_scenario_numero', 'RScenarioNumero', 'SMALLINT', false, 2, null);
        $this->addColumn('r_prime_numero', 'RPrimeNumero', 'SMALLINT', false, 2, null);
        $this->addColumn('ost_tpl_prestation_is_mandatory', 'OstTplPrestationIsMandatory', 'BOOLEAN', false, 1, false);
        $this->addColumn('ost_tpl_prestation_order', 'OstTplPrestationOrder', 'SMALLINT', false, 2, null);
        $this->addColumn('ost_tpl_prestation_is_hidden', 'OstTplPrestationIsHidden', 'BOOLEAN', true, 1, false);
        // validators
        $this->addValidator('r_prestation_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_prestation_id doit être renseigné.');
        $this->addValidator('r_prestation_id', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_prestation_id ne doit pas dépasser 100 caractères.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ROperationTypeSubTplRubrique', 'ROperationTypeSubTplRubrique', RelationMap::MANY_TO_ONE, array('ost_tpl_rubrique_id' => 'ost_tpl_rubrique_id', ), null, null);
        $this->addRelation('ROperationTypeSubTpl', 'ROperationTypeSubTpl', RelationMap::MANY_TO_ONE, array('ost_tpl_id' => 'ost_tpl_id', ), null, null);
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

} // ROperationTypeSubTplPrestationTableMap
