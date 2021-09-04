<?php

class Phoenix_Data_Export_Csv
{

    /**
     * @var My_Data_Formatter
     */
    protected $dataFormatter;

    /**
     * @var ressource
     */
    protected $csvFileHandler;

    /**
     * Constructor
     *
     * @param ressource $rCsvFileHandler
     * @param My_Data_Formatter $oDataFormatter
     */
    public function __construct($rCsvFileHandler = null, My_Data_Formatter $oDataFormatter = null)
    {
        if ($rCsvFileHandler) {
            $this->setCsvFileHandler($rCsvFileHandler);
        }
        if ($oDataFormatter) {
            $this->setDataFormatter($oDataFormatter);
        }
    }

    /**
     * Gets the property csvFileHandler value
     *
     * @return ressource
     * @throws \LogicException
     */
    public function getCsvFileHandler()
    {
        if (is_resource($this->csvFileHandler)) {
            return $this->csvFileHandler;
        }
        throw new \LogicException('Property "csvFileHandler" expects a ressource, "' . (is_object($this->csvFileHandler) ? get_class($this->csvFileHandler) : gettype($this->csvFileHandler)) . '" defined');
    }

    /**
     * Sets the property csvFileHandler value
     *
     * @param  ressource $rCsvFileHandler
     * @return Phoenix_Data_Export_Csv
     * @throws \InvalidArgumentException
     */
    public function setCsvFileHandler($rCsvFileHandler)
    {
        if (is_resource($rCsvFileHandler)) {
            $this->csvFileHandler = $rCsvFileHandler;
            return $this;
        }
        throw new \InvalidArgumentException('Argument "csvFileHandler" expects a ressource, "' . gettype($rCsvFileHandler) . '" defined');
    }

    /**
     * Sets the property dataFormatter value
     *
     * @param  My_Data_Formatter $oDataFormatter
     * @return \Phoenix_Data_Export_Csv
     */
    public function setDataFormatter(My_Data_Formatter $oDataFormatter)
    {
        $this->dataFormatter = $oDataFormatter;
        return $this;
    }

    /**
     * Gets the property dataFormatter value
     *
     * @return My_Data_Formatter
     * @throws \LogicException
     */
    public function getDataFormatter()
    {
        if ($this->dataFormatter instanceof My_Data_Formatter) {
            return $this->dataFormatter;
        }
        throw new \LogicException('Property "dataFormatter" expects an instance of "My_Data_Formatter", "' . (is_object($this->dataFormatter) ? get_class($this->dataFormatter) : gettype($this->dataFormatter)) . '" defined');
    }

    /**
     * Encodes header data and adds it to the the CSV File
     *
     * @param  array $aHeaderData
     * @return \Phoenix_Data_Export_Csv
     * @throws \RuntimeException
     */
    public function addCsvFileHeader(array $aHeaderData)
    {

        if (false === fputcsv($this->getCsvFileHandler(), Phoenix_Data_Convert::encodeData($aHeaderData, 'CP1252'), ';')) {
            throw new \RuntimeException('An error occured while adding the following header "' . print_r($aHeaderData, true) . '" into the Csv file');
        }
        return $this;
    }

    /**
     * Encodes row data and adds it to the the CSV File
     *
     * @param  array $aRowData
     * @return \Phoenix_Data_Export_Csv
     * @throws \RuntimeException
     */
    public function addCsvFileDataRow(array $aRowData)
    {

        $oDataFormatter = $this->getDataFormatter();

        foreach ($aRowData as $sKey => $sData) {
            $aRowData[$sKey] = $sData ? $oDataFormatter->format($sKey, $sData) : $sData;
        }

        $aEncodedData = Phoenix_Data_Convert::encodeData($aRowData, 'CP1252');

        if (false === fputcsv($this->getCsvFileHandler(), $aEncodedData, ';')) {
            throw new \RuntimeException('An error occured while adding the following data row "' . print_r($aEncodedData, true) . '" into the Csv file');
        }

        return $this;
    }

    /**
     * Builds the appropriate file name for the current csv export
     */
    public static function buildFileName(string $sExtension = 'csv') : string
    {
        $oClient = null;
        $oOperation = null;

        $aFilenameParts = array();

        // Get all information we can have from request
        $oRequest = Zend_Controller_Front::getInstance()->getRequest();
        $aParams = $oRequest->getParams();

        if (isset($aParams['op_id'])) {
            $oOperation = OperationsQuery::create()->findPk($aParams['op_id']);
            $oClient = ClientsQuery::create()->findPk($oOperation->getOpClId());
        } elseif (isset($aParams['cl_id'])) {
            $oClient = ClientsQuery::create()->findPk($aParams['cl_id']);
        }

        // Start by the operation number
        if ($oOperation instanceof Operations) {
            $aFilenameParts[] = $oOperation->getOpId();
        }

        // Append the consumer name
        if ($oClient instanceof Clients) {
            $aFilenameParts[] = str_replace(array(' ', '\''), '_', $oClient->getClLibelle());
        }

        // Append the current date
        $aFilenameParts[] = date('Ymd_His') . '_' . rand(100, 999);

        // Append the current module/controller/action
        $aFilenameParts[] = $oRequest->getModuleName();
        $aFilenameParts[] = $oRequest->getControllerName();
        $aFilenameParts[] = $oRequest->getActionName();

        // Implode all parts with '-'
        return implode('-', $aFilenameParts) . '.' . $sExtension;
    }

    /**
     * Generate a tmp csv file from given data & formatter
     *
     * @param array|\Traversable $aData
     * @param My_Data_Formatter $oFormatter
     * @return string : the tmp csv file path
     */
    public static function generateTmpCsvFile($aData, My_Data_Formatter $oFormatter)
    {
        if (! is_array($aData) && ! $aData instanceof \Traversable) {
            throw new \InvalidArgumentException('Argument "$aData" expects an array or an instance of "\Traversable", "' . (is_object($aData) ? get_class($aData) : gettype($aData)) . '" given');
        }

        $sCsvFilePath = My_Env::getInstance()->getConfig()->path->tmp . '/' . self::buildFileName();
        $rCsvFileHandle = fopen($sCsvFilePath, 'w');

        $oPhoenixDataExportCsv = new self($rCsvFileHandle, $oFormatter);

        $bIsHeaderUnset = true;

        foreach ($aData as $aRow) {
            if ($bIsHeaderUnset) {
                $oPhoenixDataExportCsv->addCsvFileHeader(array_keys($aRow));
                $bIsHeaderUnset = false;
            }
            $oPhoenixDataExportCsv->addCsvFileDataRow($aRow);
        }
        return $sCsvFilePath;
    }
}
