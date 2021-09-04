<?php

/**
 * This class has been made to be used by the controllers, this, in order to
 * avoid code duplication.
 *
 * The class a statistics JSON format file, use the appropriate
 * statistic template file depending on the operation type, and compute the HTML render of the statistics.
 * The render will be used to generate an operation statistics document in PDF format.
 *
 * @author Amine JAAOUANI
 */
class Phoenix_Stats_Service_HtmlRenderer
{

    /**
     * @var array
     */
    protected $statisticsData;

    /**
     * @var int
     */
    protected $compilatedStatisticFileId;

    /**
     * @var int
     */
    protected $operationNumber;

    /**
     * @var \Zend_View
     */
    protected $zendView;

    /**
     * @var \Zend_Layout
     */
    protected $zendLayout;

    /**
     *
     * @param int $iFileId
     * @param \Zend_View $oZendView
     * @param \Zend_Layout $oZendLayout
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function __construct($iFileId, \Zend_View $oZendView = null, \Zend_Layout $oZendLayout = null)
    {
        if (! is_int($iFileId)) {
            throw new \InvalidArgumentException('Argument "$iFileId" expects an int, "' . gettype($iFileId) . '" given');
        }

        // Retrieving File Entity
        $oStatisticsFile = FilesQuery::create()->filterByFileId($iFileId)->filterByFileCategoryId(RFileCategories::STAT_JSON)->findOne();

        if (! $oStatisticsFile instanceof Files) {
            throw new \LogicException('The given file id ' . $iFileId . ' does not seem to match a valid statistics JSON format file');
        }

        $sStatisticsFilePath = $oStatisticsFile->getFilePath();
        if (file_exists(false === $sStatisticsFilePath)) {
            throw new \LogicException('The file "' . $sStatisticsFilePath . '" associated to the file id "' . $iFileId . '" has not been found');
        }

        $this->statisticsData = json_decode(file_get_contents($sStatisticsFilePath), true);
        // Set file to statistics data
        $this->statisticsData['oDateCreateFile'] = $oStatisticsFile->getDateCreate(null);

        // Retrieving operation documents language
        if (! isset($this->statisticsData['aOperation']['aOperationGlobalInformation']['sStatisticsLanguage']) || ! ($this->statisticsData['aOperation']['aOperationGlobalInformation']['sStatisticsLanguage'])) {
            throw new \LogicException('The given file id ' . $iFileId . ' does not define the operation documents language');
        }

        // Initiating the operation number
        if (! isset($this->statisticsData['aOperation']['aOperationGlobalInformation']['iOperationNumber']) || empty($this->statisticsData['aOperation']['aOperationGlobalInformation']['iOperationNumber'])) {
            throw new \LogicException('The operation number is not specified in the file id ' . $this->getCompilatedStatisticFileId());
        }

        // Initiating the translator object
        Phoenix_Stats_Service_Translator::initTranslator($this->statisticsData['aOperation']['aOperationGlobalInformation']['sStatisticsLanguage']);

        $this->setcompilatedStatisticFileId($iFileId);
        $this->setOperationNumber((string) $this->statisticsData['aOperation']['aOperationGlobalInformation']['iOperationNumber']);
        if ($oZendView) {
            $this->setZendView($oZendView);
        }
        if ($oZendLayout) {
            $this->setZendLayout($oZendLayout);
        }
    }

    /**
     * Gets the property statisticsData value
     *
     * @return array
     * @throws \LogicException
     */
    public function getStatisticsData()
    {
        if (is_array($this->statisticsData)) {
            return $this->statisticsData;
        }
        throw new \LogicException('Property "statisticsData" expects an array, "' . (is_object($this->statisticsData) ? get_class($this->statisticsData) : gettype($this->statisticsData)) . '" defined');
    }

    /**
     * Gets the property compilatedStatisticFileId value
     *
     * @return int
     * @throws \LogicException
     */
    public function getCompilatedStatisticFileId()
    {
        if (is_int($this->compilatedStatisticFileId)) {
            return $this->compilatedStatisticFileId;
        }
        throw new \LogicException('Property "compilatedStatisticFileId" expects an int, "' . (is_object($this->compilatedStatisticFileId) ? get_class($this->compilatedStatisticFileId) : gettype($this->compilatedStatisticFileId)) . '" defined');
    }

    /**
     * Gets the property operationNumber value
     *
     * @return string
     * @throws \LogicException
     */
    public function getOperationNumber()
    {
        if (is_string($this->operationNumber)) {
            return $this->operationNumber;
        }
        throw new \LogicException('Property "operationNumber" expects a string, "' . (is_object($this->operationNumber) ? get_class($this->operationNumber) : gettype($this->operationNumber)) . '" defined');
    }

    /**
     * Gets the zendView
     *
     * @return /Zend_View
     */
    public function getZendView()
    {
        if ($this->zendView instanceof \Zend_View) {
            return $this->zendView;
        }
        throw new \LogicException('Property "zendView" expects an instance of "\Zend_View", "' . (is_object($this->zendView) ? get_class($this->zendView) : gettype($this->zendView)) . '" defined');
    }

