<?php

class Relances extends BaseRelances
{

    /**
     * Publishing the reminder
     *
     * @return boolean
     */
    public function edit()
    {
        if ($this->getRelStatutId() != RRelanceStatuts::CREE) {
            $this->addValidationFailed('La relance n\'a pas le statut créé');
            return false;
        }

        if ($this->isCorrectlyFilled()) {
            $this->setRelStatutId(RRelanceStatuts::EDITEE);
            $this->setRelEcheance($this->getRRelanceTypes()->makeDateEcheance());
            $this->setLastRecalculationDate('now');
            $this->save();
            return true;
        } else {
            return false;
        }
    }

    /**
     * Processing for historicalization of status change
     */
    protected function historizeReminderStatus()
    {
        $oFactureStatuts = new RelanceStatuts();
        $oFactureStatuts->setRelId($this->getRelId());
        $oFactureStatuts->setRRelStatId($this->getRelStatutId());
        $oFactureStatuts->save();
    }

    /**
     * Check that the reminder is associated with a client contact and site
     * @return bool
     */
    public function isCorrectlyFilled() : bool
    {

        if ($this->getClients()->getClCtFacturation() != null) {
            if (! $this->getClients()->getContactFacturation()->getClientSites()) {
                $this->addValidationFailed('Un site doit être rattaché au contact de facturation');
                return false;
            }
        } else {
            $this->addValidationFailed('Il manque le contact de facturation sur la fiche client');
            return false;
        }

        return true;
    }

