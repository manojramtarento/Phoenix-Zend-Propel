<?php


/**
 * Base class that represents a row from the 'relances' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseRelances extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RelancesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RelancesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the rel_id field.
     * @var        int
     */
    protected $rel_id;

    /**
     * The value for the rel_numero field.
     * @var        int
     */
    protected $rel_numero;

    /**
     * The value for the rel_reference field.
     * @var        string
     */
    protected $rel_reference;

    /**
     * The value for the cl_id field.
     * @var        int
     */
    protected $cl_id;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * The value for the rel_echeance field.
     * @var        string
     */
    protected $rel_echeance;

    /**
     * The value for the rel_type_id field.
     * @var        int
     */
    protected $rel_type_id;

    /**
     * The value for the rel_parent_id field.
     * @var        int
     */
    protected $rel_parent_id;

    /**
     * The value for the rel_statut_id field.
     * @var        int
     */
    protected $rel_statut_id;

    /**
     * The value for the rel_lang field.
     * @var        string
     */
    protected $rel_lang;

    /**
     * The value for the rel_ct_facturation field.
     * @var        int
     */
    protected $rel_ct_facturation;

    /**
     * The value for the rel_adresse1 field.
     * @var        string
     */
    protected $rel_adresse1;

    /**
     * The value for the rel_adresse2 field.
     * @var        string
     */
    protected $rel_adresse2;

    /**
     * The value for the rel_adresse3 field.
     * @var        string
     */
    protected $rel_adresse3;

    /**
     * The value for the rel_code_postal field.
     * @var        string
     */
    protected $rel_code_postal;

    /**
     * The value for the rel_ville field.
     * @var        string
     */
    protected $rel_ville;

    /**
     * The value for the rel_pays field.
     * @var        string
     */
    protected $rel_pays;

    /**
     * The value for the last_recalculation_date field.
     * @var        string
     */
    protected $last_recalculation_date;

    /**
     * @var        Clients
     */
    protected $aClients;

    /**
     * @var        RRelanceTypes
     */
    protected $aRRelanceTypes;

    /**
     * @var        RRelanceStatuts
     */
    protected $aRRelanceStatuts;

    /**
     * @var        ClientFactureOptions
     */
    protected $aClientFactureOptions;

    /**
     * @var        Contacts
     */
    protected $aContactFacturation;

    /**
     * @var        PropelObjectCollection|LnkRelanceFacture[] Collection to store aggregation of LnkRelanceFacture objects.
     */
    protected $collLnkRelanceFactures;
    protected $collLnkRelanceFacturesPartial;

    /**
     * @var        PropelObjectCollection|RelanceStatuts[] Collection to store aggregation of RelanceStatuts objects.
     */
    protected $collRelanceStatutss;
    protected $collRelanceStatutssPartial;

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
    protected $lnkRelanceFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $relanceStatutssScheduledForDeletion = null;

    /**
     * Get the [rel_id] column value.
     *
     * @return int
     */
    public function getRelId()
    {

        return $this->rel_id;
    }

    /**
     * Get the [rel_numero] column value.
     *
     * @return int
     */
    public function getRelNumero()
    {

        return $this->rel_numero;
    }

    /**
     * Get the [rel_reference] column value.
     *
     * @return string
     */
    public function getRelReference()
    {

        return $this->rel_reference;
    }

    /**
     * Get the [cl_id] column value.
     *
     * @return int
     */
    public function getClId()
    {

        return $this->cl_id;
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
     * Get the [optionally formatted] temporal [rel_echeance] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getRelEcheance($format = 'Y-m-d H:i:s')
    {
        if ($this->rel_echeance === null) {
            return null;
        }

        if ($this->rel_echeance === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->rel_echeance);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->rel_echeance, true), $x);
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
     * Get the [rel_type_id] column value.
     *
     * @return int
     */
    public function getRelTypeId()
    {

        return $this->rel_type_id;
    }

    /**
     * Get the [rel_parent_id] column value.
     *
     * @return int
     */
    public function getRelParentId()
    {

        return $this->rel_parent_id;
    }

    /**
     * Get the [rel_statut_id] column value.
     *
     * @return int
     */
    public function getRelStatutId()
    {

        return $this->rel_statut_id;
    }

    /**
     * Get the [rel_lang] column value.
     *
     * @return string
     */
    public function getRelLang()
    {

        return $this->rel_lang;
    }

    /**
     * Get the [rel_ct_facturation] column value.
     *
     * @return int
     */
    public function getRelCtFacturation()
    {

        return $this->rel_ct_facturation;
    }

    /**
     * Get the [rel_adresse1] column value.
     *
     * @return string
     */
    public function getRelAdresse1()
    {

        return $this->rel_adresse1;
    }

    /**
     * Get the [rel_adresse2] column value.
     *
     * @return string
     */
    public function getRelAdresse2()
    {

        return $this->rel_adresse2;
    }

    /**
     * Get the [rel_adresse3] column value.
     *
     * @return string
     */
    public function getRelAdresse3()
    {

        return $this->rel_adresse3;
    }

    /**
     * Get the [rel_code_postal] column value.
     *
     * @return string
     */
    public function getRelCodePostal()
    {

        return $this->rel_code_postal;
    }

    /**
     * Get the [rel_ville] column value.
     *
     * @return string
     */
    public function getRelVille()
    {

        return $this->rel_ville;
    }

    /**
     * Get the [rel_pays] column value.
     *
     * @return string
     */
    public function getRelPays()
    {

        return $this->rel_pays;
    }

    /**
     * Get the [optionally formatted] temporal [last_recalculation_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLastRecalculationDate($format = 'Y-m-d H:i:s')
    {
        if ($this->last_recalculation_date === null) {
            return null;
        }

        if ($this->last_recalculation_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->last_recalculation_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_recalculation_date, true), $x);
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
     * Set the value of [rel_id] column.
     *
     * @param  int $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->rel_id !== $v) {
                    $this->rel_id = $v;
                    $this->modifiedColumns[] = RelancesPeer::REL_ID;
                }


        return $this;
    } // setRelId()

    /**
     * Set the value of [rel_numero] column.
     *
     * @param  int $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelNumero($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->rel_numero !== $v) {
                    $this->rel_numero = $v;
                    $this->modifiedColumns[] = RelancesPeer::REL_NUMERO;
                }


        return $this;
    } // setRelNumero()

    /**
     * Set the value of [rel_reference] column.
     *
     * @param  string $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelReference($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rel_reference !== $v) {
            $this->rel_reference = $v;
            $this->modifiedColumns[] = RelancesPeer::REL_REFERENCE;
        }


        return $this;
    } // setRelReference()

    /**
     * Set the value of [cl_id] column.
     *
     * @param  int $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setClId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_id !== $v) {
                    $this->cl_id = $v;
                    $this->modifiedColumns[] = RelancesPeer::CL_ID;
                }

        if ($this->aClients !== null && $this->aClients->getClId() !== $v) {
            $this->aClients = null;
        }

        if ($this->aClientFactureOptions !== null && $this->aClientFactureOptions->getClId() !== $v) {
            $this->aClientFactureOptions = null;
        }


        return $this;
    } // setClId()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Relances The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = RelancesPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [rel_echeance] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Relances The current object (for fluent API support)
     */
    public function setRelEcheance($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->rel_echeance !== null || $dt !== null) {
            $currentDateAsString = ($this->rel_echeance !== null && $tmpDt = new DateTime($this->rel_echeance)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->rel_echeance = $newDateAsString;
                $this->modifiedColumns[] = RelancesPeer::REL_ECHEANCE;
            }
        } // if either are not null


        return $this;
    } // setRelEcheance()

    /**
     * Set the value of [rel_type_id] column.
     *
     * @param  int $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelTypeId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->rel_type_id !== $v) {
                    $this->rel_type_id = $v;
                    $this->modifiedColumns[] = RelancesPeer::REL_TYPE_ID;
                }

        if ($this->aRRelanceTypes !== null && $this->aRRelanceTypes->getRRelTypeId() !== $v) {
            $this->aRRelanceTypes = null;
        }


        return $this;
    } // setRelTypeId()

    /**
     * Set the value of [rel_parent_id] column.
     *
     * @param  int $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelParentId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->rel_parent_id !== $v) {
                    $this->rel_parent_id = $v;
                    $this->modifiedColumns[] = RelancesPeer::REL_PARENT_ID;
                }


        return $this;
    } // setRelParentId()

    /**
     * Set the value of [rel_statut_id] column.
     *
     * @param  int $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelStatutId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->rel_statut_id !== $v) {
                    $this->rel_statut_id = $v;
                    $this->modifiedColumns[] = RelancesPeer::REL_STATUT_ID;
                }

        if ($this->aRRelanceStatuts !== null && $this->aRRelanceStatuts->getRRelStatutId() !== $v) {
            $this->aRRelanceStatuts = null;
        }


        return $this;
    } // setRelStatutId()

    /**
     * Set the value of [rel_lang] column.
     *
     * @param  string $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelLang($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rel_lang !== $v) {
            $this->rel_lang = $v;
            $this->modifiedColumns[] = RelancesPeer::REL_LANG;
        }


        return $this;
    } // setRelLang()

    /**
     * Set the value of [rel_ct_facturation] column.
     *
     * @param  int $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelCtFacturation($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->rel_ct_facturation !== $v) {
                    $this->rel_ct_facturation = $v;
                    $this->modifiedColumns[] = RelancesPeer::REL_CT_FACTURATION;
                }

        if ($this->aContactFacturation !== null && $this->aContactFacturation->getCtId() !== $v) {
            $this->aContactFacturation = null;
        }


        return $this;
    } // setRelCtFacturation()

    /**
     * Set the value of [rel_adresse1] column.
     *
     * @param  string $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelAdresse1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rel_adresse1 !== $v) {
            $this->rel_adresse1 = $v;
            $this->modifiedColumns[] = RelancesPeer::REL_ADRESSE1;
        }


        return $this;
    } // setRelAdresse1()

    /**
     * Set the value of [rel_adresse2] column.
     *
     * @param  string $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelAdresse2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rel_adresse2 !== $v) {
            $this->rel_adresse2 = $v;
            $this->modifiedColumns[] = RelancesPeer::REL_ADRESSE2;
        }


        return $this;
    } // setRelAdresse2()

    /**
     * Set the value of [rel_adresse3] column.
     *
     * @param  string $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelAdresse3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rel_adresse3 !== $v) {
            $this->rel_adresse3 = $v;
            $this->modifiedColumns[] = RelancesPeer::REL_ADRESSE3;
        }


        return $this;
    } // setRelAdresse3()

    /**
     * Set the value of [rel_code_postal] column.
     *
     * @param  string $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelCodePostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rel_code_postal !== $v) {
            $this->rel_code_postal = $v;
            $this->modifiedColumns[] = RelancesPeer::REL_CODE_POSTAL;
        }


        return $this;
    } // setRelCodePostal()

    /**
     * Set the value of [rel_ville] column.
     *
     * @param  string $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelVille($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rel_ville !== $v) {
            $this->rel_ville = $v;
            $this->modifiedColumns[] = RelancesPeer::REL_VILLE;
        }


        return $this;
    } // setRelVille()

    /**
     * Set the value of [rel_pays] column.
     *
     * @param  string $v new value
     * @return Relances The current object (for fluent API support)
     */
    public function setRelPays($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rel_pays !== $v) {
            $this->rel_pays = $v;
            $this->modifiedColumns[] = RelancesPeer::REL_PAYS;
        }


        return $this;
    } // setRelPays()

    /**
     * Sets the value of [last_recalculation_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Relances The current object (for fluent API support)
     */
    public function setLastRecalculationDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->last_recalculation_date !== null || $dt !== null) {
            $currentDateAsString = ($this->last_recalculation_date !== null && $tmpDt = new DateTime($this->last_recalculation_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->last_recalculation_date = $newDateAsString;
                $this->modifiedColumns[] = RelancesPeer::LAST_RECALCULATION_DATE;
            }
        } // if either are not null


        return $this;
    } // setLastRecalculationDate()

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

            $this->rel_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->rel_numero = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->rel_reference = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cl_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->date_create = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->rel_echeance = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->rel_type_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->rel_parent_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->rel_statut_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->rel_lang = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->rel_ct_facturation = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->rel_adresse1 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->rel_adresse2 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->rel_adresse3 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->rel_code_postal = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->rel_ville = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->rel_pays = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->last_recalculation_date = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = RelancesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Relances object", $e);
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

        if ($this->aClients !== null && $this->cl_id !== $this->aClients->getClId()) {
            $this->aClients = null;
        }
        if ($this->aClientFactureOptions !== null && $this->cl_id !== $this->aClientFactureOptions->getClId()) {
            $this->aClientFactureOptions = null;
        }
        if ($this->aRRelanceTypes !== null && $this->rel_type_id !== $this->aRRelanceTypes->getRRelTypeId()) {
            $this->aRRelanceTypes = null;
        }
        if ($this->aRRelanceStatuts !== null && $this->rel_statut_id !== $this->aRRelanceStatuts->getRRelStatutId()) {
            $this->aRRelanceStatuts = null;
        }
        if ($this->aContactFacturation !== null && $this->rel_ct_facturation !== $this->aContactFacturation->getCtId()) {
            $this->aContactFacturation = null;
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
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RelancesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aClients = null;
            $this->aRRelanceTypes = null;
            $this->aRRelanceStatuts = null;
            $this->aClientFactureOptions = null;
            $this->aContactFacturation = null;
            $this->collLnkRelanceFactures = null;

            $this->collRelanceStatutss = null;

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
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RelancesQuery::create()
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
            $con = Propel::getConnection(RelancesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // log behavior
                
                                $this->setDateCreate(time());

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
                RelancesPeer::addInstanceToPool($this);
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

            if ($this->aClients !== null) {
                if ($this->aClients->isModified() || $this->aClients->isNew()) {
                    $affectedRows += $this->aClients->save($con);
                }
                $this->setClients($this->aClients);
            }

            if ($this->aRRelanceTypes !== null) {
                if ($this->aRRelanceTypes->isModified() || $this->aRRelanceTypes->isNew()) {
                    $affectedRows += $this->aRRelanceTypes->save($con);
                }
                $this->setRRelanceTypes($this->aRRelanceTypes);
            }

            if ($this->aRRelanceStatuts !== null) {
                if ($this->aRRelanceStatuts->isModified() || $this->aRRelanceStatuts->isNew()) {
                    $affectedRows += $this->aRRelanceStatuts->save($con);
                }
                $this->setRRelanceStatuts($this->aRRelanceStatuts);
            }

            if ($this->aClientFactureOptions !== null) {
                if ($this->aClientFactureOptions->isModified() || $this->aClientFactureOptions->isNew()) {
                    $affectedRows += $this->aClientFactureOptions->save($con);
                }
                $this->setClientFactureOptions($this->aClientFactureOptions);
            }

            if ($this->aContactFacturation !== null) {
                if ($this->aContactFacturation->isModified() || $this->aContactFacturation->isNew()) {
                    $affectedRows += $this->aContactFacturation->save($con);
                }
                $this->setContactFacturation($this->aContactFacturation);
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

            if ($this->lnkRelanceFacturesScheduledForDeletion !== null) {
                if (!$this->lnkRelanceFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->lnkRelanceFacturesScheduledForDeletion as $lnkRelanceFacture) {
                        // need to save related object because we set the relation to null
                        $lnkRelanceFacture->save($con);
                    }
                    $this->lnkRelanceFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collLnkRelanceFactures !== null) {
                foreach ($this->collLnkRelanceFactures as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->relanceStatutssScheduledForDeletion !== null) {
                if (!$this->relanceStatutssScheduledForDeletion->isEmpty()) {
                    RelanceStatutsQuery::create()
                        ->filterByPrimaryKeys($this->relanceStatutssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->relanceStatutssScheduledForDeletion = null;
                }
            }

            if ($this->collRelanceStatutss !== null) {
                foreach ($this->collRelanceStatutss as $referrerFK) {
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

        $this->modifiedColumns[] = RelancesPeer::REL_ID;
        if (null !== $this->rel_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RelancesPeer::REL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RelancesPeer::REL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`rel_id`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`rel_numero`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`rel_reference`';
        }
        if ($this->isColumnModified(RelancesPeer::CL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_id`';
        }
        if ($this->isColumnModified(RelancesPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_ECHEANCE)) {
            $modifiedColumns[':p' . $index++]  = '`rel_echeance`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_TYPE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`rel_type_id`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_PARENT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`rel_parent_id`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_STATUT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`rel_statut_id`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_LANG)) {
            $modifiedColumns[':p' . $index++]  = '`rel_lang`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_CT_FACTURATION)) {
            $modifiedColumns[':p' . $index++]  = '`rel_ct_facturation`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_ADRESSE1)) {
            $modifiedColumns[':p' . $index++]  = '`rel_adresse1`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`rel_adresse2`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_ADRESSE3)) {
            $modifiedColumns[':p' . $index++]  = '`rel_adresse3`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`rel_code_postal`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`rel_ville`';
        }
        if ($this->isColumnModified(RelancesPeer::REL_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`rel_pays`';
        }
        if ($this->isColumnModified(RelancesPeer::LAST_RECALCULATION_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`last_recalculation_date`';
        }

        $sql = sprintf(
            'INSERT INTO `relances` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`rel_id`':
                        $stmt->bindValue($identifier, $this->rel_id, PDO::PARAM_INT);
                        break;
                    case '`rel_numero`':
                        $stmt->bindValue($identifier, $this->rel_numero, PDO::PARAM_INT);
                        break;
                    case '`rel_reference`':
                        $stmt->bindValue($identifier, $this->rel_reference, PDO::PARAM_STR);
                        break;
                    case '`cl_id`':
                        $stmt->bindValue($identifier, $this->cl_id, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`rel_echeance`':
                        $stmt->bindValue($identifier, $this->rel_echeance, PDO::PARAM_STR);
                        break;
                    case '`rel_type_id`':
                        $stmt->bindValue($identifier, $this->rel_type_id, PDO::PARAM_INT);
                        break;
                    case '`rel_parent_id`':
                        $stmt->bindValue($identifier, $this->rel_parent_id, PDO::PARAM_INT);
                        break;
                    case '`rel_statut_id`':
                        $stmt->bindValue($identifier, $this->rel_statut_id, PDO::PARAM_INT);
                        break;
                    case '`rel_lang`':
                        $stmt->bindValue($identifier, $this->rel_lang, PDO::PARAM_STR);
                        break;
                    case '`rel_ct_facturation`':
                        $stmt->bindValue($identifier, $this->rel_ct_facturation, PDO::PARAM_INT);
                        break;
                    case '`rel_adresse1`':
                        $stmt->bindValue($identifier, $this->rel_adresse1, PDO::PARAM_STR);
                        break;
                    case '`rel_adresse2`':
                        $stmt->bindValue($identifier, $this->rel_adresse2, PDO::PARAM_STR);
                        break;
                    case '`rel_adresse3`':
                        $stmt->bindValue($identifier, $this->rel_adresse3, PDO::PARAM_STR);
                        break;
                    case '`rel_code_postal`':
                        $stmt->bindValue($identifier, $this->rel_code_postal, PDO::PARAM_STR);
                        break;
                    case '`rel_ville`':
                        $stmt->bindValue($identifier, $this->rel_ville, PDO::PARAM_STR);
                        break;
                    case '`rel_pays`':
                        $stmt->bindValue($identifier, $this->rel_pays, PDO::PARAM_STR);
                        break;
                    case '`last_recalculation_date`':
                        $stmt->bindValue($identifier, $this->last_recalculation_date, PDO::PARAM_STR);
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
        $this->setRelId($pk);

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

            if ($this->aClients !== null) {
                if (!$this->aClients->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClients->getValidationFailures());
                }
            }

            if ($this->aRRelanceTypes !== null) {
                if (!$this->aRRelanceTypes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRRelanceTypes->getValidationFailures());
                }
            }

            if ($this->aRRelanceStatuts !== null) {
                if (!$this->aRRelanceStatuts->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRRelanceStatuts->getValidationFailures());
                }
            }

            if ($this->aClientFactureOptions !== null) {
                if (!$this->aClientFactureOptions->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClientFactureOptions->getValidationFailures());
                }
            }

            if ($this->aContactFacturation !== null) {
                if (!$this->aContactFacturation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContactFacturation->getValidationFailures());
                }
            }


            if (($retval = RelancesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collLnkRelanceFactures !== null) {
                    foreach ($this->collLnkRelanceFactures as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRelanceStatutss !== null) {
                    foreach ($this->collRelanceStatutss as $referrerFK) {
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
        $pos = RelancesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRelId();
                break;
            case 1:
                return $this->getRelNumero();
                break;
            case 2:
                return $this->getRelReference();
                break;
            case 3:
                return $this->getClId();
                break;
            case 4:
                return $this->getDateCreate();
                break;
            case 5:
                return $this->getRelEcheance();
                break;
            case 6:
                return $this->getRelTypeId();
                break;
            case 7:
                return $this->getRelParentId();
                break;
            case 8:
                return $this->getRelStatutId();
                break;
            case 9:
                return $this->getRelLang();
                break;
            case 10:
                return $this->getRelCtFacturation();
                break;
            case 11:
                return $this->getRelAdresse1();
                break;
            case 12:
                return $this->getRelAdresse2();
                break;
            case 13:
                return $this->getRelAdresse3();
                break;
            case 14:
                return $this->getRelCodePostal();
                break;
            case 15:
                return $this->getRelVille();
                break;
            case 16:
                return $this->getRelPays();
                break;
            case 17:
                return $this->getLastRecalculationDate();
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
        if (isset($alreadyDumpedObjects['Relances'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Relances'][$this->getPrimaryKey()] = true;
        $keys = RelancesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRelId(),
            $keys[1] => $this->getRelNumero(),
            $keys[2] => $this->getRelReference(),
            $keys[3] => $this->getClId(),
            $keys[4] => $this->getDateCreate(),
            $keys[5] => $this->getRelEcheance(),
            $keys[6] => $this->getRelTypeId(),
            $keys[7] => $this->getRelParentId(),
            $keys[8] => $this->getRelStatutId(),
            $keys[9] => $this->getRelLang(),
            $keys[10] => $this->getRelCtFacturation(),
            $keys[11] => $this->getRelAdresse1(),
            $keys[12] => $this->getRelAdresse2(),
            $keys[13] => $this->getRelAdresse3(),
            $keys[14] => $this->getRelCodePostal(),
            $keys[15] => $this->getRelVille(),
            $keys[16] => $this->getRelPays(),
            $keys[17] => $this->getLastRecalculationDate(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aClients) {
                $result['Clients'] = $this->aClients->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRRelanceTypes) {
                $result['RRelanceTypes'] = $this->aRRelanceTypes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRRelanceStatuts) {
                $result['RRelanceStatuts'] = $this->aRRelanceStatuts->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aClientFactureOptions) {
                $result['ClientFactureOptions'] = $this->aClientFactureOptions->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aContactFacturation) {
                $result['ContactFacturation'] = $this->aContactFacturation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collLnkRelanceFactures) {
                $result['LnkRelanceFactures'] = $this->collLnkRelanceFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRelanceStatutss) {
                $result['RelanceStatutss'] = $this->collRelanceStatutss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RelancesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRelId($value);
                break;
            case 1:
                $this->setRelNumero($value);
                break;
            case 2:
                $this->setRelReference($value);
                break;
            case 3:
                $this->setClId($value);
                break;
            case 4:
                $this->setDateCreate($value);
                break;
            case 5:
                $this->setRelEcheance($value);
                break;
            case 6:
                $this->setRelTypeId($value);
                break;
            case 7:
                $this->setRelParentId($value);
                break;
            case 8:
                $this->setRelStatutId($value);
                break;
            case 9:
                $this->setRelLang($value);
                break;
            case 10:
                $this->setRelCtFacturation($value);
                break;
            case 11:
                $this->setRelAdresse1($value);
                break;
            case 12:
                $this->setRelAdresse2($value);
                break;
            case 13:
                $this->setRelAdresse3($value);
                break;
            case 14:
                $this->setRelCodePostal($value);
                break;
            case 15:
                $this->setRelVille($value);
                break;
            case 16:
                $this->setRelPays($value);
                break;
            case 17:
                $this->setLastRecalculationDate($value);
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
        $keys = RelancesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRelId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRelNumero($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRelReference($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setClId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDateCreate($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRelEcheance($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRelTypeId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRelParentId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRelStatutId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRelLang($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setRelCtFacturation($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setRelAdresse1($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRelAdresse2($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setRelAdresse3($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRelCodePostal($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setRelVille($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRelPays($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLastRecalculationDate($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RelancesPeer::DATABASE_NAME);

        if ($this->isColumnModified(RelancesPeer::REL_ID)) $criteria->add(RelancesPeer::REL_ID, $this->rel_id);
        if ($this->isColumnModified(RelancesPeer::REL_NUMERO)) $criteria->add(RelancesPeer::REL_NUMERO, $this->rel_numero);
        if ($this->isColumnModified(RelancesPeer::REL_REFERENCE)) $criteria->add(RelancesPeer::REL_REFERENCE, $this->rel_reference);
        if ($this->isColumnModified(RelancesPeer::CL_ID)) $criteria->add(RelancesPeer::CL_ID, $this->cl_id);
        if ($this->isColumnModified(RelancesPeer::DATE_CREATE)) $criteria->add(RelancesPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(RelancesPeer::REL_ECHEANCE)) $criteria->add(RelancesPeer::REL_ECHEANCE, $this->rel_echeance);
        if ($this->isColumnModified(RelancesPeer::REL_TYPE_ID)) $criteria->add(RelancesPeer::REL_TYPE_ID, $this->rel_type_id);
        if ($this->isColumnModified(RelancesPeer::REL_PARENT_ID)) $criteria->add(RelancesPeer::REL_PARENT_ID, $this->rel_parent_id);
        if ($this->isColumnModified(RelancesPeer::REL_STATUT_ID)) $criteria->add(RelancesPeer::REL_STATUT_ID, $this->rel_statut_id);
        if ($this->isColumnModified(RelancesPeer::REL_LANG)) $criteria->add(RelancesPeer::REL_LANG, $this->rel_lang);
        if ($this->isColumnModified(RelancesPeer::REL_CT_FACTURATION)) $criteria->add(RelancesPeer::REL_CT_FACTURATION, $this->rel_ct_facturation);
        if ($this->isColumnModified(RelancesPeer::REL_ADRESSE1)) $criteria->add(RelancesPeer::REL_ADRESSE1, $this->rel_adresse1);
        if ($this->isColumnModified(RelancesPeer::REL_ADRESSE2)) $criteria->add(RelancesPeer::REL_ADRESSE2, $this->rel_adresse2);
        if ($this->isColumnModified(RelancesPeer::REL_ADRESSE3)) $criteria->add(RelancesPeer::REL_ADRESSE3, $this->rel_adresse3);
        if ($this->isColumnModified(RelancesPeer::REL_CODE_POSTAL)) $criteria->add(RelancesPeer::REL_CODE_POSTAL, $this->rel_code_postal);
        if ($this->isColumnModified(RelancesPeer::REL_VILLE)) $criteria->add(RelancesPeer::REL_VILLE, $this->rel_ville);
        if ($this->isColumnModified(RelancesPeer::REL_PAYS)) $criteria->add(RelancesPeer::REL_PAYS, $this->rel_pays);
        if ($this->isColumnModified(RelancesPeer::LAST_RECALCULATION_DATE)) $criteria->add(RelancesPeer::LAST_RECALCULATION_DATE, $this->last_recalculation_date);

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
        $criteria = new Criteria(RelancesPeer::DATABASE_NAME);
        $criteria->add(RelancesPeer::REL_ID, $this->rel_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRelId();
    }

    /**
     * Generic method to set the primary key (rel_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRelId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRelId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Relances (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRelNumero($this->getRelNumero());
        $copyObj->setRelReference($this->getRelReference());
        $copyObj->setClId($this->getClId());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setRelEcheance($this->getRelEcheance());
        $copyObj->setRelTypeId($this->getRelTypeId());
        $copyObj->setRelParentId($this->getRelParentId());
        $copyObj->setRelStatutId($this->getRelStatutId());
        $copyObj->setRelLang($this->getRelLang());
        $copyObj->setRelCtFacturation($this->getRelCtFacturation());
        $copyObj->setRelAdresse1($this->getRelAdresse1());
        $copyObj->setRelAdresse2($this->getRelAdresse2());
        $copyObj->setRelAdresse3($this->getRelAdresse3());
        $copyObj->setRelCodePostal($this->getRelCodePostal());
        $copyObj->setRelVille($this->getRelVille());
        $copyObj->setRelPays($this->getRelPays());
        $copyObj->setLastRecalculationDate($this->getLastRecalculationDate());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getLnkRelanceFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkRelanceFacture($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRelanceStatutss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRelanceStatuts($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRelId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Relances Clone of current object.
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
     * @return RelancesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RelancesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Clients object.
     *
     * @param                  Clients $v
     * @return Relances The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClients(Clients $v = null)
    {
        if ($v === null) {
            $this->setClId(NULL);
        } else {
            $this->setClId($v->getClId());
        }

        $this->aClients = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Clients object, it will not be re-added.
        if ($v !== null) {
            $v->addRelances($this);
        }


        return $this;
    }


    /**
     * Get the associated Clients object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Clients The associated Clients object.
     * @throws PropelException
     */
    public function getClients(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClients === null && ($this->cl_id !== null) && $doQuery) {
            $this->aClients = ClientsQuery::create()->findPk($this->cl_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClients->addRelancess($this);
             */
        }

        return $this->aClients;
    }

    /**
     * Declares an association between this object and a RRelanceTypes object.
     *
     * @param                  RRelanceTypes $v
     * @return Relances The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRRelanceTypes(RRelanceTypes $v = null)
    {
        if ($v === null) {
            $this->setRelTypeId(NULL);
        } else {
            $this->setRelTypeId($v->getRRelTypeId());
        }

        $this->aRRelanceTypes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RRelanceTypes object, it will not be re-added.
        if ($v !== null) {
            $v->addRelances($this);
        }


        return $this;
    }


    /**
     * Get the associated RRelanceTypes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RRelanceTypes The associated RRelanceTypes object.
     * @throws PropelException
     */
    public function getRRelanceTypes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRRelanceTypes === null && ($this->rel_type_id !== null) && $doQuery) {
            $this->aRRelanceTypes = RRelanceTypesQuery::create()->findPk($this->rel_type_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRRelanceTypes->addRelancess($this);
             */
        }

        return $this->aRRelanceTypes;
    }

    /**
     * Declares an association between this object and a RRelanceStatuts object.
     *
     * @param                  RRelanceStatuts $v
     * @return Relances The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRRelanceStatuts(RRelanceStatuts $v = null)
    {
        if ($v === null) {
            $this->setRelStatutId(NULL);
        } else {
            $this->setRelStatutId($v->getRRelStatutId());
        }

        $this->aRRelanceStatuts = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RRelanceStatuts object, it will not be re-added.
        if ($v !== null) {
            $v->addRelances($this);
        }


        return $this;
    }


    /**
     * Get the associated RRelanceStatuts object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RRelanceStatuts The associated RRelanceStatuts object.
     * @throws PropelException
     */
    public function getRRelanceStatuts(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRRelanceStatuts === null && ($this->rel_statut_id !== null) && $doQuery) {
            $this->aRRelanceStatuts = RRelanceStatutsQuery::create()->findPk($this->rel_statut_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRRelanceStatuts->addRelancess($this);
             */
        }

        return $this->aRRelanceStatuts;
    }

    /**
     * Declares an association between this object and a ClientFactureOptions object.
     *
     * @param                  ClientFactureOptions $v
     * @return Relances The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClientFactureOptions(ClientFactureOptions $v = null)
    {
        if ($v === null) {
            $this->setClId(NULL);
        } else {
            $this->setClId($v->getClId());
        }

        $this->aClientFactureOptions = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ClientFactureOptions object, it will not be re-added.
        if ($v !== null) {
            $v->addRelances($this);
        }


        return $this;
    }


    /**
     * Get the associated ClientFactureOptions object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ClientFactureOptions The associated ClientFactureOptions object.
     * @throws PropelException
     */
    public function getClientFactureOptions(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClientFactureOptions === null && ($this->cl_id !== null) && $doQuery) {
            $this->aClientFactureOptions = ClientFactureOptionsQuery::create()
                ->filterByRelances($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClientFactureOptions->addRelancess($this);
             */
        }

        return $this->aClientFactureOptions;
    }

    /**
     * Declares an association between this object and a Contacts object.
     *
     * @param                  Contacts $v
     * @return Relances The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContactFacturation(Contacts $v = null)
    {
        if ($v === null) {
            $this->setRelCtFacturation(NULL);
        } else {
            $this->setRelCtFacturation($v->getCtId());
        }

        $this->aContactFacturation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Contacts object, it will not be re-added.
        if ($v !== null) {
            $v->addRelances($this);
        }


        return $this;
    }


    /**
     * Get the associated Contacts object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Contacts The associated Contacts object.
     * @throws PropelException
     */
    public function getContactFacturation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aContactFacturation === null && ($this->rel_ct_facturation !== null) && $doQuery) {
            $this->aContactFacturation = ContactsQuery::create()->findPk($this->rel_ct_facturation, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContactFacturation->addRelancess($this);
             */
        }

        return $this->aContactFacturation;
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
        if ('LnkRelanceFacture' == $relationName) {
            $this->initLnkRelanceFactures();
        }
        if ('RelanceStatuts' == $relationName) {
            $this->initRelanceStatutss();
        }
    }

    /**
     * Clears out the collLnkRelanceFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Relances The current object (for fluent API support)
     * @see        addLnkRelanceFactures()
     */
    public function clearLnkRelanceFactures()
    {
        $this->collLnkRelanceFactures = null; // important to set this to null since that means it is uninitialized
        $this->collLnkRelanceFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkRelanceFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkRelanceFactures($v = true)
    {
        $this->collLnkRelanceFacturesPartial = $v;
    }

    /**
     * Initializes the collLnkRelanceFactures collection.
     *
     * By default this just sets the collLnkRelanceFactures collection to an empty array (like clearcollLnkRelanceFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkRelanceFactures($overrideExisting = true)
    {
        if (null !== $this->collLnkRelanceFactures && !$overrideExisting) {
            return;
        }
        $this->collLnkRelanceFactures = new PropelObjectCollection();
        $this->collLnkRelanceFactures->setModel('LnkRelanceFacture');
    }

    /**
     * Gets an array of LnkRelanceFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Relances is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkRelanceFacture[] List of LnkRelanceFacture objects
     * @throws PropelException
     */
    public function getLnkRelanceFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkRelanceFacturesPartial && !$this->isNew();
        if (null === $this->collLnkRelanceFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkRelanceFactures) {
                // return empty collection
                $this->initLnkRelanceFactures();
            } else {
                $collLnkRelanceFactures = LnkRelanceFactureQuery::create(null, $criteria)
                    ->filterByRelances($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkRelanceFacturesPartial && count($collLnkRelanceFactures)) {
                      $this->initLnkRelanceFactures(false);

                      foreach ($collLnkRelanceFactures as $obj) {
                        if (false == $this->collLnkRelanceFactures->contains($obj)) {
                          $this->collLnkRelanceFactures->append($obj);
                        }
                      }

                      $this->collLnkRelanceFacturesPartial = true;
                    }

                    $collLnkRelanceFactures->getInternalIterator()->rewind();

                    return $collLnkRelanceFactures;
                }

                if ($partial && $this->collLnkRelanceFactures) {
                    foreach ($this->collLnkRelanceFactures as $obj) {
                        if ($obj->isNew()) {
                            $collLnkRelanceFactures[] = $obj;
                        }
                    }
                }

                $this->collLnkRelanceFactures = $collLnkRelanceFactures;
                $this->collLnkRelanceFacturesPartial = false;
            }
        }

        return $this->collLnkRelanceFactures;
    }

    /**
     * Sets a collection of LnkRelanceFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkRelanceFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Relances The current object (for fluent API support)
     */
    public function setLnkRelanceFactures(PropelCollection $lnkRelanceFactures, PropelPDO $con = null)
    {
        $lnkRelanceFacturesToDelete = $this->getLnkRelanceFactures(new Criteria(), $con)->diff($lnkRelanceFactures);


        $this->lnkRelanceFacturesScheduledForDeletion = $lnkRelanceFacturesToDelete;

        foreach ($lnkRelanceFacturesToDelete as $lnkRelanceFactureRemoved) {
            $lnkRelanceFactureRemoved->setRelances(null);
        }

        $this->collLnkRelanceFactures = null;
        foreach ($lnkRelanceFactures as $lnkRelanceFacture) {
            $this->addLnkRelanceFacture($lnkRelanceFacture);
        }

        $this->collLnkRelanceFactures = $lnkRelanceFactures;
        $this->collLnkRelanceFacturesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkRelanceFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkRelanceFacture objects.
     * @throws PropelException
     */
    public function countLnkRelanceFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkRelanceFacturesPartial && !$this->isNew();
        if (null === $this->collLnkRelanceFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkRelanceFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkRelanceFactures());
            }
            $query = LnkRelanceFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRelances($this)
                ->count($con);
        }

        return count($this->collLnkRelanceFactures);
    }

    /**
     * Method called to associate a LnkRelanceFacture object to this object
     * through the LnkRelanceFacture foreign key attribute.
     *
     * @param    LnkRelanceFacture $l LnkRelanceFacture
     * @return Relances The current object (for fluent API support)
     */
    public function addLnkRelanceFacture(LnkRelanceFacture $l)
    {
        if ($this->collLnkRelanceFactures === null) {
            $this->initLnkRelanceFactures();
            $this->collLnkRelanceFacturesPartial = true;
        }

        if (!in_array($l, $this->collLnkRelanceFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkRelanceFacture($l);

            if ($this->lnkRelanceFacturesScheduledForDeletion and $this->lnkRelanceFacturesScheduledForDeletion->contains($l)) {
                $this->lnkRelanceFacturesScheduledForDeletion->remove($this->lnkRelanceFacturesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkRelanceFacture $lnkRelanceFacture The lnkRelanceFacture object to add.
     */
    protected function doAddLnkRelanceFacture($lnkRelanceFacture)
    {
        $this->collLnkRelanceFactures[]= $lnkRelanceFacture;
        $lnkRelanceFacture->setRelances($this);
    }

    /**
     * @param	LnkRelanceFacture $lnkRelanceFacture The lnkRelanceFacture object to remove.
     * @return Relances The current object (for fluent API support)
     */
    public function removeLnkRelanceFacture($lnkRelanceFacture)
    {
        if ($this->getLnkRelanceFactures()->contains($lnkRelanceFacture)) {
            $this->collLnkRelanceFactures->remove($this->collLnkRelanceFactures->search($lnkRelanceFacture));
            if (null === $this->lnkRelanceFacturesScheduledForDeletion) {
                $this->lnkRelanceFacturesScheduledForDeletion = clone $this->collLnkRelanceFactures;
                $this->lnkRelanceFacturesScheduledForDeletion->clear();
            }
            $this->lnkRelanceFacturesScheduledForDeletion[]= $lnkRelanceFacture;
            $lnkRelanceFacture->setRelances(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Relances is new, it will return
     * an empty collection; or if this Relances has previously
     * been saved, it will retrieve related LnkRelanceFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Relances.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkRelanceFacture[] List of LnkRelanceFacture objects
     */
    public function getLnkRelanceFacturesJoinFactures($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkRelanceFactureQuery::create(null, $criteria);
        $query->joinWith('Factures', $join_behavior);

        return $this->getLnkRelanceFactures($query, $con);
    }

    /**
     * Clears out the collRelanceStatutss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Relances The current object (for fluent API support)
     * @see        addRelanceStatutss()
     */
    public function clearRelanceStatutss()
    {
        $this->collRelanceStatutss = null; // important to set this to null since that means it is uninitialized
        $this->collRelanceStatutssPartial = null;

        return $this;
    }

    /**
     * reset is the collRelanceStatutss collection loaded partially
     *
     * @return void
     */
    public function resetPartialRelanceStatutss($v = true)
    {
        $this->collRelanceStatutssPartial = $v;
    }

    /**
     * Initializes the collRelanceStatutss collection.
     *
     * By default this just sets the collRelanceStatutss collection to an empty array (like clearcollRelanceStatutss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRelanceStatutss($overrideExisting = true)
    {
        if (null !== $this->collRelanceStatutss && !$overrideExisting) {
            return;
        }
        $this->collRelanceStatutss = new PropelObjectCollection();
        $this->collRelanceStatutss->setModel('RelanceStatuts');
    }

    /**
     * Gets an array of RelanceStatuts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Relances is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|RelanceStatuts[] List of RelanceStatuts objects
     * @throws PropelException
     */
    public function getRelanceStatutss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRelanceStatutssPartial && !$this->isNew();
        if (null === $this->collRelanceStatutss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRelanceStatutss) {
                // return empty collection
                $this->initRelanceStatutss();
            } else {
                $collRelanceStatutss = RelanceStatutsQuery::create(null, $criteria)
                    ->filterByRelances($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRelanceStatutssPartial && count($collRelanceStatutss)) {
                      $this->initRelanceStatutss(false);

                      foreach ($collRelanceStatutss as $obj) {
                        if (false == $this->collRelanceStatutss->contains($obj)) {
                          $this->collRelanceStatutss->append($obj);
                        }
                      }

                      $this->collRelanceStatutssPartial = true;
                    }

                    $collRelanceStatutss->getInternalIterator()->rewind();

                    return $collRelanceStatutss;
                }

                if ($partial && $this->collRelanceStatutss) {
                    foreach ($this->collRelanceStatutss as $obj) {
                        if ($obj->isNew()) {
                            $collRelanceStatutss[] = $obj;
                        }
                    }
                }

                $this->collRelanceStatutss = $collRelanceStatutss;
                $this->collRelanceStatutssPartial = false;
            }
        }

        return $this->collRelanceStatutss;
    }

    /**
     * Sets a collection of RelanceStatuts objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $relanceStatutss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Relances The current object (for fluent API support)
     */
    public function setRelanceStatutss(PropelCollection $relanceStatutss, PropelPDO $con = null)
    {
        $relanceStatutssToDelete = $this->getRelanceStatutss(new Criteria(), $con)->diff($relanceStatutss);


        $this->relanceStatutssScheduledForDeletion = $relanceStatutssToDelete;

        foreach ($relanceStatutssToDelete as $relanceStatutsRemoved) {
            $relanceStatutsRemoved->setRelances(null);
        }

        $this->collRelanceStatutss = null;
        foreach ($relanceStatutss as $relanceStatuts) {
            $this->addRelanceStatuts($relanceStatuts);
        }

        $this->collRelanceStatutss = $relanceStatutss;
        $this->collRelanceStatutssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related RelanceStatuts objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related RelanceStatuts objects.
     * @throws PropelException
     */
    public function countRelanceStatutss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRelanceStatutssPartial && !$this->isNew();
        if (null === $this->collRelanceStatutss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRelanceStatutss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRelanceStatutss());
            }
            $query = RelanceStatutsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRelances($this)
                ->count($con);
        }

        return count($this->collRelanceStatutss);
    }

    /**
     * Method called to associate a RelanceStatuts object to this object
     * through the RelanceStatuts foreign key attribute.
     *
     * @param    RelanceStatuts $l RelanceStatuts
     * @return Relances The current object (for fluent API support)
     */
    public function addRelanceStatuts(RelanceStatuts $l)
    {
        if ($this->collRelanceStatutss === null) {
            $this->initRelanceStatutss();
            $this->collRelanceStatutssPartial = true;
        }

        if (!in_array($l, $this->collRelanceStatutss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRelanceStatuts($l);

            if ($this->relanceStatutssScheduledForDeletion and $this->relanceStatutssScheduledForDeletion->contains($l)) {
                $this->relanceStatutssScheduledForDeletion->remove($this->relanceStatutssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RelanceStatuts $relanceStatuts The relanceStatuts object to add.
     */
    protected function doAddRelanceStatuts($relanceStatuts)
    {
        $this->collRelanceStatutss[]= $relanceStatuts;
        $relanceStatuts->setRelances($this);
    }

    /**
     * @param	RelanceStatuts $relanceStatuts The relanceStatuts object to remove.
     * @return Relances The current object (for fluent API support)
     */
    public function removeRelanceStatuts($relanceStatuts)
    {
        if ($this->getRelanceStatutss()->contains($relanceStatuts)) {
            $this->collRelanceStatutss->remove($this->collRelanceStatutss->search($relanceStatuts));
            if (null === $this->relanceStatutssScheduledForDeletion) {
                $this->relanceStatutssScheduledForDeletion = clone $this->collRelanceStatutss;
                $this->relanceStatutssScheduledForDeletion->clear();
            }
            $this->relanceStatutssScheduledForDeletion[]= clone $relanceStatuts;
            $relanceStatuts->setRelances(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Relances is new, it will return
     * an empty collection; or if this Relances has previously
     * been saved, it will retrieve related RelanceStatutss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Relances.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|RelanceStatuts[] List of RelanceStatuts objects
     */
    public function getRelanceStatutssJoinRRelanceStatuts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelanceStatutsQuery::create(null, $criteria);
        $query->joinWith('RRelanceStatuts', $join_behavior);

        return $this->getRelanceStatutss($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->rel_id = null;
        $this->rel_numero = null;
        $this->rel_reference = null;
        $this->cl_id = null;
        $this->date_create = null;
        $this->rel_echeance = null;
        $this->rel_type_id = null;
        $this->rel_parent_id = null;
        $this->rel_statut_id = null;
        $this->rel_lang = null;
        $this->rel_ct_facturation = null;
        $this->rel_adresse1 = null;
        $this->rel_adresse2 = null;
        $this->rel_adresse3 = null;
        $this->rel_code_postal = null;
        $this->rel_ville = null;
        $this->rel_pays = null;
        $this->last_recalculation_date = null;
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
            if ($this->collLnkRelanceFactures) {
                foreach ($this->collLnkRelanceFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRelanceStatutss) {
                foreach ($this->collRelanceStatutss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aClients instanceof Persistent) {
              $this->aClients->clearAllReferences($deep);
            }
            if ($this->aRRelanceTypes instanceof Persistent) {
              $this->aRRelanceTypes->clearAllReferences($deep);
            }
            if ($this->aRRelanceStatuts instanceof Persistent) {
              $this->aRRelanceStatuts->clearAllReferences($deep);
            }
            if ($this->aClientFactureOptions instanceof Persistent) {
              $this->aClientFactureOptions->clearAllReferences($deep);
            }
            if ($this->aContactFacturation instanceof Persistent) {
              $this->aContactFacturation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collLnkRelanceFactures instanceof PropelCollection) {
            $this->collLnkRelanceFactures->clearIterator();
        }
        $this->collLnkRelanceFactures = null;
        if ($this->collRelanceStatutss instanceof PropelCollection) {
            $this->collRelanceStatutss->clearIterator();
        }
        $this->collRelanceStatutss = null;
        $this->aClients = null;
        $this->aRRelanceTypes = null;
        $this->aRRelanceStatuts = null;
        $this->aClientFactureOptions = null;
        $this->aContactFacturation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RelancesPeer::DEFAULT_STRING_FORMAT);
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
                return BaseRelancesPeer::getConnection();
            }
}
