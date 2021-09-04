<?php

class Phoenix_File_Cost_CsvGenerator extends Phoenix_File_AbstractGenerator
{


    /**
     * @param string $sWhereCondition
     */
    public function downloadCsvExport(string $sWhereCondition = '')
    {
        $oDataIterator = FacturesQuery::create()->getCostsValidationExportData($sWhereCondition);

        $sFileName = $this->getTranslate()->translate('Phoenix - Extract données validation des coûts').' - ' . date('Y-m-d') . '_' . uniqid() . '.csv';

        $sFilepath = $this->generateCsvFileFromData($sFileName, $oDataIterator);
        $this->streamFileFromFilePath($sFilepath);
        unlink($sFilepath);
    }
}