    /**
     * Processing for creating first reminders.
     * Invoices are added to a reminders if they are edited with a due date that has been passed for 5 days and is not included in a reminders.
     * @param Phoenix_Log $oPhoenixLog
     */
    public static function makeFirstRelances($oPhoenixLog = null)
    {

        if ($oPhoenixLog) {
            $oPhoenixLog->log("************ Début de création des premieres relances ************* ", Zend_Log::INFO);
        }

        Propel::getConnection()->beginTransaction();
        try {
            $oDateNow = new DateTime(date('Y-m-d'));
            // 5 days after the due date of the invoice
            $oDateNow->sub(date_interval_create_from_date_string('5 days'));
            $sDueDate = $oDateNow->format('Y-m-d');
            // Invoice search output with due date past 5 days and not included in a dunning notice
            $aFactures = FacturesQuery::create()->filterByFactDateEcheance(array('max' => $sDueDate))
                    ->filterByFactStatusId(array(RFactureStatuts::EDITED, RFactureStatuts::ENCAISSE_PARTIEL))
                    ->filterByFactHasRelance(0)
                    ->find();
            if ($oPhoenixLog) {
                $oPhoenixLog->log(count($aFactures) . " factures trouvées", Zend_Log::INFO);
                $oPhoenixLog->log("tri des factures par client", Zend_Log::INFO);
            }
            // Sorting invoices by clients
            $aFacturesByCl = array();
            foreach ($aFactures as $oFacture) {
                $aFacturesByCl[$oFacture->getClId()][] = $oFacture;
            }
            if ($oPhoenixLog) {
                $oPhoenixLog->log(count($aFacturesByCl) . " clients", Zend_Log::INFO);
                $oPhoenixLog->log("parcours des clients", Zend_Log::INFO);
            }
            // Fetch clients
            foreach ($aFacturesByCl as $sClientId => $aFacture) {
                $oClient = ClientsQuery::create()->findPk($sClientId);
                // Verification of the balance on invoices sent back for the client
                if ($oPhoenixLog) {
                    $oPhoenixLog->log(" ---- vérification du solde sur les factures remontées pour le client : " . $oClient->getClLibelle(), Zend_Log::INFO);
                }
                $iBalance = 0;
                foreach ($aFacture as $oFacture) {
                    $iBalance+=$oFacture->getFactSolde();
                }
                if ($iBalance <= 0) {
                    if ($oPhoenixLog) {
                        $oPhoenixLog->log("le solde n'est pas positif, pas de relance à crééer");
                    }
                } else {
                    if ($oPhoenixLog) {
                        $oPhoenixLog->log("recherche de relance pour le client", Zend_Log::INFO);
                    }
                    // Find a reminder in step 1 to the status released for the client
                    $aRelance = RelancesQuery::create()->filterByRelTypeId(RRelanceTypes::PREM_RELANCE)
                            ->filterByRelStatutId(RRelanceStatuts::CREE)
                            ->filterByClId($sClientId)
                            ->find();

                    // If more than one reminder found in step 1 with the status released for the client, this is an error
                    if (count($aRelance) > 1) {
                        if ($oPhoenixLog) {
                            $oPhoenixLog->log("Plus d'une relance au stade 1 trouvée", Zend_Log::WARN);
                        }
                    } // The reminder is taken from step 1, to the existing released status for the client
                    elseif (count($aRelance) == 1) {
                        $oRelance = $aRelance[0];
                        if ($oPhoenixLog) {
                            $oPhoenixLog->log("Relance trouvée pour le client : " . $oRelance->getRelReference(), Zend_Log::INFO);
                        }
                    } // Creating a new reminder if there were no existing dunning notices for the client in step 1 with the status released.
                    else {
                        if ($oPhoenixLog) {
                            $oPhoenixLog->log("création d'une nouvelle relance", Zend_Log::INFO);
                        }
                        $oRelance = new Relances();
                        $oRelance->setClId($sClientId)
                                ->setRelTypeId(RRelanceTypes::PREM_RELANCE)
                                ->setRelStatutId(RRelanceStatuts::CREE)
                                ->save();
                    }

                    // Adding the client's invoices to the reminder
                    if ($oPhoenixLog) {
                        $oPhoenixLog->log("ajout des " . count($aFacture) . " factures à la relance " . $oRelance->getRelReference(), Zend_Log::INFO);
                    }

                    foreach ($aFacture as $oFacture) {
                        /* @var $oFacture Factures */
                        $oLnkRelanceFacture = new LnkRelanceFacture();
                        $oLnkRelanceFacture->setFactId($oFacture->getFactId())
                                ->setRelId($oRelance->getRelId())
                                ->setMontantARegler($oFacture->getFactSolde())
                                ->save();
                        $oFacture->setFactHasRelance(true)->save();
                    }

                    // New invoices have been added to the reminder that it has just been created or that it is already created, the reminder has changed so we update the field: last_recalculation_date
                    $oRelance->setLastRecalculationDate('now')->save();
                }
            }

            Propel::getConnection()->commit();
            if ($oPhoenixLog) {
                $oPhoenixLog->log("********* Création des premières relances términée ***********", Zend_Log::INFO);
            }
        } catch (Exception $oException) {
            Propel::getConnection()->rollBack();
            if ($oPhoenixLog) {
                $oPhoenixLog->log("!!!!!!!!!!!! Intéruption inatendue, rollback effectué : !!!!!!!!!!!" . PHP_EOL . $oException->getFile() . ' ' . $oException->getLine() . ' ' . $oException->getMessage() . PHP_EOL . print_r(debug_backtrace(false), true), Zend_Log::ERR);
            }
        }
    }

