<?php



/**
 * This class defines the structure of the 'contacts' table.
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
class ContactsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ContactsTableMap';

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
        $this->setName('contacts');
        $this->setPhpName('Contacts');
        $this->setClassname('Contacts');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ct_id', 'CtId', 'INTEGER', true, 4, null);
        $this->addForeignKey('cl_id', 'ClId', 'INTEGER', 'clients', 'cl_id', true, 4, null);
        $this->addColumn('ct_firstname', 'CtFirstname', 'VARCHAR', true, 70, null);
        $this->addColumn('ct_lastname', 'CtLastname', 'VARCHAR', true, 70, null);
        $this->addColumn('ct_email', 'CtEmail', 'VARCHAR', false, 100, null);
        $this->addColumn('ct_phone', 'CtPhone', 'VARCHAR', false, 50, null);
        $this->addColumn('ct_mobile', 'CtMobile', 'VARCHAR', false, 50, null);
        $this->addColumn('ct_fax', 'CtFax', 'VARCHAR', false, 50, null);
        $this->addColumn('ct_title', 'CtTitle', 'VARCHAR', false, 100, null);
        $this->addForeignKey('cl_site_id', 'ClSiteId', 'INTEGER', 'client_sites', 'cl_site_id', false, 4, null);
        $this->addColumn('ct_newsletter', 'CtNewsletter', 'BOOLEAN', false, 1, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('user_modify', 'UserModify', 'INTEGER', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', true, 1, true);
        $this->addColumn('ct_phone_indicatif', 'CtPhoneIndicatif', 'VARCHAR', false, 6, null);
        $this->addColumn('ct_mobile_indicatif', 'CtMobileIndicatif', 'VARCHAR', false, 6, null);
        $this->addColumn('ct_fax_indicatif', 'CtFaxIndicatif', 'VARCHAR', false, 6, null);
        $this->addColumn('ct_receive_fact_by_email', 'CtReceiveFactByEmail', 'BOOLEAN', false, 1, null);
        // validators
        $this->addValidator('cl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_id doit être un int.');
        $this->addValidator('ct_firstname', 'required', 'propel.validator.RequiredValidator', '', 'Le prénom du contact doit être renseigné.');
        $this->addValidator('ct_firstname', 'maxLength', 'propel.validator.MaxLengthValidator', '70', 'Le champ ct_firstname ne doit pas dépasser 70 caractères.');
        $this->addValidator('ct_firstname', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ct_firstname doit être un string.');
        $this->addValidator('ct_lastname', 'required', 'propel.validator.RequiredValidator', '', 'Le nom du contact doit être renseigné.');
        $this->addValidator('ct_lastname', 'maxLength', 'propel.validator.MaxLengthValidator', '70', 'Le champ ct_lastname ne doit pas dépasser 70 caractères.');
        $this->addValidator('ct_lastname', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ct_lastname doit être un string.');
        $this->addValidator('ct_email', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ ct_email ne doit pas dépasser 100 caractères.');
        $this->addValidator('ct_email', 'class', 'Phoenix_Propel_Validator_EmailValidator', '', 'Adresse Email invalide');
        $this->addValidator('ct_phone', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ct_phone doit être un string.');
        $this->addValidator('ct_phone', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Le champ ct_phone ne doit pas dépasser 50 caractères.');
        $this->addValidator('ct_mobile', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ct_mobile doit être un string.');
        $this->addValidator('ct_mobile', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Le champ ct_mobile ne doit pas dépasser 50 caractères.');
        $this->addValidator('ct_fax', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ct_fax doit être un string.');
        $this->addValidator('ct_fax', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Le champ ct_fax ne doit pas dépasser 50 caractères.');
        $this->addValidator('ct_title', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ct_title doit être un string.');
        $this->addValidator('ct_title', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ ct_title ne doit pas dépasser 100 caractères.');
        $this->addValidator('cl_site_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ cl_site_id doit être un int.');
        $this->addValidator('ct_newsletter', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ ct_newsletter doit être un boolean.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('user_modify', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modify doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ actif doit être un boolean.');
        $this->addValidator('ct_phone_indicatif', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ct_phone_indicatif doit être un string.');
        $this->addValidator('ct_mobile_indicatif', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ct_mobile_indicatif doit être un string.');
        $this->addValidator('ct_fax_indicatif', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ct_fax_indicatif doit être un string.');
        $this->addValidator('ct_receive_fact_by_email', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ ct_receive_fact_by_email doit être un boolean.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ClientSites', 'ClientSites', RelationMap::MANY_TO_ONE, array('cl_site_id' => 'cl_site_id', ), null, null);
        $this->addRelation('ClientsRelatedByClId', 'Clients', RelationMap::MANY_TO_ONE, array('cl_id' => 'cl_id', ), null, null);
        $this->addRelation('ClientsRelatedByClCtFacturation', 'Clients', RelationMap::ONE_TO_MANY, array('ct_id' => 'cl_ct_facturation', ), null, null, 'ClientssRelatedByClCtFacturation');
        $this->addRelation('ClientsRelatedByClCtGestion', 'Clients', RelationMap::ONE_TO_MANY, array('ct_id' => 'cl_ct_gestion', ), null, null, 'ClientssRelatedByClCtGestion');
        $this->addRelation('Factures', 'Factures', RelationMap::ONE_TO_MANY, array('ct_id' => 'ct_id', ), null, null, 'Facturess');
        $this->addRelation('LnkOperationsContactsMail', 'LnkOperationsContactsMail', RelationMap::ONE_TO_MANY, array('ct_id' => 'ct_id', ), null, null, 'LnkOperationsContactsMails');
        $this->addRelation('OperationsRelatedByOpCtId', 'Operations', RelationMap::ONE_TO_MANY, array('ct_id' => 'op_ct_id', ), null, null, 'OperationssRelatedByOpCtId');
        $this->addRelation('OperationsRelatedByOpCtFactId', 'Operations', RelationMap::ONE_TO_MANY, array('ct_id' => 'op_ct_fact_id', ), null, null, 'OperationssRelatedByOpCtFactId');
        $this->addRelation('OperationsRelatedByOpCtFactAddrId', 'Operations', RelationMap::ONE_TO_MANY, array('ct_id' => 'op_ct_fact_addr_id', ), null, null, 'OperationssRelatedByOpCtFactAddrId');
        $this->addRelation('Relances', 'Relances', RelationMap::ONE_TO_MANY, array('ct_id' => 'rel_ct_facturation', ), null, null, 'Relancess');
        $this->addRelation('FactureEditionHistory', 'FactureEditionHistory', RelationMap::ONE_TO_MANY, array('ct_id' => 'ct_id', ), null, null, 'FactureEditionHistorys');
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

} // ContactsTableMap
