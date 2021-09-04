<?php


/**
 * Base static class for performing query and update operations on the 'factures_prestations' table.
 *
 *
 *
 * @package propel.generator.phoenix.om
 */
abstract class BaseFacturesPrestationsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'phoenix';

    /** the table name for this class */
    const TABLE_NAME = 'factures_prestations';

    /** the related Propel class for this table */
    const OM_CLASS = 'FacturesPrestations';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FacturesPrestationsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 31;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 31;

    /** the column name for the fact_prest_id field */
    const FACT_PREST_ID = 'factures_prestations.fact_prest_id';

    /** the column name for the fact_rub_id field */
    const FACT_RUB_ID = 'factures_prestations.fact_rub_id';

    /** the column name for the op_prest_id field */
    const OP_PREST_ID = 'factures_prestations.op_prest_id';

    /** the column name for the r_prestation_id field */
    const R_PRESTATION_ID = 'factures_prestations.r_prestation_id';

    /** the column name for the fact_prest_libelle field */
    const FACT_PREST_LIBELLE = 'factures_prestations.fact_prest_libelle';

    /** the column name for the fact_prest_description field */
    const FACT_PREST_DESCRIPTION = 'factures_prestations.fact_prest_description';

    /** the column name for the fact_prest_order field */
    const FACT_PREST_ORDER = 'factures_prestations.fact_prest_order';

    /** the column name for the fact_prest_off field */
    const FACT_PREST_OFF = 'factures_prestations.fact_prest_off';

    /** the column name for the fact_prest_adf field */
    const FACT_PREST_ADF = 'factures_prestations.fact_prest_adf';

    /** the column name for the r_p_code_comptable field */
    const R_P_CODE_COMPTABLE = 'factures_prestations.r_p_code_comptable';

    /** the column name for the r_p_axe1 field */
    const R_P_AXE1 = 'factures_prestations.r_p_axe1';

    /** the column name for the r_p_axe3 field */
    const R_P_AXE3 = 'factures_prestations.r_p_axe3';

    /** the column name for the r_p_axe4 field */
    const R_P_AXE4 = 'factures_prestations.r_p_axe4';

    /** the column name for the op_prest_pv field */
    const OP_PREST_PV = 'factures_prestations.op_prest_pv';

    /** the column name for the op_prest_qestim field */
    const OP_PREST_QESTIM = 'factures_prestations.op_prest_qestim';

    /** the column name for the op_prest_mestim field */
    const OP_PREST_MESTIM = 'factures_prestations.op_prest_mestim';

    /** the column name for the op_prest_qreel field */
    const OP_PREST_QREEL = 'factures_prestations.op_prest_qreel';

    /** the column name for the op_prest_mreel field */
    const OP_PREST_MREEL = 'factures_prestations.op_prest_mreel';

    /** the column name for the fact_prest_qestim_deja_facture field */
    const FACT_PREST_QESTIM_DEJA_FACTURE = 'factures_prestations.fact_prest_qestim_deja_facture';

    /** the column name for the fact_prest_quantite_deja_facture field */
    const FACT_PREST_QUANTITE_DEJA_FACTURE = 'factures_prestations.fact_prest_quantite_deja_facture';

    /** the column name for the fact_prest_montant_deja_facture field */
    const FACT_PREST_MONTANT_DEJA_FACTURE = 'factures_prestations.fact_prest_montant_deja_facture';

    /** the column name for the r_tva_type_id field */
    const R_TVA_TYPE_ID = 'factures_prestations.r_tva_type_id';

    /** the column name for the r_rub_type_id field */
    const R_RUB_TYPE_ID = 'factures_prestations.r_rub_type_id';

    /** the column name for the fact_prest_qestim_facture field */
    const FACT_PREST_QESTIM_FACTURE = 'factures_prestations.fact_prest_qestim_facture';

    /** the column name for the fact_prest_quantite_facture field */
    const FACT_PREST_QUANTITE_FACTURE = 'factures_prestations.fact_prest_quantite_facture';

    /** the column name for the fact_prest_montant_facture field */
    const FACT_PREST_MONTANT_FACTURE = 'factures_prestations.fact_prest_montant_facture';

    /** the column name for the fact_prest_taux_adf field */
    const FACT_PREST_TAUX_ADF = 'factures_prestations.fact_prest_taux_adf';

    /** the column name for the fact_prest_taux_partiel field */
    const FACT_PREST_TAUX_PARTIEL = 'factures_prestations.fact_prest_taux_partiel';

    /** the column name for the fact_prest_qestim_facture_final field */
    const FACT_PREST_QESTIM_FACTURE_FINAL = 'factures_prestations.fact_prest_qestim_facture_final';

    /** the column name for the fact_prest_quantite_facture_final field */
    const FACT_PREST_QUANTITE_FACTURE_FINAL = 'factures_prestations.fact_prest_quantite_facture_final';

    /** the column name for the fact_prest_montant_facture_final field */
    const FACT_PREST_MONTANT_FACTURE_FINAL = 'factures_prestations.fact_prest_montant_facture_final';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of FacturesPrestations objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array FacturesPrestations[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FacturesPrestationsPeer::$fieldNames[FacturesPrestationsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('FactPrestId', 'FactRubId', 'OpPrestId', 'RPrestationId', 'FactPrestLibelle', 'FactPrestDescription', 'FactPrestOrder', 'FactPrestOff', 'FactPrestAdf', 'RPCodeComptable', 'RPAxe1', 'RPAxe3', 'RPAxe4', 'OpPrestPv', 'OpPrestQestim', 'OpPrestMestim', 'OpPrestQreel', 'OpPrestMreel', 'FactPrestQestimDejaFacture', 'FactPrestQuantiteDejaFacture', 'FactPrestMontantDejaFacture', 'RTvaTypeId', 'RRubTypeId', 'FactPrestQestimFacture', 'FactPrestQuantiteFacture', 'FactPrestMontantFacture', 'FactPrestTauxAdf', 'FactPrestTauxPartiel', 'FactPrestQestimFactureFinal', 'FactPrestQuantiteFactureFinal', 'FactPrestMontantFactureFinal', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('factPrestId', 'factRubId', 'opPrestId', 'rPrestationId', 'factPrestLibelle', 'factPrestDescription', 'factPrestOrder', 'factPrestOff', 'factPrestAdf', 'rPCodeComptable', 'rPAxe1', 'rPAxe3', 'rPAxe4', 'opPrestPv', 'opPrestQestim', 'opPrestMestim', 'opPrestQreel', 'opPrestMreel', 'factPrestQestimDejaFacture', 'factPrestQuantiteDejaFacture', 'factPrestMontantDejaFacture', 'rTvaTypeId', 'rRubTypeId', 'factPrestQestimFacture', 'factPrestQuantiteFacture', 'factPrestMontantFacture', 'factPrestTauxAdf', 'factPrestTauxPartiel', 'factPrestQestimFactureFinal', 'factPrestQuantiteFactureFinal', 'factPrestMontantFactureFinal', ),
        BasePeer::TYPE_COLNAME => array (FacturesPrestationsPeer::FACT_PREST_ID, FacturesPrestationsPeer::FACT_RUB_ID, FacturesPrestationsPeer::OP_PREST_ID, FacturesPrestationsPeer::R_PRESTATION_ID, FacturesPrestationsPeer::FACT_PREST_LIBELLE, FacturesPrestationsPeer::FACT_PREST_DESCRIPTION, FacturesPrestationsPeer::FACT_PREST_ORDER, FacturesPrestationsPeer::FACT_PREST_OFF, FacturesPrestationsPeer::FACT_PREST_ADF, FacturesPrestationsPeer::R_P_CODE_COMPTABLE, FacturesPrestationsPeer::R_P_AXE1, FacturesPrestationsPeer::R_P_AXE3, FacturesPrestationsPeer::R_P_AXE4, FacturesPrestationsPeer::OP_PREST_PV, FacturesPrestationsPeer::OP_PREST_QESTIM, FacturesPrestationsPeer::OP_PREST_MESTIM, FacturesPrestationsPeer::OP_PREST_QREEL, FacturesPrestationsPeer::OP_PREST_MREEL, FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE, FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE, FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE, FacturesPrestationsPeer::R_TVA_TYPE_ID, FacturesPrestationsPeer::R_RUB_TYPE_ID, FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE, FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE, FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE, FacturesPrestationsPeer::FACT_PREST_TAUX_ADF, FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL, FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL, FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL, FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FACT_PREST_ID', 'FACT_RUB_ID', 'OP_PREST_ID', 'R_PRESTATION_ID', 'FACT_PREST_LIBELLE', 'FACT_PREST_DESCRIPTION', 'FACT_PREST_ORDER', 'FACT_PREST_OFF', 'FACT_PREST_ADF', 'R_P_CODE_COMPTABLE', 'R_P_AXE1', 'R_P_AXE3', 'R_P_AXE4', 'OP_PREST_PV', 'OP_PREST_QESTIM', 'OP_PREST_MESTIM', 'OP_PREST_QREEL', 'OP_PREST_MREEL', 'FACT_PREST_QESTIM_DEJA_FACTURE', 'FACT_PREST_QUANTITE_DEJA_FACTURE', 'FACT_PREST_MONTANT_DEJA_FACTURE', 'R_TVA_TYPE_ID', 'R_RUB_TYPE_ID', 'FACT_PREST_QESTIM_FACTURE', 'FACT_PREST_QUANTITE_FACTURE', 'FACT_PREST_MONTANT_FACTURE', 'FACT_PREST_TAUX_ADF', 'FACT_PREST_TAUX_PARTIEL', 'FACT_PREST_QESTIM_FACTURE_FINAL', 'FACT_PREST_QUANTITE_FACTURE_FINAL', 'FACT_PREST_MONTANT_FACTURE_FINAL', ),
        BasePeer::TYPE_FIELDNAME => array ('fact_prest_id', 'fact_rub_id', 'op_prest_id', 'r_prestation_id', 'fact_prest_libelle', 'fact_prest_description', 'fact_prest_order', 'fact_prest_off', 'fact_prest_adf', 'r_p_code_comptable', 'r_p_axe1', 'r_p_axe3', 'r_p_axe4', 'op_prest_pv', 'op_prest_qestim', 'op_prest_mestim', 'op_prest_qreel', 'op_prest_mreel', 'fact_prest_qestim_deja_facture', 'fact_prest_quantite_deja_facture', 'fact_prest_montant_deja_facture', 'r_tva_type_id', 'r_rub_type_id', 'fact_prest_qestim_facture', 'fact_prest_quantite_facture', 'fact_prest_montant_facture', 'fact_prest_taux_adf', 'fact_prest_taux_partiel', 'fact_prest_qestim_facture_final', 'fact_prest_quantite_facture_final', 'fact_prest_montant_facture_final', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FacturesPrestationsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('FactPrestId' => 0, 'FactRubId' => 1, 'OpPrestId' => 2, 'RPrestationId' => 3, 'FactPrestLibelle' => 4, 'FactPrestDescription' => 5, 'FactPrestOrder' => 6, 'FactPrestOff' => 7, 'FactPrestAdf' => 8, 'RPCodeComptable' => 9, 'RPAxe1' => 10, 'RPAxe3' => 11, 'RPAxe4' => 12, 'OpPrestPv' => 13, 'OpPrestQestim' => 14, 'OpPrestMestim' => 15, 'OpPrestQreel' => 16, 'OpPrestMreel' => 17, 'FactPrestQestimDejaFacture' => 18, 'FactPrestQuantiteDejaFacture' => 19, 'FactPrestMontantDejaFacture' => 20, 'RTvaTypeId' => 21, 'RRubTypeId' => 22, 'FactPrestQestimFacture' => 23, 'FactPrestQuantiteFacture' => 24, 'FactPrestMontantFacture' => 25, 'FactPrestTauxAdf' => 26, 'FactPrestTauxPartiel' => 27, 'FactPrestQestimFactureFinal' => 28, 'FactPrestQuantiteFactureFinal' => 29, 'FactPrestMontantFactureFinal' => 30, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('factPrestId' => 0, 'factRubId' => 1, 'opPrestId' => 2, 'rPrestationId' => 3, 'factPrestLibelle' => 4, 'factPrestDescription' => 5, 'factPrestOrder' => 6, 'factPrestOff' => 7, 'factPrestAdf' => 8, 'rPCodeComptable' => 9, 'rPAxe1' => 10, 'rPAxe3' => 11, 'rPAxe4' => 12, 'opPrestPv' => 13, 'opPrestQestim' => 14, 'opPrestMestim' => 15, 'opPrestQreel' => 16, 'opPrestMreel' => 17, 'factPrestQestimDejaFacture' => 18, 'factPrestQuantiteDejaFacture' => 19, 'factPrestMontantDejaFacture' => 20, 'rTvaTypeId' => 21, 'rRubTypeId' => 22, 'factPrestQestimFacture' => 23, 'factPrestQuantiteFacture' => 24, 'factPrestMontantFacture' => 25, 'factPrestTauxAdf' => 26, 'factPrestTauxPartiel' => 27, 'factPrestQestimFactureFinal' => 28, 'factPrestQuantiteFactureFinal' => 29, 'factPrestMontantFactureFinal' => 30, ),
        BasePeer::TYPE_COLNAME => array (FacturesPrestationsPeer::FACT_PREST_ID => 0, FacturesPrestationsPeer::FACT_RUB_ID => 1, FacturesPrestationsPeer::OP_PREST_ID => 2, FacturesPrestationsPeer::R_PRESTATION_ID => 3, FacturesPrestationsPeer::FACT_PREST_LIBELLE => 4, FacturesPrestationsPeer::FACT_PREST_DESCRIPTION => 5, FacturesPrestationsPeer::FACT_PREST_ORDER => 6, FacturesPrestationsPeer::FACT_PREST_OFF => 7, FacturesPrestationsPeer::FACT_PREST_ADF => 8, FacturesPrestationsPeer::R_P_CODE_COMPTABLE => 9, FacturesPrestationsPeer::R_P_AXE1 => 10, FacturesPrestationsPeer::R_P_AXE3 => 11, FacturesPrestationsPeer::R_P_AXE4 => 12, FacturesPrestationsPeer::OP_PREST_PV => 13, FacturesPrestationsPeer::OP_PREST_QESTIM => 14, FacturesPrestationsPeer::OP_PREST_MESTIM => 15, FacturesPrestationsPeer::OP_PREST_QREEL => 16, FacturesPrestationsPeer::OP_PREST_MREEL => 17, FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE => 18, FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE => 19, FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE => 20, FacturesPrestationsPeer::R_TVA_TYPE_ID => 21, FacturesPrestationsPeer::R_RUB_TYPE_ID => 22, FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE => 23, FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE => 24, FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE => 25, FacturesPrestationsPeer::FACT_PREST_TAUX_ADF => 26, FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL => 27, FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL => 28, FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL => 29, FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL => 30, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FACT_PREST_ID' => 0, 'FACT_RUB_ID' => 1, 'OP_PREST_ID' => 2, 'R_PRESTATION_ID' => 3, 'FACT_PREST_LIBELLE' => 4, 'FACT_PREST_DESCRIPTION' => 5, 'FACT_PREST_ORDER' => 6, 'FACT_PREST_OFF' => 7, 'FACT_PREST_ADF' => 8, 'R_P_CODE_COMPTABLE' => 9, 'R_P_AXE1' => 10, 'R_P_AXE3' => 11, 'R_P_AXE4' => 12, 'OP_PREST_PV' => 13, 'OP_PREST_QESTIM' => 14, 'OP_PREST_MESTIM' => 15, 'OP_PREST_QREEL' => 16, 'OP_PREST_MREEL' => 17, 'FACT_PREST_QESTIM_DEJA_FACTURE' => 18, 'FACT_PREST_QUANTITE_DEJA_FACTURE' => 19, 'FACT_PREST_MONTANT_DEJA_FACTURE' => 20, 'R_TVA_TYPE_ID' => 21, 'R_RUB_TYPE_ID' => 22, 'FACT_PREST_QESTIM_FACTURE' => 23, 'FACT_PREST_QUANTITE_FACTURE' => 24, 'FACT_PREST_MONTANT_FACTURE' => 25, 'FACT_PREST_TAUX_ADF' => 26, 'FACT_PREST_TAUX_PARTIEL' => 27, 'FACT_PREST_QESTIM_FACTURE_FINAL' => 28, 'FACT_PREST_QUANTITE_FACTURE_FINAL' => 29, 'FACT_PREST_MONTANT_FACTURE_FINAL' => 30, ),
        BasePeer::TYPE_FIELDNAME => array ('fact_prest_id' => 0, 'fact_rub_id' => 1, 'op_prest_id' => 2, 'r_prestation_id' => 3, 'fact_prest_libelle' => 4, 'fact_prest_description' => 5, 'fact_prest_order' => 6, 'fact_prest_off' => 7, 'fact_prest_adf' => 8, 'r_p_code_comptable' => 9, 'r_p_axe1' => 10, 'r_p_axe3' => 11, 'r_p_axe4' => 12, 'op_prest_pv' => 13, 'op_prest_qestim' => 14, 'op_prest_mestim' => 15, 'op_prest_qreel' => 16, 'op_prest_mreel' => 17, 'fact_prest_qestim_deja_facture' => 18, 'fact_prest_quantite_deja_facture' => 19, 'fact_prest_montant_deja_facture' => 20, 'r_tva_type_id' => 21, 'r_rub_type_id' => 22, 'fact_prest_qestim_facture' => 23, 'fact_prest_quantite_facture' => 24, 'fact_prest_montant_facture' => 25, 'fact_prest_taux_adf' => 26, 'fact_prest_taux_partiel' => 27, 'fact_prest_qestim_facture_final' => 28, 'fact_prest_quantite_facture_final' => 29, 'fact_prest_montant_facture_final' => 30, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = FacturesPrestationsPeer::getFieldNames($toType);
        $key = isset(FacturesPrestationsPeer::$fieldKeys[$fromType][$name]) ? FacturesPrestationsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FacturesPrestationsPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, FacturesPrestationsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FacturesPrestationsPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. FacturesPrestationsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FacturesPrestationsPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_ID);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_RUB_ID);
            $criteria->addSelectColumn(FacturesPrestationsPeer::OP_PREST_ID);
            $criteria->addSelectColumn(FacturesPrestationsPeer::R_PRESTATION_ID);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_LIBELLE);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_DESCRIPTION);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_ORDER);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_OFF);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_ADF);
            $criteria->addSelectColumn(FacturesPrestationsPeer::R_P_CODE_COMPTABLE);
            $criteria->addSelectColumn(FacturesPrestationsPeer::R_P_AXE1);
            $criteria->addSelectColumn(FacturesPrestationsPeer::R_P_AXE3);
            $criteria->addSelectColumn(FacturesPrestationsPeer::R_P_AXE4);
            $criteria->addSelectColumn(FacturesPrestationsPeer::OP_PREST_PV);
            $criteria->addSelectColumn(FacturesPrestationsPeer::OP_PREST_QESTIM);
            $criteria->addSelectColumn(FacturesPrestationsPeer::OP_PREST_MESTIM);
            $criteria->addSelectColumn(FacturesPrestationsPeer::OP_PREST_QREEL);
            $criteria->addSelectColumn(FacturesPrestationsPeer::OP_PREST_MREEL);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE);
            $criteria->addSelectColumn(FacturesPrestationsPeer::R_TVA_TYPE_ID);
            $criteria->addSelectColumn(FacturesPrestationsPeer::R_RUB_TYPE_ID);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_TAUX_ADF);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL);
            $criteria->addSelectColumn(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL);
        } else {
            $criteria->addSelectColumn($alias . '.fact_prest_id');
            $criteria->addSelectColumn($alias . '.fact_rub_id');
            $criteria->addSelectColumn($alias . '.op_prest_id');
            $criteria->addSelectColumn($alias . '.r_prestation_id');
            $criteria->addSelectColumn($alias . '.fact_prest_libelle');
            $criteria->addSelectColumn($alias . '.fact_prest_description');
            $criteria->addSelectColumn($alias . '.fact_prest_order');
            $criteria->addSelectColumn($alias . '.fact_prest_off');
            $criteria->addSelectColumn($alias . '.fact_prest_adf');
            $criteria->addSelectColumn($alias . '.r_p_code_comptable');
            $criteria->addSelectColumn($alias . '.r_p_axe1');
            $criteria->addSelectColumn($alias . '.r_p_axe3');
            $criteria->addSelectColumn($alias . '.r_p_axe4');
            $criteria->addSelectColumn($alias . '.op_prest_pv');
            $criteria->addSelectColumn($alias . '.op_prest_qestim');
            $criteria->addSelectColumn($alias . '.op_prest_mestim');
            $criteria->addSelectColumn($alias . '.op_prest_qreel');
            $criteria->addSelectColumn($alias . '.op_prest_mreel');
            $criteria->addSelectColumn($alias . '.fact_prest_qestim_deja_facture');
            $criteria->addSelectColumn($alias . '.fact_prest_quantite_deja_facture');
            $criteria->addSelectColumn($alias . '.fact_prest_montant_deja_facture');
            $criteria->addSelectColumn($alias . '.r_tva_type_id');
            $criteria->addSelectColumn($alias . '.r_rub_type_id');
            $criteria->addSelectColumn($alias . '.fact_prest_qestim_facture');
            $criteria->addSelectColumn($alias . '.fact_prest_quantite_facture');
            $criteria->addSelectColumn($alias . '.fact_prest_montant_facture');
            $criteria->addSelectColumn($alias . '.fact_prest_taux_adf');
            $criteria->addSelectColumn($alias . '.fact_prest_taux_partiel');
            $criteria->addSelectColumn($alias . '.fact_prest_qestim_facture_final');
            $criteria->addSelectColumn($alias . '.fact_prest_quantite_facture_final');
            $criteria->addSelectColumn($alias . '.fact_prest_montant_facture_final');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return FacturesPrestations
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FacturesPrestationsPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return FacturesPrestationsPeer::populateObjects(FacturesPrestationsPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FacturesPrestationsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param FacturesPrestations $obj A FacturesPrestations object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getFactPrestId();
            } // if key === null
            FacturesPrestationsPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A FacturesPrestations object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof FacturesPrestations) {
                $key = (string) $value->getFactPrestId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or FacturesPrestations object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FacturesPrestationsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return FacturesPrestations Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FacturesPrestationsPeer::$instances[$key])) {
                return FacturesPrestationsPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (FacturesPrestationsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FacturesPrestationsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to factures_prestations
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = FacturesPrestationsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FacturesPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FacturesPrestationsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FacturesPrestationsPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (FacturesPrestations object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FacturesPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FacturesPrestationsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FacturesPrestationsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FacturesPrestationsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FacturesPrestationsPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related FacturesRubriques table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinFacturesRubriques(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPrestationsPeer::FACT_RUB_ID, FacturesRubriquesPeer::FACT_RUB_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related RPrestations table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRPrestations(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPrestationsPeer::R_PRESTATION_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of FacturesPrestations objects pre-filled with their FacturesRubriques objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FacturesPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinFacturesRubriques(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);
        }

        FacturesPrestationsPeer::addSelectColumns($criteria);
        $startcol = FacturesPrestationsPeer::NUM_HYDRATE_COLUMNS;
        FacturesRubriquesPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPrestationsPeer::FACT_RUB_ID, FacturesRubriquesPeer::FACT_RUB_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = FacturesRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = FacturesRubriquesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = FacturesRubriquesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    FacturesRubriquesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (FacturesPrestations) to $obj2 (FacturesRubriques)
                $obj2->addFacturesPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of FacturesPrestations objects pre-filled with their RPrestations objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FacturesPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRPrestations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);
        }

        FacturesPrestationsPeer::addSelectColumns($criteria);
        $startcol = FacturesPrestationsPeer::NUM_HYDRATE_COLUMNS;
        RPrestationsPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturesPrestationsPeer::R_PRESTATION_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturesPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RPrestationsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RPrestationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RPrestationsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (FacturesPrestations) to $obj2 (RPrestations)
                $obj2->addFacturesPrestations($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPrestationsPeer::FACT_RUB_ID, FacturesRubriquesPeer::FACT_RUB_ID, $join_behavior);

        $criteria->addJoin(FacturesPrestationsPeer::R_PRESTATION_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of FacturesPrestations objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FacturesPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);
        }

        FacturesPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPrestationsPeer::NUM_HYDRATE_COLUMNS;

        FacturesRubriquesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + FacturesRubriquesPeer::NUM_HYDRATE_COLUMNS;

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPrestationsPeer::FACT_RUB_ID, FacturesRubriquesPeer::FACT_RUB_ID, $join_behavior);

        $criteria->addJoin(FacturesPrestationsPeer::R_PRESTATION_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined FacturesRubriques rows

            $key2 = FacturesRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = FacturesRubriquesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = FacturesRubriquesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    FacturesRubriquesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (FacturesPrestations) to the collection in $obj2 (FacturesRubriques)
                $obj2->addFacturesPrestations($obj1);
            } // if joined row not null

            // Add objects for joined RPrestations rows

            $key3 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = RPrestationsPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = RPrestationsPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RPrestationsPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (FacturesPrestations) to the collection in $obj3 (RPrestations)
                $obj3->addFacturesPrestations($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related FacturesRubriques table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptFacturesRubriques(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPrestationsPeer::R_PRESTATION_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related RPrestations table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRPrestations(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturesPrestationsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturesPrestationsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturesPrestationsPeer::FACT_RUB_ID, FacturesRubriquesPeer::FACT_RUB_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of FacturesPrestations objects pre-filled with all related objects except FacturesRubriques.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FacturesPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptFacturesRubriques(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);
        }

        FacturesPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPrestationsPeer::NUM_HYDRATE_COLUMNS;

        RPrestationsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RPrestationsPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPrestationsPeer::R_PRESTATION_ID, RPrestationsPeer::R_PRESTATION_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined RPrestations rows

                $key2 = RPrestationsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RPrestationsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RPrestationsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RPrestationsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (FacturesPrestations) to the collection in $obj2 (RPrestations)
                $obj2->addFacturesPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of FacturesPrestations objects pre-filled with all related objects except RPrestations.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FacturesPrestations objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRPrestations(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);
        }

        FacturesPrestationsPeer::addSelectColumns($criteria);
        $startcol2 = FacturesPrestationsPeer::NUM_HYDRATE_COLUMNS;

        FacturesRubriquesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + FacturesRubriquesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturesPrestationsPeer::FACT_RUB_ID, FacturesRubriquesPeer::FACT_RUB_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturesPrestationsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturesPrestationsPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturesPrestationsPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturesPrestationsPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined FacturesRubriques rows

                $key2 = FacturesRubriquesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = FacturesRubriquesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = FacturesRubriquesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    FacturesRubriquesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (FacturesPrestations) to the collection in $obj2 (FacturesRubriques)
                $obj2->addFacturesPrestations($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(FacturesPrestationsPeer::DATABASE_NAME)->getTable(FacturesPrestationsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFacturesPrestationsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFacturesPrestationsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FacturesPrestationsTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return FacturesPrestationsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a FacturesPrestations or Criteria object.
     *
     * @param      mixed $values Criteria or FacturesPrestations object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from FacturesPrestations object
        }

        if ($criteria->containsKey(FacturesPrestationsPeer::FACT_PREST_ID) && $criteria->keyContainsValue(FacturesPrestationsPeer::FACT_PREST_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FacturesPrestationsPeer::FACT_PREST_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a FacturesPrestations or Criteria object.
     *
     * @param      mixed $values Criteria or FacturesPrestations object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FacturesPrestationsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FacturesPrestationsPeer::FACT_PREST_ID);
            $value = $criteria->remove(FacturesPrestationsPeer::FACT_PREST_ID);
            if ($value) {
                $selectCriteria->add(FacturesPrestationsPeer::FACT_PREST_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FacturesPrestationsPeer::TABLE_NAME);
            }

        } else { // $values is FacturesPrestations object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the factures_prestations table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FacturesPrestationsPeer::TABLE_NAME, $con, FacturesPrestationsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FacturesPrestationsPeer::clearInstancePool();
            FacturesPrestationsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a FacturesPrestations or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or FacturesPrestations object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FacturesPrestationsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof FacturesPrestations) { // it's a model object
            // invalidate the cache for this single object
            FacturesPrestationsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FacturesPrestationsPeer::DATABASE_NAME);
            $criteria->add(FacturesPrestationsPeer::FACT_PREST_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FacturesPrestationsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FacturesPrestationsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FacturesPrestationsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given FacturesPrestations object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param FacturesPrestations $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FacturesPrestationsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FacturesPrestationsPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_RUB_ID))
            $columns[FacturesPrestationsPeer::FACT_RUB_ID] = $obj->getFactRubId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::OP_PREST_ID))
            $columns[FacturesPrestationsPeer::OP_PREST_ID] = $obj->getOpPrestId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::R_PRESTATION_ID))
            $columns[FacturesPrestationsPeer::R_PRESTATION_ID] = $obj->getRPrestationId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_LIBELLE))
            $columns[FacturesPrestationsPeer::FACT_PREST_LIBELLE] = $obj->getFactPrestLibelle();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_DESCRIPTION))
            $columns[FacturesPrestationsPeer::FACT_PREST_DESCRIPTION] = $obj->getFactPrestDescription();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_ORDER))
            $columns[FacturesPrestationsPeer::FACT_PREST_ORDER] = $obj->getFactPrestOrder();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_OFF))
            $columns[FacturesPrestationsPeer::FACT_PREST_OFF] = $obj->getFactPrestOff();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_ADF))
            $columns[FacturesPrestationsPeer::FACT_PREST_ADF] = $obj->getFactPrestAdf();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::R_P_CODE_COMPTABLE))
            $columns[FacturesPrestationsPeer::R_P_CODE_COMPTABLE] = $obj->getRPCodeComptable();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::R_P_AXE1))
            $columns[FacturesPrestationsPeer::R_P_AXE1] = $obj->getRPAxe1();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::R_P_AXE3))
            $columns[FacturesPrestationsPeer::R_P_AXE3] = $obj->getRPAxe3();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::R_P_AXE4))
            $columns[FacturesPrestationsPeer::R_P_AXE4] = $obj->getRPAxe4();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::OP_PREST_PV))
            $columns[FacturesPrestationsPeer::OP_PREST_PV] = $obj->getOpPrestPv();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::OP_PREST_QESTIM))
            $columns[FacturesPrestationsPeer::OP_PREST_QESTIM] = $obj->getOpPrestQestim();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::OP_PREST_MESTIM))
            $columns[FacturesPrestationsPeer::OP_PREST_MESTIM] = $obj->getOpPrestMestim();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::OP_PREST_QREEL))
            $columns[FacturesPrestationsPeer::OP_PREST_QREEL] = $obj->getOpPrestQreel();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::OP_PREST_MREEL))
            $columns[FacturesPrestationsPeer::OP_PREST_MREEL] = $obj->getOpPrestMreel();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE))
            $columns[FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE] = $obj->getFactPrestQestimDejaFacture();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE))
            $columns[FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE] = $obj->getFactPrestQuantiteDejaFacture();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE))
            $columns[FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE] = $obj->getFactPrestMontantDejaFacture();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::R_TVA_TYPE_ID))
            $columns[FacturesPrestationsPeer::R_TVA_TYPE_ID] = $obj->getRTvaTypeId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::R_RUB_TYPE_ID))
            $columns[FacturesPrestationsPeer::R_RUB_TYPE_ID] = $obj->getRRubTypeId();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE))
            $columns[FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE] = $obj->getFactPrestQestimFacture();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE))
            $columns[FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE] = $obj->getFactPrestQuantiteFacture();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE))
            $columns[FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE] = $obj->getFactPrestMontantFacture();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_TAUX_ADF))
            $columns[FacturesPrestationsPeer::FACT_PREST_TAUX_ADF] = $obj->getFactPrestTauxAdf();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL))
            $columns[FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL] = $obj->getFactPrestTauxPartiel();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL))
            $columns[FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL] = $obj->getFactPrestQestimFactureFinal();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL))
            $columns[FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL] = $obj->getFactPrestQuantiteFactureFinal();

        if ($obj->isNew() || $obj->isColumnModified(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL))
            $columns[FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL] = $obj->getFactPrestMontantFactureFinal();

        }

        return BasePeer::doValidate(FacturesPrestationsPeer::DATABASE_NAME, FacturesPrestationsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return FacturesPrestations
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FacturesPrestationsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FacturesPrestationsPeer::DATABASE_NAME);
        $criteria->add(FacturesPrestationsPeer::FACT_PREST_ID, $pk);

        $v = FacturesPrestationsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return FacturesPrestations[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FacturesPrestationsPeer::DATABASE_NAME);
            $criteria->add(FacturesPrestationsPeer::FACT_PREST_ID, $pks, Criteria::IN);
            $objs = FacturesPrestationsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

    // utils behavior

            /**
            * Return connection object
            * @return PropelPDO
            */
            public static function getConnection(){
                return Propel::getConnection(self::DATABASE_NAME);
            }
} // BaseFacturesPrestationsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFacturesPrestationsPeer::buildTableMap();