    /**
     * Creating reminders other than the first one
     */
    public static function makeOtherRelances($oPhoenixLog = null)
    {

        if ($oPhoenixLog) {
            $oPhoenixLog->log("************ Début de création des relances autre que la première ************* ", Zend_Log::INFO);
            $oPhoenixLog->log("sélection des relances ", Zend_Log::INFO);
        }

        // Selecting edited reminders that are first or second reminder type
        $aRelance = RelancesQuery::create()->filterByRelTypeId(array(RRelanceTypes::PREM_RELANCE, RRelanceTypes::SEC_RELANCE), Criteria::IN)
                ->useLnkRelanceFactureQuery()->filterByActif(true)->useFacturesQuery()->endUse()->endUse()
                ->filterByRelStatutId(RRelanceStatuts::EDITEE)
                ->filterByRelEcheance(array('max' => 'now'))
                ->with('LnkRelanceFacture')
                ->with('Factures')
                ->find();

        if ($oPhoenixLog) {
            $oPhoenixLog->log(count($aRelance) . " relances trouvées", Zend_Log::INFO);
        }

        Propel::getConnection()->beginTransaction();
        try {
            if ($oPhoenixLog) {
                $oPhoenixLog->log(" parcours des relances trouvées", Zend_Log::INFO);
            }
            foreach ($aRelance as $oRelance) {
                /* @var $oRelance Relances */
                if ($oPhoenixLog) {
                    $oPhoenixLog->log("---- traitement relance " . $oRelance->getRelReference(), Zend_Log::INFO);
                }

                $aLnkRelanceFactures = $oRelance->getLnkRelanceFactures();
                if ($oPhoenixLog) {
                    $oPhoenixLog->log(count($aLnkRelanceFactures) . " factures", Zend_Log::INFO);
                    $oPhoenixLog->log("vérification des factures encaissées", Zend_Log::INFO);
                }
                // Checking incoming invoices in the reminder
                $aFacturesNonEncaisse = array();
                foreach ($aLnkRelanceFactures as $oLnkRelanceFacture) {
                    $oFacture = $oLnkRelanceFacture->getFactures();
                    if ($oFacture->getFactStatusId() != RFactureStatuts::ENCAISSE) {
                        $aFacturesNonEncaisse[] = $oFacture;
                    }
                }
                if ($oPhoenixLog) {
                    $oPhoenixLog->log("nombre de factures non encaissées : " . count($aFacturesNonEncaisse), Zend_Log::INFO);
                }
                // If all invoices are collected
                if (count($aFacturesNonEncaisse) == 0) {
                    $oRelance->setRelStatutId(RRelanceStatuts::ENCAISSEE)
                            ->save();
                    if ($oPhoenixLog) {
                        $oPhoenixLog->log("la relance est encaissée", Zend_Log::INFO);
                    }
                } // If all invoices are not collected
                else {
                    $oNewRelance = $oRelance->copy();

                    // Verification of the balance on invoices sent back for the customer
                    if ($oPhoenixLog) {
                        $oPhoenixLog->log("vérification du solde sur les factures remontées pour le client : " . $oRelance->getClients()->getClLibelle(), Zend_Log::INFO);
                    }
                    $iBalance = 0;
                    foreach ($aFacturesNonEncaisse as $oFacture) {
                        $iBalance+=$oFacture->getFactSolde();
                    }

                    if ($iBalance <= 0) {
                        if ($oPhoenixLog) {
                            $oPhoenixLog->log("le solde n'est pas positif, pas de relance à crééer");
                        }
                        $oRelance->setRelStatutId(RRelanceStatuts::ENCAISSEE)->save();
                    } else {
                        $oRelance->setRelStatutId(RRelanceStatuts::ECHU)->save();
                        $oNewRelance->setRelEcheance(null);
                        $oNewRelance->setRelStatutId(RRelanceStatuts::CREE);
                        $oNewRelance->setNextStep();
                        $oNewRelance->setRelParentId($oRelance->getRelId());

                        // The dunning reminder has just been created, the last recalculation date is updated
                        $oNewRelance->setLastRecalculationDate('now');
                        $oNewRelance->save();

                        // Adding unpaid invoices to the new reminder
                        if ($oPhoenixLog) {
                            $oPhoenixLog->log("ajout des factures non réglées à la nouvelle relance", Zend_Log::INFO);
                        }
                        foreach ($aFacturesNonEncaisse as $oFacture) {
                            $oLnkRelanceFacture = new LnkRelanceFacture();
                            $oLnkRelanceFacture->setFactId($oFacture->getFactId())
                                    ->setRelId($oNewRelance->getRelId())
                                    ->setMontantARegler($oFacture->getFactSolde())
                                    ->save();
                            if ($oPhoenixLog) {
                                $oPhoenixLog->log("facture ajoutée à la relance : " . $oFacture->getFactReference(), Zend_Log::INFO);
                            }
                        }
                    }
                }
            }

            Propel::getConnection()->commit();
            if ($oPhoenixLog) {
                $oPhoenixLog->log("********* Création des relances autre que la première términée ***********", Zend_Log::INFO);
            }
        } catch (Exception $oException) {
            Propel::getConnection()->rollBack();
            if ($oPhoenixLog) {
                $oPhoenixLog->log("!!!!!!!!!!!! Intéruption inatendue, rollback effectué : !!!!!!!!!!!" . PHP_EOL . $oException->getFile() . ' ' . $oException->getLine() . ' ' . $oException->getMessage() . PHP_EOL . print_r(debug_backtrace(false), true), Zend_Log::ERR);
            }
        }
    }

