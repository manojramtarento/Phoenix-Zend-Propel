<?php



/**
 * This class defines the structure of the 'r_p_axe3' table.
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
class RPAxe3TableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RPAxe3TableMap';

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
        $this->setName('r_p_axe3');
        $this->setPhpName('RPAxe3');
        $this->setClassname('RPAxe3');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('r_p_axe3_id', 'RPAxe3Id', 'INTEGER', true, 4, null);
        $this->addColumn('r_p_axe3_tag', 'RPAxe3Tag', 'VARCHAR', false, 10, null);
        $this->addColumn('r_p_axe3_libelle', 'RPAxe3Libelle', 'VARCHAR', false, 50, null);
        $this->addColumn('r_p_axe3_actif', 'RPAxe3Actif', 'BOOLEAN', false, 1, null);
        // validators
        $this->addValidator('r_p_axe3_tag', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'Le champ r_p_axe3_tag ne doit pas dépasser 10 caractères.');
        $this->addValidator('r_p_axe3_tag', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_axe3_tag doit être un string.');
        $this->addValidator('r_p_axe3_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Le champ r_p_axe3_libelle ne doit pas dépasser 50 caractères.');
        $this->addValidator('r_p_axe3_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_p_axe3_libelle doit être un string.');
        $this->addValidator('r_p_axe3_actif', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ r_p_axe3_actif doit être un boolean.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RPrestations', 'RPrestations', RelationMap::ONE_TO_MANY, array('r_p_axe3_id' => 'r_p_axe3', ), null, null, 'RPrestationss');
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

} // RPAxe3TableMap
