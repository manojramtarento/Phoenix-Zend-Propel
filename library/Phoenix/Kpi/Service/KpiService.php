<?php

/**
 * @author NABIL NIZAR
 */
class Phoenix_Kpi_Service_KpiService
{

    /**
     *
     * @var array
     */
    protected $segmentsConfig;

    /**
     * @param array $aSegmentsConfig
     */
    public function __construct(array $aSegmentsConfig = array())
    {
        if ($aSegmentsConfig) {
            $this->setSegmentsConfig($aSegmentsConfig);
        }
    }

    /**
     * @return array
     * @throws \LogicException
     */
    public function getSegmentsConfig()
    {
        if (is_array($this->segmentsConfig)) {
            return $this->segmentsConfig;
        }

        throw new \LogicException('Property "segmentsConfig" expects an array, "' . gettype($this->segmentsConfig) . '" defined');
    }

    /**
     * @param array $aSegmentsConfig
     * @return \Phoenix_Kpi_Service_KpiService
     */
    public function setSegmentsConfig(array $aSegmentsConfig)
    {
        $this->segmentsConfig = $aSegmentsConfig;

        return $this;
    }

    /**
     * Retrieve graph Activity render
     * @param string $sClient
     * @param string $sActivity
     * @return string
     */
    public function getGraphKpiActivityByClientAndActivities($sClient = '', $sActivity = '')
    {

        if (!is_string($sClient)) {
            throw new \InvalidArgumentException('Argument "$sClient" expects a string, "' . gettype($sClient) . '" given');
        }

        if (!is_string($sActivity)) {
            throw new \InvalidArgumentException('Argument "$sActivity" expects a string, "' . gettype($sActivity) . '" given');
        }

        $aSegmentsConfig = $this->getSegmentsConfig();

        if (!isset($aSegmentsConfig['GraphKpiActivity'])) {
            throw new \InvalidArgumentException('Key "GraphKpiActivity" does not exists for the given array "' . print_r($aSegmentsConfig, true) . '"');
        }

        $oFetcher = new Phoenix_Kpi_Fetcher_Fetcher();

        $aResult = array();

        $oCurrentDate = new DateTime();

        foreach ($aSegmentsConfig['GraphKpiActivity'] as $sSegment => $aSegmentConfig) {
            $aResult[$sSegment] = array(
                'displayed_name' => $this->getZendTranslate()->translate($aSegmentConfig['displayed_name']),
                'type' => $aSegmentConfig['type'],
                'axes' => isset($aSegmentConfig['axes']) ? $aSegmentConfig['axes'] : false,
                'data' => $oFetcher->retrieveData($aSegmentConfig, array('client' => $sClient, 'activity' => $sActivity, 'year' => $oCurrentDate->format('Y'))),
            );
        }

        $oRender = new Phoenix_Kpi_Render_C3ActivityRender($aResult);

        $aRender = $oRender->render();
        $aRender['bindto'] = '#ind3';

        return json_encode($aRender);
    }

