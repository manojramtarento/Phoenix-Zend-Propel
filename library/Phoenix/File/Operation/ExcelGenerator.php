<?php

class Phoenix_File_Operation_ExcelGenerator extends Phoenix_File_AbstractGenerator
{

    /**
     * @param \Operations $oOperation
     */
    public function dowloadExcelQuotation(\Operations $oOperation)
    {
        $sXmlQuotation = Phoenix_File_Operation_XmlGenerator::getInstance()->generateXmlQuotation($oOperation);

        $oPhoenixDocReaderXmlDevis = new Data_Doc_Reader_Xml_Devis($sXmlQuotation);
        $oPhoenixDocWriterExcelDevis = new Data_Doc_Writer_Excel_Devis($oPhoenixDocReaderXmlDevis);

        $oExcel = $oPhoenixDocWriterExcelDevis->getExcel();

        $oPhpExcelWriterExcel2007 = new PHPExcel_Writer_Excel5($oExcel);
        $sFilepath = $this->getTmpDirectoryPath() . '/devis_' . $oOperation->getOpNumber() . '_' . date('Y-m-d_H-i-s-' . round((microtime(true) - time()) * 10000)) . '.xls';

        $oPhpExcelWriterExcel2007->save($sFilepath);
        $this->streamFileFromFilePath($sFilepath);
        unlink($sFilepath);
    }
}
