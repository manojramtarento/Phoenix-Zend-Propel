<?php



/**
 * This class defines the structure of the 'r_prestation_categories' table.
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
class RPrestationCategoriesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RPrestationCategoriesTableMap';

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
        $this->setName('r_prestation_categories');
        $this->setPhpName('RPrestationCategories');
        $this->setClassname('RPrestationCategories');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_presta_cat_id', 'RPrestaCatId', 'INTEGER', true, 4, null);
        $this->addColumn('r_presta_cat_libelle', 'RPrestaCatLibelle', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('r_presta_cat_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_presta_cat_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_presta_cat_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_presta_cat_libelle doit être un string.');
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

} // RPrestationCategoriesTableMap
