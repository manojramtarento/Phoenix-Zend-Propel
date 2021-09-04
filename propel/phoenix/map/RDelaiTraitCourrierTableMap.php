<?php



/**
 * This class defines the structure of the 'r_delai_trait_courrier' table.
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
class RDelaiTraitCourrierTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RDelaiTraitCourrierTableMap';

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
        $this->setName('r_delai_trait_courrier');
        $this->setPhpName('RDelaiTraitCourrier');
        $this->setClassname('RDelaiTraitCourrier');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('r_delai_trait_courrier_id', 'RDelaiTraitCourrierId', 'TINYINT', true, 1, null);
        $this->addColumn('r_delai_trait_courrier_libelle', 'RDelaiTraitCourrierLibelle', 'CHAR', false, 100, null);
        // validators
        $this->addValidator('r_delai_trait_courrier_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_delai_trait_courrier_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_delai_trait_courrier_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_delai_trait_courrier_libelle doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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

} // RDelaiTraitCourrierTableMap
