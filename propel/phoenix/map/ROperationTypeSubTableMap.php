<?php



/**
 * This class defines the structure of the 'r_operation_type_sub' table.
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
class ROperationTypeSubTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationTypeSubTableMap';

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
        $this->setName('r_operation_type_sub');
        $this->setPhpName('ROperationTypeSub');
        $this->setClassname('ROperationTypeSub');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('ost_id', 'OstId', 'TINYINT', true, 1, null);
        $this->addColumn('ost_ot_id', 'OstOtId', 'TINYINT', true, 1, null);
        $this->addColumn('ost_libelle', 'OstLibelle', 'VARCHAR', true, 200, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        $this->addColumn('user_modiy', 'UserModiy', 'INTEGER', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('date_modify', 'DateModify', 'TIMESTAMP', false, 16, null);
        $this->addColumn('actif', 'Actif', 'BOOLEAN', false, 1, null);
        $this->addColumn('ord', 'Ord', 'TINYINT', true, 1, 0);
        // validators
        $this->addValidator('ost_ot_id', 'required', 'propel.validator.RequiredValidator', '', 'Un libellé doit être renseigné.');
        $this->addValidator('ost_ot_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ost_ot_id doit être un int.');
        $this->addValidator('ost_libelle', 'required', 'propel.validator.RequiredValidator', '', 'Un libellé doit être renseigné.');
        $this->addValidator('ost_libelle', 'maxLength', 'propel.validator.MaxLengthValidator', '200', 'Le champ ost_libelle ne doit pas dépasser 200 caractères.');
        $this->addValidator('ost_libelle', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ ost_libelle doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
        $this->addValidator('user_modiy', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_modiy doit être un int.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('date_modify', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_modify doit être un string.');
        $this->addValidator('actif', 'type', 'propel.validator.TypeValidator', 'boolean', 'Le champ actif doit être un boolean.');
        $this->addValidator('ord', 'required', 'propel.validator.RequiredValidator', '', 'Le champ ord doit être renseigné.');
        $this->addValidator('ord', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ ord doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Operations', 'Operations', RelationMap::ONE_TO_MANY, array('ost_id' => 'op_subtype_id', ), null, null, 'Operationss');
        $this->addRelation('LnkROperationTypeSubTemplateMediasUniverses', 'LnkROperationTypeSubTemplateMediasUniverses', RelationMap::ONE_TO_MANY, array('ost_id' => 'lnk_r_operation_type_sub_template_media_universe_ost_id', ), null, null, 'LnkROperationTypeSubTemplateMediasUniversess');
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

} // ROperationTypeSubTableMap
