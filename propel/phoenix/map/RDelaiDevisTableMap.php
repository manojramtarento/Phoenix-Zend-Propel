<?php



/**
 * This class defines the structure of the 'r_delai_devis' table.
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
class RDelaiDevisTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RDelaiDevisTableMap';

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
        $this->setName('r_delai_devis');
        $this->setPhpName('RDelaiDevis');
        $this->setClassname('RDelaiDevis');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('r_delai_devis_id', 'RDelaiDevisId', 'TINYINT', true, 1, null);
        $this->addColumn('r_delai_devis_libelle', 'RDelaiDevisLibelle', 'VARCHAR', false, 100, null);
        $this->addColumn('r_delai_devis_libelle_en', 'RDelaiDevisLibelleEn', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('r_delai_devis_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_delai_devis_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_delai_devis_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_delai_devis_libelle doit être un string.');
        $this->addValidator('r_delai_devis_libelle_en', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_delai_devis_libelle_en ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_delai_devis_libelle_en', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_delai_devis_libelle_en doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('r_delai_devis_id' => 'op_delai_devis_id', ), null, null, 'Operationss');
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

} // RDelaiDevisTableMap
