<?php



/**
 * This class defines the structure of the 'lnk_r_operation_type_sub_template_medias_universes' table.
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
class LnkROperationTypeSubTemplateMediasUniversesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkROperationTypeSubTemplateMediasUniversesTableMap';

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
        $this->setName('lnk_r_operation_type_sub_template_medias_universes');
        $this->setPhpName('LnkROperationTypeSubTemplateMediasUniverses');
        $this->setClassname('LnkROperationTypeSubTemplateMediasUniverses');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('lnk_r_operation_type_sub_template_media_universe_id', 'LnkROperationTypeSubTemplateMediaUniverseId', 'INTEGER', true, 4, null);
        $this->addForeignKey('lnk_r_operation_type_sub_template_media_universe_ost_id', 'LnkROperationTypeSubTemplateMediaUniverseOstId', 'TINYINT', 'r_operation_type_sub', 'ost_id', false, 3, null);
        $this->addForeignKey('lnk_r_operation_type_sub_template_media_universe_tpl_id', 'LnkROperationTypeSubTemplateMediaUniverseTplId', 'INTEGER', 'r_operation_type_sub_tpl', 'ost_tpl_id', false, 4, null);
        $this->addForeignKey('lnk_r_operation_type_sub_template_media_universe_universe_id', 'LnkROperationTypeSubTemplateMediaUniverseUniverseId', 'INTEGER', 'r_operation_universes', 'r_operation_universe_id', false, 4, null);
        $this->addForeignKey('lnk_r_operation_type_sub_template_media_universe_media_id', 'LnkROperationTypeSubTemplateMediaUniverseMediaId', 'INTEGER', 'r_operation_medias', 'r_operation_media_id', false, 4, null);
        // validators
        $this->addValidator('lnk_r_operation_type_sub_template_media_universe_ost_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_r_operation_type_sub_template_media_universe_ost_id doit être un int.');
        $this->addValidator('lnk_r_operation_type_sub_template_media_universe_tpl_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_r_operation_type_sub_template_media_universe_tpl_id doit être un int.');
        $this->addValidator('lnk_r_operation_type_sub_template_media_universe_universe_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_r_operation_type_sub_template_media_universe_universe_id doit être un int.');
        $this->addValidator('lnk_r_operation_type_sub_template_media_universe_media_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ lnk_r_operation_type_sub_template_media_universe_media_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OperationTypeSub', 'ROperationTypeSub', RelationMap::MANY_TO_ONE, array('lnk_r_operation_type_sub_template_media_universe_ost_id' => 'ost_id', ), null, null);
        $this->addRelation('OerationTypeSubTemplate', 'ROperationTypeSubTpl', RelationMap::MANY_TO_ONE, array('lnk_r_operation_type_sub_template_media_universe_tpl_id' => 'ost_tpl_id', ), null, null);
        $this->addRelation('OperationUniverse', 'ROperationUniverses', RelationMap::MANY_TO_ONE, array('lnk_r_operation_type_sub_template_media_universe_universe_id' => 'r_operation_universe_id', ), null, null);
        $this->addRelation('OperationMedia', 'ROperationMedias', RelationMap::MANY_TO_ONE, array('lnk_r_operation_type_sub_template_media_universe_media_id' => 'r_operation_media_id', ), null, null);
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
            'validateisunique' =>  array (
  'columns' => 'lnk_r_operation_type_sub_template_media_universe_ost_id,lnk_r_operation_type_sub_template_media_universe_tpl_id,lnk_r_operation_type_sub_template_media_universe_universe_id,lnk_r_operation_type_sub_template_media_universe_media_id',
  'message' => 'Cette association mécanique / template / média / universe existe déjà',
),
            'log' =>  array (
),
            'adderror' =>  array (
),
            'utils' =>  array (
),
        );
    } // getBehaviors()

} // LnkROperationTypeSubTemplateMediasUniversesTableMap
