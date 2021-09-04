<?php



/**
 * This class defines the structure of the 'r_operation_statut_refus' table.
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
class ROperationStatutRefusTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.ROperationStatutRefusTableMap';

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
        $this->setName('r_operation_statut_refus');
        $this->setPhpName('ROperationStatutRefus');
        $this->setClassname('ROperationStatutRefus');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('r_op_statut_refus_id', 'ROpStatutRefusId', 'SMALLINT', true, 2, null);
        $this->addColumn('r_op_statut_refus_motif', 'ROpStatutRefusMotif', 'VARCHAR', false, 100, null);
        // validators
        $this->addValidator('r_op_statut_refus_motif', 'maxLength', 'propel.validator.MaxLengthValidator', '100', 'Le champ r_op_statut_refus_motif ne doit pas dépasser 100 caractères.');
        $this->addValidator('r_op_statut_refus_motif', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ r_op_statut_refus_motif doit être un string.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OperationStatuts', 'OperationStatuts', RelationMap::ONE_TO_MANY, array('r_op_statut_refus_id' => 'hs_refus_id', ), null, null, 'OperationStatutss');
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

} // ROperationStatutRefusTableMap
