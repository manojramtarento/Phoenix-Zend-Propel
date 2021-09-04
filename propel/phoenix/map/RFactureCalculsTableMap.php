<?php



/**
 * This class defines the structure of the 'r_facture_calculs' table.
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
class RFactureCalculsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RFactureCalculsTableMap';

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
        $this->setName('r_facture_calculs');
        $this->setPhpName('RFactureCalculs');
        $this->setClassname('RFactureCalculs');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_fact_calc_id', 'RFactCalcId', 'INTEGER', true, 4, null);
        $this->addColumn('r_fact_calc_libelle', 'RFactCalcLibelle', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('r_fact_calc_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_fact_calc_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_fact_calc_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_fact_calc_libelle doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RFactureTypes', 'RFactureTypes', RelationMap::ONE_TO_MANY, array('r_fact_calc_id' => 'r_fact_calc_id', ), null, null, 'RFactureTypess');
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

} // RFactureCalculsTableMap
