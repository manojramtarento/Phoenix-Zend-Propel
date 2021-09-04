<?php


/**
 * Base class that represents a row from the 'plan_facturation_details' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BasePlanFacturationDetails extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PlanFacturationDetailsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PlanFacturationDetailsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the pfd_id field.
     * @var        int
     */
    protected $pfd_id;

    /**
     * The value for the op_id field.
     * @var        int
     */
    protected $op_id;

    /**
     * The value for the pfd_type_fact_id field.
     * @var        int
     */
    protected $pfd_type_fact_id;

    /**
     * The value for the pfd_date_planif field.
     * @var        string
     */
    protected $pfd_date_planif;

    /**
     * The value for the pfd_taux_adf field.
     * @var        int
     */
    protected $pfd_taux_adf;

    /**
     * The value for the pfd_taux_partiel field.
     * @var        int
     */
    protected $pfd_taux_partiel;

    /**
     * The value for the pfd_id_to_cancel field.
     * @var        int
     */
    protected $pfd_id_to_cancel;

    /**
     * The value for the pfd_fact_annul field.
     * @var        int
     */
    protected $pfd_fact_annul;

    /**
     * The value for the pfd_fact_annul_motif_id field.
     * @var        int
     */
    protected $pfd_fact_annul_motif_id;

    /**
     * The value for the pfd_fact_annul_autre_motif field.
     * @var        string
     */
    protected $pfd_fact_annul_autre_motif;

    /**
     * The value for the pfd_fact_id field.
     * @var        int
     */
    protected $pfd_fact_id;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * The value for the date_modify field.
     * @var        string
     */
    protected $date_modify;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the user_modify field.
     * @var        int
     */
    protected $user_modify;

    /**
     * The value for the pfd_num_cmd field.
     * @var        string
     */
    protected $pfd_num_cmd;

    /**
     * @var        Operations
     */
    protected $aOperations;

    /**
     * @var        RFactureTypes
     */
    protected $aRFactureTypes;

    /**
     * @var        Factures
     */
    protected $aFactureToCancel;

    /**
     * @var        PlanFacturationDetails
     */
    protected $aPlanFacturationDetailToCancel;

    /**
     * @var        Factures
     */
    protected $aFactureGenerated;

    /**
     * @var        RFactureAnnulationMotifs
     */
    protected $aInvoiceCancellationMotive;

    /**
     * @var        PropelObjectCollection|PlanFacturationDetails[] Collection to store aggregation of PlanFacturationDetails objects.
     */
    protected $collPlanFacturationDetailssRelatedByPfdId;
    protected $collPlanFacturationDetailssRelatedByPfdIdPartial;

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
    protected $planFacturationDetailssRelatedByPfdIdScheduledForDeletion = null;

    /**
     * Get the [pfd_id] column value.
     *
     * @return int
     */
    public function getPfdId()
    {

        return $this->pfd_id;
    }

    /**
     * Get the [op_id] column value.
     *
     * @return int
     */
    public function getOpId()
    {

        return $this->op_id;
    }

    /**
     * Get the [pfd_type_fact_id] column value.
     *
     * @return int
     */
    public function getPfdTypeFactId()
    {

        return $this->pfd_type_fact_id;
    }

    /**
     * Get the [optionally formatted] temporal [pfd_date_planif] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPfdDatePlanif($format = 'Y-m-d H:i:s')
    {
        if ($this->pfd_date_planif === null) {
            return null;
        }

        if ($this->pfd_date_planif === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pfd_date_planif);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pfd_date_planif, true), $x);
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
     * Get the [pfd_taux_adf] column value.
     *
     * @return int
     */
    public function getPfdTauxAdf()
    {

        return $this->pfd_taux_adf;
    }

    /**
     * Get the [pfd_taux_partiel] column value.
     *
     * @return int
     */
    public function getPfdTauxPartiel()
    {

        return $this->pfd_taux_partiel;
    }

    /**
     * Get the [pfd_id_to_cancel] column value.
     *
     * @return int
     */
    public function getPfdIdToCancel()
    {

        return $this->pfd_id_to_cancel;
    }

    /**
     * Get the [pfd_fact_annul] column value.
     *
     * @return int
     */
    public function getPfdFactAnnul()
    {

        return $this->pfd_fact_annul;
    }

    /**
     * Get the [pfd_fact_annul_motif_id] column value.
     *
     * @return int
     */
    public function getPfdFactAnnulMotifId()
    {

        return $this->pfd_fact_annul_motif_id;
    }

    /**
     * Get the [pfd_fact_annul_autre_motif] column value.
     *
     * @return string
     */
    public function getPfdFactAnnulAutreMotif()
    {

        return $this->pfd_fact_annul_autre_motif;
    }

    /**
     * Get the [pfd_fact_id] column value.
     *
     * @return int
     */
    public function getPfdFactId()
    {

        return $this->pfd_fact_id;
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
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
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
     * Get the [pfd_num_cmd] column value.
     *
     * @return string
     */
    public function getPfdNumCmd()
    {

        return $this->pfd_num_cmd;
    }

    /**
     * Set the value of [pfd_id] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->pfd_id !== $v) {
                    $this->pfd_id = $v;
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_ID;
                }


        return $this;
    } // setPfdId()

    /**
     * Set the value of [op_id] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setOpId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->op_id !== $v) {
                    $this->op_id = $v;
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::OP_ID;
                }

        if ($this->aOperations !== null && $this->aOperations->getOpId() !== $v) {
            $this->aOperations = null;
        }


        return $this;
    } // setOpId()

    /**
     * Set the value of [pfd_type_fact_id] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdTypeFactId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->pfd_type_fact_id !== $v) {
                    $this->pfd_type_fact_id = $v;
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID;
                }

        if ($this->aRFactureTypes !== null && $this->aRFactureTypes->getRFactTypeId() !== $v) {
            $this->aRFactureTypes = null;
        }


        return $this;
    } // setPfdTypeFactId()

    /**
     * Sets the value of [pfd_date_planif] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdDatePlanif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pfd_date_planif !== null || $dt !== null) {
            $currentDateAsString = ($this->pfd_date_planif !== null && $tmpDt = new DateTime($this->pfd_date_planif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pfd_date_planif = $newDateAsString;
                $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_DATE_PLANIF;
            }
        } // if either are not null


        return $this;
    } // setPfdDatePlanif()

    /**
     * Set the value of [pfd_taux_adf] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdTauxAdf($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->pfd_taux_adf !== $v) {
                    $this->pfd_taux_adf = $v;
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_TAUX_ADF;
                }


        return $this;
    } // setPfdTauxAdf()

    /**
     * Set the value of [pfd_taux_partiel] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdTauxPartiel($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->pfd_taux_partiel !== $v) {
                    $this->pfd_taux_partiel = $v;
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL;
                }


        return $this;
    } // setPfdTauxPartiel()

    /**
     * Set the value of [pfd_id_to_cancel] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdIdToCancel($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->pfd_id_to_cancel !== $v) {
                    $this->pfd_id_to_cancel = $v;
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL;
                }

        if ($this->aPlanFacturationDetailToCancel !== null && $this->aPlanFacturationDetailToCancel->getPfdId() !== $v) {
            $this->aPlanFacturationDetailToCancel = null;
        }


        return $this;
    } // setPfdIdToCancel()

    /**
     * Set the value of [pfd_fact_annul] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdFactAnnul($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->pfd_fact_annul !== $v) {
                    $this->pfd_fact_annul = $v;
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_FACT_ANNUL;
                }

        if ($this->aFactureToCancel !== null && $this->aFactureToCancel->getFactId() !== $v) {
            $this->aFactureToCancel = null;
        }


        return $this;
    } // setPfdFactAnnul()

    /**
     * Set the value of [pfd_fact_annul_motif_id] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdFactAnnulMotifId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->pfd_fact_annul_motif_id !== $v) {
                    $this->pfd_fact_annul_motif_id = $v;
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID;
                }

        if ($this->aInvoiceCancellationMotive !== null && $this->aInvoiceCancellationMotive->getRFactureAnnulationMotifsMotifId() !== $v) {
            $this->aInvoiceCancellationMotive = null;
        }


        return $this;
    } // setPfdFactAnnulMotifId()

    /**
     * Set the value of [pfd_fact_annul_autre_motif] column.
     *
     * @param  string $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdFactAnnulAutreMotif($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pfd_fact_annul_autre_motif !== $v) {
            $this->pfd_fact_annul_autre_motif = $v;
            $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_FACT_ANNUL_AUTRE_MOTIF;
        }


        return $this;
    } // setPfdFactAnnulAutreMotif()

    /**
     * Set the value of [pfd_fact_id] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdFactId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->pfd_fact_id !== $v) {
                    $this->pfd_fact_id = $v;
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_FACT_ID;
                }

        if ($this->aFactureGenerated !== null && $this->aFactureGenerated->getFactId() !== $v) {
            $this->aFactureGenerated = null;
        }


        return $this;
    } // setPfdFactId()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = PlanFacturationDetailsPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = PlanFacturationDetailsPeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setUserId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->user_id !== $v) {
                    $this->user_id = $v;
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::USER_ID;
                }


        return $this;
    } // setUserId()

    /**
     * Set the value of [user_modify] column.
     *
     * @param  int $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
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
                    $this->modifiedColumns[] = PlanFacturationDetailsPeer::USER_MODIFY;
                }


        return $this;
    } // setUserModify()

    /**
     * Set the value of [pfd_num_cmd] column.
     *
     * @param  string $v new value
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPfdNumCmd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pfd_num_cmd !== $v) {
            $this->pfd_num_cmd = $v;
            $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_NUM_CMD;
        }


        return $this;
    } // setPfdNumCmd()

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

            $this->pfd_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->op_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->pfd_type_fact_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->pfd_date_planif = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->pfd_taux_adf = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->pfd_taux_partiel = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->pfd_id_to_cancel = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->pfd_fact_annul = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->pfd_fact_annul_motif_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->pfd_fact_annul_autre_motif = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->pfd_fact_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->date_create = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_modify = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->user_id = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->user_modify = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->pfd_num_cmd = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = PlanFacturationDetailsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PlanFacturationDetails object", $e);
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

        if ($this->aOperations !== null && $this->op_id !== $this->aOperations->getOpId()) {
            $this->aOperations = null;
        }
        if ($this->aRFactureTypes !== null && $this->pfd_type_fact_id !== $this->aRFactureTypes->getRFactTypeId()) {
            $this->aRFactureTypes = null;
        }
        if ($this->aPlanFacturationDetailToCancel !== null && $this->pfd_id_to_cancel !== $this->aPlanFacturationDetailToCancel->getPfdId()) {
            $this->aPlanFacturationDetailToCancel = null;
        }
        if ($this->aFactureToCancel !== null && $this->pfd_fact_annul !== $this->aFactureToCancel->getFactId()) {
            $this->aFactureToCancel = null;
        }
        if ($this->aInvoiceCancellationMotive !== null && $this->pfd_fact_annul_motif_id !== $this->aInvoiceCancellationMotive->getRFactureAnnulationMotifsMotifId()) {
            $this->aInvoiceCancellationMotive = null;
        }
        if ($this->aFactureGenerated !== null && $this->pfd_fact_id !== $this->aFactureGenerated->getFactId()) {
            $this->aFactureGenerated = null;
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
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PlanFacturationDetailsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOperations = null;
            $this->aRFactureTypes = null;
            $this->aFactureToCancel = null;
            $this->aPlanFacturationDetailToCancel = null;
            $this->aFactureGenerated = null;
            $this->aInvoiceCancellationMotive = null;
            $this->collPlanFacturationDetailssRelatedByPfdId = null;

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
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PlanFacturationDetailsQuery::create()
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
            $con = Propel::getConnection(PlanFacturationDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setDateCreate(time());
                
                                $this->setUserId(Zend_Auth::getInstance()->getStorage()->read()->getUserId());

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
                PlanFacturationDetailsPeer::addInstanceToPool($this);
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

            if ($this->aOperations !== null) {
                if ($this->aOperations->isModified() || $this->aOperations->isNew()) {
                    $affectedRows += $this->aOperations->save($con);
                }
                $this->setOperations($this->aOperations);
            }

            if ($this->aRFactureTypes !== null) {
                if ($this->aRFactureTypes->isModified() || $this->aRFactureTypes->isNew()) {
                    $affectedRows += $this->aRFactureTypes->save($con);
                }
                $this->setRFactureTypes($this->aRFactureTypes);
            }

            if ($this->aFactureToCancel !== null) {
                if ($this->aFactureToCancel->isModified() || $this->aFactureToCancel->isNew()) {
                    $affectedRows += $this->aFactureToCancel->save($con);
                }
                $this->setFactureToCancel($this->aFactureToCancel);
            }

            if ($this->aPlanFacturationDetailToCancel !== null) {
                if ($this->aPlanFacturationDetailToCancel->isModified() || $this->aPlanFacturationDetailToCancel->isNew()) {
                    $affectedRows += $this->aPlanFacturationDetailToCancel->save($con);
                }
                $this->setPlanFacturationDetailToCancel($this->aPlanFacturationDetailToCancel);
            }

            if ($this->aFactureGenerated !== null) {
                if ($this->aFactureGenerated->isModified() || $this->aFactureGenerated->isNew()) {
                    $affectedRows += $this->aFactureGenerated->save($con);
                }
                $this->setFactureGenerated($this->aFactureGenerated);
            }

            if ($this->aInvoiceCancellationMotive !== null) {
                if ($this->aInvoiceCancellationMotive->isModified() || $this->aInvoiceCancellationMotive->isNew()) {
                    $affectedRows += $this->aInvoiceCancellationMotive->save($con);
                }
                $this->setInvoiceCancellationMotive($this->aInvoiceCancellationMotive);
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

            if ($this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion !== null) {
                if (!$this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion as $planFacturationDetailsRelatedByPfdId) {
                        // need to save related object because we set the relation to null
                        $planFacturationDetailsRelatedByPfdId->save($con);
                    }
                    $this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion = null;
                }
            }

            if ($this->collPlanFacturationDetailssRelatedByPfdId !== null) {
                foreach ($this->collPlanFacturationDetailssRelatedByPfdId as $referrerFK) {
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

        $this->modifiedColumns[] = PlanFacturationDetailsPeer::PFD_ID;
        if (null !== $this->pfd_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PlanFacturationDetailsPeer::PFD_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_ID)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_id`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`op_id`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_type_fact_id`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_DATE_PLANIF)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_date_planif`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_TAUX_ADF)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_taux_adf`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_taux_partiel`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_id_to_cancel`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ANNUL)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_fact_annul`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_fact_annul_motif_id`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_AUTRE_MOTIF)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_fact_annul_autre_motif`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_fact_id`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::USER_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`user_modify`';
        }
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_NUM_CMD)) {
            $modifiedColumns[':p' . $index++]  = '`pfd_num_cmd`';
        }

        $sql = sprintf(
            'INSERT INTO `plan_facturation_details` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`pfd_id`':
                        $stmt->bindValue($identifier, $this->pfd_id, PDO::PARAM_INT);
                        break;
                    case '`op_id`':
                        $stmt->bindValue($identifier, $this->op_id, PDO::PARAM_INT);
                        break;
                    case '`pfd_type_fact_id`':
                        $stmt->bindValue($identifier, $this->pfd_type_fact_id, PDO::PARAM_INT);
                        break;
                    case '`pfd_date_planif`':
                        $stmt->bindValue($identifier, $this->pfd_date_planif, PDO::PARAM_STR);
                        break;
                    case '`pfd_taux_adf`':
                        $stmt->bindValue($identifier, $this->pfd_taux_adf, PDO::PARAM_INT);
                        break;
                    case '`pfd_taux_partiel`':
                        $stmt->bindValue($identifier, $this->pfd_taux_partiel, PDO::PARAM_INT);
                        break;
                    case '`pfd_id_to_cancel`':
                        $stmt->bindValue($identifier, $this->pfd_id_to_cancel, PDO::PARAM_INT);
                        break;
                    case '`pfd_fact_annul`':
                        $stmt->bindValue($identifier, $this->pfd_fact_annul, PDO::PARAM_INT);
                        break;
                    case '`pfd_fact_annul_motif_id`':
                        $stmt->bindValue($identifier, $this->pfd_fact_annul_motif_id, PDO::PARAM_INT);
                        break;
                    case '`pfd_fact_annul_autre_motif`':
                        $stmt->bindValue($identifier, $this->pfd_fact_annul_autre_motif, PDO::PARAM_STR);
                        break;
                    case '`pfd_fact_id`':
                        $stmt->bindValue($identifier, $this->pfd_fact_id, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`date_modify`':
                        $stmt->bindValue($identifier, $this->date_modify, PDO::PARAM_STR);
                        break;
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`user_modify`':
                        $stmt->bindValue($identifier, $this->user_modify, PDO::PARAM_INT);
                        break;
                    case '`pfd_num_cmd`':
                        $stmt->bindValue($identifier, $this->pfd_num_cmd, PDO::PARAM_STR);
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
        $this->setPfdId($pk);

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

            if ($this->aOperations !== null) {
                if (!$this->aOperations->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOperations->getValidationFailures());
                }
            }

            if ($this->aRFactureTypes !== null) {
                if (!$this->aRFactureTypes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRFactureTypes->getValidationFailures());
                }
            }

            if ($this->aFactureToCancel !== null) {
                if (!$this->aFactureToCancel->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aFactureToCancel->getValidationFailures());
                }
            }

            if ($this->aPlanFacturationDetailToCancel !== null) {
                if (!$this->aPlanFacturationDetailToCancel->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPlanFacturationDetailToCancel->getValidationFailures());
                }
            }

            if ($this->aFactureGenerated !== null) {
                if (!$this->aFactureGenerated->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aFactureGenerated->getValidationFailures());
                }
            }

            if ($this->aInvoiceCancellationMotive !== null) {
                if (!$this->aInvoiceCancellationMotive->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aInvoiceCancellationMotive->getValidationFailures());
                }
            }


            if (($retval = PlanFacturationDetailsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPlanFacturationDetailssRelatedByPfdId !== null) {
                    foreach ($this->collPlanFacturationDetailssRelatedByPfdId as $referrerFK) {
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
        $pos = PlanFacturationDetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPfdId();
                break;
            case 1:
                return $this->getOpId();
                break;
            case 2:
                return $this->getPfdTypeFactId();
                break;
            case 3:
                return $this->getPfdDatePlanif();
                break;
            case 4:
                return $this->getPfdTauxAdf();
                break;
            case 5:
                return $this->getPfdTauxPartiel();
                break;
            case 6:
                return $this->getPfdIdToCancel();
                break;
            case 7:
                return $this->getPfdFactAnnul();
                break;
            case 8:
                return $this->getPfdFactAnnulMotifId();
                break;
            case 9:
                return $this->getPfdFactAnnulAutreMotif();
                break;
            case 10:
                return $this->getPfdFactId();
                break;
            case 11:
                return $this->getDateCreate();
                break;
            case 12:
                return $this->getDateModify();
                break;
            case 13:
                return $this->getUserId();
                break;
            case 14:
                return $this->getUserModify();
                break;
            case 15:
                return $this->getPfdNumCmd();
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
        if (isset($alreadyDumpedObjects['PlanFacturationDetails'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PlanFacturationDetails'][$this->getPrimaryKey()] = true;
        $keys = PlanFacturationDetailsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPfdId(),
            $keys[1] => $this->getOpId(),
            $keys[2] => $this->getPfdTypeFactId(),
            $keys[3] => $this->getPfdDatePlanif(),
            $keys[4] => $this->getPfdTauxAdf(),
            $keys[5] => $this->getPfdTauxPartiel(),
            $keys[6] => $this->getPfdIdToCancel(),
            $keys[7] => $this->getPfdFactAnnul(),
            $keys[8] => $this->getPfdFactAnnulMotifId(),
            $keys[9] => $this->getPfdFactAnnulAutreMotif(),
            $keys[10] => $this->getPfdFactId(),
            $keys[11] => $this->getDateCreate(),
            $keys[12] => $this->getDateModify(),
            $keys[13] => $this->getUserId(),
            $keys[14] => $this->getUserModify(),
            $keys[15] => $this->getPfdNumCmd(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOperations) {
                $result['Operations'] = $this->aOperations->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRFactureTypes) {
                $result['RFactureTypes'] = $this->aRFactureTypes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aFactureToCancel) {
                $result['FactureToCancel'] = $this->aFactureToCancel->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPlanFacturationDetailToCancel) {
                $result['PlanFacturationDetailToCancel'] = $this->aPlanFacturationDetailToCancel->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aFactureGenerated) {
                $result['FactureGenerated'] = $this->aFactureGenerated->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvoiceCancellationMotive) {
                $result['InvoiceCancellationMotive'] = $this->aInvoiceCancellationMotive->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPlanFacturationDetailssRelatedByPfdId) {
                $result['PlanFacturationDetailssRelatedByPfdId'] = $this->collPlanFacturationDetailssRelatedByPfdId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PlanFacturationDetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPfdId($value);
                break;
            case 1:
                $this->setOpId($value);
                break;
            case 2:
                $this->setPfdTypeFactId($value);
                break;
            case 3:
                $this->setPfdDatePlanif($value);
                break;
            case 4:
                $this->setPfdTauxAdf($value);
                break;
            case 5:
                $this->setPfdTauxPartiel($value);
                break;
            case 6:
                $this->setPfdIdToCancel($value);
                break;
            case 7:
                $this->setPfdFactAnnul($value);
                break;
            case 8:
                $this->setPfdFactAnnulMotifId($value);
                break;
            case 9:
                $this->setPfdFactAnnulAutreMotif($value);
                break;
            case 10:
                $this->setPfdFactId($value);
                break;
            case 11:
                $this->setDateCreate($value);
                break;
            case 12:
                $this->setDateModify($value);
                break;
            case 13:
                $this->setUserId($value);
                break;
            case 14:
                $this->setUserModify($value);
                break;
            case 15:
                $this->setPfdNumCmd($value);
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
        $keys = PlanFacturationDetailsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setPfdId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOpId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPfdTypeFactId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPfdDatePlanif($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPfdTauxAdf($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPfdTauxPartiel($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPfdIdToCancel($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPfdFactAnnul($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPfdFactAnnulMotifId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPfdFactAnnulAutreMotif($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPfdFactId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateCreate($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateModify($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setUserId($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setUserModify($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPfdNumCmd($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PlanFacturationDetailsPeer::DATABASE_NAME);

        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_ID)) $criteria->add(PlanFacturationDetailsPeer::PFD_ID, $this->pfd_id);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::OP_ID)) $criteria->add(PlanFacturationDetailsPeer::OP_ID, $this->op_id);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID)) $criteria->add(PlanFacturationDetailsPeer::PFD_TYPE_FACT_ID, $this->pfd_type_fact_id);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_DATE_PLANIF)) $criteria->add(PlanFacturationDetailsPeer::PFD_DATE_PLANIF, $this->pfd_date_planif);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_TAUX_ADF)) $criteria->add(PlanFacturationDetailsPeer::PFD_TAUX_ADF, $this->pfd_taux_adf);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL)) $criteria->add(PlanFacturationDetailsPeer::PFD_TAUX_PARTIEL, $this->pfd_taux_partiel);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL)) $criteria->add(PlanFacturationDetailsPeer::PFD_ID_TO_CANCEL, $this->pfd_id_to_cancel);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ANNUL)) $criteria->add(PlanFacturationDetailsPeer::PFD_FACT_ANNUL, $this->pfd_fact_annul);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID)) $criteria->add(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_MOTIF_ID, $this->pfd_fact_annul_motif_id);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_AUTRE_MOTIF)) $criteria->add(PlanFacturationDetailsPeer::PFD_FACT_ANNUL_AUTRE_MOTIF, $this->pfd_fact_annul_autre_motif);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_FACT_ID)) $criteria->add(PlanFacturationDetailsPeer::PFD_FACT_ID, $this->pfd_fact_id);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::DATE_CREATE)) $criteria->add(PlanFacturationDetailsPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::DATE_MODIFY)) $criteria->add(PlanFacturationDetailsPeer::DATE_MODIFY, $this->date_modify);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::USER_ID)) $criteria->add(PlanFacturationDetailsPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::USER_MODIFY)) $criteria->add(PlanFacturationDetailsPeer::USER_MODIFY, $this->user_modify);
        if ($this->isColumnModified(PlanFacturationDetailsPeer::PFD_NUM_CMD)) $criteria->add(PlanFacturationDetailsPeer::PFD_NUM_CMD, $this->pfd_num_cmd);

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
        $criteria = new Criteria(PlanFacturationDetailsPeer::DATABASE_NAME);
        $criteria->add(PlanFacturationDetailsPeer::PFD_ID, $this->pfd_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getPfdId();
    }

    /**
     * Generic method to set the primary key (pfd_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPfdId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getPfdId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PlanFacturationDetails (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOpId($this->getOpId());
        $copyObj->setPfdTypeFactId($this->getPfdTypeFactId());
        $copyObj->setPfdDatePlanif($this->getPfdDatePlanif());
        $copyObj->setPfdTauxAdf($this->getPfdTauxAdf());
        $copyObj->setPfdTauxPartiel($this->getPfdTauxPartiel());
        $copyObj->setPfdIdToCancel($this->getPfdIdToCancel());
        $copyObj->setPfdFactAnnul($this->getPfdFactAnnul());
        $copyObj->setPfdFactAnnulMotifId($this->getPfdFactAnnulMotifId());
        $copyObj->setPfdFactAnnulAutreMotif($this->getPfdFactAnnulAutreMotif());
        $copyObj->setPfdFactId($this->getPfdFactId());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setDateModify($this->getDateModify());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setUserModify($this->getUserModify());
        $copyObj->setPfdNumCmd($this->getPfdNumCmd());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPlanFacturationDetailssRelatedByPfdId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPlanFacturationDetailsRelatedByPfdId($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setPfdId(NULL); // this is a auto-increment column, so set to default value
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
     * @return PlanFacturationDetails Clone of current object.
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
     * @return PlanFacturationDetailsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PlanFacturationDetailsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Operations object.
     *
     * @param                  Operations $v
     * @return PlanFacturationDetails The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOperations(Operations $v = null)
    {
        if ($v === null) {
            $this->setOpId(NULL);
        } else {
            $this->setOpId($v->getOpId());
        }

        $this->aOperations = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Operations object, it will not be re-added.
        if ($v !== null) {
            $v->addPlanFacturationDetails($this);
        }


        return $this;
    }


    /**
     * Get the associated Operations object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Operations The associated Operations object.
     * @throws PropelException
     */
    public function getOperations(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOperations === null && ($this->op_id !== null) && $doQuery) {
            $this->aOperations = OperationsQuery::create()->findPk($this->op_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOperations->addPlanFacturationDetailss($this);
             */
        }

        return $this->aOperations;
    }

    /**
     * Declares an association between this object and a RFactureTypes object.
     *
     * @param                  RFactureTypes $v
     * @return PlanFacturationDetails The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRFactureTypes(RFactureTypes $v = null)
    {
        if ($v === null) {
            $this->setPfdTypeFactId(NULL);
        } else {
            $this->setPfdTypeFactId($v->getRFactTypeId());
        }

        $this->aRFactureTypes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RFactureTypes object, it will not be re-added.
        if ($v !== null) {
            $v->addPlanFacturationDetails($this);
        }


        return $this;
    }


    /**
     * Get the associated RFactureTypes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RFactureTypes The associated RFactureTypes object.
     * @throws PropelException
     */
    public function getRFactureTypes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRFactureTypes === null && ($this->pfd_type_fact_id !== null) && $doQuery) {
            $this->aRFactureTypes = RFactureTypesQuery::create()->findPk($this->pfd_type_fact_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRFactureTypes->addPlanFacturationDetailss($this);
             */
        }

        return $this->aRFactureTypes;
    }

    /**
     * Declares an association between this object and a Factures object.
     *
     * @param                  Factures $v
     * @return PlanFacturationDetails The current object (for fluent API support)
     * @throws PropelException
     */
    public function setFactureToCancel(Factures $v = null)
    {
        if ($v === null) {
            $this->setPfdFactAnnul(NULL);
        } else {
            $this->setPfdFactAnnul($v->getFactId());
        }

        $this->aFactureToCancel = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Factures object, it will not be re-added.
        if ($v !== null) {
            $v->addPlanFacturationDetailsRelatedByPfdFactAnnul($this);
        }


        return $this;
    }


    /**
     * Get the associated Factures object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Factures The associated Factures object.
     * @throws PropelException
     */
    public function getFactureToCancel(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aFactureToCancel === null && ($this->pfd_fact_annul !== null) && $doQuery) {
            $this->aFactureToCancel = FacturesQuery::create()->findPk($this->pfd_fact_annul, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aFactureToCancel->addPlanFacturationDetailssRelatedByPfdFactAnnul($this);
             */
        }

        return $this->aFactureToCancel;
    }

    /**
     * Declares an association between this object and a PlanFacturationDetails object.
     *
     * @param                  PlanFacturationDetails $v
     * @return PlanFacturationDetails The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPlanFacturationDetailToCancel(PlanFacturationDetails $v = null)
    {
        if ($v === null) {
            $this->setPfdIdToCancel(NULL);
        } else {
            $this->setPfdIdToCancel($v->getPfdId());
        }

        $this->aPlanFacturationDetailToCancel = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the PlanFacturationDetails object, it will not be re-added.
        if ($v !== null) {
            $v->addPlanFacturationDetailsRelatedByPfdId($this);
        }


        return $this;
    }


    /**
     * Get the associated PlanFacturationDetails object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return PlanFacturationDetails The associated PlanFacturationDetails object.
     * @throws PropelException
     */
    public function getPlanFacturationDetailToCancel(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPlanFacturationDetailToCancel === null && ($this->pfd_id_to_cancel !== null) && $doQuery) {
            $this->aPlanFacturationDetailToCancel = PlanFacturationDetailsQuery::create()->findPk($this->pfd_id_to_cancel, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPlanFacturationDetailToCancel->addPlanFacturationDetailssRelatedByPfdId($this);
             */
        }

        return $this->aPlanFacturationDetailToCancel;
    }

    /**
     * Declares an association between this object and a Factures object.
     *
     * @param                  Factures $v
     * @return PlanFacturationDetails The current object (for fluent API support)
     * @throws PropelException
     */
    public function setFactureGenerated(Factures $v = null)
    {
        if ($v === null) {
            $this->setPfdFactId(NULL);
        } else {
            $this->setPfdFactId($v->getFactId());
        }

        $this->aFactureGenerated = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Factures object, it will not be re-added.
        if ($v !== null) {
            $v->addPlanFacturationDetailsRelatedByPfdFactId($this);
        }


        return $this;
    }


    /**
     * Get the associated Factures object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Factures The associated Factures object.
     * @throws PropelException
     */
    public function getFactureGenerated(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aFactureGenerated === null && ($this->pfd_fact_id !== null) && $doQuery) {
            $this->aFactureGenerated = FacturesQuery::create()->findPk($this->pfd_fact_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aFactureGenerated->addPlanFacturationDetailssRelatedByPfdFactId($this);
             */
        }

        return $this->aFactureGenerated;
    }

    /**
     * Declares an association between this object and a RFactureAnnulationMotifs object.
     *
     * @param                  RFactureAnnulationMotifs $v
     * @return PlanFacturationDetails The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvoiceCancellationMotive(RFactureAnnulationMotifs $v = null)
    {
        if ($v === null) {
            $this->setPfdFactAnnulMotifId(NULL);
        } else {
            $this->setPfdFactAnnulMotifId($v->getRFactureAnnulationMotifsMotifId());
        }

        $this->aInvoiceCancellationMotive = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RFactureAnnulationMotifs object, it will not be re-added.
        if ($v !== null) {
            $v->addPlanFacturationDetails($this);
        }


        return $this;
    }


    /**
     * Get the associated RFactureAnnulationMotifs object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RFactureAnnulationMotifs The associated RFactureAnnulationMotifs object.
     * @throws PropelException
     */
    public function getInvoiceCancellationMotive(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aInvoiceCancellationMotive === null && ($this->pfd_fact_annul_motif_id !== null) && $doQuery) {
            $this->aInvoiceCancellationMotive = RFactureAnnulationMotifsQuery::create()->findPk($this->pfd_fact_annul_motif_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvoiceCancellationMotive->addPlanFacturationDetailss($this);
             */
        }

        return $this->aInvoiceCancellationMotive;
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
        if ('PlanFacturationDetailsRelatedByPfdId' == $relationName) {
            $this->initPlanFacturationDetailssRelatedByPfdId();
        }
    }

    /**
     * Clears out the collPlanFacturationDetailssRelatedByPfdId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return PlanFacturationDetails The current object (for fluent API support)
     * @see        addPlanFacturationDetailssRelatedByPfdId()
     */
    public function clearPlanFacturationDetailssRelatedByPfdId()
    {
        $this->collPlanFacturationDetailssRelatedByPfdId = null; // important to set this to null since that means it is uninitialized
        $this->collPlanFacturationDetailssRelatedByPfdIdPartial = null;

        return $this;
    }

    /**
     * reset is the collPlanFacturationDetailssRelatedByPfdId collection loaded partially
     *
     * @return void
     */
    public function resetPartialPlanFacturationDetailssRelatedByPfdId($v = true)
    {
        $this->collPlanFacturationDetailssRelatedByPfdIdPartial = $v;
    }

    /**
     * Initializes the collPlanFacturationDetailssRelatedByPfdId collection.
     *
     * By default this just sets the collPlanFacturationDetailssRelatedByPfdId collection to an empty array (like clearcollPlanFacturationDetailssRelatedByPfdId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPlanFacturationDetailssRelatedByPfdId($overrideExisting = true)
    {
        if (null !== $this->collPlanFacturationDetailssRelatedByPfdId && !$overrideExisting) {
            return;
        }
        $this->collPlanFacturationDetailssRelatedByPfdId = new PropelObjectCollection();
        $this->collPlanFacturationDetailssRelatedByPfdId->setModel('PlanFacturationDetails');
    }

    /**
     * Gets an array of PlanFacturationDetails objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this PlanFacturationDetails is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     * @throws PropelException
     */
    public function getPlanFacturationDetailssRelatedByPfdId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPlanFacturationDetailssRelatedByPfdIdPartial && !$this->isNew();
        if (null === $this->collPlanFacturationDetailssRelatedByPfdId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPlanFacturationDetailssRelatedByPfdId) {
                // return empty collection
                $this->initPlanFacturationDetailssRelatedByPfdId();
            } else {
                $collPlanFacturationDetailssRelatedByPfdId = PlanFacturationDetailsQuery::create(null, $criteria)
                    ->filterByPlanFacturationDetailToCancel($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPlanFacturationDetailssRelatedByPfdIdPartial && count($collPlanFacturationDetailssRelatedByPfdId)) {
                      $this->initPlanFacturationDetailssRelatedByPfdId(false);

                      foreach ($collPlanFacturationDetailssRelatedByPfdId as $obj) {
                        if (false == $this->collPlanFacturationDetailssRelatedByPfdId->contains($obj)) {
                          $this->collPlanFacturationDetailssRelatedByPfdId->append($obj);
                        }
                      }

                      $this->collPlanFacturationDetailssRelatedByPfdIdPartial = true;
                    }

                    $collPlanFacturationDetailssRelatedByPfdId->getInternalIterator()->rewind();

                    return $collPlanFacturationDetailssRelatedByPfdId;
                }

                if ($partial && $this->collPlanFacturationDetailssRelatedByPfdId) {
                    foreach ($this->collPlanFacturationDetailssRelatedByPfdId as $obj) {
                        if ($obj->isNew()) {
                            $collPlanFacturationDetailssRelatedByPfdId[] = $obj;
                        }
                    }
                }

                $this->collPlanFacturationDetailssRelatedByPfdId = $collPlanFacturationDetailssRelatedByPfdId;
                $this->collPlanFacturationDetailssRelatedByPfdIdPartial = false;
            }
        }

        return $this->collPlanFacturationDetailssRelatedByPfdId;
    }

    /**
     * Sets a collection of PlanFacturationDetailsRelatedByPfdId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $planFacturationDetailssRelatedByPfdId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function setPlanFacturationDetailssRelatedByPfdId(PropelCollection $planFacturationDetailssRelatedByPfdId, PropelPDO $con = null)
    {
        $planFacturationDetailssRelatedByPfdIdToDelete = $this->getPlanFacturationDetailssRelatedByPfdId(new Criteria(), $con)->diff($planFacturationDetailssRelatedByPfdId);


        $this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion = $planFacturationDetailssRelatedByPfdIdToDelete;

        foreach ($planFacturationDetailssRelatedByPfdIdToDelete as $planFacturationDetailsRelatedByPfdIdRemoved) {
            $planFacturationDetailsRelatedByPfdIdRemoved->setPlanFacturationDetailToCancel(null);
        }

        $this->collPlanFacturationDetailssRelatedByPfdId = null;
        foreach ($planFacturationDetailssRelatedByPfdId as $planFacturationDetailsRelatedByPfdId) {
            $this->addPlanFacturationDetailsRelatedByPfdId($planFacturationDetailsRelatedByPfdId);
        }

        $this->collPlanFacturationDetailssRelatedByPfdId = $planFacturationDetailssRelatedByPfdId;
        $this->collPlanFacturationDetailssRelatedByPfdIdPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PlanFacturationDetails objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related PlanFacturationDetails objects.
     * @throws PropelException
     */
    public function countPlanFacturationDetailssRelatedByPfdId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPlanFacturationDetailssRelatedByPfdIdPartial && !$this->isNew();
        if (null === $this->collPlanFacturationDetailssRelatedByPfdId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPlanFacturationDetailssRelatedByPfdId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPlanFacturationDetailssRelatedByPfdId());
            }
            $query = PlanFacturationDetailsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPlanFacturationDetailToCancel($this)
                ->count($con);
        }

        return count($this->collPlanFacturationDetailssRelatedByPfdId);
    }

    /**
     * Method called to associate a PlanFacturationDetails object to this object
     * through the PlanFacturationDetails foreign key attribute.
     *
     * @param    PlanFacturationDetails $l PlanFacturationDetails
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function addPlanFacturationDetailsRelatedByPfdId(PlanFacturationDetails $l)
    {
        if ($this->collPlanFacturationDetailssRelatedByPfdId === null) {
            $this->initPlanFacturationDetailssRelatedByPfdId();
            $this->collPlanFacturationDetailssRelatedByPfdIdPartial = true;
        }

        if (!in_array($l, $this->collPlanFacturationDetailssRelatedByPfdId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPlanFacturationDetailsRelatedByPfdId($l);

            if ($this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion and $this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion->contains($l)) {
                $this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion->remove($this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	PlanFacturationDetailsRelatedByPfdId $planFacturationDetailsRelatedByPfdId The planFacturationDetailsRelatedByPfdId object to add.
     */
    protected function doAddPlanFacturationDetailsRelatedByPfdId($planFacturationDetailsRelatedByPfdId)
    {
        $this->collPlanFacturationDetailssRelatedByPfdId[]= $planFacturationDetailsRelatedByPfdId;
        $planFacturationDetailsRelatedByPfdId->setPlanFacturationDetailToCancel($this);
    }

    /**
     * @param	PlanFacturationDetailsRelatedByPfdId $planFacturationDetailsRelatedByPfdId The planFacturationDetailsRelatedByPfdId object to remove.
     * @return PlanFacturationDetails The current object (for fluent API support)
     */
    public function removePlanFacturationDetailsRelatedByPfdId($planFacturationDetailsRelatedByPfdId)
    {
        if ($this->getPlanFacturationDetailssRelatedByPfdId()->contains($planFacturationDetailsRelatedByPfdId)) {
            $this->collPlanFacturationDetailssRelatedByPfdId->remove($this->collPlanFacturationDetailssRelatedByPfdId->search($planFacturationDetailsRelatedByPfdId));
            if (null === $this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion) {
                $this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion = clone $this->collPlanFacturationDetailssRelatedByPfdId;
                $this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion->clear();
            }
            $this->planFacturationDetailssRelatedByPfdIdScheduledForDeletion[]= $planFacturationDetailsRelatedByPfdId;
            $planFacturationDetailsRelatedByPfdId->setPlanFacturationDetailToCancel(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PlanFacturationDetails is new, it will return
     * an empty collection; or if this PlanFacturationDetails has previously
     * been saved, it will retrieve related PlanFacturationDetailssRelatedByPfdId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationDetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssRelatedByPfdIdJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getPlanFacturationDetailssRelatedByPfdId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PlanFacturationDetails is new, it will return
     * an empty collection; or if this PlanFacturationDetails has previously
     * been saved, it will retrieve related PlanFacturationDetailssRelatedByPfdId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationDetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssRelatedByPfdIdJoinRFactureTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('RFactureTypes', $join_behavior);

        return $this->getPlanFacturationDetailssRelatedByPfdId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PlanFacturationDetails is new, it will return
     * an empty collection; or if this PlanFacturationDetails has previously
     * been saved, it will retrieve related PlanFacturationDetailssRelatedByPfdId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationDetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssRelatedByPfdIdJoinFactureToCancel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('FactureToCancel', $join_behavior);

        return $this->getPlanFacturationDetailssRelatedByPfdId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PlanFacturationDetails is new, it will return
     * an empty collection; or if this PlanFacturationDetails has previously
     * been saved, it will retrieve related PlanFacturationDetailssRelatedByPfdId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationDetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssRelatedByPfdIdJoinFactureGenerated($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('FactureGenerated', $join_behavior);

        return $this->getPlanFacturationDetailssRelatedByPfdId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PlanFacturationDetails is new, it will return
     * an empty collection; or if this PlanFacturationDetails has previously
     * been saved, it will retrieve related PlanFacturationDetailssRelatedByPfdId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PlanFacturationDetails.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PlanFacturationDetails[] List of PlanFacturationDetails objects
     */
    public function getPlanFacturationDetailssRelatedByPfdIdJoinInvoiceCancellationMotive($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlanFacturationDetailsQuery::create(null, $criteria);
        $query->joinWith('InvoiceCancellationMotive', $join_behavior);

        return $this->getPlanFacturationDetailssRelatedByPfdId($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->pfd_id = null;
        $this->op_id = null;
        $this->pfd_type_fact_id = null;
        $this->pfd_date_planif = null;
        $this->pfd_taux_adf = null;
        $this->pfd_taux_partiel = null;
        $this->pfd_id_to_cancel = null;
        $this->pfd_fact_annul = null;
        $this->pfd_fact_annul_motif_id = null;
        $this->pfd_fact_annul_autre_motif = null;
        $this->pfd_fact_id = null;
        $this->date_create = null;
        $this->date_modify = null;
        $this->user_id = null;
        $this->user_modify = null;
        $this->pfd_num_cmd = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
            if ($this->collPlanFacturationDetailssRelatedByPfdId) {
                foreach ($this->collPlanFacturationDetailssRelatedByPfdId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aOperations instanceof Persistent) {
              $this->aOperations->clearAllReferences($deep);
            }
            if ($this->aRFactureTypes instanceof Persistent) {
              $this->aRFactureTypes->clearAllReferences($deep);
            }
            if ($this->aFactureToCancel instanceof Persistent) {
              $this->aFactureToCancel->clearAllReferences($deep);
            }
            if ($this->aPlanFacturationDetailToCancel instanceof Persistent) {
              $this->aPlanFacturationDetailToCancel->clearAllReferences($deep);
            }
            if ($this->aFactureGenerated instanceof Persistent) {
              $this->aFactureGenerated->clearAllReferences($deep);
            }
            if ($this->aInvoiceCancellationMotive instanceof Persistent) {
              $this->aInvoiceCancellationMotive->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPlanFacturationDetailssRelatedByPfdId instanceof PropelCollection) {
            $this->collPlanFacturationDetailssRelatedByPfdId->clearIterator();
        }
        $this->collPlanFacturationDetailssRelatedByPfdId = null;
        $this->aOperations = null;
        $this->aRFactureTypes = null;
        $this->aFactureToCancel = null;
        $this->aPlanFacturationDetailToCancel = null;
        $this->aFactureGenerated = null;
        $this->aInvoiceCancellationMotive = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PlanFacturationDetailsPeer::DEFAULT_STRING_FORMAT);
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
                return BasePlanFacturationDetailsPeer::getConnection();
            }
}
