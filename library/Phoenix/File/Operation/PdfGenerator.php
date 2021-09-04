<?php

class Phoenix_File_Operation_PdfGenerator extends Phoenix_File_AbstractGenerator
{

    
    /**
     * @param \Operations $oOperation
     */
    public function downloadPdfQuotation(\Operations $oOperation)
    {
        $oPdfDocument = $this->getPdfQuotation($oOperation);
        $this->disableRendering();
        $oPdfDocument->Output($oOperation->getOpNumber() . '_devis.pdf', 'D');
    }

    /**
     * @param \Operations $oOperation
     * @param bool $bIsAcceptedVersion
     * @throws \LogicException
     * @throws \RuntimeException
     */
    public function generatePdfQuotationAndSave(\Operations $oOperation, bool $bIsAcceptedVersion = true)
    {
        $oPhoenixConfig = Zend_Registry::get('config');
        $sUploadDirectory = $oPhoenixConfig->my->fileupload->directory;

        if (empty($sUploadDirectory)) {
            throw new \LogicException('Configuration "my.fileupload.directory" is undefined');
        }

        if (! is_writable($sUploadDirectory)) {
            throw new \LogicException('Configuration "my.fileupload.directory" "' . $sUploadDirectory . '" must be writable');
        }

        $oPdfDocument = $this->getPdfQuotation($oOperation);
        $sPDFContent = $oPdfDocument->Output('', 'S');

        // Save the file in the upload directory
        $sQuoteFilename = $oOperation->getOpNumber() . '_devis_' . date('Y-m-d_H-i-s') . '.pdf';
        $rFile = fopen($sUploadDirectory . '/' . $sQuoteFilename, 'wb');
        fwrite($rFile, $sPDFContent);
        fclose($rFile);

        // Registring the file in the database
        $oOperation->addFileDevis($sQuoteFilename, $bIsAcceptedVersion);
    }

     /**
     * @param \Operations $oOperation
     * @param bool $bProformat force pro format
     * @return \Phoenix_PDFGen_Quotation
     */
    protected function getPdfQuotation(\Operations $oOperation) : Phoenix_PDFGen_Quotation
    {
        $sXml = Phoenix_File_Operation_XmlGenerator::getInstance()->generateXmlQuotation($oOperation);
        $oPhoenixDocReaderXmlDevis = new Data_Doc_Reader_Xml_Devis($sXml);
        $oPhoenixWriterPdfDevis = new Phoenix_PDFGen_Quotation();
        $oPhoenixWriterPdfDevis->initialize($oPhoenixDocReaderXmlDevis->getStruct());
        $oPhoenixWriterPdfDevis->generate();
        return $oPhoenixWriterPdfDevis;
    }

}
