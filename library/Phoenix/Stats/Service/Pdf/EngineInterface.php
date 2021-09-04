<?php

interface Phoenix_Stats_Service_Pdf_EngineInterface
{

    /**
     * Add a page object to the output
     * @param type $sInput : either a URL, a HTML string or a PDF/HTML filename
     * @param array $aOptions : optional options for this page
     */
    public function addPage($sInput, array $aOptions = array());

    /**
     * Retrieve pdf contents
     * @return string
     */
    public function getContents();

    /**
     * @return string
     */
    public function getBasePath();

    /**
     * @param string $sBasePath
     * @return Phoenix_Stats_Service_Pdf_EngineInterface
     */
    public function setBasePath($sBasePath);
}
