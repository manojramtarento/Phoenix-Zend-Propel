<?php



/**
 * This class defines the structure of the 'client_sites' table.
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
class ClientSitesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ClientSitesTableMap';

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
        $this->setName('client_sites');
        $this->setPhpName('ClientSites');
        $this->setClassname('ClientSites');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('cl_site_id', 'ClSiteId', 'INTEGER', true, 4, null);
        $this->addColumn('cl_id', 'ClId', 'INTEGER', false, 4, null);
        $this->addColumn('cl_site_libelle', 'ClSiteLibelle', 'VARCHAR', true, 100, null);
        $this->addColumn('cl_site_addr_1', 'ClSiteAddr1', 'VARCHAR', true, 40, null);
        $this->addColumn('cl_site_addr_2', 'ClSiteAddr2', 'VARCHAR', false, 40, null);
        $this->addColumn('cl_site_addr_3', 'ClSiteAddr3', 'VARCHAR', false, 40, null);
        $this->addColumn('cl_site_zipcode', 'ClSiteZipcode', 'VARCHAR', true, 10, null);
        $this->addColumn('cl_site_town', 'ClSiteTown', 'VARCHAR', true, 40, null);
        $this->addColumn('cl_site_country_id', 'ClSiteCountryId', 'INTEGER', false, 11, null);
        $this->addColumn('cl_site_is_for_log', 'ClSiteIsForLog', 'BOOLEAN', true, 1, false);
        $this->addColumn('gdl_fourn_id', 'GdlFournId', 'INTEGER', false, 4, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', false, 1, null);
        // validators
        $this->addValidator('cl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_id doit être un int.');
        $this->addValidator('cl_site_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ cl_site_libelle ne doit pas dépasser 100 caractères.');
        $this->addValidator('cl_site_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_site_libelle doit être un string.');
        $this->addValidator('cl_site_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Le libellé doit être renseigné');
        $this->addValidator('cl_site_addr_1', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ cl_site_addr_1 ne doit pas dépasser 40 caractères.');
        $this->addValidator('cl_site_addr_1', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_site_addr_1 doit être un string.');
        $this->addValidator('cl_site_addr_1', 'required', 'propel.validator.RequiredValidator', '', 'L\'adresse doit être renseignée');
        $this->addValidator('cl_site_addr_2', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ cl_site_addr_2 ne doit pas dépasser 40 caractères.');
        $this->addValidator('cl_site_addr_2', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_site_addr_2 doit être un string.');
        $this->addValidator('cl_site_addr_3', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ cl_site_addr_3 ne doit pas dépasser 40 caractères.');
        $this->addValidator('cl_site_addr_3', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_site_addr_3 doit être un string.');
        $this->addValidator('cl_site_zipcode', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'Le champ cl_site_zipcode ne doit pas dépasser 10 caractères.');
        $this->addValidator('cl_site_zipcode', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_site_zipcode doit être un string.');
        $this->addValidator('cl_site_zipcode', 'required', 'propel.validator.RequiredValidator', '', 'Le code postal doit être renseigné');
        $this->addValidator('cl_site_town', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ cl_site_town ne doit pas dépasser 40 caractères.');
        $this->addValidator('cl_site_town', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ cl_site_town doit être un string.');
        $this->addValidator('cl_site_town', 'required', 'propel.validator.RequiredValidator', '', 'La ville doit être renseignée');
        $this->addValidator('cl_site_country_id', 'maxLength', 'propel.validator.MaxLengthValidator', '11', 'Le champ cl_site_country_id ne doit pas dépasser 11 chiffres.');
        $this->addValidator('cl_site_country_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_site_country_id doit être un int.');
        $this->addValidator('cl_site_is_for_log', 'required', 'propel.validator.RequiredValidator', '', 'Le champ cl_site_is_for_log doit être renseigné.');
        $this->addValidator('cl_site_is_for_log', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ cl_site_is_for_log doit être un boolean.');
        $this->addValidator('gdl_fourn_id', 'type', 'propel.validator.TypeValidator', 'integer', 'Le champ cl_site_is_for_log doit être un entier');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ actif doit être un boolean.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Contacts', 'Contacts', RelationMap::ONE_TO_MANY, array('cl_site_id' => 'cl_site_id', ), null, null, 'Contactss');
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('cl_site_id' => 'cl_site_id_for_log', ), null, null, 'Operationss');
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

} // ClientSitesTableMap
