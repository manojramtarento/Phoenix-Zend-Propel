<?php



/**
 * This class defines the structure of the 'r_mail_types' table.
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
class RMailTypesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RMailTypesTableMap';

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
        $this->setName('r_mail_types');
        $this->setPhpName('RMailTypes');
        $this->setClassname('RMailTypes');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('r_mail_type_id', 'RMailTypeId', 'TINYINT', true, 1, null);
        $this->addColumn('r_mail_type_name', 'RMailTypeName', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('r_mail_type_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_mail_type_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_mail_type_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_mail_type_name doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Mails', 'Mails', RelationMap::ONE_TO_MANY, array('r_mail_type_id' => 'r_mail_type_id', ), null, null, 'Mailss');
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

} // RMailTypesTableMap
