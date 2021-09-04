<?php

class Reporting_PilotageController extends My_Controller_Action
{

    /**
     * @var array
     */
    protected $aindicatorsconfig;

    /**
     *
     * @var array
     */
    protected $numbers = array(
        'Numéro d\'opération',
        'Réactivé',
    );

    public function init()
    {
        $this->_helper->ContextSwitch()->initContext();
        $this->aindicatorsconfig = $this->loadIndicatorsConfigFile();
    }

    /**
     * @return array
     * @throws \LogicException
     */
    protected function getIndicatorsConfig()
    {
        if (is_array($this->aindicatorsconfig)) {
            return $this->aindicatorsconfig;
        } else {
            throw new \LogicException('Indicator Config expects an array, "' . gettype($this->aindicatorsconfig) . '" defined');
        }
    }

    /**
     * Default method of controller
     */
    public function indexAction()
    {
        // Subject-matter instance request
        $aParams = $this->_request->getParams();

        $oSelect = new Zend_Db_Select(Zend_Db_Table::getDefaultAdapter());

        // Retrieve the list of indicators and groupings
        $this->view->aIndicateurNames = $this->getIndicators();
        $this->view->aIndicateurGroupments = $this->getIndicatorGroupments();

        // Deactivate indicator selection if the current user does not have access to any indicator.
        $this->view->DisableSelectList = ($this->view->aIndicateurNames) ? false : true;

        if (! empty($aParams['find_indicateur_id']) && ! empty($aParams['find_indicateur_group_by_id'])) {
            $sAdvancedQuery = $this->getIndicatorQueryDate($aParams['find_indicateur_id'], $aParams['find_indicateur_group_by_id'], $aParams['find_date_min'], $aParams['find_date_max']);
            if ($sAdvancedQuery) {
                $aResult = $oSelect->getAdapter()->query($sAdvancedQuery)->fetchAll();
            }
        }

        // Downloading the filtered list in CSV
        if ($this->getParam('format') == 'csv') {
            $aFormattedData = $this->convertDataNumbers($aResult, 'csv');
            $oAdapterExport = new My_Data_Export_Source_Adapter_Array($aFormattedData);
            $oExport = new My_Data_Export_CSV($oAdapterExport);
            $sFilename = $aParams['find_indicateur_id'] . '-' . date('Ymd_His') . '_' . rand(100, 999) . '.csv';
            file_put_contents(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sFilename, $oExport->make());
            My_File_Transfer::getInstance()->send(My_Env::getInstance()->getConfig()->path->tmp . '/' . $sFilename);
        } // Viewing the filtered list in HTML
        elseif (isset($aResult)) {
            $aResultDataHeader = array();
            if (isset($aResult[0])) {
                foreach (array_keys($aResult[0]) as $sElement) {
                    $aResultDataHeader[$sElement] = $sElement;
                }
            }
            $aFormattedData = $this->convertDataNumbers($aResult);
            $oPaginator = new My_Paginator(new Zend_Paginator_Adapter_Array($aFormattedData));
            $oPaginator->setCurrentPageNumber($this->_getParam('page'));
            $oPaginator->setItemCountPerPage(50);
            $this->view->paginator = $oPaginator;
            $this->view->header = $aResultDataHeader;
        }
    }

    /**
     * This function returns the list of indicators configured
     *
     * @return array
     */
    public function getIndicators()
    {
        $aIndicatorsConfig = $this->getIndicatorsConfig();
        $aIndicatorNames = array();
        $aUserGroupes = Phoenix_Auth_User::getInstance()->getGroups();
        foreach ($aIndicatorsConfig as $sKey => $aIndicator) {
            $aIndicatorNames[$this->view->translate($aIndicator['name'])] = array('value' => $sKey, 'class' => ($aIndicator['filter_date']) ? 'filter_date' : 'not_filter_date');
        }

        return $aIndicatorNames;
    }

