<?php

/**
 * This class has been made to be used by the controllers, in order to avoid code duplication.
 * This class, use to send statistics by email
 *
 */
class Phoenix_Stats_Service_StatEmailer
{

    /**
     * @var Zend_Translate
     */
    protected $translate;

    /**
     * @param Phoenix_Mail $oPhoenixMail
     * @param Zend_Translate $oTranslate
     */
    public function __construct(Zend_Translate $oTranslate = null)
    {
        if ($oTranslate) {
            $this->setTranslate($oTranslate);
        }
    }

    /**
     * @param Zend_Translate $oTranslate
     * @return \Phoenix_Stats_Service_StatEmailer
     */
    public function setTranslate(Zend_Translate $oTranslate)
    {
        $this->translate = $oTranslate;
        return $this;
    }

    /**
     * @return Zend_Translate
     * @throws \LogicException
     */
    public function getTranslate()
    {
        if ($this->translate instanceof Zend_Translate) {
            return $this->translate;
        }
        throw new \LogicException('Property "translate" expects an instance of "Zend_Translate", "' . (is_object($this->translate) ? get_class($this->translate) : gettype($this->translate)) . '" defined');
    }

    /**
     * Retrieving mails statistics contact and manually entered by operation
     *
     * @param  Operations $oOperation
     * @return array
     */
    public function getStatisticsRecipientsByOperation(Operations $oOperation)
    {
        $aEmails = array();
        //Retreice Email Contact
        $oCriteria = new Criteria();
        $oCriteria->add('send_mail', true, Criteria::EQUAL);
        $aLnkOperationsContactsMail = $oOperation->getLnkOperationsContactsMailsJoinContacts($oCriteria);

        foreach ($aLnkOperationsContactsMail as $oLnkOperationsContactsMail) {
            if ($sEmail = $oLnkOperationsContactsMail->getContacts()->getCtEmail()) {
                $aEmails[] = $sEmail;
            }
        }

        // Retrieving mails manually entered
        $aMails = explode(',', $oOperation->getOpMailsDest());
        foreach ($aMails as $sEmail) {
            if ($sEmail) {
                $aEmails[] = $sEmail;
            }
        }

        return $aEmails;
    }

    /**
     * @param Operations $oOperation
     * @param string $sPdfContent
     * @param string $sExcelContent
     * @param array $aEmails
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public function sendStat(Operations $oOperation, $sPdfContent, $sExcelContent, array $aEmails)
    {
        if (!is_string($sPdfContent)) {
            throw new \InvalidArgumentException('Argument "$sPdfContent" expects a string, "' . gettype($sPdfContent) . '" given');
        }
        if (!is_string($sExcelContent)) {
            throw new \InvalidArgumentException('Argument "$sExcelContent" expects a string, "' . gettype($sExcelContent) . '" given');
        }

        if (!$aEmails) {
            throw new \LogicException('Address email recipient of statistics must be defined for this operation "' . $oOperation->getOpNumber() . '" ');
        }

        $oTranslate = $this->getTranslate();
        $oPhoenixMail = new Phoenix_Mail('UTF-8');

        $oPhoenixMail->setSubject($oTranslate->translate('subject_mail_statistcs_report') . ' ' . $oOperation->getOpNumber() . ' | ' . $oOperation->getOpLibelle());
        
        // Define sender data
        $sFromEmail = $sFromName = $sSignature = '';
        switch(true){
            case ($oUserCp = $oOperation->getUserCP()):
                $sFromEmail = $oUserCp->getUserMail();
                $sFromName = $oUserCp->getUserNomPrenom();
                $sSignature = $oUserCp->getSignature();
                break;            
            case ($oUserDc = $oOperation->getUserDC()):
                $sFromEmail = $oUserDc->getUserMail();
                $sFromName = $oUserDc->getUserNomPrenom();
                $sSignature = $oUserDc->getSignature();
                break;
            default:                
                $sFromEmail = $oPhoenixMail->getDefaultFromEmail();
                $sFromName = $oPhoenixMail->getDefaultFromName();
                $sSignature = $oPhoenixMail->getDefaultSignature();
                break;
        }
        
        $oPhoenixMail->setFrom($sFromEmail, $sFromName);
        $oPhoenixMail->addViewBodyHtml('statistics_clients.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('cp_name', $sFromName);
        $oPhoenixMail->getViewBodyHtml()->assign('signature', $sSignature);
        $oPhoenixMail->getViewBodyHtml()->assign('statTranslator', $oTranslate);

        $sFileName = $oTranslate->translate('label_mail_file_attached') . $oOperation->getOpNumber() . ' - ' . $oOperation->getOpLibelle();

        $oPhoenixMail->createAttachment($sPdfContent, 'application/pdf', Zend_Mime::DISPOSITION_INLINE, Zend_Mime::ENCODING_BASE64, Zend_Mime::encodeBase64Header($sFileName . '.pdf', 'UTF-8'));
        if ($sExcelContent) {
            $oPhoenixMail->createAttachment($sExcelContent, 'application/msexcel', Zend_Mime::DISPOSITION_INLINE, Zend_Mime::ENCODING_BASE64, Zend_Mime::encodeBase64Header($sFileName . '.xlsx', 'UTF-8'));
        }

        $oPhoenixMail->addTo($aEmails);

        $oPhoenixMail->send();
        $oOperation->setOpDateLastSendStat(date('Y-m-d'))->save();
    }
}