    /**
     * Retrieve Table Kpi Activity data by month, year and activity
     * @param int $iMonth
     * @param int $iYear
     * @param int $iActivity
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getTableKpiActivity($iMonth, $iYear, $iActivity)
    {
        if (!is_int($iMonth)) {
            throw new \InvalidArgumentException('Argument "$iMonth" expects an integer, "' . gettype($iMonth) . '" given');
        }

        if (!is_int($iYear)) {
            throw new \InvalidArgumentException('Argument "$iYear" expects an integer, "' . gettype($iYear) . '" given');
        }

        if (!is_int($iActivity)) {
            throw new \InvalidArgumentException('Argument "$iActivity" expects an integer, "' . gettype($iActivity) . '" given');
        }

        $aSegmentsConfig = $this->getSegmentsConfig();

        if (!isset($aSegmentsConfig['TableKpiActivity'])) {
            throw new \InvalidArgumentException('Key "TableKpiActivity" does not exists for the given array "' . print_r($aSegmentsConfig, true) . '"');
        }
        if (!isset($aSegmentsConfig['TableKpiActivityGroupedByActivities'])) {
            throw new \InvalidArgumentException('Key "TableKpiActivityGroupedByActivities" does not exists for the given array "' . print_r($aSegmentsConfig, true) . '"');
        }

        // Group by activity when no activity is selected (Ticket : 43692)
        $sConfigKey = ($iActivity) ? 'TableKpiActivity' : 'TableKpiActivityGroupedByActivities';

        $oFetcher = new Phoenix_Kpi_Fetcher_Fetcher();

        $aResult = array();

        foreach ($aSegmentsConfig[$sConfigKey] as $aSegmentConfig) {
            $aData = $oFetcher->retrieveData($aSegmentConfig, array('year' => $iYear, 'month' => $iMonth, 'activity' => $iActivity));

            foreach ($aData as $aRow) {
                $aResult[$aRow['Id']] = isset($aResult[$aRow['Id']]) ? $aResult[$aRow['Id']] + array($aSegmentConfig['name'] => $aRow['Value']) : array($aSegmentConfig['name'] => $aRow['Value']);
            }
        }

        $aDataActivityTable = array();

        foreach ($aResult as $sOptions => $aData) {
            $aDataActivityTable[$sOptions] = new Phoenix_Kpi_KpiActivityDigital($sOptions, $aData);
        }

        return $aDataActivityTable;
    }

    /**
     * Retrieve graph Activity product render
     * @param int $iMonth
     * @param int $iYear
     * @return string
     */
    public function getGraphKpiActivityProduct($iMonth, $iYear)
    {

        if (!is_int($iMonth)) {
            throw new \InvalidArgumentException('Argument "$iMonth" expects an integer, "' . gettype($iMonth) . '" given');
        }

        if (!is_int($iYear)) {
            throw new \InvalidArgumentException('Argument "$iYear" expects an integer, "' . gettype($iYear) . '" given');
        }

        $aSegmentsConfig = $this->getSegmentsConfig();

        if (!isset($aSegmentsConfig['GraphKpiActivityProduct'])) {
            throw new \InvalidArgumentException('Key "GraphKpiActivityProduct" does not exists for the given array "' . print_r($aSegmentsConfig, true) . '"');
        }

        $oFetcher = new Phoenix_Kpi_Fetcher_Fetcher();

        $aResult = array();

        foreach ($aSegmentsConfig['GraphKpiActivityProduct'] as $sSegment => $aSegmentConfig) {
            $aResult[$sSegment] = array(
                'displayed_name' => $this->getZendTranslate()->translate($aSegmentConfig['displayed_name']),
                'type' => $aSegmentConfig['type'],
                'axes' => isset($aSegmentConfig['axes']) ? $aSegmentConfig['axes'] : false,
                'data' => $oFetcher->retrieveData($aSegmentConfig, array('year' => $iYear, 'month' => $iMonth)),
            );
        }

        $oRender = new Phoenix_Kpi_Render_C3ActivityProductRender($aResult);
        $aRender = $oRender->render();
        $aRender['bindto'] = '#ind5';

        return array(
            'cumulLastYear' => $aResult[4]['data'],
            'operationLastYear' => $aResult[6]['data'],
            'json' => json_encode($aRender)
        );
    }

    /**
     * Retrieve Table Kpi Product Subscriptiosn monitoring
     * @param int $iMonth
     * @param int $iYear
     * @return array
     */
    public function getTableKpiProductSubscriptionsMonitoring($iMonth, $iYear)
    {
        if (!is_int($iMonth)) {
            throw new \InvalidArgumentException('Argument "$iMonth" expects an integer, "' . gettype($iMonth) . '" given');
        }

        if (!is_int($iYear)) {
            throw new \InvalidArgumentException('Argument "$iYear" expects an integer, "' . gettype($iYear) . '" given');
        }

        $aSegmentsConfig = $this->getSegmentsConfig();

        if (!isset($aSegmentsConfig['ProductsSubscriptionsMonitoringTable'])) {
            throw new \InvalidArgumentException('Key "ProductsSubscriptionsMonitoringTable" does not exists for the given array "' . print_r($aSegmentsConfig, true) . '"');
        }

        $oFetcher = new Phoenix_Kpi_Fetcher_Fetcher();

        $aResult = array();

        foreach ($aSegmentsConfig['ProductsSubscriptionsMonitoringTable'] as $aSegmentConfig) {
            $aData = $oFetcher->retrieveData($aSegmentConfig, array('year' => $iYear, 'month' => $iMonth));

            foreach ($aData as $aRow) {
                $aResult[$aRow['Id']] = isset($aResult[$aRow['Id']]) ? $aResult[$aRow['Id']] + array($aSegmentConfig['name'] => $aRow['Value']) : array($aSegmentConfig['name'] => $aRow['Value']);
            }
        }

        return $aResult;
    }

