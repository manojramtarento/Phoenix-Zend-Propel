<?php

class PlanFacturationDetails extends BasePlanFacturationDetails
{

    /**
     * Validation of the good intelligence of the information of the deadline
     */
    protected function _validateIsDataFilledCorrect()
    {

        if (in_array($this->getPfdTypeFactId(), array(RFactureTypes::REMB_ADF)) && $this->getPfdIdToCancel() == null) {
            $this->addValidationFailed('Une échéance  doit être précisée', 'plan_facturation_details.PFD_ID_TO_CANCEL');
        }

        if (in_array($this->getPfdTypeFactId(), array(RFactureTypes::ANNULATION,)) && $this->getPfdFactAnnul() == null) {
            $this->addValidationFailed('Une facture doit être précisée', 'plan_facturation_details.PFD_FACT_ANNUL');
        }
    }

    /**
     * Checking weither the cancellation motives has been correctly filled
     */
    protected function _validateIsCancellationMotiveFilled()
    {

        if ($this->getPfdTypeFactId() == RFactureTypes::ANNULATION) {
            if (! $this->getPfdFactAnnulMotifId()) {
                $this->addValidationFailed('Le choix d\'un motif d\'annulation est obligatoire', 'plan_facturation_details.PFD_FACT_ANNUL_MOTIF_ID');
            } elseif ($this->getPfdFactAnnulMotifId() == RFactureAnnulationMotifs::OTHER_MOTIVE && ! $this->getPfdFactAnnulAutreMotif()) {
                $this->addValidationFailed('Le choix d\'un "autre" motif d\'annulation est obligatoire', 'plan_facturation_details.PFD_FACT_ANNUL_AUTRE_MOTIF');
            }
        }
    }

    /**
     * @param OperationRubriques $oOperationRubrique
     * @param OperationPrestations $oOperationPrestation
     * @param type $oFacturesPrestation
     * @param array $aAgregatsFacture
     */
    private function _calcFacturePrestationEstim(OperationRubriques $oOperationRubrique, OperationPrestations & $oOperationPrestation, & $oFacturesPrestation, $aAgregatsFacture)
    {

        $oFacturesPrestation->setOpPrestPv($oOperationPrestation->getOpPrestPv());

        if (isset($aAgregatsFacture[$oOperationPrestation->getOpPrestId()])) {
            $iQuantitePrestationDejaFacture = $aAgregatsFacture[$oOperationPrestation->getOpPrestId()]['fact_prest_quantite_deja_factu'];
            $oFacturesPrestation->setFactPrestQuantiteDejaFacture($iQuantitePrestationDejaFacture);
        } else {
            $oFacturesPrestation->setFactPrestQuantiteDejaFacture(0);
        }

        $oFacturesPrestation->setFactPrestQestimFacture($oOperationPrestation->getOpPrestQestim());
        $oFacturesPrestation->setFactPrestQuantiteFacture($oOperationPrestation->getOpPrestQestim());
        $oFacturesPrestation->setFactPrestMontantFacture($oOperationPrestation->getOpPrestQestim() * $oOperationPrestation->getOpPrestPv());

        $iQuantiteFactureFinal = ($oOperationPrestation->getOpPrestQestim() * $this->getPfdTauxPartiel()) / 100;
        if ($oOperationPrestation->getOpAdf() == 1) {
            $iQuantiteFactureFinal = ($iQuantiteFactureFinal * $this->getPfdTauxAdf() / 100);
        }
        $oFacturesPrestation->setFactPrestQestimFactureFinal($iQuantiteFactureFinal);
        $oFacturesPrestation->setFactPrestQuantiteFactureFinal($iQuantiteFactureFinal);
        $oFacturesPrestation->setFactPrestMontantFactureFinal($iQuantiteFactureFinal * $oOperationPrestation->getOpPrestPv());


        if ($oFacturesPrestation->getFactPrestMontantFactureFinal() == 0) {
            $oFacturesPrestation = null;
        }
    }

