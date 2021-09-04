<?php



/**
 * This class defines the structure of the 'r_relance_types' table.
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
class RRelanceTypesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RRelanceTypesTableMap';

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
        $this->setName('r_relance_types');
        $this->setPhpName('RRelanceTypes');
        $this->setClassname('RRelanceTypes');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_rel_type_id', 'RRelTypeId', 'INTEGER', true, 4, null);
        $this->addColumn('r_rel_type_libelle', 'RRelTypeLibelle', 'VARCHAR', false, 100, null);
        $this->addColumn('r_rel_type_libelle_en', 'RRelTypeLibelleEn', 'VARCHAR', false, 100, null);
        $this->addColumn('r_rel_type_lettre_recommandee', 'RRelTypeLettreRecommandee', 'BOOLEAN', false, 1, null);
        $this->addColumn('actif', 'Actif', 'TINYINT', false, 1, null);
        // validators
        $this->addValidator('r_rel_type_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_rel_type_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_rel_type_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_rel_type_libelle doit être un string.');
        $this->addValidator('r_rel_type_libelle_en', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_rel_type_libelle_en ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_rel_type_libelle_en', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_rel_type_libelle_en doit être un string.');
        $this->addValidator('r_rel_type_lettre_recommandee', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ r_rel_type_lettre_recommandee doit être un boolean.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ actif doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Relances', 'Relances', RelationMap::ONE_TO_MANY, array('r_rel_type_id' => 'rel_type_id', ), null, null, 'Relancess');
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

} // RRelanceTypesTableMap
