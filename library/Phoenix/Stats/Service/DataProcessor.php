<?php

/**
 * Data Procecess Statistics Service,
 * This class generates the json and excel
 * File from the statistics services ans phoenix
 *
 * @author Amine JAAOUANI
 */
class Phoenix_Stats_Service_DataProcessor
{

    /**
     * Excel Types
     *
     * @var string
     */
    const EXCEL_TYPE_TABLE_MAP = 'table_map';

    /**
     * Excel Types
     *
     * @var string
     */
    const EXCEL_TYPE_SCALAR = 'scalar';

    /**
     * Excel Types
     *
     * @var string
     */
    const EXCEL_TYPE_TABLE = 'table';

    /**
     * @var \Operations
     */
    protected $operation;

    /**
     * @var \CS\StatisticsService\SDK\RestApiClient
     */
    protected $statisticsServiceClient;

    /**
     * @var array
     */
    protected $processedData;

    /**
     * @var array
     */
    protected $operationKpis;

    /**
     * @var Zend_Translate
     */
    protected $translate;

    /**
     * @var PHPExcel
     */
    protected $phpExcel;

    /**
     * @var \Phoenix_Stats_Service_Transporter_ScpTransporter
     */
    protected $transporter;

    /**
     * @var array
     */
    protected $params;

    /**
     * Constructor
     *
     * @param \CS\StatisticsService\SDK\RestApiClient $oStatisticsServiceClient
     * @param \Operations $oOperation
     * @param \PHPExcel $oPhpExcel
     */
    public function __construct(\CS\StatisticsService\SDK\RestApiClient $oStatisticsServiceClient = null, \Operations $oOperation = null, \PHPExcel $oPhpExcel = null)
    {
        if ($oStatisticsServiceClient) {
            $this->setStatisticsServiceClient($oStatisticsServiceClient);
        }
        if ($oOperation) {
            $this->setOperation($oOperation);
        }
        if ($oPhpExcel) {
            $this->setPhpExcel($oPhpExcel);
        }
    }

    /**
     * @return Phoenix_Stats_Service_Transporter_ScpTransporter
     * @throws \LogicException
     */
    public function getTransporter()
    {
        // Lazy load transporter if undefined
        if ($this->transporter === null) {
            $aParams = $this->getParams();
            if (! isset($aParams['transport_server_name'])) {
                throw new \LogicException('Configuration "transport_server_name" is not defined in configuration parametre');
            }
            if (! isset($aParams['transport_server_login'])) {
                throw new \LogicException('Configuration "transport_server_login" is not defined in configuration parametre');
            }
            if (! isset($aParams['transport_private_key_file_path'])) {
                throw new \LogicException('Configuration "transport_private_key_file_path" is not defined in parametre');
            }

            $this->transporter = new \Phoenix_Stats_Service_Transporter_ScpTransporter();
            $this->transporter->setServerHostName($aParams['transport_server_name']);
            $this->transporter->setServerLogin($aParams['transport_server_login']);
            $this->transporter->setPrivateKeyFilePath($aParams['transport_private_key_file_path']);
        }

        if ($this->transporter instanceof \Phoenix_Stats_Service_Transporter_ScpTransporter) {
            return $this->transporter;
        }
        throw new \LogicException('Property "transporter" expects an instance of "\Phoenix_Stats_Service_Transporter_ScpTransporter", "' . (is_object($this->transporter) ? get_class($this->transporter) : gettype($this->transporter)) . '" defined');
    }

    /**
     * @param \Phoenix_Stats_Service_Transporter_ScpTransporter $oTransporter
     * @return \Phoenix_Stats_Service_DataProcessor
     */
    public function setTransporter(\Phoenix_Stats_Service_Transporter_ScpTransporter $oTransporter)
    {
        $this->transporter = $oTransporter;
        return $this;
    }

    /**
     * @return array
     * @throws \LogicException
     */
    public function getParams()
    {
        if (is_array($this->params)) {
            return $this->params;
        }
        throw new \LogicException('Property "params" expects an array, "' . (is_object($this->params) ? get_class($this->params) : gettype($this->params)) . '" defined');
    }

    /**
     * @param array $aParams
     * @return \Phoenix_Stats_Service_DataProcessor
     */
    public function setParams(array $aParams)
    {
        $this->params = $aParams;
        return $this;
    }

