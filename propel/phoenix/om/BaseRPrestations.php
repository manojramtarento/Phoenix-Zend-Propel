<?php


/**
 * Base class that represents a row from the 'r_prestations' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRPrestations extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RPrestationsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RPrestationsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the r_prestation_id field.
     * @var        int
     */
    protected $r_prestation_id;

    /**
     * The value for the r_p_libelle field.
     * @var        string
     */
    protected $r_p_libelle;

    /**
     * The value for the r_p_libelle_en field.
     * @var        string
     */
    protected $r_p_libelle_en;

    /**
     * The value for the r_p_controle field.
     * @var        string
     */
    protected $r_p_controle;

    /**
     * The value for the r_p_axe1 field.
     * @var        int
     */
    protected $r_p_axe1;

    /**
     * The value for the r_p_axe2 field.
     * @var        int
     */
    protected $r_p_axe2;

    /**
     * The value for the r_p_axe3 field.
     * @var        int
     */
    protected $r_p_axe3;

    /**
     * The value for the r_p_axe4 field.
     * @var        int
     */
    protected $r_p_axe4;

    /**
     * The value for the r_p_axe5 field.
     * @var        int
     */
    protected $r_p_axe5;

    /**
     * The value for the r_p_code_comptable field.
     * @var        string
     */
    protected $r_p_code_comptable;

    /**
     * The value for the r_p_adf field.
     * @var        boolean
     */
    protected $r_p_adf;

    /**
     * The value for the r_p_commentaires field.
     * @var        string
     */
    protected $r_p_commentaires;

    /**
     * The value for the r_p_description_fr field.
     * @var        string
     */
    protected $r_p_description_fr;

    /**
     * The value for the r_p_description_en field.
     * @var        string
     */
    protected $r_p_description_en;

    /**
     * The value for the r_p_qui_valide field.
     * @var        string
     */
    protected $r_p_qui_valide;

    /**
     * The value for the r_p_groupe_validation_id field.
     * @var        int
     */
    protected $r_p_groupe_validation_id;

    /**
     * The value for the r_p_couts_estimes_modifiables field.
     * @var        boolean
     */
    protected $r_p_couts_estimes_modifiables;

    /**
     * The value for the r_p_cout_interne field.
     * @var        float
     */
    protected $r_p_cout_interne;

    /**
     * The value for the r_p_cout_externe field.
     * @var        float
     */
    protected $r_p_cout_externe;

    /**
     * The value for the r_p_cout_total field.
     * @var        float
     */
    protected $r_p_cout_total;

    /**
     * The value for the r_p_validation_id field.
     * @var        int
     */
    protected $r_p_validation_id;

    /**
     * The value for the r_p_taux_marge_min field.
     * @var        float
     */
    protected $r_p_taux_marge_min;

    /**
     * The value for the r_p_prix_vente field.
     * @var        float
     */
    protected $r_p_prix_vente;

    /**
     * The value for the r_p_type_frais_id field.
     * @var        int
     */
    protected $r_p_type_frais_id;

    /**
     * The value for the actif field.
     * @var        boolean
     */
    protected $actif;

    /**
     * The value for the r_p_tva_id field.
     * @var        int
     */
    protected $r_p_tva_id;

    /**
     * The value for the r_p_rfa field.
     * @var        boolean
     */
    protected $r_p_rfa;

    /**
     * The value for the valide_daf field.
     * @var        boolean
     */
    protected $valide_daf;

    /**
     * The value for the r_p_is_maj_from_compiluo field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $r_p_is_maj_from_compiluo;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * The value for the user_create field.
     * @var        int
     */
    protected $user_create;

    /**
     * The value for the date_modify field.
     * @var        string
     */
    protected $date_modify;

    /**
     * The value for the user_modify field.
     * @var        int
     */
    protected $user_modify;

    /**
     * The value for the r_p_is_mandatory field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $r_p_is_mandatory;

    /**
     * The value for the r_p_is_eligible_for_prime field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $r_p_is_eligible_for_prime;

    /**
     * @var        AclGroups
     */
    protected $aGroupValidation;

    /**
     * @var        RPAxe1
     */
    protected $aAxe1;

    /**
     * @var        RPAxe2
     */
    protected $aAxe2;

    /**
     * @var        RPAxe3
     */
    protected $aAxe3;

    /**
     * @var        RPAxe4
     */
    protected $aAxe4;

    /**
     * @var        RPAxe5
     */
    protected $aAxe5;

    /**
     * @var        PropelObjectCollection|FacturesPrestations[] Collection to store aggregation of FacturesPrestations objects.
     */
    protected $collFacturesPrestationss;
    protected $collFacturesPrestationssPartial;

    /**
     * @var        PropelObjectCollection|OperationPrestations[] Collection to store aggregation of OperationPrestations objects.
     */
    protected $collOperationPrestationss;
    protected $collOperationPrestationssPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $facturesPrestationssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationPrestationssScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->r_p_is_maj_from_compiluo = false;
        $this->r_p_is_mandatory = false;
        $this->r_p_is_eligible_for_prime = true;
    }

    /**
     * Initializes internal state of BaseRPrestations object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [r_p_libelle] column value.
     *
     * @return string
     */
    public function getRPLibelle()
    {

        return $this->r_p_libelle;
    }

    /**
     * Get the [r_p_libelle_en] column value.
     *
     * @return string
     */
    public function getRPLibelleEn()
    {

        return $this->r_p_libelle_en;
    }

    /**
     * Get the [r_p_controle] column value.
     *
     * @return string
     */
    public function getRPControle()
    {

        return $this->r_p_controle;
    }

    /**
     * Get the [r_p_axe1] column value.
     *
     * @return int
     */
    public function getRPAxe1()
    {

        return $this->r_p_axe1;
    }

    /**
     * Get the [r_p_axe2] column value.
     *
     * @return int
     */
    public function getRPAxe2()
    {

        return $this->r_p_axe2;
    }

    /**
     * Get the [r_p_axe3] column value.
     *
     * @return int
     */
    public function getRPAxe3()
    {

        return $this->r_p_axe3;
    }

    /**
     * Get the [r_p_axe4] column value.
     *
     * @return int
     */
    public function getRPAxe4()
    {

        return $this->r_p_axe4;
    }

    /**
     * Get the [r_p_axe5] column value.
     *
     * @return int
     */
    public function getRPAxe5()
    {

        return $this->r_p_axe5;
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
     * Get the [r_p_adf] column value.
     *
     * @return boolean
     */
    public function getRPAdf()
    {

        return $this->r_p_adf;
    }

    /**
     * Get the [r_p_commentaires] column value.
     *
     * @return string
     */
    public function getRPCommentaires()
    {

        return $this->r_p_commentaires;
    }

    /**
     * Get the [r_p_description_fr] column value.
     *
     * @return string
     */
    public function getRPDescriptionFr()
    {

        return $this->r_p_description_fr;
    }

    /**
     * Get the [r_p_description_en] column value.
     *
     * @return string
     */
    public function getRPDescriptionEn()
    {

        return $this->r_p_description_en;
    }

    /**
     * Get the [r_p_qui_valide] column value.
     *
     * @return string
     */
    public function getRPQuiValide()
    {

        return $this->r_p_qui_valide;
    }

    /**
     * Get the [r_p_groupe_validation_id] column value.
     *
     * @return int
     */
    public function getRPGroupeValidationId()
    {

        return $this->r_p_groupe_validation_id;
    }

    /**
     * Get the [r_p_couts_estimes_modifiables] column value.
     *
     * @return boolean
     */
    public function getRPCoutsEstimesModifiables()
    {

        return $this->r_p_couts_estimes_modifiables;
    }

    /**
     * Get the [r_p_cout_interne] column value.
     *
     * @return float
     */
    public function getRPCoutInterne()
    {

        return $this->r_p_cout_interne;
    }

    /**
     * Get the [r_p_cout_externe] column value.
     *
     * @return float
     */
    public function getRPCoutExterne()
    {

        return $this->r_p_cout_externe;
    }

    /**
     * Get the [r_p_cout_total] column value.
     *
     * @return float
     */
    public function getRPCoutTotal()
    {

        return $this->r_p_cout_total;
    }

    /**
     * Get the [r_p_validation_id] column value.
     *
     * @return int
     */
    public function getRPValidationId()
    {

        return $this->r_p_validation_id;
    }

    /**
     * Get the [r_p_taux_marge_min] column value.
     *
     * @return float
     */
    public function getRPTauxMargeMin()
    {

        return $this->r_p_taux_marge_min;
    }

    /**
     * Get the [r_p_prix_vente] column value.
     *
     * @return float
     */
    public function getRPPrixVente()
    {

        return $this->r_p_prix_vente;
    }

    /**
     * Get the [r_p_type_frais_id] column value.
     *
     * @return int
     */
    public function getRPTypeFraisId()
    {

        return $this->r_p_type_frais_id;
    }

    /**
     * Get the [actif] column value.
     *
     * @return boolean
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Get the [r_p_tva_id] column value.
     *
     * @return int
     */
    public function getRPTvaId()
    {

        return $this->r_p_tva_id;
    }

    /**
     * Get the [r_p_rfa] column value.
     *
     * @return boolean
     */
    public function getRPRfa()
    {

        return $this->r_p_rfa;
    }

    /**
     * Get the [valide_daf] column value.
     *
     * @return boolean
     */
    public function getValideDaf()
    {

        return $this->valide_daf;
    }

    /**
     * Get the [r_p_is_maj_from_compiluo] column value.
     *
     * @return boolean
     */
    public function getRPIsMajFromCompiluo()
    {

        return $this->r_p_is_maj_from_compiluo;
    }

    /**
     * Get the [optionally formatted] temporal [date_create] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCreate($format = 'Y-m-d H:i:s')
    {
        if ($this->date_create === null) {
            return null;
        }

        if ($this->date_create === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_create);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_create, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [user_create] column value.
     *
     * @return int
     */
    public function getUserCreate()
    {

        return $this->user_create;
    }

    /**
     * Get the [optionally formatted] temporal [date_modify] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateModify($format = 'Y-m-d H:i:s')
    {
        if ($this->date_modify === null) {
            return null;
        }

        if ($this->date_modify === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_modify);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modify, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [user_modify] column value.
     *
     * @return int
     */
    public function getUserModify()
    {

        return $this->user_modify;
    }

    /**
     * Get the [r_p_is_mandatory] column value.
     *
     * @return boolean
     */
    public function getRPIsMandatory()
    {

        return $this->r_p_is_mandatory;
    }

    /**
     * Get the [r_p_is_eligible_for_prime] column value.
     *
     * @return boolean
     */
    public function getRPIsEligibleForPrime()
    {

        return $this->r_p_is_eligible_for_prime;
    }

    /**
     * Set the value of [r_prestation_id] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
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
                    $this->modifiedColumns[] = RPrestationsPeer::R_PRESTATION_ID;
                }


        return $this;
    } // setRPrestationId()

    /**
     * Set the value of [r_p_libelle] column.
     *
     * @param  string $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPLibelle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_libelle !== $v) {
            $this->r_p_libelle = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_LIBELLE;
        }


        return $this;
    } // setRPLibelle()

    /**
     * Set the value of [r_p_libelle_en] column.
     *
     * @param  string $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPLibelleEn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_libelle_en !== $v) {
            $this->r_p_libelle_en = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_LIBELLE_EN;
        }


        return $this;
    } // setRPLibelleEn()

    /**
     * Set the value of [r_p_controle] column.
     *
     * @param  string $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPControle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_controle !== $v) {
            $this->r_p_controle = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_CONTROLE;
        }


        return $this;
    } // setRPControle()

    /**
     * Set the value of [r_p_axe1] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPAxe1($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_p_axe1 !== $v) {
                    $this->r_p_axe1 = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_AXE1;
                }

        if ($this->aAxe1 !== null && $this->aAxe1->getRPAxe1Id() !== $v) {
            $this->aAxe1 = null;
        }


        return $this;
    } // setRPAxe1()

    /**
     * Set the value of [r_p_axe2] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPAxe2($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_p_axe2 !== $v) {
                    $this->r_p_axe2 = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_AXE2;
                }

        if ($this->aAxe2 !== null && $this->aAxe2->getRPAxe2Id() !== $v) {
            $this->aAxe2 = null;
        }


        return $this;
    } // setRPAxe2()

    /**
     * Set the value of [r_p_axe3] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPAxe3($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_p_axe3 !== $v) {
                    $this->r_p_axe3 = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_AXE3;
                }

        if ($this->aAxe3 !== null && $this->aAxe3->getRPAxe3Id() !== $v) {
            $this->aAxe3 = null;
        }


        return $this;
    } // setRPAxe3()

    /**
     * Set the value of [r_p_axe4] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPAxe4($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_p_axe4 !== $v) {
                    $this->r_p_axe4 = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_AXE4;
                }

        if ($this->aAxe4 !== null && $this->aAxe4->getRPAxe4Id() !== $v) {
            $this->aAxe4 = null;
        }


        return $this;
    } // setRPAxe4()

    /**
     * Set the value of [r_p_axe5] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPAxe5($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_p_axe5 !== $v) {
                    $this->r_p_axe5 = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_AXE5;
                }

        if ($this->aAxe5 !== null && $this->aAxe5->getRPAxe5Id() !== $v) {
            $this->aAxe5 = null;
        }


        return $this;
    } // setRPAxe5()

    /**
     * Set the value of [r_p_code_comptable] column.
     *
     * @param  string $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPCodeComptable($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_code_comptable !== $v) {
            $this->r_p_code_comptable = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_CODE_COMPTABLE;
        }


        return $this;
    } // setRPCodeComptable()

    /**
     * Sets the value of the [r_p_adf] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPAdf($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_p_adf !== $v) {
            $this->r_p_adf = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_ADF;
        }


        return $this;
    } // setRPAdf()

    /**
     * Set the value of [r_p_commentaires] column.
     *
     * @param  string $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPCommentaires($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_commentaires !== $v) {
            $this->r_p_commentaires = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_COMMENTAIRES;
        }


        return $this;
    } // setRPCommentaires()

    /**
     * Set the value of [r_p_description_fr] column.
     *
     * @param  string $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPDescriptionFr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_description_fr !== $v) {
            $this->r_p_description_fr = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_DESCRIPTION_FR;
        }


        return $this;
    } // setRPDescriptionFr()

    /**
     * Set the value of [r_p_description_en] column.
     *
     * @param  string $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPDescriptionEn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_description_en !== $v) {
            $this->r_p_description_en = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_DESCRIPTION_EN;
        }


        return $this;
    } // setRPDescriptionEn()

    /**
     * Set the value of [r_p_qui_valide] column.
     *
     * @param  string $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPQuiValide($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->r_p_qui_valide !== $v) {
            $this->r_p_qui_valide = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_QUI_VALIDE;
        }


        return $this;
    } // setRPQuiValide()

    /**
     * Set the value of [r_p_groupe_validation_id] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPGroupeValidationId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_p_groupe_validation_id !== $v) {
                    $this->r_p_groupe_validation_id = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_GROUPE_VALIDATION_ID;
                }

        if ($this->aGroupValidation !== null && $this->aGroupValidation->getGroupId() !== $v) {
            $this->aGroupValidation = null;
        }


        return $this;
    } // setRPGroupeValidationId()

    /**
     * Sets the value of the [r_p_couts_estimes_modifiables] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPCoutsEstimesModifiables($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_p_couts_estimes_modifiables !== $v) {
            $this->r_p_couts_estimes_modifiables = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_COUTS_ESTIMES_MODIFIABLES;
        }


        return $this;
    } // setRPCoutsEstimesModifiables()

    /**
     * Set the value of [r_p_cout_interne] column.
     *
     * @param  float $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPCoutInterne($v)
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
                if ($this->r_p_cout_interne !== $v) {
                    $this->r_p_cout_interne = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_COUT_INTERNE;
                }


        return $this;
    } // setRPCoutInterne()

    /**
     * Set the value of [r_p_cout_externe] column.
     *
     * @param  float $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPCoutExterne($v)
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
                if ($this->r_p_cout_externe !== $v) {
                    $this->r_p_cout_externe = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_COUT_EXTERNE;
                }


        return $this;
    } // setRPCoutExterne()

    /**
     * Set the value of [r_p_cout_total] column.
     *
     * @param  float $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPCoutTotal($v)
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
                if ($this->r_p_cout_total !== $v) {
                    $this->r_p_cout_total = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_COUT_TOTAL;
                }


        return $this;
    } // setRPCoutTotal()

    /**
     * Set the value of [r_p_validation_id] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPValidationId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_p_validation_id !== $v) {
                    $this->r_p_validation_id = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_VALIDATION_ID;
                }


        return $this;
    } // setRPValidationId()

    /**
     * Set the value of [r_p_taux_marge_min] column.
     *
     * @param  float $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPTauxMargeMin($v)
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
                if ($this->r_p_taux_marge_min !== $v) {
                    $this->r_p_taux_marge_min = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_TAUX_MARGE_MIN;
                }


        return $this;
    } // setRPTauxMargeMin()

    /**
     * Set the value of [r_p_prix_vente] column.
     *
     * @param  float $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPPrixVente($v)
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
                if ($this->r_p_prix_vente !== $v) {
                    $this->r_p_prix_vente = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_PRIX_VENTE;
                }


        return $this;
    } // setRPPrixVente()

    /**
     * Set the value of [r_p_type_frais_id] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPTypeFraisId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_p_type_frais_id !== $v) {
                    $this->r_p_type_frais_id = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_TYPE_FRAIS_ID;
                }


        return $this;
    } // setRPTypeFraisId()

    /**
     * Sets the value of the [actif] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setActif($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actif !== $v) {
            $this->actif = $v;
            $this->modifiedColumns[] = RPrestationsPeer::ACTIF;
        }


        return $this;
    } // setActif()

    /**
     * Set the value of [r_p_tva_id] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPTvaId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->r_p_tva_id !== $v) {
                    $this->r_p_tva_id = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::R_P_TVA_ID;
                }


        return $this;
    } // setRPTvaId()

    /**
     * Sets the value of the [r_p_rfa] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPRfa($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_p_rfa !== $v) {
            $this->r_p_rfa = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_RFA;
        }


        return $this;
    } // setRPRfa()

    /**
     * Sets the value of the [valide_daf] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setValideDaf($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->valide_daf !== $v) {
            $this->valide_daf = $v;
            $this->modifiedColumns[] = RPrestationsPeer::VALIDE_DAF;
        }


        return $this;
    } // setValideDaf()

    /**
     * Sets the value of the [r_p_is_maj_from_compiluo] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPIsMajFromCompiluo($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_p_is_maj_from_compiluo !== $v) {
            $this->r_p_is_maj_from_compiluo = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_IS_MAJ_FROM_COMPILUO;
        }


        return $this;
    } // setRPIsMajFromCompiluo()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return RPrestations The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = RPrestationsPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Set the value of [user_create] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setUserCreate($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->user_create !== $v) {
                    $this->user_create = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::USER_CREATE;
                }


        return $this;
    } // setUserCreate()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return RPrestations The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = RPrestationsPeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

    /**
     * Set the value of [user_modify] column.
     *
     * @param  int $v new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setUserModify($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->user_modify !== $v) {
                    $this->user_modify = $v;
                    $this->modifiedColumns[] = RPrestationsPeer::USER_MODIFY;
                }


        return $this;
    } // setUserModify()

    /**
     * Sets the value of the [r_p_is_mandatory] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPIsMandatory($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_p_is_mandatory !== $v) {
            $this->r_p_is_mandatory = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_IS_MANDATORY;
        }


        return $this;
    } // setRPIsMandatory()

    /**
     * Sets the value of the [r_p_is_eligible_for_prime] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return RPrestations The current object (for fluent API support)
     */
    public function setRPIsEligibleForPrime($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->r_p_is_eligible_for_prime !== $v) {
            $this->r_p_is_eligible_for_prime = $v;
            $this->modifiedColumns[] = RPrestationsPeer::R_P_IS_ELIGIBLE_FOR_PRIME;
        }


        return $this;
    } // setRPIsEligibleForPrime()

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
            if ($this->r_p_is_maj_from_compiluo !== false) {
                return false;
            }

            if ($this->r_p_is_mandatory !== false) {
                return false;
            }

            if ($this->r_p_is_eligible_for_prime !== true) {
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

            $this->r_prestation_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->r_p_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->r_p_libelle_en = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->r_p_controle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->r_p_axe1 = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->r_p_axe2 = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->r_p_axe3 = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->r_p_axe4 = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->r_p_axe5 = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->r_p_code_comptable = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->r_p_adf = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->r_p_commentaires = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->r_p_description_fr = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->r_p_description_en = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->r_p_qui_valide = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->r_p_groupe_validation_id = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->r_p_couts_estimes_modifiables = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
            $this->r_p_cout_interne = ($row[$startcol + 17] !== null) ? (float) $row[$startcol + 17] : null;
            $this->r_p_cout_externe = ($row[$startcol + 18] !== null) ? (float) $row[$startcol + 18] : null;
            $this->r_p_cout_total = ($row[$startcol + 19] !== null) ? (float) $row[$startcol + 19] : null;
            $this->r_p_validation_id = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->r_p_taux_marge_min = ($row[$startcol + 21] !== null) ? (float) $row[$startcol + 21] : null;
            $this->r_p_prix_vente = ($row[$startcol + 22] !== null) ? (float) $row[$startcol + 22] : null;
            $this->r_p_type_frais_id = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->actif = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
            $this->r_p_tva_id = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->r_p_rfa = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
            $this->valide_daf = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
            $this->r_p_is_maj_from_compiluo = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
            $this->date_create = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->user_create = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->date_modify = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->user_modify = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->r_p_is_mandatory = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
            $this->r_p_is_eligible_for_prime = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 35; // 35 = RPrestationsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RPrestations object", $e);
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

        if ($this->aAxe1 !== null && $this->r_p_axe1 !== $this->aAxe1->getRPAxe1Id()) {
            $this->aAxe1 = null;
        }
        if ($this->aAxe2 !== null && $this->r_p_axe2 !== $this->aAxe2->getRPAxe2Id()) {
            $this->aAxe2 = null;
        }
        if ($this->aAxe3 !== null && $this->r_p_axe3 !== $this->aAxe3->getRPAxe3Id()) {
            $this->aAxe3 = null;
        }
        if ($this->aAxe4 !== null && $this->r_p_axe4 !== $this->aAxe4->getRPAxe4Id()) {
            $this->aAxe4 = null;
        }
        if ($this->aAxe5 !== null && $this->r_p_axe5 !== $this->aAxe5->getRPAxe5Id()) {
            $this->aAxe5 = null;
        }
        if ($this->aGroupValidation !== null && $this->r_p_groupe_validation_id !== $this->aGroupValidation->getGroupId()) {
            $this->aGroupValidation = null;
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
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RPrestationsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGroupValidation = null;
            $this->aAxe1 = null;
            $this->aAxe2 = null;
            $this->aAxe3 = null;
            $this->aAxe4 = null;
            $this->aAxe5 = null;
            $this->collFacturesPrestationss = null;

            $this->collOperationPrestationss = null;

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
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RPrestationsQuery::create()
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
            $con = Propel::getConnection(RPrestationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setDateCreate(time());
                
                                $this->setActif(1);

            } else {
                $ret = $ret && $this->preUpdate($con);
                // log behavior
                
                                $this->setDateModify(time());
                
                                $this->setUserModify(Zend_Auth::getInstance()->getStorage()->read()->getUserId());

            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                RPrestationsPeer::addInstanceToPool($this);
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

            if ($this->aGroupValidation !== null) {
                if ($this->aGroupValidation->isModified() || $this->aGroupValidation->isNew()) {
                    $affectedRows += $this->aGroupValidation->save($con);
                }
                $this->setGroupValidation($this->aGroupValidation);
            }

            if ($this->aAxe1 !== null) {
                if ($this->aAxe1->isModified() || $this->aAxe1->isNew()) {
                    $affectedRows += $this->aAxe1->save($con);
                }
                $this->setAxe1($this->aAxe1);
            }

            if ($this->aAxe2 !== null) {
                if ($this->aAxe2->isModified() || $this->aAxe2->isNew()) {
                    $affectedRows += $this->aAxe2->save($con);
                }
                $this->setAxe2($this->aAxe2);
            }

            if ($this->aAxe3 !== null) {
                if ($this->aAxe3->isModified() || $this->aAxe3->isNew()) {
                    $affectedRows += $this->aAxe3->save($con);
                }
                $this->setAxe3($this->aAxe3);
            }

            if ($this->aAxe4 !== null) {
                if ($this->aAxe4->isModified() || $this->aAxe4->isNew()) {
                    $affectedRows += $this->aAxe4->save($con);
                }
                $this->setAxe4($this->aAxe4);
            }

            if ($this->aAxe5 !== null) {
                if ($this->aAxe5->isModified() || $this->aAxe5->isNew()) {
                    $affectedRows += $this->aAxe5->save($con);
                }
                $this->setAxe5($this->aAxe5);
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

            if ($this->facturesPrestationssScheduledForDeletion !== null) {
                if (!$this->facturesPrestationssScheduledForDeletion->isEmpty()) {
                    FacturesPrestationsQuery::create()
                        ->filterByPrimaryKeys($this->facturesPrestationssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->facturesPrestationssScheduledForDeletion = null;
                }
            }

            if ($this->collFacturesPrestationss !== null) {
                foreach ($this->collFacturesPrestationss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationPrestationssScheduledForDeletion !== null) {
                if (!$this->operationPrestationssScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationPrestationssScheduledForDeletion as $operationPrestations) {
                        // need to save related object because we set the relation to null
                        $operationPrestations->save($con);
                    }
                    $this->operationPrestationssScheduledForDeletion = null;
                }
            }

            if ($this->collOperationPrestationss !== null) {
                foreach ($this->collOperationPrestationss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = RPrestationsPeer::R_PRESTATION_ID;
        if (null !== $this->r_prestation_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RPrestationsPeer::R_PRESTATION_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RPrestationsPeer::R_PRESTATION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_prestation_id`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_libelle`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_libelle_en`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_CONTROLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_controle`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_AXE1)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe1`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_AXE2)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe2`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_AXE3)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe3`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_AXE4)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe4`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_AXE5)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_axe5`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_CODE_COMPTABLE)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_code_comptable`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_ADF)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_adf`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_COMMENTAIRES)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_commentaires`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_DESCRIPTION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_description_fr`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_DESCRIPTION_EN)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_description_en`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_QUI_VALIDE)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_qui_valide`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_groupe_validation_id`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_COUTS_ESTIMES_MODIFIABLES)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_couts_estimes_modifiables`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_COUT_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_cout_interne`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_COUT_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_cout_externe`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_COUT_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_cout_total`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_VALIDATION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_validation_id`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_TAUX_MARGE_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_taux_marge_min`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_PRIX_VENTE)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_prix_vente`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_TYPE_FRAIS_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_type_frais_id`';
        }
        if ($this->isColumnModified(RPrestationsPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_TVA_ID)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_tva_id`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_RFA)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_rfa`';
        }
        if ($this->isColumnModified(RPrestationsPeer::VALIDE_DAF)) {
            $modifiedColumns[':p' . $index++]  = '`valide_daf`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_IS_MAJ_FROM_COMPILUO)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_is_maj_from_compiluo`';
        }
        if ($this->isColumnModified(RPrestationsPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(RPrestationsPeer::USER_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`user_create`';
        }
        if ($this->isColumnModified(RPrestationsPeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }
        if ($this->isColumnModified(RPrestationsPeer::USER_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`user_modify`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_IS_MANDATORY)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_is_mandatory`';
        }
        if ($this->isColumnModified(RPrestationsPeer::R_P_IS_ELIGIBLE_FOR_PRIME)) {
            $modifiedColumns[':p' . $index++]  = '`r_p_is_eligible_for_prime`';
        }

        $sql = sprintf(
            'INSERT INTO `r_prestations` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`r_prestation_id`':
                        $stmt->bindValue($identifier, $this->r_prestation_id, PDO::PARAM_INT);
                        break;
                    case '`r_p_libelle`':
                        $stmt->bindValue($identifier, $this->r_p_libelle, PDO::PARAM_STR);
                        break;
                    case '`r_p_libelle_en`':
                        $stmt->bindValue($identifier, $this->r_p_libelle_en, PDO::PARAM_STR);
                        break;
                    case '`r_p_controle`':
                        $stmt->bindValue($identifier, $this->r_p_controle, PDO::PARAM_STR);
                        break;
                    case '`r_p_axe1`':
                        $stmt->bindValue($identifier, $this->r_p_axe1, PDO::PARAM_INT);
                        break;
                    case '`r_p_axe2`':
                        $stmt->bindValue($identifier, $this->r_p_axe2, PDO::PARAM_INT);
                        break;
                    case '`r_p_axe3`':
                        $stmt->bindValue($identifier, $this->r_p_axe3, PDO::PARAM_INT);
                        break;
                    case '`r_p_axe4`':
                        $stmt->bindValue($identifier, $this->r_p_axe4, PDO::PARAM_INT);
                        break;
                    case '`r_p_axe5`':
                        $stmt->bindValue($identifier, $this->r_p_axe5, PDO::PARAM_INT);
                        break;
                    case '`r_p_code_comptable`':
                        $stmt->bindValue($identifier, $this->r_p_code_comptable, PDO::PARAM_STR);
                        break;
                    case '`r_p_adf`':
                        $stmt->bindValue($identifier, (int) $this->r_p_adf, PDO::PARAM_INT);
                        break;
                    case '`r_p_commentaires`':
                        $stmt->bindValue($identifier, $this->r_p_commentaires, PDO::PARAM_STR);
                        break;
                    case '`r_p_description_fr`':
                        $stmt->bindValue($identifier, $this->r_p_description_fr, PDO::PARAM_STR);
                        break;
                    case '`r_p_description_en`':
                        $stmt->bindValue($identifier, $this->r_p_description_en, PDO::PARAM_STR);
                        break;
                    case '`r_p_qui_valide`':
                        $stmt->bindValue($identifier, $this->r_p_qui_valide, PDO::PARAM_STR);
                        break;
                    case '`r_p_groupe_validation_id`':
                        $stmt->bindValue($identifier, $this->r_p_groupe_validation_id, PDO::PARAM_INT);
                        break;
                    case '`r_p_couts_estimes_modifiables`':
                        $stmt->bindValue($identifier, (int) $this->r_p_couts_estimes_modifiables, PDO::PARAM_INT);
                        break;
                    case '`r_p_cout_interne`':
                        $stmt->bindValue($identifier, $this->r_p_cout_interne, PDO::PARAM_INT);
                        break;
                    case '`r_p_cout_externe`':
                        $stmt->bindValue($identifier, $this->r_p_cout_externe, PDO::PARAM_INT);
                        break;
                    case '`r_p_cout_total`':
                        $stmt->bindValue($identifier, $this->r_p_cout_total, PDO::PARAM_INT);
                        break;
                    case '`r_p_validation_id`':
                        $stmt->bindValue($identifier, $this->r_p_validation_id, PDO::PARAM_INT);
                        break;
                    case '`r_p_taux_marge_min`':
                        $stmt->bindValue($identifier, $this->r_p_taux_marge_min, PDO::PARAM_INT);
                        break;
                    case '`r_p_prix_vente`':
                        $stmt->bindValue($identifier, $this->r_p_prix_vente, PDO::PARAM_INT);
                        break;
                    case '`r_p_type_frais_id`':
                        $stmt->bindValue($identifier, $this->r_p_type_frais_id, PDO::PARAM_INT);
                        break;
                    case '`actif`':
                        $stmt->bindValue($identifier, (int) $this->actif, PDO::PARAM_INT);
                        break;
                    case '`r_p_tva_id`':
                        $stmt->bindValue($identifier, $this->r_p_tva_id, PDO::PARAM_INT);
                        break;
                    case '`r_p_rfa`':
                        $stmt->bindValue($identifier, (int) $this->r_p_rfa, PDO::PARAM_INT);
                        break;
                    case '`valide_daf`':
                        $stmt->bindValue($identifier, (int) $this->valide_daf, PDO::PARAM_INT);
                        break;
                    case '`r_p_is_maj_from_compiluo`':
                        $stmt->bindValue($identifier, (int) $this->r_p_is_maj_from_compiluo, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`user_create`':
                        $stmt->bindValue($identifier, $this->user_create, PDO::PARAM_INT);
                        break;
                    case '`date_modify`':
                        $stmt->bindValue($identifier, $this->date_modify, PDO::PARAM_STR);
                        break;
                    case '`user_modify`':
                        $stmt->bindValue($identifier, $this->user_modify, PDO::PARAM_INT);
                        break;
                    case '`r_p_is_mandatory`':
                        $stmt->bindValue($identifier, (int) $this->r_p_is_mandatory, PDO::PARAM_INT);
                        break;
                    case '`r_p_is_eligible_for_prime`':
                        $stmt->bindValue($identifier, (int) $this->r_p_is_eligible_for_prime, PDO::PARAM_INT);
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
        $this->setRPrestationId($pk);

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

            if ($this->aGroupValidation !== null) {
                if (!$this->aGroupValidation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGroupValidation->getValidationFailures());
                }
            }

            if ($this->aAxe1 !== null) {
                if (!$this->aAxe1->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAxe1->getValidationFailures());
                }
            }

            if ($this->aAxe2 !== null) {
                if (!$this->aAxe2->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAxe2->getValidationFailures());
                }
            }

            if ($this->aAxe3 !== null) {
                if (!$this->aAxe3->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAxe3->getValidationFailures());
                }
            }

            if ($this->aAxe4 !== null) {
                if (!$this->aAxe4->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAxe4->getValidationFailures());
                }
            }

            if ($this->aAxe5 !== null) {
                if (!$this->aAxe5->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAxe5->getValidationFailures());
                }
            }


            if (($retval = RPrestationsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFacturesPrestationss !== null) {
                    foreach ($this->collFacturesPrestationss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationPrestationss !== null) {
                    foreach ($this->collOperationPrestationss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = RPrestationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRPrestationId();
                break;
            case 1:
                return $this->getRPLibelle();
                break;
            case 2:
                return $this->getRPLibelleEn();
                break;
            case 3:
                return $this->getRPControle();
                break;
            case 4:
                return $this->getRPAxe1();
                break;
            case 5:
                return $this->getRPAxe2();
                break;
            case 6:
                return $this->getRPAxe3();
                break;
            case 7:
                return $this->getRPAxe4();
                break;
            case 8:
                return $this->getRPAxe5();
                break;
            case 9:
                return $this->getRPCodeComptable();
                break;
            case 10:
                return $this->getRPAdf();
                break;
            case 11:
                return $this->getRPCommentaires();
                break;
            case 12:
                return $this->getRPDescriptionFr();
                break;
            case 13:
                return $this->getRPDescriptionEn();
                break;
            case 14:
                return $this->getRPQuiValide();
                break;
            case 15:
                return $this->getRPGroupeValidationId();
                break;
            case 16:
                return $this->getRPCoutsEstimesModifiables();
                break;
            case 17:
                return $this->getRPCoutInterne();
                break;
            case 18:
                return $this->getRPCoutExterne();
                break;
            case 19:
                return $this->getRPCoutTotal();
                break;
            case 20:
                return $this->getRPValidationId();
                break;
            case 21:
                return $this->getRPTauxMargeMin();
                break;
            case 22:
                return $this->getRPPrixVente();
                break;
            case 23:
                return $this->getRPTypeFraisId();
                break;
            case 24:
                return $this->getActif();
                break;
            case 25:
                return $this->getRPTvaId();
                break;
            case 26:
                return $this->getRPRfa();
                break;
            case 27:
                return $this->getValideDaf();
                break;
            case 28:
                return $this->getRPIsMajFromCompiluo();
                break;
            case 29:
                return $this->getDateCreate();
                break;
            case 30:
                return $this->getUserCreate();
                break;
            case 31:
                return $this->getDateModify();
                break;
            case 32:
                return $this->getUserModify();
                break;
            case 33:
                return $this->getRPIsMandatory();
                break;
            case 34:
                return $this->getRPIsEligibleForPrime();
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
        if (isset($alreadyDumpedObjects['RPrestations'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RPrestations'][$this->getPrimaryKey()] = true;
        $keys = RPrestationsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRPrestationId(),
            $keys[1] => $this->getRPLibelle(),
            $keys[2] => $this->getRPLibelleEn(),
            $keys[3] => $this->getRPControle(),
            $keys[4] => $this->getRPAxe1(),
            $keys[5] => $this->getRPAxe2(),
            $keys[6] => $this->getRPAxe3(),
            $keys[7] => $this->getRPAxe4(),
            $keys[8] => $this->getRPAxe5(),
            $keys[9] => $this->getRPCodeComptable(),
            $keys[10] => $this->getRPAdf(),
            $keys[11] => $this->getRPCommentaires(),
            $keys[12] => $this->getRPDescriptionFr(),
            $keys[13] => $this->getRPDescriptionEn(),
            $keys[14] => $this->getRPQuiValide(),
            $keys[15] => $this->getRPGroupeValidationId(),
            $keys[16] => $this->getRPCoutsEstimesModifiables(),
            $keys[17] => $this->getRPCoutInterne(),
            $keys[18] => $this->getRPCoutExterne(),
            $keys[19] => $this->getRPCoutTotal(),
            $keys[20] => $this->getRPValidationId(),
            $keys[21] => $this->getRPTauxMargeMin(),
            $keys[22] => $this->getRPPrixVente(),
            $keys[23] => $this->getRPTypeFraisId(),
            $keys[24] => $this->getActif(),
            $keys[25] => $this->getRPTvaId(),
            $keys[26] => $this->getRPRfa(),
            $keys[27] => $this->getValideDaf(),
            $keys[28] => $this->getRPIsMajFromCompiluo(),
            $keys[29] => $this->getDateCreate(),
            $keys[30] => $this->getUserCreate(),
            $keys[31] => $this->getDateModify(),
            $keys[32] => $this->getUserModify(),
            $keys[33] => $this->getRPIsMandatory(),
            $keys[34] => $this->getRPIsEligibleForPrime(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGroupValidation) {
                $result['GroupValidation'] = $this->aGroupValidation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aAxe1) {
                $result['Axe1'] = $this->aAxe1->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aAxe2) {
                $result['Axe2'] = $this->aAxe2->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aAxe3) {
                $result['Axe3'] = $this->aAxe3->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aAxe4) {
                $result['Axe4'] = $this->aAxe4->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aAxe5) {
                $result['Axe5'] = $this->aAxe5->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collFacturesPrestationss) {
                $result['FacturesPrestationss'] = $this->collFacturesPrestationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationPrestationss) {
                $result['OperationPrestationss'] = $this->collOperationPrestationss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RPrestationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRPrestationId($value);
                break;
            case 1:
                $this->setRPLibelle($value);
                break;
            case 2:
                $this->setRPLibelleEn($value);
                break;
            case 3:
                $this->setRPControle($value);
                break;
            case 4:
                $this->setRPAxe1($value);
                break;
            case 5:
                $this->setRPAxe2($value);
                break;
            case 6:
                $this->setRPAxe3($value);
                break;
            case 7:
                $this->setRPAxe4($value);
                break;
            case 8:
                $this->setRPAxe5($value);
                break;
            case 9:
                $this->setRPCodeComptable($value);
                break;
            case 10:
                $this->setRPAdf($value);
                break;
            case 11:
                $this->setRPCommentaires($value);
                break;
            case 12:
                $this->setRPDescriptionFr($value);
                break;
            case 13:
                $this->setRPDescriptionEn($value);
                break;
            case 14:
                $this->setRPQuiValide($value);
                break;
            case 15:
                $this->setRPGroupeValidationId($value);
                break;
            case 16:
                $this->setRPCoutsEstimesModifiables($value);
                break;
            case 17:
                $this->setRPCoutInterne($value);
                break;
            case 18:
                $this->setRPCoutExterne($value);
                break;
            case 19:
                $this->setRPCoutTotal($value);
                break;
            case 20:
                $this->setRPValidationId($value);
                break;
            case 21:
                $this->setRPTauxMargeMin($value);
                break;
            case 22:
                $this->setRPPrixVente($value);
                break;
            case 23:
                $this->setRPTypeFraisId($value);
                break;
            case 24:
                $this->setActif($value);
                break;
            case 25:
                $this->setRPTvaId($value);
                break;
            case 26:
                $this->setRPRfa($value);
                break;
            case 27:
                $this->setValideDaf($value);
                break;
            case 28:
                $this->setRPIsMajFromCompiluo($value);
                break;
            case 29:
                $this->setDateCreate($value);
                break;
            case 30:
                $this->setUserCreate($value);
                break;
            case 31:
                $this->setDateModify($value);
                break;
            case 32:
                $this->setUserModify($value);
                break;
            case 33:
                $this->setRPIsMandatory($value);
                break;
            case 34:
                $this->setRPIsEligibleForPrime($value);
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
        $keys = RPrestationsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRPrestationId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRPLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRPLibelleEn($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRPControle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRPAxe1($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRPAxe2($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRPAxe3($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRPAxe4($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRPAxe5($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRPCodeComptable($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setRPAdf($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setRPCommentaires($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRPDescriptionFr($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setRPDescriptionEn($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRPQuiValide($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setRPGroupeValidationId($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRPCoutsEstimesModifiables($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setRPCoutInterne($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setRPCoutExterne($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setRPCoutTotal($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setRPValidationId($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setRPTauxMargeMin($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setRPPrixVente($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setRPTypeFraisId($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setActif($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setRPTvaId($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setRPRfa($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setValideDaf($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setRPIsMajFromCompiluo($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDateCreate($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setUserCreate($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDateModify($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setUserModify($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setRPIsMandatory($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setRPIsEligibleForPrime($arr[$keys[34]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RPrestationsPeer::DATABASE_NAME);

        if ($this->isColumnModified(RPrestationsPeer::R_PRESTATION_ID)) $criteria->add(RPrestationsPeer::R_PRESTATION_ID, $this->r_prestation_id);
        if ($this->isColumnModified(RPrestationsPeer::R_P_LIBELLE)) $criteria->add(RPrestationsPeer::R_P_LIBELLE, $this->r_p_libelle);
        if ($this->isColumnModified(RPrestationsPeer::R_P_LIBELLE_EN)) $criteria->add(RPrestationsPeer::R_P_LIBELLE_EN, $this->r_p_libelle_en);
        if ($this->isColumnModified(RPrestationsPeer::R_P_CONTROLE)) $criteria->add(RPrestationsPeer::R_P_CONTROLE, $this->r_p_controle);
        if ($this->isColumnModified(RPrestationsPeer::R_P_AXE1)) $criteria->add(RPrestationsPeer::R_P_AXE1, $this->r_p_axe1);
        if ($this->isColumnModified(RPrestationsPeer::R_P_AXE2)) $criteria->add(RPrestationsPeer::R_P_AXE2, $this->r_p_axe2);
        if ($this->isColumnModified(RPrestationsPeer::R_P_AXE3)) $criteria->add(RPrestationsPeer::R_P_AXE3, $this->r_p_axe3);
        if ($this->isColumnModified(RPrestationsPeer::R_P_AXE4)) $criteria->add(RPrestationsPeer::R_P_AXE4, $this->r_p_axe4);
        if ($this->isColumnModified(RPrestationsPeer::R_P_AXE5)) $criteria->add(RPrestationsPeer::R_P_AXE5, $this->r_p_axe5);
        if ($this->isColumnModified(RPrestationsPeer::R_P_CODE_COMPTABLE)) $criteria->add(RPrestationsPeer::R_P_CODE_COMPTABLE, $this->r_p_code_comptable);
        if ($this->isColumnModified(RPrestationsPeer::R_P_ADF)) $criteria->add(RPrestationsPeer::R_P_ADF, $this->r_p_adf);
        if ($this->isColumnModified(RPrestationsPeer::R_P_COMMENTAIRES)) $criteria->add(RPrestationsPeer::R_P_COMMENTAIRES, $this->r_p_commentaires);
        if ($this->isColumnModified(RPrestationsPeer::R_P_DESCRIPTION_FR)) $criteria->add(RPrestationsPeer::R_P_DESCRIPTION_FR, $this->r_p_description_fr);
        if ($this->isColumnModified(RPrestationsPeer::R_P_DESCRIPTION_EN)) $criteria->add(RPrestationsPeer::R_P_DESCRIPTION_EN, $this->r_p_description_en);
        if ($this->isColumnModified(RPrestationsPeer::R_P_QUI_VALIDE)) $criteria->add(RPrestationsPeer::R_P_QUI_VALIDE, $this->r_p_qui_valide);
        if ($this->isColumnModified(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID)) $criteria->add(RPrestationsPeer::R_P_GROUPE_VALIDATION_ID, $this->r_p_groupe_validation_id);
        if ($this->isColumnModified(RPrestationsPeer::R_P_COUTS_ESTIMES_MODIFIABLES)) $criteria->add(RPrestationsPeer::R_P_COUTS_ESTIMES_MODIFIABLES, $this->r_p_couts_estimes_modifiables);
        if ($this->isColumnModified(RPrestationsPeer::R_P_COUT_INTERNE)) $criteria->add(RPrestationsPeer::R_P_COUT_INTERNE, $this->r_p_cout_interne);
        if ($this->isColumnModified(RPrestationsPeer::R_P_COUT_EXTERNE)) $criteria->add(RPrestationsPeer::R_P_COUT_EXTERNE, $this->r_p_cout_externe);
        if ($this->isColumnModified(RPrestationsPeer::R_P_COUT_TOTAL)) $criteria->add(RPrestationsPeer::R_P_COUT_TOTAL, $this->r_p_cout_total);
        if ($this->isColumnModified(RPrestationsPeer::R_P_VALIDATION_ID)) $criteria->add(RPrestationsPeer::R_P_VALIDATION_ID, $this->r_p_validation_id);
        if ($this->isColumnModified(RPrestationsPeer::R_P_TAUX_MARGE_MIN)) $criteria->add(RPrestationsPeer::R_P_TAUX_MARGE_MIN, $this->r_p_taux_marge_min);
        if ($this->isColumnModified(RPrestationsPeer::R_P_PRIX_VENTE)) $criteria->add(RPrestationsPeer::R_P_PRIX_VENTE, $this->r_p_prix_vente);
        if ($this->isColumnModified(RPrestationsPeer::R_P_TYPE_FRAIS_ID)) $criteria->add(RPrestationsPeer::R_P_TYPE_FRAIS_ID, $this->r_p_type_frais_id);
        if ($this->isColumnModified(RPrestationsPeer::ACTIF)) $criteria->add(RPrestationsPeer::ACTIF, $this->actif);
        if ($this->isColumnModified(RPrestationsPeer::R_P_TVA_ID)) $criteria->add(RPrestationsPeer::R_P_TVA_ID, $this->r_p_tva_id);
        if ($this->isColumnModified(RPrestationsPeer::R_P_RFA)) $criteria->add(RPrestationsPeer::R_P_RFA, $this->r_p_rfa);
        if ($this->isColumnModified(RPrestationsPeer::VALIDE_DAF)) $criteria->add(RPrestationsPeer::VALIDE_DAF, $this->valide_daf);
        if ($this->isColumnModified(RPrestationsPeer::R_P_IS_MAJ_FROM_COMPILUO)) $criteria->add(RPrestationsPeer::R_P_IS_MAJ_FROM_COMPILUO, $this->r_p_is_maj_from_compiluo);
        if ($this->isColumnModified(RPrestationsPeer::DATE_CREATE)) $criteria->add(RPrestationsPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(RPrestationsPeer::USER_CREATE)) $criteria->add(RPrestationsPeer::USER_CREATE, $this->user_create);
        if ($this->isColumnModified(RPrestationsPeer::DATE_MODIFY)) $criteria->add(RPrestationsPeer::DATE_MODIFY, $this->date_modify);
        if ($this->isColumnModified(RPrestationsPeer::USER_MODIFY)) $criteria->add(RPrestationsPeer::USER_MODIFY, $this->user_modify);
        if ($this->isColumnModified(RPrestationsPeer::R_P_IS_MANDATORY)) $criteria->add(RPrestationsPeer::R_P_IS_MANDATORY, $this->r_p_is_mandatory);
        if ($this->isColumnModified(RPrestationsPeer::R_P_IS_ELIGIBLE_FOR_PRIME)) $criteria->add(RPrestationsPeer::R_P_IS_ELIGIBLE_FOR_PRIME, $this->r_p_is_eligible_for_prime);

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
        $criteria = new Criteria(RPrestationsPeer::DATABASE_NAME);
        $criteria->add(RPrestationsPeer::R_PRESTATION_ID, $this->r_prestation_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRPrestationId();
    }

    /**
     * Generic method to set the primary key (r_prestation_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRPrestationId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRPrestationId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of RPrestations (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRPLibelle($this->getRPLibelle());
        $copyObj->setRPLibelleEn($this->getRPLibelleEn());
        $copyObj->setRPControle($this->getRPControle());
        $copyObj->setRPAxe1($this->getRPAxe1());
        $copyObj->setRPAxe2($this->getRPAxe2());
        $copyObj->setRPAxe3($this->getRPAxe3());
        $copyObj->setRPAxe4($this->getRPAxe4());
        $copyObj->setRPAxe5($this->getRPAxe5());
        $copyObj->setRPCodeComptable($this->getRPCodeComptable());
        $copyObj->setRPAdf($this->getRPAdf());
        $copyObj->setRPCommentaires($this->getRPCommentaires());
        $copyObj->setRPDescriptionFr($this->getRPDescriptionFr());
        $copyObj->setRPDescriptionEn($this->getRPDescriptionEn());
        $copyObj->setRPQuiValide($this->getRPQuiValide());
        $copyObj->setRPGroupeValidationId($this->getRPGroupeValidationId());
        $copyObj->setRPCoutsEstimesModifiables($this->getRPCoutsEstimesModifiables());
        $copyObj->setRPCoutInterne($this->getRPCoutInterne());
        $copyObj->setRPCoutExterne($this->getRPCoutExterne());
        $copyObj->setRPCoutTotal($this->getRPCoutTotal());
        $copyObj->setRPValidationId($this->getRPValidationId());
        $copyObj->setRPTauxMargeMin($this->getRPTauxMargeMin());
        $copyObj->setRPPrixVente($this->getRPPrixVente());
        $copyObj->setRPTypeFraisId($this->getRPTypeFraisId());
        $copyObj->setActif($this->getActif());
        $copyObj->setRPTvaId($this->getRPTvaId());
        $copyObj->setRPRfa($this->getRPRfa());
        $copyObj->setValideDaf($this->getValideDaf());
        $copyObj->setRPIsMajFromCompiluo($this->getRPIsMajFromCompiluo());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setUserCreate($this->getUserCreate());
        $copyObj->setDateModify($this->getDateModify());
        $copyObj->setUserModify($this->getUserModify());
        $copyObj->setRPIsMandatory($this->getRPIsMandatory());
        $copyObj->setRPIsEligibleForPrime($this->getRPIsEligibleForPrime());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getFacturesPrestationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFacturesPrestations($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationPrestationss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationPrestations($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRPrestationId(NULL); // this is a auto-increment column, so set to default value
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
     * @return RPrestations Clone of current object.
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
     * @return RPrestationsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RPrestationsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a AclGroups object.
     *
     * @param                  AclGroups $v
     * @return RPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGroupValidation(AclGroups $v = null)
    {
        if ($v === null) {
            $this->setRPGroupeValidationId(NULL);
        } else {
            $this->setRPGroupeValidationId($v->getGroupId());
        }

        $this->aGroupValidation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the AclGroups object, it will not be re-added.
        if ($v !== null) {
            $v->addRPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated AclGroups object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return AclGroups The associated AclGroups object.
     * @throws PropelException
     */
    public function getGroupValidation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGroupValidation === null && ($this->r_p_groupe_validation_id !== null) && $doQuery) {
            $this->aGroupValidation = AclGroupsQuery::create()->findPk($this->r_p_groupe_validation_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGroupValidation->addRPrestationss($this);
             */
        }

        return $this->aGroupValidation;
    }

    /**
     * Declares an association between this object and a RPAxe1 object.
     *
     * @param                  RPAxe1 $v
     * @return RPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAxe1(RPAxe1 $v = null)
    {
        if ($v === null) {
            $this->setRPAxe1(NULL);
        } else {
            $this->setRPAxe1($v->getRPAxe1Id());
        }

        $this->aAxe1 = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RPAxe1 object, it will not be re-added.
        if ($v !== null) {
            $v->addRPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated RPAxe1 object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RPAxe1 The associated RPAxe1 object.
     * @throws PropelException
     */
    public function getAxe1(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAxe1 === null && ($this->r_p_axe1 !== null) && $doQuery) {
            $this->aAxe1 = RPAxe1Query::create()->findPk($this->r_p_axe1, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAxe1->addRPrestationss($this);
             */
        }

        return $this->aAxe1;
    }

    /**
     * Declares an association between this object and a RPAxe2 object.
     *
     * @param                  RPAxe2 $v
     * @return RPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAxe2(RPAxe2 $v = null)
    {
        if ($v === null) {
            $this->setRPAxe2(NULL);
        } else {
            $this->setRPAxe2($v->getRPAxe2Id());
        }

        $this->aAxe2 = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RPAxe2 object, it will not be re-added.
        if ($v !== null) {
            $v->addRPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated RPAxe2 object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RPAxe2 The associated RPAxe2 object.
     * @throws PropelException
     */
    public function getAxe2(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAxe2 === null && ($this->r_p_axe2 !== null) && $doQuery) {
            $this->aAxe2 = RPAxe2Query::create()->findPk($this->r_p_axe2, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAxe2->addRPrestationss($this);
             */
        }

        return $this->aAxe2;
    }

    /**
     * Declares an association between this object and a RPAxe3 object.
     *
     * @param                  RPAxe3 $v
     * @return RPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAxe3(RPAxe3 $v = null)
    {
        if ($v === null) {
            $this->setRPAxe3(NULL);
        } else {
            $this->setRPAxe3($v->getRPAxe3Id());
        }

        $this->aAxe3 = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RPAxe3 object, it will not be re-added.
        if ($v !== null) {
            $v->addRPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated RPAxe3 object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RPAxe3 The associated RPAxe3 object.
     * @throws PropelException
     */
    public function getAxe3(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAxe3 === null && ($this->r_p_axe3 !== null) && $doQuery) {
            $this->aAxe3 = RPAxe3Query::create()->findPk($this->r_p_axe3, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAxe3->addRPrestationss($this);
             */
        }

        return $this->aAxe3;
    }

    /**
     * Declares an association between this object and a RPAxe4 object.
     *
     * @param                  RPAxe4 $v
     * @return RPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAxe4(RPAxe4 $v = null)
    {
        if ($v === null) {
            $this->setRPAxe4(NULL);
        } else {
            $this->setRPAxe4($v->getRPAxe4Id());
        }

        $this->aAxe4 = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RPAxe4 object, it will not be re-added.
        if ($v !== null) {
            $v->addRPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated RPAxe4 object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RPAxe4 The associated RPAxe4 object.
     * @throws PropelException
     */
    public function getAxe4(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAxe4 === null && ($this->r_p_axe4 !== null) && $doQuery) {
            $this->aAxe4 = RPAxe4Query::create()->findPk($this->r_p_axe4, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAxe4->addRPrestationss($this);
             */
        }

        return $this->aAxe4;
    }

    /**
     * Declares an association between this object and a RPAxe5 object.
     *
     * @param                  RPAxe5 $v
     * @return RPrestations The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAxe5(RPAxe5 $v = null)
    {
        if ($v === null) {
            $this->setRPAxe5(NULL);
        } else {
            $this->setRPAxe5($v->getRPAxe5Id());
        }

        $this->aAxe5 = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RPAxe5 object, it will not be re-added.
        if ($v !== null) {
            $v->addRPrestations($this);
        }


        return $this;
    }


    /**
     * Get the associated RPAxe5 object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RPAxe5 The associated RPAxe5 object.
     * @throws PropelException
     */
    public function getAxe5(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAxe5 === null && ($this->r_p_axe5 !== null) && $doQuery) {
            $this->aAxe5 = RPAxe5Query::create()->findPk($this->r_p_axe5, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAxe5->addRPrestationss($this);
             */
        }

        return $this->aAxe5;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('FacturesPrestations' == $relationName) {
            $this->initFacturesPrestationss();
        }
        if ('OperationPrestations' == $relationName) {
            $this->initOperationPrestationss();
        }
    }

    /**
     * Clears out the collFacturesPrestationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RPrestations The current object (for fluent API support)
     * @see        addFacturesPrestationss()
     */
    public function clearFacturesPrestationss()
    {
        $this->collFacturesPrestationss = null; // important to set this to null since that means it is uninitialized
        $this->collFacturesPrestationssPartial = null;

        return $this;
    }

    /**
     * reset is the collFacturesPrestationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialFacturesPrestationss($v = true)
    {
        $this->collFacturesPrestationssPartial = $v;
    }

    /**
     * Initializes the collFacturesPrestationss collection.
     *
     * By default this just sets the collFacturesPrestationss collection to an empty array (like clearcollFacturesPrestationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFacturesPrestationss($overrideExisting = true)
    {
        if (null !== $this->collFacturesPrestationss && !$overrideExisting) {
            return;
        }
        $this->collFacturesPrestationss = new PropelObjectCollection();
        $this->collFacturesPrestationss->setModel('FacturesPrestations');
    }

    /**
     * Gets an array of FacturesPrestations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RPrestations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|FacturesPrestations[] List of FacturesPrestations objects
     * @throws PropelException
     */
    public function getFacturesPrestationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFacturesPrestationssPartial && !$this->isNew();
        if (null === $this->collFacturesPrestationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFacturesPrestationss) {
                // return empty collection
                $this->initFacturesPrestationss();
            } else {
                $collFacturesPrestationss = FacturesPrestationsQuery::create(null, $criteria)
                    ->filterByRPrestations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFacturesPrestationssPartial && count($collFacturesPrestationss)) {
                      $this->initFacturesPrestationss(false);

                      foreach ($collFacturesPrestationss as $obj) {
                        if (false == $this->collFacturesPrestationss->contains($obj)) {
                          $this->collFacturesPrestationss->append($obj);
                        }
                      }

                      $this->collFacturesPrestationssPartial = true;
                    }

                    $collFacturesPrestationss->getInternalIterator()->rewind();

                    return $collFacturesPrestationss;
                }

                if ($partial && $this->collFacturesPrestationss) {
                    foreach ($this->collFacturesPrestationss as $obj) {
                        if ($obj->isNew()) {
                            $collFacturesPrestationss[] = $obj;
                        }
                    }
                }

                $this->collFacturesPrestationss = $collFacturesPrestationss;
                $this->collFacturesPrestationssPartial = false;
            }
        }

        return $this->collFacturesPrestationss;
    }

    /**
     * Sets a collection of FacturesPrestations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $facturesPrestationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RPrestations The current object (for fluent API support)
     */
    public function setFacturesPrestationss(PropelCollection $facturesPrestationss, PropelPDO $con = null)
    {
        $facturesPrestationssToDelete = $this->getFacturesPrestationss(new Criteria(), $con)->diff($facturesPrestationss);


        $this->facturesPrestationssScheduledForDeletion = $facturesPrestationssToDelete;

        foreach ($facturesPrestationssToDelete as $facturesPrestationsRemoved) {
            $facturesPrestationsRemoved->setRPrestations(null);
        }

        $this->collFacturesPrestationss = null;
        foreach ($facturesPrestationss as $facturesPrestations) {
            $this->addFacturesPrestations($facturesPrestations);
        }

        $this->collFacturesPrestationss = $facturesPrestationss;
        $this->collFacturesPrestationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related FacturesPrestations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related FacturesPrestations objects.
     * @throws PropelException
     */
    public function countFacturesPrestationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFacturesPrestationssPartial && !$this->isNew();
        if (null === $this->collFacturesPrestationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFacturesPrestationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFacturesPrestationss());
            }
            $query = FacturesPrestationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRPrestations($this)
                ->count($con);
        }

        return count($this->collFacturesPrestationss);
    }

    /**
     * Method called to associate a FacturesPrestations object to this object
     * through the FacturesPrestations foreign key attribute.
     *
     * @param    FacturesPrestations $l FacturesPrestations
     * @return RPrestations The current object (for fluent API support)
     */
    public function addFacturesPrestations(FacturesPrestations $l)
    {
        if ($this->collFacturesPrestationss === null) {
            $this->initFacturesPrestationss();
            $this->collFacturesPrestationssPartial = true;
        }

        if (!in_array($l, $this->collFacturesPrestationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFacturesPrestations($l);

            if ($this->facturesPrestationssScheduledForDeletion and $this->facturesPrestationssScheduledForDeletion->contains($l)) {
                $this->facturesPrestationssScheduledForDeletion->remove($this->facturesPrestationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	FacturesPrestations $facturesPrestations The facturesPrestations object to add.
     */
    protected function doAddFacturesPrestations($facturesPrestations)
    {
        $this->collFacturesPrestationss[]= $facturesPrestations;
        $facturesPrestations->setRPrestations($this);
    }

    /**
     * @param	FacturesPrestations $facturesPrestations The facturesPrestations object to remove.
     * @return RPrestations The current object (for fluent API support)
     */
    public function removeFacturesPrestations($facturesPrestations)
    {
        if ($this->getFacturesPrestationss()->contains($facturesPrestations)) {
            $this->collFacturesPrestationss->remove($this->collFacturesPrestationss->search($facturesPrestations));
            if (null === $this->facturesPrestationssScheduledForDeletion) {
                $this->facturesPrestationssScheduledForDeletion = clone $this->collFacturesPrestationss;
                $this->facturesPrestationssScheduledForDeletion->clear();
            }
            $this->facturesPrestationssScheduledForDeletion[]= clone $facturesPrestations;
            $facturesPrestations->setRPrestations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RPrestations is new, it will return
     * an empty collection; or if this RPrestations has previously
     * been saved, it will retrieve related FacturesPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPrestations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FacturesPrestations[] List of FacturesPrestations objects
     */
    public function getFacturesPrestationssJoinFacturesRubriques($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesPrestationsQuery::create(null, $criteria);
        $query->joinWith('FacturesRubriques', $join_behavior);

        return $this->getFacturesPrestationss($query, $con);
    }

    /**
     * Clears out the collOperationPrestationss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RPrestations The current object (for fluent API support)
     * @see        addOperationPrestationss()
     */
    public function clearOperationPrestationss()
    {
        $this->collOperationPrestationss = null; // important to set this to null since that means it is uninitialized
        $this->collOperationPrestationssPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationPrestationss collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationPrestationss($v = true)
    {
        $this->collOperationPrestationssPartial = $v;
    }

    /**
     * Initializes the collOperationPrestationss collection.
     *
     * By default this just sets the collOperationPrestationss collection to an empty array (like clearcollOperationPrestationss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationPrestationss($overrideExisting = true)
    {
        if (null !== $this->collOperationPrestationss && !$overrideExisting) {
            return;
        }
        $this->collOperationPrestationss = new PropelObjectCollection();
        $this->collOperationPrestationss->setModel('OperationPrestations');
    }

    /**
     * Gets an array of OperationPrestations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RPrestations is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     * @throws PropelException
     */
    public function getOperationPrestationss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationPrestationssPartial && !$this->isNew();
        if (null === $this->collOperationPrestationss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationPrestationss) {
                // return empty collection
                $this->initOperationPrestationss();
            } else {
                $collOperationPrestationss = OperationPrestationsQuery::create(null, $criteria)
                    ->filterByRPrestations($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationPrestationssPartial && count($collOperationPrestationss)) {
                      $this->initOperationPrestationss(false);

                      foreach ($collOperationPrestationss as $obj) {
                        if (false == $this->collOperationPrestationss->contains($obj)) {
                          $this->collOperationPrestationss->append($obj);
                        }
                      }

                      $this->collOperationPrestationssPartial = true;
                    }

                    $collOperationPrestationss->getInternalIterator()->rewind();

                    return $collOperationPrestationss;
                }

                if ($partial && $this->collOperationPrestationss) {
                    foreach ($this->collOperationPrestationss as $obj) {
                        if ($obj->isNew()) {
                            $collOperationPrestationss[] = $obj;
                        }
                    }
                }

                $this->collOperationPrestationss = $collOperationPrestationss;
                $this->collOperationPrestationssPartial = false;
            }
        }

        return $this->collOperationPrestationss;
    }

    /**
     * Sets a collection of OperationPrestations objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationPrestationss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RPrestations The current object (for fluent API support)
     */
    public function setOperationPrestationss(PropelCollection $operationPrestationss, PropelPDO $con = null)
    {
        $operationPrestationssToDelete = $this->getOperationPrestationss(new Criteria(), $con)->diff($operationPrestationss);


        $this->operationPrestationssScheduledForDeletion = $operationPrestationssToDelete;

        foreach ($operationPrestationssToDelete as $operationPrestationsRemoved) {
            $operationPrestationsRemoved->setRPrestations(null);
        }

        $this->collOperationPrestationss = null;
        foreach ($operationPrestationss as $operationPrestations) {
            $this->addOperationPrestations($operationPrestations);
        }

        $this->collOperationPrestationss = $operationPrestationss;
        $this->collOperationPrestationssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OperationPrestations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OperationPrestations objects.
     * @throws PropelException
     */
    public function countOperationPrestationss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationPrestationssPartial && !$this->isNew();
        if (null === $this->collOperationPrestationss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationPrestationss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationPrestationss());
            }
            $query = OperationPrestationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRPrestations($this)
                ->count($con);
        }

        return count($this->collOperationPrestationss);
    }

    /**
     * Method called to associate a OperationPrestations object to this object
     * through the OperationPrestations foreign key attribute.
     *
     * @param    OperationPrestations $l OperationPrestations
     * @return RPrestations The current object (for fluent API support)
     */
    public function addOperationPrestations(OperationPrestations $l)
    {
        if ($this->collOperationPrestationss === null) {
            $this->initOperationPrestationss();
            $this->collOperationPrestationssPartial = true;
        }

        if (!in_array($l, $this->collOperationPrestationss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationPrestations($l);

            if ($this->operationPrestationssScheduledForDeletion and $this->operationPrestationssScheduledForDeletion->contains($l)) {
                $this->operationPrestationssScheduledForDeletion->remove($this->operationPrestationssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationPrestations $operationPrestations The operationPrestations object to add.
     */
    protected function doAddOperationPrestations($operationPrestations)
    {
        $this->collOperationPrestationss[]= $operationPrestations;
        $operationPrestations->setRPrestations($this);
    }

    /**
     * @param	OperationPrestations $operationPrestations The operationPrestations object to remove.
     * @return RPrestations The current object (for fluent API support)
     */
    public function removeOperationPrestations($operationPrestations)
    {
        if ($this->getOperationPrestationss()->contains($operationPrestations)) {
            $this->collOperationPrestationss->remove($this->collOperationPrestationss->search($operationPrestations));
            if (null === $this->operationPrestationssScheduledForDeletion) {
                $this->operationPrestationssScheduledForDeletion = clone $this->collOperationPrestationss;
                $this->operationPrestationssScheduledForDeletion->clear();
            }
            $this->operationPrestationssScheduledForDeletion[]= $operationPrestations;
            $operationPrestations->setRPrestations(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RPrestations is new, it will return
     * an empty collection; or if this RPrestations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPrestations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationScenarii($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationScenarii', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RPrestations is new, it will return
     * an empty collection; or if this RPrestations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPrestations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationRubriques($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationRubriques', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RPrestations is new, it will return
     * an empty collection; or if this RPrestations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPrestations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RPrestations is new, it will return
     * an empty collection; or if this RPrestations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPrestations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinOperationPrimes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('OperationPrimes', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RPrestations is new, it will return
     * an empty collection; or if this RPrestations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPrestations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinHistoCouts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('HistoCouts', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this RPrestations is new, it will return
     * an empty collection; or if this RPrestations has previously
     * been saved, it will retrieve related OperationPrestationss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in RPrestations.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OperationPrestations[] List of OperationPrestations objects
     */
    public function getOperationPrestationssJoinUsers($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationPrestationsQuery::create(null, $criteria);
        $query->joinWith('Users', $join_behavior);

        return $this->getOperationPrestationss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->r_prestation_id = null;
        $this->r_p_libelle = null;
        $this->r_p_libelle_en = null;
        $this->r_p_controle = null;
        $this->r_p_axe1 = null;
        $this->r_p_axe2 = null;
        $this->r_p_axe3 = null;
        $this->r_p_axe4 = null;
        $this->r_p_axe5 = null;
        $this->r_p_code_comptable = null;
        $this->r_p_adf = null;
        $this->r_p_commentaires = null;
        $this->r_p_description_fr = null;
        $this->r_p_description_en = null;
        $this->r_p_qui_valide = null;
        $this->r_p_groupe_validation_id = null;
        $this->r_p_couts_estimes_modifiables = null;
        $this->r_p_cout_interne = null;
        $this->r_p_cout_externe = null;
        $this->r_p_cout_total = null;
        $this->r_p_validation_id = null;
        $this->r_p_taux_marge_min = null;
        $this->r_p_prix_vente = null;
        $this->r_p_type_frais_id = null;
        $this->actif = null;
        $this->r_p_tva_id = null;
        $this->r_p_rfa = null;
        $this->valide_daf = null;
        $this->r_p_is_maj_from_compiluo = null;
        $this->date_create = null;
        $this->user_create = null;
        $this->date_modify = null;
        $this->user_modify = null;
        $this->r_p_is_mandatory = null;
        $this->r_p_is_eligible_for_prime = null;
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
            if ($this->collFacturesPrestationss) {
                foreach ($this->collFacturesPrestationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationPrestationss) {
                foreach ($this->collOperationPrestationss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aGroupValidation instanceof Persistent) {
              $this->aGroupValidation->clearAllReferences($deep);
            }
            if ($this->aAxe1 instanceof Persistent) {
              $this->aAxe1->clearAllReferences($deep);
            }
            if ($this->aAxe2 instanceof Persistent) {
              $this->aAxe2->clearAllReferences($deep);
            }
            if ($this->aAxe3 instanceof Persistent) {
              $this->aAxe3->clearAllReferences($deep);
            }
            if ($this->aAxe4 instanceof Persistent) {
              $this->aAxe4->clearAllReferences($deep);
            }
            if ($this->aAxe5 instanceof Persistent) {
              $this->aAxe5->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFacturesPrestationss instanceof PropelCollection) {
            $this->collFacturesPrestationss->clearIterator();
        }
        $this->collFacturesPrestationss = null;
        if ($this->collOperationPrestationss instanceof PropelCollection) {
            $this->collOperationPrestationss->clearIterator();
        }
        $this->collOperationPrestationss = null;
        $this->aGroupValidation = null;
        $this->aAxe1 = null;
        $this->aAxe2 = null;
        $this->aAxe3 = null;
        $this->aAxe4 = null;
        $this->aAxe5 = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RPrestationsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseRPrestationsPeer::getConnection();
            }
}
