<?php

class Phoenix_File_Invoice_ExcelGenerator extends Phoenix_File_AbstractGenerator
{

    /**
     * @param \Factures $oInvoice
     * @return boolean
     */
    public function downloadInvoiceExcel(\Factures $oInvoice) : bool
    {
        if (! $sInvoiceXml = Phoenix_File_Invoice_XmlGenerator::getInstance()->generateInvoiceXml($oInvoice)) {
            return false;
        }

        $oDataDocWriterExcelFacture = new Data_Doc_Writer_Excel_Facture(new Data_Doc_Reader_Xml_Facture($sInvoiceXml));
        $oPhpExcelReaderExcel5 = new PHPExcel_Writer_Excel5($oDataDocWriterExcelFacture->getExcel());
        $iMicro = microtime(true) - time();
        $sFilepath = $this->getTmpDirectoryPath() . '/facture_' . $oInvoice->getFactReference() . '_' . date('Y-m-d_H-i-s-' . round($iMicro * 10000)) . '.xls';
        $oPhpExcelReaderExcel5->save($sFilepath);
        $this->streamFileFromFilePath($sFilepath);
        unlink($sFilepath);
        return true;
    }
}
