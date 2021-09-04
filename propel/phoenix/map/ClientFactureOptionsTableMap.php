<?php



/**
 * This class defines the structure of the 'client_facture_options' table.
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
class ClientFactureOptionsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ClientFactureOptionsTableMap';

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
        $this->setName('client_facture_options');
        $this->setPhpName('ClientFactureOptions');
        $this->setClassname('ClientFactureOptions');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('cl_fact_opt_id', 'ClFactOptId', 'INTEGER', true, 4, null);
        $this->addForeignKey('cl_id', 'ClId', 'INTEGER', 'clients', 'cl_id', false, 4, null);
        $this->addColumn('cl_fact_bdc_required', 'ClFactBdcRequired', 'BOOLEAN', false, 1, false);
        $this->addColumn('cl_fact_bdc', 'ClFactBdc', 'VARCHAR', false, 100, null);
        $this->addColumn('cl_fact_tvaintra', 'ClFactTvaintra', 'VARCHAR', false, 40, null);
        $this->addForeignKey('cl_fact_country_id', 'ClFactCountryId', 'INTEGER', 'r_countries', 'r_country_id', false, 4, null);
        $this->addColumn('cl_fact_adf', 'ClFactAdf', 'VARCHAR', false, 20, null);
        $this->addColumn('cl_fact_compte', 'ClFactCompte', 'VARCHAR', false, 20, null);
        $this->addColumn('cl_fact_rfa', 'ClFactRfa', 'BOOLEAN', false, 1, null);
        $this->addColumn('cl_fact_rfa_descr', 'ClFactRfaDescr', 'LONGVARCHAR', false, 2147483647, null);
        $this->addForeignKey('cl_fact_echeance', 'ClFactEcheance', 'TINYINT', 'r_facture_options_echeances', 'fact_opt_echeance_id', true, 1, 2);
        $this->addForeignKey('cl_fact_lang', 'ClFactLang', 'VARCHAR', 'r_languages', 'r_lang_code', true, 8, 'FRA');
        $this->addColumn('plan_fact_periode_id', 'PlanFactPeriodeId', 'TINYINT', false, 1, null);
        $this->addColumn('plan_fact_periode_type_id', 'PlanFactPeriodeTypeId', 'TINYINT', false, 1, null);
        $this->addColumn('cl_fact_siret', 'ClFactSiret', 'VARCHAR', false, 14, null);
        // validators
        $this->addValidator('cl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_id doit être un int.');
        $this->addValidator('cl_fact_bdc_required', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ cl_fact_bdc_required doit être un boolean.');
        $this->addValidator('cl_fact_tvaintra', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ cl_fact_tvaintra ne doit pas dépasser 40 caractères.');
        $this->addValidator('cl_fact_tvaintra', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_fact_tvaintra doit être un string.');
        $this->addValidator('cl_fact_country_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_fact_country_id doit être un int.');
        $this->addValidator('cl_fact_adf', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Le champ cl_fact_adf ne doit pas dépasser 20 caractères.');
        $this->addValidator('cl_fact_adf', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_fact_adf doit être un string.');
        $this->addValidator('cl_fact_compte', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Le champ cl_fact_compte ne doit pas dépasser 20 caractères.');
        $this->addValidator('cl_fact_compte', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_fact_compte doit être un string.');
        $this->addValidator('cl_fact_rfa', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ cl_fact_rfa doit être un boolean.');
        $this->addValidator('cl_fact_rfa_descr', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ cl_fact_rfa_descr ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('cl_fact_rfa_descr', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_fact_rfa_descr doit être un string.');
        $this->addValidator('cl_fact_echeance', 'maxLength', 'propel.validator.MaxLengthValidator', '1', 'Le champ cl_fact_echeance ne doit pas dépasser 1 caractères.');
        $this->addValidator('cl_fact_echeance', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_fact_echeance doit être un int');
        $this->addValidator('cl_fact_lang', 'required', 'propel.validator.RequiredValidator', '', 'Le champ cl_fact_lang doit être renseigné.');
        $this->addValidator('cl_fact_lang', 'maxLength', 'propel.validator.MaxLengthValidator', '8', 'Le champ cl_fact_lang ne doit pas dépasser 8 caractères.');
        $this->addValidator('cl_fact_lang', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_fact_lang doit être un string.');
        $this->addValidator('cl_fact_siret', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'Le champ cl_fact_siret ne doit pas dépasser 255 caractères.');
        $this->addValidator('cl_fact_siret', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_fact_siret doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RFactureOptionsEcheances', 'RFactureOptionsEcheances', RelationMap::MANY_TO_ONE, array('cl_fact_echeance' => 'fact_opt_echeance_id', ), null, null);
        $this->addRelation('Clients', 'Clients', RelationMap::MANY_TO_ONE, array('cl_id' => 'cl_id', ), null, null);
        $this->addRelation('RLanguages', 'RLanguages', RelationMap::MANY_TO_ONE, array('cl_fact_lang' => 'r_lang_code', ), null, null);
        $this->addRelation('CountryInvoiced', 'RCountries', RelationMap::MANY_TO_ONE, array('cl_fact_country_id' => 'r_country_id', ), null, null);
        $this->addRelation('Factures', 'Factures', RelationMap::ONE_TO_MANY, array('cl_id' => 'cl_id', ), null, null, 'Facturess');
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('cl_id' => 'op_cl_id', ), null, null, 'Operationss');
        $this->addRelation('Relances', 'Relances', RelationMap::ONE_TO_MANY, array('cl_id' => 'cl_id', ), null, null, 'Relancess');
        $this->addRelation('FactureEditionHistory', 'FactureEditionHistory', RelationMap::ONE_TO_MANY, array('cl_id' => 'cl_id', ), null, null, 'FactureEditionHistorys');
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

} // ClientFactureOptionsTableMap