    /**
     * Format sttings by indicator
     * @param array $aParams
     * @return array
     */
    public static function formatSettingsFromRequest(array $aParams)
    {
        $aUserIndicatorSettings = array();

        if (!isset($aParams['indicatorName'])) {
            throw new \InvalidArgumentException('Key "indicatorName" does not exists for the given array "$aParams"');
        }

        if (!isset($aParams['position'])) {
            throw new \InvalidArgumentException('Key "position" does not exists for the given array "$aParams"');
        }

        $iPosition = 0;

        foreach ($aParams['indicatorName'] as $iIndicatorId => $sIndicatorName) {
            $aUserIndicatorSettings[$iIndicatorId]['name'] = $sIndicatorName;
            $aUserIndicatorSettings[$iIndicatorId]['position'] = ++$iPosition;
            $aUserIndicatorSettings[$iIndicatorId]['filters'] = isset($aParams['filters'][$iIndicatorId]) ? $aParams['filters'][$iIndicatorId] : array();
        }

        return $aUserIndicatorSettings;
    }

    /**
     * Order indicators calback
     * @param array $aUserIndicatorSettingsElementA
     * @param array $aUserIndicatorSettingsElementB
     * @return int
     */
    public static function orderIndicatorByPosition(array $aUserIndicatorSettingsElementA, array $aUserIndicatorSettingsElementB)
    {
        if (!isset($aUserIndicatorSettingsElementA['position'])) {
            throw new \InvalidArgumentException('Key "position" does not exists for the given array "$aUserIndicatorSettingsElementA"');
        }
        if (!isset($aUserIndicatorSettingsElementB['position'])) {
            throw new \InvalidArgumentException('Key "position" does not exists for the given array "$aUserIndicatorSettingsElementB"');
        }

        if ($aUserIndicatorSettingsElementA['position'] == $aUserIndicatorSettingsElementB['position']) {
            return 0;
        }
        return ($aUserIndicatorSettingsElementA['position'] < $aUserIndicatorSettingsElementB['position']) ? -1 : 1;
    }

    /**
     * get Zend Translate
     * @return \Zend_Registry
     * @throws \LogicExcpetion
     */
    public function getZendTranslate()
    {
        if (Zend_Registry::isRegistered('Zend_Translate')) {
            return Zend_Registry::get('Zend_Translate');
        }

        throw new \LogicExcpetion('undefinded Zend Translate object');
    }

    /**
     * Format data table kpi activity to be exported
     * @param array $aDatas
     * @return array
     */
    public function formatDataTableActivityForCSV(array $aDatas)
    {
        $aFormatedDatas = array();
        foreach ($aDatas as $sOptions => $oDataActivity) {
            $aFormatedData = array('Options' => $sOptions);
            $aFormatedData['Nb op mois en cours'] = $oDataActivity->getNbOpCurrentMonth();
            $aFormatedData['Nb op cumul année en cours'] = $oDataActivity->getNbOpCurrentYear();
            $aFormatedData['CA vendu mois en cours'] = $oDataActivity->getSoldCurrentMonth();
            $aFormatedData['Coût interne mois en cours'] = $oDataActivity->getRealizedChargesForCurrentMonth();
            $aFormatedData['CA vendu cumul'] = $oDataActivity->getSoldCurrentYear();
            $aFormatedData['Coût interne cumul'] = $oDataActivity->getRealizedChargesForCurrentYear();
            $aFormatedData['Rentabilité'] = $oDataActivity->getProfitability();
            $aFormatedDatas[] = $aFormatedData;
        }
        return $aFormatedDatas;
    }

    /**
     * @param array $aKpiIndicatorsConfig
     * @return array
     */
    public function getDefaultKpiSettings(array $aKpiIndicatorsConfig)
    {
        $aDefaultKpiSettings = array();

        foreach ($aKpiIndicatorsConfig as $iIndicatorId => $aKpiIndicatorConfig) {
            $aDefaultKpiSettings[$iIndicatorId]['name'] = $aKpiIndicatorConfig['name'];
            $aDefaultKpiSettings[$iIndicatorId]['position'] = $iIndicatorId;
            $aDefaultKpiSettings[$iIndicatorId]['filters'] = array_keys($aKpiIndicatorConfig['filters']);
        }

        return $aDefaultKpiSettings;
    }
}
