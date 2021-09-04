<?php

class Phoenix_File_Invoice_XmlGenerator extends Phoenix_File_AbstractGenerator
{

    /**
     * Generate xml feed
     *
     * @param \Factures $oInvoice
     * @return string
     */
    public function generateInvoiceXml(\Factures $oInvoice) : string
    {
        if ($oInvoice->getOperations()->getOpDcId() == null) {
            $oInvoice->addValidationFailed('Il n\'y pas de directeur de clientèle renseigné');
            return false;
        }

        $oDomDocument = new DOMDocument();

        try {
            $this->generateFullXml($oInvoice, $oDomDocument);
        } catch (\Throwable $oException) {
            throw new \LogicException('An error occured while generating xml content for invoice "'.$oInvoice->getFactId().'" : '.$oException->getMessage(), (int) $oException->getCode(), $oException);
        }

        return $oDomDocument->saveXML();
    }

    /**
     * Generate xml document
     *
     * @param \Factures $oInvoice
     * @param \DOMDocument $oDomDocument
     * @return void
     */
    protected function generateFullXml(\Factures $oInvoice, \DOMDocument $oDomDocument)
    {

        $oDomRoot = $oDomDocument->appendChild($oDomDocument->createElement('root'));
        $oDomData = $oDomRoot->appendChild($oDomDocument->createElement('data'));

        $oDomRubriques = $oDomRoot->appendChild($oDomDocument->createElement('rubriques'));
        $oDomAffranchissements = $oDomRoot->appendChild($oDomDocument->createElement('affranchissements'));

        $oDomCoverPage = $oDomData->appendChild($oDomDocument->createElement('page_garde'));
        $oDomFirstPage = $oDomData->appendChild($oDomDocument->createElement('first_page'));
        $oDomLastPage = $oDomData->appendChild($oDomDocument->createElement('last_page'));

        // Config, attributes and root
        $oAttribute = $oDomDocument->createAttribute('lang');
        $oAttribute->value = $oInvoice->getFactLang();
        $oDomRoot->appendChild($oAttribute);

        // Front page if the field invoice address is set in the quote
        $iContactId = OperationsQuery::create()->findPK($oInvoice->getOpId())->getOpCtFactAddrId();

        if (is_int($iContactId)) {
            $oContact = ContactsQuery::create()->findPk($iContactId);
            $oContactSite = ClientSitesQuery::create()->findPk($oContact->getClSiteId());

            // If the contatct does not have a ClientSites
            if (! $oContactSite instanceof ClientSites) {
                $oInvoice->addValidationFailed('Le contact de facturation n\'est pas rattaché à un site client. Veuillez le modifier.');
                return false;
            }

            $oClientLabelElement = $oDomDocument->createElement('pg_nom_client');
            $oClientLabelElement->appendChild($oDomDocument->createCDATASection($oInvoice->getFactDestinataire()));
            $oDomCoverPage->appendChild($oClientLabelElement);

            $oClientContact = $oDomDocument->createElement('pg_contact_client');
            $oClientContact->appendChild($oDomDocument->createCDATASection(trim($oContact->getCtFirstname() . ' ' . $oContact->getCtLastname())));
            $oDomCoverPage->appendChild($oClientContact);

            $oElement = $oDomDocument->createElement('pg_adresse_1');
            $oElement->appendChild($oDomDocument->createCDATASection($oContactSite->getClSiteAddr1()));
            $oDomCoverPage->appendChild($oElement);
            $oElement = $oDomDocument->createElement('pg_adresse_2');
            $oElement->appendChild($oDomDocument->createCDATASection($oContactSite->getClSiteAddr2()));
            $oDomCoverPage->appendChild($oElement);
            $oElement = $oDomDocument->createElement('pg_adresse_3');
            $oElement->appendChild($oDomDocument->createCDATASection($oContactSite->getClSiteAddr3()));
            $oDomCoverPage->appendChild($oElement);

            $oDomCoverPage->appendChild($oDomDocument->createElement('pg_code_postal', $oContactSite->getClSiteZipcode()));

            $oElement = $oDomDocument->createElement('pg_ville');
            $oElement->appendChild($oDomDocument->createCDATASection($oContactSite->getClSiteTown()));
            $oDomCoverPage->appendChild($oElement);

            $oDomCoverPage->appendChild($oDomDocument->createElement('pg_pays', $oContactSite->getClSiteCountry()));
        }
        // On top
        $oInvoicePresentations = $oInvoice->getRFactureTypes()->getRFacturePresentations();
        $oDomFirstPage->appendChild($oDomDocument->createElement('mention_fact', $oInvoicePresentations ? $oInvoicePresentations->getMentionFacture($oInvoice->getFactAnnulId()) : ''));
        $oDomFirstPage->appendChild($oDomDocument->createElement('type_fact', $oInvoicePresentations ? $oInvoicePresentations->getTypeFacture($oInvoice->getFactMontantTtc(), null, $oInvoice->getFactLang()) : ''));
        $oDomFirstPage->appendChild($oDomDocument->createElement('num_bdc', $oInvoice->getFactNumCmd()));
        $oDomFirstPage->appendChild($oDomDocument->createElement('num_facture', $oInvoice->getFactReference()));
        $oDomFirstPage->appendChild($oDomDocument->createElement('date_facture', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($oInvoice->getFactDate(), $oInvoice->getFactLang())));

        $oElement = $oDomDocument->createElement('mentions_specifiques');
        $oElement->appendChild($oDomDocument->createCDATASection($oInvoice->getFactMentionSpec()));
        $oDomFirstPage->appendChild($oElement);

        $sLibelle = $oDomDocument->createElement('nom_client');
        $sLibelle->appendChild($oDomDocument->createCDATASection($oInvoice->getFactDestinataire()));
        $oDomFirstPage->appendChild($sLibelle);
        $oContactClient = $oDomDocument->createElement('contact_client');
        $oContactClient->appendChild($oDomDocument->createCDATASection($oInvoice->getFactAttention()));
        $oDomFirstPage->appendChild($oContactClient);

        $iClFactCountryId = $oInvoice->getClientFactureOptions()->getClFactCountryId();
        $sCustomerVatRegistrationNumber = trim($oInvoice->getClientFactureOptions()->getClFactTvaintra());
        $bDisplayReverseCharge = ! empty($iClFactCountryId) && ! RCountriesQuery::create()->isFranceCountry($iClFactCountryId);

        if ($bDisplayReverseCharge) {
            $oDomFirstPage->appendChild($oDomDocument->createElement('display_header_reverse_charge', 1));
        } else {
            $oDomFirstPage->appendChild($oDomDocument->createElement('display_header_reverse_charge', 0));
        }

        if ($bDisplayReverseCharge && ! empty($sCustomerVatRegistrationNumber)) {
            $oDomFirstPage->appendChild($oDomDocument->createElement('customer_vat_registration_number', $sCustomerVatRegistrationNumber));
        }

        $oElement = $oDomDocument->createElement('adresse_1');
        $oElement->appendChild($oDomDocument->createCDATASection($oInvoice->getFactAdresse1()));
        $oDomFirstPage->appendChild($oElement);
        $oElement = $oDomDocument->createElement('adresse_2');
        $oElement->appendChild($oDomDocument->createCDATASection($oInvoice->getFactAdresse2()));
        $oDomFirstPage->appendChild($oElement);
        $oElement = $oDomDocument->createElement('adresse_3');
        $oElement->appendChild($oDomDocument->createCDATASection($oInvoice->getFactAdresse3()));
        $oDomFirstPage->appendChild($oElement);

        $oDomFirstPage->appendChild($oDomDocument->createElement('code_postal', $oInvoice->getFactCodePostal()));

        $oElement = $oDomDocument->createElement('ville');
        $oElement->appendChild($oDomDocument->createCDATASection($oInvoice->getFactVille()));
        $oDomFirstPage->appendChild($oElement);

        $oDomFirstPage->appendChild($oDomDocument->createElement('pays', $oInvoice->getFactPays()));
        $oDomFirstPage->appendChild($oDomDocument->createElement('num_operation', $oInvoice->getOperations()->getOpNumber()));

        $oElement = $oDomDocument->createElement('titre_operation');
        $oElement->appendChild($oDomDocument->createCDATASection($oInvoice->getOperations()->getOpLibelle()));
        $oDomFirstPage->appendChild($oElement);

        $oDomFirstPage->appendChild($oDomDocument->createElement('num_dossier', $oInvoice->getOperations()->getOpNumber()));

        if (($oUser = $oInvoice->getFactureCommercialDirector()) instanceof Users) {
            $oDomFirstPage->appendChild($oDomDocument->createElement('nom_responsable_suivi', $oUser->getUserNomPrenom()));
            $oDomFirstPage->appendChild($oDomDocument->createElement('contact_telephonique_responsable', $oUser->getUserPhone()));
        } else {
            $oDomFirstPage->appendChild($oDomDocument->createElement('nom_responsable_suivi', ''));
            $oDomFirstPage->appendChild($oDomDocument->createElement('contact_telephonique_responsable', ''));
        }

        $oDomFirstPage->appendChild($oDomDocument->createElement('date_start_op', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($oInvoice->getOperations()->getOpDateconsoStart(), $oInvoice->getFactLang())));
        $oDomFirstPage->appendChild($oDomDocument->createElement('date_end_op', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($oInvoice->getOperations()->getOpDateconsoEnd(), $oInvoice->getFactLang())));
        $oDomFirstPage->appendChild($oDomDocument->createElement('date_fin_postale', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($oInvoice->getOperations()->getOpDateposteEnd(), $oInvoice->getFactLang())));
        $oDomFirstPage->appendChild($oDomDocument->createElement('date_fin_gestion', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($oInvoice->getOperations()->getOpStampEnd(), $oInvoice->getFactLang())));

        $sOperationDocumentLanguage = $oInvoice->getFactLang();

        // No Excluded taxe to display for fund raising
        if (! in_array($oInvoice->getRFactTypeId(), array(RFactureTypes::ADF, RFactureTypes::REMB_ADF))) {
            $oDomLastPage->appendChild($oDomDocument->createElement('total_ht_soumis_a_tva', $oInvoice->getAmountExcludingVatSubjectToVat()));
            foreach ($oInvoice->getFactMontantsByTva($sOperationDocumentLanguage) as $fTaux => $fAmountsByTva) {
                $oDomLastPage->appendChild($oDomDocument->createElement('total_tva', $fAmountsByTva))->appendChild($oDomDocument->createAttribute('taux'))->value = $fTaux;
            }
        }

        $oDomLastPage->appendChild($oDomDocument->createElement('total_a_payer', $oInvoice->getFactMontantTtc()));

        $oInvoiceDueDateOption = $oInvoice->getRFactureOptionsEcheances();
        $sDeadlineForPayment = $oInvoiceDueDateOption ? $oInvoiceDueDateOption->getFactOptEcheanceLibelleTranslated($oInvoice->getFactLang()) : '';
        $oDomLastPage->appendChild($oDomDocument->createElement('reglement_delai', $sDeadlineForPayment));
        $oDomLastPage->appendChild($oDomDocument->createElement('reglement_date', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($oInvoice->getFactDateEcheance(), $oInvoice->getFactLang())));


        if (empty($sOperationDocumentLanguage) || $sOperationDocumentLanguage == RLanguages::LANG_FRA) {
            $oDomLastPage->appendChild($oDomDocument->createElement('num_tva', Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_VAT_NUMBER)));
        } else {
            $oDomLastPage->appendChild($oDomDocument->createElement('num_tva', $oInvoice->getClientFactureOptions()->getClFactTvaintra()));
        }