    /**
     * Return translator, lazy load if undefined
     *
     * @return Zend_Translate
     * @throws \RuntimeException
     * @throws \LogicException
     */
    protected function getTranslate()
    {
        // Lazy load translator if undefined
        if ($this->translate === null) {
            Phoenix_Stats_Service_Translator::initTranslator($this->getOperationDocumentsLanguage());

            if (! Zend_Registry::isRegistered('Zend_Translate')) {
                throw new \RuntimeException('"Zend_Translate" must be defiened in Registry');
            }
            $this->translate = Zend_Registry::get('Zend_Translate');
        }

        if ($this->translate instanceof \Zend_Translate) {
            return $this->translate;
        }
        throw new \LogicException('Property "translate" expects an instance of "\Zend_Translate", "' . (is_object($this->translate) ? get_class($this->translate) : gettype($this->translate)) . '" defined');
    }

    /**
     * Gets the property operation value
     *
     * @return \Operations
     * @throws \LogicException
     */
    public function getOperation()
    {
        if ($this->operation instanceof \Operations) {
            return $this->operation;
        }
        throw new \LogicException('Property "operation" expects an instance of "\Operations", "' . (is_object($this->operation) ? get_class($this->operation) : gettype($this->operation)) . '" defined');
    }

    /**
     * Gets the property statisticsServiceClient value
     *
     * @return \CS\StatisticsService\SDK\RestApiClient
     * @throws \LogicException
     */
    public function getStatisticsServiceClient()
    {
        if ($this->statisticsServiceClient instanceof \CS\StatisticsService\SDK\RestApiClient) {
            return $this->statisticsServiceClient;
        }
        throw new \LogicException('Property "statisticsServiceClient" expects an instance of "\CS\StatisticsService\SDK\RestApiClient", "' . (is_object($this->statisticsServiceClient) ? get_class($this->statisticsServiceClient) : gettype($this->statisticsServiceClient)) . '" defined');
    }

    /**
     * Gets the property processedData value
     *
     * @return array
     * @throws \LogicException
     */
    public function getProcessedData()
    {
        if (is_array($this->processedData)) {
            return $this->processedData;
        }
        throw new \LogicException('Property "processedData" expects an array, "' . (is_object($this->processedData) ? get_class($this->processedData) : gettype($this->processedData)) . '" defined');
    }

    /**
     * @param \PHPExcel $oPhpExcel
     * @return \Phoenix_Stats_Service_DataProcessor
     */
    public function setPhpExcel(\PHPExcel $oPhpExcel)
    {
        $this->phpExcel = $oPhpExcel;
        return $this;
    }

    /**
     * @return \PHPExcel
     * @throws \LogicException
     */
    public function getPhpExcel()
    {
        // Lazy load phpExcel
        if ($this->phpExcel === null) {
            $this->phpExcel = new \PHPExcel();
        }

        if ($this->phpExcel instanceof \PHPExcel) {
            return $this->phpExcel;
        }
        throw new \LogicException('Property "phpExcel" expects an instance of " \PHPExcel", "' . (is_object($this->phpExcel) ? get_class($this->phpExcel) : gettype($this->phpExcel)) . '" defined');
    }

    /**
     * Sets the property operation value
     *
     * @param  \Operations $oOperation
     * @return \Phoenix_Stats_Service_DataProcessor
     */
    public function setOperation(\Operations $oOperation)
    {
        $this->operation = $oOperation;
        return $this;
    }

    /**
     * Sets the property statisticsServiceClient value
     *
     * @param  \CS\StatisticsService\SDK\RestApiClient $oStatisticsServiceClient
     * @return \Phoenix_Stats_Service_DataProcessor
     */
    public function setStatisticsServiceClient(\CS\StatisticsService\SDK\RestApiClient $oStatisticsServiceClient)
    {
        $this->statisticsServiceClient = $oStatisticsServiceClient;
        return $this;
    }

    /**
     * Sets the property processedData value
     *
     * @param  array $aProcessedData
     * @return \Phoenix_Stats_Service_DataProcessor
     */
    public function setProcessedData(array $aProcessedData)
    {
        $this->processedData = $aProcessedData;
        return $this;
    }

