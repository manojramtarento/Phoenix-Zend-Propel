<?php



/**
 * This class defines the structure of the 'journal_de_vente_ligne' table.
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
class JournalDeVenteLigneTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.JournalDeVenteLigneTableMap';

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
        $this->setName('journal_de_vente_ligne');
        $this->setPhpName('JournalDeVenteLigne');
        $this->setClassname('JournalDeVenteLigne');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('jdvl_id', 'JdvlId', 'BIGINT', true, 8, null);
        $this->addColumn('jdvl_type', 'JdvlType', 'VARCHAR', false, 10, null);
        $this->addColumn('jdvl_date', 'JdvlDate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('jdvl_journal', 'JdvlJournal', 'VARCHAR', false, 10, null);
        $this->addColumn('jdvl_general', 'JdvlGeneral', 'VARCHAR', false, 20, null);
        $this->addColumn('jdvl_auxiliaire', 'JdvlAuxiliaire', 'VARCHAR', false, 40, null);
        $this->addColumn('jdvl_sens', 'JdvlSens', 'VARCHAR', false, 4, null);
        $this->addColumn('jdvl_montant', 'JdvlMontant', 'VARCHAR', false, 40, null);
        $this->addColumn('jdvl_client', 'JdvlClient', 'VARCHAR', false, 200, null);
        $this->addColumn('jdvl_reference', 'JdvlReference', 'VARCHAR', false, 40, null);
        $this->addColumn('jdvl_op_id', 'JdvlOpId', 'INTEGER', false, 4, null);
        $this->addColumn('jdvl_date_echeance', 'JdvlDateEcheance', 'TIMESTAMP', false, 16, null);
        $this->addColumn('jdvl_section_analytique_1', 'JdvlSectionAnalytique1', 'VARCHAR', false, 10, null);
        $this->addColumn('jdvl_section_analytique_2', 'JdvlSectionAnalytique2', 'VARCHAR', false, 10, null);
        $this->addColumn('jdvl_section_analytique_3', 'JdvlSectionAnalytique3', 'VARCHAR', false, 10, null);
        $this->addColumn('jdvl_section_analytique_4', 'JdvlSectionAnalytique4', 'VARCHAR', false, 10, null);
        $this->addColumn('jdvl_section_analytique_5', 'JdvlSectionAnalytique5', 'VARCHAR', false, 10, null);
        $this->addColumn('jdvl_order', 'JdvlOrder', 'SMALLINT', false, 2, null);
        $this->addForeignKey('jdv_id', 'JdvId', 'INTEGER', 'journal_de_vente', 'jdv_id', false, 4, null);
        $this->addColumn('date_create', 'DateCreate', 'TIMESTAMP', false, 16, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', false, 4, null);
        // validators
        $this->addValidator('jdvl_type', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'Le champ jdvl_type ne doit pas dépasser 10 caractères.');
        $this->addValidator('jdvl_type', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_type doit être un string.');
        $this->addValidator('jdvl_date', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_date doit être un string.');
        $this->addValidator('jdvl_journal', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'Le champ jdvl_journal ne doit pas dépasser 10 caractères.');
        $this->addValidator('jdvl_journal', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_journal doit être un string.');
        $this->addValidator('jdvl_general', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Le champ jdvl_general ne doit pas dépasser 20 caractères.');
        $this->addValidator('jdvl_general', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_general doit être un string.');
        $this->addValidator('jdvl_auxiliaire', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ jdvl_auxiliaire ne doit pas dépasser 40 caractères.');
        $this->addValidator('jdvl_auxiliaire', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_auxiliaire doit être un string.');
        $this->addValidator('jdvl_sens', 'maxLength', 'propel.validator.MaxLengthValidator', '4', 'Le champ jdvl_sens ne doit pas dépasser 4 caractères.');
        $this->addValidator('jdvl_sens', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_sens doit être un string.');
        $this->addValidator('jdvl_montant', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ jdvl_montant ne doit pas dépasser 40 caractères.');
        $this->addValidator('jdvl_montant', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_montant doit être un string.');
        $this->addValidator('jdvl_client', 'maxLength', 'propel.validator.MaxLengthValidator', '200', 'Le champ jdvl_client ne doit pas dépasser 40 caractères.');
        $this->addValidator('jdvl_client', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_client doit être un string.');
        $this->addValidator('jdvl_reference', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ jdvl_reference ne doit pas dépasser 40 caractères.');
        $this->addValidator('jdvl_reference', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_reference doit être un string.');
        $this->addValidator('jdvl_op_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ jdvl_op_id doit être un int.');
        $this->addValidator('jdvl_date_echeance', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_date_echeance doit être un string.');
        $this->addValidator('jdvl_section_analytique_1', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'Le champ jdvl_section_analytique_1 ne doit pas dépasser 10 caractères.');
        $this->addValidator('jdvl_section_analytique_1', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_section_analytique_1 doit être un string.');
        $this->addValidator('jdvl_section_analytique_2', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'Le champ jdvl_section_analytique_2 ne doit pas dépasser 10 caractères.');
        $this->addValidator('jdvl_section_analytique_2', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_section_analytique_2 doit être un string.');
        $this->addValidator('jdvl_section_analytique_3', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'Le champ jdvl_section_analytique_3 ne doit pas dépasser 10 caractères.');
        $this->addValidator('jdvl_section_analytique_3', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_section_analytique_3 doit être un string.');
        $this->addValidator('jdvl_section_analytique_4', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'Le champ jdvl_section_analytique_4 ne doit pas dépasser 10 caractères.');
        $this->addValidator('jdvl_section_analytique_4', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_section_analytique_4 doit être un string.');
        $this->addValidator('jdvl_section_analytique_5', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'Le champ jdvl_section_analytique_5 ne doit pas dépasser 10 caractères.');
        $this->addValidator('jdvl_section_analytique_5', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ jdvl_section_analytique_5 doit être un string.');
        $this->addValidator('jdvl_order', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ jdvl_order doit être un int.');
        $this->addValidator('jdv_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ jdv_id doit être un int.');
        $this->addValidator('date_create', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'Le champ date_create ne doit pas dépasser 20 caractères.');
        $this->addValidator('date_create', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ date_create doit être un string.');
        $this->addValidator('user_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ user_id doit être un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('JournalDeVente', 'JournalDeVente', RelationMap::MANY_TO_ONE, array('jdv_id' => 'jdv_id', ), null, null);
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

} // JournalDeVenteLigneTableMap
