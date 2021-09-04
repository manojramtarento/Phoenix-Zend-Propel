<?php

class Reporting_KpirenderController extends My_Controller_Action
{

    /**
     *
     * @var array
     */
    protected $kpiIndicatorsConfig = array();

    public function init()
    {
        $this->kpiIndicatorsConfig = $this->loadIndicatorsConfigFile();
        $this->kpiSegmentsConfig = $this->loadSegmentsConfigFile();
    }

    /**
     * Index Reporting KpiRender
     */
    public function indexAction()
    {

        $oPhoenixKpiServiceKpiService = new Phoenix_Kpi_Service_KpiService();
        $this->view->indicators = $this->kpiIndicatorsConfig;

        $iDefaultUserKpiSetting = (int) UserKpiSettingsQuery::create()->select('UserKpiSettingsId')->filterByUserKpiSettingsUserId(Phoenix_Auth_User::getInstance()->getUserId())->orderByUserKpiSettingsId()->findOne();
        $this->view->userKpiSettingsParams = $oPhoenixKpiServiceKpiService->getDefaultKpiSettings($this->kpiIndicatorsConfig);
        $aParams = $this->_request->getParams();

        if (empty($aParams['select_user_kpi_settings']) && $iDefaultUserKpiSetting) {
            $this->_request->setParam('select_user_kpi_settings', $iDefaultUserKpiSetting);
            $aParams = $this->_request->getParams();
        }

        // If a kpi settings is selected
        if (!empty($aParams['select_user_kpi_settings'])) {
            $oUserKpiSettings = UserKpiSettingsQuery::create()->findPk($aParams['select_user_kpi_settings']);

            if (!($oUserKpiSettings instanceof UserKpiSettings)) {
                throw new \LogicException('Variable "$oUserKpiSettings " expects an instance of UserKpiSettings, "' . (is_object($oUserKpiSettings) ? get_class($oUserKpiSettings) : gettype($oUserKpiSettings)) . '" defined');
            }
            $aUserKpiSettingsParams = json_decode($oUserKpiSettings->getUserKpiSettingsValue(), true);

            if (false === $aUserKpiSettingsParams) {
                throw new \LogicException('Function "json_decode" Failed when try to decode "$oUserKpiSettings->getUserKpiSettingsValue()"');
            }
            // Sort kpi settings by position
            uasort($aUserKpiSettingsParams, 'Phoenix_Kpi_Service_KpiService::orderIndicatorByPosition');

            $this->view->userKpiSettingsParams = $aUserKpiSettingsParams;
        }

        // Retrieve default date (Today)
        $oCurrentDate = new DateTime();

        // Retrieve or calculate Paramtters filtre
        $this->view->kpi_month = $this->getParam('kpi_month', $oCurrentDate->format('m'));
        $this->view->kpi_year = $this->getParam('kpi_year', $oCurrentDate->format('Y'));

        // Retrieve Statut filter
        $oDataBackLogs = new Phoenix_Kpi_BackLogs();
        $this->view->statusTaux = $oDataBackLogs->getStatusTauxList();
    }

