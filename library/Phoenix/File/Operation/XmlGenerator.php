<?php

class Phoenix_File_Operation_XmlGenerator extends Phoenix_File_AbstractGenerator
{

    /**
     * Generate xml feed
     * @param \Operations $oOperation
     * @return string
     */
    public function generateXmlQuotation(\Operations $oOperation) : string
    {
        $oDOMDocument = new DOMDocument();
        $oDOMroot = $oDOMDocument->appendChild($oDOMDocument->createElement('root'));
        $oDOMdata = $oDOMroot->appendChild($oDOMDocument->createElement('data'));
        $oDOMscenario = $oDOMroot->appendChild($oDOMDocument->createElement('scenario'));
        $oDomBudgetEstime = $oDOMroot->appendChild($oDOMDocument->createElement('budget_estime'));
        $oDOMrubriques = $oDOMroot->appendChild($oDOMDocument->createElement('rubriques'));
        $oDOMremboursements = $oDOMroot->appendChild($oDOMDocument->createElement('remboursements'));
        $oDOMaffranchissements = $oDOMroot->appendChild($oDOMDocument->createElement('affranchissements'));
        $oDomFirstPage = $oDOMdata->appendChild($oDOMDocument->createElement('first_page'));
        $oDomLastPage = $oDOMdata->appendChild($oDOMDocument->createElement('last_page'));

        // Configuration attributes in root
        $oAttribute = $oDOMDocument->createAttribute('lang');
        $oAttribute->value = $oOperation->getOpDevisLang();
        $oDOMroot->appendChild($oAttribute);

        // Header
        $this->generateQuotationXmlHeader($oOperation, $oDOMDocument, $oDomFirstPage);

        // Client contact
        $this->generateQuotationXmlClientContact($oOperation, $oDOMDocument, $oDomFirstPage);

        // Footer
        $this->generateQuotationXmlFooter($oOperation, $oDOMDocument, $oDomLastPage);

        // Scenario
        $oCriteria = new Criteria();
        $oCriteria->addAscendingOrderByColumn('op_scenario_numero');
        foreach ($oOperation->getOperationScenariis($oCriteria) as $oOperationScenarii) {
            $oDomScenarioPrestation = $oDOMscenario->appendChild($oDOMDocument->createElement('scenario_prestation'));

            $oLabel = $oDOMDocument->createElement('libelle');
            $oLabel->appendChild($oDOMDocument->createCDATASection($oOperationScenarii->getOpScenarioLibelleTranslated()));
            $oDomScenarioPrestation->appendChild($oLabel);

            $oDomScenarioPrestation->appendChild($oDOMDocument->createElement('quantite', $oOperationScenarii->getOpScenarioVolume()));
            $oDomScenarioPrestation->appendChild($oDOMDocument->createElement('taux_estime', $oOperationScenarii->getOpScenarioPcent()));
            $oDomScenarioPrestation->appendChild($oDOMDocument->createElement('total_estime', $oOperationScenarii->getOpScenarioTotal()));
        }

        // Budget
        $aAmounts = $oOperation->getMontants($oOperation->getOpDevisLang());
        $aTva = RTvaTypeQuery::create()->find()->toArray('RTvaId', false, BasePeer::TYPE_FIELDNAME);

        $oDomBudgetPrestations = $oDomBudgetEstime->appendChild($oDOMDocument->createElement('budget_prestations'));

        OperationRubriquesPeer::clearInstancePool();
        $aRubriquesDevis = OperationRubriquesQuery::create()->filterByOpId($oOperation->getOpId())->orderByOpRubriqueOrder()
                        ->useOperationPrestationsQuery()->filterByOpPrestNpa(0)->orderByOpPrestOrder()->endUse()
                        ->with('OperationPrestations')->find();

        foreach ($aRubriquesDevis as $oOperationRubrique) {
            $oDomBudgetPrestation = $oDomBudgetPrestations->appendChild($oDOMDocument->createElement('budget_prestation'));

            $oLabel = $oDOMDocument->createElement('libelle');
            $oLabel->appendChild($oDOMDocument->createCDATASection($oOperationRubrique->getOpRubriqueLibelleTranslated()));
            $oDomBudgetPrestation->appendChild($oLabel);

            if ($aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_statut'] == 'ttc') {
                $oDomBudgetPrestation->appendChild($oDOMDocument->createElement('ht', '-'));
                $oDomBudgetPrestation->appendChild($oDOMDocument->createElement('ttc', $oOperationRubrique->getMontantTotalEstimTtc()));
            } elseif ($aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_statut'] == 'sans_tva') {
                $oDomBudgetPrestation->appendChild($oDOMDocument->createElement('ht', '-'));
                $oDomBudgetPrestation->appendChild($oDOMDocument->createElement('ttc', $oOperationRubrique->getMontantTotalEstim()));
            } else {
                $oDomBudgetPrestation->appendChild($oDOMDocument->createElement('ht', $oOperationRubrique->getMontantTotalEstim()));
                $oDomBudgetPrestation->appendChild($oDOMDocument->createElement('ttc', $oOperationRubrique->getMontantTotalEstimTtc()));
            }
        }

        $oDomBudgetEstime->appendChild($oDOMDocument->createElement('budget_total_ht', $aAmounts['total_ht']));
        $fBudgetTotalEstimeHorsTva = $aAmounts['total_ht'];
        $fFinalEstimatedQuotesExcludingVats = 0;

        foreach ($aAmounts['montant_for_tva'] as $iRTvaTypeID => $aAmountData) {
            $fBudgetTotalEstimeHorsTva += $aAmountData['montant'];
            $oDomBudgetEstime->appendChild($oDOMDocument->createElement('budget_total_tva', $aAmountData['montant']))->appendChild($oDOMDocument->createAttribute('taux'))->value = $aAmountData['libelle'];
            // The total of the first preceding lines is displayed, table r_tva_type 4 corresponds to the TTC charge.
            if ($iRTvaTypeID == RTvaType::FRAIS_TTC) {
                $oDomBudgetEstime->appendChild($oDOMDocument->createElement('budget_total_tva', $fBudgetTotalEstimeHorsTva))->appendChild($oDOMDocument->createAttribute('taux'))->value = $oOperation->getZendTranslate()->translate('BUDGET TOTAL ESTIME HORS TVA');
            }

            if (in_array($iRTvaTypeID, array(RTvaType::FRAIS_TTC, RTvaType::NON_SOUMIS_TVA))) {
                $fFinalEstimatedQuotesExcludingVats += $aAmountData['montant'];
            }
        }

        $oDomBudgetEstime->appendChild($oDOMDocument->createElement('budget_total_estime_hors_tva', $fFinalEstimatedQuotesExcludingVats + $aAmounts['total_ht']));
        $oDomBudgetEstime->appendChild($oDOMDocument->createElement('budget_total_ttc', $aAmounts['total_ttc']));

        // Invoicing plan
        $oDomFacturationPrev = $oDomBudgetEstime->appendChild($oDOMDocument->createElement('facturation_prev'));
        $oCriteria = new Criteria();
        $oCriteria->addAscendingOrderByColumn('pfd_date_planif');
        foreach ($oOperation->getPlanFacturationDetailss($oCriteria) as $oPlanFacturationDetail) {
            $oDOMfacture = $oDomFacturationPrev->appendChild($oDOMDocument->createElement('facture'));
            $oDOMfacture->appendChild($oDOMDocument->createElement('libelle', $oPlanFacturationDetail->getRFactureTypes()->getRFactTypeLibelleDetailTranslated($oOperation->getOpDevisLang())));
            $oDOMfacture->appendChild($oDOMDocument->createElement('date_facture', Phoenix_Data_Convert::formatdateFromSqlServer($oPlanFacturationDetail->getPfdDatePlanif(), $oOperation->getOpDevisLang())));
        }

        // Sections
        $oDOMrubriques->appendChild($oDOMDocument->createElement('total_ht', $aAmounts['montant_total_sans_remb_et_frais_postaux_ht']));
        $oDOMremboursements->appendChild($oDOMDocument->createElement('total_ttc', $aAmounts['remb_ttc']));
        $oDOMaffranchissements->appendChild($oDOMDocument->createElement('total', $aAmounts['frais_postaux_ttc']));

        $sDevisLanguage = $oOperation->getOpDevisLang();
        foreach ($aRubriquesDevis as $oOperationRubrique) {
            if (in_array($oOperationRubrique->getOpRRubriqueId(), RRubriques::REFUND_SECTION_IDS)) {
                // Refund
                foreach ($oOperationRubrique->getOperationPrestationss() as $oOperationPrestation) {
                    $oDOMremboursement = $oDOMremboursements->appendChild($oDOMDocument->createElement('remboursement'));

                    $oDOMremboursement->appendChild($oDOMDocument->createElement('r_prest_id', $oOperationPrestation->getOpRPrestId()));

                    $oLabel = $oDOMDocument->createElement('libelle');
                    $oLabel->appendChild($oDOMDocument->createCDATASection($oOperationPrestation->getOpPrestLibelleDevisTranslated()));
                    $oDOMremboursement->appendChild($oLabel);

                    $oServiceDescription = $oDOMDocument->createElement('descriptif');
                    $oServiceDescription->appendChild($oDOMDocument->createCDATASection($oOperationPrestation->getOpPrestDescription()));
                    $oDOMremboursement->appendChild($oServiceDescription);

                    $oDOMremboursement->appendChild($oDOMDocument->createElement('pu', $oOperationPrestation->getOpPrestPv()));
                    $oDOMremboursement->appendChild($oDOMDocument->createElement('quantite', $oOperationPrestation->getOpPrestQestim()));
                    $oDOMremboursement->appendChild($oDOMDocument->createElement('total_ttc', $oOperationPrestation->getOpPrestMestim() * $aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_coeff']));
                }
            } elseif (in_array($oOperationRubrique->getOpRRubriqueId(), array(RRubriques::RUB_POSTAL_CHARGES_NO_VAT))) {
                // Postal charge
                foreach ($oOperationRubrique->getOperationPrestationss() as $oOperationPrestation) {
                    $oDOMaffranchissement = $oDOMaffranchissements->appendChild($oDOMDocument->createElement('affranchissement'));

                    $oDOMaffranchissement->appendChild($oDOMDocument->createElement('r_prest_id', $oOperationPrestation->getOpRPrestId()));

                    $oLabel = $oDOMDocument->createElement('libelle');
                    $oLabel->appendChild($oDOMDocument->createCDATASection($oOperationPrestation->getOpPrestLibelleDevisTranslated()));
                    $oDOMaffranchissement->appendChild($oLabel);

                    $oServiceDescription = $oDOMDocument->createElement('descriptif');
                    $oServiceDescription->appendChild($oDOMDocument->createCDATASection($oOperationPrestation->getOpPrestDescription()));
                    $oDOMaffranchissement->appendChild($oServiceDescription);

                    $oDOMaffranchissement->appendChild($oDOMDocument->createElement('pu', $oOperationPrestation->getOpPrestPv()));
                    $oDOMaffranchissement->appendChild($oDOMDocument->createElement('quantite', $oOperationPrestation->getOpPrestQestim()));
                    $oDOMaffranchissement->appendChild($oDOMDocument->createElement('total', $oOperationPrestation->getOpPrestMestim()));
                }
            } else {
                // Everything else
                $oDOMrubrique = $oDOMrubriques->appendChild($oDOMDocument->createElement('rubrique'));

                // Encapsulation of section label in a CDATA section to authorize special characters
                $oRubriqueLibelleElement = $oDOMDocument->createElement('title');
                $oRubriqueLibelleElement->appendChild($oDOMDocument->createCDATASection($oOperationRubrique->getOpRubriqueLibelleTranslated()));
                $oDOMrubrique->appendChild($oRubriqueLibelleElement);

                $oDOMrubrique->appendChild($oDOMDocument->createElement('total_ht', $oOperationRubrique->getMontantTotalEstim()));
                $oDOMrubrique->appendChild($oDOMDocument->createElement('has_tva', ($oOperationRubrique->getRTvaType()->getRTvaStatut() == 'tva' ? '1' : '0')));
                // Services
                foreach ($oOperationRubrique->getOperationPrestationss() as $oOperationPrestation) {
                    $oDOMprestation = $oDOMrubrique->appendChild($oDOMDocument->createElement('prestation'));

                    $oDOMprestation->appendChild($oDOMDocument->createElement('r_prest_id', $oOperationPrestation->getOpRPrestId()));

                    $oLabel = $oDOMDocument->createElement('libelle');
                    $oLabel->appendChild($oDOMDocument->createCDATASection($oOperationPrestation->getOpPrestLibelleDevisTranslated()));
                    $oDOMprestation->appendChild($oLabel);

                    $oServiceDescription = $oDOMDocument->createElement('descriptif');
                    $oServiceDescription->appendChild($oDOMDocument->createCDATASection($oOperationPrestation->getOpPrestDescription()));
                    $oDOMprestation->appendChild($oServiceDescription);

                    $oDOMprestation->appendChild($oDOMDocument->createElement('pu', $oOperationPrestation->getOpPrestPv()));
                    $oDOMprestation->appendChild($oDOMDocument->createElement('quantite', $oOperationPrestation->getOpPrestQestim()));
                    if ($oOperationPrestation->getOpPrestOff() == false) {
                        $oDOMprestation->appendChild($oDOMDocument->createElement('total_ht', $oOperationPrestation->getOpPrestMestim()));
                    } else {
                        $oDOMprestation->appendChild($oDOMDocument->createElement('total_ht', 'Offert'));
                    }
                }
            }
        }
        return $oDOMDocument->saveXML();
    }

    /**
     * Generate xml header
     * @param \Operations $oOperation
     * @param \DomDocument $oDOMDocument
     * @param \DOMElement $oDomFirstPage
     */
    protected function generateQuotationXmlHeader(\Operations $oOperation, \DomDocument $oDOMDocument, \DOMElement $oDomFirstPage)
    {
        if ($oUserDc = $oOperation->getUserDC()) {
            $oDomFirstPage->appendChild($oDOMDocument->createElement('nom_contact', $oUserDc->getUserNomPrenom()));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('email_contact', $oUserDc->getUserMail()));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('tel_contact', $oUserDc->getUserPhone()));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('mobile_contact', $oUserDc->getUserMobile()));
        } else {
            $oDomFirstPage->appendChild($oDOMDocument->createElement('nom_contact', ''));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('email_contact', ''));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('tel_contact', ''));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('mobile_contact', ''));
        }
        $oDomFirstPage->appendChild($oDOMDocument->createElement('fax_contact', Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_FAX_NUMBER)));
        $oElement = $oDOMDocument->createElement('descriptif_operation');
        $oElement->appendChild($oDOMDocument->createCDATASection($oOperation->getOpDescription()));
        $oDomFirstPage->appendChild($oElement);

        $oElement = $oDOMDocument->createElement('nom_offre');
        $oElement->appendChild($oDOMDocument->createCDATASection($oOperation->getOpLibelle()));
        $oDomFirstPage->appendChild($oElement);

        $oDomFirstPage->appendChild($oDOMDocument->createElement('num_devis', $oOperation->getOpNumber()));
        $oDomFirstPage->appendChild($oDOMDocument->createElement('date_devis', Phoenix_Data_Convert::formatdateFromSqlServer($oOperation->getDateCreate(), $oOperation->getOpDevisLang())));

        $iNbDevis = count($oOperation->getFilesDevis());
        $oDomFirstPage->appendChild($oDOMDocument->createElement('num_version_devis', ++$iNbDevis));

        $sValiditeDevis = '';
        $oRDelai = RDelaiDevisQuery::create()->findPk($oOperation->getOpDelaiDevisId());
        if ($oRDelai instanceof RDelaiDevis) {
            $sValiditeDevis = $oRDelai->getQuotationDelayTranslatedLabel($oOperation->getOpDevisLang());
        }

        $oDomFirstPage->appendChild($oDOMDocument->createElement('validite_devis', $sValiditeDevis));
        return $this;
    }

    /**
     * Generate xml for client contact part
     * @param \Operations $oOperation
     * @param \DomDocument $oDOMDocument
     * @param \DOMElement $oDomFirstPage
     */
    protected function generateQuotationXmlClientContact(\Operations $oOperation, \DomDocument $oDOMDocument, \DOMElement $oDomFirstPage)
    {
        if ($oOperation->getContactFacturation() != null && ($oContactClient = $oOperation->getContactClient())) {
            $oDomFirstPage->appendChild($oDOMDocument->createElement('contact_client', $oContactClient->getCtNomPrenom()));
        } else {
            $oDomFirstPage->appendChild($oDOMDocument->createElement('contact_client', ''));
        }

        $oElement = $oDOMDocument->createElement('nom_client');
        $oElement->appendChild($oDOMDocument->createCDATASection($oOperation->getClients()->getClLibelle()));
        $oDomFirstPage->appendChild($oElement);
        if ($oOperation->getContactClient() != null && $oOperation->getContactClient()->getClientSites() != null) {
            $oElement = $oDOMDocument->createElement('adresse_1');
            $oElement->appendChild($oDOMDocument->createCDATASection($oOperation->getContactClient()->getClientSites()->getClSiteAddr1()));
            $oDomFirstPage->appendChild($oElement);
            $oElement = $oDOMDocument->createElement('adresse_2');
            $oElement->appendChild($oDOMDocument->createCDATASection($oOperation->getContactClient()->getClientSites()->getClSiteAddr2()));
            $oDomFirstPage->appendChild($oElement);
            $oElement = $oDOMDocument->createElement('adresse_3');
            $oElement->appendChild($oDOMDocument->createCDATASection($oOperation->getContactClient()->getClientSites()->getClSiteAddr3()));
            $oDomFirstPage->appendChild($oElement);
            $oElement = $oDOMDocument->createElement('code_postal');
            $oElement->appendChild($oDOMDocument->createCDATASection($oOperation->getContactClient()->getClientSites()->getClSiteZipcode()));
            $oDomFirstPage->appendChild($oElement);
            $oElement = $oDOMDocument->createElement('ville');
            $oElement->appendChild($oDOMDocument->createCDATASection($oOperation->getContactClient()->getClientSites()->getClSiteTown()));
            $oDomFirstPage->appendChild($oElement);
            $oElement = $oDOMDocument->createElement('pays');
            $oElement->appendChild($oDOMDocument->createCDATASection($oOperation->getContactClient()->getClientSites()->getClSiteCountry()));
            $oDomFirstPage->appendChild($oElement);
        } else {
            $oDomFirstPage->appendChild($oDOMDocument->createElement('adresse_1', ''));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('adresse_2', ''));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('adresse_3', ''));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('code_postal', ''));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('ville', ''));
            $oDomFirstPage->appendChild($oDOMDocument->createElement('pays', ''));
        }

        $oDomFirstPage->appendChild($oDOMDocument->createElement('date_start_op', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($oOperation->getOpDateconsoStart(), $oOperation->getOpDevisLang())));
        $oDomFirstPage->appendChild($oDOMDocument->createElement('date_end_op', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($oOperation->getOpDateconsoEnd(), $oOperation->getOpDevisLang())));
        $oDomFirstPage->appendChild($oDOMDocument->createElement('date_fin_postale', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($oOperation->getOpDateposteEnd(), $oOperation->getOpDevisLang())));
        $oDomFirstPage->appendChild($oDOMDocument->createElement('date_fin_gestion', Phoenix_Data_Convert::formatDateFromSqlServerToTextuel($oOperation->getOpStampEnd(), $oOperation->getOpDevisLang())));
        return $this;
    }

    /**
     * Generate xml for footer
     * @param \Operations $oOperation
     * @param \DomDocument $oDOMDocument
     * @param \DOMElement $oDomLastPage
     */
    protected function generateQuotationXmlFooter(\Operations $oOperation, \DomDocument $oDOMDocument, \DOMElement $oDomLastPage)
    {
        if ($oOperation->getContactClient() != null && $oOperation->getContactClient()->getClientSites() != null) {
            $oElement = $oDOMDocument->createElement('adresse_facturation');
            $oElement->appendChild($oDOMDocument->createCDATASection(
                $oOperation->getClients()->getClLibelle() . ' ' .
                            $oOperation->getContactClient()->getClientSites()->getClSiteAddr1() . ' ' .
                            $oOperation->getContactClient()->getClientSites()->getClSiteZipcode() . ' ' .
                            $oOperation->getContactClient()->getClientSites()->getClSiteTown() . ' ' .
                            $oOperation->getContactClient()->getClientSites()->getClSiteCountry()
            ));
            $oDomLastPage->appendChild($oElement);
        } else {
            $oDomLastPage->appendChild($oDOMDocument->createElement('adresse_facturation'));
        }
        if ($oOperation->getContactFacturation() != null) {
            $oContactFacturation = $oDOMDocument->createElement('contact_facturation');
            $oContactFacturation->appendChild($oDOMDocument->createCDATASection($oOperation->getContactFacturation()->getCtNomPrenom()));
            $oDomLastPage->appendChild($oContactFacturation);
        } else {
            $oDomLastPage->appendChild($oDOMDocument->createElement('contact_facturation', ''));
        }

        $sLang = $oOperation->getOpDevisLang();
        if (empty($sLang) || $sLang == RLanguages::LANG_FRA) {
            $oDomLastPage->appendChild($oDOMDocument->createElement('num_tva', Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_VAT_NUMBER)));
        } else {
            $oDomLastPage->appendChild($oDOMDocument->createElement('num_tva', $oOperation->getClientFactureOptions()->getClFactTvaintra()));
        }
        return $this;
    }
}
