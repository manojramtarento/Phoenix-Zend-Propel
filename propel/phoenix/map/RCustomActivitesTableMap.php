<?php



/**
 * This class defines the structure of the 'r_custom_activites' table.
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
class RCustomActivitesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RCustomActivitesTableMap';

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
        $this->setName('r_custom_activites');
        $this->setPhpName('RCustomActivites');
        $this->setClassname('RCustomActivites');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('act_id', 'ActId', 'TINYINT', true, 1, null);
        $this->addColumn('act_libelle', 'ActLibelle', 'VARCHAR', true, 100, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', true, 1, null);
        $this->addColumn('ord', 'Ord', 'TINYINT', true, 1, null);
        // validators
        $this->addValidator('act_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Un libellé doit être renseigné.');
        $this->addValidator('act_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ act_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('act_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ act_libelle doit être un string.');
        $this->addValidator('actif', 'required', 'propel.validator.RequiredValidator', '', 'Le champ actif doit être renseigné.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ actif doit être un boolean.');
        $this->addValidator('ord', 'required', 'propel.validator.RequiredValidator', '', 'Le champ ord doit être renseigné.');
        $this->addValidator('ord', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ord doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('act_id' => 'op_act_id', ), null, null, 'Operationss');
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

} // RCustomActivitesTableMap
