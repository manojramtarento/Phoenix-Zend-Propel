<?php

class Phoenix_File_Operation_CsvGenerator extends Phoenix_File_AbstractGenerator
{

    const EXPORT_TYPE_WEEKLY = 'weekly';
    const EXPORT_TYPE_SIMPLE = 'simple';
    const EXPORT_TYPE_FULL = 'full';
    const EXPORT_TYPE_SALES_REPORT = 'sales_report';

    /**
     * @param string $sType
     * @param array $aEmails
     */
    public function sendCsvExportByEmail(string $sType, array $aEmails)
    {
        // Retrieve data and define export filename depending on export type
        switch ($sType) {
            case self::EXPORT_TYPE_WEEKLY:
                $sSubject = 'Phoenix - Extract données générales des OP';
                break;
            case self::EXPORT_TYPE_FULL:
                $sSubject = 'Phoenix - Extract devis complet';
                break;
            case self::EXPORT_TYPE_SALES_REPORT:
                $sSubject = 'Phoenix - Extract données du suivi des ventes';
                break;
            default:
                throw new \DomainException('Argument "$sType" "' . $sType . '" is not supported');
        }

        $sFilepath = $this->generateCsvExport($sType);
        $this->sendFileByEmail($sFilepath, $aEmails, $this->getTranslate()->translate($sSubject));
        unlink($sFilepath);
    }

    /**
     * @param string $sType
     * @param array $aOperationsIds
     */
    public function downloadCsvExport(string $sType, array $aOperationsIds = null)
    {
        $sFilepath = $this->generateCsvExport($sType, $aOperationsIds);
        $this->streamFileFromFilePath($sFilepath);
        unlink($sFilepath);
    }

    /**
     * @param string $sType
     * @param array $aOperationsIds
     * @return string
     */
    protected function generateCsvExport(string $sType, array $aOperationsIds = null) : string
    {
        // Retrieve data and define export filename depending on export type
        switch ($sType) {
            case self::EXPORT_TYPE_WEEKLY:
                $oDataIterator = OperationsQuery::create()->getSimpleOperationsExportData($aOperationsIds);
                $sFileName = 'phoenix_general_data_op_weekly_' . date('Y-m-d') . '_' . uniqid() . '.csv';
                break;
            case self::EXPORT_TYPE_SIMPLE:
                $oDataIterator = OperationsQuery::create()->getSimpleOperationsExportData($aOperationsIds);
                $sFileName = 'phoenix_general_data_op_simple_' . date('Y-m-d') . '_' . uniqid() . '.csv';
                break;
            case self::EXPORT_TYPE_FULL:
                $oDataIterator = OperationsQuery::create()->getFullOperationsExportData($aOperationsIds);
                $sFileName = 'phoenix_general_data_op_full_' . date('Y-m-d') . '_' . uniqid() . '.csv';
                break;
            case self::EXPORT_TYPE_SALES_REPORT:
                $oDataIterator = OperationsQuery::create()->getSalesReportData();
                $sFileName = 'phoenix_suivi_ventes_' . date('Y-m-d') . '_' . uniqid() . '.csv';
                break;
            default:
                throw new \DomainException('Argument "$sType" "' . $sType . '" is not supported');
        }

        return $this->generateCsvFileFromData($sFileName, $oDataIterator);
    }
}
