<?php

class Factures extends BaseFactures
{

    const FILE_ENTITY_NAME = 'factures';

    /**
     * Verifies that the invoice can be validated :
     * - The operation must be accepted or closed
     * - Previous invoices are validated or locked
     * - All services are validated.
     */
    protected function _validateChangeStatut($sNewStatus)
    {
        switch ($sNewStatus) {
            case RFactureStatuts::VALIDATED:
                // The operation must be in "accepted" or "closed" status.
                if (! in_array($this->getOperations()->getOpStatusId(), array(Operations::STATUS_ACCEPTE, Operations::STATUS_SOLDE))) {
                    $this->addValidationFailed("L'opération n'est pas acceptée/soldée");
                    return false;
                }

                // Previous invoices are validated or locked
                $iNbPreviousInvoices = FacturesQuery::create()->filterByOpId($this->getOpId())
                    ->filterByDateCreate($this->getDateCreate(), criteria::LESS_THAN)
                    ->filterByFactVerrou(false)
                    ->filterByFactStatusId(RFactureStatuts::CREATED)->count();
                if ($iNbPreviousInvoices > 0) {
                    $this->addValidationFailed("Des factures antérieures ne sont pas verrouillées ou validées");
                    return false;
                }

                // Checking the entry of estimated costs if this is the first invoice
                if ($this->isFirstFactureFromPlanFactu() && $this->hasCoutsEstimValides() == false) {
                    $this->addValidationFailed('Certains coûts estimés n\'ont pas été renseignés.');
                    return false;
                }

                if (in_array($this->getRFactTypeId(), RFactureTypes::getSoldeTypes()) && $this->hasCoutsReelsValides() == false) {
                    $this->addValidationFailed('Certains coûts réels n\'ont pas été renseignés.');
                    return false;
                }

                // Verification of purchase order entry
                if ($this->getClients()->getClientFactureOptions()->getClFactBdcRequired() && $this->getFactNumCmd()) {
                    $this->addValidationFailed("Le numéro de commande doit être renseigné");
                }

                return true;
        }
    }

    /**
     *
     * @return bool
     */
    protected function _validateVerrou() : bool
    {

        $oFactureQuery = FacturesQuery::create();
        $oTranslate = Zend_Registry::get('Zend_Translate');
        if ($this->getFactVerrou() == true) {
            $iInvoiceNumber = $oFactureQuery->filterByOpId($this->getOpId())
                ->filterByFactId($this->getFactId(), criteria::LESS_THAN)
                ->filterByFactVerrou(false)
                ->filterByFactStatusId(RFactureStatuts::CREATED)->count();
            if ($iInvoiceNumber) {
                $this->addValidationFailed($oTranslate->translate('Des factures antérieures ne sont pas verrouillées ou validées'));
                return false;
            }
        } else {
            $oFactureQuery->condition('invoice_status_not_created', 'Factures.FactStatusId != ?', RFactureStatuts::CREATED);
            $oFactureQuery->condition('invoice_status_created', 'Factures.FactStatusId = ?', RFactureStatuts::CREATED);
            $oFactureQuery->condition('locked_invoices', 'Factures.FactVerrou = ?', 1);
            $oFactureQuery->combine(array('invoice_status_created', 'locked_invoices'), Criteria::LOGICAL_AND, 'created_status_invoices_and_locked');

            $iInvoiceNumber = $oFactureQuery->filterByOpId($this->getOpId())
                ->filterByFactId($this->getFactId(), criteria::GREATER_THAN)
                ->where(array('invoice_status_not_created', 'created_status_invoices_and_locked'), Criteria::LOGICAL_OR)->findOne();

            if ($iInvoiceNumber) {
                $this->addValidationFailed($oTranslate->translate('Des factures postérieures sont verrouillées ou validées'));
                return false;
            }
        }
        return true;
    }

    /**
     * Indicates whether particular reasons are associated with an invoice
     *
     * @return bool
     */
    public function hasFactMotifs() : bool
    {
        $iFactureMotifs = LnkFactureMotifsQuery::create()->filterByFactId($this->getFactId())->count();
        return $iFactureMotifs > 0;
    }

    /**
     * Returns the labels of the reasons associated with an invoice
     *
     * @return string
     */
    public function getFactMotifsLibelle() : string
    {
        $sMotifsList = '';
        if ($this->hasFactMotifs()) {
            $aFactMotifsIds = LnkFactureMotifsQuery::create()->select('MotifId')->findByFactId($this->getFactId())->toArray();
            $aFactMotifsLibelle = RFactureMotifsQuery::create()->select('RFactMotifLibelle')->findByRFactMotifId($aFactMotifsIds)->toArray();
            if ($aFactMotifsLibelle) {
                foreach ($aFactMotifsLibelle as $sLibelle) {
                    $sMotifsList .= '' . $sLibelle . '<br/>';
                }
            }
        }
        return $sMotifsList;
    }

