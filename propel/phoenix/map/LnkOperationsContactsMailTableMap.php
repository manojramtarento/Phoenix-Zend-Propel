<?php



/**
 * This class defines the structure of the 'lnk_operations_contacts_mail' table.
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
class LnkOperationsContactsMailTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkOperationsContactsMailTableMap';

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
        $this->setName('lnk_operations_contacts_mail');
        $this->setPhpName('LnkOperationsContactsMail');
        $this->setClassname('LnkOperationsContactsMail');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_lnk_op_contact_mail', 'IdLnkOpContactMail', 'INTEGER', true, 4, null);
        $this->addForeignKey('op_id', 'OpId', 'INTEGER', 'operations', 'op_id', true, 4, null);
        $this->addForeignKey('ct_id', 'CtId', 'INTEGER', 'contacts', 'ct_id', true, 4, null);
        $this->addColumn('send_mail', 'SendMail', 'BOOLEAN', true, 1, null);
        // validators
        $this->addValidator('op_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_id doit être renseigné.');
        $this->addValidator('op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_id doit être un int.');
        $this->addValidator('ct_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ ct_id doit être renseigné.');
        $this->addValidator('ct_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ct_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::MANY_TO_ONE, array('op_id' => 'op_id', ), null, null);
        $this->addRelation('Contacts', 'Contacts', RelationMap::MANY_TO_ONE, array('ct_id' => 'ct_id', ), null, null);
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

} // LnkOperationsContactsMailTableMap
