<?php


class Phoenix_MailSender
{


    /**
     *  Envoie un email concernant une facturation à l'étranger
     *  34516 Récupération du pays depuis la table r_countries au lieu de r_lanuages
     *
     * @param Clients $oClients
     * @param RCountries $oRCountry
     */
    public static function clientFacturationEtranger(Clients $oClient, RCountries $oRCountry)
    {
        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addViewSubject('client_facturationetranger.subj.phtml');
        $oPhoenixMail->addViewBodyHtml('client_facturationetranger.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('cl_libelle', $oClient->getClLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('country_name', $oRCountry->getRCountryName());

        // On adresse le mail au responsable facturation
        $oPhoenixMail->addTo(Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_INVOICING_DEPARTMENT));

        // On ajoute le DC assigné au client, si défini
        if (($oUsers = UsersQuery::create()->findPk($oClient->getClDcId())) instanceof Users && $sUserEmail = $oUsers->getUserMail()) {
            $oPhoenixMail->addTo($sUserEmail);
        }

        $oPhoenixMail->send();
    }

    /**
     * Envoie un email à la DAF concernant une demande de découvert
     *
     * @param Operations $oOperation
     * @param OperationDecouverts $oOperationDecouverts
     */
    public static function comptaNewDecouvert($oOperation, $oOperationDecouverts)
    {
        $oUrlHelper = new Zend_View_Helper_Url();
        $sUrlDecouvertsFilterByOp = My_Env::getInstance()->getConfig()->http_host . '/' . $oUrlHelper->url(array(
            'module' => 'comptabilite',
            'controller' => 'decouverts',
            'action' => 'index',
            'findbyfields' => 'Rechercher',
            'find_cl_id' => $oOperation->getClients()->getClId(),
            'autocomplete_cl_id' => $oOperation->getClients()->getClLibelle()
        ));

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->addViewSubject('compta_newdecouvert.subj.phtml');
        $oPhoenixMail->addViewBodyHtml('compta_newdecouvert.phtml');
        $oPhoenixMail->getViewSubject()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewSubject()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewBodyHtml()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('montant_decouvert', $oOperationDecouverts->getOpDecMontDemande());
        $oPhoenixMail->getViewBodyHtml()->assign('url', $sUrlDecouvertsFilterByOp);

        // On adresse le mail au responsable daf
        $oPhoenixMail->addTo(Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_FINANCIAL_ADMINISTRATIVE_DIVISION));
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->send();
    }

    /**
     * Sends an email to the project manager of the transaction concerned by the overdraft during valdiation or not
     *
     * @param Operations $oOperation
     * @param OperationDecouverts $oOperationDecouverts
     */
    public static function comptaDecouvertValidation($oOperation, $oOperationDecouverts)
    {
        $oUrlHelper = new Zend_View_Helper_Url();
        $sUrlOpeFactu = My_Env::getInstance()->getConfig()->http_host . '/' . $oUrlHelper->url(array(
            'module' => 'operation',
            'controller' => 'facturation',
            'action' => 'index',
            'op_id' => $oOperation->getOpId(),
        ));

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->addViewSubject('compta_decouvertmaj.subj.phtml');
        $oPhoenixMail->addViewBodyHtml('compta_decouvertmaj.phtml');
        $oPhoenixMail->getViewSubject()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewSubject()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewBodyHtml()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('montant_decouvert', $oOperationDecouverts->getOpDecMontDemande());
        $oPhoenixMail->getViewBodyHtml()->assign('url', $sUrlOpeFactu);

        // On adresse le mail au CP et / ou au DC de l'opération, si défini
        $aUserId[] = $oOperation->getOpCpId();
        $aUserId[] = $oOperation->getOpDcId();
        $aUsers = UsersQuery::create()->filterByUserId(array_filter($aUserId))->find();
        foreach ($aUsers as $oUser) {
            $sEmail = $oUser->getUserMail();
            if (! empty($sEmail)) {
                $oPhoenixMail->addTo($sEmail);
            }
        }
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->send();
    }

    /**
     * Envoie un email au CP de l'opération et à la DAF pour valider les coûts d'une opération
     *
     * @param Operations $oOperation
     * @param Array $aGroups
     */
    public static function operationsRelanceCouts($oOperation, $aGroups)
    {
        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addViewSubject('operations_relancecouts.subj.phtml');
        $oPhoenixMail->addViewBodyHtml('operations_relancecouts.phtml');
        $oPhoenixMail->getViewSubject()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewSubject()->assign('op_libelle', $oOperation->getOpLibelle());

        // Envoi du mail au CP de l'opération et à la DAF
        foreach ($aGroups as $sUserEmail) {
            $oPhoenixMail->addTo($sUserEmail);
        }

        $sLink = Zend_Registry::get('config')->http_host . '/couts/index?findbyfields=Rechercher&find_op_id=' . $oOperation->getOpId();
        $oPhoenixMail->getViewBodyHtml()->assign('url', $sLink);

        // On envoie
        $oPhoenixMail->send();
    }

    /**
     * Sends an email to the validation groups to validate the costs of an operation
     *
     * @param Operations $oOperation
     * @param Array $dests
     */
    public static function operationsRelanceCoutsDailyMail(\DateTime $oDateCreate = null)
    {
        $sData = '';

        // Récupération des informations en base
        $oSelect = QueueRelanceCoutsQuery::create();
        if ($oDateCreate) {
            $oSelect->filterByDateCreate(array('min' => $oDateCreate));
        }

        $oList = $oSelect->find();

        foreach ($oList as $oQueue) {
            if ($oQueue instanceof QueueRelanceCouts) {
                $oOpe = OperationsQuery::create()->findPk($oQueue->getOpId());
                $aPrestations = $oOpe->getUnvalidatedServiceCosts();

                if (! $aPrestations) {
                    continue;
                }
                $sData .= '<li>' . $oOpe->getOpNumber() . ' :<ul>';


                foreach ($aPrestations as $aData) {
                    $sData .= '<li>' . $aData['group_name'] . ' - ' . $aData['op_r_prest_id'] . ' - ' . $aData['op_prest_libelle'] . '</li>';
                }
                if ($aPrestations) {
                    $sData .= '</ul></li>';
                }
            }
        }

        // Send mail only if there is some data to send
        if ($sData) {
            $oPhoenixMail = new Phoenix_Mail('UTF-8');
            $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
            $oPhoenixMail->addViewSubject('operations_relancecoutsdailymail.subj.phtml');
            $oPhoenixMail->addViewBodyHtml('operations_relancecoutsdailymail.phtml');
            $oPhoenixMail->getViewBodyHtml()->assign('data', '<ul>' . $sData . '</ul>');

            // On adresse le mail au responsable daf
            $oPhoenixMail->addTo(Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_FINANCIAL_ADMINISTRATIVE_DIVISION));

            // On envoie
            $oPhoenixMail->send();
        }
    }

    /**
     * Invoice created notification
     * @param  string $sReceiverEmail
     * @param  array  $aOperations
     */

    public static function invoiceCreateNotification(string $sReceiverEmail, array $aOperations)
    {
        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject('Création de facture');
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addViewBodyHtml('invoice_created_notification.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('operations', $aOperations);
        $oPhoenixMail->getViewBodyHtml()->assign('company_name', $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addTo($sReceiverEmail);
        $oPhoenixMail->send();
    }

    /**
     * Sends the email to some crew when the given operation is accepted
     *
     * @param  Operations $oOperation
     * @throws \LogicException
     */
    public static function notifyOperationAcceptee(Operations $oOperation)
    {
        // 43909 Adding quotes Amounts
        $aEstimatedCaServicesAmonts = $oOperation->getMontants(RLanguages::LANG_FRA, 'estim_ca');
        $aEstimatedServicesAmonts = $oOperation->getMontants(RLanguages::LANG_FRA, 'estim');
        $fEstimatedCaServicesAmont = $aEstimatedCaServicesAmonts['montant_total_ca_ht'];
        $fVatIncludedEstimatedServicesAmont = $aEstimatedServicesAmonts['total_ttc'];

        $oUserCp = $oOperation->getUserCP();

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->addViewSubject('operations_operationacceptee.subj.phtml');
        $oPhoenixMail->addViewBodyHtml('operations_operationacceptee.phtml');
        $oPhoenixMail->getViewSubject()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewSubject()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewBodyHtml()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('dc_libelle', $oOperation->getUserDC()->getUserNomPrenom());
        $oPhoenixMail->getViewBodyHtml()->assign('cp_libelle', $oUserCp ? $oUserCp->getUserNomPrenom() : '');
        $oPhoenixMail->getViewBodyHtml()->assign('fEstimatedCaServicesAmont', $fEstimatedCaServicesAmont);
        $oPhoenixMail->getViewBodyHtml()->assign('fVatIncludedEstimatedServicesAmont', $fVatIncludedEstimatedServicesAmont);

        // We send the email to the manager of the operation
        if ($iOpCpId = $oOperation->getOpCpId()) {
            $oUsers = UsersQuery::create()->findPk($iOpCpId);
            if ($oUsers instanceof Users) {
                $sEmail = $oUsers->getUserMail();
                if (! empty($sEmail)) {
                    $oPhoenixMail->addTo($sEmail);
                }
            }
        } // If manager is undefined, we send the email to the sales director of the operation
        elseif ($iOpDcId = $oOperation->getOpDcId()) {
            $oUsers = UsersQuery::create()->findPk($iOpDcId);
            if ($oUsers instanceof Users) {
                $sEmail = $oUsers->getUserMail();
                if (! empty($sEmail)) {
                    $oPhoenixMail->addTo($sEmail);
                }
            }
        }

        // We also adress the email to logistics department when a wharehouse is selected
        if (in_array(ROperationOptions::OPT_ENTREPOT_ROUSSET, $oOperation->getOptionsId())) {
            $oPhoenixMail->addTo(Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_LOGISTIC_DEPARTMENT));
        }

        // 39971 When no email adresse is added to "To" header, we throw a logicException and we do not send the email
        if (! $oPhoenixMail->getRecipients()) {
            throw new \LogicException('No email address has been added. The email cannot be sent');
        }

        // We send the email
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->send();
    }

    public static function sendMail($sSubject, $sContent, $sFromMail, $sFromName, array $aRecipients, array $aAttachments = array(), array $aMailEntityParams = array())
    {
        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject($sSubject);
        $oPhoenixMail->setBodyHtml($sContent);
        $oPhoenixMail->setFrom($sFromMail, $sFromName);

        if (! $aRecipients) {
            throw new \InvalidArgumentException('Argument "$aRecipients" is empty');
        }

        $bHasRecipients = false;
        if (! empty($aRecipients['to'])) {
            $bHasRecipients = true;
            if (is_string($aRecipients['to'])) {
                $aRecipients['to'] = explode(',', $aRecipients['to']);
            }
            foreach ($aRecipients['to'] as $sMail) {
                $oPhoenixMail->addTo($sMail);
            }
        } else {
            $aRecipients['to'] = array();
        }

        if (! empty($aRecipients['cc'])) {
            $bHasRecipients = true;
            if (is_string($aRecipients['cc'])) {
                $aRecipients['cc'] = explode(',', $aRecipients['cc']);
            }
            foreach ($aRecipients['cc'] as $sMail) {
                $oPhoenixMail->addCc($sMail);
            }
        } else {
            $aRecipients['cc'] = array();
        }

        if (! empty($aRecipients['bcc'])) {
            $bHasRecipients = true;
            if (is_string($aRecipients['bcc'])) {
                $aRecipients['bcc'] = explode(',', $aRecipients['bcc']);
            }
            foreach ($aRecipients['bcc'] as $sMail) {
                $oPhoenixMail->addCc($sMail);
            }
        } else {
            $aRecipients['bcc'] = array();
        }

        if (! $bHasRecipients) {
            throw new \LogicException('No recipient has been given');
        }

        foreach ($aAttachments as $aFileData) {
            $oPhoenixMail->createAttachment($aFileData['content'], $aFileData['mimeType'], Zend_Mime::DISPOSITION_ATTACHMENT, Zend_Mime::ENCODING_BASE64, $aFileData['name']);
        }

        $oPhoenixMail->send();

        if ($aMailEntityParams) {
            $oMails = new Mails();
            $oMails->setMailEntityName($aMailEntityParams['name'])
                ->setMailEntityId($aMailEntityParams['id'])
                ->setMailTo($aRecipients['to'] ? join(',', $aRecipients['to']) : null)
                ->setMailCc($aRecipients['cc'] ? join(',', $aRecipients['cc']) : null)
                ->setMailBcc($aRecipients['bcc'] ? join(',', $aRecipients['bcc']) : null)
                ->setMailSubject($sSubject)
                ->setMailMessage(nl2br($sContent))
                ->setRMailTypeId($aMailEntityParams['type'])
                ->save();
        }
    }

    /**
     * Mail des stats d'une opération au client
     *
     * @param Operations $oOperation
     * @return boolean|string true ou message d'erreur
     */
    public static function operationSendStats(Operations $oOperation, $sFileContentPdf, $sFileContentExcel = null)
    {
        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject("Statistiques Offre  " . $oOperation->getOpNumber() . ' | ' . $oOperation->getOpLibelle());

        // Define sender data
        $sFromEmail = $sFromName = $sSignature = '';
        switch (true) {
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

        $oPhoenixMail->addViewBodyHtml('stats_client.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('cp_name', $sFromName);
        $oPhoenixMail->getViewBodyHtml()->assign('signature', $sSignature);

        //ajout des pièces jointes
        $oPhoenixMail->createAttachment($sFileContentPdf, 'application/pdf', Zend_Mime::DISPOSITION_INLINE, Zend_Mime::ENCODING_BASE64, 'Statistiques Offre N°' . $oOperation->getOpNumber() . ' - ' . $oOperation->getOpLibelle() . '.pdf');
        if (isset($sFileContentExcel)) {
            $oPhoenixMail->createAttachment($sFileContentExcel, 'application/msexcel', Zend_Mime::DISPOSITION_INLINE, Zend_Mime::ENCODING_BASE64, 'Statistiques Offre N°' . $oOperation->getOpNumber() . ' - ' . $oOperation->getOpLibelle() . '.xlsx');
        }

        // Mail présent ou non
        $bMail = false;

        //récupération des mails contact
        $oCriteria = new Criteria();
        $oCriteria->add('send_mail', true, Criteria::EQUAL);
        $aLnkOperationsContactsMail = $oOperation->getLnkOperationsContactsMailsJoinContacts($oCriteria);

        foreach ($aLnkOperationsContactsMail as $oLnkOperationsContactsMail) {
            $oContact = $oLnkOperationsContactsMail->getContacts();

            $sEmail = $oContact->getCtEmail();
            if (! empty($sEmail)) {
                $bMail = true;
                $oPhoenixMail->addTo($sEmail);
            }
        }

        //récupération des mails saisis manuellement
        $aMails = explode(',', $oOperation->getOpMailsDest());
        foreach ($aMails as $sEmail) {
            if (! empty($sEmail)) {
                $bMail = true;
                $oPhoenixMail->addTo($sEmail);
            }
        }

        try {
            $oPhoenixMail->send();
            $oOperation->setOpDateLastSendStat(date('Y-m-d'))->save();
            return true;
        } catch (Exception $oException) {
            return $oException->getMessage();
        }
    }

    /**
     *
     * @param string $sMail
     * @param string $sOpNumber
     * @param string $sClientLibelle
     * @throws \InvalidArgumentException
     */
    public static function sendArchivageAlert($sMail, $sOpNumber, $sClientLibelle)
    {

        if (! is_string($sMail)) {
            throw new \InvalidArgumentException('Argument "$sMail" expects a string, "' . gettype($sMail) . '" given');
        }

        if (! is_string($sOpNumber)) {
            throw new \InvalidArgumentException('Argument "$sOpNumber" expects a string, "' . gettype($sOpNumber) . '" given');
        }

        if (! is_string($sClientLibelle)) {
            throw new \InvalidArgumentException('Argument "$sClientLibelle" expects a string, "' . gettype($sClientLibelle) . '" given');
        }
        if (! $sMail) {
            throw new \LogicException('The notification email recepient is not set for the operation number  : ' . $sOpNumber);
        }


        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addTo($sMail);
        $oPhoenixMail->setSubject("[Phoenix] Alerte archivage des données");
        $oPhoenixMail->setBodyText("Bonjour, la conservation des données de l'opération " . $sOpNumber . " du compte Client " . $sClientLibelle . " arrive à son terme.
			Prévenir le client pour restitution ou supprimer avec son accord");
        $oPhoenixMail->send();
    }

    /**
     *
     * @param string $sEmails
     * @param string $sClientLibelle
     * @param bool $bReconduction
     */
    public static function reconductionContrat($sEmails, $sClientLibelle, $bReconduction = false)
    {
        if (! is_string($sEmails)) {
            throw new \InvalidArgumentException('Argument "$sEmails" expects a string, "' . gettype($sEmails) . '" given');
        }
        if (! $sEmails) {
            throw new \LogicException('Argument "$sEmails" is empty');
        }
        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        foreach (explode(',', $sEmails) as $sMail) {
            $oPhoenixMail->addTo($sMail);
        }

        if ($bReconduction) {
            $sMessage = "Le contrat du compte client " . $sClientLibelle . " arrive à son terme, il a été reconduit d'un an";
        } else {
            $sMessage = "Le contrat du compte client " . $sClientLibelle . " arrive à son terme, si vous souhaitez y mettre fin ou l'ajuster, vous devez le télécharger depuis l'onglet \"Contrat\" sur la fiche client";
        }

        $oPhoenixMail->setSubject("[Phoenix] Reconduction contrat client");
        $oPhoenixMail->setBodyText($sMessage);
        $oPhoenixMail->send();
    }

    /**
     * Sends invoice to customer
     *
     * @param string $sSubject
     * @param string $sContent
     * @param array $aRecipients
     * @param Factures $oInvoice
     * @return bool
     */
    public static function sendInvoiceToClient(string $sSubject, string $sContent, array $aRecipients, Factures $oInvoice) : bool
    {
        if (! $sPdfClient = Phoenix_File_Invoice_PdfGenerator::getInstance()->getInvoicePdfContentForClient($oInvoice)) {
            return false;
        }

        $sInvoicingDepartmentMail = Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_INVOICING_DEPARTMENT);
        if (empty($aRecipients['bcc'])) {
            $aRecipients['bcc'] = array($sInvoicingDepartmentMail);
        } else {
            $aRecipients['bcc'][] = $sInvoicingDepartmentMail;
        }
       
        self::sendMail(
            $sSubject,
            $sContent,
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_INVOICING_DEPARTMENT),
            Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_NAME),
            $aRecipients,
            array(
                array('name' => $oInvoice->getInvoiceDisplayFileName('pdf') , 'mimeType' => 'application/pdf', 'content' => $sPdfClient)
            ),
            array(
                'name' => 'factures',
                'id' => $oInvoice->getFactId(),
                'type' => RMailTypes::QUOTATION,
            )
        );
        return true;
    }

    /**
     * Envoie un email au client avec le devis de l'opération
     *
     * @param string $sSubject
     * @param string $sContent
     * @param string $sDcMail
     * @param string $sDcName
     * @param array $aRecipients
     * @param Operations $oOperation
     * @param Files $oFileDevis
     * @param Files $oFileContrat : optionnel
     * @param Files $oFilePlan : optionnel
     */
    public static function operationsSendDevis($sSubject, $sContent, $sFromMail, $sFromName, $aRecipients, $oOperation, $oFileDevis, $oFileContrat = null, $oFilePlan = null)
    {
        $aAttachments = array();

        // Pièce jointe : devis généré
        if ($oFileDevis instanceof Files) {
            // -- On génère le nom du fichier
            $sDevisName = sprintf('Devis no %s-%s %s.pdf', $oOperation->getOpNumber(), $oFileDevis->getFileVersion(), $oOperation->getOpLibelle());
            $aAttachments[] = array('name' => $sDevisName, 'mimeType' => 'application/pdf', 'content' => $oFileDevis->getFileContent());
        }

        // Pièce jointe : contrat si demandé
        if ($oFileContrat instanceof Files) {
            $aAttachments[] = array('name' => $oFileContrat->getRenamedFilename('contrat'), 'mimeType' => $oFileContrat->getMimeType(), 'content' => $oFileContrat->getFileContent());
        }

        // Pièce jointe : plan de transport si demandé
        if ($oFilePlan instanceof Files) {
            $aAttachments[] = array('name' => $oFilePlan->getRenamedFilename('plan'), 'mimeType' => $oFilePlan->getMimeType(), 'content' => $oFilePlan->getFileContent());
        }

        self::sendMail($sSubject, $sContent, $sFromMail, $sFromName, $aRecipients, $aAttachments, array(
            'name' => 'operations',
            'id' => $oOperation->getOpId(),
            'type' => RMailTypes::DEVIS,
        ));
    }

    /**
     * Invoice creation notification
     *
     * @param  Factures $oInvoice
     * @param  string $sSendTo
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public static function factureNew(Factures $oInvoice, $sSendTo)
    {

        if (! is_string($sSendTo)) {
            throw new \InvalidArgumentException('Argument "$sSendTo" expects a string, "' . gettype($sSendTo) . '" given');
        }

        if (! $sSendTo) {
            throw new \LogicException('The notification email recepient is not set for the invoice reference : ' . $oInvoice->getFactReference());
        }

        $oOperation = $oInvoice->getOperations();


        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject('Nouvelle facture générée pour ' . $oOperation->getOpNumber() . ' - ' . $oOperation->getOpLibelle());
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());

        $oPhoenixMail->addViewBodyHtml('facture_new.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('num_op', $oOperation->getOpNumber());
        $oPhoenixMail->getViewBodyHtml()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('client_name', $oOperation->getClients()->getClLibelle());
        $sLink = $_SERVER['HTTP_HOST'] . '/operation/facturation/facturepdf/fact_id/' . $oInvoice->getFactId();
        $oPhoenixMail->getViewBodyHtml()->assign('url', $sLink);
        $oPhoenixMail->addTo($sSendTo);

        $oPhoenixMail->send();
    }

    /**
     * Demande de completion des informations clients
     *
     * @param Clients $oClients
     */
    public static function clientCompleteCreation(Clients $oClients)
    {

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject('Création du compte client ' . $oClients->getClLibelle());
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());

        $oPhoenixMail->addViewBodyHtml('client_complete_creation.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('client_name', $oClients->getClLibelle());
        $sLink = $_SERVER['HTTP_HOST'] . '/client/fiche/index/cl_id/' . $oClients->getClId();
        $oPhoenixMail->getViewBodyHtml()->assign('url', $sLink);

        $sSendTo = Phoenix_Auth_User::getInstance()->getMail();
        $oPhoenixMail->addTo($sSendTo);
        $oPhoenixMail->send();
    }

    /**
     * @param Operations $oOperation
     * @throws \LogicException
     */
    public static function factureSoldeNotification(Operations $oOperation)
    {
        $sEmail = $oOperation->getUserCP()->getUserMail();
        if (! $sEmail) {
            throw new \LogicException('The operation manager email adresse is not set for the operation number ' . $oOperation->getOpNumber());
        }

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject('Notification pour facture de solde ' . $oOperation->getOpNumber());
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());

        $oPhoenixMail->addViewBodyHtml('facture_solde_notification.phtml');
        $sInvoiceLink = Zend_Registry::get('config')->http_host . '/operation/facturation/index/op_id/' . $oOperation->getOpId();
        $oPhoenixMail->getViewBodyHtml()->assign('url', $sInvoiceLink);
        $oPhoenixMail->addTo($sEmail);
        $oPhoenixMail->send();
    }

    /**
     * Mail detailing the operations that change status during the week
     *
     * @param array $aOperations
     * @param \DateTime $oStartDate
     * @param \DateTime $oEndDate
     * @param string $sCsv
     */
    public static function recapoperationstatut($aOperations, \DateTime $oStartDate, \DateTime $oEndDate, $sCsv, array $aEmails)
    {
        if (! is_array($aEmails)) {
            throw new \InvalidArgumentException('Argument "$sEmails" expects an array, "' . gettype($aEmails) . '" given');
        }
        if (! $aEmails) {
            throw new \LogicException('Argument "$aEmails" is empty');
        }
        $sDateBegin = $oStartDate->format('d/m/Y');
        $sDateEnd = $oEndDate->format('d/m/Y');

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject('Objet : Alerte Phoenix : Changement de statut des devis Date de ' . $sDateBegin . ' - ' . $sDateEnd);
        $oPhoenixMail->addTo($aEmails);
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addViewBodyHtml('operations_recap_statut_change.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('date_debut', $sDateBegin);
        $oPhoenixMail->getViewBodyHtml()->assign('operations', $aOperations);

        $oPhoenixMail->createAttachment($sCsv, 'text/csv', Zend_Mime::DISPOSITION_INLINE, Zend_Mime::ENCODING_BASE64, ' Alerte-devis-' . date('d/m/Y') . '.csv');

        // Add hidden email adress by environnement ticket 43825
        $sHiddenEmailAdressByEnvironnement = My_Env::getInstance()->getConfig()->mail->hidden_address;
        if ($sHiddenEmailAdressByEnvironnement === null) {
            throw new \LogicException('The parametre "mail.hidden_address" must be defined in configuration file "application.ini"');
        }
        $oPhoenixMail->addBcc($sHiddenEmailAdressByEnvironnement);
        $oPhoenixMail->send();
    }

    /**
     * Send email with the list of quotations/operation whose management ends in 1 month
     *
     * @param array $aOperations
     * @param string $sCsv
     * @param array $aEmails
     * @param \Zend_translate $oTranslate
     */

    public static function operationManagementEndNotificationSend(array $aOperations, string $sCsv, array $aEmails, \Zend_translate $oTranslate)
    {
        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject($oTranslate->translate('Opérations arrivant en fin de gestion dans moins d\'un mois'));
        $oPhoenixMail->addTo($aEmails);
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addViewBodyHtml('operation_management_end.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('operations', $aOperations);
        $oPhoenixMail->getViewBodyHtml()->assign('oTranslate', $oTranslate);
        $oPhoenixMail->getViewBodyHtml()->assign('company_name', $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->createAttachment($sCsv, 'text/csv', Zend_Mime::DISPOSITION_INLINE, Zend_Mime::ENCODING_BASE64, $oTranslate->translate('Opérations arrivant en fin de gestion dans moins d\'un mois') . '.csv');
        $oPhoenixMail->send();
    }

    /**
     * Mail detailing the transactions that change status during the week
     *
     * @param array $aOperations
     * @param \DateTime $oStartDate
     * @param \DateTime $oEndDate
     * @param string $sCsv
     */
    public static function recapoperationstatutAccepte($aOperations, \DateTime $oStartDate, \DateTime $oEndDate, $sCsv, array $aEmails)
    {
        if (! is_array($aEmails)) {
            throw new \InvalidArgumentException('Argument "$sEmails" expects an array, "' . gettype($aEmails) . '" given');
        }
        if (! $aEmails) {
            throw new \LogicException('Argument "$aEmails" is empty');
        }
        $sDateBegin = $oStartDate->format('d/m/Y');
        $sDateEnd = $oEndDate->format('d/m/Y');

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject('Objet : Alerte Phoenix : Changement de statut Accepté des devis Date de ' . $sDateBegin . ' - ' . $sDateEnd);
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addTo($aEmails);
        $oPhoenixMail->addViewBodyHtml('operations_recap_statut_change.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('date_debut', $sDateBegin);
        $oPhoenixMail->getViewBodyHtml()->assign('operations', $aOperations);
        $oPhoenixMail->createAttachment($sCsv, 'text/csv', Zend_Mime::DISPOSITION_INLINE, Zend_Mime::ENCODING_BASE64, ' Alerte-devis-' . date('d/m/Y') . '.csv');

        // Add hidden email adress by environnement ticket 43825
        $sHiddenEmailAdressByEnvironnement = My_Env::getInstance()->getConfig()->mail->hidden_address;
        if ($sHiddenEmailAdressByEnvironnement === null) {
            throw new \LogicException('The parametre "mail.hidden_address" must be defined in configuration file "application.ini"');
        }
        $oPhoenixMail->addBcc($sHiddenEmailAdressByEnvironnement);
        $oPhoenixMail->send();
    }

    /**
     * Weekly email. Operations have changed status during the week to customers for the first time
     *
     * @param  array $aOperations
     * @param  Zend_Date $oZendDateDebut
     * @param  Zend_Date $oEndDate
     * @author Ahmed El Attar aelattar@neo-data.ma
     */
    public static function recapOperationStatutAccepteFirstTimeByClient(array $aOperations, Zend_Date $oZendDateDebut, Zend_Date $oEndDate, array $aEmails)
    {
        if (! is_array($aEmails)) {
            throw new \InvalidArgumentException('Argument "$sEmails" expects an array, "' . gettype($aEmails) . '" given');
        }
        if (! $aEmails) {
            throw new \LogicException('Argument "$aEmails" is empty');
        }

        $oDateBegin = $oZendDateDebut->toString('dd/MM/Y');
        $oDateEnd = $oEndDate->toString('dd/MM/Y');

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject('Objet : Alerte Phoenix : 1er devis accepté sur client, de ' . $oDateBegin . ' au ' . $oDateEnd);
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addTo($aEmails);
        $oPhoenixMail->addViewBodyHtml('operations_recap_statut_accepte_first_time_by_client.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('date_debut', $oDateBegin);
        $oPhoenixMail->getViewBodyHtml()->assign('date_fin', $oDateEnd);
        $oPhoenixMail->getViewBodyHtml()->assign('operations', $aOperations);

        // Add hidden email adress by environnement ticket 43825
        $sHiddenEmailAdressByEnvironnement = My_Env::getInstance()->getConfig()->mail->hidden_address;
        if ($sHiddenEmailAdressByEnvironnement === null) {
            throw new \LogicException('The parametre "mail.hidden_address" must be defined in configuration file "application.ini"');
        }
        $oPhoenixMail->addBcc($sHiddenEmailAdressByEnvironnement);
        $oPhoenixMail->send();
    }

    /**
     * @param array $aUserTasks
     * @param array $aEmails
     */
    public static function taskReporting($aUserTasks, array $aEmails)
    {
        if (! is_array($aEmails)) {
            throw new \InvalidArgumentException('Argument "$sEmails" expects an array, "' . gettype($aEmails) . '" given');
        }
        if (! $aEmails) {
            throw new \LogicException('Argument "$aEmails" is empty');
        }

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->setSubject("PHOENIX/Alertes tâches en retard CP");
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addTo($aEmails);
        $oPhoenixMail->addViewBodyHtml('task_reporting.phtml');

        $oMyDataExportCsv = new My_Data_Export_CSV(new My_Data_Export_Source_Adapter_Array($aUserTasks));
        $oMyDataExportCsv->setHeaders(array(
            'op_number' => 'N° Opération',
            'op_libelle' => 'Libellé Opération',
            'user_name' => 'Gestionnaire',
            'r_op_task_type_libelle' => 'Tâche',
            'op_task_deadline' => 'Deadline',
            'retard' => 'Retard ',
        ));
        $oPhoenixMail->createAttachment($oMyDataExportCsv->make(), 'text/csv', Zend_Mime::DISPOSITION_INLINE, Zend_Mime::ENCODING_BASE64, 'PHOENIX_delayed_task_' . date('Ymd') . '.csv');
        $oPhoenixMail->send();
    }

    /**
     * 33369
     * Sends an email to Operation Dc and compta services when an operation status
     * Is switched to balenced
     *
     * @param  Operations $oOperation
     * @param  string $sStatusChangingDate
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public static function notifyOperationSolde(Operations $oOperation, $sStatusChangingDate)
    {

        if (! is_string($sStatusChangingDate)) {
            throw new \InvalidArgumentException('Argument "$sStatusChangingDate" expects a string, "' . gettype($sStatusChangingDate) . '" given');
        }

        $sUserName = Phoenix_Auth_User::getInstance()->getLastName() . ' ' . Phoenix_Auth_User::getInstance()->getFirstName();

        $fInvoiceSoldeAmount = FacturesQuery::create()->filterByOpId($oOperation->getOpId())
            ->filterByRFactTypeId(RFactureTypes::getSoldeTypes())
            ->withColumn('sum(fact_montant_ttc)', 'montant_solde')
            ->select(array('montant_solde'))
            ->findOne();

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->addViewSubject('operations_operationsolde.subj.phtml');
        $oPhoenixMail->addViewBodyHtml('operations_operationsolde.phtml');
        $oPhoenixMail->getViewSubject()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewSubject()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewBodyHtml()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('user_name', $sUserName);
        $oPhoenixMail->getViewBodyHtml()->assign('solde_status_date', $sStatusChangingDate);
        $oPhoenixMail->getViewBodyHtml()->assign('invoice_solde_amount', $fInvoiceSoldeAmount);

        // Sending Email to Dc and the accounting crew
        $oUsers = UsersQuery::create()->findPk($oOperation->getOpDcId());
        $aEmailRecepients = array(Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_PAID_INVOICES));
        if ($oUsers instanceof Users) {
            $sEmail = $oUsers->getUserMail();
            if (! empty($sEmail)) {
                $aEmailRecepients[] = $sEmail;
            }
        }

        $oPhoenixMail->addTo($aEmailRecepients);
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->send();
    }


    /**
     * Sends an email to Operation group DC when an operation status
     * Is switched to Close
     *
     * @param  Operations $oOperation
     * @param  string $sStatusChangingDate
     * @throws \InvalidArgumentException
     * @throws \LogicException
     */
    public static function notifyOperationClosed(Operations $oOperation, $sStatusChangingDate)
    {

        if (! is_string($sStatusChangingDate)) {
            throw new \InvalidArgumentException('Argument "$sStatusChangingDate" expects a string, "' . gettype($sStatusChangingDate) . '" given');
        }

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->addViewSubject('operations_operationclose.subj.phtml');
        $oPhoenixMail->addViewBodyHtml('operations_operationclose.phtml');
        $oPhoenixMail->getViewBodyHtml()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewBodyHtml()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('company_name', $oPhoenixMail->getDefaultFromName());
        
        // Sending Email to Dc
        $oUsers = UsersQuery::create()->findPk($oOperation->getOpDcId());
        $aEmailRecepients = array(Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_PAID_INVOICES));
        if ($oUsers instanceof Users) {
            $sEmail = $oUsers->getUserMail();
            if (! empty($sEmail)) {
                $aEmailRecepients[] = $sEmail;
            }
        }

        $oPhoenixMail->addTo($aEmailRecepients);
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->send();
    }

    /**
     * Sends an email to project manager and the financial administrative division when an operation status is switched from balenced to accepted
     *
     * @param Operations $oOperation
     * @param string $sStatusChangingDate
     * @throws \InvalidArgumentException
     */
    public static function notifyOperationStepedBackToAcceptedStatus(Operations $oOperation, $sStatusChangingDate)
    {

        if (! is_string($sStatusChangingDate)) {
            throw new \InvalidArgumentException('Argument "$sStatusChangingDate" expects a string, "' . gettype($sStatusChangingDate) . '" given');
        }

        $sUserName = Phoenix_Auth_User::getInstance()->getLastName() . ' ' . Phoenix_Auth_User::getInstance()->getFirstName();

        $oPhoenixMail = new Phoenix_Mail('UTF-8');
        $oPhoenixMail->addViewSubject('operations_operationsoldetoaccepted.subj.phtml');
        $oPhoenixMail->setFrom($oPhoenixMail->getDefaultFromEmail(), $oPhoenixMail->getDefaultFromName());
        $oPhoenixMail->addViewBodyHtml('operations_operationsoldetoaccepted.phtml');
        $oPhoenixMail->getViewSubject()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewSubject()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('op_number', $oOperation->getOpNumber());
        $oPhoenixMail->getViewBodyHtml()->assign('op_libelle', $oOperation->getOpLibelle());
        $oPhoenixMail->getViewBodyHtml()->assign('user_name', $sUserName);
        $oPhoenixMail->getViewBodyHtml()->assign('solde_status_date', $sStatusChangingDate);

        $aEmailRecepients = array(Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_FINANCIAL_ADMINISTRATIVE_DIVISION));

        $iOpCpId = $oOperation->getOpCpId();
        if ($iOpCpId) {
            $oUsers = UsersQuery::create()->findPk($iOpCpId);
            if ($oUsers instanceof Users) {
                $sEmail = $oUsers->getUserMail();
                if (! empty($sEmail)) {
                    $aEmailRecepients[] = $sEmail;
                }
            }
        }

        $oPhoenixMail->addTo($aEmailRecepients);
        $oPhoenixMail->send();
    }
}
