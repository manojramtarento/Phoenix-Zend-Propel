<?php



/**
 * This class defines the structure of the 'r_rubriques' table.
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
class RRubriquesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RRubriquesTableMap';

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
        $this->setName('r_rubriques');
        $this->setPhpName('RRubriques');
        $this->setClassname('RRubriques');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('r_rub_id', 'RRubId', 'INTEGER', true, 4, null);
        $this->addColumn('r_rub_libelle', 'RRubLibelle', 'VARCHAR', false, 510, null);
        $this->addColumn('r_rub_libelle_en', 'RRubLibelleEn', 'VARCHAR', false, 510, null);
        $this->addForeignKey('r_rub_type_id', 'RRubTypeId', 'INTEGER', 'r_rubriques_type', 'rubrique_type_id', false, 4, null);
        $this->addForeignKey('r_tva_type_id', 'RTvaTypeId', 'INTEGER', 'r_tva_type', 'r_tva_id', false, 4, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', false, 1, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        // validators
        $this->addValidator('r_rub_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ r_rub_libelle ne doit pas dépasser 510 caractères.');
        $this->addValidator('r_rub_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_rub_libelle doit être un string.');
        $this->addValidator('r_rub_libelle_en', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ r_rub_libelle_en ne doit pas dépasser 510 caractères.');
        $this->addValidator('r_rub_libelle_en', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_rub_libelle_en doit être un string.');
        $this->addValidator('r_rub_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_rub_type_id doit être un int.');
        $this->addValidator('r_tva_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_tva_type_id doit être un int.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ actif doit être un boolean.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RTvaType', 'RTvaType', RelationMap::MANY_TO_ONE, array('r_tva_type_id' => 'r_tva_id', ), null, null);
        $this->addRelation('RRubriquesType', 'RRubriquesType', RelationMap::MANY_TO_ONE, array('r_rub_type_id' => 'rubrique_type_id', ), null, null);
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

} // RRubriquesTableMap
