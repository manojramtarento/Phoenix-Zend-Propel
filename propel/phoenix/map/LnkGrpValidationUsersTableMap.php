<?php



/**
 * This class defines the structure of the 'lnk_grp_validation_users' table.
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
class LnkGrpValidationUsersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.LnkGrpValidationUsersTableMap';

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
        $this->setName('lnk_grp_validation_users');
        $this->setPhpName('LnkGrpValidationUsers');
        $this->setClassname('LnkGrpValidationUsers');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('lnk_grp_validation_user_id', 'LnkGrpValidationUserId', 'INTEGER', true, 4, null);
        $this->addColumn('r_p_groupe_validation_id', 'RPGroupeValidationId', 'SMALLINT', false, 2, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'users', 'user_id', false, 4, null);
        // validators
        $this->addValidator('r_p_groupe_validation_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ r_p_groupe_validation_id doit être un int.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ValidationUser', 'Users', RelationMap::MANY_TO_ONE, array('user_id' => 'user_id', ), null, null);
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

} // LnkGrpValidationUsersTableMap
