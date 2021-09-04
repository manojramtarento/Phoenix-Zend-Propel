<?php



/**
 * This class defines the structure of the 'mails' table.
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
class MailsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.MailsTableMap';

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
        $this->setName('mails');
        $this->setPhpName('Mails');
        $this->setClassname('Mails');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('mail_id', 'MailId', 'INTEGER', true, 4, null);
        $this->addColumn('mail_entity_name', 'MailEntityName', 'VARCHAR', true, 100, null);
        $this->addColumn('mail_entity_id', 'MailEntityId', 'INTEGER', true, 4, null);
        $this->addColumn('mail_to', 'MailTo', 'LONGVARCHAR', false, 2147483647, null);
        $this->addColumn('mail_cc', 'MailCc', 'LONGVARCHAR', false, 2147483647, null);
        $this->addColumn('mail_bcc', 'MailBcc', 'LONGVARCHAR', false, 2147483647, null);
        $this->addColumn('mail_subject', 'MailSubject', 'LONGVARCHAR', false, 2147483647, null);
        $this->addColumn('mail_message', 'MailMessage', 'LONGVARCHAR', false, 2147483647, null);
        $this->addForeignKey('r_mail_type_id', 'RMailTypeId', 'TINYINT', 'r_mail_types', 'r_mail_type_id', false, 1, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        // validators
        $this->addValidator('mail_entity_name', 'required', 'propel.validator.RequiredValidator', '', 'Le champ mail_entity_name doit être renseigné.');
        $this->addValidator('mail_entity_name', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ mail_entity_name ne doit pas dépasser 100 caractères.');
        $this->addValidator('mail_entity_name', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ mail_entity_name doit être un string.');
        $this->addValidator('mail_entity_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ mail_entity_id doit être renseigné.');
        $this->addValidator('mail_entity_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ mail_entity_id doit être un int.');
        $this->addValidator('mail_to', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ mail_to ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('mail_to', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ mail_to doit être un string.');
        $this->addValidator('mail_cc', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ mail_cc ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('mail_cc', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ mail_cc doit être un string.');
        $this->addValidator('mail_bcc', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ mail_bcc ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('mail_bcc', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ mail_bcc doit être un string.');
        $this->addValidator('mail_subject', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ mail_subject ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('mail_subject', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ mail_subject doit être un string.');
        $this->addValidator('mail_message', 'maxLength', 'propel.validator.MaxLengthValidator', '2147483647', 'Le champ mail_message ne doit pas dépasser 2147483647 caractères.');
        $this->addValidator('mail_message', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ mail_message doit être un string.');
        $this->addValidator('r_mail_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_mail_type_id doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RMailTypes', 'RMailTypes', RelationMap::MANY_TO_ONE, array('r_mail_type_id' => 'r_mail_type_id', ), null, null);
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

} // MailsTableMap