    /**
     * Removal of "relance_factures" related to dunning notices created, for amounts of 0
     *
     * @param Phoenix_Log $oPhoenixLog
     */
    public static function cleanRelanceFacture($oPhoenixLog = null)
    {
        if ($oPhoenixLog) {
            $oPhoenixLog->log("************ Nettoyage des factures de relances ************* ", Zend_Log::INFO);
            $oPhoenixLog->log("sélection des factures de relances", Zend_Log::INFO);
        }
        // Selecting the invoices for reminders, the status of the reminder must be created.
        $sQuery = 'SELECT l.rel_id, fact_id FROM relances r
                   INNER JOIN lnk_relance_facture l
                   ON r.rel_id = l.rel_id
                   WHERE rel_statut_id = 1 AND (montant_a_regler = 0 OR actif = 0)';

        Propel::getConnection()->beginTransaction();
        try {
            $aRelances = Propel::getConnection()->query($sQuery)->fetchALL();

            // Creation of arrays containing the fact_id, and rel_id of invoice reminders to delete
            $aRelancesIds = array();
            $aRelancesFactIds = array();
            foreach ($aRelances as $aRelance) {
                $aRelancesFactIds[] = $aRelance['fact_id'];
                $aRelancesIds[] = $aRelance['rel_id'];
            }
            if ($oPhoenixLog) {
                $oPhoenixLog->log(count($aRelancesFactIds) . " factures de relances trouvées", Zend_Log::INFO);
            }
            if (count($aRelancesFactIds) > 0) {
                if ($oPhoenixLog) {
                    $oPhoenixLog->log("---- Supression des relance factures (" . implode(' , ', $aRelancesFactIds) . ")", Zend_Log::INFO);
                }
                // Removal of "relance_factures" whose outstanding amount is 0
                LnkRelanceFactureQuery::create()->filterByRelId($aRelancesIds)->filterByMontantARegler(0)->delete();
                // Removal of "relance_factures" whose are disable
                LnkRelanceFactureQuery::create()->filterByRelId($aRelancesIds)->filterByActif(0)->delete();

                // Updating the reminder recalculation date
                RelancesQuery::create()->filterByRelId($aRelancesIds)->update(array('LastRecalculationDate' => 'now'));
            }
            Propel::getConnection()->commit();
            if ($oPhoenixLog) {
                $oPhoenixLog->log("********* Nettoyage des factures de relances términé ***********", Zend_Log::INFO);
            }
        } catch (Exception $oException) {
            Propel::getConnection()->rollBack();
            if ($oPhoenixLog) {
                $oPhoenixLog->log("!!!!!!!!!!!! Intéruption inatendue, rollback effectué : !!!!!!!!!!!" . PHP_EOL . $oException->getFile() . ' ' . $oException->getLine() . ' ' . $oException->getMessage() . PHP_EOL . print_r(debug_backtrace(false), true), Zend_Log::ERR);
            }
        }
    }

