<?php

/**
 * This class has been made to be used by the controllers, this, in order to
 * avoid code duplication.
 *
 * The class receives in input an HTML Content, and then generate a PDF file
 *
 * @author Amine JAAOUANI
 */
class Phoenix_Stats_Service_PdfRenderer
{

    /**
     * @var Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine
     */
    protected $wkHtmlToPdfEngine;

    /**
     *
     * @var array
     */
    protected $pdfEngineConfig = array(
        'orientation' => 'landscape',
        'margin-top' => '5',
        'margin-left' => '10',
        'margin-bottom' => '3',
        'margin-right' => '10',
    );

    /**
     *
     * @var string
     */
    protected $htmlContent;

    /**
     * Constructor
     * @param Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine
     * @param string $sHtmlContent
     * @throws \LogicException
     */
    public function __construct(Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine $oWkHtmlToPdfEngine = null, $sHtmlContent = '')
    {
        if (!is_string($sHtmlContent)) {
            throw new \LogicException('Argument "sHtmlContent" expects a string, "' . (is_object($sHtmlContent) ? get_class($sHtmlContent) : gettype($sHtmlContent)) . '" given');
        }

        if ($sHtmlContent) {
            $this->htmlContent = $sHtmlContent;
        }
        if ($oWkHtmlToPdfEngine) {
            $this->wkHtmlToPdfEngine = $oWkHtmlToPdfEngine;
            $this->wkHtmlToPdfEngine->setOptions($this->getPdfEngineConfig());
            $this->wkHtmlToPdfEngine->setBasePath(realpath('.'));
        }
    }

    /**
     * Gets the property wkHtmlToPdfEngine value
     * @return Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine
     * @throws \LogicException
     */
    public function getWkHtmlToPdfEngine()
    {
        if ($this->wkHtmlToPdfEngine instanceof Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine) {
            return $this->wkHtmlToPdfEngine;
        }
        throw new \LogicException('Property "wkHtmlToPdfEngine" expects an instance of "Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine", "' . (is_object($this->wkHtmlToPdfEngine) ? get_class($this->wkHtmlToPdfEngine) : gettype($this->wkHtmlToPdfEngine)) . '" defined');
    }

    /**
     * Gets the property pdfEngineConfig value
     * @return array
     * @throws \LogicException
     */
    public function getPdfEngineConfig()
    {
        if (is_array($this->pdfEngineConfig)) {
            return $this->pdfEngineConfig;
        }
        throw new \LogicException('Property "pdfEngineConfig" expects an array, "' . (is_object($this->pdfEngineConfig) ? get_class($this->pdfEngineConfig) : gettype($this->pdfEngineConfig)) . '" defined');
    }

    /**
     * Gets the property htmlContent value
     * @return array
     * @throws \LogicException
     */
    public function getHtmlContent()
    {
        if (is_string($this->htmlContent)) {
            return $this->htmlContent;
        }
        throw new \LogicException('Property "htmlContent" expects an array, "' . (is_object($this->htmlContent) ? get_class($this->htmlContent) : gettype($this->htmlContent)) . '" defined');
    }

    /**
     * Sets the property wkHtmlToPdfEngine value
     * @param Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine $oWkHtmlToPdfEngine
     * @return \Phoenix_Stats_Service_PdfRenderer
     */
    public function setWkHtmlToPdfEngine(Phoenix_Stats_Service_Pdf_WkHtmlToPdfEngine $oWkHtmlToPdfEngine)
    {
        $this->wkHtmlToPdfEngine = $oWkHtmlToPdfEngine;
        return $this;
    }

    /**
     * Sets the property pdfEngineConfig value
     * @param array $aPdfEngineConfig
     * @return \Phoenix_Stats_Service_PdfRenderer
     */
    public function setPdfEngineConfig(array $aPdfEngineConfig)
    {
        $this->setPdfEngineConfig($aPdfEngineConfig);
        return $this;
    }

    /**
     * Sets the property htmlContent value
     * @param string $sHtmlContent
     * @return \Phoenix_Stats_Service_PdfRenderer
     * @throws \LogicException
     */
    public function setHtmlContent($sHtmlContent)
    {
        if (is_string($sHtmlContent)) {
            $this->htmlContent = $sHtmlContent;
            return $this;
        }
        throw new \LogicException('Argument "sHtmlContent" expects a string, "' . gettype($sHtmlContent) . '" defined');
    }

    /**
     * Triggers the statistics Pdf document download, using the wkHtmlToPdfEngine
     * @param string $sDocumentName
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function downloadPdfDocument($sDocumentName = 'Stat.pdf')
    {
        if (!is_string($sDocumentName)) {
            throw new \InvalidArgumentException('Argument "$sDocumentName" expects a string, "' . gettype($sDocumentName) . '" defined');
        }

        if (headers_sent()) {
            throw new \LogicException('Some data has already been output to browser, can\'t send Statistics PDF file');
        }

        // Building HTTP response header
        header('Content-Type: application/force-download');
        header('Content-Type: application/octet-stream', false);
        header('Content-Type: application/download', false);
        header('Content-Type: application/pdf', false);
        header('Content-Disposition: attachment; filename="' . basename($sDocumentName) . '"');
        header('Content-Transfer-Encoding: binary');

        // Output the Pdf Document content
        echo $this->getPdfContent();
        return $this;
    }

    /**
     * @return string
     */
    public function getPdfContent()
    {
        // Adding the Html content to the Pdf document
        $this->wkHtmlToPdfEngine->addPage($this->getHtmlContent());
        return $this->wkHtmlToPdfEngine->getContents();
    }
}