    /**
     * @param OperationRubriques $oOperationRubrique
     * @param OperationPrestations $oOperationPrestation
     * @param type $oFacturesPrestation
     * @param array $aAgregatsFacture
     */
    private function _calcFacturePrestationByDiffQteEstim(OperationRubriques $oOperationRubrique, OperationPrestations & $oOperationPrestation, & $oFacturesPrestation, $aAgregatsFacture)
    {

        $oFacturesPrestation->setOpPrestPv($oOperationPrestation->getOpPrestPv());

        if (isset($aAgregatsFacture[$oOperationPrestation->getOpPrestId()])) {
            $iAlreadyInvoicedServicesQuantity = $aAgregatsFacture[$oOperationPrestation->getOpPrestId()]['fact_prest_qestim_deja_factu'];
            $oFacturesPrestation->setFactPrestQestimDejaFacture($iAlreadyInvoicedServicesQuantity);
            $oFacturesPrestation->setFactPrestQuantiteDejaFacture($iAlreadyInvoicedServicesQuantity);
        } else {
            $iAlreadyInvoicedServicesQuantity = 0;
            $oFacturesPrestation->setFactPrestQestimDejaFacture(0);
            $oFacturesPrestation->setFactPrestQuantiteDejaFacture(0);
        }

        $iInvoicedServiceQuantity = $oOperationPrestation->getOpPrestQestim() - $iAlreadyInvoicedServicesQuantity;
        $oFacturesPrestation->setFactPrestQestimFacture($iInvoicedServiceQuantity);
        $oFacturesPrestation->setFactPrestQuantiteFacture($iInvoicedServiceQuantity);
        $oFacturesPrestation->setFactPrestMontantFacture($oOperationPrestation->getOpPrestPv() * $iInvoicedServiceQuantity);

        if ($oOperationRubrique->getRRubTypeId() == RRubriquesType::FF) {
            $iServicesEstimatedQuantity = $oOperationPrestation->getOpPrestQestim();
        } else {
            $iServicesEstimatedQuantity = ($oOperationPrestation->getOpPrestQestim() * $this->getPfdTauxPartiel() / 100);
        }

        if ($oOperationPrestation->getOpAdf() == 1) {
            $iServicesEstimatedQuantity = ($iServicesEstimatedQuantity * $this->getPfdTauxAdf() / 100);
        }

        $iInvoicedServiceQuantityFinal = $iServicesEstimatedQuantity - $iAlreadyInvoicedServicesQuantity;

        $oFacturesPrestation->setFactPrestQestimFactureFinal($iInvoicedServiceQuantityFinal);
        $oFacturesPrestation->setFactPrestQuantiteFactureFinal($iInvoicedServiceQuantityFinal);
        $oFacturesPrestation->setFactPrestMontantFactureFinal($oOperationPrestation->getOpPrestPv() * $iInvoicedServiceQuantityFinal);

        if ($oFacturesPrestation->getFactPrestMontantFactureFinal() == 0) {
            $oFacturesPrestation = null;
        }
    }

    /**
     *
     * @param OperationRubriques $oOperationRubrique
     * @param OperationPrestations $oOperationPrestation
     * @param type $oFacturesPrestation
     * @param type $aAgregatsFacture
     */
    private function _calcFacturePrestationByDiffQteReel(OperationRubriques $oOperationRubrique, OperationPrestations & $oOperationPrestation, & $oFacturesPrestation, $aAgregatsFacture)
    {

        $oFacturesPrestation->setOpPrestPv($oOperationPrestation->getOpPrestPv());
        if (isset($aAgregatsFacture[$oOperationPrestation->getOpPrestId()])) {
            $iAlreadyInvoicedServicesQuantity = $aAgregatsFacture[$oOperationPrestation->getOpPrestId()]['fact_prest_quantite_deja_factu'];
            $oFacturesPrestation->setFactPrestQuantiteDejaFacture($iAlreadyInvoicedServicesQuantity);
        } else {
            $iAlreadyInvoicedServicesQuantity = 0;
            $oFacturesPrestation->setFactPrestQuantiteDejaFacture(0);
        }

        $iInvoicedServiceQuantity = $oOperationPrestation->getOpPrestQreel() - $iAlreadyInvoicedServicesQuantity;
        $oFacturesPrestation->setFactPrestQuantiteFacture($iInvoicedServiceQuantity);
        $oFacturesPrestation->setFactPrestMontantFacture($oOperationPrestation->getOpPrestPv() * $iInvoicedServiceQuantity);

        if ($oOperationPrestation->getOpAdf() == 1) {
            $iInvoicedServiceQuantityFinal = ($iInvoicedServiceQuantity * $this->getPfdTauxAdf() / 100);
        } else {
            $iInvoicedServiceQuantityFinal = $iInvoicedServiceQuantity;
        }
        $oFacturesPrestation->setFactPrestQuantiteFactureFinal($iInvoicedServiceQuantityFinal);
        $oFacturesPrestation->setFactPrestMontantFactureFinal($oOperationPrestation->getOpPrestPv() * $iInvoicedServiceQuantityFinal);

        if ($oFacturesPrestation->getFactPrestMontantFactureFinal() == 0) {
            $oFacturesPrestation = null;
        }
    }