        $this->generateInvoiceXmlSections($oInvoice, $oDomDocument, $oDomRubriques, $oDomLastPage);
    }

    /**
     * @param \Factures $oInvoice
     * @param \DomDocument $oDomDocument
     * @param \DOMElement $oDomRubriques
     * @param \DOMElement $oDomLastPage
     */
    protected function generateInvoiceXmlSections(\Factures $oInvoice, \DomDocument $oDomDocument, \DOMElement $oDomRubriques, \DOMElement $oDomLastPage)
    {
        // Rubrics
        $bHasPrestaRemb = false;
        $oCriteria = new Criteria();
        $oCriteria->addAscendingOrderByColumn('fact_rub_order');
        $bDisplayVat = $oInvoice->getOperations()->getPlanFacturationParams()->getPlanFacturationParamsAutoDisplayVat();
        $aTva = RTvaTypeQuery::create()->find()->toArray('RTvaId', false, BasePeer::TYPE_FIELDNAME);

        foreach ($oInvoice->getFacturesRubriquess($oCriteria) as $oFacturesRubrique) {
            $oDomRubric = $oDomDocument->createElement('rubrique');
            $oDomRubric->appendChild($oDomDocument->createElement('tva', $oFacturesRubrique->getRTvaType()->getRTvaTaux()));

            $sTitle = $oDomDocument->createElement('title');
            $sTitle->appendChild($oDomDocument->createCDATASection($oFacturesRubrique->getFactRubLibelle()));
            $oDomRubric->appendChild($sTitle);

            $oDomRubric->appendChild($oDomDocument->createElement('total_ht', $oFacturesRubrique->getFactRubMontantHt()));

            $oDomTable = $oDomRubric->appendChild($oDomDocument->createElement('table'));
            $oCriteria = new Criteria();
            $oCriteria->addAscendingOrderByColumn('fact_prest_order');
            $iNbPrestations = 0;
            $fRubricRecoverableVat = 0;
            $fRubricExludingTaxesAmount = 0;
            $bHasRefundServices = false;

            foreach ($oFacturesRubrique->getFacturesPrestationss($oCriteria) as $oFacturesPrestations) {
                if ($oFacturesPrestations->getOpPrestQreel() != 0 || $oFacturesPrestations->getFactPrestMontantFactureFinal() != 0 || $oFacturesPrestations->getFactPrestOff() == true) {
                    $oDomPrestation = $oDomTable->appendChild($oDomDocument->createElement('prestation'));

                    $oDomPrestation->appendChild($oDomDocument->createElement('r_prest_id', $oFacturesPrestations->getRPrestationId()));

                    $sLibelle = $oDomDocument->createElement('libelle');
                    $sLibelle->appendChild($oDomDocument->createCDATASection($oFacturesPrestations->getFactPrestLibelle()));
                    $oDomPrestation->appendChild($sLibelle);

                    $sDescriptif = $oDomDocument->createElement('descriptif');
                    $sDescriptif->appendChild($oDomDocument->createCDATASection($oFacturesPrestations->getFactPrestDescription()));
                    $oDomPrestation->appendChild($sDescriptif);

                    $oDomPrestation->appendChild($oDomDocument->createElement('tarif_unitaire', $oFacturesPrestations->getOpPrestPv()));
                    $oDomPrestation->appendChild($oDomDocument->createElement('cumul_total', round($oFacturesPrestations->getFactPrestQuantiteDejaFacture()) + round($oFacturesPrestations->getFactPrestQuantiteFactureFinal())));
                    $oDomPrestation->appendChild($oDomDocument->createElement('deja_facture', round($oFacturesPrestations->getFactPrestQuantiteDejaFacture())));
                    $oDomPrestation->appendChild($oDomDocument->createElement('solde_a_facturer', round($oFacturesPrestations->getFactPrestQuantiteFactureFinal())));
                    if ($oFacturesPrestations->getFactPrestOff() == true) {
                        $oDomPrestation->appendChild($oDomDocument->createElement('montant', 'Offert'));
                    } else {
                        $oDomPrestation->appendChild($oDomDocument->createElement('montant', $oFacturesPrestations->getFactPrestMontantFactureFinal()));
                    }

                    if ($oFacturesPrestations->isRemboursement()) {
                        $bHasPrestaRemb = true;
                    }
                    $iNbPrestations++;
                }
                if ($bDisplayVat && in_array($oFacturesPrestations->getRPrestationId(), array(RPrestations::CONSUMERS_REQUESTS_REPAYMENT)) && ($fRecoverableVatAmont = (float) $aTva[$oFacturesRubrique->getRTvaTypeId()]['r_tva_type_recup_coeff']) != 0) {
                    $bHasRefundServices = true;
                    $aCumputedAmonts = $oFacturesPrestations->computeServiceRecoverableVatAndExludingTaxesAmounts($fRecoverableVatAmont);
                    if (! empty($aCumputedAmonts['service_recoverable_vat_amont'])) {
                        $fRubricRecoverableVat += $aCumputedAmonts['service_recoverable_vat_amont'];
                    }
                    if (! empty($aCumputedAmonts['service_exluding_taxes_amount'])) {
                        $fRubricExludingTaxesAmount += $aCumputedAmonts['service_exluding_taxes_amount'];
                    }
                }
            }

            $bDisplayRecoverableVat = $bDisplayVat && $bHasRefundServices;
            $oDomRubric->appendChild($oDomDocument->createElement('display_recoverable_vat', $bDisplayRecoverableVat));
            if ($bDisplayRecoverableVat) {
                $oDomRubric->appendChild($oDomDocument->createElement('rubric_recoverable_vat_amont', $fRubricRecoverableVat));
                $oDomRubric->appendChild($oDomDocument->createElement('rubric_exluding_taxes_amount', $fRubricExludingTaxesAmount));
            }

            if ($iNbPrestations > 0) {
                $oDomRubriques->appendChild($oDomRubric);
            }
        }
        // Adding law specification regarding the refund services
        if ($bHasPrestaRemb) {
            $oDomLastPage->appendChild($oDomDocument->createElement('display_instruction_remboursement', 1));
        } else {
            $oDomLastPage->appendChild($oDomDocument->createElement('display_instruction_remboursement', 0));
        }
    }
}