    /**
     * Gets the property operationKpis value
     *
     * @return array
     * @throws \LogicException
     */
    public function getOperationKpis()
    {
        if ($this->operationKpis === null) {
            $this->setOperationKpis($this->loadOperationKpisConfig());
        }

        if (is_array($this->operationKpis)) {
            return $this->operationKpis;
        }
        throw new \LogicException('Property "operationKpis" expects an array, "' . (is_object($this->operationKpis) ? get_class($this->operationKpis) : gettype($this->operationKpis)) . '" defined');
    }

    /**
     * Sets the property operationKpis value
     *
     * @param  array $aOperationKpis
     * @return \Phoenix_Stats_Service_DataProcessor
     */
    public function setOperationKpis(array $aOperationKpis)
    {
        $this->operationKpis = $aOperationKpis;
        return $this;
    }

    /**
     * Returns the current operation Kpis, with their configuration
     *
     * @return array
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    protected function loadOperationKpisConfig()
    {
        $sKpisConfigFilePath = __DIR__ . '/configs/Kpis.php';

        if (! file_exists($sKpisConfigFilePath)) {
            throw new \RuntimeException('Kpis configuration file "' . $sKpisConfigFilePath . '" does not exist');
        }

        if (false === ($aKpisConfig = include $sKpisConfigFilePath)) {
            throw new \RuntimeException('An error occured while including the Kpis configuration file "' . $sKpisConfigFilePath . '"');
        }
        if (! is_array($aKpisConfig)) {
            throw new \LogicException('Kpi config from configuration file "' . $sKpisConfigFilePath . '" expects an array, "' . gettype($aKpisConfig) . '" retrieve');
        }

        $oOperation = $this->getOperation();
        $iOperationType = $oOperation->getOperationStatisticsType();
        $bExistPhysicalBonus = $oOperation->checkExistPhysicalBonus();
        $bDisplayFinancialReport = $oOperation->displayFinancialReport();

        $aOperationKpisConfiguration = array();

        // 37774 Retrieving the Kpis (with their configuration) of the operation based on the operation type
        foreach ($aKpisConfig as $sKey => $aKpi) {
            // Show graph stock situation only if physical bonux exist (Ticket : 41621)
            if (in_array($iOperationType, $aKpi['aOperationTypes']) && ! (! $bExistPhysicalBonus && $aKpi['sJsonField'] == 'aStockSituation') && ! (! $bDisplayFinancialReport && $aKpi['sJsonField'] == 'aRequestForFunds')) {
                $aOperationKpisConfiguration[$sKey] = $aKpi;
            }
        }
        return $aOperationKpisConfiguration;
    }

    /**
     * Builds the data request array and consumes the statistics service to get the data
     *
     * @return array
     */
    protected function requestDataFromStatisticsService()
    {
        // Retrieving the operation Kpis
        $aOperationKpis = $this->getOperationKpis();

        $oTanstale = $this->getTranslate();
        $aKpisDataRequest = array();
        $sOperationId = $this->getOperation()->getOpId();

        $sOperationDocumentsLanguage = $this->getOperationDocumentsLanguage();

        $sDateStartConsos = $this->getOperation()->getOpDateconsoStart('Y-m-d\TH:i:s');
        $sDateEndManagement = $this->getOperation()->getOpStampEnd('Y-m-d\TH:i:s');

        // Building the data request array
        foreach ($aOperationKpis as $aKpiConfig) {
            // Adding service consumption options
            $aKpiOptions = array();
            if (isset($aKpiConfig['sGranularity'])) {
                $aKpiOptions['granularity'] = $aKpiConfig['sGranularity'];
            }
            if (isset($aKpiConfig['iMaxResults'])) {
                $aKpiOptions['maxResults'] = $aKpiConfig['iMaxResults'];
            }
            if (isset($aKpiConfig['sSortMode'])) {
                $aKpiOptions['sortMode'] = $aKpiConfig['sSortMode'];
            }
            if (isset($aKpiConfig['aAllocation'])) {
                $aKpiOptions['allocation'] = $aKpiConfig['aAllocation'];
            }
            if (isset($aKpiConfig['aColorPattern'])) {
                $aKpiOptions['colorPattern'] = $aKpiConfig['aColorPattern'];
            }
            if (isset($aKpiConfig['iAutocomplete'])) {
                $aKpiOptions['autocomplete'] = $aKpiConfig['iAutocomplete'];
            }

            if (isset($aKpiConfig['sRender'])) {
                $aKpiOptions['rendering'] = $aKpiConfig['sRender'];
            }

            if (isset($aKpiConfig['bAxisX'])) {
                $aKpiOptions['axisX'] = $aKpiConfig['bAxisX'];
            }

            if (isset($aKpiConfig['aDataLabelFilter'])) {
                $aKpiOptions['dataLabelFilter'] = $aKpiConfig['aDataLabelFilter'];
            }

            $aKpiOptions['types'] = array($sOperationId);

            $aKpiOptions['dateFrom'] = (isset($aKpiConfig['sDateFrom'])) ? $aKpiConfig['sDateFrom'] : $sDateStartConsos;
            $aKpiOptions['dateTo'] = (isset($aKpiConfig['sDateTo'])) ? $aKpiConfig['sDateTo'] : $sDateEndManagement;
            $sDateStart = (strtotime($sDateEndManagement) > time()) ? date('Y-m-d\T00:00:00') : $sDateEndManagement;
            $oDateTo = \DateTime::createFromFormat('Y-m-d\TH:i:s', $sDateStart);

            if (isset($aKpiConfig['iLastWeeks'])) {
                $aKpiOptions['dateTo'] = $oDateTo->modify('Sunday this week')->format('Y-m-d\TH:i:s');
                if (-1 !== $aKpiConfig['iLastWeeks']) {
                    $oDateTo->modify('- ' . $aKpiConfig['iLastWeeks'] . ' weeks')->modify('Monday this week');
                    $aKpiOptions['dateFrom'] = (strtotime($sDateStartConsos) > $oDateTo->getTimestamp()) ? $sDateStartConsos : $oDateTo->format('Y-m-d\TH:i:s');
                }
            }

            if (isset($aKpiConfig['iLastMonths'])) {
                $aKpiOptions['dateTo'] = $aKpiOptions['dateTo'] = $oDateTo->modify('last day of this month')->format('Y-m-d\TH:i:s');
                if (-1 !== $aKpiConfig['iLastMonths']) {
                    $oDateTo->modify('- ' . $aKpiConfig['iLastMonths'] . ' months')->modify('first day of next month');
                    $aKpiOptions['dateFrom'] = (strtotime($sDateStartConsos) > $oDateTo->getTimestamp()) ? $sDateStartConsos : $oDateTo->format('Y-m-d\TH:i:s');
                }
            }

            if (isset($aKpiConfig['aTranslations']['statisticDataList'])) {
                foreach ($aKpiConfig['aTranslations']['statisticDataList'] as $sKey => $sValue) {
                    $aKpiOptions['translations'][$sOperationDocumentsLanguage]['statisticDataList'][$sKey] = $oTanstale->translate($sValue);
                }
            }
            if (isset($aKpiConfig['aTranslations']['statisticTitle'])) {
                $aKpiOptions['translations'][$sOperationDocumentsLanguage]['statisticTitle'] = $oTanstale->translate($aKpiConfig['aTranslations']['statisticTitle']);
            }

            $aKpisDataRequest[] = array(
                'statisticId' => $aKpiConfig['sStatisticId'],
                'options' => $aKpiOptions,
            );
        }

        // Invoking the statistics for all of the requested Kpis
        return $this->statisticsServiceClient->getStatistics(array('locale' => $sOperationDocumentsLanguage, 'statistics' => $aKpisDataRequest));
    }

