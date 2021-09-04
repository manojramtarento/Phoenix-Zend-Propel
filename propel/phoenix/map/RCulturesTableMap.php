<?php



/**
 * This class defines the structure of the 'r_cultures' table.
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
class RCulturesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RCulturesTableMap';

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
        $this->setName('r_cultures');
        $this->setPhpName('RCultures');
        $this->setClassname('RCultures');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_culture_id', 'RCultureId', 'INTEGER', true, 4, null);
        $this->addColumn('r_culture_code', 'RCultureCode', 'VARCHAR', true, 8, null);
        $this->addColumn('r_culture_label', 'RCultureLabel', 'VARCHAR', false, 100, null);
        $this->addForeignKey('r_culture_language_code', 'RCultureLanguageCode', 'VARCHAR', 'r_languages', 'r_lang_code', false, 3, null);
        $this->addColumn('r_culture_actif', 'RCultureActif', 'TINYINT', true, 1, 1);
        // validators
        $this->addValidator('r_culture_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_culture_id doit être un int.');
        $this->addValidator('r_culture_code', 'maxLength', 'propel.validator.MaxLengthValidator', '8', 'Le champ r_culture_code ne doit pas dépasser 8 caractères.');
        $this->addValidator('r_culture_code', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_culture_code doit être renseigné.');
        $this->addValidator('r_culture_code', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_culture_code doit être un string.');
        $this->addValidator('r_culture_label', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_culture_label ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_culture_label', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_culture_label doit être un string.');
        $this->addValidator('r_culture_language_code', 'maxLength', 'propel.validator.MaxLengthValidator', '3', 'Le champ r_culture_language_code ne doit pas dépasser 3 caractères.');
        $this->addValidator('r_culture_language_code', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_culture_language_code doit être un string.');
        $this->addValidator('r_culture_actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_culture_actif doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RLanguages', 'RLanguages', RelationMap::MANY_TO_ONE, array('r_culture_language_code' => 'r_lang_code', ), null, null);
        $this->addRelation('LnkRCountryRCultures', 'LnkRCountryRCultures', RelationMap::ONE_TO_MANY, array('r_culture_id' => 'lnk_r_country_r_culture_r_culture_id', ), null, null, 'LnkRCountryRCulturess');
        $this->addRelation('ROperationTypeSubTplCultures', 'ROperationTypeSubTplCultures', RelationMap::ONE_TO_MANY, array('r_culture_id' => 'r_operation_type_sub_tpl_culture_r_culture_id', ), null, null, 'ROperationTypeSubTplCulturess');
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
  'columns' => 'r_culture_code',
  'message' => 'Ce code de culture existe déjà.',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // RCulturesTableMap
