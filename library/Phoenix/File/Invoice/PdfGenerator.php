<?php

class Phoenix_File_Invoice_PdfGenerator extends Phoenix_File_AbstractGenerator
{
    /**
     * Retrieve Pdf content for client
     *
     * @param \Factures $oInvoice
     * @return string : invoice file content
     * @throws \LogicException
     */
    public function getInvoicePdfContentForClient(\Factures $oInvoice) : string
    {

        // Reissue invoices "edited", "cashed" or "partially cashed"
        if (in_array($oInvoice->getFactStatusId(), array(RFactureStatuts::CREATED, RFactureStatuts::VALIDATED))) {
            throw new \LogicException('Invoice "' . $oInvoice->getFactId() . '" status must be output, partially cashed or partially cashed');
        }

         // Retrieve last version  of pdf file
        $oInvoiceFile = $oInvoice->getInvoiceFileLastVersion();
        return $oInvoiceFile->getFileContent();
    }

    /**
     * Retireve the last version odf invoice pdf file and stream it to download
     * @param \Factures $oInvoice
     */
    public function downloadInvoicePdf(\Factures $oInvoice)
    {
        // Retrieve last version  of pdf file
        $oInvoiceFile = $oInvoice->getInvoiceFileLastVersion();
        $this->streamFileFromFilePath($oInvoiceFile->getFilePath(), $oInvoice->getInvoiceDisplayFileName('pdf'));
    }


    /**
     * Generate invoice PDF and store it as File
     * @param \Factures $oInvoice
     * @return boolean
     * @throws \LogicException
     */
    public function generateInvoicePdf(\Factures $oInvoice) : bool
    {
        // Create new PDF document
        $iInvoiceStatusId = $oInvoice->getFactStatusId();
        if (in_array($iInvoiceStatusId, array(RFactureStatuts::CREATED, RFactureStatuts::VALIDATED))) {
            if (! $sXml = Phoenix_File_Invoice_XmlGenerator::getInstance()->generateInvoiceXml($oInvoice)) {
                return false;
            }

            $oDataDocReaderXmlDevis = new Data_Doc_Reader_Xml_Facture($sXml);
            $oPdf = new Phoenix_PDFGen_Invoice();
            $oPdf->initialize($oDataDocReaderXmlDevis->getStruct(), array('watermark' => true));
            $oPdf->generate(array(), true);
            $this->saveInvoicePdfFile($oInvoice, $oPdf);
            return true;
        }

        // Generate duplicata
        if (in_array($iInvoiceStatusId, array(RFactureStatuts::EDITED, RFactureStatuts::ENCAISSE, RFactureStatuts::ENCAISSE_PARTIEL))) {
            // Create new PDF document
            if (! $sXml = Phoenix_File_Invoice_XmlGenerator::getInstance()->generateInvoiceXml($oInvoice)) {
                return false;
            }

            $oDataDocReaderXmlDevis = new Data_Doc_Reader_Xml_Facture($sXml);
            $oPdf = new Phoenix_PDFGen_Invoice();
            $oPdf->initialize($oDataDocReaderXmlDevis->getStruct());
            $oPdf->generate(array(), true);
            $this->saveInvoicePdfFile($oInvoice, $oPdf);
            return true;
        }
        throw new \LogicException('The invoice "' . $oInvoice->getFactId() . '" does not have the expected status to be generated as Pro forma or duplicata');
    }

    /**
     * @param \Factures $oInvoice
     * @param \Phoenix_PDFGen_Invoice $oPdfDocument
     * @return Files
     */
    protected function saveInvoicePdfFile(\Factures $oInvoice, \Phoenix_PDFGen_Invoice $oPdfDocument) : Files
    {
        $oPhoenixConfig = Zend_Registry::get('config');
        $sUploadDirectory = $oPhoenixConfig->my->fileupload->directory;

        if (empty($sUploadDirectory)) {
            throw new \LogicException('Configuration "my.fileupload.directory" is undefined');
        }

        if (! is_writable($sUploadDirectory)) {
            throw new \LogicException('Configuration "my.fileupload.directory" "' . $sUploadDirectory . '" must be writable');
        }

        // Save the file in the upload directory
        $sFilename = $oInvoice->getInvoiceFileName('pdf');
        $sInvoiceFilepath = $sUploadDirectory . DIRECTORY_SEPARATOR . $sFilename;
        $oPdfDocument->Output($sInvoiceFilepath, 'F');
        return $oInvoice->addInvoiceFile($sFilename, $oInvoice->getFactStatusId() !== RFactureStatuts::CREATED);
    }

    /**
     * @param array|\Traversable $aInvoices
     * @param string $sFilename
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function downloadInvoicesPdfForEdition($aInvoices)
    {
        if (! $aInvoices instanceof \Traversable && ! is_array($aInvoices)) {
            throw new \InvalidArgumentException('Argument "$aInvoices" expects an instance of "\Traversable" or an array, "' . (is_object($aInvoices) ? get_class($aInvoices) : gettype($aInvoices)) . '" given');
        }
        if (! $aInvoices) {
            throw new \InvalidArgumentException('Argument "$aInvoices" is empty');
        }

        $oPdf = new Phoenix_PDFGen_Invoice();
        foreach ($aInvoices as $oInvoice) {
            $sFileName = $oInvoice->getInvoiceDisplayFileName('pdf');
            if (in_array($oInvoice->getFactStatusId(), array(RFactureStatuts::CREATED, RFactureStatuts::VALIDATED))) {
                throw new \LogicException('Invoice "' . $oInvoice->getFactId() . '" status cannot be created or validated');
            }

            if ($sXml = Phoenix_File_Invoice_XmlGenerator::getInstance()->generateInvoiceXml($oInvoice)) {
                $oDataDocReaderXmlDevis = new Data_Doc_Reader_Xml_Facture($sXml);

                $oPdf->initialize($oDataDocReaderXmlDevis->getStruct());
                $oPdf->generate(array(), true);
                $oPdf->generate(array('append_entete' => 'Copie archive'));
            } else {
                return false;
            }
        }

        $sFileName = count($aInvoices) === 1 ? $sFileName : $this->getTranslate()->translate('factures') . '.pdf';
        $this->streamFileFromFileContent($oPdf->Output($sFileName, 'S'), $sFileName);
        return true;
    }
}
