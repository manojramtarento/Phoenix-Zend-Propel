<?php



/**
 * This class defines the structure of the 'r_languages' table.
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
class RLanguagesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RLanguagesTableMap';

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
        $this->setName('r_languages');
        $this->setPhpName('RLanguages');
        $this->setClassname('RLanguages');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('r_lang_code', 'RLangCode', 'VARCHAR', true, 3, null);
        $this->addColumn('r_lang_libelle', 'RLangLibelle', 'VARCHAR', false, 40, null);
        $this->addColumn('r_lang_has_traduction_devis', 'RLangHasTraductionDevis', 'BOOLEAN', true, 1, false);
        // validators
        $this->addValidator('r_lang_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ r_lang_libelle ne doit pas dépasser 40 caractères.');
        $this->addValidator('r_lang_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_lang_libelle doit être un string.');
        $this->addValidator('r_lang_code', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_lang_code doit être renseigné.');
        $this->addValidator('r_lang_code', 'maxLength', 'propel.validator.MaxLengthValidator', '3', 'Le champ r_lang_code ne doit pas dépasser 3 caractères.');
        $this->addValidator('r_lang_code', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_lang_code doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ClientFactureOptions', 'ClientFactureOptions', RelationMap::ONE_TO_MANY, array('r_lang_code' => 'cl_fact_lang', ), null, null, 'ClientFactureOptionss');
        $this->addRelation('RCultures', 'RCultures', RelationMap::ONE_TO_MANY, array('r_lang_code' => 'r_culture_language_code', ), null, null, 'RCulturess');
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

} // RLanguagesTableMap