    /**
     * Cette fonction retourne la liste des groupements configuré
     *
     * @return array
     */
    public function getIndicatorGroupments()
    {
        $aIndicatorsConfig = $this->getIndicatorsConfig();
        $aGroupmentsNames = array();

        foreach ($aIndicatorsConfig as $sKey => $aIndicator) {
            foreach ($aIndicator['display_mode'] as $iKey => $sGroupBy) {
                $aGroupmentsNames[$this->view->translate($sGroupBy)]['value'] = $iKey;
                if (isset($aGroupmentsNames[$this->view->translate($sGroupBy)]['class'])) {
                    $aGroupmentsNames[$this->view->translate($sGroupBy)]['class'] .= ' ' . $sKey;
                } else {
                    $aGroupmentsNames[$this->view->translate($sGroupBy)]['class'] = $sKey;
                }
            }
        }
        return $aGroupmentsNames;
    }

    /**
     * Cette fonction retourne un tableau contenant la configuration des indicateurs
     *
     * @return array
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function loadIndicatorsConfigFile()
    {
        $sIndicatorConfigFilePath = __DIR__ . '/../configs/Indicateurs.php';
        if (file_exists($sIndicatorConfigFilePath)) {
            if (false === include $sIndicatorConfigFilePath) {
                throw new \RuntimeException('An error occured while including Indicators configuration file "' . $sIndicatorConfigFilePath . '"');
            }
        } else {
            throw new \InvalidArgumentException('Indicators configuration file "' . $sIndicatorConfigFilePath . '" does not exist');
        }
        return include $sIndicatorConfigFilePath;
    }

    /**
     * @param string $sIdicatorId
     * @param string $sGroupmentId
     * @param string $sStartDate
     * @param string $sEndDate
     * @return string|boolean
     * @throws \InvalidArgumentException
     */
    public function getIndicatorQueryDate($sIdicatorId, $sGroupmentId, $sStartDate, $sEndDate)
    {
        if (! is_string($sIdicatorId)) {
            throw new \InvalidArgumentException('The Indicator id expects a string, "' . gettype($sIdicatorId) . '" given');
        }
        if (! is_string($sGroupmentId)) {
            throw new \InvalidArgumentException('The Groupment Id expects a string, "' . gettype($sGroupmentId) . '" given');
        }
        if (! is_string($sStartDate)) {
            throw new \InvalidArgumentException('The Start date expects a string, "' . gettype($sStartDate) . '" given');
        }
        if (! is_string($sEndDate)) {
            throw new \InvalidArgumentException('The End date expects a string, "' . gettype($sEndDate) . '" given');
        }

        if (! empty($sStartDate) && empty($sEndDate)) {
            $this->_helper->FlashMessenger($this->view->translate('La date de fin doit être précisé, si la date de début est donnée'), 'error');
            // To prevent the program from continuing execution
            return false;
        } elseif (empty($sStartDate) && ! empty($sEndDate)) {
            $this->_helper->FlashMessenger($this->view->translate('La date de début doit être précisé, si la date de fin est donnée'), 'error');
            return false;
        } elseif (! empty($sStartDate) && ! empty($sEndDate) && DateTime::createFromFormat('d/m/Y', $sEndDate) <= DateTime::createFromFormat('d/m/Y', $sStartDate)) {
            $this->_helper->FlashMessenger($this->view->translate('La date de fin ne peut pas être inférieur ou égale à la date de début'), 'error');
            return false;
        }

        $sOrderField = Zend_Controller_Front::getInstance()->getRequest()->getParam('order', null);
        $sOrderWay = Zend_Controller_Front::getInstance()->getRequest()->getParam('sense', null);

        // Loading the indicator configuration file
        $aIndicatorsConfig = $this->getIndicatorsConfig();
        $sDefaultQuery = $aIndicatorsConfig[$sIdicatorId]['queries'][$sGroupmentId]['query'];

        // Tests whether the order parameters are passed to the controller
        if (isset($sOrderField, $sOrderWay)) {
            // Encapsulate with quotes so that fields with spaces are well supported by the database engine
            $sOrderByField = '`' . $sOrderField . '`';
            $sOrderSens = $sOrderWay;
        } else {
            // Otherwise retrieve and apply the default order
            $sOrderByField = isset($aIndicatorsConfig[$sIdicatorId]['queries'][$sGroupmentId]['default_order_by']) ? $aIndicatorsConfig[$sIdicatorId]['queries'][$sGroupmentId]['default_order_by'] : '';
            $sOrderSens = isset($aIndicatorsConfig[$sIdicatorId]['queries'][$sGroupmentId]['default_order_sens']) ? $aIndicatorsConfig[$sIdicatorId]['queries'][$sGroupmentId]['default_order_sens'] : '';
        }

        $sBasicQuery = empty($sOrderByField) ? $sDefaultQuery : $sDefaultQuery . ' order by ' . $sOrderByField . ' ' . $sOrderSens;

        $sDateToControl = isset($aIndicatorsConfig[$sIdicatorId]['queries'][$sGroupmentId]['date_to_check']) ? $aIndicatorsConfig[$sIdicatorId]['queries'][$sGroupmentId]['date_to_check'] : '';

        if (! empty($sStartDate) && ! empty($sEndDate) && $aIndicatorsConfig[$sIdicatorId]['filter_date']) {
            $sSearchDateQuery = 'where ' . $sDateToControl . ' between \'' . Phoenix_Data_Convert::FormatDateForMysqlWithDetails($sStartDate) . '\' and \'' . Phoenix_Data_Convert::FormatDateForMysqlWithDetails($sEndDate, false) . '\'';
            if (! empty($aIndicatorsConfig[$sIdicatorId]['queries'][$sGroupmentId]['date_to_check_2'])) {
                $sSearchDateQuery .= 'AND ' . $aIndicatorsConfig[$sIdicatorId]['queries'][$sGroupmentId]['date_to_check_2'] . ' between \'' . Phoenix_Data_Convert::FormatDateForMysqlWithDetails($sStartDate) . '\' and \'' . Phoenix_Data_Convert::FormatDateForMysqlWithDetails($sEndDate, false) . '\'';
            }

            $sAdvancedQuery = str_replace("{{date_critera}}", $sSearchDateQuery, $sBasicQuery);
        } else {
            $sAdvancedQuery = str_replace("{{date_critera}}", "", $sBasicQuery);
        }

        return $sAdvancedQuery;
    }

