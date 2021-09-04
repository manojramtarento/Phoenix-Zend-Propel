<?php

class Phoenix_Operation_Service_OperationOptionsExporter
{

    /**
     * @var array
     */
    protected $allActiveOptions;

    /**
     * @var Zend_Db_Adapter_Pdo_Abstract
     */
    protected $phoenixAdapter;

    /**
     * Constructor
     *
     * @param Zend_Db_Adapter_Pdo_Abstract $oAdapter
     * @param array $aAllActiveOptions
     */
    public function __construct(Zend_Db_Adapter_Pdo_Abstract $oAdapter = null, array $aAllActiveOptions = null)
    {
        if ($oAdapter) {
            $this->setPhoenixAdapter($oAdapter);
        }

        if ($aAllActiveOptions) {
            $this->setAllActiveOptions($aAllActiveOptions);
        }
    }

    /**
     * Gets the property allActiveOptions value
     *
     * @return array
     * @throws \LogicException
     */
    public function getAllActiveOptions()
    {
        if (is_array($this->allActiveOptions)) {
            return $this->allActiveOptions;
        }

        $this->setAllActiveOptions($this->retrieveAllActiveOptions());

        if (!is_array($this->allActiveOptions)) {
            throw new \LogicException('Property "allActiveOptions" expects an array, "' . (is_object($this->allActiveOptions) ? get_class($this->allActiveOptions) : gettype($this->allActiveOptions)) . '" defined');
        }
        return $this->allActiveOptions;
    }

    /**
     * Sets the property allActiveOptions value
     *
     * @param  array $allActiveOptions
     * @return \Phoenix_Operation_Service_OperationOptionsExporter
     */
    public function setAllActiveOptions(array $allActiveOptions)
    {
        $this->allActiveOptions = $allActiveOptions;
        return $this;
    }

    /**
     * Gets the property phoenixAdapter value
     *
     * @return Zend_Db_Adapter_Pdo_Abstract
     * @throws \LogicException
     */
    public function getPhoenixAdapter()
    {
        if ($this->phoenixAdapter instanceof Zend_Db_Adapter_Pdo_Abstract) {
            return $this->phoenixAdapter;
        }
        throw new \LogicException('Property "phoenixAdapter" expects an instance of "Zend_Db_Adapter_Pdo_Abstract"' . (is_object($this->phoenixAdapter) ? get_class($this->phoenixAdapter) : gettype($this->phoenixAdapter)) . '" defined');
    }

    /**
     * Sets the property phoenixAdapter value
     *
     * @param  Zend_Db_Adapter_Pdo_Abstract $oAdapter
     * @return \Phoenix_Operation_Service_OperationOptionsExporter
     */
    public function setPhoenixAdapter(Zend_Db_Adapter_Pdo_Abstract $oAdapter)
    {
        $this->phoenixAdapter = $oAdapter;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function retrieveAllActiveOptions()
    {
        $sAvailableOptionsActivityQuery = 'SELECT
            child_option.r_op_option_id,
            CONCAT(parent_option.r_op_option_libelle, "-", child_option.r_op_option_libelle) as option_label,
            "0" as option_activity
            FROM r_operation_options child_option
            INNER JOIN r_operation_options parent_option
                  ON child_option.r_op_option_parent = parent_option.r_op_option_id
            where child_option.r_op_option_type = 1
            and child_option.actif = 1
            order by child_option.r_op_option_id asc';
        $oStatement = $this->getPhoenixAdapter()->prepare($sAvailableOptionsActivityQuery);
        $oStatement->execute();
        return $this->indexOptionsListDataByOptionId($oStatement->fetchAll());
    }

    /**
     *
     * @param integer $iOperationId
     * @return array
     * @throws \RuntimeException
     */
    public function getOperationOptionsActivity($iOperationId)
    {
        if (!is_integer($iOperationId)) {
            throw new \InvalidArgumentException('Argument $iOperationId expects an integer "' . gettype($iOperationId) . '" given');
        }

        $sLinkedOperationOptionsQuery = 'SELECT
            child_option.r_op_option_id,
            CONCAT(parent_option.r_op_option_libelle, "-", child_option.r_op_option_libelle) as option_label,
            operation_options.is_linked as option_activity
            FROM r_operation_options child_option
            INNER JOIN r_operation_options parent_option
                  ON child_option.r_op_option_parent = parent_option.r_op_option_id
            INNER JOIN lnk_operation_option operation_options
                 ON child_option.r_op_option_id = operation_options.op_opt_id
            where child_option.r_op_option_type = 1
            and operation_options.op_id = ' . $iOperationId . '
            and child_option.actif = 1
            order by child_option.r_op_option_id asc';


        $oStatement = $this->getPhoenixAdapter()->prepare($sLinkedOperationOptionsQuery);
        $oStatement->execute();
        $aLinkedOperationOptions = $this->indexOptionsListDataByOptionId($oStatement->fetchAll());

        $aMergedOptions = $aLinkedOperationOptions + $this->getAllActiveOptions();

        if (false === ksort($aMergedOptions, SORT_NUMERIC)) {
            throw new \RuntimeException('An error has occured while sorting by key the following array' . print_r($aMergedOptions, true));
        }

        return array_reduce($aMergedOptions, function ($aOperationOptions, $aOptionData) {
            $aOperationOptions[$aOptionData['option_label']] = $aOptionData['option_activity'];
            return $aOperationOptions;
        });
    }

    /**
     *
     * @param Zend_Db_Select $oSelect
     * @param type $sExportFileName
     * @param My_Data_Formatter $oFormatter
     * @return \Phoenix_Operation_Service_OperationOptionsExporter
     * @throws \InvalidArgumentException
     */
    public function exportOperationOptionsData(Zend_Db_Select $oSelect, $sExportFileName, My_Data_Formatter $oFormatter)
    {

        if (!is_string($sExportFileName)) {
            throw new \InvalidArgumentException('Argument $sExportFileName expects a string, "' . gettype($sExportFileName) . '" given');
        }

        set_time_limit(120);

        $oCsvFileHandle = fopen($sExportFileName, 'w');
        $oLengthyCsvExporter = new Phoenix_Data_Export_Csv($oCsvFileHandle, $oFormatter);
        $oStatementObject = $oSelect->query();
        $bIsHeaderUnset = true;

        while ($aOperationData = $oStatementObject->fetch()) {
            $aOperationOptionsData = array_merge($aOperationData, $this->getOperationOptionsActivity((int) $aOperationData['op_id']));
            if ($bIsHeaderUnset) {
                $oLengthyCsvExporter->addCsvFileHeader(array_keys($aOperationOptionsData));
                $bIsHeaderUnset = false;
            }
            $oLengthyCsvExporter->addCsvFileDataRow($aOperationOptionsData);
        }

        return $this;
    }

    /**
     *
     * @param array $aOptions
     * @return array
     */
    public function indexOptionsListDataByOptionId(array $aOptions)
    {

        return array_reduce($aOptions, function ($aIndexedOptions, $aOptionData) {
            $aIndexedOptions[$aOptionData['r_op_option_id']] = $aOptionData;
            return $aIndexedOptions;
        }, array());
    }
}
