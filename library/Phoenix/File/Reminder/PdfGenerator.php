<?php

class Phoenix_File_Reminder_PdfGenerator extends Phoenix_File_AbstractGenerator
{

    /**
     * Generate invoice PDF to be downloaded
     * @param \Relances $oReminder
     * @return boolean
     */
    public function downloadReminderPdf(\Relances $oReminder) : bool
    {
        // Applying the watermark only if reminde is in created status
        return $this->downloadRemindersPdf(array($oReminder), $oReminder->getRelReference() . '.pdf', $oReminder->getRelStatutId() === RRelanceStatuts::CREE);
    }

    /**
     * Generate invoice PDF to be downloaded
     * @param array $aReminders
     * @param string $sFilename
     * @param bool $bWatermark
     * @return boolean
     */
    public function downloadRemindersPdf(array $aReminders, string $sFilename, bool $bWatermark = false) : bool
    {
        // Retrieve xml data
        if (! $sXml = Phoenix_File_Reminder_XmlGenerator::getInstance()->generateRemindersXml($aReminders)) {
            return false;
        }

        $oPdf = new Phoenix_PDFGen_Reminder();
        $oPdf->initializeFromXml($sXml, array('watermark' => $bWatermark));
        $oPdf->generate();
        $this->disableRendering();
        $oPdf->Output($sFilename, 'D');
        return true;
    }
}