    /**
     * Gets the zendLayout
     *
     * @return /Zend_Layout
     */
    public function getZendLayout()
    {
        if ($this->zendLayout instanceof \Zend_Layout) {
            return $this->zendLayout;
        }
        throw new \LogicException('Property "zendLayout" expects an instance of "\Zend_Layout", "' . (is_object($this->zendLayout) ? get_class($this->zendLayout) : gettype($this->zendLayout)) . '" defined');
    }

    /**
     * Sets the property zendLayout value
     *
     * @param  \Zend_Layout $oZendLayout
     * @return \Phoenix_Stats_Service_HtmlRenderer
     */
    public function setZendLayout(\Zend_Layout $oZendLayout)
    {
        $this->zendLayout = $oZendLayout;
        return $this;
    }

    /**
     * Sets the property compilatedStatisticFileId value
     *
     * @param  int $iFileId
     * @return \Data_Statistics_StatisticsReader
     * @throws \LogicException
     */
    public function setCompilatedStatisticFileId($iFileId)
    {
        if (is_int($iFileId)) {
            $this->compilatedStatisticFileId = $iFileId;
            return $this;
        }
        throw new \LogicException('Argument "compilatedStatisticFileId" expects an int, "' . gettype($iFileId) . '" defined');
    }

    /**
     * Sets the property statisticsData value
     *
     * @param  array $aStatisticData
     * @return \Data_Statistics_StatisticsReader
     */
    public function setStatisticsData(array $aStatisticData)
    {
        $this->statisticsData = $aStatisticData;
        return $this;
    }

    /**
     * Sets the property operationNumber value
     *
     * @param string $sOperationNumber
     * @return \Data_Statistics_StatisticsRendrer
     * @throws \LogicException
     */
    public function setOperationNumber($sOperationNumber)
    {
        if (is_string($sOperationNumber)) {
            $this->operationNumber = $sOperationNumber;
            return $this;
        }
        throw new \LogicException('Argument "operationNumber" expects a string, "' . gettype($sOperationNumber) . '" defined');
    }

    /**
     * Sets the property zendView value
     *
     * @param  \Zend_View $oZendView
     * @return \Phoenix_Stats_Service_HtmlRenderer
     */
    public function setZendView(\Zend_View $oZendView)
    {
        $this->zendView = $oZendView;
        return $this;
    }

    /**
     * Computes and returns the statistic HTML render
     *
     * @return string
     */
    public function render()
    {
        $oZendLayout = $this->getZendLayout();
        $oZendView = $this->getZendView();
        // Reseting translate object in view (Ticket : 42960)
        $oZendView->getHelper('Translate')->setTranslator(Zend_Registry::get('Zend_Translate'));

        $oZendLayout->setLayoutPath(Zend_Registry::get('config')->resources->layout->layoutPath);
        $oZendLayout->setLayout('pdfstat');
        $oZendView->setScriptPath(APPLICATION_PATH . '/modules/statistics/views/scripts/templates/');
        $oZendView->assign('aStatisticsData', $this->getStatisticsData());
        $oZendLayout->content = $oZendView->render($this->getAppropriateTemplateFileName());

        return $oZendLayout->render();
    }

    /**
     * Retrives the the statistic template file name based on the operation type
     * And the progression of the operation
     *
     * @return string
     * @throws \LogicException
     * @throws \DomainException
     */
    protected function getAppropriateTemplateFileName()
    {
        $aStatisticsData = $this->getStatisticsData();

        // If The Operation has just began, then we load the common template for the operation begenning
        if ($this->checkIfOperationInBeginning()) {
            return 'operationbeginning.phtml';
        } elseif (! isset($aStatisticsData['aOperation']['aOperationGlobalInformation']['iOperationType']) || empty($aStatisticsData['aOperation']['aOperationGlobalInformation']['iOperationType'])) {
            throw new \LogicException('The operation Type is not specified in the file id ' . $this->getCompilatedStatisticFileId());
        }

        $iOperationStatisticsType = $aStatisticsData['aOperation']['aOperationGlobalInformation']['iOperationStatisticsType'];

        switch ($iOperationStatisticsType) {
            case Operations::OPERATION_STAT_TYPE_ODR:
                return 'odr.phtml';
            case Operations::OPERATION_STAT_TYPE_PRIME:
                return 'prime.phtml';
            case Operations::OPERATION_STAT_TYPE_JEUX_WEB:
                return 'jeux.phtml';
            case Operations::OPERATION_STAT_TYPE_JEUX_SMS:
                return 'jeux_sms.phtml';
            default:
                throw new \DomainException('No Statistics template Exists for the given operation type : ' . $iOperationStatisticsType);
        }
    }

    /**
     * Checks weither the operation has just began
     *
     * @return boolean
     * @throws \LogicException
     */
    protected function checkIfOperationInBeginning()
    {
        $aStatisticsData = $this->getStatisticsData();

        if (! array_key_exists('iParticipationNumber', $aStatisticsData['aKpis'])) {
            throw new \LogicException('The participation number is not specified in the file id ' . $this->getCompilatedStatisticFileId());
        }
        return ! $aStatisticsData['aKpis']['iParticipationNumber'];
    }
}