    /**
     * Retrieve Kpi indicators config
     * @return array
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function loadIndicatorsConfigFile()
    {
        $sIndicatorConfigFilePath = __DIR__ . '/../configs/Kpi/KpiIndicators.php';

        if (!file_exists($sIndicatorConfigFilePath)) {
            throw new \InvalidArgumentException('Indicators configuration file "' . $sIndicatorConfigFilePath . '" does not exist');
        }

        if (!is_readable($sIndicatorConfigFilePath)) {
            throw new \InvalidArgumentException('Indicators configuration file "' . $sIndicatorConfigFilePath . '" is not readable');
        }

        $aIndicatorConfig = include $sIndicatorConfigFilePath;

        if (false === $aIndicatorConfig) {
            throw new \RuntimeException('An error occured while including Indicators configuration file "' . $sIndicatorConfigFilePath . '"');
        }

        return $aIndicatorConfig;
    }

    /**
     * Retrieve Kpi Segments config
     * @return array
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function loadSegmentsConfigFile()
    {
        $sSegmentsConfigFilePath = __DIR__ . '/../configs/Kpi/KpiSegments.php';

        if (!file_exists($sSegmentsConfigFilePath)) {
            throw new \InvalidArgumentException('Indicators configuration file "' . $sSegmentsConfigFilePath . '" does not exist');
        }

        if (!is_readable($sSegmentsConfigFilePath)) {
            throw new \InvalidArgumentException('Indicators configuration file "' . $sSegmentsConfigFilePath . '" is not readable');
        }

        $aSegmentsConfig = include $sSegmentsConfigFilePath;

        if (false === $aSegmentsConfig) {
            throw new \RuntimeException('An error occured while including Indicators configuration file "' . $sSegmentsConfigFilePath . '"');
        }

        return $aSegmentsConfig;
    }

    /**
     * Window settings
     */
    public function settingsAction()
    {
        $this->view->indicators = $this->kpiIndicatorsConfig;

        $this->view->userKpiSettingsParams = array();

        $this->view->userSettingsId = $this->_request->getParam('select_user_kpi_settings', '');

        if ($this->view->userSettingsId) {
            $oUserKpiSettings = UserKpiSettingsQuery::create()->findPk($this->view->userSettingsId);
            if (!($oUserKpiSettings instanceof UserKpiSettings)) {
                throw new \LogicException('Variable "$oUserKpiSettings " expects an instance of UserKpiSettings, "' . (is_object($oUserKpiSettings) ? get_class($oUserKpiSettings) : gettype($oUserKpiSettings)) . '" defined');
            }
            $aUserKpiSettingsParams = json_decode($oUserKpiSettings->getUserKpiSettingsValue(), true);

            if (false === $aUserKpiSettingsParams) {
                throw new \LogicException('Function "json_decode" Failed when try to decode "$oUserKpiSettings->getUserKpiSettingsValue()"');
            }
            // Sort kpi settings by position
            uasort($aUserKpiSettingsParams, 'Phoenix_Kpi_Service_KpiService::orderIndicatorByPosition');

            $this->view->userKpiSettingsParams = $aUserKpiSettingsParams;
        }

        // Retrieve Statut filter
        $oDataBackLogs = new Phoenix_Kpi_BackLogs();
        $this->view->statusTaux = $oDataBackLogs->getStatusTauxList();
    }

    /**
     * Retrive the form for indicator to be displayed display in the left list
     */
    public function retrieveindicatorsettingsformAction()
    {
        $aParams = $this->_request->getParams();

        $this->_helper->layout->disableLayout();

        if (!isset($aParams['IndicateurId'])) {
            throw new \InvalidArgumentException('Key "IndicateurId" does not exists for given array "$aParams"');
        }

        $this->view->indicatorId = $aParams['IndicateurId'];

        $this->view->indicatorName = $this->kpiIndicatorsConfig[$this->view->indicatorId]['name'];

        $this->view->description = $this->kpiIndicatorsConfig[$this->view->indicatorId]['description'];

        $this->view->filters = $this->kpiIndicatorsConfig[$this->view->indicatorId]['filters'];

        // Retrieve Statut filter
        $oDataBackLogs = new Phoenix_Kpi_BackLogs();
        $this->view->statusTaux = $oDataBackLogs->getStatusTauxList();
    }

