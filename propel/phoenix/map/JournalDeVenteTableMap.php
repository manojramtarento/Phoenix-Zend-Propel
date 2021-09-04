<?php



/**
 * This class defines the structure of the 'journal_de_vente' table.
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
class JournalDeVenteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.JournalDeVenteTableMap';

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
        $this->setName('journal_de_vente');
        $this->setPhpName('JournalDeVente');
        $this->setClassname('JournalDeVente');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('jdv_id', 'JdvId', 'INTEGER', true, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', true, 4, null);
        // validators
        $this->addValidator('date_create', 'required', 'propel.validator.RequiredValidator', '', 'Le champ date_create doit être renseigné.');
        $this->addValidator('date_create', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Le champ date_create ne doit pas dépasser 20 caractères.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('user_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ user_id doit être renseigné.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Factures', 'Factures', RelationMap::ONE_TO_MANY, array('jdv_id' => 'jdv_id', ), null, null, 'Facturess');
        $this->addRelation('JournalDeVenteLigne', 'JournalDeVenteLigne', RelationMap::ONE_TO_MANY, array('jdv_id' => 'jdv_id', ), null, null, 'JournalDeVenteLignes');
        $this->addRelation('FactureEditionHistory', 'FactureEditionHistory', RelationMap::ONE_TO_MANY, array('jdv_id' => 'jdv_id', ), null, null, 'FactureEditionHistorys');
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

} // JournalDeVenteTableMap
