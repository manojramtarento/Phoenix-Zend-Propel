<?php



/**
 * This class defines the structure of the 'r_client_contrat_archivage_unit' table.
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
class RClientContratArchivageUnitTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RClientContratArchivageUnitTableMap';

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
        $this->setName('r_client_contrat_archivage_unit');
        $this->setPhpName('RClientContratArchivageUnit');
        $this->setClassname('RClientContratArchivageUnit');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('r_cl_ct_archivage_unit_id', 'RClCtArchivageUnitId', 'TINYINT', true, 1, null);
        $this->addColumn('r_cl_ct_archivage_libelle', 'RClCtArchivageLibelle', 'CHAR', false, 20, null);
        // validators
        $this->addValidator('r_cl_ct_archivage_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Le champ r_cl_ct_archivage_libelle ne doit pas dépasser 20 caractères.');
        $this->addValidator('r_cl_ct_archivage_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_cl_ct_archivage_libelle doit être un string.');
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

} // RClientContratArchivageUnitTableMap
