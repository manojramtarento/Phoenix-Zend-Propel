<?php



/**
 * This class defines the structure of the 'facture_statuts' table.
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
class FactureStatutsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.FactureStatutsTableMap';

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
        $this->setName('facture_statuts');
        $this->setPhpName('FactureStatuts');
        $this->setClassname('FactureStatuts');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('fs_id', 'FsId', 'INTEGER', true, 4, null);
        $this->addForeignKey('fact_id', 'FactId', 'INTEGER', 'factures', 'fact_id', true, 4, null);
        $this->addColumn('r_fact_stat_id', 'RFactStatId', 'TINYINT', true, 1, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('is_effective', 'IsEffective', 'BOOLEAN', false, 1, false);
        // validators
        $this->addValidator('fact_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ fact_id doit être renseigné.');
        $this->addValidator('fact_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ fact_id doit être un int.');
        $this->addValidator('r_fact_stat_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ r_fact_stat_id doit être renseigné.');
        $this->addValidator('r_fact_stat_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_fact_stat_id doit être un int.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Factures', 'Factures', RelationMap::MANY_TO_ONE, array('fact_id' => 'fact_id', ), null, null);
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

} // FactureStatutsTableMap
