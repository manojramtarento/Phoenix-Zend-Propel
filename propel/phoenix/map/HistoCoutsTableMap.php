<?php



/**
 * This class defines the structure of the 'histo_couts' table.
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
class HistoCoutsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.HistoCoutsTableMap';

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
        $this->setName('histo_couts');
        $this->setPhpName('HistoCouts');
        $this->setClassname('HistoCouts');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('histo_couts_id', 'HistoCoutsId', 'INTEGER', true, 4, null);
        $this->addColumn('op_prest_id', 'OpPrestId', 'INTEGER', true, 4, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', true, 4, null);
        $this->addColumn('histo_couts_value', 'HistoCoutsValue', 'NUMERIC', true, 20, null);
        $this->addForeignKey('r_couts_nature_id', 'RCoutsNatureId', 'TINYINT', 'r_couts_nature', 'r_couts_nature_id', true, 1, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', true, 16, null);
        // validators
        $this->addValidator('op_prest_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_prest_id doit être renseigné.');
        $this->addValidator('op_prest_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_id doit être un int.');
        $this->addValidator('user_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ user_id doit être renseigné.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('histo_couts_value', 'required', 'propel.validator.RequiredValidator', '', 'Le champ histo_couts_value doit être renseigné.');
        $this->addValidator('histo_couts_value', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ histo_couts_value doit être un float.');
        $this->addValidator('r_couts_nature_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_couts_nature_id doit être renseigné.');
        $this->addValidator('r_couts_nature_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_couts_nature_id doit être un int.');
        $this->addValidator('date_create', 'required', 'propel.validator.RequiredValidator', '', 'Le champ date_create doit être renseigné.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RCoutsNature', 'RCoutsNature', RelationMap::MANY_TO_ONE, array('r_couts_nature_id' => 'r_couts_nature_id', ), null, null);
        $this->addRelation('OperationPrestations', 'OperationPrestations', RelationMap::ONE_TO_ONE, array('op_prest_id' => 'op_prest_id', ), null, null);
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

} // HistoCoutsTableMap