    /**
     * Returns the operation document languages, if not set, it returns the french
     * Language code
     *
     * @return string
     */
    protected function getOperationDocumentsLanguage()
    {
        switch (trim($this->getOperation()->getOpDevisLang())) {
            case RLanguages::LANG_ENG:
                return RLanguages::LOCALE_EN;
            default:
                return RLanguages::LOCALE_FR;
        }
    }

    /**
     * Handles data retrieval using the service, checks wheither some errors has occured.
     * Then builds a valid statistics array.
     * Afterwards it hydrates the data with operation informations (e.g operation libelle), with
     * Invoices and saves the processed data into a JSON file.
     *
     * @return array
     * @throws \LogicException
     */
    public function process()
    {
        $aStatisticsServiceResponse = $this->requestDataFromStatisticsService();

        if ($aStatisticsServiceResponse['errors']) {
            throw new \LogicException('Errors has been encountred on operation number "' . $this->getOperation()->getOpNumber() . '" while requesting data from statistics Service "' . $aStatisticsServiceResponse['errors'] . '"');
        }

        $aProcessedData = $this->buildStatisticsDataArray($aStatisticsServiceResponse);
        $this->setProcessedData($this->addOperationAndInvoiceData($aProcessedData));

        $aParams = $this->getParams();
        $bTransfertFiles = (isset($aParams['transport_server_name']) && isset($aParams['transport_server_login']) && isset($aParams['transport_private_key_file_path']));

        return array(
            'iPdfFileId' => $this->saveStatisticsJsonFile($bTransfertFiles),
            'iExcelFileId' => $this->saveStatisticsExcelFile($bTransfertFiles)
        );
    }

