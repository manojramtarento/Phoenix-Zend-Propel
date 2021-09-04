<?php



/**
 * This class defines the structure of the 'r_operation_type_sub_tpl' table.
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
class ROperationTypeSubTplTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationTypeSubTplTableMap';

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
        $this->setName('r_operation_type_sub_tpl');
        $this->setPhpName('ROperationTypeSubTpl');
        $this->setClassname('ROperationTypeSubTpl');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ost_tpl_id', 'OstTplId', 'INTEGER', true, 4, null);
        $this->addColumn('ost_tpl_libelle', 'OstTplLibelle', 'VARCHAR', true, 100, null);
        // validators
        $this->addValidator('ost_tpl_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Un libellé doit être renseigné.');
        $this->addValidator('ost_tpl_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ ost_tpl_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('ost_tpl_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ost_tpl_libelle doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('ost_tpl_id' => 'operation_ost_tpl_id', ), null, null, 'Operationss');
        $this->addRelation('ROperationTypeSubTplPrestation', 'ROperationTypeSubTplPrestation', RelationMap::ONE_TO_MANY, array('ost_tpl_id' => 'ost_tpl_id', ), null, null, 'ROperationTypeSubTplPrestations');
        $this->addRelation('ROperationTypeSubTplPrime', 'ROperationTypeSubTplPrime', RelationMap::ONE_TO_MANY, array('ost_tpl_id' => 'ost_tpl_id', ), null, null, 'ROperationTypeSubTplPrimes');
        $this->addRelation('ROperationTypeSubTplRubrique', 'ROperationTypeSubTplRubrique', RelationMap::ONE_TO_MANY, array('ost_tpl_id' => 'ost_tpl_id', ), null, null, 'ROperationTypeSubTplRubriques');
        $this->addRelation('ROperationTypeSubTplScenario', 'ROperationTypeSubTplScenario', RelationMap::ONE_TO_MANY, array('ost_tpl_id' => 'ost_tpl_id', ), null, null, 'ROperationTypeSubTplScenarios');
        $this->addRelation('ROperationTypeSubTplCultures', 'ROperationTypeSubTplCultures', RelationMap::ONE_TO_MANY, array('ost_tpl_id' => 'r_operation_type_sub_tpl_culture_tpl_id', ), null, null, 'ROperationTypeSubTplCulturess');
        $this->addRelation('ROperationTypeSubTplCurrencies', 'ROperationTypeSubTplCurrencies', RelationMap::ONE_TO_MANY, array('ost_tpl_id' => 'r_operation_type_sub_tpl_currency_tpl_id', ), null, null, 'ROperationTypeSubTplCurrenciess');
        $this->addRelation('LnkROperationTypeSubTemplateMediasUniverses', 'LnkROperationTypeSubTemplateMediasUniverses', RelationMap::ONE_TO_MANY, array('ost_tpl_id' => 'lnk_r_operation_type_sub_template_media_universe_tpl_id', ), null, null, 'LnkROperationTypeSubTemplateMediasUniversess');
        $this->addRelation('ROperationTypeSubTplCountries', 'ROperationTypeSubTplCountries', RelationMap::ONE_TO_MANY, array('ost_tpl_id' => 'r_operation_type_sub_tpl_country_tpl_id', ), null, null, 'ROperationTypeSubTplCountriess');
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

} // ROperationTypeSubTplTableMap