    /**
     * @param OperationRubriques $oOperationRubrique
     * @param OperationPrestations $oOperationPrestation
     * @param type $oFacturesPrestation
     * @param array $aAgregatsFacture
     */
    private function _calcFacturePrestaRembByDiffMontantReel(OperationRubriques & $oOperationRubrique, OperationPrestations & $oOperationPrestation, & $oFacturesPrestation, $aAgregatsFacture)
    {
        if (isset($aAgregatsFacture[$oOperationPrestation->getOpPrestId()])) {
            $iAlreadyInvoicedServicesQuantity = $aAgregatsFacture[$oOperationPrestation->getOpPrestId()]['fact_prest_quantite_deja_factu'];
            $oFacturesPrestation->setFactPrestQuantiteDejaFacture($iAlreadyInvoicedServicesQuantity);
        } else {
            $iAlreadyInvoicedServicesQuantity = 0;
            $oFacturesPrestation->setFactPrestQuantiteDejaFacture(0);
        }

        if ($oOperationPrestation->getOpPrestQreel() != 0) {
            $iAverageCost = $oOperationPrestation->getOpPrestMreel() / $oOperationPrestation->getOpPrestQreel();
        } else {
            $iAverageCost = 0;
        }
        $iInvoicedServiceQuantity = $oOperationPrestation->getOpPrestQreel() - $iAlreadyInvoicedServicesQuantity;
        $oFacturesPrestation->setFactPrestQuantiteFacture($iInvoicedServiceQuantity);


        if (isset($aAgregatsFacture[$oOperationPrestation->getOpPrestId()])) {
            $iInvoicedAmountExcludingVat = $oOperationPrestation->getOpPrestMreel() - $aAgregatsFacture[$oOperationPrestation->getOpPrestId()]['fact_prest_montant_deja_factu'];
        } else {
            $iInvoicedAmountExcludingVat = $oOperationPrestation->getOpPrestMreel();
        }
        $oFacturesPrestation->setFactPrestMontantFacture($iInvoicedAmountExcludingVat);

        if ($oOperationPrestation->getOpAdf() == 1) {
            $iInvoicedServiceQuantity = $iInvoicedServiceQuantity * $this->getPfdTauxAdf() / 100;
            $iInvoicedAmountExcludingVat = $iInvoicedAmountExcludingVat * $this->getPfdTauxAdf() / 100;
        }

        $oFacturesPrestation->setFactPrestQuantiteFactureFinal($iInvoicedServiceQuantity);
        $oFacturesPrestation->setFactPrestMontantFactureFinal($iInvoicedAmountExcludingVat);

        if ($oFacturesPrestation->getFactPrestMontantFactureFinal() == 0) {
            $oFacturesPrestation = null;
        } else {
            $oFacturesPrestation->setOpPrestPv($iAverageCost);
        }
    }

