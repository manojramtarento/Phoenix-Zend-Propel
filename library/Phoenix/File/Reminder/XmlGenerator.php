<?php

class Phoenix_File_Reminder_XmlGenerator extends Phoenix_File_AbstractGenerator
{

    /**
     * Generate xml feed
      * @param array $aReminders
      * @return string
     */
    public function generateRemindersXml(array $aReminders) : string
    {
        $oDomDocument = new DOMDocument();
        $oDOMroot = $oDomDocument->appendChild($oDomDocument->createElement('root'));
        // The XML data set is encapsulated in a tag <relances> which can contain one to several <relance>.
        $oReminderElements = $oDOMroot->appendChild($oDomDocument->createElement('relances'));
        foreach ($aReminders as $oReminder) {
            // The data of a reminder run is encapsulated in tags <relance>
            $oReminderElement = $oReminderElements->appendChild($oDomDocument->createElement('relance'));

            // Reminder language configuration
            $sRelancelanguage = ($oReminder->getRelLang()) ? $oReminder->getRelLang() : RLanguages::LANG_FRA;
            $oReminderElement->appendChild($oDomDocument->createElement('lang', trim($sRelancelanguage)));
            $oDataElement = $oReminderElement->appendChild($oDomDocument->createElement('data'));
            $oDOMfactures = $oReminderElement->appendChild($oDomDocument->createElement('factures'));
            $oFirstPageElement = $oDataElement->appendChild($oDomDocument->createElement('first_page'));
            $oLastPageElement = $oDataElement->appendChild($oDomDocument->createElement('last_page'));

            // If the reminder type is above "Notice", the status is reduced to "Notice". Indeed, the following statuses are only indicative.
            $iReminderTypeId = $oReminder->getRelTypeId();
            if ($iReminderTypeId > RRelanceTypes::MISE_EN_DEMEURE) {
                $iReminderTypeId = RRelanceTypes::MISE_EN_DEMEURE;
            }

            $oTypeRelance = RRelanceTypesQuery::create()->findOneByRRelTypeId($iReminderTypeId);
            $sReminderTypeLabel = $oTypeRelance->getRRelTypeLibelleTranslated($oReminder->getRelLang());
            $sRegisteredLetter = $oTypeRelance->getRRelTypeLettreRecommandee() ? '1' : '0';

            // Top
            $oFirstPageElement->appendChild($oDomDocument->createElement('nom_client', htmlspecialchars($oReminder->getClients()->getClLibelle())));

            $oContactFactu = $oReminder->getClients()->getContactFacturation();
            $oRelCtFacturation = $oReminder->getContactFacturation();
            if ($oContactFactu) {
                $bIsEdited = ($oReminder->getRelStatutId() == RRelanceStatuts::EDITEE) ? true : false;
                $oFirstPageElement->appendChild($oDomDocument->createElement('contact_client', htmlspecialchars(($bIsEdited && $oRelCtFacturation) ? $oRelCtFacturation->getCtNomPrenom() : $oContactFactu->getCtNomPrenom())));
                $oFirstPageElement->appendChild($oDomDocument->createElement('adresse_1', htmlspecialchars(($bIsEdited && $oRelCtFacturation) ? $oReminder->getRelAdresse1() : $oContactFactu->getClientSites()->getClSiteAddr1())));
                $oFirstPageElement->appendChild($oDomDocument->createElement('adresse_2', htmlspecialchars(($bIsEdited && $oRelCtFacturation) ? $oReminder->getRelAdresse2() : $oContactFactu->getClientSites()->getClSiteAddr2())));
                $oFirstPageElement->appendChild($oDomDocument->createElement('adresse_3', htmlspecialchars(($bIsEdited && $oRelCtFacturation) ? $oReminder->getRelAdresse3() : $oContactFactu->getClientSites()->getClSiteAddr3())));
                $oFirstPageElement->appendChild($oDomDocument->createElement('code_postal', htmlspecialchars(($bIsEdited && $oRelCtFacturation) ? $oReminder->getRelCodePostal() : $oContactFactu->getClientSites()->getClSiteZipcode())));
                $oFirstPageElement->appendChild($oDomDocument->createElement('ville', htmlspecialchars(($bIsEdited && $oRelCtFacturation) ? $oReminder->getRelVille() : $oContactFactu->getClientSites()->getClSiteTown())));
                $oFirstPageElement->appendChild($oDomDocument->createElement('pays', htmlspecialchars(($bIsEdited && $oRelCtFacturation) ? $oReminder->getRelPays() : $oContactFactu->getClientSites()->getClSiteCountry())));
            } else {
                $oFirstPageElement->appendChild($oDomDocument->createElement('contact_client', ''));
                $oFirstPageElement->appendChild($oDomDocument->createElement('adresse_1', ''));
                $oFirstPageElement->appendChild($oDomDocument->createElement('adresse_2', ''));
                $oFirstPageElement->appendChild($oDomDocument->createElement('adresse_3', ''));
                $oFirstPageElement->appendChild($oDomDocument->createElement('code_postal', ''));
                $oFirstPageElement->appendChild($oDomDocument->createElement('ville', ''));
                $oFirstPageElement->appendChild($oDomDocument->createElement('pays', ''));
            }

            $oFirstPageElement->appendChild($oDomDocument->createElement('lieu_relance', 'Rousset'));
            $oFirstPageElement->appendChild($oDomDocument->createElement('date_relance', Phoenix_Data_Convert::formatdateFromSqlServer($oReminder->getRelLastDateStatut(RRelanceStatuts::EDITEE))));
            $oFirstPageElement->appendChild($oDomDocument->createElement('num_relance', $iReminderTypeId));
            $oFirstPageElement->appendChild($oDomDocument->createElement('ref_relance', $oReminder->getRelReference()));
            $oFirstPageElement->appendChild($oDomDocument->createElement('title', $sReminderTypeLabel));
            $oFirstPageElement->appendChild($oDomDocument->createElement('lettre_recommandee', $sRegisteredLetter));

            $sLanguage = $oReminder->getRelLang();
            if (! $sLanguage || $sLanguage == RLanguages::LANG_FRA) {
                $oLastPageElement->appendChild($oDomDocument->createElement('num_tva', Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_VAT_NUMBER)));
            } else {
                $oLastPageElement->appendChild($oDomDocument->createElement('num_tva', $oReminder->getClientFactureOptions()->getClFactTvaintra()));
            }

            $oCriteria = new Criteria();
            $oCriteria->add('actif', true, Criteria::EQUAL);
            foreach ($oReminder->getLnkRelanceFacturesJoinFactures($oCriteria) as $oLnkFactures) {
                $oInvoice = $oLnkFactures->getFactures();

                $oServiceElement = $oDOMfactures->appendChild($oDomDocument->createElement('facture'));
                $oServiceElement->appendChild($oDomDocument->createElement('num_facture', $oInvoice->getFactReference()));
                $oServiceElement->appendChild($oDomDocument->createElement('date_facture', $oInvoice->getFactDate('d/m/Y')));
                $oServiceElement->appendChild($oDomDocument->createElement('echeance_facture', $oInvoice->getFactDateEcheance('d/m/Y')));
                $oServiceElement->appendChild($oDomDocument->createElement('num_ope', $oInvoice->getOperations()->getOpNumber()));
                $oServiceElement->appendChild($oDomDocument->createElement('libelle_ope', htmlspecialchars($oInvoice->getOperations()->getOpLibelle())));
                $oServiceElement->appendChild($oDomDocument->createElement('montant_facture_total', $oInvoice->getFactMontantTtc()));
                $oServiceElement->appendChild($oDomDocument->createElement('montant_facture_restant', $oLnkFactures->getMontantARegler()));
            }
        }
        return $oDomDocument->saveXML();
    }
}