    /**
     * Constructs an array from the statistics service data response. This array
     * Can be transformed into a the expected statistics JSON file format
     *
     * @param  array $aStatisticsServiceResponse
     * @return array
     */
    protected function buildStatisticsDataArray(array $aStatisticsServiceResponse)
    {
        $aOperationKpis = $this->getOperationKpis();
        $aKpisData = array();
        $iCounter = 0;

        foreach ($aOperationKpis as $aKpiConfig) {
            $aStatiticServiceResult = array_shift($aStatisticsServiceResponse['result'][$iCounter]['statistic']);
            switch ($aKpiConfig['sJsonField']) {
                case 'aStockSituation':
                    $aKpisData[$aKpiConfig['sJsonField']]['dataList'] = (isset($aKpisData[$aKpiConfig['sJsonField']]['dataList'])) ? $aKpisData[$aKpiConfig['sJsonField']]['dataList'] : array();
                    $aKpisData[$aKpiConfig['sJsonField']]['dataList'] = $this->combineStockSituationIndicators($aKpiConfig['sColumnName'], $aStatiticServiceResult['dataList'], $aKpisData[$aKpiConfig['sJsonField']]['dataList']);
                    break;
                case 'iParticipationRate':
                case 'iProgressRate':
                    $aKpisData[$aKpiConfig['sJsonField']] = array_reduce($aStatiticServiceResult['dataList'], function ($iTotalRate, $aRateRecord) {
                        return $iTotalRate += $aRateRecord['value'];
                    }, 0);
                    break;
                default:
                    if (($aKpiConfig['sExpectedType'] === 'array')) {
                        if (in_array($aKpiConfig['sJsonField'], array('aParticipationDataOverTheLastTwentyWeeks', 'aConformityRate', 'aReceivedLettersOverTheLastTwentyWeeks', 'aParticipationDistribution'))) {
                            $aKpisData[$aKpiConfig['sJsonField']] = $aStatiticServiceResult;
                        }
                        $aKpisData[$aKpiConfig['sJsonField']]['dataList'] = array_reduce($aStatiticServiceResult['dataList'], function ($aStatisticsDataList, $aStatisticsRecord) {
                            $aStatisticsDataList[$aStatisticsRecord['label']] = $aStatisticsRecord['value'];
                            return $aStatisticsDataList;
                        });
                    } else {
                        $aKpisData[$aKpiConfig['sJsonField']] = isset($aStatiticServiceResult['dataList'][0]['value']) ? $aStatiticServiceResult['dataList'][0]['value'] : $aStatiticServiceResult['dataList'];
                        // Handle empty array for scalar expected values
                        if ($aKpisData[$aKpiConfig['sJsonField']] === array() && $aKpiConfig['sExpectedType'] === 'scalar') {
                            $aKpisData[$aKpiConfig['sJsonField']] = 0;
                        }
                    }
                    break;
            }
            ++$iCounter;
        }
        return array('aKpis' => $aKpisData);
    }

    /**
     * Add the globale operation and invoices informations to processed data
     * (e.g operation dates)
     *
     * @param  array $aProcessedData
     * @return array
     */
    protected function addOperationAndInvoiceData(array $aProcessedData)
    {
        $oOperation = $this->getOperation();
        $aProcessedData['aOperation'] = $oOperation->getOperationGlobalData();
        // Setting the Statistics Language
        $aProcessedData['aOperation']['aOperationGlobalInformation']['sStatisticsLanguage'] = $this->getOperationDocumentsLanguage();
        // Add the operation invoices  to processed data
        if ($oOperation->displayFinancialReport()) {
            $aProcessedData['aInvoices'] = $oOperation->getStatisticsOperationInvoices();
        }

        return $aProcessedData;
    }

