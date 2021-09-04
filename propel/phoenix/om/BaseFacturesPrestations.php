<?php


/**
 * Base class that represents a row from the 'factures_prestations' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseFacturesPrestations extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FacturesPrestationsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FacturesPrestationsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the fact_prest_id field.
     * @var        int
     */
    protected $fact_prest_id;

    /**
     * The value for the fact_rub_id field.
     * @var        int
     */
    protected $fact_rub_id;

    /**
     * The value for the op_prest_id field.
     * @var        int
     */
    protected $op_prest_id;

    /**
     * The value for the r_prestation_id field.
     * @var        int
     */
    protected $r_prestation_id;

    /**
     * The value for the fact_prest_libelle field.
     * @var        string
     */
    protected $fact_prest_libelle;

    /**
     * The value for the fact_prest_description field.
     * @var        string
     */
    protected $fact_prest_description;

    /**
     * The value for the fact_prest_order field.
     * @var        int
     */
    protected $fact_prest_order;

    /**
     * The value for the fact_prest_off field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $fact_prest_off;

    /**
     * The value for the fact_prest_adf field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $fact_prest_adf;

    /**
     * The value for the r_p_code_comptable field.
     * @var        string
     */
    protected $r_p_code_comptable;

    /**
     * The value for the r_p_axe1 field.
     * @var        string
     */
    protected $r_p_axe1;

    /**
     * The value for the r_p_axe3 field.
     * @var        string
     */
    protected $r_p_axe3;

    /**
     * The value for the r_p_axe4 field.
     * @var        string
     */
    protected $r_p_axe4;

    /**
     * The value for the op_prest_pv field.
     * @var        float
     */
    protected $op_prest_pv;

    /**
     * The value for the op_prest_qestim field.
     * @var        int
     */
    protected $op_prest_qestim;

    /**
     * The value for the op_prest_mestim field.
     * @var        float
     */
    protected $op_prest_mestim;

    /**
     * The value for the op_prest_qreel field.
     * @var        int
     */
    protected $op_prest_qreel;

    /**
     * The value for the op_prest_mreel field.
     * @var        float
     */
    protected $op_prest_mreel;

    /**
     * The value for the fact_prest_qestim_deja_facture field.
     * @var        float
     */
    protected $fact_prest_qestim_deja_facture;

    /**
     * The value for the fact_prest_quantite_deja_facture field.
     * @var        float
     */
    protected $fact_prest_quantite_deja_facture;

    /**
     * The value for the fact_prest_montant_deja_facture field.
     * @var        float
     */
    protected $fact_prest_montant_deja_facture;

    /**
     * The value for the r_tva_type_id field.
     * @var        int
     */
    protected $r_tva_type_id;

    /**
     * The value for the r_rub_type_id field.
     * @var        int
     */
    protected $r_rub_type_id;

    /**
     * The value for the fact_prest_qestim_facture field.
     * @var        int
     */
    protected $fact_prest_qestim_facture;

    /**
     * The value for the fact_prest_quantite_facture field.
     * @var        int
     */
    protected $fact_prest_quantite_facture;

    /**
     * The value for the fact_prest_montant_facture field.
     * @var        float
     */
    protected $fact_prest_montant_facture;

    /**
     * The value for the fact_prest_taux_adf field.
     * @var        int
     */
    protected $fact_prest_taux_adf;

    /**
     * The value for the fact_prest_taux_partiel field.
     * @var        int
     */
    protected $fact_prest_taux_partiel;

    /**
     * The value for the fact_prest_qestim_facture_final field.
     * @var        float
     */
    protected $fact_prest_qestim_facture_final;

    /**
     * The value for the fact_prest_quantite_facture_final field.
     * @var        float
     */
    protected $fact_prest_quantite_facture_final;

    /**
     * The value for the fact_prest_montant_facture_final field.
     * @var        float
     */
    protected $fact_prest_montant_facture_final;

    /**
     * @var        FacturesRubriques
     */
    protected $aFacturesRubriques;

    /**
     * @var        RPrestations
     */
    protected $aRPrestations;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    // adderror behavior
    private $aCheckFunctions=array();
    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->fact_prest_off = false;
        $this->fact_prest_adf = false;
    }

    /**
     * Initializes internal state of BaseFacturesPrestations object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [fact_prest_id] column value.
     *
     * @return int
     */
    public function getFactPrestId()
    {

        return $this->fact_prest_id;
    }

    /**
     * Get the [fact_rub_id] column value.
     *
     * @return int
     */
    public function getFactRubId()
    {

        return $this->fact_rub_id;
    }

    /**
     * Get the [op_prest_id] column value.
     *
     * @return int
     */
    public function getOpPrestId()
    {

        return $this->op_prest_id;
    }

    /**
     * Get the [r_prestation_id] column value.
     *
     * @return int
     */
    public function getRPrestationId()
    {

        return $this->r_prestation_id;
    }

    /**
     * Get the [fact_prest_libelle] column value.
     *
     * @return string
     */
    public function getFactPrestLibelle()
    {

        return $this->fact_prest_libelle;
    }

    /**
     * Get the [fact_prest_description] column value.
     *
     * @return string
     */
    public function getFactPrestDescription()
    {

        return $this->fact_prest_description;
    }

    /**
     * Get the [fact_prest_order] column value.
     *
     * @return int
     */
    public function getFactPrestOrder()
    {

        return $this->fact_prest_order;
    }

    /**
     * Get the [fact_prest_off] column value.
     *
     * @return boolean
     */
    public function getFactPrestOff()
    {

        return $this->fact_prest_off;
    }

    /**
     * Get the [fact_prest_adf] column value.
     *
     * @return boolean
     */
    public function getFactPrestAdf()
    {

        return $this->fact_prest_adf;
    }

    /**
     * Get the [r_p_code_comptable] column value.
     *
     * @return string
     */
    public function getRPCodeComptable()
    {

        return $this->r_p_code_comptable;
    }

    /**
     * Get the [r_p_axe1] column value.
     *
     * @return string
     */
    public function getRPAxe1()
    {

        return $this->r_p_axe1;
    }

    /**
     * Get the [r_p_axe3] column value.
     *
     * @return string
     */
    public function getRPAxe3()
    {

        return $this->r_p_axe3;
    }

    /**
     * Get the [r_p_axe4] column value.
     *
     * @return string
     */
    public function getRPAxe4()
    {

        return $this->r_p_axe4;
    }

    /**
     * Get the [op_prest_pv] column value.
     *
     * @return float
     */
    public function getOpPrestPv()
    {

        return $this->op_prest_pv;
    }

    /**
     * Get the [op_prest_qestim] column value.
     *
     * @return int
     */
    public function getOpPrestQestim()
    {

        return $this->op_prest_qestim;
    }

    /**
     * Get the [op_prest_mestim] column value.
     *
     * @return float
     */
    public function getOpPrestMestim()
    {

        return $this->op_prest_mestim;
    }

    /**
     * Get the [op_prest_qreel] column value.
     *
     * @return int
     */
    public function getOpPrestQreel()
    {

        return $this->op_prest_qreel;
    }

    /**
     * Get the [op_prest_mreel] column value.
     *
     * @return float
     */
    public function getOpPrestMreel()
    {

        return $this->op_prest_mreel;
    }

    /**
     * Get the [fact_prest_qestim_deja_facture] column value.
     *
     * @return float
     */
    public function getFactPrestQestimDejaFacture()
    {

        return $this->fact_prest_qestim_deja_facture;
    }

    /**
     * Get the [fact_prest_quantite_deja_facture] column value.
     *
     * @return float
     */
    public function getFactPrestQuantiteDejaFacture()
    {

        return $this->fact_prest_quantite_deja_facture;
    }

    /**
     * Get the [fact_prest_montant_deja_facture] column value.
     *
     * @return float
     */
    public function getFactPrestMontantDejaFacture()
    {

        return $this->fact_prest_montant_deja_facture;
    }

    /**
     * Get the [r_tva_type_id] column value.
     *
     * @return int
     */
    public function getRTvaTypeId()
    {

        return $this->r_tva_type_id;
    }

    /**
     * Get the [r_rub_type_id] column value.
     *
     * @return int
     */
    public function getRRubTypeId()
    {

        return $this->r_rub_type_id;
    }

    /**
     * Get the [fact_prest_qestim_facture] column value.
     *
     * @return int
     */
    public function getFactPrestQestimFacture()
    {

        return $this->fact_prest_qestim_facture;
    }

    /**
     * Get the [fact_prest_quantite_facture] column value.
     *
     * @return int
     */
    public function getFactPrestQuantiteFacture()
    {

        return $this->fact_prest_quantite_facture;
    }

    /**
     * Get the [fact_prest_montant_facture] column value.
     *
     * @return float
     */
    public function getFactPrestMontantFacture()
    {

        return $this->fact_prest_montant_facture;
    }

    /**
     * Get the [fact_prest_taux_adf] column value.
     *
     * @return int
     */
    public function getFactPrestTauxAdf()
    {

        return $this->fact_prest_taux_adf;
    }

    /**
     * Get the [fact_prest_taux_partiel] column value.
     *
     * @return int
     */
    public function getFactPrestTauxPartiel()
    {

        return $this->fact_prest_taux_partiel;
    }

    /**
     * Get the [fact_prest_qestim_facture_final] column value.
     *
     * @return float
     */
    public function getFactPrestQestimFactureFinal()
    {

        return $this->fact_prest_qestim_facture_final;
    }

    /**
     * Get the [fact_prest_quantite_facture_final] column value.
     *
     * @return float
     */
    public function getFactPrestQuantiteFactureFinal()
    {

        return $this->fact_prest_quantite_facture_final;
    }

    /**
     * Get the [fact_prest_montant_facture_final] column value.
     *
     * @return float
     */
    public function getFactPrestMontantFactureFinal()
    {

        return $this->fact_prest_montant_facture_final;
    }

    /**
     * Set the value of [fact_prest_id] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_prest_id !== $v) {
                    $this->fact_prest_id = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_ID;
                }


        return $this;
    } // setFactPrestId()

    /**
     * Set the value of [fact_rub_id] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactRubId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_rub_id !== $v) {
                    $this->fact_rub_id = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_RUB_ID;
                }

        if ($this->aFacturesRubriques !== null && $this->aFacturesRubriques->getFactRubId() !== $v) {
            $this->aFacturesRubriques = null;
        }


        return $this;
    } // setFactRubId()

    /**
     * Set the value of [op_prest_id] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setOpPrestId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_id !== $v) {
                    $this->op_prest_id = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::OP_PREST_ID;
                }


        return $this;
    } // setOpPrestId()

    /**
     * Set the value of [r_prestation_id] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setRPrestationId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_prestation_id !== $v) {
                    $this->r_prestation_id = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::R_PRESTATION_ID;
                }

        if ($this->aRPrestations !== null && $this->aRPrestations->getRPrestationId() !== $v) {
            $this->aRPrestations = null;
        }


        return $this;
    } // setRPrestationId()

    /**
     * Set the value of [fact_prest_libelle] column.
     *
     * @param  string $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_prest_libelle !== $v) {
            $this->fact_prest_libelle = $v;
            $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_LIBELLE;
        }


        return $this;
    } // setFactPrestLibelle()

    /**
     * Set the value of [fact_prest_description] column.
     *
     * @param  string $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fact_prest_description !== $v) {
            $this->fact_prest_description = $v;
            $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_DESCRIPTION;
        }


        return $this;
    } // setFactPrestDescription()

    /**
     * Set the value of [fact_prest_order] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestOrder($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_prest_order !== $v) {
                    $this->fact_prest_order = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_ORDER;
                }


        return $this;
    } // setFactPrestOrder()

    /**
     * Sets the value of the [fact_prest_off] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestOff($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->fact_prest_off !== $v) {
            $this->fact_prest_off = $v;
            $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_OFF;
        }


        return $this;
    } // setFactPrestOff()

    /**
     * Sets the value of the [fact_prest_adf] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestAdf($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->fact_prest_adf !== $v) {
            $this->fact_prest_adf = $v;
            $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_ADF;
        }


        return $this;
    } // setFactPrestAdf()

    /**
     * Set the value of [r_p_code_comptable] column.
     *
     * @param  string $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setRPCodeComptable($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_code_comptable !== $v) {
            $this->r_p_code_comptable = $v;
            $this->modifiedColumns[] = FacturesPrestationsPeer::R_P_CODE_COMPTABLE;
        }


        return $this;
    } // setRPCodeComptable()

    /**
     * Set the value of [r_p_axe1] column.
     *
     * @param  string $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setRPAxe1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_axe1 !== $v) {
            $this->r_p_axe1 = $v;
            $this->modifiedColumns[] = FacturesPrestationsPeer::R_P_AXE1;
        }


        return $this;
    } // setRPAxe1()

    /**
     * Set the value of [r_p_axe3] column.
     *
     * @param  string $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setRPAxe3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_axe3 !== $v) {
            $this->r_p_axe3 = $v;
            $this->modifiedColumns[] = FacturesPrestationsPeer::R_P_AXE3;
        }


        return $this;
    } // setRPAxe3()

    /**
     * Set the value of [r_p_axe4] column.
     *
     * @param  string $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setRPAxe4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_axe4 !== $v) {
            $this->r_p_axe4 = $v;
            $this->modifiedColumns[] = FacturesPrestationsPeer::R_P_AXE4;
        }


        return $this;
    } // setRPAxe4()

    /**
     * Set the value of [op_prest_pv] column.
     *
     * @param  float $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setOpPrestPv($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->op_prest_pv !== $v) {
                    $this->op_prest_pv = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::OP_PREST_PV;
                }


        return $this;
    } // setOpPrestPv()

    /**
     * Set the value of [op_prest_qestim] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setOpPrestQestim($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_qestim !== $v) {
                    $this->op_prest_qestim = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::OP_PREST_QESTIM;
                }


        return $this;
    } // setOpPrestQestim()

    /**
     * Set the value of [op_prest_mestim] column.
     *
     * @param  float $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setOpPrestMestim($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->op_prest_mestim !== $v) {
                    $this->op_prest_mestim = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::OP_PREST_MESTIM;
                }


        return $this;
    } // setOpPrestMestim()

    /**
     * Set the value of [op_prest_qreel] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setOpPrestQreel($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_prest_qreel !== $v) {
                    $this->op_prest_qreel = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::OP_PREST_QREEL;
                }


        return $this;
    } // setOpPrestQreel()

    /**
     * Set the value of [op_prest_mreel] column.
     *
     * @param  float $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setOpPrestMreel($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->op_prest_mreel !== $v) {
                    $this->op_prest_mreel = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::OP_PREST_MREEL;
                }


        return $this;
    } // setOpPrestMreel()

    /**
     * Set the value of [fact_prest_qestim_deja_facture] column.
     *
     * @param  float $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestQestimDejaFacture($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_prest_qestim_deja_facture !== $v) {
                    $this->fact_prest_qestim_deja_facture = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE;
                }


        return $this;
    } // setFactPrestQestimDejaFacture()

    /**
     * Set the value of [fact_prest_quantite_deja_facture] column.
     *
     * @param  float $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestQuantiteDejaFacture($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_prest_quantite_deja_facture !== $v) {
                    $this->fact_prest_quantite_deja_facture = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE;
                }


        return $this;
    } // setFactPrestQuantiteDejaFacture()

    /**
     * Set the value of [fact_prest_montant_deja_facture] column.
     *
     * @param  float $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestMontantDejaFacture($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_prest_montant_deja_facture !== $v) {
                    $this->fact_prest_montant_deja_facture = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE;
                }


        return $this;
    } // setFactPrestMontantDejaFacture()

    /**
     * Set the value of [r_tva_type_id] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setRTvaTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_tva_type_id !== $v) {
                    $this->r_tva_type_id = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::R_TVA_TYPE_ID;
                }


        return $this;
    } // setRTvaTypeId()

    /**
     * Set the value of [r_rub_type_id] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setRRubTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_rub_type_id !== $v) {
                    $this->r_rub_type_id = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::R_RUB_TYPE_ID;
                }


        return $this;
    } // setRRubTypeId()

    /**
     * Set the value of [fact_prest_qestim_facture] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestQestimFacture($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_prest_qestim_facture !== $v) {
                    $this->fact_prest_qestim_facture = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE;
                }


        return $this;
    } // setFactPrestQestimFacture()

    /**
     * Set the value of [fact_prest_quantite_facture] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestQuantiteFacture($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_prest_quantite_facture !== $v) {
                    $this->fact_prest_quantite_facture = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE;
                }


        return $this;
    } // setFactPrestQuantiteFacture()

    /**
     * Set the value of [fact_prest_montant_facture] column.
     *
     * @param  float $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestMontantFacture($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_prest_montant_facture !== $v) {
                    $this->fact_prest_montant_facture = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE;
                }


        return $this;
    } // setFactPrestMontantFacture()

    /**
     * Set the value of [fact_prest_taux_adf] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestTauxAdf($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_prest_taux_adf !== $v) {
                    $this->fact_prest_taux_adf = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_TAUX_ADF;
                }


        return $this;
    } // setFactPrestTauxAdf()

    /**
     * Set the value of [fact_prest_taux_partiel] column.
     *
     * @param  int $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestTauxPartiel($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->fact_prest_taux_partiel !== $v) {
                    $this->fact_prest_taux_partiel = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL;
                }


        return $this;
    } // setFactPrestTauxPartiel()

    /**
     * Set the value of [fact_prest_qestim_facture_final] column.
     *
     * @param  float $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestQestimFactureFinal($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_prest_qestim_facture_final !== $v) {
                    $this->fact_prest_qestim_facture_final = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL;
                }


        return $this;
    } // setFactPrestQestimFactureFinal()

    /**
     * Set the value of [fact_prest_quantite_facture_final] column.
     *
     * @param  float $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestQuantiteFactureFinal($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_prest_quantite_facture_final !== $v) {
                    $this->fact_prest_quantite_facture_final = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL;
                }


        return $this;
    } // setFactPrestQuantiteFactureFinal()

    /**
     * Set the value of [fact_prest_montant_facture_final] column.
     *
     * @param  float $v new value
     * @return FacturesPrestations The current object (for fluent API support)
     */
    public function setFactPrestMontantFactureFinal($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_string($v)){
                        $v = str_replace(
                            array(' ',','),
                            array('','.'),
                            $v
                        );
                    }
                
                    if(is_numeric($v)) {
                        $v = (float) $v;
                    }
                }
                if ($this->fact_prest_montant_facture_final !== $v) {
                    $this->fact_prest_montant_facture_final = $v;
                    $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL;
                }


        return $this;
    } // setFactPrestMontantFactureFinal()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->fact_prest_off !== false) {
                return false;
            }

            if ($this->fact_prest_adf !== false) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->fact_prest_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fact_rub_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->op_prest_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->r_prestation_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->fact_prest_libelle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->fact_prest_description = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->fact_prest_order = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->fact_prest_off = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->fact_prest_adf = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->r_p_code_comptable = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->r_p_axe1 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->r_p_axe3 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->r_p_axe4 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->op_prest_pv = ($row[$startcol + 13] !== null) ? (float) $row[$startcol + 13] : null;
            $this->op_prest_qestim = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->op_prest_mestim = ($row[$startcol + 15] !== null) ? (float) $row[$startcol + 15] : null;
            $this->op_prest_qreel = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->op_prest_mreel = ($row[$startcol + 17] !== null) ? (float) $row[$startcol + 17] : null;
            $this->fact_prest_qestim_deja_facture = ($row[$startcol + 18] !== null) ? (float) $row[$startcol + 18] : null;
            $this->fact_prest_quantite_deja_facture = ($row[$startcol + 19] !== null) ? (float) $row[$startcol + 19] : null;
            $this->fact_prest_montant_deja_facture = ($row[$startcol + 20] !== null) ? (float) $row[$startcol + 20] : null;
            $this->r_tva_type_id = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->r_rub_type_id = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->fact_prest_qestim_facture = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->fact_prest_quantite_facture = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->fact_prest_montant_facture = ($row[$startcol + 25] !== null) ? (float) $row[$startcol + 25] : null;
            $this->fact_prest_taux_adf = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->fact_prest_taux_partiel = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->fact_prest_qestim_facture_final = ($row[$startcol + 28] !== null) ? (float) $row[$startcol + 28] : null;
            $this->fact_prest_quantite_facture_final = ($row[$startcol + 29] !== null) ? (float) $row[$startcol + 29] : null;
            $this->fact_prest_montant_facture_final = ($row[$startcol + 30] !== null) ? (float) $row[$startcol + 30] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 31; // 31 = FacturesPrestationsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating FacturesPrestations object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aFacturesRubriques !== null && $this->fact_rub_id !== $this->aFacturesRubriques->getFactRubId()) {
            $this->aFacturesRubriques = null;
        }
        if ($this->aRPrestations !== null && $this->r_prestation_id !== $this->aRPrestations->getRPrestationId()) {
            $this->aRPrestations = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FacturesPrestationsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aFacturesRubriques = null;
            $this->aRPrestations = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FacturesPrestationsQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(FacturesPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                FacturesPrestationsPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aFacturesRubriques !== null) {
                if ($this->aFacturesRubriques->isModified() || $this->aFacturesRubriques->isNew()) {
                    $affectedRows += $this->aFacturesRubriques->save($con);
                }
                $this->setFacturesRubriques($this->aFacturesRubriques);
            }

            if ($this->aRPrestations !== null) {
                if ($this->aRPrestations->isModified() || $this->aRPrestations->isNew()) {
                    $affectedRows += $this->aRPrestations->save($con);
                }
                $this->setRPrestations($this->aRPrestations);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = FacturesPrestationsPeer::FACT_PREST_ID;
        if (null !== $this->fact_prest_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FacturesPrestationsPeer::FACT_PREST_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_id`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_RUB_ID)) {
            $modifiedColumns[':p' . $index++]  = '`fact_rub_id`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_id`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::R_PRESTATION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_prestation_id`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_libelle`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_description`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_order`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_OFF)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_off`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_ADF)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_adf`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::R_P_CODE_COMPTABLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_code_comptable`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::R_P_AXE1)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe1`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::R_P_AXE3)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe3`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::R_P_AXE4)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe4`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_PV)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_pv`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_QESTIM)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_qestim`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_MESTIM)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_mestim`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_QREEL)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_qreel`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_MREEL)) {
            $modifiedColumns[':p' . $index++]  = '`op_prest_mreel`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_qestim_deja_facture`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_quantite_deja_facture`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_montant_deja_facture`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::R_TVA_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_tva_type_id`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::R_RUB_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_rub_type_id`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_qestim_facture`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_quantite_facture`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_montant_facture`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_TAUX_ADF)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_taux_adf`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_taux_partiel`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_qestim_facture_final`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_quantite_facture_final`';
        }
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL)) {
            $modifiedColumns[':p' . $index++]  = '`fact_prest_montant_facture_final`';
        }

        $sql = sprintf(
            'INSERT INTO `factures_prestations` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`fact_prest_id`':
                        $stmt->bindValue($identifier, $this->fact_prest_id, PDO::PARAM_INT);
                        break;
                    case '`fact_rub_id`':
                        $stmt->bindValue($identifier, $this->fact_rub_id, PDO::PARAM_INT);
                        break;
                    case '`op_prest_id`':
                        $stmt->bindValue($identifier, $this->op_prest_id, PDO::PARAM_INT);
                        break;
                    case '`r_prestation_id`':
                        $stmt->bindValue($identifier, $this->r_prestation_id, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_libelle`':
                        $stmt->bindValue($identifier, $this->fact_prest_libelle, PDO::PARAM_STR);
                        break;
                    case '`fact_prest_description`':
                        $stmt->bindValue($identifier, $this->fact_prest_description, PDO::PARAM_STR);
                        break;
                    case '`fact_prest_order`':
                        $stmt->bindValue($identifier, $this->fact_prest_order, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_off`':
                        $stmt->bindValue($identifier, (int) $this->fact_prest_off, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_adf`':
                        $stmt->bindValue($identifier, (int) $this->fact_prest_adf, PDO::PARAM_INT);
                        break;
                    case '`r_p_code_comptable`':
                        $stmt->bindValue($identifier, $this->r_p_code_comptable, PDO::PARAM_STR);
                        break;
                    case '`r_p_axe1`':
                        $stmt->bindValue($identifier, $this->r_p_axe1, PDO::PARAM_STR);
                        break;
                    case '`r_p_axe3`':
                        $stmt->bindValue($identifier, $this->r_p_axe3, PDO::PARAM_STR);
                        break;
                    case '`r_p_axe4`':
                        $stmt->bindValue($identifier, $this->r_p_axe4, PDO::PARAM_STR);
                        break;
                    case '`op_prest_pv`':
                        $stmt->bindValue($identifier, $this->op_prest_pv, PDO::PARAM_INT);
                        break;
                    case '`op_prest_qestim`':
                        $stmt->bindValue($identifier, $this->op_prest_qestim, PDO::PARAM_INT);
                        break;
                    case '`op_prest_mestim`':
                        $stmt->bindValue($identifier, $this->op_prest_mestim, PDO::PARAM_INT);
                        break;
                    case '`op_prest_qreel`':
                        $stmt->bindValue($identifier, $this->op_prest_qreel, PDO::PARAM_INT);
                        break;
                    case '`op_prest_mreel`':
                        $stmt->bindValue($identifier, $this->op_prest_mreel, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_qestim_deja_facture`':
                        $stmt->bindValue($identifier, $this->fact_prest_qestim_deja_facture, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_quantite_deja_facture`':
                        $stmt->bindValue($identifier, $this->fact_prest_quantite_deja_facture, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_montant_deja_facture`':
                        $stmt->bindValue($identifier, $this->fact_prest_montant_deja_facture, PDO::PARAM_INT);
                        break;
                    case '`r_tva_type_id`':
                        $stmt->bindValue($identifier, $this->r_tva_type_id, PDO::PARAM_INT);
                        break;
                    case '`r_rub_type_id`':
                        $stmt->bindValue($identifier, $this->r_rub_type_id, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_qestim_facture`':
                        $stmt->bindValue($identifier, $this->fact_prest_qestim_facture, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_quantite_facture`':
                        $stmt->bindValue($identifier, $this->fact_prest_quantite_facture, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_montant_facture`':
                        $stmt->bindValue($identifier, $this->fact_prest_montant_facture, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_taux_adf`':
                        $stmt->bindValue($identifier, $this->fact_prest_taux_adf, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_taux_partiel`':
                        $stmt->bindValue($identifier, $this->fact_prest_taux_partiel, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_qestim_facture_final`':
                        $stmt->bindValue($identifier, $this->fact_prest_qestim_facture_final, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_quantite_facture_final`':
                        $stmt->bindValue($identifier, $this->fact_prest_quantite_facture_final, PDO::PARAM_INT);
                        break;
                    case '`fact_prest_montant_facture_final`':
                        $stmt->bindValue($identifier, $this->fact_prest_montant_facture_final, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setFactPrestId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
    *
    * @param array $columns
    * @return boolean
    */
    public function validate($columns = null)
    {
        $this->preValidate();

        $res = $this->doValidate($columns);

        if(is_array($res)){
            $this->validationFailures = array_merge($res,$this->validationFailures);
        }

        if(count($this->validationFailures)>0){
            return false;
        }else{
            return true;
        }
    }


    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aFacturesRubriques !== null) {
                if (!$this->aFacturesRubriques->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aFacturesRubriques->getValidationFailures());
                }
            }

            if ($this->aRPrestations !== null) {
                if (!$this->aRPrestations->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRPrestations->getValidationFailures());
                }
            }


            if (($retval = FacturesPrestationsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = FacturesPrestationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getFactPrestId();
                break;
            case 1:
                return $this->getFactRubId();
                break;
            case 2:
                return $this->getOpPrestId();
                break;
            case 3:
                return $this->getRPrestationId();
                break;
            case 4:
                return $this->getFactPrestLibelle();
                break;
            case 5:
                return $this->getFactPrestDescription();
                break;
            case 6:
                return $this->getFactPrestOrder();
                break;
            case 7:
                return $this->getFactPrestOff();
                break;
            case 8:
                return $this->getFactPrestAdf();
                break;
            case 9:
                return $this->getRPCodeComptable();
                break;
            case 10:
                return $this->getRPAxe1();
                break;
            case 11:
                return $this->getRPAxe3();
                break;
            case 12:
                return $this->getRPAxe4();
                break;
            case 13:
                return $this->getOpPrestPv();
                break;
            case 14:
                return $this->getOpPrestQestim();
                break;
            case 15:
                return $this->getOpPrestMestim();
                break;
            case 16:
                return $this->getOpPrestQreel();
                break;
            case 17:
                return $this->getOpPrestMreel();
                break;
            case 18:
                return $this->getFactPrestQestimDejaFacture();
                break;
            case 19:
                return $this->getFactPrestQuantiteDejaFacture();
                break;
            case 20:
                return $this->getFactPrestMontantDejaFacture();
                break;
            case 21:
                return $this->getRTvaTypeId();
                break;
            case 22:
                return $this->getRRubTypeId();
                break;
            case 23:
                return $this->getFactPrestQestimFacture();
                break;
            case 24:
                return $this->getFactPrestQuantiteFacture();
                break;
            case 25:
                return $this->getFactPrestMontantFacture();
                break;
            case 26:
                return $this->getFactPrestTauxAdf();
                break;
            case 27:
                return $this->getFactPrestTauxPartiel();
                break;
            case 28:
                return $this->getFactPrestQestimFactureFinal();
                break;
            case 29:
                return $this->getFactPrestQuantiteFactureFinal();
                break;
            case 30:
                return $this->getFactPrestMontantFactureFinal();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['FacturesPrestations'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['FacturesPrestations'][$this->getPrimaryKey()] = true;
        $keys = FacturesPrestationsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFactPrestId(),
            $keys[1] => $this->getFactRubId(),
            $keys[2] => $this->getOpPrestId(),
            $keys[3] => $this->getRPrestationId(),
            $keys[4] => $this->getFactPrestLibelle(),
            $keys[5] => $this->getFactPrestDescription(),
            $keys[6] => $this->getFactPrestOrder(),
            $keys[7] => $this->getFactPrestOff(),
            $keys[8] => $this->getFactPrestAdf(),
            $keys[9] => $this->getRPCodeComptable(),
            $keys[10] => $this->getRPAxe1(),
            $keys[11] => $this->getRPAxe3(),
            $keys[12] => $this->getRPAxe4(),
            $keys[13] => $this->getOpPrestPv(),
            $keys[14] => $this->getOpPrestQestim(),
            $keys[15] => $this->getOpPrestMestim(),
            $keys[16] => $this->getOpPrestQreel(),
            $keys[17] => $this->getOpPrestMreel(),
            $keys[18] => $this->getFactPrestQestimDejaFacture(),
            $keys[19] => $this->getFactPrestQuantiteDejaFacture(),
            $keys[20] => $this->getFactPrestMontantDejaFacture(),
            $keys[21] => $this->getRTvaTypeId(),
            $keys[22] => $this->getRRubTypeId(),
            $keys[23] => $this->getFactPrestQestimFacture(),
            $keys[24] => $this->getFactPrestQuantiteFacture(),
            $keys[25] => $this->getFactPrestMontantFacture(),
            $keys[26] => $this->getFactPrestTauxAdf(),
            $keys[27] => $this->getFactPrestTauxPartiel(),
            $keys[28] => $this->getFactPrestQestimFactureFinal(),
            $keys[29] => $this->getFactPrestQuantiteFactureFinal(),
            $keys[30] => $this->getFactPrestMontantFactureFinal(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aFacturesRubriques) {
                $result['FacturesRubriques'] = $this->aFacturesRubriques->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRPrestations) {
                $result['RPrestations'] = $this->aRPrestations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = FacturesPrestationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setFactPrestId($value);
                break;
            case 1:
                $this->setFactRubId($value);
                break;
            case 2:
                $this->setOpPrestId($value);
                break;
            case 3:
                $this->setRPrestationId($value);
                break;
            case 4:
                $this->setFactPrestLibelle($value);
                break;
            case 5:
                $this->setFactPrestDescription($value);
                break;
            case 6:
                $this->setFactPrestOrder($value);
                break;
            case 7:
                $this->setFactPrestOff($value);
                break;
            case 8:
                $this->setFactPrestAdf($value);
                break;
            case 9:
                $this->setRPCodeComptable($value);
                break;
            case 10:
                $this->setRPAxe1($value);
                break;
            case 11:
                $this->setRPAxe3($value);
                break;
            case 12:
                $this->setRPAxe4($value);
                break;
            case 13:
                $this->setOpPrestPv($value);
                break;
            case 14:
                $this->setOpPrestQestim($value);
                break;
            case 15:
                $this->setOpPrestMestim($value);
                break;
            case 16:
                $this->setOpPrestQreel($value);
                break;
            case 17:
                $this->setOpPrestMreel($value);
                break;
            case 18:
                $this->setFactPrestQestimDejaFacture($value);
                break;
            case 19:
                $this->setFactPrestQuantiteDejaFacture($value);
                break;
            case 20:
                $this->setFactPrestMontantDejaFacture($value);
                break;
            case 21:
                $this->setRTvaTypeId($value);
                break;
            case 22:
                $this->setRRubTypeId($value);
                break;
            case 23:
                $this->setFactPrestQestimFacture($value);
                break;
            case 24:
                $this->setFactPrestQuantiteFacture($value);
                break;
            case 25:
                $this->setFactPrestMontantFacture($value);
                break;
            case 26:
                $this->setFactPrestTauxAdf($value);
                break;
            case 27:
                $this->setFactPrestTauxPartiel($value);
                break;
            case 28:
                $this->setFactPrestQestimFactureFinal($value);
                break;
            case 29:
                $this->setFactPrestQuantiteFactureFinal($value);
                break;
            case 30:
                $this->setFactPrestMontantFactureFinal($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = FacturesPrestationsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setFactPrestId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFactRubId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOpPrestId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRPrestationId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFactPrestLibelle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFactPrestDescription($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFactPrestOrder($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFactPrestOff($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFactPrestAdf($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRPCodeComptable($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setRPAxe1($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setRPAxe3($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRPAxe4($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOpPrestPv($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOpPrestQestim($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setOpPrestMestim($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setOpPrestQreel($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setOpPrestMreel($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFactPrestQestimDejaFacture($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setFactPrestQuantiteDejaFacture($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setFactPrestMontantDejaFacture($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setRTvaTypeId($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setRRubTypeId($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setFactPrestQestimFacture($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setFactPrestQuantiteFacture($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setFactPrestMontantFacture($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setFactPrestTauxAdf($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setFactPrestTauxPartiel($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setFactPrestQestimFactureFinal($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setFactPrestQuantiteFactureFinal($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setFactPrestMontantFactureFinal($arr[$keys[30]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FacturesPrestationsPeer::DATABASE_NAME);

        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_ID)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_ID, $this->fact_prest_id);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_RUB_ID)) $criteria->add(FacturesPrestationsPeer::FACT_RUB_ID, $this->fact_rub_id);
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_ID)) $criteria->add(FacturesPrestationsPeer::OP_PREST_ID, $this->op_prest_id);
        if ($this->isColumnModified(FacturesPrestationsPeer::R_PRESTATION_ID)) $criteria->add(FacturesPrestationsPeer::R_PRESTATION_ID, $this->r_prestation_id);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_LIBELLE)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_LIBELLE, $this->fact_prest_libelle);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_DESCRIPTION)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_DESCRIPTION, $this->fact_prest_description);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_ORDER)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_ORDER, $this->fact_prest_order);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_OFF)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_OFF, $this->fact_prest_off);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_ADF)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_ADF, $this->fact_prest_adf);
        if ($this->isColumnModified(FacturesPrestationsPeer::R_P_CODE_COMPTABLE)) $criteria->add(FacturesPrestationsPeer::R_P_CODE_COMPTABLE, $this->r_p_code_comptable);
        if ($this->isColumnModified(FacturesPrestationsPeer::R_P_AXE1)) $criteria->add(FacturesPrestationsPeer::R_P_AXE1, $this->r_p_axe1);
        if ($this->isColumnModified(FacturesPrestationsPeer::R_P_AXE3)) $criteria->add(FacturesPrestationsPeer::R_P_AXE3, $this->r_p_axe3);
        if ($this->isColumnModified(FacturesPrestationsPeer::R_P_AXE4)) $criteria->add(FacturesPrestationsPeer::R_P_AXE4, $this->r_p_axe4);
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_PV)) $criteria->add(FacturesPrestationsPeer::OP_PREST_PV, $this->op_prest_pv);
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_QESTIM)) $criteria->add(FacturesPrestationsPeer::OP_PREST_QESTIM, $this->op_prest_qestim);
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_MESTIM)) $criteria->add(FacturesPrestationsPeer::OP_PREST_MESTIM, $this->op_prest_mestim);
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_QREEL)) $criteria->add(FacturesPrestationsPeer::OP_PREST_QREEL, $this->op_prest_qreel);
        if ($this->isColumnModified(FacturesPrestationsPeer::OP_PREST_MREEL)) $criteria->add(FacturesPrestationsPeer::OP_PREST_MREEL, $this->op_prest_mreel);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_QESTIM_DEJA_FACTURE, $this->fact_prest_qestim_deja_facture);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_QUANTITE_DEJA_FACTURE, $this->fact_prest_quantite_deja_facture);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_MONTANT_DEJA_FACTURE, $this->fact_prest_montant_deja_facture);
        if ($this->isColumnModified(FacturesPrestationsPeer::R_TVA_TYPE_ID)) $criteria->add(FacturesPrestationsPeer::R_TVA_TYPE_ID, $this->r_tva_type_id);
        if ($this->isColumnModified(FacturesPrestationsPeer::R_RUB_TYPE_ID)) $criteria->add(FacturesPrestationsPeer::R_RUB_TYPE_ID, $this->r_rub_type_id);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE, $this->fact_prest_qestim_facture);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE, $this->fact_prest_quantite_facture);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE, $this->fact_prest_montant_facture);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_TAUX_ADF)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_TAUX_ADF, $this->fact_prest_taux_adf);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_TAUX_PARTIEL, $this->fact_prest_taux_partiel);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_QESTIM_FACTURE_FINAL, $this->fact_prest_qestim_facture_final);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_QUANTITE_FACTURE_FINAL, $this->fact_prest_quantite_facture_final);
        if ($this->isColumnModified(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL)) $criteria->add(FacturesPrestationsPeer::FACT_PREST_MONTANT_FACTURE_FINAL, $this->fact_prest_montant_facture_final);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(FacturesPrestationsPeer::DATABASE_NAME);
        $criteria->add(FacturesPrestationsPeer::FACT_PREST_ID, $this->fact_prest_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getFactPrestId();
    }

    /**
     * Generic method to set the primary key (fact_prest_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setFactPrestId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getFactPrestId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of FacturesPrestations (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFactRubId($this->getFactRubId());
        $copyObj->setOpPrestId($this->getOpPrestId());
        $copyObj->setRPrestationId($this->getRPrestationId());
        $copyObj->setFactPrestLibelle($this->getFactPrestLibelle());
        $copyObj->setFactPrestDescription($this->getFactPrestDescription());
        $copyObj->setFactPrestOrder($this->getFactPrestOrder());
        $copyObj->setFactPrestOff($this->getFactPrestOff());
        $copyObj->setFactPrestAdf($this->getFactPrestAdf());
        $copyObj->setRPCodeComptable($this->getRPCodeComptable());
        $copyObj->setRPAxe1($this->getRPAxe1());
        $copyObj->setRPAxe3($this->getRPAxe3());
        $copyObj->setRPAxe4($this->getRPAxe4());
        $copyObj->setOpPrestPv($this->getOpPrestPv());
        $copyObj->setOpPrestQestim($this->getOpPrestQestim());
        $copyObj->setOpPrestMestim($this->getOpPrestMestim());
        $copyObj->setOpPrestQreel($this->getOpPrestQreel());
        $copyObj->setOpPrestMreel($this->getOpPrestMreel());
        $copyObj->setFactPrestQestimDejaFacture($this->getFactPrestQestimDejaFacture());
        $copyObj->setFactPrestQuantiteDejaFacture($this->getFactPrestQuantiteDejaFacture());
        $copyObj->setFactPrestMontantDejaFacture($this->getFactPrestMontantDejaFacture());
        $copyObj->setRTvaTypeId($this->getRTvaTypeId());
        $copyObj->setRRubTypeId($this->getRRubTypeId());
        $copyObj->setFactPrestQestimFacture($this->getFactPrestQestimFacture());
        $copyObj->setFactPrestQuantiteFacture($this->getFactPrestQuantiteFacture());
        $copyObj->setFactPrestMontantFacture($this->getFactPrestMontantFacture());
        $copyObj->setFactPrestTauxAdf($this->getFactPrestTauxAdf());
        $copyObj->setFactPrestTauxPartiel($this->getFactPrestTauxPartiel());
        $copyObj->setFactPrestQestimFactureFinal($this->getFactPrestQestimFactureFinal());
        $copyObj->setFactPrestQuantiteFactureFinal($this->getFactPrestQuantiteFactureFinal());
        $copyObj->setFactPrestMontantFactureFinal($this->getFactPrestMontantFactureFinal());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setFactPrestId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return FacturesPrestations Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return FacturesPrestationsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FacturesPrestationsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a FacturesRubriques object.
     *
     * @param                  FacturesRubriques $v
     * @return FacturesPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setFacturesRubriques(FacturesRubriques $v = null)
    {
        if ($v === null) {
            $this->setFactRubId(NULL);
        } else {
            $this->setFactRubId($v->getFactRubId());
        }

        $this->aFacturesRubriques = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the FacturesRubriques object, it will not be re-added.
        if ($v !== null) {
            $v->addFacturesPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated FacturesRubriques object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return FacturesRubriques The associated FacturesRubriques object.
     * @throws PropelException
     */
    public function getFacturesRubriques(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aFacturesRubriques === null && ($this->fact_rub_id !== null) && $doQuery) {
            $this->aFacturesRubriques = FacturesRubriquesQuery::create()->findPk($this->fact_rub_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aFacturesRubriques->addFacturesPrestationss($this);
             */
        }

        return $this->aFacturesRubriques;
    }

    /**
     * Declares an association between this object and a RPrestations object.
     *
     * @param                  RPrestations $v
     * @return FacturesPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRPrestations(RPrestations $v = null)
    {
        if ($v === null) {
            $this->setRPrestationId(NULL);
        } else {
            $this->setRPrestationId($v->getRPrestationId());
        }

        $this->aRPrestations = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RPrestations object, it will not be re-added.
        if ($v !== null) {
            $v->addFacturesPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated RPrestations object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RPrestations The associated RPrestations object.
     * @throws PropelException
     */
    public function getRPrestations(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRPrestations === null && ($this->r_prestation_id !== null) && $doQuery) {
            $this->aRPrestations = RPrestationsQuery::create()->findPk($this->r_prestation_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRPrestations->addFacturesPrestationss($this);
             */
        }

        return $this->aRPrestations;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->fact_prest_id = null;
        $this->fact_rub_id = null;
        $this->op_prest_id = null;
        $this->r_prestation_id = null;
        $this->fact_prest_libelle = null;
        $this->fact_prest_description = null;
        $this->fact_prest_order = null;
        $this->fact_prest_off = null;
        $this->fact_prest_adf = null;
        $this->r_p_code_comptable = null;
        $this->r_p_axe1 = null;
        $this->r_p_axe3 = null;
        $this->r_p_axe4 = null;
        $this->op_prest_pv = null;
        $this->op_prest_qestim = null;
        $this->op_prest_mestim = null;
        $this->op_prest_qreel = null;
        $this->op_prest_mreel = null;
        $this->fact_prest_qestim_deja_facture = null;
        $this->fact_prest_quantite_deja_facture = null;
        $this->fact_prest_montant_deja_facture = null;
        $this->r_tva_type_id = null;
        $this->r_rub_type_id = null;
        $this->fact_prest_qestim_facture = null;
        $this->fact_prest_quantite_facture = null;
        $this->fact_prest_montant_facture = null;
        $this->fact_prest_taux_adf = null;
        $this->fact_prest_taux_partiel = null;
        $this->fact_prest_qestim_facture_final = null;
        $this->fact_prest_quantite_facture_final = null;
        $this->fact_prest_montant_facture_final = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->aFacturesRubriques instanceof Persistent) {
              $this->aFacturesRubriques->clearAllReferences($deep);
            }
            if ($this->aRPrestations instanceof Persistent) {
              $this->aRPrestations->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aFacturesRubriques = null;
        $this->aRPrestations = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(FacturesPrestationsPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

    // adderror behavior
    
    /**
    *
    * @param string $message
    * @param string $colName
    * @param string $validator
    */
    public function addValidationFailed( $message, $colName='error', $validator=null){
        $this->validationFailures[$colName][]=new ValidationFailed($colName, $message, $validator);
    }
    
    /**
    *
    * @param string $colName
    * @param string $message
    * @param string $validator
    */
    protected function preValidate(){

        $oReflectionClass=new ReflectionClass($this);
        $aMethods=$oReflectionClass->getMethods();
        foreach($aMethods as $method){
            if(strpos( $method->name,'_validateIs')!==false){
                $this->{$method->name}();
            }
        }
    }

    // utils behavior

            /**
            * Return connection object
            * @return PropelPDO
            */
            public function getConnection(){
                return BaseFacturesPrestationsPeer::getConnection();
            }
}
