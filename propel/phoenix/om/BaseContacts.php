<?php


/**
 * Base class that represents a row from the 'contacts' table.
 *
 *
 *
 * @package    propel.generator.phoenix.om
 */
abstract class BaseContacts extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ContactsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ContactsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the ct_id field.
     * @var        int
     */
    protected $ct_id;

    /**
     * The value for the cl_id field.
     * @var        int
     */
    protected $cl_id;

    /**
     * The value for the ct_firstname field.
     * @var        string
     */
    protected $ct_firstname;

    /**
     * The value for the ct_lastname field.
     * @var        string
     */
    protected $ct_lastname;

    /**
     * The value for the ct_email field.
     * @var        string
     */
    protected $ct_email;

    /**
     * The value for the ct_phone field.
     * @var        string
     */
    protected $ct_phone;

    /**
     * The value for the ct_mobile field.
     * @var        string
     */
    protected $ct_mobile;

    /**
     * The value for the ct_fax field.
     * @var        string
     */
    protected $ct_fax;

    /**
     * The value for the ct_title field.
     * @var        string
     */
    protected $ct_title;

    /**
     * The value for the cl_site_id field.
     * @var        int
     */
    protected $cl_site_id;

    /**
     * The value for the ct_newsletter field.
     * @var        boolean
     */
    protected $ct_newsletter;

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
     * The value for the actif field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $actif;

    /**
     * The value for the ct_phone_indicatif field.
     * @var        string
     */
    protected $ct_phone_indicatif;

    /**
     * The value for the ct_mobile_indicatif field.
     * @var        string
     */
    protected $ct_mobile_indicatif;

    /**
     * The value for the ct_fax_indicatif field.
     * @var        string
     */
    protected $ct_fax_indicatif;

    /**
     * The value for the ct_receive_fact_by_email field.
     * @var        boolean
     */
    protected $ct_receive_fact_by_email;

    /**
     * @var        ClientSites
     */
    protected $aClientSites;

    /**
     * @var        Clients
     */
    protected $aClientsRelatedByClId;

    /**
     * @var        PropelObjectCollection|Clients[] Collection to store aggregation of Clients objects.
     */
    protected $collClientssRelatedByClCtFacturation;
    protected $collClientssRelatedByClCtFacturationPartial;

    /**
     * @var        PropelObjectCollection|Clients[] Collection to store aggregation of Clients objects.
     */
    protected $collClientssRelatedByClCtGestion;
    protected $collClientssRelatedByClCtGestionPartial;

    /**
     * @var        PropelObjectCollection|Factures[] Collection to store aggregation of Factures objects.
     */
    protected $collFacturess;
    protected $collFacturessPartial;

    /**
     * @var        PropelObjectCollection|LnkOperationsContactsMail[] Collection to store aggregation of LnkOperationsContactsMail objects.
     */
    protected $collLnkOperationsContactsMails;
    protected $collLnkOperationsContactsMailsPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationssRelatedByOpCtId;
    protected $collOperationssRelatedByOpCtIdPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationssRelatedByOpCtFactId;
    protected $collOperationssRelatedByOpCtFactIdPartial;

    /**
     * @var        PropelObjectCollection|Operations[] Collection to store aggregation of Operations objects.
     */
    protected $collOperationssRelatedByOpCtFactAddrId;
    protected $collOperationssRelatedByOpCtFactAddrIdPartial;

    /**
     * @var        PropelObjectCollection|Relances[] Collection to store aggregation of Relances objects.
     */
    protected $collRelancess;
    protected $collRelancessPartial;

    /**
     * @var        PropelObjectCollection|FactureEditionHistory[] Collection to store aggregation of FactureEditionHistory objects.
     */
    protected $collFactureEditionHistorys;
    protected $collFactureEditionHistorysPartial;

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
    protected $clientssRelatedByClCtFacturationScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $clientssRelatedByClCtGestionScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $facturessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lnkOperationsContactsMailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationssRelatedByOpCtIdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationssRelatedByOpCtFactIdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $operationssRelatedByOpCtFactAddrIdScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $relancessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $factureEditionHistorysScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->actif = true;
    }

    /**
     * Initializes internal state of BaseContacts object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [ct_id] column value.
     *
     * @return int
     */
    public function getCtId()
    {

        return $this->ct_id;
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
     * Get the [ct_firstname] column value.
     *
     * @return string
     */
    public function getCtFirstname()
    {

        return $this->ct_firstname;
    }

    /**
     * Get the [ct_lastname] column value.
     *
     * @return string
     */
    public function getCtLastname()
    {

        return $this->ct_lastname;
    }

    /**
     * Get the [ct_email] column value.
     *
     * @return string
     */
    public function getCtEmail()
    {

        return $this->ct_email;
    }

    /**
     * Get the [ct_phone] column value.
     *
     * @return string
     */
    public function getCtPhone()
    {

        return $this->ct_phone;
    }

    /**
     * Get the [ct_mobile] column value.
     *
     * @return string
     */
    public function getCtMobile()
    {

        return $this->ct_mobile;
    }

    /**
     * Get the [ct_fax] column value.
     *
     * @return string
     */
    public function getCtFax()
    {

        return $this->ct_fax;
    }

    /**
     * Get the [ct_title] column value.
     *
     * @return string
     */
    public function getCtTitle()
    {

        return $this->ct_title;
    }

    /**
     * Get the [cl_site_id] column value.
     *
     * @return int
     */
    public function getClSiteId()
    {

        return $this->cl_site_id;
    }

    /**
     * Get the [ct_newsletter] column value.
     *
     * @return boolean
     */
    public function getCtNewsletter()
    {

        return $this->ct_newsletter;
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
     * Get the [actif] column value.
     *
     * @return boolean
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Get the [ct_phone_indicatif] column value.
     *
     * @return string
     */
    public function getCtPhoneIndicatif()
    {

        return $this->ct_phone_indicatif;
    }

    /**
     * Get the [ct_mobile_indicatif] column value.
     *
     * @return string
     */
    public function getCtMobileIndicatif()
    {

        return $this->ct_mobile_indicatif;
    }

    /**
     * Get the [ct_fax_indicatif] column value.
     *
     * @return string
     */
    public function getCtFaxIndicatif()
    {

        return $this->ct_fax_indicatif;
    }

    /**
     * Get the [ct_receive_fact_by_email] column value.
     *
     * @return boolean
     */
    public function getCtReceiveFactByEmail()
    {

        return $this->ct_receive_fact_by_email;
    }

    /**
     * Set the value of [ct_id] column.
     *
     * @param  int $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->ct_id !== $v) {
                    $this->ct_id = $v;
                    $this->modifiedColumns[] = ContactsPeer::CT_ID;
                }


        return $this;
    } // setCtId()

    /**
     * Set the value of [cl_id] column.
     *
     * @param  int $v new value
     * @return Contacts The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ContactsPeer::CL_ID;
                }

        if ($this->aClientsRelatedByClId !== null && $this->aClientsRelatedByClId->getClId() !== $v) {
            $this->aClientsRelatedByClId = null;
        }


        return $this;
    } // setClId()

    /**
     * Set the value of [ct_firstname] column.
     *
     * @param  string $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtFirstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ct_firstname !== $v) {
            $this->ct_firstname = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_FIRSTNAME;
        }


        return $this;
    } // setCtFirstname()

    /**
     * Set the value of [ct_lastname] column.
     *
     * @param  string $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtLastname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ct_lastname !== $v) {
            $this->ct_lastname = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_LASTNAME;
        }


        return $this;
    } // setCtLastname()

    /**
     * Set the value of [ct_email] column.
     *
     * @param  string $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ct_email !== $v) {
            $this->ct_email = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_EMAIL;
        }


        return $this;
    } // setCtEmail()

    /**
     * Set the value of [ct_phone] column.
     *
     * @param  string $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtPhone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ct_phone !== $v) {
            $this->ct_phone = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_PHONE;
        }


        return $this;
    } // setCtPhone()

    /**
     * Set the value of [ct_mobile] column.
     *
     * @param  string $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtMobile($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ct_mobile !== $v) {
            $this->ct_mobile = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_MOBILE;
        }


        return $this;
    } // setCtMobile()

    /**
     * Set the value of [ct_fax] column.
     *
     * @param  string $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtFax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ct_fax !== $v) {
            $this->ct_fax = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_FAX;
        }


        return $this;
    } // setCtFax()

    /**
     * Set the value of [ct_title] column.
     *
     * @param  string $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ct_title !== $v) {
            $this->ct_title = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_TITLE;
        }


        return $this;
    } // setCtTitle()

    /**
     * Set the value of [cl_site_id] column.
     *
     * @param  int $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setClSiteId($v)
    {
                if ($v === ''){
                    $v = null;
                }
                elseif ($v !== null){
            
                    if(is_numeric($v)) {
                        $v = (int) $v;
                    }
                }
                if ($this->cl_site_id !== $v) {
                    $this->cl_site_id = $v;
                    $this->modifiedColumns[] = ContactsPeer::CL_SITE_ID;
                }

        if ($this->aClientSites !== null && $this->aClientSites->getClSiteId() !== $v) {
            $this->aClientSites = null;
        }


        return $this;
    } // setClSiteId()

    /**
     * Sets the value of the [ct_newsletter] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtNewsletter($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ct_newsletter !== $v) {
            $this->ct_newsletter = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_NEWSLETTER;
        }


        return $this;
    } // setCtNewsletter()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return Contacts The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ContactsPeer::USER_ID;
                }


        return $this;
    } // setUserId()

    /**
     * Set the value of [user_modify] column.
     *
     * @param  int $v new value
     * @return Contacts The current object (for fluent API support)
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
                    $this->modifiedColumns[] = ContactsPeer::USER_MODIFY;
                }


        return $this;
    } // setUserModify()

    /**
     * Sets the value of [date_create] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Contacts The current object (for fluent API support)
     */
    public function setDateCreate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_create !== null || $dt !== null) {
            $currentDateAsString = ($this->date_create !== null && $tmpDt = new DateTime($this->date_create)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_create = $newDateAsString;
                $this->modifiedColumns[] = ContactsPeer::DATE_CREATE;
            }
        } // if either are not null


        return $this;
    } // setDateCreate()

    /**
     * Sets the value of [date_modify] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Contacts The current object (for fluent API support)
     */
    public function setDateModify($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modify !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modify !== null && $tmpDt = new DateTime($this->date_modify)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modify = $newDateAsString;
                $this->modifiedColumns[] = ContactsPeer::DATE_MODIFY;
            }
        } // if either are not null


        return $this;
    } // setDateModify()

    /**
     * Sets the value of the [actif] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Contacts The current object (for fluent API support)
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
            $this->modifiedColumns[] = ContactsPeer::ACTIF;
        }


        return $this;
    } // setActif()

    /**
     * Set the value of [ct_phone_indicatif] column.
     *
     * @param  string $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtPhoneIndicatif($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ct_phone_indicatif !== $v) {
            $this->ct_phone_indicatif = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_PHONE_INDICATIF;
        }


        return $this;
    } // setCtPhoneIndicatif()

    /**
     * Set the value of [ct_mobile_indicatif] column.
     *
     * @param  string $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtMobileIndicatif($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ct_mobile_indicatif !== $v) {
            $this->ct_mobile_indicatif = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_MOBILE_INDICATIF;
        }


        return $this;
    } // setCtMobileIndicatif()

    /**
     * Set the value of [ct_fax_indicatif] column.
     *
     * @param  string $v new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtFaxIndicatif($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ct_fax_indicatif !== $v) {
            $this->ct_fax_indicatif = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_FAX_INDICATIF;
        }


        return $this;
    } // setCtFaxIndicatif()

    /**
     * Sets the value of the [ct_receive_fact_by_email] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Contacts The current object (for fluent API support)
     */
    public function setCtReceiveFactByEmail($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ct_receive_fact_by_email !== $v) {
            $this->ct_receive_fact_by_email = $v;
            $this->modifiedColumns[] = ContactsPeer::CT_RECEIVE_FACT_BY_EMAIL;
        }


        return $this;
    } // setCtReceiveFactByEmail()

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
            if ($this->actif !== true) {
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

            $this->ct_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->cl_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->ct_firstname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->ct_lastname = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->ct_email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ct_phone = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ct_mobile = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->ct_fax = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ct_title = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->cl_site_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->ct_newsletter = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->user_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->user_modify = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->date_create = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->date_modify = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->actif = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
            $this->ct_phone_indicatif = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->ct_mobile_indicatif = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->ct_fax_indicatif = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->ct_receive_fact_by_email = ($row[$startcol + 19] !== null) ? (boolean) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = ContactsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Contacts object", $e);
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

        if ($this->aClientsRelatedByClId !== null && $this->cl_id !== $this->aClientsRelatedByClId->getClId()) {
            $this->aClientsRelatedByClId = null;
        }
        if ($this->aClientSites !== null && $this->cl_site_id !== $this->aClientSites->getClSiteId()) {
            $this->aClientSites = null;
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
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ContactsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aClientSites = null;
            $this->aClientsRelatedByClId = null;
            $this->collClientssRelatedByClCtFacturation = null;

            $this->collClientssRelatedByClCtGestion = null;

            $this->collFacturess = null;

            $this->collLnkOperationsContactsMails = null;

            $this->collOperationssRelatedByOpCtId = null;

            $this->collOperationssRelatedByOpCtFactId = null;

            $this->collOperationssRelatedByOpCtFactAddrId = null;

            $this->collRelancess = null;

            $this->collFactureEditionHistorys = null;

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
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ContactsQuery::create()
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
            $con = Propel::getConnection(ContactsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ContactsPeer::addInstanceToPool($this);
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

            if ($this->aClientSites !== null) {
                if ($this->aClientSites->isModified() || $this->aClientSites->isNew()) {
                    $affectedRows += $this->aClientSites->save($con);
                }
                $this->setClientSites($this->aClientSites);
            }

            if ($this->aClientsRelatedByClId !== null) {
                if ($this->aClientsRelatedByClId->isModified() || $this->aClientsRelatedByClId->isNew()) {
                    $affectedRows += $this->aClientsRelatedByClId->save($con);
                }
                $this->setClientsRelatedByClId($this->aClientsRelatedByClId);
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

            if ($this->clientssRelatedByClCtFacturationScheduledForDeletion !== null) {
                if (!$this->clientssRelatedByClCtFacturationScheduledForDeletion->isEmpty()) {
                    foreach ($this->clientssRelatedByClCtFacturationScheduledForDeletion as $clientsRelatedByClCtFacturation) {
                        // need to save related object because we set the relation to null
                        $clientsRelatedByClCtFacturation->save($con);
                    }
                    $this->clientssRelatedByClCtFacturationScheduledForDeletion = null;
                }
            }

            if ($this->collClientssRelatedByClCtFacturation !== null) {
                foreach ($this->collClientssRelatedByClCtFacturation as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->clientssRelatedByClCtGestionScheduledForDeletion !== null) {
                if (!$this->clientssRelatedByClCtGestionScheduledForDeletion->isEmpty()) {
                    foreach ($this->clientssRelatedByClCtGestionScheduledForDeletion as $clientsRelatedByClCtGestion) {
                        // need to save related object because we set the relation to null
                        $clientsRelatedByClCtGestion->save($con);
                    }
                    $this->clientssRelatedByClCtGestionScheduledForDeletion = null;
                }
            }

            if ($this->collClientssRelatedByClCtGestion !== null) {
                foreach ($this->collClientssRelatedByClCtGestion as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->facturessScheduledForDeletion !== null) {
                if (!$this->facturessScheduledForDeletion->isEmpty()) {
                    foreach ($this->facturessScheduledForDeletion as $factures) {
                        // need to save related object because we set the relation to null
                        $factures->save($con);
                    }
                    $this->facturessScheduledForDeletion = null;
                }
            }

            if ($this->collFacturess !== null) {
                foreach ($this->collFacturess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lnkOperationsContactsMailsScheduledForDeletion !== null) {
                if (!$this->lnkOperationsContactsMailsScheduledForDeletion->isEmpty()) {
                    LnkOperationsContactsMailQuery::create()
                        ->filterByPrimaryKeys($this->lnkOperationsContactsMailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lnkOperationsContactsMailsScheduledForDeletion = null;
                }
            }

            if ($this->collLnkOperationsContactsMails !== null) {
                foreach ($this->collLnkOperationsContactsMails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationssRelatedByOpCtIdScheduledForDeletion !== null) {
                if (!$this->operationssRelatedByOpCtIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationssRelatedByOpCtIdScheduledForDeletion as $operationsRelatedByOpCtId) {
                        // need to save related object because we set the relation to null
                        $operationsRelatedByOpCtId->save($con);
                    }
                    $this->operationssRelatedByOpCtIdScheduledForDeletion = null;
                }
            }

            if ($this->collOperationssRelatedByOpCtId !== null) {
                foreach ($this->collOperationssRelatedByOpCtId as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationssRelatedByOpCtFactIdScheduledForDeletion !== null) {
                if (!$this->operationssRelatedByOpCtFactIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationssRelatedByOpCtFactIdScheduledForDeletion as $operationsRelatedByOpCtFactId) {
                        // need to save related object because we set the relation to null
                        $operationsRelatedByOpCtFactId->save($con);
                    }
                    $this->operationssRelatedByOpCtFactIdScheduledForDeletion = null;
                }
            }

            if ($this->collOperationssRelatedByOpCtFactId !== null) {
                foreach ($this->collOperationssRelatedByOpCtFactId as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion !== null) {
                if (!$this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion->isEmpty()) {
                    foreach ($this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion as $operationsRelatedByOpCtFactAddrId) {
                        // need to save related object because we set the relation to null
                        $operationsRelatedByOpCtFactAddrId->save($con);
                    }
                    $this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion = null;
                }
            }

            if ($this->collOperationssRelatedByOpCtFactAddrId !== null) {
                foreach ($this->collOperationssRelatedByOpCtFactAddrId as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->relancessScheduledForDeletion !== null) {
                if (!$this->relancessScheduledForDeletion->isEmpty()) {
                    foreach ($this->relancessScheduledForDeletion as $relances) {
                        // need to save related object because we set the relation to null
                        $relances->save($con);
                    }
                    $this->relancessScheduledForDeletion = null;
                }
            }

            if ($this->collRelancess !== null) {
                foreach ($this->collRelancess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->factureEditionHistorysScheduledForDeletion !== null) {
                if (!$this->factureEditionHistorysScheduledForDeletion->isEmpty()) {
                    foreach ($this->factureEditionHistorysScheduledForDeletion as $factureEditionHistory) {
                        // need to save related object because we set the relation to null
                        $factureEditionHistory->save($con);
                    }
                    $this->factureEditionHistorysScheduledForDeletion = null;
                }
            }

            if ($this->collFactureEditionHistorys !== null) {
                foreach ($this->collFactureEditionHistorys as $referrerFK) {
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

        $this->modifiedColumns[] = ContactsPeer::CT_ID;
        if (null !== $this->ct_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ContactsPeer::CT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ContactsPeer::CT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ct_id`';
        }
        if ($this->isColumnModified(ContactsPeer::CL_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_id`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_FIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`ct_firstname`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_LASTNAME)) {
            $modifiedColumns[':p' . $index++]  = '`ct_lastname`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`ct_email`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_PHONE)) {
            $modifiedColumns[':p' . $index++]  = '`ct_phone`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_MOBILE)) {
            $modifiedColumns[':p' . $index++]  = '`ct_mobile`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_FAX)) {
            $modifiedColumns[':p' . $index++]  = '`ct_fax`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`ct_title`';
        }
        if ($this->isColumnModified(ContactsPeer::CL_SITE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`cl_site_id`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_NEWSLETTER)) {
            $modifiedColumns[':p' . $index++]  = '`ct_newsletter`';
        }
        if ($this->isColumnModified(ContactsPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(ContactsPeer::USER_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`user_modify`';
        }
        if ($this->isColumnModified(ContactsPeer::DATE_CREATE)) {
            $modifiedColumns[':p' . $index++]  = '`date_create`';
        }
        if ($this->isColumnModified(ContactsPeer::DATE_MODIFY)) {
            $modifiedColumns[':p' . $index++]  = '`date_modify`';
        }
        if ($this->isColumnModified(ContactsPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_PHONE_INDICATIF)) {
            $modifiedColumns[':p' . $index++]  = '`ct_phone_indicatif`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_MOBILE_INDICATIF)) {
            $modifiedColumns[':p' . $index++]  = '`ct_mobile_indicatif`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_FAX_INDICATIF)) {
            $modifiedColumns[':p' . $index++]  = '`ct_fax_indicatif`';
        }
        if ($this->isColumnModified(ContactsPeer::CT_RECEIVE_FACT_BY_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`ct_receive_fact_by_email`';
        }

        $sql = sprintf(
            'INSERT INTO `contacts` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ct_id`':
                        $stmt->bindValue($identifier, $this->ct_id, PDO::PARAM_INT);
                        break;
                    case '`cl_id`':
                        $stmt->bindValue($identifier, $this->cl_id, PDO::PARAM_INT);
                        break;
                    case '`ct_firstname`':
                        $stmt->bindValue($identifier, $this->ct_firstname, PDO::PARAM_STR);
                        break;
                    case '`ct_lastname`':
                        $stmt->bindValue($identifier, $this->ct_lastname, PDO::PARAM_STR);
                        break;
                    case '`ct_email`':
                        $stmt->bindValue($identifier, $this->ct_email, PDO::PARAM_STR);
                        break;
                    case '`ct_phone`':
                        $stmt->bindValue($identifier, $this->ct_phone, PDO::PARAM_STR);
                        break;
                    case '`ct_mobile`':
                        $stmt->bindValue($identifier, $this->ct_mobile, PDO::PARAM_STR);
                        break;
                    case '`ct_fax`':
                        $stmt->bindValue($identifier, $this->ct_fax, PDO::PARAM_STR);
                        break;
                    case '`ct_title`':
                        $stmt->bindValue($identifier, $this->ct_title, PDO::PARAM_STR);
                        break;
                    case '`cl_site_id`':
                        $stmt->bindValue($identifier, $this->cl_site_id, PDO::PARAM_INT);
                        break;
                    case '`ct_newsletter`':
                        $stmt->bindValue($identifier, (int) $this->ct_newsletter, PDO::PARAM_INT);
                        break;
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`user_modify`':
                        $stmt->bindValue($identifier, $this->user_modify, PDO::PARAM_INT);
                        break;
                    case '`date_create`':
                        $stmt->bindValue($identifier, $this->date_create, PDO::PARAM_STR);
                        break;
                    case '`date_modify`':
                        $stmt->bindValue($identifier, $this->date_modify, PDO::PARAM_STR);
                        break;
                    case '`actif`':
                        $stmt->bindValue($identifier, (int) $this->actif, PDO::PARAM_INT);
                        break;
                    case '`ct_phone_indicatif`':
                        $stmt->bindValue($identifier, $this->ct_phone_indicatif, PDO::PARAM_STR);
                        break;
                    case '`ct_mobile_indicatif`':
                        $stmt->bindValue($identifier, $this->ct_mobile_indicatif, PDO::PARAM_STR);
                        break;
                    case '`ct_fax_indicatif`':
                        $stmt->bindValue($identifier, $this->ct_fax_indicatif, PDO::PARAM_STR);
                        break;
                    case '`ct_receive_fact_by_email`':
                        $stmt->bindValue($identifier, (int) $this->ct_receive_fact_by_email, PDO::PARAM_INT);
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
        $this->setCtId($pk);

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

            if ($this->aClientSites !== null) {
                if (!$this->aClientSites->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClientSites->getValidationFailures());
                }
            }

            if ($this->aClientsRelatedByClId !== null) {
                if (!$this->aClientsRelatedByClId->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aClientsRelatedByClId->getValidationFailures());
                }
            }


            if (($retval = ContactsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collClientssRelatedByClCtFacturation !== null) {
                    foreach ($this->collClientssRelatedByClCtFacturation as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collClientssRelatedByClCtGestion !== null) {
                    foreach ($this->collClientssRelatedByClCtGestion as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collFacturess !== null) {
                    foreach ($this->collFacturess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLnkOperationsContactsMails !== null) {
                    foreach ($this->collLnkOperationsContactsMails as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationssRelatedByOpCtId !== null) {
                    foreach ($this->collOperationssRelatedByOpCtId as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationssRelatedByOpCtFactId !== null) {
                    foreach ($this->collOperationssRelatedByOpCtFactId as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOperationssRelatedByOpCtFactAddrId !== null) {
                    foreach ($this->collOperationssRelatedByOpCtFactAddrId as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRelancess !== null) {
                    foreach ($this->collRelancess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collFactureEditionHistorys !== null) {
                    foreach ($this->collFactureEditionHistorys as $referrerFK) {
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
        $pos = ContactsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCtId();
                break;
            case 1:
                return $this->getClId();
                break;
            case 2:
                return $this->getCtFirstname();
                break;
            case 3:
                return $this->getCtLastname();
                break;
            case 4:
                return $this->getCtEmail();
                break;
            case 5:
                return $this->getCtPhone();
                break;
            case 6:
                return $this->getCtMobile();
                break;
            case 7:
                return $this->getCtFax();
                break;
            case 8:
                return $this->getCtTitle();
                break;
            case 9:
                return $this->getClSiteId();
                break;
            case 10:
                return $this->getCtNewsletter();
                break;
            case 11:
                return $this->getUserId();
                break;
            case 12:
                return $this->getUserModify();
                break;
            case 13:
                return $this->getDateCreate();
                break;
            case 14:
                return $this->getDateModify();
                break;
            case 15:
                return $this->getActif();
                break;
            case 16:
                return $this->getCtPhoneIndicatif();
                break;
            case 17:
                return $this->getCtMobileIndicatif();
                break;
            case 18:
                return $this->getCtFaxIndicatif();
                break;
            case 19:
                return $this->getCtReceiveFactByEmail();
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
        if (isset($alreadyDumpedObjects['Contacts'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Contacts'][$this->getPrimaryKey()] = true;
        $keys = ContactsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCtId(),
            $keys[1] => $this->getClId(),
            $keys[2] => $this->getCtFirstname(),
            $keys[3] => $this->getCtLastname(),
            $keys[4] => $this->getCtEmail(),
            $keys[5] => $this->getCtPhone(),
            $keys[6] => $this->getCtMobile(),
            $keys[7] => $this->getCtFax(),
            $keys[8] => $this->getCtTitle(),
            $keys[9] => $this->getClSiteId(),
            $keys[10] => $this->getCtNewsletter(),
            $keys[11] => $this->getUserId(),
            $keys[12] => $this->getUserModify(),
            $keys[13] => $this->getDateCreate(),
            $keys[14] => $this->getDateModify(),
            $keys[15] => $this->getActif(),
            $keys[16] => $this->getCtPhoneIndicatif(),
            $keys[17] => $this->getCtMobileIndicatif(),
            $keys[18] => $this->getCtFaxIndicatif(),
            $keys[19] => $this->getCtReceiveFactByEmail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aClientSites) {
                $result['ClientSites'] = $this->aClientSites->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aClientsRelatedByClId) {
                $result['ClientsRelatedByClId'] = $this->aClientsRelatedByClId->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collClientssRelatedByClCtFacturation) {
                $result['ClientssRelatedByClCtFacturation'] = $this->collClientssRelatedByClCtFacturation->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collClientssRelatedByClCtGestion) {
                $result['ClientssRelatedByClCtGestion'] = $this->collClientssRelatedByClCtGestion->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collFacturess) {
                $result['Facturess'] = $this->collFacturess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLnkOperationsContactsMails) {
                $result['LnkOperationsContactsMails'] = $this->collLnkOperationsContactsMails->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationssRelatedByOpCtId) {
                $result['OperationssRelatedByOpCtId'] = $this->collOperationssRelatedByOpCtId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationssRelatedByOpCtFactId) {
                $result['OperationssRelatedByOpCtFactId'] = $this->collOperationssRelatedByOpCtFactId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOperationssRelatedByOpCtFactAddrId) {
                $result['OperationssRelatedByOpCtFactAddrId'] = $this->collOperationssRelatedByOpCtFactAddrId->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRelancess) {
                $result['Relancess'] = $this->collRelancess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collFactureEditionHistorys) {
                $result['FactureEditionHistorys'] = $this->collFactureEditionHistorys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ContactsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCtId($value);
                break;
            case 1:
                $this->setClId($value);
                break;
            case 2:
                $this->setCtFirstname($value);
                break;
            case 3:
                $this->setCtLastname($value);
                break;
            case 4:
                $this->setCtEmail($value);
                break;
            case 5:
                $this->setCtPhone($value);
                break;
            case 6:
                $this->setCtMobile($value);
                break;
            case 7:
                $this->setCtFax($value);
                break;
            case 8:
                $this->setCtTitle($value);
                break;
            case 9:
                $this->setClSiteId($value);
                break;
            case 10:
                $this->setCtNewsletter($value);
                break;
            case 11:
                $this->setUserId($value);
                break;
            case 12:
                $this->setUserModify($value);
                break;
            case 13:
                $this->setDateCreate($value);
                break;
            case 14:
                $this->setDateModify($value);
                break;
            case 15:
                $this->setActif($value);
                break;
            case 16:
                $this->setCtPhoneIndicatif($value);
                break;
            case 17:
                $this->setCtMobileIndicatif($value);
                break;
            case 18:
                $this->setCtFaxIndicatif($value);
                break;
            case 19:
                $this->setCtReceiveFactByEmail($value);
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
        $keys = ContactsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setCtId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setClId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCtFirstname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCtLastname($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCtEmail($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCtPhone($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCtMobile($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCtFax($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCtTitle($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setClSiteId($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCtNewsletter($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setUserId($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setUserModify($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDateCreate($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateModify($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setActif($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCtPhoneIndicatif($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCtMobileIndicatif($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setCtFaxIndicatif($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setCtReceiveFactByEmail($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ContactsPeer::DATABASE_NAME);

        if ($this->isColumnModified(ContactsPeer::CT_ID)) $criteria->add(ContactsPeer::CT_ID, $this->ct_id);
        if ($this->isColumnModified(ContactsPeer::CL_ID)) $criteria->add(ContactsPeer::CL_ID, $this->cl_id);
        if ($this->isColumnModified(ContactsPeer::CT_FIRSTNAME)) $criteria->add(ContactsPeer::CT_FIRSTNAME, $this->ct_firstname);
        if ($this->isColumnModified(ContactsPeer::CT_LASTNAME)) $criteria->add(ContactsPeer::CT_LASTNAME, $this->ct_lastname);
        if ($this->isColumnModified(ContactsPeer::CT_EMAIL)) $criteria->add(ContactsPeer::CT_EMAIL, $this->ct_email);
        if ($this->isColumnModified(ContactsPeer::CT_PHONE)) $criteria->add(ContactsPeer::CT_PHONE, $this->ct_phone);
        if ($this->isColumnModified(ContactsPeer::CT_MOBILE)) $criteria->add(ContactsPeer::CT_MOBILE, $this->ct_mobile);
        if ($this->isColumnModified(ContactsPeer::CT_FAX)) $criteria->add(ContactsPeer::CT_FAX, $this->ct_fax);
        if ($this->isColumnModified(ContactsPeer::CT_TITLE)) $criteria->add(ContactsPeer::CT_TITLE, $this->ct_title);
        if ($this->isColumnModified(ContactsPeer::CL_SITE_ID)) $criteria->add(ContactsPeer::CL_SITE_ID, $this->cl_site_id);
        if ($this->isColumnModified(ContactsPeer::CT_NEWSLETTER)) $criteria->add(ContactsPeer::CT_NEWSLETTER, $this->ct_newsletter);
        if ($this->isColumnModified(ContactsPeer::USER_ID)) $criteria->add(ContactsPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(ContactsPeer::USER_MODIFY)) $criteria->add(ContactsPeer::USER_MODIFY, $this->user_modify);
        if ($this->isColumnModified(ContactsPeer::DATE_CREATE)) $criteria->add(ContactsPeer::DATE_CREATE, $this->date_create);
        if ($this->isColumnModified(ContactsPeer::DATE_MODIFY)) $criteria->add(ContactsPeer::DATE_MODIFY, $this->date_modify);
        if ($this->isColumnModified(ContactsPeer::ACTIF)) $criteria->add(ContactsPeer::ACTIF, $this->actif);
        if ($this->isColumnModified(ContactsPeer::CT_PHONE_INDICATIF)) $criteria->add(ContactsPeer::CT_PHONE_INDICATIF, $this->ct_phone_indicatif);
        if ($this->isColumnModified(ContactsPeer::CT_MOBILE_INDICATIF)) $criteria->add(ContactsPeer::CT_MOBILE_INDICATIF, $this->ct_mobile_indicatif);
        if ($this->isColumnModified(ContactsPeer::CT_FAX_INDICATIF)) $criteria->add(ContactsPeer::CT_FAX_INDICATIF, $this->ct_fax_indicatif);
        if ($this->isColumnModified(ContactsPeer::CT_RECEIVE_FACT_BY_EMAIL)) $criteria->add(ContactsPeer::CT_RECEIVE_FACT_BY_EMAIL, $this->ct_receive_fact_by_email);

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
        $criteria = new Criteria(ContactsPeer::DATABASE_NAME);
        $criteria->add(ContactsPeer::CT_ID, $this->ct_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getCtId();
    }

    /**
     * Generic method to set the primary key (ct_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCtId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getCtId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Contacts (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setClId($this->getClId());
        $copyObj->setCtFirstname($this->getCtFirstname());
        $copyObj->setCtLastname($this->getCtLastname());
        $copyObj->setCtEmail($this->getCtEmail());
        $copyObj->setCtPhone($this->getCtPhone());
        $copyObj->setCtMobile($this->getCtMobile());
        $copyObj->setCtFax($this->getCtFax());
        $copyObj->setCtTitle($this->getCtTitle());
        $copyObj->setClSiteId($this->getClSiteId());
        $copyObj->setCtNewsletter($this->getCtNewsletter());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setUserModify($this->getUserModify());
        $copyObj->setDateCreate($this->getDateCreate());
        $copyObj->setDateModify($this->getDateModify());
        $copyObj->setActif($this->getActif());
        $copyObj->setCtPhoneIndicatif($this->getCtPhoneIndicatif());
        $copyObj->setCtMobileIndicatif($this->getCtMobileIndicatif());
        $copyObj->setCtFaxIndicatif($this->getCtFaxIndicatif());
        $copyObj->setCtReceiveFactByEmail($this->getCtReceiveFactByEmail());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getClientssRelatedByClCtFacturation() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClientsRelatedByClCtFacturation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getClientssRelatedByClCtGestion() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClientsRelatedByClCtGestion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getFacturess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactures($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLnkOperationsContactsMails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLnkOperationsContactsMail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationssRelatedByOpCtId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationsRelatedByOpCtId($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationssRelatedByOpCtFactId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationsRelatedByOpCtFactId($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOperationssRelatedByOpCtFactAddrId() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOperationsRelatedByOpCtFactAddrId($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRelancess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRelances($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getFactureEditionHistorys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactureEditionHistory($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCtId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Contacts Clone of current object.
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
     * @return ContactsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ContactsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ClientSites object.
     *
     * @param                  ClientSites $v
     * @return Contacts The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClientSites(ClientSites $v = null)
    {
        if ($v === null) {
            $this->setClSiteId(NULL);
        } else {
            $this->setClSiteId($v->getClSiteId());
        }

        $this->aClientSites = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ClientSites object, it will not be re-added.
        if ($v !== null) {
            $v->addContacts($this);
        }


        return $this;
    }


    /**
     * Get the associated ClientSites object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ClientSites The associated ClientSites object.
     * @throws PropelException
     */
    public function getClientSites(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClientSites === null && ($this->cl_site_id !== null) && $doQuery) {
            $this->aClientSites = ClientSitesQuery::create()->findPk($this->cl_site_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClientSites->addContactss($this);
             */
        }

        return $this->aClientSites;
    }

    /**
     * Declares an association between this object and a Clients object.
     *
     * @param                  Clients $v
     * @return Contacts The current object (for fluent API support)
     * @throws PropelException
     */
    public function setClientsRelatedByClId(Clients $v = null)
    {
        if ($v === null) {
            $this->setClId(NULL);
        } else {
            $this->setClId($v->getClId());
        }

        $this->aClientsRelatedByClId = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Clients object, it will not be re-added.
        if ($v !== null) {
            $v->addContactsRelatedByClId($this);
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
    public function getClientsRelatedByClId(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aClientsRelatedByClId === null && ($this->cl_id !== null) && $doQuery) {
            $this->aClientsRelatedByClId = ClientsQuery::create()->findPk($this->cl_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aClientsRelatedByClId->addContactssRelatedByClId($this);
             */
        }

        return $this->aClientsRelatedByClId;
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
        if ('ClientsRelatedByClCtFacturation' == $relationName) {
            $this->initClientssRelatedByClCtFacturation();
        }
        if ('ClientsRelatedByClCtGestion' == $relationName) {
            $this->initClientssRelatedByClCtGestion();
        }
        if ('Factures' == $relationName) {
            $this->initFacturess();
        }
        if ('LnkOperationsContactsMail' == $relationName) {
            $this->initLnkOperationsContactsMails();
        }
        if ('OperationsRelatedByOpCtId' == $relationName) {
            $this->initOperationssRelatedByOpCtId();
        }
        if ('OperationsRelatedByOpCtFactId' == $relationName) {
            $this->initOperationssRelatedByOpCtFactId();
        }
        if ('OperationsRelatedByOpCtFactAddrId' == $relationName) {
            $this->initOperationssRelatedByOpCtFactAddrId();
        }
        if ('Relances' == $relationName) {
            $this->initRelancess();
        }
        if ('FactureEditionHistory' == $relationName) {
            $this->initFactureEditionHistorys();
        }
    }

    /**
     * Clears out the collClientssRelatedByClCtFacturation collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contacts The current object (for fluent API support)
     * @see        addClientssRelatedByClCtFacturation()
     */
    public function clearClientssRelatedByClCtFacturation()
    {
        $this->collClientssRelatedByClCtFacturation = null; // important to set this to null since that means it is uninitialized
        $this->collClientssRelatedByClCtFacturationPartial = null;

        return $this;
    }

    /**
     * reset is the collClientssRelatedByClCtFacturation collection loaded partially
     *
     * @return void
     */
    public function resetPartialClientssRelatedByClCtFacturation($v = true)
    {
        $this->collClientssRelatedByClCtFacturationPartial = $v;
    }

    /**
     * Initializes the collClientssRelatedByClCtFacturation collection.
     *
     * By default this just sets the collClientssRelatedByClCtFacturation collection to an empty array (like clearcollClientssRelatedByClCtFacturation());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClientssRelatedByClCtFacturation($overrideExisting = true)
    {
        if (null !== $this->collClientssRelatedByClCtFacturation && !$overrideExisting) {
            return;
        }
        $this->collClientssRelatedByClCtFacturation = new PropelObjectCollection();
        $this->collClientssRelatedByClCtFacturation->setModel('Clients');
    }

    /**
     * Gets an array of Clients objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contacts is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Clients[] List of Clients objects
     * @throws PropelException
     */
    public function getClientssRelatedByClCtFacturation($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClientssRelatedByClCtFacturationPartial && !$this->isNew();
        if (null === $this->collClientssRelatedByClCtFacturation || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClientssRelatedByClCtFacturation) {
                // return empty collection
                $this->initClientssRelatedByClCtFacturation();
            } else {
                $collClientssRelatedByClCtFacturation = ClientsQuery::create(null, $criteria)
                    ->filterByContactFacturation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClientssRelatedByClCtFacturationPartial && count($collClientssRelatedByClCtFacturation)) {
                      $this->initClientssRelatedByClCtFacturation(false);

                      foreach ($collClientssRelatedByClCtFacturation as $obj) {
                        if (false == $this->collClientssRelatedByClCtFacturation->contains($obj)) {
                          $this->collClientssRelatedByClCtFacturation->append($obj);
                        }
                      }

                      $this->collClientssRelatedByClCtFacturationPartial = true;
                    }

                    $collClientssRelatedByClCtFacturation->getInternalIterator()->rewind();

                    return $collClientssRelatedByClCtFacturation;
                }

                if ($partial && $this->collClientssRelatedByClCtFacturation) {
                    foreach ($this->collClientssRelatedByClCtFacturation as $obj) {
                        if ($obj->isNew()) {
                            $collClientssRelatedByClCtFacturation[] = $obj;
                        }
                    }
                }

                $this->collClientssRelatedByClCtFacturation = $collClientssRelatedByClCtFacturation;
                $this->collClientssRelatedByClCtFacturationPartial = false;
            }
        }

        return $this->collClientssRelatedByClCtFacturation;
    }

    /**
     * Sets a collection of ClientsRelatedByClCtFacturation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clientssRelatedByClCtFacturation A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contacts The current object (for fluent API support)
     */
    public function setClientssRelatedByClCtFacturation(PropelCollection $clientssRelatedByClCtFacturation, PropelPDO $con = null)
    {
        $clientssRelatedByClCtFacturationToDelete = $this->getClientssRelatedByClCtFacturation(new Criteria(), $con)->diff($clientssRelatedByClCtFacturation);


        $this->clientssRelatedByClCtFacturationScheduledForDeletion = $clientssRelatedByClCtFacturationToDelete;

        foreach ($clientssRelatedByClCtFacturationToDelete as $clientsRelatedByClCtFacturationRemoved) {
            $clientsRelatedByClCtFacturationRemoved->setContactFacturation(null);
        }

        $this->collClientssRelatedByClCtFacturation = null;
        foreach ($clientssRelatedByClCtFacturation as $clientsRelatedByClCtFacturation) {
            $this->addClientsRelatedByClCtFacturation($clientsRelatedByClCtFacturation);
        }

        $this->collClientssRelatedByClCtFacturation = $clientssRelatedByClCtFacturation;
        $this->collClientssRelatedByClCtFacturationPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Clients objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Clients objects.
     * @throws PropelException
     */
    public function countClientssRelatedByClCtFacturation(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClientssRelatedByClCtFacturationPartial && !$this->isNew();
        if (null === $this->collClientssRelatedByClCtFacturation || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClientssRelatedByClCtFacturation) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClientssRelatedByClCtFacturation());
            }
            $query = ClientsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContactFacturation($this)
                ->count($con);
        }

        return count($this->collClientssRelatedByClCtFacturation);
    }

    /**
     * Method called to associate a Clients object to this object
     * through the Clients foreign key attribute.
     *
     * @param    Clients $l Clients
     * @return Contacts The current object (for fluent API support)
     */
    public function addClientsRelatedByClCtFacturation(Clients $l)
    {
        if ($this->collClientssRelatedByClCtFacturation === null) {
            $this->initClientssRelatedByClCtFacturation();
            $this->collClientssRelatedByClCtFacturationPartial = true;
        }

        if (!in_array($l, $this->collClientssRelatedByClCtFacturation->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClientsRelatedByClCtFacturation($l);

            if ($this->clientssRelatedByClCtFacturationScheduledForDeletion and $this->clientssRelatedByClCtFacturationScheduledForDeletion->contains($l)) {
                $this->clientssRelatedByClCtFacturationScheduledForDeletion->remove($this->clientssRelatedByClCtFacturationScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ClientsRelatedByClCtFacturation $clientsRelatedByClCtFacturation The clientsRelatedByClCtFacturation object to add.
     */
    protected function doAddClientsRelatedByClCtFacturation($clientsRelatedByClCtFacturation)
    {
        $this->collClientssRelatedByClCtFacturation[]= $clientsRelatedByClCtFacturation;
        $clientsRelatedByClCtFacturation->setContactFacturation($this);
    }

    /**
     * @param	ClientsRelatedByClCtFacturation $clientsRelatedByClCtFacturation The clientsRelatedByClCtFacturation object to remove.
     * @return Contacts The current object (for fluent API support)
     */
    public function removeClientsRelatedByClCtFacturation($clientsRelatedByClCtFacturation)
    {
        if ($this->getClientssRelatedByClCtFacturation()->contains($clientsRelatedByClCtFacturation)) {
            $this->collClientssRelatedByClCtFacturation->remove($this->collClientssRelatedByClCtFacturation->search($clientsRelatedByClCtFacturation));
            if (null === $this->clientssRelatedByClCtFacturationScheduledForDeletion) {
                $this->clientssRelatedByClCtFacturationScheduledForDeletion = clone $this->collClientssRelatedByClCtFacturation;
                $this->clientssRelatedByClCtFacturationScheduledForDeletion->clear();
            }
            $this->clientssRelatedByClCtFacturationScheduledForDeletion[]= $clientsRelatedByClCtFacturation;
            $clientsRelatedByClCtFacturation->setContactFacturation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related ClientssRelatedByClCtFacturation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Clients[] List of Clients objects
     */
    public function getClientssRelatedByClCtFacturationJoinUserDc($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClientsQuery::create(null, $criteria);
        $query->joinWith('UserDc', $join_behavior);

        return $this->getClientssRelatedByClCtFacturation($query, $con);
    }

    /**
     * Clears out the collClientssRelatedByClCtGestion collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contacts The current object (for fluent API support)
     * @see        addClientssRelatedByClCtGestion()
     */
    public function clearClientssRelatedByClCtGestion()
    {
        $this->collClientssRelatedByClCtGestion = null; // important to set this to null since that means it is uninitialized
        $this->collClientssRelatedByClCtGestionPartial = null;

        return $this;
    }

    /**
     * reset is the collClientssRelatedByClCtGestion collection loaded partially
     *
     * @return void
     */
    public function resetPartialClientssRelatedByClCtGestion($v = true)
    {
        $this->collClientssRelatedByClCtGestionPartial = $v;
    }

    /**
     * Initializes the collClientssRelatedByClCtGestion collection.
     *
     * By default this just sets the collClientssRelatedByClCtGestion collection to an empty array (like clearcollClientssRelatedByClCtGestion());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClientssRelatedByClCtGestion($overrideExisting = true)
    {
        if (null !== $this->collClientssRelatedByClCtGestion && !$overrideExisting) {
            return;
        }
        $this->collClientssRelatedByClCtGestion = new PropelObjectCollection();
        $this->collClientssRelatedByClCtGestion->setModel('Clients');
    }

    /**
     * Gets an array of Clients objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contacts is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Clients[] List of Clients objects
     * @throws PropelException
     */
    public function getClientssRelatedByClCtGestion($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClientssRelatedByClCtGestionPartial && !$this->isNew();
        if (null === $this->collClientssRelatedByClCtGestion || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClientssRelatedByClCtGestion) {
                // return empty collection
                $this->initClientssRelatedByClCtGestion();
            } else {
                $collClientssRelatedByClCtGestion = ClientsQuery::create(null, $criteria)
                    ->filterByContactGestion($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClientssRelatedByClCtGestionPartial && count($collClientssRelatedByClCtGestion)) {
                      $this->initClientssRelatedByClCtGestion(false);

                      foreach ($collClientssRelatedByClCtGestion as $obj) {
                        if (false == $this->collClientssRelatedByClCtGestion->contains($obj)) {
                          $this->collClientssRelatedByClCtGestion->append($obj);
                        }
                      }

                      $this->collClientssRelatedByClCtGestionPartial = true;
                    }

                    $collClientssRelatedByClCtGestion->getInternalIterator()->rewind();

                    return $collClientssRelatedByClCtGestion;
                }

                if ($partial && $this->collClientssRelatedByClCtGestion) {
                    foreach ($this->collClientssRelatedByClCtGestion as $obj) {
                        if ($obj->isNew()) {
                            $collClientssRelatedByClCtGestion[] = $obj;
                        }
                    }
                }

                $this->collClientssRelatedByClCtGestion = $collClientssRelatedByClCtGestion;
                $this->collClientssRelatedByClCtGestionPartial = false;
            }
        }

        return $this->collClientssRelatedByClCtGestion;
    }

    /**
     * Sets a collection of ClientsRelatedByClCtGestion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clientssRelatedByClCtGestion A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contacts The current object (for fluent API support)
     */
    public function setClientssRelatedByClCtGestion(PropelCollection $clientssRelatedByClCtGestion, PropelPDO $con = null)
    {
        $clientssRelatedByClCtGestionToDelete = $this->getClientssRelatedByClCtGestion(new Criteria(), $con)->diff($clientssRelatedByClCtGestion);


        $this->clientssRelatedByClCtGestionScheduledForDeletion = $clientssRelatedByClCtGestionToDelete;

        foreach ($clientssRelatedByClCtGestionToDelete as $clientsRelatedByClCtGestionRemoved) {
            $clientsRelatedByClCtGestionRemoved->setContactGestion(null);
        }

        $this->collClientssRelatedByClCtGestion = null;
        foreach ($clientssRelatedByClCtGestion as $clientsRelatedByClCtGestion) {
            $this->addClientsRelatedByClCtGestion($clientsRelatedByClCtGestion);
        }

        $this->collClientssRelatedByClCtGestion = $clientssRelatedByClCtGestion;
        $this->collClientssRelatedByClCtGestionPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Clients objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Clients objects.
     * @throws PropelException
     */
    public function countClientssRelatedByClCtGestion(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClientssRelatedByClCtGestionPartial && !$this->isNew();
        if (null === $this->collClientssRelatedByClCtGestion || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClientssRelatedByClCtGestion) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClientssRelatedByClCtGestion());
            }
            $query = ClientsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContactGestion($this)
                ->count($con);
        }

        return count($this->collClientssRelatedByClCtGestion);
    }

    /**
     * Method called to associate a Clients object to this object
     * through the Clients foreign key attribute.
     *
     * @param    Clients $l Clients
     * @return Contacts The current object (for fluent API support)
     */
    public function addClientsRelatedByClCtGestion(Clients $l)
    {
        if ($this->collClientssRelatedByClCtGestion === null) {
            $this->initClientssRelatedByClCtGestion();
            $this->collClientssRelatedByClCtGestionPartial = true;
        }

        if (!in_array($l, $this->collClientssRelatedByClCtGestion->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClientsRelatedByClCtGestion($l);

            if ($this->clientssRelatedByClCtGestionScheduledForDeletion and $this->clientssRelatedByClCtGestionScheduledForDeletion->contains($l)) {
                $this->clientssRelatedByClCtGestionScheduledForDeletion->remove($this->clientssRelatedByClCtGestionScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ClientsRelatedByClCtGestion $clientsRelatedByClCtGestion The clientsRelatedByClCtGestion object to add.
     */
    protected function doAddClientsRelatedByClCtGestion($clientsRelatedByClCtGestion)
    {
        $this->collClientssRelatedByClCtGestion[]= $clientsRelatedByClCtGestion;
        $clientsRelatedByClCtGestion->setContactGestion($this);
    }

    /**
     * @param	ClientsRelatedByClCtGestion $clientsRelatedByClCtGestion The clientsRelatedByClCtGestion object to remove.
     * @return Contacts The current object (for fluent API support)
     */
    public function removeClientsRelatedByClCtGestion($clientsRelatedByClCtGestion)
    {
        if ($this->getClientssRelatedByClCtGestion()->contains($clientsRelatedByClCtGestion)) {
            $this->collClientssRelatedByClCtGestion->remove($this->collClientssRelatedByClCtGestion->search($clientsRelatedByClCtGestion));
            if (null === $this->clientssRelatedByClCtGestionScheduledForDeletion) {
                $this->clientssRelatedByClCtGestionScheduledForDeletion = clone $this->collClientssRelatedByClCtGestion;
                $this->clientssRelatedByClCtGestionScheduledForDeletion->clear();
            }
            $this->clientssRelatedByClCtGestionScheduledForDeletion[]= $clientsRelatedByClCtGestion;
            $clientsRelatedByClCtGestion->setContactGestion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related ClientssRelatedByClCtGestion from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Clients[] List of Clients objects
     */
    public function getClientssRelatedByClCtGestionJoinUserDc($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ClientsQuery::create(null, $criteria);
        $query->joinWith('UserDc', $join_behavior);

        return $this->getClientssRelatedByClCtGestion($query, $con);
    }

    /**
     * Clears out the collFacturess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contacts The current object (for fluent API support)
     * @see        addFacturess()
     */
    public function clearFacturess()
    {
        $this->collFacturess = null; // important to set this to null since that means it is uninitialized
        $this->collFacturessPartial = null;

        return $this;
    }

    /**
     * reset is the collFacturess collection loaded partially
     *
     * @return void
     */
    public function resetPartialFacturess($v = true)
    {
        $this->collFacturessPartial = $v;
    }

    /**
     * Initializes the collFacturess collection.
     *
     * By default this just sets the collFacturess collection to an empty array (like clearcollFacturess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFacturess($overrideExisting = true)
    {
        if (null !== $this->collFacturess && !$overrideExisting) {
            return;
        }
        $this->collFacturess = new PropelObjectCollection();
        $this->collFacturess->setModel('Factures');
    }

    /**
     * Gets an array of Factures objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contacts is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Factures[] List of Factures objects
     * @throws PropelException
     */
    public function getFacturess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFacturessPartial && !$this->isNew();
        if (null === $this->collFacturess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFacturess) {
                // return empty collection
                $this->initFacturess();
            } else {
                $collFacturess = FacturesQuery::create(null, $criteria)
                    ->filterByContactFacturation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFacturessPartial && count($collFacturess)) {
                      $this->initFacturess(false);

                      foreach ($collFacturess as $obj) {
                        if (false == $this->collFacturess->contains($obj)) {
                          $this->collFacturess->append($obj);
                        }
                      }

                      $this->collFacturessPartial = true;
                    }

                    $collFacturess->getInternalIterator()->rewind();

                    return $collFacturess;
                }

                if ($partial && $this->collFacturess) {
                    foreach ($this->collFacturess as $obj) {
                        if ($obj->isNew()) {
                            $collFacturess[] = $obj;
                        }
                    }
                }

                $this->collFacturess = $collFacturess;
                $this->collFacturessPartial = false;
            }
        }

        return $this->collFacturess;
    }

    /**
     * Sets a collection of Factures objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $facturess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contacts The current object (for fluent API support)
     */
    public function setFacturess(PropelCollection $facturess, PropelPDO $con = null)
    {
        $facturessToDelete = $this->getFacturess(new Criteria(), $con)->diff($facturess);


        $this->facturessScheduledForDeletion = $facturessToDelete;

        foreach ($facturessToDelete as $facturesRemoved) {
            $facturesRemoved->setContactFacturation(null);
        }

        $this->collFacturess = null;
        foreach ($facturess as $factures) {
            $this->addFactures($factures);
        }

        $this->collFacturess = $facturess;
        $this->collFacturessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Factures objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Factures objects.
     * @throws PropelException
     */
    public function countFacturess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFacturessPartial && !$this->isNew();
        if (null === $this->collFacturess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFacturess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFacturess());
            }
            $query = FacturesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContactFacturation($this)
                ->count($con);
        }

        return count($this->collFacturess);
    }

    /**
     * Method called to associate a Factures object to this object
     * through the Factures foreign key attribute.
     *
     * @param    Factures $l Factures
     * @return Contacts The current object (for fluent API support)
     */
    public function addFactures(Factures $l)
    {
        if ($this->collFacturess === null) {
            $this->initFacturess();
            $this->collFacturessPartial = true;
        }

        if (!in_array($l, $this->collFacturess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFactures($l);

            if ($this->facturessScheduledForDeletion and $this->facturessScheduledForDeletion->contains($l)) {
                $this->facturessScheduledForDeletion->remove($this->facturessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Factures $factures The factures object to add.
     */
    protected function doAddFactures($factures)
    {
        $this->collFacturess[]= $factures;
        $factures->setContactFacturation($this);
    }

    /**
     * @param	Factures $factures The factures object to remove.
     * @return Contacts The current object (for fluent API support)
     */
    public function removeFactures($factures)
    {
        if ($this->getFacturess()->contains($factures)) {
            $this->collFacturess->remove($this->collFacturess->search($factures));
            if (null === $this->facturessScheduledForDeletion) {
                $this->facturessScheduledForDeletion = clone $this->collFacturess;
                $this->facturessScheduledForDeletion->clear();
            }
            $this->facturessScheduledForDeletion[]= $factures;
            $factures->setContactFacturation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinRFactureTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('RFactureTypes', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinRFactureStatuts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('RFactureStatuts', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinPlanFacturationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('PlanFacturationParams', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinRFactureOptionsEcheances($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('RFactureOptionsEcheances', $join_behavior);

        return $this->getFacturess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Facturess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factures[] List of Factures objects
     */
    public function getFacturessJoinJournalDeVente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturesQuery::create(null, $criteria);
        $query->joinWith('JournalDeVente', $join_behavior);

        return $this->getFacturess($query, $con);
    }

    /**
     * Clears out the collLnkOperationsContactsMails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contacts The current object (for fluent API support)
     * @see        addLnkOperationsContactsMails()
     */
    public function clearLnkOperationsContactsMails()
    {
        $this->collLnkOperationsContactsMails = null; // important to set this to null since that means it is uninitialized
        $this->collLnkOperationsContactsMailsPartial = null;

        return $this;
    }

    /**
     * reset is the collLnkOperationsContactsMails collection loaded partially
     *
     * @return void
     */
    public function resetPartialLnkOperationsContactsMails($v = true)
    {
        $this->collLnkOperationsContactsMailsPartial = $v;
    }

    /**
     * Initializes the collLnkOperationsContactsMails collection.
     *
     * By default this just sets the collLnkOperationsContactsMails collection to an empty array (like clearcollLnkOperationsContactsMails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLnkOperationsContactsMails($overrideExisting = true)
    {
        if (null !== $this->collLnkOperationsContactsMails && !$overrideExisting) {
            return;
        }
        $this->collLnkOperationsContactsMails = new PropelObjectCollection();
        $this->collLnkOperationsContactsMails->setModel('LnkOperationsContactsMail');
    }

    /**
     * Gets an array of LnkOperationsContactsMail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contacts is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|LnkOperationsContactsMail[] List of LnkOperationsContactsMail objects
     * @throws PropelException
     */
    public function getLnkOperationsContactsMails($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationsContactsMailsPartial && !$this->isNew();
        if (null === $this->collLnkOperationsContactsMails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationsContactsMails) {
                // return empty collection
                $this->initLnkOperationsContactsMails();
            } else {
                $collLnkOperationsContactsMails = LnkOperationsContactsMailQuery::create(null, $criteria)
                    ->filterByContacts($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLnkOperationsContactsMailsPartial && count($collLnkOperationsContactsMails)) {
                      $this->initLnkOperationsContactsMails(false);

                      foreach ($collLnkOperationsContactsMails as $obj) {
                        if (false == $this->collLnkOperationsContactsMails->contains($obj)) {
                          $this->collLnkOperationsContactsMails->append($obj);
                        }
                      }

                      $this->collLnkOperationsContactsMailsPartial = true;
                    }

                    $collLnkOperationsContactsMails->getInternalIterator()->rewind();

                    return $collLnkOperationsContactsMails;
                }

                if ($partial && $this->collLnkOperationsContactsMails) {
                    foreach ($this->collLnkOperationsContactsMails as $obj) {
                        if ($obj->isNew()) {
                            $collLnkOperationsContactsMails[] = $obj;
                        }
                    }
                }

                $this->collLnkOperationsContactsMails = $collLnkOperationsContactsMails;
                $this->collLnkOperationsContactsMailsPartial = false;
            }
        }

        return $this->collLnkOperationsContactsMails;
    }

    /**
     * Sets a collection of LnkOperationsContactsMail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lnkOperationsContactsMails A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contacts The current object (for fluent API support)
     */
    public function setLnkOperationsContactsMails(PropelCollection $lnkOperationsContactsMails, PropelPDO $con = null)
    {
        $lnkOperationsContactsMailsToDelete = $this->getLnkOperationsContactsMails(new Criteria(), $con)->diff($lnkOperationsContactsMails);


        $this->lnkOperationsContactsMailsScheduledForDeletion = $lnkOperationsContactsMailsToDelete;

        foreach ($lnkOperationsContactsMailsToDelete as $lnkOperationsContactsMailRemoved) {
            $lnkOperationsContactsMailRemoved->setContacts(null);
        }

        $this->collLnkOperationsContactsMails = null;
        foreach ($lnkOperationsContactsMails as $lnkOperationsContactsMail) {
            $this->addLnkOperationsContactsMail($lnkOperationsContactsMail);
        }

        $this->collLnkOperationsContactsMails = $lnkOperationsContactsMails;
        $this->collLnkOperationsContactsMailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related LnkOperationsContactsMail objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related LnkOperationsContactsMail objects.
     * @throws PropelException
     */
    public function countLnkOperationsContactsMails(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLnkOperationsContactsMailsPartial && !$this->isNew();
        if (null === $this->collLnkOperationsContactsMails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLnkOperationsContactsMails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLnkOperationsContactsMails());
            }
            $query = LnkOperationsContactsMailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContacts($this)
                ->count($con);
        }

        return count($this->collLnkOperationsContactsMails);
    }

    /**
     * Method called to associate a LnkOperationsContactsMail object to this object
     * through the LnkOperationsContactsMail foreign key attribute.
     *
     * @param    LnkOperationsContactsMail $l LnkOperationsContactsMail
     * @return Contacts The current object (for fluent API support)
     */
    public function addLnkOperationsContactsMail(LnkOperationsContactsMail $l)
    {
        if ($this->collLnkOperationsContactsMails === null) {
            $this->initLnkOperationsContactsMails();
            $this->collLnkOperationsContactsMailsPartial = true;
        }

        if (!in_array($l, $this->collLnkOperationsContactsMails->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLnkOperationsContactsMail($l);

            if ($this->lnkOperationsContactsMailsScheduledForDeletion and $this->lnkOperationsContactsMailsScheduledForDeletion->contains($l)) {
                $this->lnkOperationsContactsMailsScheduledForDeletion->remove($this->lnkOperationsContactsMailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	LnkOperationsContactsMail $lnkOperationsContactsMail The lnkOperationsContactsMail object to add.
     */
    protected function doAddLnkOperationsContactsMail($lnkOperationsContactsMail)
    {
        $this->collLnkOperationsContactsMails[]= $lnkOperationsContactsMail;
        $lnkOperationsContactsMail->setContacts($this);
    }

    /**
     * @param	LnkOperationsContactsMail $lnkOperationsContactsMail The lnkOperationsContactsMail object to remove.
     * @return Contacts The current object (for fluent API support)
     */
    public function removeLnkOperationsContactsMail($lnkOperationsContactsMail)
    {
        if ($this->getLnkOperationsContactsMails()->contains($lnkOperationsContactsMail)) {
            $this->collLnkOperationsContactsMails->remove($this->collLnkOperationsContactsMails->search($lnkOperationsContactsMail));
            if (null === $this->lnkOperationsContactsMailsScheduledForDeletion) {
                $this->lnkOperationsContactsMailsScheduledForDeletion = clone $this->collLnkOperationsContactsMails;
                $this->lnkOperationsContactsMailsScheduledForDeletion->clear();
            }
            $this->lnkOperationsContactsMailsScheduledForDeletion[]= clone $lnkOperationsContactsMail;
            $lnkOperationsContactsMail->setContacts(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related LnkOperationsContactsMails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|LnkOperationsContactsMail[] List of LnkOperationsContactsMail objects
     */
    public function getLnkOperationsContactsMailsJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LnkOperationsContactsMailQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getLnkOperationsContactsMails($query, $con);
    }

    /**
     * Clears out the collOperationssRelatedByOpCtId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contacts The current object (for fluent API support)
     * @see        addOperationssRelatedByOpCtId()
     */
    public function clearOperationssRelatedByOpCtId()
    {
        $this->collOperationssRelatedByOpCtId = null; // important to set this to null since that means it is uninitialized
        $this->collOperationssRelatedByOpCtIdPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationssRelatedByOpCtId collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationssRelatedByOpCtId($v = true)
    {
        $this->collOperationssRelatedByOpCtIdPartial = $v;
    }

    /**
     * Initializes the collOperationssRelatedByOpCtId collection.
     *
     * By default this just sets the collOperationssRelatedByOpCtId collection to an empty array (like clearcollOperationssRelatedByOpCtId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationssRelatedByOpCtId($overrideExisting = true)
    {
        if (null !== $this->collOperationssRelatedByOpCtId && !$overrideExisting) {
            return;
        }
        $this->collOperationssRelatedByOpCtId = new PropelObjectCollection();
        $this->collOperationssRelatedByOpCtId->setModel('Operations');
    }

    /**
     * Gets an array of Operations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contacts is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Operations[] List of Operations objects
     * @throws PropelException
     */
    public function getOperationssRelatedByOpCtId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpCtIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpCtId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpCtId) {
                // return empty collection
                $this->initOperationssRelatedByOpCtId();
            } else {
                $collOperationssRelatedByOpCtId = OperationsQuery::create(null, $criteria)
                    ->filterByContactClient($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationssRelatedByOpCtIdPartial && count($collOperationssRelatedByOpCtId)) {
                      $this->initOperationssRelatedByOpCtId(false);

                      foreach ($collOperationssRelatedByOpCtId as $obj) {
                        if (false == $this->collOperationssRelatedByOpCtId->contains($obj)) {
                          $this->collOperationssRelatedByOpCtId->append($obj);
                        }
                      }

                      $this->collOperationssRelatedByOpCtIdPartial = true;
                    }

                    $collOperationssRelatedByOpCtId->getInternalIterator()->rewind();

                    return $collOperationssRelatedByOpCtId;
                }

                if ($partial && $this->collOperationssRelatedByOpCtId) {
                    foreach ($this->collOperationssRelatedByOpCtId as $obj) {
                        if ($obj->isNew()) {
                            $collOperationssRelatedByOpCtId[] = $obj;
                        }
                    }
                }

                $this->collOperationssRelatedByOpCtId = $collOperationssRelatedByOpCtId;
                $this->collOperationssRelatedByOpCtIdPartial = false;
            }
        }

        return $this->collOperationssRelatedByOpCtId;
    }

    /**
     * Sets a collection of OperationsRelatedByOpCtId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationssRelatedByOpCtId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contacts The current object (for fluent API support)
     */
    public function setOperationssRelatedByOpCtId(PropelCollection $operationssRelatedByOpCtId, PropelPDO $con = null)
    {
        $operationssRelatedByOpCtIdToDelete = $this->getOperationssRelatedByOpCtId(new Criteria(), $con)->diff($operationssRelatedByOpCtId);


        $this->operationssRelatedByOpCtIdScheduledForDeletion = $operationssRelatedByOpCtIdToDelete;

        foreach ($operationssRelatedByOpCtIdToDelete as $operationsRelatedByOpCtIdRemoved) {
            $operationsRelatedByOpCtIdRemoved->setContactClient(null);
        }

        $this->collOperationssRelatedByOpCtId = null;
        foreach ($operationssRelatedByOpCtId as $operationsRelatedByOpCtId) {
            $this->addOperationsRelatedByOpCtId($operationsRelatedByOpCtId);
        }

        $this->collOperationssRelatedByOpCtId = $operationssRelatedByOpCtId;
        $this->collOperationssRelatedByOpCtIdPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Operations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Operations objects.
     * @throws PropelException
     */
    public function countOperationssRelatedByOpCtId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpCtIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpCtId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpCtId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationssRelatedByOpCtId());
            }
            $query = OperationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContactClient($this)
                ->count($con);
        }

        return count($this->collOperationssRelatedByOpCtId);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return Contacts The current object (for fluent API support)
     */
    public function addOperationsRelatedByOpCtId(Operations $l)
    {
        if ($this->collOperationssRelatedByOpCtId === null) {
            $this->initOperationssRelatedByOpCtId();
            $this->collOperationssRelatedByOpCtIdPartial = true;
        }

        if (!in_array($l, $this->collOperationssRelatedByOpCtId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationsRelatedByOpCtId($l);

            if ($this->operationssRelatedByOpCtIdScheduledForDeletion and $this->operationssRelatedByOpCtIdScheduledForDeletion->contains($l)) {
                $this->operationssRelatedByOpCtIdScheduledForDeletion->remove($this->operationssRelatedByOpCtIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationsRelatedByOpCtId $operationsRelatedByOpCtId The operationsRelatedByOpCtId object to add.
     */
    protected function doAddOperationsRelatedByOpCtId($operationsRelatedByOpCtId)
    {
        $this->collOperationssRelatedByOpCtId[]= $operationsRelatedByOpCtId;
        $operationsRelatedByOpCtId->setContactClient($this);
    }

    /**
     * @param	OperationsRelatedByOpCtId $operationsRelatedByOpCtId The operationsRelatedByOpCtId object to remove.
     * @return Contacts The current object (for fluent API support)
     */
    public function removeOperationsRelatedByOpCtId($operationsRelatedByOpCtId)
    {
        if ($this->getOperationssRelatedByOpCtId()->contains($operationsRelatedByOpCtId)) {
            $this->collOperationssRelatedByOpCtId->remove($this->collOperationssRelatedByOpCtId->search($operationsRelatedByOpCtId));
            if (null === $this->operationssRelatedByOpCtIdScheduledForDeletion) {
                $this->operationssRelatedByOpCtIdScheduledForDeletion = clone $this->collOperationssRelatedByOpCtId;
                $this->operationssRelatedByOpCtIdScheduledForDeletion->clear();
            }
            $this->operationssRelatedByOpCtIdScheduledForDeletion[]= $operationsRelatedByOpCtId;
            $operationsRelatedByOpCtId->setContactClient(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinUserDC($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserDC', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinUserCP($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCP', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinUserCdp($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCdp', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinClientContratOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientContratOptions', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinClientSiteForLog($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientSiteForLog', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinGedelogOperationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('GedelogOperationParams', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatus', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinRCustomActivites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RCustomActivites', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinROperationType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationType', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinROperationTypeSub($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSub', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinOperationsExt($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsExt', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinRDelaiDevis($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RDelaiDevis', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinOperationsRelatedByOpParentId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsRelatedByOpParentId', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinOperationUniverse($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationUniverse', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinOperationMedia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationMedia', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinOperationTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationTemplate', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtIdJoinROperationClassifications($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationClassifications', $join_behavior);

        return $this->getOperationssRelatedByOpCtId($query, $con);
    }

    /**
     * Clears out the collOperationssRelatedByOpCtFactId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contacts The current object (for fluent API support)
     * @see        addOperationssRelatedByOpCtFactId()
     */
    public function clearOperationssRelatedByOpCtFactId()
    {
        $this->collOperationssRelatedByOpCtFactId = null; // important to set this to null since that means it is uninitialized
        $this->collOperationssRelatedByOpCtFactIdPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationssRelatedByOpCtFactId collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationssRelatedByOpCtFactId($v = true)
    {
        $this->collOperationssRelatedByOpCtFactIdPartial = $v;
    }

    /**
     * Initializes the collOperationssRelatedByOpCtFactId collection.
     *
     * By default this just sets the collOperationssRelatedByOpCtFactId collection to an empty array (like clearcollOperationssRelatedByOpCtFactId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationssRelatedByOpCtFactId($overrideExisting = true)
    {
        if (null !== $this->collOperationssRelatedByOpCtFactId && !$overrideExisting) {
            return;
        }
        $this->collOperationssRelatedByOpCtFactId = new PropelObjectCollection();
        $this->collOperationssRelatedByOpCtFactId->setModel('Operations');
    }

    /**
     * Gets an array of Operations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contacts is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Operations[] List of Operations objects
     * @throws PropelException
     */
    public function getOperationssRelatedByOpCtFactId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpCtFactIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpCtFactId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpCtFactId) {
                // return empty collection
                $this->initOperationssRelatedByOpCtFactId();
            } else {
                $collOperationssRelatedByOpCtFactId = OperationsQuery::create(null, $criteria)
                    ->filterByContactFacturation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationssRelatedByOpCtFactIdPartial && count($collOperationssRelatedByOpCtFactId)) {
                      $this->initOperationssRelatedByOpCtFactId(false);

                      foreach ($collOperationssRelatedByOpCtFactId as $obj) {
                        if (false == $this->collOperationssRelatedByOpCtFactId->contains($obj)) {
                          $this->collOperationssRelatedByOpCtFactId->append($obj);
                        }
                      }

                      $this->collOperationssRelatedByOpCtFactIdPartial = true;
                    }

                    $collOperationssRelatedByOpCtFactId->getInternalIterator()->rewind();

                    return $collOperationssRelatedByOpCtFactId;
                }

                if ($partial && $this->collOperationssRelatedByOpCtFactId) {
                    foreach ($this->collOperationssRelatedByOpCtFactId as $obj) {
                        if ($obj->isNew()) {
                            $collOperationssRelatedByOpCtFactId[] = $obj;
                        }
                    }
                }

                $this->collOperationssRelatedByOpCtFactId = $collOperationssRelatedByOpCtFactId;
                $this->collOperationssRelatedByOpCtFactIdPartial = false;
            }
        }

        return $this->collOperationssRelatedByOpCtFactId;
    }

    /**
     * Sets a collection of OperationsRelatedByOpCtFactId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationssRelatedByOpCtFactId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contacts The current object (for fluent API support)
     */
    public function setOperationssRelatedByOpCtFactId(PropelCollection $operationssRelatedByOpCtFactId, PropelPDO $con = null)
    {
        $operationssRelatedByOpCtFactIdToDelete = $this->getOperationssRelatedByOpCtFactId(new Criteria(), $con)->diff($operationssRelatedByOpCtFactId);


        $this->operationssRelatedByOpCtFactIdScheduledForDeletion = $operationssRelatedByOpCtFactIdToDelete;

        foreach ($operationssRelatedByOpCtFactIdToDelete as $operationsRelatedByOpCtFactIdRemoved) {
            $operationsRelatedByOpCtFactIdRemoved->setContactFacturation(null);
        }

        $this->collOperationssRelatedByOpCtFactId = null;
        foreach ($operationssRelatedByOpCtFactId as $operationsRelatedByOpCtFactId) {
            $this->addOperationsRelatedByOpCtFactId($operationsRelatedByOpCtFactId);
        }

        $this->collOperationssRelatedByOpCtFactId = $operationssRelatedByOpCtFactId;
        $this->collOperationssRelatedByOpCtFactIdPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Operations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Operations objects.
     * @throws PropelException
     */
    public function countOperationssRelatedByOpCtFactId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpCtFactIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpCtFactId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpCtFactId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationssRelatedByOpCtFactId());
            }
            $query = OperationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContactFacturation($this)
                ->count($con);
        }

        return count($this->collOperationssRelatedByOpCtFactId);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return Contacts The current object (for fluent API support)
     */
    public function addOperationsRelatedByOpCtFactId(Operations $l)
    {
        if ($this->collOperationssRelatedByOpCtFactId === null) {
            $this->initOperationssRelatedByOpCtFactId();
            $this->collOperationssRelatedByOpCtFactIdPartial = true;
        }

        if (!in_array($l, $this->collOperationssRelatedByOpCtFactId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationsRelatedByOpCtFactId($l);

            if ($this->operationssRelatedByOpCtFactIdScheduledForDeletion and $this->operationssRelatedByOpCtFactIdScheduledForDeletion->contains($l)) {
                $this->operationssRelatedByOpCtFactIdScheduledForDeletion->remove($this->operationssRelatedByOpCtFactIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationsRelatedByOpCtFactId $operationsRelatedByOpCtFactId The operationsRelatedByOpCtFactId object to add.
     */
    protected function doAddOperationsRelatedByOpCtFactId($operationsRelatedByOpCtFactId)
    {
        $this->collOperationssRelatedByOpCtFactId[]= $operationsRelatedByOpCtFactId;
        $operationsRelatedByOpCtFactId->setContactFacturation($this);
    }

    /**
     * @param	OperationsRelatedByOpCtFactId $operationsRelatedByOpCtFactId The operationsRelatedByOpCtFactId object to remove.
     * @return Contacts The current object (for fluent API support)
     */
    public function removeOperationsRelatedByOpCtFactId($operationsRelatedByOpCtFactId)
    {
        if ($this->getOperationssRelatedByOpCtFactId()->contains($operationsRelatedByOpCtFactId)) {
            $this->collOperationssRelatedByOpCtFactId->remove($this->collOperationssRelatedByOpCtFactId->search($operationsRelatedByOpCtFactId));
            if (null === $this->operationssRelatedByOpCtFactIdScheduledForDeletion) {
                $this->operationssRelatedByOpCtFactIdScheduledForDeletion = clone $this->collOperationssRelatedByOpCtFactId;
                $this->operationssRelatedByOpCtFactIdScheduledForDeletion->clear();
            }
            $this->operationssRelatedByOpCtFactIdScheduledForDeletion[]= $operationsRelatedByOpCtFactId;
            $operationsRelatedByOpCtFactId->setContactFacturation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinUserDC($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserDC', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinUserCP($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCP', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinUserCdp($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCdp', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinClientContratOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientContratOptions', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinClientSiteForLog($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientSiteForLog', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinGedelogOperationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('GedelogOperationParams', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatus', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinRCustomActivites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RCustomActivites', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinROperationType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationType', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinROperationTypeSub($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSub', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinOperationsExt($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsExt', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinRDelaiDevis($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RDelaiDevis', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinOperationsRelatedByOpParentId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsRelatedByOpParentId', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinOperationUniverse($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationUniverse', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinOperationMedia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationMedia', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinOperationTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationTemplate', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactIdJoinROperationClassifications($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationClassifications', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactId($query, $con);
    }

    /**
     * Clears out the collOperationssRelatedByOpCtFactAddrId collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contacts The current object (for fluent API support)
     * @see        addOperationssRelatedByOpCtFactAddrId()
     */
    public function clearOperationssRelatedByOpCtFactAddrId()
    {
        $this->collOperationssRelatedByOpCtFactAddrId = null; // important to set this to null since that means it is uninitialized
        $this->collOperationssRelatedByOpCtFactAddrIdPartial = null;

        return $this;
    }

    /**
     * reset is the collOperationssRelatedByOpCtFactAddrId collection loaded partially
     *
     * @return void
     */
    public function resetPartialOperationssRelatedByOpCtFactAddrId($v = true)
    {
        $this->collOperationssRelatedByOpCtFactAddrIdPartial = $v;
    }

    /**
     * Initializes the collOperationssRelatedByOpCtFactAddrId collection.
     *
     * By default this just sets the collOperationssRelatedByOpCtFactAddrId collection to an empty array (like clearcollOperationssRelatedByOpCtFactAddrId());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOperationssRelatedByOpCtFactAddrId($overrideExisting = true)
    {
        if (null !== $this->collOperationssRelatedByOpCtFactAddrId && !$overrideExisting) {
            return;
        }
        $this->collOperationssRelatedByOpCtFactAddrId = new PropelObjectCollection();
        $this->collOperationssRelatedByOpCtFactAddrId->setModel('Operations');
    }

    /**
     * Gets an array of Operations objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contacts is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Operations[] List of Operations objects
     * @throws PropelException
     */
    public function getOperationssRelatedByOpCtFactAddrId($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpCtFactAddrIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpCtFactAddrId || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpCtFactAddrId) {
                // return empty collection
                $this->initOperationssRelatedByOpCtFactAddrId();
            } else {
                $collOperationssRelatedByOpCtFactAddrId = OperationsQuery::create(null, $criteria)
                    ->filterByInvoicingAddressContact($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOperationssRelatedByOpCtFactAddrIdPartial && count($collOperationssRelatedByOpCtFactAddrId)) {
                      $this->initOperationssRelatedByOpCtFactAddrId(false);

                      foreach ($collOperationssRelatedByOpCtFactAddrId as $obj) {
                        if (false == $this->collOperationssRelatedByOpCtFactAddrId->contains($obj)) {
                          $this->collOperationssRelatedByOpCtFactAddrId->append($obj);
                        }
                      }

                      $this->collOperationssRelatedByOpCtFactAddrIdPartial = true;
                    }

                    $collOperationssRelatedByOpCtFactAddrId->getInternalIterator()->rewind();

                    return $collOperationssRelatedByOpCtFactAddrId;
                }

                if ($partial && $this->collOperationssRelatedByOpCtFactAddrId) {
                    foreach ($this->collOperationssRelatedByOpCtFactAddrId as $obj) {
                        if ($obj->isNew()) {
                            $collOperationssRelatedByOpCtFactAddrId[] = $obj;
                        }
                    }
                }

                $this->collOperationssRelatedByOpCtFactAddrId = $collOperationssRelatedByOpCtFactAddrId;
                $this->collOperationssRelatedByOpCtFactAddrIdPartial = false;
            }
        }

        return $this->collOperationssRelatedByOpCtFactAddrId;
    }

    /**
     * Sets a collection of OperationsRelatedByOpCtFactAddrId objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $operationssRelatedByOpCtFactAddrId A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contacts The current object (for fluent API support)
     */
    public function setOperationssRelatedByOpCtFactAddrId(PropelCollection $operationssRelatedByOpCtFactAddrId, PropelPDO $con = null)
    {
        $operationssRelatedByOpCtFactAddrIdToDelete = $this->getOperationssRelatedByOpCtFactAddrId(new Criteria(), $con)->diff($operationssRelatedByOpCtFactAddrId);


        $this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion = $operationssRelatedByOpCtFactAddrIdToDelete;

        foreach ($operationssRelatedByOpCtFactAddrIdToDelete as $operationsRelatedByOpCtFactAddrIdRemoved) {
            $operationsRelatedByOpCtFactAddrIdRemoved->setInvoicingAddressContact(null);
        }

        $this->collOperationssRelatedByOpCtFactAddrId = null;
        foreach ($operationssRelatedByOpCtFactAddrId as $operationsRelatedByOpCtFactAddrId) {
            $this->addOperationsRelatedByOpCtFactAddrId($operationsRelatedByOpCtFactAddrId);
        }

        $this->collOperationssRelatedByOpCtFactAddrId = $operationssRelatedByOpCtFactAddrId;
        $this->collOperationssRelatedByOpCtFactAddrIdPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Operations objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Operations objects.
     * @throws PropelException
     */
    public function countOperationssRelatedByOpCtFactAddrId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOperationssRelatedByOpCtFactAddrIdPartial && !$this->isNew();
        if (null === $this->collOperationssRelatedByOpCtFactAddrId || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOperationssRelatedByOpCtFactAddrId) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOperationssRelatedByOpCtFactAddrId());
            }
            $query = OperationsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInvoicingAddressContact($this)
                ->count($con);
        }

        return count($this->collOperationssRelatedByOpCtFactAddrId);
    }

    /**
     * Method called to associate a Operations object to this object
     * through the Operations foreign key attribute.
     *
     * @param    Operations $l Operations
     * @return Contacts The current object (for fluent API support)
     */
    public function addOperationsRelatedByOpCtFactAddrId(Operations $l)
    {
        if ($this->collOperationssRelatedByOpCtFactAddrId === null) {
            $this->initOperationssRelatedByOpCtFactAddrId();
            $this->collOperationssRelatedByOpCtFactAddrIdPartial = true;
        }

        if (!in_array($l, $this->collOperationssRelatedByOpCtFactAddrId->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOperationsRelatedByOpCtFactAddrId($l);

            if ($this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion and $this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion->contains($l)) {
                $this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion->remove($this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OperationsRelatedByOpCtFactAddrId $operationsRelatedByOpCtFactAddrId The operationsRelatedByOpCtFactAddrId object to add.
     */
    protected function doAddOperationsRelatedByOpCtFactAddrId($operationsRelatedByOpCtFactAddrId)
    {
        $this->collOperationssRelatedByOpCtFactAddrId[]= $operationsRelatedByOpCtFactAddrId;
        $operationsRelatedByOpCtFactAddrId->setInvoicingAddressContact($this);
    }

    /**
     * @param	OperationsRelatedByOpCtFactAddrId $operationsRelatedByOpCtFactAddrId The operationsRelatedByOpCtFactAddrId object to remove.
     * @return Contacts The current object (for fluent API support)
     */
    public function removeOperationsRelatedByOpCtFactAddrId($operationsRelatedByOpCtFactAddrId)
    {
        if ($this->getOperationssRelatedByOpCtFactAddrId()->contains($operationsRelatedByOpCtFactAddrId)) {
            $this->collOperationssRelatedByOpCtFactAddrId->remove($this->collOperationssRelatedByOpCtFactAddrId->search($operationsRelatedByOpCtFactAddrId));
            if (null === $this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion) {
                $this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion = clone $this->collOperationssRelatedByOpCtFactAddrId;
                $this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion->clear();
            }
            $this->operationssRelatedByOpCtFactAddrIdScheduledForDeletion[]= $operationsRelatedByOpCtFactAddrId;
            $operationsRelatedByOpCtFactAddrId->setInvoicingAddressContact(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinUserDC($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserDC', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinUserCP($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCP', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinUserCdp($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('UserCdp', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinClientContratOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientContratOptions', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinClientSiteForLog($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ClientSiteForLog', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinGedelogOperationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('GedelogOperationParams', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinROperationStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationStatus', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinRCustomActivites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RCustomActivites', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinROperationType($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationType', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinROperationTypeSub($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationTypeSub', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinOperationsExt($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsExt', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinRDelaiDevis($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('RDelaiDevis', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinOperationsRelatedByOpParentId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationsRelatedByOpParentId', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinOperationUniverse($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationUniverse', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinOperationMedia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationMedia', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinOperationTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('OperationTemplate', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related OperationssRelatedByOpCtFactAddrId from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Operations[] List of Operations objects
     */
    public function getOperationssRelatedByOpCtFactAddrIdJoinROperationClassifications($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OperationsQuery::create(null, $criteria);
        $query->joinWith('ROperationClassifications', $join_behavior);

        return $this->getOperationssRelatedByOpCtFactAddrId($query, $con);
    }

    /**
     * Clears out the collRelancess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contacts The current object (for fluent API support)
     * @see        addRelancess()
     */
    public function clearRelancess()
    {
        $this->collRelancess = null; // important to set this to null since that means it is uninitialized
        $this->collRelancessPartial = null;

        return $this;
    }

    /**
     * reset is the collRelancess collection loaded partially
     *
     * @return void
     */
    public function resetPartialRelancess($v = true)
    {
        $this->collRelancessPartial = $v;
    }

    /**
     * Initializes the collRelancess collection.
     *
     * By default this just sets the collRelancess collection to an empty array (like clearcollRelancess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRelancess($overrideExisting = true)
    {
        if (null !== $this->collRelancess && !$overrideExisting) {
            return;
        }
        $this->collRelancess = new PropelObjectCollection();
        $this->collRelancess->setModel('Relances');
    }

    /**
     * Gets an array of Relances objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contacts is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Relances[] List of Relances objects
     * @throws PropelException
     */
    public function getRelancess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRelancessPartial && !$this->isNew();
        if (null === $this->collRelancess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRelancess) {
                // return empty collection
                $this->initRelancess();
            } else {
                $collRelancess = RelancesQuery::create(null, $criteria)
                    ->filterByContactFacturation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRelancessPartial && count($collRelancess)) {
                      $this->initRelancess(false);

                      foreach ($collRelancess as $obj) {
                        if (false == $this->collRelancess->contains($obj)) {
                          $this->collRelancess->append($obj);
                        }
                      }

                      $this->collRelancessPartial = true;
                    }

                    $collRelancess->getInternalIterator()->rewind();

                    return $collRelancess;
                }

                if ($partial && $this->collRelancess) {
                    foreach ($this->collRelancess as $obj) {
                        if ($obj->isNew()) {
                            $collRelancess[] = $obj;
                        }
                    }
                }

                $this->collRelancess = $collRelancess;
                $this->collRelancessPartial = false;
            }
        }

        return $this->collRelancess;
    }

    /**
     * Sets a collection of Relances objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $relancess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contacts The current object (for fluent API support)
     */
    public function setRelancess(PropelCollection $relancess, PropelPDO $con = null)
    {
        $relancessToDelete = $this->getRelancess(new Criteria(), $con)->diff($relancess);


        $this->relancessScheduledForDeletion = $relancessToDelete;

        foreach ($relancessToDelete as $relancesRemoved) {
            $relancesRemoved->setContactFacturation(null);
        }

        $this->collRelancess = null;
        foreach ($relancess as $relances) {
            $this->addRelances($relances);
        }

        $this->collRelancess = $relancess;
        $this->collRelancessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Relances objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Relances objects.
     * @throws PropelException
     */
    public function countRelancess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRelancessPartial && !$this->isNew();
        if (null === $this->collRelancess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRelancess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRelancess());
            }
            $query = RelancesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContactFacturation($this)
                ->count($con);
        }

        return count($this->collRelancess);
    }

    /**
     * Method called to associate a Relances object to this object
     * through the Relances foreign key attribute.
     *
     * @param    Relances $l Relances
     * @return Contacts The current object (for fluent API support)
     */
    public function addRelances(Relances $l)
    {
        if ($this->collRelancess === null) {
            $this->initRelancess();
            $this->collRelancessPartial = true;
        }

        if (!in_array($l, $this->collRelancess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRelances($l);

            if ($this->relancessScheduledForDeletion and $this->relancessScheduledForDeletion->contains($l)) {
                $this->relancessScheduledForDeletion->remove($this->relancessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Relances $relances The relances object to add.
     */
    protected function doAddRelances($relances)
    {
        $this->collRelancess[]= $relances;
        $relances->setContactFacturation($this);
    }

    /**
     * @param	Relances $relances The relances object to remove.
     * @return Contacts The current object (for fluent API support)
     */
    public function removeRelances($relances)
    {
        if ($this->getRelancess()->contains($relances)) {
            $this->collRelancess->remove($this->collRelancess->search($relances));
            if (null === $this->relancessScheduledForDeletion) {
                $this->relancessScheduledForDeletion = clone $this->collRelancess;
                $this->relancessScheduledForDeletion->clear();
            }
            $this->relancessScheduledForDeletion[]= $relances;
            $relances->setContactFacturation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getRelancess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinRRelanceTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('RRelanceTypes', $join_behavior);

        return $this->getRelancess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinRRelanceStatuts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('RRelanceStatuts', $join_behavior);

        return $this->getRelancess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related Relancess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Relances[] List of Relances objects
     */
    public function getRelancessJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RelancesQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getRelancess($query, $con);
    }

    /**
     * Clears out the collFactureEditionHistorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contacts The current object (for fluent API support)
     * @see        addFactureEditionHistorys()
     */
    public function clearFactureEditionHistorys()
    {
        $this->collFactureEditionHistorys = null; // important to set this to null since that means it is uninitialized
        $this->collFactureEditionHistorysPartial = null;

        return $this;
    }

    /**
     * reset is the collFactureEditionHistorys collection loaded partially
     *
     * @return void
     */
    public function resetPartialFactureEditionHistorys($v = true)
    {
        $this->collFactureEditionHistorysPartial = $v;
    }

    /**
     * Initializes the collFactureEditionHistorys collection.
     *
     * By default this just sets the collFactureEditionHistorys collection to an empty array (like clearcollFactureEditionHistorys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFactureEditionHistorys($overrideExisting = true)
    {
        if (null !== $this->collFactureEditionHistorys && !$overrideExisting) {
            return;
        }
        $this->collFactureEditionHistorys = new PropelObjectCollection();
        $this->collFactureEditionHistorys->setModel('FactureEditionHistory');
    }

    /**
     * Gets an array of FactureEditionHistory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contacts is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     * @throws PropelException
     */
    public function getFactureEditionHistorys($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFactureEditionHistorysPartial && !$this->isNew();
        if (null === $this->collFactureEditionHistorys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFactureEditionHistorys) {
                // return empty collection
                $this->initFactureEditionHistorys();
            } else {
                $collFactureEditionHistorys = FactureEditionHistoryQuery::create(null, $criteria)
                    ->filterByContactFacturation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFactureEditionHistorysPartial && count($collFactureEditionHistorys)) {
                      $this->initFactureEditionHistorys(false);

                      foreach ($collFactureEditionHistorys as $obj) {
                        if (false == $this->collFactureEditionHistorys->contains($obj)) {
                          $this->collFactureEditionHistorys->append($obj);
                        }
                      }

                      $this->collFactureEditionHistorysPartial = true;
                    }

                    $collFactureEditionHistorys->getInternalIterator()->rewind();

                    return $collFactureEditionHistorys;
                }

                if ($partial && $this->collFactureEditionHistorys) {
                    foreach ($this->collFactureEditionHistorys as $obj) {
                        if ($obj->isNew()) {
                            $collFactureEditionHistorys[] = $obj;
                        }
                    }
                }

                $this->collFactureEditionHistorys = $collFactureEditionHistorys;
                $this->collFactureEditionHistorysPartial = false;
            }
        }

        return $this->collFactureEditionHistorys;
    }

    /**
     * Sets a collection of FactureEditionHistory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $factureEditionHistorys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contacts The current object (for fluent API support)
     */
    public function setFactureEditionHistorys(PropelCollection $factureEditionHistorys, PropelPDO $con = null)
    {
        $factureEditionHistorysToDelete = $this->getFactureEditionHistorys(new Criteria(), $con)->diff($factureEditionHistorys);


        $this->factureEditionHistorysScheduledForDeletion = $factureEditionHistorysToDelete;

        foreach ($factureEditionHistorysToDelete as $factureEditionHistoryRemoved) {
            $factureEditionHistoryRemoved->setContactFacturation(null);
        }

        $this->collFactureEditionHistorys = null;
        foreach ($factureEditionHistorys as $factureEditionHistory) {
            $this->addFactureEditionHistory($factureEditionHistory);
        }

        $this->collFactureEditionHistorys = $factureEditionHistorys;
        $this->collFactureEditionHistorysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related FactureEditionHistory objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related FactureEditionHistory objects.
     * @throws PropelException
     */
    public function countFactureEditionHistorys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFactureEditionHistorysPartial && !$this->isNew();
        if (null === $this->collFactureEditionHistorys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFactureEditionHistorys) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFactureEditionHistorys());
            }
            $query = FactureEditionHistoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContactFacturation($this)
                ->count($con);
        }

        return count($this->collFactureEditionHistorys);
    }

    /**
     * Method called to associate a FactureEditionHistory object to this object
     * through the FactureEditionHistory foreign key attribute.
     *
     * @param    FactureEditionHistory $l FactureEditionHistory
     * @return Contacts The current object (for fluent API support)
     */
    public function addFactureEditionHistory(FactureEditionHistory $l)
    {
        if ($this->collFactureEditionHistorys === null) {
            $this->initFactureEditionHistorys();
            $this->collFactureEditionHistorysPartial = true;
        }

        if (!in_array($l, $this->collFactureEditionHistorys->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFactureEditionHistory($l);

            if ($this->factureEditionHistorysScheduledForDeletion and $this->factureEditionHistorysScheduledForDeletion->contains($l)) {
                $this->factureEditionHistorysScheduledForDeletion->remove($this->factureEditionHistorysScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to add.
     */
    protected function doAddFactureEditionHistory($factureEditionHistory)
    {
        $this->collFactureEditionHistorys[]= $factureEditionHistory;
        $factureEditionHistory->setContactFacturation($this);
    }

    /**
     * @param	FactureEditionHistory $factureEditionHistory The factureEditionHistory object to remove.
     * @return Contacts The current object (for fluent API support)
     */
    public function removeFactureEditionHistory($factureEditionHistory)
    {
        if ($this->getFactureEditionHistorys()->contains($factureEditionHistory)) {
            $this->collFactureEditionHistorys->remove($this->collFactureEditionHistorys->search($factureEditionHistory));
            if (null === $this->factureEditionHistorysScheduledForDeletion) {
                $this->factureEditionHistorysScheduledForDeletion = clone $this->collFactureEditionHistorys;
                $this->factureEditionHistorysScheduledForDeletion->clear();
            }
            $this->factureEditionHistorysScheduledForDeletion[]= $factureEditionHistory;
            $factureEditionHistory->setContactFacturation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('Operations', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinRFactureTypes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('RFactureTypes', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinClients($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('Clients', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinClientFactureOptions($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('ClientFactureOptions', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinRFactureStatuts($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('RFactureStatuts', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinPlanFacturationParams($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('PlanFacturationParams', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinRFactureOptionsEcheances($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('RFactureOptionsEcheances', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinJournalDeVente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('JournalDeVente', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinFactReeditionUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('FactReeditionUser', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contacts is new, it will return
     * an empty collection; or if this Contacts has previously
     * been saved, it will retrieve related FactureEditionHistorys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contacts.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactureEditionHistory[] List of FactureEditionHistory objects
     */
    public function getFactureEditionHistorysJoinReeditedFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactureEditionHistoryQuery::create(null, $criteria);
        $query->joinWith('ReeditedFacture', $join_behavior);

        return $this->getFactureEditionHistorys($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->ct_id = null;
        $this->cl_id = null;
        $this->ct_firstname = null;
        $this->ct_lastname = null;
        $this->ct_email = null;
        $this->ct_phone = null;
        $this->ct_mobile = null;
        $this->ct_fax = null;
        $this->ct_title = null;
        $this->cl_site_id = null;
        $this->ct_newsletter = null;
        $this->user_id = null;
        $this->user_modify = null;
        $this->date_create = null;
        $this->date_modify = null;
        $this->actif = null;
        $this->ct_phone_indicatif = null;
        $this->ct_mobile_indicatif = null;
        $this->ct_fax_indicatif = null;
        $this->ct_receive_fact_by_email = null;
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
            if ($this->collClientssRelatedByClCtFacturation) {
                foreach ($this->collClientssRelatedByClCtFacturation as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collClientssRelatedByClCtGestion) {
                foreach ($this->collClientssRelatedByClCtGestion as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFacturess) {
                foreach ($this->collFacturess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLnkOperationsContactsMails) {
                foreach ($this->collLnkOperationsContactsMails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationssRelatedByOpCtId) {
                foreach ($this->collOperationssRelatedByOpCtId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationssRelatedByOpCtFactId) {
                foreach ($this->collOperationssRelatedByOpCtFactId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOperationssRelatedByOpCtFactAddrId) {
                foreach ($this->collOperationssRelatedByOpCtFactAddrId as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRelancess) {
                foreach ($this->collRelancess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFactureEditionHistorys) {
                foreach ($this->collFactureEditionHistorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aClientSites instanceof Persistent) {
              $this->aClientSites->clearAllReferences($deep);
            }
            if ($this->aClientsRelatedByClId instanceof Persistent) {
              $this->aClientsRelatedByClId->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collClientssRelatedByClCtFacturation instanceof PropelCollection) {
            $this->collClientssRelatedByClCtFacturation->clearIterator();
        }
        $this->collClientssRelatedByClCtFacturation = null;
        if ($this->collClientssRelatedByClCtGestion instanceof PropelCollection) {
            $this->collClientssRelatedByClCtGestion->clearIterator();
        }
        $this->collClientssRelatedByClCtGestion = null;
        if ($this->collFacturess instanceof PropelCollection) {
            $this->collFacturess->clearIterator();
        }
        $this->collFacturess = null;
        if ($this->collLnkOperationsContactsMails instanceof PropelCollection) {
            $this->collLnkOperationsContactsMails->clearIterator();
        }
        $this->collLnkOperationsContactsMails = null;
        if ($this->collOperationssRelatedByOpCtId instanceof PropelCollection) {
            $this->collOperationssRelatedByOpCtId->clearIterator();
        }
        $this->collOperationssRelatedByOpCtId = null;
        if ($this->collOperationssRelatedByOpCtFactId instanceof PropelCollection) {
            $this->collOperationssRelatedByOpCtFactId->clearIterator();
        }
        $this->collOperationssRelatedByOpCtFactId = null;
        if ($this->collOperationssRelatedByOpCtFactAddrId instanceof PropelCollection) {
            $this->collOperationssRelatedByOpCtFactAddrId->clearIterator();
        }
        $this->collOperationssRelatedByOpCtFactAddrId = null;
        if ($this->collRelancess instanceof PropelCollection) {
            $this->collRelancess->clearIterator();
        }
        $this->collRelancess = null;
        if ($this->collFactureEditionHistorys instanceof PropelCollection) {
            $this->collFactureEditionHistorys->clearIterator();
        }
        $this->collFactureEditionHistorys = null;
        $this->aClientSites = null;
        $this->aClientsRelatedByClId = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ContactsPeer::DEFAULT_STRING_FORMAT);
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
                return BaseContactsPeer::getConnection();
            }
}