    /**
     * This function is used to format the numbers displayed in the page or in the csv export.
     *
     * @param array $aData
     * @param string $sMode
     * @return array
     * @throws \InvalidArgumentException
     */
    public function convertDataNumbers(array $aData, $sMode = 'html')
    {
        if (! is_string($sMode)) {
            throw new \InvalidArgumentException('The data convertion mode expects a string, "' . gettype($sMode) . '" given');
        }

        if (! empty($aData) && $sMode == 'html') {
            foreach ($aData as $sKey1 => $aIndicator) {
                foreach ($aIndicator as $sKey => $fElement) {
                    // Le numéro d'opération ne doit pas être formatté
                    if (is_numeric($fElement) && ! in_array($sKey, $this->numbers)) {
                        $aData[$sKey1][$sKey] = array('montant', Phoenix_Data_Convert::formatMoney($fElement, false, false, true));
                    }
                }
            }
        } elseif (! empty($aData) && $sMode == 'csv') {
            foreach ($aData as $sKey1 => $aIndicator) {
                foreach ($aIndicator as $sKey => $fElement) {
                    if (is_numeric($fElement) && ! in_array($sKey, $this->numbers)) {
                        $fElement = Phoenix_Data_Convert::formatNumberForCsv($fElement);
                    }
                }
            }
        }
        return $aData;
    }
}
