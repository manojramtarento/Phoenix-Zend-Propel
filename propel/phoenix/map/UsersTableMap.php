<?php



/**
 * This class defines the structure of the 'users' table.
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
class UsersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.UsersTableMap';

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
        $this->setName('users');
        $this->setPhpName('Users');
        $this->setClassname('Users');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('user_id', 'UserId', 'INTEGER', true, 4, null);
        $this->addColumn('user_login', 'UserLogin', 'VARCHAR', false, 100, null);
        $this->addColumn('user_nom', 'UserNom', 'VARCHAR', false, 100, null);
        $this->addColumn('user_prenom', 'UserPrenom', 'VARCHAR', false, 100, null);
        $this->addColumn('user_mail', 'UserMail', 'VARCHAR', false, 300, null);
        $this->addColumn('user_phone', 'UserPhone', 'VARCHAR', false, 50, null);
        $this->addColumn('user_mobile', 'UserMobile', 'VARCHAR', false, 50, null);
        $this->addForeignKey('r_user_type_id', 'RUserTypeId', 'INTEGER', 'r_user_types', 'r_user_type_id', false, 4, null);
        $this->addColumn('user_language', 'UserLanguage', 'CHAR', false, 10, null);
        $this->addColumn('user_password', 'UserPassword', 'CHAR', false, 255, null);
        $this->addColumn('user_password_salt', 'UserPasswordSalt', 'CHAR', false, 255, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        // validators
        $this->addValidator('user_login', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ user_login ne doit pas dépasser 100 caractères.');
        $this->addValidator('user_login', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ user_login doit être un string.');
        $this->addValidator('user_nom', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ user_nom ne doit pas dépasser 100 caractères.');
        $this->addValidator('user_nom', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ user_nom doit être un string.');
        $this->addValidator('user_prenom', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ user_prenom ne doit pas dépasser 100 caractères.');
        $this->addValidator('user_prenom', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ user_prenom doit être un string.');
        $this->addValidator('user_mail', 'maxLength', 'propel.validator.MaxLengthValidator', '300', 'Le champ user_mail ne doit pas dépasser 300 caractères.');
        $this->addValidator('user_mail', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ user_mail doit être un string.');
        $this->addValidator('user_phone', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Le champ user_phone ne doit pas dépasser 50 caractères.');
        $this->addValidator('user_phone', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ user_phone doit être un string.');
        $this->addValidator('user_mobile', 'maxLength', 'propel.validator.MaxLengthValidator', '50', 'Le champ user_mobile ne doit pas dépasser 50 caractères.');
        $this->addValidator('user_mobile', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ user_mobile doit être un string.');
        $this->addValidator('user_password', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ user_password ne doit pas dépasser 255 caractères.');
        $this->addValidator('user_password', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ user_password doit être un string.');
        $this->addValidator('r_user_type_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_user_type_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RUserTypes', 'RUserTypes', RelationMap::MANY_TO_ONE, array('r_user_type_id' => 'r_user_type_id', ), null, null);
        $this->addRelation('Clients', 'Clients', RelationMap::ONE_TO_MANY, array('user_id' => 'cl_dc_id', ), null, null, 'Clientss');
        $this->addRelation('LnkUsersAclGroups', 'LnkUsersAclGroups', RelationMap::ONE_TO_MANY, array('user_id' => 'user_id', ), null, null, 'LnkUsersAclGroupss');
        $this->addRelation('OperationPrestations', 'OperationPrestations', RelationMap::ONE_TO_MANY, array('user_id' => 'cost_updater_user', ), null, null, 'OperationPrestationss');
        $this->addRelation('OperationStatuts', 'OperationStatuts', RelationMap::ONE_TO_MANY, array('user_id' => 'user_id', ), null, null, 'OperationStatutss');
        $this->addRelation('OperationsRelatedByOpDcId', 'Operations', RelationMap::ONE_TO_MANY, array('user_id' => 'op_dc_id', ), null, null, 'OperationssRelatedByOpDcId');
        $this->addRelation('OperationsRelatedByOpCpId', 'Operations', RelationMap::ONE_TO_MANY, array('user_id' => 'op_cp_id', ), null, null, 'OperationssRelatedByOpCpId');
        $this->addRelation('OperationsRelatedByOpCdpId', 'Operations', RelationMap::ONE_TO_MANY, array('user_id' => 'op_cdp_id', ), null, null, 'OperationssRelatedByOpCdpId');
        $this->addRelation('FactureEditionHistory', 'FactureEditionHistory', RelationMap::ONE_TO_MANY, array('user_id' => 'fact_eh_user_id', ), null, null, 'FactureEditionHistorys');
        $this->addRelation('UserKpiSettings', 'UserKpiSettings', RelationMap::ONE_TO_MANY, array('user_id' => 'user_kpi_settings_user_id', ), null, null, 'UserKpiSettingss');
        $this->addRelation('LnkGrpValidationUsers', 'LnkGrpValidationUsers', RelationMap::ONE_TO_MANY, array('user_id' => 'user_id', ), null, null, 'LnkGrpValidationUserss');
        $this->addRelation('LnkUsersOrganisations', 'LnkUsersOrganisations', RelationMap::ONE_TO_MANY, array('user_id' => 'lnk_users_organisations_user_id', ), null, null, 'LnkUsersOrganisationss');
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

} // UsersTableMap