    /**
     * Generation of an invoice from a day of payement billing plan
     *
     * @param bool $bMailNotification
     * @return bool|Factures
     */
    public function genFacture($bMailNotification = false)
    {
        $oOperation = $this->getOperations();
        if ($oOperation->getOpStatusId() != operations::STATUS_ACCEPTE) {
            $this->addValidationFailed('L\'opération n\'a pas le statut accepté');
            return false;
        }
        if ($oOperation->getContactFacturation() == null) {
            $this->addValidationFailed('Il n\'y a pas de contact de facturation rattaché à l\'opération');
            return false;
        }
        if ($oOperation->getContactFacturation()->getClientSites() == null) {
            $this->addValidationFailed('Il n\'y a pas de site rattaché au contact de facturation');
            return false;
        }
        if ($oOperation->getOpDcId() == null) {
            $this->addValidationFailed('Il n\'y a pas de directeur de clientèle renseigné pour cette opération');
            return false;
        }
        if ($oOperation->getClientFactureOptions() == null || $oOperation->getClientFactureOptions()->getClFactEcheance() == null) {
            $this->addValidationFailed('Il n\'y a pas d\'échéance de facturation renseignée pour le client de l\'opération');
            return false;
        }

        $sClSiteAdress1 = $oOperation->getContactFacturation()->getClientSites()->getClSiteAddr1();
        $sClSiteZipCode = $oOperation->getContactFacturation()->getClientSites()->getClSiteZipcode();
        $sClSiteTown = $oOperation->getContactFacturation()->getClientSites()->getClSiteTown();

        if (! $sClSiteAdress1 || ! $sClSiteZipCode || ! $sClSiteTown) {
            $this->addValidationFailed('L\'adresse de facturation n\'est pas complète');
            return false;
        }

        if (in_array($this->getPfdTypeFactId(), array(RFactureTypes::ANNULATION, RFactureTypes::REMB_ADF))) {
            // Invoice cancellation
            if ($this->getPfdTypeFactId() == RFactureTypes::ANNULATION) {
                $oFacture = FacturesQuery::create()->findPk($this->getPfdFactAnnul())->genCanceled($this->getPfdTypeFactId());
            }
            if ($this->getPfdTypeFactId() == RFactureTypes::REMB_ADF) {
                $oFacture = PlanFacturationDetailsQuery::create()->findPk($this->getPfdIdToCancel())->getFactureGenerated()->genCanceled($this->getPfdTypeFactId());
            }

            // Generate invoice pdf
            Phoenix_File_Invoice_PdfGenerator::getInstance()->generateInvoicePdf($oFacture);
        } else {
            // Invoice Creation
            // Update non indicated actual quantities for FF as estimated
            $oOperation->majQreelFromQestim();

            // Retrieving category identifiers to charge based on the type of bill to generate
            $aCategoriesId = LnkFactTypePrestaCatQuery::create()->filterByRFactTypeId($this->getPfdTypeFactId())
                            ->select(array('RPrestaCatId'))
                            ->find()->toArray();

            // Invoice type to generate
            $oRFactureType = RFactureTypesQuery::create()->findOneByRFactTypeId($this->getPfdTypeFactId());
            // Test if the type of the invoice is associated to an invoice plan is well defined in the table r_facture_types
            if (! ($oRFactureType instanceof RFactureTypes)) {
                $this->addValidationFailed('le type de facturation : "' . $this->getPfdTypeFactId() . '" attribué au plan de facturation id : "' . $this->getPfdId() . '" est incorrect');
                return false;
            }

            // Retrieve operation services to be invoiced
            $oOperationPrestationToFacture = OperationsQuery::create()->getOperationWithPrestationsFromPrestationCategories($this->getOpId(), $aCategoriesId);

            // Reference VAT
            $aTva = RTvaTypeQuery::create()->find()->toArray('RTvaId', false, BasePeer::TYPE_FIELDNAME);

            // Various informations about the invoice
            $oFacture = new Factures();
            $oFacture->setOpId($this->getOpId());
            $oFacture->setRFactTypeId($oRFactureType->getRFactTypeId());
            $oFacture->setFactStatusId(RFactureStatuts::CREATED);
            $oFacture->setCtId($oOperation->getContactFacturation()->getCtId());
            $oFacture->setFactDestinataire($oOperation->getClients()->getClLibelle());
            $oFacture->setFactAttention($oOperation->getContactFacturation()->getCtNomPrenom());
            $oFacture->setFactAdresse1($oOperation->getContactFacturation()->getClientSites()->getClSiteAddr1());
            $oFacture->setFactAdresse2($oOperation->getContactFacturation()->getClientSites()->getClSiteAddr2());
            $oFacture->setFactAdresse3($oOperation->getContactFacturation()->getClientSites()->getClSiteAddr3());
            $oFacture->setFactCodePostal($oOperation->getContactFacturation()->getClientSites()->getClSiteZipcode());
            $oFacture->setFactVille($oOperation->getContactFacturation()->getClientSites()->getClSiteTown());
            $oFacture->setFactPays($oOperation->getContactFacturation()->getClientSites()->getClSiteCountry());
            $oFacture->setFactEcheanceId($oOperation->getClientFactureOptions()->getClFactEcheance());
            $oFacture->setfactLang($oOperation->getOpDevisLang());
            $oFacture->setFactMentionSpec($oOperation->getPlanFacturationParams()->getPlanFactInfo());
            $oFacture->setClId($oOperation->getOpClId());
            $iInvoiceAmountExcludingTaxes = 0;
            $iInvoiceAmountIncludingAllTaxes = 0;

            // If services have been found
            if ($oOperationPrestationToFacture) {
                $oFacture->save();
                // Retrieve services ids for the operation to be invoiced
                $aOpPrestId = array();
                foreach ($oOperationPrestationToFacture->getOperationRubriquess() as $oRubrique) {
                    foreach ($oRubrique->getOperationPrestationss() as $oPrestation) {
                        $aOpPrestId[] = $oPrestation->getOpPrestId();
                    }
                }
                $sOpPrestId = '(' . implode(',', $aOpPrestId) . ')';
                // Computing the total excl tax amonts by VAT rate
                $aMontantTotalPrestationByTVA = array();
                // Array for calculating qty aggregates and amounts per service
                $aAgregatsFacture = null;
                // Browsing rubrics for the services to be charged
                foreach ($oOperationPrestationToFacture->getOperationRubriquess() as $oOperationRubrique) {
                    // Browsing services to be invoiced
                    $iRubricFinalAmount = 0;
                    $aFacturesPrestation = array();
                    foreach ($oOperationRubrique->getOperationPrestationss() as $oOperationPrestation) {
                        // Create object service te be invoiced
                        $oFacturesPrestation = new FacturesPrestations();
                        $oFacturesPrestation->setOpPrestId($oOperationPrestation->getOpPrestId());
                        $oFacturesPrestation->setRPrestationId($oOperationPrestation->getOpRPrestId());
                        $oFacturesPrestation->setFactPrestOff($oOperationPrestation->getOpPrestOff());
                        $oFacturesPrestation->setFactPrestLibelle($oOperationPrestation->getOpPrestLibelleDevisTranslated());
                        $oFacturesPrestation->setFactPrestDescription($oOperationPrestation->getOpPrestDescriptionTranslated());
                        $oFacturesPrestation->setRPCodeComptable($oOperationPrestation->getOpPrestCodeComptable());
                        $oFacturesPrestation->setFactPrestAdf($oOperationPrestation->getOpAdf());
                        $oFacturesPrestation->setOpPrestQestim($oOperationPrestation->getOpPrestQestim());
                        $oFacturesPrestation->setOpPrestMestim($oOperationPrestation->getOpPrestMestim());
                        $oFacturesPrestation->setOpPrestQreel($oOperationPrestation->getOpPrestQreel());
                        $oFacturesPrestation->setOpPrestMreel($oOperationPrestation->getOpPrestMreel());
                        $oFacturesPrestation->setRRubTypeId($oOperationRubrique->getRRubTypeId());
                        $oFacturesPrestation->setRTvaTypeId($oOperationRubrique->getRTvaTypeId());
                        $oFacturesPrestation->setFactPrestTauxAdf($this->getPfdTauxAdf());
                        $oFacturesPrestation->setFactPrestTauxPartiel($this->getPfdTauxPartiel());

                        // Offered service
                        if ($oOperationPrestation->getOpPrestOff() == true) {
                            $oFacturesPrestation->setFactPrestQestimFacture(0);
                            $oFacturesPrestation->setFactPrestQuantiteFacture(0);
                            $oFacturesPrestation->setFactPrestMontantFacture(0);
                            $oFacturesPrestation->setFactPrestQestimFactureFinal(0);
                            $oFacturesPrestation->setFactPrestQuantiteFactureFinal(0);
                            $oFacturesPrestation->setFactPrestMontantFactureFinal(0);
                        } else {
                            if (! isset($aAgregatsFacture)) {
                                $aAgregatsFacture = array();

                                // Aggregating quantities, lines amounts by the operation services
                                $sAgreggationQuery = 'select op_prest_id,
												sum(fact_prest_qestim_facture_final) as fact_prest_qestim_deja_factu,
												sum(fact_prest_quantite_facture_final) as fact_prest_quantite_deja_factu,
												sum(fact_prest_montant_facture_final) as fact_prest_montant_deja_factu
											from factures join factures_rubriques on factures.fact_id=factures_rubriques.fact_id
												join factures_prestations on factures_rubriques.fact_rub_id=factures_prestations.fact_rub_id
											where op_prest_id IN ' . $sOpPrestId . ' and r_fact_type_id NOT IN (' . RFactureTypes::ADF . ',' . RFactureTypes::REMB_ADF . ')
												group by op_prest_id
										';
                                $aAggregatedData = $this->getConnection()->query($sAgreggationQuery)->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($aAggregatedData as $aRow) {
                                    $aAgregatsFacture[$aRow['op_prest_id']] = $aRow;
                                }
                            }
                            // Calculating the amounts of the service accordancing to the rules of calculating defined by the invoice type
                            switch ($oRFactureType->getRFactCalcId()) {
                                case RFactureCalculs::ESTIM:
                                    $this->_calcFacturePrestationByDiffQteEstim($oOperationRubrique, $oOperationPrestation, $oFacturesPrestation, $aAgregatsFacture);

                                    break;
                                default:
                                    // Calculations with differential between invoices
                                    // Calculation of amounts according to the calculation base
                                    switch ($oRFactureType->getRFactCalcId()) {
                                        case RFactureCalculs::REAL:
                                            $this->_calcFacturePrestationByDiffQteReel($oOperationRubrique, $oOperationPrestation, $oFacturesPrestation, $aAgregatsFacture);
                                            break;
                                        case RFactureCalculs::REMB_REAL:
                                            $this->_calcFacturePrestaRembByDiffMontantReel($oOperationRubrique, $oOperationPrestation, $oFacturesPrestation, $aAgregatsFacture);
                                            break;
                                        case RFactureCalculs::REAL_MIXT:
                                            if ($oOperationPrestation->isRemboursement()) {
                                                $this->_calcFacturePrestaRembByDiffMontantReel($oOperationRubrique, $oOperationPrestation, $oFacturesPrestation, $aAgregatsFacture);
                                            } else {
                                                $this->_calcFacturePrestationByDiffQteReel($oOperationRubrique, $oOperationPrestation, $oFacturesPrestation, $aAgregatsFacture);
                                            }
                                            break;
                                    }
                            }
                        }

                        if (isset($oFacturesPrestation)) {
                            // Computing the total excl tax per VAT rate, if service is not offered
                            if (! $oOperationPrestation->getOpPrestOff()) {
                                if (isset($aMontantTotalPrestationByTVA[$oOperationRubrique->getRTvaTypeId()])) {
                                    $aMontantTotalPrestationByTVA[$oOperationRubrique->getRTvaTypeId()]+=$oFacturesPrestation->getFactPrestMontantFactureFinal();
                                } else {
                                    $aMontantTotalPrestationByTVA[$oOperationRubrique->getRTvaTypeId()] = $oFacturesPrestation->getFactPrestMontantFactureFinal();
                                }
                            }

                            if (isset($aAgregatsFacture[$oOperationPrestation->getOpPrestId()])) {
                                $oFacturesPrestation->setFactPrestQestimDejaFacture($aAgregatsFacture[$oOperationPrestation->getOpPrestId()]['fact_prest_qestim_deja_factu']);
                                $oFacturesPrestation->setFactPrestMontantDejaFacture($aAgregatsFacture[$oOperationPrestation->getOpPrestId()]['fact_prest_montant_deja_factu']);
                            } else {
                                $oFacturesPrestation->setFactPrestQestimDejaFacture(0);
                                $oFacturesPrestation->setFactPrestMontantDejaFacture(0);
                            }

                            $oFacturesPrestation->setFactPrestOrder(count($aFacturesPrestation) + 1);
                            $aFacturesPrestation[] = $oFacturesPrestation;
                            $iRubricFinalAmount+=$oFacturesPrestation->getFactPrestMontantFactureFinal();

                            // 23223 Computing VAT and exluded taxes amounts when service id is 174
                            if ($oOperation->getPlanFacturationParams()->getPlanFacturationParamsAutoDisplayVat()
                                && in_array($oFacturesPrestation->getRPrestationId(), array(RPrestations::CONSUMERS_REQUESTS_REPAYMENT))
                                && ($fRecoverableVatAmont = (float) $aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_type_recup_coeff']) != 0
                            ) {
                                switch (trim($oFacture->getfactLang())) {
                                    case 'FRA':
                                        $sInvoiceLanguage = 'fr_FR';
                                        break;
                                    case 'ENG':
                                        $sInvoiceLanguage = 'en_GB';
                                        break;
                                    default:
                                        $sInvoiceLanguage = 'fr_FR';
                                        break;
                                }

                                $aCumputedAmounts = $oFacturesPrestation->computeServiceRecoverableVatAndExludingTaxesAmounts($fRecoverableVatAmont);

                                if (isset($aCumputedAmounts['service_recoverable_vat_amont'])) {
                                    $sVatMessage = $this->getZendTranslate($sInvoiceLanguage)->translate('Dont TVA') . ' ' . $aCumputedAmounts['service_recoverable_vat_amont'] . ' €';
                                    $sNewServiceDescription = $oFacturesPrestation->setFactPrestDescription($oFacturesPrestation->getFactPrestDescription() . PHP_EOL . $sVatMessage);
                                }
                                if (isset($aCumputedAmounts['service_exluding_taxes_amount'])) {
                                    $sExludingTaxAmontMessage = $this->getZendTranslate($sInvoiceLanguage)->translate('Dont montant HT') . ' ' . $aCumputedAmounts['service_exluding_taxes_amount'] . ' €';
                                    $sNewServiceDescription = $oFacturesPrestation->setFactPrestDescription($oFacturesPrestation->getFactPrestDescription() . PHP_EOL . $sExludingTaxAmontMessage);
                                }
                            }
                        }
                    }
                    // Adding the rubric to the invoice
                    $oFactureRubrique = $oFacture->addRubriqueFromOperation($oOperationRubrique, $iRubricFinalAmount, ($iRubricFinalAmount * $aTva[$oOperationRubrique->getRTvaTypeId()]['r_tva_coeff']));

                    // Saving services in the rubric
                    foreach ($aFacturesPrestation as $oFacturesPrestation) {
                        $oFacturesPrestation->setFactRubId($oFactureRubrique->getFactRubId());
                        $oFacturesPrestation->save();
                    }
                }
                // Calculating the total amounts of the invoice
                foreach ($aMontantTotalPrestationByTVA as $iIdTypeTVA => $iMontantHT) {
                    $iInvoiceAmountExcludingTaxes += $iMontantHT;
                    $iInvoiceAmountIncludingAllTaxes += $iMontantHT * $aTva[$iIdTypeTVA]['r_tva_coeff'];
                }
            }

            // Recovery order number
            $sOrderNumber = $this->getPfdNumCmd();

            // If not previously entered for this billing day of payement settings, we take the number entered in the client record
            if (empty($sOrderNumber)) {
                $sOrderNumber = $oOperation->getClientFactureOptions()->getClFactBdc();
            }
            $oFacture->setFactNumCmd($sOrderNumber);
            $oFacture->setFactMontantHt($iInvoiceAmountExcludingTaxes);
            $oFacture->setFactMontantTtc($iInvoiceAmountIncludingAllTaxes);

            $oFacture->save();
            // Generate invoice pdf
            Phoenix_File_Invoice_PdfGenerator::getInstance()->generateInvoicePdf($oFacture);
        }
        $this->setPfdFactId($oFacture->getFactId())->save();

        // Send notification email
        if ($bMailNotification) {
            $sRecepient = null;
            switch ($iOpActId = $oOperation->getOpActId()) {
                case RCustomActivites::TYPE_PROMO:
                    if (in_array($this->getPfdTypeFactId(), array(RFactureTypes::SOLDE_FF, RFactureTypes::SOLDE_FF_FV_AFF_REAL, RFactureTypes::SOLDE_REAL, RFactureTypes::SOLDE_REMB))) {
                        $sRecepient = $oOperation->getUserDC()->getUserMail();
                    } elseif ($oUserCp = $oOperation->getUserCP()) {
                        $sRecepient = $oUserCp->getUserMail();
                    } else {
                        $this->addValidationFailed('La facture a été générée, en revanche l\'email n\'a pas pu être envoyé, assurez vous que l\'adresse email du CP est bien renseigné');
                    }
                    break;
                case RCustomActivites::TYPE_LOG:
                    $sRecepient = $oOperation->getUserDC()->getUserMail();
                    break;
                default:
                    $this->addValidationFailed('La facture a été générée, en revanche l\'email n\'a pas pu être envoyé, aucun destinataire ne peut être défini en fonction de l\'activité de cette opération');
            }

            if ($sRecepient) {
                Phoenix_MailSender::factureNew($oFacture, $sRecepient);
            }
        }

        return $oFacture;
    }

    /**
     * Deleting a billing due date
     *
     * @param \PropelPDO $oConnection
     * @return boolean
     */
    public function delete(\PropelPDO $oConnection = null)
    {

        $oPlanFacturationDetails = PlanFacturationDetailsQuery::create()->findOneByPfdIdToCancel($this->getPfdId());
        if (isset($oPlanFacturationDetails)) {
            $this->addValidationFailed('Suppression impossible, la demande de facture ' . $oPlanFacturationDetails->getRFactureTypes()->getRFactTypeLibelle() . ' du ' . $oPlanFacturationDetails->getPfdDatePlanif('d/m/Y') . ' doit d\'abord être supprimée');
            return false;
        } elseif ($this->getPfdFactId() != null) {
            $this->addValidationFailed('Suppression impossible, une facture a été genérée pour cette échéance');
            return false;
        } else {
            parent::delete($oConnection);
            return true;
        }
    }

    public function save(\PropelPDO $oConnection = null)
    {

        if ($this->getPfdTauxAdf() == null) {
            $this->setPfdTauxAdf(100);
        }
        if ($this->getPfdTauxPartiel() == null) {
            $this->setPfdTauxPartiel(100);
        }

        //vidage des chamsp d'annulation de facture si type de facture ne coorespond pas
        if ($this->getPfdTypeFactId() != RFactureTypes::REMB_ADF) {
            $this->setPfdIdToCancel(null);
        }
        if ($this->getPfdTypeFactId() != RFactureTypes::ANNULATION) {
            $this->setPfdFactAnnul(null);
        }


        parent::save($oConnection);
    }

    /**
     *
     * @param string $sOperationDocumentsLanguage
     * @return Zend_Registry
     * @throws \LogicException
     */
    public function getZendTranslate($sOperationDocumentsLanguage)
    {
        if (! is_string($sOperationDocumentsLanguage)) {
            throw new \LogicException('Argument "$sOperationDocumentsLanguage" expects a string, "' . gettype($sOperationDocumentsLanguage) . '" defined');
        }
        if (Zend_Registry::isRegistered('Zend_Translate_For_Operation_Documents')) {
            return Zend_Registry::get('Zend_Translate_For_Operation_Documents');
        } else {
            $sStatisticsLanguagesPath = APPLICATION_PATH . '/modules/operation/languages/';
            if (! file_exists($sStatisticsLanguagesPath . $sOperationDocumentsLanguage . '/common.php')) {
                throw new \LogicException('There is no Translation file available for the "' . $sOperationDocumentsLanguage . '" language');
            }
            $oZendTranslator = new Zend_Translate('array', $sStatisticsLanguagesPath . $sOperationDocumentsLanguage . '/common.php', $sOperationDocumentsLanguage);

            if ($aLangueFile = glob($sStatisticsLanguagesPath . $sOperationDocumentsLanguage . '/*.php')) {
                foreach ($aLangueFile as $sFile) {
                    $oZendTranslator->addTranslation($sFile, $sOperationDocumentsLanguage);
                }
            }
            Zend_Registry::set('Zend_Translate_For_Operation_Documents', $oZendTranslator);
            return Zend_Registry::get('Zend_Translate_For_Operation_Documents');
        }
    }
}

// PlanFacturationDetails