    /**
     * Save settings
     */
    public function savekpisettingsAction()
    {
        $this->_helper->layout->disableLayout();

        $aParams = $this->_request->getParams();

        $this->view->kpiSettingsName = '';

        $this->view->paramData = htmlspecialchars(json_encode($aParams));

        if (!empty($aParams['user_kpi_setting_id'])) {
            $oUserKpiSettings = UserKpiSettingsQuery::create()->findPk($aParams['user_kpi_setting_id']);
            $this->view->kpiSettingsName = $oUserKpiSettings->getUserKpiSettingsName();
            $this->view->kpiSettingsId = $aParams['user_kpi_setting_id'];
        }

        if (isset($aParams['paramData']) && isset($aParams['userKpiSettingsName'])) {
            $iNbUserKpiSettings = UserKpiSettingsQuery::create()
                    ->filterByUserKpiSettingsUserId(Phoenix_Auth_User::getInstance()->getUserId())
                    ->count();

            if ($iNbUserKpiSettings >= 5 && empty($aParams['user_kpi_setting_id'])) {
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                    Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE,
                    $this->view->translate('Vous avez atteint le nombre maximum de Kpis autorisé (5 kpis)')
                ));
            } else {
                $aParamData = json_decode($aParams['paramData'], true);

                if (false === $aParamData) {
                    throw new \LogicException('Function "json_decode" Failed when try to decode "$aParams[\'paramData\']"');
                }

                $aUserIndicatorSettings = Phoenix_Kpi_Service_KpiService::formatSettingsFromRequest($aParamData);
                if (!isset($oUserKpiSettings)) {
                    $oUserKpiSettings = new UserKpiSettings();
                }
                $oUserKpiSettings->setUserKpiSettingsUserId(Phoenix_Auth_User::getInstance()->getUserId());
                $oUserKpiSettings->setUserKpiSettingsName($aParams['userKpiSettingsName']);
                $oUserKpiSettings->setUserKpiSettingsValue(json_encode($aUserIndicatorSettings));

                if ($oUserKpiSettings->validate()) {
                    $oUserKpiSettings->save();
                    $this->_helper->Json(new Phoenix_Ajax_Components_Response(
                        Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE,
                        $this->view->translate('Paramétrage sauvegardé avec succès')
                    ));
                } else {
                    $aErrors = $oUserKpiSettings->getValidationFailures();
                    $this->_helper->PropelFailures()->registerErrors($aErrors);
                }
            }
        }
    }

    /**
     * Retrive KPI ACTIVITY TABLE
     */
    public function activitytableAction()
    {
        $this->_helper->layout->disableLayout();

        // Retrieve default date (Today)
        $oCurrentDate = new DateTime();

        // Retrieve or calculate Paramtters filtre
        $this->view->kpi_month = $this->getParam('kpi_month', $oCurrentDate->format('m'));
        $this->view->kpi_year = $this->getParam('kpi_year', $oCurrentDate->format('Y'));
        $this->view->activites_id = $this->getParam('activites_id', '');

        $this->_helper->layout->disableLayout();

        $oKpiService = new Phoenix_Kpi_Service_KpiService($this->kpiSegmentsConfig);

        $this->view->dataActivityTable = $oKpiService->getTableKpiActivity((int) $this->view->kpi_month, (int) $this->view->kpi_year, (int) $this->view->activites_id);

        // Export csv kpi activity
        if ($this->getParam('format') == 'csv') {
            $aFormattedData = $oKpiService->formatDataTableActivityForCSV($this->view->dataActivityTable);
            $oAdapterExport = new My_Data_Export_Source_Adapter_Array($aFormattedData);
            $oExport = new My_Data_Export_CSV($oAdapterExport);
            $sFilename = 'export_table_kpi_activity_' . date('Ymd') . '_' . uniqid() . '.csv';
            file_put_contents(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sFilename, $oExport->make());
            My_File_Transfer::getInstance()->send(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sFilename);
        }
    }

    /**
     * Retrieve KPI BACKLOGS TABLE
     */
    public function backlogstableAction()
    {
        $this->_helper->layout->disableLayout();

        $oDataBackLogs = new Phoenix_Kpi_BackLogs();

        // Retrieve default date (Today)
        $oCurrentDate = new DateTime();

        // Retrieve or calculate Paramtters filtre
        $this->view->kpi_month = $this->getParam('kpi_month', $oCurrentDate->format('m'));
        $this->view->kpi_year = $this->getParam('kpi_year', $oCurrentDate->format('Y'));

        $this->view->activites_id = $this->getParam('activites_id', '');
        $this->view->status_taux_id = $this->getParam('status_taux_id', '');

        // Retrieve Backlogs Data By year and month
        $this->view->dataBackLogs = $oDataBackLogs->getBackLogsTableByMonthAndYear($this->view->kpi_month, $this->view->kpi_year, $this->view->activites_id, $this->view->status_taux_id);
        $this->view->dataBackLogs = $oDataBackLogs->computeDataBackLogs($this->view->dataBackLogs);

        // Export csv kpi activity
        if ($this->getParam('format') == 'csv') {
            $aFormattedData = $oDataBackLogs->formatDataForCSV($this->view->dataBackLogs);
            $oAdapterExport = new My_Data_Export_Source_Adapter_Array($aFormattedData);
            $oExport = new My_Data_Export_CSV($oAdapterExport);
            $sFilename = 'export_back_logs_table_' . date('Ymd') . '_' . uniqid() . '.csv';
            file_put_contents(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sFilename, $oExport->make());
            My_File_Transfer::getInstance()->send(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sFilename);
        }
    }

    /**
     * Retrieve KPI Graph activity
     */
    public function activitygraphAction()
    {
        $this->_helper->layout->disableLayout();

        $oKpiService = new Phoenix_Kpi_Service_KpiService($this->kpiSegmentsConfig);

        $this->view->jsonResponse = $oKpiService->getGraphKpiActivityByClientAndActivities($this->getParam('client', ''), $this->getParam('activites_id', ''));
    }

    /**
     * Retrieve KPI Graph product
     */
    public function activitygraphproductAction()
    {
        $this->_helper->layout->disableLayout();

        $oKpiService = new Phoenix_Kpi_Service_KpiService($this->kpiSegmentsConfig);

        // Retrieve default date (Today)
        $oCurrentDate = new DateTime();
        $aResult = $oKpiService->getGraphKpiActivityProduct((int) $this->getParam('kpi_month', $oCurrentDate->format('m')), (int) $this->getParam('kpi_year', $oCurrentDate->format('Y')));
        $this->view->jsonResponse = $aResult['json'];

        $aOperationLastYear = array();
        foreach ($aResult['operationLastYear'] as $aValue) {

            $aOperationLastYear[$aValue['Id']] = $aValue['Value'];
        }

        $aCumulLastYear = array();
        foreach ($aResult['cumulLastYear'] as $aValue) {
            $aCumulLastYear[$aValue['Id']] = $aValue['Value'];
        }

        $this->view->aNbCumulLastYear = $aCumulLastYear;
        $this->view->aNbOperationLastYear = $aOperationLastYear;
    }

    /**
     * Retrieve KPI product subscription monitoring
     */
    public function productsubscriptionsmonitoringAction()
    {
        $this->_helper->layout->disableLayout();

        $oKpiService = new Phoenix_Kpi_Service_KpiService($this->kpiSegmentsConfig);

        // Retrieve default date (Today)
        $oCurrentDate = new DateTime();

        $this->view->tableKpiProducts = $oKpiService->getTableKpiProductSubscriptionsMonitoring((int) $this->getParam('kpi_month', $oCurrentDate->format('m')), (int) $this->getParam('kpi_year', $oCurrentDate->format('Y')));
    }

    /**
     * User kpi settings deletion
     */
    public function deleteuserkpisettingsAction()
    {

        if ($this->_request->isXmlHttpRequest()) {
            $aParams = $this->_request->getParams();
            if (!isset($aParams['user_kpi_settings'])) {
                throw new \LogicException('The user kpi settings to delete has not been set in the request');
            }
            $oUserKpiSettings = UserKpiSettingsQuery::create()->findPK($aParams['user_kpi_settings']);
            if (!$oUserKpiSettings instanceof UserKpiSettings) {
                $sErrorMessage = 'Le Kpi que vous essayez de supprimer est introuvable, Veuillez vérifier qu\'il existe toujours dans la liste de selection';
                $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_WARNINGS, $this->view->translate($sErrorMessage)));
            }
            $sSuccessMessage = $this->view->translate('Le paramétrage du kpi') . ' "' . $oUserKpiSettings->getUserKpiSettingsName() . '" ' . $this->view->translate('a été supprimé');
            $oUserKpiSettings->delete();
            $this->_helper->Json(new Phoenix_Ajax_Components_Response(Phoenix_Ajax_Components_Response::ACTION_DISPLAY_MESSAGE, $sSuccessMessage));
        }
    }
}