    /**
     * Encodes the processed data array into json, and saves the content into
     * The statistics file into the operation stat directory. Referencing afterwards
     * the file in Files table.
     *
     * @return int
     * @throws \LogicException
     * @throws \RuntimeException
     */
    protected function saveStatisticsJsonFile($bTransfertFile = false)
    {
        if (! is_dir($sDirectoryName = Zend_Registry::get('config')->my->fileupload->directory)) {
            throw new \LogicException('Path "' . $sDirectoryName . '" does not match with any existing directory.');
        }
        if (! is_writable($sDirectoryName)) {
            throw new \LogicException('Path "' . $sDirectoryName . '" is not writable.');
        }

        $fMicro = microtime(true) - time();
        $sFileName = 'stat_' . $this->getOperation()->getOpNumber() . '_' . date('Y-m-d_H-i-s-' . round($fMicro * 10000)) . '.json';

        $aProcessedData = $this->getProcessedData();

        // 42395 Excluding Kpis that must appear only on Excel stats
        foreach ($aProcessedData['aKpis'] as $sIndicatorName => $aKpiData) {
            $aIndicatorConfig = $this->getIndicatorConfigByName($sIndicatorName);
            if (! in_array(RFileCategories::STAT_JSON, $aIndicatorConfig['aStatsDataContainer'])) {
                unset($aProcessedData['aKpis'][$sIndicatorName]);
            }
        }

        // Checking whether the json encoding will be successful
        if (false === ($sJsonEncodedProcessedData = json_encode($aProcessedData))) {
            throw new \LogicException('An error occured while json encoding stats processed data : ' . print_r($aProcessedData, true));
        }

        if (file_put_contents($sDirectoryName . '/' . $sFileName, $sJsonEncodedProcessedData) === false) {
            throw new \RuntimeException('An error occurred while writing file "' . $sDirectoryName . '/' . $sFileName . '"');
        }

        $oStatisticsFile = new Files();
        $oStatisticsFile->setFileName($sFileName)
                ->setFileEntityName('operations')
                ->setFileCategoryId(RFileCategories::STAT_JSON)
                ->setFileEntityId($this->getOperation()->getOpId())
                ->save();

        // Transfer file to remote
        if ($bTransfertFile) {
            $this->transportStatFile($oStatisticsFile->getFilePath());
        }
        return $oStatisticsFile->getFileId();
    }

    /**
     * Get configuration by indictator name
     *
     * @param  string $sIndicatorName
     * @return array
     * @throws \LogicException
     */
    protected function getIndicatorConfigByName($sIndicatorName)
    {
        $aOperationKpis = $this->getOperationKpis();
        foreach ($aOperationKpis as $aKpiConfig) {
            if ($sIndicatorName == $aKpiConfig['sJsonField']) {
                return $aKpiConfig;
            }
        }
        throw new \LogicException('Configuration of indicaror "' . $sIndicatorName . '" was not found.');
    }