    /**
     * Remaining reminders with the amount_a_payment is NULL (No invoices are associated with the reminder)
     *
     * @param Phoenix_Log $oPhoenixLog
     */
    public static function cleanRelances($oPhoenixLog = null)
    {
        if ($oPhoenixLog) {
            $oPhoenixLog->log("************ Nettoyage des relances ************* ", Zend_Log::INFO);
            $oPhoenixLog->log("sélection des relances ", Zend_Log::INFO);
        }
        // Selecting created dunning reminders
        $sQuery = 'SELECT rel_id, rel_reference from relances where rel_statut_id = 1
                   AND rel_id NOT IN (SELECT rel_id from lnk_relance_facture)';
        Propel::getConnection()->beginTransaction();
        try {
            $aRelances = Propel::getConnection()->query($sQuery)->fetchALL();

            // Creating an array containing rel_id of the reminder to delete
            $aRelancesIds = array();
            $aRelanceReference = array();
            foreach ($aRelances as $aRelance) {
                $aRelancesIds[] = $aRelance['rel_id'];
                $aRelanceReference[] = $aRelance['rel_reference'];
            }
            if ($oPhoenixLog) {
                $oPhoenixLog->log(count($aRelancesIds) . " relances trouvées", Zend_Log::INFO);
            }
            if (count($aRelancesIds) > 0) {
                if ($oPhoenixLog) {
                    $oPhoenixLog->log("---- Supression des relances (" . implode(' , ', $aRelanceReference) . ")", Zend_Log::INFO);
                }

                // Adjusting the deletion order for reminder data to prevent violation of the foreign key constraint
                // Deleting the history of these reminders
                RelanceStatutsQuery::create()->filterByRelId($aRelancesIds)->delete();
                // Removing reminders
                RelancesQuery::create()->filterByRelId($aRelancesIds)->delete();
            }
            Propel::getConnection()->commit();
            if ($oPhoenixLog) {
                $oPhoenixLog->log("********* Nettoyage des relances términé ***********", Zend_Log::INFO);
            }
        } catch (Exception $oException) {
            Propel::getConnection()->rollBack();
            if ($oPhoenixLog) {
                $oPhoenixLog->log("!!!!!!!!!!!! Intéruption inatendue, rollback effectué : !!!!!!!!!!!" . PHP_EOL . $oException->getFile() . ' ' . $oException->getLine() . ' ' . $oException->getMessage() . PHP_EOL . print_r(debug_backtrace(false), true), Zend_Log::ERR);
            }
        }
    }


    /**
     * Move to the next step
     */
    public function setNextStep()
    {
        switch ($this->getRelTypeId()) {
            case RRelanceTypes::PREM_RELANCE:
                $this->setRelTypeId(RRelanceTypes::SEC_RELANCE);
                break;
            case RRelanceTypes::SEC_RELANCE:
                $this->setRelTypeId(RRelanceTypes::MISE_EN_DEMEURE);
                break;
        }
    }