    /**
     * Treatments after receipt
     * => Deletion of invoices in newly created dunning notices if the invoice is completely received
     * => Updating the amount to be paid for the dunning notice if it is newly created
     */
    private function _triggerProcessEncaissement()
    {
        // Initialize the active variable
        $iActif = 1;

        // Deletion of the incoming invoice if it appears in newly created dunning notices
        if ($this->getFactHasRelance() && $this->getFactStatusId() == RFactureStatuts::ENCAISSE) {
            $iActif = 0;
        } // Case management where the invoice has been paid, the invoice must be reactivated on the dunning side.
        elseif ($this->getFactHasRelance() && $this->getFactStatusId() == RFactureStatuts::EDITED) {
            $iActif = 1;
        }
        $this->getConnection()->query('
            UPDATE lnk_relance_facture SET actif = ' . $iActif . '
			WHERE fact_id=\'' . $this->getFactId() . '\'
			AND rel_id IN (
				SELECT rel_id FROM relances
				WHERE rel_statut_id = \'' . RRelanceStatuts::CREE . '\'
            )
		');

        // Updating the amount to be paid for the dunning notice if it is newly created
        if ($this->getFactHasRelance()) {
            $this->getConnection()->query('
                UPDATE lnk_relance_facture SET montant_a_regler = \'' . $this->getFactSolde() . '\'
				WHERE fact_id = \'' . $this->getFactId() . '\'
				AND rel_id IN (
					SELECT rel_id FROM relances
					WHERE rel_statut_id = \'' . RRelanceStatuts::CREE . '\'
                )
			');

            // Retrieve all reminders associated with the invoice
            $iRelancesId = LnkRelanceFactureQuery::create()->select('RelId')->filterByFactId($this->getFactId())->find()->toArray();
            $iRelanceIdToUpdate = RelancesQuery::create()->select('RelId')->filterByRelId($iRelancesId)->orderByRelTypeId(Criteria::DESC)->findOne();
            // Update of the actual reminder to indicate that it has been changed as a result of the receipt of payment
            RelancesQuery::create()
                ->filterByRelId($iRelanceIdToUpdate)
                ->filterByRelStatutId(RRelanceStatuts::CREE)
                ->update(array('LastRecalculationDate' => 'now'));
        }
    }

    /**
     * Processing for historicalization of status change
     */
    protected function _tiggerHistoriseStatut()
    {
        $oFactureStatuts = new FactureStatuts();
        $oFactureStatuts->setFactId($this->getFactId());
        $oFactureStatuts->setRFactStatId($this->getFactStatusId());

        // If the same status is present several times in the history, the first one prevails.
        $bIsEffective = (FactureStatutsQuery::create()->filterByFactId($this->getFactId())->filterbyRFactStatId($this->getFactStatusId())
            ->filterByIsEffective(1)->count() == 0);

        $oFactureStatuts->setIsEffective($bIsEffective);
        $oFactureStatuts->save();
    }

    /**
     * Processing following status change
     */
    protected function _triggerOnStatutChange()
    {
        if ($this->getFactStatusId() == RFactureStatuts::VALIDATED) {
            if (in_array($this->getRFactTypeId(), array(RFactureTypes::ANNULATION, RFactureTypes::REMB_ADF))) {
                $oFacture = FacturesQuery::create()->findOneByFactId($this->getFactAnnulId());
                if (isset($oFacture) && $oFacture->getFactDate() < '2013-12-31 23:59:59') {
                    $this->setFactDate('2013-12-31 23:59:59');
                } else {
                    $this->setFactDate(time());
                }
            } else {
                $this->setFactDate(time());
            }
        }
    }

    /**
     * Generate invoice number
     *
     * @return string
     */
    private function _genNumfacture()
    {
        // Search for the maximum billing number of all invoices that have been validated during the same month of invoice validation.
        $sQuery = "SELECT max(fact_numero)
			FROM factures
			where SUBSTRING(fact_reference,5,2)='" . $this->getFactDate('m') . "' and SUBSTRING(fact_reference,3,2)='" . $this->getFactDate('y') . "'
			";

        $iNumero = $this->getConnection()->query($sQuery)->fetchColumn();

        if (! isset($iNumero)) {
            $iNumero = 0;
        }

        $iNumero++;

        // Invoice number incrementation
        $this->setFactNumero($iNumero);
        // Invoice reference
        $sReference = $this->getRFactureTypes()->getRFacturePresentations()->makeReferenceFacture($iNumero, $this);

        $this->setFactReference($sReference);
    }

    /**
     * Back up request number entered in invoice
     */
    private function _backUpNumCmd()
    {
        $sQuery = 'UPDATE plan_facturation_details
            SET pfd_num_cmd=\'' . $this->getFactNumCmd() . '\'
            WHERE pfd_fact_id=\'' . $this->getFactId() . '\'
        ';

        $this->getConnection()->exec($sQuery);
    }

    /**
     * @param OperationRubriques $oOperationRubrique
     * @param float $fAmountHT
     * @param float $fAmountTTC
     * @param bool $bSave
     * @return \FacturesRubriques
     */
    public function addRubriqueFromOperation(OperationRubriques $oOperationRubrique, $fAmountHT, $fAmountTTC, $bSave = true)
    {
        $iRubriqueOrder = FacturesRubriquesQuery::create()->filterByFactId($this->getFactId())->count();
        $iRubriqueOrder++;

        $oFacturesRubrique = new FacturesRubriques();
        $oFacturesRubrique->setFactRubOrder($iRubriqueOrder);
        $oFacturesRubrique->setFactId($this->getFactId());
        $oFacturesRubrique->setOpRubriqueId($oOperationRubrique->getOpRubriqueId());
        $oFacturesRubrique->setRRubriqueId($oOperationRubrique->getOpRRubriqueId());
        $oFacturesRubrique->setFactRubLibelle($oOperationRubrique->getOpRubriqueLibelleTranslated());
        $oFacturesRubrique->setRRubTypeId($oOperationRubrique->getRRubTypeId());
        $oFacturesRubrique->setRTvaTypeId($oOperationRubrique->getRTvaTypeId());
        $oFacturesRubrique->setFactRubMontantHt($fAmountHT);
        $oFacturesRubrique->setFactRubMontantTtc($fAmountTTC);

        if ($bSave) {
            $oFacturesRubrique->save();
        }

        return $oFacturesRubrique;
    }

    /**
     * Cancel invoice de facture
     *
     * @param int $iFactTypeId : required to know what ot create, refund or credit note
     * @return Factures
     */
    public function genCanceled($iFactTypeId) : Factures
    {

        $oAvoir = $this->copy(false);
        // Need to save the invoice at this level in order to integrate the invoice id into the services.
        $oAvoir->setRFactTypeId(RFactureTypes::ANNULATION);
        $oAvoir->setFactMontantHt(-$this->getFactMontantHt());
        $oAvoir->setFactMontantTtc(-$this->getFactMontantTtc());
        $oAvoir->setRFactTypeId($iFactTypeId);
        $oAvoir->setFactAnnulId($this->getFactId());
        $oAvoir->setFactStatusId(RFactureStatuts::CREATED);
        $oAvoir->setFactDateEcheance(null);

        $oAvoir->setFactNumero(null);

        $oAvoir->setFactMontantEncaisse(null);
        $oAvoir->setJdvId(null);
        $oAvoir->setFactHasRelance(0);
        $oAvoir->setFactDate(null);
        $oAvoir->save();

        // If not entered beforehand for this billing due date, take the number entered in the customer master record.
        if (! empty($iRequestNumber)) {
            $this->setFactNumCmd($iRequestNumber);
        }
        foreach ($this->getFacturesRubriquess() as $oFacturesRubrique) {
            $oAvoirRubrique = $oFacturesRubrique->copy();
            $oAvoirRubrique->setFactRubMontantHt(-$oFacturesRubrique->getFactRubMontantHt());
            $oAvoirRubrique->setFactRubMontantTtc(-$oFacturesRubrique->getFactRubMontantTtc());

            foreach ($oFacturesRubrique->getFacturesPrestationss() as $oFacturesPrestation) {
                $oAvoirPrestation = $oFacturesPrestation->copy();
                $oAvoirPrestation->setFactPrestQestimFacture(-$oFacturesPrestation->getFactPrestQestimFacture());
                $oAvoirPrestation->setFactPrestQuantiteFacture(-$oFacturesPrestation->getFactPrestQuantiteFacture());
                $oAvoirPrestation->setFactPrestMontantFacture(-$oFacturesPrestation->getFactPrestMontantFacture());
                $oAvoirPrestation->setFactPrestQestimFactureFinal(-$oFacturesPrestation->getFactPrestQestimFactureFinal());
                $oAvoirPrestation->setFactPrestQuantiteFactureFinal(-$oFacturesPrestation->getFactPrestQuantiteFactureFinal());
                $oAvoirPrestation->setFactPrestMontantFactureFinal(-$oFacturesPrestation->getFactPrestMontantFactureFinal());

                $oAvoirRubrique->addFacturesPrestations($oAvoirPrestation);
            }
            $oAvoir->addFacturesRubriques($oAvoirRubrique);
        }

        $oAvoir->save();
        return $oAvoir;
    }

    /**
     * First invoice in the invoicing plan ?
     *
     * @return bool
     */
    public function isFirstFactureFromPlanFactu() : bool
    {
        $sQuery = '
            SELECT fact_id 
            FROM factures 
            WHERE op_id = "' . $this->getOpId() . '"
            ORDER BY date_create ASC, fact_id ASC LIMIT 1
        ';
        return $this->getFactId() == $this->getConnection()->query($sQuery)->fetchColumn();
    }

    /**
     * Estimated costs completed ?
     *
     * @return bool
     */
    public function hasCoutsEstimValides() : bool
    {
        $sQuery = '
            SELECT COUNT(*)
            FROM operation_prestations
            WHERE (op_id = "' . $this->getOpId() . '") 
            AND (
                op_prest_ciestim IS NULL 
                AND op_prest_ceestim IS NULL
            )
        ';
        return ! ($this->getConnection()->query($sQuery)->fetchColumn() > 0);
    }

    /**
     * Actual costs reported ?
     *
     * @return bool
     */
    public function hasCoutsReelsValides() : bool
    {
        $sQuery = '
            SELECT COUNT(*)
            FROM operation_prestations
            WHERE (op_id = "' . $this->getOpId() . '") 
            AND op_prest_couts_valides = 0
        ';

        return ! ($this->getConnection()->query($sQuery)->fetchColumn() > 0);
    }

    /**
     * Returns the balance of the invoice
     *
     * @return float
     */
    public function getFactSolde()
    {
        return $this->getFactMontantTtc() - $this->getFactMontantEncaisse();
    }

    /**
     * Total excluding tax, subject to VAT
     *
     * @return float
     */
    public function getAmountExcludingVatSubjectToVat()
    {

        $aRubriques = FacturesRubriquesQuery::create()->filterByFactId($this->getFactId())->useRTvaTypeQuery()->filterByRTvaStatut('tva')->endUse()->find();

        $fAmount = 0;
        foreach ($aRubriques as $oFacturesRubrique) {
            $fAmount += $oFacturesRubrique->getFactRubMontantHt();
        }
        return $fAmount;
    }

    /**
     * @return float
     */
    public function getFactMontantTtcNonAdf()
    {
        return FacturesPrestationsQuery::create()->filterByFactPrestAdf(0)
            ->useFacturesRubriquesQuery()->filterByFactId($this->getFactId())->useRTvaTypeQuery()->endUse()->endUse()
            ->withColumn('sum(fact_prest_montant_facture_final*r_tva_coeff)', 'montant')
            ->select(array('montant'))
            ->findOne();
    }

    /**
     * @return float
     */
    public function getFactMontantTvaNonAdf()
    {
        return FacturesPrestationsQuery::create()->filterByFactPrestAdf(0)
            ->useFacturesRubriquesQuery()->filterByFactId($this->getFactId())->useRTvaTypeQuery()
            ->endUse()->endUse()
            ->withColumn('sum(fact_prest_montant_facture_final*r_tva_taux)/100', 'montant')
            ->select(array('montant'))
            ->findOne();
    }

    /**
     * @return float
     */
    public function getFactMontantHtNonAdf()
    {
        return FacturesPrestationsQuery::create()->filterByFactPrestAdf(0)
            ->useFacturesRubriquesQuery()->filterByFactId($this->getFactId())
            ->endUse()
            ->withColumn('sum(fact_prest_montant_facture_final)', 'montant')
            ->select(array('montant'))
            ->findOne();
    }

    /**
     * @return float
     */
    public function getFactMontantHtAdf()
    {
        return FacturesPrestationsQuery::create()->filterByFactPrestAdf(1)
            ->useFacturesRubriquesQuery()->filterByFactId($this->getFactId())
            ->endUse()
            ->withColumn('sum(fact_prest_montant_facture_final)', 'montant')
            ->select(array('montant'))
            ->findOne();
    }


    /**
     * @return float
     */
    public function getFactMontantHtSansFraisPostaux()
    {

        $fAmount = 0;
        foreach ($this->getFacturesRubriquess() as $oFacturesRubrique) {
            if (! in_array($oFacturesRubrique->getRRubriqueId(), array(RRubriques::RUB_POSTAL_CHARGES_NO_VAT))) {
                $fAmount += $oFacturesRubrique->getFactRubMontantHt();
            }
        }
        return $fAmount;
    }

    /**
     * @return float
     */
    public function getFactMontantTtcSansFraisPostaux()
    {
        $fAmount = 0;
        foreach ($this->getFacturesRubriquess() as $oFacturesRubrique) {
            if (! in_array($oFacturesRubrique->getRRubriqueId(), array(RRubriques::RUB_POSTAL_CHARGES_NO_VAT))) {
                $fAmount += $oFacturesRubrique->getFactRubMontantTTC();
            }
        }
        return $fAmount;
    }

    /**
     * @param string $sLang
     * @return array
     */
    public function getFactMontantsByTva(string $sLang = null) : array
    {
        $aTva = RTvaTypeQuery::create()->find()->toArray('RTvaId', false, BasePeer::TYPE_FIELDNAME);
        $aVtaAmounts = array();
        $sTvaLibelle = (trim($sLang) == RLanguages::LANG_ENG) ? 'r_tva_libelle_fact_synthese_en' : 'r_tva_libelle_fact_synthese';
        foreach ($this->getFacturesRubriquess() as $oFacturesRubrique) {
            if (! isset($aVtaAmounts[$aTva[$oFacturesRubrique->getRTvaTypeId()][$sTvaLibelle]])) {
                $aVtaAmounts[$aTva[$oFacturesRubrique->getRTvaTypeId()][$sTvaLibelle]] = 0;
            }

            $aVtaAmounts[$aTva[$oFacturesRubrique->getRTvaTypeId()][$sTvaLibelle]] += $oFacturesRubrique->getFactRubMontantHt() * $aTva[$oFacturesRubrique->getRTvaTypeId()]['r_tva_taux'] / 100;
        }
        return $this->sortMontantForTva($aVtaAmounts);
    }

    /**
     * Sort amount For VAT
     *
     * @param array $aMontantForTva
     * @return array
     */
    public function sortMontantForTva(array $aMontantForTva) : array
    {
        $aSortedMontantForTva = array();
        $aVtaAmounts = array();
        foreach ($aMontantForTva as $sKey => $fAmount) {
            if (strpos(strtolower($sKey), '%') === false) {
                $aSortedMontantForTva[$sKey] = $fAmount;
            } else {
                $aVtaAmounts[$sKey] = $fAmount;
            }
        }
        return array_merge($aSortedMontantForTva, $aVtaAmounts);
    }

    public function getFactMontantsByTvaSansFraisPostaux()
    {
        $aTva = RTvaTypeQuery::create()->find()->toArray('RTvaId', false, BasePeer::TYPE_FIELDNAME);
        $aVtaAmounts = array();
        foreach ($this->getFacturesRubriquess() as $oFacturesRubrique) {
            if (! in_array($oFacturesRubrique->getRRubriqueId(), array(RRubriques::RUB_POSTAL_CHARGES_NO_VAT))) {
                if (! isset($aVtaAmounts[$aTva[$oFacturesRubrique->getRTvaTypeId()]['r_tva_libelle']])) {
                    $aVtaAmounts[$aTva[$oFacturesRubrique->getRTvaTypeId()]['r_tva_libelle']] = 0;
                }
                $aVtaAmounts[$aTva[$oFacturesRubrique->getRTvaTypeId()]['r_tva_libelle']] += $oFacturesRubrique->getFactRubMontantHt() * $aTva[$oFacturesRubrique->getRTvaTypeId()]['r_tva_taux'] / 100;
            }
        }
        return $aVtaAmounts;
    }

    public function getFactTotalFraisFixesSansFraisPostaux()
    {
        $fAmount = 0;
        foreach ($this->getFacturesRubriquess() as $oFacturesRubrique) {
            if ($oFacturesRubrique->getRRubTypeId() == RRubriquesType::FF && ! in_array($oFacturesRubrique->getRRubriqueId(), array(RRubriques::RUB_POSTAL_CHARGES_NO_VAT))) {
                $fAmount += $oFacturesRubrique->getFactRubMontantHt();
            }
        }
        return $fAmount;
    }

    public function getFactTotalFraisVariablesSansFraisPostaux()
    {
        $fAmount = 0;
        foreach ($this->getFacturesRubriquess() as $oFacturesRubrique) {
            if ($oFacturesRubrique->getRRubTypeId() == RRubriquesType::FV && ! in_array($oFacturesRubrique->getRRubriqueId(), array(RRubriques::RUB_POSTAL_CHARGES_NO_VAT))) {
                $fAmount += $oFacturesRubrique->getFactRubMontantHt();
            }
        }
        return $fAmount;
    }

    /**
     * Returns the date of transition to a particular status
     *
     * @param string $sStatus
     * @return string format sql server
     */
    public function getFactDateStatutEffective($sStatus)
    {
        $sQuery = "select date_create
                from View_Facture_Status
                where fact_id='" . $this->getFactId() . "' and r_fact_stat_id='" . $sStatus . "'
            ";
        return $this->getConnection()->query($sQuery)->fetchColumn() ? : '';
    }

    /**
     * Sets the billing due date
     * Fund raising are automatically defined to "A_RECEPTION"
     * @param int $iInvoiceDueDateId
     */
    public function setFactEcheanceId($iInvoiceDueDateId)
    {
        if ($this->getRFactTypeId() == RFactureTypes::ADF) {
            $iInvoiceDueDateId = RFactureOptionsEcheances::A_RECEPTION;
        }

        parent::setFactEcheanceId($iInvoiceDueDateId);
    }

    /**
     * Credit of the amount collected from the invoice
     * If no amount has been entered, the credit of the remaining amount must have the status output, the invoice can be cashed.
     *
     * @param float $fAmount
     * @param bool $bForceStatusEncaisse : the invoice changes to cashed status
     * @return bool
     */
    public function creditMontantEncaisse($fAmount, $bForceStatusEncaisse)
    {
        if (! in_array($this->getFactStatusId(), array(RFactureStatuts::EDITED, RFactureStatuts::ENCAISSE_PARTIEL))) {
            $this->addValidationFailed("La facture n'a pas été éditée");
            return false;
        }

        // If no amount is entered, credit of the remaining amount
        if (empty($fAmount)) {
            $fAmount = $this->getFactSolde();
        }

        // Amount credit
        $fAmount = str_replace(',', '.', $fAmount);
        $fAmount = str_replace(' ', '', $fAmount);
        $fAmount = (float) $fAmount;
        if (is_float($fAmount)) {
            $this->setFactMontantEncaisse($this->getFactMontantEncaisse() + $fAmount);

            // Change the status of the invoice
            if ($this->getFactMontantEncaisse() >= $this->getFactMontantTtc()) {
                $this->setFactStatusId(RFactureStatuts::ENCAISSE);
            } elseif ($bForceStatusEncaisse) {
                // Tthe invoice is cashed if forced
                $this->setFactStatusId(RFactureStatuts::ENCAISSE);
            } else {
                $this->setFactStatusId(RFactureStatuts::ENCAISSE_PARTIEL);
            }
        } else {
            $this->addValidationFailed('Le montant saisi doit être un nombre');
            return false;
        }
    }

    /**
     * Invoice disbursement
     *
     * @return bool
     */
    public function decaisse() : bool
    {
        if (in_array($this->getFactStatusId(), array(RFactureStatuts::ENCAISSE, RFactureStatuts::ENCAISSE_PARTIEL))) {
            $this->setFactMontantEncaisse(0);
            $this->setFactStatusId(RFactureStatuts::EDITED);
            $this->save();
            // Deactivation of output date
            FactureStatutsQuery::create()
                ->filterByFactId($this->getFactId())
                ->filterByRFactStatId(array(RFactureStatuts::ENCAISSE, RFactureStatuts::ENCAISSE_PARTIEL))
                ->update(array('IsEffective' => 0));

            return true;
        }
        $this->addValidationFailed('La facture doit être encaissée');
        return false;
    }

    /**
     * Edit and save Invoice
     *
     * @return bool
     */
    public function edit(bool $bIsReedition = false) : bool
    {
        if ($this->getRFactureOptionsEcheances() == null) {
            $this->addValidationFailed('La date d\'échéance est manquante pour le client ' . $this->getClients()->getClLibelle());
            return false;
        }
        
        if (in_array($this->getFactStatusId(), array(RFactureStatuts::VALIDATED))) {
            $this->setFactStatusId(RFactureStatuts::EDITED);

            // Definition of the billing due date
            $oDueDate = $this->getRFactureOptionsEcheances()->makeDateEcheance($this->getFactDate('Y-m-d'));
            $this->setFactDateEcheance($oDueDate);
            $this->_genNumfacture();
            // Save the sales manager on the invoice
            $this->setDcId($this->getOperations()->getOpDcId());

            // Save the user who edit this invoice
            if ($oAuthenticatedUser = Phoenix_Auth_User::getInstance()->getUserId()) {
                $this->setFactUserEdition($oAuthenticatedUser);
            }

            $this->save();
            return true;
        }
        
        $this->addValidationFailed('La facture n\'est pas validée');
        return false;
    }

    /**
     * Validation of the invoice
     * @return bool
     */
    public function valide() : bool
    {
        if ($this->getFactStatusId() == RFactureStatuts::CREATED) {
            $this->setFactStatusId(RFactureStatuts::VALIDATED)->save();
            return true;
        }
        $this->addValidationFailed('La facture doit être en création pour être validée');
        return false;
    }

    /**
     * Unvalidation of the invoice
     * @return bool
     */
    public function unvalide() : bool
    {
        if ($this->getFactStatusId() == RFactureStatuts::VALIDATED) {
            $this->setFactStatusId(RFactureStatuts::CREATED)
                ->setFactDate(null)
                ->save();
            return true;
        }
        $this->addValidationFailed('La facture doit être validée pour être dévalidée');
        return false;
    }

    /**
     * Physical deletion of the invoice
     * It must be newly created and last in the invoicing plan
     * so as not to break the integrity of the differential calculation on amounts and volumes from one invoice to another.
     * @param \PropelPDO $oConnection
     * @param bool $bCheckDelete : check if the invoic can be deleted
     * @return bool
     */
    public function delete(\PropelPDO $oConnection = null, $bCheckDelete = true) : bool
    {
        if ($bCheckDelete) {
            $iMaxFactId = $this->getConnection()->query('SELECT MAX(fact_id) FROM factures WHERE op_id="' . $this->getOpId() . '"')->fetchColumn();

            if ($iMaxFactId != $this->getFactId()) {
                $this->addValidationFailed("La facture ne peut être supprimée, elle n'est pas en dernière position dans le plan de facturation");
                return false;
            }
        }
        if ($this->getFactStatusId() != RFactureStatuts::CREATED) {
            $this->addValidationFailed("La facture ne peut être supprimée, elle a été validée");
            return false;
        }

        // Delete the status history from the invoice
        FactureStatutsQuery::create()->filterByFactId($this->getFactId())->delete();

        // Retrieving invoice section IDs
        $oFactrubriqueQueryObject = FacturesRubriquesQuery::create();
        $aFacturesRubriquesIds = $oFactrubriqueQueryObject->select('FactRubId')->filterByFactId($this->getFactId())->find()->toArray();

        // Delete services associated with the invoice
        FacturesPrestationsQuery::create()->filterByFactRubId($aFacturesRubriquesIds)->delete();

        // Delete sections associated with the invoice
        $oFactrubriqueQueryObject->filterByFactId($this->getFactId())->delete();

        // Reset PfdFactId of the billing plan from which the invoice was generated
        PlanFacturationDetailsQuery::create()->filterByPfdFactId($this->getFactId())->update(array('PfdFactId' => null));

        // Reset the fact_annul_id on invoices associated with the invoice to be deleted
        FacturesQuery::create()->filterByFactAnnulId($this->getFactId())->update(array('FactAnnulId' => null));

        LnkFactureMotifsQuery::create()->filterByFactId($this->getFactId())->delete();

        parent::delete($oConnection);

        return true;
    }

    /**
     * Retrieves the sales manager to use on the PDF invoice
     * If the invoice is in status created or released, then the sales manager will be retrieved from the transaction.
     * Otherwise, it will be recovered from the invoice.
     * @return Users
     */
    public function getFactureCommercialDirector()
    {
        $iDcId = 0;
        if (! in_array($this->getFactStatusId(), array(RFactureStatuts::CREATED, RFactureStatuts::VALIDATED))) {
            $iDcId = $this->getDcId();
        } else {
            $iDcId = $this->getOperations()->getOpDcId();
        }

        return UsersQuery::create()->findPk($iDcId);
    }

    /**
     * Historise bill
     */
    public function historiseBill()
    {
        $aFacture = $this->toArray();

        $oFactureHistory = new FactureEditionHistory();
        // Data recovery from initial invoice before republication
        $oFactureHistory->fromArray($aFacture, BasePeer::TYPE_PHPNAME);

        $oFactureHistory->setReeditionDate('now');
        $oFactureHistory->setFactEhUserId(Phoenix_Auth_User::getInstance()->getUserId());

        // Explicit recording of fact_date_create and fact_date_modify fields
        $oFactureHistory->setFactDateCreate($aFacture['DateCreate']);
        $oFactureHistory->setFactDateModify($aFacture['DateModify']);

        $oFactureHistory->setFactUserId($aFacture['UserId']);
        $oFactureHistory->setFactUserModify($aFacture['UserModify']);
        $oFactureHistory->save();
    }

    /**
     * @return bool
     */
    public function isInvoiceValidForReedition() : bool
    {
        return ! in_array($this->getFactStatusId(), array(RFactureStatuts::CREATED, RFactureStatuts::VALIDATED));
    }

    public function preValidate()
    {
        parent::preValidate();

        $aModifiedColumns = $this->getModifiedColumns();

        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                case 'factures.fact_status_id':
                    $this->_validateChangeStatut($this->getFactStatusId());
                    break;
                case 'factures.fact_verrou':
                    $this->_validateVerrou();
                    break;
            }
        }
    }

