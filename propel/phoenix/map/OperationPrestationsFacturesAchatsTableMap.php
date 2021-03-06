<?php



/**
 * This class defines the structure of the 'operation_prestations_factures_achats' table.
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
class OperationPrestationsFacturesAchatsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'phoenix.map.OperationPrestationsFacturesAchatsTableMap';

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
        $this->setName('operation_prestations_factures_achats');
        $this->setPhpName('OperationPrestationsFacturesAchats');
        $this->setClassname('OperationPrestationsFacturesAchats');
        $this->setPackage('phoenix');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('op_prest_achat_id', 'OpPrestAchatId', 'INTEGER', true, 4, null);
        $this->addColumn('op_prest_id', 'OpPrestId', 'INTEGER', true, 4, null);
        $this->addColumn('op_prest_achat_num_facture', 'OpPrestAchatNumFacture', 'VARCHAR', true, 40, null);
        $this->addColumn('op_prest_achat_date_facture', 'OpPrestAchatDateFacture', 'TIMESTAMP', true, 16, null);
        $this->addColumn('op_prest_achat_quantite', 'OpPrestAchatQuantite', 'INTEGER', true, 4, null);
        $this->addColumn('op_prest_achat_cout_interne', 'OpPrestAchatCoutInterne', 'NUMERIC', false, 20, null);
        $this->addColumn('op_prest_achat_cout_externe', 'OpPrestAchatCoutExterne', 'NUMERIC', true, 20, null);
        $this->addColumn('op_prest_achat_file_id', 'OpPrestAchatFileId', 'INTEGER', false, 4, null);
        // validators
        $this->addValidator('op_prest_id', 'required', 'propel.validator.RequiredValidator', '', 'Le champ op_prest_id doit ??tre renseign??.');
        $this->addValidator('op_prest_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_id doit ??tre un int.');
        $this->addValidator('op_prest_achat_num_facture', 'required', 'propel.validator.RequiredValidator', '', 'Le num??ro de facture doit ??tre indiqu??.');
        $this->addValidator('op_prest_achat_num_facture', 'maxLength', 'propel.validator.MaxLengthValidator', '40', 'Le champ op_prest_achat_num_facture ne doit pas d??passer 40 caract??res.');
        $this->addValidator('op_prest_achat_num_facture', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_prest_achat_num_facture doit ??tre un string.');
        $this->addValidator('op_prest_achat_date_facture', 'required', 'propel.validator.RequiredValidator', '', 'La date de la facture doit ??tre indiqu??e.');
        $this->addValidator('op_prest_achat_date_facture', 'type', 'propel.validator.TypeValidator', 'string', 'Le champ op_prest_achat_date_facture doit ??tre un string.');
        $this->addValidator('op_prest_achat_quantite', 'required', 'propel.validator.RequiredValidator', '', 'La quantit?? doit ??tre indiqu??e.');
        $this->addValidator('op_prest_achat_quantite', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_achat_quantite doit ??tre un int.');
        $this->addValidator('op_prest_achat_cout_interne', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_achat_cout_interne doit ??tre un float.');
        $this->addValidator('op_prest_achat_cout_externe', 'required', 'propel.validator.RequiredValidator', '', 'Le co??t facture (unitaire externe) doit ??tre indiqu??.');
        $this->addValidator('op_prest_achat_cout_externe', 'type', 'propel.validator.TypeValidator', 'float', 'Le champ op_prest_achat_cout_externe doit ??tre un float.');
        $this->addValidator('op_prest_achat_file_id', 'type', 'propel.validator.TypeValidator', 'int', 'Le champ op_prest_achat_file_id doit ??tre un int.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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

} // OperationPrestationsFacturesAchatsTableMap