    /**
     * Create a excel file, and saves the content into
     * The statistics file into the operation stat directory. Referencing afterwards
     *
     * @return int
     * @throws \LogicException
     */
    protected function saveStatisticsExcelFile($bTransfertFile = false)
    {
        if (! is_dir($sDirectoryName = Zend_Registry::get('config')->my->fileupload->directory)) {
            throw new \LogicException('Path "' . $sDirectoryName . '" does not match with any existing directory.');
        }
        $fMicro = microtime(true) - time();
        $sFileName = 'stat_' . $this->getOperation()->getOpNumber() . '_' . date('Y-m-d_H-i-s-' . round($fMicro * 10000)) . '.xlsx';
        $aStatistics = $this->getProcessedData();
        $this->getPhpExcel()->removeSheetByIndex();
        $oTranslate = $this->getTranslate();

        // Add indicators to excel
        foreach ($aStatistics['aKpis'] as $sIndicatorName => $aData) {
            $aIndicatorConfig = $this->getIndicatorConfigByName($sIndicatorName);
            // 42395 Excluding Kpis that must appear only on PDF stats
            if (in_array(RFileCategories::STAT_EXCEL, $aIndicatorConfig['aStatsDataContainer']) && $aDataList = $aIndicatorConfig['sExpectedTypeExcel'] !== Phoenix_Stats_Service_DataProcessor::EXCEL_TYPE_SCALAR ? $aData['dataList'] : $aData) {
                // sort desc of top 10
                if (! empty($aIndicatorConfig['bSliceResult'])) {
                    arsort($aDataList);
                }
                if ($aIndicatorConfig['sJsonField'] == 'aConformityRate') {
                    unset($aDataList['Dossiers en attente de traitement']);
                }
                if ($aIndicatorConfig['sJsonField'] == 'aRequestForFunds') {
                    $aDataList[$oTranslate->translate('label_estimated')] = isset($aDataList['ADF_Estim']) ? $aDataList['ADF_Estim'] : 0;
                    $aDataList[$oTranslate->translate('adf_cashed')] = isset($aDataList['ADF_Encaisse']) ? $aDataList['ADF_Encaisse'] : 0;
                    $fAdfUsed = isset($aDataList['ADF_Utilise']) ? (float) $aDataList['ADF_Utilise'] : 0;
                    $fAdfRequired = isset($aDataList['ADF_Requis']) ? (float) $aDataList['ADF_Requis'] : 0;
                    $aDataList[$oTranslate->translate('label_dedicated')] = $fAdfUsed + $fAdfRequired;
                    $aDataList[$oTranslate->translate('adf_available')] = $aDataList[$oTranslate->translate('adf_cashed')] - $aDataList[$oTranslate->translate('label_dedicated')];
                    $aDataList[$oTranslate->translate('adf_invoiced')] = isset($aDataList['ADF_Facture']) ? $aDataList['ADF_Facture'] : 0;
                    unset($aDataList['ADF_Facture'], $aDataList['ADF_Requis'], $aDataList['ADF_Reel'], $aDataList['ADF_Utilise'], $aDataList['ADF_Encaisse'], $aDataList['ADF_Estim']);
                }
                switch ($aIndicatorConfig['sExpectedTypeExcel']) {
                    case self::EXCEL_TYPE_SCALAR:
                        $this->addIndicatorScalarToExcel($aIndicatorConfig['sLibelleExcel'], (string) $aDataList);
                        break;
                    case self::EXCEL_TYPE_TABLE:
                        $this->addIndicatorTableToExcel($aIndicatorConfig['sLibelleExcel'], $aDataList);
                        break;
                    case self::EXCEL_TYPE_TABLE_MAP:
                        $this->addIndicatorTableMapToExcel($aIndicatorConfig['sLibelleExcel'], $aDataList, isset($aIndicatorConfig['aHeader']) ? $aIndicatorConfig['aHeader'] : array());
                        break;
                    default:
                        break;
                }
            }
        }

        // Add invoices to excel
        if (! empty($aStatistics['aInvoices'])) {
            $this->addIndicatorTableMapToExcel('label_invoices', $aStatistics['aInvoices']);
        }

        // Create writer
        $oPhpExcelWriter = new PHPExcel_Writer_Excel2007($this->getPhpExcel());
        $oPhpExcelWriter->save($sDirectoryName . '/' . $sFileName);

        $oFile = new Files();
        $oFile->setFileName($sFileName)
                ->setFileEntityName('operations')
                ->setFileCategoryId(RFileCategories::STAT_EXCEL)
                ->setFileEntityId($this->getOperation()->getOpId())
                ->save();

        // Transfer file to remote
        if ($bTransfertFile) {
            $this->transportStatFile($oFile->getFilePath());
        }
        return $oFile->getFileId();
    }

    /**
     * @param string $sFilePath
     * @return \Phoenix_Stats_Service_DataProcessor
     * @throws \InvalidArgumentException
     */
    private function transportStatFile($sFilePath)
    {
        if (! is_string($sFilePath)) {
            throw new \InvalidArgumentException('Argument "$sFilePath" expects an string, "' . gettype($sFilePath) . '" given');
        }
        $oTransporter = $this->getTransporter();
        $oTransporter->createDirIfNotExist(dirname($sFilePath))->transportFile($sFilePath, $sFilePath);
        return $this;
    }