    /**
     * @param \PropelPDO $oConnection
     */
    public function preSave(\PropelPDO $oConnection = null)
    {
        parent::preSave($oConnection);
        $aModifiedColumns = $this->getModifiedColumns();

        // traitements consécutifs à l'édition d'une opération
        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                case 'factures.fact_status_id':
                    $this->_triggerOnStatutChange();
                    break;
            }
        }

        return true;
    }

    /**
     * @param \PropelPDO $oConnection
     */
    public function save(\PropelPDO $oConnection = null)
    {
        if ($bIsNew = $this->isNew()) {
            // génération d'une référence unique temporaire àla création de la facture
            $this->setFactReference('FPF' . microtime(true));
        }

        $aModifiedColumns = $this->getModifiedColumns();

        $iReturn = parent::save($oConnection);

        // traitements consécutifs à l'édition d'une opération
        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                case 'factures.fact_status_id':
                    $this->_tiggerHistoriseStatut();
                    break;
                case 'factures.fact_montant_encaisse':
                    // traitment pour encaissment:
                    $this->_triggerProcessEncaissement();
                    break;
                case 'factures.fact_num_cmd':
                    // traitment pour encaissment:
                    $this->_backUpNumCmd();
                    break;
            }
        }

        $bIsStatusCreated = $this->getFactStatusId() == RFactureStatuts::CREATED;
        if ($bIsStatusCreated) {
            $sNewReference = 'Facture pro forma ' . $this->getFactId();
            $this->getConnection()->query('
                UPDATE factures
                SET fact_reference = "' . $sNewReference . '"
                WHERE fact_id = "' . $this->getFactId() . '"
            ');

            $this->setFactReference($sNewReference);
        }

        return $iReturn;
    }

    /**
     * Retrieve invoice service signature
     *
     * @return string
     */
    public function getInvoiceServiceSignature() : string
    {
        $oZendView = clone Zend_Controller_Front::getInstance()->getParam('bootstrap')->getPluginResource('view')->getView();
        $oZendView->assign('invoice_service_name', 'Service Facturation ' . Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_COMPANY_NAME));
        $oZendView->assign('invoice_service_mail', Settings::getSettingValueBySettingKey(Settings::SETTING_KEY_EMAIL_INVOICING_DEPARTMENT));
        $oZendView->setScriptPath(APPLICATION_PATH . '/views/scripts/emails/');
        $sSignature = $oZendView->render('invoice_service_signature.phtml');

        return $sSignature;
    }

    /**
     * @return bool
     */
    public function areInvoicingContactsActive() : bool
    {
        // Retrieve operation
        $oOperation = $this->getOperations();

        // Check invoicing contact
        if (($oContact = $oOperation->getContactFacturation()) && ! $oContact->getActif()) {
            return false;
        }
        
        // Check invoicing address contact
        if (($oContact = $oOperation->getInvoicingAddressContact()) && ! $oContact->getActif()) {
            return false;
        }

        return true;
    }

    /**
     * @return \Files
     * @throws \LogicException
     */
    public function getInvoiceFileLastVersion() : Files
    {
        $oInvoiceFile = FilesQuery::create()->findLastVersionByCategoryAndEntity(RFileCategories::FACTURE, self::FILE_ENTITY_NAME, $this->getFactId());
        if ($oInvoiceFile) {
            return $oInvoiceFile;
        }
        throw new \LogicException('Invoice has no file for category "' . RFileCategories::FACTURE . '", entity name "' . self::FILE_ENTITY_NAME . '", entity id "' . $this->getFactId() . '"');
    }

    /**
     * @param string $sExtension
     * @return string
     */
    public function getInvoiceFileName(string $sExtension) : string
    {
        $sReference = preg_replace('/_+/', '_', preg_replace('/[^A-Za-z0-9]/', '_', $this->getFactReference()));
        return $this->getOperations()->getOpNumber() . '_' . $sReference . '_invoice_' . date('Y-m-d_H-i-s') . '_' . uniqid() . '.' . $sExtension;
    }

    /**
     * @param string $sExtension
     * @return string
     */
    public function getInvoiceDisplayFileName(string $sExtension = null) : string
    {
        $bIsProForma = in_array($this->getFactStatusId(), array(RFactureStatuts::CREATED, RFactureStatuts::VALIDATED));

        if (Phoenix_Auth_User::getInstance()->isAllowed(AclFonctionnalites::INVOICE_DISPLAY_OPERATION_DATA)) {
            $sTranslation = $this->getZendTranslate()->translate($bIsProForma ? 'invoice_display_file_name_pro_forma' : 'invoice_display_file_name');
            $sFilename = sprintf(
                $sTranslation,
                $this->getFactReference(),
                $this->getClients()->getClLibelle(),
                $this->getOperations()->getOpNumber(),
                $this->getOperations()->getOpLibelle()
            );
        } else {
            $sTranslation = $this->getZendTranslate()->translate($bIsProForma ? 'invoice_display_file_name_pro_forma_without_operation_data' : 'invoice_display_file_name_without_operation_data');
            $sFilename = sprintf(
                $sTranslation,
                $this->getFactReference(),
                $this->getClients()->getClLibelle()
            );
        }

        return $sExtension ? $sFilename . '.' . $sExtension : $sFilename;
    }

    /**
     * Saves a version of the invoice
     *
     * @param string $sFileName
     * @param bool $bIsAcceptedVersion
     * @return Files
     * @throws \LogicException
     */
    public function addInvoiceFile(string $sFileName, bool $bIsAcceptedVersion = false) : Files
    {
        $oFile = new Files();
        $oFile->setFileCategoryId(RFileCategories::FACTURE);
        $oFile->setFileEntityName(self::FILE_ENTITY_NAME);
        $oFile->setFileEntityId($this->getFactId());

        $oFile->setFileName($sFileName);

        // Indicating if the quote is generated at operation acceptation
        $oFile->setFileIsAcceptedVersion($bIsAcceptedVersion);

        if ($oFile->validate()) {
            $oFile->save();
            return $oFile;
        }
        $aErrors = array();
        foreach ($oFile->getValidationFailures() as $sFieldname => $aErrorsField) {
            if (is_array($aErrorsField)) {
                foreach ($aErrorsField as $oError) {
                    $aErrors[] = $oError->getMessage();
                }
            } else {
                $aErrors[] = $aErrorsField->getMessage();
            }
        }
        throw new \LogicException('Error occured while saving new file : ' . join('; ', $aErrors));
    }


    /**
     * @return boolean
     */
    public function hasNonEditedPredecessorInvoices() : bool
    {
        return (bool) FacturesQuery::create()
            ->filterByOpId($this->getOpId())
            ->filterByFactId($this->getFactId(), Criteria::NOT_EQUAL)
            ->filterByFactStatusId(array(RFactureStatuts::CREATED, RFactureStatuts::VALIDATED))
            ->filterByFactId($this->getFactId(), criteria::LESS_THAN)
            ->count();
    }

    /**
     * Get Zend Translate
     *
     * @return \Zend_Registry
     * @throws \LogicExcpetion
     */
    public function getZendTranslate()
    {
        if (Zend_Registry::isRegistered('Zend_Translate')) {
            return Zend_Registry::get('Zend_Translate');
        }

        throw new \LogicException('Zend Translate object is undefined');
    }

}