    /**
     * Generation of the reminder number
     *
     * @return string
     */
    public function generateReminderNumber()
    {
        $iReminderNumber = $this->getConnection()->query('
            SELECT MAX(rel_numero)
            FROM relances
            WHERE YEAR(date_create) =' . date('Y') . '
            AND month(date_create) = ' . date('m'))->fetchColumn();

        if (! isset($iReminderNumber)) {
            $iReminderNumber = 0;
        }

        return ++$iReminderNumber;
    }

    /**
     * Returns the last date of a status in the history record
     *
     * @param int $iReminderStatusId
     * @return string
     */
    public function getRelLastDateStatut($iReminderStatusId)
    {
        $oRelanceStatuts = RelanceStatutsQuery::create()->filterByRRelStatId($iReminderStatusId)
                ->filterByRelId($this->getRelId())
                ->orderBy('DateCreate', Criteria::DESC)
                ->findOne();

        if ($oRelanceStatuts != null) {
            return $oRelanceStatuts->getDateCreate();
        } else {
            return '';
        }
    }

    public function save(\PropelPDO $oConnection = null)
    {

        $aModifiedColumns = $this->getModifiedColumns();

        if ($this->isNew()) {
            // Reference generation
            $this->setRelNumero($this->generateReminderNumber());
            $this->setRelReference($this->getRRelanceTypes()->makeRelReference($this->generateReminderNumber()));
            $this->setRelLang($this->getClients()->getClientFactureOptions()->getclfactLang());
        }

        parent::save($oConnection);

        // Processing following the editing of an operation
        foreach ($aModifiedColumns as $sModifiedColumn) {
            switch ($sModifiedColumn) {
                case 'relances.rel_statut_id':
                    $this->historizeReminderStatus();
                    break;
            }
        }
    }

    /**
     * Update relance by client contact facturation adresse
     */
    public function updateAddress()
    {
        // Get client contact facturaction
        $iClCtFacturationId = ClientsQuery::create()->findPk($this->getClId())->getClCtFacturation();
        $oContact = ContactsQuery::create()->findPk($iClCtFacturationId);
        $oClientSite = $oContact->getClientSites();

        // Update relance by client contact facturation adresse
        $this->setRelCtFacturation($iClCtFacturationId);
        $this->setRelAdresse1($oClientSite->getClSiteAddr1());
        $this->setRelAdresse2($oClientSite->getClSiteAddr2());
        $this->setRelAdresse3($oClientSite->getClSiteAddr3());
        $this->setRelPays($oClientSite->getClSiteCountry());
        $this->setRelCodePostal($oClientSite->getClSiteZipcode());
        $this->setRelVille($oClientSite->getClSiteTown());
        $this->save();
    }

    /*
     * Check whether the current reminder is not associated with invoices that are already associated with a reminder whose status is edited.
     *
     * @return boolean
     */
    public function hasNoBillsInPreviouselyEditedReminders()
    {
        // Retrieve invoices from the current reminder
        $aRelanceFactures = LnkRelanceFactureQuery::create()->select('FactId')->filterByActif(1)->filterByRelId($this->getRelId())->find()->toArray();

        // Checking that recovered invoices are not in other issued reminder notices
        $iPrivouslyEditedReminders = RelancesQuery::create()
                ->select('RelId')
                ->distinct()
                ->filterByRelId($this->getRelId(), Criteria::NOT_EQUAL)
                ->filterByRelStatutId(RRelanceStatuts::EDITEE)
                ->useLnkRelanceFactureQuery()
                ->filterByFactId($aRelanceFactures)
                ->filterByActif(1)
                ->endUse()
                ->find()
                ->count();

        // If reminders are present, then it is forbidden to disedit.
        if ($iPrivouslyEditedReminders > 0) {
            $this->addValidationFailed('Au moins une des factures est contenue dans une autre relance éditée');
            return false;
        }

        return true;
    }

    /**
     * De-editing the reminder by resetting the data: output date, reminder due date, and resetting the reminder to the created status
     *
     * @return boolean
     */
    public function desedit()
    {
        if ($this->getRelStatutId() != RRelanceStatuts::EDITEE) {
            $this->addValidationFailed('la relance n\'a pas le statut éditée');
            return false;
        }

        if ($this->hasNoBillsInPreviouselyEditedReminders()) {
            // Deleting the edited status line and creating dunning status history, the save method will trigger the _historiseStatus trigger, which will add a new line for the created status.
            RelanceStatutsQuery::create()->filterByRelId($this->getRelId())->filterByRRelStatId(array(RRelanceStatuts::CREE, RRelanceStatuts::EDITEE))->delete();
            $this->setRelStatutId(RRelanceStatuts::CREE);
            $this->setRelEcheance(null);
            $this->setLastRecalculationDate('now');
            $this->save();
            return true;
        } else {
            return false;
        }
    }
}