    /**
     * @param string $sIndicatorTitle
     * @param array $aStatisticsIndicator
     * @return \Phoenix_Stats_Service_DataProcessor
     * @throws \InvalidArgumentException
     */
    protected function addIndicatorTableToExcel($sIndicatorTitle, array $aStatisticsIndicator)
    {
        if (! is_string($sIndicatorTitle)) {
            throw new \InvalidArgumentException('Argument "$sIndicatorTitle" expects an string, "' . gettype($sIndicatorTitle) . '" given');
        }

        $iLineNumber = 1;
        $oTranslate = $this->getTranslate();

        $oSheet = $this->getPhpExcel()->createSheet();
        $oSheet->setTitle($this->convertToTitleExcel($oTranslate->translate($sIndicatorTitle)));

        foreach ($aStatisticsIndicator as $sKey => $sValue) {
            $oSheet->setCellValueByColumnAndRow(0, $iLineNumber, $oTranslate->translate($sKey));
            $oSheet->setCellValueByColumnAndRow(1, $iLineNumber, $sValue);
            ++$iLineNumber;
        }
        return $this;
    }

    /**
     *
     * @param string $sIndicatorTitle
     * @param string $sValue
     * @return \Phoenix_Stats_Service_DataProcessor
     * @throws \InvalidArgumentException
     */
    protected function addIndicatorScalarToExcel($sIndicatorTitle, $sValue)
    {
        if (! is_string($sIndicatorTitle)) {
            throw new \InvalidArgumentException('Argument "$sIndicatorTitle" expects an string, "' . gettype($sIndicatorTitle) . '" given');
        }
        if (! is_string($sValue)) {
            throw new \InvalidArgumentException('Argument "$sValue" expects an string, "' . gettype($sValue) . '" given');
        }

        $oTranslate = $this->getTranslate();

        $oSheet = $this->getPhpExcel()->createSheet();
        $oSheet->setTitle($this->convertToTitleExcel($oTranslate->translate($sIndicatorTitle)));

        $oSheet->setCellValueByColumnAndRow(0, 1, $oTranslate->translate($sIndicatorTitle));
        $oSheet->setCellValueByColumnAndRow(1, 1, $sValue);
        return $this;
    }

    /**
     * @param string $sIndicatorTitle
     * @param array $aStatisticsIndicator
     * @param array $aHeaders
     * @return \Phoenix_Stats_Service_DataProcessor
     * @throws \InvalidArgumentException
     */
    protected function addIndicatorTableMapToExcel($sIndicatorTitle, array $aStatisticsIndicator, array $aHeaders = array())
    {
        if (! is_string($sIndicatorTitle)) {
            throw new \InvalidArgumentException('Argument "$sIndicatorTitle" expects an string, "' . gettype($sIndicatorTitle) . '" given');
        }

        if (! $aHeaders) {
            $aHeaders = array_keys(current($aStatisticsIndicator));
        }

        $oTranslate = $this->getTranslate();
        $iLineNumber = 1;
        $iColumn = 0;

        $oSheet = $this->getPhpExcel()->createSheet();
        $oSheet->setTitle($this->convertToTitleExcel($oTranslate->translate($sIndicatorTitle)));

        foreach ($aHeaders as $sHeader) {
            $oSheet->setCellValueByColumnAndRow($iColumn, $iLineNumber, $oTranslate->translate($sHeader));
            ++$iColumn;
        }

        foreach ($aStatisticsIndicator as $aValues) {
            ++$iLineNumber;
            $iColumn = 0;
            foreach ($aValues as $sValue) {
                $oSheet->setCellValueByColumnAndRow($iColumn, $iLineNumber, $sValue);
                ++$iColumn;
            }
        }
        return $this;
    }

    /**
     * @param string $sTitle
     * @return string
     * @throws \InvalidArgumentException
     */
    protected function convertToTitleExcel($sTitle)
    {
        if (! is_string($sTitle)) {
            throw new \InvalidArgumentException('Argument "$sTitle" expects an string, "' . gettype($sTitle) . '" given');
        }
        return str_replace('/', '', substr($sTitle, 0, 31));
    }

    /**
     * Conbine array status sotcks
     *
     * @param  string $sEtat
     * @param  array $aData
     * @param  array $aStatusStock
     * @return array
     * @throws \InvalidArgumentException
     */
    protected function combineStockSituationIndicators($sEtat, array $aData, array $aStatusStock)
    {
        if (! is_string($sEtat)) {
            throw new \InvalidArgumentException('Argument "$sEtat" expects an string, "' . gettype($sEtat) . '" given');
        }

        foreach ($aData as $aRecord) {
            $aStatusStock[$aRecord['label']][''] = $aRecord['label'];
            $aStatusStock[$aRecord['label']][$sEtat] = $aRecord['value'];
        }

        return $aStatusStock;
    }
}
