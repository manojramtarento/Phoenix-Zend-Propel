<?php



/**
 * This class defines the structure of the 'relances' table.
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
class RelancesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.RelancesTableMap';

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
        $this->setName('relances');
        $this->setPhpName('Relances');
        $this->setClassname('Relances');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('rel_id', 'RelId', 'INTEGER', true, 4, null);
        $this->addColumn('rel_numero', 'RelNumero', 'INTEGER', true, 4, null);
        $this->addColumn('rel_reference', 'RelReference', 'VARCHAR', true, 40, null);
        $this->addForeignKey('cl_id', 'ClId', 'INTEGER', 'clients', 'cl_id', false, 4, null);
        $this->addForeignKey('cl_id', 'ClId', 'INTEGER', 'client_facture_options', 'cl_id', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('rel_echeance', 'RelEcheance', 'TIMESTAMP', false, 16, null);
        $this->addForeignKey('rel_type_id', 'RelTypeId', 'INTEGER', 'r_relance_types', 'r_rel_type_id', false, 4, null);
        $this->addColumn('rel_parent_id', 'RelParentId', 'INTEGER', false, 4, null);
        $this->addForeignKey('rel_statut_id', 'RelStatutId', 'TINYINT', 'r_relance_statuts', 'r_rel_statut_id', false, 1, null);
        $this->addColumn('rel_lang', 'RelLang', 'VARCHAR', false, 6, null);
        $this->addForeignKey('rel_ct_facturation', 'RelCtFacturation', 'INTEGER', 'contacts', 'ct_id', false, 4, null);
        $this->addColumn('rel_adresse1', 'RelAdresse1', 'VARCHAR', false, 510, null);
        $this->addColumn('rel_adresse2', 'RelAdresse2', 'VARCHAR', false, 510, null);
        $this->addColumn('rel_adresse3', 'RelAdresse3', 'VARCHAR', false, 510, null);
        $this->addColumn('rel_code_postal', 'RelCodePostal', 'VARCHAR', false, 100, null);
        $this->addColumn('rel_ville', 'RelVille', 'VARCHAR', false, 510, null);
        $this->addColumn('rel_pays', 'RelPays', 'VARCHAR', false, 510, null);
        $this->addColumn('last_recalculation_date', 'LastRecalculationDate', 'TIMESTAMP', false, 16, null);
        // validators
        $this->addValidator('rel_reference', 'required', 'propel.validator.RequiredValidator', '', 'Le champ rel_reference doit être renseigné.');
        $this->addValidator('rel_reference', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ rel_reference ne doit pas dépasser 40 caractères.');
        $this->addValidator('rel_reference', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ rel_reference doit être un string.');
        $this->addValidator('cl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_id doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('rel_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ rel_type_id doit être un int.');
        $this->addValidator('rel_parent_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ rel_parent_id doit être un int.');
        $this->addValidator('rel_statut_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ rel_statut_id doit être un int.');
        $this->addValidator('rel_lang', 'maxLength', 'propel.validator.MaxLengthValidator', '6', 'Le champ rel_lang ne doit pas dépasser 6 caractères.');
        $this->addValidator('rel_lang', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ rel_lang doit être un string.');
        $this->addValidator('rel_adresse1', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ rel_adresse1 ne doit pas dépasser 510 caractères.');
        $this->addValidator('rel_adresse1', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ rel_adresse1 doit être un string.');
        $this->addValidator('rel_adresse2', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ rel_adresse2 ne doit pas dépasser 510 caractères.');
        $this->addValidator('rel_adresse2', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ rel_adresse2 doit être un string.');
        $this->addValidator('rel_adresse3', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ rel_adresse3 ne doit pas dépasser 510 caractères.');
        $this->addValidator('rel_adresse3', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ rel_adresse3 doit être un string.');
        $this->addValidator('rel_code_postal', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ rel_code_postal ne doit pas dépasser 100 caractères.');
        $this->addValidator('rel_code_postal', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ rel_code_postal doit être un string.');
        $this->addValidator('rel_ville', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ rel_ville ne doit pas dépasser 510 caractères.');
        $this->addValidator('rel_ville', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ rel_ville doit être un string.');
        $this->addValidator('rel_pays', 'maxLength', 'propel.validator.MaxLengthValidator', '510', 'Le champ rel_pays ne doit pas dépasser 510 caractères.');
        $this->addValidator('rel_pays', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ rel_pays doit être un string.');
        $this->addValidator('last_recalculation_date', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ last_recalculation_date doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Clients', 'Clients', RelationMap::MANY_TO_ONE, array('cl_id' => 'cl_id', ), null, null);
        $this->addRelation('RRelanceTypes', 'RRelanceTypes', RelationMap::MANY_TO_ONE, array('rel_type_id' => 'r_rel_type_id', ), null, null);
        $this->addRelation('RRelanceStatuts', 'RRelanceStatuts', RelationMap::MANY_TO_ONE, array('rel_statut_id' => 'r_rel_statut_id', ), null, null);
        $this->addRelation('ClientFactureOptions', 'ClientFactureOptions', RelationMap::MANY_TO_ONE, array('cl_id' => 'cl_id', ), null, null);
        $this->addRelation('ContactFacturation', 'Contacts', RelationMap::MANY_TO_ONE, array('rel_ct_facturation' => 'ct_id', ), null, null);
        $this->addRelation('LnkRelanceFacture', 'LnkRelanceFacture', RelationMap::ONE_TO_MANY, array('rel_id' => 'rel_id', ), null, null, 'LnkRelanceFactures');
        $this->addRelation('RelanceStatuts', 'RelanceStatuts', RelationMap::ONE_TO_MANY, array('rel_id' => 'rel_id', ), null, null, 'RelanceStatutss');
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

} // RelancesTableMap
