<?php


/**
 * Base class that represents a row from the 'journal_de_vente_ligne' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseJournalDeVenteLigne extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'JournalDeVenteLignePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        JournalDeVenteLignePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the jdvl_id field.
     * @var        string
     */
    protected $jdvl_id;

    /**
     * The value for the jdvl_type field.
     * @var        string
     */
    protected $jdvl_type;

    /**
     * The value for the jdvl_date field.
     * @var        string
     */
    protected $jdvl_date;

    /**
     * The value for the jdvl_journal field.
     * @var        string
     */
    protected $jdvl_journal;

    /**
     * The value for the jdvl_general field.
     * @var        string
     */
    protected $jdvl_general;

    /**
     * The value for the jdvl_auxiliaire field.
     * @var        string
     */
    protected $jdvl_auxiliaire;

    /**
     * The value for the jdvl_sens field.
     * @var        string
     */
    protected $jdvl_sens;

    /**
     * The value for the jdvl_montant field.
     * @var        string
     */
    protected $jdvl_montant;

    /**
     * The value for the jdvl_client field.
     * @var        string
     */
    protected $jdvl_client;

    /**
     * The value for the jdvl_reference field.
     * @var        string
     */
    protected $jdvl_reference;

    /**
     * The value for the jdvl_op_id field.
     * @var        int
     */
    protected $jdvl_op_id;

    /**
     * The value for the jdvl_date_echeance field.
     * @var        string
     */
    protected $jdvl_date_echeance;

    /**
     * The value for the jdvl_section_analytique_1 field.
     * @var        string
     */
    protected $jdvl_section_analytique_1;

    /**
     * The value for the jdvl_section_analytique_2 field.
     * @var        string
     */
    protected $jdvl_section_analytique_2;

    /**
     * The value for the jdvl_section_analytique_3 field.
     * @var        string
     */
    protected $jdvl_section_analytique_3;

    /**
     * The value for the jdvl_section_analytique_4 field.
     * @var        string
     */
    protected $jdvl_section_analytique_4;

    /**
     * The value for the jdvl_section_analytique_5 field.
     * @var        string
     */
    protected $jdvl_section_analytique_5;

    /**
     * The value for the jdvl_order field.
     * @var        int
     */
    protected $jdvl_order;

    /**
     * The value for the jdv_id field.
     * @var        int
     */
    protected $jdv_id;

    /**
     * The value for the date_create field.
     * @var        string
     */
    protected $date_create;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * @var        JournalDeVente
     */
    protected $aJournalDeVente;

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
     * Get the [jdvl_id] column value.
     *
     * @return string
     */
    public function getJdvlId()
    {

        return $this->jdvl_id;
    }

    /**
     * Get the [jdvl_type] column value.
     *
     * @return string
     */
    public function getJdvlType()
    {

        return $this->jdvl_type;
    }

    /**
     * Get the [optionally formatted] temporal [jdvl_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getJdvlDate($format = 'Y-m-d H:i:s')
    {
        if ($this->jdvl_date === null) {
            return null;
        }

        if ($this->jdvl_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->jdvl_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->jdvl_date, true), $x);
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
     * Get the [jdvl_journal] column value.
     *
     * @return string
     */
    public function getJdvlJournal()
    {

        return $this->jdvl_journal;
    }

    /**
     * Get the [jdvl_general] column value.
     *
     * @return string
     */
    public function getJdvlGeneral()
    {

        return $this->jdvl_general;
    }

    /**
     * Get the [jdvl_auxiliaire] column value.
     *
     * @return string
     */
    public function getJdvlAuxiliaire()
    {

        return $this->jdvl_auxiliaire;
    }

    /**
     * Get the [jdvl_sens] column value.
     *
     * @return string
     */
    public function getJdvlSens()
    {

        return $this->jdvl_sens;
    }

    /**
     * Get the [jdvl_montant] column value.
     *
     * @return string
     */
    public function getJdvlMontant()
    {

        return $this->jdvl_montant;
    }

    /**
     * Get the [jdvl_client] column value.
     *
     * @return string
     */
    public function getJdvlClient()
    {

        return $this->jdvl_client;
    }

    /**
     * Get the [jdvl_reference] column value.
     *
     * @return string
     */
    public function getJdvlReference()
    {

        return $this->jdvl_reference;
    }

    /**
     * Get the [jdvl_op_id] column value.
     *
     * @return int
     */
    public function getJdvlOpId()
    {

        return $this->jdvl_op_id;
    }

    /**
     * Get the [optionally formatted] temporal [jdvl_date_echeance] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getJdvlDateEcheance($format = 'Y-m-d H:i:s')
    {
        if ($this->jdvl_date_echeance === null) {
            return null;
        }

        if ($this->jdvl_date_echeance === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->jdvl_date_echeance);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->jdvl_date_echeance, true), $x);
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
     * Get the [jdvl_section_analytique_1] column value.
     *
     * @return string
     */
    public function getJdvlSectionAnalytique1()
    {

        return $this->jdvl_section_analytique_1;
    }

    /**
     * Get the [jdvl_section_analytique_2] column value.
     *
     * @return string
     */
    public function getJdvlSectionAnalytique2()
    {

        return $this->jdvl_section_analytique_2;
    }

    /**
     * Get the [jdvl_section_analytique_3] column value.
     *
     * @return string
     */
    public function getJdvlSectionAnalytique3()
    {

        return $this->jdvl_section_analytique_3;
    }

    /**
     * Get the [jdvl_section_analytique_4] column value.
     *
     * @return string
     */
    public function getJdvlSectionAnalytique4()
    {

        return $this->jdvl_section_analytique_4;
    }

    /**
     * Get the [jdvl_section_analytique_5] column value.
     *
     * @return string
     */
    public function getJdvlSectionAnalytique5()
    {

        return $this->jdvl_section_analytique_5;
    }

    /**
     * Get the [jdvl_order] column value.
     *
     * @return int
     */
    public function getJdvlOrder()
    {

        return $this->jdvl_order;
    }

    /**
     * Get the [jdv_id] column value.
     *
     * @return int
     */
    public function getJdvId()
    {

        return $this->jdv_id;
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
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
    }

    /**
     * Set the value of [jdvl_id] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->jdvl_id !== $v) {
            $this->jdvl_id = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_ID;
        }


        return $this;
    } // setJdvlId()

    /**
     * Set the value of [jdvl_type] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_type !== $v) {
            $this->jdvl_type = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_TYPE;
        }


        return $this;
    } // setJdvlType()

    /**
     * Sets the value of [jdvl_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->jdvl_date !== null || $dt !== null) {
            $currentDateAsString = ($this->jdvl_date !== null && $tmpDt = new DateTime($this->jdvl_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->jdvl_date = $newDateAsString;
                $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_DATE;
            }
        } // if either are not null


        return $this;
    } // setJdvlDate()

    /**
     * Set the value of [jdvl_journal] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlJournal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_journal !== $v) {
            $this->jdvl_journal = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_JOURNAL;
        }


        return $this;
    } // setJdvlJournal()

    /**
     * Set the value of [jdvl_general] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlGeneral($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_general !== $v) {
            $this->jdvl_general = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_GENERAL;
        }


        return $this;
    } // setJdvlGeneral()

    /**
     * Set the value of [jdvl_auxiliaire] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlAuxiliaire($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_auxiliaire !== $v) {
            $this->jdvl_auxiliaire = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_AUXILIAIRE;
        }


        return $this;
    } // setJdvlAuxiliaire()

    /**
     * Set the value of [jdvl_sens] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlSens($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_sens !== $v) {
            $this->jdvl_sens = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_SENS;
        }


        return $this;
    } // setJdvlSens()

    /**
     * Set the value of [jdvl_montant] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlMontant($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_montant !== $v) {
            $this->jdvl_montant = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_MONTANT;
        }


        return $this;
    } // setJdvlMontant()

    /**
     * Set the value of [jdvl_client] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlClient($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_client !== $v) {
            $this->jdvl_client = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_CLIENT;
        }


        return $this;
    } // setJdvlClient()

    /**
     * Set the value of [jdvl_reference] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlReference($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_reference !== $v) {
            $this->jdvl_reference = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_REFERENCE;
        }


        return $this;
    } // setJdvlReference()

    /**
     * Set the value of [jdvl_op_id] column.
     *
     * @param  int $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlOpId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->jdvl_op_id !== $v) {
                    $this->jdvl_op_id = $v;
                    $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_OP_ID;
                }


        return $this;
    } // setJdvlOpId()

    /**
     * Sets the value of [jdvl_date_echeance] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlDateEcheance($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->jdvl_date_echeance !== null || $dt !== null) {
            $currentDateAsString = ($this->jdvl_date_echeance !== null && $tmpDt = new DateTime($this->jdvl_date_echeance)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->jdvl_date_echeance = $newDateAsString;
                $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE;
            }
        } // if either are not null


        return $this;
    } // setJdvlDateEcheance()

    /**
     * Set the value of [jdvl_section_analytique_1] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlSectionAnalytique1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_section_analytique_1 !== $v) {
            $this->jdvl_section_analytique_1 = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_1;
        }


        return $this;
    } // setJdvlSectionAnalytique1()

    /**
     * Set the value of [jdvl_section_analytique_2] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlSectionAnalytique2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_section_analytique_2 !== $v) {
            $this->jdvl_section_analytique_2 = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_2;
        }


        return $this;
    } // setJdvlSectionAnalytique2()

    /**
     * Set the value of [jdvl_section_analytique_3] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlSectionAnalytique3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_section_analytique_3 !== $v) {
            $this->jdvl_section_analytique_3 = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_3;
        }


        return $this;
    } // setJdvlSectionAnalytique3()

    /**
     * Set the value of [jdvl_section_analytique_4] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlSectionAnalytique4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_section_analytique_4 !== $v) {
            $this->jdvl_section_analytique_4 = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_4;
        }


        return $this;
    } // setJdvlSectionAnalytique4()

    /**
     * Set the value of [jdvl_section_analytique_5] column.
     *
     * @param  string $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlSectionAnalytique5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->jdvl_section_analytique_5 !== $v) {
            $this->jdvl_section_analytique_5 = $v;
            $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_5;
        }


        return $this;
    } // setJdvlSectionAnalytique5()

    /**
     * Set the value of [jdvl_order] column.
     *
     * @param  int $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvlOrder($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->jdvl_order !== $v) {
                    $this->jdvl_order = $v;
                    $this->modifiedColumns[] = JournalDeVenteLignePeer::JDVL_ORDER;
                }


        return $this;
    } // setJdvlOrder()

    /**
     * Set the value of [jdv_id] column.
     *
     * @param  int $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setJdvId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->jdv_id !== $v) {
                    $this->jdv_id = $v;
                    $this->modifiedColumns[] = JournalDeVenteLignePeer::JDV_ID;
                }

        if ($this->aJournalDeVente !== null && $this->aJournalDeVente->getJdvId() !== $v) {
            $this->aJournalDeVente = null;
        }


        return $this;
    } // setJdvId()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return JournalDeVenteLigne The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = JournalDeVenteLignePeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return JournalDeVenteLigne The current object (for fluent API support)
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
                    $this->modifiedColumns[] = JournalDeVenteLignePeer::USER_ID;
                }


        return $this;
    } // setUserId()

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

            $this->jdvl_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->jdvl_type = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->jdvl_date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->jdvl_journal = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->jdvl_general = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->jdvl_auxiliaire = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->jdvl_sens = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->jdvl_montant = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->jdvl_client = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->jdvl_reference = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->jdvl_op_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->jdvl_date_echeance = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->jdvl_section_analytique_1 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->jdvl_section_analytique_2 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->jdvl_section_analytique_3 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->jdvl_section_analytique_4 = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->jdvl_section_analytique_5 = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->jdvl_order = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->jdv_id = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->date_create = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->user_id = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = JournalDeVenteLignePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating JournalDeVenteLigne object", $e);
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

        if ($this->aJournalDeVente !== null && $this->jdv_id !== $this->aJournalDeVente->getJdvId()) {
            $this->aJournalDeVente = null;
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
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = JournalDeVenteLignePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aJournalDeVente = null;
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
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = JournalDeVenteLigneQuery::create()
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
            $con = Propel::getConnection(JournalDeVenteLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                JournalDeVenteLignePeer::addInstanceToPool($this);
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

            if ($this->aJournalDeVente !== null) {
                if ($this->aJournalDeVente->isModified() || $this->aJournalDeVente->isNew()) {
                    $affectedRows += $this->aJournalDeVente->save($con);
                }
                $this->setJournalDeVente($this->aJournalDeVente);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_id`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_type`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_date`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_JOURNAL)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_journal`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_GENERAL)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_general`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_AUXILIAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_auxiliaire`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SENS)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_sens`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_MONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_montant`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_CLIENT)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_client`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_reference`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_OP_ID)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_op_id`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_date_echeance`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_1)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_section_analytique_1`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_2)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_section_analytique_2`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_3)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_section_analytique_3`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_4)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_section_analytique_4`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_5)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_section_analytique_5`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`jdvl_order`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDV_ID)) {
            $modifiedColumns[':p' . $index++]  = '`jdv_id`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(JournalDeVenteLignePeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }

        $sql = sprintf(
            'INSERT INTO `journal_de_vente_ligne` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`jdvl_id`':
                        $stmt->bindValue($identifier, $this->jdvl_id, PDO::PARAM_STR);
                        break;
                    case '`jdvl_type`':
                        $stmt->bindValue($identifier, $this->jdvl_type, PDO::PARAM_STR);
                        break;
                    case '`jdvl_date`':
                        $stmt->bindValue($identifier, $this->jdvl_date, PDO::PARAM_STR);
                        break;
                    case '`jdvl_journal`':
                        $stmt->bindValue($identifier, $this->jdvl_journal, PDO::PARAM_STR);
                        break;
                    case '`jdvl_general`':
                        $stmt->bindValue($identifier, $this->jdvl_general, PDO::PARAM_STR);
                        break;
                    case '`jdvl_auxiliaire`':
                        $stmt->bindValue($identifier, $this->jdvl_auxiliaire, PDO::PARAM_STR);
                        break;
                    case '`jdvl_sens`':
                        $stmt->bindValue($identifier, $this->jdvl_sens, PDO::PARAM_STR);
                        break;
                    case '`jdvl_montant`':
                        $stmt->bindValue($identifier, $this->jdvl_montant, PDO::PARAM_STR);
                        break;
                    case '`jdvl_client`':
                        $stmt->bindValue($identifier, $this->jdvl_client, PDO::PARAM_STR);
                        break;
                    case '`jdvl_reference`':
                        $stmt->bindValue($identifier, $this->jdvl_reference, PDO::PARAM_STR);
                        break;
                    case '`jdvl_op_id`':
                        $stmt->bindValue($identifier, $this->jdvl_op_id, PDO::PARAM_INT);
                        break;
                    case '`jdvl_date_echeance`':
                        $stmt->bindValue($identifier, $this->jdvl_date_echeance, PDO::PARAM_STR);
                        break;
                    case '`jdvl_section_analytique_1`':
                        $stmt->bindValue($identifier, $this->jdvl_section_analytique_1, PDO::PARAM_STR);
                        break;
                    case '`jdvl_section_analytique_2`':
                        $stmt->bindValue($identifier, $this->jdvl_section_analytique_2, PDO::PARAM_STR);
                        break;
                    case '`jdvl_section_analytique_3`':
                        $stmt->bindValue($identifier, $this->jdvl_section_analytique_3, PDO::PARAM_STR);
                        break;
                    case '`jdvl_section_analytique_4`':
                        $stmt->bindValue($identifier, $this->jdvl_section_analytique_4, PDO::PARAM_STR);
                        break;
                    case '`jdvl_section_analytique_5`':
                        $stmt->bindValue($identifier, $this->jdvl_section_analytique_5, PDO::PARAM_STR);
                        break;
                    case '`jdvl_order`':
                        $stmt->bindValue($identifier, $this->jdvl_order, PDO::PARAM_INT);
                        break;
                    case '`jdv_id`':
                        $stmt->bindValue($identifier, $this->jdv_id, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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

            if ($this->aJournalDeVente !== null) {
                if (!$this->aJournalDeVente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aJournalDeVente->getValidationFailures());
                }
            }


            if (($retval = JournalDeVenteLignePeer::doValidate($this, $columns)) !== true) {
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
        $pos = JournalDeVenteLignePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getJdvlId();
                break;
            case 1:
                return $this->getJdvlType();
                break;
            case 2:
                return $this->getJdvlDate();
                break;
            case 3:
                return $this->getJdvlJournal();
                break;
            case 4:
                return $this->getJdvlGeneral();
                break;
            case 5:
                return $this->getJdvlAuxiliaire();
                break;
            case 6:
                return $this->getJdvlSens();
                break;
            case 7:
                return $this->getJdvlMontant();
                break;
            case 8:
                return $this->getJdvlClient();
                break;
            case 9:
                return $this->getJdvlReference();
                break;
            case 10:
                return $this->getJdvlOpId();
                break;
            case 11:
                return $this->getJdvlDateEcheance();
                break;
            case 12:
                return $this->getJdvlSectionAnalytique1();
                break;
            case 13:
                return $this->getJdvlSectionAnalytique2();
                break;
            case 14:
                return $this->getJdvlSectionAnalytique3();
                break;
            case 15:
                return $this->getJdvlSectionAnalytique4();
                break;
            case 16:
                return $this->getJdvlSectionAnalytique5();
                break;
            case 17:
                return $this->getJdvlOrder();
                break;
            case 18:
                return $this->getJdvId();
                break;
            case 19:
                return $this->getDateCreate();
                break;
            case 20:
                return $this->getUserId();
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
        if (isset($alreadyDumpedObjects['JournalDeVenteLigne'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['JournalDeVenteLigne'][$this->getPrimaryKey()] = true;
        $keys = JournalDeVenteLignePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getJdvlId(),
            $keys[1] => $this->getJdvlType(),
            $keys[2] => $this->getJdvlDate(),
            $keys[3] => $this->getJdvlJournal(),
            $keys[4] => $this->getJdvlGeneral(),
            $keys[5] => $this->getJdvlAuxiliaire(),
            $keys[6] => $this->getJdvlSens(),
            $keys[7] => $this->getJdvlMontant(),
            $keys[8] => $this->getJdvlClient(),
            $keys[9] => $this->getJdvlReference(),
            $keys[10] => $this->getJdvlOpId(),
            $keys[11] => $this->getJdvlDateEcheance(),
            $keys[12] => $this->getJdvlSectionAnalytique1(),
            $keys[13] => $this->getJdvlSectionAnalytique2(),
            $keys[14] => $this->getJdvlSectionAnalytique3(),
            $keys[15] => $this->getJdvlSectionAnalytique4(),
            $keys[16] => $this->getJdvlSectionAnalytique5(),
            $keys[17] => $this->getJdvlOrder(),
            $keys[18] => $this->getJdvId(),
            $keys[19] => $this->getDateCreate(),
            $keys[20] => $this->getUserId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aJournalDeVente) {
                $result['JournalDeVente'] = $this->aJournalDeVente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = JournalDeVenteLignePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setJdvlId($value);
                break;
            case 1:
                $this->setJdvlType($value);
                break;
            case 2:
                $this->setJdvlDate($value);
                break;
            case 3:
                $this->setJdvlJournal($value);
                break;
            case 4:
                $this->setJdvlGeneral($value);
                break;
            case 5:
                $this->setJdvlAuxiliaire($value);
                break;
            case 6:
                $this->setJdvlSens($value);
                break;
            case 7:
                $this->setJdvlMontant($value);
                break;
            case 8:
                $this->setJdvlClient($value);
                break;
            case 9:
                $this->setJdvlReference($value);
                break;
            case 10:
                $this->setJdvlOpId($value);
                break;
            case 11:
                $this->setJdvlDateEcheance($value);
                break;
            case 12:
                $this->setJdvlSectionAnalytique1($value);
                break;
            case 13:
                $this->setJdvlSectionAnalytique2($value);
                break;
            case 14:
                $this->setJdvlSectionAnalytique3($value);
                break;
            case 15:
                $this->setJdvlSectionAnalytique4($value);
                break;
            case 16:
                $this->setJdvlSectionAnalytique5($value);
                break;
            case 17:
                $this->setJdvlOrder($value);
                break;
            case 18:
                $this->setJdvId($value);
                break;
            case 19:
                $this->setDateCreate($value);
                break;
            case 20:
                $this->setUserId($value);
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
        $keys = JournalDeVenteLignePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setJdvlId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setJdvlType($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setJdvlDate($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setJdvlJournal($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setJdvlGeneral($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setJdvlAuxiliaire($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setJdvlSens($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setJdvlMontant($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setJdvlClient($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setJdvlReference($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setJdvlOpId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setJdvlDateEcheance($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setJdvlSectionAnalytique1($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setJdvlSectionAnalytique2($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setJdvlSectionAnalytique3($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setJdvlSectionAnalytique4($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setJdvlSectionAnalytique5($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setJdvlOrder($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setJdvId($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateCreate($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setUserId($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(JournalDeVenteLignePeer::DATABASE_NAME);

        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_ID)) $criteria->add(JournalDeVenteLignePeer::JDVL_ID, $this->jdvl_id);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_TYPE)) $criteria->add(JournalDeVenteLignePeer::JDVL_TYPE, $this->jdvl_type);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_DATE)) $criteria->add(JournalDeVenteLignePeer::JDVL_DATE, $this->jdvl_date);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_JOURNAL)) $criteria->add(JournalDeVenteLignePeer::JDVL_JOURNAL, $this->jdvl_journal);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_GENERAL)) $criteria->add(JournalDeVenteLignePeer::JDVL_GENERAL, $this->jdvl_general);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_AUXILIAIRE)) $criteria->add(JournalDeVenteLignePeer::JDVL_AUXILIAIRE, $this->jdvl_auxiliaire);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SENS)) $criteria->add(JournalDeVenteLignePeer::JDVL_SENS, $this->jdvl_sens);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_MONTANT)) $criteria->add(JournalDeVenteLignePeer::JDVL_MONTANT, $this->jdvl_montant);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_CLIENT)) $criteria->add(JournalDeVenteLignePeer::JDVL_CLIENT, $this->jdvl_client);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_REFERENCE)) $criteria->add(JournalDeVenteLignePeer::JDVL_REFERENCE, $this->jdvl_reference);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_OP_ID)) $criteria->add(JournalDeVenteLignePeer::JDVL_OP_ID, $this->jdvl_op_id);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE)) $criteria->add(JournalDeVenteLignePeer::JDVL_DATE_ECHEANCE, $this->jdvl_date_echeance);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_1)) $criteria->add(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_1, $this->jdvl_section_analytique_1);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_2)) $criteria->add(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_2, $this->jdvl_section_analytique_2);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_3)) $criteria->add(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_3, $this->jdvl_section_analytique_3);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_4)) $criteria->add(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_4, $this->jdvl_section_analytique_4);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_5)) $criteria->add(JournalDeVenteLignePeer::JDVL_SECTION_ANALYTIQUE_5, $this->jdvl_section_analytique_5);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDVL_ORDER)) $criteria->add(JournalDeVenteLignePeer::JDVL_ORDER, $this->jdvl_order);
        if ($this->isColumnModified(JournalDeVenteLignePeer::JDV_ID)) $criteria->add(JournalDeVenteLignePeer::JDV_ID, $this->jdv_id);
        if ($this->isColumnModified(JournalDeVenteLignePeer::DATE_CREATE)) $criteria->add(JournalDeVenteLignePeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(JournalDeVenteLignePeer::USER_ID)) $criteria->add(JournalDeVenteLignePeer::USER_ID, $this->user_id);

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
        $criteria = new Criteria(JournalDeVenteLignePeer::DATABASE_NAME);
        $criteria->add(JournalDeVenteLignePeer::JDVL_ID, $this->jdvl_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getJdvlId();
    }

    /**
     * Generic method to set the primary key (jdvl_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setJdvlId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getJdvlId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of JournalDeVenteLigne (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setJdvlType($this->getJdvlType());
        $copyObj->setJdvlDate($this->getJdvlDate());
        $copyObj->setJdvlJournal($this->getJdvlJournal());
        $copyObj->setJdvlGeneral($this->getJdvlGeneral());
        $copyObj->setJdvlAuxiliaire($this->getJdvlAuxiliaire());
        $copyObj->setJdvlSens($this->getJdvlSens());
        $copyObj->setJdvlMontant($this->getJdvlMontant());
        $copyObj->setJdvlClient($this->getJdvlClient());
        $copyObj->setJdvlReference($this->getJdvlReference());
        $copyObj->setJdvlOpId($this->getJdvlOpId());
        $copyObj->setJdvlDateEcheance($this->getJdvlDateEcheance());
        $copyObj->setJdvlSectionAnalytique1($this->getJdvlSectionAnalytique1());
        $copyObj->setJdvlSectionAnalytique2($this->getJdvlSectionAnalytique2());
        $copyObj->setJdvlSectionAnalytique3($this->getJdvlSectionAnalytique3());
        $copyObj->setJdvlSectionAnalytique4($this->getJdvlSectionAnalytique4());
        $copyObj->setJdvlSectionAnalytique5($this->getJdvlSectionAnalytique5());
        $copyObj->setJdvlOrder($this->getJdvlOrder());
        $copyObj->setJdvId($this->getJdvId());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setUserId($this->getUserId());

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
            $copyObj->setJdvlId(NULL); // this is a auto-increment column, so set to default value
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
     * @return JournalDeVenteLigne Clone of current object.
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
     * @return JournalDeVenteLignePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new JournalDeVenteLignePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a JournalDeVente object.
     *
     * @param                  JournalDeVente $v
     * @return JournalDeVenteLigne The current object (for fluent API support)
     * @throws PropelException
     */
    public function setJournalDeVente(JournalDeVente $v = null)
    {
        if ($v === null) {
            $this->setJdvId(NULL);
        } else {
            $this->setJdvId($v->getJdvId());
        }

        $this->aJournalDeVente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the JournalDeVente object, it will not be re-added.
        if ($v !== null) {
            $v->addJournalDeVenteLigne($this);
        }


        return $this;
    }


    /**
     * Get the associated JournalDeVente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return JournalDeVente The associated JournalDeVente object.
     * @throws PropelException
     */
    public function getJournalDeVente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aJournalDeVente === null && ($this->jdv_id !== null) && $doQuery) {
            $this->aJournalDeVente = JournalDeVenteQuery::create()->findPk($this->jdv_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aJournalDeVente->addJournalDeVenteLignes($this);
             */
        }

        return $this->aJournalDeVente;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->jdvl_id = null;
        $this->jdvl_type = null;
        $this->jdvl_date = null;
        $this->jdvl_journal = null;
        $this->jdvl_general = null;
        $this->jdvl_auxiliaire = null;
        $this->jdvl_sens = null;
        $this->jdvl_montant = null;
        $this->jdvl_client = null;
        $this->jdvl_reference = null;
        $this->jdvl_op_id = null;
        $this->jdvl_date_echeance = null;
        $this->jdvl_section_analytique_1 = null;
        $this->jdvl_section_analytique_2 = null;
        $this->jdvl_section_analytique_3 = null;
        $this->jdvl_section_analytique_4 = null;
        $this->jdvl_section_analytique_5 = null;
        $this->jdvl_order = null;
        $this->jdv_id = null;
        $this->date_create = null;
        $this->user_id = null;
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
            if ($this->aJournalDeVente instanceof Persistent) {
              $this->aJournalDeVente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aJournalDeVente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(JournalDeVenteLignePeer::DEFAULT_STRING_FORMAT);
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
                return BaseJournalDeVenteLignePeer::getConnection();
            }
}
